CREATE TABLE IF NOT EXISTS `products` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(200) NOT NULL,
	`desc` text NOT NULL,
	`price` decimal(7,2) NOT NULL,
	`rrp` decimal(7,2) NOT NULL DEFAULT '0.00',
	`quantity` int(11) NOT NULL,
	`img` text NOT NULL,
	`date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO `products` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`, `date_added`) VALUES
(1, 'Smart Watch', 'Unique watch made with stainless steel, ideal for those that prefer interative watches.', '2999.00', '0.00', 10, 'watch.jpg', '2020-09-13 17:55:22'),
(2, 'Website', 'Stunning, responsive and dynamic website ', '2699.00', '0.00', 34, 'website.jpg', '2020-09-13 18:52:49'),
(3, 'Computer', 'Modern computers with high processing power', '29099.00', '0.00', 23, 'computer.jpg', '2020-10-13 18:47:56'),
(4, 'Digital Camera', 'Take clear and perfect pcture', '6999.00', '0.00', 7, 'camera.jpg', '2020-10-13 17:42:04'),
(5, 'Search engine', 'Faster browsing of the internet', '4999.00', '0.00', 23, 'chrome.png', '2020-10-13 18:47:56'),
(6, 'CCTV Camera', 'Takes clear picture of everything object in your compound', '6199.00', '0.00', 7, 'download.jpg', '2020-10-13 17:42:04'),
(7, 'Smart Television', 'Unique television made with stainless steel, ideal for those that prefer interative televisions.', '39099.00', '0.00', 10, 'smarttv.jpg', '2019-03-13 17:55:22'),
(8, 'Logo Design', 'Smart logo for your company', '1199.00', '0.00', 34, 'Logo.jpg', '2020-03-13 18:52:49'),
(9, 'Smart Phone', 'Unique phone made with stainless steel, ideal for those that prefer interative phones', '12919.00', '0.00', 23, 'phone.jpg', '2020-03-13 18:47:56'),
(10, 'Sub Woofer', 'High sound quality product', '7900.00', '0.00', 7, 'woofer1.jpg', '2020-03-13 17:42:04'),
(11, 'Laptop', 'Modern  portable laptops with high processing power and battery backup', '21397.00', '0.00', 23, 'computer.jpg', '2020-03-13 18:47:56'),
(12, 'Security System', 'For quality alert in case of a breach', '3909.00', '0.00', 7, 'alrm.jpg', '2020-03-13 17:42:04');


CREATE TABLE IF NOT EXISTS `orders` (
	`id` int(11) NULL AUTO_INCREMENT,
	`uid` varchar(200) NOT NULL,
	`user_email` varchar(200) NOT NULL,
	`product_id` varchar(200) NOT NULL,
	`name` varchar(200) NOT NULL,
	`desc` varchar(200) NOT NULL,
	`price` decimal(7,2) NOT NULL,
	`quantity` int(11) NOT NULL,
	`subtotal` varchar(200) NOT NULL,
	`admin_remarks` varchar(200)  NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
INSERT INTO `orders`(`id`, `uid`, `user_email`, `product_id`, `name`, `desc`, `price`, `quantity`, `subtotal`) VALUE
S ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])

CREATE TABLE IF NOT EXISTS `cart` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`user_id` varchar(200) NOT NULL,
	`name` varchar(200) NOT NULL,
	`price` decimal(7,2) NOT NULL,
	`quantity` int(11) NOT NULL,
	`subtotal` varchar(200) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

mysqli_query($con,"INSERT INTO `cart`((`id`, `user_id`, `name`, `price`, `quantity`)