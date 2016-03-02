<!-- Header Style 1
================================================== -->
<?php
$sticky_header 	= '';
if (as_option('as_option_check_sticky_menu_header_1',1)) {
    $sticky_header = 'as-header-sticky';
}
//set width for boxed
$as_set_width = '';
$as_position  = '';
if (as_option('as_option_page_width', 1)) {
    $as_boxed_width = as_option('as_option_page_set_width');
    if ($as_boxed_width > 0 && $as_boxed_width < 1701) {
        if(isset($sticky_header) && !empty($sticky_header)){
            $as_set_width = 'style=" width:' . $as_boxed_width . 'px;"';
        }
    }
}
if ( as_option('as_option_radio_type_header_1') == 1 ) {
	$as_position = 'class=as-header-normal';
}

?>
<header id="as-header-1" <?php echo esc_html( $as_position );?>>
    <?php
    $as_email    = as_option('as_option_email_top_header_1');
    $as_address  = as_option('as_option_address_top_header_1');
    $as_phone    = as_option('as_option_phone_top_header_1');
    $as_one_page = '';
    if (as_option('as_option_one_page_active', 1)) {
	    $as_one_page = 'as-menu-roll';
    }
    ?>
    <div id="as-menu-header-1" class="as-header-1-wrapper <?php echo esc_attr($sticky_header);?>">
        <div class="as-wrapper clearfix">
            <div class="dslc-col dslc-3-col">
                <!-- Logo -->
                <?php if (as_option('as_option_check_logo_header_1', '1')) { ?>
                    <a href="<?php echo esc_url(home_url()); ?>" class="as-logo-main-site">
                        <img src="<?php echo esc_url(as_option('as_option_custom_logo', false, 'url')); ?>" alt="<?php echo get_bloginfo('name'); ?>"/>
                    </a>
                <?php } ?>
                <!-- Logo / End -->
            </div>
            <div class="dslc-col dslc-9-col dslc-last-col">
                <div class="as-cont-menu <?php echo esc_attr($as_one_page);?>">
                    <!-- Menu -->
                    <?php
                    wp_nav_menu(array(
                        'container'       => false,
                        'container_class' => 'as-menu',
                        'menu_class'      => 'as-menu-header-1',
                        'theme_location'  => 'as_header_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'fallback_cb'     => false,
                    ));
                    if (as_option('as_option_one_page_active', 1)) {
	                    if (!is_front_page()){
		                    echo "<input type='hidden' id='as-douma' value='".home_url()."'>";
	                    }
                    }
                    ?>
                    <!-- Menu / End -->
                </div>
                <!-- Icon Shop & Search -->
                <?php
                if (as_option('as_option_check_icon_shop_header_1', '1') || as_option('as_option_check_icon_search_header_1', '1')) {
                    ?>
                    <ul class="as-search-and-shop">
                        <?php
                        if (as_option('as_option_check_icon_shop_header_1', '1')) {
                            ?>
                            <?php
                            if (class_exists('Woocommerce')) {
                                global $woocommerce;
                                ?>
                                <li class="as-icon-shopping">
                                    <a href="javascript:void(0);">
                                        <div class="as-icon-shoper">
                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 35 40" style="enable-background:new 0 0 35 40;" xml:space="preserve">
                                            <g>
                                            <g id="Bag">
                                            <g>
                                            <path d="M27.996,8.91C27.949,8.395,27.519,8,27,8h-5V6c0-3.309-2.69-6-6-6c-3.309,0-6,2.691-6,6v2H5
                                                  C4.482,8,4.051,8.395,4.004,8.91l-2,22c-0.025,0.279,0.068,0.557,0.258,0.764C2.451,31.882,2.719,32,3,32h26
                                                  c0.281,0,0.549-0.118,0.738-0.326c0.188-0.207,0.283-0.484,0.258-0.764L27.996,8.91z M12,6c0-2.206,1.795-4,4-4s4,1.794,4,4v2h-8
                                                  V6z M4.096,30l1.817-20H10v2.277C9.404,12.624,9,13.262,9,14c0,1.104,0.896,2,2,2s2-0.896,2-2c0-0.738-0.404-1.376-1-1.723V10h8
                                                  v2.277c-0.596,0.347-1,0.984-1,1.723c0,1.104,0.896,2,2,2c1.104,0,2-0.896,2-2c0-0.738-0.403-1.376-1-1.723V10h4.087l1.817,20
                                                  H4.096z"/>
                                            </g>
                                            </g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g>
                                            </g>
                                            </svg>
                                        </div>
                                        <span class="as-quatity-item-woo"><?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count); ?></span>
                                    </a>
                                    <div class="widget_shopping_cart_content"></div>
                                </li>
                                <?php
                            }
                        }
                        ?>
                        <?php
                        if (as_option('as_option_check_icon_search_header_1', '1')) {
                            ?>
                            <li>
                                <a href="#" class="trigger-search" data-id="search_dialog">
                                    <span class="dslc-icon dslc-icon-search"></span>
                                </a>
                            </li>
                        <?php } ?>
                        <li class="as-hamburger-menu-res">
                            <div id="dl-menu" class="dl-menuwrapper">
                                <div class="dl-trigger">
                                    <span class="as-line-menu"></span>
                                </div>
                                <?php
                                wp_nav_menu(array(
                                    'container'       => false,
                                    'container_class' => 'as-menu',
                                    'menu_class'      => 'dl-menu',
                                    'theme_location'  => 'as_sub_menu',
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'fallback_cb'     => false,
                                    'walker'          => new Sub_Walker_Res_Menu()
                                ));
                                ?>
                            </div><!-- /dl-menuwrapper -->
                        </li>
                    </ul>
                <?php } ?>
                <!-- Icon Shop & Search / End -->
            </div>
        </div>
    </div>    
</header>
<!-- Header Style 1 / End -->