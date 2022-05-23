<?php 
    $title = "Registro";
    require_once "scripts.php";
    require_once "includes/head.php";
    ?>
<body>
<br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="panel panel-danger">
                    <div class="panel panel-heading">Registro720</div>
                    <div class="panel panel-body">
                        <p></p>
                        <form id="formularioRegistro">
                        <label>Nombre</label>
                        <input type="text" id="nombre" class="form-control imput-sm" name="nombre">
                        <label>Apellido</label>
                        <input type="text" id="apellido" class="form-control imput-sm" name="apellido">
                        <label>Genero</label>
                        <select type="text" id="genero"  class="form-control imput-sm" name="genero">
                            <option value="">Seleccione su genero</option>
                            <option value="1">Femenino</option>
                            <option value="2">Masculino</option>
                            <option value="3">No binario</option>
                        </select> 
                        <label>Username</label>
                        <input type="text" id="username" class="form-control imput-sm" name="username">
                        <label>Contraseña</label>
                        <input type="password" id="contrasena" class="form-control imput-sm" name="contrasena">
                        <label>Confirmar contrasena</label>
                        <input type="password" id="contrasena2" class="form-control imput-sm" name="contrasena2">
                        <p></p>
                        <span class="btn btn-primary" id="registrar">Continuar</span>
                        </form>
                        <div style="text-align: right;">
                            <a href="index.php" class="btn btn-default">Ingresar</a>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
    </body>
</html>