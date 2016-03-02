<!-- Header
================================================== -->
<header id="as-header-2">
    <div class="as-header-2-wrapper" data-menu="show">
        <div class="as-wrapper clearfix">
            <div class="dslc-col dslc-12-col dslc-last-col">
                <!-- Logo -->
                <div class="as-logo-wrapper">
                    <a href="<?php echo home_url(); ?>" class="as-logo-main-site">
                        <img src="<?php echo as_option('as_option_custom_logo', false, 'url'); ?>" alt="<?php echo get_bloginfo('name'); ?>"/>
                    </a>
                </div>
                <!-- Logo / End -->
                <div class=""></div>
                <div class="as-list-icon-header-wrapper">
                    <!-- Hamburger Menu -->
                    <div id="as-hamburger" class="as-hamburglar is-open">
                        <div id="top"></div>
                        <div id="middle"></div>
                        <div id="bottom"></div>
                        <div class="as-close-btn"></div>
                    </div>
                    <!-- Hamburger Menu / End -->
                </div>
            </div>
            <!-- Navigation Visible -->
            <nav class="as-nav-wrapper as-menu-roll">
                <?php
                wp_nav_menu(array(
                    'container'       => false,
                    'container_class' => 'as-menu',
                    'menu_class'      => 'as-primary-nav',
                    'theme_location'  => 'as_header_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'fallback_cb'     => false,
                        //'walker'          => new AS_Custom_Walker_Nav_Menu()
                ));
                ?>
            </nav>
            <!-- Navigation Visible / End -->
        </div>
    </div>
</header>
<!-- Header / End -->