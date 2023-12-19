<?php

    include("conexionReporte.php");
    $clientes = "SELECT * FROM clientes";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
    <title>REPORTE CLIENTES</title>
    <link rel="stylesheet" href="css/estiloTabla.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<style>
        /* Estilos para los botones */
        a {
            display: inline-block;
            align-content: center;
            width: 250px;
            height: 50px;
            background-color: #4CAF50;
            color: white;
            padding: 10px 10px;
            margin: 10px;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 100px;
            text-align: center;
        }
        .div{
            display: inline-block;
            position: relative;
            padding: 0;
            align-items: center;
            align-content: center;
        }



</style>

<body class="container-fluid">
    <div class="row col-12 container-table container-fluid">
        <div class="table-title col-12">DATOS DE CLIENTES</div>
        <div class="table-header col-1">DNI</div>
        <div class="table-header col-2">NOMBRE</div>
        <div class="table-header col-1">APELLIDO</div>
        <div class="table-header col-2">TELEFONO</div>
        <div class="table-header col-2">E-MAIL</div>
        <div class="table-header col-2">ACTIVIDAD</div>
        <div class="table-header col-2">ACCION</div>
        
        <?php
        $resultado = mysqli_query($conexion, $clientes);

        while ($row = mysqli_fetch_assoc($resultado)) { ?>
            <div class="table-items col-1"><?php echo $row['DNI'];?></div>
            <div class="table-items col-2"><?php echo $row['Nombre'];?></div>
            <div class="table-items col-1"><?php echo $row['Apellido'];?></div>
            <div class="table-items col-2"><?php echo $row['Teléfono'];?></div>
            <div class="table-items col-2"><?php echo $row['Email'];?></div>
            <div class="table-items col-2"><?php echo $row['Actividad'];?></div>
            <div class="table-items col-2">
                <a href="ModificarCliente.php?id=<?php echo $row['idCliente'];?>" class="table_items_link" style="width: 150px; height: auto; margin: 10px; background-color: #000;">Modificar</a>
                <a href="EliminarCliente.php?id=<?php echo $row['idCliente'];?>" class="table_items_linkEliminar" style="width: 150px; height: auto; margin: 10px; background-color: #000">Eliminar</a>
            </div>
            <?php } mysqli_free_result($resultado);?>
        
    </div>

    <script src="Confirmacion.js"></script>
    <div class="container-fluid">
        <div class="div">
            <a href="CodigoReporte.php">IMPRIMIR FORMULARIO</a>
            <a href="Clientes.html">VOLVER ATRÁS</a>
        </div>
    </div>
    
    
</body>
</html>