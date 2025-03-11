<?php
// Incluir configuración
include_once $_SERVER['DOCUMENT_ROOT'] . '/cycweb/config/config.php';
// Definir variables para la plantilla base
$page_title = 'Servicios';
$page_description = 'Servicios especializados por C&C PROENERG.';
$additional_css = ['services/services.css'];
$additional_js = ['services/services.js'];
// Iniciar buffer de salida para capturar el contenido
ob_start();
?>
<!-- Hero Section con banner -->
<section class="services-hero">
    <div class="services-hero__slider">
        <div
            class="services-hero__slide active"
            style="background-image: url('<?php echo asset('img/bg2-slider2.jpg'); ?>')">
            <div class="services-hero__content">
                <h1 class="services-hero__title">SERVICIOS</h1>
                <div class="services-breadcrumbs">
                    <a href="<?php echo url('index.php'); ?>">HOME</a> / <span>SERVICIOS</span>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Sección de contenido principal -->
<section class="services-section">
    <!-- <div class="services__header--style1">
        <span class="services__subtitle--style1">INGENIERÍA Y PROYECTOS</span>
        <h2 class="services__title--style1">SERVICIOS</h2>
    </div> -->
    <div class="services__grid">
        <!-- Servicio 3 - Proyectos Eléctricos -->
        <div class="service-card">
            <div class="service-card__image">
                <img
                    src="<?php echo asset('img/cycproenerg-servicio-03.jpg'); ?>"
                    alt="Proyectos eléctricos" />
            </div>
            <div class="service-card__content">
                <div class="service-card__icon">
                    <img src="<?php echo asset('img/icono3.png'); ?>" alt="Icono eléctrico" />
                </div>
                <h3 class="service-card__title">PROYECTOS ELÉCTRICOS</h3>
                <p class="service-card__description">
                    Desarrollada por un staff de ingenieros experimentados, con
                    sólidos conocimientos en la materia y normativa vigente (CNE,
                    RNE, NTP).
                </p>
                <a href="<?php echo url('pages/content/proyectos-electricos.php'); ?>" class="service-card__link">VER MÁS</a>
            </div>
        </div>

        <!-- Servicio 4 - Gas Natural -->
        <div class="service-card">
            <div class="service-card__image">
                <img
                    src="<?php echo asset('img/cycproenerg-servicio-04.jpg'); ?>"
                    alt="Gas natural" />
            </div>
            <div class="service-card__content">
                <div class="service-card__icon">
                    <img src="<?php echo asset('img/icono4.png'); ?>" alt="Icono gas" />
                </div>
                <h3 class="service-card__title">GAS NATURAL</h3>
                <p class="service-card__description">
                    Es la fuente de energía más limpia, menos contaminante y con
                    menor contenido de carbono de todos los combustibles fósiles.
                </p>
                <a href="<?php echo url('pages/content/gas-natural.php'); ?>" class="service-card__link">VER MÁS</a>
            </div>
        </div>

    </div>
</section>

</section>

<?php
// Capturar el contenido en la variable $content
$content = ob_get_clean();
// Incluir la plantilla base con el contenido capturado
include LAYOUTS_PATH . '/base.php';
?>