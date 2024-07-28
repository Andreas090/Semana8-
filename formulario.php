<!DOCTYPE html>
<html>
<head>
    <title>Registro de Hoteles y Vuelos</title>
    <link rel="stylesheet"  href="estilos/style.css">
    <script>
        function validateForm() {
            
            
         
            let flightOrigin = document.forms["flightForm"]["origen"].value;
            let flightDestination = document.forms["flightForm"]["destino"].value;
            let flightDate = document.forms["flightForm"]["fecha"].value;
            let flightSeats = document.forms["flightForm"]["plazas_disponibles"].value;
            let flightPrice = document.forms["flightForm"]["precio"].value;

            
            if (flightOrigin === "" || flightDestination === "" || flightDate === "" || flightSeats === "" || flightPrice === "") {
                alert("Todos los campos del vuelo son obligatorios");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <div class="container">
      

        

        <!-- Formulario para registrar vuelos -->
        <h2>Registrar Vuelo</h2>
        <form name="flightForm" action="agregar_vuelo.php" method="post" onsubmit="return validateForm()">
            <label for="origen">Origen:</label>
            <input type="text" id="origen" name="origen" required>

            <label for="destino">Destino:</label>
            <input type="text" id="destino" name="destino" required>

            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" required>

            <label for="plazas_disponibles">Plazas Disponibles:</label>
            <input type="number" id="plazas_disponibles" name="plazas_disponibles" required>

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" step="0.01" required>

            <input type="submit" value="Registrar Vuelo">
        </form>

    </div>
</body>
</html>
