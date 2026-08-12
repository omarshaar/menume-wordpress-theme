<?php
/**
 * Title: Home Hero
 * Slug: menume/home-hero
 * Description: Centered SaaS hero with a three-step scroll-driven product showcase.
 * Categories: menume-home
 * Keywords: hero, home, saas, dashboard, mobile, menume
 * Inserter: true
 */
?>

<!-- wp:group {"align":"full","tagName":"section","className":"menume-home-hero","metadata":{"name":"Home Hero"},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull menume-home-hero">
	<!-- wp:html -->
	<div class="menume-home-hero__aurora alignfull" aria-hidden="true"></div>
	<!-- /wp:html -->

	<!-- wp:group {"align":"wide","className":"menume-home-hero__inner","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide menume-home-hero__inner">
		<!-- wp:heading {"textAlign":"center","level":1,"className":"menume-home-hero__title"} -->
		<h1 class="wp-block-heading has-text-align-center menume-home-hero__title"><?php echo esc_html__( 'Digitale Speisekarten, die Appetit machen', 'menume' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","className":"menume-home-hero__subtitle"} -->
		<p class="has-text-align-center menume-home-hero__subtitle"><?php echo esc_html__( 'Verwalte Speisekarte, Inhalte, Fotos und deine Bio-Seite an einem Ort – mit KI gestaltet, um mehr Gäste zu gewinnen und den Umsatz zu steigern', 'menume' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"className":"menume-home-hero__actions","layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons menume-home-hero__actions">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/demo"><?php echo esc_html__( 'Demo anfragen', 'menume' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( function_exists( 'menume_get_whatsapp_url' ) ? menume_get_whatsapp_url() : '/contact' ); ?>" target="_blank" rel="noopener"><svg class="menume-whatsapp-button__icon icon icon-tabler icons-tabler-outline icon-tabler-brand-whatsapp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9"></path><path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1"></path></svg><span><?php echo esc_html( function_exists( 'menume_contact_t' ) ? menume_contact_t( 'WhatsApp', 'WhatsApp', 'واتساب' ) : __( 'WhatsApp', 'menume' ) ); ?></span></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

		<!-- wp:group {"align":"full","className":"menume-home-hero__visual menume-home-hero__showcase","metadata":{"name":"Scroll product showcase"},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignfull menume-home-hero__visual menume-home-hero__showcase">
			<!-- wp:group {"className":"menume-home-hero__stage","layout":{"type":"default"}} -->
			<div class="wp-block-group menume-home-hero__stage">
				<!-- wp:group {"className":"menume-home-hero__scene is-active","metadata":{"name":"Showcase 1"},"layout":{"type":"default"}} -->
				<div class="wp-block-group menume-home-hero__scene is-active">
					<!-- wp:group {"className":"menume-home-hero__dashboard","metadata":{"name":"Admin screenshot 1"},"layout":{"type":"default"}} -->
					<div class="wp-block-group menume-home-hero__dashboard">
						<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"menume-home-hero__dashboard-image"} -->
						<figure class="wp-block-image size-full menume-home-hero__dashboard-image"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/dashboard-placeholder.svg' ) ); ?>" alt="<?php echo esc_attr__( 'MenuMe Dashboard zur Verwaltung der digitalen Speisekarte', 'menume' ); ?>" loading="eager" fetchpriority="high"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'Deine Speisekarte ist startklar – Gäste scannen und sehen sie sofort auf dem Handy.', 'menume' ); ?></figcaption></figure>
						<!-- /wp:image -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"className":"menume-home-hero__phone","metadata":{"name":"Mobile screenshot 1"},"layout":{"type":"default"}} -->
					<div class="wp-block-group menume-home-hero__phone">
						<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"menume-home-hero__phone-image"} -->
						<figure class="wp-block-image size-full menume-home-hero__phone-image"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/phone-placeholder.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Digitale Speisekarte von MenuMe auf dem Smartphone', 'menume' ); ?>" loading="eager" fetchpriority="high"/></figure>
						<!-- /wp:image -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"menume-home-hero__scene","metadata":{"name":"Showcase 2"},"layout":{"type":"default"}} -->
				<div class="wp-block-group menume-home-hero__scene">
					<!-- wp:group {"className":"menume-home-hero__dashboard","metadata":{"name":"Admin screenshot 2"},"layout":{"type":"default"}} -->
					<div class="wp-block-group menume-home-hero__dashboard">
						<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"menume-home-hero__dashboard-image"} -->
						<figure class="wp-block-image size-full menume-home-hero__dashboard-image"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/dashboard-placeholder.svg' ) ); ?>" alt="<?php echo esc_attr__( 'MenuMe KI-Tool zur Optimierung von Food-Fotos', 'menume' ); ?>"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'Beeindruckende Foodfotos in Sekunden – ganz ohne Fotostudio.', 'menume' ); ?></figcaption></figure>
						<!-- /wp:image -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"className":"menume-home-hero__phone","metadata":{"name":"Mobile screenshot 2"},"layout":{"type":"default"}} -->
					<div class="wp-block-group menume-home-hero__phone">
						<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"menume-home-hero__phone-image"} -->
						<figure class="wp-block-image size-full menume-home-hero__phone-image"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/phone-placeholder.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Mit KI verbessertes Food-Foto in der MenuMe App', 'menume' ); ?>"/></figure>
						<!-- /wp:image -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"menume-home-hero__scene","metadata":{"name":"Showcase 3"},"layout":{"type":"default"}} -->
				<div class="wp-block-group menume-home-hero__scene">
					<!-- wp:group {"className":"menume-home-hero__dashboard","metadata":{"name":"Admin screenshot 3"},"layout":{"type":"default"}} -->
					<div class="wp-block-group menume-home-hero__dashboard">
						<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"menume-home-hero__dashboard-image"} -->
						<figure class="wp-block-image size-full menume-home-hero__dashboard-image"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/dashboard-placeholder.svg' ) ); ?>" alt="<?php echo esc_attr__( 'MenuMe Verwaltung für Website und Tischreservierungen im Dashboard', 'menume' ); ?>"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'Deine Website und Tischreservierungen laufen automatisch mit.', 'menume' ); ?></figcaption></figure>
						<!-- /wp:image -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"className":"menume-home-hero__phone","metadata":{"name":"Mobile screenshot 3"},"layout":{"type":"default"}} -->
					<div class="wp-block-group menume-home-hero__phone">
						<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"menume-home-hero__phone-image"} -->
						<figure class="wp-block-image size-full menume-home-hero__phone-image"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/phone-placeholder.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Restaurant-Website und Tischreservierung mit MenuMe auf dem Smartphone', 'menume' ); ?>"/></figure>
						<!-- /wp:image -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
