<?php
if (!isset($_POST['idUsuario'])) {
  header('Location: ./login.php');
}

require_once "../app/config.php";
