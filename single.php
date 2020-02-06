<?php get_header() ?>
<?php include("components/logo.php") ?>

<div class="page-content">
    <div class="div_light align_center"><br class="blank" /><br class="blank" />
        <?php
        // Start the Loop.
        while ( have_posts() ) :
            the_post(); ?>
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
                <p><b><?php the_field("subtitle_2")?></b></p>
                <br/>
                <div class="text text-medium article-item__excerpt text-gray-6">
                    <?php the_content() ?>
                </div>
                <br/>
                <p><b><?php _e("Cieľová skupina", "colloquium-theme")?>: </b><?php the_field("target")?></p>
                <p><b><?php _e("Trvanie", "colloquium-theme")?>: </b><?php the_field("lasting")?></p>
                <p><b><?php _e('Termíny na výber', "colloquium-theme")?>: </b><?php the_field("date")?></p>
                <p><b><?php _e("Miesto konania", "colloquium-theme")?>: </b><?php the_field("place")?></p>
                <p><b><?php _e("Ukončenie", "colloquium-theme")?>: </b><?php the_field("end")?></p>
                <p><b><?php _e("Cena", "colloquium-theme")?>: </b><?php the_field("price")?></p>
                <br/>
                <p><b><?php _e("Technické a organizačné pokyny", "colloquium-theme")?>: <br/></b><?php the_field("instructions")?></p>
                <br/>
                <p><?php _e("V prípade otázok nás neváhajte", "colloquium-theme")?> <a href=""><?php _e("kontaktovať", "colloquium-theme")?></a>.</p>
                <br/>
            </div>
            <br class="blank">
            <hr>
            <br class="blank">
        </article>
        <div class="contactFormDiv">
            <form action="registrationDone.php" method="post" class="contactForm">
                <div class="formDetails">
                    <input type="text" id="formSubject" name="subject" value="<?php the_title()?>">
                    <input type="text" id="formPrice" name="price" value="<?php the_field("price")?>">
                    <input type="text" id="formInformation" name="information" value="<?php ?>">
                </div>
                <div>
                    <div class="doubleLayout">
                        <input class="textTypeInput leftInput" type="text" id="formName" name="name" placeholder="Meno">
                        <input class="textTypeInput"  type="text" id="formSurname" name="surname" placeholder="Priezvisko">
                    </div>
                    <br/>
                    <input class="textTypeInput"  type="text" id="formEmail" name="email" placeholder="Email">
                    <br/>
                    <input class="textTypeInput"  type="text" id="formPhoneNumber" name="phoneNumber" placeholder="Tel. číslo">
                </div>
                <br/>
                <div>
                    <input class="textTypeInput"  type="text" id="formAddress" name="address" placeholder="Ulica, číslo domu">
                    <br/>
                    <div class="doubleLayout">
                        <input class="textTypeInput leftInput"  type="text" id="formTown" name="town" placeholder="Mesto">
                        <input class="textTypeInput"  type="text" id="formPSC" name="psc" placeholder="PSČ">
                    </div>
                    <br/>
                </div>
                <div>
                    <input class="textTypeInput"  type="text" id="formNumberOfPeople" name="numberOfPeople" placeholder="Počet osôb">
                    <br/>
                    <select name="payment">
                        <option value="" selected disabled >Spôsob platby</option>
                        <option value="prevodom">Platba prevodom</option>
                        <option value="naMieste">Platba na mieste</option>
                    </select>
                    <br/>
                    <textarea id="formMessage" name="message" placeholder="Poznámka..."></textarea>
                    <br/>
                    <span class="checkboxDiv">
                        <input type="checkbox" name="subscribe" value="" id="subscribe"><label for="subscribe"> Súhlasím so zasielaním noviniek Colloquium</label><br/>
                    </span>
                    <br/>
                    <span class="checkboxDiv">
                        <input type="checkbox" name="terms" value="" id="terms"><label for="terms"> Súhlasím s obchodnými podmienkami a so spracovaním osobných údajov. Obchodné podmienky, Ochrana osobných údajov</label>
                    </span>
                </div>
                <br/>
                <input type="submit" value="Send" class="button">

            </form>
        </div>
<?php endwhile; ?>

    </div>

</div>

<?php get_footer()?>