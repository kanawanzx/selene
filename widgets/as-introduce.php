<?php

class AS_introduce_widget extends WP_Widget {

    /**
     * Setup widget options.
     *
     * Allows child classes to override the defaults.
     *
     * @see WP_Widget::construct()
     */
    function __construct($id_base = false, $name = false, $widget_options = array(), $control_options = array()) {
        $id_base = ( $id_base ) ? $id_base : 'as-introduce-widget';
        $name    = ( $name ) ? $name : __('AS Introduce', 'alenastudio');

        $widget_options = wp_parse_args($widget_options, array(
            'classname'   => 'as-introduce-widget',
            'description' => __(' Open Your Introduce', 'alenastudio')
        ));

        $control_options = wp_parse_args($control_options, array(
            'width' => 278));

        //load js for admin
        add_action('sidebar_admin_setup', array(
            $this,
            'admin_setup'));


        parent::__construct($id_base, $name, $widget_options, $control_options);
    }

    // Function to upload
    function admin_setup() {

        wp_enqueue_media();
        wp_register_script('tpw-admin-js', TEMPLATEURL . '/js/upload-img/tpw_admin.js', array(
            'jquery',
            'media-upload',
            'media-views'));
        wp_enqueue_script('tpw-admin-js');
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


        $image       = $instance['img_url'];
        $link_to_web = $instance['link_to_web'];
        $img_title   = $instance['img_title'];
        $decription  = $instance['decription'];
        $twitter     = strip_tags($instance['twitter']);
        $facebook    = strip_tags($instance['facebook']);
        $google_plus = strip_tags($instance['google_plus']);
        $youtube     = strip_tags($instance['youtube']);
        $vimeo       = strip_tags($instance['vimeo']);
        $dribbble    = strip_tags($instance['dribbble']);
        $behance     = strip_tags($instance['behance']);
        $flickr      = strip_tags($instance['flickr']);
        $tumblr      = strip_tags($instance['tumblr']);
        $pinterest   = strip_tags($instance['pinterest']);
        $linkedin    = strip_tags($instance['linkedin']);
        $instagram   = strip_tags($instance['instagram']);
        $github      = strip_tags($instance['github']);
        $dropbox     = strip_tags($instance['dropbox']);
        $foursquare  = strip_tags($instance['foursquare']);
        if ($link_to_web != '') {
            ?>
            <a class="as-introduce-img" href="<?php echo esc_url($link_to_web); ?>" target="_blank">
                <img class="as-introduce-img" src='<?php echo esc_url($image); ?>' title="<?php echo esc_attr($img_title); ?>" alt="<?php echo esc_attr($img_title); ?>" />
            </a>
            <?php
        }
        else {
            ?>			
            <img class="as-introduce-img" src='<?php echo esc_url($image); ?>' title="<?php echo esc_attr($img_title); ?>" alt="<?php echo esc_attr($img_title); ?>" />
            <?php
        }
        ?>
        <div class="as-decription-widget">
            <p><?php echo $decription; ?></p>
        </div> 
        <div class="as-social-info-widget-wrapper">
            <ul class="as-social-info-widget">
                <?php
                if ($twitter)
                    echo '<li><a href="' . esc_url($twitter) . '" title="Twitter"><span class="dslc-icon dslc-icon-twitter"></span></a></li>';
                if ($facebook)
                    echo '<li><a href="' . esc_url($facebook) . '" title="Facebook"><span class="dslc-icon dslc-icon-facebook"></span></a></li>';
                if ($google_plus)
                    echo '<li><a href="' . esc_url($google_plus) . '" title="Google Plus"><span class="dslc-icon dslc-icon-google-plus"></span></a></li>';
                if ($youtube)
                    echo '<li><a href="' . esc_url($youtube) . '" title="Youtube"><span class="dslc-icon dslc-icon-youtube-play"></span></a></li>';
                if ($vimeo)
                    echo '<li><a href="' . esc_url($vimeo) . '" title="Vimeo"><span class="dslc-icon dslc-icon-vimeo-square"></span></a></li>';
                if ($dribbble)
                    echo '<li><a href="' . esc_url($dribbble) . '" title="Dribbble"><span class="dslc-icon dslc-icon-dribbble"></span></a></li>';
                if ($behance)
                    echo '<li><a href="' . esc_url($behance) . '" title="Behance"><span class="dslc-icon dslc-icon-behance"></span></a></li>';
                if ($flickr)
                    echo '<li><a href="' . esc_url($flickr) . '" title="Flickr"><span class="dslc-icon dslc-icon-flickr"></span></a></li>';
                if ($tumblr)
                    echo '<li><a href="' . esc_url($tumblr) . '" title="Tumblr"><span class="dslc-icon dslc-icon-tumblr"></span></a></li>';
                if ($pinterest)
                    echo '<li><a href="' . esc_url($pinterest) . '" title="Pinterest"><span class="dslc-icon dslc-icon-pinterest"></span></a></li>';
                if ($linkedin)
                    echo '<li><a href="' . esc_url($linkedin) . '" title="Linkedin"><span class="dslc-icon dslc-icon-linkedin"></span></a></li>';
                if ($instagram)
                    echo '<li><a href="' . esc_url($instagram) . '" title="Instagram"><span class="dslc-icon dslc-icon-instagram"></span></a></li>';
                if ($github)
                    echo '<li><a href="' . esc_url($github) . '" title="Github"><span class="dslc-icon dslc-icon-github"></span></a></li>';
                if ($dropbox)
                    echo '<li><a href="' . esc_url($dropbox) . '" title="Dropbox"><span class="dslc-icon dslc-icon-dropbox"></span></a></li>';
                if ($foursquare)
                    echo '<li><a href="' . esc_url($foursquare) . '" title="Foursquare"><span class="dslc-icon dslc-icon-foursquare"></span></a></li>';
                ?>
            </ul>
        </div>
        <?php
        echo $args['after_widget'];
    }

    /**
     * 3. Show widget in admin dashboard
     */
    public function form($instance) {

        $title       = isset($instance['title']) ? $instance['title'] : 'Default Title';
        $img_url     = isset($instance['img_url']) ? $instance['img_url'] : '';
        $img_title   = isset($instance['img_title']) ? $instance['img_title'] : '';
        $link_to_web = isset($instance['link_to_web']) ? $instance['link_to_web'] : '';
        $decription  = isset($instance['decription']) ? $instance['decription'] : '';
        $twitter     = isset($instance['twitter']) ? strip_tags($instance['twitter']) : '';
        $facebook    = isset($instance['facebook']) ? strip_tags($instance['facebook']) : '';
        $google_plus = isset($instance['google_plus']) ? strip_tags($instance['google_plus']) : '';
        $youtube     = isset($instance['youtube']) ? strip_tags($instance['youtube']) : '';
        $vimeo       = isset($instance['vimeo']) ? strip_tags($instance['vimeo']) : '';
        $dribbble    = isset($instance['dribbble']) ? strip_tags($instance['dribbble']) : '';
        $behance     = isset($instance['behance']) ? strip_tags($instance['behance']) : '';
        $flickr      = isset($instance['flickr']) ? strip_tags($instance['flickr']) : '';
        $tumblr      = isset($instance['title']) ? strip_tags($instance['tumblr']) : '';
        $pinterest   = isset($instance['tumblr']) ? strip_tags($instance['pinterest']) : '';
        $linkedin    = isset($instance['linkedin']) ? strip_tags($instance['linkedin']) : '';
        $instagram   = isset($instance['instagram']) ? strip_tags($instance['instagram']) : '';
        $github      = isset($instance['github']) ? strip_tags($instance['github']) : '';
        $dropbox     = isset($instance['dropbox']) ? strip_tags($instance['dropbox']) : '';
        $foursquare  = isset($instance['foursquare']) ? strip_tags($instance['foursquare']) : '';


        // widget admin form
        ?>
        <p class="widget-upload-wrap">

        <div class="widget_input">
            <button id="title_image_button" class="button" onclick="image_button_click('Choose Title Image', 'Select Image', 'image', 'title_image_preview_new', '<?php echo esc_attr($this->get_field_id('img_url')); ?>', this, event);">Select Image</button>			
        </div>

        <div class="title_image_preview_new" id="title_image_preview_new" name="title_image_preview" >
            <?php
            if ($img_url != '') {
                echo '<img src="' . esc_url($img_url) . '" style="width:100%;margin-top:15px">';
            }
            ?>
        </div>

        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('img_url')); ?>"><?php _e('Image url:', 'alenastudio') ?></label>
            <input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id('img_url')); ?>" name="<?php echo esc_attr($this->get_field_name('img_url')); ?>" value="<?php echo esc_attr($img_url); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php _e('Title:', 'alenastudio') ?></label>
            <input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($title); ?>">
        </p>


        <p>
            <label for="<?php echo esc_attr($this->get_field_id('img_title')); ?>"><?php _e('Image title:', 'alenastudio') ?></label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id('img_title') ?>" name="<?php echo esc_attr($this->get_field_name('img_title')); ?>" value="<?php echo esc_attr($img_title); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('link_to_web')); ?>"><?php _e('Link to website:', 'alenastudio') ?></label>
            <input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id('link_to_web')); ?>" name="<?php echo esc_attr($this->get_field_name('link_to_web')); ?>" value="<?php echo esc_attr($link_to_web); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('decription')); ?>"><?php _e('Decription:', 'alenastudio') ?></label>
            <input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id('decription')); ?>" name="<?php echo esc_attr($this->get_field_name('decription')); ?>" value="<?php echo esc_attr($decription); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('twitter')); ?>"><?php _e('Twitter URL:', 'alenastudio'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('twitter')); ?>" name="<?php echo esc_attr($this->get_field_name('twitter')); ?>" type="text" value="<?php echo esc_attr($twitter); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('facebook')); ?>"><?php _e('Facebook URL:', 'alenastudio'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('facebook')); ?>" name="<?php echo esc_attr($this->get_field_name('facebook')); ?>" type="text" value="<?php echo esc_attr($facebook); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('google_plus')); ?>"><?php _e('Google Plus URL:', 'alenastudio'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('google_plus')); ?>" name="<?php echo esc_attr($this->get_field_name('google_plus')); ?>" type="text" value="<?php echo esc_attr($google_plus); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('youtube')); ?>"><?php _e('Youtube URL:', 'alenastudio'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('youtube')); ?>" name="<?php echo esc_attr($this->get_field_name('youtube')); ?>" type="text" value="<?php echo esc_attr($youtube); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('vimeo')); ?>"><?php _e('Vimeo URL:', 'alenastudio'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('vimeo')); ?>" name="<?php echo esc_attr($this->get_field_name('vimeo')); ?>" type="text" value="<?php echo esc_attr($vimeo); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('dribbble')); ?>"><?php _e('Dribbble URL:', 'alenastudio'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('dribbble')); ?>" name="<?php echo esc_attr($this->get_field_name('dribbble')); ?>" type="text" value="<?php echo esc_attr($dribbble); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('behance')); ?>"><?php _e('Behance URL:', 'alenastudio'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('behance')); ?>" name="<?php echo esc_attr($this->get_field_name('behance')); ?>" type="text" value="<?php echo esc_attr($behance); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('flickr')); ?>"><?php _e('Flickr URL:', 'alenastudio'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('flickr')); ?>" name="<?php echo esc_attr($this->get_field_name('flickr')); ?>" type="text" value="<?php echo esc_attr($flickr); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('tumblr')); ?>"><?php _e('Tumblr URL:', 'alenastudio'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('tumblr')); ?>" name="<?php echo esc_attr($this->get_field_name('tumblr')); ?>" type="text" value="<?php echo esc_attr($tumblr); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('pinterest')); ?>"><?php _e('Pinterest URL:', 'alenastudio'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('pinterest')); ?>" name="<?php echo esc_attr($this->get_field_name('pinterest')); ?>" type="text" value="<?php echo esc_attr($pinterest); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('linkedin')); ?>"><?php _e('Linkedin URL:', 'alenastudio'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkedin')); ?>" name="<?php echo esc_attr($this->get_field_name('linkedin')); ?>" type="text" value="<?php echo esc_attr($linkedin); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('instagram')); ?>"><?php _e('Instagram URL:', 'alenastudio'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('instagram')); ?>" name="<?php echo esc_attr($this->get_field_name('instagram')); ?>" type="text" value="<?php echo esc_attr($instagram); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('github')); ?>"><?php _e('Github URL:', 'alenastudio'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('github')); ?>" name="<?php echo esc_attr($this->get_field_name('github')); ?>" type="text" value="<?php echo esc_attr($github); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('dropbox')); ?>"><?php _e('Dropbox URL:', 'alenastudio'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('dropbox')); ?>" name="<?php echo esc_attr($this->get_field_name('dropbox')); ?>" type="text" value="<?php echo esc_attr($dropbox); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('foursquare')); ?>"><?php _e('Foursquare URL:', 'alenastudio'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('foursquare')); ?>" name="<?php echo esc_attr($this->get_field_name('foursquare')); ?>" type="text" value="<?php echo esc_attr($foursquare); ?>" />
        </p>
        <?php
    }

    /**
     * 4. Save All Infomation
     */
    public function update($new_instance, $old_instance) {
        $instance                = array();
        $instance['title']       = strip_tags($new_instance['title']);
        $instance['img_url']     = strip_tags($new_instance['img_url']);
        $instance['img_title']   = strip_tags($new_instance['img_title']);
        $instance['link_to_web'] = strip_tags($new_instance['link_to_web']);
        $instance['decription']  = strip_tags($new_instance['decription']);
        $instance['title']       = strip_tags($new_instance['title']);
        $instance['twitter']     = strip_tags($new_instance['twitter']);
        $instance['facebook']    = strip_tags($new_instance['facebook']);
        $instance['google_plus'] = strip_tags($new_instance['google_plus']);
        $instance['youtube']     = strip_tags($new_instance['youtube']);
        $instance['vimeo']       = strip_tags($new_instance['vimeo']);
        $instance['dribbble']    = strip_tags($new_instance['dribbble']);
        $instance['behance']     = strip_tags($new_instance['behance']);
        $instance['flickr']      = strip_tags($new_instance['flickr']);
        $instance['tumblr']      = strip_tags($new_instance['tumblr']);
        $instance['pinterest']   = strip_tags($new_instance['pinterest']);
        $instance['linkedin']    = strip_tags($new_instance['linkedin']);
        $instance['instagram']   = strip_tags($new_instance['instagram']);
        $instance['github']      = strip_tags($new_instance['github']);
        $instance['dropbox']     = strip_tags($new_instance['dropbox']);
        $instance['foursquare']  = strip_tags($new_instance['foursquare']);
        return $instance;
    }

}
