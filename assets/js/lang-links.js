( function () {
	// Base-path -> per-language URL map for pages that exist as separate
	// Polylang translations with different slugs (see menumeLangLinks.pageMap
	// localized from PHP, which is the single source of truth for this map).
	function normalizePath( path ) {
		if ( path.length > 1 && path.charAt( path.length - 1 ) === '/' ) {
			return path.slice( 0, -1 );
		}
		return path;
	}

	function buildLookup( pageMap ) {
		var lookup = {};
		Object.keys( pageMap ).forEach( function ( key ) {
			lookup[ normalizePath( key ) ] = pageMap[ key ];
		} );
		return lookup;
	}

	function getCurrentLang() {
		if ( location.pathname.indexOf( '/en/' ) === 0 ) {
			return 'en';
		}
		if ( location.pathname.indexOf( '/ar/' ) === 0 ) {
			return 'ar';
		}
		return 'de';
	}

	function rewriteLinks() {
		var data = window.menumeLangLinks;
		if ( ! data || ! data.pageMap ) {
			return;
		}

		var lang = getCurrentLang();
		if ( 'de' === lang ) {
			return;
		}

		var lookup = buildLookup( data.pageMap );
		var home = lookup[ '' ] || lookup[ '/' ];

		document.querySelectorAll( 'a[href]' ).forEach( function ( link ) {
			var href = link.getAttribute( 'href' );
			if ( ! href ) {
				return;
			}

			// Strip a same-origin absolute prefix so we can match local paths.
			var path = href.replace( /^https?:\/\/[^/]+/, '' );

			var hash = '';
			var base = path;
			var hashIndex = path.indexOf( '#' );
			if ( hashIndex !== -1 ) {
				base = path.slice( 0, hashIndex );
				hash = path.slice( hashIndex );
			}

			base = normalizePath( base );

			// Same-page anchors (e.g. "/#solutions" or "#solutions") always
			// resolve against the homepage in the current language.
			if ( '' === base ) {
				if ( hash && home && home[ lang ] ) {
					link.setAttribute( 'href', home[ lang ] + hash );
				}
				return;
			}

			if ( lookup[ base ] && lookup[ base ][ lang ] ) {
				link.setAttribute( 'href', lookup[ base ][ lang ] + hash );
			}
		} );
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', rewriteLinks );
	} else {
		rewriteLinks();
	}
} )();
