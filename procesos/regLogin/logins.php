<?php
session_start();   
require_once ("../../clases/conexion.php");
require_once ("../../clases/usuarios.php");


    $obj= new usuarios();
    
    $c=new conectar();
    $conexion=$c->conexion();

    //Se debe corregir el acceso 

    //if(isset($_POST['usuario']) && isset($_POST['password'])){
    // $pass=sha1($_POST['password']);
    if($_SERVER['REQUEST_METHOD']=='POST'){
            
        $username = mysql_entities_fix_string($conexion, $_POST['usuario']);
        $pw_temp = mysql_entities_fix_string($conexion, $_POST['password']);
        $password = password_hash($pw_temp, PASSWORD_DEFAULT);

        $datos=array(
            $username,
            $password
        );
    
       
        echo $obj->loginUser($datos);    
    }

    /* if (isset($_POST['username'])&&
        isset($_POST['password']))
    {
      session_start();
      
        $un_temp = mysql_entities_fix_string($conexion, $_POST['username']);
        $pw_temp = mysql_entities_fix_string($conexion, $_POST['password']);
        $id = mysql_entities_fix_string($conexion, $_POST['reg']);

        $query   = "SELECT * FROM users WHERE username='$un_temp'";
        $result  = $conexion->query($query);
        $_SESSION['Usuario'] = $un_temp;
        $_SESSION['id']=$id;
        if (!$result) die ("Usuario no encontrado");
        elseif ($result->num_rows)
        {
            $row = $result->fetch_array(MYSQLI_NUM);
            $result->close();
        }
    } */
    
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