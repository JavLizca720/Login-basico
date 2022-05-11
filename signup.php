<?php
session_start();

if (isset($_SESSION['user_id'])) {
  header('Location: dashboard.php');
}
include_once "includes/head.php";
  require 'functions/conexion.php';

  $message = '';

  if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['genero']) && !empty($_POST['username']) && !empty($_POST['contrasena'])) {
    $sql = "INSERT INTO usuarios (nombre, apellido, id_genero, username, contrasena) VALUES (:nombre, :apellido, :genero, :username, :contrasena)";
     
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':apellido', $_POST['apellido']);
    $stmt->bindParam(':genero', $_POST['genero']);
    $stmt->bindParam(':username', $_POST['username']);
    $password = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);
    $stmt->bindParam(':contrasena', $password);

    $verificar = "SELECT * FROM usuarios WHERE username = (:username)";
    //if(($verificar) > 0){
      
    
      if($_POST['username'] == $verificar){ 
      echo"User existe :v";
      exit();
      //header("Location: signup.php");
      //{ 

      //}else if (($verificar) > 0){
        //echo 'Usuario ya existente';
      }
      

    if($_POST["contrasena"]==$_POST["confirm_contrasena"]){
  if ($stmt->execute()) {
    $message = 'Usuario creado con exito';
  } else {
    $message = 'Ha ocurrido un problema al crear el usuario';
  }
}else{
     echo "Las contraseñas no coinciden";
}  

  }

?>
  <body>

   

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    
    <center>

    <div class="login">
    <h2>Registrar</h2>
    <form action="signup.php" method="POST">
      <input class="form-control" name="nombre" type="text" placeholder="Ingrese su nombre" require>
      <input  class="form-control" name="apellido" type="text" placeholder="Ingrese su apellido" require>
      <select class="form-control" name="genero" placeholder="Ingrese su genero" require>
        <option value="">Seleccione su genero</option>
        <option value="1">Femenino</option>
        <option value="2">Masculino</option>
        <option value="3">No binario</option>
      </select> 
      <input class="form-control" name="username" type="text" placeholder="Ingrese su nombre se usuario" require>
      <input class="form-control" name="contrasena" type="password" placeholder="Ingrese su contraseña" require>
      <input class="form-control" name="confirm_contrasena" type="password" placeholder="Confirme su contraseña" require>
      <input class="form-control" type="submit" value="Registrar">
    </form>
    <a href="index.php" class="form-button"><button class="form-button"> Ingresar</button></a>
    </div>
    </center>
  </body>
</html>
