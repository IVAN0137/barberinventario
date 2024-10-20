<?php include('header.php'); ?>

<h2>Catálogo de Cortes de Cabello</h2>
<div class="row">
    <?php
    // Datos de los tipos de corte de cabello
    $tipos_corte = [
        [
            'nombre' => 'LOW FADE',
            'descripcion' => 'Un corte tradicional y limpio.',
            'precio' => 100,
            'imagen' => 'low.png',
        ],
        [
            'nombre' => 'MID FADE',
            'descripcion' => 'Estilo moderno con líneas definidas.',
            'precio' => 120,
            'imagen' => 'midfade.jpg',
        ],
        [
            'nombre' => 'HIGH FADE',
            'descripcion' => 'Degradado perfecto para un look fresco.',
            'precio' => 150,
            'imagen' => 'hfade.png',
        ],
        [
            'nombre' => 'LOW TAPER',
            'descripcion' => 'Estilo personalizado según tus gustos.',
            'precio' => 130,
            'imagen' => 'estilo_libre.jpg',
        ],
        [
            'nombre' => 'MID TAPER',
            'descripcion' => 'Estilo personalizado según tus gustos.',
            'precio' => 130,
            'imagen' => 'estilo_libre.jpg',
        ],
        [
            'nombre' => 'HIGH TAPER FADE',
            'descripcion' => 'Estilo personalizado según tus gustos.',
            'precio' => 130,
            'imagen' => 'htf.png',
        ],
        [
            'nombre' => 'Corte Estilo Libre',
            'descripcion' => 'Estilo personalizado según tus gustos.',
            'precio' => 130,
            'imagen' => 'estilo_libre.jpg',
        ],
        [
            'nombre' => 'Corte Estilo Libre',
            'descripcion' => 'Estilo personalizado según tus gustos.',
            'precio' => 130,
            'imagen' => 'estilo_libre.jpg',
        ],
        [
            'nombre' => 'Corte Estilo Libre',
            'descripcion' => 'Estilo personalizado según tus gustos.',
            'precio' => 130,
            'imagen' => 'estilo_libre.jpg',
        ],
        [
            'nombre' => 'Corte Estilo Libre',
            'descripcion' => 'Estilo personalizado según tus gustos.',
            'precio' => 130,
            'imagen' => 'estilo_libre.jpg',
        ],
        [
            'nombre' => 'Corte Estilo Libre',
            'descripcion' => 'Estilo personalizado según tus gustos.',
            'precio' => 130,
            'imagen' => 'estilo_libre.jpg',
        ],
        [
            'nombre' => 'Corte Estilo Libre',
            'descripcion' => 'Estilo personalizado según tus gustos.',
            'precio' => 130,
            'imagen' => 'estilo_libre.jpg',
        ],
        [
            'nombre' => 'Corte Estilo Libre',
            'descripcion' => 'Estilo personalizado según tus gustos.',
            'precio' => 130,
            'imagen' => 'estilo_libre.jpg',
        ],
        [
            'nombre' => 'Corte Estilo Libre',
            'descripcion' => 'Estilo personalizado según tus gustos.',
            'precio' => 130,
            'imagen' => 'estilo_libre.jpg',
        ],
        [
            'nombre' => 'Corte Estilo Libre',
            'descripcion' => 'Estilo personalizado según tus gustos.',
            'precio' => 130,
            'imagen' => 'estilo_libre.jpg',
        ],
        [
            'nombre' => 'Corte Estilo Libre',
            'descripcion' => 'Estilo personalizado según tus gustos.',
            'precio' => 130,
            'imagen' => 'estilo_libre.jpg',
        ],
        [
            'nombre' => 'Corte Estilo Libre',
            'descripcion' => 'Estilo personalizado según tus gustos.',
            'precio' => 130,
            'imagen' => 'estilo_libre.jpg',
        ],
        [
            'nombre' => 'Corte Estilo Libre',
            'descripcion' => 'Estilo personalizado según tus gustos.',
            'precio' => 130,
            'imagen' => 'estilo_libre.jpg',
        ],
        [
            'nombre' => 'Corte Estilo Libre',
            'descripcion' => 'Estilo personalizado según tus gustos.',
            'precio' => 130,
            'imagen' => 'estilo_libre.jpg',
        ],
        [
            'nombre' => 'Corte Estilo Libre',
            'descripcion' => 'Estilo personalizado según tus gustos.',
            'precio' => 130,
            'imagen' => 'estilo_libre.jpg',
        ],
        [
            'nombre' => 'Corte Estilo Libre',
            'descripcion' => 'Estilo personalizado según tus gustos.',
            'precio' => 130,
            'imagen' => 'estilo_libre.jpg',
        ],
        
    ];

    // Mostrar los tipos de corte de cabello
    foreach ($tipos_corte as $corte) {
        echo "<div class='col-md-4'>";
        echo "<div class='card mb-4 shadow-sm'>";
        echo "<img class='card-img-top' src='images/" . $corte['imagen'] . "' alt='" . $corte['nombre'] . "'>";
        echo "<div class='card-body'>";
        echo "<h5 class='card-title'>" . $corte['nombre'] . "</h5>";
        echo "<p class='card-text'>" . $corte['descripcion'] . "</p>";
        echo "<p class='card-text'><strong>Precio: $" . $corte['precio'] . "</strong></p>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
    ?>
</div>

<?php include('footer.php'); ?>

<style>
.card {
    margin: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: 0.3s;
    border-radius: 5px;
}

.card img {
    border-radius: 5px 5px 0 0;
    height: 200px; /* Ajusta esta altura según tus necesidades */
    object-fit: cover;
}

.card-body {
    padding: 20px;
}

.card-title {
    font-size: 1.5em;
    margin-bottom: 10px;
}

.card-text {
    font-size: 1em;
    color: #333;
}
</style>
