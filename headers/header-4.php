<!-- Header
================================================== -->
<header id="as-header-4">
    <?php
    $as_note       = trim(as_option('as_option_note_top_header_4'));
    $as_logo       = as_option('as_option_custom_logo');
    $as_top_header = as_option('as_option_check_top_header_4');
    $as_phone      = trim(as_option('as_option_phone_content_header_4'));
    ?>
    <div class="as-container">
        <?php if ($as_top_header == true): ?>
            <div class="as-top-header-wrapper">
                <div class="as-wrapper clearfix as-top-content">
                    <div class="dslc-col dslc-6-col">
                        <ul class="as-info-top-header">
                            <?php if (isset($as_note) && !empty($as_note)): ?>
                                <li><span><?php echo esc_attr($as_note) ?></span></li>
                            <?php endif; ?>	
                        </ul>
                    </div>
                    <div class="dslc-col dslc-6-col dslc-last-col">
                        <ul class="as-list-social-header-wrapper">
                            <?php
                            if (as_option('as_option_check_icon_search_header_1', '1')) {
                                ?>
                                <li>
                                    <a href="#" class="trigger-search" data-id="search_dialog">
                                        <span class="dslc-icon dslc-icon-search"></span>
                                    </a>
                                </li>
                                <?php
                            }
                            if (as_option('as_twitter_url')) {
                                echo '<li><a href="' . esc_url(as_option('as_twitter_url')) . '" title="Twitter" class="as-twitter"><span class="dslc-icon dslc-icon-twitter"></span></a></li>';
                            }
                            if (as_option('as_facebook_url')) {
                                echo '<li><a href="' . esc_url(as_option('as_facebook_url')) . '" title="Facebook" class="as-facebook"><span class="dslc-icon dslc-icon-facebook"></span></a></li>';
                            }
                            if (as_option('as_dribbble_url')) {
                                echo '<li><a href="' . esc_url(as_option('as_dribbble_url')) . '" title="Dribbble" class="as-dribbble"><span class="dslc-icon dslc-icon-dribbble"></span></a></li>';
                            }
                            if (as_option('as_google_url')) {
                                echo '<li><a href="' . esc_url(as_option('as_google_url')) . '" title="Google Plus" class="as-google-plus"><span class="dslc-icon dslc-icon-google-plus"></span></a></li>';
                            }
                            if (as_option('as_pinterest_url')) {
                                echo '<li><a href="' . esc_url(as_option('as_pinterest_url')) . '" title="Pinterest" class="as-pinterest"><span class="dslc-icon dslc-icon-pinterest"></span></a></li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div><!-- Top Header / End -->
        <?php endif; ?>
        <div class="as-container-header-wrapper">
            <div class="as-wrapper clearfix">
                <div class="dslc-col dslc-4-col ">
                    <div class="as-contact-left">
                        <span class="dslc-icon dslc-icon-phone"></span>
                        <strong><?php echo __('Customer Support', 'alenastudio') ?></strong>
                        <span><?php echo esc_attr($as_phone); ?></span>
                    </div>
                </div>
                <div class="dslc-col dslc-4-col">
                    <div class=" as-image-center">
                        <!-- Logo -->
                        <?php if (as_option('as_option_check_logo_header_1', '1')) { ?>
                            <a href="<?php echo esc_url(home_url()); ?>" class="as-logo-main-site">
                                <img src="<?php echo esc_url(as_option('as_option_custom_logo', false, 'url')); ?>" alt="<?php echo get_bloginfo('name'); ?>"/>
                            </a>
                        <?php } ?>
                        <!-- Logo / End -->
                    </div>
                </div>
                <div class="dslc-col dslc-4-col dslc-last-col">
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
                                        <a href="javascript:void(0);"><span class="dslc-icon dslc-icon-shopping-cart"></span><span class="as-quatity-item-woo"><?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count); ?></span></a>
                                        <div class="widget_shopping_cart_content"></div>
                                    </li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                    <?php } ?>
                    <!-- Icon Shop & Search / End -->
                </div>
            </div>
        </div><!-- Content Header / End -->
        <div class="as-bottom-header-wrapper">
            <div class="as-wrapper clearfix">
                <div class="dslc-col dslc-12-col">
                    <div class="nav-wrapper">
                        <!-- Menu -->
                        <?php
                        wp_nav_menu(array(
                            'container'       => 'nav',
                            'container_class' => 'as-menu',
                            'menu_class'      => 'as-menu-bottom-header4',
                            'theme_location'  => 'as_header_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'fallback_cb'     => false,
                        ));
                        ?>
                        <!-- Menu / End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header / End -->