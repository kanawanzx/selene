<?php
/**
 * Template Name: Blog Template
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @author : Alena Studio
 */
global $wp_query, $wp_rewrite;
get_header();
?>
<!-- Content
======================================================================== -->
<?php
$as_blog_sidebar = rwmb_meta('as_blog_option');
$as_sidbar       = '';
if (isset($as_blog_sidebar) && !empty($as_blog_sidebar) && ($as_blog_sidebar != 'default')) {
    $as_sidbar = $as_blog_sidebar;
}
else {
    $as_sidbar = as_option('as_blog_position_sidebar');
}
$full_col = '';
$last_col = '';
$cont_col = '';
if (((as_option('as_blog_position_sidebar') == "left") && ($as_blog_sidebar == 'default')) | ($as_sidbar == "left")) {
    $full_col = ' dslc-8-col';
    $last_col = ' dslc-last-col';
    $cont_col = ' as-sidebar-border-right';
}
if (((as_option('as_blog_position_sidebar') == "right") && ($as_blog_sidebar == 'default')) | ($as_sidbar == "right")) {
    $full_col = ' dslc-8-col';
    $cont_col = ' as-sidebar-border-left';
}
if (($as_sidbar == "full")) {
    $full_col = ' dslc-12-col dslc-last-col as-fullwidth';
}
if (($as_sidbar == "fullwidth") && (as_option('as_blog_position_sidebar') == "fullwidth")) {
    $full_col = ' dslc-12-col dslc-last-col as-fullwidth';
}
?>
<div class="as-page-wrapper">
    <div class="as-content-wrapper">
        <div id="as-page-blog-classic" class="as-wrapper clearfix <?php echo esc_attr($cont_col); ?>">
            <?php
            if ($as_sidbar == "left") {
                ?>
                <div class="dslc-col dslc-4-col">
                    <?php get_sidebar(); ?>
                </div><!-- Sidebar / End -->
            <?php } ?>
            <div class="dslc-col <?php echo esc_attr($full_col); ?> <?php echo esc_attr($last_col); ?>">
                <?php
                query_posts(array(
                    'paged'     => $paged,
                    'post_type' => 'post'));
                ?>
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
                <div class="as-pagination-wrapper">
                    <?php echo as_get_pagination(); ?>
                </div>
                <!-- Pagination / End -->
                <?php wp_reset_postdata(); ?>
            </div><!-- Post Loop / End -->
            <?php
            if ($as_sidbar == "right") {
                ?>
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
