<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2018 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Drbyte Sun Jan 7 21:30:21 2018 -0500 Modified in v1.5.6 $
 */

  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_EC', 'PayPal（ペイパル）エクスプレスチェックアウト');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PRO20', 'PayPal Express Checkout (Pro 2.0 Payflow Edition) (UK)');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PF_EC', 'PayPal Payflow Pro - Gateway');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PF_GATEWAY', 'PayPal Express Checkout via Payflow Pro');

  if (IS_ADMIN_FLAG === true) {
    if (!defined('MODULE_PAYMENT_PAYPALWPP_MODULE_MODE')) define('MODULE_PAYMENT_PAYPALWPP_MODULE_MODE', 'undefined');
    define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_DESCRIPTION', '<strong>PayPalエクスプレスチェックアウト</strong>%s<br />' . (substr(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE,0,7) == 'Payflow' ? '<a href="https://www.paypal.com/j1/mrb/pal=UATS2MUHJ5AS8" target="_blank">PayPalアカウントを設定</a>' : '<a href="https://www.paypal.com/j1/mrb/pal=UATS2MUHJ5AS8" target="_blank">PayPalアカウントを設定</a>') . '<br /><br /><font color="green">設定手順:</font><br /><span class="alert">1. </span><a href="https://www.paypal.com/j1/mrb/pal=UATS2MUHJ5AS8" target="_blank">ここをクリックして PayPal に新規アカウント登録。</a><br />' .
(defined('MODULE_PAYMENT_PAYPALWPP_STATUS') ? '' : '... 次に上部の『インストール』をクリックして PayPalエクスプレスチェックアウトを有効にします。<br /><a href="http://www.zen-cart.com/getpaypal" target="_blank">さらに詳細なヘルプをご希望の場合には、こちらの FAQ をご利用ください</a><br />') .
(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE == 'PayPal' && (!defined('MODULE_PAYMENT_PAYPALWPP_APISIGNATURE') || MODULE_PAYMENT_PAYPALWPP_APISIGNATURE === '') ? '<br /><span class="alert">2. </span><strong>API アクセス情報</strong> の確認。<br /> （ <a href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_get-api-signature&generic-flow=true" target="_blank">ここをクリックして「API署名」</a>を表示します。） この画面からAPIアクセスに必要な設定情報を取得します。<br /> このモジュールに利用には、ペイパルより提供される「APIユーザー名」「APIパスワード」「署名」などをモジュールの設定項目に入力する必要があります。' : (substr(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE,0,7) == 'Payflow' && (!defined('MODULE_PAYMENT_PAYPALWPP_PFUSER') || MODULE_PAYMENT_PAYPALWPP_PFUSER == '') ? '<span class="alert">2. </span><strong>PAYFLOW credentials</strong> This module needs your <strong>PAYFLOW Partner+Vendor+User+Password settings</strong> entered in the 4 fields below. These will be used to communicate with the Payflow system and authorize transactions to your account.' : '<span class="alert">2. </span>Ensure you have entered the appropriate security data for username/pwd etc, below.') ) .
(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE == 'PayPal' ? '<br /><br /><span class="alert">3. </span>次に「即時支払い通知」より <strong>即時支払い通知（IPN）</strong>:<br />の項目を有効にします", select <em>Instant Payment Notification Preferences</em><ul style="margin-top: 0.5;"><li>IPNメッセージを受信する（有効）にチェックを入れます。</li><li>もし、まだURLの指定を行っていない場合には通知URLの項目に以下のURLを入力します:<br /><nobr><pre>'.str_replace('index.php?main_page=index','ipn_main_handler.php',zen_catalog_href_link(FILENAME_DEFAULT, '', 'SSL')) . '</pre></nobr></li></ul>' : '') .
'<font color="green"><hr /><strong>動作条件:</strong></font><br /><hr />*このシステムの稼働には、80番ポートと443番ポートでのゲートウェイ接続を行うため<strong>CURL</strong> が使われます。利用サーバーでCURLがSSLを使えるように設定してください。<br /><hr />' );
  }

  define('MODULE_PAYMENT_PAYPALWPP_TEXT_DESCRIPTION', '<strong>PayPal</strong>');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_TITLE', 'クレジットカード');
  define('MODULE_PAYMENT_PAYPALWPP_EC_TEXT_TITLE', 'PayPal');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_EC_HEADER', 'PayPalで早くて安全な決済を:');
  define('MODULE_PAYMENT_PAYPALWPP_EC_TEXT_TYPE', 'PayPalエクスプレスチェックアウト');
  define('MODULE_PAYMENT_PAYPALWPP_DP_TEXT_TYPE', 'PayPal Direct Payment');
  define('MODULE_PAYMENT_PAYPALWPP_PF_TEXT_TYPE', 'Credit Card');  //(used for payflow transactions)
  define('MODULE_PAYMENT_PAYPALWPP_ERROR_HEADING', '申し訳ありません、こちらのクレジットカードは取り扱いできません。');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CARD_ERROR', '入力されたクレジットカード情報にエラーが含まれています。入力内容をご確認の上、再度お試しください。');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_FIRSTNAME', 'カード名義名:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_LASTNAME', 'カード名義姓:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_OWNER', 'カード所有者:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_TYPE', 'クレジットカードタイプ:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_NUMBER', 'クレジットカード番号:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_EXPIRES', '有効期限:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_ISSUE', 'クレジットカード発行日:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_CHECKNUMBER', 'CVV番号:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_CHECKNUMBER_LOCATION', '(お手元のカードの裏側に記載されています)');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_DECLINED', 'ご指定のカードは受け付けられませんでした。別のカードでお試しいただくか、カード発行会社様に詳細をお問い合わせください。');
  define('MODULE_PAYMENT_PAYPALWPP_INVALID_RESPONSE', 'ご指定のカードは受け付けられませんでした。別の支払方法を選択して再度お試しいただくか、ショップまでお問い合わせください。');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_GEN_ERROR', '決済手続きの処理中にエラーが発生しました。別の支払方法を選択して再度お試しいただくか、ショップまでお問い合わせください。');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_EMAIL_ERROR_MESSAGE', 'ショップ担当者様,' . "\n" . 'PayPalエクスプレスチェックアウトを使った処理の際にエラーが発生しました。お客様画面には、"エラー番号"だけを表示しています。エラーの詳細は以下のとおりです。' . "\n\n");
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_EMAIL_ERROR_SUBJECT', '警告: PayPalエクスプレスチェックアウトエラー');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADDR_ERROR', '入力された住所情報は正しくないようです。他の住所を選択するか追加して再度お試しください。');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CONFIRMEDADDR_ERROR', 'PayPalで選択された住所は確認済み住所ではありません。PayPal画面に戻って、確認済み住所を選択するか追加して再度お試しください。');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INSUFFICIENT_FUNDS_ERROR', 'PayPalは支払手続きを行う事が出来ませんでした。別の支払方法を選択なさるか、PayPalの設定で支払オプションの内容を確認した上で再度お試しください。');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_PAYPAL_DECLINED', '申し訳ありません。PayPalで手続が却下され、お客様からPayPalカスタマーサービスに詳細を確認なさるようにお伝えする指示を受けました。ご注文手続きを進めるためには、今回は他の支払い方法を選択していただくようお願いいたいます。');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ERROR', 'クレジットカードの処理手続きでエラーが発生しました。別の支払方法を選択してお試しいただくか、ショップまでお問い合わせください。');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_BAD_CARD', 'ご不便をおかけして申し訳ありません。入力いただいたクレジットカードは当店では取り扱っておりません。別のカードをご利用いただきますようお願いいたします。');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_BAD_LOGIN', 'お客様のアカウント情報確認時に問題が発生しました。再度お試しください。');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_JS_CC_OWNER', '* カード名義は最低 ' . CC_OWNER_MIN_LENGTH . ' 文字以上必要です。\n');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_JS_CC_NUMBER', '* カード番号は最低 ' . CC_NUMBER_MIN_LENGTH . ' 文字以上必要です。\n');
  define('MODULE_PAYMENT_PAYPALWPP_ERROR_AVS_FAILURE_TEXT', '警告：住所情報チェックに失敗しました。');
  define('MODULE_PAYMENT_PAYPALWPP_ERROR_CVV_FAILURE_TEXT', '警告：クレジットカード CVV番号チェックに失敗しました。');
  define('MODULE_PAYMENT_PAYPALWPP_ERROR_AVSCVV_PROBLEM_TEXT', ' ご注文はショップ管理者による確認のため、保留状態になっています。');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_UNILATERAL', ' - 手続きを進めるためには、先にPaypalのAPI認証情報を登録する必要があります。');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_STATE_ERROR', 'あなたのアカウントに登録されている州が正しくありません。アカウント設定を開いて修正してください。');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_NOT_WPP_ACCOUNT_ERROR', 'ご不便をおかけして申し訳ありません。支払手続きは行われていません。ショップオーナーがPaypalアカウントに設定しているのは、PayPal Website Payments Pro account もしくは PayPal gateway services ではありません。注文を続けるには、別の支払方法を選択してください。');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_SANDBOX_VS_LIVE_ERROR', 'ご不便をおかけして申し訳ありません。PayPalアカウントの認証手続きが完了していないか、API情報が正しくありません。手続きを完了させる事が出来ませんでした。問題を解決するようにショップ運営者まで連絡してください。');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_WPP_BAD_COUNTRY_ERROR', '申し訳ありません。 -- ショップ管理者が設定している PayPalアカウントは、現在 Website Payments Pro が利用できない国のものです。注文を完了させるには、別の支払方法を選択なさってください。');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_NOT_CONFIGURED', '<span class="alert">&nbsp;(注意: モジュールがまだ設定されていません)</span>');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_GETDETAILS_ERROR', '取引情報詳細の取得で問題が発生しました。');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_TRANSSEARCH_ERROR', '指定された条件に当てはまる取引を検索するのに問題が発生しました。');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_ERROR', '取引の取り消し処理に問題があります。 ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_ERROR', '指定された金額での返金処理に問題があります。 ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_ERROR', '取引の承認処理に問題があります。 ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPT_ERROR', '取引の取り消し処理に問題があります。');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUNDFULL_ERROR', '返金処理のリクエストがペイパルに拒否されました。');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_REFUND_AMOUNT', '一部返金処理のリクエストを行いましたが、金額が指定されていませんでした。');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_FULL_CONFIRM_ERROR', '全額返金処理のリクエストを行いましたが「確認」のチェックが行われておりませんでした。');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_AUTH_AMOUNT', '取引承認のリクエストを行いましたが、金額が指定されていませんでした。');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_CAPTURE_AMOUNT', '回収処理のリクエストを行いましたが金額が指定されていませんでした。');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_CONFIRM_CHECK', '確認');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_CONFIRM_ERROR', '取引承認の取り消しのリクエストを行いましたが「確認」のチェックが行われておりませんでした。');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_FULL_CONFIRM_CHECK', '確認');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_CONFIRM_ERROR', '取引承認のリクエストを行いましたが「確認」のチェックが行われておりませんでした。');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPTURE_FULL_CONFIRM_ERROR', '回収処理をリクエストされましたが、「確認」ボックスにチェックが入っていませんでした。');

  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_INITIATED', 'PayPalに対して %s の返金処理を実行しました。 取引ID: %s。ブラウザ画面の再読み込みを行い注文ステータスとステータス更新履歴のコメントが更新されている事を確認してください。');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_INITIATED', 'PayPalに対して %s への承認処理を実行しました。ブラウザ画面の再読み込みを行い注文ステータスとステータス更新履歴のコメントが更新されている事を確認してください。');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPT_INITIATED', 'PayPalに対して %s への回収処理を実行しました。受取ID: %s。ブラウザ画面の再読み込みを行い注文ステータスとステータス更新履歴のコメントが更新されている事を確認してください。');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_INITIATED', 'PayPalへの取引承認取り消しのリクエストが実行されました。取引ID: %s。ブラウザ画面の再読み込みを行い注文ステータスとステータス更新履歴のコメントが更新されている事を確認してください。');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_GEN_API_ERROR', '通信エラーが発生しました。 詳細については、APIリファレンスガイドか取引ログをご確認ください。');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_ZONE_ERROR', 'ご不便をお掛けして申し訳ありません。現在お住まいの地域ではペイパルを利用してのご注文を行う事ができません。お手数ですがその他の支払い方法でご注文ください。');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ORDER_ALREADY_PLACED_ERROR', '注文が重複送信された模様です。マイページの注文履歴で対象の注文の状態を御確認ください。もしPaypal での支払いが完了しているにもかかわらず、注文データが見つからない場合には、ショップで状況を確認して問題を解決するため「問合せフォーム」を使ってご連絡ください。');

  define('MODULE_PAYMENT_PAYPALWPP_TEXT_BUTTON_ALTTEXT', 'ここをクリックして PayPalエクスプレスチェックアウト');

// EC buttons -- Do not change these values
///// You should only use choices listed on this page: https://developer.paypal.com/docs/classic/api/buttons/ or https://www.paypal-techsupport.com/app/answers/detail/a_id/632
  //define('MODULE_PAYMENT_PAYPALWPP_EC_BUTTON_IMG', 'https://www.paypalobjects.com/en_US/i/btn/btn_xpressCheckout.gif');
  define('MODULE_PAYMENT_PAYPALWPP_EC_BUTTON_IMG', 'https://www.paypalobjects.com/webstatic/en_US/btn/btn_checkout_pp_142x27.png');
  define('MODULE_PAYMENT_PAYPALWPP_EC_BUTTON_SM_IMG', 'https://www.paypalobjects.com/en_US/i/btn/btn_xpressCheckoutsm.gif');

  //define('MODULE_PAYMENT_PAYPALWPP_MARK_BUTTON_TXT', 'Checkout with PayPal. The safer, easier way to pay.');
  define('MODULE_PAYMENT_PAYPALWPP_MARK_BUTTON_TXT', 'PayPal(ペイパル)でお支払い');
  //define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_IMG', 'https://www.paypalobjects.com/en_US/i/logo/PayPal_mark_37x23.gif');
  //define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_IMG', 'https://www.paypalobjects.com/en_US/i/logo/PayPal_mark_50x34.gif');
  //define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_IMG', 'https://www.paypalobjects.com/en_US/i/bnr/horizontal_solution_PP.gif');
  //define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_IMG', 'https://www.paypalobjects.com/en_US/i/bnr/horizontal_solution_PPeCheck.gif');
  define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_IMG', 'https://www.paypalobjects.com/en_US/i/btn/btn1_for_hub.gif');

////////////////////////////////////////
// Styling of the PayPal Payment Page. Uncomment to customize.
// A BETTER WAY, HOWEVER, is to simply create a Custom Page Style at PayPal and mark it as Primary or name it in your Zen Cart PayPal EC settings.
  //define('MODULE_PAYMENT_PAYPALWPP_HEADER_IMAGE', '');  // this should be an HTTPS URL to the image file
  //define('MODULE_PAYMENT_PAYPALWPP_PAGECOLOR', '');  // 6-digit hex value
 ////// Styling of pseudo cart contents display section
  //define('MODULE_PAYMENT_PAYPAL_LOGO_IMAGE', ''); // https path to your customized logo
  //define('MODULE_PAYMENT_PAYPAL_CART_BORDER_COLOR', ''); // 6-digit hex value
////////////////////////////////////////


  // These are used for displaying raw transaction details in the Admin area:
  define('MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME', '姓:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME', '名:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME', '事業名:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME', '表示名:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET', '番地 マンション・アパート名:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY', '市町村区:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE', '都道府県:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP', '郵便番号:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY', '国名:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS', '支払人メールアドレス:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID', 'Ebay ID:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID', '支払人 ID:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS', '支払人ステータス:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS', '住所ステータス:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE', '支払タイプ:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS', '支払ステータス:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON', '保留事由:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE', '通知:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE', '支払日:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY', '通貨:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT', '総合計:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE', '支払手数料:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE', '通貨換算レート:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS', '商品点数:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE', '取引タイプ:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID', '取引ID:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID', '親取引ID:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TITLE', '<strong>返金</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_FULL', 'この取引に対して全額返金を希望する場合には、ここをクリック:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_FULL', '全額返金実行');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_PARTIAL', '一部返金実行');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_FULL_OR', '<br />... もしくは、返金金額を入力');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PAYFLOW_TEXT', '入力 ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PARTIAL_TEXT', '返金金額をここに入力して「一部返金実行」をクリック');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_SUFFIX', '*一部返金を行ってしまうと、その後全額返金が出来なくなるかも知れません。<br />*残額いっぱいまでは、一部返金は何度でも行う事が出来ます。');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_COMMENTS', '<strong>顧客に表示を通知:</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_DEFAULT_MESSAGE', 'ショップ管理者による返金。');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_FULL_CONFIRM_CHECK','確認: ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_COMMENTS', 'システムコメント: ');
  define('MODULE_PAYMENT_PAYPALWPP_ENTRY_PROTECTIONELIG', '適正保護:');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_TITLE', '<strong>注文承認手続き</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_PARTIAL_TEXT', 'この注文の一部承認を希望する場合には、ここに金額を入力：');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_BUTTON_TEXT_PARTIAL', '承認する');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_SUFFIX', '');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TITLE', '<strong>決済確定承認手続き</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FULL', 'この注文に対する全額もしくは一部の回収を承認したい場合、回収金額を入力してこの注文に対する最終回収処理かどうかを選択してください。回収処理を実行する前に確認用チェックボックスにチェックを入れてください。<br />');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_BUTTON_TEXT_FULL', '回収実行');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_AMOUNT_TEXT', '回収金額');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FINAL_TEXT', 'これは最終的な回収処理ですか？');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_SUFFIX', '');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TEXT_COMMENTS', '<strong>顧客に表示を知らせる:</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'ご注文ありがとうございました。');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPTURE_FULL_CONFIRM_CHECK','確認: ');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TITLE', '<strong>取引承認の取り消し</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID', '取引承認の取り消しを行う場合、以下に「取引ID」を入力し「確認」にチェックを入れてから『取り消し実行』ボタンを押してください:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TEXT_COMMENTS', '<strong>顧客に表示するコメント:</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_DEFAULT_MESSAGE', 'いつも当店をお引き立ていただきありがとうございます。またのご来店をお待ちしております。');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_BUTTON_TEXT_FULL', '取り消し実行');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_SUFFIX', '');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_TRANSSTATE', 'Trans. State:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTHCODE', 'Auth. Code:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AVSADDR', 'AVS Address match:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AVSZIP', 'AVS ZIP match:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CVV2MATCH', 'CVV2 match:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_DAYSTOSETTLE', 'Days to Settle:');

// this text is used to announce the username/password when the module creates the customer account and emails data to them:
  define('EMAIL_EC_ACCOUNT_INFORMATION', 'ご注文内容確認のための、アカウントログイン情報は以下のとおりです:');

  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_ONETIME_CHARGES_PREFIX', '一括払い');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_SHORT', 'サーチャージ');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_LONG', '取り扱い手数料と、適用される費用');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_SHORT', '値引');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_LONG', '割引クーポン、ギフト券などが適用された状態で、クレジットカードが適用されました。');
  define('MODULES_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_SUBJECT', '不正利用チェックステータスの注文: ');
  define('MODULES_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_INTRO', 'これは新規の注文で利用された支払に対して、Paypalの不正利用チェックチームにより支払情報の再確認をするよう取引にフラグが立てられた事を自動でお知らせするものです。通常、この再確認処理には 36時間程度が掛かります。支払手続きの再確認が完了するまで、商品を出荷しないように強くお勧めいたします。Paypal アカウントにログインして最近の取引履歴より、この注文に対する最新状況を確認できます。');

  define('MODULES_PAYMENT_PAYPALWPP_TEXT_BLANK_ADDRESS', '問題発生: 申し訳ありません。PayPalから想定外の空白の住所が送信されて来ました。<br />ご注文を完了させるためには、以下の当ショップの会員登録ボタンより住所情報をご登録ください。その後、支払方法として改めて PayPalをお選びいただいて注文手続きを進めてください。ご不便をおかけして申し訳ありません。万が一、注文手続きで問題が発生する場合には、「お問い合わせ」より、問題の詳細を当店までお知らせいただけると幸いです。ご注文に関しての問題の解決と共に、再発防止のために努めさせていただきます。ご協力に感謝いたします。');

  define('MODULES_PAYMENT_PAYPALWPP_AGGREGATE_CART_CONTENTS', 'ショッピングカート内の全てのアイテム（ショップ内で詳細を御確認いただくか、レシートを御確認ください）。');

