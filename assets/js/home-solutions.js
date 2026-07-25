/**
 * Accessible horizontal navigation for the MenuMe solutions pattern.
 */
( function () {
	'use strict';

	document.querySelectorAll( '.menume-solutions' ).forEach( ( section ) => {
		const track = section.querySelector( '.menume-solutions__track' );
		const previous = section.querySelector( '.menume-solutions__arrow--previous .wp-block-button__link' );
		const next = section.querySelector( '.menume-solutions__arrow--next .wp-block-button__link' );

		if ( ! track || ! previous || ! next ) {
			return;
		}

		// Add accessibility attributes at runtime so Gutenberg's saved block
		// markup remains valid and exactly matches the block serialization.
		track.setAttribute( 'tabindex', '0' );
		track.setAttribute( 'aria-label', 'MenuMe Lösungen' );
		previous.setAttribute( 'aria-label', 'Vorherige Lösung' );
		next.setAttribute( 'aria-label', 'Nächste Lösung' );

		const updateControls = () => {
			const end = Math.max( 0, track.scrollWidth - track.clientWidth );
			previous.setAttribute( 'aria-disabled', track.scrollLeft <= 2 ? 'true' : 'false' );
			next.setAttribute( 'aria-disabled', track.scrollLeft >= end - 2 ? 'true' : 'false' );
		};

		const move = ( direction ) => {
			const card = track.querySelector( '.menume-solutions__card' );
			const styles = window.getComputedStyle( track );
			const gap = parseFloat( styles.columnGap || styles.gap ) || 16;
			const distance = card ? card.getBoundingClientRect().width + gap : track.clientWidth * 0.85;

			track.scrollBy( { left: direction * distance, behavior: 'smooth' } );
		};

		previous.addEventListener( 'click', ( event ) => {
			event.preventDefault();
			move( -1 );
		} );

		next.addEventListener( 'click', ( event ) => {
			event.preventDefault();
			move( 1 );
		} );

		track.addEventListener( 'scroll', updateControls, { passive: true } );
		window.addEventListener( 'resize', updateControls );
		updateControls();
	} );
}() );
