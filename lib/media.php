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

/**
 * Add all necessary image sizes
 */
if(function_exists('add_image_size')) {
    add_image_size('square-large', 800, 800, true);
    add_image_size('square', 400, 400, true);
    add_image_size('avatar', 150, 150, true);
}

/**
 * Retrieve the posts image as a url
 * @param  string $size Name of the thumbnail size to return
 * @return string       URL of image in requested size
 */
function get_post_img_url($size = 'full') {
    global $post;

    $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), $size);
    $url = $thumb['0'];

    return $url;
}