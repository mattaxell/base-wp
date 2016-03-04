<?php

/**
* Set local directory to save JSON files to
*/
function acf_local_save_dir($path) {
    $path = get_stylesheet_directory() . '/lib/acf/fields';
    return $path;
}

add_filter('acf/settings/save_json', 'acf_local_save_dir');

/**
 * Set local directory to load JSON files from
 */
function acf_local_local_dir( $paths ) {
    unset($paths[0]);
    $paths[] = get_stylesheet_directory() . '/lib/acf/fields';
    return $paths;
}

add_filter('acf/settings/load_json', 'acf_local_local_dir');

/**
 * Setup ACF options pages
 */
if(function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title'    => 'Site Options',
        'menu_title'    => 'Site Options',
        'menu_slug'     => 'site-options',
        'capability'    => 'edit_posts',
        'icon_url'      => 'dashicons-screenoptions',
        'redirect'      => true,
        'position'      => '4'
    ));

    //Sub Pages
    acf_add_options_sub_page(array(
        'page_title'  => 'General Info',
        'menu_title'  => 'General Info',
        'parent_slug' => 'site-options'
    ));
    acf_add_options_sub_page(array(
        'page_title'  => 'Analytics',
        'menu_title'  => 'Analytics',
        'parent_slug' => 'site-options'
    ));

}
