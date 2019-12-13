<?php

/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header();
?>



<div class="section-inner thin error404-content">

    <h1 class="entry-title"><?php _e('Page Non trouvée', 'asia-salon'); ?></h1>

    <div class="intro-text">
        <p><?php _e('Désolé, la page demandée ne peut-être trouvée ou n\'existe plus.', 'asia-salon'); ?></p>
    </div>



</div><!-- .section-inner -->



<?php
get_footer();
/*
<?php get_header(); ?>
<h1 class="title"> Page non trouvée. </h1>
<p class="content"> Nous sommes désolés mais la page demandée ne peut être trouvée ou n'existe plus. Merci d'essayer une autre requête.</p>
<?php get_footer(); ?>
