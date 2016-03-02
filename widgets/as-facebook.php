<?php

/**
 * Class as_facebook_widget
 * create flickr widget
 *
 * @author : Alena Studio
 */
/* ----------------------------------------------------------------------------------- */
/* Setting Flickr */
/* ----------------------------------------------------------------------------------- */
class AS_Facebook_widget extends WP_Widget {

    function __construct() {
        $widget_ops  = array(
            'classname'   => 'widget',
            'description' => __('Drag this widget to single sidebars to display a list of related questions.', 'alenastudio'));
        $control_ops = array(
            'width'  => 250,
            'height' => 100);
        parent::__construct('AS_Facebook_widget', __('AS Facebook', 'alenastudio'), $widget_ops, $control_ops);
    }

    function update($new_instance, $old_instance) {
        if ($new_instance['number'] != $old_instance['number']) {
            delete_transient('related_questions_query');
        }
        return $new_instance;
    }

    function form($instance) {
        $instance = wp_parse_args((array) $instance, array(
            'title'         => '',
            'facebook_link' => '',
                )
        );
        ?>
        <p>
            <label >
                <?php _e('Title:', 'alenastudio') ?>

            </label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($instance['title']); ?>" />
        </p>
        <p>
            <label >
                <?php _e('Facebook Link:', 'alenastudio') ?>
            </label>
            <input class="widefat" id="<?php echo $this->get_field_id('facebook_link'); ?>" name="<?php echo $this->get_field_name('facebook_link'); ?>" type="text" value="<?php echo esc_attr($instance['facebook_link']); ?>" /> 
        </p>
        <?php
    }

    function widget($args, $instance) {
        extract($args);

        $title   = apply_filters('widget_title', $instance['title']);
        $link_fb = $instance['facebook_link'];
        echo $args['before_widget'];
        if (!empty($title))
            echo $args['before_title'] . $title . $args['after_title'];
        ?>
        <div id="fb-root">
            <div class="fb-page" data-href="<?php echo esc_attr($link_fb); ?>" data-width="100%" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false">
                <div class="fb-xfbml-parse-ignore">
                    <blockquote cite="<?php echo esc_attr($link_fb); ?>">
                        <a href="<?php echo esc_url($link_fb); ?>"></a>
                    </blockquote>
                </div>
            </div>
        </div><?php
        echo $args['after_widget'];
    }

}
