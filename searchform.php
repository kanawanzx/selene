<form method="get" id="as-searchform" class="as-searchform" action="<?php echo esc_url(home_url('/')); ?>" >
                <!--<label for="s" class="screen-reader-text"><?php _ex('Search', 'assistive text', 'Alena studio'); ?></label>-->
    <input type="search" class="field" name="s" value="<?php echo get_search_query(); ?>" id="s" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'Alena studio'); ?>" />
    <!--<input type="submit" class="submit" id="searchsubmit" value="<?php echo esc_attr_x('Search', 'submit button', 'Alena studio'); ?>" /> -->
</form>