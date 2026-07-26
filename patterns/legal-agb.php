<?php
/**
 * Title: Allgemeine Geschäftsbedingungen
 * Slug: menume/legal-agb
 * Description: Structured AGB draft for the MenuMe SaaS offering.
 * Categories: menume-legal
 * Keywords: agb, legal, recht, vertrag, menume
 * Inserter: true
 */
?>

<!-- wp:group {"align":"full","tagName":"main","anchor":"agb","className":"menume-legal","metadata":{"name":"AGB"},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull menume-legal" id="agb">
	<!-- wp:group {"align":"wide","className":"menume-legal__layout","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide menume-legal__layout">
		<!-- wp:group {"tagName":"aside","className":"menume-legal__sidebar","layout":{"type":"default"}} -->
		<aside class="wp-block-group menume-legal__sidebar">
			<!-- wp:paragraph {"className":"menume-legal__eyebrow"} -->
			<p class="menume-legal__eyebrow"><?php echo esc_html__( 'RECHTLICHES', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"className":"menume-legal__title"} -->
			<h1 class="wp-block-heading menume-legal__title"><?php echo esc_html__( 'ALLGEMEINE GESCHÄFTSBEDINGUNGEN', 'menume' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"menume-legal__updated"} -->
			<p class="menume-legal__updated"><?php echo esc_html__( 'Stand: [DATUM ERGÄNZEN]', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"className":"menume-legal__draft-notice","layout":{"type":"default"}} -->
			<div class="wp-block-group menume-legal__draft-notice">
				<!-- wp:paragraph -->
				<p><strong><?php echo esc_html__( 'Entwurf – nicht veröffentlichen', 'menume' ); ?></strong></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p><?php echo esc_html__( 'Alle gelb markierten Angaben müssen vor der Nutzung ergänzt und die Vertragsbedingungen rechtlich geprüft werden.', 'menume' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:navigation {"overlayMenu":"never","className":"menume-legal__toc","layout":{"type":"flex","orientation":"vertical"}} -->
				<!-- wp:navigation-link {"label":"1. Geltungsbereich","url":"#agb-geltung","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"2. Vertragspartner","url":"#agb-partner","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"3. Vertragsgegenstand","url":"#agb-gegenstand","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"4. Vertragsschluss","url":"#agb-abschluss","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"5. Leistungen","url":"#agb-leistung","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"6. Mitwirkungspflichten","url":"#agb-mitwirkung","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"7. Preise und Zahlung","url":"#agb-zahlung","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"8. Laufzeit und Kündigung","url":"#agb-laufzeit","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"9. Nutzungsrechte","url":"#agb-rechte","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"10. KI-Funktionen","url":"#agb-ki","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"11. Verfügbarkeit","url":"#agb-verfuegbarkeit","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"12. Haftung","url":"#agb-haftung","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"13. Datenschutz","url":"#agb-datenschutz","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"14. Schlussbestimmungen","url":"#agb-schluss","kind":"custom"} /-->
			<!-- /wp:navigation -->
		</aside>
		<!-- /wp:group -->

		<!-- wp:group {"className":"menume-legal__content","layout":{"type":"default"}} -->
		<div class="wp-block-group menume-legal__content">
			<!-- wp:paragraph {"className":"menume-legal__lead"} -->
			<p class="menume-legal__lead"><?php echo esc_html__( 'Diese Allgemeinen Geschäftsbedingungen regeln die Nutzung der Software-as-a-Service-Plattform MenuMe und ergänzender Leistungen von Eano.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"anchor":"agb-geltung"} -->
			<h2 class="wp-block-heading" id="agb-geltung"><?php echo esc_html__( '1. Geltungsbereich', 'menume' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Diese AGB gelten für alle Verträge über die Bereitstellung und Nutzung von MenuMe sowie damit verbundene Einrichtungs-, Import-, Design- und Supportleistungen.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"menume-legal__placeholder"} -->
			<p class="menume-legal__placeholder"><?php echo esc_html__( '[BITTE ENTSCHEIDEN: Angebot ausschließlich für Unternehmer im Sinne des § 14 BGB oder auch für Verbraucher?]', 'menume' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Abweichende Bedingungen des Kunden gelten nur, wenn Eano ihrer Geltung ausdrücklich in Textform zugestimmt hat.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"anchor":"agb-partner"} -->
			<h2 class="wp-block-heading" id="agb-partner"><?php echo esc_html__( '2. Vertragspartner', 'menume' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"menume-legal__placeholder"} -->
			<p class="menume-legal__placeholder"><?php echo esc_html__( '[VOLLSTÄNDIGER RECHTLICHER NAME / RECHTSFORM]', 'menume' ); ?><br><?php echo esc_html__( '[VERTRETUNGSBERECHTIGTE PERSON]', 'menume' ); ?><br><?php echo esc_html__( '[VOLLSTÄNDIGE ANSCHRIFT]', 'menume' ); ?><br><?php echo esc_html__( '[E-MAIL-ADRESSE]', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"anchor":"agb-gegenstand"} -->
			<h2 class="wp-block-heading" id="agb-gegenstand"><?php echo esc_html__( '3. Vertragsgegenstand', 'menume' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'MenuMe ermöglicht Kunden insbesondere, digitale Speisekarten anzulegen, zu gestalten, zu aktualisieren und Gästen bereitzustellen. Der konkrete Funktionsumfang ergibt sich aus dem jeweiligen Angebot, Tarif oder der individuellen Leistungsbeschreibung.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Optionale Leistungen wie Datenimport, Logoerstellung, visuelle Gestaltung oder individuelle Anpassungen sind nur geschuldet, wenn sie ausdrücklich vereinbart wurden.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"anchor":"agb-abschluss"} -->
			<h2 class="wp-block-heading" id="agb-abschluss"><?php echo esc_html__( '4. Demo-Anfrage und Vertragsschluss', 'menume' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Die Übermittlung einer Demo- oder Kontaktanfrage ist unverbindlich und stellt weder ein verbindliches Angebot des Interessenten noch eine Annahme durch Eano dar.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"menume-legal__placeholder"} -->
			<p class="menume-legal__placeholder"><?php echo esc_html__( '[VERTRAGSSCHLUSS ERGÄNZEN: individuelles Angebot und Annahme per E-Mail / Online-Bestellung / schriftlicher Vertrag]', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"anchor":"agb-leistung"} -->
			<h2 class="wp-block-heading" id="agb-leistung"><?php echo esc_html__( '5. Leistungen von Eano', 'menume' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:list -->
			<ul class="wp-block-list">
				<!-- wp:list-item --><li><?php echo esc_html__( 'Bereitstellung der vereinbarten MenuMe-Funktionen während der Vertragslaufzeit.', 'menume' ); ?></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><?php echo esc_html__( 'Speicherung und Auslieferung der vom Kunden eingepflegten Inhalte im vereinbarten Umfang.', 'menume' ); ?></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><?php echo esc_html__( 'Wartung, Fehlerbehebung und Weiterentwicklung der Plattform.', 'menume' ); ?></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><?php echo esc_html__( 'Zusatzleistungen nur entsprechend der jeweiligen Leistungsbeschreibung.', 'menume' ); ?></li><!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
			<!-- wp:paragraph {"className":"menume-legal__placeholder"} -->
			<p class="menume-legal__placeholder"><?php echo esc_html__( '[GENAUEN LEISTUNGSUMFANG, SUPPORTKANÄLE UND REAKTIONSZEITEN ERGÄNZEN]', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"anchor":"agb-mitwirkung"} -->
			<h2 class="wp-block-heading" id="agb-mitwirkung"><?php echo esc_html__( '6. Mitwirkungspflichten des Kunden', 'menume' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Der Kunde stellt die für die Leistung erforderlichen Informationen, Inhalte und Dateien rechtzeitig und in geeigneter Qualität bereit. Er ist für die Richtigkeit, Aktualität und Rechtmäßigkeit seiner Inhalte verantwortlich.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Dies gilt insbesondere für Preise, Produktangaben, Allergene, Zusatzstoffe, Übersetzungen, Bilder, Marken und sonstige gesetzlich vorgeschriebene Informationen. Der Kunde stellt sicher, dass er über die erforderlichen Nutzungsrechte verfügt.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"anchor":"agb-zahlung"} -->
			<h2 class="wp-block-heading" id="agb-zahlung"><?php echo esc_html__( '7. Preise, Abrechnung und Zahlung', 'menume' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"menume-legal__placeholder"} -->
			<p class="menume-legal__placeholder"><?php echo esc_html__( '[PREISE NETTO/BRUTTO, UMSATZSTEUER, SETUP-GEBÜHR, ABRECHNUNGSINTERVALL, ZAHLUNGSMETHODEN UND FÄLLIGKEIT ERGÄNZEN]', 'menume' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Maßgeblich sind die im Angebot oder bei Vertragsschluss ausgewiesenen Preise. Zusatzleistungen werden nur berechnet, wenn sie vereinbart oder vom Kunden beauftragt wurden.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"anchor":"agb-laufzeit"} -->
			<h2 class="wp-block-heading" id="agb-laufzeit"><?php echo esc_html__( '8. Vertragslaufzeit und Kündigung', 'menume' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"menume-legal__placeholder"} -->
			<p class="menume-legal__placeholder"><?php echo esc_html__( '[MINDESTLAUFZEIT, AUTOMATISCHE VERLÄNGERUNG, KÜNDIGUNGSFRIST UND KÜNDIGUNGSFORM ERGÄNZEN]', 'menume' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Das Recht zur außerordentlichen Kündigung aus wichtigem Grund bleibt unberührt.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"anchor":"agb-rechte"} -->
			<h2 class="wp-block-heading" id="agb-rechte"><?php echo esc_html__( '9. Nutzungsrechte und Kundeninhalte', 'menume' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Eano räumt dem Kunden für die Vertragsdauer ein einfaches, nicht übertragbares Recht ein, MenuMe im vereinbarten Umfang für den eigenen Geschäftsbetrieb zu nutzen.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Der Kunde behält seine Rechte an bereitgestellten Inhalten. Er räumt Eano die für Speicherung, Bearbeitung, Darstellung und technische Bereitstellung erforderlichen Rechte für die Vertragsdauer ein.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"menume-legal__placeholder"} -->
			<p class="menume-legal__placeholder"><?php echo esc_html__( '[REGELUNG ZU DATENEXPORT UND LÖSCHUNG NACH VERTRAGSENDE ERGÄNZEN]', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"anchor":"agb-ki"} -->
			<h2 class="wp-block-heading" id="agb-ki"><?php echo esc_html__( '10. KI-gestützte Funktionen', 'menume' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'MenuMe kann KI-gestützte Funktionen zur Übersetzung sowie zur Bearbeitung oder Optimierung von Bildern bereitstellen. Ergebnisse können Abweichungen oder Fehler enthalten und sind vom Kunden vor Veröffentlichung zu prüfen.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'KI-Ausgaben ersetzen insbesondere keine rechtliche, lebensmittelrechtliche oder fachliche Prüfung. Verbindliche Angaben zu Allergenen, Zusatzstoffen und Preisen bleiben in der Verantwortung des Kunden.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"menume-legal__placeholder"} -->
			<p class="menume-legal__placeholder"><?php echo esc_html__( '[EINGESETZTE KI-ANBIETER UND REGELN FÜR HOCHGELADENE INHALTE PRÜFEN/ERGÄNZEN]', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"anchor":"agb-verfuegbarkeit"} -->
			<h2 class="wp-block-heading" id="agb-verfuegbarkeit"><?php echo esc_html__( '11. Verfügbarkeit, Wartung und Änderungen', 'menume' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Eano darf erforderliche Wartungs- und Sicherheitsmaßnahmen durchführen. Vorhersehbare Einschränkungen werden nach Möglichkeit rechtzeitig angekündigt.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"menume-legal__placeholder"} -->
			<p class="menume-legal__placeholder"><?php echo esc_html__( '[GEWÜNSCHTE VERFÜGBARKEIT / SLA ODER AUSDRÜCKLICH KEIN SLA ERGÄNZEN]', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"anchor":"agb-haftung"} -->
			<h2 class="wp-block-heading" id="agb-haftung"><?php echo esc_html__( '12. Gewährleistung und Haftung', 'menume' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Eano haftet unbeschränkt bei Vorsatz und grober Fahrlässigkeit, bei Verletzung von Leben, Körper oder Gesundheit sowie in Fällen zwingender gesetzlicher Haftung.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Bei leicht fahrlässiger Verletzung wesentlicher Vertragspflichten ist die Haftung auf den bei Vertragsschluss vorhersehbaren, vertragstypischen Schaden begrenzt. Im Übrigen richtet sich die Haftung nach den gesetzlichen Vorschriften.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"menume-legal__placeholder"} -->
			<p class="menume-legal__placeholder"><?php echo esc_html__( '[HAFTUNGSREGELUNG MUSS NACH FESTLEGUNG VON B2B/B2C UND LEISTUNGSUMFANG ANWALTLICH GEPRÜFT WERDEN]', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"anchor":"agb-datenschutz"} -->
			<h2 class="wp-block-heading" id="agb-datenschutz"><?php echo esc_html__( '13. Datenschutz und Auftragsverarbeitung', 'menume' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Informationen zur Verarbeitung personenbezogener Daten durch Eano enthält die Datenschutzerklärung. Soweit Eano personenbezogene Daten im Auftrag des Kunden verarbeitet, schließen die Parteien erforderlichenfalls einen Vertrag zur Auftragsverarbeitung gemäß Art. 28 DSGVO.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"anchor":"agb-schluss"} -->
			<h2 class="wp-block-heading" id="agb-schluss"><?php echo esc_html__( '14. Schlussbestimmungen', 'menume' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Es gilt das Recht der Bundesrepublik Deutschland unter Ausschluss des UN-Kaufrechts, soweit diese Rechtswahl zulässig ist.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"menume-legal__placeholder"} -->
			<p class="menume-legal__placeholder"><?php echo esc_html__( '[GERICHTSSTAND NUR BEI REINEM B2B-ANGEBOT UND NACH RECHTLICHER PRÜFUNG ERGÄNZEN]', 'menume' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->
