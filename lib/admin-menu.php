<?php

/**
 * Clean up admin bar
 */
function annointed_admin_bar_remove() {
    global $wp_admin_bar;

    /* Remove their stuff */
    $wp_admin_bar->remove_menu('wp-logo');
    $wp_admin_bar->remove_menu('comments');

    // Remove 'How are you <user>? text'
    $user_id = get_current_user_id();
    $avatar = get_avatar( $user_id, 16 );
    $wp_admin_bar->add_menu( array(
        'id' => 'my-account',
        'title' => ' ' . $avatar )
    );
}

add_action('wp_before_admin_bar_render', 'annointed_admin_bar_remove', 0);

/**
 * Update name of posts in admin menu
 */
function edit_admin_menus() {
    global $menu;

    $menu[5][0] = 'News'; // Change Posts to News
}
add_action( 'admin_menu', 'edit_admin_menus' );