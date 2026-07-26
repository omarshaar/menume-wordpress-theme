<?php
/**
 * Title: Demo anfragen
 * Slug: menume/demo-request
 * Description: Calm multi-step MenuMe demo request page.
 * Categories: menume-demo
 * Keywords: demo, anfrage, formular, request, menume
 * Inserter: true
 */
?>

<!-- wp:group {"align":"full","anchor":"demo-anfragen","tagName":"section","className":"menume-demo-request","metadata":{"name":"Demo anfragen"},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull menume-demo-request" id="demo-anfragen">
	<!-- wp:group {"align":"wide","className":"menume-demo-request__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide menume-demo-request__inner">
		<!-- wp:group {"className":"menume-demo-request__content","layout":{"type":"default"}} -->
		<div class="wp-block-group menume-demo-request__content">
			<!-- wp:paragraph {"className":"menume-demo-request__eyebrow"} -->
			<p class="menume-demo-request__eyebrow"><?php echo esc_html__( 'MENUME DEMO', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"className":"menume-demo-request__title"} -->
			<h1 class="wp-block-heading menume-demo-request__title"><?php echo esc_html__( 'LERNEN WIR DEIN RESTAURANT KENNEN.', 'menume' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"menume-demo-request__description"} -->
			<p class="menume-demo-request__description"><?php echo esc_html__( 'Beantworte uns ein paar kurze Fragen. So können wir dir MenuMe passend zu deinem Restaurant, deinem Design und deinem Zeitplan zeigen.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"className":"menume-demo-request__benefits","layout":{"type":"default"}} -->
			<div class="wp-block-group menume-demo-request__benefits">
				<!-- wp:paragraph -->
				<p><span aria-hidden="true">✓</span><?php echo esc_html__( 'Unverbindliche Anfrage', 'menume' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p><span aria-hidden="true">✓</span><?php echo esc_html__( 'In wenigen Minuten ausgefüllt', 'menume' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p><span aria-hidden="true">✓</span><?php echo esc_html__( 'Persönliche Rückmeldung', 'menume' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:paragraph {"className":"menume-demo-request__note"} -->
			<p class="menume-demo-request__note"><?php echo esc_html__( 'Deine Angaben helfen uns nur bei der Vorbereitung deiner Demo und werden vertraulich behandelt.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"menume-demo-request__form","layout":{"type":"default"}} -->
		<div class="wp-block-group menume-demo-request__form">
			<!-- wp:shortcode -->
			[menume_demo_request_form]
			<!-- /wp:shortcode -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
