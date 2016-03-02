<?php
/**
 * Alena Studio the content.
 *
 * Sets up the content.
 *
 * @author : Alena Studio
 */
?>
<div class="as-title-meta-wrapper">
    <h2 class="as-post-title">
        <a href="<?php echo get_permalink(); ?>"><?php the_title() ?></a>
    </h2>
    <div class="as-post-info">
        <?php if (as_option('as_blog_post_author', '1')) : ?>
            <div class="as-author">
                <?php _e('By &nbsp;', 'alenastudio'); ?><span class="as-name-author"><?php the_author(); ?></span>
            </div>
        <?php endif ?>
        <?php if (as_option('as_blog_post_comments', '1')) : ?>
            <div class="as-get-comment">
                <?php as_get_number_comment(); ?>
            </div>
        <?php endif ?>
        <?php if (as_option('as_blog_btn_like_heart', '1')) : ?>
            <div class="as-btn-heart-blog">
                <a href="#" class="as-post-like <?php echo as_is_like_post($post->ID); ?>" data-id="<?php echo esc_attr($post->ID); ?>">
                    <span class="dslc-icon dslc-icon-heart-empty"></span>
                    <span class="number-like-heart">
                        <?php echo get_post_meta($post->ID, 'as_like_count', true) ? get_post_meta($post->ID, 'as_like_count', true) : 0; ?>
                    </span>&nbsp;
                    <?php _e('like', 'alenastudio'); ?>
                </a>
            </div>
        <?php endif ?>
        <?php if (as_option('as_blog_post_category', '1')) : ?>
            <div class="as-category">
                <span class="dslc-icon dslc-icon-folder-open-alt"></span>&nbsp; <?php the_category(', '); ?>
            </div>
        <?php endif ?>
    </div><!-- Info / End -->
</div>