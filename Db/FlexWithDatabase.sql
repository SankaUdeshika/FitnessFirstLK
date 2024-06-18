-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.34 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for flex_db
CREATE DATABASE IF NOT EXISTS `flex_db` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `flex_db`;

-- Dumping structure for table flex_db.cart
CREATE TABLE IF NOT EXISTS `cart` (
  `Cart_id` int NOT NULL AUTO_INCREMENT,
  `Qty` int DEFAULT NULL,
  `Cookie_C_id` int NOT NULL,
  `product_Product_id` varchar(100) NOT NULL,
  PRIMARY KEY (`Cart_id`),
  KEY `fk_cart_Cookie1_idx` (`Cookie_C_id`),
  KEY `fk_cart_product1_idx` (`product_Product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table flex_db.cart: ~3 rows (approximately)
INSERT INTO `cart` (`Cart_id`, `Qty`, `Cookie_C_id`, `product_Product_id`) VALUES
	(21, 1, 4, '65de08e1d8604'),
	(22, 2, 5, '65e489c7b8862'),
	(37, 1, 6, '65e48879a86f4');

-- Dumping structure for table flex_db.category
CREATE TABLE IF NOT EXISTS `category` (
  `c_id` int NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table flex_db.category: ~6 rows (approximately)
INSERT INTO `category` (`c_id`, `category_name`) VALUES
	(1, 'Energy Drink'),
	(2, 'Protein'),
	(3, 'Pre-Workout'),
	(4, 'Mass Gainers'),
	(5, 'Creatine'),
	(6, 'BCAA/EAA');

-- Dumping structure for table flex_db.cookie
CREATE TABLE IF NOT EXISTS `cookie` (
  `C_id` int NOT NULL AUTO_INCREMENT,
  `Cookie` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`C_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table flex_db.cookie: ~4 rows (approximately)
INSERT INTO `cookie` (`C_id`, `Cookie`) VALUES
	(3, 'user65df04b50b0c7'),
	(4, 'user65eb162676fcd'),
	(5, 'user65eb2795561d1'),
	(6, 'user6658e785e0760');

-- Dumping structure for table flex_db.flavors
CREATE TABLE IF NOT EXISTS `flavors` (
  `flavour_id` int NOT NULL AUTO_INCREMENT,
  `flavour_name` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`flavour_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table flex_db.flavors: ~14 rows (approximately)
INSERT INTO `flavors` (`flavour_id`, `flavour_name`) VALUES
	(1, 'Chocolate'),
	(2, 'Vanila'),
	(3, 'Blueberry'),
	(4, 'strawberry'),
	(5, 'icy blue'),
	(6, 'white powder'),
	(7, 'squashies'),
	(8, 'love heart'),
	(9, 'fruit burst'),
	(10, 'green apple'),
	(11, 'pineapple'),
	(12, 'unflavoured'),
	(13, 'NewFlavour'),
	(14, 'Testing 03 Flavour');

-- Dumping structure for table flex_db.order
CREATE TABLE IF NOT EXISTS `order` (
  `Order_id` varchar(100) NOT NULL DEFAULT 'AUTO_INCREMENT',
  `Total` double DEFAULT NULL,
  `User_Email` varchar(100) NOT NULL,
  `OrderDate` date DEFAULT NULL,
  `OrderTime` time DEFAULT NULL,
  `Status_Sid` int NOT NULL DEFAULT '3',
  PRIMARY KEY (`Order_id`),
  KEY `fk_Order_User1_idx` (`User_Email`),
  KEY `fk_Order_Status1_idx` (`Status_Sid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table flex_db.order: ~19 rows (approximately)
INSERT INTO `order` (`Order_id`, `Total`, `User_Email`, `OrderDate`, `OrderTime`, `Status_Sid`) VALUES
	('Order_65e1ed5ead53c', 18300, 'sankaudeshika123@gmail.com', '2024-03-01', '15:59:42', 1),
	('Order_65e1f5d68f182', 17000, 'sankaudeshika123@gmail.com', '2024-03-01', '16:35:50', 1),
	('Order_65eb3dd83d7fd', 88200, 'sankaudeshika123@gmail.com', '2024-03-08', '17:33:28', 3),
	('Order_65eb3e78b1c6e', 9800, 'sankaudeshika123@gmail.com', '2024-03-08', '17:36:08', 3),
	('Order_65eb3e811a946', 0, 'sankaudeshika123@gmail.com', '2024-03-08', '17:36:17', 3),
	('Order_65eb3ecf11ba4', 9800, 'sankaudeshika123@gmail.com', '2024-03-08', '17:37:35', 3),
	('Order_65eb404b59b80', 9800, 'sankaudeshika123@gmail.com', '2024-03-08', '17:43:55', 3),
	('Order_65eb42e65c9b5', 8800, 'sankaudeshika123@gmail.com', '2024-03-08', '17:55:02', 3),
	('Order_65eb42ec17387', 0, 'sankaudeshika123@gmail.com', '2024-03-08', '17:55:08', 3),
	('Order_65eb43f54be88', 9800, 'sankaudeshika123@gmail.com', '2024-03-08', '17:59:33', 3),
	('Order_65eb48e397b9e', 9800, 'sankaudeshika123@gmail.com', '2024-03-08', '18:20:35', 3),
	('Order_65eb48e7505a1', 0, 'sankaudeshika123@gmail.com', '2024-03-08', '18:20:39', 3),
	('Order_65eb48e9b1e23', 0, 'sankaudeshika123@gmail.com', '2024-03-08', '18:20:41', 3),
	('Order_65eb48eead4da', 0, 'sankaudeshika123@gmail.com', '2024-03-08', '18:20:46', 3),
	('Order_65eb4eab21a41', 39200, 'sankaudeshika123@gmail.com', '2024-03-08', '18:45:15', 3),
	('Order_65eb4f40114ed', 17600, 'sankaudeshika123@gmail.com', '2024-03-08', '18:47:44', 3),
	('Order_65eb4f78e3002', 17600, 'sankaudeshika123@gmail.com', '2024-03-08', '18:48:40', 3),
	('Order_65eb4fec4e9ac', 19600, 'sankaudeshika123@gmail.com', '2024-03-08', '18:50:36', 3),
	('Order_65eb50442b444', 26100, 'sankaudeshika123@gmail.com', '2024-03-08', '18:52:04', 3);

-- Dumping structure for table flex_db.orderitem
CREATE TABLE IF NOT EXISTS `orderitem` (
  `OItems_id` int NOT NULL AUTO_INCREMENT,
  `Qty` int DEFAULT NULL,
  `Order_Order_id` varchar(100) NOT NULL DEFAULT '',
  `product_Product_id` varchar(100) NOT NULL,
  PRIMARY KEY (`OItems_id`),
  KEY `fk_orderitem_product1_idx` (`product_Product_id`),
  KEY `FK_orderitem_order` (`Order_Order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table flex_db.orderitem: ~16 rows (approximately)
INSERT INTO `orderitem` (`OItems_id`, `Qty`, `Order_Order_id`, `product_Product_id`) VALUES
	(1, 1, 'Order_65e1ed5ead53c', '65de08e1d8604'),
	(2, 1, 'Order_65e1ed5ead53c', '65de076731dc7'),
	(3, 2, 'Order_65e1f5d68f182', '65de076731dc7'),
	(4, 9, 'Order_65eb3dd83d7fd', '65de08e1d8604'),
	(5, 1, 'Order_65eb3e78b1c6e', '65de08e1d8604'),
	(6, 1, 'Order_65eb3ecf11ba4', '65de08e1d8604'),
	(7, 1, 'Order_65eb404b59b80', '65de08e1d8604'),
	(8, 1, 'Order_65eb42e65c9b5', '65de093989919'),
	(9, 1, 'Order_65eb43f54be88', '65de08e1d8604'),
	(10, 1, 'Order_65eb48e397b9e', '65de08e1d8604'),
	(11, 4, 'Order_65eb4eab21a41', '65de08e1d8604'),
	(12, 2, 'Order_65eb4f40114ed', '65de093989919'),
	(13, 2, 'Order_65eb4f78e3002', '65de093989919'),
	(14, 2, 'Order_65eb4fec4e9ac', '65de08e1d8604'),
	(15, 2, 'Order_65eb50442b444', '65de08e1d8604'),
	(16, 1, 'Order_65eb50442b444', '65e48879a86f4');

-- Dumping structure for table flex_db.product
CREATE TABLE IF NOT EXISTS `product` (
  `Product_id` varchar(100) NOT NULL,
  `Product_name` varchar(100) DEFAULT NULL,
  `Description` text,
  `Qty` int DEFAULT NULL,
  `Price` double DEFAULT NULL,
  `Category_id` int DEFAULT NULL,
  PRIMARY KEY (`Product_id`),
  KEY `FK_product_category` (`Category_id`),
  CONSTRAINT `FK_product_category` FOREIGN KEY (`Category_id`) REFERENCES `category` (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table flex_db.product: ~7 rows (approximately)
INSERT INTO `product` (`Product_id`, `Product_name`, `Description`, `Qty`, `Price`, `Category_id`) VALUES
	('65de076731dc7', 'ISO-XP', '   \r\nISO-XP is a whey protein isolate supplement marketed as high-quality and low in fat, carbs, and sugar. It claims to offer a high protein content per serving (around 23 grams per 25 grams) and be free of soy and lactose.   ', 2, 8500, 3),
	('65de08e1d8604', 'Creatine MonoHy Drate', ' Creatine MonoHy Drate Description ', 9, 9800, 3),
	('65de093989919', 'Creating MonoHydrate Second', 'Creating MonoHydrate Second Description', 4, 8800, 3),
	('65e48879a86f4', 'ABE - ALL BLACK EVERYTHING ', 'ABE delivers a unique blend of the most vital and researched active ingredients known to help increase physical performance*, reduce tiredness & fatigue* and provide continual focus throughout your training, maximizing your bodies potential. However talk is cheap and the proof is in the product, after extensive research, meticulous formulating and precise lab testing we are confident to let ABE do the talking.', 20, 6500, 1),
	('65e489c7b8862', 'BCAA AMINO HYDRATE', 'BCAA Amino Hydrate is the SUGAR FREE intra workout & recovery drink-mix that all Athletes, Bodybuilders, Powerlifters, Boxers and general keep fitters should be consuming during every workout.', 10, 4200, 2),
	('65e48a884a6df', 'CRITICAL GREENS POWDER', 'Critical Greens is packed with 17 super-greens extracts including broccoli, celery, spinach, wheatgrass, and kale powder — get your greens in a super-convenient way. Our critical blend can simply be added to your protein shake, fruit smoothie or can be mixed with water for a fresh natural taste.', 5, 12000, 1),
	('666c91bc19e60', 'GHOST LEGEND V2', 'GHOST LEGEND V2', 7, 8500, 3);

-- Dumping structure for table flex_db.product_flavour
CREATE TABLE IF NOT EXISTS `product_flavour` (
  `pf_id` int NOT NULL AUTO_INCREMENT,
  `pf_product_id` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '',
  `pf_flavour_id` int DEFAULT NULL,
  PRIMARY KEY (`pf_id`),
  KEY `FK_product_flavour_product` (`pf_product_id`),
  KEY `FK_product_flavour_flavors` (`pf_flavour_id`),
  CONSTRAINT `FK_product_flavour_flavors` FOREIGN KEY (`pf_flavour_id`) REFERENCES `flavors` (`flavour_id`),
  CONSTRAINT `FK_product_flavour_product` FOREIGN KEY (`pf_product_id`) REFERENCES `product` (`Product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table flex_db.product_flavour: ~12 rows (approximately)
INSERT INTO `product_flavour` (`pf_id`, `pf_product_id`, `pf_flavour_id`) VALUES
	(4, '65e48a884a6df', 4),
	(5, '65e48a884a6df', 5),
	(7, '65e48879a86f4', 8),
	(8, '65e48879a86f4', 7),
	(9, '65e489c7b8862', 10),
	(11, '65e489c7b8862', 11),
	(12, '65e48a884a6df', 12),
	(21, '65de076731dc7', 1),
	(23, '65de076731dc7', 2),
	(24, '65de08e1d8604', 4),
	(25, '65de08e1d8604', 6),
	(26, '666c91bc19e60', 2);

-- Dumping structure for table flex_db.product_images
CREATE TABLE IF NOT EXISTS `product_images` (
  `Product_Image_id` int NOT NULL AUTO_INCREMENT,
  `Main_Image` varchar(100) DEFAULT NULL,
  `Seciond_Image` varchar(100) DEFAULT NULL,
  `product_Product_id` varchar(100) NOT NULL,
  `Third_Image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Product_Image_id`),
  KEY `fk_product_images_product1_idx` (`product_Product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table flex_db.product_images: ~7 rows (approximately)
INSERT INTO `product_images` (`Product_Image_id`, `Main_Image`, `Seciond_Image`, `product_Product_id`, `Third_Image`) VALUES
	(2, 'Resources//images//FlexProductImage//Main_ISO-XPChochlet.jpeg', 'Resources//images//FlexProductImage//Second_ISO-XPChochlet.jpeg', '65de076731dc7', 'Resources//images//FlexProductImage//Third_ISO-XPChochlet.jpeg'),
	(4, 'Resources//images//FlexProductImage//Main_Creatine MonoHy DrateStawberry.jpeg', 'Resources//images//FlexProductImage//Second_Creatine MonoHy DrateStawberry.jpeg', '65de08e1d8604', 'Resources//images//FlexProductImage//Third_Creatine MonoHy DrateStawberry.jpeg'),
	(5, 'Resources//images//FlexProductImage//Main_Creating MonoHydrate SecondWhite Powder.jpeg', 'Resources//images//FlexProductImage//Second_Creating MonoHydrate SecondWhite Powder.jpeg', '65de093989919', 'Resources//images//FlexProductImage//Third_Creating MonoHydrate SecondWhite Powder.jpeg'),
	(6, 'Resources//images//FlexProductImage//Main_ABE - ALL BLACK EVERYTHING White Powder.jpeg', 'Resources//images//FlexProductImage//Second_ABE - ALL BLACK EVERYTHING White Powder.jpeg', '65e48879a86f4', 'Resources//images//FlexProductImage//Third_ABE - ALL BLACK EVERYTHING White Powder.jpeg'),
	(7, 'Resources//images//FlexProductImage//Main_BCAA AMINO HYDRATEFruit Brust.jpeg', 'Resources//images//FlexProductImage//Second_BCAA AMINO HYDRATEFruit Brust.jpeg', '65e489c7b8862', 'Resources//images//FlexProductImage//Third_BCAA AMINO HYDRATEFruit Brust.jpeg'),
	(8, 'Resources//images//FlexProductImage//Main_CRITICAL GREENS POWDERWhite Powder.jpeg', 'Resources//images//FlexProductImage//Second_CRITICAL GREENS POWDERWhite Powder.jpeg', '65e48a884a6df', 'Resources//images//FlexProductImage//Third_CRITICAL GREENS POWDERWhite Powder.jpeg'),
	(12, 'Resources//images//FlexProductImage//Main_GHOST LEGEND V2Vanila.jpeg', 'Resources//images//FlexProductImage//Second_GHOST LEGEND V2Vanila.jpeg', '666c91bc19e60', 'Resources//images//FlexProductImage//Third_GHOST LEGEND V2Vanila.jpeg');

-- Dumping structure for table flex_db.specialpoints
CREATE TABLE IF NOT EXISTS `specialpoints` (
  `SP_Id` int NOT NULL,
  `Point` text,
  PRIMARY KEY (`SP_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table flex_db.specialpoints: ~0 rows (approximately)

-- Dumping structure for table flex_db.status
CREATE TABLE IF NOT EXISTS `status` (
  `Sid` int NOT NULL AUTO_INCREMENT,
  `Status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Sid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table flex_db.status: ~3 rows (approximately)
INSERT INTO `status` (`Sid`, `Status`) VALUES
	(1, 'ACTIVE'),
	(2, 'DEACTIVE'),
	(3, 'PENDING');

-- Dumping structure for table flex_db.user
CREATE TABLE IF NOT EXISTS `user` (
  `Email` varchar(100) NOT NULL,
  `FIrst_name` varchar(45) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `Last_name` varchar(45) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `Address` text,
  `City` varchar(45) DEFAULT NULL,
  `PostalCode` varchar(45) DEFAULT NULL,
  `Cookie_C_id` int NOT NULL,
  `Status_Sid` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`Email`),
  KEY `fk_User_Cookie1_idx` (`Cookie_C_id`),
  KEY `fk_User_Status1_idx` (`Status_Sid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table flex_db.user: ~1 rows (approximately)
INSERT INTO `user` (`Email`, `FIrst_name`, `Last_name`, `mobile`, `Address`, `City`, `PostalCode`, `Cookie_C_id`, `Status_Sid`) VALUES
	('sankaudeshika123@gmail.com', 'Sanka', 'Udeshika', '0764213724', '40/6,A,  Bellanthara Road, Dehiwala', 'Dehiwala', '10350', 3, 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
