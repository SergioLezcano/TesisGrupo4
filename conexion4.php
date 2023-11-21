<?php

    $conexion = new mysqli("localhost", "CHECHOS", "Sergio.1991", "inmo_gigantino", "3306");

    if(!empty($_POST['btnIngresar'])){
        if (empty($_POST['usuario']) && empty($_POST['correo']) ) {
            echo'<div id="alert" Style="background-color: gold; color: black;">LOS CAMPOS ESTAN VACIOS</div>';
        } else {
            $Usuario=$_POST['usuario'];
            $Correo=$_POST['correo'];

            $sql=$conexion->query("SELECT * FROM usuarios WHERE Usuario='$Usuario'");
            $consulta=mysqli_num_rows($sql);

            if($consulta> 0){
                $mostrar = mysqli_fetch_array($sql);
                $enviarPass = $mostrar['Contraseña'];

                $paraCorreo = $Correo;
                $titulo = "Recuperar contraseña";
                $mensaje = $enviarPass;
                $tuCorreo = "From: chechos22lezcano@hotmail.com";

                if(mail($paraCorreo, $titulo, $mensaje, $tuCorreo)){
                    echo "<script> alert('Contraseña enviada'); window.location='index.html'</script>";
                }else{
                    echo "<script> alert('Error');window.location= 'index.html' </script>";
                }
            }else{
                echo "<script> alert('Este correo no existe');window.location= 'index.html' </script>";
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