<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_cliente = $_POST['nombre_cliente'] ?? '';
    $nombre_barbero = $_POST['nombre_barbero'] ?? '';
    $tipo_corte = $_POST['tipo_corte'] ?? '';
    $fecha_cita = $_POST['fecha_cita'] ?? '';
    $notas = $_POST['notas'] ?? '';
    $precio = str_replace(' pesos', '', $_POST['precio'] ?? '');

    // Verifica que no estén vacíos
    if (empty($nombre_cliente) || empty($nombre_barbero) || empty($tipo_corte) || empty($fecha_cita) || empty($precio)) {
        die("Todos los campos son obligatorios.");
    }

    // Asegúrate de que la fecha sea válida
    if (!DateTime::createFromFormat('Y-m-d\TH:i', $fecha_cita)) {
        die("Formato de fecha inválido.");
    }

    $sql = "INSERT INTO citas (nombre_cliente, nombre_barbero, tipo_corte, fecha_cita, notas, precio) 
            VALUES ('$nombre_cliente', '$nombre_barbero', '$tipo_corte', '$fecha_cita', '$notas', '$precio')";

    if ($conn->query($sql) === TRUE) {
        echo "Nueva cita creada exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header('Location: ver_citas.php');
} else {
    echo "Método de solicitud no válido.";
}
?>
