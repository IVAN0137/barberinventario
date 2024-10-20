<?php
include('header.php');
include('db.php');

$sql = "SELECT * FROM citas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table table-bordered table-striped'>";
    echo "<thead class='thead-dark'><tr><th>ID</th><th>Cliente</th><th>Barbero</th><th>Tipo de Corte</th><th>Fecha</th><th>Notas</th><th>Precio</th><th>Hora de Inicio</th><th>Hora de Fin</th><th>Acciones</th></tr></thead>";
    echo "<tbody>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nombre_cliente"] . "</td>";
        echo "<td>" . $row["nombre_barbero"] . "</td>";
        echo "<td>" . $row["tipo_corte"] . "</td>";
        echo "<td>" . $row["fecha_cita"] . "</td>";
        echo "<td>" . $row["notas"] . "</td>";
        echo "<td>" . $row["precio"] . " pesos</td>";
        echo "<td>" . $row["hora_inicio"] . "</td>";
        echo "<td>" . $row["hora_fin"] . "</td>";
        echo "<td>
            <a class='btn btn-warning btn-sm' href='editar_cita.php?id=" . $row["id"] . "'>Editar</a> 
            <a class='btn btn-danger btn-sm' href='eliminar_cita.php?id=" . $row["id"] . "'>Eliminar</a> 
            <a class='btn btn-primary btn-sm' href='iniciar_corte.php?id=" . $row["id"] . "'>Iniciar Corte</a> 
            <a class='btn btn-success btn-sm' href='terminar_corte.php?id=" . $row["id"] . "'>Terminar Corte</a>
        </td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "<div class='alert alert-info'>No hay citas registradas.</div>";
}

$conn->close();

include('footer.php');
?>
