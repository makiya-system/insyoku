<?php
/**
 * Page Template
 *
 * This page is auto-displayed if the configure.php file cannot be read properly. 
 * It is intended simply to recommend clicking on the zc_install link to begin installation.
 *
 * @package templateSystem
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License v2.0
 * @version $Id: DrByte 2019 Jan 04 Modified in v1.5.6a $
 */
$relPath = (file_exists('includes/templates/template_default/images/logo.gif')) ? '' : '../';
$instPath = (file_exists('zc_install/index.php')) ? 'zc_install/index.php' : (file_exists('../zc_install/index.php') ? '../zc_install/index.php' : '');
$docsPath = (file_exists('docs/index.html')) ? 'docs/index.html' : (file_exists('../docs/index.html') ? '../docs/index.html' : '');
?>
<!DOCTYPE html>
<html <?php echo HTML_PARAMS; ?>>
  <head>
    <title>システムセットアップが必要です</title>
    <meta content="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="authors" content="The Zen Cart&reg; Team and others">
    <meta name="generator" content="shopping cart program by Zen Cart&reg;, http://www.zen-cart.com">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style type="text/css">
        body {
        	background: #fff;
        	color: #777;
        	font: 16px/1 -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        	font-weight: 200;
        	margin: 10px auto;
        	padding: 0 2rem;
        }
        
        h1 {
        	font-size: 2.25rem;
        	font-weight: 100;
        	color: #000;
        	letter-spacing: 1px;
        	margin: 3rem 0 1.5rem;
        }
        
        h2 {
        	font-size: 2rem;
        	border-bottom: 1px solid #e3e3e3;
        	font-weight: 300;
        	margin: 2.25rem 0 1rem;
        	padding: 0.5rem 0 1rem;
        }
        
        h3 {
        	font-size: 1.5rem;
        	font-weight: 400;
        	color: #606060;
        	margin: 1.75rem 0 0.25rem 0;
        }

        h4 {
        	font-size: 1.25rem;
        	font-weight: 300;
        	margin: 1.25rem 0 0.25rem 0;
        	color: maroon;
        	font-variant: small-caps;
        }

        h5, h6 {
        	font-weight: 700;
        }

        h5 {
        	font-size: 1.25rem;
        }

        h6 {
        	font-size: 1rem;
        }

        h5, h6, ol, p, ul {
        	margin: 0 0 1rem 0;
        }

        ul {
        	list-style-type: square;
        }

        ol {
        	list-style-type: upper-roman;
        }

        ol, p, ul {
        	line-height: 1.5;
        }

        ol, ul {
        	padding: 0;
        }

        ol li, ul li {
        	margin-left: 1.125rem;
        }

        ol.noteList {
        	list-style-type: lower-alpha;
        	font-size: small;
        }

        ul.noStyle, ol.noStyle {
        	list-style-type: none;
        }

        a {
        	color: #0080ff;
        	font-weight: 300;
        	text-decoration: none;
        }

        a:visited {
        	color: #0080ff;
        }

        em {
        	color: #444;
        	font-weight: 500;
        	font-style: italic;
        }

        .img-center {
        	display: inline-block;
        	max-width: 100%;
        }

        .no-left-margin {
        	margin-left: 0;
        }

        .errorDetails {
        	color: red;
        	font-weight: 300;
        }

        .add-shadow {
        	-webkit-box-shadow: 4px 10px 41px 0px rgba(161, 161, 161, 0.75);
        	   -moz-box-shadow: 4px 10px 41px 0px rgba(161, 161, 161, 0.75);
        	        box-shadow: 4px 10px 41px 0px rgba(161, 161, 161, 0.75);
        }

        .prime-string {
        	font-size: 2.5rem;
        	font-weight: bold;
        }

        .bold-string {
        	font-weight: bold;
        }

        .small-string, .back-to-top, .appInfo {
        	font-size: small;
        }

        .back-to-top, .appInfo {
        	text-align: center;
        }

        .back-to-top {
        	margin: 2rem 0 2rem 0;
        }

        .back-to-top a {
        	text-decoration: none;
        }

        .appInfo {
        	margin: 4rem 0 2rem 0;
        	color: #888;
        }

        .zenData {
        	margin: 2rem 0 0 0;
        }

        @media screen and (min-width: 1200px) {
        	body {
        		font-size: 1.75rem;
        	}
        	h2 {
        		font-size: 2.25rem;
        	}
        	h1 {
        		font-size: 4.0rem;
        		margin-top: 5rem;
        	}
        }

        @media screen and (max-width: 1199px) {
        	.small-string, .small-string a {
        		font-size: 1.20rem;
        	}
        	.prime-string, .prime-string a {
        		font-size: 1.75rem;
        		font-weight: 500;
        	}
        }

        @media screen and (max-width: 991px) {
        	.alert {
        		padding: 1rem;
        		margin: 1rem 1rem 1rem 1rem;
        	}
        }
    </style>
  </head>

  <body>
  <div class="container">
    <img src="<?php echo $relPath; ?>includes/templates/template_default/images/logo.gif" alt="Zen Cart&reg;" title=" Zen Cart&reg; " width="192" height="68" border="0" class="h-img"/> 
    <h1>Zen Cart<sup>&reg;</sup>へようこそ</h1>
    <div>
      <h2>このページが表示される場合の原因</h2>
      <ol>
        <li>
          これが <strong>初めて</strong> Zen Cart<sup>&reg;</sup> にアクセスした場合であれば、まだインストール手続きが完了していないためにこの画面が表示されています。
          <br>
          もしそうであれば、
          <?php if ($instPath) { ?>
            <a href="<?php echo $instPath; ?>">ここをクリック</a> して、インストールを開始してください。
          <?php } else { ?>
            FTPソフトを使って、"zc_install" フォルダをサーバーにアップロードしなければならないかも知れません。その後、ブラウザを使って<a href="<?php echo $instPath; ?>">zc_install/index.php</a> にアクセスしてみてください。（もしくは、今見ているこの画面を再読込すると、リンクが表示されるはずです）
          <?php } ?>
          <br><br>
        </li>
        <li>
          Zen Cart<sup>&reg;</sup> の利用が <strong>初めてではない</strong> 場合で、既に前回正常にインストール作業を完了させている場合。
          <br>
          もし、そうであれば...
          <br>
          <ul style='list-style-type:square'>
            <li>
              この Zen Cartの <tt><strong>/includes/configure.php</strong></tt> と <tt><strong>/admin/includes/configure.php</strong></tt> のどちらか（あるいは両方）に、誤った<em>パスの設定</em> や、誤った<em>データベース接続情報</em>が含まれているのかも知れません。
            <br>
            </li>
            <li>
              もし、何か理由があって、configure.phpファイルを最近編集した場合や、Zen Cart サイトを別のフォルダや別のサーバーに移動した場合は、すべての設定を見直してサーバー環境に合わせて正しい値に更新する必要があります。
              <br>
            </li>
            <li>
              もし、configure.phpファイルのパーミッションを変更したのであれば、ファイルへの読込権限がなくなっているのかも知れません。
              <br>
            </li>
            <li>
              または、configure.phpファイルが、あるべき場所に無くなった可能性があります。
              <br>
            </li>
            <li>
              または、ご利用のサーバー会社が最近サーバのPHP設定を変更した（またはそのバージョンをアップグレードした）場合、そちらに問題が発生しているのかもしれません。
              <br>
            </li>
            <li>
              Zen Cart<sup>&reg;</sup>のウェブサポートページの <a href="http://tutorials.zen-cart.com" target="_blank">Online FAQ and Tutorials（英語）</a>  などが役に立つでしょう。
            </li>
          </ul>
        </li>
        <?php if (isset($problemString) && $problemString != '') { ?>
          <br>
          <li>
            追加情報 <strong>*重要*</strong> 詳細： <span class="errorDetails"><?php echo $problemString; ?></span>
          </li>
        <?php } ?>
      </ol>
    </div>
    <div>
      <h2>インストールを開始するには：</h2>
      <ol>
          <?php if ($docsPath) { ?>
          <li>
            インストール解説書（英文）をご覧いただけます。<a href="<?php echo $docsPath; ?>">ここをクリック</a>
          </li>
        <?php } else { ?>
          <li>
            インストール解説書は、配布された Zen Cart&reg; の圧縮ファイルを開くと、/docs フォルダ内に保存されています。また、その他の情報は <a href="http://tutorials.zen-cart.com" target="_blank">Online FAQs（英文）</a>でもご覧になれます。
          </li>
        <?php } ?>
        <?php if ($instPath) { ?>
          <li>
            ブラウザで、<a href="<?php echo $instPath; ?>">zc_install/index.php</a> 画面を開いてください。
          </li>
        <?php } else { ?>
          <li>
            FTPソフトを使って、"zc_install" フォルダをサーバーにアップロードしなければならないかも知れません。その後、ブラウザを使って<a href="<?php echo $instPath; ?>">zc_install/index.php</a> にアクセスしてみてください。
          </li>
        <?php } ?>
        <li>
          問題が発生したら、Zen Cart<sup>&reg;</sup>のウェブサポートページの <a href="http://tutorials.zen-cart.com" target="_blank">Online FAQ and Tutorials（英語）</a>  などが役に立つでしょう。
        </li>
      </ol>
    </div>
    <section id="footerBlock">
      <div class="appInfo">
        <p>
          Zen Cart&reg; is derived from: Copyright 2003 osCommerce
          <br><br>
          This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
          <br>
          without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE
          <br>
          and is redistributable under Version 2 of the GNU General Public License.
        <p>
        <p>
          <img src="./docs/osi-certified-120x100.png" alt="O S I Certified">
          <br>
          This software is OSI Certified Open Source Software.
          <br>
          OSI Certified is a certification mark of the Open Source Initiative.
        <p>
        <p class="zenData">
          Copyright 2003 - 2018 Zen Ventures, LLC
          <br><br>
          Zen Cart&reg; 
          <br>
          <a href="https://www.zen-cart.com" target="_blank">www.zen-cart.com</a>
        </p>
      </div>
    </section> <!-- End footerBlock //-->
  </div>
  </body>
</html>
