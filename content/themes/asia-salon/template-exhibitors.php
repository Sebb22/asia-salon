<?php
/*
Template Name: Page exposants
*/
?>

<?php get_header(); ?>
<?php get_template_part('template-part/breadcrumb');?>

<section class="info">
    <h1 class="info__title"><?php bloginfo('title'); ?> </br> <?php the_title(); ?></h1>
    <ul class="info__list">

        <?php $args =
            [
                'post_type'      => 'exposants',
                'posts_per_page' => -1
            ];
        $wp_query = new WP_Query($args);
        if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
                $logo = get_field('logo');
                ?>
                <li class="info__list__item" style="background-image:url('<?php echo 'http://' . $logo['url'] ?>')">
                    <a href="<?php echo get_field('link'); ?> ">
                    </a>
                    <h2 class="info__list__item__title"> <?php the_title(); ?> </h2>
                </li>
        <?php endwhile;
            wp_reset_postdata();
        endif; ?>

    </ul>
</section>

<?php get_footer();
