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

            $imageDirectory = get_stylesheet_directory_uri() . '/inc/customizer/img/';
            ?>
            
            <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>

            <div class="colorscheme-customizer-control">
                <label>
                    <input type="radio" value="1" name="<?php echo esc_attr( $this->id ); ?>" <?php $this->link(); checked( $this->value(), "full_width"); ?> />
                    <img src="<?php echo $imageDirectory; ?>scheme1.jpg" alt="Scheme 1" />
                </label>
                <label>
                    <input type="radio" value="2" name="<?php echo esc_attr( $this->id ); ?>" <?php $this->link(); checked( $this->value(), "left_sidebar"); ?> />
                    <img src="<?php echo $imageDirectory; ?>scheme2.jpg" alt="Scheme 2" />
                </label>
                <label>
                    <input type="radio" value="3" name="<?php echo esc_attr( $this->id ); ?>" <?php $this->link(); checked( $this->value(), "left_sidebar"); ?> />
                    <img src="<?php echo $imageDirectory; ?>scheme3.jpg" alt="Scheme 3" />
                </label>
            </div>
            <div class="colorscheme-customizer-control">
                <label>
                    <input type="radio" value="4" name="<?php echo esc_attr( $this->id ); ?>" <?php $this->link(); checked( $this->value(), "left_sidebar"); ?> />
                    <img src="<?php echo $imageDirectory; ?>scheme4.jpg" alt="Scheme 4" />
                </label>
                <label>
                    <input type="radio" value="5" name="<?php echo esc_attr( $this->id ); ?>" <?php $this->link(); checked( $this->value(), "left_sidebar"); ?> />
                    <img src="<?php echo $imageDirectory; ?>scheme5.jpg" alt="Scheme 5" />
                </label>
                <label>
                    <input type="radio" value="6" name="<?php echo esc_attr( $this->id ); ?>" <?php $this->link(); checked( $this->value(), "left_sidebar"); ?> />
                    <img src="<?php echo $imageDirectory; ?>scheme6.jpg" alt="Scheme 6" />
                </label>
            </div>
        <?php }
    }
}
?>