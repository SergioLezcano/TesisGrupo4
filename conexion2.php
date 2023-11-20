<?php

    $conexion = new mysqli("localhost", "CHECHOS", "Sergio.1991", "inmo_gigantino", "3306");

    if(!empty($_POST['btnRegistroProp'])){
        if (empty($_POST['TipoActividad']) && empty($_POST['Direccion']) && empty($_POST['Localidad']) && 
        empty($_POST['descripcion']) && empty($_POST['Precio'])) {
            echo'<div id="alert">ALGUNOS CAMPOS ESTAN VACIOS</div>';
        } else {

            $Actividad=$_POST['TipoActividad'];
            $Direccion=$_POST['Direccion'];
            $Localidad=$_POST['Localidad'];
            $Descripcion=$_POST['descripcion'];
            $Precio=$_POST['Precio'];

            $sql="INSERT INTO unidades VALUES (' ', '$Actividad', '$Direccion', '$Localidad', '$Descripcion', '$Precio')";
            //ejecutamos la sentencia sql
            $result=mysqli_query($conexion,$sql);
            if(!$result){
                echo "Hubro un error";
            }else{
                echo '<p style="background-color: chartreuse; font-family: Arial, Helvetica, sans-serif; font-style: italic;">Datos guardados correctamente</p>';
            }
          
        }            
        
    }

?>