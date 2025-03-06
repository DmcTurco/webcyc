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
            style="background-image: url('<?php echo asset('img/banner-cycproenerg-servicios.png'); ?>')">
            <div class="services-hero__content">
                <h1 class="services-hero__title">SERVICIOS</h1>
                <div class="services-breadcrumbs">
                    <a href="<?php echo url('index.php'); ?>">HOME</a> / <span>SERVICIOS</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de contenido principal con sidebar -->
<section class="services-section">
    <div class="services-layout">
        <!-- Sidebar -->
        <aside class="services-sidebar">
            <!-- Caja de búsqueda -->
            <div class="search-box">
                <h3 class="search-box__title">Buscar</h3>
                <form class="search-box__form" action="<?php echo url('search.php'); ?>" method="GET">
                    <input type="text" name="q" class="search-box__input" placeholder="">
                    <button type="submit" class="search-box__button">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>

            <!-- Menú de servicios destacados -->
            <h3 class="services-sidebar__title">Servicios Destacados</h3>
            <ul class="services-sidebar__menu">
                <li class="services-sidebar__item">
                    <a href="javascript:void(0);" class="services-sidebar__link active" data-service="proyectos-electricos">
                        <i class="fa fa-plus"></i> PROYECTOS ELÉCTRICOS DE BAJA Y MEDIA TENSIÓN
                    </a>
                </li>
                <li class="services-sidebar__item">
                    <a href="javascript:void(0);" class="services-sidebar__link" data-service="gas-natural">
                        <i class="fa fa-plus"></i> GAS NATURAL
                    </a>
                </li>
            </ul>
        </aside>

        <!-- Contenido principal -->
        <div class="services-content" id="services-content">
            <!-- El contenido se cargará dinámicamente con AJAX -->
            <!-- Contenido inicial (proyectos eléctricos) -->
            <div id="service-proyectos-electricos" class="service-content active">
                <div class="loading-spinner">Cargando...</div>
            </div>

            <!-- Contenido de Gas Natural (inicialmente oculto) -->
            <div id="service-gas-natural" class="service-content">
                <div class="loading-spinner">Cargando...</div>
            </div>

        </div>
    </div>
</section>

<!-- Sección de Contacto/Cotizar -->
<!-- <section class="services-contact">
    <div class="services-contact__container">
        <div class="services-contact__info">
            <h3 class="services-contact__title">Información</h3>
            <h2 class="services-contact__cta">COTIZAR</h2>
        </div>
        <div class="services-contact__form">
            <form action="<?php echo url('process-quote.php'); ?>" method="POST">
                <div class="form-group">
                    <input type="text" name="nombre" placeholder="Nombre (*)" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="E-mail (*)" required>
                </div>
                <div class="form-group">
                    <input type="tel" name="telefono" placeholder="Teléfono (*)" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn-submit">ENVIAR</button>
                </div>
            </form>
        </div>
    </div>
</section> -->

<!-- Sección de Redes Sociales -->
<!-- <section class="services-social">
    <div class="services-social__container">
        <h3 class="services-social__title">Síguenos</h3>
        <p class="services-social__text">Para mayor información síguenos en nuestras redes sociales:</p>
        <div class="services-social__icons">
            <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
            <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
        </div>
    </div>
</section> -->

<?php
// Capturar el contenido en la variable $content
$content = ob_get_clean();
// Incluir la plantilla base con el contenido capturado
include LAYOUTS_PATH . '/base.php';
?>