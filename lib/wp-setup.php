<?php

// Post thumbnail support
// ============================================== //

if ( $theme_config['enable_post_thumbnails'] === true ) {

    add_theme_support('post-thumbnails');
    /* add_image_size('', XXX, XXX, true); */

}

// Custom menu support
// ============================================== //

if ( $theme_config['enable_custom_menu'] === true ) {

    function register_my_menu() {
        register_nav_menu( 'main-nav', 'Main Navigation' );
    }

    add_action( 'init', 'register_my_menu' );

}

// Remove WP Head Stuff
// ============================================== //

if ( $theme_config['remove_wp_head_info'] === true ) {

    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'index_rel_link');

}

// Disable admin bar
// ============================================== //

if ( $theme_config['enable_admin_bar'] === false ) {

    add_filter('show_admin_bar', '__return_false');

}

// Remove unwanted wp admin menu items
// ============================================== //

if ( $theme_config['remove_unwanted_menu_items'] === true ) {

    function remove_menu_pages() {
        remove_menu_page('edit-comments.php');
        remove_menu_page('upload.php');
    }

    add_action( 'admin_menu', 'remove_menu_pages' );

}