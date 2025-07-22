<?php
/**
 * Enqueue frontend and editor styles/scripts for the child theme.
 *
 * Loads child build assets where present; falls back to parent assets otherwise.
 * Also removes the parent theme's enqueue callbacks to prevent duplicate loads.
 *
 * @package withkit-starter
 * @since 0.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Remove parent enqueue callbacks so we can control load order/assets.
 *
 * Safe to call even if parent functions are missing; remove_action() will noop.
 */
remove_action( 'enqueue_block_assets', 'withkit_starter_enqueue_scripts' );
remove_action( 'wp_enqueue_scripts', 'withkit_starter_enqueue_frontend_styles' );
remove_action( 'enqueue_block_editor_assets', 'withkit_starter_enqueue_editor_styles' );
remove_action( 'init', 'withkit_starter_enqueue_block_styles' );

/**
 * Helper: load an asset manifest (.asset.php) if it exists in child or parent.
 *
 * @param string $relative Relative path from theme root (e.g. 'build/css/global.asset.php').
 * @return array { 'dependencies' => array, 'version' => string|bool }
 */
function withkit_starter_get_asset_meta( $relative ) {
	$child_path  = get_stylesheet_directory() . '/' . $relative;
	$parent_path = get_template_directory() . '/' . $relative;

	$path = file_exists( $child_path ) ? $child_path : ( file_exists( $parent_path ) ? $parent_path : '' );

	if ( $path ) {
		$asset = require $path; // returns array( 'dependencies' => [], 'version' => '' ) from WP build tools.
		if ( isset( $asset['dependencies'], $asset['version'] ) ) {
			return $asset;
		}
	}

	// Fallback: no manifest; provide sane defaults.
	return array(
		'dependencies' => array(),
		'version'      => file_exists( $path ) ? filemtime( $path ) : false,
	);
}

/**
 * Enqueue global CSS + JS for both frontend and editor.
 */
function withkit_starter_enqueue_assets() {
	// CSS.
	$global_css_rel   = 'build/css/global.css';
	$global_css_uri   = get_theme_file_uri( $global_css_rel );   // child override -> parent fallback.
	$global_css_asset = withkit_starter_get_asset_meta( 'build/css/global.asset.php' );

	wp_enqueue_style(
		'withkit-starter-global-style',
		$global_css_uri,
		$global_css_asset['dependencies'],
		$global_css_asset['version']
	);

	// JS.
	$global_js_rel   = 'build/js/global.js';
	$global_js_uri   = get_theme_file_uri( $global_js_rel );
	$global_js_asset = withkit_starter_get_asset_meta( 'build/js/global.asset.php' );

	wp_enqueue_script(
		'withkit-starter-global-script',
		$global_js_uri,
		$global_js_asset['dependencies'],
		$global_js_asset['version'],
		true
	);
}
add_action( 'enqueue_block_assets', 'withkit_starter_enqueue_assets' );

/**
 * Enqueue screen.css on the frontend only.
 */
function withkit_starter_enqueue_frontend_styles() {
	if ( is_admin() ) {
		return;
	}

	$screen_rel   = 'build/css/screen.css';
	$screen_uri   = get_theme_file_uri( $screen_rel );
	$screen_asset = withkit_starter_get_asset_meta( 'build/css/screen.asset.php' );

	wp_enqueue_style(
		'withkit-starter-screen-style',
		$screen_uri,
		$screen_asset['dependencies'],
		$screen_asset['version']
	);
}
add_action( 'wp_enqueue_scripts', 'withkit_starter_enqueue_frontend_styles' );

/**
 * Enqueue editor.css in the block editor only.
 */
function withkit_starter_enqueue_editor_styles() {
	$editor_rel   = 'build/css/editor.css';
	$editor_uri   = get_theme_file_uri( $editor_rel );
	$editor_asset = withkit_starter_get_asset_meta( 'build/css/editor.asset.php' );

	wp_enqueue_style(
		'withkit-starter-editor-style',
		$editor_uri,
		$editor_asset['dependencies'],
		$editor_asset['version']
	);
}
add_action( 'enqueue_block_editor_assets', 'withkit_starter_enqueue_editor_styles' );

/**
 * Auto-enqueue per-block CSS files.
 *
 * Expects files in build/css/blocks/*.css. File names must follow the pattern
 * "namespace-blockname.css" where the first hyphen splits namespace/block.
 * Example: "core-paragraph.css" -> "core/paragraph".
 *
 * Child files override parent files automatically.
 */
function withkit_starter_enqueue_block_styles() {
	// Collect all matching files from child + parent; child takes precedence.
	$child_blocks_dir  = trailingslashit( get_stylesheet_directory() ) . 'build/css/blocks/';
	$parent_blocks_dir = trailingslashit( get_template_directory() ) . 'build/css/blocks/';

	$paths = array();

	if ( is_dir( $parent_blocks_dir ) ) {
		$paths = glob( $parent_blocks_dir . '*.css' );
	}

	// Merge in child; child should override parent by key (filename).
	if ( is_dir( $child_blocks_dir ) ) {
		$child_paths = glob( $child_blocks_dir . '*.css' );
		$paths       = array_merge( $paths, $child_paths );
	}

	if ( empty( $paths ) ) {
		return;
	}

	// Index by filename so child overrides parent.
	$by_file = array();
	foreach ( $paths as $path ) {
		$filename         = basename( $path ); // e.g. namespace-block.css
		$by_file[ $filename ] = $path; // later (child) overwrite earlier (parent) if same name.
	}

	foreach ( $by_file as $filename => $path ) {
		// Map filename -> block name: replace first hyphen with slash.
		$block_name = preg_replace( '/-/', '/', basename( $filename, '.css' ), 1 );

		// Corresponding URI (child has priority).
		$rel_path = 'build/css/blocks/' . $filename;
		$src      = get_theme_file_uri( $rel_path );

		wp_enqueue_block_style(
			$block_name,
			array(
				'handle' => 'withkit-starter-' . $filename . '-style',
				'src'    => $src,
				// Version from filemtime of actual resolved path.
				'ver'    => file_exists( $path ) ? filemtime( $path ) : false,
			)
		);
	}
}
add_action( 'init', 'withkit_starter_enqueue_block_styles' );
