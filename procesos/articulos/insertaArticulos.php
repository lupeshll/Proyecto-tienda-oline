<?php 
    

    $nombreImg=$_FILES['imagen']['name'];

    $datos=array(
        $_POST['categoriaSelect'],
        $_POST['nombre'],
        $_POST['descripcion'],
        $_POST['cantidad'],
        $_POST['precio'],
        $nombreImg
            );
    print_r($datos);
?>