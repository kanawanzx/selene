<?php
define('TEMPLATEURL', get_template_directory_uri());
define('TEMPLATE_DIR', dirname(__FILE__));
define('AS_ADMIN_PATH', get_template_directory_uri() . '/includes/admin');
define('MODULE_URL', TEMPLATEURL . '/modules');
define('MODULE_PATH', dirname(__FILE__) . '/modules');
    // add multi language
    load_theme_textdomain( 'alenastudio', get_stylesheet_directory().'/languages' );
    load_theme_textdomain( 'live-composer-page-builder', get_stylesheet_directory().'/languages' );
/* ----------------------------------------------------------------------------------- */
/* 	Next Prev Link */
/* ----------------------------------------------------------------------------------- */
require_once dirname(__FILE__) . '/includes/next-prev-link.php';
/* ----------------------------------------------------------------------------------- */
/* 	Library Files */
/* ----------------------------------------------------------------------------------- */
require_once dirname(__FILE__) . '/includes/class-ae-base.php';
require_once dirname(__FILE__) . '/includes/aqua_resizer.php';
require_once dirname(__FILE__) . '/includes/as-main-lib.php';
/* ----------------------------------------------------------------------------------- */
/* 	Admin Options */
/* ----------------------------------------------------------------------------------- */
require_once dirname(__FILE__) . '/includes/admin/framework.php';
require_once dirname(__FILE__) . '/includes/admin/admin-config.php';
/* ----------------------------------------------------------------------------------- */
/* 	Init Functions */
/* ----------------------------------------------------------------------------------- */
require_once dirname(__FILE__) . '/includes/functions.php';
/* ----------------------------------------------------------------------------------- */
/* ----------------------------------------------------------------------------------- */
/* 	Init Plugin */
/* ----------------------------------------------------------------------------------- */
require_once('plugins/plugin_init.php');
/* ----------------------------------------------------------------------------------- */
/* 	Init Widgets */
/* ----------------------------------------------------------------------------------- */
require_once dirname(__FILE__) . '/widgets/widgets.php';
/* ----------------------------------------------------------------------------------- */
/* 	Init Actions */
/* ----------------------------------------------------------------------------------- */
require_once dirname(__FILE__) . '/includes/actions.php';
/* ----------------------------------------------------------------------------------- */
/* 	Init Filters */
/* ----------------------------------------------------------------------------------- */
require_once dirname(__FILE__) . '/includes/filters.php';
/* 	Init AJAX */
/* ----------------------------------------------------------------------------------- */
require_once dirname(__FILE__) . '/includes/ajax.php';
/* 	Function Import */
/* ----------------------------------------------------------------------------------- */
require_once dirname(__FILE__) . '/includes/admin/inc/extensions/wbc_importer/function.php';
