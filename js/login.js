$(document).ready(function(){
	$('#login').click(function(){
		if($('#username').val()==""){
			alertify.alert("Debes agregar el usuario");
			return false;
		}else if($('#contrasena').val()==""){
			alertify.alert("Debes agregar la contraseña");
			return false;
		}

		cadena="username=" + $('#username').val() + 
				"&contrasena=" + $('#contrasena').val();

				$.ajax({
					type:"POST",
					url:"functions/login.php",
					data:cadena,
					success:function(r){
						if(r==1){
							window.location="dashboard.php";
						}else{
							alertify.alert("Nombre de usuario o contraseña incorrectos");
						}
					}
				});
	});	
});