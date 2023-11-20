<?php
if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $idusuario = $_GET['idusuario'];

    if (!is_numeric($idusuario)) {
        header('HTTP/1.1 400 Bad Request');
        echo json_encode(['error' => 'ID selecionada não é um número válido']);
        exit;
    }

    $servername = "sql109.infinityfree.com";
    $username = "if0_34787830";
    $password = "bhjVt2NxBKselw";
    $dbname = "if0_34787830_alimentandoEsperancasPPI";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "DELETE FROM usuario WHERE idusuario = :idusuario";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':idusuario', $idusuario, PDO::PARAM_INT);

        if ($stmt->execute()) {
            echo json_encode('Usuário excluído com sucesso', JSON_UNESCAPED_UNICODE);
        } else {
            header('HTTP/1.1 500 Internal Server Error');
            echo json_encode(['error' => 'Erro ao excluir usuário']);
        }
    } catch (PDOException $e) {
        header('HTTP/1.1 500 Internal Server Error');
        echo json_encode(['error' => 'Erro na conexão com o banco de dados: ' . $e->getMessage()]);
    } finally {
        $conn = null;
    }
} else {
    header('HTTP/1.1 405 Method Not Allowed');
    echo json_encode(['error' => 'Método não permitido']);
}
?>
