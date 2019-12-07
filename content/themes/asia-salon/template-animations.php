<?php
/*
Template Name: Page animations
*/
?>

<?php get_header(); ?>
<?php get_template_part('template-part/breadcrumb');?>

<section class="planning">
    <h1 class="planning__title"><?php bloginfo('title'); ?> </br> <?php the_title(); ?></h1>
    <?php $args =
        [
            'post_type'      => 'animations',
            'posts_per_page' => -1
        ];
    $wp_query = new WP_Query($args);
    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
            ?>
            <div class="planning__element">
                <h2 class="planning__element__title"><?php the_title(); ?></h2>
                <p class="planning__element__info"><?php echo get_field('heure'); ?></p>
                <p class="planning__element__info"><?php echo get_field('description'); ?></p>
            </div>
    <?php endwhile;
        wp_reset_postdata();
    endif; ?>

</section>

<?php get_footer();
