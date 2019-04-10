#
# TABLE STRUCTURE FOR: Categories
#

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(1) unsigned DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO `categories` (`id`, `parent_id`, `name`, `slug`) VALUES
(1, 0, 'root', 'root'),
(2, 1, 'Burgers', 'burgers'),
(3, 1, 'Beverages', 'beverages'),
(4, 1, 'Combo Meals', 'combo-meals'),
(5, 2, 'Hotdog', 'hotdog'),
(6, 2, 'CheeseBurger', 'cheeseburger'),
(7, 2, 'Fries', 'fries'),
(8, 3, 'Coke', 'coke'),
(9, 3, 'Sprite', 'sprite'),
(10, 3, 'Tea', 'tea'),
(11, 4, 'Chicken Combo Meal', 'chicken-combo-meal'),
(12, 4, 'Pork Combo', 'pork-combo'),
(13, 4, 'Fish Combo', 'fish-combo');

#
# TABLE STRUCTURE FOR: Products
#

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `price` float NOT NULL,
  `stock` mediumint(8) unsigned DEFAULT 10,
  `status` tinyint(1) unsigned DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO `products` (`id`, `category_id`, `name`, `slug` , `avatar`,`detail`,`price`) VALUES
(1, 5, 'Chicago Hotdog','chicago-hotdpog','chicago_hotdog.jpg', 'Chicago Style Hot Dog','3.5'),
(2, 5, 'Dodger Dog','dodger-dog','dodger_hotdog.jpg', 'Dodger Dog','2.5'),
(3, 6, 'Mushroom Cheeseburger','mushroom-cheeseburger','mushroom_cheeseburger.jpg', 'A cheeseburger with mushroom sauce and fries','8'),
(4, 6, 'Cheddar-Stuffed Cheeseburger','cheddar-stuffed_cheeseburger','cheddar-stuffed_cheeseburger.jpg', 'A cheddar-stuffed cheeseburger','6'),
(5, 7, 'French Frenchries','french_fries','french_fries.jpg', 'French fries','2'),
(6, 7, 'Curly Fries','curly_fries','curly_fries.jpg', 'Curly fries','1.5'),

(7, 8, 'Coke','coke','coke.jpg', 'Coke','0.5'),
(8, 9, 'Sprite','sprite','sprite.jpg', 'Sprite','0.5'),
(9, 10, 'Tea','tea','tea.jpg', 'Tea','0.5'),

(10, 11, 'Grilled Chicken Combo','grilled-chicken-combo','chicken_combo_1.jpg', 'Grilled Chicken Combo','4.5'),
(11, 12, 'Grilled Pork Combo','grilled-pork-combo','pork_combo_1.jpg', 'Grilled Pork Combo','3.5'),
(12, 13, 'Fish Combo','fish-combo','fish_combo_1.jpg', 'Fish Combo','5.5');

#
# TABLE STRUCTURE FOR: Orders
#

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_number` int(11) DEFAULT NULL,
  `cart_data` text DEFAULT NULL,
  `cart_total` float DEFAULT NULL,
  `coupon_code` varchar(255) NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_phone` varchar(15) DEFAULT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_city` int(11) NOT NULL,
  `note` text,
  `status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;


#
# TABLE STRUCTURE FOR: Tax
#

DROP TABLE IF EXISTS `tax`;

CREATE TABLE `tax` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `value` int(2) NOT NULL,
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO `tax` (`id`, `name`, `value`) VALUES
(1,'tax 1',5);

#
# TABLE STRUCTURE FOR: Coupon
#

DROP TABLE IF EXISTS `coupons`;

CREATE TABLE `coupons` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `value` int(2) NOT NULL,
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO `coupons` (`id`, `name`,  `code`,  `value`) VALUES
(1,'GO2018','GO2018',10);


