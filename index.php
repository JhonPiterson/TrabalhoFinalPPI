<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<meta charset="UTF-8">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alimentando Esperanças</title>
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
      <h2>Nossa Missão</h2>
      <p>Nossa missão é alimentar esperanças e unir comunidades. Acreditamos que todos merecem uma refeição nutritiva
        e que juntos podemos fazer a diferença. Estamos empenhados em combater a fome e criar um mundo onde ninguém
        precise passar fome. Trabalhamos incansavelmente para garantir que cada pessoa tenha acesso a alimentos de
        qualidade e apoiamos iniciativas que promovem a segurança alimentar. Com paixão e determinação, estamos
        transformando vidas, uma refeição por vez.</p>

      <h2>Dados Estatísticos</h2>
      <p>Em nosso caminho para acabar com a fome, alcançamos marcos significativos. Até agora, distribuímos mais de 1
        milhão de refeições para famílias necessitadas em todo o mundo. Com a ajuda de nossa comunidade dedicada de
        voluntários, conseguimos reduzir em 30% a taxa de desnutrição em áreas de alta vulnerabilidade. Além disso,
        implementamos programas de educação alimentar que impactaram positivamente a vida de mais de 10.000 crianças.</p>

      <h2>Como Ajudar?</h2>
      <p>Você pode ajudar dando uma olhada nos nossos <a href="locais.php">Locais de Doação</a>, podendo entrar em contato
        com o(s) organizador(es) da instituição, para obter mais informações. Ou então, você pode se <a href="cadastro.html">
          cadastrar</a> e se tornar um ponto de Doação, para que mais pessoas possam ser ajudadas. </p>
    </section>
    <div class="container">
      <div class="row">
        <div class="col-4"></div>
        <a href="locais.php" class="btn btn-primary col-4">Quero Ajudar!</a></button>
        <div class="col-4"></div>
      </div>
    </div>
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

<footer class="footer mt-auto py-3">
  <div class="container text-center">
    <img src="fotos/logo.png" alt="Logo da Empresa" height="30">
    <p>Para entrar em contato, envie um email para: <a href="mailto:contato@example.com">contato@example.com</a></p>
    <p>&copy; 2023 Alimentando Esperança. Todos os direitos reservados.</p>
  </div>
</footer>

</body>

</html>