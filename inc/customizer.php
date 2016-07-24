<?php
/**
 * ReadMore Theme Customizer.
 *
 * @package ReadMore
 */

require_once get_template_directory() . '/inc/customizer/colortheme.php';

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function readmore_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'readmore_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function readmore_customize_preview_js() {
	wp_enqueue_script( 'readmore_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'readmore_customize_preview_js' );

/**
 * Enqueue the stylesheet.
 */
function readmore_enqueue_customizer_stylesheet() {

	wp_register_style( 'readmore-customizer-css', get_template_directory_uri() . '/inc/customizer/customizer.css', NULL, NULL, 'all' );
	wp_enqueue_style( 'readmore-customizer-css' );

}
add_action( 'customize_controls_print_styles', 'readmore_enqueue_customizer_stylesheet' );

