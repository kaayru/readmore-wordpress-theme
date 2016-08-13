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
                    <img src="<?php echo $imageDirectory; ?><?php _e('scheme1.jpg', 'readmore'); ?>" alt="<?php _e('Scheme 1', 'readmore'); ?>" />
                </label>
                <label>
                    <input type="radio" value="2" name="<?php echo esc_attr( $this->id ); ?>" <?php $this->link(); checked( $this->value(), "scheme2"); ?> />
                    <img src="<?php echo $imageDirectory; ?><?php _e('scheme2.jpg', 'readmore'); ?>" alt="<?php _e('Scheme 2', 'readmore'); ?>" />
                </label>
                <label>
                    <input type="radio" value="3" name="<?php echo esc_attr( $this->id ); ?>" <?php $this->link(); checked( $this->value(), "scheme3"); ?> />
                    <img src="<?php echo $imageDirectory; ?><?php _e('scheme3.jpg', 'readmore'); ?>" alt="<?php _e('Scheme 3', 'readmore'); ?>" />
                </label>
            </div>
            <div class="layout-customizer-control">
                <label>
                    <input type="radio" value="4" name="<?php echo esc_attr( $this->id ); ?>" <?php $this->link(); checked( $this->value(), "scheme4"); ?> />
                    <img src="<?php echo $imageDirectory; ?><?php _e('scheme4.jpg', 'readmore'); ?>" alt="<?php _e('Scheme 4', 'readmore'); ?>" />
                </label>
                <label>
                    <input type="radio" value="5" name="<?php echo esc_attr( $this->id ); ?>" <?php $this->link(); checked( $this->value(), "scheme5"); ?> />
                    <img src="<?php echo $imageDirectory; ?><?php _e('scheme5.jpg', 'readmore'); ?>" alt="<?php _e('Scheme 5', 'readmore'); ?>" />
                </label>
                <label>
                    <input type="radio" value="6" name="<?php echo esc_attr( $this->id ); ?>" <?php $this->link(); checked( $this->value(), "scheme6"); ?> />
                    <img src="<?php echo $imageDirectory; ?><?php _e('scheme6.jpg', 'readmore'); ?>" alt="<?php _e('Scheme 6', 'readmore'); ?>" />
                </label>
            </div>
            <div class="layout-customizer-control">
                <label>
                    <input type="radio" value="7" name="<?php echo esc_attr( $this->id ); ?>" <?php $this->link(); checked( $this->value(), "scheme7"); ?> />
                    <img src="<?php echo $imageDirectory; ?><?php _e('scheme7.jpg', 'readmore'); ?>" alt="<?php _e('Scheme 7', 'readmore'); ?>" />
                </label>
                <label>
                    <input type="radio" value="8" name="<?php echo esc_attr( $this->id ); ?>" <?php $this->link(); checked( $this->value(), "scheme7"); ?> />
                    <img src="<?php echo $imageDirectory; ?><?php _e('scheme8.jpg', 'readmore'); ?>" alt="<?php _e('Scheme 8', 'readmore'); ?>" />
                </label>
                <label>
                    <input type="radio" value="9" name="<?php echo esc_attr( $this->id ); ?>" <?php $this->link(); checked( $this->value(), "scheme7"); ?> />
                    <img src="<?php echo $imageDirectory; ?><?php _e('scheme9.jpg', 'readmore'); ?>" alt="<?php _e('Scheme 9', 'readmore'); ?>" />
                </label>
            </div>
            <div class="layout-customizer-control">
                <label>
                    <input type="radio" value="10" name="<?php echo esc_attr( $this->id ); ?>" <?php $this->link(); checked( $this->value(), "scheme7"); ?> />
                    <img src="<?php echo $imageDirectory; ?><?php _e('scheme10.jpg', 'readmore'); ?>" alt="<?php _e('Scheme 10', 'readmore'); ?>" />
                </label>
                <label>
                    <input type="radio" value="11" name="<?php echo esc_attr( $this->id ); ?>" <?php $this->link(); checked( $this->value(), "scheme7"); ?> />
                    <img src="<?php echo $imageDirectory; ?><?php _e('scheme11.jpg', 'readmore'); ?>" alt="<?php _e('Scheme 11', 'readmore'); ?>" />
                </label>
                <label>
                    <input type="radio" value="12" name="<?php echo esc_attr( $this->id ); ?>" <?php $this->link(); checked( $this->value(), "scheme7"); ?> />
                    <img src="<?php echo $imageDirectory; ?><?php _e('scheme12.jpg', 'readmore'); ?>" alt="<?php _e('Scheme 12', 'readmore'); ?>" />
                </label>
            </div>
            <div class="layout-customizer-control">
                <label>
                    <input type="radio" value="13" name="<?php echo esc_attr( $this->id ); ?>" <?php $this->link(); checked( $this->value(), "scheme7"); ?> />
                    <img src="<?php echo $imageDirectory; ?><?php _e('scheme13.jpg', 'readmore'); ?>" alt="<?php _e('Scheme 13', 'readmore'); ?>" />
                </label>
                <label>
                    <input type="radio" value="14" name="<?php echo esc_attr( $this->id ); ?>" <?php $this->link(); checked( $this->value(), "scheme7"); ?> />
                    <img src="<?php echo $imageDirectory; ?><?php _e('scheme14.jpg', 'readmore'); ?>" alt="<?php _e('Scheme 14', 'readmore'); ?>" />
                </label>
                <label>
                    <input type="radio" value="15" name="<?php echo esc_attr( $this->id ); ?>" <?php $this->link(); checked( $this->value(), "scheme7"); ?> />
                    <img src="<?php echo $imageDirectory; ?><?php _e('scheme15.jpg', 'readmore'); ?>" alt="<?php _e('Scheme 15', 'readmore'); ?>" />
                </label>
            </div>
        <?php }
    }
}
?>
