<?php
if (!isset($_POST['arg'])) {
  header('Location: ./lista-usuarios.php');
  exit;
}

require_once "../app/config.php";
session_start();

$usuariosWorkout = DB::query("SELECT * FROM usuario WHERE id != %i", $_SESSION['id']);

$tableBody = '';

if (empty($usuariosWorkout)) {
  $tableBody = "<tr>
                  <td colspan='6' style='text-align: center;'>
                    Não há usuários cadastrados!
                  </td>
                </tr>";
} else {

  foreach ($usuariosWorkout as $usuario) {
    $dataCadastro = date('d/m/Y H:m:s', strtotime($usuario['cadastrado_em']));
    $dataCadastroFormatada = explode(" ", $dataCadastro);
    $dataCadastroFormatada = $dataCadastroFormatada[0] . " às " . $dataCadastroFormatada[1];

    $tableBody .= " <tr>
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
}

echo json_encode(["tableBody" => $tableBody]);
