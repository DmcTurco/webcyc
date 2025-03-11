<?php

/**
 * Sección Hero de la página principal
 */
?>
<section class="hero">
    <div class="hero__slider">
        <!-- Slides -->
        <div
            class="hero__slide active"
            style="background-image: url('<?php echo asset('img/slider-cyc-1.png'); ?>')">
            <div class="hero__content">
                <h1 class="hero__title">C&C PROENERG</h1>
                <p class="hero__description">
                    Soluciones integrales en ingeniería y proyectos eléctricos
                </p>
                <div class="hero__buttons">
                    <a href="<?php echo url('pages/servicios.php'); ?>" class="btn btn--primary">Nuestros Servicios</a>
                    <a href="<?php echo url('pages/contacto.php'); ?>" class="btn btn--secondary">Contáctanos</a>
                </div>
            </div>
        </div>

        <div
            class="hero__slide"
            style="background-image: url('<?php echo asset('img/slider-cyc-2.png'); ?>')">
            <div class="hero__content">
                <h1 class="hero__title">Experiencia y Calidad</h1>
                <p class="hero__description">
                    Más de 10 años brindando soluciones eléctricas de alta calidad
                </p>
                <div class="hero__buttons">
                    <a href="<?php echo url('pages/servicios.php'); ?>" class="btn btn--primary">Nuestros Servicios</a>
                    <a href="<?php echo url('pages/contacto.php'); ?>" class="btn btn--secondary">Contáctanos</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Indicadores del carrusel -->
    <div class="hero__indicators">
        <span class="hero__indicator active"></span>
        <span class="hero__indicator"></span>
    </div>
</section>

<section id="nosotros" class="about">
  <div class="about__container">
    <div class="about__content">
      <span class="about__subtitle">Acerca de nosotros</span>
      <h2 class="about__title">C&C PROENERG</h2>
      <p class="about__description">
        Empresa especializada en brindar soluciones integrales de diseño e
        instalación de sistemas de bombeo de agua, sistemas contra
        incendio, proyectos eléctricos de baja, media tensión y proyectos
        de gas natural en los sectores residencial, comercial, industrial
        y retail.
      </p>
      <a href="<?php echo url('pages/about.php'); ?>" class="about__btn"> + MÁS INFORMACIÓN </a>
    </div>

    <div class="about__gallery">
      <!-- Grupo 1 -->
      <div class="about__slide-group active">
        <div class="about__image">
          <img
            src="<?php echo asset('img/cycproenerg-servicio4-img1.jpg'); ?>"
            alt="Equipo de trabajo"
          />
        </div>
        <div class="about__image">
          <img
            src="<?php echo asset('img/cycproenerg-servicio2-img1.png'); ?>"
            alt="Instalaciones"
          />
        </div>
      </div>

      <!-- Grupo 2 -->
      <div class="about__slide-group">
        <div class="about__image">
          <img
            src="<?php echo asset('img/cycproenerg-servicio3-img2.png'); ?>"
            alt="Proyectos"
          />
        </div>
        <div class="about__image">
          <img
            src="<?php echo asset('img/cycproenerg-servicio1-img3.png'); ?>"
            alt="Servicios"
          />
        </div>
      </div>

      <!-- Grupo 3 -->
      <div class="about__slide-group">
        <div class="about__image">
          <img
            src="<?php echo asset('img/cycproenerg-servicio2-img1.png'); ?>"
            alt="Tecnología"
          />
        </div>
        <div class="about__image">
          <img
            src="<?php echo asset('img/cycproenerg-servicio3-img2.png'); ?>"
            alt="Innovación"
          />
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
  </div>

  <!-- Indicadores -->
  <div class="about__nav">
    <span class="about__nav-dot active"></span>
    <span class="about__nav-dot"></span>
  </div>
</section>

<section id="servicios" class="services">
  <div class="services__header--style1">
    <span class="services__subtitle--style1">INGENIERÍA Y PROYECTOS</span>
    <h2 class="services__title--style1">SERVICIOS</h2>
  </div>

  <div class="services__grid">
    <!-- Servicio 3 - Proyectos Eléctricos -->
    <div class="service-card">
      <div class="service-card__image">
        <img
          src="<?php echo asset('img/cycproenerg-servicio-03.jpg'); ?>"
          alt="Proyectos eléctricos"
        />
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
          alt="Gas natural"
        />
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

<section class="services__cta">
  <h3 class="services__cta-title">¿TIENE ALGUNA CONSULTA?</h3>
  <p>NO DUDE EN CONTACTARNOS EN CUALQUIER MOMENTO.</p>
  <div class="services__cta-buttons">
    <a href="<?php echo url('pages/contacto.php#formulario'); ?>" class="services__cta-btn">SOLICITAR INFORMES</a>
    <a href="<?php echo url('pages/contacto.php'); ?>" class="services__cta-btn">CONTACTO</a>
  </div>
</section>