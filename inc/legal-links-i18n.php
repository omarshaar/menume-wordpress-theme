<?php
/**
 * Keeps internal navigation-link hrefs (header + footer menus) on the
 * currently selected Polylang language instead of always pointing to the
 * default-language (German) page.
 *
 * The header.html and footer.html template parts hard-code links such as
 * "/preise" or "/datenschutz", which are the German (default language,
 * unprefixed) URLs. This filter rewrites those to the current language's
 * translated URL at render time, preserving any #fragment.
 *
 * @package MenuMe
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Default-language (German) path => post ID for every page targeted by the
 * hard-coded links in header.html / footer.html.
 *
 * @return array<string,int>
 */
function menume_nav_link_path_map() {
	return array(
		'/'               => 32,  // Home.
		'/preise'         => 125, // Preise.
		'/ueber-uns'      => 104, // Über uns.
		'/demo'           => 111, // Demo.
		'/kontakt'        => 96,  // Kontakt.
		'/impressum'      => 121, // Impressum.
		'/datenschutz'    => 3,   // Datenschutz.
		'/agb'            => 118, // AGB.
		'/cookie-richtlinie' => 134, // Cookie-Richtlinie.
	);
}

/**
 * Rewrites internal href values in navigation-link blocks to the
 * translated URL for the current language, preserving any #fragment.
 *
 * @param string $block_content Rendered block HTML.
 * @param array  $block         Parsed block data.
 * @return string
 */
function menume_localize_nav_links( $block_content, $block ) {
	if ( ! function_exists( 'pll_current_language' ) || ! function_exists( 'pll_get_post' ) ) {
		return $block_content;
	}

	if ( ! preg_match_all( '/href="([^"]+)"/', $block_content, $matches ) ) {
		return $block_content;
	}

	$current_lang = pll_current_language();
	$path_map     = menume_nav_link_path_map();

	foreach ( array_unique( $matches[1] ) as $href ) {
		if ( 0 === strpos( $href, '#' ) ) {
			continue;
		}

		$fragment = '';
		$path     = $href;
		if ( false !== strpos( $href, '#' ) ) {
			list( $path, $fragment ) = explode( '#', $href, 2 );
			$fragment                = '#' . $fragment;
		}
		$path = '' === $path ? '/' : $path;

		if ( ! isset( $path_map[ $path ] ) ) {
			continue;
		}

		$default_post_id = $path_map[ $path ];
		$translated_id    = pll_get_post( $default_post_id, $current_lang );
		if ( ! $translated_id ) {
			continue;
		}

		$translated_url = get_permalink( $translated_id );
		if ( ! $translated_url ) {
			continue;
		}

		$new_href = $fragment ? trailingslashit( $translated_url ) . $fragment : $translated_url;

		$block_content = str_replace(
			'href="' . $href . '"',
			'href="' . esc_url( $new_href ) . '"',
			$block_content
		);
	}

	return $block_content;
}
add_filter( 'render_block_core/navigation-link', 'menume_localize_nav_links', 10, 2 );

/**
 * Localize raw HTML links and button links in the shared header and footer.
 * Navigation-link blocks are handled above, but these template parts also
 * contain links inside core/html and core/button blocks.
 *
 * @param string $block_content Rendered template part HTML.
 * @param array  $block         Parsed block data.
 * @return string
 */
function menume_localize_template_part_links( $block_content, $block ) {
	if ( empty( $block['attrs']['slug'] ) || ! in_array( $block['attrs']['slug'], array( 'header', 'footer' ), true ) ) {
		return $block_content;
	}

	return menume_localize_nav_links( $block_content, $block );
}
add_filter( 'render_block_core/template-part', 'menume_localize_template_part_links', 20, 2 );

/**
 * Keep logo and site-title links on the canonical language home URL.
 *
 * @param string $block_content Rendered block HTML.
 * @return string
 */
function menume_localize_brand_home_link( $block_content ) {
	if ( ! function_exists( 'pll_home_url' ) || false === strpos( $block_content, 'href=' ) ) {
		return $block_content;
	}

	return preg_replace(
		'/href="[^"]*"/',
		'href="' . esc_url( pll_home_url() ) . '"',
		$block_content,
		1
	);
}
add_filter( 'render_block_core/site-logo', 'menume_localize_brand_home_link' );
add_filter( 'render_block_core/site-title', 'menume_localize_brand_home_link' );
