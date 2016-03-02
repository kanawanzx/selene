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

$control = ( rwmb_meta('as_custom_page_metaboxes', 'type=select'));
if ($control == "audio_track") {
    $track = wp_get_attachment_url(rwmb_meta('as_html5_audio_file_mp3'));
    ?>
    <div>
        <!-- audio -->
        <audio width="640" height="360" style="width: 100%; height: 100%;" id="player1">
            <source src="<?php echo esc_url($track, 'alenastudio'); ?>" type="audio/mp3" title="mp3">
        </audio>    

        <?php
    }
    else {
        esc_html_e('please choose the audio format', 'alenastudio');
    };
    ?>
</div>