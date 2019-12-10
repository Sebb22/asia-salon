<?php
function asia_customizer($wp_customize)
{
    //  ===========================
    //  =  Header's Color Picker  =
    //  ===========================
    $wp_customize->add_setting(
        'asia_header_color',
        [
            'default' => '#242943',
            'transport' => 'postMessage'
        ]
    );
    $wp_customize->add_control(
        'asia_header_color',
        [
            'type'        => 'color',
            'label'       => 'Couleur de fond ',
            'section'     => 'asia_header_color',
            'description' => 'permet de changer la couleur de fond ',
            'settings'    => 'asia_header_color'
        ]
    );

    //  =============================
    //  =  Color Picker     =
    //  =============================
    $wp_customize->add_setting(
        'asia_footer_color',
        [
            'default' => '#242943',
            'transport' => 'postMessage'
        ]
    );
    $wp_customize->add_control(
        'asia_footer_color',
        [
            'type'        => 'color',
            'label'       => 'Couleur de fond ',
            'section'     => 'asia_footer_color',
            'description' => 'permet de changer la couleur de fond ',
            'settings'    => 'asia_footer_color'
        ]
    );
}
