window.onload = () => {
    var typed = new Typed('#textTyped', {
        strings: [
            'Autodidacta',
            'Proactivo',
            'Trabajo en equipo',
            'Extrovertido',
            'Empatía'
        ],
        typeSpeed: 80,
        backSpeed: 80,
        loop: true
    });

    $('.owl-carousel').owlCarousel({
        loop: true,
        items: 5,
        autoplay: true,
        rewindNav: false,
        nav: true,
        margin: 30,
        dots: false,
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
    })
};