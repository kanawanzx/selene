<?php

/**
 * Class AS_Flickr_Widget
 * create flickr widget
 *
 * @package 	Anna
 * @author   	Alena Studio
 */
/* ----------------------------------------------------------------------------------- */
/* Setting Flickr */
/* ----------------------------------------------------------------------------------- */
class AS_Flickr_Widget extends WP_Widget {

    function __construct() {
        $widget_ops  = array(
            'classname'   => 'widget',
            'description' => __('Drag this widget to single sidebars to display a list of related questions.', 'alenastudio'));
        $control_ops = array(
            'width'  => 250,
            'height' => 100);
        parent::__construct('as_flickr_widget', __('AS Flickr', 'alenastudio'), $widget_ops, $control_ops);
    }

    function update($new_instance, $old_instance) {
        if ($new_instance['number'] != $old_instance['number']) {
            delete_transient('related_questions_query');
        }
        return $new_instance;
    }

    function form($instance) {
        $instance = wp_parse_args((array) $instance, array(
            'title'     => '',
            'number'    => '4',
            'flickr_id' => '',
                )
        );
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>">
                <?php _e('Title:', 'alenastudio') ?>
            </label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($instance['title']); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>">
                <?php _e('Number of photos to display:', 'alenastudio') ?>
            </label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr($instance['number']); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('flickr_id')); ?>">
                <?php _e('Flickr ID:', 'alenastudio') ?>
            </label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('flickr_id')); ?>" name="<?php echo esc_attr($this->get_field_name('flickr_id')); ?>" type="text" value="<?php echo esc_attr($instance['flickr_id']); ?>" /> <a target="_blank" href="http://idgettr.com/">Get ID</a>
        </p>
        <?php
    }

    function widget($args, $instance) {
        extract($args);

        $title  = apply_filters('widget_title', $instance['title']);
        $number = $instance['number'];
        $id     = $instance['flickr_id'];
        echo $args['before_widget'];
        if (!empty($title))
            echo $args['before_title'] . $title . $args['after_title'];
        ?>

        <div class="flickr-wrapper">
            <div class="list-photos">
                <script type="text/javascript" src="//www.flickr.com/badge_code_v2.gne?count=<?php echo esc_attr($number); ?>&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=<?php echo esc_attr($id); ?>"></script>
                <div class="clearfix"></div>
            </div>
        </div>
        <?php
        echo $args['after_widget'];
    }

}

// End Flickr Widget