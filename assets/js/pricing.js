/**
 * MenuMe pricing billing switch.
 */
( () => {
	'use strict';

	const setupPricing = ( pricing ) => {
		const switcher = pricing.querySelector( '.menume-pricing__billing-switch' );

		if ( ! switcher ) {
			return;
		}

		const monthlyButton = switcher.querySelector( 'a[href="#monatlich"]' );
		const annualButton = switcher.querySelector( 'a[href="#jaehrlich"]' );

		if ( ! monthlyButton || ! annualButton ) {
			return;
		}

		const buttons = [ monthlyButton, annualButton ];

		switcher.setAttribute( 'role', 'tablist' );
		switcher.setAttribute( 'aria-label', 'Abrechnungszeitraum' );

		buttons.forEach( ( button ) => {
			button.setAttribute( 'role', 'tab' );
		} );

		const selectBilling = ( billing ) => {
			const isAnnual = billing === 'annual';

			pricing.classList.toggle( 'is-annual', isAnnual );
			pricing.classList.toggle( 'is-monthly', ! isAnnual );

			monthlyButton.setAttribute( 'aria-selected', String( ! isAnnual ) );
			annualButton.setAttribute( 'aria-selected', String( isAnnual ) );
			monthlyButton.parentElement.classList.toggle( 'is-active', ! isAnnual );
			annualButton.parentElement.classList.toggle( 'is-active', isAnnual );
		};

		monthlyButton.addEventListener( 'click', ( event ) => {
			event.preventDefault();
			selectBilling( 'monthly' );
		} );

		annualButton.addEventListener( 'click', ( event ) => {
			event.preventDefault();
			selectBilling( 'annual' );
		} );

		switcher.addEventListener( 'keydown', ( event ) => {
			if ( event.key !== 'ArrowLeft' && event.key !== 'ArrowRight' ) {
				return;
			}

			event.preventDefault();
			const nextIsAnnual = event.key === 'ArrowRight';
			const nextButton = nextIsAnnual ? annualButton : monthlyButton;

			selectBilling( nextIsAnnual ? 'annual' : 'monthly' );
			nextButton.focus();
		} );

		selectBilling( 'monthly' );
	};

	document.querySelectorAll( '.menume-pricing' ).forEach( setupPricing );
} )();
