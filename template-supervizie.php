<?php /* Template Name: Supervizie */ ?>

<?php get_header() ?>
<?php include("components/logo.php") ?>

<div class="page-content">
    <div class="div_banner"><img class="div_banner_img" src="<?php echo get_template_directory_uri(); ?>/images/4.stĺpec-Supervízie-a-konzultácie-homepagepostránka-Supervízie-a-konzultácie.png" />
        <div class="div_banner_text" style="padding-top: 5.5%;">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    the_content();
                endwhile;
            endif;
            ?>
            &nbsp;<div class="overlay">
                <a href="http://colloquiumsk.com/contact-form_2-html/"><button class="button" type="button"><?php _e("Kontaktný formulár", "colloquium-theme")?></button></a>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>