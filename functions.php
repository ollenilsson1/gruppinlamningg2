<?php
function wpbootstrap_enqueue_styles()

{

    wp_enqueue_style('bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css');

    wp_enqueue_style('my-style', get_template_directory_uri() . '/style.css');

}



add_action('wp_enqueue_scripts', 'wpbootstrap_enqueue_styles');



add_theme_support('menus');


register_nav_menus(
    array(
        'main-menu' => 'Om oss menu',
        'new-menu' => 'Support menu'
    )
);
?>