<?php

// Define constants
define('THEME', get_stylesheet_directory_uri());
define('THEME_PATH', realpath(__DIR__));
define('IMG', THEME . '/public/img');
define('STYLES', THEME . '/public/styles');
define('JS', THEME . '/public/js');

// Include library items
include_once('lib/admin-menu.php');
include_once('lib/analytics.php');
include_once('lib/clean-nav.php');
include_once('lib/custom-login.php');
include_once('lib/custom-excerpts.php');
include_once('lib/disable-rest-api.php');
include_once('lib/editor-styles.php');
include_once('lib/enqueue-scripts.php');
include_once('lib/helpers.php');
include_once('lib/media.php');
include_once('lib/post-types.php');
include_once('lib/shortcut-icons.php');
include_once('lib/wp-setup.php');

// Configure use of ACF Pro
include_once('lib/acf/acf-config.php');