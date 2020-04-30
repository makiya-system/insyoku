<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: products_to_categories.php 18698 2011-05-04 14:50:06Z wilt $
 */

define('HEADING_TITLE','マルチカテゴリーリンクマネージャー');
define('HEADING_TITLE2','カテゴリー / 商品');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_AVAILABLE', 'リンク設定可能な商品カテゴリー ...');

define('TABLE_HEADING_PRODUCTS_ID', 'Prod ID');
define('TABLE_HEADING_PRODUCT', '商品名');
define('TABLE_HEADING_MODEL', 'モデル');
define('TABLE_HEADING_ACTION', '操作');

define('TEXT_INFO_HEADING_EDIT_PRODUCTS_TO_CATEGORIES', '商品のカテゴリー情報を編集します。');
define('TEXT_PRODUCTS_ID', '商品 ID： ');
define('TEXT_PRODUCTS_NAME', '商品: ');
define('TEXT_PRODUCTS_MODEL', 'モデル: ');
define('TEXT_PRODUCTS_PRICE', '価格: ');
define('BUTTON_UPDATE_CATEGORY_LINKS', 'カテゴリーリンク登録の更新');
define('BUTTON_NEW_PRODUCTS_TO_CATEGORIES', 'リンク登録する商品を選択');
define('TEXT_SET_PRODUCTS_TO_CATEGORIES_LINKS', 'リンクするカテゴリーに商品をセット: ');
define('TEXT_INFO_LINKED_TO_COUNT', '&nbsp;&nbsp;現在この商品がリンクされているカテゴリー数: ');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER_INTRO',
'商品のカテゴリーリンクは、指定した商品を一つまたは複数のカテゴリに対して簡単にリンク指定できるよう設計されています。<br />カテゴリ内のすべての商品を別のカテゴリにリンクしたり、指定したカテゴリ内の全商品から別のカテゴリへのリンクを一括削除することもできます。（詳しい手順については下記を参照してください）');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER',
'商品への価格設定を行うためには、リンクするカテゴリの数に関係なく、マスターカテゴリーの指定が必要です。 これはマスターカテゴリドロップダウンで設定できます。<br />
この商品は現在、上記カテゴリーリスト内でチェックが入っているカテゴリーにリンクされています。 新しいカテゴリーにリンクを追加するには、カテゴリー名の横にあるチェックボックスにチェックを入れるだけです。 既にリンクされているカテゴリから削除するには、カテゴリ名の横にあるチェックボックスのチェックを外します。<br />
この商品をリンクさせたいすべてのカテゴリーをチェックしたら、「' . BUTTON_UPDATE_CATEGORY_LINKS . '」ボタンを押してください。<br />'
);

define('HEADER_CATEGORIES_GLOBAL_CHANGES', 'カテゴリーリンクとマスターカテゴリーIDの一括リセット');

define('TEXT_SET_MASTER_CATEGORIES_ID', '<strong>警告:</strong> リンク先カテゴリー情報を変更するには、マスターカテゴリーIDが必要です。');

// copy category to category linked
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_LINKED', '<strong>カテゴリー内の全ての商品を別のカテゴリーへリンク商品としてコピー...</strong><br />例: 8 と 22 を指定した場合、カテゴリID=8内のすべての商品が、カテゴリID＝22にリンク商品登録されます');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', '指定するIDのカテゴリ内の全ての商品を: ');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'このカテゴリにリンク商品登録する: ');
define('BUTTON_COPY_CATEGORY_LINKED', 'リンク商品として登録');

define('WARNING_PRODUCTS_LINK_TO_CATEGORY_REMOVED', '警告: 商品はリセットされており、もうこのカテゴリーには登録されていません…');
define('WARNING_COPY_LINKED', '警告: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', '無効な作業対象カテゴリーです: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', '無効なリンク先カテゴリーです: ');
define('WARNING_NO_CATEGORIES_ID', '警告: カテゴリーが選択されませんでした ... 変更していません。');
define('SUCCESS_COPY_LINKED', '商品のカテゴリーリンク情報の更新に成功しました。 ... ');
define('SUCCESS_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', '有効な作業対象カテゴリーです: ');
define('SUCCESS_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', '有効なリンク先カテゴリーです: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED_MISSING', 'WARNING: Copy completed to Invalid Category to Link: ');

define('WARNING_COPY_FROM_IN_TO_LINKED', '<strong>警告: 既にリンクされている商品は変更されていません ... </strong>');

// remove category to category linked
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_LINKED', '<strong>カテゴリー内に存在する別のカテゴリーにリンク商品登録されているすべてのリンク商品を削除します ...</strong><br />例: 8 と 22 を指定した場合、カテゴリID=8内のすべての商品が、カテゴリID＝22から削除されます');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', '指定するIDのカテゴリ内の全ての商品を:');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'このリンク先カテゴリから削除: ');
define('BUTTON_REMOVE_CATEGORY_LINKED', 'リンク商品を削除');

define('WARNING_REMOVE_LINKED', '警告: ');
define('WARNING_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', '無効な作業対象カテゴリー: ');
define('WARNING_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', '無効なリンク削除対象カテゴリー: ');
define('SUCCESS_REMOVE_LINKED', 'リンク商品の削除に成功しました ... ');
define('SUCCESS_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', '有効な作業対象カテゴリー: ');
define('SUCCESS_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', '有効なリンク削除対象カテゴリー: ');

define('WARNING_REMOVE_FROM_IN_TO_LINKED', '<strong>警告: 対象の商品リンクが存在していなかったため、変更されませんでした... </strong>');

define('WARNING_MASTER_CATEGORIES_ID_CONFLICT', '<strong>警告: マスターカテゴリーの指定に問題があります！！ </strong>');
define('TEXT_INFO_MASTER_CATEGORIES_ID_CONFLICT', '<strong>マスターカテゴリーID： </strong>');
define('TEXT_INFO_MASTER_CATEGORIES_ID_PURPOSE', '注意: マスターカテゴリーは、対象カテゴリを指定したセールなどの際に、登録カテゴリが商品価格に影響を及ぼす場合の基準として利用されます。<br />');
define('WARNING_MASTER_CATEGORIES_ID_CONFLICT_FIX', 'この問題を解決するために、問題があった最初の商品にリダイレクトされました。 リンク削除しようとしているカテゴリーが商品のマスターカテゴリーではなくなるように、マスタカテゴリIDの指定を変更してから、もう一度やり直してください。 すべての問題が修正されたら、要求された削除作業を行うことができるようになります。');
define('TEXT_MASTER_CATEGORIES_ID_CONFLICT_FROM', ' 問題がある作業対象カテゴリー： ');
define('TEXT_MASTER_CATEGORIES_ID_CONFLICT_TO', ' 問題があるリンク処理カテゴリー： ');
define('SUCCESS_MASTER_CATEGORIES_ID', '商品のカテゴリーリンク登録の更新に成功しました ...');
define('WARNING_MASTER_CATEGORIES_ID', '警告: マスターカテゴリーがセットされていません!');

define('TEXT_PRODUCTS_ID_INVALID', '警告: 無効な商品IDが指定されているか、商品が選択されていません。');
define('TEXT_PRODUCTS_ID_NOT_REQUIRED', '注意: 指定したカテゴリー内の全ての商品を別のカテゴリーにリンク登録するために商品IDは必要はありません。ただし、有効な商品IDを設定すると、使用可能なすべてのカテゴリとそのID番号が表示されます。');

// reset all products to new master_categories_id
// copy category to category linked
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_MASTER', '<strong>指定したカテゴリ内の全ての商品のマスターカテゴリIDを、このカテゴリに強制リセットする ...</strong><br />例:カテゴリーID＝22をリセットした場合、カテゴリ内のすべての商品のマスターカテゴリーIDは22にリセットされます');
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'カテゴリー中のすべての商品のマスターカテゴリーIDをリセットします: ');
define('BUTTON_RESET_CATEGORY_MASTER', 'マスターカテゴリーIDをリセット');

define('WARNING_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', '警告: 無効なカテゴリーが選択されました ...');
define('SUCCESS_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', '全ての商品のマスターカテゴリーIDが更新されました。新しいマスターカテゴリID： ');

define('TEXT_CATEGORIES_NAME', 'カテゴリ名');
define('WARNING_DUPLICATE_PRODUCTS_TO_CATEGORY_LINKED', 'カテゴリーの指定に問題があります');