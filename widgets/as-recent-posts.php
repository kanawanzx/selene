<?php

/**
 * Class AS_Recent_Posts_Widget
 * create recent posts widget
 *
 * @package 	Anna
 * @author   	alenastudio
 */
/* ----------------------------------------------------------------------------------- */
/* Setting AS_Recent_Posts_Widget */
/* ----------------------------------------------------------------------------------- */
class AS_Recent_Posts_Widget extends WP_Widget {

    function __construct() {
        $widget_ops            = array(
            'classname'   => 'widget_recent_entries',
            'description' => __("Your site&#8217;s most recent Posts.", 'alenastudio'));
        parent::__construct('cocktail-recent-posts', __('AS Recent Posts', 'alenastudio'), $widget_ops);
        $this->alt_option_name = 'widget_recent_entries';
        add_action('save_post', array(
            $this,
            'as_flush_widget_cache'));
        add_action('deleted_post', array(
            $this,
            'as_flush_widget_cache'));
        add_action('switch_theme', array(
            $this,
            'as_flush_widget_cache'));
    }

    function widget($args, $instance) {
        $cache = array();
        if (!$this->is_preview()) {
            $cache = wp_cache_get('widget_cocktail_recent_posts', 'widget');
        }
        if (!is_array($cache)) {
            $cache = array();
        }
        if (!isset($args['widget_id'])) {
            $args['widget_id'] = $this->id;
        }
        if (isset($cache[$args['widget_id']])) {
            echo $cache[$args['widget_id']];
            return;
        }
        ob_start();
        extract($args);
        $title      = (!empty($instance['title']) ) ? $instance['title'] : __('Recent Posts', 'alenastudio');
        /** This filter is documented in wp-includes/default-widgets.php */
        $title      = apply_filters('widget_title', $title, $instance, $this->id_base);
        $number     = (!empty($instance['number']) ) ? absint($instance['number']) : 5;
        if (!$number)
            $number     = 5;
        $show_date  = isset($instance['show_date']) ? $instance['show_date'] : false;
        $show_thumb = isset($instance['show_thumb']) ? $instance['show_thumb'] : false;
        /**
         * Filter the arguments for the Recent Posts widget.
         *
         * @since 3.4.0
         *
         * @see WP_Query::get_posts()
         *
         * @param array $args An array of arguments used to retrieve the recent posts.
         */
        $r          = new WP_Query(apply_filters('widget_posts_args', array(
                    'posts_per_page'      => $number,
                    'no_found_rows'       => true,
                    'post_status'         => 'publish',
                    'ignore_sticky_posts' => true
        )));
        if ($r->have_posts()) :
            echo $args['before_widget'];
            if (!empty($title))
                echo $args['before_title'] . $title . $args['after_title'];
            ?>
            <ul class="recent-post-widget-wrapper">
                <?php while ($r->have_posts()) : $r->the_post(); ?>
                    <li>
                        <div class="recent-post-widget">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php
                                $thumbnail_src = wp_get_attachment_url(get_post_thumbnail_id());
                                $website_url   = site_url();
                                $thumbnail_src = str_replace($website_url, '', $thumbnail_src);
                                $thumbnail     = wp_get_attachment_url(get_post_thumbnail_id());
                                ?>
                                <?php if ($show_thumb) : ?>
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="as-img-thumb">
                                        <img src="<?php echo dslc_aq_resize($thumbnail, 70, 50, true) ?>" alt="<?php the_title(); ?>"/>                                   
                                    </a>
                                <?php endif; ?>
                            <?php endif; ?>
                            <div class="recent-post-widget-content">
                                <h5><a href="<?php the_permalink(); ?>" class="sidebar-item-title"><?php the_title(); ?></a></h5>
                                <?php if ($show_date) : ?>
                                    <p class="recent-post-widget-date"><?php _e('Posted:', 'alenastudio') ?> <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . __(' ago', 'alenastudio'); ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
            <?php echo $args['after_widget']; ?>
            <?php
            // Reset the global $the_post as this query will have stomped on it
            wp_reset_postdata();
        endif;
        if (!$this->is_preview()) {
            $cache[$args['widget_id']] = ob_get_flush();
            wp_cache_set('widget_cocktail_recent_posts', $cache, 'widget');
        }
        else {
            ob_end_flush();
        }
    }

    function update($new_instance, $old_instance) {
        $instance               = $old_instance;
        $instance['title']      = strip_tags($new_instance['title']);
        $instance['number']     = (int) $new_instance['number'];
        $instance['show_date']  = isset($new_instance['show_date']) ? (bool) $new_instance['show_date'] : false;
        $instance['show_thumb'] = isset($new_instance['show_thumb']) ? (bool) $new_instance['show_thumb'] : false;
        $this->as_flush_widget_cache();
        $alloptions             = wp_cache_get('alloptions', 'options');
        if (isset($alloptions['widget_recent_entries']))
            delete_option('widget_recent_entries');
        return $instance;
    }

    function as_flush_widget_cache() {
        wp_cache_delete('widget_cocktail_recent_posts', 'widget');
    }

    function form($instance) {
        $title      = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $number     = isset($instance['number']) ? absint($instance['number']) : 5;
        $show_date  = isset($instance['show_date']) ? (bool) $instance['show_date'] : false;
        $show_thumb = isset($instance['show_thumb']) ? (bool) $instance['show_thumb'] : false;
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php _e('Title:', 'alenastudio'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php _e('Number of posts to show:', 'alenastudio'); ?></label>
            <input id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr($number); ?>" size="3" />
        </p>
        <p>
            <input class="checkbox" type="checkbox" <?php checked($show_date); ?> id="<?php echo esc_attr($this->get_field_id('show_date')); ?>" name="<?php echo esc_attr($this->get_field_name('show_date')); ?>" />
            <label for="<?php echo esc_attr($this->get_field_id('show_date')); ?>"><?php _e('Display post date?', 'alenastudio'); ?></label>
        </p>
        <p>
            <input class="checkbox" type="checkbox" <?php checked($show_thumb); ?> id="<?php echo esc_attr($this->get_field_id('show_thumb')); ?>" name="<?php echo esc_attr($this->get_field_name('show_thumb')); ?>" />
            <label for="<?php echo esc_attr($this->get_field_id('show_thumb')); ?>"><?php _e('Display thumb image?', 'alenastudio'); ?></label>
        </p>
        <?php
    }

}
