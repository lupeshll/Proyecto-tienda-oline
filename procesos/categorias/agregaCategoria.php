<?php
    session_start();
    require_once "../../clases/conexion.php";
    require_once "../../clases/categorias.php";

    $fecha=date("Y-m-d");
    $idusuario=$_SESSION['iduser'];
    $categoria=$_POST['categoria'];

    $datos=array(
        $idusuario,
        $categoria,
        $fecha
    );

    //objeto categoria
    $obj=new categorias();

    echo $obj->agregarCategoria($datos);

    

?>