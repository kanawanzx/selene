<?php
/**
 * Monalisa the format content post for index.
 *
 * Sets up the content.
 *
 * @package WordPress
 * @subpackage Monalisa
 * @since Monalisa 1.0
 */
//global $meta_boxes;
?>
<?php
$control = ( rwmb_meta('as_custom_page_metaboxes', 'type=select'));
if ($control == "youtube") {
    echo '<div class="flex-video">' . ( wp_oembed_get(rwmb_meta('as_youtube_link'))) . '</div>';
}
elseif ($control == "html5") {
    $img       = wp_get_attachment_url(rwmb_meta('as_view_img'));
    $mp4_file  = wp_get_attachment_url(rwmb_meta('as_html5_video_file_mp4'));
    $webm_file = wp_get_attachment_url(rwmb_meta('as_html5_video_file_webm'));
    $ogv_file  = wp_get_attachment_url(rwmb_meta('as_html5_video_file_ogv'));
    $loop      = rwmb_meta('as_html5_media_loop') . " ";
    $autoplay  = rwmb_meta('as_html5_media_autoplay');
    ?>
    <!-- Video -->
    <div class="wrapper">
        <video width="100%" height="100%" style="width: 100%; height: 100%;" id="player1" controls <?php
               echo esc_attr($loop, 'alenastudio');
               echo esc_attr($autoplay, 'alenastudio');
               ?> poster="<?php echo esc_url($img, 'alenastudio'); ?>">
            <source src="<?php echo esc_url($mp4_file, 'alenastudio'); ?>" type="video/mp4" title="mp4">
            <source src="<?php echo esc_url($webm_file, 'alenastudio'); ?>" type="video/webm" title="webm">
            <source src="<?php echo esc_url($ogv_file, 'alenastudio'); ?>" type="video/ogg" title="ogg">
        </video>
    </div>
    <!-- Video / End -->
    <?php
}
else {
    esc_html_e('please choose the video format', 'alenastudio');
};
?>

