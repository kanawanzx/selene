<?php

/**
 * This file setting Recent Comments
 * 
 *
 * @package 	Monalisa
 * @author   	theme_cocktail
 */
/* ----------------------------------------------------------------------------------- */
/* Setting Recent Comments */
/* ----------------------------------------------------------------------------------- */
class AS_Recent_Comments_Widget extends WP_Widget {

    /** constructor */
    function __construct() {
        $widget_ops            = array(
            'classname'   => 'widget_recent_comments',
            'description' => __("Your site&#8217;s most recent Comments.", 'alenastudio'));
        parent::__construct('as-recent-comments', __('AS Recent Comments', 'alenastudio'), $widget_ops);
        $this->alt_option_name = 'widget_recent_comments';
    }

    /** @see WP_Widget::widget */
    function widget($args, $instance) {
        extract($args);
        $title  = apply_filters('widget_title', $instance['title']);
        $number = apply_filters('widget_title', $instance['number']);
        ?>
        <?php echo $before_widget; ?>
        <?php
        if ($title)
            echo $before_title . $title . $after_title;
        ?>
        <?php $this->recent_comments($number); ?>
        <?php echo $after_widget; ?>
        <?php
    }

    /** @see WP_Widget::update */
    function update($new_instance, $old_instance) {
        $instance           = $old_instance;
        $instance['title']  = strip_tags($new_instance['title']);
        $instance['number'] = strip_tags($new_instance['number']);
        return $instance;
    }

    /** @see WP_Widget::form */
    function form($instance) {
        $title  = esc_attr($instance['title']);
        $number = esc_attr($instance['number']);
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'alenastudio'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('number'); ?>"><?php _e('Number to Show:', 'alenastudio'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="text" value="<?php echo $number; ?>" />
        </p>
        <?php
    }

    // Recent comments with gravatars
    function recent_comments($no_comments = 4, $comment_len = 50) {
        global $wpdb;
        if ($no_comments == '') {
            $no_comments = 4;
        }
        $request  = "SELECT * FROM $wpdb->comments";
        $request .= " JOIN $wpdb->posts ON ID = comment_post_ID";
        $request .= " WHERE comment_approved = '1' AND post_status = 'publish' AND post_password =''";
        $request .= " ORDER BY comment_date DESC LIMIT $no_comments";
        $comments = $wpdb->get_results($request);
        if ($comments) {
            foreach ($comments as
                    $comment) {
                ob_start();
                ?>	
                <div class="sidebar-item-box">
                    <?php echo get_avatar($comment, $size = '51'); ?>
                    <h5><a class="sidebar-item-title rev" href="<?php echo get_permalink($comment->comment_post_ID) . '#comment-' . $comment->comment_ID; ?>"><?php echo $this->complete_get_author($comment); ?></a>
                        on <a class="sidebar-item-title rev" href="<?php echo get_permalink($comment->comment_post_ID) . '#comment-' . $comment->comment_ID; ?>"><?php echo get_the_title($comment->comment_post_ID); ?></a></h5>
                    <p class="sidebar-item-date"><?php echo strip_tags(substr(apply_filters('get_comment_text', $comment->comment_content), 0, $comment_len)); ?> ...</p>
                </div>
                <?php
                ob_end_flush();
            }
        }
        else {
            echo '<li>' . __('No comments', 'alenastudio') . '';
        }
    }

    // Get author for recent comments
    function complete_get_author($comment) {
        $author = "";
        if (empty($comment->comment_author))
            $author = __('Anonymous', 'alenastudio');
        else
            $author = $comment->comment_author;
        return $author;
    }

}
