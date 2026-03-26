<?php
$xml = simplexml_load_file('xml/carta.xml');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Rincón de David — Carta</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<header class="header">
    <div>
        <strong>El Rincón de</strong><strong id="color_david"> David</strong>
    </div>
    <div class="header-subtitulo">Cocina Española Tradicional</div>
</header>

<div class="contenido_carta">

    <div class="columna_lateral">
        <div class="info_restaurante">
            <h3><i class="fa-solid fa-store"></i> El Restaurante</h3>
            <p><i class="fa-solid fa-location-dot"></i> Barcelona</p>
            <p><i class="fa-solid fa-phone"></i> +34 931 234 567</p>
            <p><i class="fa-solid fa-clock"></i> Lun–Dom: 13:00 – 23:30</p>
            <p><i class="fa-solid fa-wine-glass"></i> Carta de vinos disponible</p>
        </div>
    </div>

    <section class="columna_central">

        <!-- ENTRANTES -->
        <div class="categoria" id="entrante">
            <h2><i class="fa-solid fa-utensils"></i> Entrantes</h2>
            <?php
            foreach ($xml->plato as $plato) {
                if ($plato['tipo'] != 'entrante') continue;

                echo '<div class="plato_card">';
                echo '<div class="plato_cabecera">';
                echo '<strong class="plato_nombre">' . $plato->nombre . '</strong>';
                echo '<strong class="plato_precio">' . $plato->precio . ' €</strong>';
                echo '</div>';
                echo '<p class="plato_descripcion">' . $plato->descripcion . '</p>';
                echo '<div class="plato_footer"><div class="plato_iconos">';
                foreach ($plato->caracteristicas->categoria as $cat) {
                    if ($cat == 'vegano')      echo '<strong class="icono_cat vegano"><i class="fa-solid fa-seedling"></i> Vegano</strong>';
                    if ($cat == 'vegetariano') echo '<strong class="icono_cat vegetariano"><i class="fa-solid fa-carrot"></i> Vegetariano</strong>';
                    if ($cat == 'sin_gluten')  echo '<strong class="icono_cat sin_gluten"><i class="fa-solid fa-wheat-awn-circle-exclamation"></i> Sin Gluten</strong>';
                    if ($cat == 'lacteo')      echo '<strong class="icono_cat lacteo"><i class="fa-solid fa-droplet"></i> Lácteo</strong>';
                    if ($cat == 'lacteo_no')   echo '<strong class="icono_cat sin_gluten"><i class="fa-solid fa-ban"></i> Sin Lácteo</strong>';
                    if ($cat == 'picante')     echo '<strong class="icono_cat picante"><i class="fa-solid fa-pepper-hot"></i> Picante</strong>';
                }
                echo '</div>';
                echo '<small class="plato_calorias"><i class="fa-solid fa-fire-flame-curved"></i> ' . $plato->calorias . ' kcal</small>';
                echo '</div></div>';
            }
            ?>
        </div>

        <!-- ARROCES -->
        <div class="categoria" id="arroz">
            <h2><i class="fa-solid fa-bowl-rice"></i> Arroces</h2>
            <?php
            foreach ($xml->plato as $plato) {
                if ($plato['tipo'] != 'arroz') continue;

                echo '<div class="plato_card">';
                echo '<div class="plato_cabecera">';
                echo '<strong class="plato_nombre">' . $plato->nombre . '</strong>';
                echo '<strong class="plato_precio">' . $plato->precio . ' €</strong>';
                echo '</div>';
                echo '<p class="plato_descripcion">' . $plato->descripcion . '</p>';
                echo '<div class="plato_footer"><div class="plato_iconos">';
                foreach ($plato->caracteristicas->categoria as $cat) {
                    if ($cat == 'vegano')      echo '<strong class="icono_cat vegano"><i class="fa-solid fa-seedling"></i> Vegano</strong>';
                    if ($cat == 'vegetariano') echo '<strong class="icono_cat vegetariano"><i class="fa-solid fa-carrot"></i> Vegetariano</strong>';
                    if ($cat == 'sin_gluten')  echo '<strong class="icono_cat sin_gluten"><i class="fa-solid fa-wheat-awn-circle-exclamation"></i> Sin Gluten</strong>';
                    if ($cat == 'lacteo')      echo '<strong class="icono_cat lacteo"><i class="fa-solid fa-droplet"></i> Lácteo</strong>';
                    if ($cat == 'lacteo_no')   echo '<strong class="icono_cat sin_gluten"><i class="fa-solid fa-ban"></i> Sin Lácteo</strong>';
                    if ($cat == 'picante')     echo '<strong class="icono_cat picante"><i class="fa-solid fa-pepper-hot"></i> Picante</strong>';
                }
                echo '</div>';
                echo '<small class="plato_calorias"><i class="fa-solid fa-fire-flame-curved"></i> ' . $plato->calorias . ' kcal</small>';
                echo '</div></div>';
            }
            ?>
        </div>

        <!-- CARNES -->
        <div class="categoria" id="carne">
            <h2><i class="fa-solid fa-drumstick-bite"></i> Carnes</h2>
            <?php
            foreach ($xml->plato as $plato) {
                if ($plato['tipo'] != 'carne') continue;

                echo '<div class="plato_card">';
                echo '<div class="plato_cabecera">';
                echo '<strong class="plato_nombre">' . $plato->nombre . '</strong>';
                echo '<strong class="plato_precio">' . $plato->precio . ' €</strong>';
                echo '</div>';
                echo '<p class="plato_descripcion">' . $plato->descripcion . '</p>';
                echo '<div class="plato_footer"><div class="plato_iconos">';
                foreach ($plato->caracteristicas->categoria as $cat) {
                    if ($cat == 'vegano')      echo '<strong class="icono_cat vegano"><i class="fa-solid fa-seedling"></i> Vegano</strong>';
                    if ($cat == 'vegetariano') echo '<strong class="icono_cat vegetariano"><i class="fa-solid fa-carrot"></i> Vegetariano</strong>';
                    if ($cat == 'sin_gluten')  echo '<strong class="icono_cat sin_gluten"><i class="fa-solid fa-wheat-awn-circle-exclamation"></i> Sin Gluten</strong>';
                    if ($cat == 'lacteo')      echo '<strong class="icono_cat lacteo"><i class="fa-solid fa-droplet"></i> Lácteo</strong>';
                    if ($cat == 'lacteo_no')   echo '<strong class="icono_cat sin_gluten"><i class="fa-solid fa-ban"></i> Sin Lácteo</strong>';
                    if ($cat == 'picante')     echo '<strong class="icono_cat picante"><i class="fa-solid fa-pepper-hot"></i> Picante</strong>';
                }
                echo '</div>';
                echo '<small class="plato_calorias"><i class="fa-solid fa-fire-flame-curved"></i> ' . $plato->calorias . ' kcal</small>';
                echo '</div></div>';
            }
            ?>
        </div>

        <!-- PESCADOS -->
        <div class="categoria" id="pescado">
            <h2><i class="fa-solid fa-fish"></i> Pescados y Mariscos</h2>
            <?php
            foreach ($xml->plato as $plato) {
                if ($plato['tipo'] != 'pescado') continue;

                echo '<div class="plato_card">';
                echo '<div class="plato_cabecera">';
                echo '<strong class="plato_nombre">' . $plato->nombre . '</strong>';
                echo '<strong class="plato_precio">' . $plato->precio . ' €</strong>';
                echo '</div>';
                echo '<p class="plato_descripcion">' . $plato->descripcion . '</p>';
                echo '<div class="plato_footer"><div class="plato_iconos">';
                foreach ($plato->caracteristicas->categoria as $cat) {
                    if ($cat == 'vegano')      echo '<strong class="icono_cat vegano"><i class="fa-solid fa-seedling"></i> Vegano</strong>';
                    if ($cat == 'vegetariano') echo '<strong class="icono_cat vegetariano"><i class="fa-solid fa-carrot"></i> Vegetariano</strong>';
                    if ($cat == 'sin_gluten')  echo '<strong class="icono_cat sin_gluten"><i class="fa-solid fa-wheat-awn-circle-exclamation"></i> Sin Gluten</strong>';
                    if ($cat == 'lacteo')      echo '<strong class="icono_cat lacteo"><i class="fa-solid fa-droplet"></i> Lácteo</strong>';
                    if ($cat == 'lacteo_no')   echo '<strong class="icono_cat sin_gluten"><i class="fa-solid fa-ban"></i> Sin Lácteo</strong>';
                    if ($cat == 'picante')     echo '<strong class="icono_cat picante"><i class="fa-solid fa-pepper-hot"></i> Picante</strong>';
                }
                echo '</div>';
                echo '<small class="plato_calorias"><i class="fa-solid fa-fire-flame-curved"></i> ' . $plato->calorias . ' kcal</small>';
                echo '</div></div>';
            }
            ?>
        </div>

        <!-- POSTRES -->
        <div class="categoria" id="postre">
            <h2><i class="fa-solid fa-cake-candles"></i> Postres</h2>
            <?php
            foreach ($xml->plato as $plato) {
                if ($plato['tipo'] != 'postre') continue;

                echo '<div class="plato_card">';
                echo '<div class="plato_cabecera">';
                echo '<strong class="plato_nombre">' . $plato->nombre . '</strong>';
                echo '<strong class="plato_precio">' . $plato->precio . ' €</strong>';
                echo '</div>';
                echo '<p class="plato_descripcion">' . $plato->descripcion . '</p>';
                echo '<div class="plato_footer"><div class="plato_iconos">';
                foreach ($plato->caracteristicas->categoria as $cat) {
                    if ($cat == 'vegano')      echo '<strong class="icono_cat vegano"><i class="fa-solid fa-seedling"></i> Vegano</strong>';
                    if ($cat == 'vegetariano') echo '<strong class="icono_cat vegetariano"><i class="fa-solid fa-carrot"></i> Vegetariano</strong>';
                    if ($cat == 'sin_gluten')  echo '<strong class="icono_cat sin_gluten"><i class="fa-solid fa-wheat-awn-circle-exclamation"></i> Sin Gluten</strong>';
                    if ($cat == 'lacteo')      echo '<strong class="icono_cat lacteo"><i class="fa-solid fa-droplet"></i> Lácteo</strong>';
                    if ($cat == 'lacteo_no')   echo '<strong class="icono_cat sin_gluten"><i class="fa-solid fa-ban"></i> Sin Lácteo</strong>';
                    if ($cat == 'picante')     echo '<strong class="icono_cat picante"><i class="fa-solid fa-pepper-hot"></i> Picante</strong>';
                }
                echo '</div>';
                echo '<small class="plato_calorias"><i class="fa-solid fa-fire-flame-curved"></i> ' . $plato->calorias . ' kcal</small>';
                echo '</div></div>';
            }
            ?>
        </div>

    </section>

    <div class="columna_lateral_derecha">
        <div class="menu_dia">
            <h3 id="dia"><i class="fa-solid fa-sun"></i> Menú del Día</h3>
            <p id="dia_p">Primer plato, segundo, postre y bebida incluida.</p>
            <strong id="precio_menu">13,50 €</strong>
        </div>
    </div>

</div>

<footer class="footer">
    <strong>El Rincón de David</strong>
    <p id="rincon">Cualquier duda llamar al +34 931 234 567</p>
</footer>

</body>
</html>
