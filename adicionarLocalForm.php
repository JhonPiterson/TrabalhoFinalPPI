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
    <title>Adicionar Local</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
</head>

<body>

<header>
    <h1 id="titulo">Alimentando Esperanças</h1>
</header>

<nav class="navbar navbar-expand-lg navbar-light custom-navbar sticky-top">
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
        <div class="container mt-5">
            <h2>Adicionar Local de Doação</h2>
            <form action="adicionarLocal.php" method="post" enctype="multipart/form-data">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="nomeLocal" id="nomeLocal" placeholder="Nome do Local"
                           required>
                    <label for="nomeLocal">Nome do Local:</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="date" class="form-control" name="dataInicio" id="dataInicio" required>
                    <label for="dataInicio">Data de início de abertura para doações:</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="date" class="form-control" name="dataFinal" id="dataFinal">
                    <label for="dataFinal">Data de fechamento do local para doações:</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nome Completo" required>
                    <label for="name">Nome do responsável:</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="exemplo@gmail.com"
                           required>
                    <label for="email">E-mail de Contato:</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="cep" id="cep" placeholder="CEP" required>
                    <label for="cep">Cep:</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="adress" class="form-control" name="endereco" id="endereco" placeholder="Endereço"
                           required>
                    <label for="endereco">Endereço:</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" name="numero" id="numero" placeholder="Número" required>
                    <label for="numero">Número:</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Bairro" required>
                    <label for="bairro">Bairro:</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade" required>
                    <label for="cidade">Cidade:</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="estado" id="estado" placeholder="Estado" required>
                    <label for="estado">Estado:</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="pais" id="pais" placeholder="País" required>
                    <label for="pais">País:</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="tel" class="form-control" name="telefone" id="telefone" placeholder="Telefone"
                           required>
                    <label for="telefone">Telefone de Contato:</label>
                </div>

                <label for="fotoPerfil" class="form-label">Foto do Local:</label>
                <div class="form-floating mb-3 col-sm-6">
                    <img id="imagePreview" class="img-thumbnail" src="" alt="Foto do Local" width="250" height="250">
                </div>
                <div class="form-floating mb-3 col-sm-6">
                    <input type="file" class="form-control" name="fotoPerfil" id="fotoPerfil" accept="image/*">
                </div>
                <button type="submit" class="btn btn-primary mb-3">Adicionar Local</button>
            </form>
        </div>

    </main>

<?php
include "aside.php";
?>

</div>

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
<script src="buscaCEP.js"></script>

<footer class="footer mt-auto py-3">
    <div class="Footer LogoTexto">
        <img src="fotos/logo.png" alt="Logo da Empresa" height="30">
        <p>Para entrar em contato, envie um email para: <a href="mailto:contato@example.com">contato@example.com</a></p>
        <p>&copy; 2023 Alimentando Esperança. Todos os direitos reservados.</p>
    </div>
</footer>

</body>
</html>