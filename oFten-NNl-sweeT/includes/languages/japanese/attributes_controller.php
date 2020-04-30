<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: attributes_controller.php 15883 2010-04-11 16:41:26Z wilt $
 * @author bigmouse
 */

define('HEADING_TITLE', 'カテゴリ: ');

define('HEADING_TITLE_OPT', '商品オプション');
define('HEADING_TITLE_VAL', 'オプション値');
define('HEADING_TITLE_ATRIB', '商品オプション管理');
define('HEADING_TITLE_ATRIB_SELECT','商品オプションを表示する商品を選択してください。');

define('TEXT_PRICES_AND_WEIGHTS', '価格と重量の設定');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR', 'プライスファクター');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET', 'オフセット');
define('TABLE_HEADING_ATTRIBUTES_PRICE_ONETIME', 'ワンタイム値引額');

define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_ONETIME', 'ワンタイムプライスファクター');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET_ONETIME', 'ワンタイムオフセット');

define('TABLE_HEADING_ATTRIBUTES_QTY_PRICES', 'オプション数量値引');
define('TABLE_HEADING_ATTRIBUTES_QTY_PRICES_ONETIME', 'ワンタイムオプション数量値引');

define('TABLE_HEADING_ATTRIBUTES_PRICE_WORDS', '１単語の価格');
define('TABLE_HEADING_ATTRIBUTES_PRICE_WORDS_FREE', '無料の単語数');
define('TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS', '１文字の価格');
define('TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS_FREE', '無料の文字数');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_PRODUCT', '商品名');
define('TABLE_HEADING_OPT_NAME', 'オプション名');
define('TABLE_HEADING_OPT_VALUE', 'オプション値');
define('TABLE_HEADING_OPT_PRICE', '価格');
define('TABLE_HEADING_OPT_PRICE_PREFIX', '加/減');
define('TABLE_HEADING_ACTION', '操作');
define('TABLE_HEADING_DOWNLOAD', 'ダウンロード商品:');
define('TABLE_TEXT_FILENAME', 'ファイル名:');
define('TABLE_TEXT_MAX_DAYS', '有効期間(日): (0 = 無期限)');
define('TABLE_TEXT_MAX_COUNT', '最大ダウンロード回数:');
define('TABLE_HEADING_OPT_DISCOUNTED','ディスカウント');
define('TABLE_HEADING_PRICE_BASE_INCLUDED','基本価格に含む');
define('TABLE_HEADING_PRICE_TOTAL','合計｜値引：ワンタイム：');
define('TEXT_WARNING_OF_DELETE', 'このオプションは商品と価格に結びついています。- 安全な削除ができません');
define('TEXT_OK_TO_DELETE', 'このオプションは商品と価格に結びついていません。- 安全に削除できます');
define('TEXT_OPTION_ID', 'オプションID');
define('TEXT_OPTION_NAME', 'オプション名');

define('ATTRIBUTE_WARNING_DUPLICATE','商品オプション複製 - 商品オプションは追加されませんでした'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','複製する商品オプションが存在します。 - 商品オプションは変更されませんでした'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH','商品オプション名とオプション値が一致しません。 - 商品オプションは追加されませんでした'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','商品オプション名とオプション値が一致しません - 商品オプションは変更されませんでした'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','複製可能なオプション名が追加されました。'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','複製可能なオプション値が追加されました。'); // Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING','編集'); // title
define('PRODUCTS_ATTRIBUTES_DELETE','削除'); // title
define('PRODUCTS_ATTRIBUTES_ADDING','オプション追加'); // title
define('TEXT_DOWNLOADS_DISABLED','NOTE: ダウンロードは利用できなくなりました。');

define('TABLE_TEXT_MAX_DAYS_SHORT', '日数:');
define('TABLE_TEXT_MAX_COUNT_SHORT', '最大回数:');

  define('TABLE_HEADING_OPTION_SORT_ORDER','整列順');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','デフォルトの整列順');
  define('TEXT_SORT',' 並び順: ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX','加/減');
  define('TABLE_HEADING_OPT_WEIGHT','重量');
  define('TABLE_HEADING_OPT_SORT_ORDER','整列順');
  define('TABLE_HEADING_OPT_DEFAULT','デフォルト');

  define('TABLE_HEADING_OPT_TYPE', 'オプションタイプ'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE','サイズ');
  define('TABLE_HEADING_OPTION_VALUE_MAX','最大');
  define('TABLE_HEADING_OPTION_VALUE_ROWS','行');
  define('TABLE_HEADING_OPTION_VALUE_COMMENTS','コメント');

  define('TEXT_OPTION_VALUE_COMMENTS','コメント: ');
  define('TEXT_OPTION_VALUE_SIZE','表示サイズ: ');
  define('TEXT_OPTION_VALUE_MAX','最大の長さ: ');

  define('TEXT_ATTRIBUTES_IMAGE','オプション画像:');
  define('TEXT_ATTRIBUTES_IMAGE_DIR','オプション画像ディレクトリ:');

  define('TEXT_ATTRIBUTES_FLAGS','オプションフラグ');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', '表示のみ<br />');
  define('TEXT_ATTRIBUTES_IS_FREE', '商品が無料の場合<br />オプションも無料');
  define('TEXT_ATTRIBUTES_DEFAULT', 'デフォルトで選択<br />');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', 'オプション価格にも<br />特価/セールを適用');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','オプション価格を<br />ベース価格に含める');
  define('TEXT_ATTRIBUTES_REQUIRED','TEXTオプションは<br />入力必須');

  define('LEGEND_BOX','オプションフラグ');
  define('LEGEND_KEYS','無効/有効');
  define('LEGEND_ATTRIBUTES_DISPLAY_ONLY', '　表示のみ　');
  define('LEGEND_ATTRIBUTES_IS_FREE', '無料商品連動');
  define('LEGEND_ATTRIBUTES_DEFAULT', 'デフォルト選択');
  define('LEGEND_ATTRIBUTE_IS_DISCOUNTED', '　割引適用　');
  define('LEGEND_ATTRIBUTE_PRICE_BASE_INCLUDED','ベース価格に含める');
  define('LEGEND_ATTRIBUTES_REQUIRED','TEXTは必須');
  define('LEGEND_ATTRIBUTES_IMAGES','　画像　');
  define('LEGEND_ATTRIBUTES_DOWNLOAD','　有効/無効　<br />ファイル名');

  define('TEXT_ATTRIBUTES_UPDATE_SORT_ORDER','デフォルトの整列順にする');
  define('TEXT_PRODUCTS_LISTING','表示されている商品: ');
  define('TEXT_NO_PRODUCTS_SELECTED','商品が選択されていません');
  define('TEXT_NO_ATTRIBUTES_DEFINED','この商品にはオプションが定義されていません。商品ID：');

  define('TEXT_PRODUCTS_ID','商品ID');
  define('TEXT_ATTRIBUTES_DELETE','全て削除');
  define('TEXT_ATTRIBUTES_COPY_PRODUCTS','オプションを他の商品にコピーする');
  define('TEXT_ATTRIBUTES_COPY_CATEGORY','オプションをカテゴリーにコピーする');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','オプションの変更　商品ID ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','この商品の<strong>全て</strong>のオプションを削除します。:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','オプションを他の商品やカテゴリーにコピーします。:<br />');

  define('TEXT_ATTRIBUTES_COPY_TO_PRODUCTS','商品');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','商品オプションを他の<strong>商品</strong>にコピーします。　コピー元商品ID：');
  define('TEXT_INFO_ATTRIBUTES_FEATURE_COPY_TO','全てのオプションをコピーしたい商品を選択してください:');

  define('TEXT_ATTRIBUTES_COPY_TO_CATEGORY','カテゴリー');
  define('TEXT_INFO_ATTRIBUTES_FEATURE_CATEGORIES_COPY_TO','全てのオプションをコピーするカテゴリを選択してください:');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','<strong>カテゴリー</strong>内の全ての商品に商品オプションをコピーします。 コピー元商品ID：');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>既に商品に対してオプションが指定されている場合はどうしますか？</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','まず<strong>削除</strong>してから、新しい商品オプションをコピーする');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','新しい設定/価格で<strong>更新</strong>してから、新規オプションは追加する');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','現在のものは<strong>無視</strong>して新規オプションとして追加する');

  define('SUCCESS_PRODUCT_UPDATE_SORT','オプションの整列順を更新しました。 商品ID：');
  define('SUCCESS_PRODUCT_UPDATE_SORT_NONE','整列順を更新するオプションがありません。商品ID： ');
  define('SUCCESS_ATTRIBUTES_DELETED','オプションを削除しました。');
  define('SUCCESS_ATTRIBUTES_UPDATE','オプションを更新しました。');

  define('WARNING_PRODUCT_COPY_TO_CATEGORY_NONE','コピー先のカテゴリが選択されていません。');
  define('TEXT_PRODUCT_IN_CATEGORY_NAME',' - カテゴリー: ');

  define('TEXT_DELETE_ALL_ATTRIBUTES','本当に全てのオプションを削除しますか？　商品ID： ');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING','<strong>新しいオプションをスキップ</strong>');
  define('TEXT_ATTRIBUTE_COPY_INSERTING','<strong>次の商品から新しいオプションを追加</strong>');
  define('TEXT_ATTRIBUTE_COPY_UPDATING','<strong>次のオプションを更新</strong>');

// preview
  define('TEXT_ATTRIBUTES_PREVIEW','オプションプレビュー');
  define('TEXT_ATTRIBUTES_PREVIEW_DISPLAY','オプションをプレビューする商品ID：');
  define('TEXT_PRODUCT_OPTIONS', '<strong>選択してください:</strong>');

  define('TEXT_ATTRIBUTES_INSERT_INFO', '<strong>挿入ボタンで商品オプション設定が適用されます。</strong>');
  define('TEXT_PRICED_BY_ATTRIBUTES', '商品オプションによる価格設定');
  define('TEXT_PRODUCTS_PRICE', '商品価格: ');
  define('TEXT_SPECIAL_PRICE', '特別価格: ');
  define('TEXT_SALE_PRICE', 'セール価格: ');
  define('TEXT_FREE', '無料');
  define('TEXT_CALL_FOR_PRICE', '価格問合せ商品');
  define('TEXT_SAVE_CHANGES','変更を保存する:');

  define('TEXT_INFO_ID', 'ID#');
  define('TEXT_INFO_ALLOW_ADD_TO_CART_NO', 'カートに追加されていません');

  define('TEXT_DELETE_ATTRIBUTES_OPTION_NAME_VALUES', '以下のオプションのオプション値を全て削除しますか？');
  define('TEXT_INFO_PRODUCT_NAME', '<strong>商品名: </strong>');
  define('TEXT_INFO_PRODUCTS_OPTION_NAME', '<strong>オプション名: </strong>');
  define('TEXT_INFO_PRODUCTS_OPTION_ID', '<strong>ID：</strong>');
  define('SUCCESS_ATTRIBUTES_DELETED_OPTION_NAME_VALUES', '以下のオプションのオプション値を全て削除しました。: ');
  
  define('BUTTON_ADDITITONAL_ACTIONS', '関連作業クイックリンク');
  define('TEXT_UPDATE_DEFAULTE_SORT_ORDER', '並び順をデフォルト順にする');
  define('TEXT_DELETE_ALL_OPTIONS_FROM_PRODUCT', '商品からすべてのオプションを削除');
  define('TEXT_COPY_ALL_OPTIONS_TO_PRODUCT', 'オプションを他の商品にコピーする');
  define('TEXT_COPY_ALL_OPTIONS_TO_CATEGORY', 'カテゴリ内の全ての商品にオプションをコピーする');
  define('TEXT_SAVE_PRODUCT_FIRST', '先に商品の追加を行ってください。オプション設定には対象商品のIDが必要です。');

