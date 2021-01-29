<?php
    require_once "../../clases/conexion.php";
    require_once "../../clases/ventas.php";


    $objv= new ventas();
    $c= new conectar();
    $conexion=$c->conexion();

    $idventa=$_GET['idventa'];

    $sql="SELECT ve.id_venta,
                ve.fechaCompra,
                ve.id_cliente,
                art.nombre,
                art.precio,
                art.descripcion
            from ventas as ve
            inner join  producto as art
            on ve.id_producto=art.id_producto
            and ve.id_venta='$idventa'";

    $result=mysqli_query($conexion,$sql);
    $ver=mysqli_fetch_row($result);

        $folio=$ver[0];
        $fecha=$ver[1];
        $idcliente=$ver[2];
       
?>

    <!DOCTYPE html>
    <html>
    <head>
    <title>Reporte Venta</title>
    <style type="text/css">
		
@page {
            margin-top: 0.3em;
            margin-left: 0.6em;
        }
        body{
            font-size: xx_small;
        }
	</style>
    </head>
    <body>
        <p>El pepe</p>
        <p>
            Fecha:<?php echo $fecha; ?>
        </p>
        <p>
            Folio:<?php echo $folio ?>
        </p> 
        <p> 
            cliente:<?php echo $objv->nombreCliente($idcliente); ?>  
        </p>
        <table  style="border-collapce: collapce;"border="1">
            <tr>
            <td>Nombre</td>
            <td>Precio</td>
            </tr>
            <?php 
            $sql="SELECT ve.id_venta,
                        ve.fechaCompra,
                        ve.id_cliente,
                        art.nombre,
                        art.precio,
                        art.descripcion
                    from ventas as ve
                    inner join  producto as art
                    on ve.id_producto=art.id_producto
                    and ve.id_venta='$idventa'";

            $result=mysqli_query($conexion,$sql);
            $total=0;
            while($mostrar=mysqli_fetch_row($result)){

            ?>
            <tr>
            <td><?php=echo $mostrar[3];?></td>
            <td><?php=echo $mostrar[4] ?></td>
            </tr>
            <?php
            $total=$total + $mostrar[4];
                }
            ?>
            <tr>
                <td>Total: <?php echo "$".$total?></td>
            </tr>
        </table>
     
        
    </body>
    </html>
