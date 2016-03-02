<?php

$prefix = 'as_';

global $meta_boxes;

$meta_boxes      = array();
$bool_options    = array(
    'true'  => __('ON', 'alenastudio'),
    'false' => __('OFF', 'alenastudio'));
$bool_wd_options = array(
    '0'     => __('Theme Default', 'alenastudio'),
    'true'  => __('ON', 'alenastudio'),
    'false' => __('OFF', 'alenastudio'));

$nav_menus     = get_terms('nav_menu');
$nav_menu_data = array(
    '0' => __('Theme Default', 'alenastudio'));
if ($nav_menus) {
    foreach ($nav_menus as
            $nav_menu) {
        $nav_menu_data[$nav_menu->slug] = $nav_menu->name;
    }
}
/* ========================
  =     MEDIA SETTINGS     =
  ======================== */
$meta_boxes[] = array(
    'id'       => 'media',
    'title'    => 'Setting Format for Link',
    'pages'    => array( 'post', 'dslc_projects'),
    'context'  => 'normal',
    'priority' => 'high',
    'fields'   => array(
        array(
            'type' => 'heading',
            'name' => __('Post format link', 'alenastudio'),
            'id'   => 'h_oembed',
        ),
        array(
            'name' => __('Add your url link.', 'alenastudio'),
            'id'   => "{$prefix}url_link",
            'desc' => __('Insert your href url link. Ex: https://www.youtube.com/watch?v=tZuj_beuMc4', 'alenastudio'),
            'type' => 'text'
        ),
        array(
            'name' => __('Add text for link.', 'alenastudio'),
            'id'   => "{$prefix}text_link",
            'desc' => __('Insert your text for url link. Ex: Click here ! ', 'alenastudio'),
            'type' => 'text'
        ),
    )
);

/* ========================
  =     IMAGE STAFF SETTINGS     =
  ======================== */
/*
$meta_boxes[] = array(
    'id'       => 'media',
    'title'    => 'Background Image',
    'pages'    => array('dslc_staff'),[w
    'context'  => 'normal',
    'priority' => 'high',
    'fields'   => array(
        array(
            'name'             => __('Setup Background Image for Style Staff 2', 'alenastudio'),
            'id'               => "{$prefix}background_img_staff",
            'type'             => 'image_advanced',
            'max_file_uploads' => 1,
            'mime_type'        => 'image',
            'max'              => 1,
        ),
    )
);
*/

/* ======================
  =     VIDEO control    =
  ====================== */
$meta_boxes[] = array(
    'id'       => 'video_control',
    'title'    => 'Video Control',
    'pages'    => array('post', 'dslc_projects'),
    'context'  => 'normal',
    'priority' => 'high',
    'fields'   => array(
        array(
            'name'    => __('Enable Custom Options', 'alenastudio'),
            'desc'    => __('<br> -Please check requested sections and publish/update page. <br> -Metaboxes will be added bottom of the content editor for requested options.', 'alenastudio'),
            'id'      => "{$prefix}custom_page_metaboxes",
            'type'    => 'select',
            'options' => array(
                'none'        => __('none', 'alenastudio'),
                'youtube'     => __('Add your link : Youtube, Vimeo, Soundcloud ... ', 'alenastudio'),
                'html5'       => __('HTML5 Video', 'alenastudio'),
                'audio_track' => __('AUDIO', 'alenastudio'),
            ),
        ),
    )
);


/* =============================
  =            YOUTUBE          =
  ============================= */
$meta_boxes[] = array(
    'id'       => 'youtube',
    'title'    => 'Media Settings',
    'pages'    => array( 'post', 'dslc_projects'),
    'context'  => 'normal',
    'priority' => 'high',
    'fields'   => array(
        array(
            'type' => 'heading',
            'name' => __('oEmbed', 'alenastudio'),
            'id'   => 'as_link_oembed',
        ),
        array(
            'name' => __('Add your link video & click "Preview" button for check.', 'alenastudio'),
            'id'   => "{$prefix}youtube_link",
            'desc' => __('Insert your media link. Ex: https://www.youtube.com/watch?v=tZuj_beuMc4 <br>
			<a href="https://codex.wordpress.org/Embeds#Okay.2C_So_What_Sites_Can_I_Embed_From.3F" target="_blank">Click here</a> for supported websites. ', 'alenastudio'),
            'type' => 'oembed'
        ),
    ),
    'only_on'  => array(
        'is_activated' => true,
    ),
);
/* =============================
  =           HTML 5            =
  ============================= */
$meta_boxes[] = array(
    'id'       => 'html5',
    'title'    => 'HTML5 Link',
    'pages'    => array(
        'post'),
    'context'  => 'normal',
    'priority' => 'high',
    'fields'   => array(
        array(
            'type' => 'heading',
            'name' => __('oEmbed', 'alenastudio'),
            'id'   => 'h_oembed',
        ),
        array(
            'type' => 'heading',
            'name' => __('HTML5 Video', 'alenastudio') . ' <a href="http://www.w3schools.com/html/html5_video.asp" target="_blank">' . __('Why would I need all formats?', 'alenastudio') . '</a>',
            'id'   => 'h_html5',
        ),
        array(
            'name'             => __('PreView Image', 'alenastudio'),
            'id'               => "{$prefix}view_img",
            'type'             => 'image_advanced',
            'max_file_uploads' => 1,
            'mime_type'        => 'image',
            'max'              => 1,
        ),
        array(
            'name'             => __('MP4 Video File', 'alenastudio'),
            'id'               => "{$prefix}html5_video_file_mp4",
            'type'             => 'file_advanced',
            'max_file_uploads' => 1,
            'mime_type'        => 'video',
        ),
        array(
            'name'             => __('OGV/OGG Video File', 'alenastudio'),
            'id'               => "{$prefix}html5_video_file_ogv",
            'type'             => 'file_advanced',
            'max_file_uploads' => 1,
            'mime_type'        => 'video',
        ),
        array(
            'name'             => __('WEBM Video File', 'alenastudio'),
            'id'               => "{$prefix}html5_video_file_webm",
            'type'             => 'file_advanced',
            'max_file_uploads' => 1,
            'mime_type'        => 'video',
        ),
        array(
            'name'             => __('MP3 Audio File', 'alenastudio'),
            'id'               => "{$prefix}html5_audio_file_mp3",
            'type'             => 'file_advanced',
            'max_file_uploads' => 1,
            'mime_type'        => 'audio',
        ),
        array(
            'name'    => 'Loop',
            'desc'    => __('Allows for the looping of media.', 'alenastudio'),
            'id'      => "{$prefix}html5_media_loop",
            'type'    => 'radio',
            'std'     => 'off',
            'options' => array(
                'loop' => __('On', 'alenastudio'),
                'off'  => __('Off', 'alenastudio')),
        ),
        array(
            'name'    => 'Autoplay',
            'desc'    => __('Causes the media to automatically play as soon as the media file is ready.', 'alenastudio'),
            'id'      => "{$prefix}html5_media_autoplay",
            'type'    => 'radio',
            'std'     => 'off',
            'options' => array(
                'autoplay' => __('On', 'alenastudio'),
                'off'      => __('Off', 'alenastudio')),
        ),
    ),
    'only_on'  => array(
        'is_activated' => true,
    ),
);
/* =============================
  =            AUDIO          =
  ============================= */
$meta_boxes[] = array(
    'id'       => 'audio_track',
    'title'    => 'AUDIO',
    'pages'    => array(
        'post',
        'dslc_projects'),
    'context'  => 'normal',
    'priority' => 'high',
    'fields'   => array(
        array(
            'name'             => __('MP3 Audio File', 'alenastudio'),
            'id'               => "{$prefix}html5_audio_file_mp3",
            'type'             => 'file_advanced',
            'max_file_uploads' => 1,
            'mime_type'        => 'audio',
        ),
    ),
    'only_on'  => array(
        'is_activated' => true,
    ),
);
/* ======================
  =     PAGE OPTIONS     =
  ====================== */
$meta_boxes[] = array(
    'id'       => 'page_options',
    'title'    => 'Page Options',
    'pages'    => array(
        'page'),
    'context'  => 'normal',
    'priority' => 'high',
    'fields'   => array(
        array(
            'name'    => __('Enable Custom Options', 'alenastudio'),
            'desc'    => __('<br> -Please check requested sections and publish/update page. <br> -Metaboxes will be added bottom of the content editor for requested options.', 'alenastudio'),
            'id'      => "{$prefix}custom_page_metaboxes",
            'type'    => 'checkbox_list',
            'options' => array(
                'page_header_options'     => __('Header', 'alenastudio'),
                'page_breadcrumb_options' => __('Breadcrumb', 'alenastudio'),
                'page_footer_options'     => __('Footer', 'alenastudio'),
            ),
        ),
    )
);


/* ======================
  =    BLOG SIDEBAR    =
  ====================== */
$meta_boxes[] = array(
    'id'       => 'as_sidebar_option',
    'title'    => 'Blog Sidebar Option',
    'pages'    => array(
        'page'),
    'context'  => 'normal',
    'priority' => 'high',
    'fields'   => array(
        array(
            'name'    => __('Enable Custom Options', 'alenastudio'),
            'desc'    => __('<br> -This option only action on Blog Page .', 'alenastudio'),
            'id'      => "as_blog_option",
            'type'    => 'select',
            'options' => array(
                'default' => __('Default, Follow Theme Option', 'alenastudio'),
                'left'    => __('Left Sidebar', 'alenastudio'),
                'right'   => __('Right Sidebar', 'alenastudio'),
                'full'    => __('None Sidebar', 'alenastudio'),
            ),
        ),
    ),
    'only_on'  => array(
        'template' => array(
            'page-blog.php')
    ),
);


/* =============================
  =     PAGE BOXED OPTION     =
  ============================= */
$meta_boxes[] = array(
    'id'       => 'page_boxed_option',
    'title'    => 'Page Style',
    'pages'    => array(
        'page'),
    'context'  => 'normal',
    'priority' => 'high',
    'fields'   => array(
        array(
            'type' => 'heading',
            'name' => __('Choice Boxed or Full page', 'alenastudio'),
            'id'   => 'h_boxed_op_note',
        ),
        array(
            'name'    => __('Full/Boxed Page', 'alenastudio'),
            'id'      => 'as_boxed_choice',
            'type'    => 'radio',
            'std'     => '0',
            'options' => array(
                0 => "Theme Default",
                1 => "Boxed",
                2 => "Full",
            ),
        ),
        array(
            'name' => __('Select width page', 'alenastudio'),
            'id'   => 'as_boxed_choice_width',
            'type' => 'slider',
            'std'  => '1170',
            'js_options' => array(
                'min'   => 1170,
                'max'   => 1700,
            ),
        ),
    ),
);
/* =============================
  =     PAGE HEADER OPTIONS     =
  ============================= */
$meta_boxes[] = array(
    'id'       => 'page_header_options',
    'title'    => 'Header Options',
    'pages'    => array(
        'page'),
    'context'  => 'normal',
    'priority' => 'high',
    'fields'   => array(
        array(
            'type' => 'heading',
            'name' => __('*Empty or "Theme Default" values will use Theme Options values', 'alenastudio'),
            'id'   => 'h_header_op_note',
        ),
        array(
            'name'    => __('Header Menu', 'alenastudio'),
            'id'      => 'as_header_box',
            'type'    => 'select',
            'std'     => '0',
            'options' => array(
                0 => "Theme Default",
                1 => "Header 1",
                2 => "Header 2",
				3 => "Header 3",
//                4 => "Header 4",
//                5 => "Header 5",
            ),
        ),
    ),
    'only_on'  => array(
        'is_activated' => true,
    ),
);
/* =============================
  =     PAGE FOOTER OPTIONS     =
  ============================= */
$meta_boxes[] = array(
    'id'       => 'page_footer_options',
    'title'    => 'Footer Options',
    'pages'    => array(
        'page'),
    'context'  => 'normal',
    'priority' => 'high',
    'fields'   => array(
        array(
            'type' => 'heading',
            'name' => __('*Empty or "Theme Default" values will use Theme Options values', 'alenastudio'),
            'id'   => 'h_footer_op_note',
        ),
        array(
            'name'    => __('Footer Menu', 'alenastudio'),
            'id'      => "as_footer_menu",
            'type'    => 'select',
            'std'     => '0',
            'options' => array(
                0 => "Theme Default",
                1 => "Footer 1",
                2 => "Footer 2",
                2 => "Footer 3"
            ),
        ),
    ),
    'only_on'  => array(
        'is_activated' => true,
    ),
);

/* ====================================
  =     PAGE BREADCRUMB OPTIONS     =
  ==================================== */
$meta_boxes[] = array(
    'id'       => 'page_breadcrumb_options',
    'title'    => 'Breadcrumb Options',
    'pages'    => array(
        'page'),
    'context'  => 'normal',
    'priority' => 'high',
    'fields'   => array(
        array(
            'type' => 'heading',
            'name' => __('Show or hide breadcrumb', 'alenastudio'),
            'id'   => 'h_breadcrump_op_note',
        ),
        array(
            'name'    => __('Breadcrumb', 'alenastudio'),
            'id'      => "as_breadcrumb_menu",
            'type'    => 'select',
            'std'     => '1',
            'options' => array(
                1 => "On",
                2 => "Off",
                3 => "Breadcrumb None Sub-Link",
            ),
        ),
    ),
    'only_on'  => array(
        'is_activated' => true,
    ),
);
/* ==============================
  =     META BOX REGISTERING     =
  ============================== */

function as_register_meta_boxes() {
    global $meta_boxes, $is_activated;

    if (class_exists('RW_Meta_Box')) {
        foreach ($meta_boxes as
                $meta_box) {

            if (isset($meta_box['only_on']) AND ! rw_maybe_include($meta_box['only_on'], $meta_box['id'])) {
                continue;
            }

            new RW_Meta_Box($meta_box);
        }
    }
}

add_action('admin_init', 'as_register_meta_boxes');

/**
 * Check if meta boxes is included
 *
 * @return bool
 */
function rw_maybe_include($conditions, $metabox_id) {

    // Include in back-end only
    if (!defined('WP_ADMIN') || !WP_ADMIN) {
        return false;
    }

    // Always include for ajax
    if (defined('DOING_AJAX') && DOING_AJAX) {
        return true;
    }

    if (isset($_GET['post'])) {
        $post_id = intval($_GET['post']);
    }
    elseif (isset($_POST['post_ID'])) {
        $post_id = intval($_POST['post_ID']);
    }
    else {
        $post_id = false;
    }

    $post_id = (int) $post_id;
    $post    = get_post($post_id);

    foreach ($conditions as
            $cond =>
            $v) {
        // Catch non-arrays too
        if (!is_array($v)) {
            $v = array(
                $v);
        }

        switch ($cond) {
            case 'id':
                if (in_array($post_id, $v)) {
                    return true;
                }
                break;
            case 'parent':
                $post_parent = $post->post_parent;
                if (in_array($post_parent, $v)) {
                    return true;
                }
                break;
            case 'slug':
                $post_slug = $post->post_name;
                if (in_array($post_slug, $v)) {
                    return true;
                }
                break;
            case 'category': //post must be saved or published first
                $categories = get_the_category($post->ID);
                $catslugs   = array();
                foreach ($categories as
                        $category) {
                    array_push($catslugs, $category->slug);
                }
                if (array_intersect($catslugs, $v)) {
                    return true;
                }
                break;
            case 'template':
                $template = get_post_meta($post_id, '_wp_page_template', true);
                if (in_array($template, $v)) {
                    return true;
                }
                break;
            case 'is_activated':
                $active_list = get_post_meta($post_id, 'as_custom_page_metaboxes');
                if ($post_id !== false AND is_array($active_list) AND is_int(array_search($metabox_id, $active_list))) {
                    return true;
                }
                break;
        }
    }

    // If no condition matched
    return false;
}

function rwmb_css_overwrite() {
    ?>
    <style>
        .rwmb-field {
            /*border-bottom: 1px solid #eeeeee;*/
            padding-bottom: 10px;
        }
        .rwmb-field:last-child {
            border-bottom: 0;
            padding-bottom: 0;
        }
        .rwmb-input label {
            margin-right: 5px;
        }
    </style>
    <?php

}

add_action('admin_head', 'rwmb_css_overwrite');
