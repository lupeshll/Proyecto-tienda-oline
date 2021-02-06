<?php
	require 'PHPMailer/PHPMailerAutoload.php';
	require 'funcs/conexion.php';
    require 'funcs/funcs.php';

    $errors=array();

    if(!empty($_POST))
    {
        $nombre=$mysqli->real_escape_string($_POST['nombre']);
        $usuario=$mysqli->real_escape_string($_POST['usuario']);
        $password=$mysqli->real_escape_string($_POST['password']);
        $con_password=$mysqli->real_escape_string($_POST['con_password']);
        $email=$mysqli->real_escape_string($_POST['email']);
        $captcha=$mysqli->real_escape_string($_POST['g-recaptcha-response']);

        //Validaciones
        $activo = 0;
        $tipo_usuario=2;
        $secret='6LeVs0oaAAAAAGmbwOCg1JXWHgdBPsocmwFcvXPW';

        if(!$captcha){
            $errors[]="Por favor verifica el captcha";
        }

        if(isNull($nombre, $usuario,$password,$con_password,$email)){
            $errors[]="Debe llenar todos los campos";
        }

        if(!isEmail($email)){
            $errors[]="Dirección de correo inválida";
        }

        if(!validaPassword($password,$con_password)){
            $errors[]="Las contraseñas no coinciden";
        }

        if(usuarioExiste($usuario)){
            $errors[]="El nombre de usuario $usuario ya existe";
        }

        if(emailExiste($email)){
            $errors[]="El correo electrónico $email ya esta registrado";
        }

        if(count($errors)== 0)
        {
            $response = file_get_contents(
                "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");
                
                $arr = json_decode($response,TRUE);
                
                if($arr['success'])
                {
                    $pass_hash= hashPassword($password);
                    $token = generateToken();

                    $registro = registraUsuario($usuario, $pass_hash,$nombre,$email,
                    $activo, $token,$tipo_usuario);

                    if($registro > 0){

                        $url = 'http://'.$_SERVER["SERVER_NAME"].
                        '/login/activar.php?id='.$registro.'&val='.$token;

                        $asunto = 'Activar Cuenta - Cliente Trend';
                        $cuerpo= "Estimad@ $nombre: <br /><br />Para continuar con el 
                        proceso de registro, es necesario hacer click en el siguiente 
                        link <a href='$url'>Activar Cuenta</a>";

                        if(enviarEmail($email, $nombre, $asunto, $cuerpo)){
                            echo "Para terminar el proceso de regsitro siga las
                            instrucciones que le hemos enviado la direccion de correo
                            electronico: $email";
                            
                            echo "<br><a href='inicio.php'>Iniciar sesion</a>";
                            exit; 
                        }else{
                            $errors[] = "Error al enviar Email";
                        }
                    }else{
                        $errors[] = 'Error al registrar';
                    }
                }else{
                        $errors[] = 'Error al comprobar Captcha';
                }
            

        }
    
    }
    
	
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trend Stoore| Regsitro Cliente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</head>
<body style="background-color: gray">
    <br><br><br>
    <div class="container">
        <div class="row">
            <!-- <div class="col-sm-6"></div> -->
            <div class="col-md-9">
                <div class="panel panel-info" style="border: 2px solid #ffffff;">
                    <div class="panel panel-heading" style="background-color: black;font-size: 15px; color: #ffffff;">
                        Trend Stoore - Registarse
                        <a href="../index.html" class="btn btn-default btn-sm">
                        <span class="glyphicon glyphicon-home"></span></a>
                    </div>

                    <div class="panel panel-body">
                        <form id="signupform" class="form-horizontal" role="form"
                        action="<?php $_SERVER['PHP_SELF'] ?>" method="POST"
                        autocomplete="off">
                            
                            <div id="signupalert" style="display:none" 
                            class="alert alert-danger">
                                <p>Error:</p>
                                <span></span>
                            </div>

                            <div class="form-group">
                                <label for="nombre" class="col-md-3 control-label">
                                Nombre y Apellido:</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="nombre"
                                    placeholder="Nombre y Apellido" value="<?php if(isset($nombre)) echo $nombre;?>" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="usuario" class="col-md-3
                                control-label">Usuario</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="usuario"
                                    placeholder="Usuario" value="<?php if(isset($usuario)) echo $usuario;?>" required >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-md-3
                                control-label">Contraseña</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="password"
                                    placeholder="Password" required >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-md-3
                                control-label">Confirmar contraseña</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="con_password"
                                    placeholder="Confirmar password" required >
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">
                                Email</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email"
                                    placeholder="Email"  value="<?php if(isset($email)) echo $email;?>" required >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="captcha" class="col-md-3
                                control-label"></label>
                                <div class="g-recaptcha col-md-9" data-sitekey=
                                "6LeVs0oaAAAAAC2GFv1rXwY2J2ZoPjnyfy7zDr7-">
                                </div>
                            
                                <div class="col-md-offset-3 col-md-9">
                                    <button id="btn-signup" type="submit" 
                                    class="btn btn-info"><i class="icon-hand-right">
                                    Registrar</i></button>
                                </div>
                            </div> 
                        </form>
                        <?php echo resultBlock($errors);?>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>
