<?php
get_header();
?>

<section class="banner">
    <?php get_template_part('template-part/banner'); ?>
</section>
<section class="posts">
    <?php get_template_part('template-part/posts'); ?>
</section>

<?php if (get_theme_mod('asia_aside_color')) : $color = get_theme_mod('asia_aside_color'); ?>
    <section class="aside" style="background-color:<?= $color; ?>">
    <?php endif; ?>
    <?php get_template_part('template-part/aside'); ?>
    </section>
    <?php
    get_footer();
