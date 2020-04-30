<?php
/**
 * Constants used by the zen_update_orders_history function.
 *
 * @package languageDefines
 * @copyright Copyright 2003-2018 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: lat9 Mon Oct 22 13:19:39 2018 -0400 New in v1.5.6 $
 */
define('OSH_EMAIL_SEPARATOR', '------------------------------------------------------');
define('OSH_EMAIL_TEXT_SUBJECT', 'ご注文の処理ステータスが更新されました');
define('OSH_EMAIL_TEXT_ORDER_NUMBER', 'ご注文番号:');
define('OSH_EMAIL_TEXT_INVOICE_URL', 'ご注文詳細URL:');
define('OSH_EMAIL_TEXT_DATE_ORDERED', 'ご注文日:');
define('OSH_EMAIL_TEXT_COMMENTS_UPDATE', '<em>ご注文に関するメッセージ: </em>');
define('OSH_EMAIL_TEXT_STATUS_UPDATED', 'お客様のご注文の処理ステータスが更新されました:' . "\n");
define('OSH_EMAIL_TEXT_STATUS_NO_CHANGE', 'お客様のご注文の処理ステータスが変更されませんでした:' . "\n");
define('OSH_EMAIL_TEXT_STATUS_LABEL', '<strong>現在の処理状況: </strong> %s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_CHANGE', '<strong>以前のステータス:</strong> %1$s, <strong>新しいステータス:</strong> %2$s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_PLEASE_REPLY', 'ご質問等がある場合には、このメールに返信してください。' . "\n");

define('SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_SUBJECT', '[注文処理ステータス]');