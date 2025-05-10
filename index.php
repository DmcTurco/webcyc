<?php

/**
 * Página principal
 */

// Incluir configuración
include_once 'config/config.php';

// Definir variables para la plantilla base
$page_title = 'Inicio';
$page_description = 'C&C PROENERG - Empresa especializada en servicios de ingeniería y proyectos eléctricos';
// $additional_css = ['home.css'];
$additional_js = ['carousel.js', 'about.js', 'index.js'];

// Iniciar buffer de salida para capturar el contenido
ob_start();
?>

<!-- Hero Section -->
<?php include PAGES_PATH . '/home.php'; ?>

<!-- About Preview Section -->
<!-- <?php include INCLUDES_PATH . '/home-about.php'; ?> -->

<!-- Services Preview Section -->
<!-- <?php include INCLUDES_PATH . '/home-services.php'; ?> -->


<?php
// Capturar el contenido en la variable $content
$content = ob_get_clean();

// Incluir la plantilla base con el contenido capturado
include LAYOUTS_PATH . '/base.php';
?>