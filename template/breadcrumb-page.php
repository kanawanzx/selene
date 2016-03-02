<?php
/**
 * Monalisa the Breadcrumb for page.
 *
 * Sets up the Breadcrumb.
 *
 * @package WordPress
 * @subpackage Monalisa
 * @since Monalisa 1.0
 */
global $post;
?>
<?php
if (!is_page_template('template-blank.php')) {
    ?>
    <?php
    //BREADCRUM TITLE
    $is_archive_class = true;
    $breadcrumb_title = "";
    if (is_tax('portfolio_cats')) {
        $breadcrumb_title = translate('Portfolio category: ', 'alenastudio');
    }
    elseif (is_tax('product_cat')) {
        global $wp_query;
        $current_term     = $wp_query->get_queried_object();
        $breadcrumb_title = esc_html($current_term->name);
    }
    elseif (is_search()) {
        $breadcrumb_title = translate('Search Results For: ', 'alenastudio') . " " . esc_attr(apply_filters('the_search_query', get_search_query(false)));
    }
    elseif (is_archive()) {
        if (is_category()) {
            $breadcrumb_title = translate('Category: ', 'alenastudio') . ' "' . single_cat_title('', false) . '"';
        }
        elseif (is_tag()) {
            $breadcrumb_title = translate('Posts Tagged: ', 'alenastudio') . ' "' . single_tag_title('', false) . '"';
        }
        elseif (is_day()) {
            $breadcrumb_title = translate('Archive For: ', 'alenastudio') . ' "' . apply_filters('the_time', get_the_time('F jS, Y'), 'F jS, Y') . '"';
        }
        elseif (is_month()) {
            $breadcrumb_title = translate('Archive For: ', 'alenastudio') . ' "' . apply_filters('the_time', get_the_time('F, Y'), 'F, Y') . '"';
        }
        elseif (is_year()) {
            $breadcrumb_title = translate('Archive For: ', 'alenastudio') . ' "' . apply_filters('the_time', get_the_time('Y'), 'Y') . '"';
        }
        elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {
            $breadcrumb_title = translate('Blog Archives', 'alenastudio');
        }
        else if (is_shop()) {
            $breadcrumb_title = translate('Shop', 'alenastudio');
        }
    }
    elseif (is_404()) {
        $breadcrumb_title = translate('"404 ! Page not found !"', 'alenastudio');
    }
    else {
        $is_archive_class = false;
        if (!is_singular('post') && !is_singular('portfolio')) {
            if (!is_home()) {
                $breadcrumb_title = empty($post->post_parent) ? get_the_title($post->ID) : get_the_title($post->post_parent);
            }
            else {
                $breadcrumb_title = translate('Blog', 'alenastudio');
            }
        }
        else {
            if (is_singular('post')) {
                $breadcrumb_title = translate('Blog', 'alenastudio');
            }
            elseif (is_singular('portfolio')) {
                $breadcrumb_title = '' . get_the_title();
            }
        }
    }
    //BREADCRUM CONTENT
    $breadcrum_content      = array();
    $breadcrum_divider      = "/";
    $breadcrum_divider_html = $breadcrum_divider_html = '</li> <li><span class="as-breadcrumb-divider">' . $breadcrum_divider . '</span></li><li>';
    if (!is_home()) {
        $breadcrum_content[] = array(
            "title" => "Home",
            "url"   => home_url()
        );

        if (is_category() || is_singular('post')) {
            $breadcrum_content[] = get_the_category_list($breadcrum_divider_html);

            if (is_single()) {
                $breadcrum_content[] = the_title("", "", false);
            }
        }
        elseif (is_tax('product_cat')) {
            global $wp_query;
            $current_term = $wp_query->get_queried_object();
            $ancestors    = array_reverse(get_ancestors($current_term->term_id, 'product_cat'));
            foreach ($ancestors as
                    $ancestor) {
                $ancestor            = get_term($ancestor, 'product_cat');
                $breadcrum_content[] = array(
                    "title" => esc_html($ancestor->name),
                    "url"   => get_term_link($ancestor)
                );
            }
            $breadcrum_content[] = esc_html($current_term->name);
        }
        elseif (is_singular('portfolio')) {
            $breadcrum_content[] = get_the_term_list($post->ID, 'portfolio_cats', '', $breadcrum_divider_html);
            $breadcrum_content[] = the_title("", "", false);
        }
        elseif (is_singular('product')) {
            $breadcrum_content[] = get_the_term_list($post->ID, 'product_cat', '', $breadcrum_divider_html);
            $breadcrum_content[] = the_title("", "", false);
        }
        elseif (is_page()) {
            if (!empty($post->post_parent)) {
                $breadcrum_content[] = array(
                    "title" => get_the_title($post->post_parent),
                    "url"   => get_permalink($post->post_parent)
                );
            }
            $breadcrum_content[] = the_title("", "", false);
        }
        else if (is_page('Shop')) {
            $breadcrum_content[] = "Shop";
        }
    }
    elseif (is_tag()) {
        $breadcrum_content[] = single_tag_title();
    }
    elseif (is_day()) {
        $breadcrum_content[] = translate('Archive for', 'alenastudio') . apply_filters('the_time', get_the_time('F jS, Y'), 'F jS, Y');
    }
    elseif (is_month()) {
        $breadcrum_content[] = translate('Archive for', 'alenastudio') . apply_filters('the_time', get_the_time('F, Y'), 'F, Y');
    }
    elseif (is_year()) {
        $breadcrum_content[] = translate('Archive for', 'alenastudio') . apply_filters('the_time', get_the_time('Y'), 'Y');
    }
    elseif (is_author()) {
        $breadcrum_content[] = translate('Author Archive', 'alenastudio');
    }
    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {
        $breadcrum_content[] = translate('Blog Archives', 'alenastudio');
    }
    elseif (is_search()) {
        $breadcrum_content[] = translate('Search Results', 'alenastudio');
    }
    elseif (is_404()) {
        $breadcrum_content[] = translate('404 page not found', 'alenastudio');
    }
    ?>
    <!-- Breadcrumb & Title
    ======================================================================== -->
    <div id="as-breadcrumb-wrapper">
        <div class="as-wrapper clearfix">
            <div class="dslc-col dslc-12-col dslc-last-col">
                <?php
                if (is_home()) {
                    ?>
                    <h1 class="as-page-title"><?php echo esc_html($breadcrumb_title); ?></h1>
                    <?php
                }
                elseif ($is_archive_class) {
                    ?>
                    <h1 class="as-page-title as-page-title-archive"><?php echo esc_html($breadcrumb_title); ?></h1>
                    <?php
                }
                else {
                    ?>
                    <h1 class="as-page-title as-breadcrumb-title"><?php echo esc_html($breadcrumb_title); ?></h1>
                    <?php
                }
                $as_breadcrumb   = ( rwmb_meta('as_breadcrumb_menu'));
                $as_header_check = ( rwmb_meta('as_custom_page_metaboxes', 'type=checkbox_list'));
                settype($as_header_check, 'array');
                if ((($as_breadcrumb != 3) | !(in_array('page_breadcrumb_options', $as_header_check))) && (as_option('as_option_breadcrumb_link', '1'))):
                    ?>    
                    <!-- Breadcrumb Content -->
                    <ul class="as-breadcrumb-link">
                        <?php
                        if (!empty($breadcrum_content)) {
                            $count = 0;
                            foreach ($breadcrum_content as
                                    $link) {
                                $count++;
                                echo "<li>";
                                if (is_array($link)) {
                                    ?>
                                    <a href="<?php echo esc_url($link["url"]) ?>"><?php echo esc_html($link["title"]); ?></a>
                                    <?php
                                }
                                else {
                                    echo balanceTags($link, true);
                                }
                                echo "</li>";
                                if ($count < count($breadcrum_content)) {
                                    echo '<li><span class="as-breadcrumb-divider">' . esc_html($breadcrum_divider) . '</span></li>';
                                }
                            }
                        }
                        ?>
                    </ul>
                    <!-- End - Breadcrumb Content -->
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <!-- Breadcrumb & Title / End -->
<?php } ?>
