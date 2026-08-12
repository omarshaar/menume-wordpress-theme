/**
 * Scroll-driven scene switching for the MenuMe home hero.
 */
( function () {
	'use strict';

	// Inject the aurora layer if the page's stored hero markup predates it
	// (existing pages keep whatever content was inserted at authoring time,
	// so this can't rely solely on the pattern file).
	document.querySelectorAll( '.menume-home-hero' ).forEach( ( hero ) => {
		if ( hero.querySelector( '.menume-home-hero__aurora' ) ) {
			return;
		}

		const aurora = document.createElement( 'div' );
		// alignfull is required here: .menume-home-hero uses a constrained
		// layout, and WordPress forces max-width: var(--wp--style--global--content-size)
		// on any direct child lacking an alignment class — without it this
		// div gets squeezed to the ~760px content column instead of full width.
		aurora.className = 'menume-home-hero__aurora alignfull';
		aurora.setAttribute( 'aria-hidden', 'true' );

		hero.insertBefore( aurora, hero.firstChild );
	} );

	const prefersReducedMotion = window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;

	const splitFirstWord = ( text ) => {
		const normalized = text.replace( /\s+/g, ' ' ).trim();
		const parts = normalized.match( /^(\S+)(?:\s+([\s\S]+))?$/u );

		if ( ! parts || ! parts[ 2 ] ) {
			return null;
		}

		return {
			firstWord: parts[ 1 ],
			restText: parts[ 2 ],
			fullText: normalized,
		};
	};

	const getGraphemes = ( text ) => {
		if ( 'Segmenter' in Intl ) {
			const segmenter = new Intl.Segmenter( undefined, { granularity: 'grapheme' } );

			return Array.from( segmenter.segment( text ), ( segment ) => segment.segment );
		}

		return Array.from( text );
	};

	const preparePlainHeroTitle = ( title ) => {
		if ( title.classList.contains( 'is-animated-title' ) ) {
			return;
		}

		const titleParts = splitFirstWord( title.textContent || '' );

		if ( ! titleParts ) {
			return;
		}

		const visual = document.createElement( 'span' );
		const firstWord = document.createElement( 'span' );
		const line = document.createElement( 'span' );
		const typed = document.createElement( 'span' );

		title.classList.add( 'is-animated-title' );
		title.setAttribute( 'aria-label', titleParts.fullText );

		visual.className = 'menume-home-hero__title-visual';
		visual.setAttribute( 'aria-hidden', 'true' );

		firstWord.className = 'menume-home-hero__title-word';
		firstWord.textContent = titleParts.firstWord;

		line.className = 'menume-home-hero__title-line';
		line.dataset.menumeTypewriter = titleParts.restText;

		typed.className = 'menume-home-hero__title-typed';

		line.appendChild( typed );
		visual.append( firstWord, line );
		title.replaceChildren( visual );
	};

	const typeHeroTitle = ( title ) => {
		if ( title.dataset.menumeTitleTyped === 'true' ) {
			return;
		}

		preparePlainHeroTitle( title );

		const line = title.querySelector( '.menume-home-hero__title-line' );
		const typed = title.querySelector( '.menume-home-hero__title-typed' );
		const restText = line ? line.dataset.menumeTypewriter || '' : '';

		if ( ! line || ! typed || ! restText ) {
			return;
		}

		title.dataset.menumeTitleTyped = 'true';

		if ( prefersReducedMotion ) {
			typed.textContent = restText;
			title.classList.add( 'is-typing-complete' );
			return;
		}

		const graphemes = getGraphemes( restText );
		const charDelay = graphemes.length > 34 ? 96 : graphemes.length > 22 ? 112 : 128;
		let index = 0;

		let hasStartedTyping = false;

		const startTyping = () => {
			if ( hasStartedTyping ) {
				return;
			}

			hasStartedTyping = true;
			line.classList.add( 'is-typing' );

			const typeNext = () => {
				if ( index >= graphemes.length ) {
					line.classList.remove( 'is-typing' );
					title.classList.add( 'is-typing-complete' );
					return;
				}

				typed.textContent += graphemes[ index ];
				index += 1;

				const previous = graphemes[ index - 1 ];
				const pause = /[,.!?;:\u060c\u061b\u061f]/u.test( previous ) ? charDelay * 4 : charDelay;

				window.setTimeout( typeNext, pause );
			};

			typeNext();
		};

		line.addEventListener( 'animationstart', startTyping, { once: true } );
		window.setTimeout( startTyping, 540 );
	};

	document.querySelectorAll( '.menume-home-hero__title' ).forEach( typeHeroTitle );

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
