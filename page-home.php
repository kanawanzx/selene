<?php
/**
 * Template name: Front Page
 */
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @author : Alena Studio
 */
get_header();
?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <!-- Content
        ======================================================================== -->
        <div class="as-page-wrapper">
            <div class="as-content-wrapper">
                <div class="as-wrapper clearfix">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
        <!-- Content / End -->
    <?php endwhile; ?>
<?php endif; ?>
<?php
get_footer();
