<?php
$servername = "sql109.infinityfree.com";
$username = "if0_34787830";
$password = "bhjVt2NxBKselw";
$dbname = "if0_34787830_alimentandoEsperancasPPI";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT idusuario, nome FROM usuario";
    $stmt = $conn->prepare($sql);
    
    $stmt->execute();

    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    header('Content-Type: application/json');
    echo json_encode($rows);

} catch (PDOException $e) {
    die("Erro na consulta: " . $e->getMessage());
} finally {
    $conn = null;
}
?>
