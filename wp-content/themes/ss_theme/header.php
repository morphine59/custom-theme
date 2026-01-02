<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container">
        <div class="logo">
            <a href="<?php echo esc_url( home_url('/') ); ?>">
                Sunil Budha
            </a>
        </div>

        <nav class="site-navigation" aria-label="Primary Menu">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary_menu',
                'menu_class'     => 'nav-menu',
                'container'      => false,
                'depth'          => 1,
            ) );
            ?>
        </nav>
    </div>
</header>
