<?php

    $conexion = new mysqli("localhost", "CHECHOS", "Sergio.1991", "inmo_gigantino", "3306");

    if(!empty($_POST['btnDatos'])){
        if (empty($_POST['User']) || empty($_POST['contraseña']) || empty($_POST['nombre']) || 
        empty($_POST['apellido']) || empty($_POST['Correo']) ) {
            echo'<div id="alert" Style="background-color: gold; color: black;">ALGUNOS CAMPOS ESTAN VACIOS</div>';
        } else {

            $User=$_POST['User'];
            $Contraseña=$_POST['contraseña'];
            $Nombre=$_POST['nombre'];
            $Apellido=$_POST['apellido'];
            $Correo=$_POST['Correo'];
            

            $sql="INSERT INTO usuarios VALUES ('', '$User', '$Contraseña', '$Nombre', '$Apellido', '$Correo')";
            //ejecutamos la sentencia sql
            $result=mysqli_query($conexion,$sql);
            if(!$result){
                echo "Hubro un error al conectar con la base de datos";
            }else{
                echo '<div Style="background-color: gold;>Nuevo usuario correctamente</div>';
            }
        }            
        
    }

?>