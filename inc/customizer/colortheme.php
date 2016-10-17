<?php

require_once get_template_directory() . '/inc/customizer/controls/colorscheme_picker_custom_control.php';

if ( ! function_exists( 'utalk_customizer_colortheme' ) ) :
function utalk_customizer_colortheme($wp_customize) {

    $wp_customize->add_section( 'utalk_color_theme', array(
        'title' => __('Color Theme', 'utalk'),
        'priority' => 20
    ) );

    $wp_customize->add_setting( 'utalk_color_scheme', array(
        'default' => '1',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control(new \Color_Scheme_Picker_Custom_control(
        $wp_customize, 'utalk_color_scheme', array(
            'label'       => __( 'Main Color Theme', 'utalk' ),
            'section'     => 'utalk_color_theme',
            'settings'    => 'utalk_color_scheme',
            'description' => __( 'Pick a color scheme', 'utalk' ),
        )
    ) );
}
endif;
add_action( 'customize_register', 'utalk_customizer_colortheme' );
