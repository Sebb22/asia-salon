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
            <p class="banner__info">Retrouvez la première édition du festival dédié aux cultures asiatiques le
                <span class="banner__detail" style="background-color:<?= $color; ?>">29 mars 2020 à Compiègne au manège de l'état-major</span></p>
        <?php endif; ?>
<?php endwhile;
    wp_reset_postdata();
endif;
