<?php
require_once "clases/conexion.php";
$obj= new conectar();
$conexion=$obj-> conexion();
$sql="SELECT * from usuarios where email='admin'";
$result=mysqli_query($conexion,$sql);
$validar=0;
if(mysqli_num_rows($result) > 0){
    $validar=1;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrendStoore| Login de usuario</title>
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
    <script src="librerias/jquery-3.2.1.min.js"></script>
    <script src="js/funciones.js"></script>
    
</head>
<body style="background-color: gray">
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">
                        Trend Stoore -
                    </div>
                    <div class="panel panel-body">
                        <p>
                            <center><img src="img/logo.png" width="150px" height="150px"></center>
                        </p>
                        <form id="frmLogin">
                            <label>Usuario</label>
                            <input type="text" class="form-control input-sm" name="usuario" id="usuario">
                            <label>Password</label>
                            <input type="password" class="form-control input-sm" name="password" id="password">
                            <p></p> 
                            <buttom class="btn btn-default" id="ingresar">Ingresar</buttom>
                            <?php if (!$validar): ?>
                            <a href="registro.php" class="btn btn-danger btn-sm">Registrar</a>
                            <?php endif; ?>
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-sm-4"></div>

        </div>
    </div>
</body>
</html>
<script type="text/javascript">
    
    $(document).ready(function(){
		$('#ingresar').click(function(){

			vacios=validarFormVacio('frmLogin');

			if(vacios > 0){
                alert("Debes completar todos los campos.");
				return false;
			}

			datos=$('#frmLogin').serialize();
			$.ajax({
				type:'POST',
				data:datos,
				url:"procesos/regLogin/logins.php",
				success:function(r){
                   if(r==1){
                        window.location="views/inicio.php";
                   }else{
                       alert("No se pudo acceder");
                   }
                  
				}
			});
		});
	});
</script>