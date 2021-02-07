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
<body style="background-color: black">
    
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="panel" style="border: 2px solid #ffffff;">
                    <div class="panel panel-heading" style="background-color: black;font-size: 15px; color: #ffffff;">
                        Trend Stoore -
                        <a href="index.html" class="btn btn-default btn-sm">
                        <span class="glyphicon glyphicon-home"></span></a>
                    </div>
                    <div class="panel panel-body">
                        <p>
                            <center><img src="img/logo1.png" width="150px" height="150px"></center>
                            
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>	
</body>
</html>

<script type="text/javascript">
    Swal.fire({
        icon: 'info',
        title: 'Buen día Empleado Trend',
        text: 'Si eres parte de la empresa inicia sesión con tu usuario asignado;'+
                'además, toma en cuenta que el acceso al sistema de la empresa Trend Stoore'+
                ' es manejado por el administrador. Por otro lado, para la visualización del sistema'+
                ' se habilito el siguiente usuario: admin y contraseña:admin.',
    });
</script>	
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