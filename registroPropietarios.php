<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Encuesta</title>
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
        <h2>Registro de Propietarios</h2>
        <form method="post">

            <?php
            include("conexion3.php");
            ?>

            <label for="DNI">DNI</label>
            <input type="text" id="DNI" name="DNI" placeholder="Ingrese número de documento" required><br><br>

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ingrese Nombre"  required><br><br>

            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" placeholder="Ingrese Apellido"  required><br><br>

            <label for="Telefono">Telefono:</label>
            <input type="text" id="Telefono" name="Telefono" placeholder="Ingrese número de teléfono"  required><br><br>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" placeholder="Ingrese mail"  required><br><br>

            <input type="submit" value="Siguiente" name="btnRegPropietarios">
            <div class="div" style="margin-top: 15px"><a href="Menu.html" id="Volver">Volver al Menu</a></div>
        </form>
    </div>
   <div class="EMPRESA">GIGANTINO</div>
	<div class="Version">Version 1.0.0</div>
    <!-- <script>
        function redirectToRegistroPropiedades(event) {
            event.preventDefault();
            
            // Aquí puedes realizar cualquier lógica adicional si es necesario
            
            window.location.href = 'registroPropiedades.html'; // No es necesario construir queryParams en este caso
        }
    </script> -->
</body>
</html>
