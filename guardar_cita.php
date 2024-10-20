<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_cliente = $_POST['nombre_cliente'];
    $nombre_barbero = $_POST['nombre_barbero'];
    $tipo_corte = $_POST['tipo_corte'];
    $fecha_cita = $_POST['fecha_cita'];
    $notas = $_POST['notas'];
    $precio = $_POST['precio'];

    // Validar y limpiar los datos aquí si es necesario

    $sql = "INSERT INTO citas (nombre_cliente, nombre_barbero, tipo_corte, fecha_cita, notas, precio)
            VALUES ('$nombre_cliente', '$nombre_barbero', '$tipo_corte', '$fecha_cita', '$notas', '$precio')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ver_citas.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
