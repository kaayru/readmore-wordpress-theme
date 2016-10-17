<?php

if ( ! function_exists( 'utalk_customizer_title_tagline' ) ) :
function utalk_customizer_title_tagline( $wp_customize ) {
    $wp_customize->add_setting( 'utalk_header_logo' , array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'utalk_header_logo', array(
        'label' => __( 'Logo', 'utalk' ),
        'section' => 'title_tagline',
        'settings' => 'utalk_header_logo',
    ) ) );
}
endif;
add_action( 'customize_register', 'utalk_customizer_title_tagline' );
