<?php
/**
 * Single Product Thumbnails
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

global $post, $product, $woocommerce;

$attachment_ids = $product->get_gallery_attachment_ids();

if ($attachment_ids) {
    $loop               = 0;
    $columns            = apply_filters('woocommerce_product_thumbnails_columns', 3);
    ?>
    <div class="thumbnails <?php echo 'columns-' . $columns; ?>">
        <div id="as_main_slider_thumbnail_image" class="owl-carousel">
            <?php
            $show_feature_image = false;
            if (has_post_thumbnail() && !$show_feature_image) {
                $post_thumbnail_id  = get_post_thumbnail_id();
                $classes            = array();
                $classes[]          = 'first';
                $image_class        = esc_attr(implode(' ', $classes));
                $image_title        = esc_attr(get_the_title($post_thumbnail_id));
                $image_caption      = get_post($post_thumbnail_id)->post_excerpt;
                $image_link         = wp_get_attachment_url($post_thumbnail_id);
                $image              = get_the_post_thumbnail($post->ID, apply_filters('single_product_large_thumbnail_size', 'shop_single'), array(
                    'title' => $image_title,
                    'alt'   => $image_title
                ));
                echo apply_filters('woocommerce_single_product_image_thumbnail_html', sprintf('<div class="item"><a href="javascript:;" class="%s" title="%s"">%s</a></div>', $image_class, $image_title, $image), $post_thumbnail_id, $post->ID, $image_class);
                $show_feature_image = true;
            }
            foreach ($attachment_ids as
                    $attachment_id) {

                $classes = array();

                if (!$show_feature_image && ($loop == 0 || $loop % $columns == 0)) {
                    $classes[] = 'first';
                }
                if (( $loop + 1 ) % $columns == 0) {
                    $classes[] = 'last';
                }

                $image_link = wp_get_attachment_url($attachment_id);

                if (!$image_link) {
                    continue;
                }

                $image       = wp_get_attachment_image($attachment_id, apply_filters('single_product_small_thumbnail_size', 'shop_thumbnail'));
                $image_class = esc_attr(implode(' ', $classes));
                $image_title = esc_attr(get_the_title($attachment_id));

                echo apply_filters('woocommerce_single_product_image_thumbnail_html', sprintf('<div class="item"><a href="javascript:;" class="%s" title="%s">%s</a></div>', $image_class, $image_title, $image), $attachment_id, $post->ID, $image_class);

                $loop++;
            }
            ?>
        </div>
    </div>
    <?php
}
