<?php
/**
 * @package shippingMethod
 * @copyright Copyright 2003-2018 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Drbyte Sun Jan 7 21:29:34 2018 -0500 Modified in v1.5.6 $
 */
/**
 * Enter description here...
 *
 */
class table extends base {
  /**
   * Enter description here...
   *
   * @var string
   */
  var $code;
  /**
   * Enter description here...
   *
   * @var string
   */
  var $title;
  /**
   * Enter description here...
   *
   * @var string
   */
  var $description;
  /**
   * Enter description here...
   *
   * @var string
   */
  var $icon;
  /**
   * Enter description here...
   *
   * @var boolean
   */
  var $enabled;
  /**
   * Enter description here...
   *
   * @return table
   */
  function __construct() {
    global $order, $db;

    $this->code = 'table';
    $this->title = MODULE_SHIPPING_TABLE_TEXT_TITLE;
    $this->description = MODULE_SHIPPING_TABLE_TEXT_DESCRIPTION;
    $this->sort_order = defined('MODULE_SHIPPING_TABLE_SORT_ORDER') ? MODULE_SHIPPING_TABLE_SORT_ORDER : null;
    if (null === $this->sort_order) return false;

    $this->icon = '';
    $this->tax_class = MODULE_SHIPPING_TABLE_TAX_CLASS;
    $this->tax_basis = MODULE_SHIPPING_TABLE_TAX_BASIS;
    // disable only when entire cart is free shipping
    if (zen_get_shipping_enabled($this->code)) {
      $this->enabled = (MODULE_SHIPPING_TABLE_STATUS == 'True');
    }

    if ($this->enabled) {
      // check MODULE_SHIPPING_TABLE_HANDLING_METHOD is in
      $check_query = $db->Execute("select configuration_value from " . TABLE_CONFIGURATION . " where configuration_key = 'MODULE_SHIPPING_TABLE_HANDLING_METHOD'");
      if ($check_query->EOF) {
        $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('取り扱い手数料課金単位', 'MODULE_SHIPPING_TABLE_HANDLING_METHOD', 'Order', '取り扱い手数料は注文単位でおこないますか？それともパッケージ単位でおこないますか？<br>Order:注文単位<br>Box:梱包単位', '6', '0', 'zen_cfg_select_option(array(\'Order\', \'Box\'), ', now())");
      }
    }

    if ( ($this->enabled == true) && ((int)MODULE_SHIPPING_TABLE_ZONE > 0) ) {
      $check_flag = false;
      $check = $db->Execute("select zone_id from " . TABLE_ZONES_TO_GEO_ZONES . "
                             where geo_zone_id = '" . MODULE_SHIPPING_TABLE_ZONE . "'
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
  }
  /**
   * Enter description here...
   *
   * @param unknown_type $method
   * @return unknown
   */
  function quote($method = '') {
    global $order, $shipping_weight, $shipping_num_boxes, $total_count;

    // shipping adjustment
    switch (MODULE_SHIPPING_TABLE_MODE) {
      case ('price'):
        $order_total = $_SESSION['cart']->show_total() - $_SESSION['cart']->free_shipping_prices() ;
        break;
      case ('weight'):
        $order_total = $shipping_weight;
        break;
      case ('item'):
        $order_total = $total_count - $_SESSION['cart']->free_shipping_items();
        break;
    }

    $order_total_amount = $_SESSION['cart']->show_total() - $_SESSION['cart']->free_shipping_prices() ;

    $table_cost = preg_split("/[:,]/" , MODULE_SHIPPING_TABLE_COST);
    $size = sizeof($table_cost);
    for ($i=0, $n=$size; $i<$n; $i+=2) {
      if (round($order_total,9) <= $table_cost[$i]) {
        if (strstr($table_cost[$i+1], '%')) {
          $shipping = ($table_cost[$i+1]/100) * $order_total_amount;
        } else {
          $shipping = $table_cost[$i+1];
        }
        break;
      }
    }

    if (MODULE_SHIPPING_TABLE_MODE == 'weight') {
      $shipping = $shipping * $shipping_num_boxes;
      // show boxes if weight
      switch (SHIPPING_BOX_WEIGHT_DISPLAY) {
        case (0):
        $show_box_weight = '';
        break;
        case (1):
        $show_box_weight = ' (' . $shipping_num_boxes . ' ' . TEXT_SHIPPING_BOXES . ')';
        break;
        case (2):
        $show_box_weight = ' (' . number_format($shipping_weight * $shipping_num_boxes,2) . TEXT_SHIPPING_WEIGHT . ')';
        break;
        default:
        $show_box_weight = ' (' . $shipping_num_boxes . ' x ' . number_format($shipping_weight,2) . TEXT_SHIPPING_WEIGHT . ')';
        break;
      }
    }

    $this->quotes = array('id' => $this->code,
    'module' => MODULE_SHIPPING_TABLE_TEXT_TITLE . $show_box_weight,
    'methods' => array(array('id' => $this->code,
    'title' => MODULE_SHIPPING_TABLE_TEXT_WAY,
    'cost' => $shipping + (MODULE_SHIPPING_TABLE_HANDLING_METHOD == 'Box' ? MODULE_SHIPPING_TABLE_HANDLING * $shipping_num_boxes : MODULE_SHIPPING_TABLE_HANDLING) ) ));

    if ($this->tax_class > 0) {
      $this->quotes['tax'] = zen_get_tax_rate($this->tax_class, $order->delivery['country']['id'], $order->delivery['zone_id']);
    }

    if (zen_not_null($this->icon)) $this->quotes['icon'] = zen_image($this->icon, $this->title);

    return $this->quotes;
  }
  /**
   * Enter description here...
   *
   * @return unknown
   */
  function check() {
    global $db;
    if (!isset($this->_check)) {
      $check_query = $db->Execute("select configuration_value from " . TABLE_CONFIGURATION . " where configuration_key = 'MODULE_SHIPPING_TABLE_STATUS'");
      $this->_check = $check_query->RecordCount();
    }
    return $this->_check;
  }
  /**
   * Enter description here...
   *
   */
  function install() {
    global $db;
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) VALUES ('実査法の配送を有効にする', 'MODULE_SHIPPING_TABLE_STATUS', 'False', '実査法（送料テーブル）による配送を有効にしますか？', '6', '0', 'zen_cfg_select_option(array(\'True\', \'False\'), ', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('送料テーブル', 'MODULE_SHIPPING_TABLE_COST', '10:500,20:700,30:1200', '重量、価格、商品点数によって配送料金を設定します。<br /><br/>例）重量による送料テーブル設定例<br />10kgまでは配送料金500円<br />10kgを超えて20kgまでは700円<br />20kgを超えて30kgまでは1200円　…の場合<br />設定値： 10:500,20:700,30:1200　の様に入力します。<br />注意：設定値を超えた場合の送料は 0 円となります。', '6', '0', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('実査法', 'MODULE_SHIPPING_TABLE_MODE', 'weight', '配送料金を算出するベースを選択します。<br>weight:重量<br>price:価格<br>item:商品点数', '6', '0', 'zen_cfg_select_option(array(\'weight\', \'price\', \'item\'), ', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('取扱い手数料', 'MODULE_SHIPPING_TABLE_HANDLING', '0', '配送に適用する取扱手数料を設定できます。', '6', '0', now())");

    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('取り扱い手数料課金単位', 'MODULE_SHIPPING_TABLE_HANDLING_METHOD', 'Order', '取り扱い手数料は注文単位でおこないますか？それともパッケージ単位でおこないますか？<br>Order:注文単位<br>Box:梱包単位', '6', '0', 'zen_cfg_select_option(array(\'Order\', \'Box\'), ', now())");

    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, use_function, set_function, date_added) values ('税種別', 'MODULE_SHIPPING_TABLE_TAX_CLASS', '0', '実査法の配送料に適用される税種別を選んでください。', '6', '0', 'zen_get_tax_class_title', 'zen_cfg_pull_down_tax_classes(', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('税率の計算ベース', 'MODULE_SHIPPING_TABLE_TAX_BASIS', 'Shipping', '配送料にかかる税金の計算ベースを選択します。<br /><br />\r\n・Shipping - 顧客の送付先住所に基づく<br />\r\n・Billing - 顧客の請求先住所に基づく<br />\r\n・Store - ショップの所在住所に基づく(送付先/請求先がショップ所在地と同じ地域の場合に有効)', '6', '0', 'zen_cfg_select_option(array(\'Shipping\', \'Billing\', \'Store\'), ', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, use_function, set_function, date_added) values ('配送地域', 'MODULE_SHIPPING_TABLE_ZONE', '0', '配送地域を選択すると選択された地域のみで利用可能となります。', '6', '0', 'zen_get_zone_class_title', 'zen_cfg_pull_down_zone_classes(', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('表示の整列順', 'MODULE_SHIPPING_TABLE_SORT_ORDER', '0', '表示の整列順を設定できます。数字が小さいほど上位に表示されます。', '6', '0', now())");
  }
  /**
   * Enter description here...
   *
   */
    function remove() {
      global $db;
      $db->Execute("delete from " . TABLE_CONFIGURATION . " where configuration_key like 'MODULE\_SHIPPING\_TABLE\_%'");
    }

  /**
   * Enter description here...
   *
   * @return unknown
   */
  function keys() {
    return array('MODULE_SHIPPING_TABLE_STATUS', 'MODULE_SHIPPING_TABLE_COST', 'MODULE_SHIPPING_TABLE_MODE', 'MODULE_SHIPPING_TABLE_HANDLING', 'MODULE_SHIPPING_TABLE_HANDLING_METHOD', 'MODULE_SHIPPING_TABLE_TAX_CLASS', 'MODULE_SHIPPING_TABLE_TAX_BASIS', 'MODULE_SHIPPING_TABLE_ZONE', 'MODULE_SHIPPING_TABLE_SORT_ORDER');
  }
}
