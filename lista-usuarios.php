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
  <link rel="stylesheet" href="./assets/css/lista-usuarios.css">

</head>

<body>
  <?php
  include_once "./cabecalho.php";
  ?>
  <main class="main">
    <h1>Lista de Usuários Workout</h1>
    <table>
      <thead>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Categoria</th>
        <th>Data de Cadastro</th>
        <th>Lista de Ações</th>
      </thead>
      <tbody>
        <?php
        $usuariosWorkout = DB::query("SELECT * FROM usuario");
        foreach ($usuariosWorkout as $usuario) {
          $dataCadastro = date('d/m/Y H:m:s', strtotime($usuario['cadastrado_em']));
          $dataCadastroFormatada = explode(" ", $dataCadastro);
          $dataCadastroFormatada = $dataCadastroFormatada[0] . " às " . $dataCadastroFormatada[1];

          echo "
              <tr>
                <td>{$usuario['nome']}</td>
                <td>{$usuario['email']}</td>
                <td>{$usuario['telefone']}</td>
                <td>{$usuario['categoria']}</td>
                <td>{$dataCadastroFormatada}</td>
                <td>
                  <div class='dropdown'>
                    <button class='btn dropdown-toggle' type='button' data-bs-toggle='dropdown' aria-expanded='false'>
                      Opções
                    </button>
                    <ul class='dropdown-menu'>
                      <li>
                        <button class='btn btn-danger' type='button' onclick='excluirUsuario($usuario[id])'>
                          <i class='fa-solid fa-trash-can'></i> 
                          Excluir
                        </button>
                      </li>
                      
                    </ul>
                  </div>
                </td>
              </tr>
            ";
        }
        ?>


      </tbody>
    </table>
  </main>


  <script src="./assets/js/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/4ac8bcd2f5.js" crossorigin="anonymous"></script>
  <script src="./assets/js/lista-usuarios.js"></script>

</body>

</html>