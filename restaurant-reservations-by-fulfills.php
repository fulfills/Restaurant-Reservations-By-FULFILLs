<?php
/*
Plugin Name: Restaurant Reservations By FULFILLs
Plugin URI: https://fulfills.jp/
Description: This is an all-in-one plug-in that allows you to not only set up an contact form, but also receive and reply to messages. Easily and Quickly.
Author: FULFILLs
Author URI: https://fulfills.jp/
Domain Path: /languages/
Version: 1.0.0
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$CFBF_MAIN_SLUG = 'restaurant-reservations-by-fulfills';

// サニタイズ関数
function rerebf_sanitize_for_array($obj, $is_textarea = 0) {
    if(is_array($obj)) {
        foreach($obj as $key => $val) $obj[$key] = cfbf_sanitize_for_array($val, $is_textarea);
        return $obj;
    }
    if($is_textarea) return sanitize_textarea_field($obj);
    return sanitize_text_field($obj);
}

load_plugin_textdomain('restaurant-reservations-by-fulfills');

// About Function
include 'admin/about.php';

// Status Function
include 'admin/status.php';

// Restaurant Setting Function
include 'admin/restaurant.php';

// Display Setting Function
include 'admin/display.php';

// // Other Settings Function
// include 'pages/other-settings/edit.php';

// // CSS出力
// include 'php/css.php';

// // JS出力
// include 'php/js.php';

// // ショートコード 出力
// include 'shortcode/shortcode.php';

// // 投稿タイプ
// include 'php/post_type.php';

// // Add Admin Bar Menu
// include 'php/admin-bar.php';

function cfbf_add_pages() {
    global $CFBF_MAIN_SLUG;
    $cfbfs_cap = (get_option('cfbf_other')['permission-author'] ? 'publish_posts' : 'edit_pages');  // ページ表示権限
    add_menu_page( 'page_title', __('Reservations', 'rerebf'), $cfbfs_cap, $CFBF_MAIN_SLUG, 'cfbf_addpage_about', 'dashicons-carrot', 8);
    add_submenu_page( $CFBF_MAIN_SLUG, __('About Us', 'rerebf'), __('About Us', 'rerebf'), $cfbfs_cap, $CFBF_MAIN_SLUG, 'cfbf_addpage_about' );
    add_submenu_page( $CFBF_MAIN_SLUG, __('Status', 'rerebf'), __('Status', 'rerebf'), $cfbfs_cap, $CFBF_MAIN_SLUG.'-status', 'cfbf_addpage_status' );
    add_submenu_page( $CFBF_MAIN_SLUG, __('Restaurant Setting', 'rerebf'), __('Restaurant Setting', 'rerebf'), 'edit_pages', $CFBF_MAIN_SLUG.'-restaurant', 'cfbf_addpage_restaurant' );
    add_submenu_page( $CFBF_MAIN_SLUG, __('Display Setting', 'rerebf'), __('Display Setting', 'rerebf'), 'edit_pages', $CFBF_MAIN_SLUG.'-display', 'cfbf_addpage_display' );
}
add_action('admin_menu', 'cfbf_add_pages');