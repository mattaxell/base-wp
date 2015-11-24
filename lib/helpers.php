<?php

/**
 * Simply output results of var_dump function
 * inside preformatted tags for easy reading
 * @param  mixed $data Data to explore
 * @return str       Result of data inside <pre> tags
 */
function dump($data) {
    echo '<pre>' . var_dump($data) . '</pre>';
}

/**
 * Include file from /inc directory
 * @param  str $path File name/path
 * @return str       Full path to included file
 */
function get_layout($path) {
    $theme_root = get_stylesheet_directory();
    $file = $theme_root . '/inc/' . $path . '.php';

    include $file;
}