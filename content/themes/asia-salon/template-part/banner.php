<?php
$args =
    [
        'p' => 25
    ];
$wp_query = new WP_Query($args);
if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
?>
        <?php if (get_theme_mod('asia_title_color')) : ?>
            <?php $color = get_theme_mod('asia_title_color'); ?>
            <h1 class="banner__title" style="color:<?= $color; ?>"><?php the_title(); ?></h1>
            <p class="banner__description"><?php the_content(); ?></p>
            <p class="banner__info">Retrouvez la première édition du festival dédié aux cultures asiatiques </br> 
                <span class="banner__detail" style="background-color:<?= $color; ?>">dimanche 11 octobre 2020 à Compiègne <a href="https://www.google.com/maps/place/Ancienne+%C3%A9cole+d'%C3%89tat-Major/@49.420742,2.8297386,15z/data=!4m5!3m4!1s0x0:0xe27bf30e4a5d74a3!8m2!3d49.420742!4d2.8297386" target="_blank" title="voir le plan d'accès (nouvelle fenêtre)" rel="noopener noreferrer">au manège de l'état-major <i class="fa fa-external-link" aria-hidden="true"></i></a></span></p>
        <?php endif; ?>
<?php endwhile;
    wp_reset_postdata();
endif;
