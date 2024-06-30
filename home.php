<?php
require_once "./app/config.php";

session_start([
  'cookie_lifetime' => 86400
]);

if (!isset($_SESSION['session_id']) || !isset($_SESSION['email'])) {
  header('Location: ./login.php');
  exit;
}

$dadosUsuario = DB::queryFirstRow("SELECT * FROM usuario WHERE usuario.email = %s", $_SESSION['email']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Workout | Homepage</title>
  <link rel="shortcut icon" href="./assets/img/favicon.svg" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/home.css">
</head>

<body>
  <?php
  include_once "./cabecalho.php";
  ?>
  <main>
    <section class="profile-initial">
      <i class="fa-solid fa-hand-fist"></i>
      <a href="profile.php">
        <h1> Seja bem-vindo, <?php echo $dadosUsuario['nome'] ?>!</h1>
        <p>Pronto para alcançar seus objetivos hoje?</p>
      </a>
    </section>
    <section class="informations">
      <h2><i class="fa-solid fa-circle-info"></i> Suas Informações</h2>
      <p>Email: <?php echo $dadosUsuario['email'] ?></p>
      <p>Telefone: <?php echo $dadosUsuario['telefone'] ?></p>
      <?php
      $dataCadastro = date('d/m/Y h:i:s', strtotime($dadosUsuario['cadastrado_em']));
      $dataCadastroFormatada = explode(" ", $dataCadastro);

      ?>
      <p>Cadastrou-se em: <?php echo  $dataCadastroFormatada[0] . " às " . $dataCadastroFormatada[1] ?></p>
    </section>

    <section class="progress-training">
      <div class="progress">
        <h2><i class="fa-solid fa-chart-simple"></i> Seu Progresso</h2>
        <p>Peso Atual: 65kg</p>
        <p>Meta: 78.5kg</p>
        <p>Dias de Treino na Semana: 4</p>
        <p>Último Treino: 24/06/2024</p>
      </div>
      <div class="training">
        <h2><i class="fa-solid fa-dumbbell"></i> Plano de Treino</h2>
        <p class="plan">Plano Atual: <span>Hipertrofia</span></p>
        <p>Sugestões de Treinos:</p>
        <ul>
          <li>Treino de Resistência</li>
          <li>Treino para Definição</li>
          <li>Yoga e Alongamento</li>
        </ul>
      </div>
    </section>
  </main>

  <script src="https://kit.fontawesome.com/4ac8bcd2f5.js" crossorigin="anonymous"></script>
</body>

</html>