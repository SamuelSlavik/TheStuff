<?php get_header() ?>

<div class="page-content">
    <?php
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'name',
        'posts_per_page' => 5,
    );
    $arr_posts = new WP_Query( $args );

    if ( $arr_posts->have_posts() ) :

        while ( $arr_posts->have_posts() ) :
            $arr_posts->the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php
                if ( has_post_thumbnail() ) :
                    the_post_thumbnail();
                endif;
                ?>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header>
                <div class="entry-content">
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>"><?php _e("Viac info", "colloquium-theme")?></a>
                </div>
            </article>
        <?php
        endwhile;
    endif;
    ?>
