<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: index.php 2539 2005-12-11 05:17:05Z ajeh $
//

define('HEADING_TITLE', '処理を選択してください。');

define('BOX_TITLE_ORDERS', '注文');
define('BOX_TITLE_STATISTICS', '統計');

define('BOX_TITLE_FEATURES_SALES', '特価 / おすすめ / セール');

define('BOX_ENTRY_SUPPORT_SITE', 'サポートサイト');
define('BOX_ENTRY_SUPPORT_FORUMS', 'サポートフォーラム');
define('BOX_ENTRY_MAILING_LISTS', 'メーリングリスト');
define('BOX_ENTRY_BUG_REPORTS', 'バグレポート');

define('BOX_ENTRY_FAQ', 'よくある質問');
define('BOX_ENTRY_LIVE_DISCUSSIONS', 'ディスカッション');
define('BOX_ENTRY_CVS_REPOSITORY', 'CVSリポジトリ');
define('BOX_ENTRY_INFORMATION_PORTAL', 'インフォメーション');

define('BOX_CONNECTION_PROTECTED', 'この接続は%s secure SSL connectionで保護されています。');
define('BOX_CONNECTION_UNPROTECTED', 'この接続はsecure SSL connectionによる<font color="#ff0000">保護がありません。</font>');
define('BOX_CONNECTION_UNKNOWN', '接続状態不明');

define('CATALOG_CONTENTS', '顧客');
define('TOOLS_BACKUP', 'バックアップ');
define('TOOLS_BANNERS', 'バナー');
define('TOOLS_FILES', 'ファイル');

define('WO_GRAPH_TITLE', 'オンラインユーザー:');
define('WO_GRAPH_MORE', '詳細...');
define('WO_GRAPH_REGISTERED', 'ログインユーザー:');
define('WO_GRAPH_GUEST', 'ゲスト:');
define('WO_GRAPH_SPIDER', '検索エンジン:');
define('WO_GRAPH_TOTAL', '合計:');
define('WHOS_ONLINE_ACTIVE_TEXT', 'アクティブなカート');
define('WHOS_ONLINE_INACTIVE_TEXT', '非アクティブなカート');
define('WHOS_ONLINE_ACTIVE_NO_CART_TEXT', 'アクティブな空のカート');
define('WHOS_ONLINE_INACTIVE_NO_CART_TEXT', '非アクティブな空のカート');

define('DASHBOARD_DAY', '日付');
define('DASHBOARD_SESSIONS', 'Sessions');
define('DASHBOARD_TOTAL', '合計');
define('DASHBOARD_MONTH', '月');
define('DASHBOARD_SALES', '売上');
define('DASHBOARD_DOLLARS', '');

define('TEXT_COUNTER_HISTORY_TITLE', 'アクセスユーザー履歴　－　過去 14 日');

define('TEXT_MONTHLY_SALES_TITLE', '今月の売上 (配送料を除く)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
define('TEXT_CLICK_FOR_COMPLETE_DETAILS', '詳細はこちら...');

define('TEXT_SALES_TODAY', '売上 <strong>今日</strong> (%s) &nbsp;<strong>$%s</strong>');
define('TEXT_SALES_YESTERDAY', '<strong>昨日</strong> (%s) &nbsp;<strong>$%s</strong>');

// statistics
define('REPORTS_PRODUCTS', '商品');
define('REPORTS_ORDERS', '注文');

define('BOX_ENTRY_CUSTOMERS', '顧客数:');
define('BOX_ENTRY_NEWSLETTERS', 'メールマガジン登録者数:');

define('BOX_ENTRY_PRODUCTS', '商品数:');
define('BOX_ENTRY_PRODUCTS_OFF', '非アクティブ商品:');
define('BOX_ENTRY_REVIEWS', 'レビュー数:');
define('BOX_ENTRY_REVIEWS_PENDING', '承認待ちのレビュー:');

define('BOX_ENTRY_NEW_CUSTOMERS', '新しい顧客:');
define('BOX_ENTRY_NEW_ORDERS', '新しい注文:');

define('BOX_ENTRY_SPECIALS_EXPIRED','特価商品[期限切れ]');
define('BOX_ENTRY_FEATURED_EXPIRED','おすすめ商品[期限切れ]');
define('BOX_ENTRY_SALEMAKER_EXPIRED','セール商品[期限切れ]');

define('BOX_ENTRY_SPECIALS_ACTIVE','特価商品[アクティブ]');
define('BOX_ENTRY_FEATURED_ACTIVE','おすすめ商品[アクティブ]');
define('BOX_ENTRY_SALEMAKER_ACTIVE','セール商品[アクティブ]');

define('LAST_10_DAYS', '直近%s日の履歴');
define('SESSION', 'セッション');
define('TOTAL', '合計');
// DASHBOARD - HOME PAGE OF ADMIN - CUSTOMERS section
define('BOX_TITLE_CUSTOMERS', '顧客');
define('BOX_ENTRY_CUSTOMERS_NORMAL', '- Full Accounts :');
define('BOX_ENTRY_CUSTOMERS_TOTAL', 'Total Customer Accounts :');
define('BOX_ENTRY_CUSTOMERS_TOTAL_DISTINCT', 'Total Distinct Customers :');

define('TEXT_REMOVE', 'Remove');
define('TEXT_UPDATE', 'Update');
define('TEXT_CONFIRM_REMOVE', 'Are you sure you want to remove this widget from the dashboard?');
define('TEXT_WIDGET_UPDATE_HEADER', 'Widget Settings have been updated');

define('TEXT_TIMER_SELECT_NONE', 'No Refresh');
define('TEXT_TIMER_SELECT_1MIN', 'Refresh every Minute');
define('TEXT_TIMER_SELECT_5MIN', 'Refresh every 5 Minutes');
define('TEXT_TIMER_SELECT_10MIN', 'Refresh every 10 Minutes');
define('TEXT_TIMER_SELECT_15MIN', 'Refresh every 15 Minutes');

define('TEXT_NO_WIDGETS_TO_INSTALL', 'There are currently no widgets available to install.');
define('TEXT_FORM_ERROR_CHOOSE_ZONE', 'Please choose a Zone');
define('TEXT_WARNING_SUPERUSER_REQUIRED', 'Only a Superuser can complete the initial setup. You will not be able to use your Admin until this is done.');
define('TEXT_HEADING_SETUP_WIZARD', 'Initial Setup Wizard');

define('TEXT_FORM_LEGEND_REQUIRED_SETUP', 'Required Setup Information');
define('TEXT_FORM_LABEL_STORE_NAME', 'Store Name');
define('TEXT_FORM_LABEL_STORE_OWNER', 'Store Owner');
define('TEXT_FORM_LABEL_STORE_OWNER_EMAIL', 'Store Owner Email');
define('TEXT_FORM_LABEL_STORE_COUNTRY', 'Store Country');
define('TEXT_FORM_LABEL_STORE_ZONE', 'Store Zone');
define('TEXT_FORM_LABEL_STORE_ADDRESS', 'Store Address');

define('TEXT_STORE_NAME', '店舗名');
define('TEXT_STORE_OWNER', '店舗オーナー名');
define('TEXT_STORE_OWNER_EMAIL', '店舗オーナーメールアドレス');
define('TEXT_STORE_COUNTRY', '店舗国名');
define('TEXT_STORE_ZONE', '店舗地域');
define('TEXT_STORE_ADDRESS', '店舗住所');
define('HEADING_TITLE_WIZARD', 'セットアップウィザード');
define('TEXT_STORE_DETAILS', 'あなたの店の詳細を教えてください。全て必須項目です。');
