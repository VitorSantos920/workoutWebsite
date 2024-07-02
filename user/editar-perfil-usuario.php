<?php
if (!isset($_POST['idUsuario'])) {
  header('Location: ./perfil.php');
  exit;
}

$nome = filter_input(INPUT_POST, "nome");
$email = filter_input(INPUT_POST, "email");
$telefone = filter_input(INPUT_POST, "telefone");

require_once "../app/config.php";

try {
  DB::update('usuario', ['nome' => $nome, 'email' => $email, "telefone" => $telefone], "id=%i", $_POST['idUsuario']);

  echo json_encode(["status" => 1, "swalMessage" => "Os dados do usuário foram editados com sucesso!"]);
} catch (\Throwable $th) {
  echo json_encode(["status" => -1, "swalMessage" => "Ocorreu um erro interno ao editar os dados do usuário. Tente novamente mais tarde!", "erro" => $th]);
}
