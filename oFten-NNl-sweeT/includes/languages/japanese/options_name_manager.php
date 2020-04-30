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
//  $Id: options_name_manager.php 2181 2005-10-20 18:37:16Z ajeh $
//  @author bigmouse
//

define('HEADING_TITLE_OPT', '商品オプション名の管理');
define('HEADING_TITLE_VAL', 'オプションの値');
define('HEADING_TITLE_ATRIB', '商品属性');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_PRODUCT', '商品名');
define('TABLE_HEADING_OPT_NAME', 'オプション名');
define('TABLE_HEADING_OPT_VALUE', 'オプションの値');
define('TABLE_HEADING_OPT_PRICE', '価格');
define('TABLE_HEADING_OPT_PRICE_PREFIX', '接頭辞(Prefix)');
define('TABLE_HEADING_ACTION', '操作');
define('TABLE_HEADING_DOWNLOAD', 'ダウンロード商品:');
define('TABLE_TEXT_FILENAME', 'ファイル名:');
define('TABLE_TEXT_MAX_DAYS', '有効期限:');
define('TABLE_TEXT_MAX_COUNT', 'ダウンロード可能回数:');

define('TEXT_WARNING_OF_DELETE', 'このオプションにリンクされた商品・オプション値があります。削除するとエラーが出る可能性があります。');
define('TEXT_OK_TO_DELETE', 'このオプションにリンクされた商品・オプション値はありません。削除可能です。');
define('TEXT_OPTION_ID', 'オプションID');
define('TEXT_OPTION_NAME', 'オプション名');
define('TABLE_HEADING_OPT_DISCOUNTED','値引き');

define('ATTRIBUTE_WARNING_DUPLICATE','オプションの複製 - オプションは追加されませんでした。'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','オプションが既に存在します - オプションは変更されませんでした。'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH','オプション名とオプション値が一致しません - オプションは追加されませんでした。'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','オプション名とオプション値が一致しません - オプションは追加されませんでした。'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','可能な複製オプション名が追加されました(Possible Duplicate Options Name Added)。'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','可能な複製オプション値が追加されました(Possible Duplicate Options Value Added)。'); // Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING','編集'); // title
define('PRODUCTS_ATTRIBUTES_DELETE','削除'); // title
define('PRODUCTS_ATTRIBUTES_ADDING','新しいオプションの追加'); // title
define('TEXT_DOWNLOADS_DISABLED','NOTE: ダウンロード機能オフ');

define('TABLE_TEXT_MAX_DAYS_SHORT', 'ダウンロード期限:');
define('TABLE_TEXT_MAX_COUNT_SHORT', 'ダウンロード可能回数:');

  define('TABLE_HEADING_OPTION_SORT_ORDER','ソート順');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','デフォルトソート順');
  define('TEXT_SORT',' 順番: ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX','接頭辞(Prefix)');
  define('TABLE_HEADING_OPT_WEIGHT','重量');
  define('TABLE_HEADING_OPT_SORT_ORDER','ソート順');
  define('TABLE_HEADING_OPT_DEFAULT','デフォルト');

  define('TABLE_HEADING_YES','Yes');
  define('TABLE_HEADING_NO','No');

  define('TABLE_HEADING_OPT_TYPE', 'オプションのタイプ'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE','表示サイズ');
  define('TABLE_HEADING_OPTION_VALUE_MAX','最大文字数(byte)');
  define('TABLE_HEADING_OPTION_VALUE_ROWS','列');
  define('TABLE_HEADING_OPTION_VALUE_COMMENTS','コメント');

  define('TEXT_OPTION_VALUE_COMMENTS','コメント: ');
  define('TEXT_OPTION_VALUE_ROWS', '行: ');
  define('TEXT_OPTION_VALUE_SIZE','表示サイズ: ');
  define('TEXT_OPTION_VALUE_MAX','最大文字数(byte): ');

  define('TEXT_ATTRIBUTES_IMAGE','オプション見本画像:');
  define('TEXT_ATTRIBUTES_IMAGE_DIR','オプション画像ディレクトリ:');

  define('TEXT_ATTRIBUTES_FLAGS','オプション<br />フラグ:');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', '使用目的<br />表示のみ:');
  define('TEXT_ATTRIBUTES_IS_FREE', '商品が無料の場合<br />オプションも無料:');
  define('TEXT_ATTRIBUTES_DEFAULT', 'デフォルト属性<br />マーク・選択されているもの:');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', '商品と同じ<br />割引を適用:');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','オプションによる価格表示で<br />商品のベース価格を含む');

  define('TEXT_PRODUCT_OPTIONS_INFO','商品オプション名の設定');

// updates
define('ERROR_PRODUCTS_OPTIONS_VALUES', '警告: 商品が見つかりません。何も更新されませんでした。');

define('TEXT_SELECT_PRODUCT', ' 商品を選択');
define('TEXT_SELECT_CATEGORY', ' カテゴリを選択');
define('TEXT_SELECT_OPTION', ' オプション名を選択');

// add
define('TEXT_OPTION_VALUE_ADD_ALL', '<br /><strong>オプション値の一括登録<br />対応するオプション名を持つすべての商品に');
define('TEXT_INFO_OPTION_VALUE_ADD_ALL', '指定されたオプションが既に登録されている全ての商品に対して、オプション名と紐付けられている全オプション値を追加します。');
define('SUCCESS_PRODUCTS_OPTIONS_VALUES', 'オプションの更新成功 ');

define('TEXT_OPTION_VALUE_ADD_PRODUCT', '<br /><strong>オプション値の一括登録<br />指定した商品のオプションに</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_PRODUCT', '指定した商品に対して、オプション名と紐付けられている全てのオプション値を追加します。');

define('TEXT_OPTION_VALUE_ADD_CATEGORY', '<br /><strong>オプション値の一括登録<br />指定したカテゴリ内の商品に<strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_CATEGORY', '特定のカテゴリ内で、指定されたオプションが既に登録されている全商品に対して、オプション名と紐付けられている全てのオプション値を追加します。');

define('TEXT_COMMENT_OPTION_VALUE_ADD_ALL', '<strong>注意：</strong>ソート順は、この商品群のデフォルトのオプション値のソート順に設定されます。');

// delete
define('TEXT_OPTION_VALUE_DELETE_ALL', '<br /><strong>オプションの一括削除<br />対応するオプションを持ったすべての商品から</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', '全ての商品から指定したオプションを削除します。');

define('TEXT_OPTION_VALUE_DELETE_PRODUCT', '<br /><strong>オプションの一括削除<br />特定の商品から</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_PRODUCT', '特定の商品から指定したオプションを削除します。');

define('TEXT_OPTION_VALUE_DELETE_CATEGORY', '<br /><strong>オプションの一括削除<br />特定のカテゴリ内の商品から</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_CATEGORY', '特定のカテゴリ内の全ての商品から、指定したオプションを削除します。');

define('TEXT_COMMENT_OPTION_VALUE_DELETE_ALL', '<strong>注意：</strong> 対象となる商品からオプション名、オプション値の登録情報を削除しますが、オプション値の設定自体がなくなるわけではありません。');

define('TEXT_OPTION_VALUE_COPY_ALL', '<strong>オプション値の一括コピー</strong>');
define('TEXT_INFO_OPTION_VALUE_COPY_ALL', 'オプション名に紐付けされているすべてのオプション値を、他のオプション名に対してコピーします。');
define('TEXT_SELECT_OPTION_FROM', 'このオプション名が持つ全てのオプション値を');
define('TEXT_SELECT_OPTION_TO', 'このオプション名に対してコピー');
define('SUCCESS_OPTION_VALUES_COPIED', 'コピー成功!');
define('ERROR_OPTION_VALUES_COPIED', 'エラー - オプション値は同じオプション名にはコピーできません! ');
define('ERROR_OPTION_VALUES_NONE', 'エラー - 指定されたオプション名には、オプション値がありません。何もコピーされませんでした! ');
define('TEXT_WARNING_BACKUP', '警告： 大きな変更をする前には、常にデータベースをバックアップしましょう!');

define('TEXT_OPTION_ATTRIBUTE_IMAGES_PER_ROW', '列(Row)あたりの属性画像： ');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE', 'ラジオボタン・チェックボックスの属性スタイル： ');
define('TEXT_OPTION_ATTIBUTE_MAX_LENGTH', '<strong>テキスト属性の最長と表示サイズ：</strong><br />');
define('TEXT_OPTION_IMAGE_STYLE', '<strong>画像のスタイル:</strong>');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_0', '0= オプション名の下に画像');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_1', '1= 要素、画像、オプション名');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_2', '2= 要素、画像、Element, Image and Option Name Below');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_3', '3= 要素と画像の下にオプション名');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_4', '4= 画像とオプション名の下に要素');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_5', '5= 画像とオプション名の上に要素');
?>