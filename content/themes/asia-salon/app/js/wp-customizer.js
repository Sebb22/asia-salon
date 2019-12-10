
/**
 * about live preview / settings => 'transport'=>'postMessage'(=instant)
 */
(function ($) {

    //Update header background color...
    wp.customize('asia_header_color', function (value) {
        value.bind(function (newval) {
            $('.header').css('background-color', newval);
        });
    });

    wp.customize('asia_footer_color', function (value) {
        value.bind(function (newval) {
            $('.footer').css('background-color', newval);
        });
    });

})(jQuery);

$(app.init);