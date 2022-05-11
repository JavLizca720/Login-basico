<?php
 include_once "includes/head.php";
  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: dashboard.php');
  }
  require 'functions/conexion.php';

  if (!empty($_POST['username']) && !empty($_POST['contrasena'])) {
    $records = $conn->prepare('SELECT id, id_genero, nombre, apellido, username, contrasena FROM usuarios WHERE username = :username');
    $records->bindParam(':username', $_POST['username']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['contrasena'], $results['contrasena'])) {
      $_SESSION['user_id'] = $results['id'];
      $_SESSION['nombre'] = $results['nombre'];
      $_SESSION['apellido'] = $results['apellido'];
      $_SESSION['genero'] = $results['id_genero'];
      header("Location: dashboard.php");
    } else {
      $message = 'Ops, los datos no coinciden';
    }
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ingresar</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

<center>

  <div class="login">
  <h2>Ingresar</h2>
    <form action="index.php" method="POST">
      <input class="form-control" name="username" type="text" placeholder="Ingrese su nombre de usuario">
      <input class="form-control" name="contrasena" type="password" placeholder="Ingrese su contraseña">
      <input class="form-control" type="submit" value="Acceder">
    </form>

    <a href="signup.php" class="form-button"><button class="form-button"> Registrar</button></a>
    </div>
    </center>
  </body>
</html>
