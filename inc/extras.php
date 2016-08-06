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

/**
 * Adds class to the body depending on the sidebar presence
 * @return array
 */
function readmore_sidebar_body_class() 
{
	$display_mode = get_theme_mod('readmore_general_layout', 1);
	
	if ( $display_mode === '1' ) {
		$classes[] = 'sidebar-left';
	}
	if ( $display_mode === '2' ) {
		$classes[] = 'sidebar-right';
	}
	if ( $display_mode === '3' ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}


/**
 * Filter the except length to 20 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function readmore_custom_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_length', 'readmore_custom_excerpt_length', 999 );

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function readmore_excerpt_more( $more ) {
    return '&hellip;';
}
add_filter( 'excerpt_more', 'readmore_excerpt_more' );
add_filter( 'body_class', 'readmore_sidebar_body_class' );
