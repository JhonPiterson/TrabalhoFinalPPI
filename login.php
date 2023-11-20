<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alimentandoesperancas";

$email = $_POST["email"];
$senha = $_POST["senha"];

$PDO = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$sql_usuario = "SELECT senha,idusuario FROM usuario WHERE email=:email";
$sql_adm = "SELECT senha,idadministrador FROM administrador WHERE login=:email";

$stmt_usuario = $PDO->prepare($sql_usuario);
$stmt_adm = $PDO->prepare($sql_adm);

$stmt_usuario->bindParam(':email', $email, PDO::PARAM_STR);
$stmt_adm->bindParam(':email', $email, PDO::PARAM_STR);


if ($stmt_usuario->execute() && $stmt_adm->execute()) {
    $rs_usuario = $stmt_usuario->fetch(PDO::FETCH_OBJ);
    $rs_adm = $stmt_adm->fetch(PDO::FETCH_OBJ);

    if(($stmt_usuario->rowCount() == 0 || $rs_usuario->senha != $senha) && ($stmt_adm->rowCount() == 0 || $rs_adm->senha != $senha)){
        echo '<script>
        alert("Email ou senha incorretos");
        location.href = "login.html";
        </script>';
    }else{
        session_start();
        if($stmt_usuario->rowCount() != 0){
            $_SESSION['login'] = "usuario";
            $_SESSION['idUsuario'] = $rs_usuario->idusuario;
        }else if($stmt_adm->rowCount() != 0){
            $_SESSION['login'] = "adm";
        }
        header('Location: index.php');      
    }

    }else{
        echo '<script>
        alert("Erro na busca");
        location.href = "login.html";
        </script>';
    }
    

?>