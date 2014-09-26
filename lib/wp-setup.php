<?php

// Post thumbnail support
// ============================================== //

add_theme_support('post-thumbnails');
/* add_image_size('', XXX, XXX, true); */

// Custom menu support
// ============================================== //

function register_my_menu() {
    register_nav_menu( 'main-nav', 'Main Navigation' );
}

add_action( 'init', 'register_my_menu' );

// Remove WP Head Stuff
// ============================================== //

remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'index_rel_link');

// Disable admin bar
// ============================================== //

add_filter('show_admin_bar', '__return_false');

// Remove unwanter wp admin menu items
// ============================================== //

function remove_menu_pages() {
    remove_menu_page('edit-comments.php');
    remove_menu_page('upload.php');
}

add_action( 'admin_menu', 'remove_menu_pages' );