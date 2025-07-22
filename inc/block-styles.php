<?php
/**
 * Block Styles Setup
 *
 * Register block-style variations and link them to the handles
 * created in enqueuing.php
 *
 * @package withkit-starter
 * @since 0.1.0
 */

add_action( 'init', 'withkit_starter_register_block_style_variations', 10 );
function withkit_starter_register_block_style_variations() {

	$block_styles = [
		'core/paragraph' => [
			[ 'name' => 'with-test-block-style', 'label' => __( '☀️ Test Block Style',   'withkit-starter' ) ],
		]
	];

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style ) {
			register_block_style(
				$block,
				[
					'name'         => $style['name'],
					'label'        => $style['label'],
					'style_handle' => 'withkit-starter-block-style-' . str_replace( '/', '-', $block ) . '-' . $style['name'],
				]
			);
		}
	}
}
