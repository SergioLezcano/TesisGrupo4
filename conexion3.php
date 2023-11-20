<?php

    $conexion = new mysqli("localhost", "CHECHOS", "Sergio.1991", "inmo_gigantino", "3306");

    if(!empty($_POST['btnRegPropietarios'])){
        if (empty($_POST['DNI']) && empty($_POST['nombre']) && empty($_POST['apellido']) && 
        empty($_POST['Telefono']) && empty($_POST['email'])) {
            echo'<div id="alert">ALGUNOS CAMPOS ESTAN VACIOS</div>';
        } else {

            $DNI=$_POST['DNI'];
            $Nombre=$_POST['nombre'];
            $Apellido=$_POST['apellido'];
            $Telefono=$_POST['Telefono'];
            $Email=$_POST['email'];

            $sql="INSERT INTO propietarios VALUES (' ', '$DNI', '$Nombre', '$Apellido', '$Telefono', '$Email')";
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