<?php
get_header();
?>

<nav class="breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= home_url(); ?>">Accueil</a></li>
        <li class="breadcrumb-item "><a href="<?= home_url('les-articles/'); ?>">Articles</a></li>
        <li class="breadcrumb-item active"><?php the_title(); ?></li>
    </ol>
</nav>

<?php
                                                if (have_posts()) : while (have_posts()) : the_post(); ?>
        <section class="post">
            <h1 class="post__title"><?php bloginfo('title'); ?> </br> <?php the_title(); ?></h1>
            <p class="post__infos"> publié par <?php the_author(); ?> le <?php the_date(); ?> à <?php the_time(); ?></p>
            <p class="planning__element__info">Heure : <?php echo get_field('heure'); ?> </p>
            <p class="planning__element__info"><?php echo get_field('description'); ?></p>
            <p class="post__content"><?php the_content(); ?></p>
        </section>
<?php endwhile;
                                                                                        endif; ?>



<?php
                                                                                        get_footer();
