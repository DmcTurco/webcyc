document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.hero__slide');
    const indicators = document.querySelectorAll('.hero__indicator');
    let currentSlide = 0;
    const interval = 5000; // Cambia de slide cada 5 segundos

    function goToSlide(index) {
        // Remover clases activas
        document.querySelector('.hero__slide.active').classList.remove('active');
        document.querySelector('.hero__indicator.active').classList.remove('active');
        
        // Añadir clases activas al nuevo slide
        slides[index].classList.add('active');
        indicators[index].classList.add('active');
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        goToSlide(currentSlide);
    }

    // Iniciar el carrusel automático
    setInterval(nextSlide, interval);

    // Evento click para los indicadores
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            currentSlide = index;
            goToSlide(currentSlide);
        });
    });
});