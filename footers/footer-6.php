<footer id="as-footer-6">
	<div class="as-footer-wrapper">
		<div class="dslc-col dslc-12-col dslc-last-col">
		<div class="dslc-col dslc-3-col dslc-last-col as-footer-6-button">
				<div class="as-scrollup"><span class="dslc-icon dslc-icon-angle-up"></span></div>
		</div>
			<div class="dslc-col dslc-6-col as-footer-6-menu"> <!-- Menu -->
				<?php if (as_option('as_option_check_menu_footer_6', '1')): ?>
					<?php
                wp_nav_menu(array(
                    'container'       => false,
                    'container_class' => 'as-menu',
                    'menu_class'      => 'as-menu-footer-6',
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
			<div class="dslc-col dslc-3-col as-footer-6-logo">
				<?php  global $allowed_html_array;
            if (as_option('as_option_check_copyright_footer_6', '1')):
                ?>
                <div class="as-copyright-footer-6"><?php echo wp_kses((as_option('as_option_copyright_footer_6', 'alenastudio')), $allowed_html_array); ?></div>
            <?php endif; ?>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</footer>