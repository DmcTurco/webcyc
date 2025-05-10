<?php

/**
 * Configuración principal del sitio
 */

// URL base del sitio
define('BASE_URL', '/webcyc/');

// Título del sitio
define('SITE_NAME', 'C&C PROENERG');

// Información de la empresa
define('COMPANY_EMAIL', 'info@cycproenerg.com');
define('COMPANY_PHONE', '+51 123 456 789');
define('COMPANY_ADDRESS', 'Av. Principal 123, Lima, Perú');

// Rutas del sistema
define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'] . '/webcyc');
define('LAYOUTS_PATH', ROOT_PATH . '/layouts');
define('PAGES_PATH', ROOT_PATH . '/pages');
define('INCLUDES_PATH', ROOT_PATH . '/includes');

/**
 * Función para generar URLs completas
 */
/**
 * Función para generar URLs completas sin extensión .php
 */
function url($path = '')
{
    $path = ltrim($path, '/');

    // Quitar la extensión .php para URLs más limpias
    if (substr($path, -4) === '.php') {
        $path = substr($path, 0, -4);
    }

    // Manejar caso especial para index
    if ($path === 'index') {
        $path = '';
    }

    return BASE_URL . $path;
}

/**
 * Función para generar rutas de assets
 */
function asset($path)
{
    return url('assets/' . ltrim($path, '/'));
}

/**
 * Función para cargar componentes
 */
function component($name, $data = [])
{
    $file = LAYOUTS_PATH . '/components/' . $name . '.php';
    if (file_exists($file)) {
        // Extraer variables del array $data para usarlas en el componente
        extract($data);
        include $file;
    } else {
        echo "<!-- Componente '$name' no encontrado -->";
    }
}

/**
 * Función para determinar la página activa
 */
function is_active($page)
{
    $current_page = basename($_SERVER['PHP_SELF'], '.php');
    return $current_page === $page;
}
