<?php
/**
 * Title: Home Content Studio
 * Slug: menume/home-content-studio
 * Description: AI-assisted social media content creation and scheduling showcase.
 * Categories: menume-home
 * Keywords: content, social media, ai, scheduling, marketing, menume
 * Inserter: true
 */
?>

<!-- wp:group {"align":"full","anchor":"content-studio","tagName":"section","className":"menume-content-studio","metadata":{"name":"Content Studio"},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull menume-content-studio" id="content-studio">
	<!-- wp:group {"align":"wide","className":"menume-content-studio__inner","layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
	<div class="wp-block-group alignwide menume-content-studio__inner">
		<!-- wp:group {"className":"menume-content-studio__copy","layout":{"type":"constrained","justifyContent":"left"}} -->
		<div class="wp-block-group menume-content-studio__copy">
			<!-- wp:paragraph {"className":"menume-content-studio__eyebrow"} -->
			<p class="menume-content-studio__eyebrow"><?php echo esc_html__( 'CONTENT & SOCIAL MEDIA', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"className":"menume-content-studio__title"} -->
			<h2 class="wp-block-heading menume-content-studio__title"><?php echo esc_html__( 'DEIN CONTENT WÄCHST. MIT KI.', 'menume' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"menume-content-studio__description"} -->
			<p class="menume-content-studio__description"><?php echo esc_html__( 'Beiträge, Bilder und Planung – erledigt von deinem KI-Assistenten.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"className":"menume-content-studio__list","layout":{"type":"constrained","justifyContent":"left"}} -->
			<div class="wp-block-group menume-content-studio__list">
				<!-- wp:paragraph {"className":"menume-content-studio__list-item"} -->
				<p class="menume-content-studio__list-item"><strong>✓</strong> <?php echo esc_html__( 'KI schlägt Ideen vor', 'menume' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"menume-content-studio__list-item"} -->
				<p class="menume-content-studio__list-item"><strong>✓</strong> <?php echo esc_html__( 'Bilder & Captions in Sekunden', 'menume' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"menume-content-studio__list-item"} -->
				<p class="menume-content-studio__list-item"><strong>✓</strong> <?php echo esc_html__( 'Automatisch geplant & live', 'menume' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"menume-content-studio__visual","metadata":{"name":"Content Wachstum Illustration"},"layout":{"type":"default"}} -->
		<div class="wp-block-group menume-content-studio__visual">
			<!-- wp:html -->
			<svg class="menume-content-studio__illustration" viewBox="0 0 640 380" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="<?php echo esc_attr__( 'Content wächst mit KI', 'menume' ); ?>">
				<defs>
					<linearGradient id="csGradA" x1="0" y1="0" x2="1" y2="1">
						<stop offset="0" stop-color="#635BFF"/>
						<stop offset="1" stop-color="#8B5CF6"/>
					</linearGradient>
					<linearGradient id="csGradB" x1="0" y1="0" x2="1" y2="1">
						<stop offset="0" stop-color="#12B8A6"/>
						<stop offset="1" stop-color="#4F46E5"/>
					</linearGradient>
					<linearGradient id="csGradC" x1="0" y1="1" x2="1" y2="0">
						<stop offset="0" stop-color="#635BFF"/>
						<stop offset="1" stop-color="#12B8A6"/>
					</linearGradient>
					<radialGradient id="csGlowA" cx="0.5" cy="0.5" r="0.5">
						<stop offset="0" stop-color="#635BFF" stop-opacity="0.3"/>
						<stop offset="1" stop-color="#635BFF" stop-opacity="0"/>
					</radialGradient>
					<radialGradient id="csGlowB" cx="0.5" cy="0.5" r="0.5">
						<stop offset="0" stop-color="#12B8A6" stop-opacity="0.26"/>
						<stop offset="1" stop-color="#12B8A6" stop-opacity="0"/>
					</radialGradient>
				</defs>

				<circle cx="90" cy="270" r="150" fill="url(#csGlowA)"/>
				<circle cx="560" cy="100" r="170" fill="url(#csGlowB)"/>

				<path d="M60,330 C170,330 170,236 320,236 C400,236 400,130 560,92" stroke="url(#csGradC)" stroke-width="5" stroke-linecap="round" stroke-dasharray="1 16" opacity="0.55"/>

				<circle cx="215" cy="292" r="6" fill="#635BFF" opacity="0.5"/>
				<circle cx="452" cy="150" r="5" fill="#12B8A6" opacity="0.6"/>

				<g>
					<rect x="30" y="250" width="88" height="88" rx="24" fill="url(#csGradA)"/>
					<rect x="50" y="280" width="34" height="6" rx="3" fill="#fff" opacity="0.85"/>
					<rect x="50" y="292" width="24" height="6" rx="3" fill="#fff" opacity="0.55"/>
				</g>

				<g>
					<rect x="268" y="146" width="104" height="104" rx="28" fill="url(#csGradB)"/>
					<rect x="291" y="182" width="44" height="7" rx="3.5" fill="#fff" opacity="0.85"/>
					<rect x="291" y="197" width="30" height="7" rx="3.5" fill="#fff" opacity="0.55"/>
				</g>

				<g>
					<rect x="466" y="36" width="140" height="140" rx="32" fill="url(#csGradC)"/>
					<rect x="497" y="82" width="56" height="8" rx="4" fill="#fff" opacity="0.9"/>
					<rect x="497" y="98" width="38" height="8" rx="4" fill="#fff" opacity="0.6"/>
					<rect x="497" y="114" width="46" height="8" rx="4" fill="#fff" opacity="0.4"/>
				</g>

				<g transform="translate(566,10)">
					<path d="M18 0 L22 14 L36 18 L22 22 L18 36 L14 22 L0 18 L14 14 Z" fill="url(#csGradC)"/>
				</g>
				<g transform="translate(6,222) scale(0.55)">
					<path d="M18 0 L22 14 L36 18 L22 22 L18 36 L14 22 L0 18 L14 14 Z" fill="#12B8A6" opacity="0.7"/>
				</g>

				<g transform="translate(78,306)">
					<circle cx="16" cy="16" r="16" fill="#fff"/>
					<rect x="8" y="8" width="16" height="16" rx="5" fill="none" stroke="url(#csGradA)" stroke-width="2"/>
					<circle cx="16" cy="16" r="4" fill="none" stroke="url(#csGradA)" stroke-width="2"/>
					<circle cx="21" cy="11" r="1.3" fill="url(#csGradA)"/>
				</g>

				<g transform="translate(356,226)">
					<circle cx="16" cy="16" r="16" fill="#fff"/>
					<path d="M18.5 12.5H21V9h-2.5c-2.5 0-4 1.5-4 4v2H12v3.5h2.5V26h3.5v-7.5h2.7l.5-3.5h-3.2v-1.3c0-.7.3-1.2 1.5-1.2z" fill="url(#csGradB)"/>
				</g>
			</svg>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
