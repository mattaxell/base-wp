<?php

// Deletes all CSS classes and id's, except for those listed in the array below
function custom_wp_nav_menu($var){

    return is_array($var) ? array_intersect($var, array(
        //List of allowed menu classes
        'current_page_item',
        'current_page_parent',
        'current_page_ancestor',
        'first',
        'last',
        'vertical',
        'horizontal'
        )
    ) : '';

}

add_filter('nav_menu_css_class', 'custom_wp_nav_menu');
add_filter('nav_menu_item_id', 'custom_wp_nav_menu');
add_filter('page_css_class', 'custom_wp_nav_menu');

// Replaces "current-menu-item" with "active"
function current_to_active($text){

    $replace = array(
        // List of menu item classes that should be changed to "active"
        'current_page_item' => 'active',
        'current_page_parent' => 'active',
        'current_page_ancestor' => 'active',
    );

    $text = str_replace(array_keys($replace), $replace, $text);
    return $text;
}

add_filter ('wp_nav_menu','current_to_active');

// Removes empty classes and removes the sub menu class
function strip_empty_classes($menu){

    $menu = preg_replace('/ class=""| class="sub-menu"/','',$menu);
    return $menu;

}

add_filter ('wp_nav_menu','strip_empty_classes');

/**
 * Update options from wp_nav_menu to
 * output cleanest markup possible
 * @param  string $location Theme location of menu required
 * @return string           Markup of menu
 */
function clean_nav_menu($location) {
    $args = array(
        'theme_location'  => $location,
        'menu'            => '',
        'container'       => '',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => '',
        'menu_id'         => '',
        'items_wrap'      => '<ul>%3$s</ul>'
    );

    echo wp_nav_menu($args);
}

/**
 * Return raw list of links from a
 * wp_nav_menu by passing theme location
 * @param  string $location Name of the menu
 * @return string           List of anchor tags
 */
function menu_item_links($location, $list_items = true) {
    if(($locations = get_nav_menu_locations()) && isset($locations[$location])) {
        $menu = wp_get_nav_menu_object($locations[$location]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);

        foreach((array) $menu_items as $key => $menu_item) {
            $url = $menu_item->url;
            $title = $menu_item->title;
            if($list_items) { echo '<li>'; }
            echo '<a href="'. $url .'">'. $title .'</a>' ."\n";
            if($list_items) { echo '</li>'; }
        }
    }
}