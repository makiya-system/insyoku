# MySQL file for Zen Cart Demo Products load
#
# $Id: mysql_demo.sql  Aug 2017 $
#

# Configuration Settings:
UPDATE configuration SET configuration_value='true' WHERE configuration_key='DOWNLOAD_ENABLED';

#
# Dumping data for table `address_book`
#

INSERT INTO address_book (address_book_id, customers_id, entry_gender, entry_company, entry_firstname, entry_lastname, entry_street_address, entry_suburb, entry_postcode, entry_city, entry_state, entry_country_id, entry_zone_id) VALUES (NULL, 1, 'm', 'JustaDemo', 'Bill', 'Smith', '123 Any Avenue', '', '12345', 'Here', '', 223, 12);

--
-- テーブルのデータをダンプしています `categories`
--

INSERT INTO categories (`categories_id`, `categories_image`, `parent_id`, `sort_order`, `date_added`, `last_modified`, `categories_status`) VALUES
(1, 'categories/category_hardware.jpg', 0, 1, '2004-06-23 12:37:09', '2019-04-25 17:49:24', 1),
(2, 'categories/category_software.jpg', 0, 2, '2004-06-23 12:38:55', '2019-04-25 17:49:42', 1),
(3, 'categories/category_dvd.jpg', 0, 3, '2004-06-23 12:39:42', '2019-04-25 17:49:54', 1),
(4, 'categories/category_keybord.jpg', 1, 1, '2004-06-23 12:42:31', '2019-04-25 17:50:25', 1),
(5, 'categories/category_mouse.jpg', 1, 2, '2004-06-23 12:43:54', '2019-04-25 17:50:35', 1),
(6, 'categories/category_printer.jpg', 1, 3, '2004-06-23 12:45:03', '2019-04-25 17:52:35', 1),
(7, 'categories/category_action.jpg', 3, 1, '2004-06-23 12:46:50', '2019-04-25 17:52:52', 1),
(8, 'categories/category_animation.jpg', 3, 2, '2004-06-23 12:47:36', '2019-04-25 17:53:01', 1),
(9, 'categories/category_comedy.jpg', 3, 3, '2004-06-23 12:48:10', '2019-04-25 17:53:11', 1),
(10, 'categories/category_gift.jpg', 0, 4, '2004-06-23 14:00:13', '2019-04-25 17:50:04', 1);


--
-- テーブルのデータをダンプしています `categories_description`
--

INSERT INTO categories_description (`categories_id`, `language_id`, `categories_name`, `categories_description`) VALUES
(1, 1, 'Hardware', ''),
(1, 2, 'ハードウェア', ''),
(2, 1, 'Software', ''),
(2, 2, 'ソフトウェア', ''),
(3, 1, 'DVD Movies', ''),
(3, 2, 'DVDムービー', ''),
(4, 1, 'Keyboards', ''),
(4, 2, 'キーボード', ''),
(5, 1, 'Mice', ''),
(5, 2, 'マウス', ''),
(6, 1, 'Printers', ''),
(6, 2, 'プリンター', ''),
(7, 1, 'Action', ''),
(7, 2, 'アクション', ''),
(8, 1, 'Cartoons', ''),
(8, 2, 'アニメ', ''),
(9, 1, 'Comedy', ''),
(9, 2, 'コメディ', ''),
(10, 1, 'Gift Certificates', ''),
(10, 2, 'ギフト券', '');

#
# Dumping data for table `customers`
#

INSERT INTO customers (customers_id, customers_gender, customers_firstname, customers_lastname, customers_dob, customers_email_address, customers_nick, customers_default_address_id, customers_telephone, customers_fax, customers_password, customers_newsletter, customers_group_pricing, customers_email_format, customers_authorization, customers_referral) VALUES (NULL, 'm', 'Bill', 'Smith', '2001-01-01 00:00:00', 'root@localhost.com', '', 1, '12345', '', 'd95e8fa7f20a009372eb3477473fcd34:1c', '0', 0, 'TEXT', 0, '');

#
# Dumping data for table `customers_info`
#

INSERT INTO customers_info (customers_info_id, customers_info_date_of_last_logon, customers_info_number_of_logons, customers_info_date_account_created, customers_info_date_account_last_modified, global_product_notifications) VALUES (1, '0001-01-01 00:00:00', 0, '2004-01-21 01:35:28', '0001-01-01 00:00:00', 0);

#
# Dumping data for table ezpages
#

INSERT INTO ezpages (pages_id, alt_url, alt_url_external, status_header, status_sidebox, status_footer, status_toc, header_sort_order, sidebox_sort_order, footer_sort_order, toc_sort_order, page_open_new_window, page_is_ssl, toc_chapter)
VALUES (1, '', '', 1, 0, 0, 1, 10, 0, 0, 10, 0, 0, 10),
(2, '', '', 0, 0, 0, 1, 0, 0, 0, 30, 0, 0, 10),
(3, '', '', 0, 1, 0, 0, 0, 10, 0, 0, 0, 0, 0),
(5, '', '', 0, 1, 0, 0, 0, 20, 0, 0, 0, 0, 0),
(6, '', '', 1, 1, 1, 0, 50, 50, 50, 0, 0, 0, 0),
(7, 'index.php?main_page=account', '', 0, 0, 1, 0, 0, 0, 10, 0, 0, 1, 0),
(8, 'index.php?main_page=site_map', '', 0, 1, 1, 0, 0, 40, 20, 0, 0, 0, 0),
(9, 'index.php?main_page=privacy', '', 1, 0, 1, 0, 30, 0, 40, 0, 0, 0, 0),
(10, '', 'http://www.zen-cart.com', 1, 0, 0, 0, 60, 0, 0, 0, 1, 0, 0),
(11, 'index.php?main_page=index&cPath=21', '', 0, 1, 0, 0, 0, 60, 0, 0, 0, 0, 0),
(12, 'index.php?main_page=index&cPath=3_10', '', 0, 0, 1, 0, 0, 0, 60, 0, 0, 0, 0),
(13, '', 'http://www.google.com', 0, 1, 0, 0, 0, 70, 0, 0, 1, 0, 0),
(14, '', '', 0, 0, 0, 1, 0, 0, 0, 20, 0, 0, 10);

#
# Dumping data for table ezpages_content
#

INSERT INTO ezpages_content (pages_id, languages_id, pages_title, pages_html_text)
VALUES (1, 1, 'EZPages', 'This is the main page listed under the Link EZPages in the Header<br /><br />\r\n\r\n<strong>See: What is EZPages? Link for detailed use of EZPages</strong><br /><br />\r\n\r\nThis Link could show in the Header, Footer or Sidebox or a combination of all three locations.<br /><br />\r\n\r\nThe Chapter and TOC settings are for using this Page in combination with other Pages.<br /><br />\r\n\r\nThe other Pages can be shown either *only* with this Link in the Chapter and TOC or as their own Link in the Header, Footer or Sidebox, depending on how you would like them to appear on your site.<br /><br />\r\n\r\nThere is no true "Master" Link, other than the Links you actually have configured to display. But any Link in a Chapter can be displayed in any of the 3 locations for the Header, Footer or Sidebox or not at all, where it only appears together with the other Links in the Chapter.'),
(2, 1, 'A New Page', 'This is another page that is linked to the Chapter 10 via the Chapter number used and is sorted based on the TOC Order.<br /><br />\r\n\r\nThere is not a link to this page via the Header, Footer nor the Sidebox.<br /><br />\r\n\r\nThis page is only seen if the "main" link is selected and then it will show in the TOC listing.<br /><br />\r\n\r\nThis is a handy way to have numerous links that are related but only show one main link to get to them all.<br /><br />'),
(3, 1, 'Another New Page', 'This is yet another new page or link that is part of Chapter 10<br /><br />\r\n\r\nThe numbering of the Chapters can be done in any manner. But, by number in increments such as 10, 20, 30, etc. you can later insert pages, or links, as needed within the existing pages.<br /><br />\r\n\r\nThere is no limit to the number of pages, or links, that can be grouped together using the Chapter.<br /><br />\r\n\r\nThe display of the Previous/Next and TOC listing is a setting that can be turned on or off.'),
(4, 1, 'My Link', 'This is a single page link that will be shown in the Sidebox.<br /><br />\r\n\r\nThere are no additional pages or links associated with this page as there is no Chapter.<br /><br />\r\n\r\nLater, if you want to expand on this link you can add a Chapter and TOC settings and build a group.<br /><br />\r\n\r\nNotice that the Previous/Next and TOC automatically disable when there isn''t a Chapter. Even with a Chapter, there must be more than one (1) related link or page in the group before these will display.'),
(5, 1, 'Anything', 'The title or link names can be anything that you would like to use.<br /><br />\r\n\r\nYou decide on the content and the link name relative to that content.<br /><br />\r\n\r\nThen, define where you want the link to show: Header, Footer or Sidebox or as a combination of these three locations.<br /><br />\r\n\r\nThe content of the page can be anything you like. Be sure that your content is valid in regard to table and stylesheet rules.<br /><br />\r\n\r\nYou can even set up the links to go to Secure or Non-Secure pages as well as open in the same or a new window.<br /><br />\r\n\r\nLinks can also be setup to use internal or external links vs the HTML Content. See: examples below in the Link URL settings.'),
(6, 1, 'Shared', 'This link is a "shared" link between the Header, Footer and Sidebox.<br /><br />\r\n\r\nThe number on the order was set to 50 on all of the settings just for the sake of an easier notation on entering it.<br /><br />\r\n\r\nThe order can be the same or different for the three locations.<br /><br />\r\n\r\nIf you wanted to really get creative, you could also have this as part of a Chapter not related to the link order.<br /><br />'),
(7, 1, 'My Account', ''),
(8, 1, 'Site Map', ''),
(9, 1, 'Privacy Notice', ''),
(10, 1, 'Zen Cart', ''),
(11, 1, 'Gift Certificates', ''),
(12, 1, 'Action DVDs', ''),
(13, 1, 'Google', ''),
(14, 1, 'What is EZ-Pages?', '<span style="font-weight: bold; color: rgb(255, 0, 0);">Summary</span><br /><br /><span style="font-weight: bold;">EZ-Pages</span> is a fast, easy way of creating links and additional pages.<br /><br />The additional Pages can be for:<br /><ul><li>New Pages</li><li>Internal Links</li><li>External Links</li><li>Secure or Non-Secure pages</li><li>Same or New Window</li></ul>In Addition, there is the ability to create &quot;related&quot; links in the format of a Chapter (group) and its TOC (related pages/links).<br /><br /><span style="font-weight: bold; color: rgb(255, 0, 0);">Link Naming</span><br /><br />Links are named by the Page Title. All Links need a Page Title in order to function.<br /><br />If you forget to add a Page Title, then you will not be able to add the Link.<br /><br />If you do not assign an Order for the Header, Sidebox or Footer, then the Link will not display even if you have a Page Title.<br /><br /><span style="font-weight: bold;"><span style="color: rgb(255, 0, 0);">Link Placement</span><br /><br /></span>While you have the option of adding Additional Links to the Header, Footer and Sidebox with EZ-Pages, you are not limited to these three Link locations. Links can be in one or more locations simply by enabling the Order for the Location(s) where the Link should appear..<br /><br />The Link Location Status for the Header, Footer and Sidebox is controlled simply by setting these to Yes or No for each setting. Then, set the Order in which the Link should appear for each location.<br /><br />This means that if you were to set Header to Yes 30 and Sidebox to Yes 50 then the link would appear in both the Header and Sidebox in the Order of your Links.<br /><br />The Order numbering method is up to you. Numbering using 10, 20, 30, etc. will allow you to sort the Links and add additional Links later.<br /><br />Note: a 0 value for the Order will disable the Link from displaying.<br /><br /><span style="font-weight: bold;"><span style="color: rgb(255, 0, 0);">Open in New Window and Secure Pages</span><br /></span><br />With EZ-Pages, each Link can take you to the same, main window for your shop; or, you can have the Link open a brand new New Window. In addition, there is an option for making the Link open as a Secure Page or a Non-Secure Page.<br /><br /><span style="font-weight: bold; color: rgb(255, 0, 0);">Chapter and TOC</span><br style="font-weight: bold; color: rgb(255, 0, 0);" /><br />The Chapter and TOC, or Table of Contents, are a unique method of building Multiple Links that interact together.<br /><br />While these Links still follow the rules of the Header, Footer and Sidebox placement, the difference is that only one of the Links, the Main Link, needs to be displayed anywhere on the site.<br /><br />If you had, for example, 5 related Links, you could add the first Link as the Main Link by setting its location to the Header, Footer or Sidebox and set its Order, as usual.<br /><br />Next, you need to assign a Chapter or Group number to the Link. This Chapter holds the related Links together.<br /><br />Then, set the TOC or Table of Contents setting. This is a secondary Sort Order for within the Chapter.<br /><br />Again, you can display any of the Links within a Chapter, as well as making any of these Links the Main Link. Whether the Links all show, or just one or more of the Links show, the Chapter is the key to grouping these Links together in the TOC or Previous/Next. <br /><br /><span style="font-weight: bold; font-style: italic;">NOTE: While all Links within a Chapter will display together, you can have the different Links display in the Header, Footer or Sidebox on their own. Or, you can have the additional Links only display when the Main Link or one of the Additional Links within the Chapter has been opened.</span><br style="font-weight: bold; font-style: italic;" /><br />The versitility of EZ-Pages will make adding new Links and Pages extreamly easy for the beginner as well as the advance user.<br /><br />NOTE: Browser-based HTML editors will sometimes add the opening and closing tags for the &lt;html&gt;, &lt;head&gt; and &lt;body&gt; to the file you are working on.<br /><br />These are already added to the pages via EZ-Pages.<br /><br /><span style="color: rgb(255, 0, 0); font-weight: bold;">External Link URL</span><br /><br />External Link URLs are links to outside pages not within your shop. These can be to any valid URL such as:<br /><br />http://www.sashbox.net<br /><br />You need to include the full URL path to any External Link URL. You may also mark these to open in a New Window or the Same Window.<br /><br /><span style="color: rgb(255, 0, 0); font-weight: bold;">Internal Link URL</span><br /><br />Internal Link URLs are links to internal pages within your shop. These can be to any valid URL, but should be written as relative links such as:<br /><br />index.php?main_page=index&amp;cPath=21<br /><br />The above Link would take you to the Category for categories_id 21<br /><br />While these links can be the Full URL to an Internal Link, it is best to write as a Relative Link so that if you change domains, are work on a temporary domain or an IP Address, the Link will remain valid if moved to another domain, IP Address, etc.<br /><br />Internal Links can also open in a New Window or the Same Window or be for Secure or Non-Secure Pages.<br /><br /><span style="font-weight: bold; color: rgb(255, 0, 0);">EZ-Pages Additional Pages vs Internal Links vs External Links</span><br /><br />The Type of Link that you create is based on an order of precidence, where HTML Content will superceed both the Internal Link and the External Link values.<br /><br />The External Link URL will superceed the Internal Link URL.<br /><br />If you try to set a combination of HTML Content, Internal Link and/or External Link, the Link will be flagged in the listing with a read icon to alert you to your mistake.<br /><br /><span style="font-weight: bold; color: rgb(255, 0, 0);">WARNING ...</span><br /><br />When using Editors such as TinyMCE or CKEditor, if you press enter in the HTML Content area <br /> will be added. These will be detected as &quot;content&quot; and will override any Internal Link URL or External Link URL.<br /><br /><span style="font-weight: bold; color: rgb(255, 0, 0);">Admin Only Display</span><br /><br />Sometimes, when working on EZ-Pages, you will want to be able to work on a Live Site and see the results of your work, but not allow the Customers to see this until you are done.<br /><br />There are 3 settings in the Configuration ... EZ-Pages Settings for the Header, Footer and Sidebox  Status:<br /><ul><li>OFF</li><li>ON</li><li>Admin Only</li></ul>The Admin Only setting is controlled by the IP Address(es) set in the Website Maintenance.<br /><br />This can be very handy when needing to work on a Live Site but not wanting customers to see the work in progress.<br /><br />');

--
-- テーブルのデータをダンプしています `featured`
--

INSERT INTO featured (`featured_id`, `products_id`, `featured_date_added`, `featured_last_modified`, `expires_date`, `date_status_change`, `status`, `featured_date_available`) VALUES
(1, 12, '2019-04-25 16:42:05', NULL, '0001-01-01', NULL, 1, '0001-01-01'),
(2, 13, '2019-04-25 16:42:09', NULL, '0001-01-01', NULL, 1, '0001-01-01'),
(3, 8, '2019-04-25 16:42:18', NULL, '0001-01-01', NULL, 1, '0001-01-01'),
(4, 3, '2019-04-25 16:42:23', NULL, '0001-01-01', NULL, 1, '0001-01-01');

#
# Dumping data for table `group_pricing`
#

INSERT INTO group_pricing (group_id, group_name, group_percentage, last_modified, date_added) VALUES (1, 'Group 10', '10.00', NULL, '2004-04-29 00:21:04');

#
# Dumping data for table `manufacturers`
#

INSERT INTO manufacturers (manufacturers_id, manufacturers_name, manufacturers_image, date_added, last_modified) VALUES (1, 'Matrox', 'manufacturers/manufacturer_matrox.gif', '2003-12-23 03:18:19', NULL),
(2, 'Microsoft', 'manufacturers/manufacturer_microsoft.gif', '2003-12-23 03:18:19', NULL),
(3, 'Warner', 'manufacturers/manufacturer_warner.gif', '2003-12-23 03:18:19', NULL),
(4, 'Fox', 'manufacturers/manufacturer_fox.gif', '2003-12-23 03:18:19', NULL),
(5, 'Logitech', 'manufacturers/manufacturer_logitech.gif', '2003-12-23 03:18:19', NULL),
(6, 'Canon', 'manufacturers/manufacturer_canon.gif', '2003-12-23 03:18:19', NULL),
(7, 'Sierra', 'manufacturers/manufacturer_sierra.gif', '2003-12-23 03:18:19', NULL),
(8, 'GT Interactive', 'manufacturers/manufacturer_gt_interactive.gif', '2003-12-23 03:18:19', NULL),
(9, 'Hewlett Packard', 'manufacturers/manufacturer_hewlett_packard.gif', '2003-12-23 03:18:19', NULL);

#
# Dumping data for table `manufacturers_info`
#

INSERT INTO manufacturers_info (manufacturers_id, languages_id, manufacturers_url, url_clicked, date_last_click) VALUES (1, 1, 'http://www.matrox.com', 0, NULL),
(2, 1, 'http://www.microsoft.com', 0, NULL),
(3, 1, 'http://www.warner.com', 0, NULL),
(4, 1, 'http://www.fox.com', 0, NULL),
(5, 1, 'http://www.logitech.com', 0, NULL),
(6, 1, 'http://www.canon.com', 0, NULL),
(7, 1, 'http://www.sierra.com', 0, NULL),
(8, 1, 'http://www.infogrames.com', 0, NULL),
(9, 1, 'http://www.hewlettpackard.com', 0, NULL);

#
# Dumping data for table `media_clips`
#

INSERT INTO media_clips (clip_id, media_id, clip_type, clip_filename, date_added, last_modified) VALUES (1, 1, 1, 'thehunter.mp3', '2004-06-01 20:57:43', '0001-01-01 00:00:00'),
(6, 2, 1, 'thehunter.mp3', '2004-07-13 00:45:09', '0001-01-01 00:00:00');

#
# Dumping data for table `media_manager`
#

INSERT INTO media_manager (media_id, media_name, last_modified, date_added) VALUES (1, 'Russ Tippins - The Hunter', '2004-06-01 20:57:43', '2004-06-01 20:42:53'),
(2, 'Help!', '2004-07-13 01:01:14', '2004-07-12 17:57:45');



#
# Dumping data for table `media_types`
#

#INSERT INTO media_types (type_id, type_name, type_ext) VALUES (1, 'MP3', '.mp3');

#
# Dumping data for table `music_genre`
#

INSERT INTO music_genre (music_genre_id, music_genre_name, date_added, last_modified) VALUES (1, 'Rock', '2004-06-01 20:53:26', NULL),
(2, 'Jazz', '2004-06-01 20:53:45', NULL);


#
# Dumping data for table `product_types_to_category`
#

INSERT INTO product_types_to_category (product_type_id, category_id) VALUES (3, 63),
(4, 63);

--
-- テーブルのデータをダンプしています `products`
--

INSERT INTO products (`products_id`, `products_type`, `products_quantity`, `products_model`, `products_image`, `products_price`, `products_virtual`, `products_date_added`, `products_last_modified`, `products_date_available`, `products_weight`, `products_status`, `products_tax_class_id`, `manufacturers_id`, `products_ordered`, `products_quantity_order_min`, `products_quantity_order_units`, `products_priced_by_attribute`, `product_is_free`, `product_is_call`, `products_quantity_mixed`, `product_is_always_free_shipping`, `products_qty_box_status`, `products_quantity_order_max`, `products_sort_order`, `products_discount_type`, `products_discount_type_from`, `products_price_sorter`, `master_categories_id`, `products_mixed_discount_quantity`, `metatags_title_status`, `metatags_products_name_status`, `metatags_model_status`, `metatags_price_status`, `metatags_title_tagline_status`) VALUES
(1, 1, 99, 'MSINTKB', 'microsoft/intkeyboardps2.gif', '6990.0000', 0, '2019-04-26 05:31:35', '2004-08-01 15:30:35', NULL, 8, 1, 1, 0, 1, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, '6990.0000', 4, 1, 0, 0, 0, 0, 0),
(2, 1, 97, 'MSIMEXP', 'microsoft/imexplorer.gif', '6490.0000', 0, '2004-06-23 12:59:46', NULL, NULL, 1, 1, 1, 1, 3, 1, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, '6490.0000', 5, 1, 0, 0, 0, 0, 0),
(3, 1, 99, 'MSIMPRO', 'microsoft/msimpro.gif', '4990.0000', 0, '2004-06-23 13:01:50', NULL, NULL, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, '4990.0000', 5, 1, 0, 0, 0, 0, 0),
(4, 1, 99, 'HPLJ1100XI', 'hewlett_packard/lj1100xi.gif', '49990.0000', 0, '2004-06-23 13:07:56', NULL, NULL, 45, 1, 1, 2, 1, 1, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, '49990.0000', 6, 1, 0, 0, 0, 0, 0),
(5, 1, 100, 'PC-DISC', 'gt_interactive/disciples.gif', '9000.0000', 0, '2019-04-26 05:31:35', NULL, NULL, 2, 1, 1, 0, 0, 1, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, '9000.0000', 2, 1, 0, 0, 0, 0, 0),
(6, 1, 99, 'PC-TWOF', 'gt_interactive/wheel_of_time.gif', '9990.0000', 0, '2004-06-23 13:16:10', NULL, NULL, 2.5, 1, 1, 3, 1, 1, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, '9990.0000', 2, 1, 0, 0, 0, 0, 0),
(7, 1, 98, 'PC-UNTM', 'gt_interactive/unreal_tournament.gif', '8990.0000', 0, '2004-06-23 13:18:50', NULL, NULL, 2, 1, 1, 3, 2, 1, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, '8990.0000', 2, 1, 0, 0, 0, 0, 0),
(8, 1, 98, 'DVD-LTWP', 'dvd/lethal_weapon.gif', '3490.0000', 0, '2019-04-26 05:31:35', NULL, NULL, 3, 1, 1, 5, 2, 1, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, '3000.0000', 7, 1, 0, 0, 0, 0, 0),
(9, 1, 93, 'DVD-SPEED', 'dvd/speed.gif', '3990.0000', 0, '2004-06-23 13:39:23', NULL, NULL, 2, 1, 2, 4, 7, 1, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, '2900.0000', 7, 1, 0, 0, 0, 0, 0),
(10, 1, 100, 'DVD-SPEED2', 'dvd/speed_2.gif', '4200.0000', 0, '2004-06-23 13:41:27', NULL, NULL, 2, 1, 1, 4, 0, 1, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, '4200.0000', 7, 1, 0, 0, 0, 0, 0),
(11, 1, 100, 'DVD-MATR', 'dvd/the_matrix.gif', '3990.0000', 0, '2004-06-23 13:43:20', '2004-08-06 09:55:15', NULL, 2.5, 1, 2, 5, 0, 1, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, '3990.0000', 7, 1, 0, 0, 0, 0, 0),
(12, 1, 96, 'DVD-ABUG', 'dvd/a_bugs_life.gif', '3590.0000', 0, '2004-06-23 13:45:51', NULL, NULL, 2, 1, 1, 5, 4, 1, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, '3590.0000', 8, 1, 0, 0, 0, 0, 0),
(13, 1, 0, 'DVD-TSAB', 'dvd/theres_something_about_mary.gif', '4990.0000', 0, '2004-06-23 13:48:17', '2019-05-15 02:43:48', NULL, 2.3, 1, 2, 4, 0, 1, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, '4990.0000', 9, 1, 0, 0, 0, 0, 0),
(14, 1, 99, 'DVD-YGEM', 'dvd/youve_got_mail.gif', '3490.0000', 0, '2004-06-23 13:50:05', NULL, NULL, 2, 1, 1, 5, 1, 1, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, '3490.0000', 9, 1, 0, 0, 0, 0, 0),
(15, 1, 99, 'GIFT500', 'gift_certificates/gv_500.gif', '500.0000', 1, '2019-04-26 05:31:35', NULL, NULL, 0, 1, 1, 0, 1, 1, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, '500.0000', 10, 1, 0, 0, 0, 0, 0),
(16, 1, 100, 'GIFT1000', 'gift_certificates/gv_1000.gif', '1000.0000', 1, '2004-06-23 21:22:22', '2004-06-23 21:22:47', NULL, 0, 1, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, '1000.0000', 10, 1, 0, 0, 0, 0, 0);


#New Products
UPDATE products SET products_date_added = NOW() WHERE products_id = 1 or products_id = 5 or products_id = 8 or products_id = 15;


--
-- テーブルのデータをダンプしています `products_attributes`
--

INSERT INTO products_attributes (`products_attributes_id`, `products_id`, `options_id`, `options_values_id`, `options_values_price`, `price_prefix`, `products_options_sort_order`, `product_attribute_is_free`, `products_attributes_weight`, `products_attributes_weight_prefix`, `attributes_display_only`, `attributes_default`, `attributes_discounted`, `attributes_image`, `attributes_price_base_included`, `attributes_price_onetime`, `attributes_price_factor`, `attributes_price_factor_offset`, `attributes_price_factor_onetime`, `attributes_price_factor_onetime_offset`, `attributes_qty_prices`, `attributes_qty_prices_onetime`, `attributes_price_words`, `attributes_price_words_free`, `attributes_price_letters`, `attributes_price_letters_free`, `attributes_required`) VALUES
(4, 1, 1, 1, 0.0000, '+', 1, 0, 0, '+', 0, 1, 0, '', 1, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, NULL, NULL, 0.0000, 0, 0.0000, 0, 0),
(5, 1, 2, 3, 0.0000, '+', 2, 0, 0, '+', 1, 0, 1, '', 0, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, NULL, NULL, 0.0000, 0, 0.0000, 0, 0),
(6, 1, 2, 4, 0.0000, '+', 3, 0, 0, '+', 0, 0, 1, '', 1, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, NULL, NULL, 0.0000, 0, 0.0000, 0, 0),
(7, 1, 1, 2, 2000.0000, '-', 2, 0, 0, '+', 0, 0, 1, '', 1, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, NULL, NULL, 0.0000, 0, 0.0000, 0, 0),
(10, 13, 3, 5, 0.0000, '+', 0, 0, 0, '+', 0, 0, 1, '', 1, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, NULL, NULL, 0.0000, 0, 0.0000, 0, 0),
(11, 13, 3, 6, 0.0000, '+', 0, 0, 0, '+', 0, 0, 1, '', 1, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, NULL, NULL, 0.0000, 0, 0.0000, 0, 0),
(12, 12, 3, 5, 0.0000, '+', 0, 0, 0, '+', 0, 0, 1, '', 1, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, NULL, NULL, 0.0000, 0, 0.0000, 0, 0),
(13, 12, 3, 6, 0.0000, '+', 0, 0, 0, '+', 0, 0, 1, '', 1, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, NULL, NULL, 0.0000, 0, 0.0000, 0, 0);

#
# Dumping data for table `products_attributes_download`
#


--
-- テーブルのデータをダンプしています `products_description`
--

INSERT INTO products_description (`products_id`, `language_id`, `products_name`, `products_description`, `products_url`, `products_viewed`) VALUES
(1, 1, 'Microsoft Internet Keyboard PS/2', 'The Internet Keyboard has 10 Hot Keys on a comfortable standard keyboard design that also includes a detachable palm rest. The Hot Keys allow you to browse the web, or check e-mail directly from your keyboard. The IntelliType Pro software also allows you to customize your hot keys - make the Internet Keyboard work the way you want it to!', '', 1348),
(1, 2, 'マイクロソフト Internet Keyboard PS/2', 'インターネット・キーボードには、分離可能なパームレストのついた快適な標準キーボードの上に、10個のホットキーがついています。ホットキーを押して、キーボードからウェブをブラウズしたり、電子メールを直接チェックすることができます。さらに IntelliType Pro ソフトウェアは、あなたがホットキーをカスタマイズすることを可能にします。あなたがよく利用する作業をインターネット・キーボードに設定しよう!', '', 4986),
(2, 1, 'Microsoft IntelliMouse Explorer', 'Microsoft introduces its most advanced mouse, the IntelliMouse Explorer! IntelliMouse Explorer features a sleek design, an industrial-silver finish, a glowing red underside and taillight, creating a style and look unlike any other mouse. IntelliMouse Explorer combines the accuracy and reliability of Microsoft IntelliEye optical tracking technology, the convenience of two new customizable function buttons, the efficiency of the scrolling wheel and the comfort of expert ergonomic design. All these great features make this the best mouse for the PC!', '', 1299),
(2, 2, 'マイクロソフト IntelliMouse Explorer', 'マイクロソフトはその最も高度なマウス、インテリマウス・エクスプローラを紹介します! なめらかなデザインが特徴のインテリマウス・エクスプローラは、シルバー・カラーで、底面と後部のライトは鮮烈な赤という、従来のマウスとはまったく違うスタイルです。インテリマウス・エクスプローラは、マイクロソフトの「インテリアイ」光学トラッキング技術により、正確さに信頼性を兼ね備えており、2個の新しいボタンはカスタマイズ可能です。スクロール・ホイールは効率的な操作をもたらし、エルゴノミックス（人間工学）設計は快適さをもたらします。これらの特徴のすべてが、このマウスをPCのための最良のマウスとしています!', '', 4363),
(3, 1, 'Microsoft IntelliMouse Pro', 'Every element of IntelliMouse Pro - from its unique arched shape to the texture of the rubber grip around its base - is the product of extensive customer and ergonomic research. Microsoft''s popular wheel control, which now allows zooming and universal scrolling functions, gives IntelliMouse Pro outstanding comfort and efficiency.', '', 1431),
(3, 2, 'マイクロソフト インテリマウス Pro', 'インテリマウス・プロのすべての要素(そのユニークな弓形の形状から、ボディのまわりのラバーグリップの質感まで)は、広範囲のユーザと人間工学(エルゴノミクス)を研究した成果です。マイクロソフトの人気のあるホイール・コントロールは素早く移動してスクロールする機能を実現し、インテリマウス・プロに顕著な快適さと効率性を与えます。', '', 4766),
(4, 1, 'Hewlett Packard LaserJet 1100Xi', 'HP has always set the pace in laser printing technology. The new generation HP LaserJet 1100 series sets another impressive pace, delivering a stunning 8 pages per minute print speed. The 600 dpi print resolution with HP''s Resolution Enhancement technology (REt) makes every document more professional.<br><br>Enhanced print speed and laser quality results are just the beginning. With 2MB standard memory, HP LaserJet 1100xi users will be able to print increasingly complex pages. Memory can be increased to 18MB to tackle even more complex documents with ease. The HP LaserJet 1100xi supports key operating systems including Windows 3.1, 3.11, 95, 98, NT 4.0, OS/2 and DOS. Network compatibility available via the optional HP JetDirect External Print Servers.<br><br>HP LaserJet 1100xi also features The Document Builder for the Web Era from Trellix Corp. (featuring software to create Web documents).', 'www.pandi.hp.com/pandi-db/prodinfo.main?product=laserjet1100', 1386),
(4, 2, 'ヒューレットパッカード LaserJet 1100Xi', 'レーザー印刷技術において、常に先端を歩んできたHP。新世代のHP LaserJet 1100シリーズは、これまでになく印象的な成果であり、毎分8ページを超える、驚くべき印刷速度を実現します。HPの高解像度技術(REt)による600dpiの印刷解像度は、あらゆるドキュメントをプロフェッショナル品質で作成します。<br><br>高められた印刷速度とレーザー品質は始まりに過ぎません。標準の2MBメモリにより、HP LaserJet 1100xiユーザはますます複雑なページを印刷することができます。また、より複雑なドキュメントに取り組むために、メモリは容易に18MBまで増設することができます。HP LaserJet 1100xiは、ウインドウズ3.1、3.11、95、98、NT 4.0、OS/2およびDOSなどの重要なオペレーティング・システムをサポートしています。オプションのHP JetDirect外部プリント・サーバーによってネットワーク互換性も実現します。<br><br>HP LaserJet 1100xiは、さらにTrellix社の「The Document Builder for the Web Era」をバンドルしています。(ウェブドキュメントを作成するソフトウェア)。', 'www.pandi.hp.com/pandi-db/prodinfo.main?product=laserjet1100', 4970),
(5, 1, 'Disciples: Sacred Lands', 'A new age is dawning...<br><br>Enter the realm of the Sacred Lands, where the dawn of a New Age has set in motion the most momentous of wars. As the prophecies long foretold, four races now clash with swords and sorcery in a desperate bid to control the destiny of their gods. Take on the quest as a champion of the Empire, the Mountain Clans, the Legions of the Damned, or the Undead Hordes and test your faith in battles of brute force, spellbinding magic and acts of guile. Slay demons, vanquish giants and combat merciless forces of the dead and undead. But to ensure the salvation of your god, the hero within must evolve.<br><br>The day of reckoning has come... and only the chosen will survive.', '', 1064),
(5, 2, 'ディサイプルズ Sacred Lands', '新たな時代が始まった...<br><br>新たな時代の夜明けが最も重大な戦争を始める、その聖地の領域に入りなさい。長い間言い伝えられた予言のように、神の運命をコントロールしようと必死に企てながら、4つの種族が剣と魔法をもって衝突する。The Empire(帝国)、Mountain Clans(山の民)、Legion of the Damned(地獄の軍団)や、Undead Hordes(亡者の奔流)の戦士として遠征し、魔法をかけたり策略をめぐらすなどして、獣のような力との戦いであなたの闘志を試します。デーモン達を滅ぼし、巨人達を征服し、死者や亡者の無慈悲な力と格闘しなさい。しかし、あなたが勇者の救済を保証することで、領土は発展するに違いありません。<br> <br>さあ、報いを受ける日は来た...選ばれた者のみ、生き残ることができるだろう。', '', 2570),
(6, 1, 'The Wheel Of Time', 'The world in which The Wheel of Time takes place is lifted directly out of Jordan''s pages; it''s huge and consists of many different environments. How you navigate the world will depend largely on which game - single player or multipayer - you''re playing. The single player experience, with a few exceptions, will see Elayna traversing the world mainly by foot (with a couple notable exceptions). In the multiplayer experience, your character will have more access to travel via Ter''angreal, Portal Stones, and the Ways. However you move around, though, you''ll quickly discover that means of locomotion can easily become the least of the your worries...<br><br>During your travels, you quickly discover that four locations are crucial to your success in the game. Not surprisingly, these locations are the homes of The Wheel of Time''s main characters. Some of these places are ripped directly from the pages of Jordan''s books, made flesh with Legend''s unparalleled pixel-pushing ways. Other places are specific to the game, conceived and executed with the intent of expanding this game world even further. Either way, they provide a backdrop for some of the most intense first person action and strategy you''ll have this year.', 'www.wheeloftime.com', 1159),
(6, 2, 'The Wheel Of Time', 'ジョーダンのページがそのまま展開されるウィール・オブ・タイムの世界。それは巨大で、様々な環境で構成されています。あなたがシングルプレーヤーとマルチプレーヤーのどちらでゲームをプレイするかによって、どのように世界を進んでいくかが大きくちがってきます。シングルプレーヤーは、わずかの例外を除いて、Elayna(エレイナ)が主に歩いて(2、3の顕著な例外はあるが)この世界を横断しながら見ていくことを体験することができます。マルチプレーヤーは、キャラクターが旅を続ける中で、多くのTer''Angreal(テル＝アングリアル)や、Portal Stonesを使いながらやその方法を体験をすることになります。どれほど動き回るのかという心配は必要ありません。移動がとても簡単になる方法を、速く見つけることができるでしょう。しかし...<br><br>旅をしていく中で、あなたがゲームで成功するためには、4つの場所が重大であることを発見するでしょう。驚くことはありません、これらの場所は、ウィール・オブ・タイムの主要なキャラクターの本拠地となります。これらの場所のうちのいくつかは、ジョーダンの本のページをそのまま再現しており、伝説を比類のないピクセル表現で表すことにより、生き生きと描いています。それ以外の場所は、ゲームの世界をさらに拡張するために作り出した、このゲームに特有のものです。どちらにしても、あなたが今年出会う中で最も強烈な一人称形式のアクション・戦略ゲームの背景となります。', 'www.wheeloftime.com', 3509),
(7, 1, 'Unreal Tournament', 'From the creators of the best-selling Unreal, comes Unreal Tournament. A new kind of single player experience. A ruthless multiplayer revolution.<br><br>This stand-alone game showcases completely new team-based gameplay, groundbreaking multi-faceted single player action or dynamic multi-player mayhem. It''s a fight to the finish for the title of Unreal Grand Master in the gladiatorial arena. A single player experience like no other! Guide your team of ''bots'' (virtual teamates) against the hardest criminals in the galaxy for the ultimate title - the Unreal Grand Master.', '', 1075),
(7, 2, 'Unreal Tournament', '製作されて以来ベストセラーのUnrealから、Unreal Tournamentが登場。新しい種類のシングルプレーヤー経験。無慈悲なマルチプレーヤーの革命。<br><br>このスタンド・アロンのゲームは新しいチームベースのゲームプレイを展開します。多様なアクションの先駆けであるシングルプレーヤーや、マルチプレイヤーによるダイナミックな破壊行為。アリーナの剣闘士が、Unrealのグランドマスターというタイトルを得るまで終わらない戦い。他に類をみないであろうシングルプレーヤー経験! 究極のタイトルであるUnrealのグランドマスターのために、Bot（バーチャル・チームメート）がガイドするあなたのチームと、もっとも凶悪な犯罪者は、銀河で対決する。', '', 3532),
(8, 1, 'Lethal Weapon', 'Regional Code: 2 (Japan, Europe, Middle East, South Africa).\r\n\r\n<br>\r\n\r\nLanguages: English, Deutsch.\r\n\r\n<br>\r\n\r\nSubtitles: English, Deutsch, Spanish.\r\n\r\n<br>\r\n\r\nAudio: Dolby Surround 5.1.\r\n\r\n<br>\r\n\r\nPicture Format: 16:9 Wide-Screen.\r\n\r\n<br>\r\n\r\nLength: (approx) 100 minutes.\r\n\r\n<br>\r\n\r\nOther: Interactive Menus, Chapter Selection, Subtitles (more languages).', '', 1390),
(8, 2, 'リーサルウェポン', '地域コード:2(日本、ヨーロッパ、中東、南アフリカ)<br> 言語:英語、ドイツ語<br>サブタイトル：英語、ドイツ語、スペイン語<br>オーディオ:ドルビー・サラウンド 5.1<br>スクリーン：16：9LB シネマスコープ<br>時間：100分<br>その他:対話型メニュー、チャプター・セレクション、サブタイトル(その他の言語)', '', 4667),
(9, 1, 'Speed', 'Regional Code: 2 (Japan, Europe, Middle East, South Africa).\r\n\r\n<br>\r\n\r\nLanguages: English, Deutsch.\r\n\r\n<br>\r\n\r\nSubtitles: English, Deutsch, Spanish.\r\n\r\n<br>\r\n\r\nAudio: Dolby Surround 5.1.\r\n\r\n<br>\r\n\r\nPicture Format: 16:9 Wide-Screen.\r\n\r\n<br>\r\n\r\nLength: (approx) 112 minutes.\r\n\r\n<br>\r\n\r\nOther: Interactive Menus, Chapter Selection, Subtitles (more languages).', '', 1490),
(9, 2, 'スピード', '地域コード:2(日本、ヨーロッパ、中東、南アフリカ)<br> 言語:英語、ドイツ語<br>サブタイトル：英語、ドイツ語、スペイン語<br>オーディオ:ドルビー・サラウンド 5.1<br>スクリーン：16：9LB シネマスコープ<br>時間：112分<br>その他:対話型メニュー、チャプター・セレクション、サブタイトル(その他の言語)', '', 4886),
(10, 1, 'Speed 2: Cruise Control', 'Regional Code: 2 (Japan, Europe, Middle East, South Africa).\r\n\r\n<br>\r\n\r\nLanguages: English, Deutsch.\r\n\r\n<br>\r\n\r\nSubtitles: English, Deutsch, Spanish.\r\n\r\n<br>\r\n\r\nAudio: Dolby Surround 5.1.\r\n\r\n<br>\r\n\r\nPicture Format: 16:9 Wide-Screen.\r\n\r\n<br>\r\n\r\nLength: (approx) 120 minutes.\r\n\r\n<br>\r\n\r\nOther: Interactive Menus, Chapter Selection, Subtitles (more languages).', '', 1418),
(10, 2, 'スピード２', '地域コード:2(日本、ヨーロッパ、中東、南アフリカ)<br> 言語:英語、ドイツ語<br>サブタイトル：英語、ドイツ語、スペイン語<br>オーディオ:ドルビー・サラウンド 5.1<br>スクリーン：16：9LB シネマスコープ<br>時間：120分<br>その他:対話型メニュー、チャプター・セレクション、サブタイトル(その他の言語)', '', 4217),
(11, 1, 'The Matrix', 'Regional Code: 2 (Japan, Europe, Middle East, South Africa).\r\n\r\n<br>\r\n\r\nLanguages: English, Deutsch.\r\n\r\n<br>\r\n\r\nSubtitles: English, Deutsch.\r\n\r\n<br>\r\n\r\nAudio: Dolby Surround.\r\n\r\n<br>\r\n\r\nPicture Format: 16:9 Wide-Screen.\r\n\r\n<br>\r\n\r\nLength: (approx) 131 minutes.\r\n\r\n<br>\r\n\r\nOther: Interactive Menus, Chapter Selection, Making Of.', 'www.thematrix.com', 1459),
(11, 2, 'マトリックス', '地域コード:2(日本、ヨーロッパ、中東、南アフリカ)<br> 言語:英語、ドイツ語<br>サブタイトル：英語、ドイツ語<br>オーディオ:ドルビー・サラウンド<br>スクリーン：16：9LB シネマスコープ<br>時間：131分<br>その他:対話型メニュー、チャプター・セレクション、メーキング', 'www.thematrix.com', 5070),
(12, 1, 'A Bug''s Life', 'Regional Code: 2 (Japan, Europe, Middle East, South Africa).\r\n\r\n<br>\r\n\r\nLanguages: English, Deutsch.\r\n\r\n<br>\r\n\r\nSubtitles: English, Deutsch, Spanish.\r\n\r\n<br>\r\n\r\nAudio: Dolby Digital 5.1 / Dobly Surround Stereo.\r\n\r\n<br>\r\n\r\nPicture Format: 16:9 Wide-Screen.\r\n\r\n<br>\r\n\r\nLength: (approx) 91 minutes.\r\n\r\n<br>\r\n\r\nOther: Interactive Menus, Chapter Selection, Subtitles (more languages).', 'www.abugslife.com', 1422),
(12, 2, 'バグズライフ', '地域コード:2(日本、ヨーロッパ、中東、南アフリカ)<br> 言語:英語、ドイツ語<br>サブタイトル：英語、ドイツ語、スペイン語<br>オーディオ:ドルビー・デジタル 5.1 / ドルビー・サラウンド・ステレオ<br>スクリーン：16：9LB シネマスコープ<br>時間：91分<br>その他:対話型メニュー、チャプター・セレクション、サブタイトル(その他の言語)', 'www.abugslife.com', 5834),
(13, 1, 'There''s Something About Mary', 'Regional Code: 2 (Japan, Europe, Middle East, South Africa).\r\n\r\n<br>\r\n\r\nLanguages: English, Deutsch.\r\n\r\n<br>\r\n\r\nSubtitles: English, Deutsch, Spanish.\r\n\r\n<br>\r\n\r\nAudio: Dolby Surround 5.1.\r\n\r\n<br>\r\n\r\nPicture Format: 16:9 Wide-Screen.\r\n\r\n<br>\r\n\r\nLength: (approx) 114 minutes.\r\n\r\n<br>\r\n\r\nOther: Interactive Menus, Chapter Selection, Subtitles (more languages).', '', 0),
(13, 2, 'メリーに首ったけ', '地域コード:2(日本、ヨーロッパ、中東、南アフリカ)<br> 言語:英語、ドイツ語<br>サブタイトル：英語、ドイツ語、スペイン語<br>オーディオ:ドルビー・サラウンド 5.1<br>スクリーン：16：9LB シネマスコープ<br>時間：114分<br>その他:対話型メニュー、チャプター・セレクション、サブタイトル(その他の言語)', '', 0),
(14, 1, 'You''ve Got Mail', 'Regional Code: 2 (Japan, Europe, Middle East, South Africa).\r\n\r\n<br>\r\n\r\nLanguages: English, Deutsch, Spanish.\r\n\r\n<br>\r\n\r\nSubtitles: English, Deutsch, Spanish, French, Nordic, Polish.\r\n\r\n<br>\r\n\r\nAudio: Dolby Digital 5.1.\r\n\r\n<br>\r\n\r\nPicture Format: 16:9 Wide-Screen.\r\n\r\n<br>\r\n\r\nLength: (approx) 115 minutes.\r\n\r\n<br>\r\n\r\nOther: Interactive Menus, Chapter Selection, Subtitles (more languages).', 'www.youvegotmail.com', 1648),
(14, 2, 'ユー・ガット・メール', '地域コード:2(日本、ヨーロッパ、中東、南アフリカ)<br> 言語:英語、ドイツ語、スペイン語<br>サブタイトル：英語、ドイツ語、スペイン語、フランス語、ノルウェー語、ポーランド語<br>オーディオ:ドルビー・デジタル 5.1<br>スクリーン：16：9LB シネマスコープ<br>時間：115分<br>その他:対話型メニュー、チャプター・セレクション、サブタイトル(その他の言語)', 'www.youvegotmail.com', 4773),
(15, 1, 'Gift Certificate　500yen', 'Purchase a Gift Certificate today to share with your family, friends or business associates!', '', 1025),
(15, 2, 'ギフト券 500円', '当店のみで利用できる500円分の商品券です。お客様自身が、利用するのはもちろん、家族や友達にメールでプレゼントすることもできます。またオンライン上の手続きのみなので配送料は不要です。', '', 3749),
(16, 1, 'Gift Certificate 1000yen', 'Purchase a Gift Certificate today to share with your family, friends or business associates!', '', 944),
(16, 2, 'ギフト券 1000円', '当店のみで利用できる1000円分の商品券です。お客様自身が、利用するのはもちろん、家族や友達にメールでプレゼントすることもできます。またオンライン上の手続きのみなので配送料は不要です。', '', 2966);


--
-- テーブルのデータをダンプしています `products_options`
--

INSERT INTO products_options (`products_options_id`, `language_id`, `products_options_name`, `products_options_sort_order`, `products_options_type`, `products_options_length`, `products_options_comment`, `products_options_size`, `products_options_images_per_row`, `products_options_images_style`, `products_options_rows`) VALUES
(1, 1, 'statas', 1, 2, 32, '', 32, 5, 0, 1),
(1, 2, '状態', 1, 2, 32, '', 32, 5, 0, 1),
(2, 1, 'color', 2, 0, 32, '', 32, 5, 0, 1),
(2, 2, '色', 2, 0, 32, '', 32, 5, 0, 1),
(3, 1, 'size', 0, 0, 32, NULL, 32, 5, 0, 1),
(3, 2, 'サイズ', 0, 0, 32, NULL, 32, 5, 0, 1);


--
-- テーブルのデータをダンプしています `products_options_values`
--

INSERT INTO products_options_values (`products_options_values_id`, `language_id`, `products_options_values_name`, `products_options_values_sort_order`) VALUES
(0, 2, 'TEXT', 0),
(1, 1, 'new', 1),
(1, 2, '新品', 1),
(2, 1, 'used', 2),
(2, 2, '中古', 2),
(3, 1, 'white', 3),
(3, 2, 'ホワイト', 3),
(4, 1, 'black', 4),
(4, 2, 'ブラック', 4),
(5, 1, '', 10),
(5, 2, '20P', 10),
(6, 1, '', 11),
(6, 2, '21P', 11);

#
# Dumping data for table `products_options_values_to_products_options`
#

--
-- テーブルのデータをダンプしています `products_options_values_to_products_options`
--

INSERT INTO products_options_values_to_products_options (`products_options_values_to_products_options_id`, `products_options_id`, `products_options_values_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 3),
(4, 2, 4),
(5, 3, 5),
(6, 3, 6);

--
-- テーブルのデータをダンプしています `products_to_categories`
--

INSERT INTO products_to_categories (`products_id`, `categories_id`) VALUES
(1, 4),
(2, 5),
(3, 5),
(4, 6),
(5, 2),
(6, 2),
(7, 2),
(8, 7),
(9, 7),
(10, 7),
(11, 7),
(12, 8),
(13, 9),
(14, 9),
(15, 10),
(16, 10);

#
# Dumping data for table `record_artists`
#

INSERT INTO record_artists (artists_id, artists_name, artists_image, date_added, last_modified) VALUES (1, 'The Russ Tippins Band', 'sooty.jpg', '2004-06-01 20:53:00', NULL);

#
# Dumping data for table `record_artists_info`
#

INSERT INTO record_artists_info (artists_id, languages_id, artists_url, url_clicked, date_last_click) VALUES (1, 1, 'www.russtippins.com/', 0, NULL);

#
# Dumping data for table `record_company`
#

INSERT INTO record_company (record_company_id, record_company_name, record_company_image, date_added, last_modified) VALUES (1, 'HMV Group', NULL, '2004-07-09 14:11:52', NULL);

#
# Dumping data for table `record_company_info`
#

INSERT INTO record_company_info (record_company_id, languages_id, record_company_url, url_clicked, date_last_click) VALUES (1, 1, 'www.hmvgroup.com', 0, NULL);

#
# Dumping data for table `reviews`
#

INSERT INTO reviews (reviews_id, products_id, customers_id, customers_name, reviews_rating, date_added, last_modified, reviews_read, status) VALUES (1, 1, 0, 'Bill Smith', 5, '2003-12-23 03:18:19', '0001-01-01 00:00:00', 11, 1);

#
# Dumping data for table `reviews_description`
#

INSERT INTO reviews_description (reviews_id, languages_id, reviews_text) VALUES (1, 1, 'This really is a very funny but old movie!');


--
-- テーブルのデータをダンプしています `specials`
--

INSERT INTO specials (`specials_id`, `products_id`, `specials_new_products_price`, `specials_date_added`, `specials_last_modified`, `expires_date`, `date_status_change`, `status`, `specials_date_available`) VALUES
(1, 9, 2900.0000, '2019-04-25 16:42:38', NULL, '0001-01-01', NULL, 1, '0001-01-01'),
(2, 8, 3000.0000, '2019-04-25 16:42:47', NULL, '0001-01-01', NULL, 1, '0001-01-01');




#
# Dumping data for table ezpages_content japanese
#

INSERT INTO ezpages_content (pages_id, languages_id, pages_title, pages_html_text)
VALUES (1, 2, 'EZPages', 'This is the main page listed under the Link EZPages in the Header<br /><br />\r\n\r\n<strong>See: What is EZPages? Link for detailed use of EZPages</strong><br /><br />\r\n\r\nThis Link could show in the Header, Footer or Sidebox or a combination of all three locations.<br /><br />\r\n\r\nThe Chapter and TOC settings are for using this Page in combination with other Pages.<br /><br />\r\n\r\nThe other Pages can be shown either *only* with this Link in the Chapter and TOC or as their own Link in the Header, Footer or Sidebox, depending on how you would like them to appear on your site.<br /><br />\r\n\r\nThere is no true "Master" Link, other than the Links you actually have configured to display. But any Link in a Chapter can be displayed in any of the 3 locations for the Header, Footer or Sidebox or not at all, where it only appears together with the other Links in the Chapter.'),
(2, 2, 'A New Page', 'This is another page that is linked to the Chapter 10 via the Chapter number used and is sorted based on the TOC Order.<br /><br />\r\n\r\nThere is not a link to this page via the Header, Footer nor the Sidebox.<br /><br />\r\n\r\nThis page is only seen if the "main" link is selected and then it will show in the TOC listing.<br /><br />\r\n\r\nThis is a handy way to have numerous links that are related but only show one main link to get to them all.<br /><br />'),
(3, 2, 'Another New Page', 'This is yet another new page or link that is part of Chapter 10<br /><br />\r\n\r\nThe numbering of the Chapters can be done in any manner. But, by number in increments such as 10, 20, 30, etc. you can later insert pages, or links, as needed within the existing pages.<br /><br />\r\n\r\nThere is no limit to the number of pages, or links, that can be grouped together using the Chapter.<br /><br />\r\n\r\nThe display of the Previous/Next and TOC listing is a setting that can be turned on or off.'),
(4, 2, 'My Link', 'This is a single page link that will be shown in the Sidebox.<br /><br />\r\n\r\nThere are no additional pages or links associated with this page as there is no Chapter.<br /><br />\r\n\r\nLater, if you want to expand on this link you can add a Chapter and TOC settings and build a group.<br /><br />\r\n\r\nNotice that the Previous/Next and TOC automatically disable when there isn''t a Chapter. Even with a Chapter, there must be more than one (1) related link or page in the group before these will display.'),
(5, 2, 'Anything', 'The title or link names can be anything that you would like to use.<br /><br />\r\n\r\nYou decide on the content and the link name relative to that content.<br /><br />\r\n\r\nThen, define where you want the link to show: Header, Footer or Sidebox or as a combination of these three locations.<br /><br />\r\n\r\nThe content of the page can be anything you like. Be sure that your content is valid in regard to table and stylesheet rules.<br /><br />\r\n\r\nYou can even set up the links to go to Secure or Non-Secure pages as well as open in the same or a new window.<br /><br />\r\n\r\nLinks can also be setup to use internal or external links vs the HTML Content. See: examples below in the Link URL settings.'),
(6, 2, 'Shared', 'This link is a "shared" link between the Header, Footer and Sidebox.<br /><br />\r\n\r\nThe number on the order was set to 50 on all of the settings just for the sake of an easier notation on entering it.<br /><br />\r\n\r\nThe order can be the same or different for the three locations.<br /><br />\r\n\r\nIf you wanted to really get creative, you could also have this as part of a Chapter not related to the link order.<br /><br />'),
(7, 2, 'My Account', ''),
(8, 2, 'Site Map', ''),
(9, 2, 'Privacy Notice', ''),
(10, 2, 'Zen Cart', ''),
(11, 2, 'Gift Certificates', ''),
(12, 2, 'Action DVDs', ''),
(13, 2, 'Google', ''),
(14, 2, 'What is EZ-Pages?', '<span style="font-weight: bold; color: rgb(255, 0, 0);">Summary</span><br /><br /><span style="font-weight: bold;">EZ-Pages</span> is a fast, easy way of creating links and additional pages.<br /><br />The additional Pages can be for:<br /><ul><li>New Pages</li><li>Internal Links</li><li>External Links</li><li>Secure or Non-Secure pages</li><li>Same or New Window</li></ul>In Addition, there is the ability to create &quot;related&quot; links in the format of a Chapter (group) and its TOC (related pages/links).<br /><br /><span style="font-weight: bold; color: rgb(255, 0, 0);">Link Naming</span><br /><br />Links are named by the Page Title. All Links need a Page Title in order to function.<br /><br />If you forget to add a Page Title, then you will not be able to add the Link.<br /><br />If you do not assign an Order for the Header, Sidebox or Footer, then the Link will not display even if you have a Page Title.<br /><br /><span style="font-weight: bold;"><span style="color: rgb(255, 0, 0);">Link Placement</span><br /><br /></span>While you have the option of adding Additional Links to the Header, Footer and Sidebox with EZ-Pages, you are not limited to these three Link locations. Links can be in one or more locations simply by enabling the Order for the Location(s) where the Link should appear..<br /><br />The Link Location Status for the Header, Footer and Sidebox is controlled simply by setting these to Yes or No for each setting. Then, set the Order in which the Link should appear for each location.<br /><br />This means that if you were to set Header to Yes 30 and Sidebox to Yes 50 then the link would appear in both the Header and Sidebox in the Order of your Links.<br /><br />The Order numbering method is up to you. Numbering using 10, 20, 30, etc. will allow you to sort the Links and add additional Links later.<br /><br />Note: a 0 value for the Order will disable the Link from displaying.<br /><br /><span style="font-weight: bold;"><span style="color: rgb(255, 0, 0);">Open in New Window and Secure Pages</span><br /></span><br />With EZ-Pages, each Link can take you to the same, main window for your shop; or, you can have the Link open a brand new New Window. In addition, there is an option for making the Link open as a Secure Page or a Non-Secure Page.<br /><br /><span style="font-weight: bold; color: rgb(255, 0, 0);">Chapter and TOC</span><br style="font-weight: bold; color: rgb(255, 0, 0);" /><br />The Chapter and TOC, or Table of Contents, are a unique method of building Multiple Links that interact together.<br /><br />While these Links still follow the rules of the Header, Footer and Sidebox placement, the difference is that only one of the Links, the Main Link, needs to be displayed anywhere on the site.<br /><br />If you had, for example, 5 related Links, you could add the first Link as the Main Link by setting its location to the Header, Footer or Sidebox and set its Order, as usual.<br /><br />Next, you need to assign a Chapter or Group number to the Link. This Chapter holds the related Links together.<br /><br />Then, set the TOC or Table of Contents setting. This is a secondary Sort Order for within the Chapter.<br /><br />Again, you can display any of the Links within a Chapter, as well as making any of these Links the Main Link. Whether the Links all show, or just one or more of the Links show, the Chapter is the key to grouping these Links together in the TOC or Previous/Next. <br /><br /><span style="font-weight: bold; font-style: italic;">NOTE: While all Links within a Chapter will display together, you can have the different Links display in the Header, Footer or Sidebox on their own. Or, you can have the additional Links only display when the Main Link or one of the Additional Links within the Chapter has been opened.</span><br style="font-weight: bold; font-style: italic;" /><br />The versitility of EZ-Pages will make adding new Links and Pages extreamly easy for the beginner as well as the advance user.<br /><br />NOTE: Browser-based HTML editors will sometimes add the opening and closing tags for the &lt;html&gt;, &lt;head&gt; and &lt;body&gt; to the file you are working on.<br /><br />These are already added to the pages via EZ-Pages.<br /><br /><span style="color: rgb(255, 0, 0); font-weight: bold;">External Link URL</span><br /><br />External Link URLs are links to outside pages not within your shop. These can be to any valid URL such as:<br /><br />http://www.sashbox.net<br /><br />You need to include the full URL path to any External Link URL. You may also mark these to open in a New Window or the Same Window.<br /><br /><span style="color: rgb(255, 0, 0); font-weight: bold;">Internal Link URL</span><br /><br />Internal Link URLs are links to internal pages within your shop. These can be to any valid URL, but should be written as relative links such as:<br /><br />index.php?main_page=index&amp;cPath=21<br /><br />The above Link would take you to the Category for categories_id 21<br /><br />While these links can be the Full URL to an Internal Link, it is best to write as a Relative Link so that if you change domains, are work on a temporary domain or an IP Address, the Link will remain valid if moved to another domain, IP Address, etc.<br /><br />Internal Links can also open in a New Window or the Same Window or be for Secure or Non-Secure Pages.<br /><br /><span style="font-weight: bold; color: rgb(255, 0, 0);">EZ-Pages Additional Pages vs Internal Links vs External Links</span><br /><br />The Type of Link that you create is based on an order of precidence, where HTML Content will superceed both the Internal Link and the External Link values.<br /><br />The External Link URL will superceed the Internal Link URL.<br /><br />If you try to set a combination of HTML Content, Internal Link and/or External Link, the Link will be flagged in the listing with a read icon to alert you to your mistake.<br /><br /><span style="font-weight: bold; color: rgb(255, 0, 0);">WARNING ...</span><br /><br />When using Editors such as TinyMCE or CKEditor, if you press enter in the HTML Content area <br /> will be added. These will be detected as &quot;content&quot; and will override any Internal Link URL or External Link URL.<br /><br /><span style="font-weight: bold; color: rgb(255, 0, 0);">Admin Only Display</span><br /><br />Sometimes, when working on EZ-Pages, you will want to be able to work on a Live Site and see the results of your work, but not allow the Customers to see this until you are done.<br /><br />There are 3 settings in the Configuration ... EZ-Pages Settings for the Header, Footer and Sidebox  Status:<br /><ul><li>OFF</li><li>ON</li><li>Admin Only</li></ul>The Admin Only setting is controlled by the IP Address(es) set in the Website Maintenance.<br /><br />This can be very handy when needing to work on a Live Site but not wanting customers to see the work in progress.<br /><br />');



#
# Dumping data for table `manufacturers_info` japanese
#

INSERT INTO manufacturers_info (manufacturers_id, languages_id, manufacturers_url, url_clicked, date_last_click) VALUES (1, 2, 'http://www.matrox.com', 0, NULL),
(2, 2, 'http://www.microsoft.com', 0, NULL),
(3, 2, 'http://www.warner.com', 0, NULL),
(4, 2, 'http://www.fox.com', 0, NULL),
(5, 2, 'http://www.logitech.com', 0, NULL),
(6, 2, 'http://www.canon.com', 0, NULL),
(7, 2, 'http://www.sierra.com', 0, NULL),
(8, 2, 'http://www.infogrames.com', 0, NULL),
(9, 2, 'http://www.hewlettpackard.com', 0, NULL);


