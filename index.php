<?php 

    $title = "Ingreso";
    require_once "scripts.php";
    require_once "includes/head.php";
    include_once "includes/head.php";
    session_start();
   
    if (isset($_SESSION['user'])) {
      header('Location: dashboard.php');
    }
    ?>
<body>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">Login 720</div>
                    <div class="panel panel-body">
                        <div style="text-align: center;">
                            <img src="img/logo.png" height="250">
                        </div>
                        <p></p>
                        <label>Nombre de usuario</label>
                        <input type="text" id="username" class="form-control imput-sm" name="username">
                        <label>Contraseña</label>
                        <input type="password" id="contrasena" class="form-control imput-sm" name="contrasena">
                        <p></p>
                        <span class="btn btn-primary" id="login">Entrar</span>
                        <a href="registro.php" class="btn btn-danger">Registro</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</body>
</html>