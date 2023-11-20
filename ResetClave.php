<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuarios</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        .reseteo{
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
<body>
    <header></header>
    <main>
        <div class="reseteo">
            <form action="" method="post">
            <?php
                include("UsuariosBD.php");
            ?>
                <h1 style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Complete los campos</h1><br>
                <label for="User">Usuario</label>
                <input type="text" name="User" placeholder="Ingrese usuario registrado" ><br><br>

                <label for="contraseña">Nueva Contraseña</label>
                <input type="password" name="contraseña" placeholder="Ingrese nueva contraseña" ><br><br>

                <label for="Nuevacontraseña">Repita Contraseña</label>
                <input type="password" name="Nuevacontraseña" placeholder="Repita la contraseña" ><br><br>
                
                <input type="submit" value="ENVIAR DATOS" name="btnDatos">
                <a href="index.php">Volver</a>
            </form>
        </div>
    </main>
</body>
</html>