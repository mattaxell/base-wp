<?php

/**
 * Enable basic, but additional
 * WordPress functionality
 */
function wp_theme_setup() {
    // Title tag support
    add_theme_support('title-tag');
    // Thumbnail support
    add_theme_support('post-thumbnails');
    // Register Custom Menus
    register_nav_menu( 'main-nav', 'Main Navigation' );
    register_nav_menu( 'footer-nav', 'Footer Navigation' );
    // Remove WP Head Info
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'index_rel_link');
}
add_action('after_setup_theme', 'wp_theme_setup');

/**
 * Prevent user from editing the theme
 * within the WP appearance menu
 */
function remove_editor_menu() {
    remove_action('admin_menu', '_add_themes_utility_last', 101);
}
add_action('_admin_menu', 'remove_editor_menu', 1);