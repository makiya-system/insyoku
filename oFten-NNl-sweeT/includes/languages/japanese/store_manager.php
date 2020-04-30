<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: store_manager.php 19689 2011-10-04 15:51:25Z drbyte $
 * @author bigmouse
 */

  define('HEADING_TITLE', 'ショップ管理者用ツール');
  define('TABLE_CONFIGURATION_TABLE', 'CONSTANT定義を検索');

  define('SUCCESS_PRODUCT_UPDATE_SORT_ALL', '<strong>成功</strong>: 属性のソート順を更新しました');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', '<strong>成功</strong>: 商品価格のソート値を更新しました。');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_VIEWED', '<strong>成功</strong>: 「商品の閲覧回数ランキング」を0にリセットしました');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_ORDERED', '<strong>Successful</strong> 商品の順番をゼロのリセット');
  define('SUCCESS_UPDATE_ALL_MASTER_CATEGORIES_ID', '<strong>成功</strong>: リンクされた商品のためのマスターカテゴリをリセットしました');
  define('SUCCESS_UPDATE_COUNTER', '<strong>成功</strong> カウンタを以下の値に更新しました: ');

  define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>エラー:</strong> 一致する設定キー(Configuration Keys)が見つかりません...');
  define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>エラー:</strong> 検索のための設定キーかテキストが入力されていません ... 検索を中止しました');

  define('TEXT_INFO_COUNTER_UPDATE', '<strong>ヒットカウンターの更新</strong><br />統計の「ヒットカウンター」の値を変更：');
  define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>全ての商品の表示価格情報の並びを更新します</strong><br />定価ではなく販売価格に準じて商品を価格順で表示出来るようになります: ');
  define('TEXT_INFO_PRODUCTS_VIEWED_UPDATE', '<strong>全ての商品の閲覧数をリセット</strong><br />商品の閲覧回数のカウントを 0 にリセットします');
  define('TEXT_INFO_PRODUCTS_ORDERED_UPDATE', '<strong>全ての商品の注文回数をリセット</strong><br />商品の注文回数のカウントを 0 にリセットします');
  define('TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE', '<strong>全ての商品のマスタカテゴリIDを強制リセット</strong><br />注意：全ての商品に対して、登録カテゴリの一番初めのものを強制的に「マスタカテゴリ」に指定しなおします。');

  define('TEXT_NEW_ORDERS_ID', '次回の注文ID：');
  define('TEXT_INFO_SET_NEXT_ORDER_NUMBER', '<strong>次回の注文IDを指定</strong><br />注意：既にデータベースに存在している注文IDよりも小さい値を設定することは出来ません。');
  define('TEXT_MSG_NEXT_ORDER', '次回の注文オーダーIDは %s と設定されました。');
  define('TEXT_MSG_NEXT_ORDER_MAX', 'Due to existing order data, the next order number is currently: %s');
  define('TEXT_MSG_NEXT_ORDER_TOO_LARGE', 'Due to database limitations, you cannot set the next order number higher than 2000000000. Please choose a lower value.');

  define('TEXT_CONFIGURATION_CONSTANT', '<strong>CONSTANT・ランゲージ定義ファイルを検索</strong>');
  define('TEXT_CONFIGURATION_KEY', 'キーまたは名前:');
  define('TEXT_INFO_CONFIGURATION_UPDATE', '<strong>注意:</strong> CONSTANTSは大文字です。<br />ランゲージ定義ファイルの検索でデータベーステーブルに何も見つからない場合、上級検索(alternative search)になります。');


  define('TEXT_CONFIGURATION_CONSTANT_FILES', '<strong>ランゲージ定義ファイル内を検索</strong>');
  define('TEXT_CONFIGURATION_KEY_FILES', 'テキストを探す:');
  define('TEXT_INFO_CONFIGURATION_UPDATE_FILES', '<strong>注意:</strong> ランゲージ定義ファイル内の検索は大文字・小文字いずれも可能です。');

  define('TABLE_TITLE_KEY', '<strong>キー:</strong>');
  define('TABLE_TITLE_TITLE', '<strong>タイトル:</strong>');
  define('TABLE_TITLE_DESCRIPTION', '<strong>説明:</strong>');
  define('TABLE_TITLE_GROUP', '<strong>グループ:</strong>');
  define('TABLE_TITLE_VALUE', '<strong>値:</strong>');

  define('TEXT_LANGUAGE_LOOKUPS', '言語定義ファイルの検索:');
  define('TEXT_LANGUAGE_LOOKUP_NONE', '- 未記入 -');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', '全てのランゲージファイル ' . strtoupper($_SESSION['language']) . ' - ショップページ(Catalog)/管理者ページ(Admin)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', 'メインの全ランゲージファイル - ショップページ(Catalog) (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /espanol.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', '現在選択中の全ランゲージファイル - ' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', 'メインの全ランゲージファイル - 管理者ページ(Admin) (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /espanol.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', '現在選択中の全ランゲージファイル - 管理者ページ(Admin) (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', '現在選択中の全ランゲージファイル - ショップページ(Catalog)/管理者ページ(Admin)');

  define('TEXT_INFO_NO_EDIT_AVAILABLE','編集不可');
  define('TEXT_INFO_CONFIGURATION_HIDDEN', ' もしくは不可視');

  define('TEXT_INFO_DATABASE_OPTIMIZE', '<strong>データベースの最適化</strong><br />記録の削除によってできた無駄なスペースを削除する為に、データベースを最適化して下さい。<br />データ更新が頻繁なサイトでは、毎月あるいは毎週行っても良いでしょう。<br />（アクセスが少なく、管理画面からの作業を行っていない時間帯での実施を推奨）');
  define('TEXT_INFO_OPTIMIZING_DATABASE_TABLES', 'データベーステーブルの最適化処理中です。　これには数分間かかります。　処理が完了したら前の画面にもどりますのでそのままお待ちください。');
  define('SUCCESS_DB_OPTIMIZE', 'データベーステーブル最適化が完了しました。');

  define('TEXT_INFO_PURGE_DEBUG_LOG_FILES', '<strong>デバッグログのクリーニング</strong><br /><strong>重要: </strong>Zen CartはデバッグのためにPHPエラーメッセージを記録します。また、多くの支払いモジュールでは問題を診断するためにデバッグデータを記録するように設定できます。 <br />この削除処理を実施することで、 /cache フォルダ内に保存されていた PHPエラーや支払モジュールなどの『すべてのログが永久に削除』されます。');
  define('SUCCESS_CLEAN_DEBUG_FILES', 'デバッグログファイルが削除されました。');
