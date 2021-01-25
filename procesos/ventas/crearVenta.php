<?php
    session_start();
    require_once "../../clases/conexion.php";
    require_once "../../clases/ventas.php";

    $obj=new ventas();


    if(count($_SESSION['tablaComprasTemp'])==0){
        echo 0;
    }else{
        $result=$obj->crearVenta();
        unset($_SESSION['tablaComprasTemp']);
        echo $result;
    }
?>