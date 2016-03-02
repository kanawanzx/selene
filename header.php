<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @author : Alena Studio
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
    <!--<![endif]-->
    <head>
	    <title><?php wp_title('|', true, 'right'); ?></title>
	    
        <!-- Meta
		================================================== -->
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <!-- Meta / End -->
		
        <!-- Favicons
        ================================================== -->
        <link rel="shortcut icon" href="<?php echo as_option('as_option_favicon', false, 'url'); ?>">
        <link rel="icon" type="image/png" href="<?php echo as_option('as_option_favicon', false, 'url'); ?>" />
        <link rel="apple-touch-icon" href="<?php echo as_option('touch_icon', false, 'url'); ?>">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo as_option('touch_icon_72', false, 'url'); ?>">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo as_option('touch_icon_144', false, 'url'); ?>">
        <!-- Favicons / End -->

        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <!--[if lt IE 9]>
        <script src="<?php echo TEMPLATEURL; ?>/js/html5.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
        <script>
            var template_path = '<?php echo get_template_directory_uri(); ?>';
        </script>
    </head>
    <?php
    $as_woo_control_style = '';
    //boxed class
    $as_boxed             = '';
    //body class for boxed
    $as_body_fix_boxed    = '';
    //get value of choice
    $as_header_check      = rwmb_meta('as_custom_page_metaboxes', 'type=checkbox_list');
    $as_header            = rwmb_meta('as_header_box');
    $as_boxed_choice      = rwmb_meta('as_boxed_choice');
    if (class_exists('Woocommerce')) {
        $as_woo_control_style = 'as-woo-control-style-wrapper';
    }
    // Set Boxed class for page
    if (!is_page_template('page-blank.php')) {
        if (is_array($as_header_check)) {
            if ((in_array('page_header_options', $as_header_check)) && ($as_header != 0)) {
                if (($as_header == 3) && (as_option('as_option_custom_header') != 3)) {
                    if ((as_option('as_option_page_width', 1))) {
                        $as_boxed          = 'as-boxed';
                        $as_body_fix_boxed = ' as-fix-body-boxed';
                    }
                    else {
                        $as_body_fix_boxed = ' as-fix-body';
                    }
                }
            }
        }
    }
    // Set class for header 3
    if ((as_option('as_option_custom_header') == 3) && (!as_option('as_option_page_width', 1))) {
        $as_body_fix_boxed = ' as-fix-body as-header-option-3';
    }
    elseif ((as_option('as_option_custom_header') == 3) && (as_option('as_option_page_width', 1))) {
        $as_body_fix_boxed = ' as-fix-body-boxed as-header-option-3';
    }
    if (is_array($as_header_check)) {
        if ((in_array('page_header_options', $as_header_check)) && ($as_header != 0)) {
            $as_body_fix_boxed = ' ';
            if (($as_header == 3 ) && (!as_option('as_option_page_width', 1))) {
                $as_body_fix_boxed = ' as-fix-body';
            }
            elseif (($as_header == 3 ) && (as_option('as_option_page_width', 1))) {
                $as_body_fix_boxed = ' as-fix-body-boxed';
            }
        }
    }
    // Set width for boxed
    if (as_option('as_option_page_width', 1)) {
        $as_boxed       = ' as-boxed';
        $as_boxed_width = as_option('as_option_page_set_width');
        if ($as_boxed_width > 0 && $as_boxed_width < 1701) {
            $as_boxed = 'as-boxed" style="width:' . $as_boxed_width . 'px;';
        }
    }
    // Set boxed class for page choice
    if (isset($as_boxed_choice)) {
        if ($as_boxed_choice == 1) {
            $as_boxed_width_choice = rwmb_meta('as_boxed_choice_width');
            if (is_array($as_header_check)) {
                if ((in_array('page_header_options', $as_header_check)) && ($as_header != 0)) {
                    if (($as_header == 3) | (as_option('as_option_custom_header') == 3)) {
                        $as_body_fix_boxed = ' as-fix-body-page-choice-boxed';
                    }
                }
            }
            if ($as_boxed_width_choice > 0 && $as_boxed_width_choice < 1701) {
                $as_boxed = 'as-boxed" style="width:' . $as_boxed_width_choice . 'px;';
            }
            else {
                $as_boxed = 'as-boxed" style="width:1170px;';
            }
        }
        elseif ($as_boxed_choice == 2) {
            $as_boxed          = ' ';
             if (is_array($as_header_check)) {
                if ((in_array('page_header_options', $as_header_check)) && ($as_header != 0)) {
                    if (($as_header == 3) | (as_option('as_option_custom_header') == 3)) {
                        $as_body_fix_boxed = ' as-fix-body-page-choice';
                    }
                }
            }
        }
    }
    $as_woo_control_style .= $as_body_fix_boxed;
    ?>
    <body <?php body_class($as_woo_control_style); ?>>
        <!-- Demo File -->
        <?php
        //include 'demo/select-demo.php';
        ?>
        <!-- Preloading
        ================================================== -->

        <?php if (as_option('as_option_page_preloading', '1')) { ?>
            <div id="as-preloading-wrapper">
                <div class="as-preloader">
                    <span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
                </div>
            </div>
        <?php } ?>
        <!-- Preloading / End -->
        <?php if (!empty($as_boxed) | !empty($as_boxed_choice)): ?>
            <div class="<?php echo $as_boxed; ?>">
        <?php endif; ?>
            <?php if (!is_page_template('page-blank.php')) { ?>
                <!-- Custom Header
                ================================================== -->
                <?php
                if (as_option('as_option_check_header', '1')) {
                    $slug = as_option('as_option_custom_header', 'default');
                    if (is_array($as_header_check)) {
                        if (($as_header != 0) && ((in_array('page_header_options', $as_header_check)))) {
                            $slug = $as_header;
                        }
                    }
                    echo get_template_part('headers/header', $slug);
                }
                ?>
                <!-- End / Custom Header -->

                <!-- Breadcrumb
                ================================================== -->
                <?php
                $as_breadcrumb = ( rwmb_meta('as_breadcrumb_menu'));
                if ((!is_page_template('page-home.php') && isset($as_header_check) && is_array($as_header_check)) | is_404() | is_search()) {
                    if (is_array($as_header_check) && in_array('page_breadcrumb_options', $as_header_check)) {
                        if (($as_breadcrumb == 1) | ($as_breadcrumb == 3)) {
                            get_template_part('template/breadcrumb', 'page');
                        }
                    }
                    else {
                        settype($as_header_check, 'array');
                        if ((as_option('as_option_breadcrumb_style', '1') && !(in_array('page_breadcrumb_options', $as_header_check)))) {
                            get_template_part('template/breadcrumb', 'page');
                        }
                    }
                }
                ?>   
                <!-- End / Breadcrumb -->
            <?php } ?>