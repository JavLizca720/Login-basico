<?php 

	require_once "conexion.php";
	$conexion=conexion();

		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
        $genero=$_POST['genero'];
		$username=$_POST['username'];
		$contrasena=sha1($_POST['contrasena']);
        $contrasena2=$_POST['contrasena2'];

		if(buscaRepetido($username,$conexion)==1){
			echo 2;
		}else{
			$sql="INSERT INTO usuarios (nombre,apellido,id_genero,username,contrasena)
				values ('$nombre','$apellido','$genero','$username','$contrasena')";
			echo $result=mysqli_query($conexion,$sql);
		}


		function buscaRepetido($user,$conexion){
			$sql="SELECT * from usuarios WHERE username='$user'";
			$result=mysqli_query($conexion,$sql);

			if(mysqli_num_rows($result) > 0){
				return 1;
			}else{
				return 0;
			}
		}

 ?>