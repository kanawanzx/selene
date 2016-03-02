<?php header("Content-type: text/css"); ?>
<?php

$absolute_path = __FILE__;
$path_to_file  = explode('wp-content', $absolute_path);
$path_to_wp    = $path_to_file[0];
require_once( $path_to_wp . '/wp-load.php' );
?>
<?php

// Color Main 1
$main_color        = as_option('as_option_main_color_1');
// Color Main 2
$main_color_2      = as_option('as_option_main_color_2');
// Color Link
$link_color        = as_option('as_option_link_color');
// Color Link
$link_color_hover  = as_option('as_option_link_color_hover');
// Color Icon Header 1
$color_icon_header = as_option('as_option_color_icon_bottom_header_1');
?>
<?php echo'
a, * a{
	color : ' . $link_color . ';
}
a:hover, * a:hover{
	color : ' . $link_color_hover . ';
}
/* Preloading Style */
#as-preloading-wrapper .as-folding-cube .as-cube:before{
	background-color: ' . $main_color . ';
}
#as-header-1 .as-header-top .as-sub-menu-top li a:hover{
	color: ' . $main_color . ';
}
#as-header-1 .as-search-and-shop .as-icon-shopping .as-icon-shoper svg{
	fill: ' . $color_icon_header . ';
}
#as-header-1 .as-search-and-shop > li .dslc-icon{
	color: ' . $color_icon_header . ';
}
/* WooCommerce Style */
.woocommerce nav.woocommerce-pagination ul li span.current, 
.woocommerce nav.woocommerce-pagination ul li a:hover, 
.woocommerce nav.woocommerce-pagination ul li a:focus, 
.woocommerce #content nav.woocommerce-pagination ul li span.current, 
.woocommerce #content nav.woocommerce-pagination ul li a:hover, 
.woocommerce #content nav.woocommerce-pagination ul li a:focus, 
.woocommerce-page nav.woocommerce-pagination ul li span.current, 
.woocommerce-page nav.woocommerce-pagination ul li a:hover, 
.woocommerce-page nav.woocommerce-pagination ul li a:focus, 
.woocommerce-page #content nav.woocommerce-pagination ul li span.current, 
.woocommerce-page #content nav.woocommerce-pagination ul li a:hover, 
.woocommerce-page #content nav.woocommerce-pagination ul li a:focus, 
.woocommerce a.button.alt:hover, 
.woocommerce button.button.alt:hover, 
.woocommerce input.button.alt:hover, 
.woocommerce #respond input#submit.alt:hover, 
.woocommerce #content input.button.alt:hover, 
.woocommerce-page a.button.alt:hover, 
.woocommerce-page button.button.alt:hover, 
.woocommerce-page input.button.alt:hover, 
.woocommerce-page #respond input#submit.alt:hover, 
.woocommerce-page #content input.button.alt:hover, 
.woocommerce .widget_price_filter .ui-slider .ui-slider-range, 
.woocommerce.widget_shopping_cart .buttons a:hover, 
.woocommerce .widget_shopping_cart .buttons a:hover, 
.woocommerce-page.widget_shopping_cart .buttons a:hover, 
.woocommerce-page .widget_shopping_cart .buttons a:hover, 
.widget_shopping_cart_content .buttons a:hover{
	background: ' . $main_color . ';
}
.woocommerce table.cart a.remove:hover, 
.woocommerce #content table.cart a.remove:hover, 
.woocommerce-page table.cart a.remove:hover, 
.woocommerce-page #content table.cart a.remove:hover, 
.product_listing_buttons_wrapper a.as_button span.dslc-icon, 
.product_listing_buttons_wrapper a.as_button.added:before,
.as-woo-control-style-wrapper .woocommerce .cart-collaterals table tr.order-total .amount,
.as-woo-control-style-wrapper .widget_shopping_cart_content .total .amount,
.star-rating span:before,
.as-woo-control-style-wrapper .as-woo-column-product .product_listing_buttons_wrapper a.as_button:hover span.dslc-icon,
.as-woo-control-style-wrapper .woocommerce div.product form.cart .reset_variations:hover{
	color: ' . $main_color . ';
}
.as-woo-control-style-wrapper .woocommerce table.cart td.actions .button:hover,
.as-woo-control-style-wrapper input#place_order:hover,
.as-woo-control-style-wrapper .woocommerce #respond input#submit:hover, 
.as-woo-control-style-wrapper .woocommerce a.button:hover, 
.as-woo-control-style-wrapper .woocommerce button.button:hover, 
.as-woo-control-style-wrapper .woocommerce input.button:hover,
.as-woo-control-style-wrapper .as-widget.woocommerce .button.wc-forward:hover, 
.as-woo-control-style-wrapper .as-widget.woocommerce .button.checkout.wc-forward:hover,
.as-woo-control-style-wrapper .product_meta .as-list-icon-share-btn li a:hover,
#as-comment-wrapper .as-reply-form-comment .form-submit input.submit:hover,
.as-button-style:hover,
.as-port-ajax-social-share .as-get-in-touch-prj-ajax:hover{
	background: ' . $main_color . ';
	border-color: ' . $main_color . ';
	color: #fff;
}
.as-woo-control-style-wrapper .woocommerce table.shop_table th, .as-woo-control-style-wrapper .woocommerce-page table.shop_table th{
	background: ' . $main_color . ';
	border-color: ' . $main_color . ';
}
/* General Style */
#as-header-1 .as-search-and-shop .as-icon-shopping .as-quatity-item-woo,
#as-footer-1 h4.widget-title-footer:before,
#as-comment-wrapper .comment-reply-link:hover,
.as-pagination-wrapper ul li a:hover,
.as-pagination-wrapper ul li > span:hover,
.as-sidebar-content .as-widget .widgettitle:before,
#as-page-blog-classic .as-post-item .as-gallery-wrapper .as-customNavigation-blog a:hover,
#as-page-blog-classic .as-post-item.dslc_projects .as-content-blog-wrapper.as-single-project .as-btn-readmore.as-btn-single-project:hover,
.contact-style-1 input[type="submit"], 
.contact-style-2 input[type="submit"], 
.contact-style-3 input[type="submit"],
.open-table-widget .otw-bare-bones-style .otw-button-wrap input[type=submit]:hover,
.dl-menuwrapper div.dl-trigger{
	background: ' . $main_color . ';
}
#as-comment-wrapper .comment-reply-link:hover,
.as-pagination-wrapper ul li a:hover,
.as-pagination-wrapper ul li > span:hover,
.as-social-info-widget-wrapper .as-social-info-widget li a:hover,
#as-page-blog-classic .as-post-item.dslc_projects .as-content-blog-wrapper.as-single-project .as-btn-readmore.as-btn-single-project:hover,
#as-footer-3 .as-footer-wrapper .as-footer-3-button .as-scrollup:hover{
	border-color: ' . $main_color . ';
}
#as-header-1 #mega_main_menu.as_header_menu > .menu_holder > .menu_inner > ul > li > .item_link,
.as-color-main,
.as-scrollup:hover .dslc-icon,
.as-post-info > div a:hover,
.as-post-info > div .as-name-author,
#as-page-blog-classic .as-tag-post-wrapper > a:hover,
.as-post-btn-group a.as-btn-readmore:hover,
.as-post-btn-group a.as-btn-readmore:hover,
.as-social-info-widget-wrapper .as-social-info-widget li a:hover,
.as-sidebar-content .as-widget ul li a:hover,
.as-sidebar-content .as-widget ul li.recentcomments .comment-author-link,
#as-page-blog-classic .as-title-meta-wrapper .as-post-title a:hover,
.as-sidebar-content .as-widget.widget_recent_entries .recent-post-widget .recent-post-widget-content h5 a:hover,
#as-page-blog-classic .as-title-meta-wrapper .as-post-info > .as-category a:hover,
.dialog__content .dialog-inner .search-form-wrapper-dialog .searchform .searchform-wrapper #searchsubmit:hover,
#as-footer-3 .as-footer-3-menu li a:hover{
	color: ' . $main_color . ';
}
#as-header-1 #mega_main_menu > .menu_holder > .menu_inner > ul .mega_dropdown .item_link:hover .link_text,
#as-header-1 #mega_main_menu > .menu_holder > .menu_inner > ul > li > .item_link:hover .link_text,
#as-header-1 #mega_main_menu > .menu_holder > .menu_inner > ul > li.current-menu-item > .item_link .link_text,
#as-header-1 #mega_main_menu > .menu_holder > .menu_inner > ul > li > .item_link:hover:after,
#as-header-1 #mega_main_menu > .menu_holder > .menu_inner > ul > li.current-menu-item > .item_link:after{
	color: ' . $main_color . ' !important;
}
';
?>

<?php echo as_option('as_custom_css'); ?>