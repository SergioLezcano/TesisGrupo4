<?php

    include("conexionReporte.php");

    $id = $_GET['id'];

    $eliminarReg = "DELETE FROM clientes WHERE idCliente = '$id' ";

    $resultadoEliminar = mysqli_query($conexion, $eliminarReg);

    if($resultadoEliminar){
        header ("Location: VisualizarClientes.php");
    }else {
        echo "<script>alert('No se pudo eliminar'); window.history.go(-1);</script>";
    }
    
?>