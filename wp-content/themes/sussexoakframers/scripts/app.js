jQuery(document).ready(function () {
    jQuery('.hero-slider').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 1,
        dots: true,
    }).on('setPosition', function (event, slick) {
        slick.$slides.css('height', slick.$slideTrack.height() + 'px');
    });
});
