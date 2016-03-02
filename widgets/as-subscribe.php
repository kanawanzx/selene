<?php

class AS_Subscribe extends WP_Widget {

    /**
     * Setup widget options.
     *
     * Allows child classes to override the defaults.
     *
     * @see WP_Widget::construct()
     */
    function __construct($id_base = false, $name = false, $widget_options = array(), $control_options = array()) {
        $id_base = ( $id_base ) ? $id_base : 'as_subscribe';
        $name    = ( $name ) ? $name : __('AS Subscribe', 'blazersix-widget-image-i18n');

        $widget_options = wp_parse_args($widget_options, array(
            'classname'   => 'as_subscribe',
            'description' => __('An image from the media library', 'blazersix-widget-image-i18n')
        ));

        $control_options = wp_parse_args($control_options, array(
            'width' => 278));

        parent::__construct($id_base, $name, $widget_options, $control_options);
    }

    /**
     * Default widget front end display method.
     * 
     */
    public function widget($args, $instance) {
        // Return cached widget if it exists.
        // Filter and sanitize instance data

        extract($args);

        $title = apply_filters('widget_title', $instance['title']);
        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if (!empty($title))
            echo $args['before_title'] . $title . $args['after_title'];


        $mailchimp_url   = $instance['mailchimp_url'];
        $label_subscribe = $instance['label_subscribe'];

        $mailchimp_data = explode('?u=', $mailchimp_url);
        if (isset($mailchimp_data[1])) {
            $mailchimp_s_url = $mailchimp_data[0];
            $mailchimp_data  = explode('&id=', $mailchimp_data[1]);
        }
        else {
            $mailchimp_data = array(
                '',
                '');
        }
        ?>

        <div class="as_mailchimp_form">
            <!-- For subscription Form-->
            <p class="as_label_subscribe" style="<?php
            if ($label_subscribe == "") {
                echo 'display:none';
            }
            ?>"><?php echo esc_attr($label_subscribe); ?></p>
            <form method="GET" action="<?php echo esc_url($mailchimp_s_url); ?>" target="_blank">
                <input class="as_email_mailchimp" type="email" required="" placeholder="<?php _e('Email Address', 'alenastudio') ?>" name="EMAIL">
                <input type="hidden" name="u" value="<?php echo esc_attr($mailchimp_data[0]) ?>">
                <input type="hidden" name="id" value="<?php echo esc_attr($mailchimp_data[1]) ?>">
                <button class="as-button-main-style full-width" type="submit" >Subscribe</button>
            </form>
        </div>

        <?php
        echo $args['after_widget'];
    }

    /**
     * 3. Show widget in admin dashboard
     */
    public function form($instance) {
        $title           = isset($instance['title']) ? $instance['title'] : 'Default Title';
        $label_subscribe = isset($instance['label_subscribe']) ? $instance['label_subscribe'] : '';
        $mailchimp_url   = isset($instance['mailchimp_url']) ? $instance['mailchimp_url'] : 'Default';


        // widget admin form
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php _e('Title:', 'alenastudio') ?></label>
            <input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('label_subscribe')); ?>"><?php _e('Label Subscribe:', 'alenastudio') ?></label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id('label_subscribe') ?>" name="<?php echo esc_attr($this->get_field_name('label_subscribe')); ?>" value="<?php echo esc_attr($label_subscribe); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('mailchim_url')); ?>"><?php _e('MailChimp url:', 'alenastudio') ?></label>
            <input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id('mailchimp_url')); ?>" name="<?php echo esc_attr($this->get_field_name('mailchimp_url')); ?>" value="<?php echo esc_attr($mailchimp_url); ?>">
            <a href="https://www.screenr.com/kIXN" target="_blank"><?php _e('How to find MailChimp URL?', 'alenastudio'); ?></a>
        </p>

        <?php
    }

    /**
     * 4. Save All Infomation
     */
    public function update($new_instance, $old_instance) {
        $instance                    = array();
        $instance['title']           = strip_tags($new_instance['title']);
        $instance['label_subscribe'] = strip_tags($new_instance['label_subscribe']);
        $instance['mailchimp_url']   = strip_tags($new_instance['mailchimp_url']);
        return $instance;
    }

}
