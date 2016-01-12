<?php

/**
 * Add custom styles to WYSIWYG editor for clearer content editing
 * Optional: Use of custom fonts served by Google
 */
function custom_editor_styles() {
    // Use font from Google Fonts
    // $font_url = str_replace(',', '%2C', '//fonts.googleapis.com/css?family=Merriweather:400,700,700italic,400italic|Source+Sans+Pro:400,400italic,600,600italic');

    // add_editor_style($font_url);
    add_editor_style('assets/css/editor.min.css');
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
            'title' => 'Small Button',
            'selector' => 'a',
            'classes' => 'button--small'
        ),
        array(
            'title' => 'Large Button',
            'selector' => 'a',
            'classes' => 'button--large'
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