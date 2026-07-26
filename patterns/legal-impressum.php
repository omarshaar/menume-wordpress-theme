<?php
/**
 * Title: Impressum
 * Slug: menume/legal-impressum
 * Description: Simple, editable Impressum draft for MenuMe.
 * Categories: menume-legal
 * Keywords: impressum, legal, recht, anbieterkennzeichnung, menume
 * Inserter: true
 */
?>

<!-- wp:group {"align":"full","tagName":"main","anchor":"impressum","className":"menume-impressum","metadata":{"name":"Impressum"},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull menume-impressum" id="impressum">
	<!-- wp:group {"align":"wide","className":"menume-impressum__inner","layout":{"type":"constrained","contentSize":"760px"}} -->
	<div class="wp-block-group alignwide menume-impressum__inner">
		<!-- wp:paragraph {"className":"menume-impressum__eyebrow"} -->
		<p class="menume-impressum__eyebrow"><?php echo esc_html__( 'RECHTLICHES', 'menume' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":1,"className":"menume-impressum__title"} -->
		<h1 class="wp-block-heading menume-impressum__title"><?php echo esc_html__( 'IMPRESSUM', 'menume' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"menume-impressum__intro"} -->
		<p class="menume-impressum__intro"><?php echo esc_html__( 'Angaben gemäß § 5 DDG', 'menume' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading"><?php echo esc_html__( 'Anbieter', 'menume' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"menume-impressum__placeholder"} -->
		<p class="menume-impressum__placeholder"><?php echo esc_html__( '[VOLLSTÄNDIGER RECHTLICHER NAME / UNTERNEHMENSNAME]', 'menume' ); ?><br><?php echo esc_html__( '[RECHTSFORM, FALLS VORHANDEN]', 'menume' ); ?><br><?php echo esc_html__( '[VERTRETUNGSBERECHTIGTE PERSON, FALLS ERFORDERLICH]', 'menume' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading"><?php echo esc_html__( 'Anschrift', 'menume' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"menume-impressum__placeholder"} -->
		<p class="menume-impressum__placeholder"><?php echo esc_html__( '[STRASSE UND HAUSNUMMER]', 'menume' ); ?><br><?php echo esc_html__( '[POSTLEITZAHL UND ORT]', 'menume' ); ?><br><?php echo esc_html__( '[LAND]', 'menume' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading"><?php echo esc_html__( 'Kontakt', 'menume' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"menume-impressum__placeholder"} -->
		<p class="menume-impressum__placeholder"><?php echo esc_html__( 'Telefon: [TELEFONNUMMER]', 'menume' ); ?><br><?php echo esc_html__( 'E-Mail: [E-MAIL-ADRESSE]', 'menume' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading"><?php echo esc_html__( 'Registereintrag', 'menume' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"menume-impressum__placeholder"} -->
		<p class="menume-impressum__placeholder"><?php echo esc_html__( '[NUR FALLS VORHANDEN: REGISTERGERICHT, REGISTERART UND REGISTERNUMMER – SONST DIESEN ABSCHNITT LÖSCHEN]', 'menume' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading"><?php echo esc_html__( 'Umsatzsteuer-ID', 'menume' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"menume-impressum__placeholder"} -->
		<p class="menume-impressum__placeholder"><?php echo esc_html__( '[NUR FALLS VORHANDEN: UMSATZSTEUER-IDENTIFIKATIONSNUMMER – SONST DIESEN ABSCHNITT LÖSCHEN]', 'menume' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading"><?php echo esc_html__( 'Verantwortlich für redaktionelle Inhalte', 'menume' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p><?php echo esc_html__( 'Verantwortlich im Sinne von § 18 Abs. 2 MStV:', 'menume' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"className":"menume-impressum__placeholder"} -->
		<p class="menume-impressum__placeholder"><?php echo esc_html__( '[NAME UND VOLLSTÄNDIGE ANSCHRIFT – FALLS KEINE JOURNALISTISCH-REDAKTIONELLEN INHALTE VORHANDEN SIND, RECHTLICH PRÜFEN UND GEGEBENENFALLS ABSCHNITT LÖSCHEN]', 'menume' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"className":"menume-impressum__draft"} -->
		<p class="menume-impressum__draft"><?php echo esc_html__( 'Entwurf: Bitte alle markierten Angaben vervollständigen und rechtlich prüfen, bevor diese Seite veröffentlicht wird.', 'menume' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->
