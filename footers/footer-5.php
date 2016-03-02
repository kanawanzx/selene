<footer id="as-footer-5">
	<div class="as-footer-wrapper">
		<div class="dslc-col dslc-12-col dslc-last-col">
			<div class="dslc-col dslc-4-col as-footer-5-logo">
				<?php if ((as_option('as_option_check_logo_footer_5',1))&&(as_option('as_option_logo_footer_5') !='')) : ?>
					<a href="<?php echo home_url();?>"><img src ="<?php echo as_option('as_option_logo_footer_5', false, 'url'); ?>"/></a>
					<?php else: ?>
						&nbsp;
						<?php endif; ?>
			</div>
			<div class="dslc-col dslc-8-col dslc-last-col as-footer-5-menu">

				<?php
			if (as_option('as_option_check_menu_footer_5',1)) :
                wp_nav_menu(array(
                    'container'       => false,
                    'container_class' => 'as-menu',
                    'menu_class'      => 'as-menu-footer-5',
                    'theme_location'  => 'as_footer_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'fallback_cb'     => false,
                ));
				 else:
                ?>
					&nbsp;
					<?php  endif;?>
						<div class="as-footer-5-social-wrapper">
							<?php if (as_option('as_option_check_list_social_footer_5',1)) : ?>
								<!-- List Social -->
								<?php get_template_part('template/list', 'social-icon'); ?>
									<!-- List Social / End -->
									<?php else: ?>
										&nbsp;
										<?php endif; ?>
						</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</footer>