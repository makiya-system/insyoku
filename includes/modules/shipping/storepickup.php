<?php
/**
 * @package shippingMethod
 * @copyright Copyright 2003-2018 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Drbyte Sun Jan 7 21:29:34 2018 -0500 Modified in v1.5.6 $
 */
/**
 * Store-Pickup / Will-Call shipping method
 * with multiple location choices as radio-buttons
 */
class storepickup extends base {
  /**
   * $code determines the internal 'code' name used to designate "this" shipping module
   *
   * @var string
   */
  var $code;
  /**
   * $title is the displayed name for this shipping method
   *
   * @var string
   */
  var $title;
  /**
   * $description is a soft name for this shipping method
   *
   * @var string
   */
  var $description;
  /**
   * module's icon
   *
   * @var string
   */
  var $icon;
  /**
   * $enabled determines whether this module shows or not... during checkout.
   *
   * @var boolean
   */
  var $enabled;
  /**
   * constructor
   *
   * @return storepickup
   */
  function __construct() {
    $this->code = 'storepickup';
    $this->title = MODULE_SHIPPING_STOREPICKUP_TEXT_TITLE;
    $this->description = MODULE_SHIPPING_STOREPICKUP_TEXT_DESCRIPTION;
    $this->sort_order = defined('MODULE_SHIPPING_STOREPICKUP_SORT_ORDER') ? MODULE_SHIPPING_STOREPICKUP_SORT_ORDER : null;
    if (null === $this->sort_order) return false;

    $this->icon = ''; // add image filename here; must be uploaded to the /images/ subdirectory
    $this->tax_class = MODULE_SHIPPING_STOREPICKUP_TAX_CLASS;
    $this->tax_basis = MODULE_SHIPPING_STOREPICKUP_TAX_BASIS;
    $this->enabled = (MODULE_SHIPPING_STOREPICKUP_STATUS == 'True');
    $this->update_status();
  }
  /**
   * Perform various checks to see whether this module should be visible
   */
  function update_status() {
    global $order, $db;
    if (!$this->enabled) return;
    if (IS_ADMIN_FLAG === true) return;

    if (isset($order->delivery) && (int)MODULE_SHIPPING_STOREPICKUP_ZONE > 0 ) {
      $check_flag = false;
      $check = $db->Execute("select zone_id from " . TABLE_ZONES_TO_GEO_ZONES . "
                             where geo_zone_id = '" . MODULE_SHIPPING_STOREPICKUP_ZONE . "'
                             and zone_country_id = '" . (int)$order->delivery['country']['id'] . "'
                             order by zone_id");
      while (!$check->EOF) {
        if ($check->fields['zone_id'] < 1) {
          $check_flag = true;
          break;
        } elseif ($check->fields['zone_id'] == $order->delivery['zone_id']) {
          $check_flag = true;
          break;
        }
        $check->MoveNext();
      }

      if ($check_flag == false) {
        $this->enabled = false;
      }
    }

    // other status checks?
    if ($this->enabled) {
      // other checks here
    }
  }
  /**
   * Obtain quote from shipping system/calculations
   *
   * @param string $method
   * @return array
   */
  function quote($method = '') {
    global $order;

    // this code looks to see if there's a language-specific translation for the available shipping locations/methods, to override what is entered in the Admin (since the admin setting is in the default language)
    $ways_translated = (defined('MODULE_SHIPPING_STOREPICKUP_MULTIPLE_WAYS')) ? trim(MODULE_SHIPPING_STOREPICKUP_MULTIPLE_WAYS) : '';
    $ways_default = trim(MODULE_SHIPPING_STOREPICKUP_LOCATIONS_LIST);
    $methodsToParse = ($ways_translated == '') ? $ways_default : $ways_translated;

    if ($methodsToParse == '') {
      $this->methodsList[] = array('id' => $this->code,
                                   'title' => trim((string)MODULE_SHIPPING_STOREPICKUP_TEXT_WAY),
                                   'cost' => MODULE_SHIPPING_STOREPICKUP_COST);
    } else {
      $this->locations = explode(';', (string)$methodsToParse);
      $this->methodsList = array();
      foreach ($this->locations as $key => $val)
      {
        if ($method != '' && $method != $this->code . (string)$key) continue;
        $cost = MODULE_SHIPPING_STOREPICKUP_COST;
        $title = $val;
        if (strstr($val, ',')) {
          list($title, $cost) = explode(',', $val);
        }
        $this->methodsList[] = array('id' => $this->code . (string)$key,
                                     'title' => trim($title),
                                     'cost' => $cost);
      }
    }

    $this->quotes = array('id' => $this->code,
                          'module' => MODULE_SHIPPING_STOREPICKUP_TEXT_TITLE,
                          'methods' => $this->methodsList);

    if ($this->tax_class > 0) {
      $this->quotes['tax'] = zen_get_tax_rate($this->tax_class, $order->delivery['country']['id'], $order->delivery['zone_id']);
    }

    if (zen_not_null($this->icon)) $this->quotes['icon'] = zen_image($this->icon, $this->title);

    return $this->quotes;
  }
  /**
   * Check to see whether module is installed
   *
   * @return boolean
   */
  function check() {
    global $db;
    if (!isset($this->_check)) {
      $check_query = $db->Execute("select configuration_value from " . TABLE_CONFIGURATION . " where configuration_key = 'MODULE_SHIPPING_STOREPICKUP_STATUS'");
      $this->_check = $check_query->RecordCount();
    }
    if ($this->_check > 0 && !defined('MODULE_SHIPPING_STOREPICKUP_LOCATIONS_LIST')) $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('受取場所', 'MODULE_SHIPPING_STOREPICKUP_LOCATIONS_LIST', '福山店;広島店,250;新大阪店,100', '商品の受取場所を入力してください。複数の場合にはセミコロン(;)で区切ってください。<br>
また、手数料を課金する場合には受取場所ごとの料金をカンマ区切りで指定することも出来ます。<br>ここで料金設定をしていない場合、次の「料金」項目での基本設定金額が適用されます。<br>例）<br>
福山店;広島店,250;新大阪店,100<br>
（上記の場合であれば、福山店は基本金額、広島店は250円、新大阪店は100円になります）
複数言語での利用の場合には、このモジュールの基本言語以外の言語ファイル内にある　define(\'MODULE_SHIPPING_STOREPICKUP_MULTIPLE_WAYS\', \"\");　に対応する配送方法名を定義します。<br>
詳細はモジュールファイル内のコメントを参照してください。
', '6', '0', now())");
    return $this->_check;
  }
  /**
   * Install the shipping module and its configuration settings
   *
   */
  function install() {
    global $db;
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('店頭引換', 'MODULE_SHIPPING_STOREPICKUP_STATUS', 'False', '店頭引換を提供しますか？', '6', '0', 'zen_cfg_select_option(array(\'True\', \'False\'), ', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('受取場所', 'MODULE_SHIPPING_STOREPICKUP_LOCATIONS_LIST', '福山店;広島店,250;新大阪店,100', '商品の受取場所を入力してください。複数の場合にはセミコロン(;)で区切ってください。<br>
また、手数料を課金する場合には受取場所ごとの料金をカンマ区切りで指定することも出来ます。<br>ここで料金設定をしていない場合、次の「料金」項目での基本設定金額が適用されます。<br>例）<br>
福山店;広島店,250;新大阪店,100<br>
（上記の場合であれば、福山店は基本金額、広島店は250円、新大阪店は100円になります）
複数言語での利用の場合には、このモジュールの基本言語以外の言語ファイル内にある　define(\'MODULE_SHIPPING_STOREPICKUP_MULTIPLE_WAYS\', \"\");　に対応する配送方法名を定義します。<br>
詳細はモジュールファイル内のコメントを参照してください。

', '6', '0', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('料金', 'MODULE_SHIPPING_STOREPICKUP_COST', '0.00', '店頭引換の料金を設定します。', '6', '0', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, use_function, set_function, date_added) values ('税種別', 'MODULE_SHIPPING_STOREPICKUP_TAX_CLASS', '0', '店頭引換に適用する税種別を設定します。', '6', '0', 'zen_get_tax_class_title', 'zen_cfg_pull_down_tax_classes(', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('税率の計算ベース', 'MODULE_SHIPPING_STOREPICKUP_TAX_BASIS', 'Shipping', '配送料にかかる税金オプションの設定します。<br /><br />\r\n・Shipping - 顧客の送付先住所に基づく<br />\r\n・Billing - 顧客の請求先住所に基づく<br />\r\n・Store - ショップの所在住所に基づく(送付先/請求先がショップ所在地と同じ地域の場合に有効)', '6', '0', 'zen_cfg_select_option(array(\'Shipping\', \'Billing\'), ', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, use_function, set_function, date_added) values ('提供地域', 'MODULE_SHIPPING_STOREPICKUP_ZONE', '0', '店頭引換を提供する地域を設定します。', '6', '0', 'zen_get_zone_class_title', 'zen_cfg_pull_down_zone_classes(', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('表示の整列順', 'MODULE_SHIPPING_STOREPICKUP_SORT_ORDER', '0', '表示の整列順を設定できます。数字が小さいほど上位に表示されます。', '6', '0', now())");
  }
  /**
   * Remove the module and all its settings
   *
   */
  function remove() {
    global $db;
    $db->Execute("delete from " . TABLE_CONFIGURATION . " where configuration_key like 'MODULE\_SHIPPING\_STOREPICKUP\_%'");
  }
  /**
   * Internal list of configuration keys used for configuration of the module
   *
   * @return array
   */
  function keys() {
    return array('MODULE_SHIPPING_STOREPICKUP_STATUS', 'MODULE_SHIPPING_STOREPICKUP_LOCATIONS_LIST', 'MODULE_SHIPPING_STOREPICKUP_COST', 'MODULE_SHIPPING_STOREPICKUP_TAX_CLASS', 'MODULE_SHIPPING_STOREPICKUP_TAX_BASIS', 'MODULE_SHIPPING_STOREPICKUP_ZONE', 'MODULE_SHIPPING_STOREPICKUP_SORT_ORDER');
  }
}
