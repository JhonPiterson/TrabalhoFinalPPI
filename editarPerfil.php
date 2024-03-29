<?php
session_start();
if(!isset($_SESSION['login'])){
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<meta charset="UTF-8">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
</head>

<body>

<header>
    <h1 id="titulo">Alimentando Esperanças</h1>
</header>

<nav class="navbar navbar-expand-lg navbar-light custom-navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Home</a>
        <!-- botão de responsividade: -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Sair</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="locais.php">Locais</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sobre.php">Quem somos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>



<div class="main_aside">
    <main class="main_logado">
     <!--Quando o back-end for implementado, as informações serão carregadas automaticamente de acordo com o perfil do usuário-->
<div class="container mt-5">
    <h2>Editar Perfil</h2>
    <form>
        <div class="form-floating mb-3 col-sm-6">
            <input type="text" class="form-control" id="name" placeholder="Nome Completo" required>
            <label for="name">Nome Completo:</label>
        </div>
        <div class="form-floating mb-3 col-sm-6">
            <input type="date" class="form-control" id="birthday" required>
            <label for="birthday">Data de Nascimento:</label>
        </div>
        <div class="form-floating mb-3 col-sm-6">
            <input type="tel" class="form-control" id="telefone" placeholder="Telefone" required>
            <label for="telefone">Telefone:</label>
        </div>
        <div class="form-floating mb-3 col-sm-6">
            <input type="text" class="form-control" id="cep" placeholder="CEP" required>
            <label for="cep">Cep:</label>
        </div>
        <div class="form-floating mb-3 col-sm-6">
            <input type="text" class="form-control" id="endereco" placeholder="Endereço" required>
            <label for="endereco">Endereço:</label>
        </div>
        <div class="form-floating mb-3 col-sm-6">
            <input type="number" class="form-control" id="numero" placeholder="Número" required>
            <label for="numero">Número:</label>
        </div>
        <div class="form-floating mb-3 col-sm-6">
            <input type="text" class="form-control" id="estado" placeholder="Estado" required>
            <label for="estado">Estado:</label>
        </div>
        <div class="form-floating mb-3 col-sm-6">
            <input type="text" class="form-control" id="pais" placeholder="País" required>
            <label for="Country">País:</label>
        </div>
        <button type="submit" class="btn btn-primary">Salvar alterações</button>
    
    </form>
</div>
    </main>
     
<?php
include "aside.php";
?>
        
  </div>

<footer class="footer mt-auto py-3">
    <div class="Footer LogoTexto">
        <img src="fotos/logo.png" alt="Logo da Empresa" height="30">
        <p>Para entrar em contato, envie um email para: <a href="mailto:contato@example.com">contato@example.com</a></p>
        <p>&copy; 2023 Alimentando Esperança. Todos os direitos reservados.</p>
    </div>
</footer>

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
<script src="buscaCEP.js"></script>
</body>
</html>