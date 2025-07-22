<?php
/**
 * Patterns Setup
 *
 * @package withkit-starter
 * @since 0.1.0
 */

/**
 * Register custom pattern categories
 * @link https://developer.wordpress.org/themes/patterns/registering-patterns/#registering-a-pattern-category
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Only add/extend; don't redeclare parent function.
function withkit_starter_child_register_pattern_categories() {
	register_block_pattern_category(
		'withkit-starter/test',
		array(
			'label'       => __( '☀️ Test Category', 'withkit-starter' ),
			'description' => __( 'Test patterns for WithKit Starter.', 'withkit-starter' ),
		)
	);
}
add_action( 'init', 'withkit_starter_child_register_pattern_categories', 1 );
