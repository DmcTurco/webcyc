<?php

/**
 * Componente de cabecera del sitio
 */

// Incluir configuración si no se ha incluido ya
if (!defined('BASE_URL')) {
  include_once $_SERVER['DOCUMENT_ROOT'] . '/cycweb/config/config.php';
}
?>
<header class="header">
  <nav class="nav">
    <img src="<?php echo asset('img/logo2.png'); ?>" alt="<?php echo SITE_NAME; ?>" class="nav__logo" />

    <!-- Es importante que el botón hamburguesa esté antes de nav__menu en modo móvil -->
    <div class="nav__toggle">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <div class="nav__menu">
      <a href="<?php echo url('index.php'); ?>" class="nav__link <?php echo is_active('index') ? 'active' : ''; ?>">INICIO</a>
      <a href="<?php echo url('pages/about.php'); ?>" class="nav__link <?php echo is_active('about') ? 'active' : ''; ?>">QUIENES SOMOS</a>
      <div class="dropdown">
        <a href="<?php echo url('pages/servicios.php'); ?>" class="nav__link <?php echo is_active('servicios') ? 'active' : ''; ?>">SERVICIOS DESTACADOS</a>
        <div class="dropdown-content">
          <a href="<?php echo url('pages/servicios.php'); ?>#proyectos-electricos">PROYECTOS ELECTRICOS</a>
          <a href="<?php echo url('pages/servicios.php'); ?>#gas-natural">GAS NATURAL</a>
        </div>
      </div>
      <a href="<?php echo url('pages/contacto.php'); ?>" class="nav__link <?php echo is_active('contacto') ? 'active' : ''; ?>">CONTACTO</a>
    </div>
  </nav>
</header>