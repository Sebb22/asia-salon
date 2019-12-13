<?php
require 'customizer/asia_customizer.php';
// Je vérifie en premier que la fonction n'existe pas déjà
// (dans le cas d'un child thème par exemple)
if (!function_exists('asia_salon_customize_register')) {
    // Ma fonction, puisqu'elle est greffée sur le hook "customize_register"
    // wordpress lui fourni automatiquement un objet "wp_customize"
    // Cet objet représente le Customizer tel qu'il est actuellement (par défaut)
    function asia_salon_customize_register($wp_customize)
    {
        //  ===================
        //  =  Color manager  =
        //  ===================

        // Premiere chose à réaliser: l'ajout d'un panel
        // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_panel/
        $wp_customize->add_panel(
            // Identifiant unique du panel
            'asia_salon_color_manager',
            [
                // Titre affiché
                'title' => 'Couleurs',
                // Description affichée dans le ?
                'description' => 'Salon de l\'Asie - Gestion des couleurs',
                // Emplacement
                'priority' => 1
            ]
        );
        // Deuxième étape: ajouter une section dans mon panel
        // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_section/
        $wp_customize->add_section(
            // Identifiant unique de la section
            'asia_header_color',
            [
                'title' => "Couleur de l'en-tête",
                'description' => 'Salon de l\'Asie - Gestion de la couleur de l\'en-tête',
                // Identifiant du panel dans lequel placer cette section
                'panel' => 'asia_salon_color_manager'
            ]
        );

        $wp_customize->add_section(
            // Identifiant unique de la section
            'asia_footer_color',
            [
                'title' => "Couleur du pied de page",
                'description' => 'Salon de l\'Asie - Gestion de la couleur du pied de page',
                // Identifiant du panel dans lequel placer cette section
                'panel' => 'asia_salon_color_manager'
            ]
        );

        $wp_customize->add_section(
            // Identifiant unique de la section
            'asia_aside_color',
            [
                'title' => "Couleur de la section animations",
                'description' => 'Salon de l\'Asie - Gestion de la couleur de la section animations',
                // Identifiant du panel dans lequel placer cette section
                'panel' => 'asia_salon_color_manager'
            ]
        );

        $wp_customize->add_section(
            // Identifiant unique de la section
            'asia_title_color',
            [
                'title' => "Couleur du titre",
                'description' => 'Salon de l\'Asie - Gestion de la couleur du titre',
                // Identifiant du panel dans lequel placer cette section
                'panel' => 'asia_salon_color_manager'
            ]
        );

        $wp_customize->add_section(
            // Identifiant unique de la section
            'asia_background_color',
            [
                'title' => "Couleur du background (uniquement pour grand écran)",
                'description' => 'Salon de l\'Asie - Gestion de la couleur du background',
                // Identifiant du panel dans lequel placer cette section
                'panel' => 'asia_salon_color_manager'
            ]
        );

        //  ========================
        //  =  Front-page manager  =
        //  ========================

        // Premiere chose à réaliser: l'ajout d'un panel
        // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_panel/
        $wp_customize->add_panel(
            // Identifiant unique du panel
            'asia_salon_post_manager',
            [
                // Titre affiché
                'title' => 'Nombre d\'articles sur la page d\'accueil',
                // Description affichée dans le ?
                'description' => 'Salon de l\'Asie - Gestion des articles',
                // Emplacement
                'priority' => 2
            ]
        );
        // Deuxième étape: ajouter une section dans mon panel
        // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_section/
        $wp_customize->add_section(
            // Identifiant unique de la section
            'asia_post_number_manager',
            [
                'title' => "Nombre d'articles affichés",
                'description' => 'Salon de l\'Asie - Gestion du nombre d\'articles',
                // Identifiant du panel dans lequel placer cette section
                'panel' => 'asia_salon_post_manager'
            ]
        );

        //  ========================
        //  =  Background manager  =
        //  ========================

        // Premiere chose à réaliser: l'ajout d'un panel
        // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_panel/
        $wp_customize->add_panel(
            // Identifiant unique du panel
            'asia_background_manager',
            [
                // Titre affiché
                'title' => 'Modifications du background',
                // Description affichée dans le ?
                'description' => 'Salon de l\'Asie - Gestion du background -seulement visible sur grand écran',
                // Emplacement
                'priority' => 3
            ]
        );


        asia_customizer($wp_customize);
    }
}
add_action('customize_register', 'asia_salon_customize_register');
