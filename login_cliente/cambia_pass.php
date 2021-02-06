<?php
    require 'funcs/conexion.php';
    require 'funcs/funcs.php';
    
    if(empty($_GET['user_id'])){
        header('Location: inicio.php');
    }

    if(empty($_GET['token'])){
        header('Location: inicio.php');
    }

    $user_id = $mysqli->real_escape_string($_GET['user_id']);
    $token = $mysqli->real_escape_string($_GET['token']);

    if(!verificaTokenPass($user_id,$token)){
        echo 'No se pudo verificar los datos';
        exit;
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
            <div class="col-sm-4"></div>
            <div class=" col-sm-4">
                <div class="panel panel-info" style="border: 2px solid #ffffff;">
                    <div class="panel panel-heading" style="background-color: black;font-size: 15px; color: #ffffff;">
                        Cliente Trend - Cambiar contraseña 
                        
                    </div>

                    <div class="panel panel-body">

                        <form id="loginform" class="form-horizontal" role="form"
                        action="guarda_pass.php" method="POST" autocomplete="off">
                            
                            <input id="user_id" type="hidden" name="user_id"
                                    value="<?php echo $user_id;?>" /> 
                            
                            <input id="token" type="hidden" name="token"
                            value="<?php echo $token;?>" /> 

							<div class="form-group">
                                <label for="password" class="cold-md-3 control-label">
                                Nueva contraseña
                                </label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control"
                                    name="password" placeholder="Contraseña" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="password" class="cold-md-3 control-label">
                                Confirmar contraseña
                                </label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control"
                                    name="con_password" placeholder="Confirmar contraseña" required>
                                </div>
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
                       
                    </div>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
</body>
</html>
