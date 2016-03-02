<?php

/**
 * Customer refunded order email (plain text)
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/plain/customer-refunded-order.php
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer)
 * will need to copy the new files to your theme to maintain compatibility. We try to do this
 * as little as possible, but it does happen. When this occurs the version of the template file will
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author   WooThemes
 * @package  WooCommerce/Templates/Emails/Plain
 * @version  2.4.0
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

echo "= " . $email_heading . " =\n\n";

echo sprintf(__("Hi there. Your order on %s has been refunded. Your order details are shown below for your reference:", 'woocommerce'), get_option('blogname')) . "\n\n";

echo "=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=\n\n";

do_action('woocommerce_email_before_order_table', $order, $sent_to_admin, $plain_text);

echo strtoupper(sprintf(__('Order number: %s', 'woocommerce'), $order->get_order_number())) . "\n";
echo date_i18n(__('jS F Y', 'woocommerce'), strtotime($order->order_date)) . "\n";

do_action('woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text);

echo "\n" . $order->email_order_items_table(true, false, true, '', '', true);

echo "==========\n\n";

if ($refund && $refund->get_refund_amount() > 0) {
    echo __('Amount Refunded', 'woocommerce') . "\t " . $refund->get_formatted_refund_amount() . "\n";
}

if ($totals = $order->get_order_item_totals()) {
    foreach ($totals as
            $total) {
        echo $total['label'] . "\t " . $total['value'] . "\n";
    }
}

echo "\n=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=\n\n";

do_action('woocommerce_email_after_order_table', $order, $sent_to_admin, $plain_text);

do_action('woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text);

echo "\n=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=\n\n";

echo apply_filters('woocommerce_email_footer_text', get_option('woocommerce_email_footer_text'));