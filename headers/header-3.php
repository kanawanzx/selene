<!-- Header
================================================== -->
<header id="as-header-3">
	<div class="as-header-3-wrapper-responsive">
		<div class="as-wrapper clearfix">
			<div class="dslc-col dslc-3-col">
				<!-- Logo -->
		        <div class="as-header-3-logo">
		            <?php if (as_option('as_option_check_logo_header_3', '1')) { ?>
		                <a href="<?php echo esc_url(home_url()); ?>" class="as-logo-main-site">
		                    <img src="<?php echo esc_url(as_option('as_option_custom_logo', false, 'url')); ?>" alt="<?php echo get_bloginfo('name'); ?>"/>
		                </a>
		            <?php } ?>
		        </div>
		        <!-- Logo / End -->
			</div>
			<div class="dslc-col dslc-9-col dslc-last-col">
				<div id="dl-menu" class="dl-menuwrapper">
			        <div class="dl-trigger">
			            <span class="as-line-menu"></span>
			        </div>
			        <div class="clearfix"></div>
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
			</div>
	    </div>
    </div>
    <div class="as-header-3-wrapper">
        <!-- Logo -->
        <div class="as-header-3-logo">
            <?php if (as_option('as_option_check_logo_header_3', '1')) { ?>
                <a href="<?php echo esc_url(home_url()); ?>" class="as-logo-main-site">
                    <img src="<?php echo esc_url(as_option('as_option_custom_logo', false, 'url')); ?>" alt="<?php echo get_bloginfo('name'); ?>"/>
                </a>
            <?php } ?>
        </div>
        <!-- Logo / End -->
        <?php if (as_option('as_option_check_menu_header_3', '1')) { ?>
            <nav class="as-nav-wrapper">
                <!-- Menu -->
                <?php
                wp_nav_menu(array(
                    'container'       => false,
                    'container_class' => 'as-menu',
                    'menu_class'      => 'as-header-menu-3',
                    'theme_location'  => 'as_sidebar_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'fallback_cb'     => false,
                ));
                ?>
                <!-- Menu / End -->
            </nav>
        <?php } ?>
        <div class="as-bottom-header-3">
	        <div class="dslc-col dslc-12-col dslc-last-col">
		        <div class="as-header-3-coppyright">
	            	<?php echo as_option('as_option_copyright_header_3'); ?>
		        </div>
	            <div class="clearfix"></div>
	        </div>	
	        <?php
		        if (as_option('as_option_check_social_header_3', '1')) {
		            ?>
		            
		            <div class="dslc-col dslc-12-col as-header-3-social dslc-last-col">
		                <?php echo get_template_part('template/list', 'social-icon'); ?>
		                <div class="clearfix"></div>
		            </div>
		            <?php
		        }
	        ?>
        </div>
    </div>
</header>
<!-- Header / End -->