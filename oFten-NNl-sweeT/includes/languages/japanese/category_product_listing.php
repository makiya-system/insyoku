<?php

/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2019 Jan 04 Modified in v1.5.6a $
 */
define('HEADING_TITLE', 'カテゴリ・商品の管理');
define('HEADING_TITLE_GOTO', 'ジャンプ:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', 'カテゴリ / 商品');
define('TABLE_HEADING_MODEL', '型番');

define('TABLE_HEADING_PRICE', '価格/特価/セール');
define('TABLE_HEADING_QUANTITY', '数量');
define('TABLE_HEADING_STATUS', 'ステータス');
define('TABLE_HEADING_CATEGORIES_SORT_ORDER', '並び順');
define('TABLE_HEADING_ACTION', '操作');
define('TEXT_PRODUCTS_STATUS_ON_OF', ' of ');
define('TEXT_PRODUCTS_STATUS_ACTIVE', ' active ');
define('TEXT_CATEGORIES', 'カテゴリ:');
define('TEXT_PRODUCTS', '商品:');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'カテゴリを削除');
define('TEXT_DELETE_CATEGORY_INTRO', 'このカテゴリを本当に削除しますか?');
define('TEXT_DELETE_CATEGORY_INTRO_LINKED_PRODUCTS', '<strong>警告:</strong> このカテゴリにリンク商品が含まれている場合、マスターカテゴリIDがこのカテゴリIDを指定していないか確認をし、<br />このカテゴリIDが指定されていた場合は他のカテゴリIDに変更する必要があります。<br />このカテゴリIDがマスターカテゴリIDに指定されたまま削除を実行すると、商品のマスターカテゴリIDは存在しないカテゴリIDになってしまうため、<br />カテゴリごとのセール価格の設定が反映できなくなるなどの問題が発生します。');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'カテゴリを移動');
define('TEXT_MOVE_CATEGORIES_INTRO', '<b>「%s」</b> の移動先カテゴリを選んでください。');
define('TEXT_MOVE', '<b>「%s」</b> の移動先:');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', '商品を削除');
define('TEXT_DELETE_PRODUCT_INTRO', '本当にこの商品を完全に削除しますか？<br /><br /><strong>警告：</strong> リンクされている商品の場合<br />1 マスタカテゴリから商品を削除しようとしている場合、マスタカテゴリが別のカテゴリに変更されている事を確認してください。<br />2 商品を削除（リンクを削除）したいカテゴリのチェックボックスにチェックを入れてください');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', '商品を移動');
define('TEXT_MOVE_PRODUCTS_INTRO', '<b>「%s」</b> の移動先カテゴリを選んでください。');
define('TEXT_INFO_CURRENT_CATEGORIES', '登録済みカテゴリ: ');
define('TEXT_INFO_HEADING_COPY_TO', '商品のコピー');
define('TEXT_INFO_COPY_TO_INTRO', 'この商品をコピーする対象のカテゴリを選択してください。');
define('TEXT_INFO_CURRENT_PRODUCT', '選択している商品: ');
define('TEXT_HOW_TO_COPY', 'コピーの方法:');
define('TEXT_COPY_AS_LINK', '別のカテゴリにリンク商品としてコピー');
define('TEXT_COPY_AS_DUPLICATE', '新しい商品として複製コピー(同一のカテゴリ可)');
//define('TEXT_COPY_AS_LINK','Link this product into another category as selected above');
//define('TEXT_COPY_AS_DUPLICATE','Create a Duplicate product in the category selected above');
define('TEXT_COPY_METATAGS','メタタグ情報もコピーしますか？');
define('TEXT_COPY_LINKED_CATEGORIES','リンク先カテゴリ情報もコピーしますか？');
define('TEXT_COPY_AS_DUPLICATE_METATAGS', '言語ID#%u のメタタグ情報を、商品ID#%u から複製した商品ID#%u にコピーしました');
define('TEXT_COPY_AS_DUPLICATE_CATEGORIES', 'カテゴリID#%u へのリンクを、商品ID#%u から複製した商品ID#%u にコピーしました');
define('TEXT_COPY_AS_DUPLICATE_DISCOUNTS', '商品ID#%u の値引きを複製した商品ID#%u にコピーしました');


define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES', '商品オプション変更 商品ID:');
define('TEXT_PRODUCTS_ATTRIBUTES_INFO', '商品オプション:');
define('TEXT_PRODUCT_ATTRIBUTES_DOWNLOADS', 'ダウンロード商品: ');
define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE', 'この商品に登録されている<strong>全ての商品オプションを削除</strong> する:<br />');
define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT', 'この商品の商品オプションを<strong>別の商品</strong>にコピー:<br />');
define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY', 'この商品の商品オプションを<strong>指定カテゴリ内のすべての商品に</strong>にコピー:<br />');
define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>現在の商品オプションをどうしますか?</strong>');
define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>削除</strong>し、新しいオプションをコピーする');
define('TEXT_COPY_ATTRIBUTES_UPDATE','新しい設定/価格を<strong>更新</strong>し、新しいものを追加する');
define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>無視</strong>して新しいオプションだけを追加する');
define('TEXT_ATTRIBUTE_COPY_INSERTING', '<strong>次の商品よりオプションを追加する </strong>');
define('ICON_ATTRIBUTES','商品のオプション');

// Products and Attribute Copy Options
define('TEXT_COPY_ATTRIBUTES_ONLY','複製コピー時のみ使用する設定項目...');
define('TEXT_COPY_ATTRIBUTES','商品オプション情報も複製商品にコピーしますか?');
define('TEXT_COPY_ATTRIBUTES_YES','はい');
define('TEXT_COPY_ATTRIBUTES_NO','いいえ');

// Products and Discount Copy Options
define('TEXT_COPY_DISCOUNTS_ONLY', '数量値引が存在する商品の複製時にのみ利用されます ...');
define('TEXT_COPY_DISCOUNTS', '複製する商品に対して数量値引設定も複製しますか？');
define('TEXT_COPY_DISCOUNTS_YES', 'Yes');
define('TEXT_COPY_DISCOUNTS_NO', 'No');

// From categories.php in 1.5.5
// categories status
define('TEXT_INFO_HEADING_STATUS_CATEGORY', '以下のカテゴリのステータスを変更する:');
define('TEXT_CATEGORIES_STATUS_INTRO', 'カテゴリのステータスを以下に変更する: ');
define('TEXT_CATEGORIES_STATUS_OFF', 'オフ');
define('TEXT_CATEGORIES_STATUS_ON', 'オン');
define('TEXT_PRODUCTS_STATUS_INFO', '全商品のステータスを以下に変更する: ');
define('TEXT_PRODUCTS_STATUS_OFF', 'オフ');
define('TEXT_PRODUCTS_STATUS_ON', 'オン');
define('TEXT_PRODUCTS_STATUS_NOCHANGE', '変更なし');
define('TEXT_CATEGORIES_STATUS_WARNING', '<strong>警告...</strong><br />注意: カテゴリ内の商品を無効にすると、（リンク商品、マスタ商品にかかわりなく）すべてのカテゴリ上での商品表示が無効になります。');
define('TEXT_SUBCATEGORIES_STATUS_INFO', '全てのサブカテゴリのステータスを以下に変更する:');
define('TEXT_SUBCATEGORIES_STATUS_OFF', 'Disabled');
define('TEXT_SUBCATEGORIES_STATUS_ON', 'Enabled');
define('TEXT_SUBCATEGORIES_STATUS_NOCHANGE', 'Unchanged');

define('WARNING_PRODUCTS_IN_TOP_INFO', '警告: トップレベルカテゴリに商品が含まれています。<br />この場合、カテゴリごとの価格設定が適応できないなどを含め、様々な問題が発生します。　見つかった商品： ');

define('TEXT_COPY_MEDIA_MANAGER', 'メディアもコピーしますか？');
