<?php
/**
 * Minimal, dependency-free SEO essentials.
 *
 * No SEO plugin (Yoast/RankMath) is installed. These hooks provide the
 * baseline meta description, Open Graph/Twitter tags and structured data
 * that would otherwise be missing entirely.
 *
 * @package MenuMe
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Build a short meta description for the current view.
 */
function menume_get_meta_description() {
	if ( is_front_page() ) {
		return __( 'MenuMe ist die KI-gestützte Plattform für Restaurants: digitale Speisekarte, Website, Foodfotos, Social-Media-Content und Reservierungen – alles an einem Ort.', 'menume' );
	}

	if ( is_singular() ) {
		$post = get_queried_object();

		if ( $post instanceof WP_Post ) {
			if ( ! empty( $post->post_excerpt ) ) {
				return wp_strip_all_tags( $post->post_excerpt );
			}

			$excerpt = wp_trim_words( wp_strip_all_tags( $post->post_content ), 30 );

			if ( ! empty( $excerpt ) ) {
				return $excerpt;
			}
		}
	}

	return get_bloginfo( 'description' );
}

/**
 * Output meta description and Open Graph / Twitter Card tags.
 */
function menume_output_meta_tags() {
	$description = menume_get_meta_description();
	$url         = is_front_page() ? home_url( '/' ) : get_permalink();
	$title       = wp_get_document_title();
	$image       = get_theme_file_uri( '/screenshot.png' );

	if ( is_singular() && has_post_thumbnail() ) {
		$thumbnail = get_the_post_thumbnail_url( null, 'large' );

		if ( $thumbnail ) {
			$image = $thumbnail;
		}
	}

	printf( '<meta name="description" content="%s" />' . "\n", esc_attr( $description ) );
	printf( '<meta property="og:type" content="website" />' . "\n" );
	printf( '<meta property="og:site_name" content="%s" />' . "\n", esc_attr( get_bloginfo( 'name' ) ) );
	printf( '<meta property="og:title" content="%s" />' . "\n", esc_attr( $title ) );
	printf( '<meta property="og:description" content="%s" />' . "\n", esc_attr( $description ) );
	printf( '<meta property="og:url" content="%s" />' . "\n", esc_url( $url ) );
	printf( '<meta property="og:image" content="%s" />' . "\n", esc_url( $image ) );
	printf( '<meta name="twitter:card" content="summary_large_image" />' . "\n" );
	printf( '<meta name="twitter:title" content="%s" />' . "\n", esc_attr( $title ) );
	printf( '<meta name="twitter:description" content="%s" />' . "\n", esc_attr( $description ) );
	printf( '<meta name="twitter:image" content="%s" />' . "\n", esc_url( $image ) );
}
add_action( 'wp_head', 'menume_output_meta_tags', 1 );

/**
 * Output Organization + SoftwareApplication JSON-LD structured data on the front page.
 */
function menume_output_structured_data() {
	if ( ! is_front_page() ) {
		return;
	}

	$data = array(
		'@context' => 'https://schema.org',
		'@graph'   => array(
			array(
				'@type' => 'Organization',
				'@id'   => home_url( '/#organization' ),
				'name'  => get_bloginfo( 'name' ),
				'url'   => home_url( '/' ),
				'logo'  => get_theme_file_uri( '/screenshot.png' ),
			),
			array(
				'@type'           => 'SoftwareApplication',
				'name'            => get_bloginfo( 'name' ),
				'applicationCategory' => 'BusinessApplication',
				'operatingSystem' => 'Web',
				'description'     => menume_get_meta_description(),
				'url'             => home_url( '/' ),
				'offers'          => array(
					'@type'         => 'Offer',
					'url'           => home_url( '/pricing' ),
					'priceCurrency' => 'EUR',
				),
			),
		),
	);

	echo '<script type="application/ld+json">' . wp_json_encode( $data ) . '</script>' . "\n";
}
add_action( 'wp_head', 'menume_output_structured_data', 2 );
