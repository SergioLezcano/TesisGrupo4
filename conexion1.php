<?php

    $conexion = new mysqli("localhost", "CHECHOS", "Sergio.1991", "inmo_gigantino", "3306");
    if(!empty($_POST['btnregistroClientes'])){
        if (empty($_POST['DNI']) && empty($_POST['nombre']) && empty($_POST['apellido']) && 
        empty($_POST['telefono']) && empty($_POST['email']) && empty($_POST['actividad'])) {
            echo'<div id="alert">ALGUNOS CAMPOS ESTAN VACIOS</div>';
        } else {

            $DNI=$_POST['DNI'];
            $Nombre=$_POST['nombre'];
            $Apellido=$_POST['apellido'];
            $Telefono=$_POST['telefono'];
            $Email=$_POST['email'];
            $Actividad=$_POST['actividad'];

            $sql="INSERT INTO clientes VALUES ('', '$DNI', '$Nombre', '$Apellido', '$Telefono', '$Email', '$Actividad')";
            //ejecutamos la sentencia sql
            $result=mysqli_query($conexion,$sql);
            if(!$result){
                echo "Hubro un error";
            }else{
                echo "Datos guardados correctamente";
            }
          
        }            
        
    }

?>