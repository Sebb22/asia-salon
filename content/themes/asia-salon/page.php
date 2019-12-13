<?php
get_header();
?>
<?php get_template_part('template-part/breadcrumb'); ?>
<h1 class="title"><?php the_title(); ?></h1>
<section class="content">
    <?php the_content(); ?>
</section>

<?php
get_footer();
?>