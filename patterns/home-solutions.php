<?php
/**
 * Title: Home Solutions
 * Slug: menume/home-solutions
 * Description: Horizontal showcase of MenuMe product solutions.
 * Categories: menume-home
 * Keywords: solutions, features, carousel, menu, ai, menume
 * Inserter: true
 */
?>

<!-- wp:group {"align":"full","anchor":"solutions","tagName":"section","className":"menume-solutions","metadata":{"name":"MenuMe Lösungen"},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull menume-solutions" id="solutions">
	<!-- wp:group {"align":"wide","className":"menume-solutions__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide menume-solutions__inner">
		<!-- wp:group {"className":"menume-solutions__header","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
		<div class="wp-block-group menume-solutions__header">
			<!-- wp:group {"className":"menume-solutions__intro","layout":{"type":"constrained","justifyContent":"left"}} -->
			<div class="wp-block-group menume-solutions__intro">
				<!-- wp:paragraph {"className":"menume-solutions__eyebrow"} -->
				<p class="menume-solutions__eyebrow"><?php echo esc_html__( 'ALLES FÜR DEIN DIGITALES MENÜ', 'menume' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"className":"menume-solutions__title"} -->
				<h2 class="wp-block-heading menume-solutions__title"><?php echo esc_html__( 'WENIGER AUFWAND. MEHR APPETIT.', 'menume' ); ?></h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"menume-solutions__lead"} -->
				<p class="menume-solutions__lead"><?php echo esc_html__( 'Von schnellen Änderungen bis zu KI-optimierten Food-Fotos: MenuMe macht deine Speisekarte einfacher, schöner und für jeden Gast verständlich.', 'menume' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:buttons {"className":"menume-solutions__arrows","layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-buttons menume-solutions__arrows">
				<!-- wp:button {"className":"menume-solutions__arrow menume-solutions__arrow--previous"} -->
				<div class="wp-block-button menume-solutions__arrow menume-solutions__arrow--previous"><a class="wp-block-button__link wp-element-button" href="#solutions">←</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"menume-solutions__arrow menume-solutions__arrow--next"} -->
				<div class="wp-block-button menume-solutions__arrow menume-solutions__arrow--next"><a class="wp-block-button__link wp-element-button" href="#solutions">→</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"menume-solutions__track","metadata":{"name":"Lösungskarten"},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group menume-solutions__track">
			<?php
			$cards = array(
				array( 'DIGITALE SPEISEKARTE', 'Speisekarte jederzeit aktualisieren', 'Passe Gerichte, Preise und Verfügbarkeit jederzeit an. Deine Änderungen sind sofort online und auf jedem Smartphone sichtbar.', 'LIVE', 'Heute geändert. Sofort sichtbar.', '01' ),
				array( 'EINFACHER IMPORT', 'Bestehende Karte schnell importieren', 'Lade deine vorhandene Speisekarte hoch, prüfe die erkannten Inhalte und übernimm sie direkt – ohne jedes Gericht neu einzutippen.', 'IMPORT', 'Weniger tippen. Schneller starten.', '02' ),
				array( 'KI-ÜBERSETZUNG', 'Internationale Gäste erreichen', 'Übersetze Namen und Beschreibungen mit wenigen Klicks. So finden sich auch internationale Gäste schnell in deinem Menü zurecht.', 'DE → EN', 'Ein Menü. Mehrere Sprachen.', '03' ),
				array( 'FOOD-FOTOS MIT KI', 'Food-Fotos mit KI verfeinern', 'Verbessere Licht, Farben und Bildwirkung deiner Food-Fotos mit KI – für Gerichte, die schon auf dem Display überzeugen.', 'VORHER → NACHHER', 'Aus deinem Foto wird ein Hingucker.', '04' ),
				array( 'ALLERGENE & TAGS', 'Allergene klar kommunizieren', 'Kennzeichne Allergene und Eigenschaften direkt am Gericht. MenuMe erstellt daraus eine übersichtliche Tabelle zum Anzeigen und Ausdrucken.', 'A–Z', 'Einmal pflegen. Klar kommunizieren.', '05' ),
				array( 'DESIGN & MARKE', 'Design passend zur eigenen Marke', 'Wähle ein modernes Design und passe Logo, Farben und Inhalte an dein Restaurant an – ohne technische oder gestalterische Vorkenntnisse.', 'DEIN LOOK', 'Deine Marke. Dein Menü.', '06' ),
			);

			foreach ( $cards as $card ) :
				?>
				<!-- wp:group {"className":"menume-solutions__card","layout":{"type":"flex","orientation":"vertical","justifyContent":"space-between"}} -->
				<div class="wp-block-group menume-solutions__card">
					<!-- wp:group {"className":"menume-solutions__card-copy","layout":{"type":"constrained","justifyContent":"left"}} -->
					<div class="wp-block-group menume-solutions__card-copy">
						<!-- wp:group {"className":"menume-solutions__card-meta","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
						<div class="wp-block-group menume-solutions__card-meta">
							<!-- wp:paragraph {"className":"menume-solutions__label"} --><p class="menume-solutions__label"><?php echo esc_html( $card[0] ); ?></p><!-- /wp:paragraph -->
							<!-- wp:paragraph {"className":"menume-solutions__number"} --><p class="menume-solutions__number"><?php echo esc_html( $card[5] ); ?></p><!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
						<!-- wp:heading {"level":3,"className":"menume-solutions__card-title"} --><h3 class="wp-block-heading menume-solutions__card-title"><?php echo esc_html( $card[1] ); ?></h3><!-- /wp:heading -->
						<!-- wp:paragraph {"className":"menume-solutions__description"} --><p class="menume-solutions__description"><?php echo esc_html( $card[2] ); ?></p><!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"className":"menume-solutions__visual","layout":{"type":"constrained"}} -->
					<div class="wp-block-group menume-solutions__visual">
						<!-- wp:group {"className":"menume-solutions__mini-window","layout":{"type":"default"}} -->
						<div class="wp-block-group menume-solutions__mini-window">
							<!-- wp:paragraph {"className":"menume-solutions__mini-badge"} --><p class="menume-solutions__mini-badge"><?php echo esc_html( $card[3] ); ?></p><!-- /wp:paragraph -->
							<!-- wp:paragraph {"className":"menume-solutions__mini-title"} --><p class="menume-solutions__mini-title"><?php echo esc_html( $card[4] ); ?></p><!-- /wp:paragraph -->
							<?php if ( '01' === $card[5] ) : ?>
								<!-- wp:group {"className":"menume-solutions__demo menume-solutions__demo--update","layout":{"type":"default"}} -->
								<div class="wp-block-group menume-solutions__demo menume-solutions__demo--update">
									<!-- wp:group {"className":"menume-solutions__demo-row","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} --><div class="wp-block-group menume-solutions__demo-row"><!-- wp:paragraph --><p>Trüffel Pasta</p><!-- /wp:paragraph --><!-- wp:paragraph {"className":"is-price"} --><p class="is-price">18,90 €</p><!-- /wp:paragraph --></div><!-- /wp:group -->
									<!-- wp:group {"className":"menume-solutions__demo-status","layout":{"type":"flex","flexWrap":"nowrap"}} --><div class="wp-block-group menume-solutions__demo-status"><!-- wp:paragraph {"className":"is-check"} --><p class="is-check">✓</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Änderung veröffentlicht</p><!-- /wp:paragraph --></div><!-- /wp:group -->
								</div>
								<!-- /wp:group -->
							<?php elseif ( '02' === $card[5] ) : ?>
								<!-- wp:group {"className":"menume-solutions__demo menume-solutions__demo--import","layout":{"type":"default"}} -->
								<div class="wp-block-group menume-solutions__demo menume-solutions__demo--import">
									<!-- wp:paragraph {"className":"is-file"} --><p class="is-file">PDF</p><!-- /wp:paragraph -->
									<!-- wp:paragraph {"className":"is-arrow"} --><p class="is-arrow">→</p><!-- /wp:paragraph -->
									<!-- wp:group {"className":"is-result","layout":{"type":"default"}} --><div class="wp-block-group is-result"><!-- wp:paragraph --><p>6 Kategorien</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>42 Gerichte erkannt</p><!-- /wp:paragraph --></div><!-- /wp:group -->
								</div>
								<!-- /wp:group -->
							<?php elseif ( '03' === $card[5] ) : ?>
								<!-- wp:group {"className":"menume-solutions__demo menume-solutions__demo--translation","layout":{"type":"default"}} -->
								<div class="wp-block-group menume-solutions__demo menume-solutions__demo--translation">
									<!-- wp:group {"className":"menume-solutions__language-row","layout":{"type":"flex","flexWrap":"nowrap"}} --><div class="wp-block-group menume-solutions__language-row"><!-- wp:paragraph {"className":"is-language"} --><p class="is-language">DE</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Hausgemachte Tomatensuppe</p><!-- /wp:paragraph --></div><!-- /wp:group -->
									<!-- wp:paragraph {"className":"is-translate-arrow"} --><p class="is-translate-arrow">↓</p><!-- /wp:paragraph -->
									<!-- wp:group {"className":"menume-solutions__language-row is-translated","layout":{"type":"flex","flexWrap":"nowrap"}} --><div class="wp-block-group menume-solutions__language-row is-translated"><!-- wp:paragraph {"className":"is-language"} --><p class="is-language">EN</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Homemade tomato soup</p><!-- /wp:paragraph --></div><!-- /wp:group -->
								</div>
								<!-- /wp:group -->
							<?php elseif ( '04' === $card[5] ) : ?>
								<!-- wp:group {"className":"menume-solutions__demo menume-solutions__demo--image","layout":{"type":"flex","flexWrap":"nowrap"}} -->
								<div class="wp-block-group menume-solutions__demo menume-solutions__demo--image">
									<!-- wp:group {"className":"menume-solutions__image-sample is-before","layout":{"type":"default"}} --><div class="wp-block-group menume-solutions__image-sample is-before"><!-- wp:paragraph --><p>Vorher</p><!-- /wp:paragraph --></div><!-- /wp:group -->
									<!-- wp:paragraph {"className":"is-magic"} --><p class="is-magic">✦</p><!-- /wp:paragraph -->
									<!-- wp:group {"className":"menume-solutions__image-sample is-after","layout":{"type":"default"}} --><div class="wp-block-group menume-solutions__image-sample is-after"><!-- wp:paragraph --><p>Nachher</p><!-- /wp:paragraph --></div><!-- /wp:group -->
								</div>
								<!-- /wp:group -->
							<?php elseif ( '05' === $card[5] ) : ?>
								<!-- wp:group {"className":"menume-solutions__demo menume-solutions__demo--allergens","layout":{"type":"default"}} -->
								<div class="wp-block-group menume-solutions__demo menume-solutions__demo--allergens">
									<!-- wp:group {"className":"menume-solutions__allergen-row","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} --><div class="wp-block-group menume-solutions__allergen-row"><!-- wp:paragraph --><p>Pasta Primavera</p><!-- /wp:paragraph --><!-- wp:paragraph {"className":"is-tags"} --><p class="is-tags">A · G</p><!-- /wp:paragraph --></div><!-- /wp:group -->
									<!-- wp:group {"className":"menume-solutions__allergen-row","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} --><div class="wp-block-group menume-solutions__allergen-row"><!-- wp:paragraph --><p>Caesar Salad</p><!-- /wp:paragraph --><!-- wp:paragraph {"className":"is-tags"} --><p class="is-tags">C · G</p><!-- /wp:paragraph --></div><!-- /wp:group -->
									<!-- wp:paragraph {"className":"is-print"} --><p class="is-print">⌕ Tabelle anzeigen &amp; drucken</p><!-- /wp:paragraph -->
								</div>
								<!-- /wp:group -->
							<?php else : ?>
								<!-- wp:group {"className":"menume-solutions__demo menume-solutions__demo--design","layout":{"type":"default"}} -->
								<div class="wp-block-group menume-solutions__demo menume-solutions__demo--design">
									<!-- wp:group {"className":"menume-solutions__templates","layout":{"type":"flex","flexWrap":"nowrap"}} --><div class="wp-block-group menume-solutions__templates"><!-- wp:group {"className":"is-template is-active","layout":{"type":"default"}} --><div class="wp-block-group is-template is-active"></div><!-- /wp:group --><!-- wp:group {"className":"is-template","layout":{"type":"default"}} --><div class="wp-block-group is-template"></div><!-- /wp:group --><!-- wp:group {"className":"is-template","layout":{"type":"default"}} --><div class="wp-block-group is-template"></div><!-- /wp:group --></div><!-- /wp:group -->
									<!-- wp:group {"className":"menume-solutions__swatches","layout":{"type":"flex","flexWrap":"nowrap"}} --><div class="wp-block-group menume-solutions__swatches"><!-- wp:paragraph --><p>●</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>●</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>●</p><!-- /wp:paragraph --><!-- wp:paragraph {"className":"is-selected"} --><p class="is-selected">✓ Dein Design</p><!-- /wp:paragraph --></div><!-- /wp:group -->
								</div>
								<!-- /wp:group -->
							<?php endif; ?>
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
				<?php
			endforeach;
			?>
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
