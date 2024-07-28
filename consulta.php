
<?php

include 'conexion.php'; 

// Consulta avanzada para contar el número de reservas por hotel
$sql = "SELECT HOTEL.nombre, HOTEL.ubicacion, COUNT(RESERVA.id_reserva) as num_reservas 
        FROM HOTEL 
        JOIN RESERVA ON HOTEL.id_hotel = RESERVA.id_hotel 
        GROUP BY HOTEL.id_hotel 
        HAVING num_reservas > 2";

$result = $conn->query($sql);

// Mostrar los resultados
if ($result->num_rows > 0) {
    echo "<h2>Hoteles con más de dos reservas</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Nombre Hotel</th><th>Ubicación</th><th>Número de Reservas</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["nombre"] . "</td><td>" . $row["ubicacion"] . "</td><td>" . $row["num_reservas"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No hay hoteles con más de dos reservas.";
}

$conn->close();

?>
