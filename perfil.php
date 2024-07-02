<?php
session_start();

if (!isset($_SESSION['id'])) {
  header('Location: ./login.php');
  exit;
}

require_once "./app/config.php";

$usuario = DB::queryFirstRow("SELECT * FROM usuario WHERE id = %i", $_SESSION['id']);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Workout | Perfil do Usuário</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="stylesheet" href="./assets/css/perfil.css">
  <link rel="shortcut icon" href="./assets/img/favicon.svg" type="image/x-icon">
</head>

<body>
  <header>
    <?php
    include_once "./cabecalho.php";
    ?>
  </header>

  <main>
    <h1>Seja bem-vindo(a) ao seu perfil Workout, <?php echo $usuario['nome'] ?>!</h1>
    <p>Edite suas informações de perfil abaixo.</p>

    <form>
      <input type="hidden" id="id-usuario" name="id-usuario" value="<?php echo $_SESSION['id'] ?>">
      <fieldset>
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" placeholder="Seu nome" name="nome" value="<?php echo $usuario['nome'] ?>">
      </fieldset>
      <fieldset>
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Seu email" name="email" value="<?php echo $usuario['email'] ?>">
      </fieldset>
      <fieldset>
        <label for="telefone">Telefone:</label>
        <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Seu telefone" value="<?php echo $usuario['telefone'] ?>">
      </fieldset>

      <button type="button" class="btn" id="btn-editar" onclick="editarPerfil()">Editar</button>
    </form>
  </main>


  <script src="./assets/js/jquery-3.7.1.min.js"></script>
  <script src="./assets/js/sweetalert2@11.js"></script>
  <script src="https://kit.fontawesome.com/4ac8bcd2f5.js" crossorigin="anonymous"></script>
  <script src="./assets/js/perfil.js"></script>

</body>

</html>