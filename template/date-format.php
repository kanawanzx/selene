<?php
/**
 * Monalisa the content.
 *
 * Sets up the content.
 *
 * @package WordPress
 * @subpackage Monalisa
 * @since Monalisa 1.0
 */
?>
<div class="as-date-format-wrapper">
    <span class="as-post-date">
        <span class="as-post-date-days"><?php the_time('d'); ?></span>
        <span class="as-post-date-month"><?php the_time('M'); ?></span>
    </span>
    <span class="as-icon-format-post">
        <?php
        $format    = get_post_format();
        $icon_name = '';
        if ($format == '') {
            $icon_name = 'as-note';
        }
        elseif ($format == 'image') {
            $icon_name = 'as-camera';
        }
        elseif ($format == 'gallery') {
            $icon_name = 'as-photo';
        }
        elseif ($format == 'video') {
            $icon_name = 'as-video';
        }
        elseif ($format == 'quote') {
            $icon_name = 'as-bubble';
        }
        elseif ($format == 'link') {
            $icon_name = 'as-clip';
        }
        elseif ($format == 'audio') {
            $icon_name = 'as-sound';
        }
        ?>
        <span class=" dslc-icon dslc-icon-<?php echo esc_attr($icon_name); ?>"></span>
    </span>
</div>