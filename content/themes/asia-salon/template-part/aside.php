    <div class="aside__picto">
        <a href="<?= home_url('le-programme'); ?>">
            <i class="fa fa-calendar" aria-hidden="true"></i></a>
    </div>
    <h2 class="aside__title"><a href="<?= home_url('le-programme'); ?>">Animations & rencontres</a></h2>

    <?php
    if (get_theme_mod('asia_post_number_manager')) :
        $postNumber = get_theme_mod('asia_post_number_manager');
        $args =
            [
                'post_type'      => 'animations',
                'posts_per_page' => $postNumber
            ];
    endif;
    $wp_query = new WP_Query($args);
    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>

            <div class="agenda">
                <a href="<?= the_permalink(); ?>">
                    <h4 class="agenda__title"><?php the_title(); ?></h4>
                    <p class="agenda__date"><?php echo get_field('heure'); ?></p>
                    <p class="agenda__about"><?php echo get_field('description'); ?></p>
                </a>
            </div>

    <?php endwhile;
        wp_reset_postdata();
    endif;
