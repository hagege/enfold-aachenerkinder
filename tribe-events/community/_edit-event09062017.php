<?php
/**
 * Event Submission Form
 * The wrapper template for the event submission form.
 *
 * Override this template in your own theme by creating a file at
 * [your-theme]/tribe-events/community/edit-event.php
 *
 * @package Tribe__Events__Community__Main
 * @since  3.1
 * @author Modern Tribe Inc.
 *
 * @var object $event
 * @var array $required
 *
 */

if ( !defined('ABSPATH') ) { die('-1'); }

$events_label_singular = tribe_get_event_label_singular();

?>

<?php tribe_get_template_part( 'community/modules/header-links' ); ?>

<?php do_action( 'tribe_events_community_form_before_template' ); ?>

<form method="post" enctype="multipart/form-data" data-datepicker_format="<?php echo tribe_get_option( 'datepickerFormat', 0 ); ?>">

	<?php wp_nonce_field( 'ecp_event_submission' ); ?>
  
  <!-- aachenerkinder.de: ergänzt um Infos für Veranstalter -->
  <h5>Erfassung von Veranstaltungen</h5>
  <p>Bitte die Veranstaltung <strong>möglichst umfassend</strong> mit allen nötigen Informationen beschreiben. <br>
  Eigene Bilder (Fotos oder Grafiken), Verlinkung auf eigene Seiten, etc. werten die Veranstaltung natürlich deutlich auf und die Veranstaltung wird dann eher z. B. über google auf aachenerkinder.de gefunden</p>
	<!-- Event Title -->
	<?php do_action( 'tribe_events_community_before_the_event_title' ) ?>

	<div class="events-community-post-title">
		<?php tribe_community_events_field_label( 'post_title', sprintf( __('%s Title:', 'tribe-events-community'), $events_label_singular ) ); ?>
		<?php tribe_community_events_form_title(); ?>
	</div><!-- .events-community-post-title -->

	<?php do_action( 'tribe_events_community_after_the_event_title' ) ?>


	<!-- Event Description -->
	<?php do_action( 'tribe_events_community_before_the_content' ); ?>

	<div class="events-community-post-content">
		<?php tribe_community_events_field_label( 'post_content', sprintf( __('%s Description:', 'tribe-events-community'), $events_label_singular ) ); ?>
		<?php tribe_community_events_form_content(); ?>
	</div><!-- .tribe-events-community-post-content -->

	<!-- aachenerkinder.de: hier Veranstaltungsort, Veranstalter und Kosten rausgenommen -->
	<?php do_action( 'tribe_events_community_after_the_content' ); ?>
	
	<?php tribe_get_template_part( 'community/modules/taxonomy' ); ?>
  <br>
		<p class="fett">Bei Verwendung eines Fotos oder eines Bildes bestätigst du durch Übermittlung der Veranstaltung, dass du die Rechte an dem Foto oder Bild hast.</p>

	<?php tribe_get_template_part( 'community/modules/image' ); ?>
  <br>
  <!-- aachenerkinder.de: ergänzt um Infos für Serientermine -->
  <h5>Erfassung von Serienterminen (Ständige Termine)</h5>
  <p>Bei ständigen Terminen (Serienterminen) einfach nur den ersten Termin mit Datum sowie Anfangs- und Endzeit an dem Tag eintragen. <br>
  Über den Button "Weitere Regel hinzufügen" kann man dann anschließend auswählen, ob der Termin z. B. "Jede Woche" stattfindet. Anschließend braucht man in dem Feld hinter "und endet" 
  (das erscheint erst, wenn man über "Weitere Regel" angegeben hat, dass der Termin z. B. "Jede Woche" stattfindet) entweder die Anzahl der Termine (z. B. 5 für 5 Termine) oder 
  das Enddatum einzugeben.</p>
  <p>Bei allen "Einzelterminen" braucht natürlich nur das Datum sowie Anfangs- und Endzeit an dem Tag angegeben werden.<br>
  <strong>Achtet bitte unbedingt darauf, das richtige Datum für die Veranstaltung anzugeben bzw. auszuwählen.</strong><br>
  <span class="klein">(Leider kommt es immer mal vor, dass das aktuelle Datum statt das Veranstaltungsdatum ausgewählt wird.)</span></p> 
	<?php tribe_get_template_part( 'community/modules/datepickers' ); ?>
	
	<?php tribe_get_template_part( 'community/modules/website' ); ?>
		<!-- Ergänzung aachenerkinder.de -->
    <br>
		<p class="fett">Der Veranstaltungsort wird veröffentlicht. <br>Alle anderen Daten werden lediglich benötigt, um ggfs. Kontakt aufzunehmen und werden natürlich nicht veröffentlicht.</p>
		<h5>Wichtig: Bitte den Veranstaltungsort immer mit Straße, PLZ und Ort eingeben:</h5>

	<?php tribe_get_template_part( 'community/modules/custom' ); ?>
  <p class="premium-description">Bei einem kostenpflichtigen Premiumeintrag erscheint ihr Veranstaltungstermin wie im <a href="https://aachenerkinder.de/wp-content/uploads/2016/10/screenshot_premiumveranstaltung.jpg">Beispiel</a>. 
  Außerdem erscheint ihre Veranstaltung auf jeder Seite rechts in der sidebar unter "Premium-Veranstaltungen". 
  Dort werden immer die 5 Veranstaltungen gezeigt, die als nächstes stattfinden. 
  Premiumveranstaltungen können für jede Veranstaltung gebucht werden, die nicht länger als drei Tage dauern.
  Mit der Buchung der Premiumveranstaltung erklären Sie sich mit den <a href="https://aachenerkinder.de/wp-content/uploads/2016/10/AGB_aachenerkinder.de_.pdf" target="_blank">AGB</a> und der <a href="https://aachenerkinder.de/wp-content/uploads/2016/10/Widerrufsbelehrung_und_formular.pdf" target="_blank">Widerrufsbelehrung</a> einverstanden.<br>
  <a class="tribe-events-button" href="https://aachenerkinder.de/wp-content/uploads/2016/12/infos.jpg">Weitere Informationen zu Premium Veranstaltungen</a></p>
	<!-- Spam Control -->
	<?php Tribe__Events__Community__Main::instance()->formSpamControl(); ?>

	<!-- Form Submit -->
	<?php do_action( 'tribe_events_community_before_form_submit' ); ?>
	<div class="tribe-events-community-footer">
		<!-- Ergänzung aachenerkinder.de -->
		<p class="fett" align="left">Die Veranstaltung wird von uns in der Regel innerhalb von wenigen Tagen überprüft und bei Fehlern ggfs. korrigiert. 
					Danach wird die Veranstaltung automatisch veröffentlicht. Eine separate Mail über die Veröffentlichung erfolgt nicht, daher empfehlen wir 
					nach einigen Tagen zu kontrollieren, ob sich die Veranstaltung im Terminkalender befindet.</p>
		<input type="submit" id="post" class="button submit events-community-submit" value="<?php

			if( isset( $post_id ) && $post_id )
				echo apply_filters( 'tribe_ce_event_update_button_text', sprintf( __( 'Update %s', 'tribe-events-community' ), $events_label_singular ) );
			else
				echo apply_filters( 'tribe_ce_event_submit_button_text', sprintf( __( 'Submit %s', 'tribe-events-community' ), $events_label_singular ) );

			?>" name="community-event" />
	</div><!-- .tribe-events-community-footer -->

</form>
<?php do_action( 'tribe_events_community_form_after_template' ); ?>