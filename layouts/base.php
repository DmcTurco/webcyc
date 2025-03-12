<?php
/**
 * Plantilla base del sitio
 * 
 * Parámetros:
 * - $page_title: Título de la página (obligatorio)
 * - $page_description: Descripción de la página para SEO (opcional)
 * - $additional_css: Array de archivos CSS adicionales (opcional)
 * - $additional_js: Array de archivos JS adicionales (opcional)
 * - $body_class: Clase adicional para el elemento body (opcional)
 */

// Incluir configuración si no se ha incluido ya
if (!defined('BASE_URL')) {
    include_once $_SERVER['DOCUMENT_ROOT'] . '/cycweb/config/config.php';
}

// Valores por defecto
$page_description = $page_description ?? '';
$additional_css = $additional_css ?? [];
$additional_js = $additional_js ?? [];
$body_class = $body_class ?? '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $page_description; ?>">
    <title><?php echo $page_title; ?> - <?php echo SITE_NAME; ?></title>
    
    <!-- Estilos base -->
    <link rel="stylesheet" href="<?php echo asset('css/index.css'); ?>">
    
    <!-- Fuentes -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <!-- Estilos adicionales -->
    <?php foreach ($additional_css as $css): ?>
    <link rel="stylesheet" href="<?php echo asset('css/' . $css); ?>">
    <?php endforeach; ?>
</head>
<body class="<?php echo $body_class; ?>">
    <!-- Header -->
    <?php include LAYOUTS_PATH . '/header.php'; ?>
    
    <!-- Contenido principal -->
    <main>
        <?php 
        // Aquí se insertará el contenido específico de cada página
        echo $content ?? ''; 
        ?>
    </main>
    
    <!-- Footer -->
    <?php include LAYOUTS_PATH . '/footer.php'; ?>
    
    <!-- Scripts base -->
    <script src="<?php echo asset('js/header.js'); ?>"></script>
    
    <!-- Scripts adicionales -->
    <?php foreach ($additional_js as $js): ?>
    <script src="<?php echo asset('js/' . $js); ?>"></script>
    <?php endforeach; ?>
</body>
</html>