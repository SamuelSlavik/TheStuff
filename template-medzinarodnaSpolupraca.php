<?php /* Template Name: Medzinarodna Spolupraca */ ?>

<?php get_header() ?>
<?php include("components/logo.php") ?>

<div class="page-content">

    <div class="div_light align_center div_dark_onas" style="padding:5% 22% 3% 22%">
        <div class="headline">
            <h1 style="color: ;"><?php _e("Medzinárodná spolupráca", "colloquium-theme")?></h1>
        </div>
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </div>
    <div class="column_4">
        <div class="column_3">
            <h1 style="color:white"><?php _e("Spolupráca", "colloquium-theme")?></h1>
            <br class="blank">
            <div class="flex-container_3 height_2">
                <h1 style="margin-top: 0;"><?php _e("Nórsko", "colloquium-theme")?></h1>
                <img src="<?php echo get_template_directory_uri(); ?>/images/Norway.png" class="flex-container_image">
                <div class="text1">
                    <br class="blank"><?php _e("Spolupracujeme s inštitúciami a organizáciami v mestách", "colloquium-theme")?>:
                    <br class="blank">
                    <br class="blank">
                    <b>Kristiansund<br class="blank">
                        Bergen<br class="blank">Oslo
                    </b>
                </div>
            </div>
            <div class="flex-container_3 height_2">
                <h1 style="margin-top: 0"><?php _e("Švédsko", "colloquium-theme")?></h1>
                <img src="<?php echo get_template_directory_uri(); ?>/images/Sweden.png" class="flex-container_image">
                <div class="text1">
                    <br class="blank"><?php _e("Spolupracujeme s inštitúciami a organizáciami v mestách", "colloquium-theme")?>:
                    <br class="blank"><br class="blank">
                    <b><?php _e("Göteborg", "colloquium-theme")?></b>
                </div>
            </div>
            <div class="flex-container_3 height_2">
                <h1 style="margin-top: 0"><?php _e("Fínsko", "colloquium-theme")?></h1>
                <img src="<?php echo get_template_directory_uri(); ?>/images/Finland.png" class="flex-container_image">
                <div class="text1">
                    <br class="blank"><?php _e("Spolupracujeme s inštitúciami a organizáciami v mestách", "colloquium-theme")?>:
                    <br class="blank">
                    <br class="blank">
                    <b>Helsinki</b>
                </div>
            </div>
        </div>
        <br class="blank">
        <br class="blank">
        <div class="column_3" style="">
            <div class="flex-container_3 height_2" style="margin-top: 2%;">
                <h1 style="margin-top: 0;"><?php _e("Dánsko", "colloquium-theme")?></h1>
                <img src="<?php echo get_template_directory_uri(); ?>/images/Denmark.png" class="flex-container_image">
                <div class="text1">
                    <br class="blank"><?php _e("Spolupracujeme s inštitúciami a organizáciami v mestách", "colloquium-theme")?>:
                    <br class="blank">
                    <br class="blank">
                    <b><?php _e("Kodaň", "colloquium-theme")?></b>
                </div>
            </div>
            <div class="flex-container_3 height_2" style="margin-top: 2%;">
                <h1 style="margin-top: 0"><?php _e("Island", "colloquium-theme")?></h1>
                <img src="<?php echo get_template_directory_uri(); ?>/images/Island.png" class="flex-container_image">
                <div class="text1">
                    <br class="blank"><?php _e("Spolupracujeme s inštitúciami a organizáciami v mestách", "colloquium-theme")?>:
                    <br class="blank">
                    <br class="blank">
                    <b><?php _e("Reykjavík", "colloquium-theme")?></b>
                </div>
            </div>
            <div class="flex-container_3 height_2 mobile_display_3" style="margin-top: 2%; opacity: 0">
                <h1 style="margin-top: 0"><?php _e("Slovensko", "colloquium-theme")?></h1>
                <img src="http://colloquiumsk.com/wp-content/uploads/2019/03/Slovakia.png" class="flex-container_image">
                <div class="text1">
                    <br class="blank"><?php _e("Spolupracujeme s inštitúciami a organizáciami v mestách", "colloquium-theme")?>:
                    <br class="blank">
                    <br class="blank">
                    <b>Bratislava</b>
                </div>
            </div>
        </div>
        <div class="icons_bottom"></div>
    </div>
    <div class="div_light align_center div_dark_onas" style="margin-top:50px; padding:2% 20% 3% 20%">
        <div class="text1">
            <p style="color:rgb(166,124,0)">„<?php _e("Myslenie je najťažšou prácou aká existuje. To je pravdepodobne dôvod, prečo tak málo ľudí rozmýšľa.", "colloquium-theme")?>“</p>
            <p class="text1">Bjørnstjerne Martinius Bjørnson</p>
            <br class="blank"><img class="div_banner_img" src="<?php echo get_template_directory_uri(); ?>/images/Bjornson.jpg">
            <p><br/></p>
            <p><b><?php _e("Bjørnstjerne Martinius Bjørnson", "colloquium-theme")?></b> (<?php _e("nórsky prozaik, dramatik, básnik a publicista, nositeľ Nobelovej ceny za literatúru za rok 1903, bojovník za národnú nezávislosť Nórska, za slobodu malých a utláčaných národov a obhajca slovenskej národnej identity a svojbytnosti", "colloquium-theme")?>)</p>
        </div>
        <br class="blank">
    </div>
</div>

<?php get_footer() ?>