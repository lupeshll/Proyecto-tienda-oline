<?php 

session_start();
    require_once "../../clases/conexion.php";
    require_once "../../clases/clientes.php";

    $obj= new clientes();
    $datos=array(
        $_POST['idclienteU'],
        $_POST['nombreU'],
        $_POST['apellidoU'],
        $_POST['direccionU'],
        $_POST['emailU'],
        $_POST['telefonoU'],
        $_POST['rucU']

    );
    
    echo $obj->actualizaCliente($datos);
?>