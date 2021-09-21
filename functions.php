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

/* Registrera menyer */
add_theme_support('menus');
register_nav_menus(
    array(
        'header-menu' => 'Header Menu',
    )
);

// Woocommerce
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

add_theme_support('post-thumbnails');


/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}
