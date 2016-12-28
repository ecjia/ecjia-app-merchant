<?php
// /**
//  * merchant共用功能加载
//  */
// function merchant_common_loading() {

// // 	/* 商店关闭了，输出关闭的消息 */
// // 	if (ecjia::config('wap_config') == 0) {
// // 		RC_Hook::do_action('ecjia_shop_closed');
// // 	}

// }
// RC_Hook::add_action('ecjia_admin_finish_launching', 'merchant_common_loading');

RC_Hook::add_filter('template', function () {
    return RC_Config::get('system.tpl_style');
}, 11);

// /**
//  * 设置api session id
//  * @param string $session_id session id
//  * @return session_id
//  */
// function set_touch_session_id($session_id) {
//     if (isset($_GET['token']) && !empty($_GET['token'])) {
//         return $_GET['token'];
//     }
//     return ;
// }
// RC_Hook::add_filter('ecjia_front_session_id', 'set_touch_session_id');

/**
 * 自动加载类注册
 */
RC_Hook::add_action('class_ecjia_merchant',             function () {RC_Package::package('app::merchant')->loadClass('ecjia_merchant', false);});
RC_Hook::add_action('class_ecjia_merchant_controller',  function () {RC_Package::package('app::merchant')->loadClass('ecjia_merchant_controller', false);});
RC_Hook::add_action('class_ecjia_merchant_menu',        function () {RC_Package::package('app::merchant')->loadClass('ecjia_merchant_menu', false);});
RC_Hook::add_action('class_ecjia_merchant_screen',      function () {RC_Package::package('app::merchant')->loadClass('ecjia_merchant_screen', false);});
RC_Hook::add_action('class_ecjia_merchant_loader',      function () {RC_Package::package('app::merchant')->loadClass('ecjia_merchant_loader', false);});
RC_Hook::add_action('class_ecjia_merchant_page',        function () {RC_Package::package('app::merchant')->loadClass('ecjia_merchant_page', false);});
RC_Hook::add_action('class_ecjia_merchant_purview',     function () {RC_Package::package('app::merchant')->loadClass('ecjia_merchant_purview', false);});

RC_Hook::add_action('handle_404_error', function ($arg){

});