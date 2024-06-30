<?php
require_once "../app/config.php";

if (!isset($_POST['email'])) {
  header('Location: ../login.php');
  exit;
}

try {
  $usuario = DB::queryFirstRow("SELECT * FROM usuario u WHERE u.email = %s", $_POST['email']);

  if (empty($usuario) || !password_verify($_POST['senha'], $usuario['senha'])) {
    echo json_encode(["status" => 0, "swalMessage" => "Email e/ou senha incorretos. Tente novamente!"]);

    exit;
  }

  session_start([
    'cookie_lifetime' => 86400,
  ]);

  $_SESSION['session_id'] = session_id();
  $_SESSION['id'] = $usuario['id'];
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['categoria'] = $usuario['categoria'];

  echo json_encode(["status" => 1, "swalMessage" => "Login realizado com sucesso. Redirecionando..."]);
} catch (\Throwable $th) {
  echo json_encode(["status" => -1, "swalMessage" => "Ocorreu um erro interno ao realizar seu login. Tente novamente mais tarde!"]);
}
