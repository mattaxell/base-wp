<?php

/**
 * Enqueue all necessary scripts to site
 * and define dependencies
 */
function queue_scripts() {

    // De-register default jQuery inclusion
    wp_deregister_script('jquery');
    // Manaully queue jQuery
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js', '', null, true);
    // Load Google maps API on contact page only
    // if(is_page('contact')) { wp_enqueue_script('google_maps', 'https://maps.googleapis.com/maps/api/js?key=&sensor=false&extension=.js', array('jquery'), null, true); }
    // Queue main scripts file
    wp_enqueue_script('main_js', get_template_directory_uri() . '/public/js/main.min.js', array('jquery'), null, true);
}

if (!is_admin()) {
    add_action('wp_enqueue_scripts', 'queue_scripts', 11);
}

/**
 * Prevent wp-embed script
 * unless on single blog post, where it might be useful
 */
function no_wp_embed() {
    if(!is_singular()) {
        wp_dequeue_script('wp-embed');
    }
}

add_action('wp_footer', 'no_wp_embed');