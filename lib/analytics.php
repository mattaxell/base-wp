<?php

/**
 * Output GA tracking code to footer
 * Code inputted through custom field
 * in site options page
 * @return string GA tracking code
 */
function analytics_tracking_code() {
    if(get_field('google_analytics', 'option') && !current_user_role_is('administrator', 'editor')) {
        echo get_field('ga_tracking_code', 'options');
    }
}

add_action('wp_footer', 'analytics_tracking_code', 100);