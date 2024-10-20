<?php include('header.php'); ?>

<h2>Crear Cita</h2>
<form action="crear_cita_procesar.php" method="POST">
    <label for="nombre_cliente">Nombre del Cliente:</label>
    <input type="text" id="nombre_cliente" name="nombre_cliente" required>
    
    <label for="nombre_barbero">Nombre del Barbero:</label>
    <input type="text" id="nombre_barbero" name="nombre_barbero" required>
    
    <label for="tipo_corte">Tipo de Corte:</label>
    <select id="tipo_corte" name="tipo_corte" required>
        <option value="">Selecciona un corte</option>
        <option value="Corte Clásico" data-precio="150">Corte Clásico - 150 pesos</option>
        <option value="Corte Moderno" data-precio="200">Corte Moderno - 200 pesos</option>
        <option value="Corte de Caballero" data-precio="180">Corte de Caballero - 180 pesos</option>
        <option value="Corte de Niño" data-precio="120">Corte de Niño - 120 pesos</option>
        <option value="Afeitado" data-precio="100">Afeitado - 100 pesos</option>
    </select>
    
    <label for="precio">Precio:</label>
    <input type="text" id="precio" name="precio" readonly>
    
    <label for="fecha_cita">Fecha y Hora:</label>
    <input type="datetime-local" id="fecha_cita" name="fecha_cita" required>
    
    <label for="notas">Notas:</label>
    <textarea id="notas" name="notas"></textarea>
    
    <input type="submit" value="Crear Cita">
</form>

<script>
    document.getElementById('tipo_corte').addEventListener('change', function() {
        var precio = this.options[this.selectedIndex].getAttribute('data-precio');
        document.getElementById('precio').value = precio ? precio + ' pesos' : '';
    });
</script>

<?php include('footer.php'); ?>
