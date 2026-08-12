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

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 40,
			'width'       => 40,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
}
add_action( 'after_setup_theme', 'menume_setup' );

/**
 * Allow SVG uploads so the vector logo can be managed from the Media Library.
 */
function menume_allow_svg_upload( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'menume_allow_svg_upload' );

/**
 * Let WordPress recognize the real file type for uploaded SVGs.
 */
function menume_fix_svg_mime_check( $data, $file, $filename, $mimes ) {
	if ( ! empty( $data['ext'] ) ) {
		return $data;
	}

	$filetype = wp_check_filetype( $filename, $mimes );

	if ( 'svg' === $filetype['ext'] ) {
		$data['ext']  = 'svg';
		$data['type'] = 'image/svg+xml';
	}

	return $data;
}
add_filter( 'wp_check_filetype_and_ext', 'menume_fix_svg_mime_check', 10, 4 );

/**
 * Single source of truth for the logo image used everywhere on the site
 * (header, footer, mobile menu). Resolves to the Site Identity logo set in
 * the Customizer/Site Editor, falling back to the theme's bundled logo file
 * if none has been set. Every place that needs the logo URL outside of a
 * native `site-logo` block (which already reads Site Identity itself)
 * should read the --menume-logo-url CSS variable instead of hardcoding a path.
 */
function menume_get_logo_url() {
	$custom_logo_id = get_theme_mod( 'custom_logo' );

	if ( $custom_logo_id ) {
		$logo_url = wp_get_attachment_image_url( $custom_logo_id, 'full' );

		if ( $logo_url ) {
			return $logo_url;
		}
	}

	return get_theme_file_uri( '/assets/images/menume-logo.svg' );
}

/**
 * Expose the logo URL as a CSS custom property so all stylesheet consumers
 * (e.g. the mobile menu's decorative logo) stay in sync with Site Identity
 * without duplicating the URL anywhere.
 */
function menume_output_logo_css_variable() {
	printf(
		'<style id="menume-logo-var">:root{--menume-logo-url:url("%s");}</style>' . "\n",
		esc_url( menume_get_logo_url() )
	);
}
add_action( 'wp_head', 'menume_output_logo_css_variable', 5 );

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
 * Rewrite hardcoded internal links (header/footer nav, CTA buttons, on-page
 * anchors) to the current language's translated page when Polylang is active,
 * since header.html/footer.html are static block markup and cannot resolve
 * this per-language on the server.
 */
function menume_enqueue_lang_links_script() {
	if ( ! function_exists( 'pll_get_post_translations' ) || ! function_exists( 'pll_languages_list' ) ) {
		return;
	}

	$languages = pll_languages_list();
	if ( count( $languages ) < 2 ) {
		return;
	}

	$default_lang = function_exists( 'pll_default_language' ) ? pll_default_language() : 'de';

	// IDs of pages that exist in more than one language and are linked to
	// from static header/footer/CTA markup.
	$tracked_page_ids = array( 'front_page', 32, 125, 104, 96, 111, 121, 118, 3 );

	$page_map = array();

	foreach ( $tracked_page_ids as $page_id ) {
		$id = 'front_page' === $page_id ? (int) get_option( 'page_on_front' ) : (int) $page_id;
		if ( ! $id ) {
			continue;
		}

		$translations = pll_get_post_translations( $id );
		if ( count( $translations ) < 2 ) {
			continue;
		}

		if ( empty( $translations[ $default_lang ] ) ) {
			continue;
		}

		$default_url  = get_permalink( $translations[ $default_lang ] );
		$default_path = wp_parse_url( $default_url, PHP_URL_PATH );
		if ( ! $default_path ) {
			continue;
		}

		$entry = array();
		foreach ( $translations as $lang => $translated_id ) {
			$url = get_permalink( $translated_id );
			$entry[ $lang ] = wp_parse_url( $url, PHP_URL_PATH );
		}

		$page_map[ $default_path ] = $entry;

		if ( $id === (int) get_option( 'page_on_front' ) ) {
			$page_map['/'] = $entry;
		}
	}

	if ( empty( $page_map ) ) {
		return;
	}

	$script_path = get_theme_file_path( '/assets/js/lang-links.js' );
	$script_ver  = file_exists( $script_path ) ? (string) filemtime( $script_path ) : wp_get_theme()->get( 'Version' );

	wp_enqueue_script(
		'menume-lang-links',
		get_theme_file_uri( '/assets/js/lang-links.js' ),
		array(),
		$script_ver,
		true
	);

	wp_localize_script( 'menume-lang-links', 'menumeLangLinks', array( 'pageMap' => $page_map ) );
}
add_action( 'wp_enqueue_scripts', 'menume_enqueue_lang_links_script' );

/**
 * Translate the static German text baked into the header/footer template
 * parts (block themes render these from a single shared file per part, so
 * Polylang's per-language content system doesn't apply to them). This runs
 * server-side on the rendered HTML of those two template parts only.
 */
function menume_translate_template_part_text( $block_content, $block ) {
	if ( empty( $block['attrs']['slug'] ) || ! in_array( $block['attrs']['slug'], array( 'header', 'footer' ), true ) ) {
		return $block_content;
	}

	if ( ! function_exists( 'pll_current_language' ) ) {
		return $block_content;
	}

	$lang = pll_current_language();
	if ( ! $lang || 'de' === $lang ) {
		return $block_content;
	}

	$en_map = array(
		'>Lösungen<' => '>Solutions<',
		'>Preise<' => '>Pricing<',
		'>Über uns<' => '>About Us<',
		'>Kontakt<' => '>Contact<',
		'aria-label="Contact"' => 'aria-label="Contact"',
		'BEREIT FÜR DEIN DIGITALES MENÜ?' => 'READY FOR YOUR DIGITAL MENU?',
		'DEINE SPEISEKARTE.' => 'YOUR MENU.',
		'NEU GEDACHT.' => 'REIMAGINED.',
		'Präsentiere deine Gerichte moderner, ändere Inhalte in Sekunden und erreiche jeden Gast in seiner Sprache.' => 'Present your dishes in a more modern way, update content in seconds, and reach every guest in their own language.',
		'Demo anfragen' => 'Request a demo',
		'>Produkt<' => '>Product<',
		'>So funktioniert&#8217;s<' => '>How it works<',
		'>KI-Content<' => '>AI Content<',
		'>Hilfe<' => '>Help<',
		'>Rechtliches<' => '>Legal<',
		'>Impressum<' => '>Legal Notice<',
		'>Datenschutz<' => '>Privacy<',
		'>AGB<' => '>Terms<',
		'© 2026 MenuMe · Digitale Speisekarten für moderne Gastronomie.' => '© 2026 MenuMe · Digital menus for modern hospitality.',
	);

	$ar_map = array(
		'>Lösungen<' => '>الحلول<',
		'>Preise<' => '>الأسعار<',
		'>Über uns<' => '>من نحن<',
		'>Kontakt<' => '>تواصل معنا<',
		'aria-label="Contact"' => 'aria-label="تواصل معنا"',
		'BEREIT FÜR DEIN DIGITALES MENÜ?' => 'جاهز لقائمة طعامك الرقمية؟',
		'DEINE SPEISEKARTE.' => 'قائمتك.',
		'NEU GEDACHT.' => 'بمفهومٍ جديد.',
		'Präsentiere deine Gerichte moderner, ändere Inhalte in Sekunden und erreiche jeden Gast in seiner Sprache.' => 'اعرض أطباقك بأسلوبٍ أكثر عصرية، وحدِّث المحتوى في ثوانٍ، وتواصل مع كل زائرٍ بلغته.',
		'Demo anfragen' => 'اطلب عرضاً تجريبياً',
		'>Produkt<' => '>المنتج<',
		'>So funktioniert&#8217;s<' => '>كيف يعمل<',
		'>KI-Content<' => '>محتوى بالذكاء الاصطناعي<',
		'>Demo<' => '>عرض تجريبي<',
		'>Hilfe<' => '>المساعدة<',
		'>Rechtliches<' => '>قانوني<',
		'>Impressum<' => '>بيانات الناشر<',
		'>Datenschutz<' => '>الخصوصية<',
		'>AGB<' => '>الشروط والأحكام<',
		'© 2026 MenuMe · Digitale Speisekarten für moderne Gastronomie.' => '© 2026 Menume · قوائم طعام رقمية لقطاع الضيافة العصري.',
	);

	$map = 'ar' === $lang ? $ar_map : ( 'en' === $lang ? $en_map : array() );

	return $map ? strtr( $block_content, $map ) : $block_content;
}
add_filter( 'render_block_core/template-part', 'menume_translate_template_part_text', 10, 2 );

/**
 * Split the front-page hero title into a lifted first word and a typewritten
 * second line. This runs on rendered content so it also covers front-page
 * block markup that was saved before the pattern file changed.
 *
 * @param string $content Rendered page content.
 * @return string
 */
function menume_prepare_home_hero_title( $content ) {
	if ( is_admin() || ! is_front_page() || false === strpos( $content, 'menume-home-hero__title' ) ) {
		return $content;
	}

	$updated = preg_replace_callback(
		'~<h1\b(?=[^>]*\bmenume-home-hero__title\b)([^>]*)>(.*?)</h1>~is',
		function ( $matches ) {
			$attrs = $matches[1];
			$inner = $matches[2];

			if ( false !== strpos( $inner, 'menume-home-hero__title-word' ) ) {
				return $matches[0];
			}

			$plain_title = preg_replace( '~<br\s*/?>~i', ' ', $inner );
			$plain_title = wp_strip_all_tags( $plain_title );
			$plain_title = wp_specialchars_decode( $plain_title, ENT_QUOTES );
			$plain_title = preg_replace( '/\s+/u', ' ', trim( $plain_title ) );

			if ( ! is_string( $plain_title ) || '' === $plain_title ) {
				return $matches[0];
			}

			if ( ! preg_match( '/^(\S+)(?:\s+(.+))?$/us', $plain_title, $parts ) || empty( $parts[2] ) ) {
				return $matches[0];
			}

			$first_word = $parts[1];
			$rest_text  = $parts[2];

			if ( preg_match( '/\sclass=(["\'])(.*?)\1/is', $attrs, $class_match ) ) {
				$classes = preg_split( '/\s+/', trim( $class_match[2] ) );
				$classes = is_array( $classes ) ? $classes : array();

				if ( ! in_array( 'is-animated-title', $classes, true ) ) {
					$classes[] = 'is-animated-title';
				}

				$attrs = preg_replace(
					'/\sclass=(["\'])(.*?)\1/is',
					' class=' . $class_match[1] . esc_attr( implode( ' ', array_filter( $classes ) ) ) . $class_match[1],
					$attrs,
					1
				);
			} else {
				$attrs .= ' class="menume-home-hero__title is-animated-title"';
			}

			if ( preg_match( '/\saria-label=(["\']).*?\1/is', $attrs ) ) {
				$attrs = preg_replace(
					'/\saria-label=(["\']).*?\1/is',
					' aria-label="' . esc_attr( $plain_title ) . '"',
					$attrs,
					1
				);
			} else {
				$attrs .= ' aria-label="' . esc_attr( $plain_title ) . '"';
			}

			$animated_title  = '<span class="menume-home-hero__title-visual" aria-hidden="true">';
			$animated_title .= '<span class="menume-home-hero__title-word">' . esc_html( $first_word ) . '</span>';
			$animated_title .= '<span class="menume-home-hero__title-line" data-menume-typewriter="' . esc_attr( $rest_text ) . '">';
			$animated_title .= '<span class="menume-home-hero__title-typed"></span>';
			$animated_title .= '</span></span>';

			return '<h1' . $attrs . '>' . $animated_title . '</h1>';
		},
		$content,
		1
	);

	return is_string( $updated ) ? $updated : $content;
}
add_filter( 'the_content', 'menume_prepare_home_hero_title', 18 );

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

	$content_studio_script_path = get_theme_file_path( '/assets/js/home-content-studio.js' );
	$content_studio_script_ver  = file_exists( $content_studio_script_path ) ? (string) filemtime( $content_studio_script_path ) : wp_get_theme()->get( 'Version' );

	wp_enqueue_script(
		'menume-home-content-studio',
		get_theme_file_uri( '/assets/js/home-content-studio.js' ),
		array(),
		$content_studio_script_ver,
		array(
			'strategy'  => 'defer',
			'in_footer' => true,
		)
	);

	$ai_support_script_path = get_theme_file_path( '/assets/js/home-ai-support.js' );
	$ai_support_script_ver  = file_exists( $ai_support_script_path ) ? (string) filemtime( $ai_support_script_path ) : wp_get_theme()->get( 'Version' );

	wp_enqueue_script(
		'menume-home-ai-support',
		get_theme_file_uri( '/assets/js/home-ai-support.js' ),
		array(),
		$ai_support_script_ver,
		array(
			'strategy'  => 'defer',
			'in_footer' => true,
		)
	);

}
add_action( 'wp_enqueue_scripts', 'menume_enqueue_home_hero_script' );

/**
 * Render the AI support pattern as normal block markup.
 *
 * The front page content is currently stored in the page body, so this helper
 * lets the new section be injected after the existing how-it-works block
 * without requiring a database write while the local DB is offline.
 */
function menume_render_home_ai_support_section() {
	$pattern_path = get_theme_file_path( '/patterns/home-ai-support.php' );

	if ( ! file_exists( $pattern_path ) ) {
		return '';
	}

	ob_start();
	include $pattern_path;
	$pattern_content = ob_get_clean();

	return do_blocks( $pattern_content );
}

/**
 * Show the AI support section immediately after the home how-it-works section.
 *
 * If the section is later inserted into the page content manually, this filter
 * detects it and leaves the content untouched to avoid duplicates.
 *
 * @param string $content Rendered page content.
 * @return string
 */
function menume_inject_home_ai_support_section( $content ) {
	if ( is_admin() || ! is_front_page() || false !== strpos( $content, 'menume-ai-support' ) || false === strpos( $content, 'menume-process' ) ) {
		return $content;
	}

	$ai_support = menume_render_home_ai_support_section();
	if ( '' === $ai_support ) {
		return $content;
	}

	$updated = preg_replace(
		'/(<section\b(?=[^>]*\bmenume-process\b)[^>]*>.*?<\/section>)/s',
		'$1' . $ai_support,
		$content,
		1
	);

	return is_string( $updated ) ? $updated : $content;
}
add_filter( 'the_content', 'menume_inject_home_ai_support_section', 20 );

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
