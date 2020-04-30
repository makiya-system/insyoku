<?php
/**
 * @package admin
 * @copyright Copyright 2003-2018 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Drbyte Wed Aug 2 14:55:16 2017 -0400 Modified in v1.5.6 $
 */

define('TOP_BAR_TITLE', '統計');
define('HEADING_TITLE', 'クーポンの管理');
define('HEADING_TITLE_STATUS', 'ステータス : ');
define('TEXT_CUSTOMER', '顧客:');
define('TEXT_COUPON', 'クーポン名:');
define('TEXT_COUPON_ALL', '全てのクーポン');
define('TEXT_COUPON_ACTIVE', '有効なクーポン');
define('TEXT_COUPON_INACTIVE', '無効なクーポン');
define('TEXT_SUBJECT', '件名:');
define('TEXT_UNLIMITED', '無制限');
define('TEXT_FROM', '差出人:');
define('TEXT_FREE_SHIPPING', '送料無料');
define('TEXT_MESSAGE', '本文:');
define('TEXT_RICH_TEXT_MESSAGE','本文(HTML形式):');
define('TEXT_SELECT_CUSTOMER', '顧客の選択');
define('TEXT_ALL_CUSTOMERS', '全ての顧客');
define('TEXT_NEWSLETTER_CUSTOMERS', '全てのメールマガジン購読者へ');
define('TEXT_CONFIRM_DELETE', 'このクーポンを本当に削除しますか？');
define('TEXT_SEE_RESTRICT', '制限を適用する');

define('TEXT_COUPON_ANNOUNCE','ありがとうございます。クーポンを提供いたします。');

define('TEXT_TO_REDEEM', '商品購入時にこのクーポンを使用することができます。支払情報を入力するときに下記のクーポンコードを指定してください。');
define('TEXT_IN_CASE', ' 問題が発生した場合 ');
define('TEXT_VOUCHER_IS', 'クーポン コード ');
define('TEXT_REMEMBER', 'クーポン コードをなくさないよう安全な場所に保存してください。');
define('TEXT_VISIT', 'Visit us at %s');
define('TEXT_ENTER_CODE', ' クーポンコードを入力してください。 ');
define('TEXT_COUPON_HELP_DATE', '<p><p>このクーポンは %s から %s までの間、有効です</p></p>');
define('HTML_COUPON_HELP_DATE', '<p><p>このクーポンは %s から %s までの間、有効です</p></p>');

define('TABLE_HEADING_ACTION', '操作');

define('CUSTOMER_ID', '顧客 ID');
define('CUSTOMER_NAME', '顧客名');
define('REDEEM_DATE', '引き換え日付');
define('IP_ADDRESS', 'IP アドレス');

define('TEXT_REDEMPTIONS', '引き換え');
define('TEXT_REDEMPTIONS_TOTAL', '合計');
define('TEXT_REDEMPTIONS_CUSTOMER', '顧客');
define('TEXT_NO_FREE_SHIPPING', '無料配送しない');

define('NOTICE_EMAIL_SENT_TO', '注意: メールの送信先: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'エラー: 選択された顧客は存在しません。');
define('ERROR_NO_SUBJECT', 'エラー: 件名が入力されていません。');

define('COUPON_NAME', 'クーポン名');
//define('COUPON_VALUE', 'Coupon Value');
define('COUPON_AMOUNT', 'クーポンの額');

define('TEXT_COUPON_PRODUCT_COUNT_PER_ORDER', '注文毎');
define('TEXT_COUPON_PRODUCT_COUNT_PER_PRODUCT', '対象アイテム毎');
define('COUPON_CODE', 'クーポン コード');
define('COUPON_STARTDATE', '開始日');
define('COUPON_FINISHDATE', '終了日');
define('COUPON_RESTRICTIONS', '利用制限');
define('COUPON_FREE_SHIP', '送料無料');
define('COUPON_DESC', 'クーポンの説明 <br />(顧客は見ることができます。)');
define('COUPON_MIN_ORDER', 'クーポン利用最低額');

define('COUPON_TOTAL', '利用最低額の計算方法: ');
define('TEXT_COUPON_TOTAL_PRODUCTS', '対象商品');
define('TEXT_COUPON_TOTAL_PRODUCTS_BASED', '<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(クーポンの利用制限で対象商品に指定された商品の合計金額)');
define('TEXT_COUPON_TOTAL_ORDER', '全ての商品');
define('TEXT_COUPON_TOTAL_ORDER_BASED', '<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(クーポン対象商品かどうかにかかわり無く、全ての商品の合計金額)');

define('COUPON_USES_COUPON', 'クーポンごとの利用数');
define('COUPON_USES_USER', '顧客ごとの利用数');
define('COUPON_PRODUCTS', '有効な商品のリスト');
define('COUPON_CATEGORIES', '有効なカテゴリのリスト');
define('VOUCHER_NUMBER_USED', '利用数');
define('DATE_CREATED', '作成日');
define('DATE_MODIFIED', '更新日');
define('TEXT_HEADING_NEW_COUPON', '新しいクーポンを作成する');
define('TEXT_NEW_INTRO', '新しいクーポン情報を入力してください。<br />');
define('COUPON_ZONE_RESTRICTION', '使用可能地域制限');
define('TEXT_COUPON_ZONE_RESTRICTION', 'クーポンが使用可能な地域を制限します。');
define('COUPON_ORDER_LIMIT', '直前の注文から何日以内であれば有効: ');
define('COUPON_ORDER_LIMIT_HELP', '指定日数以内に前回の注文を行っている場合のみ、クーポンを有効にします。指定しない場合には空欄。');

define('COUPON_IS_VALID_FOR_SALES', 'セール商品へのクーポン適用:');
define('TEXT_COUPON_IS_VALID_FOR_SALES', 'セール商品に対しても、クーポンを適用する');
define('TEXT_COUPON_IS_VALID_FOR_SALES_EMAIL', 'セール商品や特価商品に対しても、クーポンを利用できます');
define('TEXT_NO_COUPON_IS_VALID_FOR_SALES', 'セール商品や特価商品には、クーポンを無効にする');
define('TEXT_NO_COUPON_IS_VALID_FOR_SALES_EMAIL', 'セール商品や特価商品には、クーポンを利用できません');



define('ERROR_NO_COUPON_AMOUNT', 'クーポンの額が入力されていません。');
define('ERROR_NO_COUPON_NAME', 'クーポン名が入力されていません。 ');
define('ERROR_COUPON_EXISTS', 'このクーポン コードは既に存在します。');


define('COUPON_NAME_HELP', '作成するクーポンの名称');
define('COUPON_AMOUNT_HELP', 'クーポンを利用したときの引き換え額 「%」を最後につけた場合は割引率のパーセンテージ');
define('COUPON_CODE_HELP', 'クーポンコードを入力してください。空白の場合は自動で生成されます。');
define('COUPON_STARTDATE_HELP', 'クーポンが有効になる日付');
define('COUPON_FINISHDATE_HELP', 'クーポンの有効期限の日付');
define('COUPON_FREE_SHIP_HELP', 'クーポンの効果を配送料を無料にする。<BR>ノート： クーポン値引が「送料該当分の金額」として発生します。');
define('COUPON_DESC_HELP', '顧客向けの説明文');
define('COUPON_MIN_ORDER_HELP', 'クーポンが有効な場合の最低利用額');
define('COUPON_TOTAL_HELP', '「クーポン利用最低額」を指定した場合、クーポンが有効になる注文額に達したかどうかを判断する基準として、クーポンの利用制限設定のルールに準じてクーポン対象商品だけの合計をベースにしますか？それとも注文される全ての商品の合計金額をベースにしますか？<br>注意：「全ての商品」を対象にした場合でも、クーポンが適用されるためには、クーポン対象商品が最低一つカートに含まれている必要があります。');
define('COUPON_SALE_HELP', 'もし <i>クーポンを無効にする</i>を選択した場合、セール商品や特価商品は値引されず、最低利用金額の計算にも含まれません。');
define('COUPON_USES_COUPON_HELP', 'クーポンの最大利用回数。空白の場合は無制限になります。');
define('COUPON_USES_USER_HELP', 'クーポンの最大利用回数。空白の場合は無制限になります。');
define('COUPON_PRODUCTS_HELP', 'クーポンを利用できるproduct_idsのカンマで区切られたリスト。空白の場合は無制限');
define('COUPON_CATEGORIES_HELP', 'クーポンを利用できるcpathsのリスト。空白の場合は無制限');
define('COUPON_BUTTON_PREVIEW', 'プレビュー');
define('COUPON_BUTTON_CONFIRM', '確定');
define('COUPON_BUTTON_BACK', '戻る');

define('COUPON_ACTIVE', 'ステータス');
define('COUPON_START_DATE', '利用開始日');
define('COUPON_EXPIRE_DATE', '有効期限');

define('TEXT_INFO_DUPLICATE_MANAGEMENT', '<strong>グループクーポン管理</strong><br /><br />
複製元になるクーポンをクリックして選択してください<br />
現在選択されてるクーポン： <strong>%s</strong><br>');
define('ERROR_DISCOUNT_COUPON_WELCOME', 'この割引クーポンはウェルカムクーポンに選択されているため、削除できません。<br /><br />ウェルカムクーポンの選択を変更後に、削除を行って下さい。');
define('SUCCESS_COUPON_DISABLED', '成功! 割引クーポンは削除されました ...');
define('TEXT_COUPON_NEW', 'コピーで新しく作成するクーポンのクーポンコードを指定してください。');
define('ERROR_DISCOUNT_COUPON_DUPLICATE', '警告! 指定されたクーポンコードは既に存在します。コピー処理を取りやめました。');
define('TEXT_CONFIRM_COPY', 'このクーポンを複製して新しいクーポンを作成しますか？作成する場合は[保存]ボタンを押してください。');
define('SUCCESS_COUPON_DUPLICATE', '成功! 割引クーポンは複製されました ...<br /><br />必ずクーポン名と日付を確認・変更して下さい ...');

define('WARNING_COUPON_DUPLICATE', '警告！クーポンは作成されていません。作成するクーポンの数が指定されていませんでした。');

define('TEXT_COUPON_COPY_INFO', 'クーポンをグループで一括複製します');
define('TEXT_COUPON_COPY_DUPLICATE', '次のクーポンをベースにして新しいクーポンをグループで生成します: ');
define('TEXT_COUPON_COPY_DUPLICATE_CNT', 'いくつのクーポンを生成しますか？');

define('TEXT_CONFIRM_DELETE_DUPLICATE', '指定されたベースクーポンコードに前方一致する全てのクーポンをグループで削除します。<br />例）<strong>%s</strong> を指定した場合、<strong>%s</strong>から始まるすべてのクーポンが削除対象となります。');
define('TEXT_COUPON_DELETE_DUPLICATE', '次のコード始まる全てのクーポンを削除: ');

define('TEXT_DISCOUNT_COUPON_EMAIL', 'クーポンをメールで送信');
define('TEXT_DISCOUNT_COUPON_CONFIRM_DELETE', '本当にクーポンを削除しますか？');
define('TEXT_DISCOUNT_COUPON_CONFIRM_RESTORE', '本当にクーポンを復元にしますか？');

define('TEXT_DISCOUNT_COUPON_EDIT', 'クーポンを編集');
define('TEXT_DISCOUNT_COUPON_DELETE', 'クーポンを削除');
define('TEXT_DISCOUNT_COUPON_RESTORE', 'クーポンを復元');
define('TEXT_DISCOUNT_COUPON_RESTRICT', 'クーポンの利用制限');
define('TEXT_DISCOUNT_COUPON_REPORT', 'クーポンの利用状況');
define('TEXT_DISCOUNT_COUPON_COPY', 'クーポンの複製');
define('TEXT_DISCOUNT_COUPON_COPY_MULTIPLE', 'グループクーポンの一括複製');
define('TEXT_DISCOUNT_COUPON_DELETE_MULTIPLE', 'グループクーポンの一括削除');
define('TEXT_DISCOUNT_COUPON_REPORT_MULTIPLE', 'グループクーポンの利用状況');
define('TEXT_DISCOUNT_COUPON_DOWNLOAD', 'グループクーポンコードのダウンロード');
define('REDEEM_ORDER_ID', '注文ID #');
define('SUCCESS_COUPON_REACTIVATE', 'クーポンは有効になりました');
define('TEXT_CONFIRM_REACTIVATE', '本当にこのクーポンを復元しますか？<br />注意： クーポンを復元しても、有効期限の開始日/終了日の指定は変わりません。<br />また、このクーポンが既に利用されている場合、クーポンごとの利用数制限や顧客ごとの利用数制限などの履歴も変わりません。');

define('SUCCESS_COUPON_FOUND', 'クーポンが見つかりました！');
define('ERROR_COUPON_NOT_FOUND', 'クーポンが見つかりません！');
define('ERROR_NO_COUPON_CODE', 'クーポンコードが入力されていません！');

?>