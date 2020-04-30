<?php
/**
 * Constants used by the zen_update_orders_history function.
 *
 * @package admin
 * @copyright Copyright 2003-2018 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: lat9 Mon Oct 22 13:19:39 2018 -0400 New in v1.5.6 $
 */
define('OSH_EMAIL_SEPARATOR', '------------------------------------------------------');
define('OSH_EMAIL_TEXT_SUBJECT', 'ご注文受付状況のお知らせ');
define('OSH_EMAIL_TEXT_ORDER_NUMBER', 'ご注文受付番号:');
define('OSH_EMAIL_TEXT_INVOICE_URL', "<br />" . 'ご注文受付状況詳細:');
define('OSH_EMAIL_TEXT_DATE_ORDERED', "<br />" . 'ご注文日:');
define('OSH_EMAIL_TEXT_COMMENTS_UPDATE', "<br />" . '<strong>[ご連絡事項]</strong>' . "<br />\n");
define('OSH_EMAIL_TEXT_STATUS_UPDATED', 'ご注文状況は次のようになっております。' . "<br /><br />\n\n");
define('OSH_EMAIL_TEXT_STATUS_NO_CHANGE', '受付状況は変更されてません:' . "\n");
define('OSH_EMAIL_TEXT_STATUS_LABEL', '<strong>現在の受付状況: %s' . "</strong><br /><br /><br />\n\n\n");
define('OSH_EMAIL_TEXT_STATUS_CHANGE', '<strong>過去の受付状況:</strong> %1$s, <strong>新しい受付状況:</strong> %2$s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_PLEASE_REPLY', 'ご質問などがございましたら、このメールにご返信ください。' . "\n");
