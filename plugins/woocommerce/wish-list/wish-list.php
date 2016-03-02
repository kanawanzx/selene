<?php

define("WISHLIST_WOO_PLUGIN_URL", WOO_PLUGIN_URL . "/wish-list");
define("WISHLIST_COOKIE_NAME", "as_wishlist_products");
/* ----------------------------------------------------------------------------------- */
/* Ajax   */
/* ----------------------------------------------------------------------------------- */
add_ajax("as_add_wish_list", "as_ajax_add_wish_list_product");
add_ajax("as_remove_wish_list", "as_ajax_remove_wish_list_product");
/* ----------------------------------------------------------------------------------- */
/* Filters   */
/* ----------------------------------------------------------------------------------- */

/* ----------------------------------------------------------------------------------- */
/* Actions   */
/* ----------------------------------------------------------------------------------- */
add_action('wp_enqueue_scripts', 'as_wishlist_scripts');
add_action('woocommerce_after_add_to_cart_button', 'as_wish_list_after_add_to_cart_button');
/* ----------------------------------------------------------------------------------- */
/* ShortCodes   */
/* ----------------------------------------------------------------------------------- */
add_shortcode('as_wish_list', 'as_shortcode_page_wish_list');

function as_wishlist_scripts() {
    add_script('wishlist', WISHLIST_WOO_PLUGIN_URL . '/js/wish-list.js', array(
        'jquery'));
}

function as_shortcode_page_wish_list() {
    include_once dirname(__FILE__) . '/template/wish-list-page.php';
}

function as_ajax_add_wish_list_product() {
    $product_id = $_REQUEST["product_id"];
    $response   = array(
        "status"  => 0,
        "message" => "something error"
    );
    if (!empty($product_id) && is_numeric($product_id)) {
        $product = wc_get_product($product_id);
        if (!empty($product)) {
            $wishlist_product = as_get_product_wish_list();
            if (isset($wishlist_product[$product_id])) {
                $response["message"] = '<div class="as-tooltip-wishlist-compare">' . __("It's available,", 'alenastudio') . ' <a target="_blank" href="' . get_page_link(get_option("as-wishlist-page-id")) . '">' . __("Go to Wishlist", 'alenastudio') . '</a>' . '</div>';
            }
            else {
                $data_product = array(
                    "id"    => $product_id,
                    "name"  => $product->get_title(),
                    "price" => $product->get_price(),
                    "image" => $product->get_image()
                );
                as_save_product_wish_list($data_product);
                $response     = array(
                    "status"  => 1,
                    "message" => "Success",
                    "notice"  => '<div class="as-tooltip-wishlist-compare">' . __("It's available,", 'alenastudio') . ' <a target="_blank" href="' . get_page_link(get_option("as-wishlist-page-id")) . '">' . __("Go to Wishlist", 'alenastudio') . '</a>' . '</div>'
                );
            }
        }
        else {
            $response["message"] = __("Product does not existed", 'alenastudio');
        }
    }
    else {
        $response["message"] = __("Product does not true", 'alenastudio');
    }
    wp_send_json($response);
}

function as_ajax_remove_wish_list_product() {
    $product_id = $_REQUEST["product_id"];
    $response   = array(
        "status"  => 0,
        "message" => "something error"
    );
    if (!empty($product_id) && is_numeric($product_id)) {
        $wishlist = as_remove_product_wish_list($product_id);
        $response = array(
            "status"  => 1,
            "message" => "Success"
        );
        if (empty($wishlist)) {
            $response = array(
                "status"  => 2,
                "message" => '<tr><td colspan="5"><span>' . esc_attr("No Products in wishlist", 'alenastudio') . '</span></td></tr>'
            );
        }
    }
    else {
        $response["message"] = __("Product does not true", 'alenastudio');
    }
    wp_send_json($response);
}

function as_save_product_wish_list($product) {
    $data_product                 = as_get_product_wish_list();
    $data_product[$product["id"]] = $product;
    as_add_cookie(WISHLIST_COOKIE_NAME, $data_product);
}

function as_remove_product_wish_list($product_id) {
    $data_product = as_get_product_wish_list();
    if (isset($data_product[$product_id])) {
        unset($data_product[$product_id]);
    }
    as_add_cookie(WISHLIST_COOKIE_NAME, $data_product);
    return $data_product;
}

function as_get_product_wish_list() {
    return as_get_cookie(WISHLIST_COOKIE_NAME);
}

function as_wish_list_after_add_to_cart_button() {
    global $product;
    $data_product = as_get_product_wish_list();
    if (isset($data_product[$product->id])) {
        echo '<div class="wish-list-notice">
        		<div class="as-tooltip-wishlist-compare">' . esc_html__("It's available,", 'alenastudio') . '<a target="_blank" href="' . get_page_link(get_option("as-wishlist-page-id")) . '">' . esc_html__("Go to Wishlist!", 'alenastudio') . '</a></div>
        		<a data-product-id = "' . $product->id . '" class="button as_button product_show_detail_button as_wishlist_btn" href="javascript:;"><span class="dslc-icon dslc-icon-heart-empty"></span></a>
        	</div>';
    }
    else {
        echo '<div class="wish-list-notice"><a data-product-id = "' . $product->id . '" class="button as_button product_show_detail_button as_wishlist_btn" href="javascript:;"><span class="dslc-icon dslc-icon-heart-empty"></span></a></div>';
    }
}
