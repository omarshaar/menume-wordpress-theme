/**
 * Sequential rolling counters for the process section.
 */
( function () {
	'use strict';

	const sections = Array.from( document.querySelectorAll( '.menume-process--simple' ) );
	const prefersReducedMotion = window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;

	if ( ! sections.length ) {
		return;
	}

	const wait = ( delay ) => new Promise( ( resolve ) => {
		window.setTimeout( resolve, delay );
	} );

	const buildCounter = ( number, finalValue ) => {
		const value = String( finalValue ).padStart( 2, '0' );
		number.dataset.menumeProcessValue = value;
		number.setAttribute( 'aria-label', value );
		number.textContent = '';

		for ( let index = 0; index < value.length; index += 1 ) {
			const digit = document.createElement( 'span' );
			const track = document.createElement( 'span' );

			digit.className = 'menume-process__digit';
			track.className = 'menume-process__digit-track';
			digit.setAttribute( 'aria-hidden', 'true' );

			for ( let trackIndex = 0; trackIndex <= 9; trackIndex += 1 ) {
				const item = document.createElement( 'span' );

				item.textContent = String( trackIndex );
				track.appendChild( item );
			}

			digit.appendChild( track );
			number.appendChild( digit );
		}
	};

	const setCounterValue = ( number, value ) => {
		const padded = String( value ).padStart( 2, '0' );
		const tracks = number.querySelectorAll( '.menume-process__digit-track' );

		number.setAttribute( 'aria-label', padded );

		tracks.forEach( ( track, index ) => {
			const digit = Number( padded[ index ] || '0' );
			track.style.transform = `translateY(-${ digit * 10 }%)`;
		} );
	};

	const setCounterDuration = ( number, duration ) => {
		number.querySelectorAll( '.menume-process__digit-track' ).forEach( ( track ) => {
			track.style.transitionDuration = `${ duration }ms`;
		} );
	};

	const resetSection = ( section ) => {
		section.dataset.menumeProcessAnimating = 'false';
		section.querySelectorAll( '.menume-process__number' ).forEach( ( number ) => {
			setCounterValue( number, 0 );
		} );
	};

	const animateSection = async ( section ) => {
		if ( section.dataset.menumeProcessAnimating === 'true' ) {
			return;
		}

		section.dataset.menumeProcessAnimating = 'true';

		const numbers = Array.from( section.querySelectorAll( '.menume-process__number' ) );

		const animateNumber = async ( number ) => {
			const finalValue = Number( number.dataset.menumeProcessValue || '0' );
			const duration = prefersReducedMotion ? 120 : finalValue * 760;

			setCounterDuration( number, duration );
			setCounterValue( number, finalValue );
			await wait( duration );
		};

		await Promise.all( numbers.map( async ( number, index ) => {
			await wait( prefersReducedMotion ? index * 40 : index * 260 );
			await animateNumber( number );
		} ) );

		await wait( prefersReducedMotion ? 40 : 120 );

		section.dataset.menumeProcessAnimating = 'false';
	};

	sections.forEach( ( section ) => {
		section.querySelectorAll( '.menume-process__number' ).forEach( ( number, index ) => {
			buildCounter( number, index + 1 );
		} );

		resetSection( section );
	} );

	const observer = new IntersectionObserver(
		( entries ) => {
			entries.forEach( ( entry ) => {
				const section = entry.target;

				if ( entry.isIntersecting ) {
					animateSection( section );
					return;
				}

				resetSection( section );
			} );
		},
		{
			threshold: 0.28,
		}
	);

	sections.forEach( ( section ) => observer.observe( section ) );
}() );
