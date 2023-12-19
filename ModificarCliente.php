<?php

    include("conexionReporte.php");

    $id = $_GET['id'];

    $ModificarReg = "SELECT * FROM clientes WHERE idCliente = '$id' ";
    
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
        .btn_submit {
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



</style>

<body class="container-fluid">
    <form action="ActualizarClientes.php" method="post" class="row col-12 container-table container-fluid">
        <div class="row col-12 container-table container-fluid">
            <div class="table-title col-12">DATOS DE CLIENTES</div>
            <div class="table-header col-2">DNI</div>
            <div class="table-header col-2">NOMBRE</div>
            <div class="table-header col-2">APELLIDO</div>
            <div class="table-header col-2">TELEFONO</div>
            <div class="table-header col-2">E-MAIL</div>
            <div class="table-header col-2">ACTIVIDAD</div>
        
            <?php
            $resultado = mysqli_query($conexion, $ModificarReg);

            while ($row = mysqli_fetch_assoc($resultado)) { ?>
                <input type="hidden" class="table-items col-2" value="<?php echo $row['idCliente'];?>" name="id">
                <input type="text" class="table-items col-2" value="<?php echo $row['DNI'];?>" name="DNI">
                <input type="text" class="table-items col-2" value="<?php echo $row['Nombre'];?>" name="nombre">
                <input type="text" class="table-items col-2" value="<?php echo $row['Apellido'];?>" name="apellido">
                <input type="text" class="table-items col-2" value="<?php echo $row['Teléfono'];?>" name="telefono">
                <input type="text" class="table-items col-2" value="<?php echo $row['Email'];?>" name="email">
                <input type="text" class="table-items col-2" value="<?php echo $row['Actividad'];?>" name="actividad">
                <?php } mysqli_free_result($resultado);?>
                <input type="submit" value="ACTUALIZAR" class="btn_submit">
        
        </div>

        <script src="Confirmacion.js"></script>
        <!-- <div class="container-fluid">
            <div>
                <input type="submit" value="ACTUALIZAR" class="btn_submit">
            </div>
        </div> -->
    </form>
    
    
    
</body>
</html>