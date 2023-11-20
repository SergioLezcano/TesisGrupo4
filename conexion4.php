<?php

    $conexion = new mysqli("localhost", "CHECHOS", "Sergio.1991", "inmo_gigantino", "3306");

    if(!empty($_POST['btnIngresar'])){
        if (empty($_POST['usuario']) && empty($_POST['correo']) ) {
            echo'<div id="alert" Style="background-color: gold; color: black;">LOS CAMPOS ESTAN VACIOS</div>';
        } else {
            $Usuario=$_POST['usuario'];
            $Correo=$_POST['correo'];

            $sql=$conexion->query("SELECT * FROM usuarios");

            if (!isset($sql) || empty($sql)) {
                # code...
            } else {
                # code...
            }
            
            
            

            // if ($datos=$actualizar->fetch_object()) {
            //      echo'Contraseña actualizada';
            //     // header("location: subMenu.html");
            //  } else {
            //      echo"<div id='alert'>ACCESO DENEGADO</div>";
            //     //header("location: index.php");
            //  }
            
        }
        
    }
?>