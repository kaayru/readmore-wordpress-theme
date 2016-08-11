<?php

function readmore_customizer_footer($wp_customize) {

    $wp_customize->add_section( 'readmore_footer', array(
        'title' => __('Footer', 'readmore'),
        'priority' => 30
    ) );

    $wp_customize->add_setting( 'readmore_footer', array(
        'default' => '',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control(new \WP_Customize_Control(
        $wp_customize, 'readmore_footer', array(
            'label'       => __( 'Footer Text', 'readmore' ),
            'section'     => 'readmore_footer',
            'settings'    => 'readmore_footer',
            'type'        => 'textarea',
            'description' => __( 'This is only for the text at the very bottom of the footer. To modify blocks in the footer, use widgets.', 'readmore' ),
        )
    ) );
}

add_action( 'customize_register', 'readmore_customizer_footer' );
