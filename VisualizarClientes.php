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


        /* Aquí puedes añadir estilos específicos para esta página si es necesario */
</style>

<body class="container-fluid">
    <div class="container-table">
        <div class="table-title">DATOS DE CLIENTES</div>
        <div class="table-header">DNI</div>
        <div class="table-header">NOMBRE</div>
        <div class="table-header">APELLIDO</div>
        <div class="table-header">TELEFONO</div>
        <div class="table-header">E-MAIL</div>
        <div class="table-header">ACTIVIDAD</div>
        <?php

            $resultado = mysqli_query($conexion, $clientes);

            while ($row = mysqli_fetch_assoc($resultado)) { ?>
                <div class="table-items"><?php echo $row['DNI']?></div>
                <div class="table-items"><?php echo $row['Nombre']?></div>
                <div class="table-items"><?php echo $row['Apellido']?></div>
                <div class="table-items"><?php echo $row['Teléfono']?></div>
                <div class="table-items"><?php echo $row['Email']?></div>
                <div class="table-items"><?php echo $row['Actividad']?></div>
            <?php } mysqli_free_result($resultado);
        ?>
        
    </div>
    <div>
        <div class="div">
            <a href="CodigoReporte.php">IMPRIMIR FORMULARIO</a>
            <a href="Clientes.html">VOLVER ATRÁS</a>
        </div>
    </div>
    
    
</body>
</html>