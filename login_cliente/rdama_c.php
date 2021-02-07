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

	<title>Trend Stoore | Ropas damas</title>
	<link rel="icon" href="../img/logo-icon.ico">
</head>

<body>
	<nav class="navbar navbar-expand-lg fixed-top">
		<div class="container">
			<a class="navbar-brand" href="index.html">
				<img class="img-responsive " src="../img/logo2.png" width="70" height="70" class="d-inline-block align-top"
					alt="">
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
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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


	<section id="clothes" style="background-color: black">

		<div class="container-fluid">
			<div class="content-center">
				<h2 style="color: #f3f3f3"> Ropas variadas de estreno por temporada para damas en <b>Trend Stoore</b>
				</h2>
				<p style="color: #c7c3c3">Las imagenes de los productos son referenciales y las promociones tienen un
					stock mínimo.
					<i>Cualquier pedido bajo consulta el area de <b>Contactanos</b></i>.
				</p>
			</div>

			<div class="col-md-12">
				<center>
					<h2 style="color: #f3f3f3"><b> Variedad de Jeans </b> </h2>
				</center>
				<br>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Jeans Classic rasgado</h2>
							</a>
							<a href="#">
								<p>S/. 130</p>
							</a>
						</div>
						<img src="../img/jean2.png" width="450" height="500" class="img-fluid" alt="ropa 1">
					</div>
				</div>




				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Jean Urbano Gray</h2>
							</a>
							<a href="#">
								<p>S/. 140</p>
							</a>
						</div>
						<img src="../img/chica9.png" width="450" height="300" class="img-fluid" alt="ropa 2">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Jean Urbano Black</h2>
							</a>
							<a href="#">
								<p>S/. 140</p>
							</a>
						</div>
						<img src="../img/chica4.png" width="450" height="400" class="img-fluid" alt="ropa 2">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Jeans clasico con rasgados</h2>
							</a>
							<a href="#">
								<p>S/. 180</p>
							</a>
						</div>
						<img src="../img/chica3.png" width="450" height="400" class="img-fluid" alt="ropa 3">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Jean Dreapers</h2>
							</a>
							<a href="#">
								<p>S/. 150</p>
							</a>
						</div>
						<img src="../img/jean1.png" width="450" height="500" class="img-fluid" alt="ropa 2">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Jeans Joeper</h2>
							</a>
							<a href="#">
								<p>S/. 180</p>
							</a>
						</div>
						<img src="../img/chica.png" width="450" height="400" class="img-fluid" alt="ropa 3">
					</div>
				</div>



				<div class="col-md-12">
					<center>
						<h2 style="color: #f3f3f3"><b> Variedad de vestidos </b> </h2>
					</center>
					<br>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Vestido Juvenil Rojo</h2>
							</a>
							<a href="#">
								<p>S/. 180</p>
							</a>
						</div>
						<img src="../img/chica8.png" width="450" height="400" class="img-fluid" alt="ropa 3">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Vestido BLUE manga corta </h2>
							</a>
							<a href="#">
								<p>S/. 190</p>
							</a>
						</div>
						<img src="../img/vestido1.png" width="450" height="400" class="img-fluid" alt="ropa 3">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Vestido WHITE Cromel</h2>
							</a>
							<a href="#">
								<p>S/. 140</p>
							</a>
						</div>
						<img src="../img/vestido2.png" width="450" height="400" class="img-fluid" alt="ropa 3">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Vestido Jean</h2>
							</a>
							<a href="#">
								<p>S/. 150</p>
							</a>
						</div>
						<img src="../img/vestido3.png" width="450" height="400" class="img-fluid" alt="ropa 3">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Vestido Floreado</h2>
							</a>
							<a href="#">
								<p>S/. 140</p>
							</a>
						</div>
						<img src="../img/vestido4.png" width="450" height="400" class="img-fluid" alt="ropa 3">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Vestido Floreado BLACK</h2>
							</a>
							<a href="#">
								<p>S/. 150</p>
							</a>
						</div>
						<img src="../img/vestido5.png" width="450" height="300" class="img-fluid" alt="ropa 3">
					</div>
				</div>

				<div class="col-md-12">
					<center>
						<h2 style="color: #f3f3f3"><b> Variedad de shorts </b> </h2>
					</center>
					<br>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Short Jean</h2>
							</a>
							<a href="#">
								<p>S/. 100</p>
							</a>
						</div>
						<img src="../img/chica5.png" width="450" height="450" class="img-fluid" alt="ropa 4">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Short Blue con correa</h2>
							</a>
							<a href="#">
								<p>S/. 90</p>
							</a>
						</div>
						<img src="../img/short1.png" width="450" height="450" class="img-fluid" alt="ropa 4">
					</div>
				</div>




				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Short Jean Blanco</h2>
							</a>
							<a href="#">
								<p>S/. 100</p>
							</a>
						</div>
						<img src="../img/chica7.png" width="450" height="450" class="img-fluid" alt="ropa 4">
					</div>
				</div>



				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Short Jumper Blanco</h2>
							</a>
							<a href="#">
								<p>S/. 110</p>
							</a>
						</div>
						<img src="../img/short2.png" width="450" height="450" class="img-fluid" alt="ropa 4">
					</div>
				</div>



				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Short Jean rasgado</h2>
							</a>
							<a href="#">
								<p>S/. 140</p>
							</a>
						</div>
						<img src="../img/short3.png" width="450" height="450" class="img-fluid" alt="ropa 4">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Short Jean Negro</h2>
							</a>
							<a href="#">
								<p>S/. 110</p>
							</a>
						</div>
						<img src="../img/chica6.png" width="400" height="400" class="img-fluid" alt="ropa 5">
					</div>
				</div>


				<div class="col-md-12">
					<br><br><br>
					<center>
						<h2 style="color: #f3f3f3"><b> Variedad de Polos </b> </h2>
					</center>
					<br>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Polo Pieta Blanco</h2>
							</a>
							<a href="#">
								<p>S/. 120</p>
							</a>
						</div>
						<img src="../img/chica2.png" width="400" height="400" class="img-fluid" alt="ropa 6">
					</div>
				</div>
				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Polo semiTop Blanco</h2>
							</a>
							<a href="#">
								<p>S/. 90</p>
							</a>
						</div>
						<img src="../img/polo1.png" width="400" height="400" class="img-fluid" alt="ropa 6">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Polo Rose Power</h2>
							</a>
							<a href="#">
								<p>S/. 80</p>
							</a>
						</div>
						<img src="../img/polo2.png" width="400" height="400" class="img-fluid" alt="ropa 6">
					</div>
				</div>
				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Polo Creid con detalles</h2>
							</a>
							<a href="#">
								<p>S/. 120</p>
							</a>
						</div>
						<img src="../img/polo3.png" width="400" height="400" class="img-fluid" alt="ropa 6">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Polo Black STAR</h2>
							</a>
							<a href="#">
								<p>S/. 80</p>
							</a>
						</div>
						<img src="../img/polo4.png" width="400" height="400" class="img-fluid" alt="ropa 6">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Polo Acro</h2>
							</a>
							<a href="#">
								<p>S/. 80</p>
							</a>
						</div>
						<img src="../img/polo5.png" width="400" height="400" class="img-fluid" alt="ropa 6">
					</div>
				</div>





				<div class="col-md-12">
					<center>
						<br><br><br>
						<h2 style="color: #f3f3f3"><b> Variedad de accesorios </b> </h2>
					</center>
					<br>
				</div>
				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Billetera Andina</h2>
							</a>
							<a href="#">
								<p>S/. 250</p>
							</a>
						</div>
						<img src="../img/billetera.png" width="400" height="400" class="img-fluid" alt="ropa 6">
					</div>
				</div>
				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Cartera BLUE</h2>
							</a>
							<a href="#">
								<p>S/. 220</p>
							</a>
						</div>
						<img src="../img/cartera.png" width="400" height="400" class="img-fluid" alt="ropa 6">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Correa GUCCI</h2>
							</a>
							<a href="#">
								<p>S/. 240</p>
							</a>
						</div>
						<img src="../img/correa.png" width="400" height="400" class="img-fluid" alt="ropa 6">
					</div>
				</div>
				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Gafas PINK GIRL</h2>
							</a>
							<a href="#">
								<p>S/. 280</p>
							</a>
						</div>
						<img src="../img/lentes.png" width="400" height="400" class="img-fluid" alt="ropa 6">
					</div>
				</div>

				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Mochila GUINDA</h2>
							</a>
							<a href="#">
								<p>S/. 250</p>
							</a>
						</div>
						<img src="../img/mochila.png" width="400" height="400" class="img-fluid" alt="ropa 6">
					</div>
				</div>
				<div class="col-md-6">
					<div class="ropa-container">
						<div class="ropa-details">
							<a href="#">
								<h2>Reloj Taberno dama</h2>
							</a>
							<a href="#">
								<p>S/. 250</p>
							</a>
						</div>
						<img src="../img/reloj.png" width="400" height="400" class="img-fluid" alt="ropa 6">
					</div>
				</div>



			</div>
		</div>

	</section>

	<section id="footer" class="bg-dark">
		<div class="container">
			<img class="img-responsive " src="../img/logo2.png" width="100" height="100" class="d-inline-block align-top"
				alt="">
			<ul class="list-inline">
				<li class="list-inline-item footer-menu"><a href="welcome.php">Inicio</a></li>
				<li class="list-inline-item footer-menu"><a href="about_c.php">Nosotros</a></li>
				<li class="list-inline-item footer-menu"><a href="rcaballero_c.php">Ropas</a></li>
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