$(document).ready(function(){
    $(window).scroll(function(){
        if ($(window).scrollTop() > 100) {
            $('#ScrollUpButton').fadeIn();
        } else {
            $('#ScrollUpButton').fadeOut();
        }
    });
});

function FunctScroll(){
    $('html, body').animate({scrollTop : 0},500);
}