<?php 

require_once get_template_directory() . '/inc/customizer/controls/layout_picker_custom_control.php';

function readmore_customizer_layouts($wp_customize) {

    $wp_customize->add_section( 'readmore_layouts', array(
        'title' => _t('Layouts'),
        'priority' => 20
    ) ); 

    $wp_customize->add_setting( 'readmore_general_layout', array(
        'default' => '1',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control(new \Layout_Picker_Custom_control(
        $wp_customize, 'readmore_general_layout', array(
            'label'       => _t( 'General Layout' ),
            'section'     => 'readmore_layouts',
            'settings'    => 'readmore_general_layout',
            'description' => _t( 'Pick a layout for the general layout of the website' ),
        )
    ) );
}

add_action( 'customize_register', 'readmore_customizer_layouts' );
