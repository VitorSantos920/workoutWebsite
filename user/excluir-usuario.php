<?php
if (!isset($_POST['idUsuario'])) {
  header('Location: ./login.php');
}

require_once "../app/config.php";

try {
  $dadosUsuario = DB::queryFirstRow("SELECT * FROM usuario WHERE id = %i", $_POST['idUsuario']);

  DB::delete("usuario", "id = %i", $_POST['idUsuario']);
  echo json_encode(["status" => 1, "swalMessage" => "O usuário \"{$dadosUsuario['nome']}\" de ID {$dadosUsuario['id']} foi excluído com sucesso do sistema!"]);
} catch (\Throwable $err) {
  //throw $th;
}
