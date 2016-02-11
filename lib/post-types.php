<?php

/**
 * Create custom post type labels
 * @param  str $singular Singular name
 * @param  str $plural   Plural name, leave blank to append 's' to singular
 * @return array         Full list of required labels
 */
function post_type_labels($singular, $plural = null) {

    if ($plural === null) {
        $plural = $singular . 's';
    }

    $labels = array(
        'name'               => $plural,
        'singular_name'      => $singular,
        'menu_name'          => $plural,
        'name_admin_bar'     => $singular,
        'add_new'            => 'Add New '.$singular,
        'add_new_item'       => 'Add New '.$singular,
        'new_item'           => 'New '.$singular,
        'edit_item'          => 'Edit '.$singular,
        'view_item'          => 'View '.$singular,
        'all_items'          => 'All '.$plural,
        'search_items'       => 'Search '.$plural,
        'parent_item_colon'  => 'Parent '.$plural.': ',
        'not_found'          => 'No '.$plural.' found.',
        'not_found_in_trash' => 'No '.$plural.' found in Trash.'
    );

    return $labels;
}