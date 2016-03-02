<?php
/**
 * Alena Studio the sidebar default for index.
 *
 * Sets up the sidebar.
 *
 * @author : Alena Studio
 */
if (class_exists('Woocommerce')) {
    global $woocommerce;
    if (!is_woocommerce()) {
        ?>
        <div class="as-border-sidebar"></div>
        <div class="as-sidebar-content">       
            <?php
            if (is_active_sidebar('main_sidebar'))
                dynamic_sidebar('main_sidebar');
            ?>
        </div>

        <?php
    }
}else {
    ?>
    <div class="as-border-sidebar"></div>
    <div class="as-sidebar-content">       
        <?php
        if (is_active_sidebar('main_sidebar'))
            dynamic_sidebar('main_sidebar');
        ?>
    </div>
<?php } ?>