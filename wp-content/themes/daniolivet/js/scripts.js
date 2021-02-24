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

    var urlEmail = base_url + '/ajax/contactForm.php';

    /* Form contact */
    $('.btn-modal-contact').click(function(){
        /* Getting data */
        var name = $('#name').val();
        var surname = $('#surname').val();
        var email = $('#email').val();
        var description = $('#description').val();

        if( name != '' && typeof name == "string" && surname != '' && typeof surname == "string" && email != '' && typeof email == "string" ){
            
            $.ajax({
                type: 'post',
                dataType: "json",
                url: urlEmail,  
                data: {
                "name": name,
                "surname": surname,
                "email": email,
                "description": description
                },     
                crossDomain: true,
                success: function (data) {
                    var dataParsed = typeof data === "string" ? JSON.parse(data) : data;
                    if (dataParsed.codeResponse === 200) {
                        console.log(dataParsed.name);
                        console.log('LISTO');
                    }else{
                        console.log('ERROR');
                    }
                }
            });

        }
        
        
    });

    
};