// Asegurémonos de que el JavaScript funcione correctamente
document.addEventListener('DOMContentLoaded', function () {
    // Comprobar que los elementos existen antes de usarlos
    const header = document.querySelector('.header');
    const navToggle = document.querySelector('.nav__toggle');
    const navMenu = document.querySelector('.nav__menu');

    if (!header || !navToggle || !navMenu) {
        console.error('Elementos de navegación no encontrados:',
            !header ? 'header' : '',
            !navToggle ? 'navToggle' : '',
            !navMenu ? 'navMenu' : '');
        return; // Detener ejecución si faltan elementos
    }

    // Verificar si existe dropdown
    const dropdown = document.querySelector('.dropdown');
    let dropdownLink;

    if (dropdown) {
        dropdownLink = dropdown.querySelector('.nav__link');
    } else {
        console.warn('Dropdown no encontrado');
    }

    let lastScroll = 0;

    // Comportamiento del scroll
    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;

        // Añade clase cuando se hace scroll hacia abajo
        if (currentScroll > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }

        lastScroll = currentScroll;
    });

    // Toggle del menú móvil
    navToggle.addEventListener('click', function () {
        console.log('Toggle clicked! Current class list:', navMenu.classList);
        navToggle.classList.toggle('active');
        navMenu.classList.toggle('active');

        // Cerrar dropdown si está abierto y existe
        if (dropdown && dropdown.classList.contains('active')) {
            dropdown.classList.remove('active');
        }

        // Prevenir scroll cuando el menú está abierto
        if (navMenu.classList.contains('active')) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = '';
        }
    });

    // Solo ejecutar código de dropdown si existe
    if (dropdown && dropdownLink) {
        // Manejo del dropdown en móvil
        dropdownLink.addEventListener('click', function (e) {
            if (window.innerWidth <= 1024) {
                e.preventDefault();
                dropdown.classList.toggle('active');

                // Calcular altura para animación
                const dropdownContent = dropdown.querySelector('.dropdown-content');
                if (!dropdownContent) {
                    console.warn('Dropdown content no encontrado');
                    return;
                }

                const dropdownItems = dropdownContent.querySelectorAll('a');

                if (dropdown.classList.contains('active')) {
                    // Altura total: suma de alturas de todos los elementos
                    let totalHeight = 0;
                    dropdownItems.forEach(item => {
                        totalHeight += item.offsetHeight;
                    });

                    dropdownContent.style.height = totalHeight + 'px';
                } else {
                    dropdownContent.style.height = '0';
                }
            }
        });

        // Cerrar dropdown al hacer click fuera
        document.addEventListener('click', function (e) {
            if (window.innerWidth <= 1024 &&
                dropdown.classList.contains('active') &&
                !dropdown.contains(e.target)) {

                dropdown.classList.remove('active');
                const dropdownContent = dropdown.querySelector('.dropdown-content');
                if (dropdownContent) {
                    dropdownContent.style.height = '0';
                }
            }
        });
    }

    // Ajustar al cambiar tamaño de pantalla
    window.addEventListener('resize', function () {
        if (window.innerWidth > 1024) {
            // Resetear menú y dropdown en desktop
            navToggle.classList.remove('active');
            navMenu.classList.remove('active');

            if (dropdown) {
                dropdown.classList.remove('active');

                // Resetear altura del dropdown
                const dropdownContent = dropdown.querySelector('.dropdown-content');
                if (dropdownContent) {
                    dropdownContent.style.height = '';
                }
            }

            document.body.style.overflow = '';
        }
    });

    // Cerrar menú al hacer click en un enlace
    const navLinks = document.querySelectorAll('.nav__link');
    navLinks.forEach(link => {
        link.addEventListener('click', function () {
            if (window.innerWidth <= 1024 &&
                (!this.parentElement || !this.parentElement.classList.contains('dropdown'))) {

                navToggle.classList.remove('active');
                navMenu.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    });

    // Inicialización: comprobar scroll al cargar
    if (window.pageYOffset > 100) {
        header.classList.add('scrolled');
    }

    console.log('Header script initialized successfully');
});