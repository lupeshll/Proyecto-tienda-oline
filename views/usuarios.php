<?php
    session_start();

    if(isset($_SESSION['usuario'])){
       


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <?php require_once "menu.php"; ?>
</head>
<body>
    <div class="container">
    <h1>Administrar Usuarios</h1>
    <div class="row">
        <div class="col-sm-4">
        <form id="frmRegistro">
                    <label>Nombre</label>
                    <input type="text" class="form-control input-sm" id="nombre" name="nombre">
                    <label>Apellido</label>
                    <input type="text" class="form-control input-sm" id="apellido" name="apellido">
                    <label>Usuario</label>
                    <input type="text" class="form-control input-sm" id="usuario" name="usuario">
                    <label>Password</label>
                    <input type="text" class="form-control input-sm" id="password" name="password">
                    <p></p>
                    <span  class="btn btn-primary" id="registro">Registrar</span>
                            
                        </form>
            </div>
            <div class="col-sm-7">
            <div id="tablaUsuariosLoad"></div>
            </div>
        </div>          
    </div>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){

        $('#tablaUsuariosLoad').load('usuarios/tablaUsuarios.php');
		$('#registro').click(function(){

			vacios=validarFormVacio('frmRegistro');

			if(vacios > 0){
                alertify.alert("Debes completar todos los campos");
				return false;
			}

			datos=$('#frmRegistro').serialize();
			$.ajax({
				type:'POST',
				data:datos,
				url:"../procesos/regLogin/registrarUsuario.php",
				success:function(r){
                   
					if(r==1){
                        $('#tablaUsuariosLoad').load('usuarios/tablaUsuarios.php');
                        alertify.success("Registro exitoso");
                    }else{
                        alertify.error("Fallo al agregar");
                    }

				}
			});
		});
	});
</script>
<?php
    }else{
        header("location: /proyectoJL/login.php");
    }


?>