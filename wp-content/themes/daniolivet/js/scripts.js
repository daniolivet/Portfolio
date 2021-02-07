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
        autoplay: true,
        autoplayTimeout: 8000,
        rewindNav: false,
        nav: true,
        navText: ["<span class='prev-arrow'></span>", "<span class='next-arrow'></span>"],
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