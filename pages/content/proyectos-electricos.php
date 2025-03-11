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
            style="background-image: url('<?php echo asset('img/cycproenerg-servicio3-banner.png'); ?>')">
            <div class="services-hero__content">
                <h1 class="services-hero__title">PROYECTOS ELÉCTRICOS DE BAJA Y MEDIA TENSIÓN</h1>
                <div class="services-breadcrumbs">
                    <a href="<?php echo url('index.php'); ?>">HOME</a> / <span>PROYECTOS ELÉCTRICOS DE BAJA Y MEDIA TENSIÓN</span>
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
                    <a href="<?php echo url('pages/content/proyectos-electricos.php'); ?>" class="services-sidebar__link active" data-service="proyectos-electricos">
                        <i class="fa fa-plus"></i> PROYECTOS ELÉCTRICOS DE BAJA Y MEDIA TENSIÓN
                    </a>
                </li>
                <li class="services-sidebar__item">
                    <a href="<?php echo url('pages/content/gas-natural.php'); ?>" class="services-sidebar__link" data-service="gas-natural">
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
                    <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                </div>
            </div>

        </aside>

        <!-- Contenido principal -->
        <div class="services-content">
            <div class="services-description">
                <h2 class="services-description">PROYECTOS ELÉCTRICOS DE BAJA Y MEDIA TENSIÓN</h2>
            </div>
            <div class="services-description">
                <p>Desarrollada por un staff de ingenieros experimentados, con sólidos conocimientos en la materia y normativa vigente (CNE, RNE, NTP somos especialistas en:</p>
            </div>

            <!-- Diseño de Ingeniería -->
            <div class="services-block">
                <div class="services-block-content">
                    <h3 class="services-block-title">
                        <i class="fa fa-bolt"></i> DISEÑO DE INGENIERÍA EN BAJA Y MEDIA TENSIÓN
                    </h3>
                    <ul class="services-list">
                        <li>Estudio de sistema de utilización en baja y media tensión.</li>
                        <li>Estudio de coordinación de protecciones.</li>
                        <li>Diseño de planos de diagramas unifilares, alumbrado, Tomacorriente, corrientes débiles( Voz, data, CCTV, CACI), salida de fuerza, sistema de puesta a tierra, diagramas unifilares en baja y media tensión, etc.</li>
                        <li>Realización de estudios luminotécnicos y de ahorro energético con tecnología Led, los cálculos se realiza a través del software más avanzado en estudios luminotécnicos.</li>
                    </ul>
                </div>
                <div class="services-image">
                    <img src="<?php echo asset('img/cycproenerg-servicio3-img1.png'); ?>" alt="Diseño de Ingeniería Eléctrica">
                </div>
            </div>

            <!-- Ejecución de Proyectos -->
            <div class="services-block">
                <div class="services-image">
                    <img src="<?php echo asset('img/cycproenerg-servicio3-img2.png'); ?>" alt="Ejecución de Proyectos Eléctricos">
                </div>
                <div class="services-block-content">
                    <h3 class="services-block-title">
                        <i class="fa fa-cogs"></i> EJECUCIÓN DE PROYECTOS EN BAJA Y MEDIA TENSIÓN
                    </h3>
                    <ul class="services-list">
                        <li>Montaje e instalación de subestaciones convencionales, Aérea Biposte, compacta, etc.</li>
                        <li>Montaje e instalación de tableros generales y distribución ya sean adosadas, empotradas o autosoportadas.</li>
                        <li>Instalaciones eléctricas de almacenes, oficinas, edificios multifamiliares, plantas industriales, entre otros.</li>
                        <li>Implementación de sistema de puesta a tierra con los valores aceptadas por la norma vigente.</li>
                    </ul>
                </div>
            </div>

            <!-- Mantenimiento -->
            <div class="services-block">
                <div class="services-block-content">
                    <h3 class="services-block-title">
                        <i class="fa fa-wrench"></i> MANTENIMIENTO
                    </h3>
                    <ul class="services-list">
                        <li>Mantenimiento de subestaciones eléctricas, transformadores seco y en aceite, análisis cromatográfico, Físico Químico, rigidez dieléctrica, niveles de humedad, etc.</li>
                        <li>Mantenimiento de Tableros eléctricos, sistemas de puesta a tierra e instalaciones eléctricas y comunicaciones en general.</li>
                    </ul>
                </div>
                <div class="services-image">
                    <img src="<?php echo asset('img/cycproenerg-servicio3-img3.png'); ?>" alt="Mantenimiento Eléctrico">
                </div>
            </div>

        </div>

    </div>
</section>


<?php
$content = ob_get_clean();
include LAYOUTS_PATH . '/base.php';
?>