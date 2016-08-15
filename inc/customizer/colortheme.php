<?php

require_once get_template_directory() . '/inc/customizer/controls/colorscheme_picker_custom_control.php';

if ( ! function_exists( 'readmore_customizer_colortheme' ) ) :
function readmore_customizer_colortheme($wp_customize) {

    $wp_customize->add_section( 'readmore_color_theme', array(
        'title' => __('Color Theme', 'readmore'),
        'priority' => 20
    ) );

    $wp_customize->add_setting( 'readmore_color_scheme', array(
        'default' => '1',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control(new \Color_Scheme_Picker_Custom_control(
        $wp_customize, 'readmore_color_scheme', array(
            'label'       => __( 'Main Color Theme', 'readmore' ),
            'section'     => 'readmore_color_theme',
            'settings'    => 'readmore_color_scheme',
            'description' => __( 'Pick a color scheme', 'readmore' ),
        )
    ) );
}
endif;
add_action( 'customize_register', 'readmore_customizer_colortheme' );
