window.onload = () => {

    var typed = new Typed('#textTyped', {
        strings: [
            'Autodidacta',
            'Proactivo',
            'Trabajo en equipo',
            'Extrovertido',
            'Empatía'
        ],
        typeSpeed: 90,
        backSpeed: 90,
        loop: true
    });

    $('.owl-carousel').owlCarousel({
        loop: true,
        items: 5,
        margin: 40,
        dots: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                loop: true
            },
            600: {
                items: 3,
                loop: true
            },
            1000: {
                items: 5,
                loop: true
            }
        }
    });

    $('.item-portfolio').hover(function() {
        $(this).siblings().stop().fadeToggle();
    });
};