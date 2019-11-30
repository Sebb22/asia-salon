<?php

if (!function_exists('asiasalon_scripts')){

    function asiasalon_scripts()
    {
        wp_enqueue_style(
            'asiasalon-style',
            get_theme_file_uri('/public/css/style.css'),
            [],
            '1.0.0'
        );

        wp_enqueue_script(
            'asiasalon-app',
            get_theme_file_uri('/public/js/app.js'),
            [],
            '1.0.0',
            true
        );       
}



add_action('wp_enqueue_scripts', 'asiasalon_scripts');
}

