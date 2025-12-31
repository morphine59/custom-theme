<?php
function mytheme_enable_menus() {
    add_theme_support( 'menus' );

    register_nav_menus( array(
        'primary_menu'   => __( 'Primary Menu', 'mytheme' ),
    
    ) );
}
add_action( 'after_setup_theme', 'mytheme_enable_menus' );
?>