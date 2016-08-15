<?php

if ( ! function_exists( 'readmore_customizer_title_tagline' ) ) :
function readmore_customizer_title_tagline( $wp_customize ) {
    $wp_customize->add_setting( 'readmore_header_logo' , array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'readmore_header_logo', array(
        'label' => __( 'Logo', 'readmore' ),
        'section' => 'title_tagline',
        'settings' => 'readmore_header_logo',
    ) ) );
}
endif;
add_action( 'customize_register', 'readmore_customizer_title_tagline' );
