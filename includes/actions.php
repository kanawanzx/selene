<?php
global $allowed_html_array;
$allowed_html_array = array(
    //formatting
    'strong' => array(),
    'em'     => array(),
    'b'      => array(),
    'i'      => array(),
    'br'     => array(),
    //links
    'a'      => array(
        'href' => array()
    )
);
if (!isset($content_width)) {
    $content_width = 1170;
}
/* ----------------------------------------------------------------------------------- */
/* 	Init Actions */
/* ----------------------------------------------------------------------------------- */
add_action('wp_enqueue_scripts', 'as_on_add_scripts');
add_action('wp_print_styles', 'as_on_add_styles');
add_action('init', 'as_theme_init');
add_action('widgets_init', 'as_widgets_init');
add_action('wp_footer', 'as_scripts_in_footer', 100);
add_action('after_setup_theme', 'as_action_init_wish_list');
add_action('after_setup_theme', 'as_action_init_compare');
/* ----------------------------------------------------------------------------------- */
/* 	Init Functions */
/* ----------------------------------------------------------------------------------- */

function as_on_add_scripts() {
    // enqueue backbonejs, underscore
    add_existed_script('backbone');
    add_existed_script('underscore');
    if (as_option('as_option_smooth_scroll', '1')) {
        // Smoothscroll JS
        add_script('smoothscroll', TEMPLATEURL . '/js/smoothscroll.js', array(
            'jquery'));
    }
    // Modernize JS
    add_script('modernizr', TEMPLATEURL . '/js/libs/modernizr.custom.js', array(
        'jquery'));
    if (as_option('as_option_retina_img', '1')) {
        add_script('retina', TEMPLATEURL . '/js/libs/retina.min.js', array(
            'jquery'));
    }
    add_script('front', TEMPLATEURL . '/js/front.js', array(
        'jquery',
        'backbone',
        'underscore'));
    add_script('js-appear', TEMPLATEURL . '/js/libs/main.js', array(
        'jquery',
        'jquery'));
    //add js easing when plugin not active
    if (!(function_exists('dslc_register_modules'))) {
        //add js easing
        add_script('js-easing', TEMPLATEURL . '/js/libs/jquery.easing.js', array(
            'jquery',
            'jquery'));
    }
    wp_localize_script('front', 'as_globals', array(
        'ajaxURL' => admin_url('admin-ajax.php'),
        'imgURL'  => get_template_directory_uri() . '/img/'
    ));
    // Custom
    add_script('main', TEMPLATEURL . '/js/main.js', array(
        'jquery'));
    // add style demo
    if (file_exists(TEMPLATE_DIR . '/demo/js/custom_panel.js')) {
        add_script('custom_panel', TEMPLATEURL . '/demo/js/custom_panel.js', array(
            'jquery'));
    }
}

function as_on_add_styles() {
    if (!(function_exists('dslc_register_modules'))) {
        add_style('as-font-awesome', TEMPLATEURL . '/css/font-awesome.min.css', array(), '1.0', 'all');
        // AS Icon Font
        add_style('as-icon-font', TEMPLATEURL . '/css/as-icon-font.css', array(), '1.0', 'all');
        // Add temp style
        add_style('as-css-temp', TEMPLATEURL . '/css/temp-style-dslc.css', array(), '1.0', 'all');
    }

    // Dialog
    add_style('as-dialog', TEMPLATEURL . '/css/libs/dialog/dialog.css', array(), '1.0', 'all');
    add_style('as-dialog-wilma', TEMPLATEURL . '/css/libs/dialog/dialog-wilma.css', array(
        'as-dialog'), '1.0', 'all');
    // Style.css
    add_style('as-style', get_stylesheet_uri());
    // Responsive Style
    add_style('responsive-style', TEMPLATEURL . '/css/responsive-style.css', array(), '1.0', 'all');
    // Custom Style
    add_style('custom', TEMPLATEURL . '/css/custom-style.php', array(), '1.0', 'all');
    //video audio
    add_style('video', TEMPLATEURL . '/css/libs/html5/video.css', array(), '1.0', 'all');

    if (file_exists(TEMPLATE_DIR . '/demo/css/style_end.css')) {
        //style demo
        add_style('style_end', TEMPLATEURL . '/demo/css/style_end.css', array(), '1.0', 'all');
    }
}

function as_theme_init() {
    //Add tile
    add_theme_support("title-tag");
    // Auto feed
    add_theme_support('automatic-feed-links');
    // Woocommerce
    add_theme_support('woocommerce');
    // Add post formats
    add_theme_support('post-formats', array(
        'gallery',
        'image',
        'video',
        'quote',
        'link',
        'audio'));
    add_post_type_support('dslc_projects', 'post-formats');
    // Add featured images
    add_theme_support('post-thumbnails');
    // Add custom background
    add_theme_support('custom-background');
    // Add custom header
    add_theme_support('custom-header');
    /* === Register Menus === */
    register_nav_menu('as_header_menu', __('Theme Main Menu', 'alenastudio'));
    register_nav_menu('as_sub_menu', __('Theme Sub Menu', 'alenastudio'));
    register_nav_menu('as_sidebar_menu', __('Theme Sidebar Menu', 'alenastudio'));
    register_nav_menu('as_footer_menu', __('Theme Footer Menu', 'alenastudio'));
}

function register_widget_init() {
    register_widget('AS_Flickr_Widget');
    register_widget('AS_Contact_Info_Widget');
    register_widget('AS_Recent_Posts_Widget');
    register_widget('AS_Social_Info_Widget');
    register_widget('AS_Widget_Image');
    register_widget('AS_Subscribe');
    //register_widget('AS_Yahoo_Skype_status');
    register_widget('AS_Facebook_widget');
    register_widget('AS_introduce_widget');
}

function register_sidebar_init() {
    $array_sidebar = include_once dirname(__FILE__) . '/sidebars.php';
    if (!empty($array_sidebar)) {
        foreach ($array_sidebar as
                $sidebar) {
            register_sidebar($sidebar);
        }
    }
}

function as_widgets_init() {
    register_widget_init();
    register_sidebar_init();
}

function as_scripts_in_footer() {
    ?>
    <script type="text/javascript">
        (function ($, Views, Models, AS) {
            $(document).ready(function () {
                // init view front
                if (typeof Views.Front !== 'undefined') {
                    AS.App = new Views.Front();
                }
            });
        })(jQuery, AS.Views, AS.Models, window.AS);
        var root_ajax_url = '<?php echo admin_url("admin-ajax.php"); ?>';
    </script>
    <?php
}

function as_action_init_wish_list() {
    //Check wish list page
    global $wpdb;
    $page_found = $wpdb->get_var("SELECT `ID` FROM `{$wpdb->posts}` WHERE `post_name` = 'wishlist' LIMIT 1;");
    if ($page_found) {
        update_option('as-wishlist-page-id', $page_found);
        return;
    }

    $page_data = array(
        'post_status'    => 'publish',
        'post_type'      => 'page',
        'post_author'    => 1,
        'post_name'      => esc_sql(_x('wishlist', 'page_slug', 'as')),
        'post_title'     => __('Wishlist', 'as'),
        'post_content'   => '[as_wish_list]',
        'post_parent'    => 0,
        'comment_status' => 'closed'
    );
    $page_id   = wp_insert_post($page_data);
    update_option('as-wishlist-page-id', $page_id);
}

function as_action_init_compare() {
    //Check wish list page
    global $wpdb;
    $page_found = $wpdb->get_var("SELECT `ID` FROM `{$wpdb->posts}` WHERE `post_name` = 'compare' LIMIT 1;");
    if ($page_found) {
        update_option('as-compare-page-id', $page_found);
        return;
    }

    $page_data = array(
        'post_status'    => 'publish',
        'post_type'      => 'page',
        'post_author'    => 1,
        'post_name'      => esc_sql(_x('compare', 'page_slug', 'as')),
        'post_title'     => __('Compare', 'as'),
        'post_content'   => '[as_compare]',
        'post_parent'    => 0,
        'comment_status' => 'closed'
    );
    $page_id   = wp_insert_post($page_data);
    update_option('as-compare-page-id', $page_id);
}
