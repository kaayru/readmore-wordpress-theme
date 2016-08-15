<?php

require_once get_template_directory() . '/inc/customizer/controls/layout_picker_custom_control.php';

if ( ! function_exists( 'readmore_customizer_layouts' ) ) :
function readmore_customizer_layouts($wp_customize) {

    $wp_customize->add_section( 'readmore_layouts', array(
        'title' => __('Layouts', 'readmore'),
        'priority' => 20
    ) );

    $wp_customize->add_setting( 'readmore_general_layout', array(
        'default' => '1',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control(new \Layout_Picker_Custom_control(
        $wp_customize, 'readmore_general_layout', array(
            'label'       => __( 'General Layout', 'readmore' ),
            'section'     => 'readmore_layouts',
            'settings'    => 'readmore_general_layout',
            'description' => __( 'Pick a layout for the general layout of the website', 'readmore' ),
        )
    ) );
}
endif;
add_action( 'customize_register', 'readmore_customizer_layouts' );
