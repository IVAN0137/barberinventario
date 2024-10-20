<?php
include('header.php');
?>

<h2>Nueva Cita</h2>
<form action="guardar_cita.php" method="post">
    <div class="mb-3">
        <label for="nombre_cliente" class="form-label">Nombre del Cliente:</label>
        <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" required>
    </div>
    <div class="mb-3">
        <label for="nombre_barbero" class="form-label">Nombre del Barbero:</label>
        <input type="text" class="form-control" id="nombre_barbero" name="nombre_barbero" required>
    </div>
    <div class="mb-3">
        <label for="tipo_corte" class="form-label">Tipo de Corte:</label>
        <select class="form-control" id="tipo_corte" name="tipo_corte" required>
            <option value="Corte Clásico">Corte Clásico</option>
            <option value="Corte Moderno">Corte Moderno</option>
            <option value="Corte con Degradado">Corte con Degradado</option>
            <option value="Corte Estilo Libre">Corte Estilo Libre</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="fecha_cita" class="form-label">Fecha y Hora de la Cita:</label>
        <input type="datetime-local" class="form-control" id="fecha_cita" name="fecha_cita" required>
    </div>
    <div class="mb-3">
        <label for="notas" class="form-label">Notas:</label>
        <textarea class="form-control" id="notas" name="notas"></textarea>
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label">Precio:</label>
        <input type="number" class="form-control" id="precio" name="precio" value="100" required>
    </div>
    <button type="submit" class="btn btn-primary">Guardar Cita</button>
</form>

<?php
include('footer.php');
?>
