$(function() {
    $('.owl-carousel').owlCarousel({
        margin: 5,
        loop: true,
        autoWidth: true,
        items: 3,
    });

    var sliders$ = $('.slider .selector');

    sliders$.click(function(event) {

        sliders$.each(function(i, el) {
            el = $(el);
            if (el.hasClass('active')) el.toggleClass('active');
        })

        $(this).toggleClass('active');
    })

    var owl = $('.owl-carousel');
    owl.owlCarousel();

    $('.slider .selector:first').click(function() {
        owl.trigger('to.owl.carousel', [0]);
    });

    $('.slider .selector:nth-child(2)').click(function(event) {
        owl.trigger('next.owl.carousel', [300]);
    });

    $('.slider .selector:last').click(function(event) {
        owl.trigger('to.owl.carousel', [2]);
    })

    owl.owlCarousel();

    owl.on('changed.owl.carousel', function(event) {
        if (event.property.value == 3) {
            owl.trigger('to.owl.carousel', [0])
        }
    })

})
