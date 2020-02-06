<?php /* Template Name: Contact */ ?>

<?php get_header() ?>
<?php include("components/logo.php") ?>

<div class="md-modal md-effect-1" id="modal-1">
    <div class="md-content" style="overflow:scroll;">
        <div class="div_light align_center div_dark_onas" style="margin-top:; padding:0% 15% 3% 15%; color:black; font-size:0.8em;">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    the_content();
                endwhile;
            endif;
            ?>
            <br/>
            <a class="md-close button" style=""><?php _e("Späť", "colloquium-theme")?></a>
        </div>
    </div>
</div>

<div class="page-content">
    <?php include("components/homeTitle.php") ?>

    <div class="predneikony"><a href="https://play.google.com/store?hl=sk" target="_blank" rel="noopener noreferrer"><img id="appka" title="<?php _e("Aplikácia Colloquium - vo vývoji", "colloquium-theme")?>" src="http://colloquiumsk.com/wp-content/uploads/2019/03/ikona_appka.png"></a>
        <a href="#!" target="" rel="noopener noreferrer"><img id="mail" title="<?php _e("Napíšte nám email", "colloquium-theme")?>" src="http://colloquiumsk.com/wp-content/uploads/2019/03/ikona_mail.png"></a>
        <a href="https://goo.gl/maps/HPhPbqNBqf72" target="_blank" rel="noopener noreferrer"><img id="googlemaps" title="<?php _e("Kde nájdete Colloquium", "colloquium-theme")?>" src="http://colloquiumsk.com/wp-content/uploads/2019/03/ikona_googlemaps.png"></a>
        <!--<a href="https://www.tripadvisor.sk/" target="_blank" rel="noopener noreferrer"><img id="tripadvisor" title="TripAdvisor Colloquium" src="http://colloquiumsk.com/wp-content/uploads/2019/03/ikona_tripadvisor.png"></a>-->
        <a href="https://www.youtube.com/watch?v=QBg2G7JaxbM" target="_blank" rel="noopener noreferrer"><img id="youtube" title="You Tube Colloquium" src="http://colloquiumsk.com/wp-content/uploads/2019/03/ikona_youtube.png"></a>
        <!--<a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer"><img id="instagram" title="Instagram Colloquium" src="http://colloquiumsk.com/wp-content/uploads/2019/03/ikona_instagram.png"></a>-->
        <a href="https://www.facebook.com/colloquiumsk/" target="_blank" rel="noopener noreferrer"><img id="fb" title="Facebook Colloquium" src="http://colloquiumsk.com/wp-content/uploads/2019/03/ikona_fb.png"></a>
    </div>
    <div class="contactTitle">
        <?php the_field("contacttitle")?>
    </div>
    <div class="container_slideshow">
        <a href="#" class="arrowL arrow">&lt;</a>
        <div id="slideshow">
            <div class=" slideshow_1"><img src="<?php echo get_template_directory_uri(); ?>/images/slideshows/exterior_1-1.png"></div>
            <div class="hidden slideshow_2"><img src="<?php echo get_template_directory_uri(); ?>/images/slideshows/exterior_2.png"></div>
            <div class="hidden slideshow_3"><img src="<?php echo get_template_directory_uri(); ?>/images/slideshows/exterior_3.png"></div>
            <div class="hidden slideshow_4"><img src="<?php echo get_template_directory_uri(); ?>/images/slideshows/exterior_4.png"></div>
            <div class="hidden slideshow_5"><img src="<?php echo get_template_directory_uri(); ?>/images/slideshows/exterior_5.png"></div>
            <div class="hidden slideshow_6"><img src="<?php echo get_template_directory_uri(); ?>/images/slideshows/exterior_6.png"></div>
        </div>
        <a href="#" class="arrowR arrow">&gt;</a>
    </div>
    <div class="div_light mobile_display_5 align_center">
        <?php the_field("contacttitle")?>
    </div>
    <div class="column_4" style="padding-top:3%;">
        <div class="flex-container clanok">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Podstránka-Kontakty-1.stĺpec-Adresa.png" class="flex-container_image"><br class="blank">
            <h3><?php _e("Adresa, email a telefón","colloquium-theme")?></h3>
            <br class="blank">
            <p>Vyšehradská 12-11, 851 06 Bratislava 5, SLOVAKIA</p>
            <p><b>email: </b>colloquiumsk@colloquiumsk.com</p>
            <p><b><?php _e("mobil:","colloquium-theme")?> </b> +421 948 922 759 (<?php _e("Slovensko","colloquium-theme")?>)</p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p>&nbsp;+47 466 34 334 (<?php _e("Nórsko", "colloquium-theme")?>)</p>

            <p><b>Skype: </b> colloquiumsk</p>
        </div>
        <div class="flex-container clanok">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Podstránka-Kontakty-2.stĺpec-Sociálne-média.png" class="flex-container_image"><br class="blank">
            <h3><?php _e("Sociálne siete a aplikácie", "colloquium-theme")?></h3>
            <br class="blank">
            <p><b>Facebook: </b> <a style="color: rgb(166,124,0);" href="https://www.facebook.com/colloquiumsk/">facebook/colloquiumsk</a></p>
            <p><b>WhatsApp: </b> +421 948 922 759 (<?php _e("Slovensko","colloquium-theme")?>)</p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+47 466 34 334 (<?php _e("Nórsko", "colloquium-theme")?>)
            <p><b>YouTube: </b> <a target="_blank" style="color: rgb(166,124,0);" href="https://www.youtube.com/watch?v=QBg2G7JaxbM">colloquium</a></p>
        </div>
        <div class="flex-container clanok">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Podstránka-Kontakty-3.stĺpec-Mobilná-aplikácia.png" class="flex-container_image"><br class="blank">
            <h3><?php _e("Naša aplikácia Colloquium", "colloquium-theme")?></h3>
            <br class="blank">
            <p><?php _e("Vo vývoji, o spustení našej aplikácie Colloquium Vás budeme informovať",  "colloquium-theme")?></p>
            <br class="blank"><p>© Colloquium</p>
        </div>
        <div class="flex-container clanok">
            <h3><?php _e("Kde nás nájdete", "colloquium-theme")?></h3>
            <a href="https://goo.gl/maps/HPhPbqNBqf72" target="_blank" rel="noopener noreferrer"></a><a href="https://goo.gl/maps/HPhPbqNBqf72" target="_blank" rel="noopener noreferrer"></a>
            <div id="map">
                <script><br />
                    function myMap() {var mapCanvas = document.getElementById("map"); var mapOptions = {center: new google.maps.LatLng(48.104167,17.103527,14), zoom: 15};<br />
                        var map = new google.maps.Map(mapCanvas, mapOptions);}<br />
                </script>
                <!--
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d21314.516640613678!2d17.103527!3d48.104167!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c89bec4abc6d9%3A0x9e1bd35c4900fc8a!2sZnievska+3060%2F6%2C+851+06+Petr%C5%BEalka!5e0!3m2!1ssk!2ssk!4v1530760650704" style="border:0" allowfullscreen="" width="100%" height="100%" frameborder="0"></iframe>-->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3168.815214214044!2d17.099907517989315!3d48.097785251433315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c89c6c9ecd1a1%3A0xfb2f35a4562fae0d!2zVnnFoWVocmFkc2vDoSAzNzMyLzEyLCA4NTEgMDYgUGV0csW-YWxrYQ!5e0!3m2!1ssk!2ssk!4v1553676908599" style="border:0" allowfullscreen="" width="100%" height="100%" frameborder="0" class="flex-container_image"></iframe></div>
            <br />Vyšehradská 12-11

            851 06 Bratislava 5
            GPS súradice  <b>48°05'51.4"N 17°06'04.2"E</b>

            <br class="blank"><p><?php _e("Nájdete nás vo vnútornom bloku na konci bytového komplexu hnedo-žlto-červenej farby.", "colloquium-theme")?> <a style="color:rgb(166,124,0); cursor:pointer; " class="contact-button md-trigger" data-modal="modal-1"><b><?php _e("VIDEO a podrobnú navigáciu nájdete TU.", "colloquium-theme")?> </b></a><?php _e("Parkovanie v okolí. V prípade nejasností nás neváhajte kontaktovať.", "colloquium-theme")?></p>

        </div>
        <div class="icons_bottom">
            <div class="icons_bottom_left">
                <img id="wifi" title="<?php _e("K dispozícií je pre Vás bezplatné Wifi pripojenie",  "colloquium-theme")?>" src="http://colloquiumsk.com/wp-content/uploads/2019/03/ikona_wifi.png">
                <img id="battery" title="<?php _e("V priestoroch je možné nabíjanie Vašej elektroniky", "colloquium-theme")?>" src="http://colloquiumsk.com/wp-content/uploads/2019/03/ikona_battery.png">
                <img id="card" title="<?php _e("Platbu je možné realizovať aj bankomatovou kartou", "colloquium-theme")?>" src="http://colloquiumsk.com/wp-content/uploads/2019/03/ikona_card.png">
                <img id="recykle" title="<?php _e("Minimalizujeme nerecyklovateľný odpad", "colloquium-theme")?>" src="http://colloquiumsk.com/wp-content/uploads/2019/03/ikona_recykling.png">
                <img id="nosmoking" title="<?php _e("V priestoroch je fajčenie zakázané", "colloquium-theme")?>" src="http://colloquiumsk.com/wp-content/uploads/2019/03/ikona_no_smoking.png">
            </div>
        </div>
    </div>
    <div class="div_light align_center">
        <h1>Colloquium OZ</h1>
        <p><b><?php _e("Registračné číslo", "colloquium-theme")?>:</b> VVS/1-900/90-51844</p>
        <p><b><?php _e("IČO", "colloquium-theme")?>:</b> 510&nbsp;926 89<p></p>
        <p><b><?php _e("DIČ", "colloquium-theme")?>:</b> 2121039052</p>
        <p><b><?php _e("Bankové spojenie", "colloquium-theme")?>:</b> Slovenská sporiteľňa</p>
        <p><b><?php _e("Číslo účtu", "colloquium-theme")?>:</b> 5156379275/0900</p>
        <p><b><?php _e("IBAN", "colloquium-theme")?>:</b> SK6909000000005156379275</p>
        <br class="blank"><p><?php _e("Nie sme platcami DPH", "colloquium-theme")?></p>
    </div>
</div>

<?php get_footer() ?>
