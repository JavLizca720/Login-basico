$(document).ready(function(){
    $('#registrar').click(function(){

        if($('#nombre').val()==""){
            alertify.alert("Debes agregar el nombre");
            return false;
        }else if($('#apellido').val()==""){
            alertify.alert("Debes agregar el apellido");
            return false;
        }else if($('#genero').val()==""){
            alertify.alert("Debes agregar el genero");
            return false;
        }else if($('#username').val()==""){
            alertify.alert("Debes agregar el nombre de usuario");
            return false;
        }else if($('#contrasena').val()==""){
            alertify.alert("Debes agregar la contraseña");
            return false;
        }else if($('#contrasena2').val()==""){
            alertify.alert("Debes confirmar la contraseña");
            return false;
        }


        if($('#contrasena').val() != $('#contrasena2').val()){
            alertify.alert("Las contraseñas no coinciden");
            return false;
        }


        cadena="nombre=" + $('#nombre').val() +
                "&apellido=" + $('#apellido').val() +
                "&genero=" + $('#genero').val() +
                "&username=" + $('#username').val() +
                "&contrasena=" + $('#contrasena').val() + 
                "&contrasena2=" + $('#contrasena2').val();

                $.ajax({
                    type:"POST",
                    url:"functions/registro.php",
                    data:cadena,
                    success:function(r){

                        if(r==2){
                            alertify.alert("Este usuario ya existe, prueba con otro :)");
                        }
                        else if(r==1){
                            $('#formularioRegistro')[0].reset();
                            alertify.success("Agregado con exito");
                        }else{
                            alertify.error("Fallo al agregar");
                        }
                    }
                });
    });
})