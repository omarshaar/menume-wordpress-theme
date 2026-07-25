/**
 * Scroll-driven scene switching for the MenuMe home hero.
 */
( function () {
	'use strict';

	const showcases = Array.from( document.querySelectorAll( '.menume-home-hero__showcase' ) );

	if ( ! showcases.length ) {
		return;
	}

	let ticking = false;

	const updateShowcase = ( showcase ) => {
		const stage = showcase.querySelector( '.menume-home-hero__stage' );
		const scenes = Array.from( showcase.querySelectorAll( '.menume-home-hero__scene' ) );

		if ( ! stage || scenes.length < 2 ) {
			return;
		}

		let mobileCaption = stage.querySelector( '.menume-home-hero__mobile-caption' );

		if ( ! mobileCaption ) {
			const initialSourceCaption = scenes[ 0 ].querySelector( '.menume-home-hero__dashboard-image figcaption' );

			mobileCaption = document.createElement( 'p' );
			mobileCaption.className = 'menume-home-hero__mobile-caption';
			mobileCaption.textContent = initialSourceCaption ? initialSourceCaption.textContent.trim() : '';
			mobileCaption.setAttribute( 'aria-hidden', 'true' );
			stage.appendChild( mobileCaption );
		}

		const showcaseRect = showcase.getBoundingClientRect();
		const stageHeight = stage.offsetHeight;
		const adminBar = document.getElementById( 'wpadminbar' );
		const adminBarHeight = adminBar ? adminBar.offsetHeight : 0;
		const availableHeight = Math.max( 1, window.innerHeight - adminBarHeight );
		const initialStickyTop = adminBarHeight + Math.max( 0, ( availableHeight - stageHeight ) / 2 );
		const compactLead = Math.min( 120, window.innerHeight * 0.14 );

		const isCompact = showcaseRect.top <= initialStickyTop + compactLead;
		const isPhoneLayout = window.matchMedia( '(max-width: 575px)' ).matches;

		showcase.classList.toggle( 'is-compact', isCompact );

		const stageRect = stage.getBoundingClientRect();
		let contentTop = 0;
		let contentBottom = stageHeight;

		const measuredElements = isPhoneLayout && isCompact
			? '.menume-home-hero__phone, .menume-home-hero__mobile-caption'
			: '.menume-home-hero__phone, .menume-home-hero__dashboard-image figcaption';

		stage.querySelectorAll( measuredElements ).forEach( ( element ) => {
			const elementRect = element.getBoundingClientRect();

			contentTop = Math.min( contentTop, elementRect.top - stageRect.top );
			contentBottom = Math.max( contentBottom, elementRect.bottom - stageRect.top );
		} );

		const contentHeight = contentBottom - contentTop;
		const centeredTop = adminBarHeight + Math.max( 0, ( availableHeight - contentHeight ) / 2 ) - contentTop;
		const safeTop = adminBarHeight + 16 - contentTop;
		const stickyTop = Math.max( safeTop, centeredTop );
		const travel = Math.max( 1, showcase.offsetHeight - stageHeight );
		const progress = Math.min( 1, Math.max( 0, ( stickyTop - showcaseRect.top ) / travel ) );
		const activeIndex = Math.min( scenes.length - 1, Math.floor( progress * scenes.length ) );

		stage.style.setProperty( '--menume-stage-top', `${ stickyTop }px` );

		scenes.forEach( ( scene, index ) => {
			const isActive = index === activeIndex;

			scene.classList.toggle( 'is-active', isActive );
			scene.setAttribute( 'aria-hidden', isActive ? 'false' : 'true' );

			if ( isActive ) {
				const sourceCaption = scene.querySelector( '.menume-home-hero__dashboard-image figcaption' );

				mobileCaption.textContent = sourceCaption ? sourceCaption.textContent.trim() : '';
			}
		} );

		mobileCaption.setAttribute( 'aria-hidden', isPhoneLayout && isCompact ? 'false' : 'true' );

		showcase.dataset.activeScene = String( activeIndex + 1 );
	};

	const updateAll = () => {
		showcases.forEach( updateShowcase );
		ticking = false;
	};

	const requestUpdate = () => {
		if ( ticking ) {
			return;
		}

		ticking = true;
		window.requestAnimationFrame( updateAll );
	};

	window.addEventListener( 'scroll', requestUpdate, { passive: true } );
	window.addEventListener( 'resize', requestUpdate );
	window.addEventListener( 'load', requestUpdate );
	document.addEventListener( 'DOMContentLoaded', requestUpdate );

	requestUpdate();
}() );
