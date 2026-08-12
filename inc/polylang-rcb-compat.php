<?php
/**
 * Compatibility shim for a Real Cookie Banner + Polylang fatal error.
 *
 * Real Cookie Banner bundles its own copy of a Polylang integration class
 * (vendor/devowl-wp/multilingual/src/PolyLang.php) that calls
 * pll_languages_list() without a function_exists() guard. In some request
 * contexts Polylang's own init sequence does not reach the point where it
 * defines its public API functions (src/api.php is only required once
 * Polylang decides which context class to instantiate), so
 * pll_languages_list() stays undefined and PHP throws a fatal error:
 * "Call to undefined function pll_languages_list()".
 *
 * This defines a minimal, read-only fallback for that one function, built
 * directly from the "language" taxonomy (which Polylang always registers
 * once active), so calling code gets a real language list instead of a
 * fatal error. It only takes effect if Polylang has not already defined the
 * real function itself, so normal Polylang behavior is untouched.
 *
 * @package MenuMe
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Defines a fallback pll_languages_list() if Polylang has not defined its
 * own version by the time this runs.
 */
function menume_maybe_define_pll_languages_list_fallback() {
	if ( function_exists( 'pll_languages_list' ) ) {
		return;
	}

	$active_plugins = (array) apply_filters( 'active_plugins', get_option( 'active_plugins', array() ) );
	$polylang_active = in_array( 'polylang/polylang.php', $active_plugins, true )
		|| in_array( 'polylang-pro/polylang.php', $active_plugins, true );

	if ( ! $polylang_active ) {
		// Polylang isn't active; nothing to shim.
		return;
	}

	/**
	 * Fallback for Polylang's pll_languages_list() when Polylang's own API
	 * has not been loaded yet in the current request. Reads the "language"
	 * taxonomy directly instead of relying on Polylang's internal model.
	 *
	 * @param array $args Same shape as Polylang's pll_languages_list(); only
	 *                     'fields' ('slug'|'name') is honored here.
	 * @return string[]
	 */
	function pll_languages_list( $args = array() ) {
		$fields = isset( $args['fields'] ) && 'name' === $args['fields'] ? 'name' : 'slug';

		$terms = get_terms(
			array(
				'taxonomy'   => 'language',
				'hide_empty' => false,
			)
		);

		if ( is_wp_error( $terms ) || empty( $terms ) ) {
			return array();
		}

		return wp_list_pluck( $terms, $fields );
	}
}
add_action( 'plugins_loaded', 'menume_maybe_define_pll_languages_list_fallback', 5 );
