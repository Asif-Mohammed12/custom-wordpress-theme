<?php

function asif_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
    add_theme_support( 'post-thumbnails' );

}
 
add_action( 'after_setup_theme', 'asif_custom_logo_setup' );

function asif_menus(){
    
    $location = array(
        'primary' => "Desktop primary Left Sidebar",
        'footer'  => "Footer menu items"
    );

    register_nav_menus( $location );
}
add_action( 'init', 'asif_menus' );

function asif_register_styles(){

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('asif-style', get_template_directory_uri() . "/style.css", array('asif-bootstrap'), $version, 'all');
    wp_enqueue_style('asif-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('asif-fontawsome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}

add_action( 'wp_enqueue_scripts','asif_register_styles' );

function asif_register_scripts(){

    wp_enqueue_script('asif-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1',true);
    wp_enqueue_script('asif-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0',true);
    wp_enqueue_script('asif-bootstrap-js', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.4.1',true);
    wp_enqueue_script('asif-custom-js',get_template_directory_uri() . "assests/js/main.js", array(), '1.0.0',true);
}

add_action( 'wp_enqueue_scripts','asif_register_scripts' );

function asif_widget_areas(){

    register_sidebar(
        array(
            'before_title' => '',
            'after_title'   => '',
            'before_widget'   => '',
            'after_widget'   => '',
            'name' => 'Sidebar Area',
            'id'  =>   'sidebar-1',
            'description' => 'Sidebar Widget Area'
        )
        );
    register_sidebar(
            array(
                'before_title' => '',
                'after_title'   => '',
                'before_widget'   => '',
                'after_widget'   => '',
                'name' => 'Footer Area',
                'id'  =>   'footer-1',
                'description' => 'Footer area Widget Area'
            )
            );
      
}

add_action('widgets_init','asif_widget_areas' );

/*Custom Post type start*/
function cw_post_type_news() {
    $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
    );
    $labels = array(
    'name' => _x('news', 'plural'),
    'singular_name' => _x('news', 'singular'),
    'menu_name' => _x('news', 'admin menu'),
    'name_admin_bar' => _x('news', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New news'),
    'new_item' => __('New news'),
    'edit_item' => __('Edit news'),
    'view_item' => __('View news'),
    'all_items' => __('All news'),
    'search_items' => __('Search news'),
    'not_found' => __('No news found.'),
    );
    $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'news'),
    'has_archive' => true,
    'hierarchical' => false,
    );
    register_post_type('news', $args);
    }
    add_action('init', 'cw_post_type_news');
    /*Custom Post type end*/

?>
