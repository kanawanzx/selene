<?php

class Sub_Walker_Res_Menu extends Walker_Nav_Menu {

    function start_lvl(&$output, $depth = 0, $args = array()) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dl-submenu\">\n";
    }

}

define('AJAX_PREFIX', 'wp_ajax_');
define('AJAX_NOPRIV_PREFIX', 'wp_ajax_nopriv_');
define('FILTER_SCRIPT', 'as_enqueue_script');
define('FILTER_STYLE', 'as_enqueue_style');

function add_existed_script($handle, $src = '', $deps = array(), $ver = false, $in_footer = true) {
    wp_enqueue_script($handle, $src, $deps, $ver, $in_footer);
}

function add_script($handle, $src, $deps = array(), $ver = false, $in_footer = true) {
    $scripts = apply_filters(FILTER_SCRIPT, array(
        'handle'    => $handle,
        'src'       => $src,
        'deps'      => $deps,
        'ver'       => $ver,
        'in_footer' => $in_footer
    ));
    wp_register_script($scripts['handle'], $scripts['src'], $scripts['deps'], $scripts['ver'], $scripts['in_footer']);
    wp_enqueue_script($scripts['handle']);
}

function add_style($handle, $src = false, $deps = array(), $ver = false, $media = 'all') {
    $style = apply_filters(FILTER_STYLE, array(
        'handle' => $handle,
        'src'    => $src,
        'deps'   => $deps,
        'ver'    => $ver,
        'media'  => $media
    ));
    wp_register_style($style['handle'], $style['src'], $style['deps'], $style['ver'], $style['media']);
    wp_enqueue_style($style['handle']);
}

function add_ajax($hook, $callback, $priv = true, $no_priv = true, $priority = 10, $accepted_args = 1) {
    if ($priv) {
        add_action(AJAX_PREFIX . $hook, $callback, $priority, $accepted_args);
    }
    if ($no_priv) {
        add_action(AJAX_NOPRIV_PREFIX . $hook, $callback, $priority, $accepted_args);
    }
}

function as_add_cookie($name, $value, $expire = 0) {
    if ($expire == 0) {
        $expire = time() + 60 * 60 * 24 * 30;
    }
    $value                         = json_encode(stripslashes_deep($value));
    $_COOKIE[WISHLIST_COOKIE_NAME] = $value;
    wc_setcookie($name, $value, $expire, false);
}

function as_get_cookie($name) {
    if (isset($_COOKIE[$name])) {
        return json_decode(stripslashes($_COOKIE[$name]), true);
    }

    return array();
}
