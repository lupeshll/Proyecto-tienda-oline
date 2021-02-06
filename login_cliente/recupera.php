<?php
    session_start();
    require 'PHPMailer/PHPMailerAutoload.php';
	require 'funcs/conexion.php';
	require 'funcs/funcs.php';
	
	$errors=array();

	if(!empty($_POST)){

		$email = $mysqli->real_escape_string($_POST['email']);
		
		if(!isEmail($email)){
            $errors[] = "Debes ingresar un correo electronico válido";
        }    
            if(!emailExiste($email)){
                $user_id = getValor('id','correo',$email);
                $nombre = getValor('nombre','correo',$email);

                $token = generaTokenPass($user_id);

                $url = 'http://'.$_SERVER["SERVER_NAME"].
                '/login/cambia_pass.php?user_id='.$user_id.'&token='.$token;

                $asunto = 'Recuperar Password - Cliente Trend';
                $cuerpo= "Hola $nombre: <br /><br />Se ha solicitado un reinicio
                de contraseña. <br /><br />Para restaurar la contraseña, visita la 
                sguiente dirección: 
                <a href='$url'>Cambiar contraseña</a>";

                if(enviarEmail($email, $nombre,$asunto,$cuerpo)){
                    echo "Hemos enviando un correo electrónico a la direccion
                    $email para restablacer tu contraseña. <br />";

                    echo "<a href='inicio.php'>Iniciar sesión</a>";
                    exit;

                }else{
                    $errors[] = "Error al enviar el correo";
                }
            }else{
                $errors[]="No existe el correo electrónico";
            }
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Recuperar contraseña</title>

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
            <div class=" col-sm-6 ">
                <div class="panel panel-info" style="border: 2px solid #ffffff;">
                    <div class="panel panel-heading" style="background-color: black;font-size: 15px; color: #ffffff;">
                        Cliente Trend - Recuperar contraseña 
                        
                    </div>

                    <div class="panel panel-body">
						<div style="display:none" id="login-alert" 
                        class="alert alert-danger col-sm-12"></div>

                        <form id="loginform" class="form-horizontal" role="form"
                        action="<?php $_SERVER['PHP_SELF'] ?>" method="POST"
                        autocomplete="off">
                            
                            <div style="margin-bottom:25px" class="input-group">
                                <span class="input-group-addon">
								<span class="glyphicon glyphicon-user"></span>
								</span>
									<input id="email" type="email" class="form-control" name="email"
                                    placeholder="Email" required>
									
                                
                            </div>

							<div style="margin-top:10" class="form-group">
                                <div class="col-sm-12 controls">
                                    <button id="btn-login" type=submit class="btn btn-success">
                                    Enviar</a>
                                </div>
                            </div>
                            
                            <div class="form-group">
								<center>
								<div class="col-sm-12 control">
									<div style="border-top: 1px solid#888; 
									padding-top:15px; font-size:85%">
										<a href="inicio.php">Inicia sesión</a>
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
            <div class="col-sm-3"></div>
        </div>
    </div>
</body>
</html>