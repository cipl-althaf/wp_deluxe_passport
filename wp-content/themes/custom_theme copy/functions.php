<?php

function custom_theme_enqueue_styles()
{
    wp_enqueue_style(
        'custom-theme-style',
        get_stylesheet_uri()
    );
}

// Register Navigation Menu
function custom_theme_register_menus()
{
    register_nav_menus(
        array(
            'primary_menu' => 'Primary Menu',
        )
    );
}


add_action('wp_enqueue_scripts', 'custom_theme_enqueue_styles');