<?php

class AS_Yahoo_Skype_status extends WP_Widget {

    public $_number = 10;

    function __construct($id_base = false, $name = false, $widget_options = array(), $control_options = array()) {
        $id_base = ( $id_base ) ? $id_base : 'support-online-widget';
        $name    = ( $name ) ? $name : __('AS Support Online', 'support-online-widget-i18n');

        $widget_options = wp_parse_args($widget_options, array(
            'classname'   => 'widget_support',
            'description' => __('AS Yahoo and Skype status', 'support-online-widget-i18n')
        ));

        $control_options = wp_parse_args($control_options, array(
            'width' => 278));


        parent::__construct($id_base, $name, $widget_options, $control_options);
    }

    function widget($args, $instance) {
        extract($args);

        echo $before_widget;
        echo $before_title . $instance["title"] . $after_title;
        echo "<table class='as_support_online'>";
        for ($i = 1;
                $i <= $this->_number;
                $i++) {
            if (!empty($instance["nick_" . $i])) {
                if ($instance["nick_type_" . $i] == 'yahoo') {
                    if ($instance['is_show_name_' . $i])
                        echo '<tr><td class="as_td_middle"><a href="ymsgr:sendim?' . $instance["nick_" . $i] . '"><img border="0" src="http://opi.yahoo.com/online?u=' . $instance["nick_" . $i] . '&t=' . $instance["yahoo_status_type_" . $i] . '" alt="' . $instance["nick_name_" . $i] . '" /></a></td><td><span> ' . $instance["nick_name_" . $i] . '</span><span>' . $instance["number_phone_" . $i] . '</span></td></tr>';
                    else
                        echo '<tr><td class="as_td_middle"><a href="ymsgr:sendim?' . $instance["nick_" . $i] . '"><img border="0" src="http://opi.yahoo.com/online?u=' . $instance["nick_" . $i] . '&t=' . $instance["yahoo_status_type_" . $i] . '" alt="' . $instance["nick_name_" . $i] . '" /></a></td></tr>';
                }
                else {
                    if ($instance['is_show_name_' . $i])
                        echo '<tr><td class="as_td_middle" ><a href="skype:' . $instance["nick_" . $i] . '?call" title="Talk with me via Skype "><img class="as_skype_img" src="http://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/Skype_logo.svg/218px-Skype_logo.svg.png"  alt="Talk with me via Skype" /> </a></td><td><span>' . $instance["nick_name_" . $i] . '</span><span>' . $instance["number_phone_" . $i] . '</span></td></tr>';
                    else
                        echo '<tr><td class="as_td_middle"><a href="skype:' . $instance["nick_" . $i] . '?call" title="Talk with me via Skype "><img class="as_skype_img" src="http://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/Skype_logo.svg/218px-Skype_logo.svg.png"  alt="Talk with me via Skype" /></a></td></tr>';
                }
            }
        }
        echo "</table>";
        echo $after_widget;
    }

    function form($instance) {
        ?>
        <p>
            <label for="<?php echo $this->get_field_id("title"); ?>">
                <strong><?php _e('Title', 'alenastudio'); ?>:</strong>
                <input class="widefat" id="<?php echo $this->get_field_id("title"); ?>" name="<?php echo $this->get_field_name("title"); ?>" type="text" value="<?php echo esc_attr($instance["title"]); ?>" />
            </label>
        </p>
        <hr size="2" />
        <table width="100%" bgcolor="#EEEEEE">
            <?php
            for ($i = 1;
                    $i <= $this->_number;
                    $i++):
                ?>
                <tr><td colspan="2"><a style="background:#CC0099; color:#FFF; padding:2px 5px;"><?php echo $i; ?></a></td></tr>
                <tr>
                    <td><label for="<?php echo $this->get_field_id("nick_" . $i); ?>"><strong><?php _e('Nick', 'alenastudio'); ?>:</strong></label></td>
                    <td><input id="<?php echo $this->get_field_id("nick_" . $i); ?>" name="<?php echo $this->get_field_name("nick_" . $i); ?>" type="text" value="<?php echo esc_attr($instance["nick_" . $i]); ?>" /></td>
                </tr>
                <tr>
                    <td><label for="<?php echo $this->get_field_id("is_show_name_" . $i); ?>">
                            <?php _e('Show full name', 'alenastudio'); ?>:</label></td>
                    <td> 
                        <select id="<?php echo $this->get_field_id("is_show_name_" . $i); ?>" name="<?php echo $this->get_field_name("is_show_name_" . $i); ?>">
                            <option value="1"<?php selected($instance["is_show_name_" . $i], "1"); ?>>Yes</option>
                            <option value="0"<?php selected($instance["is_show_name_" . $i], "0"); ?>>No</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td> <label for="<?php echo $this->get_field_id("nick_name_" . $i); ?>"><?php _e('Full name', 'alenastudio'); ?>:</label></td>
                    <td><input id="<?php echo $this->get_field_id("nick_name_" . $i); ?>" name="<?php echo $this->get_field_name("nick_name_" . $i); ?>" type="text" value="<?php echo esc_attr($instance["nick_name_" . $i]); ?>" /></td>
                </tr>
                <tr>
                    <td> <label for="<?php echo $this->get_field_id("number_phone_" . $i); ?>"><?php _e('Phone Number', 'alenastudio'); ?>:</label></td>
                    <td><input id="<?php echo $this->get_field_id("number_phone_" . $i); ?>" name="<?php echo $this->get_field_name("number_phone_" . $i); ?>" type="text" value="<?php echo esc_attr($instance["number_phone_" . $i]); ?>" /></td>
                </tr>
                <tr>
                    <td><label for="<?php echo $this->get_field_id("nick_type_" . $i); ?>">
                            <?php _e('Type', 'alenastudio'); ?>:</label></td>
                    <td> 
                        <select id="<?php echo $this->get_field_id("nick_type_" . $i); ?>" name="<?php echo $this->get_field_name("nick_type_" . $i); ?>">
                            <option value="yahoo"<?php selected($instance["nick_type_" . $i], "yahoo"); ?>>Yahoo</option>
                            <option value="skype"<?php selected($instance["nick_type_" . $i], "skype"); ?>>Skype</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Yahoo smile<br /><small><em>Yahoo only</em></small></td>
                    <td>
                        <select id="<?php echo $this->get_field_id("yahoo_status_type_" . $i); ?>" name="<?php echo $this->get_field_name("yahoo_status_type_" . $i); ?>" >
                            <?php
                            for ($k = 0;
                                    $k < 25;
                                    $k++):
                                ?>	
                                <option value="<?php echo $k; ?>" <?php if ($instance["yahoo_status_type_" . $i] == $k) echo 'selected="selected"'; ?>><?php echo $k; ?></option>
                            <?php endfor; ?>
                        </select> 

                    </td>
                </tr>

                <tr><td colspan="2"><hr size="1" color="#666666"  /></td></tr>
            <?php endfor; ?>
        </table>

        <?php
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        for ($i = 1;
                $i <= $this->_number;
                $i++) {
            if (!empty($new_instance['nick_' . $i]) && empty($new_instance['nick_name_' . $i])) {
                $new_instance['nick_name_' . $i] = $new_instance['nick_' . $i];
            }
        }
        return $new_instance;
    }

}
