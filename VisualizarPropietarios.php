<?php

    include("conexionReporte.php");
    $propietarios = "SELECT * FROM propietarios";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
    <title>REPORTE CLIENTES</title>
    <link rel="stylesheet" href="css/estiloTabla3.css">
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
</style>

<body class="container-fluid">
    <div class="container-table3 container-fluid">
        <div class="table-title3">DATOS DE PROPIETARIOS</div>
        <div class="table-header3">DNI</div>
        <div class="table-header3">NOMBRE</div>
        <div class="table-header3">APELLIDO</div>
        <div class="table-header3">TELÉFONO</div>
        <div class="table-header3">E-MAIL</div>
        <?php

            $resultado = mysqli_query($conexion, $propietarios);

            while ($row = mysqli_fetch_assoc($resultado)) { ?>
                <div class="table-items3"><?php echo $row['DNI']?></div>
                <div class="table-items3"><?php echo $row['Nombre']?></div>
                <div class="table-items3"><?php echo $row['Apellido']?></div>
                <div class="table-items3"><?php echo $row['Telefono']?></div>
                <div class="table-items3"><?php echo $row['Email']?></div>
                
            <?php } mysqli_free_result($resultado);
        ?>
        
    </div>
    <div>
        <div class="div">
            <a href="RepoPropietarios.php">IMPRIMIR FORMULARIO</a>
            <a href="Propietarios.html">VOLVER ATRÁS</a>
        </div>
    </div>
    
    
</body>
</html>