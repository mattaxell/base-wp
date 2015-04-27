<?php

add_filter('mce_buttons_2', 'tw_editor_buttons');

function tw_editor_buttons($buttons) {
    array_unshift($buttons, 'styleselect');
    return $buttons;
}

add_filter('tiny_mce_before_init', 'tw_mce_before_init');

function tw_mce_before_init($settings) {
    $style_formats = array(
        array(
            'title' => 'Lead',
            'selector' => 'p',
            'classes' => 'post__lead'
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