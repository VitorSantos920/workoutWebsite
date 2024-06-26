<?php
require_once "../app/config.php";

if (!isset($_POST['email'])) {
  header('Location: ../cadastro.php');
  exit;
}

try {
  $emailExistente = DB::queryFirstField("SELECT * FROM usuario u WHERE u.email = %s", $_POST['email']);

  if (empty($emailExistente)) {

    DB::insert("usuario", [
      "nome" => $_POST['nome'],
      "email" => $_POST['email'],
      "senha" => password_hash($_POST['senha'], PASSWORD_DEFAULT),
      "categoria" => "Normal",
      "telefone" => $_POST['telefone'],
    ]);
    echo json_encode(["status" => 1, "swalMessage" => "Seu cadastro foi realizado com sucesso! Redirecionando..."]);
  } else {
    echo json_encode(["status" => 0, "swalMessage" => "Este email já foi cadastrado no sistema. Deseja <a style='color: var(--link);' href='./login.php'>realizar seu login</a>?"]);
  }
} catch (\Throwable $e) {
  echo json_encode(["status" => -1, "swalMessage" => "Ocorreu um erro interno ao realizar seu cadastro!"]);
}
