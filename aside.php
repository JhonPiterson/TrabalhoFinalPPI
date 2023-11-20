<?php
if(!isset($_SESSION)){
  session_start();
}
if(isset($_SESSION['login'])){
if($_SESSION['login']=='usuario'){
    echo "<aside>
    <div class='d-flex flex-column flex-shrink-0 p-3' >
        <hr>
        <ul class='nav nav-pills flex-column mb-auto'>
          <li class='nav-item'>
            <a href='index.php' class='nav-link active' aria-current='page'>
              <svg class='bi me-2' width='16' height='16'><use xlink:href='#home'></use></svg>
              Home
            </a>
          </li>
          <li>
            <a href='meusLocais.php' class='nav-link link-dark'>
              <svg class='bi me-2' width='16' height='16'><use xlink:href=''></use></svg>
              Meus Locais de Doação
            </a>
          </li>
          <li>
            <a href='editarPerfil.php' class='nav-link link-dark'>
              <svg class='bi me-2' width='16' height='16'><use xlink:href=''></use></svg>
              Editar Perfil
            </a>
          </li>
        </ul>
        <hr>
      </div>
    
</aside>";
}else if($_SESSION['login']=='adm'){
    echo "<aside>
    <div class='d-flex flex-column flex-shrink-0 p-3' >
        <hr>
        <ul class='nav nav-pills flex-column mb-auto'>
          <li class='nav-item'>
            <a href='index.php' class='nav-link active' aria-current='page'>
              <svg class='bi me-2' width='16' height='16'><use xlink:href='#home'></use></svg>
              Home
            </a>
          </li>
          <li>
              <a href='admUsuarios.php' class='nav-link link-dark'>
                <svg class='bi me-2' width='16' height='16'><use xlink:href=''></use></svg>
                Administração de Usuários
              </a>
            </li>
        </ul>
        <hr>
      </div>
    
</aside>";
}
}
?>