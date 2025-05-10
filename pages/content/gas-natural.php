<?php
// Incluir configuración
include_once $_SERVER['DOCUMENT_ROOT'] . '/webcyc/config/config.php';
// Definir variables para la plantilla base
$page_title = 'Servicios';
$page_description = 'Servicios especializados por C&C PROENERG.';
$additional_css = ['services/services.css'];
$additional_js = ['services/services.js', 'about.js'];
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
                    <a href="<?php echo url('index.php'); ?>">HOME</a> / <span>Gas Natural</span>
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
            <!-- Formulario de Cotización -->
            <div class="services-quote-form">
                <h3 class="services-sidebar__title">Información</h3>
                <div class="cotizar-box">
                    <h3 class="cotizar-title">COTIZAR</h3>
                    <form action="<?php echo url('procesar-cotizacion.php'); ?>" method="POST">
                        <div class="form-group nombre-group">
                            <input type="text" name="nombre" placeholder="Nombre (*)" required>
                        </div>
                        <div class="form-group email-group">
                            <input type="email" name="email" placeholder="E-mail (*)" required>
                        </div>
                        <div class="form-group telefono-group">
                            <input type="tel" name="telefono" placeholder="Teléfono (*)">
                        </div>
                        <button type="submit" class="btn-enviar">ENVIAR</button>
                    </form>
                </div>
            </div>

            <!-- Sección de Síguenos -->
            <div class="services-social-sidebar">
                <h3 class="services-sidebar__title">Síguenos</h3>
                <p>Para mayor información síguenos en nuestras redes sociales:</p>
                <div class="social-icons">
                    <a href="#" class="social-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="16" height="16">
                            <path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                        </svg>
                    </a>
                    <a href="#" class="social-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="16" height="16">
                            <path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                        </svg>
                    </a>
                </div>
            </div>
        </aside>

        <!-- Contenido principal -->
        <div class="services-content">
            <!-- Introducción -->
            <div class="services-header">
                <h2 class="services-title">GAS NATURAL</h2>
            </div>

            <div class="services-description">
                <p>Es la fuente de energía más limpia, menos contaminante y con menor contenido de carbono de todos los combustibles fósiles. Por eso, tiene un papel importante en la reducción de emisiones de agentes contaminantes y a precio mucho más económico.</p>
            </div>

            <!-- Carrusel de imágenes con estructura compatible con el nuevo JS -->
            <div class="about__gallery">

                <!-- Grupo 1 -->
                <div class="about__slide-group active">
                    <div class="about__image">
                        <img src="<?php echo asset('img/cycproenerg-servicio4-img1.jpg'); ?>" alt="Diseño de Gas Natural">
                    </div>
                    <div class="about__image">
                        <img src="<?php echo asset('img/cycproenerg-servicio4-img2.jpg'); ?>" alt="Instalación de Gas Natural">
                    </div>
                </div>
                <!-- Grupo 2 -->
                <div class="about__slide-group">
                    <div class="about__image">
                        <img src="<?php echo asset('img/cycproenerg-servicio4-img3.jpg'); ?>" alt="Proyecto de Gas Natural">
                    </div>
                    <div class="about__image">
                        <img src="<?php echo asset('img/cycproenerg-servicio4-img5.png'); ?>" alt="Proyecto de Gas Natural">
                    </div>
                </div>
                <!-- Grupo 3 -->
                <div class="about__slide-group ">
                    <div class="about__image">
                        <img src="<?php echo asset('img/cycproenerg-servicio4-img4.png'); ?>" alt="Proyecto de Gas Natural">
                    </div>
                    <div class="about__image">
                        <img src="<?php echo asset('img/cycproenerg-servicio4-img2.jpg'); ?>" alt="Instalación de Gas Natural">
                    </div>
                </div>

                <!-- Controles -->
                <div class="about__gallery-controls">
                    <span class="about__gallery-dot active"></span>
                    <span class="about__gallery-dot"></span>
                    <span class="about__gallery-dot"></span>
                </div>
                <!-- Flechas de navegación -->
                <div class="about__gallery-arrow about__gallery-arrow--prev"></div>
                <div class="about__gallery-arrow about__gallery-arrow--next"></div>

            </div>


            <!-- Servicios de Gas Natural -->
            <div class="gas-services-grid">
                <!-- Servicio 1 -->
                <div class="gas-service-item">
                    <div class="gas-service-icon">
                        <img src="<?php echo asset('svg/icono-gas-natural.svg'); ?>" alt="Icono Gas Natural">
                    </div>
                    <h3 class="gas-service-title">DISEÑO Y PROYECTO DE GAS NATURAL</h3>
                    <p class="gas-service-description">Contamos con el área de ingeniería especializada en gas natural cumpliendo las normas NTP 111.010 NTP 111.011 EM 040 y más.</p>
                </div>

                <!-- Servicio 2 -->
                <div class="gas-service-item">
                    <div class="gas-service-icon">
                        <img src="<?php echo asset('svg/icono-gas-natural.svg'); ?>" alt="Icono Gas Natural">
                    </div>
                    <h3 class="gas-service-title">INSTALACIONES RESIDENCIALES Y AMPLIACIONES (PUNTO EXTRA)</h3>
                    <p class="gas-service-description">Instalaciones residenciales para artefactos a baja presión (23 mbar).</p>
                </div>

                <!-- Servicio 3 -->
                <div class="gas-service-item">
                    <div class="gas-service-icon">
                        <img src="<?php echo asset('svg/icono-gas-natural.svg'); ?>" alt="Icono Gas Natural">
                    </div>
                    <h3 class="gas-service-title">INSTALACIONES Y PROYECTOS COMERCIALES</h3>
                    <p class="gas-service-description">Instalaciones comerciales para artefactos de media y baja presión con una presión de entrada de 340 mbar.</p>
                </div>

                <!-- Servicio 4 -->
                <div class="gas-service-item">
                    <div class="gas-service-icon">
                        <img src="<?php echo asset('svg/icono-gas-natural.svg'); ?>" alt="Icono Gas Natural">
                    </div>
                    <h3 class="gas-service-title">INSTALACIONES Y PROYECTOS MULTIFAMILIARES</h3>
                    <p class="gas-service-description">Instalación y montaje de tuberías (montante y línea interior individual) bajo las normas NTP 111.011 y otros.</p>
                </div>

                <!-- Servicio 5 -->
                <div class="gas-service-item">
                    <div class="gas-service-icon">
                        <img src="<?php echo asset('svg/icono-gas-natural.svg'); ?>" alt="Icono Gas Natural">
                    </div>
                    <h3 class="gas-service-title">INSTALACIONES INDUSTRIALES</h3>
                    <p class="gas-service-description">Instalación y montaje de tuberías aplicado a las industrias.</p>
                </div>

                <!-- Servicio 6 -->
                <div class="gas-service-item">
                    <div class="gas-service-icon">
                        <img src="<?php echo asset('svg/icono-gas-natural.svg'); ?>" alt="Icono Gas Natural">
                    </div>
                    <h3 class="gas-service-title">DISEÑO Y CONSTRUCCIÓN EN REDES DE DISTRIBUCIÓN</h3>
                    <p class="gas-service-description">
                        Todas estas obras actividades se llevan a cabo con una planificación y verificación por personal altamente calificado cumpliendo con todos los requisitos de calidad y de Ley.<br>
                        – Polietileno<br>
                        – Acero
                    </p>

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