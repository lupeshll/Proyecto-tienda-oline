<?php
    session_start();

    if(isset($_SESSION['usuario'])){
       


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>
    <?php require_once "menu.php"; 
    ?>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Venta de Productos</h1>
        <div class="row">
            <div class="col-sm-12">
                <span class="btn btn-default" id="ventaProductosBtn">Vender Producto</span>
                <span class="btn btn-default" id="ventasHechasBtn">Ventas hechas</span>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div id="ventaProductos"></div>
                <div id="ventasHechas"></div>
            </div>
        </div>
    </div>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        $('#ventaProductosBtn').click(function(){
            esconderSeccionVenta();
            $('#ventaProductos').load('ventas/ventasDeProductos.php');
            $('#ventaProductos').show();
        });
        $('#ventasHechasBtn').click(function(){
            esconderSeccionVenta();
            $('#ventasHechas').load('ventas/ventasyReportes.php');
            $('#ventasHechas').show();         
        });
    });
    function esconderSeccionVenta(){
        $('#ventaProductos').hide();
        $('#ventasHechas').hide();
    }
</script>
<?php
    }else{
        header("location: /proyectoJL/login.php");
    }


?>