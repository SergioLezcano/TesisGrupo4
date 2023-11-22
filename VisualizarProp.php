<?php
    include("conexionReporte.php");
    $unidades = "SELECT * FROM unidades";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
    <title>REPORTE PROPIEDADES</title>
    <link rel="stylesheet" href="css/estiloTabla2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
            margin: 30px;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 100px;
            text-align: center;
        }
        .div{
            display: inline-block;
            position: relative;
            padding: 20px 30px;
            align-items: center;
            align-content: center;
        }
</style>

<body class="container-fluid">
    <div class="tableDos">
        <div class="table-titleDos">DATOS DE PROPIEDADES</div>
        <div class="table-headerDos">TIPO</div>
        <div class="table-headerDos">DIRECCIÓN</div>
        <div class="table-headerDos">LOCALIDAD</div>
        <div class="table-headerDos">CARACTERISTICAS</div>
        <div class="table-headerDos">PRECIO</div>
        <?php

            $resultado = mysqli_query($conexion, $unidades);

            while ($row = mysqli_fetch_assoc($resultado)) { ?>
                <div class="table-itemsDos"><?php echo $row['Tipo_Actividad']?></div>
                <div class="table-itemsDos"><?php echo $row['Dirección']?></div>
                <div class="table-itemsDos"><?php echo $row['Localidad']?></div>
                <div class="table-itemsDos"><?php echo $row['Caracteristicas']?></div>
                <div class="table-itemsDos"><?php echo $row['Precio']?></div>
                
            <?php } mysqli_free_result($resultado);
        ?>
        
    </div>
    <div>
        <div class="div">
            <a href="ReporteProp.php">IMPRIMIR FORMULARIO</a>
            <a href="Propiedades.html">VOLVER ATRÁS</a>
        </div>
    </div>
    
    
</body>
</html>