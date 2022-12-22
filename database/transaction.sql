CREATE TABLE `transaction` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `cust_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
 `cust_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `card_number` bigint(20) NOT NULL,
 `card_cvc` int(5) NOT NULL,
 `card_exp_month` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
 `card_exp_year` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
 `item_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `item_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 `item_price` float(10,2) NOT NULL,
 `item_price_currency` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'usd',
 `paid_amount` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
 `paid_amount_currency` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
 `txn_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
 `payment_status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 `created` datetime NOT NULL,
 `modified` datetime NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;