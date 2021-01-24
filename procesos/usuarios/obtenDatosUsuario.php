<?php
    require_once "../../clases/conexion.php";
    require_once "../../clases/usuarios.php";

    $obj=new usuarios();

    $iduser=$_POST['idusuario'];

    echo json_encode($obj->obtenDatosUsuario($iduser));
?>