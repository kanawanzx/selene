<?php
/**
 * Alena Studio the Comment of Post.
 *
 * Sets up the comment.
 *
 * @author : Alena Studio
 */
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die(esc_html__('Please do not load this page directly. Thanks!', 'alenastudio'));
if (post_password_required()) {
    ?>
    <p class="nocomments"><?php esc_html_e('This post is password protected. Enter the password to view comments.', 'alenastudio'); ?></p>
    <?php
    return;
}
?>
<!-- You can start editing here. -->
<?php if (comments_open()) : ?>
    <div id="as-comment-wrapper">
        <h3><?php comments_number(esc_html__('No Comments', 'alenastudio'), __('1 Comment', 'alenastudio'), _n('% comment', '% comments', get_comments_number(), 'alenastudio')); ?> <a class="as-leave-cmt" href="#respond"><?php esc_html_e('Leave a comment', 'alenastudio') ?> &nbsp;<span class="dslc-icon dslc-icon-chevron-down"></span></a></h3>
        <?php if (have_comments()) : ?>
            <ul id="comments">
                <?php
                wp_list_comments(
                        array(
                            'login_text' => 'Log in to Reply',
                            'reply_text' => 'Reply',
                            'callback'   => 'as_function_comments_better'
                        )
                );
                ?>
            </ul>
            <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // are there comments to navigate through   ?>
                <nav id="comment-nav-above">
                    <h6 class="nav-previous"><?php previous_comments_link(esc_html__('&lt; Older Comments', 'alenastudio')); ?></h6>
                    <h6 class="nav-next"><?php next_comments_link(esc_html__('Newer Comments &gt;', 'alenastudio')); ?></h6>
                </nav>
            <?php endif; // check for comment navigation  ?>
        <?php endif; ?>
        <?php
    else :
        // comments are closed 
        ?>
    <?php endif; ?>
    <?php if (comments_open()) : ?>
        <div class="as-reply-form-comment">
            <?php

            function my_fields($fields) {
                $fields['author'] = '<div class="as-input-comment as-name-label">
                    <input type="text" aria-required="true" tabindex="1" size="22" value="' . esc_html__('Your name (Required)', 'alenastudio') . '" id="author" name="author">
                </div>';
                $fields['email']  = '<div class="as-input-comment as-email-label">
                    <input type="text" aria-required="true" tabindex="2" size="22" value="' . esc_html__('Email (Required)', 'alenastudio') . '" id="email" name="email">
                </div>';
                $fields['url']    = '<div class="as-input-comment as-url-website-label" style="margin-right:0 !important;">
                    <input type="text" tabindex="3" size="22" value="' . esc_html__('Website', 'alenastudio') . '" id="url" name="url">
                </div>';
                return $fields;
            }

            add_filter('comment_form_default_fields', 'my_fields');
            comment_form(
                    array(
                        'comment_field' => '<div class="clear" style="height:5px;"></div><div class="clearfix comment-textarea">
                    <textarea style="padding:14px 2%; width:96%;" tabindex="4" cols="15" rows="10" id="comment" name="comment">' . esc_html__('Message (Required)', 'alenastudio') . '</textarea>
                </div>'
            ));
            ?>
        </div>
    </div>
<?php endif; ?>