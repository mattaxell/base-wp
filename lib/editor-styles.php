<?php

/**
 * Add custom styles to WYSIWYG editor for clearer content editing
 * Optional: Use of custom fonts served by Google
 */
function custom_editor_styles() {
    // Use font from Google Fonts
    // $font_url = str_replace(',', '%2C', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,400italic,600italic');

    // add_editor_style($font_url);
    add_editor_style('public/styles/editor.css');
}

add_action( 'admin_init', 'custom_editor_styles' );

/**
 * Reveal the hidden "Styles" dropdown in the advanced toolbar
 */
function editor_buttons($buttons) {
    array_unshift($buttons, 'styleselect');

    return $buttons;
}

add_filter('mce_buttons_2', 'editor_buttons');

/**
 * Add custom style formats/classes to dropdown
 * e.g. Lead paragraphs and buttons
 */
function mce_before_init($settings) {

    $style_formats = array(
        array(
            'title' => 'Lead',
            'selector' => 'p',
            'classes' => 'lead'
        ),
        array(
            'title' => 'Button',
            'selector' => 'a',
            'classes' => 'button'
        ),
        array(
            'title' => 'Button Primary',
            'selector' => 'a',
            'classes' => 'button--primary'
        ),
        array(
            'title' => 'Button Secondary',
            'selector' => 'a',
            'classes' => 'button--secondary'
        ),
        array(
            'title' => 'Button Alt',
            'selector' => 'a',
            'classes' => 'button--alt'
        )
    );

    $settings['style_formats'] = json_encode($style_formats);

    return $settings;
}

add_filter('tiny_mce_before_init', 'mce_before_init');