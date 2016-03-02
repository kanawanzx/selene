<!-- Custom Search Form
======================================================================== -->
<div id="search_dialog" class="dialog">
    <div class="dialog__overlay"></div>
    <div class="dialog__content">
        <div class="dialog-inner">
            <h2><?php echo __('Enter your keyword:', 'alenastudio'); ?></h2>
            <div class="search-form-wrapper-dialog">
                <form method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url()); ?>">
                    <div class="searchform-wrapper">
                        <input type="text" value="" name="s" id="s" placeholder="Search"/>
                        <button type="submit" id="searchsubmit"><span class="dslc-icon dslc-icon-search"></span></button>
                    </div>
                </form>
            </div>
            <div><button class="action" data-dialog-close="close"><?php _e('Close', 'alenastudio'); ?></button></div>
        </div>
    </div>
</div>
<!-- Custom Search Form / End -->