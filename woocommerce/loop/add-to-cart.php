<?php

/**
 * Loop Add to Cart
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

global $product;
echo '<div class="product_listing_buttons_wrapper">';

echo apply_filters('woocommerce_loop_add_to_cart_link', sprintf('<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" data-quantity="%s" class="button as_button %s product_type_%s"><span class="dslc-icon dslc-icon-shopping-cart"></span><span class="as-loading-woo-img"></span></a>', esc_url($product->add_to_cart_url()), esc_attr($product->id), esc_attr($product->get_sku()), esc_attr(isset($quantity) ? $quantity : 1 ), $product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '', esc_attr($product->product_type), esc_html($product->add_to_cart_text())
        ), $product);

//Show details button
// echo '<a class="button as_button product_show_detail_button" href="' . get_permalink() . '"><span class="dslc-icon dslc-icon-search"></span></a>';

echo '<a data-product-id="' . $product->id . '"  class="button as_button product_show_detail_button as_wishlist_btn" href="javascript:;"><span class="dslc-icon dslc-icon-heart-empty"></span></a>';
echo '<a data-product-id="' . $product->id . '"  class="button as_button product_show_detail_button as_compare_btn" href="javascript:;"><span class="dslc-icon dslc-icon-retweet"></span></a>';
echo '<a data-product-id="' . $product->id . '" data-ajax-url="' . admin_url("admin-ajax.php") . '" class="button as_button product_show_detail_button as_quickview_btn" href="javascript:;"><span class="dslc-icon dslc-icon-eye-open"></span></a>';

echo '<div class="clearfix"></div> </div>';
