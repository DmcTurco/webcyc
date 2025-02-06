document.addEventListener('DOMContentLoaded', function() {
    const slideGroups = document.querySelectorAll('.about__slide-group');
    const dots = document.querySelectorAll('.about__gallery-dot');
    const prevBtn = document.querySelector('.about__gallery-arrow--prev');
    const nextBtn = document.querySelector('.about__gallery-arrow--next');
    let currentIndex = 0;
    let interval;

    function showSlideGroup(index) {
        slideGroups.forEach(group => group.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));
        
        slideGroups[index].classList.add('active');
        dots[index].classList.add('active');
        currentIndex = index;
    }

    function nextSlide() {
        let nextIndex = (currentIndex + 1) % slideGroups.length;
        showSlideGroup(nextIndex);
    }

    function prevSlide() {
        let prevIndex = (currentIndex - 1 + slideGroups.length) % slideGroups.length;
        showSlideGroup(prevIndex);
    }

    // Eventos para los botones
    nextBtn.addEventListener('click', () => {
        clearInterval(interval);
        nextSlide();
        startAutoSlide();
    });

    prevBtn.addEventListener('click', () => {
        clearInterval(interval);
        prevSlide();
        startAutoSlide();
    });

    // Eventos para los dots
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            clearInterval(interval);
            showSlideGroup(index);
            startAutoSlide();
        });
    });

    function startAutoSlide() {
        clearInterval(interval);
        interval = setInterval(nextSlide, 5000);
    }

    // Iniciar el slideshow
    startAutoSlide();

    // Pausar en hover
    const gallery = document.querySelector('.about__gallery');
    gallery.addEventListener('mouseenter', () => clearInterval(interval));
    gallery.addEventListener('mouseleave', startAutoSlide);
});