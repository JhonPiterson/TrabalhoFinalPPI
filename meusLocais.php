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
  <title>Meus Locais</title>
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
        <div class="container mt-4">
            <div id="doador-section">
              <h2>Meus Locais</h2>
              <div class="search-container">
                <label for="searchInput">Buscar por nome:</label>
                <input type="text" id="searchInput" class="form-control mb-1" placeholder="Digite o nome do local">
                <button onclick="filtrarLocais()" class="btn btn-primary">Buscar <span>&#128269;</span></button>
                <a href="adicionarLocalForm.php" class="btn btn-success">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                      </svg>
                    Adicionar Local de Doação
                </a>
              </div>
              <div class="row mt-4" id="galeria-locais">
                <!-- Locais serão dinamicamente adicionados aqui usando scriptLogado.js -->
              </div>
            </div>
          </div>

    </main>

<?php
include "aside.php";
?>

</div>

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="scriptMeusLocais.js"></script>

<footer class="footer mt-auto py-3">
  <div class="container text-center">
    <img src="fotos/logo.png" alt="Logo da Empresa" height="30">
    <p>Para entrar em contato, envie um email para: <a href="mailto:contato@example.com">contato@example.com</a></p>
    <p>&copy; 2023 Alimentando Esperança. Todos os direitos reservados.</p>
  </div>
</footer>

</body>

</html>