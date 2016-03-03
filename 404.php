<?php
/**
 * The 404 page
 *
 * @author : Alena Studio
 */
get_header();
?>
<!-- 404 PAGE
======================================================================== -->
jshfajhdKGj
<div class="as-page-wrapper">
    <div class="as-content-wrapper">
        <div class="as-wrapper clearfix as-wrapper-page-404">
            <div class="dslc-col dslc-12-col dslc-last-col">
                <div class="as-wrapper-number-404">
                    <h2>404</h2>
                    <h3><?php echo as_option('as_option_error_context_pan'); ?></h3>
                </div>
                <div class="as-context-404">
                    <p><?php echo as_option('as_option_error_context_404'); ?></p>
                </div>
                <div class="as-context-404-button">
                    <a href="<?php get_home_url(); ?>" class="as-button-style"><?php echo as_option('as_option_btn_back_to_home_text'); ?></a>
                    <a href="<?php echo esc_url(as_option('as_option_error_report_url_404')); ?>" class="as-button-style"><?php echo as_option('as_option_btn_error_report_url_404'); ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 404 PAGE / End -->
<?php get_footer(); ?>