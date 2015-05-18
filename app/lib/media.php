<?php

/**
 * Set default options when inserting media
 */
function defaultMediaSetup() {
    update_option('image_default_align', 'none' ); // No alignment
    update_option('image_default_link_type', 'none' ); // No link
    update_option('image_default_size', 'full' ); // Full size

}
add_action('after_setup_theme', 'defaultMediaSetup');