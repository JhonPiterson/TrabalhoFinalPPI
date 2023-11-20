<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alimentandoesperancas";

try {
    $PDO = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $idusuario = $_SESSION['idUsuario'];
    $nome = $_POST['nomeLocal'];
    $dataInicio = $_POST['dataInicio'];
    $dataFinal = $_POST['dataFinal'];
    $responsavel = $_POST['name'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'] . ', ' . $_POST['numero'] . ', ' . $_POST['bairro'] . ', ' . $_POST['cidade'] . ', ' . $_POST['estado']. ', ' . $_POST['pais'];
    $telefone = $_POST['telefone'];
    $imagem = $_FILES['fotoPerfil']['name'];

    $targetDir = "fotos/";
    $targetFilePath = $targetDir . $imagem;
    // Move a foto para a pasta
    move_uploaded_file($_FILES["fotoPerfil"]["tmp_name"], $targetFilePath);

    $sql = "INSERT INTO locais_doacao (nome, usuario_idusuario, data_inicio, data_final, responsavel, endereco, telefone, email, imagem)
            VALUES
                (:nome, :idusuario, :dataInicio, :dataFinal, :responsavel, :endereco, :telefone, :email, :imagem)";

    $stmt = $PDO->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':idusuario', $idusuario);
    $stmt->bindParam(':dataInicio', $dataInicio);
    $stmt->bindParam(':dataFinal', $dataFinal);
    $stmt->bindParam(':responsavel', $responsavel);
    $stmt->bindParam(':endereco', $endereco);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':imagem', $imagem);

    if ($stmt->execute()) {
        echo '<script>
            alert("Local adicionado com sucesso");
            location.href = "index.php";
            </script>';
    } else {
        echo "Erro ao cadastrar: " . $stmt->errorInfo()[2];
    }
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>