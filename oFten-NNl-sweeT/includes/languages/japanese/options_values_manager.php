<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: options_values_manager.php 15883 2010-04-11 16:41:26Z wilt $
 * @author bigmouse
 */

define('HEADING_TITLE_OPT', '商品オプション値の管理');
define('HEADING_TITLE_VAL', '商品オプション値の管理');
define('HEADING_TITLE_ATRIB', '商品属性');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_PRODUCT', '商品名');
define('TABLE_HEADING_OPT_NAME', 'オプション名');
define('TABLE_HEADING_OPT_VALUE', 'オプション値');
define('TABLE_HEADING_OPT_PRICE', '価格');
define('TABLE_HEADING_OPT_PRICE_PREFIX', '接頭辞(Prefix)');
define('TABLE_HEADING_ACTION', '操作');
define('TABLE_HEADING_DOWNLOAD', 'ダウンロード商品:');
define('TABLE_TEXT_FILENAME', 'ファイル名:');
define('TABLE_TEXT_MAX_DAYS', 'ダウンロード期限:');
define('TABLE_TEXT_MAX_COUNT', '最大ダウンロード回数:');

define('TEXT_WARNING_OF_DELETE', 'このオプションにリンクされた商品・オプション値があります。削除するとエラーが出る可能性があります。');
define('TEXT_OK_TO_DELETE', 'このオプションにリンクされた商品・オプション値はありません。削除可能です。');
define('TEXT_OPTION_ID', 'オプションID');
define('TEXT_OPTION_NAME', 'オプション名');
define('TABLE_HEADING_OPT_DISCOUNTED','ディスカウント');

define('ATTRIBUTE_WARNING_DUPLICATE','属性を複製 - 属性は追加されませんでした。'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','属性の複製は存在します - 属性は変更されませんでした。'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH','属性オプションとオプション値が一致しません - 属性は追加されませんでした。'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','属性オプションとオプション値が一致しません - 属性は追加されませんでした。'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','可能な複製オプション名が追加されました(Possible Duplicate Options Name Added)。'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','可能な複製オプション値が追加されました(Possible Duplicate Options Value Added)。'); // Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING','編集'); // title
define('PRODUCTS_ATTRIBUTES_DELETE','削除'); // title
define('PRODUCTS_ATTRIBUTES_ADDING','新しい属性の追加'); // title
define('TEXT_DOWNLOADS_DISABLED','NOTE: ダウンロード機能オフ');

define('TABLE_TEXT_MAX_DAYS_SHORT', 'ダウンロード期限:');
define('TABLE_TEXT_MAX_COUNT_SHORT', 'ダウンロード可能回数:');

  define('TABLE_HEADING_OPTION_SORT_ORDER','ソート順');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','デフォルト順');
  define('TEXT_SORT',' Order: ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX','接頭辞(Prefix)');
  define('TABLE_HEADING_OPT_WEIGHT','重量');
  define('TABLE_HEADING_OPT_SORT_ORDER','ソート順');
  define('TABLE_HEADING_OPT_DEFAULT','デフォルト');

  define('TABLE_HEADING_YES','はい');
  define('TABLE_HEADING_NO','いいえ');

  define('TABLE_HEADING_OPT_TYPE', 'オプションのタイプ'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE','サイズ');
  define('TABLE_HEADING_OPTION_VALUE_MAX','最高');
  define('TABLE_HEADING_OPTION_VALUE_ROWS','列');
  define('TABLE_HEADING_OPTION_VALUE_COMMENTS','コメント');

  define('TEXT_OPTION_VALUE_COMMENTS','コメント: ');
  define('TEXT_OPTION_VALUE_SIZE','表示サイズ: ');
  define('TEXT_OPTION_VALUE_MAX','最長: ');

  define('TEXT_ATTRIBUTES_IMAGE','属性の画像見本:');
  define('TEXT_ATTRIBUTES_IMAGE_DIR','属性の画像ディレクトリ:');

  define('TEXT_ATTRIBUTES_FLAGS','属性<br />フラグ:');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', '使用目的<br />表示のみ:');
  define('TEXT_ATTRIBUTES_IS_FREE', '属性は無料<br />商品が無料の際は:');
  define('TEXT_ATTRIBUTES_DEFAULT', 'デフォルト属性<br />マーク・選択されているもの:');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', '同じディスカウントを適用<br />商品に使用:');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','ベース価格に含む<br />属性によって価格決定の場合');

  define('TEXT_PRODUCT_OPTIONS_INFO','商品オプションの追加設定');

// Option Names/Values copier from one to another
  define('TEXT_OPTION_VALUE_COPY_ALL', '<strong>オプション情報一括登録<br />指定されたオプション名とオプション値を持っている商品に対して</strong>');
  define('TEXT_INFO_OPTION_VALUE_COPY_ALL', '現在登録されているオプション名とオプション値を利用して情報を追加したい対象商品を指定し、条件に適合する全ての商品にオプション情報を一括登録します。');
  define('TEXT_SELECT_OPTION_FROM', '適合するオプション名:');
  define('TEXT_SELECT_OPTION_VALUES_FROM', '適合するオプション値:');
  define('TEXT_SELECT_OPTION_TO', '追加するオプション名:');
  define('TEXT_SELECT_OPTION_VALUES_TO', '追加するオプション値:');
  define('TEXT_SELECT_OPTION_VALUES_TO_CATEGORIES_ID', '空欄にしておくか、更新したい商品のカテゴリーIDを入力してください');//Leave blank for ALL Products or<br />enter a Category ID for Products to update

// Option Name/Value to Option Name for Category with Product defaults
  define('TEXT_OPTION_VALUE_COPY_OPTIONS_TO', '<strong>オプション情報一括登録 - 登録済み詳細情報の利用<br /></strong>');//<strong>Copy Option Name/Value to Products with existing Option Name ...</strong>
  define('TEXT_INFO_OPTION_VALUE_COPY_OPTIONS_TO', '指定されたオプション名をすでに持っている商品に対して、オプション情報を追加します。<br />また追加したいオプション情報に関して、既に<strong>オプションによる価格や重量などの設定</strong>が済んでいる商品があれば、その商品IDを指定する事でそれらの設定情報も合わせてコピーする事ができます。<br />
<strong>利用例:</strong>「オプション名:サイズ」を持っているすべての商品に、「オプション名:色、オプション値:赤」を追加<br />
<strong>利用例:</strong>「オプション名:サイズ」を持っているすべての商品に、「オプション名:色、オプション値:赤」を商品ID：34の商品で登録されている設定値と共に追加<br />
<strong>利用例:</strong>「オプション名:サイズ」を持っているカテゴリID：65内の全ての商品に、「オプション名:色、オプション値:赤」を商品ID：34の商品で登録されている設定値と共に追加<br />');

  define('TEXT_SELECT_OPTION_TO_ADD_TO', '適合するオプション名:');
  define('TEXT_SELECT_OPTION_FROM_ADD', '追加するオプション名:');
  define('TEXT_SELECT_OPTION_VALUES_FROM_ADD', '追加するオプション値:');
  define('TEXT_SELECT_OPTION_FROM_PRODUCTS_ID', 'コピーしたいオプション詳細情報を持った商品ID、無い場合は空欄:');
  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>既存のオプション情報のあつかい</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>削除</strong> 先に削除してから、新しいオプションを追加');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>更新</strong> 新しい設定情報で既存のオプションを上書きする');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>無視</strong> 既に同じオプションがある場合はなにもしない');

  define('TEXT_INFO_FROM', ' から: ');
  define('TEXT_INFO_TO', ' へ: ');
  define('ERROR_OPTION_VALUES_COPIED', 'エラー: 無効なオプション名とオプション値です');
  define('ERROR_OPTION_VALUES_COPIED_MISMATCH', 'エラー: 選択されたオプション名とオプション値が適合しません。');
  define('ERROR_OPTION_VALUES_NONE', 'エラー: コピーするものがありません');
  define('SUCCESS_OPTION_VALUES_COPIED', 'コピーは成功しました! ');
  define('ERROR_OPTION_VALUES_COPIED_MISMATCH_PRODUCTS_ID', 'エラー: Products ID#のオプション名とオプション値が失われています');//Missing Option Name/Value for Products ID#

  define('TEXT_OPTION_VALUE_DELETE_ALL', '<strong>オプション情報一括削除<br />指定されたオプション名とオプション値を持っている商品から</strong>');
  define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', '商品に登録されている指定されたオプション情報をすべての商品から一括削除します。');
  define('TEXT_SELECT_DELETE_OPTION_FROM', '適合するオプション名:');
  define('TEXT_SELECT_DELETE_OPTION_VALUES_FROM', '適合するオプション値:');


  define('ERROR_OPTION_VALUES_DELETE_MISMATCH', 'エラー: 選択されたオプション名とオプション値が適合しません');

  define('SUCCESS_OPTION_VALUES_DELETE', '成功l: :の削除 ');
