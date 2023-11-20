<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio de Sesión</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        a{
            display: inline-block;
            background-color: orange;
            margin: 5px;
            padding: 10px 10px;
            border-radius: 5px;
            text-align: center;
            font-family: arial, black;
            color: black;
            font-size: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Inicio de Sesión de Inmobiliaria Gigantino HNOS</h2>
        <?php
        include ("controlador.php");
        // include ("loggin.php");
        ?>
        <form action="" method="post">
            <label for="usuario">Usuario:</label>
            <input type="text" id="username" name="usuario">
            <label for="contraseña">Contraseña:</label>
            <input type="password" id="password" name="contraseña">
            <input name="btnIngresar" type="submit" value="INICIAR SESION"><br><br>
            <a href="RegistroUser.php">Registrarse</a><br><br>
            <a href="Recuperar.html">¿Olvidaste la contraseña?</a>
        </form>
    </div>
</body>
</html>