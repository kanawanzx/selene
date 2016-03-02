<!-- Footer Opion 3
======================================================================== -->
<footer id="as-footer-3">
	<div class="as-footer-wrapper">
		<div class="as-wrapper">
			<div class="dslc-col dslc-3-col">
				<?php if ((as_option('as_option_check_logo_footer_3', '1')) && (as_option('as_option_logo_footer_3', false, 'url')!='')) : ?>
					<a class="as-footer-3-logo" href="<?php echo home_url();?>"><img src ="<?php echo as_option('as_option_logo_footer_3', false, 'url'); ?>"/></a>
					<?php else :?>
					 &nbsp;
					<?php endif; ?>
			</div>
			<div class="dslc-col dslc-6-col as-footer-3-menu"> <!-- Menu -->
				<?php if (as_option('as_option_check_menu_footer_3', '1')): ?>
					<?php
                wp_nav_menu(array(
                    'container'       => false,
                    'container_class' => 'as-menu',
                    'menu_class'      => 'as-menu-footer-3',
                    'theme_location'  => 'as_footer_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'fallback_cb'     => false,
                ));
				else :
                ?>	
                &nbsp;
				<?php endif; ?>
			</div><!-- Menu / End -->
			<div class="dslc-col dslc-3-col dslc-last-col as-footer-3-button">
				<div class="as-scrollup"><span class="dslc-icon dslc-icon-angle-up"></span></div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</footer>
<!-- End / Footer Opion 3 -->