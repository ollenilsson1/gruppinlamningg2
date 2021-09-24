<?php

function wpbootstrap_enqueue_styles()
{
    wp_enqueue_style('bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css');
    wp_enqueue_style('my-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_script('bootstrap',  'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js', array(), 1, 1, 1);
}

add_action('wp_enqueue_scripts', 'wpbootstrap_enqueue_styles');


add_theme_support('menus');
register_nav_menus(
    array(
        'main-menu' => 'Om oss menu',
        'new-menu' => 'Support menu',
        'socials' => 'Socials',
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
add_theme_support('woocommerce');


add_theme_support('post-thumbnails');

// Our custom post type function
function create_posttype()
{

    register_post_type(
        'sliders',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Sliders'),
                'singular_name' => __('Slider')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'Sliders'),
            'show_in_rest' => true,

        )
    );
}
// Hooking up our function to theme setup
add_action('init', 'create_posttype');

/*
* Creating a function to create our CPT
*/

function custom_post_type()
{

    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x('Sliders', 'Post Type General Name', 'sportstore'),
        'singular_name'       => _x('Slider', 'Post Type Singular Name', 'sportstore'),
        'menu_name'           => __('Sliders', 'sportstore'),
        'parent_item_colon'   => __('Parent Slider', 'sportstore'),
        'all_items'           => __('All Sliders', 'sportstore'),
        'view_item'           => __('View Slider', 'sportstore'),
        'add_new_item'        => __('Add New Slider', 'sportstore'),
        'add_new'             => __('Add New', 'sportstore'),
        'edit_item'           => __('Edit Slider', 'sportstore'),
        'update_item'         => __('Update Slider', 'sportstore'),
        'search_items'        => __('Search Slider', 'sportstore'),
        'not_found'           => __('Not Found', 'sportstore'),
        'not_found_in_trash'  => __('Not found in Trash', 'sportstore'),
    );

    // Set other options for Custom Post Type

    $args = array(
        'label'               => __('Sliders', 'sportstore'),
        'description'         => __('Slider news and reviews', 'sportstore'),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array('genres'),
        /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    // Registering your Custom Post Type
    register_post_type('sliders', $args);
}

/* Hook into the 'init' action so that the function
    * Containing our post type registration is not 
    * unnecessarily executed. 
    */

add_action('init', 'custom_post_type', 0);

// Butiker Custom Post Type
function create_ButikerPostType()
{

    register_post_type(
        'butiker',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Butiker'),
                'singular_name' => __('Butik')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'butiker'),
            'show_in_rest' => true,

        )
    );
}
// Hooking up our function to theme setup
add_action('init', 'create_ButikerPostType');

/*
* Creating a function to create our CPT
*/

function ButikerCustom_post_type()
{

    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x('Butiker', 'Post Type General Name', 'orchid-store-child'),
        'singular_name'       => _x('Butik', 'Post Type Singular Name', 'orchid-store-child'),
        'menu_name'           => __('Butiker', 'orchid-store-child'),
        'parent_item_colon'   => __('Parent Butik', 'orchid-store-child'),
        'all_items'           => __('All Butiker', 'orchid-store-child'),
        'view_item'           => __('View Butik', 'orchid-store-child'),
        'add_new_item'        => __('Add New Butik', 'orchid-store-child'),
        'add_new'             => __('Add New', 'orchid-store-child'),
        'edit_item'           => __('Edit Butik', 'orchid-store-child'),
        'update_item'         => __('Update Butik', 'orchid-store-child'),
        'search_items'        => __('Search Butik', 'orchid-store-child'),
        'not_found'           => __('Not Found', 'orchid-store-child'),
        'not_found_in_trash'  => __('Not found in Trash', 'orchid-store-child'),
    );

    // Set other options for Custom Post Type

    $args = array(
        'label'               => __('butiker', 'orchid-store-child'),
        'description'         => __('Butik news and reviews', 'orchid-store-child'),
        'location'         => __('Adress', 'orchid-store-child'),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array('genres'),
        /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    // Registering your Custom Post Type
    register_post_type('butiker', $args);
}

/* Hook into the 'init' action so that the function
    * Containing our post type registration is not 
    * unnecessarily executed. 
    */

add_action('init', 'ButikerCustom_post_type', 0);



//API KEY FÖR google Maps


function storeMapKey($api)
{
    $api['key'] = 'AIzaSyDqxvdLzQZIdV1C5eioJ7FBTMxKmugBioE';
    return $api;
}

add_filter('acf/fields/google_map/api', 'storeMapKey');
/**
 * Register Custom Navigation Walker
 */
function register_navwalker()
{
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');


add_filter('nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3);
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute($atts, $item, $args)
{
    if (is_a($args->walker, 'WP_Bootstrap_Navwalker')) {
        if (array_key_exists('data-toggle', $atts)) {
            unset($atts['data-toggle']);
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}

add_theme_support('woocommerce');


/* Funktion för att ändra klass på a taggar i wp_nav_menu */

function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);
