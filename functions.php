<?php

/**
 * Functions related to the theme.
 */


if (!defined('TIGC_THEME_DIR_PATH')) {
    define('TIGC_THEME_DIR_PATH', untrailingslashit(get_stylesheet_directory()));
}
if (!defined('TIGC_THEME_DIR_URL')) {
    define('TIGC_THEME_DIR_URL', untrailingslashit(get_stylesheet_directory_uri()));
}

require_once TIGC_THEME_DIR_PATH . '/inc/register-block-pattern-categories.php';
