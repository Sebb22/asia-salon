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

    //  ==========================
    //  =  Footer's Color Picker =
    //  ==========================
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

    //  =========================
    //  =  Title's Color Picker =
    //  =========================
    $wp_customize->add_setting(
        'asia_title_color',
        [
            'default' => '#242943',
            'transport' => 'postMessage'
        ]
    );
    $wp_customize->add_control(
        'asia_title_color',
        [
            'type'        => 'color',
            'label'       => 'Couleur du titre ',
            'section'     => 'asia_title_color',
            'description' => 'permet de changer la couleur du titre ',
            'settings'    => 'asia_title_color'
        ]
    );

    //  =========================
    //  =  Aside's Color Picker =
    //  =========================
    $wp_customize->add_setting(
        'asia_aside_color',
        [
            'default' => '#242943',
            'transport' => 'postMessage'
        ]
    );
    $wp_customize->add_control(
        'asia_aside_color',
        [
            'type'        => 'color',
            'label'       => 'Couleur de la section animation ',
            'section'     => 'asia_aside_color',
            'description' => 'permet de changer la couleur de la section animation ',
            'settings'    => 'asia_aside_color'
        ]
    );

    //  ==============================
    //  =  Background's Color Picker =
    //  ==============================
    $wp_customize->add_setting(
        'asia_background_color',
        [
            'default' => '#242943',
            'transport' => 'postMessage'
        ]
    );
    $wp_customize->add_control(
        'asia_background_color',
        [
            'type'        => 'color',
            'label'       => 'Couleur du background ',
            'section'     => 'asia_background_color',
            'description' => 'permet de changer la couleur du background ',
            'settings'    => 'asia_background_color'
        ]
    );


    //  =======================
    //  = PostsNumber manager =
    //  =======================
    $wp_customize->add_setting(
        'asia_post_number_manager',
        [
            'default' => 2
        ]
    );

    $wp_customize->add_control(
        'asia_post_number_manager',
        [
            'input_attrs' => [
                'min'  => 0,
                'max'  => 10,
                'step' => 1
            ],
            'section'     => 'asia_post_number_manager',
            'label'       => "Nombre d'articles",
            'description' => "Nombre d'articles affichées sur la page d'accueil",
            'settings'    => "asia_post_number_manager"
        ]
    );
}
