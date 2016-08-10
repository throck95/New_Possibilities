$('document').ready(function() {
    var currentYear = (new Date).getFullYear();
    $('footer>#copyright').html("&copy; " + currentYear + " New Possibilities LLC. All Rights Reserved");
});