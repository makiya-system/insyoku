<?php
/**
 * @package admin
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: customers.php 6352 2007-05-20 21:05:01Z drbyte $TEXT_INFO_NUMBER_OF_ORDERS
 * @author bigmouse
 */

define('HEADING_TITLE', '顧客管理');

define('TABLE_HEADING_ID', 'ID#');
define('TABLE_HEADING_FIRSTNAME', '姓');
define('TABLE_HEADING_LASTNAME', '名');
define('TABLE_HEADING_ACCOUNT_CREATED', '登録日');
define('TABLE_HEADING_LOGIN', '最終ログイン日');
define('TABLE_HEADING_ACTION', '操作');
define('TABLE_HEADING_PRICING_GROUP', '割引顧客グループ');
define('TABLE_HEADING_AUTHORIZATION_APPROVAL', '顧客ステータス');
define('TABLE_HEADING_GV_AMOUNT', 'ギフト券残高');

define('TEXT_DATE_ACCOUNT_CREATED', '登録日:');
define('TEXT_DATE_ACCOUNT_LAST_MODIFIED', '更新日:');
define('TEXT_INFO_DATE_LAST_LOGON', '最終ログイン日:');
define('TEXT_INFO_NUMBER_OF_LOGONS', 'ログイン回数:');
define('TEXT_INFO_COUNTRY', '国名:');
define('TEXT_INFO_NUMBER_OF_REVIEWS', 'レビュー投稿数:');
define('TEXT_DELETE_INTRO', 'この顧客を本当に削除しますか?');
define('TEXT_DELETE_REVIEWS', 'レビューも削除(投稿数 %s)');
define('TEXT_INFO_HEADING_DELETE_CUSTOMER', '顧客を削除');
define('TYPE_BELOW', '以下に入力してください。');
define('PLEASE_SELECT', '選択してください。');
define('TEXT_INFO_NUMBER_OF_ORDERS', '注文数:');
define('TEXT_INFO_LIFETIME_VALUE', 'Customer Lifetime Value:');
define('TEXT_INFO_LAST_ORDER','最近の注文:');
define('TEXT_INFO_ORDERS_TOTAL', '合計:');
define('CUSTOMERS_REFERRAL', '会員登録時に入力された紹介コード<br />初めて利用した割引きクーポンコード');
define('TEXT_INFO_GV_AMOUNT', 'ギフト券残高');

define('ENTRY_NONE', 'なし');

define('TABLE_HEADING_COMPANY','会社名');

define('TEXT_INFO_HEADING_RESET_CUSTOMER_PASSWORD', '顧客のパスワードをリセットする');
define('TEXT_PWDRESET_INTRO', 'To reset the password for this customer, enter a new password, and confirm it, below. The new password must conform to the normal password rules imposed on customers.');
define('TEXT_CUST_NEW_PASSWORD', '新しいパスワード:');
define('TEXT_CUST_CONFIRM_PASSWORD', '新しいパスワード（確認）:');
define('ERROR_PWD_TOO_SHORT', 'Error: password is shorter than the number of characters configured for this store.');
define('SUCCESS_PASSWORD_UPDATED', 'パスワードを更新しました。');

define('EMAIL_CUSTOMER_PWD_CHANGE_MESSAGE', 'Your password has been changed by the store administrator. Your new password is: ');
define('EMAIL_CUSTOMER_PWD_CHANGE_SUBJECT', 'Account password reset');
define('EMAIL_CUSTOMER_PWD_CHANGE_MESSAGE_FOR_ADMIN', 'You have reset the password for a customer: ' . "\n" . '%s' . "\n\n" . 'Administrator ID: %s');

define('CUSTOMERS_AUTHORIZATION', '承認ステータス');
define('CUSTOMERS_AUTHORIZATION_0', '承認');
define('CUSTOMERS_AUTHORIZATION_1', '未承認 - ブラウズするために認可する必要があります。');
define('CUSTOMERS_AUTHORIZATION_2', '未承認 - 価格のないブラウズかもしれません。');
define('CUSTOMERS_AUTHORIZATION_3', '未承認 - 価格とブラウズが一致していますが、購入はできないかもしれません。');
define('CUSTOMERS_AUTHORIZATION_4', '禁止 - ログインも買い物もできません。');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION1', '警告: あなたのお店はブラウズなしで承認セットアップされています。 顧客は未承認状態です - ブラウズなし');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION2', '警告: あなたのお店はブラウズの価格設定なしで承認セットアップされています. 顧客は未承認状態です - ブラウズの価格設定なし');

define('EMAIL_CUSTOMER_STATUS_CHANGE_MESSAGE', 'Your customer status has been updated. Thank you for shopping with us. We look forward to your business.');
define('EMAIL_CUSTOMER_STATUS_CHANGE_SUBJECT', 'Customer Status Updated');

define('ADDRESS_BOOK_TITLE', 'アドレス帳確認');
define('PRIMARY_ADDRESS', '(標準の配送先)');
define('TEXT_MAXIMUM_ENTRIES', '<span class="coming"><strong>注:</strong></span>アドレス帳は %s 件まで登録が可能です。');
define('TEXT_INFO_ADDRESS_BOOK_COUNT', '&nbsp;&nbsp;&nbsp;|&nbsp;1 of  ');
define('TEXT_INFO_ADDRESS_BOOK_COUNT_SINGLE', '');
?>