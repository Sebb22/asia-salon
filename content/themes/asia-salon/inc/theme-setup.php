<?php
// Je vérifie en premier que la fonction n'existe pas déjà
// (dans le cas d'un child thème par exemple)
if (!function_exists('asiasalon')) {
    function asiasalon_setup()
    {
        // add_theme_support me permet de déclarer à WP une fonctionnalité de thème
        // title-tag est une fonctionnalité qui demande à WP de créer/gérer lui même
        // la balise "title"
        add_theme_support('title-tag');
        // Je déclare à WP que mon theme support les images de mises en avant !
        add_theme_support('post-thumbnails');
        // Je déclare à WP que mon thème gère les menus !
        add_theme_support('menus');
        // Je déclare à WP des emplacements de menus !
        register_nav_menus([
            'main-nav' => 'Menu modal de la page d\'accueil',
            'social-nav' => 'Menu social',
        ]);

        // je déclare une taille pour des images de même format
        add_image_size('single-post-thumbnail', 300, 300, true);
        add_image_size('portrait', 150, 150, true);
    
        // Je déclare à WP où se trouve les traductions du textdomain "oprofile"
        load_theme_textdomain('asiasalon', get_theme_file_path('languages'));
    }
}
add_action('after_setup_theme', 'asiasalon_setup');
