<?php
/**
 * Remove unused WP Menu items
 * ===========================
 * Comments hidden from menu by default
 * Hide additional items with remove_menu_page()
 */
function remove_menu_pages() {
    remove_menu_page('edit-comments.php');
    // remove_menu_page('upload.php');
}
add_action( 'admin_menu', 'remove_menu_pages' );


/**
 * Re-arrange order of admin menu
 */
function custom_menu_order($menu_ord) {
    if (!$menu_ord) return true;

    return array(
        'index.php', // Dashboard
        'separator1', // First separator
        'edit.php', // Posts
        'edit.php?post_type=page', // Pages
        'edit-comments.php', // Comments
        'separator2', // Second separator
        'upload.php', // Media
        'themes.php', // Appearance
        'plugins.php', // Plugins
        'separator3', // Third separator
        'users.php', // Users
        'tools.php', // Tools
        'options-general.php', // Settings
        'separator-last', // Last separator
    );

}
add_filter('custom_menu_order', 'custom_menu_order'); // Activate custom_menu_order
add_filter('menu_order', 'custom_menu_order');

/**
 * Update name of posts in admin menu
 */
function edit_admin_menus() {
    global $menu;

    $menu[5][0] = 'News'; // Change Posts to News
}
add_action( 'admin_menu', 'edit_admin_menus' );