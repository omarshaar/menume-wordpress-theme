/**
 * Before/after comparison and enhancement-style switching.
 */
( function () {
	'use strict';

	document.querySelectorAll( '.menume-enhancer' ).forEach( ( section ) => {
		const comparison = section.querySelector( '.menume-enhancer__comparison' );
		const handle = section.querySelector( '.menume-enhancer__handle' );
		const variants = Array.from( section.querySelectorAll( '.menume-enhancer__after' ) );
		const options = Array.from( section.querySelectorAll( '.menume-enhancer__style-option .wp-block-button__link' ) );

		if ( ! comparison || ! handle || ! variants.length ) {
			return;
		}

		let position = 50;
		let dragging = false;

		const setPosition = ( nextPosition ) => {
			position = Math.min( 100, Math.max( 0, nextPosition ) );
			comparison.style.setProperty( '--menume-comparison-position', `${ position }%` );
			handle.setAttribute( 'aria-valuenow', String( Math.round( position ) ) );
		};

		const setPositionFromPointer = ( event ) => {
			const bounds = comparison.getBoundingClientRect();
			setPosition( ( ( event.clientX - bounds.left ) / bounds.width ) * 100 );
		};

		handle.setAttribute( 'role', 'slider' );
		handle.setAttribute( 'tabindex', '0' );
		handle.setAttribute( 'aria-label', 'Vorher-Nachher-Vergleich' );
		handle.setAttribute( 'aria-valuemin', '0' );
		handle.setAttribute( 'aria-valuemax', '100' );
		handle.setAttribute( 'aria-valuenow', '50' );

		comparison.addEventListener( 'pointerdown', ( event ) => {
			dragging = true;
			comparison.setPointerCapture( event.pointerId );
			setPositionFromPointer( event );
		} );

		comparison.addEventListener( 'pointermove', ( event ) => {
			if ( dragging ) {
				setPositionFromPointer( event );
			}
		} );

		comparison.addEventListener( 'pointerup', ( event ) => {
			dragging = false;
			comparison.releasePointerCapture( event.pointerId );
		} );

		handle.addEventListener( 'keydown', ( event ) => {
			const movement = event.shiftKey ? 10 : 2;

			if ( event.key === 'ArrowLeft' ) {
				event.preventDefault();
				setPosition( position - movement );
			}

			if ( event.key === 'ArrowRight' ) {
				event.preventDefault();
				setPosition( position + movement );
			}

			if ( event.key === 'Home' ) {
				event.preventDefault();
				setPosition( 0 );
			}

			if ( event.key === 'End' ) {
				event.preventDefault();
				setPosition( 100 );
			}
		} );

		options.forEach( ( option, index ) => {
			option.setAttribute( 'aria-pressed', index === 0 ? 'true' : 'false' );

			option.addEventListener( 'click', ( event ) => {
				event.preventDefault();

				variants.forEach( ( variant, variantIndex ) => {
					variant.classList.toggle( 'is-active', variantIndex === index );
				} );

				options.forEach( ( item, itemIndex ) => {
					item.setAttribute( 'aria-pressed', itemIndex === index ? 'true' : 'false' );
					item.closest( '.menume-enhancer__style-option' ).classList.toggle( 'is-active', itemIndex === index );
				} );
			} );
		} );

		setPosition( position );
	} );
}() );
