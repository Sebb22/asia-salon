<?php
get_header();

if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php get_template_part('template-part/breadcrumb'); ?>
        <h1 class="page__title"><?php the_title(); ?></h1>
        <section class="page__content">
            <?php the_content(); ?>
        </section>
<?php endwhile;
endif; ?>
<?php
get_footer();
