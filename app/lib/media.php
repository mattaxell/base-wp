<?php

/**
 * Prevent media embeds from linking
 * to attachment by default
 */
function mediaImageLink() {
    $image_set = get_option( 'image_default_link_type' );

    if ($image_set !== 'none') {
        update_option('image_default_link_type', 'none');
    }
}

add_action('admin_init', 'mediaImageLink', 10);