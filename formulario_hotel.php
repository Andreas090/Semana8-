<!DOCTYPE html>
<html>
<head>
    <title>Registro de Hoteles y Vuelos</title>
    <link rel="stylesheet"  href="estilos/style.css">
    <script>
        function validateForm() {
            // Validaciones básicas en JavaScript
            let hotelName = document.forms["hotelForm"]["nombre"].value;
            let hotelLocation = document.forms["hotelForm"]["ubicacion"].value;
            let hotelRooms = document.forms["hotelForm"]["habitaciones_disponibles"].value;
            let hotelRate = document.forms["hotelForm"]["tarifa_noche"].value;
            
            if (hotelName === "" || hotelLocation === "" || hotelRooms === "" || hotelRate === "") {
                alert("Todos los campos del hotel son obligatorios");
                return false;
            } 
        }
    </script>
</head>
<body>

<!-- Formulario para registrar hoteles -->

 <div class="container"> 
<h2>Registrar Hotel</h2>
        <form name="hotelForm" action="agregar_hotel.php" method="post" onsubmit="return validateForm()">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="ubicacion">Ubicación:</label>
            <input type="text" id="ubicacion" name="ubicacion" required>

            <label for="habitaciones_disponibles">Habitaciones Disponibles:</label>
            <input type="number" id="habitaciones_disponibles" name="habitaciones_disponibles" required>

            <label for="tarifa_noche">Tarifa por Noche:</label>
            <input type="number" id="tarifa_noche" name="tarifa_noche" step="0.01" required>

            <input type="submit" value="Registrar Hotel">
        </form>

        </div>
</body>

</html> 