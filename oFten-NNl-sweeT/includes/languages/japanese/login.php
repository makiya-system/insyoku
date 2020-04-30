<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: login.php 19286 2011-07-28 15:42:33Z drbyte $
 * @author bigmouse
 */

define('HEADING_TITLE', '管理者ログイン');
define('HEADING_TITLE_EXPIRED', '管理者ログイン - パスワードは有効期限切れになりました。');

define('TEXT_LOGIN','ログイン');
define('TEXT_SUBMIT','送信');
define('TEXT_ADMIN_NAME', '管理者ユーザID: ');
define('TEXT_ADMIN_PASS', '管理者パスワード: ');
define('TEXT_ADMIN_OLD_PASSWORD', '現在のパスワード:');
define('TEXT_ADMIN_NEW_PASSWORD', '新しいパスワード:');
define('TEXT_ADMIN_CONFIRM_PASSWORD', '新しいパスワード(確認用):');

define('ERROR_WRONG_LOGIN', 'ユーザIDまたはパスワードが間違っています。');
define('ERROR_SECURITY_ERROR', 'ログイン時にセキュリティエラーが発生しました。');

define('TEXT_PASSWORD_FORGOTTEN', 'パスワードをお忘れですか？ ');

define('LOGIN_EXPIRY_NOTICE', '15分以上操作をしない場合、再ログインが必要になります。<br /><br />注：すべてのパスワードは、90日おきに期限切れになり、新しいパスワードの入力を求められるようになります。');
define('ERROR_PASSWORD_EXPIRED', '注: パスワードは有効期限切れになりました。新しいパスワードを選択して下さい。パスワードは<strong>半角英数字を混在させ、7文字以上でなければなりません。</strong>');
define('TEXT_TEMPORARY_PASSWORD_MUST_BE_CHANGED', 'セキュリティ上の理由で、パスワードを変更していただく必要があります。新しいパスワードをご入力下さい。<br />パスワードは <strong>半角英数字を混在させ、7文字以上でなければなりません。</strong>');

define('TEXT_EMAIL_SUBJECT_LOGIN_FAILURES', '管理ログイン失敗通知');
define('TEXT_EMAIL_MULTIPLE_LOGIN_FAILURES', '重要なお知らせ: 管理アカウントへの複数回の不成功ログインがありました。 管理アカウントの保護、及び、システム・セキュリティのために、6度ログインに失敗すると、最低30分間ログインがロックされ、その後30分以内に正しいパスワードを入力しても、ログインすることはできません。 この状態で、さらにログインを試みた場合、ロックされる時間がさらに30分追加されます。 この間は、パスワードのリセットなども行うことができません。 ご迷惑をおかけし、申し訳ありません。' . "\n\n最後のログインはこのIPアドレスからアクセスされました。: %s.\n\n\n");

define('EXPIRED_DUE_TO_SSL', '注：サイトが非SSL（安全性が低い）からSSL保護（安全性が高い）に変更されたため、パスワードは期限切れになりました。 SSL保護された環境でパスワードを変更することは、セキュリティを強化するための重要なステップです。 ご不便をかけて申し訳ありません。 標準パスワードの有効期限規則が適用されます。');
