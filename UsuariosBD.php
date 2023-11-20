<?php

    $conexion = new mysqli("localhost", "CHECHOS", "Sergio.1991", "inmo_gigantino", "3306");

    if(!empty($_POST['btnDatos'])){
        if (empty($_POST['User']) && empty($_POST['contraseña']) && empty($_POST['nombre']) && 
        empty($_POST['apellido']) ) {
            echo'<div id="alert" Style="background-color: gold; color: black;">LOS CAMPOS ESTAN VACIOS</div>';
        } else {

            $User=$_POST['User'];
            $Contraseña=$_POST['contraseña'];
            $Nombre=$_POST['nombre'];
            $Apellido=$_POST['apellido'];
            

            $sql="INSERT INTO usuarios VALUES ('', '$User', '$Contraseña', '$Nombre', '$Apellido')";
            //ejecutamos la sentencia sql
            $result=mysqli_query($conexion,$sql);
            if(!$result){
                echo "Hubro un error al conectar con la base de datos";
            }else{
                echo '<div Style="background-color: gold;>Datos guardados correctamente en la tabla de usuarios</div>';
            }
          
        }            
        
    }

?>