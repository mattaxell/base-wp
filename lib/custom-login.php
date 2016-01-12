<?php

/**
 * Output custom stylesheet to head of login page
 * @return str html link to stylesheet
 */
function custom_login() {
    $files = '<link rel="stylesheet" href="'.get_bloginfo('template_directory').'/assets/css/login.min.css" />';
    // Echo link to custom stylesheet
    echo $files;
}

add_action('login_head', 'custom_login');

/**
 * Remove shake effect on unsuccesful login attempts
 */
function no_shakes_please() {
    remove_action('login_head', 'wp_shake_js', 12);
}

add_action('login_head', 'no_shakes_please');

/**
 * Remove link to wordpress.org from login logo
 * @return str site home url
 */
function my_login_logo_url() {
    return get_bloginfo( 'url' );
}

add_filter( 'login_headerurl', 'my_login_logo_url' );

/**
 * Remove reference to Wordpress from login logo title
 * @return str site's title
 */
function my_login_logo_url_title() {
    return 'Return to ' . get_bloginfo('name');
}

add_filter( 'login_headertitle', 'my_login_logo_url_title' );