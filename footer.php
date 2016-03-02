<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @author : Alena Studio
 */
?>
<?php if (!is_page_template('page-blank.php')) { ?>

    <!-- Footer
    ================================================== -->
    <?php if (as_option('as_option_check_footer', '1')) { ?>
        <?php
        $slug = as_option('as_option_custom_footer', 'default');

        $as_footer       = ( rwmb_meta('as_footer_menu'));
        $as_footer_check = ( rwmb_meta('as_custom_page_metaboxes', 'type=checkbox_list'));
        if (($as_footer != 0) && (in_array('page_footer_options', $as_footer_check))) {
            $slug = $as_footer;
        }

        get_template_part('footers/footer', $slug);
        ?>
    <?php } ?>
    <!-- End / Footer -->
    <!-- End div of boxed -->
    <?php
    if (as_option('as_option_page_width', 1) | rwmb_meta('as_boxed_choice_width') ===1) {
        echo "</div>";
    }
    ?>

    <!-- Search Form
        ======================================================================== -->
    <?php
    get_template_part('template/search', 'form');
    ?>
    <!-- Search Form / End -->

<?php } ?>

<?php wp_footer(); ?>
</body>
</html>