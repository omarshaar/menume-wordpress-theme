/**
 * Accessible horizontal navigation for the MenuMe solutions pattern.
 */
( function () {
	'use strict';

	document.querySelectorAll( '.menume-solutions' ).forEach( ( section ) => {
		const track = section.querySelector( '.menume-solutions__track' );
		const previous = section.querySelector( '.menume-solutions__arrow--previous .wp-block-button__link' );
		const next = section.querySelector( '.menume-solutions__arrow--next .wp-block-button__link' );
		const cards = section.querySelectorAll( '.menume-solutions__card' );

		if ( ! track || ! previous || ! next ) {
			return;
		}

		// Runtime behavior complements the semantic server-rendered markup.
		track.setAttribute( 'tabindex', '0' );

		const updateControls = () => {
			const end = Math.max( 0, track.scrollWidth - track.clientWidth );
			const atStart = track.scrollLeft <= 2;
			const atEnd = track.scrollLeft >= end - 2;
			previous.disabled = atStart;
			next.disabled = atEnd;
			previous.setAttribute( 'aria-disabled', atStart ? 'true' : 'false' );
			next.setAttribute( 'aria-disabled', atEnd ? 'true' : 'false' );
		};

		const move = ( direction ) => {
			const card = track.querySelector( '.menume-solutions__card' );
			const styles = window.getComputedStyle( track );
			const gap = parseFloat( styles.columnGap || styles.gap ) || 16;
			const distance = card ? card.getBoundingClientRect().width + gap : track.clientWidth * 0.85;

			track.scrollBy( { left: direction * distance, behavior: 'smooth' } );
		};

		const syncGlow = ( event ) => {
			cards.forEach( ( card ) => {
				const rect = card.getBoundingClientRect();
				const x = event.clientX - rect.left;
				const y = event.clientY - rect.top;
				const xp = rect.width ? x / rect.width : 0;

				card.style.setProperty( '--menume-solutions-glow-x', x );
				card.style.setProperty( '--menume-solutions-glow-y', y );
				card.style.setProperty( '--menume-solutions-glow-xp', Math.max( 0, Math.min( 1, xp ) ) );
			} );
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
		section.addEventListener( 'pointermove', syncGlow, { passive: true } );
		window.addEventListener( 'resize', updateControls );
		updateControls();
	} );
}() );
