<?php
/**
 * Title: Kontaktformular
 * Slug: menume/kontakt-form
 * Description: Clear two-column contact section with direct actions and a secure form.
 * Categories: menume-kontakt
 * Keywords: kontakt, contact, form, formular, menume
 * Inserter: true
 */
?>

<!-- wp:group {"align":"full","anchor":"kontaktformular","tagName":"section","className":"menume-kontakt-form","metadata":{"name":"Kontaktformular"},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull menume-kontakt-form" id="kontaktformular">
	<!-- wp:group {"align":"wide","className":"menume-kontakt-form__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide menume-kontakt-form__inner">
		<!-- wp:group {"className":"menume-kontakt-form__content","layout":{"type":"default"}} -->
		<div class="wp-block-group menume-kontakt-form__content">
			<!-- wp:paragraph {"className":"menume-kontakt-form__eyebrow"} -->
			<p class="menume-kontakt-form__eyebrow"><?php echo esc_html__( 'KONTAKT', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"className":"menume-kontakt-form__title"} -->
			<h1 class="wp-block-heading menume-kontakt-form__title"><?php echo esc_html__( 'LASS UNS ÜBER DEIN MENÜ SPRECHEN.', 'menume' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"menume-kontakt-form__description"} -->
			<p class="menume-kontakt-form__description"><?php echo esc_html__( 'Du hast eine Frage zu MenuMe oder möchtest dein Restaurant digital präsentieren? Wähle den Weg, der für dich am einfachsten ist.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:shortcode -->
			[menume_contact_actions]
			<!-- /wp:shortcode -->

			<!-- wp:paragraph {"className":"menume-kontakt-form__note"} -->
			<p class="menume-kontakt-form__note"><?php echo esc_html__( 'Wir verwenden deine Angaben ausschließlich zur Bearbeitung deiner Anfrage.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"menume-kontakt-form__form","layout":{"type":"default"}} -->
		<div class="wp-block-group menume-kontakt-form__form">
			<!-- wp:paragraph {"className":"menume-kontakt-form__form-label"} -->
			<p class="menume-kontakt-form__form-label"><?php echo esc_html__( 'SCHREIB UNS', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"className":"menume-kontakt-form__form-title"} -->
			<h2 class="wp-block-heading menume-kontakt-form__form-title"><?php echo esc_html__( 'Wie können wir dir helfen?', 'menume' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:shortcode -->
			[menume_contact_form]
			<!-- /wp:shortcode -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
