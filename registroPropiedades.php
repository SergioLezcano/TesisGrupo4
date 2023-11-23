<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Propiedades</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 170vh;
            margin: 0;
        }

        .container {
            width: 80%;
            height: auto;
            max-width: 400px;
            margin: auto;
            text-align: left;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
        }

        input, select {
            margin-bottom: 16px;
            padding: 8px;
        }

        button {
            align-self: flex-end;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .EMPRESA {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
        }

        .Version {
            margin-top: 10px;
            font-size: 14px;
        }

        a {
            display: block;
            align-content: center;
            width: 120px;
            height: auto;
            background-color: #4CAF50;
            color: white;
            padding: 20px 0 20px 25px;
            
            margin-left: -8px;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 400;
        }
        .div{
            display: inline-block;
            position: relative;
            padding: 10px 10px;
            align-items: center;
            align-content: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registro de Propiedades</h2>
        <form method="post">
            <?php
                include("conexion2.php");
            ?>

            <label for="TipoActividad">Tipo de Actividad:</label>
            <select id="TipoActividad" name="TipoActividad" required>
                <option value="Alquiler">Alquiler</option>
                <option value="Venta">Venta</option>
            </select>

            <label for="Direccion">Dirección:</label>
            <input type="text" id="Direccion" name="Direccion" placeholder="Ingrese dirección" required>

            <label for="Localidad">Localidad:</label>
            <input type="text" id="Localidad" name="Localidad" placeholder="Ingrese Localidad" required>

            <label for="descripcion">Características:</label>
            <textarea name="descripcion" id="" cols="30" rows="10" placeholder="Breve descripción"></textarea>
            
            <label for="Precio">Precio:</label>
            <input type="text" id="Precio" name="Precio" placeholder="Ingrese Valor" required>

            <input type="submit" value="Siguiente" name="btnRegistroProp">
            <div class="div" style="margin-top: 15px; margin-bottom: 10px;"><a href="Menu.html" id="Volver">Volver a Menu</a></div>
        </form>

        <!-- Botón para imprimir resultados -->
        <!-- <button onclick="imprimirResultados()">Imprimir Resultados</button> -->
    </div>

    <div class="EMPRESA">GIGANTINO</div>
    <div class="Version">Version 1.0.0</div>

    <script>
        function redirectToRegistroPropiedades(event) {
            event.preventDefault();
            // Agrega aquí la lógica para redirigir según tus necesidades
        }

        function imprimirResultados() {
            // Obtener los valores de los campos del formulario
            var direccion = document.getElementById('Direccion').value;
            var id = document.getElementById('ID').value;
            var localidad = document.getElementById('Localidad').value;
            var tipoActividad = document.getElementById('TipoActividad').value;
            var estado = document.getElementById('Estado').value;
            var precio = document.getElementById('Precio').value;

            // Construir el contenido a imprimir
            var contenidoImprimir = `
                Dirección: ${direccion}
                ID: ${id}
                Localidad: ${localidad}
                Tipo de Actividad: ${tipoActividad}
                Estado: ${estado}
                Precio: ${precio}
            `;

            // Crear un elemento temporal para la impresión
            var tempElement = document.createElement('div');
            tempElement.innerText = contenidoImprimir;

            // Agregar el elemento temporal al cuerpo del documento
            document.body.appendChild(tempElement);

            // Imprimir el contenido
            window.print();

            // Eliminar el elemento temporal después de la impresión
            document.body.removeChild(tempElement);
        }
    </script>
</body>
</html>
