<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuarios</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        .usuario{
            container: flex;
            width: 400px;
            padding: 20px;
            margin: 5px;
            background-color: #4CAF50;
            border-radius: 10px;
            text-align: center;
            background-blend-mode: overlay;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: black;
            font-size: 13px;
        }

        a {
            display: inline-block;
            align-content: center;
            align-items: center;
            width: 150px;
            background-color: orangered;
            color: white;
            padding: 10px 10px;
            margin: 10px;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 400;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
    </style>

</head>
<style>
    body{
        height: 150vh;
    }
</style>
<body>
    <header></header>
    <main>
        <div class="usuario">
            <form action="" method="post">
            <?php
                include("UsuariosBD.php");
            ?>
                <h1 style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Complete los campos</h1><br>
                <label for="">Nuevo Usuario</label>
                <input type="text" name="User" placeholder="Ingrese un usuario" ><br><br>
                <label for="">Contraseña</label>
                <input type="password" name="contraseña" placeholder="Ingrese una contraseña" ><br><br>
                <label for="">Nombre</label>
                <input type="text" name="nombre" placeholder="Ingrese su nombre" ><br><br>
                <label for="">Apellido</label>
                <input type="text" name="apellido" placeholder="Ingrese su apellido" ><br><br>
                <label for="">Correo</label>
                <input type="email" name="Correo" placeholder="Ingrese su correo" ><br><br>
                <input type="submit" value="ENVIAR DATOS" name="btnDatos">
                <a href="index.php">Volver</a>
            </form>
        </div>
    </main>
</body>
</html>