<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas Trend Stoore</title>
    <!-- Bootstrap -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">    
     <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <?php

      require_once "dependecy.php";
    ?>
</head>
<body>

<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

 -->



<!------ Include the above in your HEAD tag ---------->

<!-- Begin Navbar -->
  <div id="nav">
      <div class="navbar navbar-inverse navbar-fixed-top" data-spy="affix" data-offset-top="100">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="inicio.php"><img class="img-responsive logo img-thumbnail" src="../img/logo1.png" alt="" width="100px" height="100px"></a>
          </div>
          <div id="navbar" class="collapse navbar-collapse">

            <ul class="nav navbar-nav navbar-right">

              <li class="active"><a href="inicio.php"><span class="glyphicon glyphicon-home">
              </span> Inicio</a>
              </li>

            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <span class="glyphicon glyphicon-list-alt"></span> Administrar Articulos <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="categorias.php">Categorias</a></li>
                <li><a href="articulos.php">Articulos</a></li>
              </ul> 
            </li>

            <?php
              if($_SESSION['usuario']=="admin"):
            ?>
              <li><a href="usuarios.php"><span class="glyphicon glyphicon-user"></span>
              Administrar usuarios</a>
              </li>
            <?php
              endif; 
            ?>

            <li><a href="clientes.php"><span class="glyphicon glyphicon-user"></span>
              Clientes</a>
            </li>
            <li><a href="ventas.php"><span class="glyphicon glyphicon-usd"></span> 
              Vender Articulo</a>
            </li>
            
            <li class="dropdown" >
              <a href="#" style="color: red"  class="dropdown-toggle" data-toggle="dropdown" 
              role="button" aria-haspopup="true" aria-expanded="false">
              <span class="glyphicon glyphicon-user"></span> Usuario: <?php echo $_SESSION['usuario'];?> <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a style="color: red" href="../procesos/salir.php"><span class="glyphicon glyphicon-off"></span> 
                  Salir</a>
              </li>
                
              </ul>
            </li>
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
      <!--/.contatiner -->
    </div>
  </div>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    
    <!-- /container -->
    <!-- include javascript, jQuery FIRST -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>     
</body>
</html>
<script type="text/javascript">
    $(window).scroll(function() {
		if ($(document).scrollTop() > 150) {
            
			$('.logo').height(200);

		}
		else {
            $('.logo').height(100);
        }
	});
</script>