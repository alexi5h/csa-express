$(function () {
//    var form_inputs = $('form input');
//    var rainbow_and_border = $('.rain, .border');
//    /* Used to provide loping animations in fallback mode */
//    form_inputs.bind('focus', function () {
//        rainbow_and_border.addClass('end').removeClass('unfocus start');
//    });
//    form_inputs.bind('blur', function () {
//        rainbow_and_border.addClass('unfocus start').removeClass('end');
//    });
//    form_inputs.first().delay(800).queue(function () {
//        $(this).focus();
//    });
    updateBackground();
    $(window).bind("resize", function () {
// Y tambien cada vez que se redimensione el navegador
        updateBackground();
    });

    $('input.error').css({
        "border-color": "#dd2323"
    });
    
    
});

function updateBackground() {
    screenWidth = $(window).width();
    screenHeight = $(window).height();
    var bg = jQuery("#bg");

// Proporcion horizontal/vertical. En este caso la imagen es cuadrada
    ratio = 2;

    if (screenWidth / screenHeight > ratio) {
        $(bg).height("auto");
        $(bg).width("100%");
    } else {
        $(bg).width("auto");
        $(bg).height("100%");
    }

// Si a la imagen le sobra anchura, la centramos a mano
    if ($(bg).width() > 0) {
        $(bg).css('left', (screenWidth - $(bg).width()) / 2);
    }
    //Actualizar la posición del autor
    $('span.author').css({
        'position':'absolute',
        'top':screenHeight-13,
        'left':screenWidth-116,
    });
}