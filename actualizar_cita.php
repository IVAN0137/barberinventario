<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre_cliente = $_POST['nombre_cliente'];
    $nombre_barbero = $_POST['nombre_barbero'];
    $fecha_cita = $_POST['fecha_cita'];
    $notas = $_POST['notas'];

    $sql = "UPDATE citas SET nombre_cliente='$nombre_cliente', nombre_barbero='$nombre_barbero', fecha_cita='$fecha_cita', notas='$notas' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Cita actualizada exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header('Location: ver_citas.php');
}
?>
