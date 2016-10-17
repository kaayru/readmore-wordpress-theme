<?php
/**
 * UTalk Theme Customizer.
 *
 * @package UTalk
 */

require_once get_template_directory() . '/inc/customizer/colortheme.php';
require_once get_template_directory() . '/inc/customizer/layout.php';
require_once get_template_directory() . '/inc/customizer/title-tagline.php';
require_once get_template_directory() . '/inc/customizer/footer.php';

if ( ! function_exists( 'utalk_customize_register' ) ) :
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function utalk_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
}
endif;
add_action( 'customize_register', 'utalk_customize_register' );

if ( ! function_exists( 'utalk_customize_preview_js' ) ) :
/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function utalk_customize_preview_js() {
	wp_enqueue_script( 'utalk_customizer', get_template_directory_uri() . '/inc/customizer/customizer.js', array( 'customize-preview' ), '20151215', true );
}
endif;
add_action( 'customize_preview_init', 'utalk_customize_preview_js' );

if ( ! function_exists( 'utalk_enqueue_customizer_stylesheet' ) ) :
/**
 * Enqueue the stylesheet.
 */
function utalk_enqueue_customizer_stylesheet() {
	wp_register_style( 'utalk-customizer-css', get_template_directory_uri() . '/inc/customizer/customizer.css', NULL, NULL, 'all' );
	wp_enqueue_style( 'utalk-customizer-css' );
}
endif;
add_action( 'customize_controls_print_styles', 'utalk_enqueue_customizer_stylesheet' );
