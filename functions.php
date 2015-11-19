<?php

// Define constants
define('THEME', get_stylesheet_directory_uri());
define('THEME_PATH', realpath(__DIR__));
define('IMG', THEME . '/public/img');
define('STYLES', THEME . 'public/styles');
define('JS', THEME . '/public/js');

// Include library items
include_once('app/lib/admin-menu.php');
include_once('app/lib/clean-nav.php');
include_once('app/lib/custom-editor-styles.php');
include_once('app/lib/custom-login.php');
include_once('app/lib/custom-excerpts.php');
include_once('app/lib/editor.php');
include_once('app/lib/helpers.php');
include_once('app/lib/media.php');
include_once('app/lib/wp-setup.php');

// Configure use of ACF Pro
include_once('app/acf/acf-config.php');