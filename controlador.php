<?php

    $conexion = new mysqli("localhost", "CHECHOS", "Sergio.1991", "inmo_gigantino", "3306");
    if(!empty($_POST['btnIngresar'])){
        if (empty($_POST['usuario']) && empty($_POST['contraseña'])) {
            echo'<div id="alert" Style="background-color: gold; color: black;">LOS CAMPOS ESTAN VACIOS</div>';
        } else {
            $Usuario=$_POST['usuario'];
            $Password=$_POST['contraseña'];
            
            $sql=$conexion->query("SELECT * FROM usuarios WHERE Usuario='$Usuario' AND Contraseña='$Password' ");

            if ($datos=$sql->fetch_object()) {
                header("location: subMenu.html");
            } else {
                echo"<div id='alert'>ACCESO DENEGADO</div>";
                //header("location: index.php");
            }
            
        }
        
    }
?>