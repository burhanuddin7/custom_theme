<?php

function custom_menu_setup_theme() {
    // Register nav menu Theme Locations
    register_nav_menus( array(
        'primary' => 'Primary Menu',
        'secondary' => 'Footer Menu'
    ) );
}
add_action( 'init', 'custom_menu_setup_theme' );

/*Remove gluttenberg css code*/
add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );
function wps_deregister_styles() {
    wp_dequeue_style( 'wp-block-library' );
}

/*REMOVE WP EMOJI*/
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

/*Add Menu, thumbnail and excerpt option in pages*/
add_theme_support( 'post-thumbnails' );	
add_theme_support( 'menus' );
add_theme_support( 'widgets' );
add_post_type_support( 'page', 'excerpt' );
add_filter( 'big_image_size_threshold', '__return_false' );
/*Ends here*/


add_action( 'after_setup_theme', 'theme_slug_setup' );
function theme_slug_setup() {
    add_theme_support( 'title-tag' );
}

add_filter('xmlrpc_enabled', '__return_false');