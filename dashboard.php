<?php
include_once "includes/head.php";
     session_start();
    // if (isset($_SESSION['user_id'])) {
      //  header('Location: dashboard.php');
      //}
      if (!isset($_SESSION["user_id"])) {
        header("Location: index.php");
    }

	require 'functions/conexion.php';
	include_once "includes/header.php";
    include_once "includes/head.php";
 

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, nombre, apellido, username, contrasena  FROM usuarios WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;
    $nombre = null;
    $apellido = null;

    if (count($results) > 0) {
      $user = $results;
    }
    if (count($results) > 0) {
      $nombre = $results;
    }
    if (count($results) > 0) {
      $apellido= $results;
    }
  }

    ?>



<body>



<?php 
	
	if($_SESSION['genero'] == 1){
  ?>
  <h1> Bienvenida <?= $nombre['nombre']; ?></h1>

  <?php } ?>

  <?php 
	
	if($_SESSION['genero'] == 2){
  ?>
  <h1> Bienvenido <?= $nombre['nombre']; ?></h1>

  <?php } ?>

  <?php 
	
	if($_SESSION['genero'] == 3){
  ?>
  <h1> Bienvenide <?= $nombre['nombre']; ?></h1>

  <?php } ?>



</body>
</html>

