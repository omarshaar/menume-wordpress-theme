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
	<!-- wp:group {"align":"wide","className":"menume-final-cta__panel","layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
	<div class="wp-block-group alignwide menume-final-cta__panel">
		<!-- wp:group {"className":"menume-final-cta__message","layout":{"type":"constrained","justifyContent":"left"}} -->
		<div class="wp-block-group menume-final-cta__message">
			<!-- wp:paragraph {"className":"menume-final-cta__eyebrow"} -->
			<p class="menume-final-cta__eyebrow"><?php echo esc_html__( 'BEREIT FÜR MENUME?', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"className":"menume-final-cta__title"} -->
			<h2 class="wp-block-heading menume-final-cta__title"><?php echo esc_html__( 'MACH DEINE SPEISEKARTE ZUM ERLEBNIS.', 'menume' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"menume-final-cta__action","layout":{"type":"constrained","justifyContent":"left"}} -->
		<div class="wp-block-group menume-final-cta__action">
			<!-- wp:paragraph {"className":"menume-final-cta__description"} -->
			<p class="menume-final-cta__description"><?php echo esc_html__( 'Modern, mehrsprachig und jederzeit aktuell – entdecke, wie MenuMe zu deinem Restaurant passt.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"className":"menume-final-cta__buttons","layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-buttons menume-final-cta__buttons">
				<!-- wp:button {"className":"menume-final-cta__primary"} -->
				<div class="wp-block-button menume-final-cta__primary"><a class="wp-block-button__link wp-element-button" href="/demo"><?php echo esc_html__( 'Demo ansehen', 'menume' ); ?> →</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"menume-final-cta__secondary"} -->
				<div class="wp-block-button menume-final-cta__secondary"><a class="wp-block-button__link wp-element-button" href="/contact"><?php echo esc_html__( 'Kontakt aufnehmen', 'menume' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:paragraph {"className":"menume-final-cta__note"} -->
			<p class="menume-final-cta__note">✓ <?php echo esc_html__( 'Unverbindlich entdecken. Keine technischen Vorkenntnisse nötig.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"menume-final-cta__signals","metadata":{"name":"MenuMe Vorteile"},"layout":{"type":"flex","flexWrap":"wrap"}} -->
		<div class="wp-block-group menume-final-cta__signals">
			<!-- wp:paragraph --><p><?php echo esc_html__( 'Mehrsprachig', 'menume' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph --><p><?php echo esc_html__( 'KI-unterstützt', 'menume' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph --><p><?php echo esc_html__( 'Jederzeit aktuell', 'menume' ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
