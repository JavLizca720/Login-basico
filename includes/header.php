<?php
include_once "includes/head.php";
?>
    <title>INDEX</title>
</head>
<body>
    <header>
    <div class="optionsBar">
    <nav>
				<p>|Usuario actual: </p>
				<span>|</span>
				<span class="user"><?php echo $_SESSION['nombre'].' -'.$_SESSION['apellido']; ?></span>
				<img class="photouser" 
                <?php 
	
    if($_SESSION['genero'] == 1){
        ?>
    src="img/ella.png"

    <?php } ?>

    <?php 
	
	if($_SESSION['genero'] == 2){
    ?>
    src="img/el.png"

    <?php } ?>
    <?php 
	
	if($_SESSION['genero'] == 3){
    ?>
    src="img/elle.png"

    <?php } ?>
  
    alt="Usuario">
	<a href="logout.php"><img src="img/cerrar.png" class="cerrarimg"></a>
	</div>
    </header>
    