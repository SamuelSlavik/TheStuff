<?php /* Template Name: Veda Q Vyskum */ ?>

<?php get_header() ?>
<?php include("components/logo.php") ?>

<div class="page-content">
    <div class="div_banner">
        <img class="div_banner_img" src="<?php echo get_template_directory_uri(); ?>/images/1.stĺpec-Veda-na-Homepagepodstránka-Veda-a-výskum.png">
        <div class="div_banner_text" style="padding-top:5.5%;">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    the_content();
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>

<?php get_footer() ?>