<?php
    //hacemos la conexion a la base de datos
    include("conexionReporte.php");

    //capturamos los datos del formulario de edicion
    $id = $_POST['id'];
    $DNI=$_POST['DNI'];
    $Nombre=$_POST['nombre'];
    $Apellido=$_POST['apellido'];
    $Telefono=$_POST['telefono'];
    $Email=$_POST['email'];
    $Actividad=$_POST['actividad'];

    //actualizar los datos de la tabla clientes

    $actualizar = "UPDATE clientes SET DNI='$DNI', Nombre='$Nombre', Apellido='$Apellido', Teléfono='$Telefono', Email='$Email', Actividad='$Actividad' WHERE idCliente = '$id' ";

    $resultadoActualizar = mysqli_query($conexion, $actualizar);

    if($resultadoActualizar){
        echo "<script>alert('Se han actualizado correctamente'); window.location='/FORM TESIS/VisualizarClientes.php';</script>";
    }else {
        echo "<script>alert('No se pudo actualizar'); window.history.go(-1);</script>";
    }
    
?>