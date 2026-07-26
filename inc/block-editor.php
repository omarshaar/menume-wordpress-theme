<?php
/**
 * MenuMe block and pattern registration.
 *
 * @package MenuMe
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Add a dedicated category for MenuMe blocks in the inserter.
 *
 * Custom blocks should use `"category": "menume"` in block.json.
 *
 * @param array $categories Existing block categories.
 * @return array
 */
function menume_register_block_category( $categories ) {
	foreach ( $categories as $category ) {
		if ( isset( $category['slug'] ) && 'menume' === $category['slug'] ) {
			return $categories;
		}
	}

	array_unshift(
		$categories,
		array(
			'slug'  => 'menume',
			'title' => __( 'MenuMe', 'menume' ),
			'icon'  => null,
		)
	);

	return $categories;
}
add_filter( 'block_categories_all', 'menume_register_block_category' );

/**
 * Register the MenuMe pattern category.
 */
function menume_register_pattern_category() {
	register_block_pattern_category(
		'menume-home',
		array(
			'label'       => __( 'MenuMe Home', 'menume' ),
			'description' => __( 'Patterns for the MenuMe landing page.', 'menume' ),
		)
	);

	register_block_pattern_category(
		'menume-kontakt',
		array(
			'label'       => __( 'MenuMe Kontakt', 'menume' ),
			'description' => __( 'Patterns for MenuMe contact pages.', 'menume' ),
		)
	);

	register_block_pattern_category(
		'menume-about',
		array(
			'label'       => __( 'MenuMe About', 'menume' ),
			'description' => __( 'Patterns for the MenuMe about page.', 'menume' ),
		)
	);

	register_block_pattern_category(
		'menume-demo',
		array(
			'label'       => __( 'MenuMe Demo', 'menume' ),
			'description' => __( 'Patterns for MenuMe demo request pages.', 'menume' ),
		)
	);

	register_block_pattern_category(
		'menume-legal',
		array(
			'label'       => __( 'MenuMe Legal', 'menume' ),
			'description' => __( 'Legal page patterns for MenuMe.', 'menume' ),
		)
	);
}
add_action( 'init', 'menume_register_pattern_category', 5 );

/**
 * Clear the theme pattern-file cache while working locally.
 *
 * WordPress caches the result of scanning the /patterns directory. During
 * theme development that cache can prevent newly created pattern files from
 * appearing in the inserter until the theme is switched or its cache expires.
 */
function menume_refresh_pattern_cache_in_development() {
	if ( in_array( wp_get_environment_type(), array( 'local', 'development' ), true ) ) {
		wp_get_theme()->delete_pattern_cache();
	}
}
add_action( 'after_setup_theme', 'menume_refresh_pattern_cache_in_development', 20 );

/**
 * Automatically register every custom block placed in /blocks/<block-name>.
 * Each block directory must contain a valid block.json file.
 */
function menume_register_custom_blocks() {
	$block_files = glob( get_theme_file_path( '/blocks/*/block.json' ) );

	if ( ! is_array( $block_files ) ) {
		return;
	}

	foreach ( $block_files as $block_file ) {
		register_block_type( dirname( $block_file ) );
	}
}
add_action( 'init', 'menume_register_custom_blocks' );
