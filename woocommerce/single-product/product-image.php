<?php
/**
 * Single Product Image
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.14
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

global $post, $woocommerce, $product;
$attachment_ids   = $product->get_gallery_attachment_ids();
$attachment_count = count($product->get_gallery_attachment_ids());

function show_gallery_image($attachment_ids) {
    global $post;
    $loop = 0;
    foreach ($attachment_ids as
            $attachment_id) {

        $image_title = esc_attr(get_the_title($attachment_id));
        $image_link  = wp_get_attachment_url($attachment_id);

        if (!$image_link) {
            continue;
        }

        $image = wp_get_attachment_image($attachment_id, apply_filters('single_product_large_thumbnail_size', 'shop_single'), array(
            'title' => $image_title,
            'alt'   => $image_title
        ));

        echo apply_filters('woocommerce_single_product_image_html', sprintf('<div class="item"><a href="javascript:;" class="woocommerce-main-image" title="%s">%s</a></div>', $image_title, $image), $post->ID);

        $loop++;
    }
}
?>
<div class="images">
    <div id="as_main_slider_feature_image" class="owl-carousel"> 
        <?php
        if (has_post_thumbnail()) {

            $image_title   = esc_attr(get_the_title(get_post_thumbnail_id()));
            $image_caption = get_post(get_post_thumbnail_id())->post_excerpt;
            $image_link    = wp_get_attachment_url(get_post_thumbnail_id());
            $image         = get_the_post_thumbnail($post->ID, apply_filters('single_product_large_thumbnail_size', 'shop_single'), array(
                'title' => $image_title,
                'alt'   => $image_title
            ));

            echo apply_filters('woocommerce_single_product_image_html', sprintf('<div class="item"><a href="javascript:;" class="woocommerce-main-image" title="%s">%s</a></div>', $image_caption, $image), $post->ID);
            show_gallery_image($attachment_ids);
        }
        else if ($attachment_count > 0) {
            show_gallery_image($attachment_ids);
        }
        else {

            echo apply_filters('woocommerce_single_product_image_html', sprintf('<div class="item"><img src="%s" alt="%s" /></div>', wc_placeholder_img_src(), __('Placeholder', 'woocommerce')), $post->ID);
        }
        ?>
    </div>
    <?php do_action('woocommerce_product_thumbnails'); ?>

</div>
<script>
    jQuery(document).ready(function () {

        var sync1 = jQuery("#as_main_slider_feature_image");
        var sync2 = jQuery("#as_main_slider_thumbnail_image");

        sync1.owlCarousel({
            singleItem: true,
            slideSpeed: 1000,
            navigation: false,
            pagination: false,
            afterAction: syncPosition,
            responsiveRefreshRate: 200,
            autoHeight: true,
        });

        sync2.owlCarousel({
            items: 4,
            pagination: false,
            responsiveRefreshRate: 100,
            afterInit: function (el) {
                el.find(".owl-item").eq(0).addClass("synced");
            }
        });

        function syncPosition(el) {
            var current = this.currentItem;
            //Destroy Zoom

            jQuery.removeData(sync1.find(".owl-item").find(".item").find("img"), 'elevateZoom');
            jQuery('.zoomContainer').remove();

            //Add New Zoom
            jQuery(sync1.find(".owl-item").eq(current).find(".item").find("img")).elevateZoom({
                zoomWindowFadeIn: 500,
                zoomWindowFadeOut: 500,
                lensFadeIn: 500,
                lensFadeOut: 500,
                easing: true,
                scrollZoom: true,
                gallery: 'as_main_slider_feature_image',
                galleryActiveClass: 'active'
            });

            sync2
                    .find(".owl-item")
                    .removeClass("synced")
                    .eq(current)
                    .addClass("synced");
            if (sync2.data("owlCarousel") !== undefined) {
                center(current);
            }

        }

        sync2.on("click", ".owl-item", function (e) {
            e.preventDefault();
            var number = jQuery(this).data("owlItem");
            sync1.trigger("owl.goTo", number);
        });

        function center(number) {
            var sync2visible = sync2.data("owlCarousel").owl.visibleItems;

            var num = number;
            var found = false;
            for (var i in sync2visible) {
                if (num === sync2visible[i]) {
                    var found = true;
                }
            }

            if (found === false) {
                if (num > sync2visible[sync2visible.length - 1]) {
                    sync2.trigger("owl.goTo", num - sync2visible.length + 2)
                } else {
                    if (num - 1 === -1) {
                        num = 0;
                    }
                    sync2.trigger("owl.goTo", num);
                }
            } else if (num === sync2visible[sync2visible.length - 1]) {
                sync2.trigger("owl.goTo", sync2visible[1])
            } else if (num === sync2visible[0]) {
                sync2.trigger("owl.goTo", num - 1)
            }
        }
    });
</script>