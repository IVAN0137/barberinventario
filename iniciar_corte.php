<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $hora_inicio = date('Y-m-d H:i:s');

    $sql = "UPDATE citas SET hora_inicio='$hora_inicio' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header('Location: ver_citas.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "ID no proporcionado.";
}

$conn->close();
?>
