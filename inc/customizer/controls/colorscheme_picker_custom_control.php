<?php
if (class_exists('WP_Customize_Control'))
{
    /**
     * Class to create a custom color scheme control
     */
    class Color_Scheme_Picker_Custom_control extends WP_Customize_Control
    {
        /**
         * Render the content on the theme customizer page
         */
        public function render_content()
           {
            $this->type = "radio";

            $imageDirectory = get_stylesheet_directory_uri() . '/inc/customizer/img/color-schemes/';
            ?>
            
            <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
            <em><?php echo esc_html( $this->description ); ?></em><br /><br />

            <div class="layout-customizer-control">
                <label>
                    <input type="radio" value="1" name="<?php echo esc_attr( $this->id ); ?>" <?php $this->link(); checked( $this->value(), "scheme1"); ?> />
                    <img src="<?php echo $imageDirectory; ?><?php _et('scheme1.jpg'); ?>" alt="<?php _et('Scheme 1'); ?>" />
                </label>
                <label>
                    <input type="radio" value="2" name="<?php echo esc_attr( $this->id ); ?>" <?php $this->link(); checked( $this->value(), "scheme2"); ?> />
                    <img src="<?php echo $imageDirectory; ?><?php _et('scheme2.jpg'); ?>" alt="<?php _et('Scheme 2'); ?>" />
                </label>
                <label>
                    <input type="radio" value="3" name="<?php echo esc_attr( $this->id ); ?>" <?php $this->link(); checked( $this->value(), "scheme3"); ?> />
                    <img src="<?php echo $imageDirectory; ?><?php _et('scheme3.jpg'); ?>" alt="<?php _et('Scheme 3'); ?>" />
                </label>
            </div>
            <div class="layout-customizer-control">
                <label>
                    <input type="radio" value="4" name="<?php echo esc_attr( $this->id ); ?>" <?php $this->link(); checked( $this->value(), "scheme4"); ?> />
                    <img src="<?php echo $imageDirectory; ?><?php _et('scheme4.jpg'); ?>" alt="<?php _et('Scheme 4'); ?>" />
                </label>
                <label>
                    <input type="radio" value="5" name="<?php echo esc_attr( $this->id ); ?>" <?php $this->link(); checked( $this->value(), "scheme5"); ?> />
                    <img src="<?php echo $imageDirectory; ?><?php _et('scheme5.jpg'); ?>" alt="<?php _et('Scheme 5'); ?>" />
                </label>
                <label>
                    <input type="radio" value="6" name="<?php echo esc_attr( $this->id ); ?>" <?php $this->link(); checked( $this->value(), "scheme6"); ?> />
                    <img src="<?php echo $imageDirectory; ?><?php _et('scheme6.jpg'); ?>" alt="<?php _et('Scheme 6'); ?>" />
                </label>
            </div>
        <?php }
    }
}
?>