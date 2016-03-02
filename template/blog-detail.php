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
        <?php the_excerpt(); ?>
    </div><!-- Excerpt / End -->
    <div class="clearfix"></div>
    <div class="as-post-btn-group">
        <?php if (as_option('as_blog_btn_readmore', '1')) : ?>
            <a href="<?php echo get_permalink(); ?>" class="as-btn-readmore">
                <span class="dslc-icon dslc-icon-long-arrow-right"></span><?php _e('learn more', 'alenastudio') ?>
            </a>
        <?php endif ?>
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
    <div class="clearfix"></div>
    <div class="as-line-bottom-blog">
        <div class="as-line-full"></div>
        <div class="as-line-half"></div>
    </div>
</div>