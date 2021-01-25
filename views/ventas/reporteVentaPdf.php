<?php
    require_once "../../clases/conexion.php";
    $c= new conectar();
    $conexion=$c->conexion();

    echo $idventa=$_GET['idventa'];
?>
