/**
 * Collapse the floating header after the visitor scrolls past half a viewport.
 */
( function () {
	'use strict';

	const header = document.querySelector( '.menume-site-header' );

	if ( ! header ) {
		return;
	}

	let ticking = false;

	const updateHeaderState = () => {
		ticking = false;
		const isCollapsed = window.scrollY >= window.innerHeight / 2;

		header.classList.toggle( 'is-collapsed', isCollapsed );

		if ( ! isCollapsed ) {
			header.classList.remove( 'is-touch-open' );
		}
	};

	const requestUpdate = () => {
		if ( ticking ) {
			return;
		}

		ticking = true;
		window.requestAnimationFrame( updateHeaderState );
	};

	updateHeaderState();

	header.addEventListener( 'click', ( event ) => {
		if ( ! header.classList.contains( 'is-collapsed' ) || header.classList.contains( 'is-touch-open' ) ) {
			return;
		}

		event.preventDefault();
		event.stopPropagation();
		header.classList.add( 'is-touch-open' );
	}, true );

	document.addEventListener( 'click', ( event ) => {
		if ( ! header.classList.contains( 'is-touch-open' ) || header.contains( event.target ) ) {
			return;
		}

		header.classList.remove( 'is-touch-open' );
	} );

	window.addEventListener( 'scroll', requestUpdate, { passive: true } );
	window.addEventListener( 'resize', requestUpdate );
}() );
