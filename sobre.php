<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<meta charset="UTF-8">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós</title>
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
          <?php
            if(!isset($_SESSION['login'])){
              echo "<a class='nav-link' href='login.html'>Login</a>";
            }else {
              echo "<a class='nav-link' href='logout.php'>Sair</a>";
            }
          ?>
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
        <section>
            <h2>Quem Somos</h2>
            <p>Alimentando Esperanças é uma iniciativa apaixonada e dedicada, fundada por três entusiastas estudantes de
                Sistemas de Informação da Universidade Federal de Uberlândia. A equipe, composta por Bruno, Matheus e Jõao,
                está empenhada em aplicar seus conhecimentos adquiridos na matéria de "Programação para Internet" para fazer
                a diferença no mundo real.</p>

            <h2>Inspiração</h2>
            <p>A base de nossa inspiração é a Objetivo de Desenvolvimento Sustentável (ODS) 2 das Nações Unidas: "Fome Zero".
                Acreditamos que a tecnologia pode ser uma força para o bem e é uma ferramenta poderosa para alcançar o objetivo
                de erradicar a fome em todo o mundo. Estamos comprometidos em contribuir para este objetivo global, conectando
                pessoas e recursos para garantir que ninguém passe fome.</p>


        </section>
    </main>

<?php
  include "aside.php";
  if(!isset($_SESSION['login'])){
    echo "<script src='detalhe.js'></script>";
  }else{
    if($_SESSION['login']=='usuario'){
      echo "<script src='scriptLogado.js'></script>";
    }
    if($_SESSION['login']=='adm'){
      echo "<script src='scriptAdmin.js'></script>";
    }
  }
?>
</div>

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="scriptAdmin.js"></script>

<footer class="footer mt-auto py-3">
    <div class="container text-center">
        <img src="fotos/logo.png" alt="Logo da Empresa" height="30">
        <p>Para entrar em contato, envie um email para: <a href="mailto:contato@example.com">contato@example.com</a></p>
        <p>&copy; 2023 Alimentando Esperança. Todos os direitos reservados.</p>
    </div>
</footer>

</body>
</html>