import 'jquery';

var app = {
    elements: [],

    init: function () {
        // listening click on '#admin-bar-customize'
        app.elements.$adminBarCustomize = document.querySelector("#wp-admin-bar-customize");
        if (app.elements.$adminBarCustomize) {
            app.elements.$adminBarCustomize.addEventListener('click', app.handleWpCustomize);
        }
    },

    handleWpCustomize: function (event) {
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

            wp.customize('asia_title_color', function (value) {
                value.bind(function (newval) {
                    $('.banner__title').css('color', newval);
                    $('.banner__detail').css('background-color', newval);
                });
            });

            wp.customize('asia_aside_color', function (value) {
                value.bind(function (newval) {
                    $('.aside').css('background-color', newval);
                });
            });

            wp.customize('asia_background_color', function (value) {
                value.bind(function (newval) {
                    $('html').css('background-color', newval);
                });
            });
        })(jQuery);
    }
}

/**
 * about live preview / settings => 'transport'=>'postMessage'(=instant)
 */


$(app.init);