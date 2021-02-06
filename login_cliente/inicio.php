<?php
	session_start();
	require 'funcs/conexion.php';
	require 'funcs/funcs.php';
	
	$errors=array();

	if(!empty($_POST)){

		$usuario = $mysqli->real_escape_string($_POST['usuario']);
		$password = $mysqli->real_escape_string($_POST['password']);

		if(isNullLogin($usuario, $password)){
			$errors[] = "Debes llenar todos los campos";
		}

		$errors[]=login($usuario,$password);
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trend Stoore | Login</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</head>
<body style="background-color: black">
<br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-md-6">
                <div class="panel panel-info" style="border: 2px solid #ffffff;">
                    <div class="panel panel-heading" style="background-color: black;font-size: 15px; color: #ffffff;">
                        Trend Stoore - Inicia sesión
                        <a href="../index.html" class="btn btn-default btn-sm">
                        <span class="glyphicon glyphicon-home"></span></a>
                    </div>

                    <div class="panel panel-body">
						<p>
                            <center><img src="../img/logo1.png" width="150px" height="150px"></center>  
                        </p>
                        <form id="loginform" class="form-horizontal" role="form"
                        action="<?php $_SERVER['PHP_SELF'] ?>" method="POST"
                        autocomplete="off">
                            
                            <div style="margin-bottom:25px" class="input-group">
                                <span class="input-group-addon">
								<span class="glyphicon glyphicon-user"></span>
								</span>
									
									<input id="usuario" type="text" class="form-control" name="usuario"
                                    placeholder="Usuario o email" required>
									
                                
                            </div>

							<div style="margin-bottom:25px" class="input-group">
                                <span class="input-group-addon">
								<span class="glyphicon glyphicon-lock"></span>
								</span>
									
									<input id="password" type="password" class="form-control" name="password"
                                    placeholder="Contraseña" required>
                            </div>

							<div style="margin-bottom:10px" class="form-group">
                                <div class="col-sm-12 controls">
									<button id="btn-login" type="submit" class="btn btn-success">
									Iniciar sesión</button>
								</div>
                            </div>
							
                            <div class="form-group">
								<center>
								<div class="col-sm-12 controls">
									<div style="border-top: 1px solid#888; 
									padding-top:15px; font-size:85%">
										<a href="recupera.php">¿Olvidaste tu contraseña?</a>
									</div>
									<div style="padding-top:15px; font-size:85%">
										No tienes una cuenta.
										<a href="registro.php">Regsitrate aquí.</a>
									</div>
								</div>
								</center>
                            </div> 
                        </form>
                        <?php echo resultBlock($errors); ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
</body>
</html>