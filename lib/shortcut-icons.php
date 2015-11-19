<?php

function site_shortcut_icons() {
    echo '<link rel="shortcut icon" href="' . IMG . '/icons/favicon.ico">';
    echo '<link rel="icon" sizes="16x16 32x32 64x64" href="' . IMG . '/icons/favicon.ico">';
    echo '<link rel="icon" type="image/png" sizes="196x196" href="' . IMG . '/icons/favicon-192.png">';
    echo '<link rel="icon" type="image/png" sizes="160x160" href="' . IMG . '/icons/favicon-160.png">';
    echo '<link rel="icon" type="image/png" sizes="96x96" href="' . IMG . '/icons/favicon-96.png">';
    echo '<link rel="icon" type="image/png" sizes="64x64" href="' . IMG . '/icons/favicon-64.png">';
    echo '<link rel="icon" type="image/png" sizes="32x32" href="' . IMG . '/icons/favicon-32.png">';
    echo '<link rel="icon" type="image/png" sizes="16x16" href="' . IMG . '/icons/favicon-16.png">';
    echo '<link rel="apple-touch-icon" href="' . IMG . '/icons/favicon-57.png">';
    echo '<link rel="apple-touch-icon" sizes="114x114" href="' . IMG . '/icons/favicon-114.png">';
    echo '<link rel="apple-touch-icon" sizes="72x72" href="' . IMG . '/icons/favicon-72.png">';
    echo '<link rel="apple-touch-icon" sizes="144x144" href="' . IMG . '/icons/favicon-144.png">';
    echo '<link rel="apple-touch-icon" sizes="60x60" href="' . IMG . '/icons/favicon-60.png">';
    echo '<link rel="apple-touch-icon" sizes="120x120" href="' . IMG . '/icons/favicon-120.png">';
    echo '<link rel="apple-touch-icon" sizes="76x76" href="' . IMG . '/icons/favicon-76.png">';
    echo '<link rel="apple-touch-icon" sizes="152x152" href="' . IMG . '/icons/favicon-152.png">';
    echo '<link rel="apple-touch-icon" sizes="180x180" href="' . IMG . '/icons/favicon-180.png">';
}

add_action('wp_head', 'site_shortcut_icons');