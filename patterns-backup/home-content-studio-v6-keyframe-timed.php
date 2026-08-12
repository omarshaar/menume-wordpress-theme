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

		<!-- wp:group {"className":"menume-content-studio__visual","metadata":{"name":"KI Content Demo Animation"},"layout":{"type":"default"}} -->
		<div class="wp-block-group menume-content-studio__visual">
			<!-- wp:html -->
			<div class="mcs" aria-hidden="true">
				<div class="mcs__cursor"></div>

				<div class="mcs__panel mcs__panel--product">
					<div class="mcs__field-label"><?php echo esc_html__( 'Produkt wählen', 'menume' ); ?></div>
					<div class="mcs__select">
						<span class="mcs__select-placeholder"><?php echo esc_html__( 'Auswählen …', 'menume' ); ?></span>
						<span class="mcs__select-value"><?php echo esc_html__( 'Trüffel-Pasta', 'menume' ); ?></span>
						<span class="mcs__select-caret">⌄</span>
					</div>
					<div class="mcs__dropdown">
						<div class="mcs__option"><?php echo esc_html__( 'Margherita Pizza', 'menume' ); ?></div>
						<div class="mcs__option mcs__option--chosen"><?php echo esc_html__( 'Trüffel-Pasta', 'menume' ); ?></div>
					</div>
				</div>

				<div class="mcs__panel mcs__panel--select">
					<div class="mcs__field-label"><?php echo esc_html__( 'Inhaltstyp', 'menume' ); ?></div>
					<div class="mcs__select">
						<span class="mcs__select-placeholder"><?php echo esc_html__( 'Auswählen …', 'menume' ); ?></span>
						<span class="mcs__select-value"><?php echo esc_html__( 'Social-Media-Post', 'menume' ); ?></span>
						<span class="mcs__select-caret">⌄</span>
					</div>
					<div class="mcs__dropdown">
						<div class="mcs__option"><?php echo esc_html__( 'Anzeige', 'menume' ); ?></div>
						<div class="mcs__option mcs__option--chosen"><?php echo esc_html__( 'Social-Media-Post', 'menume' ); ?></div>
					</div>
				</div>

				<div class="mcs__panel mcs__panel--platforms">
					<div class="mcs__field-label"><?php echo esc_html__( 'Plattform wählen', 'menume' ); ?></div>
					<div class="mcs__platform-row">
						<div class="mcs__platform mcs__platform--ig">
							<svg viewBox="0 0 24 24" width="20" height="20"><rect x="3" y="3" width="18" height="18" rx="5" fill="none" stroke="currentColor" stroke-width="1.8"/><circle cx="12" cy="12" r="4" fill="none" stroke="currentColor" stroke-width="1.8"/><circle cx="17.4" cy="6.6" r="1.1" fill="currentColor"/></svg>
						</div>
						<div class="mcs__platform mcs__platform--fb">
							<svg viewBox="0 0 24 24" width="20" height="20"><path fill="currentColor" d="M15 8.5h2.5V5H15c-2.5 0-4 1.6-4 4.2V11H8.5v3.5H11V21h3.5v-6.5h2.7l.5-3.5h-3.2V9.4c0-.6.3-.9 1.3-.9z"/></svg>
						</div>
					</div>
				</div>

				<div class="mcs__panel mcs__panel--generating">
					<div class="mcs__spinner"></div>
					<div class="mcs__field-label"><?php echo esc_html__( 'KI erstellt deinen Beitrag …', 'menume' ); ?></div>
				</div>

				<div class="mcs__panel mcs__panel--result">
					<div class="mcs__result-card">
						<div class="mcs__result-media"></div>
						<div class="mcs__result-line mcs__result-line--1"></div>
						<div class="mcs__result-line mcs__result-line--2"></div>
					</div>
					<div class="mcs__buttons">
						<div class="mcs__btn mcs__btn--publish"><?php echo esc_html__( 'Veröffentlichen', 'menume' ); ?></div>
						<div class="mcs__btn mcs__btn--schedule"><?php echo esc_html__( 'Planen', 'menume' ); ?></div>
					</div>
				</div>

				<div class="mcs__panel mcs__panel--success">
					<div class="mcs__success-check">✓</div>
					<div class="mcs__field-label"><?php echo esc_html__( 'Veröffentlicht', 'menume' ); ?></div>
					<div class="mcs__success-badges">
						<span class="mcs__badge mcs__badge--ig">Instagram ✓</span>
						<span class="mcs__badge mcs__badge--fb">Facebook ✓</span>
					</div>
				</div>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
