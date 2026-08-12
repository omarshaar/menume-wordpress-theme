<?php
/**
 * Title: Home Final CTA
 * Slug: menume/home-final-cta
 * Description: A focused final call to action for the MenuMe landing page.
 * Categories: menume-home
 * Keywords: call to action, contact, demo, conversion, menume
 * Inserter: true
 */
?>

<!-- wp:group {"align":"full","anchor":"kontakt","tagName":"section","className":"menume-final-cta","metadata":{"name":"Final CTA"},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull menume-final-cta" id="kontakt">
	<!-- wp:group {"align":"wide","className":"menume-final-cta__inner","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide menume-final-cta__inner">
		<!-- wp:paragraph {"align":"center","className":"menume-final-cta__eyebrow"} -->
		<p class="has-text-align-center menume-final-cta__eyebrow"><?php echo esc_html__( 'STARTE NOCH HEUTE', 'menume' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","level":2,"className":"menume-final-cta__title"} -->
		<h2 class="wp-block-heading has-text-align-center menume-final-cta__title"><?php echo esc_html__( 'MEHR ALS NUR EINE SPEISEKARTE.', 'menume' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","className":"menume-final-cta__description"} -->
		<p class="has-text-align-center menume-final-cta__description"><?php echo esc_html__( 'Website, Speisekarte, Fotos und Reservierungen an einem Ort – in wenigen Minuten startklar, ganz ohne technisches Vorwissen.', 'menume' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"className":"menume-final-cta__buttons","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
		<div class="wp-block-buttons menume-final-cta__buttons">
			<!-- wp:button {"className":"menume-final-cta__primary"} -->
			<div class="wp-block-button menume-final-cta__primary"><a class="wp-block-button__link wp-element-button" href="/demo"><?php echo esc_html__( 'Jetzt Demo sichern', 'menume' ); ?> →</a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"menume-final-cta__secondary is-style-outline"} -->
			<div class="wp-block-button menume-final-cta__secondary is-style-outline"><a class="wp-block-button__link wp-element-button" href="/contact"><?php echo esc_html__( 'Mit uns sprechen', 'menume' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

		<!-- wp:paragraph {"align":"center","className":"menume-final-cta__note"} -->
		<p class="has-text-align-center menume-final-cta__note">✓ <?php echo esc_html__( 'Unverbindlich. In wenigen Minuten startklar. Keine technischen Vorkenntnisse nötig.', 'menume' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
