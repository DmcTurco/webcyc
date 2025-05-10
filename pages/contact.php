<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/webcyc/config/config.php';
$page_title = 'Proyectos Eléctricos';
$page_description = 'Conozca más sobre los proyectos eléctricos de C&C PROENERG.';
$additional_css = ['services/services.css'];

ob_start();
?>


<?php
// Capturar el contenido en la variable $content
$content = ob_get_clean();

// Incluir la plantilla base con el contenido capturado
include LAYOUTS_PATH . '/base.php';
?>