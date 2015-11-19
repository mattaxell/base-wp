<?php

/**
 * Add custom styles to WYSIWYG editor for clearer content editing
 * Optional: Use of custom fonts served by Google
 */
function vl_add_editor_styles() {
    // Use font from Google Fonts
    // $font_url = str_replace(',', '%2C', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,400italic,600italic');
    // add_editor_style($font_url);

    add_editor_style( 'public/styles/editor.css' );
}

add_action( 'admin_init', 'vl_add_editor_styles' );