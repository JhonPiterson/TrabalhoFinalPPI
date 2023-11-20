<?php
$servername = "sql109.infinityfree.com";
$username = "if0_34787830";
$password = "bhjVt2NxBKselw";
$dbname = "if0_34787830_alimentandoEsperancasPPI";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $idUsuario = $_SESSION['idUsuario']; // PEGAR NOME DO USUARIO RESPONSAVEL E SUBSTITUIR EM BAIXO NA QUERY

    $sql = "SELECT * FROM locais_doacao";// WHERE responsavel = 'Jose Carlos Silveira'"; // <- AQUI
    $result = $conn->query($sql);

    $locais = $result->fetchAll(PDO::FETCH_ASSOC);
    foreach ($locais as &$row) {
        if (isset($row['imagem']) && !empty($row['imagem'])) {
            $row['imagem'] = 'fotos/' . $row['imagem'];
        }
    }

    // Retorna os dados como JSON
    header('Content-Type: application/json');
    echo json_encode($locais);
} catch (PDOException $e) {
    die("Erro na consulta: " . $e->getMessage());
} finally {
    $conn = null;
}
?>
