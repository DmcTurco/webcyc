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
            style="background-image: url('<?php echo asset('img/banner-cycproenerg-q-s.png'); ?>')">
            <div class="services-hero__content">
                <h1 class="services-hero__title">Gas Natural</h1>
                <div class="services-breadcrumbs">
                    <a href="<?php echo url('index.php'); ?>">HOME</a> / <span>PGas Natural</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="services-section">
    <div class="services-layout">
        <!-- Sidebar -->
        <aside class="services-sidebar">
            <!-- Caja de búsqueda -->
            <!-- <div class="search-box">
                <h3 class="search-box__title">Buscar</h3>
                <form class="search-box__form" action="<?php echo url('search.php'); ?>" method="GET">
                    <input type="text" name="q" class="search-box__input" placeholder="">
                    <button type="submit" class="search-box__button">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div> -->

            <!-- Menú de servicios destacados -->
            <h3 class="services-sidebar__title">Servicios Destacados</h3>
            <ul class="services-sidebar__menu">
                <li class="services-sidebar__item">
                    <a href="<?php echo url('pages/content/proyectos-electricos.php'); ?>" class="services-sidebar__link" data-service="proyectos-electricos">
                        <i class="fa fa-plus"></i> PROYECTOS ELÉCTRICOS DE BAJA Y MEDIA TENSIÓN
                    </a>
                </li>
                <li class="services-sidebar__item">
                    <a href="<?php echo url('pages/content/gas-natural.php'); ?>" class="services-sidebar__link active" data-service="gas-natural">
                        <i class="fa fa-plus"></i> GAS NATURAL
                    </a>
                </li>
            </ul>
        </aside>

        <!-- Contenido principal -->

    </div>
</section>

<?php
// Capturar el contenido en la variable $content
$content = ob_get_clean();
// Incluir la plantilla base con el contenido capturado
include LAYOUTS_PATH . '/base.php';
?>