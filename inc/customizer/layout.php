<?php

require_once get_template_directory() . '/inc/customizer/controls/layout_picker_custom_control.php';

if ( ! function_exists( 'utalk_customizer_layouts' ) ) :
function utalk_customizer_layouts($wp_customize) {

    $wp_customize->add_section( 'utalk_layouts', array(
        'title' => __('Layouts', 'utalk'),
        'priority' => 20
    ) );

    $wp_customize->add_setting( 'utalk_general_layout', array(
        'default' => '1',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control(new \Layout_Picker_Custom_control(
        $wp_customize, 'utalk_general_layout', array(
            'label'       => __( 'General Layout', 'utalk' ),
            'section'     => 'utalk_layouts',
            'settings'    => 'utalk_general_layout',
            'description' => __( 'Pick a layout for the general layout of the website', 'utalk' ),
        )
    ) );
}
endif;
add_action( 'customize_register', 'utalk_customizer_layouts' );
