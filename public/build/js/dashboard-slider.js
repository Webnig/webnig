$(function() {
    $('.owl-carousel').owlCarousel({
        margin: 5,
        loop: true,
        autoWidth: true,
        items: 3,
    });

    function trendSlider(id) {

        var sliders$ = $('.slider .selector', id);

        console.log(sliders$);

        sliders$.click(function(event) {

            sliders$.each(function(i, el) {
                el = $(el);
                if (el.hasClass('active')) el.toggleClass('active');
            })

            $(this).toggleClass('active');
        });

        var owl = $('.owl-carousel', id);
        owl.owlCarousel();

        $('.slider .selector:first', id).click(function() {
            owl.trigger('prev.owl.carousel');
        });

        $('.slider .selector:last', id).click(function(event) {
            owl.trigger('next.owl.carousel');
        })

        owl.on('changed.owl.carousel', function(event) {
            if (event.property.value == 3) {
                owl.trigger('to.owl.carousel', [0])
            }
        })
    }

    trendSlider('.trending');
    trendSlider('.viewed');
})
