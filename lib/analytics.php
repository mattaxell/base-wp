<?php

/**
 * Output GA tracking code to footer
 * Code inputted through custom field
 * in site options page
 * @return string GA tracking code
 */
function analytics_tracking_code() {
    if(get_field('ga_tracking_code', 'options')):
        echo get_field('ga_tracking_code', 'options');
    endif;
}

add_action('wp_footer', 'analytics_tracking_code', 100);