<?php
include('db.php');

$periodo = isset($_GET['periodo']) ? $_GET['periodo'] : 'dia';
$ventas = [];

switch ($periodo) {
    case 'semana':
        $sql = "SELECT DATE(fecha_cita) as fecha, SUM(precio) as total FROM citas WHERE YEARWEEK(fecha_cita, 1) = YEARWEEK(CURDATE(), 1) GROUP BY DATE(fecha_cita)";
        break;
    case 'mes':
        $sql = "SELECT DATE(fecha_cita) as fecha, SUM(precio) as total FROM citas WHERE MONTH(fecha_cita) = MONTH(CURDATE()) AND YEAR(fecha_cita) = YEAR(CURDATE()) GROUP BY DATE(fecha_cita)";
        break;
    case 'año':
        $sql = "SELECT DATE(fecha_cita) as fecha, SUM(precio) as total FROM citas WHERE YEAR(fecha_cita) = YEAR(CURDATE()) GROUP BY DATE(fecha_cita)";
        break;
    case 'dia':
    default:
        $sql = "SELECT DATE(fecha_cita) as fecha, SUM(precio) as total FROM citas WHERE DATE(fecha_cita) = CURDATE() GROUP BY DATE(fecha_cita)";
        break;
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $ventas['labels'][] = $row['fecha'];
        $ventas['data'][] = $row['total'];
    }
}

$conn->close();

echo json_encode($ventas);
?>
