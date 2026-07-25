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
	<!-- wp:group {"align":"wide","className":"menume-home-hero__inner","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide menume-home-hero__inner">
		<!-- wp:heading {"textAlign":"center","level":1,"className":"menume-home-hero__title"} -->
		<h1 class="wp-block-heading has-text-align-center menume-home-hero__title"><?php echo esc_html__( 'Digitale Speisekarten, die Appetit machen', 'menume' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","className":"menume-home-hero__subtitle"} -->
		<p class="has-text-align-center menume-home-hero__subtitle"><?php echo esc_html__( 'Modern präsentieren, sofort aktualisieren und auf jedem Smartphone überzeugen', 'menume' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"className":"menume-home-hero__actions","layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons menume-home-hero__actions">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#demo"><?php echo esc_html__( 'Demo', 'menume' ); ?></a></div>
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
						<figure class="wp-block-image size-full menume-home-hero__dashboard-image"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/dashboard-placeholder.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Replace with admin screenshot 1', 'menume' ); ?>"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'Alles zentral verwalten – einfach, schnell und übersichtlich.', 'menume' ); ?></figcaption></figure>
						<!-- /wp:image -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"className":"menume-home-hero__phone","metadata":{"name":"Mobile screenshot 1"},"layout":{"type":"default"}} -->
					<div class="wp-block-group menume-home-hero__phone">
						<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"menume-home-hero__phone-image"} -->
						<figure class="wp-block-image size-full menume-home-hero__phone-image"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/phone-placeholder.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Replace with mobile screenshot 1', 'menume' ); ?>"/></figure>
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
						<figure class="wp-block-image size-full menume-home-hero__dashboard-image"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/dashboard-placeholder.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Replace with admin screenshot 2', 'menume' ); ?>"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'Änderungen veröffentlichen und sofort für Gäste sichtbar machen.', 'menume' ); ?></figcaption></figure>
						<!-- /wp:image -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"className":"menume-home-hero__phone","metadata":{"name":"Mobile screenshot 2"},"layout":{"type":"default"}} -->
					<div class="wp-block-group menume-home-hero__phone">
						<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"menume-home-hero__phone-image"} -->
						<figure class="wp-block-image size-full menume-home-hero__phone-image"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/phone-placeholder.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Replace with mobile screenshot 2', 'menume' ); ?>"/></figure>
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
						<figure class="wp-block-image size-full menume-home-hero__dashboard-image"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/dashboard-placeholder.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Replace with admin screenshot 3', 'menume' ); ?>"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'Eine moderne Speisekarte, die auf jedem Smartphone überzeugt.', 'menume' ); ?></figcaption></figure>
						<!-- /wp:image -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"className":"menume-home-hero__phone","metadata":{"name":"Mobile screenshot 3"},"layout":{"type":"default"}} -->
					<div class="wp-block-group menume-home-hero__phone">
						<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"menume-home-hero__phone-image"} -->
						<figure class="wp-block-image size-full menume-home-hero__phone-image"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/phone-placeholder.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Replace with mobile screenshot 3', 'menume' ); ?>"/></figure>
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
