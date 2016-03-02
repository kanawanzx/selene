<?php
/**
  ReduxFramework Sample Config File
  For full documentation, please visit http://reduxframework.com/docs/
 * */
/**
  Most of your editing will be done in this section.
  Here you can override default values, uncomment args and change their values.
  No $args are required, but they can be overridden if needed.
 * */
$args                      = array();
// For use with a tab example below
$tabs                      = array();
// BEGIN Sample Config
// Setting dev mode to true allows you to view the class settings/info in the panel.
// Default: true
$args['dev_mode']          = false;
// Set the icon for the dev mode tab.
// If $args['icon_type'] = 'image', this should be the path to the icon.
// If $args['icon_type'] = 'iconfont', this should be the icon name.
// Default: info-sign
//$args['dev_mode_icon'] = 'info-sign';
// Set the class for the dev mode tab icon.
// This is ignored unless $args['icon_type'] = 'iconfont'
// Default: null
//args['dev_mode_icon_class'] = 'el-icon-large';
// Set a custom option name. Don't forget to replace spaces with underscores!
$args['opt_name']          = 'as_options';
// Setting system info to true allows you to view info useful for debugging.
// Default: false
//$args['system_info'] = false;
// Theme Panel Main Display Name
$args['display_name']      = __("MONALISA THEME OPTIONS PANEL", 'alenastudio');
$args['display_version']   = false;
// If you want to use Google Webfonts, you MUST define the api key.
$args['google_api_key']    = 'AIzaSyANTG_0ZzMEVSNOTw5VfrDk4RfOgaL9L3s';
// Define the starting tab for the option panel.
// Default: '0';
$args['last_tab']          = '0';
// Define the option panel stylesheet. Options are 'standard', 'custom', and 'none'
// If only minor tweaks are needed, set to 'custom' and override the necessary styles through the included custom.css stylesheet.
// If replacing the stylesheet, set to 'none' and don't forget to enqueue another stylesheet!
// Default: 'standard'
$args['admin_stylesheet']  = 'standard';
// Enable the import/export feature.
// Default: true
//$args['show_import_export'] = false;
// Set the icon for the import/export tab.
// If $args['icon_type'] = 'image', this should be the path to the icon.
// If $args['icon_type'] = 'iconfont', this should be the icon name.
// Default: refresh
//$args['import_icon'] = 'refresh';
// Set the class for the import/export tab icon.
// This is ignored unless $args['icon_type'] = 'iconfont'
// Default: null
$args['import_icon_class'] = 'el-icon-large';
// Set a custom menu icon.
$args['menu_icon']         = get_template_directory_uri() . '/img/logo-mono-small.png';
// Set a custom title for the options page.
// Default: Options
$args['menu_title']        = esc_html__('Theme Options', 'alenastudio');
// Set a custom page title for the options page.
// Default: Options
$args['page_title']        = esc_html__('Theme Options', 'alenastudio');
// Set a custom page slug for options page (wp-admin/themes.php?page=***).
// Default: redux_options
$args['page_slug']         = 'as_options';
// Show Default
$args['default_show']      = false;
// Default Mark
$args['default_mark']      = '';
// Set a custom page capability.
// Default: manage_options
//$args['page_cap'] = 'manage_options';
// Set the menu type. Set to "menu" for a top level menu, or "submenu" to add below an existing item.
// Default: menu
//$args['page_type'] = 'submenu';
// Set the parent menu.
// Default: themes.php
// A list of available parent menus is available at http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
//$args['page_parent'] = 'options_general.php';
// Set a custom page location. This allows you to place your menu where you want in the menu order.
// Must be unique or it will override other items!
// Default: null
//$args['page_position'] = null;
// Set a custom page icon class (used to override the page icon next to heading)
$args['page_icon']         = 'icon-themes';
// Set the icon type. Set to "iconfont" for Elusive Icon, or "image" for traditional.
// Redux no longer ships with standard icons!
// Default: iconfont
//$args['icon_type'] = 'image';
// Disable the panel sections showing as submenu items.
// Default: true
//$args['allow_sub_menu'] = false;
// Set the help sidebar for the options page.
//$args['help_sidebar'] = esc_html__('<p>This is the sidebar content, HTML is allowed.</p>', 'alenastudio');
// Add content after the form.
$args['footer_text']       = "";
// Set footer/credit line.
$args['footer_credit']     = "";
// Declare sections array
$sections                  = array();
// Main Setting -------------------------------------------------------------------------- >
$sections[]                = array(
    'title'      => esc_html__('General Setting', 'alenastudio'),
    'header'     => esc_html__('Welcome to Monalisa Theme Options Framework.', 'alenastudio'),
    'desc'       => esc_html__('Welcome to Monalisa Theme Options Framework.', 'alenastudio'),
    'icon_class' => 'el-icon-large',
    'icon'       => 'el-icon-cog',
    'submenu'    => true,
    'fields'     => array(
        array(
            'id'       => 'as_option_page_width',
            'type'     => 'switch',
            'title'    => esc_html__('Boxed Page', 'alenastudio'),
            'subtitle' => esc_html__('Enable this option to on/off Boxed for web.', 'alenastudio'),
            "default"  => '0',
            'on'       => esc_html__('On', 'alenastudio'),
            'off'      => esc_html__('Off', 'alenastudio'),
        ),
        array(
            'id'       => 'as_option_page_set_width',
            'type'     => 'slider',
            'title'    => esc_html__('Page Width', 'alenastudio'),
            'subtitle' => esc_html__('Max width page is 1700 ', 'alenastudio'),
            "default"  => '1250',
            'min'      => '1170',
            'max'      => '1700',
            'required' => array(
                'as_option_page_width',
                "=",
                1),
        ),
        array(
            'id'       => 'as_page_background',
            'type'     => 'background',
            'output'   => array(
                '.as-fix-body-boxed, .as-fix-body'),
            'title'    => esc_html__('Body Background', 'alenastudio'),
            'subtitle' => esc_html__('Background for Body', 'alenastudio'),
            'default'  => array(
                'background-color'      => 'rgba(255, 255, 255, 0)',
                'background-repeat'     => '',
                'background-attachment' => '',
                'background-position'   => '',
                'background-image'      => '',
                'background-clip'       => '',
                'background-origin'     => '',
                'background-size'       => '',
                'media'                 => array(),
            ),
            'required' => array(
                'as_option_page_width',
                "=",
                1),
        ),
        array(
            'id'       => 'as_page_box_background',
            'type'     => 'background',
            'output'   => array(
                '.as-boxed'),
            'title'    => esc_html__('Boxed Background', 'alenastudio'),
            'subtitle' => esc_html__('Background for Boxed', 'alenastudio'),
            'default'  => array(
                'background-color'      => 'rgba(255, 255, 255, 0)',
                'background-repeat'     => '',
                'background-attachment' => '',
                'background-position'   => '',
                'background-image'      => '',
                'background-clip'       => '',
                'background-origin'     => '',
                'background-size'       => '',
                'media'                 => array(),
            ),
            'required' => array(
                'as_option_page_width',
                "=",
                1),
        ),
        array(
            'id'       => 'as_option_padding_sidenav',
            'type'     => 'spacing',
            'output'   => array(
                '.as-boxed'),
            'mode'     => 'margin',
            'top'      => true, // Disable the top
            'right'    => false, // Disable the right
            'bottom'   => true, // Disable the bottom
            'left'     => false, // Disable the left
            'units'    => 'px', // You can specify a unit value. Possible: px, em, %          
            'title'    => esc_html__('Padding Top, Bottom page Setting (px)', 'alenastudio'),
            'subtitle' => esc_html__('Allow your users to choose the padding you want.', 'alenastudio'),
            'desc'     => esc_html__('', 'alenastudio'),
            'default'  => array(
                'margin-top'    => '0px',
                'margin-bottom' => '0',
            ),
            'required' => array(
                'as_option_page_width',
                "=",
                1),
        ),
        array(
            'id'       => 'as_option_one_page_active',
            'type'     => 'switch',
            'title'    => esc_html__('Active for Setup One Page', 'alenastudio'),
            'subtitle' => esc_html__('Enable this option to on/off Setup One Page layout for web.', 'alenastudio'),
            'default'  => '0',
            'on'       => esc_html__('On', 'alenastudio'),
            'off'      => esc_html__('Off', 'alenastudio'),
        ),
        array(
            'id'       => 'as_option_page_preloading',
            'type'     => 'switch',
            'title'    => esc_html__('Preloading Animation', 'alenastudio'),
            'subtitle' => esc_html__('Enable this option to on/off Preloading Animation for web.', 'alenastudio'),
            "default"  => '1',
            'on'       => esc_html__('On', 'alenastudio'),
            'off'      => esc_html__('Off', 'alenastudio'),
        ),
        array(
            'id'       => 'as_option_scroll_to_top',
            'type'     => 'switch',
            'title'    => esc_html__('Back to Top Button', 'alenastudio'),
            'subtitle' => esc_html__('Enable this option to make on/off Back to Top Button.', 'alenastudio'),
            "default"  => '1',
            'on'       => esc_html__('On', 'alenastudio'),
            'off'      => esc_html__('Off', 'alenastudio'),
        ),
        array(
            'id'       => 'as_option_smooth_scroll',
            'type'     => 'switch',
            'title'    => esc_html__('Smooth Scrolling', 'alenastudio'),
            'subtitle' => esc_html__('Enable this option to make on/off smooth scroll.', 'alenastudio'),
            "default"  => '1',
            'on'       => esc_html__('On', 'alenastudio'),
            'off'      => esc_html__('Off', 'alenastudio'),
        ),
        array(
            'id'       => 'as_option_retina_img',
            'type'     => 'switch',
            'title'    => esc_html__('Retina Ready', 'alenastudio'),
            'subtitle' => esc_html__('Enable this option to make on/off retina image.', 'alenastudio'),
            "default"  => '0',
            'on'       => esc_html__('On', 'alenastudio'),
            'off'      => esc_html__('Off', 'alenastudio'),
        ),
        array(
            'id'       => 'as_custom_css',
            'type'     => 'ace_editor',
            'title'    => esc_html__('CSS Code', 'alenastudio'),
            'subtitle' => esc_html__('Paste your CSS code here.<br>( If you are not a developer, please skip this option! )', 'alenastudio'),
            'mode'     => 'css',
            'theme'    => 'monokai',
            'desc'     => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
            'default'  => "#demo-css-code{\nmargin: 0 auto;\n}"
        ),
        array(
            'id'       => 'as_custom_js',
            'type'     => 'ace_editor',
            'title'    => esc_html__('Javascript Code', 'alenastudio'),
            'subtitle' => esc_html__('Paste your Javascript code here.<br>( If you are not a developer, please skip this option! )', 'alenastudio'),
            'mode'     => 'javascript',
            'theme'    => 'monokai',
            'desc'     => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
            'default'  => ""
        ),
        array(
            'id'       => 'as_google_analytics',
            'type'     => 'textarea',
            'default'  => '',
            'title'    => esc_html__('Add your code google analytics', 'alenastudio'),
            'subtitle' => esc_html__('You can get code and setting google analytics <a href="http://www.google.com/analytics" target="_blank">here</a>', 'alenastudio'),
        ),
    ),
);
// Logo -------------------------------------------------------------------------- >
$sections[]                = array(
    'icon'       => 'el-icon-star-alt',
    'icon_class' => 'el-icon-large',
    'title'      => esc_html__('Logo & Favicon Setting', 'alenastudio'),
    'submenu'    => true,
    'fields'     => array(
        array(
            'id'       => 'as_option_favicon',
            'url'      => true,
            'type'     => 'media',
            'title'    => esc_html__('Your Favicon', 'alenastudio'),
            'default'  => array(
                'url' => get_template_directory_uri() . '/img/favicon.png'),
            'subtitle' => esc_html__('Upload a 16 x 16 pixel .png/.gif/.ico image that will represent your favicon.', 'alenastudio'),
        ),
        array(
            'id'       => 'as_option_custom_logo',
            'url'      => true,
            'type'     => 'media',
            'title'    => esc_html__('Logo', 'alenastudio'),
            'default'  => array(
                'url' => get_template_directory_uri() . '/img/logo-mono.png'),
            'subtitle' => esc_html__('Upload your custom site logo.', 'alenastudio'),
        ),
        array(
            'id'       => 'touch_icon',
            'url'      => true,
            'type'     => 'media',
            'title'    => esc_html__('Apple touch icon', 'alenastudio'),
            'default'  => array(
                'url' => get_template_directory_uri() . '/img/apple-touch-icon.png'),
            'subtitle' => esc_html__('Your touch icon upload here.', 'alenastudio'),
        ),
        array(
            'id'       => 'touch_icon_72',
            'url'      => true,
            'type'     => 'media',
            'title'    => esc_html__('Apple touch icon 72x72', 'alenastudio'),
            'default'  => array(
                'url' => get_template_directory_uri() . '/img/apple-touch-icon-72x72.png'),
            'subtitle' => esc_html__('Your touch icon upload here.', 'alenastudio'),
        ),
        array(
            'id'       => 'touch_icon_144',
            'url'      => true,
            'type'     => 'media',
            'title'    => esc_html__('Apple touch icon 114x114', 'alenastudio'),
            'default'  => array(
                'url' => get_template_directory_uri() . '/img/apple-touch-icon-114x114.png'),
            'subtitle' => esc_html__('Your touch icon upload here.', 'alenastudio'),
        ),
    )
);
// Logo Header -------------------------------------------------------------------------- >
$sections[]                = array(
    'icon'       => 'el-icon-chevron-right',
    'icon_class' => 'el-icon-large',
    'title'      => esc_html__('Setting In Header', 'alenastudio'),
    'submenu'    => true,
    'subsection' => true,
    'fields'     => array(
        array(
            'id'             => 'as_option_logo_width_header',
            'type'           => 'dimensions',
            'height'         => false,
            'units'          => 'px', // You can specify a unit value. Possible: px, em, %
            'units_extended' => false, // Allow users to select any type of unit
            'title'          => esc_html__('Width of Logo (px)', 'alenastudio'),
            'subtitle'       => esc_html__('Ex:170(px)', 'alenastudio'),
            'output'         => array(
                '#as-header-1 .as-logo-main-site img, #as-header-2 .as-logo-main-site img'),
            'default'        => array(
                'width' => 115,
            )
        ),
        array(
            'id'       => 'as_option_padding_logo_header',
            'type'     => 'spacing',
            'output'   => array(
                '#as-header-1 .as-logo-main-site, #as-header-2 .as-logo-main-site , #as-header-3 .as-logo-main-site'),
            'mode'     => 'padding',
            'top'      => true, // Disable the top
            'right'    => true, // Disable the right
            'bottom'   => true, // Disable the bottom
            'left'     => true, // Disable the left
            'units'    => 'px', // You can specify a unit value. Possible: px, em, %
            'title'    => esc_html__('Padding Logo Setting (px)', 'alenastudio'),
            'subtitle' => esc_html__('Allow you to choose the padding you want.', 'alenastudio'),
            'desc'     => esc_html__('', 'alenastudio'),
            'default'  => array(
                'padding-top'    => '0',
                'padding-right'  => '0',
                'padding-bottom' => '0',
                'padding-left'   => '0'
            )
        ),
        array(
            'id'       => 'as_option_margin_logo_header',
            'type'     => 'spacing',
            'output'   => array(
                '#as-header-1 .as-logo-main-site, #as-header-2 .as-logo-main-site , #as-header-3 .as-logo-main-site'),
            'mode'     => 'margin',
            'top'      => true, // Disable the top
            'right'    => true, // Disable the right
            'bottom'   => true, // Disable the bottom
            'left'     => true, // Disable the left
            'units'    => 'px', // You can specify a unit value. Possible: px, em, %
            'title'    => esc_html__('Margin Logo Setting (px)', 'alenastudio'),
            'subtitle' => esc_html__('Allow you to choose the margin you want.', 'alenastudio'),
            'desc'     => esc_html__('', 'alenastudio'),
            'default'  => array(
                'margin-top'    => '0',
                'margin-right'  => '0',
                'margin-bottom' => '0',
                'margin-left'   => '0'
            )
        ),
        array(
            'id'            => 'as_option_position_logo_header',
            'type'          => 'spacing',
            'output'        => array(
                '#as-header-1 .as-logo-main-site, #as-header-2 .as-logo-main-site , #as-header-3 .as-logo-main-site'),
            'mode'          => 'absolute',
            'top'           => true, // Disable the top
            'right'         => true, // Disable the right
            'bottom'        => true, // Disable the bottom
            'left'          => true, // Disable the left
            'units'         => array(
                'px',
                'em'),
            'display_units' => true,
            'title'         => esc_html__('Position Absolute Logo Setting (px)', 'alenastudio'),
            'subtitle'      => esc_html__('Allow your users to choose the spacing or position you want.(top, right, bottom, left)', 'alenastudio'),
            'desc'          => esc_html__('', 'alenastudio'),
            'default'       => array(
                'top'    => '15',
                'right'  => '0',
                'bottom' => '0',
                'left'   => '0',
                'units'  => 'px',
            )
        ),
    )
);
// Logo SideNav -------------------------------------------------------------------------- >
$sections[]                = array(
    'icon'       => 'el-icon-chevron-right',
    'icon_class' => 'el-icon-large',
    'title'      => esc_html__('Setting In SideNav', 'alenastudio'),
    'submenu'    => true,
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'as_option_logo_width_sidenav',
            'type'     => 'dimensions',
            'height'   => false,
            'units'    => array(
                'em',
                'px',
                '%'), // You can specify a unit value. Possible: px, em, %
            'title'    => esc_html__('Width of Logo (px)', 'alenastudio'),
            'subtitle' => esc_html__('Ex:220(px)', 'alenastudio'),
            'output'   => array(
                '#as-header-3 .as-header-3-logo .as-logo-main-site img'),
            'default'  => array(
                'width' => 170,
                'units' => 'px'
            )
        ),
        array(
            'id'       => 'as_option_padding_logo_sidenav',
            'type'     => 'spacing',
            'output'   => array(
                '#as-header-3 .as-header-3-wrapper .as-header-3-logo'),
            'mode'     => 'padding',
            'top'      => true, // Disable the top
            'right'    => true, // Disable the right
            'bottom'   => true, // Disable the bottom
            'left'     => true, // Disable the left
            'units'    => 'px', // You can specify a unit value. Possible: px, em, %
            'title'    => esc_html__('Padding Logo Setting (px)', 'alenastudio'),
            'subtitle' => esc_html__('Allow you to choose the padding you want.', 'alenastudio'),
            'desc'     => esc_html__('', 'alenastudio'),
            'default'  => array(
                'padding-top'    => '50px',
                'padding-right'  => '40px',
                'padding-bottom' => '30px',
                'padding-left'   => '40px'
            )
        ),
        array(
            'id'       => 'as_option_margin_logo_sidenav',
            'type'     => 'spacing',
            'output'   => array(
                '#as-header-3 .as-header-3-wrapper .as-header-3-logo'),
            'mode'     => 'margin',
            'top'      => true, // Disable the top
            'right'    => true, // Disable the right
            'bottom'   => true, // Disable the bottom
            'left'     => true, // Disable the left
            'units'    => 'px', // You can specify a unit value. Possible: px, em, %
            'title'    => esc_html__('Margin Logo Setting (px)', 'alenastudio'),
            'subtitle' => esc_html__('Allow you to choose the margin you want.', 'alenastudio'),
            'desc'     => esc_html__('', 'alenastudio'),
            'default'  => array(
                'margin-top'    => '0',
                'margin-right'  => '0',
                'margin-bottom' => '0',
                'margin-left'   => '0'
            )
        ),
        array(
            'id'            => 'as_option_position_logo_sidenav',
            'type'          => 'spacing',
            'output'        => array(
                '#as-header-3 .as-header-3-logo .as-logo-main-site img'),
            'mode'          => 'absolute',
            'top'           => true, // Disable the top
            'right'         => true, // Disable the right
            'bottom'        => true, // Disable the bottom
            'left'          => true, // Disable the left
            'units'         => array(
                'px',
                'em'),
            'display_units' => true,
            'title'         => esc_html__('Position Absolute Logo Setting (px)', 'alenastudio'),
            'subtitle'      => esc_html__('Allow your users to choose the spacing or position you want.(top, right, bottom, left)', 'alenastudio'),
            'desc'          => esc_html__('', 'alenastudio'),
            'default'       => array(
                'top'    => 0,
                'right'  => 0,
                'bottom' => 0,
                'left'   => 0,
                'units'  => 'px',
            )
        ),
    )
);
// Typography -------------------------------------------------------------------------- >
$sections[]                = array(
    'title'      => esc_html__('Typography Setting', 'alenastudio'),
    'header'     => '',
    'desc'       => '',
    'icon_class' => 'el-icon-large',
    'icon'       => 'el-icon-font',
    'submenu'    => true,
    'fields'     => array(
        array(
            'id'             => 'as_option_body_font',
            'type'           => 'typography',
            'title'          => esc_html__('Body Font', 'alenastudio'),
            'compiler'       => false,
            'google'         => true,
            'font-backup'    => false,
            'font-style'     => true,
            'subsets'        => true,
            'font-size'      => true,
            'line-height'    => false,
            'word-spacing'   => false,
            'letter-spacing' => false,
            'text-align'     => false,
            'color'          => true,
            'preview'        => true,
            'output'         => array(
                'body'),
            'units'          => 'px',
            'subtitle'       => esc_html__('Select your custom font options for your main body font.', 'alenastudio'),
            'default'        => array(
                'color'       => '#9297a3',
                'font-family' => 'Roboto Slab',
                'font-size'   => '14px',
                'font-weight' => '400',
            )
        ),
        array(
            'id'             => 'as_option_form_font',
            'type'           => 'typography',
            'title'          => esc_html__('Form Font', 'alenastudio'),
            'compiler'       => false,
            'google'         => true,
            'font-backup'    => false,
            'font-style'     => true,
            'subsets'        => true,
            'font-size'      => true,
            'line-height'    => false,
            'word-spacing'   => false,
            'letter-spacing' => false,
            'text-align'     => false,
            'color'          => true,
            'preview'        => true,
            'output'         => array(
                'input[type="text"], input[type="email"], input[type="url"], input[type="password"], input[type="search"], textarea'),
            'units'          => 'px',
            'subtitle'       => esc_html__('Select your custom font options for your form ( textform, password form, textarea...).', 'alenastudio'),
            'default'        => array(
                'color'       => '#9297a3',
                'font-family' => 'Roboto Slab',
                'font-size'   => '14px',
                'font-weight' => '400',
            )
        ),
        array(
            'id'             => 'as_option_heading_font',
            'type'           => 'typography',
            'title'          => esc_html__('Heading Font', 'alenastudio'),
            'compiler'       => false,
            'google'         => true,
            'font-backup'    => false,
            'font-style'     => false,
            'subsets'        => true,
            'font-size'      => false,
            'line-height'    => false,
            'word-spacing'   => false,
            'text-align'     => false,
            'letter-spacing' => false,
            'color'          => true,
            'preview'        => true,
            'output'         => array(
                'h1, h2, h3, h4, h5, h6'),
            'units'          => 'px',
            'subtitle'       => esc_html__('Select your custom font options for heading font (H1, H2, H3, H4, H5, H6).', 'alenastudio'),
            'default'        => array(
                'color'       => '#272727',
                'font-family' => 'Montserrat',
                'font-weight' => '700',
            )
        ),
    ),
);
// Styling -------------------------------------------------------------------------- >
$sections[]                = array(
    'icon'       => 'el-icon-brush',
    'icon_class' => 'el-icon-large',
    'title'      => esc_html__('Styling Color', 'alenastudio'),
    'submenu'    => true,
    'fields'     => array(
        array(
            'id'          => 'as_option_main_color_1',
            'transparent' => false,
            'type'        => 'color',
            'title'       => esc_html__('Main Color', 'alenastudio'),
            'default'     => '#648ad7',
            'subtitle'    => esc_html__('Select your custom main color.', 'alenastudio'),
        ),
        array(
            'id'          => 'as_option_main_color_2',
            'transparent' => false,
            'type'        => 'color',
            'title'       => esc_html__('Main Color 2', 'alenastudio'),
            'default'     => '#648ad7',
            'subtitle'    => esc_html__('Select your custom main color.', 'alenastudio'),
        ),
        array(
            'id'          => 'as_option_link_color',
            'transparent' => false,
            'type'        => 'color',
            'title'       => esc_html__('Link Color', 'alenastudio'),
            'default'     => '#648ad7',
            'subtitle'    => esc_html__('Select your custom link color.', 'alenastudio'),
        ),
        array(
            'id'          => 'as_option_link_color_hover',
            'transparent' => false,
            'type'        => 'color',
            'title'       => esc_html__('Link Color Hover', 'alenastudio'),
            'default'     => '#648ad7',
            'subtitle'    => esc_html__('Select your custom link color.', 'alenastudio'),
        ),
    )
);
// Header -------------------------------------------------------------------------- >
$sections[]                = array(
    'icon'       => 'el-icon-tasks',
    'icon_class' => 'el-icon-large',
    'title'      => esc_html__('Header Setting', 'alenastudio'),
    'submenu'    => true,
    'fields'     => array(
        array(
            'id'       => 'as_option_check_header',
            'type'     => 'switch',
            'title'    => esc_html__('Show / Hide Header', 'alenastudio'),
            'subtitle' => esc_html__('Enable this option to make on/off header.', 'alenastudio'),
            'default'  => '1',
        ),
        array(
            'id'       => 'as_option_custom_header',
            'type'     => 'image_select',
            'compiler' => true,
            'title'    => esc_html__('Choose Type', 'alenastudio'),
            'subtitle' => esc_html__('Select type Header.', 'alenastudio'),
            'options'  => array(
                '1' => array(
                    'alt' => 'Header 1',
                    'img' => get_template_directory_uri() . '/img/admin-core-img/header-1.jpg'
                ),
                '2' => array(
                    'alt' => 'Header 2',
                    'img' => get_template_directory_uri() . '/img/admin-core-img/header-2.jpg'
                ),
                '3' => array(
                    'alt' => 'Header 3',
                    'img' => get_template_directory_uri() . '/img/admin-core-img/header-3.jpg'
                ),
            ),
            'default'  => '1',
            'required' => array(
                'as_option_check_header',
                "=",
                1),
            'desc'     => esc_html__('', 'alenastudio'),
        ),
    )
);
// Header Option 1 -------------------------------------------------------------------------- >
$sections[]                = array(
    'icon'       => 'el-icon-chevron-right',
    'icon_class' => 'el-icon-large',
    'title'      => esc_html__('Header Option 1', 'alenastudio'),
    'desc'       => esc_html__('Note*: This option header is not style for navigation, you can setting it in option "Appearance > Mega Main Menu " ( Main Mega Menu ) ', 'alenastudio'),
    'submenu'    => true,
    'subsection' => true,
    'fields'     => array(
	    array(
            'id'       => 'as_option_radio_type_header_1',
		    'type'     => 'radio',
		    'title'    => __('Type Header', 'alenastudio'), 
		    'subtitle' => __('', 'alenastudio'),
		    'desc'     => __('Choose type for header style', 'alenastudio'),
		    //Must provide key => value pairs for radio options
		    'options'  => array(
		        '1' => 'Normal', 
		        '2' => 'Absolute',
		    ),
		    'default' => '2'
        ),
        array(
            'id'       => 'as_option_check_sticky_menu_header_1',
            'type'     => 'switch',
            'title'    => esc_html__('On / Off Sticky Menu', 'alenastudio'),
            'subtitle' => esc_html__('Enable this option to make on/off Sticky Menu.', 'alenastudio'),
            'default'  => '0',
        ),
        array(
            'id'       => 'as_option_background_sticky_header_1',
            'type'     => 'background',
            'output'   => array(
                '#as-header-1 #as-menu-header-1.as-bg-sticky'),
            'title'    => esc_html__('Sticky Menu Background', 'alenastudio'),
            'subtitle' => esc_html__('Sticky menu background when scroll.', 'alenastudio'),
            'default'  => array(
                'background-color'      => 'rgba(0, 0, 0, 0.8)',
                'background-repeat'     => '',
                'background-attachment' => '',
                'background-position'   => '',
                'background-image'      => '',
                'background-clip'       => '',
                'background-origin'     => '',
                'background-size'       => '',
                'media'                 => array(),
            ),
            'required' => array(
                'as_option_check_sticky_menu_header_1',
                "=",
                1),
        ),
        array(
            'id'       => 'as_option_check_top_header_1',
            'type'     => 'switch',
            'title'    => esc_html__('Show / Hide top header', 'alenastudio'),
            'subtitle' => esc_html__('Enable this option to make on/off top header.', 'alenastudio'),
            'default'  => '1',
        ),
        array(
            'id'       => 'as_option_background_top_header_1',
            'type'     => 'background',
            'output'   => array(
                '#as-header-1 .as-top-header-wrapper'),
            'title'    => esc_html__('Top Header Background', 'alenastudio'),
            'subtitle' => esc_html__('Top header background with image, color, etc.', 'alenastudio'),
            'default'  => array(
                'background-color'      => 'rgba(255, 255, 255, 0.2)',
                'background-repeat'     => '',
                'background-attachment' => '',
                'background-position'   => '',
                'background-image'      => '',
                'background-clip'       => '',
                'background-origin'     => '',
                'background-size'       => '',
                'media'                 => array(),
            ),
            'required' => array(
                'as_option_check_top_header_1',
                "=",
                1),
        ),
        array(
            'id'       => 'as_option_check_icon_social_header_1',
            'type'     => 'switch',
            'title'    => esc_html__('Show / Hide Icon Social', 'alenastudio'),
            'subtitle' => esc_html__('Enable this option to make on/off Icon Social.', 'alenastudio'),
            'default'  => '1',
            'required' => array(
                'as_option_check_top_header_1',
                "=",
                1),
        ),
        array(
            'id'             => 'as_option_email_top_header_1',
            'type'           => 'text',
            'title'          => esc_html__('Your Email', 'alenastudio'),
            'subtitle'       => esc_html__('Enter your email on top header.', 'alenastudio'),
            'default'        => 'hello@monalisa.com',
            'editor_options' => '',
            'validate'       => 'email',
            'required'       => array(
                'as_option_check_top_header_1',
                "=",
                1),
        ),
        array(
            'id'             => 'as_option_address_top_header_1',
            'type'           => 'text',
            'title'          => esc_html__('Your Address', 'alenastudio'),
            'subtitle'       => esc_html__('Enter your address on top header.', 'alenastudio'),
            'default'        => '79 District 1, HCM City, Vietnam',
            'editor_options' => '',
            'required'       => array(
                'as_option_check_top_header_1',
                "=",
                1),
        ),
        array(
            'id'             => 'as_option_phone_top_header_1',
            'type'           => 'text',
            'title'          => esc_html__('Your Phone', 'alenastudio'),
            'subtitle'       => esc_html__('Enter your phone on top header.', 'alenastudio'),
            'default'        => '(+84) 123 456 789',
            'editor_options' => '',
            'required'       => array(
                'as_option_check_top_header_1',
                "=",
                1),
        ),
        array(
            'id'             => 'as_option_typo_top_header_1',
            'type'           => 'typography',
            'title'          => esc_html__('Custom Font Top Header', 'alenastudio'),
            'compiler'       => false,
            'google'         => true,
            'font-backup'    => false,
            'font-style'     => false,
            'subsets'        => true,
            'font-size'      => true,
            'line-height'    => false,
            'word-spacing'   => false,
            'text-align'     => false,
            'letter-spacing' => false,
            'color'          => true,
            'preview'        => true,
            'output'         => array(
                '#as-header-1 .as-top-header-wrapper .as-info-top-header li'),
            'units'          => 'px',
            'subtitle'       => esc_html__('Select your custom font options for top header.', 'alenastudio'),
            'default'        => array(
                'color'       => '#ffffff',
                'font-family' => 'Roboto Slab',
                'font-size'   => '12',
                'font-weight' => '600',
            ),
            'required'       => array(
                'as_option_check_top_header_1',
                "=",
                1),
        ),
        array(
            'id'       => 'as_option_background_bottom_header_1',
            'type'     => 'background',
            'output'   => array(
                '#as-header-1 #as-menu-header-1'),
            'title'    => esc_html__('Bottom Header Background', 'alenastudio'),
            'subtitle' => esc_html__('Bottom header background with image, color, etc.', 'alenastudio'),
            'default'  => array(
                'background-color'      => 'transparent',
                'background-repeat'     => '',
                'background-attachment' => '',
                'background-position'   => '',
                'background-image'      => '',
                'background-clip'       => '',
                'background-origin'     => '',
                'background-size'       => '',
                'media'                 => array(),
            ),
        ),
        array(
            'id'          => 'as_option_color_icon_bottom_header_1',
            'transparent' => false,
            'type'        => 'color',
            'title'       => esc_html__('Icon Color', 'alenastudio'),
            'default'     => '#fff',
            'subtitle'    => esc_html__('Select your color for icon Shop & Search.', 'alenastudio'),
        ),
        array(
            'id'       => 'as_option_check_logo_header_1',
            'type'     => 'switch',
            'title'    => esc_html__('Show / Hide Logo Header', 'alenastudio'),
            'subtitle' => esc_html__('Enable this option to make on/off Logo Header.', 'alenastudio'),
            'default'  => '1',
        ),
        array(
            'id'       => 'as_option_check_icon_shop_header_1',
            'type'     => 'switch',
            'title'    => esc_html__('Show / Hide Icon Shop', 'alenastudio'),
            'subtitle' => esc_html__('Enable this option to make on/off Icon Shop.', 'alenastudio'),
            'default'  => '1',
        ),
        array(
            'id'       => 'as_option_check_icon_search_header_1',
            'type'     => 'switch',
            'title'    => esc_html__('Show / Hide Icon Search', 'alenastudio'),
            'subtitle' => esc_html__('Enable this option to make on/off Icon Search.', 'alenastudio'),
            'default'  => '1',
        ),
    )
);
// Header Option 2 -------------------------------------------------------------------------- >
$sections[]                = array(
    'icon'       => 'el-icon-chevron-right',
    'icon_class' => 'el-icon-large',
    'title'      => esc_html__('Header Option 2', 'alenastudio'),
    'desc'       => esc_html__('', 'alenastudio'),
    'submenu'    => true,
    'subsection' => true,
    'fields'     => array(
        array(
            'id'             => 'as_option_menu_nav_header_2',
            'type'           => 'typography',
            'title'          => esc_html__('Menu Font', 'alenastudio'),
            'compiler'       => false,
            'google'         => true,
            'font-backup'    => false,
            'font-style'     => false,
            'subsets'        => false,
            'font-size'      => true,
            'line-height'    => false,
            'word-spacing'   => false,
            'text-align'     => false,
            'text-transform' => true,
            'letter-spacing' => true,
            'color'          => true,
            'preview'        => true,
            'output'         => array(
                '#as-header-2 .as-nav-wrapper .as-primary-nav li a'),
            'units'          => 'px',
            'subtitle'       => esc_html__('Select your custom font options for your main navigation menu.', 'alenastudio'),
            'default'        => array(
                'color'          => '#212121',
                'font-family'    => 'Josefin Sans',
                'font-size'      => '32',
                'font-weight'    => '700',
                'letter-spacing' => '3',
                'text-transform' => 'uppercase',
            )
        ),
        array(
            'id'             => 'as_option_sub_menu_nav_header_2',
            'type'           => 'typography',
            'title'          => esc_html__('Menu Font ( Sub Menu )', 'alenastudio'),
            'compiler'       => false,
            'google'         => true,
            'font-backup'    => false,
            'font-style'     => false,
            'subsets'        => false,
            'font-size'      => true,
            'line-height'    => false,
            'word-spacing'   => false,
            'text-align'     => false,
            'text-transform' => true,
            'letter-spacing' => true,
            'color'          => true,
            'preview'        => true,
            'output'         => array(
                '#as-header-2 .as-nav-wrapper .as-primary-nav li ul.sub-menu > li > a'),
            'units'          => 'px',
            'subtitle'       => esc_html__('Select your custom font options for your sub menu.', 'alenastudio'),
            'default'        => array(
                'color'          => '#212121',
                'font-family'    => 'Josefin Sans',
                'font-size'      => '18',
                'font-weight'    => '700',
                'letter-spacing' => '0',
                'text-transform' => 'uppercase',
            )
        ),
    )
);
// Header Option 3 -------------------------------------------------------------------------- >
$sections[]                = array(
    'icon'       => 'el-icon-chevron-right',
    'icon_class' => 'el-icon-large',
    'title'      => esc_html__('Header Option 3', 'alenastudio'),
    'desc'       => esc_html__('', 'alenastudio'),
    'submenu'    => true,
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'as_option_background_header_3',
            'type'     => 'background',
            'output'   => array(
                '#as-header-3'),
            'title'    => esc_html__('Background Color', 'alenastudio'),
            'subtitle' => esc_html__('Background with image, color, etc.', 'alenastudio'),
            'default'  => array(
                'background-color'      => 'rgba(255, 255, 255, 1)',
                'background-repeat'     => '',
                'background-attachment' => '',
                'background-position'   => '',
                'background-image'      => '',
                'background-clip'       => '',
                'background-origin'     => '',
                'background-size'       => '',
                'media'                 => array(),
            ),
        ),
        array(
            'id'       => 'as_option_check_logo_header_3',
            'type'     => 'switch',
            'title'    => esc_html__('Show / Hide Logo Header', 'alenastudio'),
            'subtitle' => esc_html__('Enable this option to make on/off Logo Header.', 'alenastudio'),
            'default'  => '1',
        ),
        array(
            'id'             => 'as_option_font_menu_nav_header_3',
            'type'           => 'typography',
            'title'          => esc_html__('Menu Font', 'alenastudio'),
            'compiler'       => false,
            'google'         => true,
            'font-backup'    => false,
            'font-style'     => false,
            'subsets'        => false,
            'font-size'      => true,
            'line-height'    => false,
            'word-spacing'   => false,
            'text-align'     => false,
            'text-transform' => true,
            'letter-spacing' => true,
            'color'          => true,
            'preview'        => true,
            'output'         => array(
                '#as-header-3 .as-header-3-wrapper #mega_main_menu.as_sidebar_menu > .menu_holder > .menu_inner > ul > li > .item_link > .link_content > .link_text'),
            'units'          => 'px',
            'subtitle'       => esc_html__('Select your custom font options for your main navigation menu.', 'alenastudio'),
            'default'        => array(
                'color'          => '#212121',
                'font-family'    => 'Montserrat',
                'font-size'      => '13',
                'font-weight'    => '700',
                'letter-spacing' => '2',
                'text-transform' => 'uppercase',
            )
        ),
        array(
            'id'       => 'as_option_padding_menu_nav_header_3',
            'type'     => 'spacing',
            'output'   => array(
                '#as-header-3 .as-header-3-wrapper #mega_main_menu > .menu_holder > .menu_inner > ul > li > .item_link'),
            'mode'     => 'padding',
            'top'      => true, // Disable the top
            'right'    => true, // Disable the right
            'bottom'   => true, // Disable the bottom
            'left'     => true, // Disable the left
            'units'    => 'px', // You can specify a unit value. Possible: px, em, %
            'title'    => esc_html__('Padding Logo Setting (px)', 'alenastudio'),
            'subtitle' => esc_html__('Allow you to choose the padding you want.', 'alenastudio'),
            'desc'     => esc_html__('', 'alenastudio'),
            'default'  => array(
                'padding-top'    => '0',
                'padding-right'  => '40px',
                'padding-bottom' => '0',
                'padding-left'   => '40px'
            )
        ),
        array(
            'id'             => 'as_option_sub_menu_nav_header_3',
            'type'           => 'typography',
            'title'          => esc_html__('Menu Font ( Sub Menu )', 'alenastudio'),
            'compiler'       => false,
            'google'         => true,
            'font-backup'    => false,
            'font-style'     => false,
            'subsets'        => false,
            'font-size'      => true,
            'line-height'    => false,
            'word-spacing'   => false,
            'text-align'     => false,
            'text-transform' => true,
            'letter-spacing' => true,
            'color'          => true,
            'preview'        => true,
            'output'         => array(
                '#as-header-3 .as-header-3-wrapper #mega_main_menu li.default_dropdown > .mega_dropdown > li > .item_link, #as-header-3 .as-header-3-wrapper #mega_main_menu li.widgets_dropdown .mega_dropdown > li > .item_link, #as-header-3 .as-header-3-wrapper #mega_main_menu li.multicolumn_dropdown .mega_dropdown > li > .item_link'),
            'units'          => 'px',
            'subtitle'       => esc_html__('Select your custom font options for your sub menu.', 'alenastudio'),
            'default'        => array(
                'color'         => '#212121',
                'font-family'    => 'Montserrat',
                'font-size'      => '13',
                'font-weight'    => '400',
                'letter-spacing' => '0',
                'text-transform' => 'uppercase',
            )
        ),
        array(
            'id'       => 'as_option_padding_copyright_header_3',
            'type'     => 'spacing',
            'output'   => array(
                '#as-header-3 .as-bottom-header-3'),
            'mode'     => 'padding',
            'top'      => true, // Disable the top
            'right'    => true, // Disable the right
            'bottom'   => true, // Disable the bottom
            'left'     => true, // Disable the left
            'units'    => 'px', // You can specify a unit value. Possible: px, em, %
            'title'    => __('Padding List Social Setting (px)', 'alenastudio'),
            'subtitle' => __('Allow you to choose the padding you want.', 'alenastudio'),
            'desc'     => __('', 'alenastudio'),
            'default'  => array(
                'padding-top'    => '0',
                'padding-right'  => '20px',
                'padding-bottom' => '0',
                'padding-left'   => '40px'
            ),
            'required' => array(
                'as_option_check_list_social_header_3',
                "=",
                1),
        ),
        array(
            'id'       => 'as_option_check_copyright_header_3',
            'type'     => 'switch',
            'title'    => __('Show / Hide Text Copyright', 'alenastudio'),
            'subtitle' => __('Enable this option to make on/off Text Copyright.', 'alenastudio'),
            'default'  => '1',
        ),
        array(
            'id'             => 'as_option_copyright_header_3',
            'type'           => 'text',
            'title'          => __('Copyright Header', 'alenastudio'),
            'subtitle'       => __('Enter your copyright in header.', 'alenastudio'),
            'default'        => '© Copyright 2015 by <a href="http://themeforest.net/user/alenastudio" class="as-color-main" target="_blank">ALENA STUDIO</a> ',
            'editor_options' => '',
            'required'       => array(
                'as_option_check_copyright_header_3',
                "=",
                1),
        ),
        array(
            'id'             => 'as_option_font_copyright_header_3',
            'type'           => 'typography',
            'title'          => esc_html__('Copyright Font', 'alenastudio'),
            'compiler'       => false,
            'google'         => true,
            'font-backup'    => false,
            'font-style'     => false,
            'subsets'        => false,
            'font-size'      => true,
            'line-height'    => false,
            'word-spacing'   => false,
            'text-align'     => false,
            'text-transform' => true,
            'letter-spacing' => true,
            'color'          => true,
            'preview'        => true,
            'output'         => array(
                '#as-header-3 .as-header-3-wrapper .as-header-3-coppyright'),
            'units'          => 'px',
            'subtitle'       => esc_html__('Select your custom font options for your copyright header.', 'alenastudio'),
            'default'        => array(
                'color'          => '#212121',
                'font-family'    => 'Roboto Slab',
                'font-size'      => '10',
                'font-weight'    => '700',
                'letter-spacing' => '0',
                'text-transform' => 'uppercase',
            )
        ),
        array(
            'id'       => 'as_option_check_list_social_header_3',
            'type'     => 'switch',
            'title'    => __('Show / Hide List Social', 'alenastudio'),
            'subtitle' => __('Enable this option to make on/off list social.', 'alenastudio'),
            'default'  => '1',
        ),
    )
);
// Breadcrumb -------------------------------------------------------------------------- >
$sections[]                = array(
    'icon'       => 'el-icon-braille',
    'icon_class' => 'el-icon-large',
    'title'      => esc_html__('Breadcrumb', 'alenastudio'),
    'submenu'    => true,
    'fields'     => array(
        array(
            'id'       => 'as_option_breadcrumb_style',
            'type'     => 'switch',
            'title'    => esc_html__('Hide / Show The Breadcrumb', 'alenastudio'),
            'subtitle' => esc_html__('Enable this option to make on/off breadcrumb.', 'alenastudio'),
            'default'  => '1',
        ),
        array(
            'id'       => 'as_option_breadcrumb_link',
            'type'     => 'switch',
            'title'    => esc_html__('Hide / Show The Breadcrumb Link', 'alenastudio'),
            'subtitle' => esc_html__('Enable this option to make on/off breadcrumb.', 'alenastudio'),
            'default'  => '1',
        ),
        array(
            'id'       => 'as_option_padding_breadcrumb',
            'type'     => 'spacing',
            'output'   => array(
                '#as-breadcrumb-wrapper'),
            'mode'     => 'padding',
            'top'      => true, // Enable the top
            'right'    => true, // Enable the right
            'bottom'   => true, // Enable the bottom
            'left'     => true, // Enable the left
            'units'    => 'px', // You can specify a unit value. Possible: px, em, %
            //'units_extended'=> 'true',    // Allow users to select any type of unit
            //'display_units' => 'false',   // Set to false to hide the units if the units are specified
            'title'    => esc_html__('Padding Breadcrumb Setting (px) ', 'alenastudio'),
            'subtitle' => esc_html__('Allow your users to choose the spacing or padding you want.(top, right, bottom, left)', 'alenastudio'),
            'desc'     => esc_html__('', 'alenastudio'),
            'default'  => array(
                'padding-top'    => '150px',
                'padding-right'  => '0',
                'padding-bottom' => '50px',
                'padding-left'   => '0',
            ),
            'required' => array(
                'as_option_breadcrumb_style',
                "=",
                1),
        ),
        array(
            'id'       => 'as_option_margin_breadcrumb',
            'type'     => 'spacing',
            'output'   => array(
                '#as-breadcrumb-wrapper'),
            'mode'     => 'margin',
            'top'      => true, // Enable the top
            'right'    => true, // Enable the right
            'bottom'   => true, // Enable the bottom
            'left'     => true, // Enable the left
            'units'    => 'px', // You can specify a unit value. Possible: px, em, %
            //'units_extended'=> 'true',    // Allow users to select any type of unit
            //'display_units' => 'false',   // Set to false to hide the units if the units are specified
            'title'    => esc_html__('Margin Breadcrumb Setting (px) ', 'alenastudio'),
            'subtitle' => esc_html__('Allow your users to choose the spacing or margin you want.(top, right, bottom, left)', 'alenastudio'),
            'desc'     => esc_html__('', 'alenastudio'),
            'default'  => array(
                'margin-top'    => '0',
                'margin-right'  => '0',
                'margin-bottom' => '0',
                'margin-left'   => '0',
            ),
            'required' => array(
                'as_option_breadcrumb_style',
                "=",
                1),
        ),
        array(
            'id'       => 'as_option_breadcrumb_background',
            'type'     => 'background',
            'output'   => array(
                '#as-breadcrumb-wrapper'),
            'title'    => esc_html__('Background Breadcrumb Setting', 'alenastudio'),
            'subtitle' => esc_html__('Setting background Breadcrumb with image, color, etc.', 'alenastudio'),
            'default'  => array(
                'background-color'      => '#eeeeee',
                'background-repeat'     => 'repeat',
                'background-attachment' => '',
                'background-position'   => '',
                'background-image'      => '',
                'background-clip'       => '',
                'background-origin'     => '',
                'background-size'       => '',
                'media'                 => array(),
            ),
            'required' => array(
                'as_option_breadcrumb_style',
                "=",
                1),
        ),
        array(
            'id'             => 'as_option_breadcrumb_title_font',
            'type'           => 'typography',
            'title'          => esc_html__('Style title of breadcrumb.', 'alenastudio'),
            'compiler'       => false,
            'google'         => true,
            'font-backup'    => false,
            'font-style'     => false,
            'subsets'        => true,
            'font-size'      => true,
            'line-height'    => false,
            'word-spacing'   => false,
            'text-align'     => false,
            'letter-spacing' => true,
            'text-transform' => true,
            'color'          => true,
            'preview'        => true,
            'output'         => array(
                '#as-breadcrumb-wrapper .as-page-title'),
            'units'          => 'px',
            'subtitle'       => esc_html__('Select your custom font options for your title breadcrumb.', 'alenastudio'),
            'default'        => array(
                'color'          => '#272727',
                'font-family'    => 'Roboto Slab',
                'font-size'      => '40px',
                'font-weight'    => '400',
                'text-transform' => '',
                'letter-spacing' => '2',
            ),
            'required'       => array(
                'as_option_breadcrumb_style',
                "=",
                1),
        ),
        array(
            'id'             => 'as_option_breadcrumb_sub_link',
            'type'           => 'typography',
            'title'          => esc_html__('Style link of breadcrumb.', 'alenastudio'),
            'compiler'       => false,
            'google'         => true,
            'font-backup'    => false,
            'font-style'     => false,
            'subsets'        => true,
            'font-size'      => true,
            'line-height'    => false,
            'word-spacing'   => false,
            'text-align'     => false,
            'letter-spacing' => true,
            'color'          => true,
            'text-transform' => true,
            'preview'        => true,
            'output'         => array(
                '#as-breadcrumb-wrapper .as-breadcrumb-link li, #as-breadcrumb-wrapper .as-breadcrumb-link li a'),
            'units'          => 'px',
            'subtitle'       => esc_html__('Select your custom font options for your sub link breadcrumb.', 'alenastudio'),
            'default'        => array(
                'color'          => '#272727',
                'font-family'    => 'Roboto Slab',
                'font-size'      => '14px',
                'font-weight'    => '500',
                'text-transform' => 'Uppercase',
                'letter-spacing' => '',
            ),
            'required'       => array(
                'as_option_breadcrumb_style',
                "=",
                1),
        ),
    )
);
// Background -------------------------------------------------------------------------- >
/*
  $sections[] = array(
  'title' => esc_html__('Background Setting', 'alenastudio'),
  'header' => '',
  'desc' => '',
  'icon_class' => 'el-icon-large',
  'icon' => 'el-icon-picture',
  'submenu' => true,
  'fields' => array(
  array(
  'id'       => 'as_option_check_box_layout',
  'type'     => 'switch',
  'title'    => __( 'Box Layout', 'alenastudio' ),
  'subtitle' => __( 'Enable this option to make on/off Box Layout.', 'alenastudio' ),
  'default'  => '0',
  ),
  array(
  'id'       => 'as_option_background_style',
  'type'     => 'background',
  'output'   => array( 'body' ),
  'title'    => __( 'Background Setting', 'alenastudio' ),
  'subtitle' => __( 'Setting background body with image, color, etc.', 'alenastudio' ),
  'required' => array( 'as_option_check_box_layout', "=", 1 ),
  ),
  array(
  'id'       => 'as_option_background_box_content_style',
  'type'     => 'background',
  'output'   => array( '.as-content-wrapper.as-box-layout-content' ),
  'title'    => __( 'Background Box Content Setting', 'alenastudio' ),
  'subtitle' => __( 'Setting background box content with image, color, etc.', 'alenastudio' ),
  'required' => array( 'as_option_check_box_layout', "=", 1 ),
  ),
  )
  );
 */
// WooCommerce -------------------------------------------------------------------------- >
if (class_exists('Woocommerce')) {
    $sections[] = array(
        'icon'       => 'el-icon-shopping-cart',
        'icon_class' => 'el-icon-large',
        'title'      => esc_html__('WooCommerce', 'alenastudio'),
        'submenu'    => true,
        'fields'     => array(
            array(
                'id'      => 'woo_listing_column_number',
                'type'    => 'radio',
                'title'   => esc_html__('Product Listing Column No', 'alenastudio'),
                'options' => array(
                    '1' => esc_html__('1 Column', 'alenastudio'),
                    '2' => esc_html__('2 Columns', 'alenastudio'),
                    '3' => esc_html__('3 Columns', 'alenastudio'),
                    '4' => esc_html__('4 Columns', 'alenastudio'),
                ),
                'default' => '3'
            ),
            array(
                'id'       => 'as_woo_item_per_page',
                'type'     => 'spinner',
                'title'    => esc_html__('Product Per Page', 'alenastudio'),
                'subtitle' => esc_html__('Setting item per page.', 'alenastudio'),
                'desc'     => esc_html__('', 'alenastudio'),
                'default'  => '8',
                'min'      => '0',
                'step'     => '1',
                'max'      => '100',
            ),
            array(
                'id'      => 'as_woo_listing_sidebar_position',
                'type'    => 'radio',
                'title'   => esc_html__('Product Listing Sidebar Position', 'alenastudio'),
                'options' => array(
                    'disable' => esc_html__('No Sidebar', 'alenastudio'),
                    'left'    => esc_html__('Left', 'alenastudio'),
                    'right'   => esc_html__('Right', 'alenastudio')
                ),
                'default' => 'right'
            ),
        )
    );
}
// Blog -------------------------------------------------------------------------- >
$sections[] = array(
    'icon'       => 'el-icon-edit',
    'icon_class' => 'el-icon-large',
    'title'      => esc_html__('Blog Setting', 'alenastudio'),
    'desc'       => esc_html__('*NOTE: This is option support for Blog default of theme.', 'alenastudio'),
    'submenu'    => true,
    'fields'     => array(
        array(
            'id'       => 'as_blog_position_sidebar',
            'type'     => 'image_select',
            'compiler' => true,
            'title'    => esc_html__('Choose Position SideBar', 'alenastudio'),
            'subtitle' => esc_html__('Select type SideBar alignment.', 'alenastudio'),
            'options'  => array(
                'left'      => array(
                    'alt' => 'Layout With Left SideBar',
                    'img' => get_template_directory_uri() . '/img/admin-core-img/sidebar-left.png'
                ),
                'right'     => array(
                    'alt' => 'Layout With Right SideBar',
                    'img' => get_template_directory_uri() . '/img/admin-core-img/sidebar-right.png'
                ),
                'fullwidth' => array(
                    'alt' => 'Layout None SideBar',
                    'img' => get_template_directory_uri() . '/img/admin-core-img/fullwidth.png'
                )
            ),
            'default'  => 'right',
            'indent'   => true, // Indent all options below until the next 'section' option is set.
        ),
        array(
            'id'       => 'as_blog_width_img',
            'type'     => 'text',
            'title'    => esc_html__('Crop size of image blog (width)', 'alenastudio'),
            'desc'     => "",
            'subtitle' => esc_html__('Set size width for img (px)', 'alenastudio'),
            'default'  => '800',
            'class'    => 'small-text',
        ),
        array(
            'id'       => 'as_blog_height_img',
            'type'     => 'text',
            'title'    => esc_html__('Crop size of image blog (height)', 'alenastudio'),
            'desc'     => "",
            'subtitle' => esc_html__('Set size height for img (px)', 'alenastudio'),
            'default'  => '350',
            'class'    => 'small-text',
        ),
        array(
            'id'             => 'as_blog_btn_date_font',
            'type'           => 'typography',
            'title'          => esc_html__('Text color date blog.', 'alenastudio'),
            'compiler'       => false,
            'google'         => true,
            'font-backup'    => false,
            'font-style'     => false,
            'subsets'        => true,
            'font-size'      => false,
            'line-height'    => true,
            'word-spacing'   => false,
            'text-align'     => false,
            'letter-spacing' => false,
            'color'          => true,
            'preview'        => true,
            'output'         => array(
                '#as-page-blog-classic .as-date-format-wrapper .as-post-date'),
            'units'          => 'px',
            'subtitle'       => esc_html__('Select your custom font options for your title blog.', 'alenastudio'),
            'default'        => array(
                'color'       => '#aaa',
                'font-family' => 'Montserrat',
                'font-weight' => '700',
                'line-height' => '28px',
            )
        ),
        array(
            'id'             => 'as_blog_btn_title_font',
            'type'           => 'typography',
            'title'          => esc_html__('Text color title blog.', 'alenastudio'),
            'compiler'       => false,
            'google'         => true,
            'font-backup'    => false,
            'font-style'     => false,
            'subsets'        => true,
            'font-size'      => true,
            'line-height'    => false,
            'word-spacing'   => false,
            'text-align'     => false,
            'letter-spacing' => false,
            'color'          => true,
            'preview'        => true,
            'output'         => array(
                '#as-page-blog-classic .as-title-meta-wrapper .as-post-title a'),
            'units'          => 'px',
            'subtitle'       => esc_html__('Select your custom font options for your title blog.', 'alenastudio'),
            'default'        => array(
                'color'       => '#212121',
                'font-family' => 'Montserrat',
                'font-size'   => '30px',
                'font-weight' => '700',
            )
        ),
        array(
            'id'             => 'as_blog_content_font',
            'type'           => 'typography',
            'title'          => esc_html__('Text color content blog.', 'alenastudio'),
            'compiler'       => false,
            'google'         => true,
            'font-backup'    => false,
            'font-style'     => false,
            'subsets'        => true,
            'font-size'      => true,
            'line-height'    => true,
            'word-spacing'   => false,
            'text-align'     => false,
            'letter-spacing' => false,
            'color'          => true,
            'preview'        => true,
            'output'         => array(
                '#as-page-blog-classic .as-excerpt'),
            'units'          => 'px',
            'subtitle'       => esc_html__('Select your custom font options for your content blog.', 'alenastudio'),
            'default'        => array(
                'color'       => '#797979',
                'font-family' => 'Roboto Slab',
                'font-size'   => '14px',
                'font-weight' => '400',
                'line-height' => '24px',
            )
        ),
        array(
            'id'             => 'as_blog_btn_readmore_font',
            'type'           => 'typography',
            'title'          => esc_html__('Text color button readmore', 'alenastudio'),
            'compiler'       => false,
            'google'         => true,
            'font-backup'    => false,
            'font-style'     => false,
            'subsets'        => true,
            'font-size'      => true,
            'line-height'    => false,
            'word-spacing'   => false,
            'text-align'     => false,
            'letter-spacing' => false,
            'color'          => false,
            'preview'        => true,
            'output'         => array(
                '.as-post-btn-group a.as-btn-readmore'),
            'units'          => 'px',
            'subtitle'       => esc_html__('Select your custom font options for your button readmore.', 'alenastudio'),
            'default'        => array(
                'font-family' => 'Montserrat',
                'font-size'   => '12px',
                'font-weight' => '700',
            )
        ),
        array(
            'id'       => 'as_blog_post_author',
            'type'     => 'switch',
            'title'    => esc_html__('Info author post', 'alenastudio'),
            'subtitle' => esc_html__('Toggle the author on or off.', 'alenastudio'),
            "default"  => '1',
            'on'       => esc_html__('On', 'alenastudio'),
            'off'      => esc_html__('Off', 'alenastudio'),
        ),
        array(
            'id'       => 'as_blog_post_category',
            'type'     => 'switch',
            'title'    => esc_html__('List category post', 'alenastudio'),
            'subtitle' => esc_html__('Toggle the category on or off.', 'alenastudio'),
            "default"  => '1',
            'on'       => esc_html__('On', 'alenastudio'),
            'off'      => esc_html__('Off', 'alenastudio'),
        ),
        array(
            'id'       => 'as_blog_post_comments',
            'type'     => 'switch',
            'title'    => esc_html__('Number comments post', 'alenastudio'),
            'subtitle' => esc_html__('Toggle the author on or off.', 'alenastudio'),
            "default"  => '1',
            'on'       => esc_html__('On', 'alenastudio'),
            'off'      => esc_html__('Off', 'alenastudio'),
        ),
        array(
            'id'       => 'as_blog_btn_readmore',
            'type'     => 'switch',
            'title'    => esc_html__('Read More Button', 'alenastudio'),
            'subtitle' => esc_html__('Toggle the blog read more button on or off.', 'alenastudio'),
            "default"  => '1',
            'on'       => esc_html__('On', 'alenastudio'),
            'off'      => esc_html__('Off', 'alenastudio'),
        ),
        array(
            'id'       => 'as_blog_btn_like_heart',
            'type'     => 'switch',
            'title'    => esc_html__('Like heart Button', 'alenastudio'),
            'subtitle' => esc_html__('Toggle the blog like heart on or off.', 'alenastudio'),
            "default"  => '1',
            'on'       => esc_html__('On', 'alenastudio'),
            'off'      => esc_html__('Off', 'alenastudio'),
        ),
        array(
            'id'       => 'as_blog_btn_list_share_social',
            'type'     => 'switch',
            'title'    => esc_html__('List Share Social Button', 'alenastudio'),
            'subtitle' => esc_html__('Toggle the button share social on or off.', 'alenastudio'),
            "default"  => '1',
            'on'       => esc_html__('On', 'alenastudio'),
            'off'      => esc_html__('Off', 'alenastudio'),
        ),
    )
);
// Project -------------------------------------------------------------------------- >
$sections[] = array(
    'icon'       => 'el-icon-star',
    'icon_class' => 'el-icon-large',
    'title'      => esc_html__('Project Setting', 'alenastudio'),
    'desc'       => esc_html__('*NOTE: This is option support for Single Project default of theme.', 'alenastudio'),
    'submenu'    => true,
    'fields'     => array(
        array(
            'id'       => 'as_port_post_info_client',
            'type'     => 'switch',
            'title'    => esc_html__('Hide / Show Info Name Of Client', 'alenastudio'),
            'subtitle' => esc_html__('Toggle the client name on or off.', 'alenastudio'),
            "default"  => '1',
            'on'       => esc_html__('On', 'alenastudio'),
            'off'      => esc_html__('Off', 'alenastudio'),
        ),
        array(
            'id'       => 'as_port_post_info_url',
            'type'     => 'switch',
            'title'    => esc_html__('Hide / Show URL Of Client', 'alenastudio'),
            'subtitle' => esc_html__('Toggle the URL client on or off.', 'alenastudio'),
            "default"  => '1',
            'on'       => esc_html__('On', 'alenastudio'),
            'off'      => esc_html__('Off', 'alenastudio'),
        ),
        array(
            'id'       => 'as_port_post_info_categories',
            'type'     => 'switch',
            'title'    => esc_html__('Hide / Show categories', 'alenastudio'),
            'subtitle' => esc_html__('Toggle the categories on or off.', 'alenastudio'),
            "default"  => '1',
            'on'       => esc_html__('On', 'alenastudio'),
            'off'      => esc_html__('Off', 'alenastudio'),
        ),
        array(
            'id'       => 'as_port_btn_like_heart',
            'type'     => 'switch',
            'title'    => esc_html__('Like heart Button', 'alenastudio'),
            'subtitle' => esc_html__('Toggle the portfolio like heart on or off.', 'alenastudio'),
            "default"  => '1',
            'on'       => esc_html__('On', 'alenastudio'),
            'off'      => esc_html__('Off', 'alenastudio'),
        ),
        array(
            'id'       => 'as_port_btn_list_share_social',
            'type'     => 'switch',
            'title'    => esc_html__('List Share Social Button', 'alenastudio'),
            'subtitle' => esc_html__('Toggle the button share social on or off.', 'alenastudio'),
            "default"  => '1',
            'on'       => esc_html__('On', 'alenastudio'),
            'off'      => esc_html__('Off', 'alenastudio'),
        ),
    ),
);
// 404 Page -------------------------------------------------------------------------- >
$sections[] = array(
    'icon'       => 'el-exclamation-sign',
    'icon_class' => 'el-icon-large',
    'title'      => esc_html__('404 Page Setting', 'alenastudio'),
    'desc'       => esc_html__('', 'alenastudio'),
    'submenu'    => true,
    'fields'     => array(
        array(
            'id'       => 'as_option_error_padding',
            'type'     => 'spacing',
            'output'   => array(
                '.as-wrapper.as-wrapper-page-404'),
            'mode'     => 'padding',
            'top'      => true, // Disable the top
            'right'    => true, // Disable the right
            'bottom'   => true, // Disable the bottom
            'left'     => true, // Disable the left
            'units'    => 'px', // You can specify a unit value. Possible: px, em, %
            'title'    => esc_html__('Padding Wrapper Page 404', 'alenastudio'),
            'subtitle' => esc_html__('Allow you to choose the padding you want.', 'alenastudio'),
            'desc'     => esc_html__('', 'alenastudio'),
            'default'  => array(
                'padding-top'    => '100px',
                'padding-right'  => '0',
                'padding-bottom' => '100px',
                'padding-left'   => '0'
            )
        ),
        array(
            'id'       => 'as_option_error_text_headline',
            'type'     => 'text',
            'title'    => esc_html__('Text 404', 'alenastudio'),
            'subtitle' => esc_html__('Enter your custom text.', 'alenastudio'),
            'default'  => '404',
        ),
        array(
            'id'             => 'as_option_error_text_headline_style',
            'type'           => 'typography',
            'title'          => esc_html__('Typography For Text 404', 'alenastudio'),
            'compiler'       => false,
            'google'         => true,
            'font-backup'    => false,
            'font-style'     => true,
            'subsets'        => false,
            'font-size'      => true,
            'line-height'    => true,
            'word-spacing'   => false,
            'letter-spacing' => true,
            'text-transform' => true,
            'text-align'     => false,
            'color'          => true,
            'preview'        => false,
            'output'         => array(
                '.as-wrapper-page-404 .as-wrapper-number-404 h2'),
            'units'          => 'px',
            'subtitle'       => esc_html__('Select your custom font options for your headline 404 pan.', 'alenastudio'),
            'default'        => array(
                'font-family'    => 'Roboto Slab',
                'font-size'      => '105px',
                'font-weight'    => '700',
                'letter-spacing' => '2px',
                'text-transform' => 'uppercase',
                'line-height'    => '105px',
                'color'          => '#212121',
                'units'          => 'px',
            ),
        ),
        array(
            'id'       => 'as_option_error_context_pan',
            'type'     => 'text',
            'title'    => esc_html__('Text Subtitle', 'alenastudio'),
            'subtitle' => esc_html__('Enter your custom text.', 'alenastudio'),
            'default'  => 'PAGE NOT FOUND',
        ),
        array(
            'id'             => 'as_option_error_context_pan_style',
            'type'           => 'typography',
            'title'          => esc_html__('Typography For Subtitle', 'alenastudio'),
            'compiler'       => false,
            'google'         => true,
            'font-backup'    => false,
            'font-style'     => true,
            'subsets'        => false,
            'font-size'      => true,
            'line-height'    => true,
            'word-spacing'   => false,
            'letter-spacing' => true,
            'text-transform' => true,
            'text-align'     => false,
            'color'          => true,
            'preview'        => true,
            'output'         => array(
                '.as-wrapper-page-404 .as-wrapper-number-404 h3'),
            'units'          => 'px',
            'subtitle'       => esc_html__('Select your custom font options for your context pan.', 'alenastudio'),
            'default'        => array(
                'font-family'    => 'Roboto Slab',
                'font-size'      => '24px',
                'font-weight'    => '700',
                'letter-spacing' => '0px',
                'text-transform' => 'uppercase',
                'line-height'    => '32px',
                'color'          => '#212121',
                'units'          => 'px',
            ),
        ),
        array(
            'id'       => 'as_option_error_context_404',
            'type'     => 'text',
            'title'    => esc_html__('Text content 404.', 'alenastudio'),
            'subtitle' => esc_html__('Enter your custom text.', 'alenastudio'),
            'default'  => 'You may want to head back to the homepage.<br>If you think something is broken, report a problem.',
        ),
        array(
            'id'             => 'as_option_error_context_404_style',
            'type'           => 'typography',
            'title'          => esc_html__('Typography For content 404', 'alenastudio'),
            'compiler'       => false,
            'google'         => true,
            'font-backup'    => false,
            'font-style'     => true,
            'subsets'        => false,
            'font-size'      => true,
            'line-height'    => true,
            'word-spacing'   => false,
            'letter-spacing' => true,
            'text-transform' => true,
            'text-align'     => false,
            'color'          => true,
            'preview'        => true,
            'output'         => array(
                '.as-wrapper-page-404 .as-context-404 p'),
            'units'          => 'px',
            'subtitle'       => esc_html__('Select your custom font options for your context 404', 'alenastudio'),
            'default'        => array(
                'font-family'    => 'Roboto Slab',
                'font-size'      => '16px',
                'font-weight'    => '400',
                'letter-spacing' => '0px',
                'text-transform' => 'none',
                'line-height'    => '26px',
                'color'          => '#aaaaaa',
                'units'          => 'px',
            ),
        ),
        array(
            'id'       => 'as_option_btn_back_to_home_text',
            'type'     => 'text',
            'title'    => esc_html__('Text Button Back To Home', 'alenastudio'),
            'subtitle' => esc_html__('Enter your custom text.', 'alenastudio'),
            'default'  => 'BACK TO HOME',
        ),
        array(
            'id'       => 'as_option_btn_back_to_home',
            'type'     => 'text',
            'title'    => esc_html__('URL Home.', 'alenastudio'),
            'subtitle' => esc_html__('Enter your url Home.', 'alenastudio'),
            'default'  => '#',
        ),
        array(
            'id'       => 'as_option_btn_error_report_url_404',
            'type'     => 'text',
            'title'    => esc_html__('Text Button Report Error', 'alenastudio'),
            'subtitle' => esc_html__('Enter your custom text.', 'alenastudio'),
            'default'  => 'REPORT A PROBLEM',
        ),
        array(
            'id'       => 'as_option_error_report_url_404',
            'type'     => 'text',
            'title'    => esc_html__('URL Report.', 'alenastudio'),
            'subtitle' => esc_html__('Enter your url Report.', 'alenastudio'),
            'default'  => '#',
        ),
    ),
);
// Footer -------------------------------------------------------------------------- >
$sections[] = array(
    'icon'       => 'el-icon-bookmark',
    'icon_class' => 'el-icon-large',
    'title'      => esc_html__('Footer Setting', 'alenastudio'),
    'submenu'    => true,
    'fields'     => array(
        array(
            'id'       => 'as_option_check_footer',
            'type'     => 'switch',
            'title'    => esc_html__('Show / Hide Footer', 'alenastudio'),
            'subtitle' => esc_html__('Enable this option to make on/off footer.', 'alenastudio'),
            'default'  => '1',
        ),
        array(
            'id'       => 'as_option_custom_footer',
            'type'     => 'image_select',
            'compiler' => true,
            'title'    => esc_html__('Choose Type', 'alenastudio'),
            'subtitle' => esc_html__('Select type Header.', 'alenastudio'),
            'options'  => array(
                '1' => array(
                    'alt' => 'Footer 1',
                    'img' => get_template_directory_uri() . '/img/admin-core-img/footer-2.jpg'
                ),
                '2' => array(
                    'alt' => 'Footer 2',
                    'img' => get_template_directory_uri() . '/img/admin-core-img/footer-1.jpg'
                ),
                '3' => array(
                    'alt' => 'Footer 3',
                    'img' => get_template_directory_uri() . '/img/admin-core-img/footer-3.jpg'
                ),
            ),
            'default'  => '1',
            'required' => array(
                'as_option_check_footer',
                "=",
                1)
        ),
    )
);
// Footer Option 1 -------------------------------------------------------------------------- >
$sections[] = array(
    'icon'       => 'el-icon-chevron-right',
    'icon_class' => 'el-icon-large',
    'title'      => esc_html__('Footer Option 1', 'alenastudio'),
    'desc'       => esc_html__('', 'alenastudio'),
    'submenu'    => true,
    'subsection' => true,
    'fields'     => array(
        array(
            'id'      => 'as_option_select_column',
            'type'    => 'select',
            'title'   => esc_html__('Select Footer Style Column', 'alenastudio'),
            'options' => array(
                'style1' => '6 - 3 - 3',
                'style2' => '3 - 3 - 6',
                'style3' => '4 - 4 - 4',
                'style4' => '6 - 6',
            ),
            'default' => 'style1',
        ),
        array(
            'id'       => 'as_option_background_footer_1',
            'type'     => 'background',
            'output'   => array(
                '#as-footer-1'),
            'title'    => esc_html__('Footer Background', 'alenastudio'),
            'subtitle' => esc_html__('Footer background with image, color, etc.', 'alenastudio'),
            'default'  => array(
                'background-color' => '#222222',
            ),
        ),
        array(
            'id'       => 'as_option_padding_footer_1',
            'type'     => 'spacing',
            'output'   => array(
                '#as-footer-1'),
            'mode'     => 'padding',
            'top'      => true, // Disable the top
            'right'    => true, // Disable the right
            'bottom'   => true, // Disable the bottom
            'left'     => true, // Disable the left
            'units'    => 'px', // You can specify a unit value. Possible: px, em, %
            'title'    => esc_html__('Padding Footer Bottom Setting (px)', 'alenastudio'),
            'subtitle' => esc_html__('Allow you to choose the margin you want.', 'alenastudio'),
            'desc'     => esc_html__('', 'alenastudio'),
            'default'  => array(
                'padding-top'    => '60px',
                'padding-right'  => '0',
                'padding-bottom' => '30px',
                'padding-left'   => '0'
            )
        ),
        array(
            'id'             => 'as_option_typography_title_menu_footer_1',
            'type'           => 'typography',
            'title'          => esc_html__('Typography For Title Widget Footer', 'alenastudio'),
            'compiler'       => false,
            'google'         => true,
            'font-backup'    => false,
            'font-style'     => true,
            'subsets'        => false,
            'font-size'      => true,
            'line-height'    => true,
            'word-spacing'   => false,
            'letter-spacing' => true,
            'text-transform' => true,
            'text-align'     => false,
            'color'          => true,
            'preview'        => true,
            'output'         => array(
                '#as-footer-1 h4.widget-title-footer'),
            'units'          => 'px',
            'subtitle'       => esc_html__('Select your custom font options for your footer title font.', 'alenastudio'),
            'default'        => array(
                'font-family'    => 'Montserrat',
                'font-size'      => '19px',
                'font-weight'    => '700',
                'letter-spacing' => '0',
                'text-transform' => 'none',
                'line-height'    => '18px',
                'color'          => '#ffffff',
                'units'          => 'px',
            ),
        ),
        array(
            'id'       => 'as_option_margin_typography_title_footer_1',
            'type'     => 'spacing',
            'output'   => array(
                '#as-footer-1 h4.widget-title-footer'),
            'mode'     => 'margin',
            'top'      => true, // Disable the top
            'right'    => true, // Disable the right
            'bottom'   => true, // Disable the bottom
            'left'     => true, // Disable the left
            'units'    => 'px', // You can specify a unit value. Possible: px, em, %
            'title'    => esc_html__('Margin Title Setting (px)', 'alenastudio'),
            'subtitle' => esc_html__('Allow you to choose the margin you want.', 'alenastudio'),
            'desc'     => esc_html__('', 'alenastudio'),
            'default'  => array(
                'margin-top'    => '0',
                'margin-right'  => '0',
                'margin-bottom' => '20px',
                'margin-left'   => '0'
            )
        ),
        array(
            'id'             => 'as_option_typography_content_footer_1',
            'type'           => 'typography',
            'title'          => esc_html__('Typography For Footer', 'alenastudio'),
            'compiler'       => false,
            'google'         => true,
            'font-backup'    => false,
            'font-style'     => true,
            'subsets'        => false,
            'font-size'      => true,
            'line-height'    => true,
            'word-spacing'   => false,
            'letter-spacing' => true,
            'text-transform' => true,
            'text-align'     => false,
            'color'          => true,
            'preview'        => true,
            'output'         => array(
                '#as-footer-1, #as-footer-1 p '),
            'units'          => 'px',
            'subtitle'       => esc_html__('Select your custom font options for your footer content font.', 'alenastudio'),
            'default'        => array(
                'font-family'    => 'Roboto Slab',
                'font-size'      => '13px',
                'font-weight'    => '400',
                'letter-spacing' => '0',
                'text-transform' => 'none',
                'line-height'    => '26px',
                'color'          => '#666666',
                'units'          => 'px',
            ),
        ),
        array(
            'id'       => 'as_option_color_link_footer_1',
            'type'     => 'link_color',
            'title'    => esc_html__('Links Color Footer Menu Option', 'alenastudio'),
            'subtitle' => esc_html__('Choose color for footer menu', 'alenastudio'),
            'desc'     => esc_html__('', 'redux-framework-demo'),
            //'regular'   => false, // Disable Regular Color
            //'hover'     => false, // Disable Hover Color
            //'active'    => false, // Disable Active Color
            //'visited'   => true,  // Enable Visited Color
            'output'   => array(
                '#as-footer-1 a'),
            'default'  => array(
                'regular' => '#D1D1D1',
                'hover'   => '#648ad7',
                'active'  => '#648ad7',
            ),
        ),
        array(
            'id'       => 'as_option_background_copyright_footer_1',
            'type'     => 'background',
            'output'   => array(
                '#footer-bottom-1'),
            'title'    => esc_html__('Footer Bottom Background', 'alenastudio'),
            'subtitle' => esc_html__('Footer bottom background with image, color, etc.', 'alenastudio'),
            'default'  => array(
                'background-color' => '#000000',
            ),
        ),
        array(
            'id'       => 'as_option_padding_copyright_footer_1',
            'type'     => 'spacing',
            'output'   => array(
                '#footer-bottom-1'),
            'mode'     => 'padding',
            'top'      => true, // Disable the top
            'right'    => true, // Disable the right
            'bottom'   => true, // Disable the bottom
            'left'     => true, // Disable the left
            'units'    => 'px', // You can specify a unit value. Possible: px, em, %
            'title'    => esc_html__('Padding Footer Bottom Setting (px)', 'alenastudio'),
            'subtitle' => esc_html__('Allow you to choose the padding you want.', 'alenastudio'),
            'desc'     => esc_html__('', 'alenastudio'),
            'default'  => array(
                'padding-top'    => '20px',
                'padding-right'  => '0',
                'padding-bottom' => '20px',
                'padding-left'   => '0'
            )
        ),
        array(
            'id'       => 'as_option_copyright_footer_1',
            'type'     => 'text',
            'title'    => esc_html__('Copyright', 'alenastudio'),
            'subtitle' => esc_html__('Enter your custom copyright text.', 'alenastudio'),
            'default'  => '� Copyright 2015 by <span class="as-color-main">ALENA STUDIO</span> - All Rights Reserved',
        ),
        array(
            'id'             => 'as_option_typography_menu_footer_1',
            'type'           => 'typography',
            'title'          => esc_html__('Typography For Copyright Footer', 'alenastudio'),
            'compiler'       => false,
            'google'         => true,
            'font-backup'    => false,
            'font-style'     => true,
            'subsets'        => false,
            'font-size'      => true,
            'line-height'    => true,
            'word-spacing'   => false,
            'letter-spacing' => true,
            'text-transform' => true,
            'text-align'     => false,
            'color'          => true,
            'preview'        => true,
            'output'         => array(
                '#footer-bottom-1 .as-copyright-footer'),
            'units'          => 'px',
            'subtitle'       => esc_html__('Select your custom font options for your footer copyright text.', 'alenastudio'),
            'default'        => array(
                'font-family'    => 'Roboto Slab',
                'font-size'      => '10px',
                'font-weight'    => '700',
                'letter-spacing' => '2px',
                'text-transform' => 'uppercase',
                'line-height'    => '20px',
                'color'          => '#aaaaaa',
                'units'          => 'px',
            ),
        ),
    )
);
// Footer Option 2 -------------------------------------------------------------------------- >
$sections[] = array(
    'icon'       => 'el-icon-chevron-right',
    'icon_class' => 'el-icon-large',
    'title'      => esc_html__('Footer Option 2', 'alenastudio'),
    'desc'       => esc_html__('', 'alenastudio'),
    'submenu'    => true,
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'as_option_background_footer_2',
            'type'     => 'background',
            'output'   => array(
                '#as-footer-2'),
            'title'    => esc_html__('Footer Background', 'alenastudio'),
            'subtitle' => esc_html__('Footer background with image, color, etc.', 'alenastudio'),
            'default'  => array(
                'background-color' => '#212121',
            ),
        ),
        array(
            'id'       => 'as_option_background_content_footer_2',
            'type'     => 'background',
            'output'   => array(
                '#as-footer-2 .as-footer-wrapper'),
            'title'    => esc_html__('Footer Content Background', 'alenastudio'),
            'subtitle' => esc_html__('Footer content background with image, color, etc.', 'alenastudio'),
            'default'  => array(
                'background-color' => 'transparent',
            ),
        ),
        array(
            'id'       => 'as_option_padding_content_footer_2',
            'type'     => 'spacing',
            'output'   => array(
                '#as-footer-2 .as-footer-wrapper'),
            'mode'     => 'padding',
            'top'      => true,
            'right'    => true,
            'bottom'   => true,
            'left'     => true,
            'units'    => 'px', // You can specify a unit value. Possible: px, em, %
            'title'    => esc_html__('Padding Footer Setting (px)', 'alenastudio'),
            'subtitle' => esc_html__('Allow you to choose the padding you want.', 'alenastudio'),
            'desc'     => esc_html__('', 'alenastudio'),
            'default'  => array(
                'padding-top'    => '60px',
                'padding-right'  => '0',
                'padding-bottom' => '60px',
                'padding-left'   => '0'
            )
        ),
        array(
            'id'       => 'as_option_check_list_social_footer_2',
            'type'     => 'switch',
            'title'    => esc_html__('Show / Hide List Social Footer', 'alenastudio'),
            'subtitle' => esc_html__('Enable this option to make on/off social icon footer.', 'alenastudio'),
            'default'  => '1',
        ),
        array(
            'id'       => 'as_option_title_list_social_footer_2',
            'type'     => 'text',
            'title'    => esc_html__('Social Title', 'alenastudio'),
            'subtitle' => esc_html__('Enter your Social Title.', 'alenastudio'),
            'default'  => 'Follow our social channel:',
            'required' => array(
                'as_option_check_list_social_footer_2',
                "=",
                1),
        ),
        array(
            'id'             => 'as_option_typography_list_social_footer_2',
            'type'           => 'typography',
            'title'          => esc_html__('Typography For Social Title', 'alenastudio'),
            'compiler'       => false,
            'google'         => true,
            'font-backup'    => false,
            'font-style'     => true,
            'subsets'        => false,
            'font-size'      => true,
            'line-height'    => true,
            'word-spacing'   => false,
            'letter-spacing' => true,
            'text-transform' => true,
            'text-align'     => false,
            'color'          => true,
            'preview'        => true,
            'output'         => array(
                '#as-footer-2 .as-list-social-wrapper h3'),
            'units'          => 'px',
            'subtitle'       => esc_html__('Select your custom font options for your Social Title.', 'alenastudio'),
            'default'        => array(
                'font-family'    => 'Roboto Slab',
                'font-size'      => '12px',
                'font-weight'    => '700',
                'letter-spacing' => '2px',
                'text-transform' => 'uppercase',
                'line-height'    => '20px',
                'color'          => '#ffffff',
                'units'          => 'px',
            ),
            'required'       => array(
                'as_option_check_list_social_footer_2',
                "=",
                1),
        ),
        array(
            'id'       => 'as_option_color_social_footer_2',
            'type'     => 'link_color',
            'title'    => esc_html__('Links Color Social Option', 'alenastudio'),
            'subtitle' => esc_html__('Choose color for Social Icon', 'alenastudio'),
            'desc'     => esc_html__('', 'redux-framework-demo'),
            //'regular'   => false, // Disable Regular Color
            //'hover'     => false, // Disable Hover Color
            'active'   => false, // Disable Active Color
            //'visited'   => true,  // Enable Visited Color
            'output'   => array(
                '#as-footer-2 .as-footer-wrapper .as-list-social-header-wrapper li a'),
            'default'  => array(
                'regular' => '#D1D1D1',
                'hover'   => '#648ad7',
            //'active'  => '#648ad7',
            ),
            'required' => array(
                'as_option_check_list_social_footer_2',
                "=",
                1),
        ),
        array(
            'id'       => 'as_option_margin_social_footer_2',
            'type'     => 'spacing',
            'output'   => array(
                '#as-footer-2 .as-footer-wrapper .as-list-social-header-wrapper'),
            'mode'     => 'margin',
            'top'      => true,
            'right'    => true,
            'bottom'   => true,
            'left'     => true,
            'units'    => 'px', // You can specify a unit value. Possible: px, em, %
            'title'    => esc_html__('Margin List Social Setting (px)', 'alenastudio'),
            'subtitle' => esc_html__('Allow you to choose the margin you want.', 'alenastudio'),
            'desc'     => esc_html__('', 'alenastudio'),
            'default'  => array(
                'margin-top'    => '0',
                'margin-right'  => '0',
                'margin-bottom' => '30px',
                'margin-left'   => '0'
            ),
            'required' => array(
                'as_option_check_list_social_footer_2',
                "=",
                1),
        ),
        array(
            'id'       => 'as_option_check_menu_footer_2',
            'type'     => 'switch',
            'title'    => esc_html__('Show / Hide Menu Footer', 'alenastudio'),
            'subtitle' => esc_html__('Enable this option to make on/off menu footer.', 'alenastudio'),
            'default'  => '1',
        ),
        array(
            'id'             => 'as_option_typography_menu_footer_2',
            'type'           => 'typography',
            'title'          => esc_html__('Typography For Menu Color', 'alenastudio'),
            'compiler'       => false,
            'google'         => true,
            'font-backup'    => false,
            'font-style'     => true,
            'subsets'        => false,
            'font-size'      => true,
            'line-height'    => true,
            'word-spacing'   => false,
            'letter-spacing' => true,
            'text-transform' => true,
            'text-align'     => false,
            'color'          => true,
            'preview'        => true,
            'output'         => array(
                '#as-footer-2 .as-menu-footer-2 li a'),
            'units'          => 'px',
            'subtitle'       => esc_html__('Select your custom font options for your footer menu text.', 'alenastudio'),
            'default'        => array(
                'font-family'    => 'Roboto Slab',
                'font-size'      => '12px',
                'font-weight'    => '700',
                'letter-spacing' => '2px',
                'text-transform' => 'uppercase',
                'line-height'    => '20px',
                'color'          => '#aaaaaa',
                'units'          => 'px',
            ),
            'required'       => array(
                'as_option_check_menu_footer_2',
                "=",
                1),
        ),
        array(
            'id'       => 'as_option_color_link_menu_footer_2',
            'type'     => 'link_color',
            'title'    => esc_html__('Links Color Footer Menu Option', 'alenastudio'),
            'subtitle' => esc_html__('Choose color for footer menu', 'alenastudio'),
            'desc'     => esc_html__('', 'redux-framework-demo'),
            //'regular'   => false, // Disable Regular Color
            //'hover'     => false, // Disable Hover Color
            'active'   => false, // Disable Active Color
            //'visited'   => true,  // Enable Visited Color
            'output'   => array(
                '#as-footer-2 .as-menu-footer-2 li a'),
            'default'  => array(
                'regular' => '#D1D1D1',
                'hover'   => '#648ad7',
            //'active'  => '#648ad7',
            ),
            'required' => array(
                'as_option_check_menu_footer_2',
                "=",
                1),
        ),
        array(
            'id'       => 'as_option_margin_menu_footer_2',
            'type'     => 'spacing',
            'output'   => array(
                '#as-footer-2 .as-menu-footer-2'),
            'mode'     => 'margin',
            'top'      => true,
            'right'    => true,
            'bottom'   => true,
            'left'     => true,
            'units'    => 'px', // You can specify a unit value. Possible: px, em, %
            'title'    => esc_html__('Margin Menu Setting (px)', 'alenastudio'),
            'subtitle' => esc_html__('Allow you to choose the margin you want.', 'alenastudio'),
            'desc'     => esc_html__('', 'alenastudio'),
            'default'  => array(
                'margin-top'    => '0',
                'margin-right'  => '0',
                'margin-bottom' => '30px',
                'margin-left'   => '0'
            ),
            'required' => array(
                'as_option_check_menu_footer_2',
                "=",
                1),
        ),
        array(
            'id'       => 'as_option_check_copyright_footer_2',
            'type'     => 'switch',
            'title'    => esc_html__('Show / Hide Copyright Footer', 'alenastudio'),
            'subtitle' => esc_html__('Enable this option to make on/off menu footer.', 'alenastudio'),
            'default'  => '1',
        ),
        array(
            'id'       => 'as_option_copyright_footer_2',
            'type'     => 'text',
            'title'    => esc_html__('Copyright Text', 'alenastudio'),
            'subtitle' => esc_html__('Enter your custom copyright.', 'alenastudio'),
            'default'  => '© 2015 Monalisa Theme All right reserved.<br>Template by Alena Studio',
            'required' => array(
                'as_option_check_copyright_footer_2',
                "=",
                1),
        ),
        array(
            'id'             => 'as_option_typography_copyright_footer_2',
            'type'           => 'typography',
            'title'          => esc_html__('Typography For Copyright Footer color', 'alenastudio'),
            'compiler'       => false,
            'google'         => true,
            'font-backup'    => false,
            'font-style'     => true,
            'subsets'        => false,
            'font-size'      => true,
            'line-height'    => true,
            'word-spacing'   => false,
            'letter-spacing' => true,
            'text-transform' => true,
            'text-align'     => false,
            'color'          => true,
            'preview'        => true,
            'output'         => array(
                '#as-footer-2 .as-copyright-footer'),
            'units'          => 'px',
            'subtitle'       => esc_html__('Select your custom font options for your footer copyright text.', 'alenastudio'),
            'default'        => array(
                'font-family'    => 'Roboto Slab',
                'font-size'      => '18px',
                'font-weight'    => '700',
                'letter-spacing' => '2px',
                'text-transform' => 'uppercase',
                'line-height'    => '12px',
                'color'          => '#aaaaaa',
                'units'          => 'px',
            ),
            'required'       => array(
                'as_option_check_copyright_footer_2',
                "=",
                1),
        ),
        array(
            'id'       => 'as_option_color_link_copyright_footer_2',
            'type'     => 'link_color',
            'title'    => esc_html__('Links Color Footer Copyright Option', 'alenastudio'),
            'subtitle' => esc_html__('Choose color for footer copyright', 'alenastudio'),
            'desc'     => esc_html__('', 'redux-framework-demo'),
            //'regular'   => false, // Disable Regular Color
            //'hover'     => false, // Disable Hover Color
            'active'   => false, // Disable Active Color
            //'visited'   => true,  // Enable Visited Color
            'output'   => array(
                '#as-footer-2 .as-copyright-footer a'),
            'default'  => array(
                'regular' => '#D1D1D1',
                'hover'   => '#648ad7',
            //'active'  => '#648ad7',
            ),
            'required' => array(
                'as_option_check_copyright_footer_2',
                "=",
                1),
        ),
    )
);
// Footer Option 3 -------------------------------------------------------------------------- >

$sections[] = array(
    'icon'       => 'el-icon-chevron-right',
    'icon_class' => 'el-icon-large',
    'title'      => esc_html__('Footer Option 3', 'alenastudio'),
    'desc'       => esc_html__('', 'alenastudio'),
    'submenu'    => true,
    'subsection' => true,
    'fields'     => array(
	    array(
            'id'       => 'as_option_padding_content_footer_3',
            'type'     => 'spacing',
            'output'   => array('#as-footer-3 .as-footer-wrapper'),
            'mode'     => 'padding',
            'top'      => true,
            'right'    => true,
            'bottom'   => true,
            'left'     => true,
            'units'    => 'px', // You can specify a unit value. Possible: px, em, %
            'title'    => esc_html__('Padding Footer Setting (px)', 'alenastudio'),
            'subtitle' => esc_html__('Allow you to choose the padding you want.', 'alenastudio'),
            'desc'     => esc_html__('', 'alenastudio'),
            'default'  => array(
                'padding-top'    => '40px',
                'padding-right'  => '0',
                'padding-bottom' => '40px',
                'padding-left'   => '0'
            )
        ),
        array(
            'id'       => 'as_option_background_footer_3',
            'type'     => 'background',
            'output'   => array(
                '#as-footer-3'),
            'title'    => esc_html__('Footer Background', 'alenastudio'),
            'subtitle' => esc_html__('Footer background with image, color, etc.', 'alenastudio'),
            'default'  => array(
                'background-color' => '#ffffff',
            ),
        ),
        array(
            'id'       => 'as_option_check_logo_footer_3',
            'type'     => 'switch',
            'title'    => esc_html__('Show / Hide Logo Footer', 'alenastudio'),
            'subtitle' => esc_html__('Enable this option to make on/off Logo footer.', 'alenastudio'),
            'default'  => '1',
        ),
        array(
            'id'       => 'as_option_logo_footer_3',
            'url'      => true,
            'type'     => 'media',
            'title'    => esc_html__('Your Logo', 'alenastudio'),
            'default'  => array(
                'url' => get_template_directory_uri() . '/img/logo-mono.png'),
            'subtitle' => esc_html__('Upload file .png/.gif image that will represent your Logo.', 'alenastudio'),
            'required' => array(
                'as_option_check_logo_footer_3',
                "=",
                1),
        ),
        array(
            'id'       => 'as_option_check_menu_footer_3',
            'type'     => 'switch',
            'title'    => esc_html__('Show / Hide Menu Footer', 'alenastudio'),
            'subtitle' => esc_html__('Enable this option to make on/off menu footer.', 'alenastudio'),
            'default'  => '1',
        ),
        array(
            'id'       => 'as_option_margin_menu_footer_3',
            'type'     => 'spacing',
            'output'   => array('#as-footer-3 .as-footer-wrapper .as-footer-3-menu .as-menu-footer-3'),
            'mode'     => 'margin',
            'top'      => true,
            'right'    => true,
            'bottom'   => true,
            'left'     => true,
            'units'    => 'px', // You can specify a unit value. Possible: px, em, %
            'title'    => esc_html__('Margin Menu Footer Setting (px)', 'alenastudio'),
            'subtitle' => esc_html__('Allow you to choose the margin you want.', 'alenastudio'),
            'desc'     => esc_html__('', 'alenastudio'),
            'default'  => array(
                'margin-top'    => '10px',
                'margin-right'  => '0',
                'margin-bottom' => '0',
                'margin-left'   => '0'
            )
        ),
        array(
            'id'             => 'as_option_typography_menu_footer_3',
            'type'           => 'typography',
            'title'          => esc_html__('Typography For Menu Color', 'alenastudio'),
            'compiler'       => false,
            'google'         => true,
            'font-backup'    => false,
            'font-style'     => true,
            'subsets'        => false,
            'font-size'      => true,
            'line-height'    => true,
            'word-spacing'   => false,
            'letter-spacing' => true,
            'text-transform' => true,
            'text-align'     => false,
            'color'          => true,
            'preview'        => true,
            'output'         => array(
                '#as-footer-3 .as-footer-3-menu li a'),
            'units'          => 'px',
            'subtitle'       => esc_html__('Select your custom font options for your footer menu text.', 'alenastudio'),
            'default'        => array(
                'font-family'    => 'Roboto Slab',
                'font-size'      => '12px',
                'font-weight'    => '700',
                'letter-spacing' => '2px',
                'text-transform' => 'uppercase',
                'line-height'    => '20px',
                'color'          => '#626466',
                'units'          => 'px',
            ),
            'required'       => array(
                'as_option_check_menu_footer_3',
                "=",
                1),
        ),
    )
);
// Social -------------------------------------------------------------------------- >
$sections[]     = array(
    'icon'       => 'el-icon-twitter',
    'icon_class' => 'el-icon-large',
    'title'      => esc_html__('Social Setting', 'alenastudio'),
    'submenu'    => true,
    'fields'     => array(
        array(
            'id'       => 'as_twitter_url',
            'type'     => 'text',
            'title'    => esc_html__('Twitter', 'alenastudio'),
            'subtitle' => esc_html__('Enter a url for your Twitter.', 'alenastudio'),
            'default'  => '#',
        ),
        array(
            'id'       => 'as_facebook_url',
            'type'     => 'text',
            'title'    => esc_html__('Facebook', 'alenastudio'),
            'subtitle' => esc_html__('Enter a url for your Facebook.', 'alenastudio'),
            'default'  => '#',
        ),
        array(
            'id'       => 'as_google_url',
            'type'     => 'text',
            'title'    => esc_html__('Google', 'alenastudio'),
            'subtitle' => esc_html__('Enter a url for your Google Plus.', 'alenastudio'),
            'default'  => '#',
        ),
        array(
            'id'       => 'as_dribbble_url',
            'type'     => 'text',
            'title'    => esc_html__('Dribbble', 'alenastudio'),
            'subtitle' => esc_html__('Enter a url for your Dribbble.', 'alenastudio'),
            'default'  => '#',
        ),
        array(
            'id'       => 'as_pinterest_url',
            'type'     => 'text',
            'title'    => esc_html__('Pinterest', 'alenastudio'),
            'subtitle' => esc_html__('Enter a url for your Pinterest.', 'alenastudio'),
            'default'  => '',
        ),
        array(
            'id'       => 'as_youtube_url',
            'type'     => 'text',
            'title'    => esc_html__('Youtube', 'alenastudio'),
            'subtitle' => esc_html__('Enter a url for your Youtube.', 'alenastudio'),
            'default'  => '',
        ),
        array(
            'id'       => 'as_vimeo_url',
            'type'     => 'text',
            'title'    => esc_html__('Vimeo', 'alenastudio'),
            'subtitle' => esc_html__('Enter a url for your Vimeo.', 'alenastudio'),
            'default'  => '',
        ),
        array(
            'id'       => 'as_behance_url',
            'type'     => 'text',
            'title'    => esc_html__('Behance', 'alenastudio'),
            'subtitle' => esc_html__('Enter a url for your Behance.', 'alenastudio'),
            'default'  => '',
        ),
        array(
            'id'       => 'as_flickr_url',
            'type'     => 'text',
            'title'    => esc_html__('Flickr', 'alenastudio'),
            'subtitle' => esc_html__('Enter a url for your Flickr.', 'alenastudio'),
            'default'  => '',
        ),
        array(
            'id'       => 'as_tumblr_url',
            'type'     => 'text',
            'title'    => esc_html__('Tumblr', 'alenastudio'),
            'subtitle' => esc_html__('Enter a url for your Tumblr.', 'alenastudio'),
            'default'  => '',
        ),
        array(
            'id'       => 'as_linkedin_url',
            'type'     => 'text',
            'title'    => esc_html__('Linkedin', 'alenastudio'),
            'subtitle' => esc_html__('Enter a url for your Linkedin.', 'alenastudio'),
            'default'  => '',
        ),
        array(
            'id'       => 'as_instagram_url',
            'type'     => 'text',
            'title'    => esc_html__('Instagram', 'alenastudio'),
            'subtitle' => esc_html__('Enter a url for your Instagram.', 'alenastudio'),
            'default'  => '',
        ),
        array(
            'id'       => 'as_github_url',
            'type'     => 'text',
            'title'    => esc_html__('Github', 'alenastudio'),
            'subtitle' => esc_html__('Enter a url for your Github.', 'alenastudio'),
            'default'  => '',
        ),
        array(
            'id'       => 'as_dropbox_url',
            'type'     => 'text',
            'title'    => esc_html__('Dropbox', 'alenastudio'),
            'subtitle' => esc_html__('Enter a url for your Dropbox.', 'alenastudio'),
            'default'  => '',
        ),
        array(
            'id'       => 'as_foursquare_url',
            'type'     => 'text',
            'title'    => esc_html__('Foursquare', 'alenastudio'),
            'subtitle' => esc_html__('Enter a url for your Foursquare.', 'alenastudio'),
            'default'  => '',
        ),
    )
);
// Theme Info -------------------------------------------------------------------------- >
/*
  $as_docs_img_url = get_template_directory_uri() . '/img/docs/';
  $sections[] = array(
  'icon_class' => 'el-icon-large',
  'icon' => 'el-icon-retweet',
  'title' => esc_html__('Theme Updates', 'alenastudio'),'submenu' => true,
  'fields' => array(
  array(
  'id'=>'enable_auto_updates',
  'type' => 'switch',
  'title' => __( 'Enable Auto Updates', 'alenastudio' ),
  'subtitle'=> esc_html__('You can toggle the automatic updates for your theme on or off.', 'alenastudio'),
  "default" => '0',
  'on' => esc_html__('On', 'alenastudio' ),
  'off' => esc_html__('Off', 'alenastudio' ),
  ),
  array(
  'id'=>'envato_license_key',
  'type' => 'text',
  'title' => esc_html__('Item Purchase Code', 'alenastudio'),
  'subtitle' => esc_html__('Enter your Envato license key here if you wish to receive auto updates for your theme.', 'alenastudio') .'<br /><br /><img src="'. $as_docs_img_url .'envato-license-key.png" />',
  'required' => array('enable_auto_updates','equals','1'),
  ),
  )
  );
 */
global $ReduxFramework;
$ReduxFramework = new ReduxFramework($sections, $args, $tabs);
// Function used to retrieve theme option values
if (!function_exists('as_option')) {

    function as_option($id, $fallback = false, $param = false) {
        global $as_options;
        if ($fallback == false)
            $fallback = '';
        $output   = ( isset($as_options[$id]) && $as_options[$id] !== '' ) ? $as_options[$id] : $fallback;
        if (!empty($as_options[$id]) && $param) {
            $output = $as_options[$id][$param];
        }
        return $output;
    }

}