<?php include('header.php'); ?>
<?php
include('db.php');

$id = $_GET['id'];
$sql = "SELECT * FROM citas WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<h2>Editar Cita</h2>
<form action="actualizar_cita.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    
    <label for="nombre_cliente">Nombre del Cliente:</label>
    <input type="text" id="nombre_cliente" name="nombre_cliente" value="<?php echo $row['nombre_cliente']; ?>" required>
    
    <label for="nombre_barbero">Nombre del Barbero:</label>
    <input type="text" id="nombre_barbero" name="nombre_barbero" value="<?php echo $row['nombre_barbero']; ?>" required>
    
    <label for="fecha_cita">Fecha y Hora:</label>
    <input type="datetime-local" id="fecha_cita" name="fecha_cita" value="<?php echo date('Y-m-d\TH:i', strtotime($row['fecha_cita'])); ?>" required>
    
    <label for="notas">Notas:</label>
    <textarea id="notas" name="notas"><?php echo $row['notas']; ?></textarea>
    
    <input type="submit" value="Actualizar Cita">
</form>

<?php include('footer.php'); ?>
