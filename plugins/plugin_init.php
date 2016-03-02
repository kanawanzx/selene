<?php
/* ----------------------------------------------------------------------------------- */
/* 	Live Composer Plugin */
/* ----------------------------------------------------------------------------------- */
/* ----------------------------------------------------------------------------------- */
/* 	TGM Plugin */
/* ----------------------------------------------------------------------------------- */
require_once('tgm-plugin-activation/class-tgm-plugin-activation.php');
require_once('tgm-plugin-activation/required_plugins.php');
/* ----------------------------------------------------------------------------------- */
/* 	Meta-Box INIT */
/* ----------------------------------------------------------------------------------- */
define('RWMB_URL', trailingslashit(get_template_directory_uri() . '/plugins/meta-box'));
define('RWMB_DIR', trailingslashit(get_template_directory() . '/plugins/meta-box'));
require_once RWMB_DIR . '/meta-box.php';
require_once RWMB_DIR . '/metaboxes_config.php';
/* ----------------------------------------------------------------------------------- */
/* 	WooCommerce INIT */
/* ----------------------------------------------------------------------------------- */
if (class_exists('Woocommerce')) {
    require_once get_template_directory() . '/plugins/woocommerce/woocommerce_init.php';
}