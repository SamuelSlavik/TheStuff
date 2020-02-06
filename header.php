<!DOCTYPE html>
<head>
    <title><?php the_title()?></title>
    <?php wp_head(); ?>

    <!--<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <meta charset="UTF-8">
    <meta name="author" content="Samuel Slávik">
    <meta name="description" content="<?php the_field("Title")?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<section class="navigation">
    <div class="nav-container">
        <div class="brand">
            <a href="<?php echo get_home_url()?>"><img style="position: absolute; top: 0; left: 0; height: 50px; width: 50px;" src="<?php echo get_template_directory_uri(); ?>/images/Logo_SK.svg"></a>
        </div>
        <nav>
            <div class="nav-mobile">
                <a id="nav-toggle" href="#!"><span></span></a>
            </div>
                <?php wp_nav_menu("header-menu") ?>
        </nav>
    </div>
</section>




