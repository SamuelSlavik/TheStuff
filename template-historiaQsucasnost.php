<?php /* Template Name: Historia Q Sucastnost */ ?>

<?php get_header() ?>
<?php include("components/logo.php") ?>

<div class="page-content">
    <div class="div-animation" id="div-animation_id">
        <div class="div-animation_visible1 div-animation_div" id="div-animation_visible1_id">
            <div class="" id="display-none_1">
                <div class="div-animation_centered">
                    <h1 class="div-animation_h1"><?php _e("História", "colloquium-theme")?></h1>
                    <button class="button" onclick="displayinfo2(this)"><?php _e("Viac info", "colloquium-theme")?></button>
                </div>
            </div>
            <div class="div-animation_invisible1 div-animation_div_invisible" id="div-animation_invisible1_id" style="z-index: 115">
                <div class="div-animation_centered">
                    <?php the_field("presence")?>
                    <br class="blank">
                    <button class="button" onclick="displayback(this)">X</button>
                </div>
            </div>
        </div>
        <div class="div-animation_visible2 div-animation_div" id="div-animation_visible2_id">
            <div id="display-none_2">
                <div class="div-animation_centered">
                    <h1 class="div-animation_h1"><?php _e("Súčasnosť", "colloquium-theme")?></h1>
                    <button class="button" onclick="displayinfo(this)"><?php _e("Viac info", "colloquium-theme")?></button>
                </div>
            </div>
            <div class="div-animation_invisible2 div-animation_div_invisible" id="div-animation_invisible2_id">
                <div class="div-animation_centered">
                    <?php the_field("history")?>
                    <br class="blank">
                    <button class="button" onclick="displayback2(this)">X</button>
                </div>
            </div>
        </div>
    </div>
    <div class="div_light alignCenter lineHeightMedium">
        <div class="mobile-display_1">
            <h1><?php _e("História", "colloquium-theme")?></h1>
            <?php the_field("history")?>
        </div>
        <div class="mobile-display_1">
            <h1><?php _e("Súčasnosť", "colloquium-theme")?></h1>
            <?php the_field("presence")?>
        </div>
    </div>
</div>
<?php get_footer() ?>