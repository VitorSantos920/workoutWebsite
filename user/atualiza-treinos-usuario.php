<?php
if (!isset($_POST['idUsuario'])) {
  header('Location: ./perfil.php');
  exit;
}

require_once "../app/config.php";
session_start();

$idUsuario = filter_input(INPUT_POST, "idUsuario");
$acao = filter_input(INPUT_POST, "acao");
$nomeIdentificadorTreino = filter_input(INPUT_POST, "nomeIdentificadorTreino");

$idTreino = DB::queryFirstField("SELECT id FROM treino WHERE nome_identificador = %s", $nomeIdentificadorTreino);


if ($acao == 'adicionado') {
  DB::insert("treinos_usuario", [
    "treino" => $idTreino,
    "usuario" => $idUsuario
  ]);

  inserirLogTreino("Foi adicionado o treino de ID {$idTreino} (Nome Identificador {$nomeIdentificadorTreino}) ao usuário de ID {$idUsuario}");

  echo json_encode(["acao" => 1]);
} else {
  DB::query("DELETE FROM treinos_usuario WHERE usuario = %i AND treino = %i", $idUsuario, $idTreino);

  inserirLogTreino("Foi removido o treino de ID {$idTreino} (Nome Identificador {$nomeIdentificadorTreino}) do usuário de ID {$idUsuario}");

  echo json_encode(["acao" => 2]);
}

function inserirLogTreino($acao)
{
  DB::insert("logs_treinos_usuario", [
    "timestamp" => time(),
    "acao" => $acao
  ]);
}
