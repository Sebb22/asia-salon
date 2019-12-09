<?php
/*
Template Name: Page plan de site
*/
?>

<?php get_header(); ?>
<?php get_template_part('template-part/breadcrumb'); ?>
<section class="sitemap">
    <?= do_shortcode('[wp_sitemap_page]'); ?>
</section>
<?php get_footer();
