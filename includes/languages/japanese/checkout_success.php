<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: checkout_success.php 14198 2009-08-18 22:32:11Z drbyte $
 * @author bigmouse
 */

define('NAVBAR_TITLE_1', 'レジへ進む');
define('NAVBAR_TITLE_2', '手続完了');

define('HEADING_TITLE', 'ご注文の手続きが完了しました。');

define('TEXT_SUCCESS', '');
define('TEXT_NOTIFY_PRODUCTS', '下記商品についてお知らせメールを希望する');
define('TEXT_SEE_ORDERS', '<a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">マイページ</a>からお客様のご注文履歴をご覧いただけます。');
define('TEXT_CONTACT_STORE_OWNER', 'ご質問などございましたら<a href="' . zen_href_link(FILENAME_CONTACT_US) . '">お問い合わせページ</a>からどうぞ。');
define('TEXT_THANKS_FOR_SHOPPING', 'ご注文ありがとうございました');

define('TABLE_HEADING_COMMENTS', '');

define('FOOTER_DOWNLOAD', '\'%s\'こちらから、後で商品をダウンロードすることもできます。');


define('TEXT_YOUR_ORDER_NUMBER', '<strong>ご注文番号:</strong> ');

define('TEXT_CHECKOUT_LOGOFF_GUEST', 'NOTE: To complete your order, a temporary account was created. You may close this account by clicking Log Off. Clicking Log Off also ensures that your receipt and purchase information is not visible to the next person using this computer. If you wish to continue shopping, feel free! You may log off at anytime using the link at the top of the page.');
define('TEXT_CHECKOUT_LOGOFF_CUSTOMER', 'この度は当店にてご購入いただき、誠にありがとうございます。<br />お客様の履歴や購入情報が、同じパソコンをお使いの方に見られることの無いように、ログオフのリンクをクリックして下さい。');

define('HEADING_ORDER_NUMBER', 'ご注文番号　#%s');
define('HEADING_ORDER_DATE', 'ご注文日:');
define('HEADING_ORDER_TOTAL', '総注文数:');

define('HEADING_DELIVERY_ADDRESS', 'お届先住所');
define('HEADING_SHIPPING_METHOD', '配送方法');

define('HEADING_PRODUCTS', '商品');
define('HEADING_TAX', '税額');
define('HEADING_TOTAL', '合計');
define('HEADING_QUANTITY', '注文数');

define('HEADING_BILLING_ADDRESS', '請求先住所');
define('HEADING_PAYMENT_METHOD', 'お支払方法');

define('HEADING_ORDER_HISTORY', '注文処理履歴とコメント');
define('TEXT_NO_COMMENTS_AVAILABLE', 'コメントはありません。');
define('TABLE_HEADING_STATUS_DATE', '日付');
define('TABLE_HEADING_STATUS_ORDER_STATUS', 'ステータス');
define('TABLE_HEADING_STATUS_COMMENTS', 'コメント');
define('QUANTITY_SUFFIX', '&nbsp;x');
define('ORDER_HEADING_DIVIDER', '&nbsp;-&nbsp;');
define('TEXT_OPTION_DIVIDER', '&nbsp;-&nbsp;');

