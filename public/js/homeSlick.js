$('document').ready(function() {
    console.log('ready');
    $('.slick_test').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 5000,
        dots: true,
        draggable: false,
        mobileFirst: true,
        infinite: true,
        pauseOnHover: true,
        pauseOnDotsHover: true,
        variableWidth: true
    });
});