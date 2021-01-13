<?php
require_once ("../../clases/conexion.php");
require_once ("../../clases/usuarios.php");


    $obj= new usuarios();
    $c=new conectar();
        $conexion=$c->conexion();

    //if(isset($_POST['usuario']) && isset($_POST['password'])){
    // $pass=sha1($_POST['password']);
    if($_SERVER['REQUEST_METHOD']=='POST'){
            
                $nombre = mysql_entities_fix_string($conexion, $_POST['nombre']);
                $apellido = mysql_entities_fix_string($conexion, $_POST['apellido']);
                $username = mysql_entities_fix_string($conexion, $_POST['usuario']);
                $pw_temp = mysql_entities_fix_string($conexion, $_POST['password']);
                $password = password_hash($pw_temp, PASSWORD_DEFAULT);
        $datos=array(
            $nombre,
            $apellido,
            $username,
            $password
        );
    
       
        echo $obj->registroUsuarios($datos);
        
    
    }
    
    function mysql_entities_fix_string($conexion, $string)
    {
        return htmlentities(mysql_fix_string($conexion, $string));
      }
    function mysql_fix_string($conexion, $string)
    {
        if (get_magic_quotes_gpc()) $string = stripslashes($string);
        return $conexion->real_escape_string($string);
    }   
?>