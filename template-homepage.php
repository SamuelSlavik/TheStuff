<?php /* Template Name: Homepage template */ ?>

<?php get_header() ?>
<?php include("components/logo.php") ?>

<div class="page-content">
    <?php include("components/homeTitle.php") ?>
    <div class="container_slideshow">
        <a class="arrowL arrow" href="#!">&lt;</a>
        <div id="slideshow">
            <div class="slideshow_1"><img src="<?php echo get_template_directory_uri(); ?>/images/slideshows/interior_gold.png">
                <div class="aktuality">
                    <h3><?php _e("Aktuality", "colloquium-theme")?></h3>
                    <br class="blank"><?php _e("Nájdete nás aj na", "colloquium-theme")?>: <a href="https://www.facebook.com/Colloquiumsk/" target="_blank" rel="noopener noreferrer"><?php _e("facebook/colloquiumsk", "colloquium-theme")?></a>
                </div>
            </div>
            <div class="hidden slideshow_3"><img src="<?php echo get_template_directory_uri(); ?>/images/slideshows/exterior_sky.png">
                <div class="aktuality">
                    <h3><?php _e("Aktuality", "colloquium-theme")?></h3>
                    <br class="blank"><?php _e("Nájdete nás aj na", "colloquium-theme")?>: <a href="https://www.facebook.com/Colloquiumsk/" target="_blank" rel="noopener noreferrer"><?php _e("facebook/colloquiumsk", "colloquium-theme")?></a>
                </div>
            </div>
            <div class="hidden slideshow_4"><img src="<?php echo get_template_directory_uri(); ?>/images/slideshows/interior_flower.png">
                <div class="aktuality">
                    <h3><?php _e("Aktuality", "colloquium-theme")?></h3>
                    <br class="blank"><?php _e("Nájdete nás aj na", "colloquium-theme")?>: <a href="https://www.facebook.com/Colloquiumsk/" target="_blank" rel="noopener noreferrer"><?php _e("facebook/colloquiumsk", "colloquium-theme")?></a>
                </div>
            </div>
            <div class="hidden slideshow_5"><img src="<?php echo get_template_directory_uri(); ?>/images/slideshows/interior_lamp.png">
                <div class="aktuality">
                    <h3><?php _e("Aktuality", "colloquium-theme")?></h3>
                    <br class="blank"><?php _e("Nájdete nás aj na", "colloquium-theme")?>: <a href="https://www.facebook.com/Colloquiumsk/" target="_blank" rel="noopener noreferrer"><?php _e("facebook/colloquiumsk", "colloquium-theme")?></a>
                </div>
            </div>
            <div class="hidden slideshow_6"><img src="<?php echo get_template_directory_uri(); ?>/images/slideshows/exterior_road.png">
                <div class="aktuality">
                    <h3><?php _e("Aktuality", "colloquium-theme")?></h3>
                    <br class="blank"><?php _e("Nájdete nás aj na", "colloquium-theme")?>: <a href="https://www.facebook.com/Colloquiumsk/" target="_blank" rel="noopener noreferrer"><?php _e("facebook/colloquiumsk", "colloquium-theme")?></a>
                </div>
            </div>
            <div class="hidden slideshow_7"><img src="<?php echo get_template_directory_uri(); ?>/images/slideshows/interior_mirror.png">
                <div class="aktuality">
                    <h3><?php _e("Aktuality", "colloquium-theme")?></h3>
                    <br class="blank"><?php _e("Nájdete nás aj na", "colloquium-theme")?>: <a href="https://www.facebook.com/Colloquiumsk/" target="_blank" rel="noopener noreferrer"><?php _e("facebook/colloquiumsk", "colloquium-theme")?></a>
                </div>
            </div>
            <div class="hidden slideshow_8"><img src="<?php echo get_template_directory_uri(); ?>/images/slideshows/interior_clock.png">
                <div class="aktuality">
                    <h3><?php _e("Aktuality", "colloquium-theme")?></h3>
                    <br class="blank"><?php _e("Nájdete nás aj na", "colloquium-theme")?>: <a href="https://www.facebook.com/Colloquiumsk/" target="_blank" rel="noopener noreferrer"><?php _e("facebook/colloquiumsk", "colloquium-theme")?></a>
                </div>
            </div>
            <div class="hidden slideshow_9"><img src="<?php echo get_template_directory_uri(); ?>/images/slideshows/interior_flags.png">
                <div class="aktuality">
                    <h3><?php _e("Aktuality", "colloquium-theme")?></h3>
                    <br class="blank"><?php _e("Nájdete nás aj na", "colloquium-theme")?>: <a href="https://www.facebook.com/Colloquiumsk/" target="_blank" rel="noopener noreferrer"><?php _e("facebook/colloquiumsk", "colloquium-theme")?></a>
                </div>
            </div>
        </div>
        <a class="arrowR arrow" href="#!">&gt;</a>
    </div>
    <div class="foreword">
        <img class="foreword_img" src="<?php echo get_template_directory_uri(); ?>/images/kresba.png">
        <div>
              <?php the_field("homepageForeWords"); ?>
        </div>
    </div>
    <div class="predneikony">
        <a href="https://play.google.com/store?hl=sk" target="_blank" rel="noopener noreferrer"><img id="appka" title="<?php _e("Aplikácia Colloquium - vo vývoji", "colloquium-theme")?>" src="<?php echo get_template_directory_uri(); ?>/images/icons/ikona_appka.png"></a>
        <a href="#!" target="" rel="noopener noreferrer"><img id="mail" title="<?php _e("Napíšte nám email", "colloquium-theme")?>" src="<?php echo get_template_directory_uri(); ?>/images/icons/ikona_mail.png"></a>
        <a href="https://goo.gl/maps/HPhPbqNBqf72" target="_blank" rel="noopener noreferrer"><img id="googlemaps" title="<?php _e("Kde nájdete Colloquium", "colloquium-theme")?>" src="<?php echo get_template_directory_uri(); ?>/images/icons/ikona_googlemaps.png"></a>
        <a href="https://www.youtube.com/watch?v=QBg2G7JaxbM" target="_blank" rel="noopener noreferrer"><img id="youtube" title="You Tube Colloquium" src="<?php echo get_template_directory_uri(); ?>/images/icons/ikona_youtube.png"></a>
        <a href="https://www.facebook.com/Colloquiumsk/" target="_blank" rel="noopener noreferrer"><img id="fb" title="Facebook Colloquium" src="<?php echo get_template_directory_uri(); ?>/images/icons/ikona_fb.png"></a>
    </div>
    <div class="column_4">
        <div class="flex-container">
            <img class="flex-container_image" src="<?php echo get_template_directory_uri(); ?>/images/1.stĺpec-Veda-na-Homepagepodstránka-Veda-a-výskum.png"><br class="blank">
            <h3><?php _e("Veda Q Výskum", "colloquium-theme")?> <br/>(<?php _e("projekty, výskumné aktivity",  "colloquium-theme")?>)</h3>
            <br/>
            <?php the_field("Column1") ?>
            <div class="overlay">
                <a href="<?= get_permalink(21);?>"><button class="button" type="button"><?php _e("Viac info", "colloquium-theme")?></button></a>
            </div>
        </div>
        <div class="flex-container">
            <img class="flex-container_image" src="<?php echo get_template_directory_uri(); ?>/images/2.stĺpec-Vzdelávanie-homepage.png"><br class="blank">
            <h3><?php _e("Vzdelávanie Q Letná škola", "colloquium-theme")?> <br/>(<?php _e("kurzy, školenia, tréningy", "colloquium-theme")?>)</h3>
            <br class="blank">
            <?php the_field("Column2")?>
            <div class="overlay"><a href="<?= get_permalink(23);?>"><button class="button" type="button"><?php _e("Viac info", "colloquium-theme")?></button></a></div>
        </div>
        <div class="flex-container">
            <img class="flex-container_image" src="<?php echo get_template_directory_uri(); ?>/images/3.stĺpec-Colloquium-homepage.png"><br class="blank">
            <h3>Colloquium <br/>(<?php _e("vedecké, odborné a kultúrne kolokviá", "colloquium-theme")?>)</h3>
            <br class="blank">
            <?php the_field("Column3") ?>
            <div class="overlay"><a href="<?php echo get_permalink(25)?>"><button class="button" type="button"><?php _e("Viac info", "colloquium-theme")?></button></a></div>
        </div>
        <div class="flex-container">
            <img id="diskusia" class="flex-container_image" src="<?php echo get_template_directory_uri(); ?>/images/4.stĺpec-Supervízie-a-konzultácie-homepagepostránka-Supervízie-a-konzultácie.png"><br class="blank">
            <h3><?php _e("Supervízie Q Kozultácie", "colloquium-theme")?></h3>
            <br class="blank">
            <?php the_field("Column4") ?>
            <div class="overlay"><a href="<?php echo get_permalink(27)?>"><button class="button" type="button"><?php _e("Viac info", "colloquium-theme")?></button></a></div>
        </div>
        <div class="icons_bottom">
            <div class="icons_bottom_left"><img id="wifi" title="<?php _e("K dispozícií je pre Vás bezplatné Wifi pripojenie", "colloquium-theme")?>" src="<?php echo get_template_directory_uri(); ?>/images/icons/ikona_wifi.png">
                <img id="battery" title="<?php _e("V priestoroch je možné nabíjanie Vašej elektroniky", "colloquium-theme")?>" src="<?php echo get_template_directory_uri(); ?>/images/icons/ikona_battery.png">
                <img id="card" title="<?php _e("Platbu je možné realizovať aj bankomatovou kartou", "colloquium-theme")?>" src="<?php echo get_template_directory_uri(); ?>/images/icons/ikona_card.png">
                <img id="recykle" title="<?php _e("Minimalizujeme nerecyklovateľný odpad", "colloquium-theme")?>" src="<?php echo get_template_directory_uri(); ?>/images/icons/ikona_recykling.png">
                <img id="nosmoking" title="<?php _e("V priestoroch je fajčenie zakázané", "colloquium-theme")?>" src="<?php echo get_template_directory_uri(); ?>/images/icons/ikona_no_smoking.png"></div>
        </div>
    </div>
</div>

<?php get_footer() ?>
