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