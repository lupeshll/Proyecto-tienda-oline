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
<?php if($_SESSION['tipo_usuario'] == 2){?>
<!doctype html>
<html lang="es">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Styles propios -->	
	<link rel="stylesheet" href="styles.css">
	<!--  -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600&display=swap" rel="stylesheet">

	<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

	<title>Trend Stoore | Contacto</title>
	<link rel="icon" href="img/logo-icon.ico">
</head>

<body>
	<nav class="navbar navbar-expand-lg fixed-top">
		<div class="container">
			<a class="navbar-brand" href="index.html">
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
						<a class="nav-link" href="welcome.php" id="inicio">Inicio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about_c.php" id="nosotros">Nosotros</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">
							Ropas
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="rdama_c.php" id="rdama">Damas</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="rcaballero_c.php" id="rcaballero">Caballeros</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="niños_c.php" id="niños">Niños</a>
						</div>
					</li>
					<?php if($_SESSION['tipo_usuario'] == 2){?>
						<li class="nav-item">
							<a class="nav-link" href="tendency.php" id="tendencia">Tendencias</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="sale.php" id="sale">
								% Descuentos
							</a>
						</li>
						<?php } ?>
						<li class="nav-item">
							<a class="nav-link" href="contacto.php" id="contacto">Contactanos</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="logout.php">Cerrar Session</a>	
						</li>
					
				</ul>
			</div>
		</div>
	</nav>

	<section id="hero" style="background-image: url('../img/correo2.png');">
		<div class="container">
			<div class="content-center topmargin-lg">
				<h1>Trend Stoore - correos</h1>
				<p>Realiza hoy tu pedido o consulta sobre las exclusivas prendas por temporada y
					viste con las ultimas tendencias en ropas y accesorios de acuerdo a tu estilo.
					<br> No olvides dejar bien tus datos, nuestros consultores Trend se contactara con usted. 
					<br><b>EMPIEZA A</b>
				</p>
				<a href="#contact" class="btn btn-light topmargin-sm">
					Contactarnos <ion-icon id="start" name="arrow-down-circle"></ion-icon>
				</a>
			</div>
		</div>
	</section>



	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-6 topmargin-sm">
					<h3>Si estas interesado en uno de las prendas o los outfits <b>solo deja un mensaje</b></h3>
					<p>Uno de nuestros consultores <b>Trend Stoore</b> se comunicaran contigo.</p>
				</div>
				<div class="col-md-6 topmargin-sm">
					<div class="row">
						<form id="contact-form" class="contact" name="contact-form"  method="post" action="enviar.php">
              <div class="col-md-12">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Nombres y Apellidos" name="nombre" id="nombre">
                </div>
              </div>
                        
              <div class="col-md-12">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email" name="email" id="email">
                </div>
              </div>
              
              <div class="col-md-12">
                <div class="form-group">
                  <textarea placeholder="Mensaje" cols="74" rows="10" name="mensaje" id="mensaje"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <center>
                  <button type="submit" class="btn btn-primary" style="background-color: black; border-color: white;">
                    Enviar
                  </button>
                </center>
              </div>
            </form>
					</div>
				</div>
			</div>
		</div>
  </section>

  <section id="footer" class="bg-dark">
    <div class="container">
      <img class="img-responsive " src="../img/logo2.png" width="100" height="100" class="d-inline-block align-top" alt="">
      <ul class="list-inline">
	  			<li class="list-inline-item footer-menu"><a href="welcome.php">Inicio</a></li>
				<li class="list-inline-item footer-menu"><a href="about_c.php">Nosotros</a></li>
				<li class="list-inline-item footer-menu"><a href="rdama_c.php">Ropas</a></li>
				<li class="list-inline-item footer-menu"><a href="tendency.php">Tendencias</a></li>
				<li class="list-inline-item footer-menu"><a href="sale.php">Descuentos</a></li>
				<li class="list-inline-item footer-menu"><a href="contacto.php">Contactanos</a></li>
      </ul>
      <small>@2021 Todos los derechos reservados.</small>
    </div>
  </section>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>
</body>

</html>
<?php } ?>