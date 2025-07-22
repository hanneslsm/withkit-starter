<?php

/**
 * withkit-starter functions and definitions
 *
 * @package withkit-starter
 * @since 0.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Enqueuing Styles and Scripts
require_once get_stylesheet_directory() . '/inc/enqueuing.php';

// Patterns Setup
require_once get_stylesheet_directory() . '/inc/block-patterns.php';

// Block Styles Setup
require_once get_stylesheet_directory() . '/inc/block-styles.php';
