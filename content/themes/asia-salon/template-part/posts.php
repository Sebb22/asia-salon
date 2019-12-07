<?php
$args =
    [
        'post_type'      => 'post',
        'category__not_in'    => 3,
        'posts_per_page' => 2
    ];
$wp_query = new WP_Query($args);
if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
        ?>

        <div class="post__image " style="background-image:url(<?php the_post_thumbnail_url(); ?>);">
            <article class="post__content">
                <span class="post__content__about">
                    <?php $category = get_the_category();
                            foreach ($category as $key => $value) {
                                echo strtoupper($value->name);
                            }
                            ?>
                </span>
                <h2 class="post__content__title">
                    <?php the_title(); ?>
                </h2>
                <p class="post__content__excerpt">
                    <?php the_excerpt(); ?>
                </p>
                <a href="<?php the_permalink(); ?>" class="post__content__button"><i class="fa fa-plus" aria-hidden="true"></i>Lire la
                    suite</a>
            </article>
        </div>

<?php endwhile;
    wp_reset_postdata();
endif;
