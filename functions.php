<?php

/*  Register Scripts and Style */
function theme_files_scripts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Cinzel|Quattrocento+Sans|Forum|Dosis');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Prompt');
    //wp_enqueue_style('ajaxLibsNormalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css');
    //wp_enqueue_script("jQuery", 'http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', array(), null, false );
    //wp_enqueue_script("jQuery", 'https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), null, false );
    wp_enqueue_style('style-css', get_stylesheet_uri());
    wp_enqueue_script("navigationScript", get_template_directory_uri() . '/js/navigation.js', array(), null, true );
    wp_enqueue_script("slideshowScript", get_template_directory_uri() . '/js/slideshow.js', array(), null, true );
    wp_enqueue_script("divAnimation", get_template_directory_uri() . '/js/divAnimation.js', array(), null, true );
    wp_enqueue_script("modalWindows", get_template_directory_uri() . '/js/modalWindows.js', array(), null, true );
    wp_enqueue_script("classNames", get_template_directory_uri() . '/js/classNames.js', array(), null, true );





}

add_action('wp_enqueue_scripts', 'theme_files_scripts');

function register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Hlavné menu'),
        )
    );
}
add_action('init', 'register_my_menus');


function addcssAndScripts()
{
    if ( is_page(74) or is_page(7) )
    {
        wp_enqueue_script("JQuery", 'http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js' );
    }
}
add_action( 'wp_enqueue_scripts', 'addcssAndScripts');
