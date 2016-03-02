<footer id="as-footer-7">
	<div class="as-footer-wrapper">
		<div class="dslc-col dslc-12-col dslc-last-col">
			<div class="dslc-col dslc-3-col as-footer-7-logo">
				<?php if (as_option('as_option_footer_7_logo') !='') : ?>
					<a href="<?php echo home_url();?>"><img src ="<?php echo as_option('as_option_footer_7_logo', false, 'url'); ?>"/></a>
					<?php else: ?>
					 &nbsp;
					<?php endif; ?>
			</div>
			<div class="dslc-col dslc-6-col"> 
			&nbsp;
			</div><!-- Menu / End -->
			<div class="dslc-col dslc-3-col dslc-last-col as-footer-7-social">
				 <div class="as-footer-7-social-wrapper">
                    <!-- List Social -->			    
                    <?php get_template_part('template/list', 'social-icon'); ?>
                    <!-- List Social / End -->  
                </div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</footer>