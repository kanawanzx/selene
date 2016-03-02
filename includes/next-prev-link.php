<?php

if (!function_exists('as_next_prev')) {

    function as_next_prev($post, $next_prev, $icon) {

        if (isset($post) && !empty($post)) {
            $as_output             = '';
            $as_post_thumbnail_url = '';
            if (has_post_thumbnail()) {
                $as_post_thumbnail     = get_post_thumbnail_id($post->ID, '');
                $as_post_thumbnail_url = wp_get_attachment_url($as_post_thumbnail);
            }
            if (is_object($post)) {
                $as_output .= '<a class="as-post-nav-' . $next_prev . '" href="' . get_permalink($post) . '" style="background-image:url(' . $as_post_thumbnail_url . ');">';
                $as_output .= '<div class="as-mark-image"></div>';
                $as_output .= '<div class="as-content-prev-next-post"><span class="as-icon-link-post"><span class="dslc-icon dslc-icon-' . $icon . '"></span></span>';

                $as_output .= '<div class="as-future-title">';
                $as_output .= '<h6>' . get_the_title($post) . '</h6>';
                $as_output .= '<span class="as-date"><span class="dslc-icon dslc-icon-time"></span>&nbsp' . get_the_date(get_option('date_format'), $post->ID) . '</span>';
                $as_output .= '</div></div>';

                $as_output .= '</a>';
            }

            return $as_output;
        }
    }

}
?>