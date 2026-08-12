(function () {
	function initMcsDemo( root ) {
		var cursor = root.querySelector( '.mcs__cursor' );
		var panels = {
			product: root.querySelector( '.mcs__panel--product' ),
			select: root.querySelector( '.mcs__panel--select' ),
			platforms: root.querySelector( '.mcs__panel--platforms' ),
			generating: root.querySelector( '.mcs__panel--generating' ),
			result: root.querySelector( '.mcs__panel--result' ),
			success: root.querySelector( '.mcs__panel--success' )
		};
		var ig = root.querySelector( '.mcs__platform--ig' );
		var fb = root.querySelector( '.mcs__platform--fb' );
		var publishBtn = root.querySelector( '.mcs__btn--publish' );
		var successCheck = root.querySelector( '.mcs__success-check' );
		var badgeIg = root.querySelector( '.mcs__badge--ig' );
		var badgeFb = root.querySelector( '.mcs__badge--fb' );

		var activePanel = null;
		var PANEL_TRANSITION = 420;

		function showPanel( name ) {
			var previous = activePanel;
			if ( previous && panels[ previous ] ) {
				panels[ previous ].classList.remove( 'is-active' );
			}
			activePanel = name;
			var delay = previous ? PANEL_TRANSITION : 0;
			return wait( delay ).then( function () {
				if ( name && panels[ name ] ) {
					panels[ name ].classList.add( 'is-active' );
				}
			} );
		}

		function wait( ms ) {
			return new Promise( function ( resolve ) {
				setTimeout( resolve, ms );
			} );
		}

		function moveCursorTo( el ) {
			if ( ! el ) {
				cursor.classList.remove( 'is-visible' );
				return wait( 250 );
			}
			var rootRect = root.getBoundingClientRect();
			var elRect = el.getBoundingClientRect();
			var x = elRect.left - rootRect.left + elRect.width / 2;
			var y = elRect.top - rootRect.top + elRect.height / 2;
			cursor.style.left = x + 'px';
			cursor.style.top = y + 'px';
			cursor.classList.add( 'is-visible' );
			return wait( 650 );
		}

		var ripple = cursor.querySelector( '.mcs__cursor-ripple' );

		function click() {
			cursor.classList.add( 'is-clicking' );
			if ( ripple ) {
				ripple.classList.remove( 'is-rippling' );
				void ripple.offsetWidth;
				ripple.classList.add( 'is-rippling' );
			}
			return wait( 120 ).then( function () {
				cursor.classList.remove( 'is-clicking' );
				return wait( 70 );
			} );
		}

		function pickOption( panelEl ) {
			var select = panelEl.querySelector( '.mcs__select' );
			var dropdown = panelEl.querySelector( '.mcs__dropdown' );
			var option = panelEl.querySelector( '.mcs__option--chosen' );
			return moveCursorTo( select )
				.then( click )
				.then( function () {
					dropdown.classList.add( 'is-open' );
					return wait( 350 );
				} )
				.then( function () {
					return moveCursorTo( option );
				} )
				.then( click )
				.then( function () {
					option.classList.add( 'is-picked' );
					select.classList.add( 'is-chosen' );
					dropdown.classList.remove( 'is-open' );
					return wait( 500 );
				} );
		}

		function resetState() {
			root.querySelectorAll( '.mcs__option--chosen' ).forEach( function ( el ) {
				el.classList.remove( 'is-picked' );
			} );
			root.querySelectorAll( '.mcs__select' ).forEach( function ( el ) {
				el.classList.remove( 'is-chosen' );
			} );
			ig.classList.remove( 'is-selected' );
			fb.classList.remove( 'is-selected' );
			successCheck.classList.remove( 'is-shown' );
			badgeIg.classList.remove( 'is-shown' );
			badgeFb.classList.remove( 'is-shown' );
			return showPanel( null );
		}

		function run() {
			return Promise.resolve()
				.then( function () {
					return showPanel( 'product' );
				} )
				.then( function () {
					return wait( 350 );
				} )
				.then( function () {
					return pickOption( panels.product );
				} )
				.then( function () {
					return showPanel( 'select' );
				} )
				.then( function () {
					return wait( 350 );
				} )
				.then( function () {
					return pickOption( panels.select );
				} )
				.then( function () {
					return showPanel( 'platforms' );
				} )
				.then( function () {
					return wait( 350 );
				} )
				.then( function () {
					return moveCursorTo( ig );
				} )
				.then( click )
				.then( function () {
					ig.classList.add( 'is-selected' );
					return wait( 250 );
				} )
				.then( function () {
					return moveCursorTo( fb );
				} )
				.then( click )
				.then( function () {
					fb.classList.add( 'is-selected' );
					return wait( 500 );
				} )
				.then( function () {
					return moveCursorTo( null );
				} )
				.then( function () {
					return showPanel( 'generating' );
				} )
				.then( function () {
					return wait( 1800 );
				} )
				.then( function () {
					return showPanel( 'result' );
				} )
				.then( function () {
					return wait( 450 );
				} )
				.then( function () {
					return moveCursorTo( publishBtn );
				} )
				.then( click )
				.then( function () {
					return moveCursorTo( null );
				} )
				.then( function () {
					return showPanel( 'success' );
				} )
				.then( function () {
					return wait( 200 );
				} )
				.then( function () {
					successCheck.classList.add( 'is-shown' );
					return wait( 300 );
				} )
				.then( function () {
					badgeIg.classList.add( 'is-shown' );
					return wait( 200 );
				} )
				.then( function () {
					badgeFb.classList.add( 'is-shown' );
					return wait( 1800 );
				} )
				.then( resetState )
				.then( function () {
					return wait( 600 );
				} )
				.then( run );
		}

		if ( window.matchMedia && window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches ) {
			showPanel( 'result' );
			return;
		}

		run();
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', function () {
			document.querySelectorAll( '.mcs' ).forEach( initMcsDemo );
		} );
	} else {
		document.querySelectorAll( '.mcs' ).forEach( initMcsDemo );
	}
})();
