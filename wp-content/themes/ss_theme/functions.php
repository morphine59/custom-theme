<?php
function ss_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'ss_theme' ),
    ) );
}
add_action( 'after_setup_theme', 'ss_theme_setup' );

/**
 * Enqueue styles
 */
function ss_theme_scripts() {
    wp_enqueue_style( 'ss-theme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'ss_theme_scripts' );
?>
