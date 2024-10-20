<?php
$servidor = "localhost";
$usuario = "root"; // Cambia si has configurado otro usuario
$contrasena = ""; // Cambia si has configurado una contraseña
$base_datos = "barberia";

$conn = new mysqli($servidor, $usuario, $contrasena, $base_datos);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
