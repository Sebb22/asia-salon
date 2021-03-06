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
            <p class="post__infos"> publié par <?php the_author(); ?></br> le <?php the_date(); ?> à <?php the_time(); ?></p>

            <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="post__picture">
            <!-- <div class="post__picture" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
            </div> -->
            <p class="post__content"><?php the_content(); ?></p>
        </section>
<?php endwhile;
endif; ?>

<?php if (get_theme_mod('asia_aside_color')) : $color = get_theme_mod('asia_aside_color'); ?>
    <aside class="aside" style="background-color:<?= $color; ?>">
    <?php endif; ?>
    <div class="aside__picto"> <a href="<?= home_url('les-articles'); ?>"><i class="fa fa-newspaper-o" aria-hidden="true"></i></div>
    <h2 class="aside__title">Autres articles</a></h2>
    <?php
    $args =
        [
            'post_type'      => 'post',
            'order'          => 'rand',
            'category__not_in'    => 3,
            'post__not_in'     => array(get_the_id()),
            'meta_query' => array(array('key' => '_thumbnail_id')),
            'posts_per_page' => 2
        ];
    $wp_query = new WP_Query($args);
    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
            <div class="news" style="background-image:url('<?php the_post_thumbnail_url(); ?>')">
                <div class="news__content">
                    <a href="<?= the_permalink(); ?>" title="lire l'article <?php the_title(); ?>" class="news__link">
                        <h4 class="news__title"><?php the_title(); ?></h4>
                        <p class="news__about"><?php the_excerpt(); ?></p>
                    </a>
                </div>
            </div>
    <?php endwhile;
        wp_reset_postdata();
    endif; ?>
    </aside>

    <?php
    get_footer();
