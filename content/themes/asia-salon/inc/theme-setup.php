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

        function my_search_form($html)
        {
            $html = '
            <form role="search" method="get" id="searchform" class="searchform alumni-search__content__form__infos" action="' . home_url() . '" >
                <div class="alumni-search__content__form__infos__inside">
                    <label class="screen-reader-text" for="s"></label>
                    <input type="text" value="' . get_search_query() . '" class="alumni-search__content__form__infos__inside__firstname" placeholder="Rechercher un alumni..." aria-label="Rechercher un alumni..." aria-describedby="basic-addon2" name="s" id="s" />
                    <input type="submit" class="alumni-search__content__form__infos__inside__button" id="searchsubmit" value="' . esc_attr__('Search') . '" />
                </div>
            </form>
            ';
                 return $html;
        }
        add_filter('get_search_form', 'my_search_form');

       
        //function cc_mime_types($mimes)
        //{
        //    $mimes['svg'] = 'image/svg';
        //    return $mimes;
        //}
        //add_filter('upload_mimes', 'cc_mime_types');
        // Only Show Current User's Attachments
        // https://codex.wordpress.org/Plugin_API/Filter_Reference/ajax_query_attachments_args#Examples
        // function show_current_user_attachments($query = array())
        // {
        //     $user_id = get_current_user_id();
        //     if ($user_id) {
        //         $query['alumni'] = $user_id;
        //     }
        //     return $query;
        // }
        // add_filter('ajax_query_attachments_args', 'show_current_user_attachments', 10, 1);
        // To remove menus for 'alumni' & 'prof' users
        // https://codex.wordpress.org/Function_Reference/remove_menu_page
        function remove_menus()
        {
            remove_menu_page('index.php');                  //Dashboard
            remove_menu_page('jetpack');                    //Jetpack* 
            remove_menu_page('edit.php');                   //Posts
            remove_menu_page('upload.php');              //Media
            remove_menu_page('edit.php?post_type=page');    //Pages
            remove_menu_page('edit-comments.php');          //Comments
            remove_menu_page('themes.php');                 //Appearance
            remove_menu_page('plugins.php');                //Plugins
            // remove_menu_page( 'users.php' );               //Users
            remove_menu_page('tools.php');                  //Tools
            remove_menu_page('options-general.php');        //Settings
            // remove_menu_page( 'admin.php?page=wpcf7' );  // Contact Form cf7
            remove_menu_page('edit.php?post_type=profilalumni');   //CPT profilalumni
            remove_menu_page('edit.php?post_type=profilprof');     //CPT profilprofs
            remove_menu_page('edit.php?post_type=offresdemploi');  //CPT offresdemploi
            remove_menu_page('edit.php?post_type=mentions');       //CPT mentions
        }
        if (current_user_can('alumni') || current_user_can('prof')) {
            add_action('admin_menu', 'remove_menus');
        }
        // To hide the ACF menu for only certain users
        // https://www.advancedcustomfields.com/resources/how-to-hide-acf-menu-from-clients/
        // if (current_user_can( 'alumni' ) || current_user_can('prof')) {
        //     add_filter('acf/settings/show_admin', '__return_false');
        // }
        // To remove menus for 'recruteur' user
        // https://codex.wordpress.org/Function_Reference/remove_menu_page
        function remove_menus_employer()
        {
            remove_menu_page('index.php');                  //Dashboard
            remove_menu_page('jetpack');                    //Jetpack* 
            remove_menu_page('edit.php');                   //Posts
            remove_menu_page('upload.php');              //Media
            remove_menu_page('edit.php?post_type=page');    //Pages
            remove_menu_page('edit-comments.php');          //Comments
            remove_menu_page('themes.php');                 //Appearance
            remove_menu_page('plugins.php');                //Plugins
            // remove_menu_page( 'users.php' );               //Users
            remove_menu_page('tools.php');                  //Tools
            remove_menu_page('options-general.php');        //Settings
            remove_menu_page('edit.php?post_type=profilalumni');   //CPT profilalumni
            remove_menu_page('edit.php?post_type=profilprof');     //CPT profilprofs
            // remove_menu_page( 'edit.php?post_type=offresdemploi' );  //CPT offresdemploi
            remove_menu_page('edit.php?post_type=mentions');       //CPT mentions
        }
        if (current_user_can('recruteur')) {
            add_action('admin_menu', 'remove_menus_employer');
        }
        function custom_login()
        {
            wp_redirect(home_url());
        }
        add_action('wp_authenticate', 'custom_login');
        // function wpb_image_editor_default_to_gd( $editors ) {
        //     $gd_editor = 'WP_Image_Editor_GD';
        //     $editors = array_diff( $editors, array( $gd_editor ) );
        //     array_unshift( $editors, $gd_editor );
        //     return $editors;
        // }
        // add_filter( 'wp_image_editors', 'wpb_image_editor_default_to_gd' );

        // To get an excerpt from Advanced Custom Fields
        function custom_field_excerpt()
        {
            global $post;
            $text = get_field('description_de_loffre_demploi'); //Replace 'your_field_name'
            if ('' != $text) {
                $text = strip_shortcodes($text);
                $text = apply_filters('the_content', $text);
                $text = str_replace(']]>', ']]>', $text);
                $excerpt_length = 20; // 20 words
                $excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
                $text = wp_trim_words($text, $excerpt_length, $excerpt_more);
            }
            return $text;
        }
        // Je déclare à WP où se trouve les traductions du textdomain "oprofile"
        load_theme_textdomain('asiasalon', get_theme_file_path('languages'));
    }
}
add_action('after_setup_theme', 'asiasalon_setup');
