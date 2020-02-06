<?php /* Template Name: Colloquium */ ?>

<?php get_header() ?>
<?php include("components/logo.php") ?>
<div class="page-content">
    <div class="div_banner">
        <img class="div_banner_img" src="<?php echo get_template_directory_uri(); ?>/images/3.stĺpec-Colloquium-homepage.png">
        <div class="div_banner_text" style="padding-top:5.5%;">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    the_content();
                endwhile;
            endif;
            ?>
            <br class="blank">
            <div class="overlay">
                <a href="<?php echo get_permalink(9)?>"><button type="button" class="button"><?php _e("Kalendár kolokvií a podujatí", "colloquium-theme")?></button></a></div>
        </div>
    </div>
</div>

<?php get_footer() ?>