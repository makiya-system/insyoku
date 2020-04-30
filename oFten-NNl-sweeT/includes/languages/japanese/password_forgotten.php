<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: password_forgotten.php 18784 2011-05-25 07:40:29Z drbyte $
 * @author bigmouse
 */

define('HEADING_TITLE', 'パスワード再発行');

define('TEXT_ADMIN_EMAIL', '管理者メールアドレス: ');
define('TEXT_BUTTON_REQUEST_RESET', 'パスワードをリセットする');
define('TEXT_BUTTON_LOGIN', 'ログイン');
define('TEXT_BUTTON_CANCEL', 'キャンセル');

define('ERROR_WRONG_EMAIL', '入力されたメールアドレスが間違っています。');
define('ERROR_WRONG_EMAIL_NULL', '正しく入力してください。');
define('MESSAGE_PASSWORD_SENT', 'パスワードリセットを実行しました。入力したメールアドレスがデータベースの管理者アカウントと一致する場合は、新しいパスワードがそのメールアドレスに送信されます。<br />メールを確認して、[ログイン]から、発行された新しい仮パスワードでログインしてください。</p>');

define('TEXT_EMAIL_SUBJECT_PWD_RESET', 'パスワード再発行のご依頼がありました');
define('TEXT_EMAIL_MESSAGE_PWD_RESET', ' %s から新しいパスワードの発行要請がありました。' . "\n\n" . '新しい仮パスワード:' . "\n\n   %s\n\nログイン画面にて仮パスワードを入力後、新しいパスワードを設定して下さい。\n\nこの仮パスワードは24時間で期限切れになります。\n\n\n");

