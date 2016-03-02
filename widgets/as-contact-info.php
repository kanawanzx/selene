<?php
/* ----------------------------------------------------------------------------------- */
/* Setting Contact Form */
/* ----------------------------------------------------------------------------------- */

class AS_Contact_Info_Widget extends WP_Widget {

    function __construct() {
        $widget_ops  = array(
            'classname'   => 'contact_info',
            'description' => __('Displaying your contact information', 'alenastudio'));
        $control_ops = array(
            'width'  => 250,
            'height' => 100);
        parent::__construct('as_contact_info_widget', __('AS Contact Form', 'alenastudio'), $widget_ops, $control_ops);
    }

    // display the widget in the theme
    function widget($args, $instance) {
        extract($args);

        $title     = apply_filters('widget_title', $instance['title']);
        $name      = strip_tags($instance['name']);
        $mail      = strip_tags($instance['mail']);
        $phone     = strip_tags($instance['phone']);
        $address   = strip_tags($instance['address']);
        $xtra_info = strip_tags($instance['xtra_info']);

        echo $args['before_widget'];
        if (!empty($title))
            echo $args['before_title'] . $title . $args['after_title'];
        ?>		
        <div class="contact-info-widget-wrapper">
            <ul class="contact-info-widget">
                <?php
                if ($name)
                    echo '<li><span class="as-icon-contact-wrapper"><span class="dslc-icon dslc-icon-building"></span></span><p>' . esc_html($name) . '</p><div class="clearfix"></div></li>';
                if ($mail)
                    echo '<li><span class="as-icon-contact-wrapper"><span class="dslc-icon dslc-icon-envelope"></span></span><p>' . is_email($mail) . '</p><div class="clearfix"></div></li>';
                if ($phone)
                    echo '<li><span class="as-icon-contact-wrapper"><span class="dslc-icon dslc-icon-phone"></span></span><p>' . esc_html($phone) . '</p><div class="clearfix"></div></li>';
                if ($address)
                    echo '<li><span class="as-icon-contact-wrapper"><span class="dslc-icon dslc-icon-map-marker"></span></span><p>' . esc_html($address) . '</p><div class="clearfix"></div></li>';
                if ($xtra_info)
                    echo '<li><span class="as-icon-contact-wrapper"><span class="dslc-icon dslc-icon-info-sign"></span></span><p>' . esc_textarea($xtra_info) . '</p><div class="clearfix"></div></li>';
                ?>
            </ul>
        </div>
        <?php
        echo $args['after_widget'];

        //end
    }

    // update the widget when new options have been entered
    function update($new_instance, $old_instance) {

        $instance              = $old_instance;
        $instance['title']     = strip_tags($new_instance['title']);
        $instance['name']      = strip_tags($new_instance['name']);
        $instance['mail']      = strip_tags($new_instance['mail']);
        $instance['phone']     = strip_tags($new_instance['phone']);
        $instance['address']   = strip_tags($new_instance['address']);
        $instance['xtra_info'] = strip_tags($new_instance['xtra_info']);
        return $instance;
    }

    // print the widget option form on the widget management screen
    function form($instance) {
        // combine provided fields with defaults
        $instance  = wp_parse_args((array) $instance, array(
            'title'     => 'Contact Info',
            'name'      => '',
            'mail'      => '',
            'phone'     => '',
            'address'   => '',
            'xtra_info' => ''));
        $name      = strip_tags($instance['name']);
        $mail      = strip_tags($instance['mail']);
        $phone     = strip_tags($instance['phone']);
        $address   = strip_tags($instance['address']);
        $xtra_info = strip_tags($instance['xtra_info']);
        $title     = strip_tags($instance['title']);
        // print the form fields
        ?>
        <p><label for="<?php echo esc_attr($this->get_field_id('title')); ?>">
                <?php _e('Title:', 'alenastudio'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php
            echo
            esc_attr($title);
            ?>" /></p>

        <p><label for="<?php echo esc_attr($this->get_field_id('name')); ?>">
            <?php _e('Name:', 'alenastudio'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('name')); ?>" name="<?php echo esc_attr($this->get_field_name('name')); ?>" type="text" value="<?php
                   echo
                   esc_attr($name);
                   ?>" /></p>

        <p><label for="<?php echo esc_attr($this->get_field_id('mail')); ?>">
            <?php _e('Mail:', 'alenastudio'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('mail')); ?>" name="<?php echo esc_attr($this->get_field_name('mail')); ?>" type="text" value="<?php
           echo
           esc_attr($mail);
            ?>" /></p>

        <p><label for="<?php echo esc_attr($this->get_field_id('phone')); ?>">
                   <?php _e('Phone:', 'alenastudio'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('phone')); ?>" name="<?php echo esc_attr($this->get_field_name('phone')); ?>" type="text" value="<?php
           echo
           esc_attr($phone);
           ?>" /></p>

        <p><label for="<?php echo esc_attr($this->get_field_id('address')); ?>">
        <?php _e('Address:', 'alenastudio'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('address')); ?>" name="<?php echo esc_attr($this->get_field_name('address')); ?>" type="text" value="<?php
                echo
                esc_attr($address);
                ?>" /></p>

        <p><label for="<?php echo esc_attr($this->get_field_id('xtra_info')); ?>">
        <?php _e('Extra Info:', 'alenastudio'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('xtra_info')); ?>" name="<?php echo esc_attr($this->get_field_name('xtra_info')); ?>"><?php
        echo
        esc_attr($xtra_info);
        ?></textarea></p>
        <?php
    }

}
