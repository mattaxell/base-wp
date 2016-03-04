<?php

/**
 * Simply output results of var_dump function
 * inside preformatted tags for easy reading
 * @param  mixed $data Data to explore
 * @return str       Result of data inside <pre> tags
 */
function dump($data) {
    echo '<pre>' , var_dump($data) , '</pre>';
}

/**
 * Include file from /inc directory
 * @param  str $path File name/path
 * @return str       Full path to included file
 */
function get_partial($path) {
    $theme_root = get_stylesheet_directory();
    $file = $theme_root . '/inc/' . $path . '.php';

    include $file;
}

/**
 * Conditional check for the current user role
 * @param  array $roles List of roles to check
 * @return bool         Does query match current user role
 */
function current_user_role_is($roles) {
    // Current user object
    $user = wp_get_current_user();
    // Array of roles to check for
    $allowed_roles = array($roles);

    // If roles is matched in array return true, otherwise return false
    if(array_intersect($allowed_roles, $user->roles)) {
        return true;
    }
    return false;
}

/**
 * Get various info from general
 * company options page
 * @param  str $type Info to retrieve
 * @return mixed     The field, mainly text fields
 */
function company_info($type) {
    $type = 'company_' . $type;
    return get_field($type, 'option');
}

/**
 * List the terms of a post from a specific taxonomy
 * @param  integer $id  The ID of the post
 * @param  string  $tax Name of the taxonomy to grab the terms of
 */
function list_terms($id = 0, $tax = '') {
    $terms_as_text = get_the_term_list($id, $tax, '', ', ');
    if (!empty($terms_as_text)) {
        echo strip_tags($terms_as_text);
    }
}

/**
 * Wrap video embeds in blog posts
 * in a surrounding div to style
 */
function responsive_embeds($content){
    return preg_replace('/<iframe (.*)>\s*/iU', '<div class="responsive-embed"><iframe \1></iframe></div>', $content);
}
add_filter('the_content', 'responsive_embeds');