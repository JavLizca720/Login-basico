<?php 
session_start();
	require_once "conexion.php";

	$conexion=conexion();

		$username=$_POST['username'];
		$contrasena=sha1($_POST['contrasena']);

		$sql="SELECT * from usuarios where username='$username' AND contrasena='$contrasena'";
		$result=mysqli_query($conexion,$sql);

		if(mysqli_num_rows($result) > 0){
			$_SESSION['user']=$username;
			echo 1;
		}else{
			echo 0;
		}
 ?>