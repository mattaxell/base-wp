<?php

/**
 * Set default options when inserting media
 */
function default_media_options() {
    update_option('image_default_align', 'none' ); // No alignment
    update_option('image_default_link_type', 'none' ); // No link
    update_option('image_default_size', 'large' ); // Full size

    // Update default size of 'large' to 1500px wide, unlimited height
    update_option('large_size_w', 1500);
    update_option('large_size_h', 9999);

}

add_action('after_setup_theme', 'default_media_options');