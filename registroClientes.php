<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Registro Clientes</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>

        body{
            height: 170vh;
        }
        a {
            display: block;
            align-content: center;
            width: 120px;
            height: auto;
            background-color: #4CAF50;
            color: white;
            padding: 20px 10px 20px 10px;
            
            margin-left: -8px;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 400;
        }
        .div{
            display: block;
            position: relative;
            padding: 10px 10px;
            margin: 0;
            align-items: center;
            align-content: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registro de clientes</h2>
        <?php
            include("conexion1.php");
        ?>
        <form action="" method="post">
            <label for="DNI">DNI:</label>
            <input type="text" id="DNI" name="DNI" placeholder="Ingrese número de documento" required><br><br>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ingrese Nombre" required><br><br>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" placeholder="Ingrese Apellido" required><br><br>
            <label for="telefono">Teléfono:</label>
			<input type="text" id="Telefono" name="telefono" placeholder="Ingrese número de teléfono" required><br><br>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" placeholder="Ingrese mail" required><br><br>
            <label for="actividad">Actividad:</label>
            <input type="text" id="actividad" name="actividad" placeholder="Actividad que realiza" required><br><br>
            <input type="submit" value="Siguiente" name="btnregistroClientes">
            <div class="div" style="margin-top: 15px"><a href="Menu.html" id="Volver">Volver a Menu</a></div>
        </form>

	<!-- <script>
    function redirectToGustosMusicales(event) {
        event.preventDefault();
        var nombre = document.getElementById('nombre').value;
        var apellido = document.getElementById('apellido').value;
        var direccion = document.getElementById('direccion').value;
        var email = document.getElementById('email').value;

        var queryParams = new URLSearchParams({
            datos: `${nombre} ${apellido}, ${direccion}, ${email}`
        });

        window.location.href = 'registroPropietarios.html' + '?' + queryParams.toString();
    }
    </script> -->
    </div>
    <div class="EMPRESA">GIGANTINO</div>
	<div class="Version">Version 1.0.0</div>
    <!-- <script>
        function redirectToRegistroPropietarios(event) {
            event.preventDefault();
            window.location.href = 'registroPropietarios.html';
        }
    </script> -->
</body>
</html>
