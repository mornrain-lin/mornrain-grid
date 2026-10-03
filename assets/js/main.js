/**
 * MornRain Grid front-end behaviour.
 *
 * Zero dependencies, progressive enhancement only.
 *
 * @package MornRain_Grid
 */

( function () {
	'use strict';

	/**
	 * Toggle the primary navigation on small screens.
	 *
	 * @return {void}
	 */
	function initMenuToggle() {
		var nav = document.getElementById( 'site-navigation' );
		var toggle = nav ? nav.querySelector( '.menu-toggle' ) : null;

		if ( ! nav || ! toggle ) {
			return;
		}

		toggle.addEventListener( 'click', function () {
			var isOpen = nav.classList.toggle( 'is-open' );
			toggle.setAttribute( 'aria-expanded', isOpen ? 'true' : 'false' );
		} );
	}

	/**
	 * Wrap wide tables so they scroll horizontally instead of breaking layout.
	 *
	 * @return {void}
	 */
	function initResponsiveTables() {
		var tables = document.querySelectorAll( '.entry-content table' );

		Array.prototype.forEach.call( tables, function ( table ) {
			if ( table.parentNode && table.parentNode.classList.contains( 'table-scroll' ) ) {
				return;
			}

			var wrapper = document.createElement( 'div' );
			wrapper.className = 'table-scroll';
			table.parentNode.insertBefore( wrapper, table );
			wrapper.appendChild( table );
		} );
	}

	/**
	 * Boot all enhancements.
	 *
	 * @return {void}
	 */
	function boot() {
		initMenuToggle();
		initResponsiveTables();
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', boot );
	} else {
		boot();
	}
} )();
