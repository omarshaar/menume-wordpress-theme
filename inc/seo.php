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
 * Return the public URL that search engines should use for a translated page.
 * Polylang front-page translations are served at the language home URL rather
 * than at their underlying page slugs.
 *
 * @param int $post_id Page ID.
 * @return string
 */
function menume_get_localized_canonical_url( $post_id ) {
	$post_id = (int) $post_id;

	if ( ! $post_id ) {
		return home_url( '/' );
	}

	if ( function_exists( 'pll_get_post' ) && function_exists( 'pll_get_post_language' ) && function_exists( 'pll_home_url' ) ) {
		$front_page_id   = (int) get_option( 'page_on_front' );
		$front_page_ids  = array( $front_page_id );
		$post_language   = pll_get_post_language( $post_id, 'slug' );

		if ( $front_page_id && function_exists( 'pll_languages_list' ) ) {
			foreach ( pll_languages_list( array( 'fields' => 'slug' ) ) as $language ) {
				$translated_front_page_id = pll_get_post( $front_page_id, $language );

				if ( $translated_front_page_id ) {
					$front_page_ids[] = (int) $translated_front_page_id;
				}
			}
		}

		if ( $post_language && in_array( $post_id, array_map( 'intval', $front_page_ids ), true ) ) {
			return pll_home_url( $post_language );
		}
	}

	$permalink = get_permalink( $post_id );

	return $permalink ? $permalink : home_url( '/' );
}

/**
 * Keep WordPress canonical output aligned with Polylang's language home URLs.
 *
 * @param string  $canonical_url Canonical URL.
 * @param WP_Post $post          Current post.
 * @return string
 */
function menume_filter_canonical_url( $canonical_url, $post ) {
	if ( $post instanceof WP_Post ) {
		return menume_get_localized_canonical_url( $post->ID );
	}

	return $canonical_url;
}
add_filter( 'get_canonical_url', 'menume_filter_canonical_url', 10, 2 );

/**
 * Output reciprocal language alternates for every translated page.
 */
function menume_output_hreflang_tags() {
	if ( ! is_singular() || ! function_exists( 'pll_get_post_translations' ) ) {
		return;
	}

	$post_id      = get_queried_object_id();
	$translations = pll_get_post_translations( $post_id );

	if ( count( $translations ) < 2 ) {
		return;
	}

	foreach ( $translations as $language => $translation_id ) {
		printf(
			'<link rel="alternate" hreflang="%1$s" href="%2$s" />' . "\n",
			esc_attr( $language ),
			esc_url( menume_get_localized_canonical_url( $translation_id ) )
		);
	}

	$default_language = function_exists( 'pll_default_language' ) ? pll_default_language( 'slug' ) : '';

	if ( $default_language && isset( $translations[ $default_language ] ) ) {
		printf(
			'<link rel="alternate" hreflang="x-default" href="%s" />' . "\n",
			esc_url( menume_get_localized_canonical_url( $translations[ $default_language ] ) )
		);
	}
}
add_action( 'wp_head', 'menume_output_hreflang_tags', 3 );

/**
 * Redirect front-page storage slugs to their public language home URLs.
 */
function menume_redirect_translated_front_page_slugs() {
	if ( ! is_singular( 'page' ) ) {
		return;
	}

	$post_id       = get_queried_object_id();
	$front_page_id = (int) get_option( 'page_on_front' );
	$front_ids     = function_exists( 'pll_get_post_translations' ) ? pll_get_post_translations( $front_page_id ) : array( $front_page_id );

	if ( ! in_array( (int) $post_id, array_map( 'intval', $front_ids ), true ) ) {
		return;
	}

	$target  = menume_get_localized_canonical_url( $post_id );
	$current = home_url( wp_unslash( $_SERVER['REQUEST_URI'] ) );

	if ( untrailingslashit( strtok( $current, '?' ) ) !== untrailingslashit( $target ) ) {
		wp_safe_redirect( $target, 301, 'MenuMe' );
		exit;
	}
}
add_action( 'template_redirect', 'menume_redirect_translated_front_page_slugs', 1 );

/**
 * Redirect every pre-launch slug to its definitive localized URL.
 * Explicit paths avoid ambiguous _wp_old_slug matches across Polylang pages.
 */
function menume_redirect_legacy_localized_paths() {
	$request_path = wp_parse_url( wp_unslash( $_SERVER['REQUEST_URI'] ), PHP_URL_PATH );
	$request_path = '/' . trim( rawurldecode( $request_path ), '/' ) . '/';
	$redirects    = array(
		'/pricing/'              => '/preise/',
		'/about/'                => '/ueber-uns/',
		'/contact/'              => '/kontakt/',
		'/imprint/'              => '/impressum/',
		'/privacy-policy/'       => '/datenschutz/',
		'/cookie-policy/'        => '/cookie-richtlinie/',
		'/en/pricing-en/'        => '/en/pricing/',
		'/en/about-en/'          => '/en/about/',
		'/en/contact-en/'        => '/en/contact/',
		'/en/demo-en/'           => '/en/demo-request/',
		'/en/demo-2/'            => '/en/demo-request/',
		'/en/imprint-en/'        => '/en/legal-notice/',
		'/en/agb-en/'            => '/en/terms-and-conditions/',
		'/en/privacy-policy-en/' => '/en/privacy-policy/',
		'/en/cookie-policy-2/'   => '/en/cookie-policy/',
		'/ar/pricing-ar/'        => '/ar/الأسعار/',
		'/ar/about-ar/'          => '/ar/من-نحن/',
		'/ar/contact-ar/'        => '/ar/تواصل/',
		'/ar/demo-ar/'           => '/ar/عرض-تجريبي/',
		'/ar/imprint-ar/'        => '/ar/بيانات-الناشر/',
		'/ar/agb-ar/'            => '/ar/الشروط-والأحكام/',
		'/ar/privacy-policy-ar/' => '/ar/سياسة-الخصوصية/',
		'/ar/cookie-policy-3/'   => '/ar/سياسة-ملفات-تعريف-الارتباط/',
	);

	if ( ! isset( $redirects[ $request_path ] ) ) {
		return;
	}

	$target = untrailingslashit( get_option( 'home' ) ) . $redirects[ $request_path ];
	$query  = isset( $_SERVER['QUERY_STRING'] ) ? sanitize_text_field( wp_unslash( $_SERVER['QUERY_STRING'] ) ) : '';

	if ( $query ) {
		$target .= '?' . $query;
	}

	wp_safe_redirect( $target, 301, 'MenuMe' );
	exit;
}
add_action( 'template_redirect', 'menume_redirect_legacy_localized_paths', -1 );

/**
 * Publish language home URLs, not front-page storage slugs, in XML sitemaps.
 *
 * @param array   $entry Sitemap entry.
 * @param WP_Post $post  Sitemap post.
 * @return array
 */
function menume_localize_sitemap_page_url( $entry, $post ) {
	if ( $post instanceof WP_Post ) {
		$entry['loc'] = menume_get_localized_canonical_url( $post->ID );
	}

	return $entry;
}
add_filter( 'wp_sitemaps_posts_entry', 'menume_localize_sitemap_page_url', 10, 2 );

/**
 * Keep the sitemap index focused on public page content.
 * This site has no public blog, author archives or useful taxonomy archives.
 *
 * @param WP_Sitemaps_Provider $provider Sitemap provider.
 * @param string               $name     Provider name.
 * @return WP_Sitemaps_Provider|false
 */
function menume_filter_sitemap_providers( $provider, $name ) {
	if ( in_array( $name, array( 'taxonomies', 'users' ), true ) ) {
		return false;
	}

	return $provider;
}
add_filter( 'wp_sitemaps_add_provider', 'menume_filter_sitemap_providers', 10, 2 );

/**
 * Redirect the common sitemap alias to WordPress's canonical sitemap index.
 */
function menume_redirect_sitemap_alias() {
	$request_path = wp_parse_url( wp_unslash( $_SERVER['REQUEST_URI'] ), PHP_URL_PATH );
	$is_retired_provider_map = preg_match( '#^/(?:[a-z]{2}/)?wp-sitemap-(?:taxonomies|users)-.+\.xml$#', $request_path );

	if ( '/sitemap.xml' === untrailingslashit( $request_path ) || $is_retired_provider_map ) {
		wp_safe_redirect( home_url( '/wp-sitemap.xml' ), 301, 'MenuMe' );
		exit;
	}
}
add_action( 'template_redirect', 'menume_redirect_sitemap_alias', 0 );

/**
 * Return a real 404 for archive routes that are not part of this brochure site.
 * This prevents empty category, tag, author and date routes from becoming
 * indexable soft 404 copies of the home page.
 */
function menume_disable_unused_archives() {
	if ( get_query_var( 'sitemap' ) ) {
		return;
	}

	if ( ! is_author() && ! is_date() && ! is_category() && ! is_tag() && ! is_tax() ) {
		return;
	}

	global $wp_query;
	$wp_query->set_404();
	status_header( 404 );
	nocache_headers();
}
add_action( 'template_redirect', 'menume_disable_unused_archives', 0 );

/**
 * Apply one indexing policy to all non-search-result views.
 * Public pages remain indexable by default; utility and duplicate views do not.
 *
 * @param array $robots Robots directives.
 * @return array
 */
function menume_filter_robots_directives( $robots ) {
	$should_noindex = is_search()
		|| is_404()
		|| is_archive()
		|| is_attachment()
		|| is_preview()
		|| is_embed()
		|| is_trackback();

	if ( $should_noindex ) {
		unset( $robots['index'], $robots['noarchive'] );
		$robots['noindex'] = true;
		$robots['follow']  = true;
	}

	return $robots;
}
add_filter( 'wp_robots', 'menume_filter_robots_directives', 20 );

/**
 * Prevent indexing of non-HTML syndication and embed responses.
 */
function menume_send_robots_http_header() {
	if ( is_feed() || is_embed() || is_trackback() ) {
		header( 'X-Robots-Tag: noindex, follow', true );
	}
}
add_action( 'send_headers', 'menume_send_robots_http_header' );

/**
 * Return the curated SEO title for the current translated page.
 * Keys are the German source page IDs; Polylang resolves their translations.
 *
 * @return string
 */
function menume_get_seo_title() {
	if ( ! is_singular( 'page' ) ) {
		return '';
	}

	$language = function_exists( 'pll_current_language' ) ? pll_current_language( 'slug' ) : 'de';
	$post_id  = get_queried_object_id();
	$titles   = array(
		32  => array(
			'de' => 'Digitale Speisekarte für Restaurants | MenuMe',
			'en' => 'Digital Menu Platform for Restaurants | MenuMe',
			'ar' => 'قائمة طعام رقمية للمطاعم | MenuMe',
		),
		125 => array(
			'de' => 'Preise für digitale Speisekarten | MenuMe',
			'en' => 'Digital Menu Pricing for Restaurants | MenuMe',
			'ar' => 'أسعار قوائم الطعام الرقمية | MenuMe',
		),
		104 => array(
			'de' => 'Über MenuMe und Eano | Digitale Gastronomie',
			'en' => 'About MenuMe | Restaurant Technology by Eano',
			'ar' => 'عن MenuMe وEano | حلول رقمية للمطاعم',
		),
		111 => array(
			'de' => 'Demo für eine digitale Speisekarte | MenuMe',
			'en' => 'Request a Digital Menu Demo | MenuMe',
			'ar' => 'اطلب عرضاً لقائمة طعام رقمية | MenuMe',
		),
		96  => array(
			'de' => 'MenuMe kontaktieren | Digitale Speisekarten',
			'en' => 'Contact MenuMe | Digital Menus for Restaurants',
			'ar' => 'تواصل مع MenuMe | قوائم طعام رقمية',
		),
		121 => array(
			'de' => 'Impressum | MenuMe',
			'en' => 'Legal Notice | MenuMe',
			'ar' => 'بيانات الناشر | MenuMe',
		),
		3   => array(
			'de' => 'Datenschutzerklärung | MenuMe',
			'en' => 'Privacy Policy | MenuMe',
			'ar' => 'سياسة الخصوصية | MenuMe',
		),
		118 => array(
			'de' => 'Allgemeine Geschäftsbedingungen | MenuMe',
			'en' => 'Terms and Conditions | MenuMe',
			'ar' => 'الشروط والأحكام | MenuMe',
		),
		134 => array(
			'de' => 'Cookie-Richtlinie | MenuMe',
			'en' => 'Cookie Policy | MenuMe',
			'ar' => 'سياسة ملفات تعريف الارتباط | MenuMe',
		),
	);

	foreach ( $titles as $source_id => $translations ) {
		$translated_id = function_exists( 'pll_get_post' ) ? pll_get_post( $source_id, $language ) : $source_id;

		if ( (int) $translated_id === (int) $post_id && isset( $translations[ $language ] ) ) {
			return $translations[ $language ];
		}
	}

	return '';
}

/**
 * Replace generic WordPress page titles with localized SEO titles.
 *
 * @param string $title Generated document title.
 * @return string
 */
function menume_filter_document_title( $title ) {
	$seo_title = menume_get_seo_title();

	return $seo_title ? $seo_title : $title;
}
add_filter( 'pre_get_document_title', 'menume_filter_document_title', 20 );

/**
 * Build a short meta description for the current view.
 */
function menume_get_meta_description() {
	if ( is_singular( 'page' ) ) {
		$language    = function_exists( 'pll_current_language' ) ? pll_current_language( 'slug' ) : 'de';
		$post_id     = get_queried_object_id();
		$descriptions = array(
			32  => array(
				'de' => 'MenuMe vereint digitale Speisekarte, Restaurant-Website, Foodfotos, Social-Media-Content und Reservierungen in einer KI-gestützten Plattform.',
				'en' => 'MenuMe combines digital menus, restaurant websites, food photography, social media content and reservations in one AI-powered platform.',
				'ar' => 'تجمع MenuMe قائمة الطعام الرقمية وموقع المطعم وصور الأطباق ومحتوى التواصل الاجتماعي والحجوزات في منصة واحدة مدعومة بالذكاء الاصطناعي.',
			),
			125 => array(
				'de' => 'Vergleiche die MenuMe Tarife für digitale Speisekarten und wähle den passenden Funktionsumfang für dein Restaurant – monatlich oder jährlich.',
				'en' => 'Compare MenuMe pricing for digital restaurant menus and choose the right features for your business, with monthly and yearly billing options.',
				'ar' => 'قارن باقات MenuMe لقوائم الطعام الرقمية واختر الميزات المناسبة لمطعمك، مع خيارات دفع شهرية وسنوية وحلول مخصصة.',
			),
			104 => array(
				'de' => 'Erfahre, wie Eano mit MenuMe klare Gestaltung und zuverlässige Software verbindet, um Restaurants im digitalen Alltag einfacher zu unterstützen.',
				'en' => 'Learn how Eano combines thoughtful design and reliable software in MenuMe to make everyday digital work easier for restaurants.',
				'ar' => 'تعرّف على كيفية جمع Eano بين التصميم المدروس والبرمجيات الموثوقة في MenuMe لتسهيل العمل الرقمي اليومي للمطاعم.',
			),
			111 => array(
				'de' => 'Fordere eine unverbindliche MenuMe Demo an. Beantworte wenige Fragen und erhalte eine Präsentation, die zu deinem Restaurant und deinen Zielen passt.',
				'en' => 'Request a no-obligation MenuMe demo. Answer a few questions and receive a presentation tailored to your restaurant, design and goals.',
				'ar' => 'اطلب عرضاً تجريبياً غير ملزم من MenuMe. أجب عن بضعة أسئلة واحصل على عرض يناسب مطعمك وتصميمك وأهدافك.',
			),
			96  => array(
				'de' => 'Kontaktiere MenuMe bei Fragen zu digitalen Speisekarten, Funktionen oder einer individuellen Lösung für dein Restaurant.',
				'en' => 'Contact MenuMe with questions about digital menus, platform features or a custom solution for your restaurant.',
				'ar' => 'تواصل مع MenuMe للاستفسار عن قوائم الطعام الرقمية أو ميزات المنصة أو الحصول على حل مخصص لمطعمك.',
			),
			121 => array(
				'de' => 'Impressum von MenuMe mit Angaben zum Anbieter EANO, Anschrift, Kontaktmöglichkeiten und zur Umsatzsteuerregelung.',
				'en' => 'MenuMe legal notice with details about the provider EANO, business address, contact information and VAT treatment.',
				'ar' => 'بيانات الناشر الخاصة بـMenuMe، وتشمل معلومات مزود الخدمة EANO والعنوان ووسائل التواصل ومعاملة ضريبة القيمة المضافة.',
			),
			3   => array(
				'de' => 'Datenschutzerklärung von MenuMe mit Informationen zur Verarbeitung personenbezogener Daten, Kontaktanfragen, Cookies und deinen Rechten.',
				'en' => 'MenuMe Privacy Policy with information about personal data processing, contact requests, cookies and your data protection rights.',
				'ar' => 'سياسة خصوصية MenuMe ومعلومات معالجة البيانات الشخصية وطلبات التواصل وملفات تعريف الارتباط وحقوقك المتعلقة بحماية البيانات.',
			),
			118 => array(
				'de' => 'Allgemeine Geschäftsbedingungen für die Nutzung der MenuMe Plattform und ergänzender Leistungen von Eano.',
				'en' => 'Terms and Conditions governing the use of the MenuMe software platform and related services provided by Eano.',
				'ar' => 'الشروط والأحكام المنظمة لاستخدام منصة MenuMe البرمجية والخدمات المرتبطة بها والمقدمة من Eano.',
			),
			134 => array(
				'de' => 'Die Cookie-Richtlinie von MenuMe erklärt verwendete Cookies, ihre Zwecke und Rechtsgrundlagen sowie Möglichkeiten zur Verwaltung deiner Einwilligung.',
				'en' => 'The MenuMe Cookie Policy explains the cookies used, their purposes and legal bases, and how you can manage or withdraw your consent.',
				'ar' => 'توضح سياسة ملفات تعريف الارتباط في MenuMe أنواع الملفات المستخدمة وأغراضها وأسسها القانونية وكيفية إدارة موافقتك أو سحبها.',
			),
		);

		foreach ( $descriptions as $source_id => $translations ) {
			$translated_id = function_exists( 'pll_get_post' ) ? pll_get_post( $source_id, $language ) : $source_id;

			if ( (int) $translated_id === (int) $post_id && isset( $translations[ $language ] ) ) {
				return $translations[ $language ];
			}
		}
	}

	if ( is_singular() ) {
		$post = get_queried_object();

		if ( $post instanceof WP_Post ) {
			if ( ! empty( $post->post_excerpt ) ) {
				return wp_strip_all_tags( strip_shortcodes( $post->post_excerpt ) );
			}

			$excerpt = wp_trim_words( wp_strip_all_tags( strip_shortcodes( $post->post_content ) ), 30 );

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
	$url         = is_singular() ? menume_get_localized_canonical_url( get_queried_object_id() ) : home_url( '/' );
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
 * Build current pricing offers from the MenuMe Pricing plugin.
 * The same source drives both the visible pricing page and Schema output.
 *
 * @param string $language Current language slug.
 * @return array|null
 */
function menume_get_pricing_schema( $language ) {
	if ( ! function_exists( 'menume_pricing_get_plans' ) || ! function_exists( 'menume_pricing_is_on_sale' ) ) {
		return null;
	}

	$plans = menume_pricing_get_plans();
	if ( empty( $plans ) || ! is_array( $plans ) ) {
		return null;
	}

	$plan_labels = array(
		'de' => array( 'basis' => 'Basis', 'premium' => 'Premium' ),
		'en' => array( 'basis' => 'Basic', 'premium' => 'Premium' ),
		'ar' => array( 'basis' => 'الأساسية', 'premium' => 'المميزة' ),
	);
	$cycle_labels = array(
		'de' => array( 'monthly' => 'Monatlich', 'yearly' => 'Jährlich' ),
		'en' => array( 'monthly' => 'Monthly', 'yearly' => 'Yearly' ),
		'ar' => array( 'monthly' => 'شهرياً', 'yearly' => 'سنوياً' ),
	);
	$billing_durations = array( 'monthly' => 'P1M', 'yearly' => 'P1Y' );
	$pricing_page_id   = function_exists( 'pll_get_post' ) ? pll_get_post( 125, $language ) : 125;
	$pricing_url       = menume_get_localized_canonical_url( $pricing_page_id );
	$offers            = array();
	$effective_prices  = array();

	foreach ( $plans as $plan_key => $cycles ) {
		foreach ( $cycles as $cycle_key => $pricing ) {
			if ( empty( $pricing['base'] ) || ! isset( $billing_durations[ $cycle_key ] ) ) {
				continue;
			}

			$price = menume_pricing_is_on_sale( $plan_key, $cycle_key ) ? (float) $pricing['sale'] : (float) $pricing['base'];
			if ( $price <= 0 ) {
				continue;
			}

			$plan_name  = isset( $plan_labels[ $language ][ $plan_key ] ) ? $plan_labels[ $language ][ $plan_key ] : ucfirst( $plan_key );
			$cycle_name = isset( $cycle_labels[ $language ][ $cycle_key ] ) ? $cycle_labels[ $language ][ $cycle_key ] : ucfirst( $cycle_key );
			$offers[]   = array(
				'@type'              => 'Offer',
				'name'               => $plan_name . ' – ' . $cycle_name,
				'url'                => $pricing_url,
				'price'              => number_format( $price, 2, '.', '' ),
				'priceCurrency'      => 'EUR',
				'availability'       => 'https://schema.org/InStock',
				'priceSpecification' => array(
					'@type'           => 'UnitPriceSpecification',
					'price'           => number_format( $price, 2, '.', '' ),
					'priceCurrency'   => 'EUR',
					'billingDuration' => $billing_durations[ $cycle_key ],
				),
			);
			$effective_prices[] = $price;
		}
	}

	if ( empty( $offers ) ) {
		return null;
	}

	return array(
		'@type'         => 'AggregateOffer',
		'url'           => $pricing_url,
		'priceCurrency' => 'EUR',
		'lowPrice'      => number_format( min( $effective_prices ), 2, '.', '' ),
		'highPrice'     => number_format( max( $effective_prices ), 2, '.', '' ),
		'offerCount'    => count( $offers ),
		'offers'        => $offers,
	);
}

/**
 * Output a connected Schema.org graph for the current public page.
 */
function menume_output_structured_data() {
	if ( ! is_singular( 'page' ) ) {
		return;
	}

	$language_codes = array(
		'de' => 'de-DE',
		'en' => 'en',
		'ar' => 'ar',
	);
	$language       = function_exists( 'pll_current_language' ) ? pll_current_language( 'slug' ) : 'de';
	$in_language    = isset( $language_codes[ $language ] ) ? $language_codes[ $language ] : $language;
	$page_id        = get_queried_object_id();
	$page_url       = menume_get_localized_canonical_url( $page_id );
	$site_url       = function_exists( 'pll_home_url' ) ? pll_home_url( $language ) : home_url( '/' );
	$root_url       = home_url( '/' );
	$organization_id = $root_url . '#organization';
	$website_id     = trailingslashit( $site_url ) . '#website';
	$webpage_id     = $page_url . '#webpage';
	$application_id = $root_url . '#software';
	$breadcrumb_id  = $page_url . '#breadcrumb';
	$logo_url       = function_exists( 'menume_get_logo_url' ) ? menume_get_logo_url() : get_theme_file_uri( '/screenshot.png' );
	$page_title     = wp_get_document_title();
	$home_labels    = array( 'de' => 'Startseite', 'en' => 'Home', 'ar' => 'الرئيسية' );
	$graph          = array(
		array(
			'@type'        => 'Organization',
			'@id'          => $organization_id,
			'name'         => 'EANO',
			'legalName'    => 'Omar Shaar, handelnd unter EANO',
			'url'          => $root_url,
			'email'        => 'info@eano.dev',
			'telephone'    => '+49 176 45342588',
			'address'      => array(
				'@type'           => 'PostalAddress',
				'streetAddress'   => 'Stiftsplatz 5',
				'postalCode'      => '53111',
				'addressLocality' => 'Bonn',
				'addressCountry'  => 'DE',
			),
			'logo'         => array(
				'@type' => 'ImageObject',
				'url'   => $logo_url,
			),
			'brand'        => array(
				'@type' => 'Brand',
				'name'  => 'MenuMe',
			),
		),
		array(
			'@type'      => 'WebSite',
			'@id'        => $website_id,
			'url'        => $site_url,
			'name'       => 'MenuMe',
			'inLanguage' => $in_language,
			'publisher'  => array( '@id' => $organization_id ),
		),
		array(
			'@type'       => 'WebPage',
			'@id'         => $webpage_id,
			'url'         => $page_url,
			'name'        => $page_title,
			'description' => menume_get_meta_description(),
			'inLanguage'  => $in_language,
			'isPartOf'    => array( '@id' => $website_id ),
			'about'       => array( '@id' => $application_id ),
		),
	);

	$application = array(
			'@type'               => 'SoftwareApplication',
			'@id'                 => $application_id,
			'name'                => 'MenuMe',
			'url'                 => $site_url,
			'description'         => menume_get_meta_description(),
			'applicationCategory' => 'BusinessApplication',
			'applicationSubCategory' => 'Restaurant management software',
			'operatingSystem'     => 'Web',
			'inLanguage'          => $in_language,
			'publisher'           => array( '@id' => $organization_id ),
		);

	if ( is_front_page() ) {
		$pricing_schema = menume_get_pricing_schema( $language );

		if ( $pricing_schema ) {
			$application['offers'] = $pricing_schema;
		}
	}

	$graph[] = $application;

	if ( is_front_page() ) {
		$graph[2]['mainEntity'] = array( '@id' => $application_id );
	} else {
		$graph[] = array(
			'@type'           => 'BreadcrumbList',
			'@id'             => $breadcrumb_id,
			'itemListElement' => array(
				array(
					'@type'    => 'ListItem',
					'position' => 1,
					'name'     => isset( $home_labels[ $language ] ) ? $home_labels[ $language ] : 'Home',
					'item'     => $site_url,
				),
				array(
					'@type'    => 'ListItem',
					'position' => 2,
					'name'     => get_the_title( $page_id ),
					'item'     => $page_url,
				),
			),
		);
		$graph[2]['breadcrumb'] = array( '@id' => $breadcrumb_id );
	}

	$data = array(
		'@context' => 'https://schema.org',
		'@graph'   => $graph,
	);

	echo '<script type="application/ld+json">' . wp_json_encode( $data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . '</script>' . "\n";
}
add_action( 'wp_head', 'menume_output_structured_data', 2 );
