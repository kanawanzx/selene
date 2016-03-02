<?php
/* ----------------------------------------------------------------------------------- */
/* 	Custom Status Comment Post */
/* ----------------------------------------------------------------------------------- */

function as_function_comments_better($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    ?>
    <li <?php comment_class(); ?> id="as-li-comment-<?php comment_ID() ?>">
        <div class="as-comment" id="as-comment-<?php comment_ID(); ?>">

            <div class="as-comment-content">					
                <?php echo get_avatar($comment, $size               = '65'); ?>
                <div class="as-comment-meta">
                    <h4><?php comment_author_link() ?>
                        <span><?php comment_date(); ?> at <?php comment_time() ?></span>
                    </h4> 		
                </div>	
                <div class="as-comment-text">
                    <?php comment_text() ?>
                    <?php if ($comment->comment_approved == '0') : ?>
                        <p style="font-style:italic;"><?php esc_html_e('Your comment is awaiting moderation.', 'alenastudio') ?></p>
                        <br />
                    <?php endif; ?>
                    <?php edit_comment_link(esc_html__('[Edit]', 'alenastudio'), '  ', '') ?>
                    <?php
                    comment_reply_link(array_merge($args, array(
                        'depth'     => $depth,
                        'max_depth' => $args['max_depth'])))
                    ?>
                </div> 
            </div>
        </div>
    </li>
    <?php
}

/* ----------------------------------------------------------------------------------- */
/* 	Custom Excerpt Content Post */
/* ----------------------------------------------------------------------------------- */

function as_customize_excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt) >= $limit) {
        array_pop($excerpt);
        $excerpt = implode(" ", $excerpt) . '...';
    }
    else {
        $excerpt = implode(" ", $excerpt);
    }
    return $excerpt;
}

/* ----------------------------------------------------------------------------------- */
/* Get next or previous post by id
  /*----------------------------------------------------------------------------------- */

function get_next_previous_port_id($post_id, $next_or_prev) {
    // Get a global post reference since get_adjacent_post() references it
    global $post;

    // Store the existing post object for later so we don't lose it
    $oldGlobal = $post;

    // Get the post object for the specified post and place it in the global variable
    $post = get_post($post_id);

    // Get the post object for the previous post
    $previous_post = $next_or_prev == "prev" ? get_previous_post() : get_next_post();

    // Reset our global object
    $post = $oldGlobal;

    if ('' == $previous_post) {
        $port = get_posts(array(
            'post_type'      => 'dslc_projects',
            'order'          => $next_or_prev == "prev" ? 'DESC' : 'ASC',
            'posts_per_page' => 1,
        ));
        return $port[0]->ID;
    }

    return $previous_post->ID;
}
