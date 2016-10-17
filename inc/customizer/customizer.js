/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );

	// Color Theme
  	wp.customize('utalk_color_scheme', function(value) {
    	value.bind(function(to) {
    		var link_element = $('link#utalk-color-theme-css');
    		var stylesheet_url = link_element.attr('href');
    		$('link#utalk-color-theme-css').attr('href',stylesheet_url.replace(/(theme[0-9]+\.css)/, 'theme' + to + '.css'));
    	});
  	});

  	// Layout
  	wp.customize('utalk_general_layout', function(value) {
    	value.bind(function(to) {
    		var body = document.getElementsByTagName('body')[0]

    		body.classList.remove('no-sidebar');
    		body.classList.remove('sidebar-right');
    		body.classList.remove('sidebar-left');

    		if(to === '3') {
    			body.classList.add('no-sidebar');
    		} else if(to === '2') {
    			body.classList.add('sidebar-right');
    		} else if(to === '1') {
    			body.classList.add('sidebar-left');
    		}
    	});
  	});

	// Footer
	wp.customize( 'utalk_footer', function( value ) {
		value.bind( function( to ) {
			$( '.site-footer .site-info .container' ).text( to );
		} );
	} );
} )( jQuery );
