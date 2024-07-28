

<?php
include 'conexion.php';





// Función para insertar una reserva
function insertarReserva($id_cliente, $fecha_reserva, $id_vuelo, $id_hotel) {
    global $conn;
    $sql = "INSERT INTO reserva (id_cliente, fecha_reserva, id_vuelo, id_hotel) VALUES ('$id_cliente', '$fecha_reserva', '$id_vuelo', '$id_hotel')";
    if ($conn->query($sql) === TRUE) {
        echo "Nueva reserva agregada exitosamente.<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Insertar diez reservas
for ($i = 1; $i <= 10; $i++) {
    insertarReserva($i, '2024-07-21', 1, 1);
    insertarReserva($i, '2024-07-25', 2, 2);
    insertarReserva($i, '2024-09-04', 3, 3);
    insertarReserva($i, '2024-10-15', 4, 4);
    insertarReserva($i, '2024-11-01', 5, 5);
    insertarReserva($i, '2024-08-14', 6, 6);
    insertarReserva($i, '2024-07-28', 7, 7);
    insertarReserva($i, '2024-10-30', 8, 8);
    insertarReserva($i, '2024-12-11', 9, 9);
    insertarReserva($i, '2024-07-31', 10, 10); // Asegúrate de que los IDs existen en las tablas VUELO y HOTEL
}

$conn->close();

?>





