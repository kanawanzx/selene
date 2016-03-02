<footer id="as-footer-2">
    <div class ="as-footer-wrapper">
        <div class="dslc-col dslc-12-col dslc-last-col">
            <?php if (as_option('as_option_check_list_social_footer_2', '1')) : ?>
                <div class="as-list-social-wrapper">
                    <h3><?php echo as_option('as_option_title_list_social_footer_2'); ?></h3>
                    <!-- List Social -->			    
                    <?php get_template_part('template/list', 'social-icon'); ?>
                    <!-- List Social / End -->  
                </div>
            <?php endif; ?>
            <?php if (as_option('as_option_check_menu_footer_2', '1')): ?>
                <!-- Menu -->
                <?php
                wp_nav_menu(array(
                    'container'       => false,
                    'container_class' => 'as-menu',
                    'menu_class'      => 'as-menu-footer-2',
                    'theme_location'  => 'as_footer_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'fallback_cb'     => false,
                ));
                ?>
                <!-- Menu / End -->
            <?php endif; ?>
            <?php
            global $allowed_html_array;
            if (as_option('as_option_check_copyright_footer_2', '1')):
                ?>
                <!-- Copyright -->
                <div class="as-copyright-footer"><?php echo wp_kses((as_option('as_option_copyright_footer_2', 'alenastudio')), $allowed_html_array); ?></div>
                <!-- Copyright / End -->
            <?php endif; ?>
        </div>
        <div class="clearfix"></div>
    </div>
</footer>