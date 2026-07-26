<?php
/**
 * Theme setup and assets.
 *
 * @package MenuMe
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Configure theme supports.
 */
function menume_setup() {
	load_theme_textdomain( 'menume', get_theme_file_path( '/languages' ) );

	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'menume_setup' );

/**
 * Load the base stylesheet on the front end.
 */
function menume_enqueue_styles() {
	$stylesheet_path = get_stylesheet_directory() . '/style.css';
	$stylesheet_ver  = file_exists( $stylesheet_path ) ? (string) filemtime( $stylesheet_path ) : wp_get_theme()->get( 'Version' );

	wp_enqueue_style(
		'menume-style',
		get_stylesheet_uri(),
		array(),
		$stylesheet_ver
	);
}
add_action( 'wp_enqueue_scripts', 'menume_enqueue_styles' );

/**
 * Load the home hero scroll interaction on the front page.
 */
function menume_enqueue_home_hero_script() {
	if ( ! is_front_page() ) {
		return;
	}

	$script_path = get_theme_file_path( '/assets/js/home-hero.js' );
	$script_ver  = file_exists( $script_path ) ? (string) filemtime( $script_path ) : wp_get_theme()->get( 'Version' );

	wp_enqueue_script(
		'menume-home-hero',
		get_theme_file_uri( '/assets/js/home-hero.js' ),
		array(),
		$script_ver,
		array(
			'strategy'  => 'defer',
			'in_footer' => true,
		)
	);

	$solutions_script_path = get_theme_file_path( '/assets/js/home-solutions.js' );
	$solutions_script_ver  = file_exists( $solutions_script_path ) ? (string) filemtime( $solutions_script_path ) : wp_get_theme()->get( 'Version' );

	wp_enqueue_script(
		'menume-home-solutions',
		get_theme_file_uri( '/assets/js/home-solutions.js' ),
		array(),
		$solutions_script_ver,
		array(
			'strategy'  => 'defer',
			'in_footer' => true,
		)
	);

	$enhancer_script_path = get_theme_file_path( '/assets/js/home-food-enhancer.js' );
	$enhancer_script_ver  = file_exists( $enhancer_script_path ) ? (string) filemtime( $enhancer_script_path ) : wp_get_theme()->get( 'Version' );

	wp_enqueue_script(
		'menume-home-food-enhancer',
		get_theme_file_uri( '/assets/js/home-food-enhancer.js' ),
		array(),
		$enhancer_script_ver,
		array(
			'strategy'  => 'defer',
			'in_footer' => true,
		)
	);
}
add_action( 'wp_enqueue_scripts', 'menume_enqueue_home_hero_script' );

/**
 * Load the pricing billing switch.
 */
function menume_enqueue_pricing_script() {
	$script_path = get_theme_file_path( '/assets/js/pricing.js' );
	$script_ver  = file_exists( $script_path ) ? (string) filemtime( $script_path ) : wp_get_theme()->get( 'Version' );

	wp_enqueue_script(
		'menume-pricing',
		get_theme_file_uri( '/assets/js/pricing.js' ),
		array(),
		$script_ver,
		array(
			'strategy'  => 'defer',
			'in_footer' => true,
		)
	);
}
add_action( 'wp_enqueue_scripts', 'menume_enqueue_pricing_script' );
