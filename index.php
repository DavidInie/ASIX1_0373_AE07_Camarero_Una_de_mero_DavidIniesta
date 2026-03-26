<?php
// Carga el archivo XML que contiene los platos de la carta del restaurante
// simplexml_load_file() convierte el XML en un objeto PHP navegable
$xml = simplexml_load_file('xml/carta.xml');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Rincón de David — Carta</title>
    <!-- Iconos de Font Awesome desde CDN (sin instalación local) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Hoja de estilos personalizada del proyecto -->
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<!-- CABECERA: Nombre del restaurante y subtítulo -->
<header class="header">
    <div>
        <strong>El Rincón de</strong>
        <!-- "David" tiene un id propio para colorearlo diferente con CSS -->
        <strong id="color_david"> David</strong>
    </div>
    <div class="header-subtitulo">Cocina Española Tradicional</div>
</header>

<!-- CONTENIDO PRINCIPAL: Estructura de 3 columnas (lateral izq. | central | lateral der.) -->
<div class="contenido_carta">

    <!-- COLUMNA IZQUIERDA: Información de contacto y horario del restaurante -->
    <div class="columna_lateral">
        <div class="info_restaurante">
            <h3><i class="fa-solid fa-store"></i> El Restaurante</h3>
            <p><i class="fa-solid fa-location-dot"></i> Barcelona</p>
            <p><i class="fa-solid fa-phone"></i> +34 931 234 567</p>
            <p><i class="fa-solid fa-clock"></i> Lun–Dom: 13:00 – 23:30</p>
            <p><i class="fa-solid fa-wine-glass"></i> Carta de vinos disponible</p>
        </div>
    </div>

    <!-- COLUMNA CENTRAL: Carta completa con todas las categorías de platos -->
    <section class="columna_central">

        <!-- ==================== CATEGORÍA: ENTRANTES ==================== -->
        <div class="categoria" id="entrante">
            <h2><i class="fa-solid fa-utensils"></i> Entrantes</h2>
            <?php
            // Recorre todos los platos del XML y filtra solo los de tipo 'entrante'
            foreach ($xml->plato as $plato) {
                if ($plato['tipo'] != 'entrante') continue; // Salta los que no coinciden

                // Tarjeta del plato
                echo '<div class="plato_card">';

                    // Cabecera: nombre y precio en la misma línea
                    echo '<div class="plato_cabecera">';
                        echo '<strong class="plato_nombre">' . $plato->nombre . '</strong>';
                        echo '<strong class="plato_precio">' . $plato->precio . ' €</strong>';
                    echo '</div>';

                    // Descripción del plato
                    echo '<p class="plato_descripcion">' . $plato->descripcion . '</p>';

                    // Footer: iconos de características + calorías
                    echo '<div class="plato_footer"><div class="plato_iconos">';

                        // Recorre las categorías del plato (vegano, sin gluten...)
                        // y muestra el icono correspondiente a cada una
                        foreach ($plato->caracteristicas->categoria as $cat) {
                            if ($cat == 'vegano')      echo '<strong class="icono_cat vegano"><i class="fa-solid fa-seedling"></i> Vegano</strong>';
                            if ($cat == 'vegetariano') echo '<strong class="icono_cat vegetariano"><i class="fa-solid fa-carrot"></i> Vegetariano</strong>';
                            if ($cat == 'sin_gluten')  echo '<strong class="icono_cat sin_gluten"><i class="fa-solid fa-wheat-awn-circle-exclamation"></i> Sin Gluten</strong>';
                            if ($cat == 'lacteo')      echo '<strong class="icono_cat lacteo"><i class="fa-solid fa-droplet"></i> Lácteo</strong>';
                            if ($cat == 'lacteo_no')   echo '<strong class="icono_cat sin_gluten"><i class="fa-solid fa-ban"></i> Sin Lácteo</strong>';
                            if ($cat == 'picante')     echo '<strong class="icono_cat picante"><i class="fa-solid fa-pepper-hot"></i> Picante</strong>';
                        }

                    echo '</div>';
                    // Muestra las calorías del plato
                    echo '<small class="plato_calorias"><i class="fa-solid fa-fire-flame-curved"></i> ' . $plato->calorias . ' kcal</small>';
                echo '</div></div>';
            }
            ?>
        </div>

    </section>

    <!-- COLUMNA DERECHA: Información del menú del día con precio destacado -->
    <div class="columna_lateral_derecha">
        <div class="menu_dia">
            <h3 id="dia"><i class="fa-solid fa-sun"></i> Menú del Día</h3>
            <p id="dia_p">Primer plato, segundo, postre y bebida incluida.</p>
            <strong id="precio_menu">13,50 €</strong>
        </div>
    </div>

</div>

<!-- PIE DE PÁGINA: Nombre del restaurante y teléfono de contacto -->
<footer class="footer">
    <strong>El Rincón de David</strong>
    <p id="rincon">Cualquier duda llamar al +34 931 234 567</p>
</footer>

</body>
</html>