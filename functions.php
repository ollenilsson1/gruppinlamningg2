<?php

function wpbootstrap_enqueue_styles() {
wp_enqueue_style( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' );
wp_enqueue_style( 'my-style', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'wpbootstrap_enqueue_styles');


/* Registrera menyer */
add_theme_support('menus');
register_nav_menus(
    array(
        'header-menu' => 'Header Menu',
    )
);



add_theme_support('post-thumbnails');