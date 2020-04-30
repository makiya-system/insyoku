<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: developers_tool_kit.php 18698 2011-05-04 14:50:06Z wilt $
 * @author bigmouse
 */
  define('HEADING_TITLE', '開発者用ツール');
  define('TABLE_CONFIGURATION_TABLE', 'CONSTANT定義を検索');

  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', '<strong>成功</strong>: 属性のソート順を更新しました');

  define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>エラー:</strong> 一致する設定キー(Configuration Keys)が見つかりません...');
  define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>エラー:</strong> 検索のための設定キーかテキストが入力されていません ... 検索を中止しました');

  define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>全商品の価格ソートを更新</strong><br />表示価格でのソートを可能にするには: ');

  define('TEXT_CONFIGURATION_CONSTANT', '<strong>定数とランゲージファイル定義を検索</strong>');
  define('TEXT_CONFIGURATION_KEY', 'Key もしくは名前:');
  define('TEXT_INFO_CONFIGURATION_UPDATE', '<strong>注意:</strong> 定数は大文字で記載された文字列です。　例）SEARCH_CFG_KEYS<br />ドロップダウンで選択されていれば、データベーステーブル内に何も見つからない場合、ランゲージファイル、機能(functions)、クラス(classes)その他の検索が行われます。');

  
  define('TABLE_TITLE_KEY', '<strong>キー:</strong>');
  define('TABLE_TITLE_TITLE', '<strong>タイトル:</strong>');
  define('TABLE_TITLE_DESCRIPTION', '<strong>説明:</strong>');
  define('TABLE_TITLE_GROUP', '<strong>グループ:</strong>');
  define('TABLE_TITLE_VALUE', '<strong>値:</strong>');

  define('TEXT_LOOKUP_NONE', '- 指定なし -');
  define('TEXT_INFO_SEARCHING', '検索中 ');
  define('TEXT_INFO_FILES_FOR', ' ファイル ... 検索フィルタ&nbsp;: ');
  define('TEXT_INFO_MATCHES_FOUND', '一致する行がヒット: ');
  define('TEXT_INFO_FILENAME', 'FILENAME: ');

  define('TEXT_LANGUAGE_LOOKUPS', 'ランゲージファイルの検索:');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', '全ランゲージファイル ' . strtoupper($_SESSION['language']) . ' - ショップページ(Catalog)/管理者ページ(Admin)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', 'メインの全ランゲージファイル - ショップページ(Catalog) (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /espanol.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', '現在選択中の全ランゲージファイル - ' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', 'メインの全ランゲージファイル - 管理者ページ(Admin) (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /espanol.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', '現在選択中の全ランゲージファイル - 管理者ページ(Admin) (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', '現在選択中の全ランゲージファイル - ショップページ(Catalog)/管理者ページ(Admin)');

  define('TEXT_FUNCTION_CONSTANT', '<strong>Function ファイル(Function files)内で機能(Functions)類を検索 </strong>');
  define('TEXT_FUNCTION_LOOKUPS', 'Function ファイルを検索:');
  define('TEXT_FUNCTION_LOOKUP_CURRENT', '全てのFunction ファイル - ショップページ(Catalog)/管理者ページ(Admin)');
  define('TEXT_FUNCTION_LOOKUP_CURRENT_CATALOG', '全てのFunction ファイル - ショップページ(Catalog)');
  define('TEXT_FUNCTION_LOOKUP_CURRENT_ADMIN', '全てのFunction ファイル - 管理者ページ(Admin)');

  define('TEXT_CLASS_CONSTANT', '<strong>Classes ファイル(Classes files)内でクラス(Classes)類を検索</strong>');
  define('TEXT_CLASS_LOOKUPS', 'Classes ファイルを検索:');
  define('TEXT_CLASS_LOOKUP_CURRENT', '全てのClasses ファイル - ショップページ(Catalog)/管理者ページ(Admin)');
  define('TEXT_CLASS_LOOKUP_CURRENT_CATALOG', '全てのClasses ファイル - ショップページ(Catalog)');
  define('TEXT_CLASS_LOOKUP_CURRENT_ADMIN', '全てのClasses ファイル - 管理者ページ(Admin)');

  define('TEXT_TEMPLATE_CONSTANT', '<strong>テンプレートの内容を検索</strong>');
  define('TEXT_TEMPLATE_LOOKUPS', 'テンプレートファイルを検索:');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT', '全てのテンプレートファイル - /templates sideboxes /pages etc.');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_TEMPLATES', '全てのテンプレートファイル - /templates');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_SIDEBOXES', '全てのテンプレートファイル - /sideboxes');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_PAGES', '全てのテンプレートファイル - /pages');

  define('TEXT_ALL_FILES_CONSTANT', '<strong>全てのファイルから検索</strong>');
  define('TEXT_ALL_FILES_LOOKUPS', '全ファイル検索:');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT', '全ファイル - ショップページ(Catalog)/管理者ページ(Admin)');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT_CATALOG', '全ファイル - ショップページ(Catalog)');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT_ADMIN', '全ファイル - 管理者ページ(Admin)');

  define('TEXT_INFO_NO_EDIT_AVAILABLE','編集不可');
  define('TEXT_INFO_CONFIGURATION_HIDDEN', ' or, HIDDEN');

  define('TEXT_SEARCH_ALL_FILES', '全てのファイルを検索: ');
  define('TEXT_SEARCH_DATABASE_TABLES', 'データベース configuration テーブルから検索: ');

  define('TEXT_ALL_FILESTYPE_LOOKUPS', 'ファイルタイプ');
  define('TEXT_ALL_FILES_LOOKUP_PHP', '.php のみ');
  define('TEXT_ALL_FILES_LOOKUP_PHPCSS', '.php と .css');
  define('TEXT_ALL_FILES_LOOKUP_CSS', '.css のみ');
  define('TEXT_ALL_FILES_LOOKUP_HTMLTXT', '.html と .txt');
  define('TEXT_ALL_FILES_LOOKUP_JS', '.js のみ');
  define('TEXT_ALL_FILES_LOOKUP_ALL_TYPES', '全て');

  define('TEXT_CASE_SENSITIVE', '大文字と小文字を区別をする');
  define('TEXT_CONTEXT_LINES', '表示する前後の行数: ');
  define('TEXT_SEARCH_LOOKUP_PLACEHOLDER', '検索する文字列もしくは正規表現を使って入力');
  define('TEXT_SEARCH_KEY_PLACEHOLDER', '検索する Key もしくは語句を入力してください');
  define('TEXT_SEARCH_PHRASE_PLACEHOLDER', '検索語句を入力してください');
  define('TEXT_BUTTON_SEARCH', '検索');
  define('TEXT_BUTTON_SEARCH_ALT', '検索実行');
  define('TEXT_BUTTON_REGEX_SEARCH', '正規表現検索');
  define('TEXT_BUTTON_REGEX_SEARCH_ALT', '正規表現を使った検索');
  define('TEXT_ERROR_REGEX_FAIL', '警告: 検索中にエラーが発生しました。正規表現検索を行っている場合は、正規表現パターンの構文エラーを調べてください。');

  //Search Configuration Keys
  define('SEARCH_CFG_KEYS_HEADING_TITLE','<strong>一般設定情報とKey から検索</strong>');
  define('SEARCH_CFG_KEYS_SEARCH_BOX_TEXT', '<strong>検索文字列:</strong> (一般設定での設定項目名、説明文ならびに Key の完全一致)');
  define('SEARCH_CFG_KEYS_TABLE_SECTION', 'セクション');
  define('SEARCH_CFG_KEYS_TABLE_GROUP','グループ');
  define('SEARCH_CFG_KEYS_TABLE_TITLE', 'タイトル');
  define('SEARCH_CFG_KEYS_TABLE_DESCRIPTION','説明');
  define('SEARCH_CFG_KEYS_TABLE_VALUE','値');
  define('SEARCH_CFG_KEYS_TABLE_KEY_NAME', 'Key Name');
  define('SEARCH_CFG_KEYS_TABLE_EDIT','編集');
  define('SEARCH_CFG_KEYS_NOT_FOUND_KEYS', '設定キーが見つかりません。');
  define('SEARCH_CFG_KEYS_FOUND_KEYS', '設定キーが見つかりました。');
  define('SEARCH_CFG_KEYS_FORM_PLACEHOLDER', '一般設定情報で検索したい単語を入力してください。');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_SEARCH_SORTED_BY_GROUP', '検索（グループごと）');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_SEARCH_SORTED_BY_KEY', '検索（keyごと）');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_VIEW_ALL', '全てを表示（全設定項目）');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_RESET', 'リセット');
  define('TEXT_RESET_BUTTON_ALT', '全ての検索条件をリセットします。');