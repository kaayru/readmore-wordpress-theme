<?php 

require_once get_template_directory() . '/inc/customizer/controls/colorscheme_picker_custom_control.php';

function readmore_customizer_colortheme($wp_customize) {

    $wp_customize->add_section( 'readmore_color_theme', array(
        'title' => _t('Color Theme'),
        'priority' => 20
    ) ); 

    $wp_customize->add_setting( 'readmore_color_scheme', array(
        'default' => '1',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control(new \Color_Scheme_Picker_Custom_control(
        $wp_customize, 'readmore_color_scheme', array(
            'label'       => _t( 'Main Color Theme' ),
            'section'     => 'readmore_color_theme',
            'settings'    => 'readmore_color_scheme',
            'description' => _t( 'Pick a color' ),
        )
    ) );
}

add_action( 'customize_register', 'readmore_customizer_colortheme' );
