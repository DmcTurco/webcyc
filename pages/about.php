<?php

/**
 * Página de Quienes Somos
 */

// Incluir configuración
include_once $_SERVER['DOCUMENT_ROOT'] . '/cycweb/config/config.php';

// Definir variables para la plantilla base
$page_title = 'Quienes Somos';
$page_description = 'Conozca más sobre C&C PROENERG, empresa especializada en ingeniería y proyectos eléctricos.';
$additional_css = ['about/about.css'];
// $additional_js = ['about.js'];

// Iniciar buffer de salida para capturar el contenido
ob_start();
?>

<!-- Banner de página - solo el título y migas de pan -->
<!-- <div class="page-banner">
    <div class="page-banner__content">
        <h1>QUIENES SOMOS</h1>
        <div class="breadcrumbs">
            <a href="<?php echo url('index.php'); ?>">HOME</a> / <span>QUIENES SOMOS</span>
        </div>
    </div>
</div> -->

<section class="hero">
    <div class="hero__slider">
        <!-- Slides -->
        <div
            class="hero__slide active"
            style="background-image: url('<?php echo asset('img/slider-cyc-1.png'); ?>')">
            <div class="hero__content">
                <h1 class="hero__title">QUIENES SOMOS</h1>
                <div class="breadcrumbs">
                    <a href="<?php echo url('index.php'); ?>">HOME</a> / <span>QUIENES SOMOS</span>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Contenido principal -->
<section id="nosotros" class="about">
    <div class="services__header--style1">
        <span class="services__subtitle--style1">INGENIERÍA Y PROYECTOS</span>
        <h2 class="services__title--style1">SERVICIOS</h2>
    </div>

    <div class="about__container">
        <div class="about__content">
            <span class="about__subtitle">DESCRIPCIÓN</span>
            <p class="about__description">C&C PROENERG, empresa altamente especializada en brindar soluciones integrales en:</p>
            <p class="about__description">
                Diseño e instalación de Proyectos eléctricos de baja, media tensión y Proyectos de gas natural en los sectores residencial, comercial, industrial y retail.
            </p>
        </div>
        <div class="about__content">
            <img src="<?php echo asset('img/logo2.png'); ?>" alt="C&C PROENERG" class="nav__logo">
        </div>
        <div class="about__content">
            <span class="about__subtitle">STAFF DE PROFESIONALES</span>
            <p class="about__description">Equipo competitivo con capacidad para hacer frente a los retos del mercado actual.</p>
            <span class="about__subtitle">SERVICIOS DE CALIDAD</span>
            <p class="about__description">Nos desempeñamos con total transparencia y honestidad, en forma eficiente, segura y confiable.</p>
        </div>
    </div>
</section>

<section class="about">

    <div class="about__container">
        <div class="about__content">
            <span class="about__subtitle">Acerca de nosotros</span>
            <h2 class="about__title">MISION / VISON</h2>

            <span class="about__subtitle">MISION</span>
            <p class="about__description">Brindar soluciones integrales de alta calidad, centrándonos en el ahorro energético, conservación del medio ambiente y satisfacción de nuestros clientes antes, durante y después del proyecto.</p>
            <span class="about__subtitle">VISION</span>
            <p class="about__description">– Ser una empresa líder reconocida y valorada en el mercado nacional.</p>
            <p class="about__description">– Proveer la mejor experiencia del cliente cada día.</p>
            <p class="about__description">– Ofrecer la mejor experiencia de diseño y ejecución en nuestro rubro.</p>
            <p class="about__description">– Brindar la oportunidad y Liberar el potencial de cada colaborador.</p>
        </div>
    </div>

</section>



<?php
// Capturar el contenido en la variable $content
$content = ob_get_clean();

// Incluir la plantilla base con el contenido capturado
include LAYOUTS_PATH . '/base.php';
?>