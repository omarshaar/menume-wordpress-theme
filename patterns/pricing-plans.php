<?php
/**
 * Title: Pricing Plans
 * Slug: menume/pricing-plans
 * Description: MenuMe pricing plans (Basis, Premium, Individuell) with monthly/annual prices and optional sale pricing via the MenuMe Pricing plugin.
 * Categories: menume-pricing
 * Keywords: pricing, preise, plans, tarife, menume
 * Inserter: true
 */
?>

<!-- wp:group {"align":"full","tagName":"main","anchor":"preise","className":"menume-pricing","metadata":{"name":"MenuMe Preise"},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull menume-pricing" id="preise">
	<!-- wp:group {"align":"wide","className":"menume-pricing__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide menume-pricing__inner">
		<!-- wp:group {"className":"menume-pricing__header","layout":{"type":"constrained","contentSize":"720px"}} -->
		<div class="wp-block-group menume-pricing__header">
			<!-- wp:paragraph {"className":"menume-pricing__eyebrow"} -->
			<p class="menume-pricing__eyebrow"><?php echo esc_html__( 'PREISE', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"className":"menume-pricing__title"} -->
			<h1 class="wp-block-heading menume-pricing__title"><?php echo esc_html__( 'DER PASSENDE PLAN FÜR DEIN RESTAURANT.', 'menume' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"menume-pricing__intro"} -->
			<p class="menume-pricing__intro"><?php echo esc_html__( 'Starte mit einer modernen digitalen Speisekarte. Wähle mehr Unterstützung oder stelle gemeinsam mit uns eine individuelle Lösung zusammen.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"className":"menume-pricing__billing-switch","layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons menume-pricing__billing-switch">
				<!-- wp:button {"className":"menume-pricing__billing-button is-active"} -->
				<div class="wp-block-button menume-pricing__billing-button is-active"><a class="wp-block-button__link wp-element-button" href="#monatlich"><?php echo esc_html__( 'Monatlich', 'menume' ); ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"menume-pricing__billing-button"} -->
				<div class="wp-block-button menume-pricing__billing-button"><a class="wp-block-button__link wp-element-button" href="#jaehrlich"><?php echo esc_html__( 'Jährlich', 'menume' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"menume-pricing__grid","layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
		<div class="wp-block-group menume-pricing__grid">
			<!-- wp:group {"className":"menume-pricing__card","metadata":{"name":"Basis Plan"},"layout":{"type":"default"}} -->
			<div class="wp-block-group menume-pricing__card">
				<!-- wp:heading {"level":2,"className":"menume-pricing__plan-title"} -->
				<h2 class="wp-block-heading menume-pricing__plan-title"><?php echo esc_html__( 'Basis', 'menume' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"className":"menume-pricing__plan-description"} -->
				<p class="menume-pricing__plan-description"><?php echo esc_html__( 'Deine digitale Speisekarte als eigene Website mit QR-Code für deine Gäste.', 'menume' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"className":"menume-pricing__prices","layout":{"type":"default"}} -->
				<div class="wp-block-group menume-pricing__prices">
					<!-- wp:group {"className":"menume-pricing__price-row is-monthly","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
					<div class="wp-block-group menume-pricing__price-row is-monthly">
						<!-- wp:paragraph {"className":"menume-pricing__price-label"} -->
						<p class="menume-pricing__price-label"><?php echo esc_html__( 'Monatsabo', 'menume' ); ?>[menume_price_if_sale plan="basis" cycle="monthly"] <span class="menume-pricing__price-offer"><?php echo esc_html__( 'Angebot', 'menume' ); ?></span>[/menume_price_if_sale]</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"className":"menume-pricing__price"} -->
						<p class="menume-pricing__price">[menume_price_if_sale plan="basis" cycle="monthly"]<span class="menume-pricing__price-was">[menume_price_was plan="basis" cycle="monthly"]</span> [/menume_price_if_sale]<span class="menume-pricing__price-now">[menume_price plan="basis" cycle="monthly"]</span> <small><?php echo esc_html__( '/ Monat', 'menume' ); ?></small></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"className":"menume-pricing__price-row is-annual","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
					<div class="wp-block-group menume-pricing__price-row is-annual">
						<!-- wp:paragraph {"className":"menume-pricing__price-label"} -->
						<p class="menume-pricing__price-label"><?php echo esc_html__( 'Jahresabo', 'menume' ); ?>[menume_price_if_sale plan="basis" cycle="yearly"] <span class="menume-pricing__price-offer"><?php echo esc_html__( 'Angebot', 'menume' ); ?></span>[/menume_price_if_sale]</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"className":"menume-pricing__price"} -->
						<p class="menume-pricing__price">[menume_price_if_sale plan="basis" cycle="yearly"]<span class="menume-pricing__price-was">[menume_price_was plan="basis" cycle="yearly"]</span> [/menume_price_if_sale]<span class="menume-pricing__price-now">[menume_price plan="basis" cycle="yearly"]</span> <small><?php echo esc_html__( '/ Jahr', 'menume' ); ?></small></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:list {"className":"menume-pricing__features"} -->
				<ul class="wp-block-list menume-pricing__features">
					<!-- wp:list-item --><li><?php echo esc_html__( 'Digitale Speisekarte als eigene Website', 'menume' ); ?></li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><?php echo esc_html__( 'QR-Code zum Teilen mit deinen Gästen', 'menume' ); ?></li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><?php echo esc_html__( 'Inhalte jederzeit selbst aktualisieren', 'menume' ); ?></li><!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->

				<!-- wp:buttons {"className":"menume-pricing__actions"} -->
				<div class="wp-block-buttons menume-pricing__actions">
					<!-- wp:button {"width":100,"className":"menume-pricing__button"} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 menume-pricing__button"><a class="wp-block-button__link wp-element-button" href="/demo"><?php echo esc_html__( 'Demo anfragen', 'menume' ); ?> →</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"menume-pricing__card is-featured","metadata":{"name":"Premium Plan"},"layout":{"type":"default"}} -->
			<div class="wp-block-group menume-pricing__card is-featured">
				<!-- wp:paragraph {"className":"menume-pricing__badge"} -->
				<p class="menume-pricing__badge"><?php echo esc_html__( 'EMPFOHLEN', 'menume' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":2,"className":"menume-pricing__plan-title"} -->
				<h2 class="wp-block-heading menume-pricing__plan-title"><?php echo esc_html__( 'Premium', 'menume' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"className":"menume-pricing__plan-description"} -->
				<p class="menume-pricing__plan-description"><?php echo esc_html__( 'Alle MenuMe-Funktionen: mehrsprachig, Allergene, KI-Fotos und persönlicher Support.', 'menume' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"className":"menume-pricing__prices","layout":{"type":"default"}} -->
				<div class="wp-block-group menume-pricing__prices">
					<!-- wp:group {"className":"menume-pricing__price-row is-monthly","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
					<div class="wp-block-group menume-pricing__price-row is-monthly">
						<!-- wp:paragraph {"className":"menume-pricing__price-label"} -->
						<p class="menume-pricing__price-label"><?php echo esc_html__( 'Monatsabo', 'menume' ); ?>[menume_price_if_sale plan="premium" cycle="monthly"] <span class="menume-pricing__price-offer"><?php echo esc_html__( 'Angebot', 'menume' ); ?></span>[/menume_price_if_sale]</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"className":"menume-pricing__price"} -->
						<p class="menume-pricing__price">[menume_price_if_sale plan="premium" cycle="monthly"]<span class="menume-pricing__price-was">[menume_price_was plan="premium" cycle="monthly"]</span> [/menume_price_if_sale]<span class="menume-pricing__price-now">[menume_price plan="premium" cycle="monthly"]</span> <small><?php echo esc_html__( '/ Monat', 'menume' ); ?></small></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"className":"menume-pricing__price-row is-annual","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
					<div class="wp-block-group menume-pricing__price-row is-annual">
						<!-- wp:paragraph {"className":"menume-pricing__price-label"} -->
						<p class="menume-pricing__price-label"><?php echo esc_html__( 'Jahresabo', 'menume' ); ?>[menume_price_if_sale plan="premium" cycle="yearly"] <span class="menume-pricing__price-offer"><?php echo esc_html__( 'Angebot', 'menume' ); ?></span>[/menume_price_if_sale]</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"className":"menume-pricing__price"} -->
						<p class="menume-pricing__price">[menume_price_if_sale plan="premium" cycle="yearly"]<span class="menume-pricing__price-was">[menume_price_was plan="premium" cycle="yearly"]</span> [/menume_price_if_sale]<span class="menume-pricing__price-now">[menume_price plan="premium" cycle="yearly"]</span> <small><?php echo esc_html__( '/ Jahr', 'menume' ); ?></small></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:list {"className":"menume-pricing__features"} -->
				<ul class="wp-block-list menume-pricing__features">
					<!-- wp:list-item --><li><?php echo esc_html__( 'Alle Funktionen aus dem Basis-Plan', 'menume' ); ?></li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><?php echo esc_html__( 'Mehrsprachige Inhalte', 'menume' ); ?></li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><?php echo esc_html__( 'Allergene und Eigenschaften verwalten', 'menume' ); ?></li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><?php echo esc_html__( 'Design passend zu deiner Marke', 'menume' ); ?></li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><?php echo esc_html__( 'Food-Fotos mit KI verfeinern', 'menume' ); ?></li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><?php echo esc_html__( 'Persönliche technische Unterstützung', 'menume' ); ?></li><!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->

				<!-- wp:buttons {"className":"menume-pricing__actions"} -->
				<div class="wp-block-buttons menume-pricing__actions">
					<!-- wp:button {"width":100,"className":"menume-pricing__button"} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 menume-pricing__button"><a class="wp-block-button__link wp-element-button" href="/demo"><?php echo esc_html__( 'Premium starten', 'menume' ); ?> →</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"menume-pricing__card is-custom","metadata":{"name":"Individueller Plan"},"layout":{"type":"default"}} -->
			<div class="wp-block-group menume-pricing__card is-custom">
				<!-- wp:heading {"level":2,"className":"menume-pricing__plan-title"} -->
				<h2 class="wp-block-heading menume-pricing__plan-title"><?php echo esc_html__( 'Individuell', 'menume' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"className":"menume-pricing__plan-description"} -->
				<p class="menume-pricing__plan-description"><?php echo esc_html__( 'Für besondere Anforderungen, mehrere Standorte oder einen individuell abgestimmten Leistungsumfang.', 'menume' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"className":"menume-pricing__custom-price","layout":{"type":"default"}} -->
				<div class="wp-block-group menume-pricing__custom-price">
					<!-- wp:paragraph {"className":"menume-pricing__custom-label"} -->
					<p class="menume-pricing__custom-label"><?php echo esc_html__( 'Preis nach Absprache', 'menume' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><?php echo esc_html__( 'Wir klären gemeinsam, was du wirklich brauchst, und erstellen anschließend ein transparentes Angebot.', 'menume' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:list {"className":"menume-pricing__features"} -->
				<ul class="wp-block-list menume-pricing__features">
					<!-- wp:list-item --><li><?php echo esc_html__( 'Individuell definierter Funktionsumfang', 'menume' ); ?></li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><?php echo esc_html__( 'Persönliche Planung und Beratung', 'menume' ); ?></li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><?php echo esc_html__( 'Lösung für besondere Abläufe und Anforderungen', 'menume' ); ?></li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><?php echo esc_html__( 'Transparentes Angebot nach dem Gespräch', 'menume' ); ?></li><!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->

				<!-- wp:buttons {"className":"menume-pricing__actions"} -->
				<div class="wp-block-buttons menume-pricing__actions">
					<!-- wp:button {"width":100,"className":"menume-pricing__button is-outline","style":{"border":{"width":"1px"}}} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 menume-pricing__button is-outline"><a class="wp-block-button__link wp-element-button" href="/kontakt" style="border-width:1px"><?php echo esc_html__( 'Lösung besprechen', 'menume' ); ?> →</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"align":"center","className":"menume-pricing__footnote"} -->
		<p class="has-text-align-center menume-pricing__footnote"><?php echo esc_html__( 'Beim Jahresabo wird der angezeigte Gesamtbetrag einmal jährlich abgerechnet. Alle Preise sind Endpreise ohne gesonderten Ausweis von Umsatzsteuer (Kleinunternehmer gemäß § 19 UStG).', 'menume' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->
