<div class="aside__picto"><i class="fa fa-calendar" aria-hidden="true"></i></div>
<h2 class="aside__title">Animations & rencontres</h2>
<?php
$args =
    [
        'post_type'      => 'animations',
        'posts_per_page' => 5
    ];
$wp_query = new WP_Query($args);
if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
        ?>

        <div class="agenda">
            <h4 class="agenda__title"><?php the_title(); ?></h4>
            <p class="agenda__date"><?php echo get_field('heure'); ?></p>
            <p class="agenda__about"><?php echo get_field('description'); ?></p>
        </div>

<?php endwhile;
    wp_reset_postdata();
endif;
