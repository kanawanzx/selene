<?php
/**
 * The page index of theme .
 *
 * Set up the page index .
 *
 * @author : Alena Studio
 */
global $wp_query, $wp_rewrite;
get_header();
?>
<!-- Content
======================================================================== -->
<?php
$full_col = '';
$last_col = '';
$cont_col = '';
if (as_option('as_blog_position_sidebar') == "left") {
    $last_col = ' dslc-last-col';
    $cont_col = ' as-sidebar-border-right';
}
if (as_option('as_blog_position_sidebar') == "right") {
    $cont_col = ' as-sidebar-border-left';
}
if (as_option('as_blog_position_sidebar') == "fullwidth") {
    $full_col = ' dslc-12-col dslc-last-col';
}
else {
    $full_col = ' dslc-8-col';
}
?>
<div class="as-page-wrapper">
    <div class="as-content-wrapper">
        <div id="as-page-blog-classic" class="as-wrapper clearfix <?php echo esc_attr($cont_col); ?>">
            <?php if (as_option('as_blog_position_sidebar') == "left") { ?>
                <div class="dslc-col dslc-4-col">
                    <?php get_sidebar(); ?>
                </div><!-- Sidebar / End -->
            <?php } ?>
            <div class="dslc-col <?php echo esc_attr($full_col); ?> <?php echo esc_attr($last_col); ?>">
                <?php
                if (have_posts()):
                    while (have_posts()): the_post();
                        $format = get_post_format();
                        ?>
                        <div <?php post_class('as-post-item'); ?>>
                            <?php get_template_part('template/date', 'format'); ?>
                            <?php get_template_part('template/title', 'meta'); ?>
                            <?php get_template_part('template/content', $format); ?>
                            <?php
                            if ($format != 'quote') {
                                get_template_part('template/blog', 'detail');
                            }
                            ?>
                        </div>	
                        <div class="clearfix"></div>	
                        <?php
                    endwhile;
                endif;
                ?>
                <!-- Pagination -->
                <?php wp_reset_query(); ?>
                <div class="as-pagination-wrapper">
                    <?php echo as_get_pagination(); ?>
                </div>
                <!-- Pagination / End -->
            </div><!-- Post Loop / End -->
            <?php if (as_option('as_blog_position_sidebar') == "right") { ?>
                <div class="dslc-col dslc-4-col dslc-last-col">
                    <?php get_sidebar(); ?>
                </div><!-- Sidebar / End -->
            <?php } ?>
        </div><!-- Wrapper / End -->
    </div>
</div>
<!-- Content / End -->
<?php
get_footer();
