<?php
session_start([
  'cookie_lifetime' => 86400
]);

if (!isset($_SESSION['session_id']) || !isset($_SESSION['email'])) {
  header('Location: ./login.php');
  exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="shortcut icon" href="./assets/img/favicon.svg" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/home.css">
</head>

<body>
  <h1>home</h1>
  <?php
  var_dump($_SESSION);
  ?>

  <a href="./logout.php">logout</a>
</body>

</html>