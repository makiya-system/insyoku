<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: admin_page_registration.php 18695 2011-05-04 05:24:19Z drbyte $
 * @author bigmouse
 */

define('HEADING_TITLE', '管理ページの登録');
define('TEXT_PAGE_KEY', 'ページキー');
define('TEXT_LANGUAGE_KEY', 'ページ名');
define('TEXT_MAIN_PAGE', 'ページのファイル名');
define('TEXT_PAGE_PARAMS', 'ページの変数');
define('TEXT_MENU_KEY', 'メニュー');
define('TEXT_DISPLAY_ON_MENU', 'メニューに表示しますか？');
define('TEXT_SORT_ORDER', '整列順');

define('TEXT_EXAMPLE_PAGE_KEY', '(例： myModPageName)');
define('TEXT_EXAMPLE_LANGUAGE_KEY', '(例： BOX_MY_MOD_PAGE_NAME)');
define('TEXT_EXAMPLE_MAIN_PAGE', '(例： FILENAME_PAGE_NAME)');
define('TEXT_EXAMPLE_PAGE_PARAMS', '(例： option=1 のように指定するか、通常は空欄でかまいません');
define('TEXT_SELECT_MENU', '-メニューを選択してください-');

define('ERROR_PAGE_KEY_NOT_ENTERED', 'ページキーが入力されていません。管理画面では全てのページに対してユニークなページキーが必要です。');
define('ERROR_PAGE_KEY_ALREADY_EXISTS', '指定されたページキーは既に利用されています。ページキーは必ずユニークなものを指定してください。');
define('ERROR_LANGUAGE_KEY_NOT_ENTERED', 'ランゲージキーが入力されていません。管理画面では全てのページに対してメニューリンクに表示するランゲージキーが必要です。');
define('ERROR_LANGUAGE_KEY_HAS_NOT_BEEN_DEFINED', '指定されたランゲージキーは定義されていません。入力内容が正しいか再度確認してください。');
define('ERROR_MAIN_PAGE_NOT_ENTERED', 'ページのファイル名が入力されていません。');
define('ERROR_FILENAME_HAS_NOT_BEEN_DEFINED', '指定されたファイル名は存在していません。入力内容が正しいか再度確認してください。');
define('ERROR_MENU_NOT_CHOSEN', 'メニューが選択されていません。メニューに表示させない場合でも、新しいページはメニューに紐付ける必要があります。');
define('SUCCESS_ADMIN_PAGE_REGISTERED', '管理者ページの登録が完了しました。');
