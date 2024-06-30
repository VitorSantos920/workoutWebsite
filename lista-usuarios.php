<?php
require_once "./app/config.php";

session_start();
date_default_timezone_set('America/Sao_Paulo');
if (!isset($_SESSION['email']) || $_SESSION['categoria'] != "Administrador") {
  header('Location: ./login.php');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Workout | Lista de Usuários</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="shortcut icon" href="./assets/img/favicon.svg" type="image/x-icon">
  <link rel="stylesheet" href="./assets/css/lista-usuarios.css">

</head>

<body>
  <?php
  include_once "./cabecalho.php";
  ?>
  <main class="main">
    <h1>Lista de Usuários Workout</h1>
    <input type="text" name="pesquisa" id="pesquisa" class="form-control" placeholder="Pesquise pelo nome do usuário" oninput="pesquisarUsuario(this.value)">
    <div class="table-responsive">

      <table id="tabela-usuarios">
        <thead>
          <th>Nome</th>
          <th>Email</th>
          <th>Telefone</th>
          <th>Categoria</th>
          <th>Data de Cadastro</th>
          <th>Lista de Ações</th>
        </thead>
        <tbody></tbody>
      </table>
    </div>
  </main>


  <script src="./assets/js/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/4ac8bcd2f5.js" crossorigin="anonymous"></script>
  <script src="./assets/js/sweetalert2@11.js"></script>
  <script src="./assets/js/cabecalho.js"></script>
  <script src="./assets/js/lista-usuarios.js"></script>

</body>

</html>