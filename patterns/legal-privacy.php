<?php
/**
 * Title: Datenschutzerklärung
 * Slug: menume/legal-privacy
 * Description: GDPR-oriented privacy policy draft for the MenuMe website.
 * Categories: menume-legal
 * Keywords: datenschutz, privacy, dsgvo, legal, menume
 * Inserter: true
 */
?>

<!-- wp:group {"align":"full","tagName":"main","anchor":"datenschutz","className":"menume-legal","metadata":{"name":"Datenschutzerklärung"},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull menume-legal" id="datenschutz">
	<!-- wp:group {"align":"wide","className":"menume-legal__layout","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide menume-legal__layout">
		<!-- wp:group {"tagName":"aside","className":"menume-legal__sidebar","layout":{"type":"default"}} -->
		<aside class="wp-block-group menume-legal__sidebar">
			<!-- wp:paragraph {"className":"menume-legal__eyebrow"} -->
			<p class="menume-legal__eyebrow"><?php echo esc_html__( 'RECHTLICHES', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"className":"menume-legal__title"} -->
			<h1 class="wp-block-heading menume-legal__title"><?php echo esc_html__( 'DATENSCHUTZERKLÄRUNG', 'menume' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"menume-legal__updated"} -->
			<p class="menume-legal__updated"><?php echo esc_html__( 'Stand: [DATUM ERGÄNZEN]', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"className":"menume-legal__draft-notice","layout":{"type":"default"}} -->
			<div class="wp-block-group menume-legal__draft-notice">
				<!-- wp:paragraph -->
				<p><strong><?php echo esc_html__( 'Entwurf – Angaben ergänzen', 'menume' ); ?></strong></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p><?php echo esc_html__( 'Hosting, E-Mail-Anbieter, Unternehmensdaten und Löschfristen müssen vor Veröffentlichung eingetragen werden.', 'menume' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:navigation {"overlayMenu":"never","className":"menume-legal__toc","layout":{"type":"flex","orientation":"vertical"}} -->
				<!-- wp:navigation-link {"label":"1. Verantwortlicher","url":"#privacy-verantwortlicher","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"2. Allgemeine Hinweise","url":"#privacy-allgemein","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"3. Hosting und Serverlogs","url":"#privacy-hosting","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"4. Kontaktformular","url":"#privacy-kontakt","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"5. Demo-Anfrage","url":"#privacy-demo","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"6. Spam-Schutz","url":"#privacy-spam","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"7. WhatsApp","url":"#privacy-whatsapp","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"8. Cookies","url":"#privacy-cookies","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"9. Empfänger","url":"#privacy-empfaenger","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"10. Speicherdauer","url":"#privacy-speicherung","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"11. Rechte","url":"#privacy-rechte","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"12. Aufsichtsbehörde","url":"#privacy-aufsicht","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"13. Sicherheit","url":"#privacy-sicherheit","kind":"custom"} /-->
			<!-- /wp:navigation -->
		</aside>
		<!-- /wp:group -->

		<!-- wp:group {"className":"menume-legal__content","layout":{"type":"default"}} -->
		<div class="wp-block-group menume-legal__content">
			<!-- wp:paragraph {"className":"menume-legal__lead"} -->
			<p class="menume-legal__lead"><?php echo esc_html__( 'Diese Datenschutzerklärung informiert darüber, welche personenbezogenen Daten beim Besuch dieser Website und bei der Kontaktaufnahme verarbeitet werden.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"anchor":"privacy-verantwortlicher"} -->
			<h2 class="wp-block-heading" id="privacy-verantwortlicher"><?php echo esc_html__( '1. Verantwortlicher', 'menume' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"menume-legal__placeholder"} -->
			<p class="menume-legal__placeholder"><?php echo esc_html__( '[VOLLSTÄNDIGER RECHTLICHER NAME / RECHTSFORM]', 'menume' ); ?><br><?php echo esc_html__( '[VERTRETUNGSBERECHTIGTE PERSON]', 'menume' ); ?><br><?php echo esc_html__( '[VOLLSTÄNDIGE ANSCHRIFT]', 'menume' ); ?><br><?php echo esc_html__( 'E-Mail: [E-MAIL ERGÄNZEN]', 'menume' ); ?><br><?php echo esc_html__( 'Telefon: [TELEFON ERGÄNZEN]', 'menume' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"menume-legal__placeholder"} -->
			<p class="menume-legal__placeholder"><?php echo esc_html__( '[FALLS BESTELLT: Kontaktdaten des Datenschutzbeauftragten. Andernfalls Abschnitt entfernen.]', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"anchor":"privacy-allgemein"} -->
			<h2 class="wp-block-heading" id="privacy-allgemein"><?php echo esc_html__( '2. Allgemeine Hinweise und Rechtsgrundlagen', 'menume' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Wir verarbeiten personenbezogene Daten nur, soweit dies zur Bereitstellung der Website, zur Bearbeitung von Anfragen, zur Durchführung vorvertraglicher Maßnahmen, zur Vertragserfüllung oder aufgrund gesetzlicher Pflichten erforderlich ist.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:list -->
			<ul class="wp-block-list">
				<!-- wp:list-item --><li><?php echo esc_html__( 'Art. 6 Abs. 1 lit. b DSGVO für Anfragen im Zusammenhang mit einem möglichen oder bestehenden Vertrag.', 'menume' ); ?></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><?php echo esc_html__( 'Art. 6 Abs. 1 lit. c DSGVO zur Erfüllung rechtlicher Verpflichtungen.', 'menume' ); ?></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><?php echo esc_html__( 'Art. 6 Abs. 1 lit. f DSGVO für den sicheren, stabilen und wirtschaftlichen Betrieb der Website.', 'menume' ); ?></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><?php echo esc_html__( 'Art. 6 Abs. 1 lit. a DSGVO, soweit wir ausdrücklich eine Einwilligung einholen.', 'menume' ); ?></li><!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->

			<!-- wp:heading {"level":2,"anchor":"privacy-hosting"} -->
			<h2 class="wp-block-heading" id="privacy-hosting"><?php echo esc_html__( '3. Hosting und Server-Logfiles', 'menume' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"menume-legal__placeholder"} -->
			<p class="menume-legal__placeholder"><?php echo esc_html__( '[HOSTING-ANBIETER, ANSCHRIFT, SERVERSTANDORT UND GEGEBENENFALLS CDN ERGÄNZEN]', 'menume' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Beim Aufruf der Website kann der Hosting-Anbieter technisch erforderliche Daten in Server-Logfiles verarbeiten. Dazu können IP-Adresse, Datum und Uhrzeit, aufgerufene Seite, übertragene Datenmenge, Referrer, Browser, Betriebssystem und Zugriffsstatus gehören.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Die Verarbeitung erfolgt zur sicheren Bereitstellung, Fehleranalyse und Abwehr missbräuchlicher Zugriffe auf Grundlage von Art. 6 Abs. 1 lit. f DSGVO.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"menume-legal__placeholder"} -->
			<p class="menume-legal__placeholder"><?php echo esc_html__( '[SPEICHERDAUER DER SERVER-LOGFILES ERGÄNZEN]', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"anchor":"privacy-kontakt"} -->
			<h2 class="wp-block-heading" id="privacy-kontakt"><?php echo esc_html__( '4. Kontaktformular und Kontaktaufnahme', 'menume' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Bei einer Kontaktanfrage verarbeiten wir Name, E-Mail-Adresse, Betreff, Nachricht und alle freiwillig mitgeteilten Angaben. Die Daten werden verwendet, um die Anfrage zu bearbeiten und Rückfragen zu beantworten.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Steht die Anfrage im Zusammenhang mit einem möglichen Vertrag, erfolgt die Verarbeitung auf Grundlage von Art. 6 Abs. 1 lit. b DSGVO. Bei sonstigen Anfragen beruht sie auf unserem berechtigten Interesse an einer sachgerechten Kommunikation gemäß Art. 6 Abs. 1 lit. f DSGVO.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"anchor":"privacy-demo"} -->
			<h2 class="wp-block-heading" id="privacy-demo"><?php echo esc_html__( '5. Demo-Anfragen', 'menume' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Für eine Demo-Anfrage verarbeiten wir insbesondere Name, E-Mail-Adresse, freiwillig die Telefonnummer, Restaurantname, Angaben zur aktuellen Situation und Speisekarte, Logo- und Designstatus, gewünschten Startzeitpunkt, gegebenenfalls einen Eröffnungstermin sowie freiwillige Nachrichten.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Die Verarbeitung dient der Vorbereitung einer passenden Produktvorstellung und der Durchführung vorvertraglicher Maßnahmen auf Anfrage der betroffenen Person gemäß Art. 6 Abs. 1 lit. b DSGVO. Die Übermittlung der Anfrage begründet noch keinen kostenpflichtigen Vertrag.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"anchor":"privacy-spam"} -->
			<h2 class="wp-block-heading" id="privacy-spam"><?php echo esc_html__( '6. Technischer Spam- und Missbrauchsschutz', 'menume' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Zum Schutz der Formulare vor automatisierten oder übermäßigen Anfragen verwenden wir ein verborgenes Prüffeld und eine zeitlich begrenzte Ratenbegrenzung. Hierfür wird aus der IP-Adresse ein nicht unmittelbar lesbarer Prüfwert gebildet und für höchstens 15 Minuten gespeichert.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Rechtsgrundlage ist unser berechtigtes Interesse an der Sicherheit und Funktionsfähigkeit unserer Formulare gemäß Art. 6 Abs. 1 lit. f DSGVO.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"anchor":"privacy-whatsapp"} -->
			<h2 class="wp-block-heading" id="privacy-whatsapp"><?php echo esc_html__( '7. Kontakt über WhatsApp', 'menume' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Wenn der angebotene WhatsApp-Link aktiv genutzt wird, wird eine Verbindung zu WhatsApp hergestellt. Dabei verarbeitet WhatsApp Daten nach eigener Verantwortung; hierzu können Telefonnummer, Kommunikationsinhalte, Geräte- und Verbindungsdaten gehören.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Die Nutzung von WhatsApp ist freiwillig. Alternativ kann jederzeit das Kontaktformular oder E-Mail verwendet werden. Bei Übermittlungen in Drittländer gelten die Datenschutzinformationen und Übermittlungsmechanismen des Anbieters.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"menume-legal__placeholder"} -->
			<p class="menume-legal__placeholder"><?php echo esc_html__( '[PRÜFEN/ERGÄNZEN: WhatsApp Business, verantwortliche Meta-Gesellschaft, geschäftliche Telefonnummer und verwendete Einstellungen]', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"anchor":"privacy-cookies"} -->
			<h2 class="wp-block-heading" id="privacy-cookies"><?php echo esc_html__( '8. Cookies und vergleichbare Technologien', 'menume' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Nach aktuellem Stand setzen wir auf den öffentlich zugänglichen Seiten keine Analyse-, Marketing- oder Tracking-Dienste ein. WordPress kann technisch notwendige Cookies verwenden, insbesondere für angemeldete Administratoren und Funktionen der Website.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Sollten künftig nicht notwendige Cookies oder externe Tracking-Dienste eingesetzt werden, werden diese Informationen aktualisiert und erforderlichenfalls vorab eine Einwilligung eingeholt.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"anchor":"privacy-empfaenger"} -->
			<h2 class="wp-block-heading" id="privacy-empfaenger"><?php echo esc_html__( '9. Empfänger und Auftragsverarbeiter', 'menume' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Personenbezogene Daten werden nur an Dienstleister oder sonstige Empfänger übermittelt, soweit dies für die genannten Zwecke erforderlich ist, eine gesetzliche Pflicht besteht oder eine wirksame Einwilligung vorliegt.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:list -->
			<ul class="wp-block-list">
				<!-- wp:list-item --><li><?php echo esc_html__( 'Hosting- und Infrastruktur-Anbieter.', 'menume' ); ?></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><?php echo esc_html__( 'E-Mail- und SMTP-Dienstleister zur Übermittlung und Bearbeitung von Anfragen.', 'menume' ); ?></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><?php echo esc_html__( 'IT-, Wartungs- oder Support-Dienstleister, soweit erforderlich.', 'menume' ); ?></li><!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
			<!-- wp:paragraph {"className":"menume-legal__placeholder"} -->
			<p class="menume-legal__placeholder"><?php echo esc_html__( '[KONKRETE EMPFÄNGER, AUFTRAGSVERARBEITER UND E-MAIL-/SMTP-ANBIETER ERGÄNZEN]', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"anchor":"privacy-speicherung"} -->
			<h2 class="wp-block-heading" id="privacy-speicherung"><?php echo esc_html__( '10. Speicherdauer', 'menume' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Wir speichern personenbezogene Daten nur so lange, wie sie für den jeweiligen Zweck erforderlich sind. Anfragen werden gelöscht, wenn sie abschließend bearbeitet sind und keine vertraglichen oder gesetzlichen Aufbewahrungspflichten entgegenstehen.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"menume-legal__placeholder"} -->
			<p class="menume-legal__placeholder"><?php echo esc_html__( '[KONKRETE LÖSCHFRISTEN FÜR KONTAKT-, DEMO- UND E-MAIL-ANFRAGEN FESTLEGEN]', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"anchor":"privacy-rechte"} -->
			<h2 class="wp-block-heading" id="privacy-rechte"><?php echo esc_html__( '11. Rechte betroffener Personen', 'menume' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Betroffene Personen haben nach Maßgabe der gesetzlichen Voraussetzungen insbesondere folgende Rechte:', 'menume' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:list -->
			<ul class="wp-block-list">
				<!-- wp:list-item --><li><?php echo esc_html__( 'Auskunft über die verarbeiteten personenbezogenen Daten.', 'menume' ); ?></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><?php echo esc_html__( 'Berichtigung unrichtiger oder unvollständiger Daten.', 'menume' ); ?></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><?php echo esc_html__( 'Löschung oder Einschränkung der Verarbeitung.', 'menume' ); ?></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><?php echo esc_html__( 'Datenübertragbarkeit, soweit anwendbar.', 'menume' ); ?></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><?php echo esc_html__( 'Widerspruch gegen Verarbeitungen auf Grundlage von Art. 6 Abs. 1 lit. e oder f DSGVO.', 'menume' ); ?></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><?php echo esc_html__( 'Widerruf einer Einwilligung mit Wirkung für die Zukunft.', 'menume' ); ?></li><!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Zur Ausübung der Rechte genügt eine Nachricht an die oben genannte Kontaktadresse.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"anchor":"privacy-aufsicht"} -->
			<h2 class="wp-block-heading" id="privacy-aufsicht"><?php echo esc_html__( '12. Beschwerderecht bei einer Aufsichtsbehörde', 'menume' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Betroffene Personen haben das Recht, sich bei einer Datenschutzaufsichtsbehörde zu beschweren, insbesondere in dem Mitgliedstaat ihres Aufenthaltsorts, ihres Arbeitsplatzes oder des Orts des mutmaßlichen Verstoßes.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"menume-legal__placeholder"} -->
			<p class="menume-legal__placeholder"><?php echo esc_html__( '[FÜR EANO ZUSTÄNDIGE LANDESDATENSCHUTZBEHÖRDE NACH FIRMENSITZ ERGÄNZEN]', 'menume' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"anchor":"privacy-sicherheit"} -->
			<h2 class="wp-block-heading" id="privacy-sicherheit"><?php echo esc_html__( '13. Datensicherheit und Aktualisierung', 'menume' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Wir treffen angemessene technische und organisatorische Maßnahmen, um personenbezogene Daten vor Verlust, unbefugtem Zugriff und Missbrauch zu schützen. Die Übertragung der Website soll verschlüsselt über HTTPS erfolgen.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Wir aktualisieren diese Datenschutzerklärung, wenn sich Verarbeitungen, eingesetzte Dienste oder rechtliche Anforderungen ändern.', 'menume' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->
