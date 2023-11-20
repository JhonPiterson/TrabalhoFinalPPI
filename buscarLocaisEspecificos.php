<?php
$servername = "sql109.infinityfree.com";
$username = "if0_34787830";
$password = "bhjVt2NxBKselw";
$dbname = "if0_34787830_alimentandoEsperancasPPI";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $localId = $_GET['id'];

    $sql = "SELECT * FROM locais_doacao WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $localId, PDO::PARAM_INT);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        if (isset($row['imagem'])) {
            $row['imagem'] = 'fotos/' . $row['imagem'];
        }

        echo json_encode($row);
    } else {
        header('HTTP/1.1 404 Not Found');
        echo json_encode(['error' => 'Local não encontrado']);
    }
} catch (PDOException $e) {
    header('HTTP/1.1 500 Internal Server Error');
    echo json_encode(['error' => 'Erro na conexão com o banco de dados: ' . $e->getMessage()]);
} finally {
    // Fecha a conexão com o banco de dados
    $conn = null;
}
?>