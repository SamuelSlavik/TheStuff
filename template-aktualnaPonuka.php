<?php /* Template Name: Aktuálna ponuka */ ?>

<?php get_header() ?>
<?php include("components/logo.php") ?>
<div class="page-content">
    <div style="" class="div_light align_center">
        <br class="blank"><br class="blank">
        <h1><?php _e("Aktuálna ponuka",  "colloquium-theme")?>:</h1>
        <br class="blank">
        <br class="blank">
        <hr>
        <br class="blank">
    <?php
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'Aktuálna ponuka',
        'posts_per_page' => 10,
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
                    <p><b><?php the_field("subtitle")?></b></p>
                    <br/>
                    <p><?php the_field("abstract"); ?></p>
                    <br/>
                    <p><b><?php _e("Termíny na výber", "colloquium-theme")?>: </b><?php the_field("date")?></p>
                    <p><b><?php _e("Miesto konania", "colloquium-theme")?>: </b><?php the_field("place")?></p>
                    <p><b><?php _e("Ukončenie", "colloquium-theme")?>: </b><?php the_field("end")?></p>
                    <p><b><?php _e("Cena", "colloquium-theme")?>: </b><?php the_field("price")?></p>
                    <br/>
                    <a href="<?php the_permalink(); ?>"><button type="button" class="button"><?php _e("Viac info", "colloquium-theme")?></button></a>
                </div>
                <br class="blank">
                <hr>
                <br class="blank">
            </article>
        <?php
        endwhile;
    endif;
    ?>
    </div>

<?php get_footer() ?>