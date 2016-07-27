<?php
if (class_exists('WP_Customize_Control'))
{
    /**
     * Class to create a custom layout control
     */
    class Layout_Picker_Custom_control extends WP_Customize_Control
    {
        /**
         * Render the content on the theme customizer page
         */
        public function render_content()
           {
            $this->type = "radio";

            $imageDirectory = get_stylesheet_directory_uri() . '/inc/customizer/img/layouts/';
            ?>
            
            <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
            <em><?php echo esc_html( $this->description ); ?></em><br /><br />

            <div class="layout-customizer-control">
                <label>
                    <input type="radio" value="1" name="<?php echo esc_attr( $this->id ); ?>" <?php $this->link(); checked( $this->value(), "left_sidebar"); ?> />
                    <img src="<?php echo $imageDirectory; ?>left_sidebar.png" alt="<?php _et('Left Sidebar'); ?>" />
                    <span><?php _et('Left Sidebar'); ?></span>
                </label>
                <label>
                    <input type="radio" value="2" name="<?php echo esc_attr( $this->id ); ?>" <?php $this->link(); checked( $this->value(), "right_sidebar"); ?> />
                    <img src="<?php echo $imageDirectory; ?>right_sidebar.png" alt="<?php _et('Full Width'); ?>" />
                    <span><?php _et('Right Sidebar'); ?></span>
                </label>
                <label>
                    <input type="radio" value="3" name="<?php echo esc_attr( $this->id ); ?>" <?php $this->link(); checked( $this->value(), "full_width"); ?> />
                    <img src="<?php echo $imageDirectory; ?>full_width.png" alt="<?php _et('Full Width'); ?>" />
                    <span><?php _et('Full Width'); ?></span>
                </label>
            </div>
        <?php }
    }
}
?>