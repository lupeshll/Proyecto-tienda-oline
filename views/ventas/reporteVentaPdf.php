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
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <body>
        <img src="../p" width="200" height="200">
        <br>
        <table class="table">
            <tr>
                <td>Fecha:<?php echo $fecha; ?></td>
            </tr>
            <tr>
                <td>Folio:<?php echo $folio ?></td>
            </tr>
            <tr>
                <td>Cliente:<?php echo $objv->nombreCliente($idcliente); ?></td>
            </tr>
        </table>
     
        <table class="table">
            <tr>
                <td>Nombre producto</td>
                <td>Precio</td>
                <td>Cantidad</td>
                <td>Descripcion</td>
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
                while($mostrar=mysqli_fetch_row($result)):
                ?>

            <tr>
                <td><?php echo $ver[3]; ?></td>
                <td><?php echo $ver[4]; ?></td>
                <td>1</td>
                <td><?php echo $ver[5]; ?></td>
            </tr>
            <?php  
                $total=$total + $ver[4];
            endwhile;
            ?>
            <tr>
                <td>Total = <?php echo "S/. ".$total; ?></td>
            </tr>
        </table>
    </body>
    </html>
