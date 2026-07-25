<?php
/**
 * Title: Home How It Works
 * Slug: menume/home-how-it-works
 * Description: A clean three-step infographic showing how MenuMe works.
 * Categories: menume-home
 * Keywords: steps, process, how it works, menu, import, menume
 * Inserter: true
 */
?>

<!-- wp:group {"align":"full","anchor":"so-funktionierts","tagName":"section","className":"menume-process menume-process--simple","metadata":{"name":"So funktioniert MenuMe"},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull menume-process menume-process--simple" id="so-funktionierts">
	<!-- wp:group {"align":"wide","className":"menume-process__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide menume-process__inner">
		<!-- wp:group {"className":"menume-process__heading","layout":{"type":"constrained"}} -->
		<div class="wp-block-group menume-process__heading">
			<!-- wp:paragraph {"align":"center","className":"menume-process__eyebrow"} -->
			<p class="has-text-align-center menume-process__eyebrow"><?php echo esc_html__( 'SO EINFACH FUNKTIONIERT MENUME', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"textAlign":"center","level":2,"className":"menume-process__title"} -->
			<h2 class="wp-block-heading has-text-align-center menume-process__title"><?php echo esc_html__( 'IN DREI SCHRITTEN ZUM DIGITALEN MENÜ.', 'menume' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","className":"menume-process__lead"} -->
			<p class="has-text-align-center menume-process__lead"><?php echo esc_html__( 'Neu anlegen oder bestehende Karte importieren, Inhalte verfeinern und modern veröffentlichen.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"menume-process__steps","metadata":{"name":"Drei Schritte"},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
		<div class="wp-block-group menume-process__steps">
			<!-- wp:group {"className":"menume-process__step menume-process__step--import","metadata":{"name":"Schritt 1: Anlegen"},"layout":{"type":"default"}} -->
			<div class="wp-block-group menume-process__step menume-process__step--import">
				<!-- wp:group {"className":"menume-process__number-wrap","layout":{"type":"default"}} -->
				<div class="wp-block-group menume-process__number-wrap">
					<!-- wp:paragraph {"className":"menume-process__number"} --><p class="menume-process__number">01</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"menume-process__status"} --><p class="menume-process__status"><?php echo esc_html__( 'ANLEGEN', 'menume' ); ?></p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"menume-process__copy","layout":{"type":"default"}} -->
				<div class="wp-block-group menume-process__copy">
					<!-- wp:heading {"level":3,"className":"menume-process__step-title"} -->
					<h3 class="wp-block-heading menume-process__step-title"><?php echo esc_html__( 'Menü anlegen oder importieren', 'menume' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"menume-process__description"} -->
					<p class="menume-process__description"><?php echo esc_html__( 'Erstelle dein Menü Schritt für Schritt oder lade eine vorhandene Speisekarte hoch. MenuMe bereitet die erkannten Inhalte zur Prüfung vor.', 'menume' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"menume-process__benefit"} -->
					<p class="menume-process__benefit"><strong>✓</strong> <?php echo esc_html__( 'So starten, wie es zu dir passt', 'menume' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"menume-process__step menume-process__step--edit","metadata":{"name":"Schritt 2: Verfeinern"},"layout":{"type":"default"}} -->
			<div class="wp-block-group menume-process__step menume-process__step--edit">
				<!-- wp:group {"className":"menume-process__number-wrap","layout":{"type":"default"}} -->
				<div class="wp-block-group menume-process__number-wrap">
					<!-- wp:paragraph {"className":"menume-process__number"} --><p class="menume-process__number">02</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"menume-process__status"} --><p class="menume-process__status"><?php echo esc_html__( 'VERFEINERN', 'menume' ); ?></p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"menume-process__copy","layout":{"type":"default"}} -->
				<div class="wp-block-group menume-process__copy">
					<!-- wp:heading {"level":3,"className":"menume-process__step-title"} -->
					<h3 class="wp-block-heading menume-process__step-title"><?php echo esc_html__( 'Inhalte und Design anpassen', 'menume' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"menume-process__description"} -->
					<p class="menume-process__description"><?php echo esc_html__( 'Prüfe Gerichte und Preise, ergänze Allergene und nutze KI für Übersetzungen oder ansprechendere Food-Fotos.', 'menume' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"menume-process__benefit"} -->
					<p class="menume-process__benefit"><strong>✓</strong> <?php echo esc_html__( 'Alles zentral und einfach bearbeitbar', 'menume' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"menume-process__step menume-process__step--publish","metadata":{"name":"Schritt 3: Veröffentlichen"},"layout":{"type":"default"}} -->
			<div class="wp-block-group menume-process__step menume-process__step--publish">
				<!-- wp:group {"className":"menume-process__number-wrap","layout":{"type":"default"}} -->
				<div class="wp-block-group menume-process__number-wrap">
					<!-- wp:paragraph {"className":"menume-process__number"} --><p class="menume-process__number">03</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"menume-process__status"} --><p class="menume-process__status"><?php echo esc_html__( 'VERÖFFENTLICHEN', 'menume' ); ?></p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"menume-process__copy","layout":{"type":"default"}} -->
				<div class="wp-block-group menume-process__copy">
					<!-- wp:heading {"level":3,"className":"menume-process__step-title"} -->
					<h3 class="wp-block-heading menume-process__step-title"><?php echo esc_html__( 'Digital veröffentlichen', 'menume' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"menume-process__description"} -->
					<p class="menume-process__description"><?php echo esc_html__( 'Füge Logo und Farben hinzu und veröffentliche dein Menü. Spätere Änderungen werden direkt für deine Gäste sichtbar.', 'menume' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"menume-process__benefit"} -->
					<p class="menume-process__benefit"><strong>✓</strong> <?php echo esc_html__( 'Einmal eingerichtet, jederzeit aktuell', 'menume' ); ?></p>
					<!-- /wp:paragraph -->
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
