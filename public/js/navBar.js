$('document').ready(function() {
    var counselingClass = $('.counselingNav');
    var coachingClass = $('.coachingNav');
    var teamClass = $('.teamNav');
    var expectationClass = $('.expectationNav');
    var contactClass = $('.contactNav');

    counselingClass.hover(function() {
        counselingClass.show();
    },function() {
        $('.counselingSubNav').hide();
    });
    coachingClass.hover(function() {
        coachingClass.show();
    },function() {
        $('.coachingSubNav').hide();
    });

    $(window).scroll(function() {
        if($(window).scrollTop() > 126) {
            $('#navBar').addClass('fixed').css('top','0').next()
                .css('padding-top','60px');
        } else {
            $('#navBar').removeClass('fixed').next()
                .css('padding-top','0');
        }
    });

});