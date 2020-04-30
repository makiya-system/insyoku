<?php

/**
 * @copyright Copyright 2006-2020 Bigmouse, Inc
 * @version $Id: samesite_cookie.php 1 2020-02-19 08:56 bigmouse-nfox $
 **/

/**
 * 管理画面に設定項目を追加
 */
if (!defined('SAMESITE_COOKIE_SETTING')) {

  $db->Execute("INSERT INTO " .TABLE_CONFIGURATION ." (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) VALUES ('Samesite Cookie', 'SAMESITE_COOKIE_SETTING', 'false', 'ブラウザのCookieでSamesiteの設定を行うかどうかを設定できます。<br>true:Samesite Cookieを使用します。<br>※下部のブラウザごとの設定で個別に設定できます。<br>false:Samesite Cookieを使用しません。', '15', '80', 'zen_cfg_select_option(array(\'true\', \'false\'), ', now())");
  define('SAMESITE_COOKIE_SETTING', 'false');

  $db->Execute("INSERT INTO " .TABLE_CONFIGURATION ." (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) VALUES ('マイクロソフト edgeでのsamesite設定', 'SAMESITE_COOKIE_SETTING_EDGE', 'UnUsed', 'マイクロソフト edgeのCookieでSamesiteの設定を行うかどうかを設定できます。<br>UnUsed:Samesite Cookieを使用しません。<br>None:サードパーティに対してもCookieを送信します。<br>Lax:サードパーティからの POST・iframe・XHR 等のリクエストに Cookie がセットされません。<br>Strict:サードパーティからは Cookie がセットされません。<br>3Dセキュア等の外部サイトを経由する場合はNoneを設定してください。', '15', '81', 'zen_cfg_select_option(array(\'UnUsed\', \'None\', \'Lax\', \'Strict\'), ', now())");
  define('SAMESITE_COOKIE_SETTING_EDGE', 'UnUsed');

  $db->Execute("INSERT INTO " .TABLE_CONFIGURATION ." (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) VALUES ('マイクロソフト インターネットエクスプローラーでのsamesite設定', 'SAMESITE_COOKIE_SETTING_IE', 'UnUsed', 'マイクロソフト インターネットエクスプローラーのCookieでSamesiteの設定を行うかどうかを設定できます。<br>UnUsed:Samesite Cookieを使用しません。<br>None:サードパーティに対してもCookieを送信します。<br>Lax:サードパーティからの POST・iframe・XHR 等のリクエストに Cookie がセットされません。<br>Strict:サードパーティからは Cookie がセットされません。<br>3Dセキュア等の外部サイトを経由する場合はNoneを設定してください。', '15', '82', 'zen_cfg_select_option(array(\'UnUsed\', \'None\', \'Lax\', \'Strict\'), ', now())");
  define('SAMESITE_COOKIE_SETTING_IE', 'UnUsed');

  $db->Execute("INSERT INTO " .TABLE_CONFIGURATION ." (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) VALUES ('Chromeでのsamesite設定', 'SAMESITE_COOKIE_SETTING_CHROME', 'None', 'Chrome のCookieでSamesiteの設定を行うかどうかを設定できます。<br>UnUsed:Samesite Cookieを使用しません。<br>None:サードパーティに対してもCookieを送信します。<br>Lax:サードパーティからの POST・iframe・XHR 等のリクエストに Cookie がセットされません。<br>Strict:サードパーティからは Cookie がセットされません。<br>3Dセキュア等の外部サイトを経由する場合はNoneを設定してください。', '15', '83', 'zen_cfg_select_option(array(\'UnUsed\', \'None\', \'Lax\', \'Strict\'), ', now())");
  define('SAMESITE_COOKIE_SETTING_CHROME', 'None');

  $db->Execute("INSERT INTO " .TABLE_CONFIGURATION ." (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) VALUES ('Firefoxでのsamesite設定', 'SAMESITE_COOKIE_SETTING_FIREFOX', 'UnUsed', 'FirefoxのCookieでSamesiteの設定を行うかどうかを設定できます。<br>UnUsed:Samesite Cookieを使用しません。<br>None:サードパーティに対してもCookieを送信します。<br>Lax:サードパーティからの POST・iframe・XHR 等のリクエストに Cookie がセットされません。<br>Strict:サードパーティからは Cookie がセットされません。<br>3Dセキュア等の外部サイトを経由する場合はNoneを設定してください。', '15', '84', 'zen_cfg_select_option(array(\'UnUsed\', \'None\', \'Lax\', \'Strict\'), ', now())");
  define('SAMESITE_COOKIE_SETTING_FIREFOX', 'UnUsed');

  $db->Execute("INSERT INTO " .TABLE_CONFIGURATION ." (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) VALUES ('Safariでのsamesite設定', 'SAMESITE_COOKIE_SETTING_SAFARI', 'UnUsed', 'SafariのCookieでSamesiteの設定を行うかどうかを設定できます。<br>UnUsed:Samesite Cookieを使用しません。<br>None:サードパーティに対してもCookieを送信します。<br>Lax:サードパーティからの POST・iframe・XHR 等のリクエストに Cookie がセットされません。<br>Strict:サードパーティからは Cookie がセットされません。<br>3Dセキュア等の外部サイトを経由する場合はNoneを設定してください。', '15', '85', 'zen_cfg_select_option(array(\'UnUsed\', \'None\', \'Lax\', \'Strict\'), ', now())");
  define('SAMESITE_COOKIE_SETTING_SAFARI', 'UnUsed');

  $db->Execute("INSERT INTO " .TABLE_CONFIGURATION ." (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) VALUES ('Operaでのsamesite設定', 'SAMESITE_COOKIE_SETTING_OPERA', 'UnUsed', 'OperaのCookieでSamesiteの設定を行うかどうかを設定できます。<br>UnUsed:Samesite Cookieを使用しません。<br>None:サードパーティに対してもCookieを送信します。<br>Lax:サードパーティからの POST・iframe・XHR 等のリクエストに Cookie がセットされません。<br>Strict:サードパーティからは Cookie がセットされません。<br>3Dセキュア等の外部サイトを経由する場合はNoneを設定してください。', '15', '86', 'zen_cfg_select_option(array(\'UnUsed\', \'None\', \'Lax\', \'Strict\'), ', now())");
  define('SAMESITE_COOKIE_SETTING_OPERA', 'UnUsed');

  $db->Execute("INSERT INTO " .TABLE_CONFIGURATION ." (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) VALUES ('その他ブラウザでのsamesite設定', 'SAMESITE_COOKIE_SETTING_OTHER', 'UnUsed', '上記で定義されていないブラウザのCookieでSamesiteの設定を行うかどうかを設定できます。<br>UnUsed:Samesite Cookieを使用しません。<br>None:サードパーティに対してもCookieを送信します。<br>Lax:サードパーティからの POST・iframe・XHR 等のリクエストに Cookie がセットされません。<br>Strict:サードパーティからは Cookie がセットされません。<br>3Dセキュア等の外部サイトを経由する場合はNoneを設定してください。', '15', '87', 'zen_cfg_select_option(array(\'UnUsed\', \'None\', \'Lax\', \'Strict\'), ', now())");
  define('SAMESITE_COOKIE_SETTING_OTHER', 'UnUsed');
}




/**
 * 現状はchromeに対してのみ対処
 * 多くのブラウザに対してsamesiteの対応をしても問題ないと思われるが
 * 一部のmacOSのsafariでNoneを設定するとStrictとして扱われてしまうので
 * それに対応するための処理
 */
function zen_samesite_cookie()
{
  if (SAMESITE_COOKIE_SETTING != 'true') return false;
  $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
  $samesite = false;
  if (strstr($ua, 'edge')) {
    $samesite = (SAMESITE_COOKIE_SETTING_EDGE == 'UnUsed') ? false : SAMESITE_COOKIE_SETTING_EDGE;
  } elseif (strstr($ua, 'trident') || strstr($ua, 'msie')) {
    $samesite = (SAMESITE_COOKIE_SETTING_IE == 'UnUsed') ? false : SAMESITE_COOKIE_SETTING_IE;
  } elseif (strstr($ua, 'chrome')) {
    $samesite = (SAMESITE_COOKIE_SETTING_CHROME == 'UnUsed') ? false : SAMESITE_COOKIE_SETTING_CHROME;
  } elseif (strstr($ua, 'firefox')) {
    $samesite = (SAMESITE_COOKIE_SETTING_FIREFOX == 'UnUsed') ? false : SAMESITE_COOKIE_SETTING_FIREFOX;
  } elseif (strstr($ua, 'safari')) {
    $samesite = (SAMESITE_COOKIE_SETTING_SAFARI == 'UnUsed') ? false : SAMESITE_COOKIE_SETTING_SAFARI;
  } elseif (strstr($ua, 'opera')) {
    $samesite = (SAMESITE_COOKIE_SETTING_OPERA == 'UnUsed') ? false : SAMESITE_COOKIE_SETTING_OPERA;
  } else {
    $samesite = (SAMESITE_COOKIE_SETTING_OTHER == 'UnUsed') ? false : SAMESITE_COOKIE_SETTING_OTHER;
  }
  return $samesite;
}


/**
 * zen_setcookie()をsamesiteに対応させる
 * 1.5xではzen_setcookie()未使用のため実質はinit_sessions.phpのsetcookie()用
 */
function zen_samesite_setcookie($name, $value = '', $expire = 0, $path = '/', $domain = '', $secure = 0)
{
  global $cookieDomain, $domainPrefix;
  $samesite_cookie = zen_samesite_cookie();
  if ($domain == '') {
    $domain = zen_not_null($cookieDomain) ? $domainPrefix . $cookieDomain : '';
  }  
  if ($samesite_cookie) {
    if (version_compare(PHP_VERSION, '7.3.0') >= 0) {
      setcookie(
        $name,
        $value,
        array(
          'expires' => $expire,
          'path' => $path,
          'domain' => $domain,
          'secure' => $secure,
          'samesite' => $samesite_cookie
        )
      );
    } else {
      setcookie($name, $value, $expire, $path . '; SameSite=' . $samesite_cookie, $domain, $secure);
    }
  } else {
    setcookie($name, $value, $expire, $path, $domain, $secure);
  }
}


/**
 * session_set_cookie_params()をsamesite対応
 */
function zen_samesite_session_set_cookie_params()
{
  global $cookieDomain, $domainPrefix, $path, $secureFlag;
  $samesite_cookie = zen_samesite_cookie();
  if ($samesite_cookie) {
    if (version_compare(PHP_VERSION, '7.3.0') >= 0) {
      $domain = zen_not_null($cookieDomain) ? $domainPrefix . $cookieDomain : '';
      session_set_cookie_params(array(
        'path' => $path,
        'domain' => $domain,
        'secure' => $secureFlag,
        'httponly' => true,
        'samesite' => $samesite_cookie
      ));
    } else {
      session_set_cookie_params(0, $path . '; SameSite=' . $samesite_cookie, (zen_not_null($cookieDomain) ? $domainPrefix . $cookieDomain : ''), $secureFlag, TRUE);
    }
  } else {
    session_set_cookie_params(0, $path, (zen_not_null($cookieDomain) ? $domainPrefix . $cookieDomain : ''), $secureFlag, TRUE);
  }
}
