<!-- Footer Opion 4
======================================================================== -->
<footer id="as-footer-4">
	<div class="as-wrapper">
		<div class="dslc-col dslc-6-col">
			<?php if (as_option('as_option_footer_4_logo') !='') : ?>
				<a href="<?php echo home_url();?>"><img src ="<?php echo as_option('as_option_footer_4_logo', false, 'url'); ?>"/></a>
				<?php else: ?>
				 &nbsp;
				<?php endif; ?>
		</div>
		<div class="dslc-col dslc-6-col dslc-last-col">
			 <div class="as-footer-social-wrapper">
                <!-- List Social -->			    
                <?php get_template_part('template/list', 'social-icon'); ?>
                <!-- List Social / End -->  
            </div>
		</div>
		<div class="clearfix"></div>
	</div>
</footer>
<!-- End / Footer Opion 4 -->