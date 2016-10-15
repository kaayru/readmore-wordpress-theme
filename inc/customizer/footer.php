<?php

if ( ! function_exists( 'utalk_customizer_footer' ) ) :
function utalk_customizer_footer($wp_customize) {

    $wp_customize->add_section( 'utalk_footer', array(
        'title' => __('Footer', 'utalk'),
        'priority' => 30
    ) );

    $wp_customize->add_setting( 'utalk_footer', array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control(new \WP_Customize_Control(
        $wp_customize, 'utalk_footer', array(
            'label'       => __( 'Footer Text', 'utalk' ),
            'section'     => 'utalk_footer',
            'settings'    => 'utalk_footer',
            'type'        => 'textarea',
            'description' => __( 'This is only for the text at the very bottom of the footer. To modify blocks in the footer, use widgets.', 'utalk' ),
        )
    ) );
}
endif;
add_action( 'customize_register', 'utalk_customizer_footer' );
