<?php

/**
 * Get an excerpt of post with custom length
 * @param  Integer $length Number of words to return
 * @return String          The excerpt text
 */
function custom_excerpt( $length ) {
    $content = get_the_content();
    return wp_trim_words( $content , $length );
}

/**
 * Gets the first paragraph of the post's content
 * @param  String $content The post content
 * @return String $str     The post's first paragraph
 */

function get_first_para() {
    $content = get_the_content();
    $str = wpautop($content);
    $str = substr( $str, 0, strpos( $str, '</p>' ) + 4 );

    return trim($str);
}

/**
 * Strips first paragraph of unwanted tags and wraps in <p> tag
 * @param  String $content The post content
 * @return String $str     The formatted paragraph
 */

function first_para(){
    $content = get_the_content();
    $first_para = get_first_para($content);
    $str = strip_tags($first_para, '<em>');

    return $str;
}

/**
 * Displays the content minus the first paragraph
 * @param  String $content The post content
 * @return String $str     The remaining content
 */

function all_after_first_para($content){
    $str = wpautop( get_the_content() );
    $first_para = substr( $str, 0, strpos( $str, '</p>' ) + 4 );
    $str = str_replace($first_para, '', $str);
    $str = wpautop( $str );

    return $str;
}