<?php

/*
* Site options
* ============
* Define which Wordpress functions to include
* as well as some custom functionality
*/
$theme_config = array(
    'enable_post_thumbnails'     => true,
    'enable_custom_menu'         => true,
    'enable_admin_bar'           => false,
    'enable_theme_editor'        => false,
    'enable_custom_login'        => true,
    'remove_wp_head_info'        => true,
    'remove_unwanted_menu_items' => true
);

// Define constants
define('THEME', '/wp-content/themes/base-wp');
define('IMG', THEME . '/public/img');
define('JS', THEME . '/public/js');