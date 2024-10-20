<?php
include('header.php');
include('db.php');

// Lógica para obtener el historial según el período seleccionado
$periodo = isset($_POST['periodo']) ? $_POST['periodo'] : 'dia';

switch ($periodo) {
    case 'semana':
        $sql = "SELECT * FROM citas WHERE YEARWEEK(fecha_cita, 1) = YEARWEEK(CURDATE(), 1)";
        break;
    case 'mes':
        $sql = "SELECT * FROM citas WHERE MONTH(fecha_cita) = MONTH(CURDATE()) AND YEAR(fecha_cita) = YEAR(CURDATE())";
        break;
    case 'año':
        $sql = "SELECT * FROM citas WHERE YEAR(fecha_cita) = YEAR(CURDATE())";
        break;
    case 'dia':
    default:
        $sql = "SELECT * FROM citas WHERE DATE(fecha_cita) = CURDATE()";
        break;
}

$result = $conn->query($sql);

?>

<h2>Historial de Citas</h2>
<form action="historial.php" method="post" class="mb-3">
    <div class="input-group">
        <select class="form-select" name="periodo">
            <option value="dia" <?php if ($periodo == 'dia') echo 'selected'; ?>>Hoy</option>
            <option value="semana" <?php if ($periodo == 'semana') echo 'selected'; ?>>Esta Semana</option>
            <option value="mes" <?php if ($periodo == 'mes') echo 'selected'; ?>>Este Mes</option>
            <option value="año" <?php if ($periodo == 'año') echo 'selected'; ?>>Este Año</option>
        </select>
        <button type="submit" class="btn btn-primary">Ver Historial</button>
    </div>
</form>

<?php
if ($result->num_rows > 0) {
    echo "<table class='table table-bordered table-striped'>";
    echo "<thead class='thead-dark'><tr><th>ID</th><th>Cliente</th><th>Barbero</th><th>Tipo de Corte</th><th>Fecha</th><th>Notas</th><th>Precio</th><th>Hora de Inicio</th><th>Hora de Fin</th></tr></thead>";
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
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "<div class='alert alert-info'>No hay citas registradas para el período seleccionado.</div>";
}

$conn->close();
include('footer.php');
?>

<h2>Gráfica de Ventas</h2>
<canvas id="ventasChart" width="400" height="200"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Datos de ventas
    var ventasData = {
        labels: [], // Estas etiquetas se llenarán con las fechas
        datasets: [{
            label: 'Ventas en Pesos',
            data: [], // Estos datos se llenarán con los valores de las ventas
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    };

    // Obtener datos de ventas del servidor
    fetch('obtener_ventas.php?periodo=<?php echo $periodo; ?>')
        .then(response => response.json())
        .then(data => {
            ventasData.labels = data.labels;
            ventasData.datasets[0].data = data.data;

            // Crear la gráfica de ventas
            var ctx = document.getElementById('ventasChart').getContext('2d');
            var ventasChart = new Chart(ctx, {
                type: 'bar',
                data: ventasData,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
</script>
