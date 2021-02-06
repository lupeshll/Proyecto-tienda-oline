<?php
    session_start();
	require 'funcs/conexion.php';
	require 'funcs/funcs.php';

    if(!isset($_SESSION["id_usuario"])){
        header("location: inicio.php");
    }

    $idUsuario = $_SESSION['id_usuario'];

    $sql = "SELECT id , nombre FROM users_clientes WHERE id='$idUsuario'";
    $result = $mysqli->query($sql);
    
    $row=$result->fetch_assoc();
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trend Stoore</title>

    <!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
	<!-- Styles propios -->	
	<link rel="stylesheet" href="styles.css">
	<!--  -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600&display=swap" rel="stylesheet">

	
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#">
				<img class="img-responsive " src="../img/logo2.png" width="70" height="70" class="d-inline-block align-top" alt="">
				Trend Stoore
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<ion-icon class="btn-menu" name="menu-outline"></ion-icon>
			</button>

			
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#" id="inicio">Inicio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#about" id="nosotros">Nosotros</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">
							Ropas
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#clothes" id="rdama">Damas</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#clothes" id="rcaballero">Caballeros</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#clothes" id="niños">Niños</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#tendency" id="tendencia">Tendencias</a>
					</li>
                    <?php if($_SESSION['tipo_usuario'] ==1){?>
					<li class="nav-item">
						<a class="nav-link" href="#discount" id="sale">
							Sale
						</a>
					</li>
                    <?php } ?>
					<li class="nav-item">
						<a class="nav-link" href="#contact" id="contacto">Contactanos</a>
					</li>
					
					<li class="nav-item">
					    <a class="nav-link" href="logout.php">Cerrar Session</a>	
					</li>
				</ul>
			</div>
            
		</div>
        
	</nav>
	
    <div class="panel panel-info">
                <h2 style="color:black"><?php echo '&nbsp&nbsp'.'Bienvenid@ '.utf8_decode($row['nombre']);?></h2>
            <br />
        
	</div>
	<section id="">
		<div class="container">
			<div class="panel panel-info">
			<h2 style="color:black"><?php echo '&nbsp&nbsp'.'Bienvenid@ '.utf8_decode($row['nombre']);?></h2>
			</div>
		</div>
	</section>
    
    
</body>
</html>