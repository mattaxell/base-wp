<?php
/**
 * Add title tag support
 */
if ( $theme_config['enable_title_tag'] === true ) {
    add_theme_support('title-tag');
}

/**
 * Add post thumbnail support
 * ==========================
 * Register any additional image sizes with add_image_size()
 */
if ( $theme_config['enable_post_thumbnails'] === true ) {
    add_theme_support('post-thumbnails');
    // add_image_size('square', 340, 340, true);
}

/**
 * Add custom navigation support
 * =============================
 * Add individual menus with register_nav_menu()
 */
if ( $theme_config['enable_custom_menu'] === true ) {
    function register_my_menu() {
        register_nav_menu( 'main-nav', 'Main Navigation' );
        register_nav_menu( 'footer-nav', 'Footer Navigation' );
    }
    add_action( 'init', 'register_my_menu' );
}

/**
 * Remove WP Head info
 */
if ( $theme_config['remove_wp_head_info'] === true ) {
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'index_rel_link');
}

/**
 * Disable admin bar
 */
if ( $theme_config['enable_admin_bar'] === false ) {
    add_filter('show_admin_bar', '__return_false');
}

/**
 * Remove unused WP Menu items
 * ===========================
 * Comments hidden from menu by default
 * Hide additional items with remove_menu_page()
 */
if ( $theme_config['remove_unwanted_menu_items'] === true ) {
    function remove_menu_pages() {
        remove_menu_page('edit-comments.php');
        // remove_menu_page('upload.php');
    }
    add_action( 'admin_menu', 'remove_menu_pages' );
}

/**
 * Disable theme editor
 * ====================
 * Prevent user from editing the theme in the admin area
 */
if ( $theme_config['enable_theme_editor'] === false ) {
    function remove_editor_menu() {
        remove_action('admin_menu', '_add_themes_utility_last', 101);
    }
    add_action('_admin_menu', 'remove_editor_menu', 1);
}