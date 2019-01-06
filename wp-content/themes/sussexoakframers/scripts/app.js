jQuery(document).ready(function () {
    jQuery('.hero-slider').slick({
        centerMode: true,
        slidesToShow: 1,
        variableWidth: true,
        dots: true,
        autoplay: true
    });

    jQuery('.lazy').lazy();

    var header = document.querySelector("#header");

    var nav = document.querySelector('#nav');
    nav.addEventListener('click', function (e) {
        header.classList.add('open')
    })

    var close = document.querySelector('#close');
    close.addEventListener('click', function (e) {
        header.classList.remove('open')
    })
});
