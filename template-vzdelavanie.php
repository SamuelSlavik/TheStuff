<?php /* Template Name: Vzdelavanie */ ?>

<?php get_header() ?>
<?php include("components/logo.php") ?>
<div class="page-content">
    <div class="div_banner" style="">
        <img class="div_banner_img" src="<?php echo get_template_directory_uri(); ?>/images/2.stĺpec-Vzdelávanie-homepage.png">
        <div class="div_banner_text" style="padding-top:5.5%;">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    the_content();
                endwhile;
            endif;
            ?>
            <br/>
            <div class="overlay">
                <a href="<?= get_permalink(103);?>"><button type="button" class="button"><?php _e("Aktuálna ponuka", "colloquium-theme")?></button></a></div>
        </div>
    </div>
    <div class="column_4">
        <div class="">
            <div class="flex-container height_10">
                <h1 style="margin-top: 0;"><?php _e("Kurzy", "colloquium-theme")?></h1>
                <img src="<?php echo get_template_directory_uri(); ?>/images/Podstánka-Vzdelávanie-1.stĺpec-Kurzy.png" class="flex-container_image">
                <br/>
                <div class="text1">
                    <?php the_field("educationColumn1")?>
                </div>
            </div>
            <div class="flex-container height_10">
                <h1 style="margin-top: 0"><?php _e("Školenia", "colloquium-theme")?></h1>
                <img src="<?php echo get_template_directory_uri(); ?>/images/Podstránka-Vzdelávanie-2.stĺpec-Školenia.png" class="flex-container_image">
                <br/>
                <div class="text1">
                    <?php the_field("educationColumn2")?>
                </div>
            </div>
            <div class="flex-container height_10">
                <h1 style="margin-top: 0"><?php _e("Tréningy", "colloquium-theme")?></h1>
                <img src="<?php echo get_template_directory_uri(); ?>/images/Podstránka-Vzdelávanie-3.stĺpec-Tréningy.png" class="flex-container_image">
                <br/>
                <div class="text1">
                    <?php the_field("educationColumn3")?>
                </div>
            </div>
            <div class="flex-container height_10">
                <h1 style="margin-top: 0"><?php _e("LETNÁ ŠKOLA", "colloquium-theme")?></h1>
                <img src="<?php echo get_template_directory_uri(); ?>/images/letna_skola_comprim.jpg"  class="flex-container_image">
                <br>
                <div class="text1">
                    <?php the_field("educationColumn4")?>
                </div>
                <br/>
            </div>
        </div>
        <div class="icons_bottom">
            <div class="icons_bottom_left"></div>
        </div>
    </div>
</div>

<?php get_footer() ?>