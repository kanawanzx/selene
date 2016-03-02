<?php
/**
 * Monalisa the content.
 *
 * Sets up the content.
 *
 * @package WordPress
 * @subpackage Monalisa
 * @since Monalisa 1.0
 */
?>
<div class="as-content-blog-wrapper">
    <div class="as-excerpt">
        <?php the_content(); ?>
    </div><!-- Excerpt / End -->
    <div class="clearfix"></div>
    <!-- link next/prev post -->
    <div class="blog-single-more-link">
        <?php get_template_part('template/post-new', 'link'); ?>
        <div class="clearfix"></div>
    </div>
    <div class="as-post-btn-group">
        <div class="as-tag-post-wrapper">
            <?php
            if (has_tag()) {
                ?>
                <span class="dslc-icon dslc-icon-as-pricetags"></span>&nbsp;&nbsp;<?php the_tags('Tags: &nbsp;&nbsp;', ', ', '<br />'); ?>
            <?php } ?>
        </div>  

        <div class="as-post-social-group">

            <?php if (as_option('as_blog_btn_list_share_social', '1')) : ?>
                <div class="as-share-social-list">
                    <?php
                    get_template_part('template/share', 'social-blog');
                    ?>
                    <div class="as-share-btn">
                        <span class="dslc-icon dslc-icon-share-alt"></span>
                        <?php _e('Share', 'alenastudio'); ?>
                    </div>
                </div>
            <?php endif ?>
        </div>
    </div><!-- Bottom / End -->
</div>
