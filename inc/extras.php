<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package ReadMore
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function readmore_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'readmore_body_classes' );

function display_sidebar($position = null) 
{
	if($position === 'left') {
		return get_theme_mod('readmore_general_layout', 1) == '1';	
	}

	if($position === 'right') {
		return get_theme_mod('readmore_general_layout', 1) == '2';	
	}
	
	return get_theme_mod('readmore_general_layout', 1) !== '3';	
	
}
