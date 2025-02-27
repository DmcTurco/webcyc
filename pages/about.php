<?php
// Incluir configuración
include_once $_SERVER['DOCUMENT_ROOT'] . '/cycweb/config/config.php';

// Definir variables para la plantilla base
$page_title = 'Quienes Somos';
$page_description = 'Conozca más sobre C&C PROENERG, empresa especializada en ingeniería y proyectos eléctricos.';
$additional_css = ['about/about.css'];

// Iniciar buffer de salida para capturar el contenido
ob_start();
?>

<!-- Hero Section con banner -->
<section class="about-hero">
    <div class="about-hero__slider">
        <div
            class="about-hero__slide active"
            style="background-image: url('<?php echo asset('img/banner-cycproenerg-q-s.png'); ?>')">
            <div class="about-hero__content">
                <h1 class="about-hero__title">QUIENES SOMOS</h1>
                <div class="about-breadcrumbs">
                    <a href="<?php echo url('index.php'); ?>">HOME</a> / <span>QUIENES SOMOS</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Servicios -->
<section class="about-section">
    <div class="about-header">
        <span class="about-subtitle">INGENIERÍA Y PROYECTOS</span>
        <h2 class="about-title">SERVICIOS</h2>
    </div>

    <div class="about-container">
        <div class="about-block">
            <span class="about-subtitle">DESCRIPCIÓN</span>
            <p class="about-description">C&C PROENERG, empresa altamente especializada en brindar soluciones integrales en:</p>
            <p class="about-description">
                Diseño e instalación de Proyectos eléctricos de baja, media tensión y Proyectos de gas natural en los sectores residencial, comercial, industrial y retail.
            </p>
        </div>

        <div class="about-block">
            <img src="<?php echo asset('img/logo2.png'); ?>" alt="C&C PROENERG" class="about-logo">
        </div>

        <div class="about-block">
            <span class="about-subtitle">STAFF DE PROFESIONALES</span>
            <p class="about-description">Equipo competitivo con capacidad para hacer frente a los retos del mercado actual.</p>
            <span class="about-subtitle">SERVICIOS DE CALIDAD</span>
            <p class="about-description">Nos desempeñamos con total transparencia y honestidad, en forma eficiente, segura y confiable.</p>
        </div>
    </div>
</section>

<!-- Sección Misión y Visión -->
<section class="mission-vision">
    <div class="mission-vision__container">
        <div class="mission-vision__header">
            <span class="mission-vision__subtitle">Acerca de nosotros</span>
            <h2 class="mission-vision__title">MISIÓN / VISIÓN</h2>
        </div>

        <div class="mission-vision__content">
            <div class="mission-vision__item">
                <img src="<?php echo asset('img/mision-i.png'); ?>" alt="Misión" class="mission-vision__icon">
                <div class="mission-vision__text">
                    <span class="mission-vision__label">MISIÓN</span>
                    <p class="mission-vision__description">Brindar soluciones integrales de alta calidad, centrándonos en el ahorro energético, conservación del medio ambiente y satisfacción de nuestros clientes antes, durante y después del proyecto.</p>
                </div>
            </div>

            <div class="mission-vision__item">
                <img src="<?php echo asset('img/vision-i.png'); ?>" alt="Visión" class="mission-vision__icon">
                <div class="mission-vision__text">
                    <span class="mission-vision__label">VISIÓN</span>
                    <div class="mission-vision__vision-points">
                        <p class="mission-vision__description">– Ser una empresa líder reconocida y valorada en el mercado nacional.</p>
                        <p class="mission-vision__description">– Proveer la mejor experiencia del cliente cada día.</p>
                        <p class="mission-vision__description">– Ofrecer la mejor experiencia de diseño y ejecución en nuestro rubro.</p>
                        <p class="mission-vision__description">– Brindar la oportunidad y Liberar el potencial de cada colaborador.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Capturar el contenido en la variable $content
$content = ob_get_clean();

// Incluir la plantilla base con el contenido capturado
include LAYOUTS_PATH . '/base.php';
?>