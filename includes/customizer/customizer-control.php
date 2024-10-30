<?php
if( ! class_exists('WP_Customize_Control') ){
    return NULL;
}
class Hasten_Companion_checkbox_Customize_Controls extends WP_Customize_Control
{
    public function render_content()
    {
        ?>
        <h2><?php echo esc_html($this->label); ?></h2>
        <label class="switch">
            <input type="checkbox" value="<?php echo esc_attr($this->value()); ?>" <?php $this->link();
            checked($this->value()); ?> />

            <span class="slider"></span>
        </label>
        <p><?php echo esc_html($this->description)  ; ?></p>

        <?php
    }
}
