<?php

//If the function doesn't exist, then use rkmorley_setup
if (!function_exists('rkmorley_setup')) :
function rkmorley_setup()
{
    //Let Wordpress handle the titles tag
    add_theme_support('title-tag');
}
endif;
    //After theme has been loaded use the function rkmorley_setup
add_action('after_setup_theme', 'rkmorley_setup');

/* Register Menus */

function register_rkmorley_menus()
{
    register_nav_menus(
        array(
            'primary' => __('Primary Menu'),
            'footer' => ('Footer Menu'),
        )
        );
}
    //Initialise the menu
add_action('init', 'register_rkmorley_menus');

/* Add Stylesheets */

function rkmorley_scripts()
{
    //Enqueue Main Stylesheet
    wp_enqueue_style('rkmorley_styles', get_stylesheet_uri());
    //Enqueue Google Fonts, Raleway
    wp_enqueue_style('rkmorley_google_fonts', 'https://fonts.googleapis.com/css?family=Raleway:300,400,400i,700');
}
add_action('wp_enqueue_scripts', 'rkmorley_scripts');

/* Register Widget Areas */

function rkmorley_widget_init()
{
    register_sidebar(array(
        'name' => __('Main Sidebar', 'rkmorley'),
        'id' => 'main-sidebar',
        'description' => __('Widgets added here will appear in all pages using the Two Column Template.', 'rkmorley'),
        'before_widget' => '<section id="%1s" class="widget %2s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'rkmorley_widget_init');
