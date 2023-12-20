<?php

    include("conexionReporte.php");

    $id = $_GET['id'];

    $ModificarReg = "SELECT * FROM propietarios WHERE IDpropietarios = '$id'";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
    <title>REPORTE PROPIETARIOS</title>
    <link rel="stylesheet" href="css/estiloTabla3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<style>
        /* Estilos para los botones */
        .div{
            display: inline-block;
            position: relative;
            padding: 10px;
            align-items: center;
            align-content: center;
        }

        
</style>

<body class="container-fluid">
    <form class="row col-12 container-table3 container-fluid" action="ActualizarPropietarios.php" method="post">
        <div class="table-title3 col-12">DATOS DE PROPIETARIOS</div>
        <div class="table-header3 col-2">DNI</div>
        <div class="table-header3 col-2">NOMBRE</div>
        <div class="table-header3 col-2">APELLIDO</div>
        <div class="table-header3 col-2">TELÉFONO</div>
        <div class="table-header3 col-3">E-MAIL</div>

        <?php

            $resultado = mysqli_query($conexion, $ModificarReg);

            while ($row = mysqli_fetch_assoc($resultado)) { ?>
                <input type="hidden" class="table-items" value="<?php echo $row['IDpropietarios'];?>" name="id">
                <input type="text" class="table-items col-2" value="<?php echo $row['DNI'];?>" name="DNI">
                <input type="text" class="table-items col-2" value="<?php echo $row['Nombre'];?>" name="nombre">
                <input type="text" class="table-items col-2" value="<?php echo $row['Apellido'];?>" name="apellido">
                <input type="text" class="table-items col-2" value="<?php echo $row['Telefono'];?>" name="telefono">
                <input type="text" class="table-items col-3" value="<?php echo $row['Email'];?>" name="email">
        <?php } mysqli_free_result($resultado);?>

        <script src="Confirmacion.js"></script>

        <div>
        <div class="div">
            <input type="submit" value="ACTUALIZAR" class="btn_submit">
        </div>
    </div>
    </form>
    
    
</body>
</html>