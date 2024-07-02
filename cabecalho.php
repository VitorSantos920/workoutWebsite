<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
  $_SESSION['email'] = '';
}

?>

<head>
  <link rel="stylesheet" href="./assets/css/cabecalho.css">
</head>
<header>

  <nav>
    <a href="./index.php" class="brand">workout</a>
    <ul>
      <div class="menu-icon">
        <button onClick="menuShow()"><i class="fa-solid fa-bars  fa-2xl"></i></button>
      </div>
      <li><a href="#">treinos</a></li>
      <li><a href="#">dietas</a></li>
      <li><a href="#">vida saudável</a></li>
      <li><a href="#">comunidade</a></li>
      <?php
      if ($_SESSION['email'] != "") {
        echo "<li><a href='./home.php'>Home</a></li>";
        if ($_SESSION['categoria'] == "Administrador") {
          echo "<li><a href='./lista-usuarios.php'>Lista de Usuários</a></li>";
        }
        echo "<li><a href='./perfil.php'>Perfil</a></li>
        <li><a href='./user/logout.php'>Sair</a></li>";
      } else {
        echo "<li><a href='./cadastro.php'>Cadastrar</a></li>
        <li><a href='./login.php' class='vermelho'>Entrar</a></li>";
      }
      ?>
    </ul>
  </nav>
  <div class="menu-mobile">
    <ul>
      <li><a href="#">treinos</a></li>
      <li><a href="#">dietas</a></li>
      <li><a href="#">dietas</a></li>
      <li><a href="#">vida saudavel</a></li>
      <li><a href="#">comunidade</a></li>
      <?php
      if ($_SESSION['email'] != "") {
        echo "<li><a href='./home.php'>Home</a></li>";
        if ($_SESSION['categoria'] == "Administrador") {
          echo "<li><a href='./lista-usuarios.php'>Lista de Usuários</a></li>";
        }
        echo "<li><a href='./perfil.php'>Perfil</a></li>
        <li><a href='./user/logout.php'>Sair</a></li>";
      } else {
        echo "<li><a href='./cadastro.php'>Cadastrar</a></li>
        <li><a href='./login.php' class='vermelho'>Entrar</a></li>";
      }
      ?>
    </ul>
  </div>
</header>
<script src="./assets/js/cabecalho.js"></script>