<?php    
           session_start();
            if (!isset($_SESSION["user"])) {
              header("Location: index.php");
          }
          
$title = "Inicio";
    require_once "scripts.php";
    require_once "includes/head.php";
    ?>
<body>
<br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="jumbotron">
                <a href="functions/salir.php" class="btn btn-info">Salir del sistema</a>
                <h2>Entraste con exito</h2>
                <h1> Bienvenid@</h1>
                </div>
            </div>
        </div>
    </div>
</body>
</html>