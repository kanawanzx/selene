
<!-- Footer top
======================================================================== -->
<footer id="as-footer-1">
    <!-- Footer option choice column -->
    <?php
    $column         = as_option('as_option_select_column');
    $as_col_default = false;
    switch ($column) {
        case 'style1':
            $as_col_1       = '6-col';
            $as_col_2       = '3-col';
            $as_col_3       = '3-col dslc-last-col';
            break;
        case 'style2':
            $as_col_1       = '3-col';
            $as_col_2       = '3-col';
            $as_col_3       = '6-col dslc-last-col';
            break;
        case 'style3':
            $as_col_1       = '4-col';
            $as_col_2       = '4-col';
            $as_col_3       = '4-col dslc-last-col';
            break;
        case 'style4':
            $as_col_1       = '6-col';
            $as_col_2       = '6-col dslc-last-col';
            break;
        default:
            $as_col_1       = '3-col';
            $as_col_2       = '3-col';
            $as_col_3       = '3-col';
            $as_col_default = true;
            break;
    }
    ?>
    <div class="as-wrapper clearfix">
        <div class="as-footer-wrapper">
            <aside class="dslc-col dslc-<?php echo $as_col_1; ?>">
                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Area 1')) : ?><?php endif; ?>
            </aside>
            <aside class="dslc-col dslc-<?php echo $as_col_2; ?>">
                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Area 2')) : ?><?php endif; ?>
            </aside>
            <?php if ($column != 'style4'): ?>
                <aside class="dslc-col dslc-<?php echo $as_col_3; ?>">
                    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Area 3')) : ?><?php endif; ?>
                </aside>
            <?php endif; ?>
            <?php if ($as_col_default === true): ?>
                <aside class="dslc-col dslc-3-col dslc-last-col">
                    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Area 4')) : ?><?php endif; ?>
                </aside>
            <?php endif; ?>
        </div>
    </div>
</footer>
<!-- Footer Bottom & Coppyright
======================================================================== -->
<div id="footer-bottom-1">
    <?php if (as_option('as_option_scroll_to_top', '1')) { ?>
        <!-- Scrool to top
        ======================================================================== -->
        <div class="as-scrollup"><span class="dslc-icon dslc-icon-double-angle-up"></span></div>
        <!-- Scrool to top / End -->
    <?php } ?>
    <div class="as-wrapper clearfix">
        <div class="dslc-col dslc-12-col dslc-last-col">
            <?php if (as_option('as_option_copyright_footer_1')) { ?>
                <!-- Copyright -->
                <div class="as-copyright-footer"><?php echo as_option('as_option_copyright_footer_1'); ?></div>
                <!-- Copyright / End -->
            <?php } ?>
        </div>
    </div>
</div>
<!-- Footer Bottom & Coppyright / End -->