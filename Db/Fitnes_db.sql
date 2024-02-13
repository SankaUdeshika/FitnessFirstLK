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

-- Dumping structure for table fitnessfirstlk_db.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `email` varchar(100) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table fitnessfirstlk_db.admin: ~0 rows (approximately)
INSERT INTO `admin` (`email`, `password`, `mobile`, `firstname`, `lastname`) VALUES
	('ka123@gmail.com', '123456789', '0764213724', 'Sanka', 'Udeshika');

-- Dumping structure for table fitnessfirstlk_db.blog
CREATE TABLE IF NOT EXISTS `blog` (
  `Bid` int NOT NULL AUTO_INCREMENT,
  `BlogName` varchar(100) DEFAULT NULL,
  `content` text,
  `BlogMainImage` text,
  `Bdate` date DEFAULT NULL,
  `Btime` time DEFAULT NULL,
  `blogCategory` int DEFAULT NULL,
  PRIMARY KEY (`Bid`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table fitnessfirstlk_db.blog: ~11 rows (approximately)
INSERT INTO `blog` (`Bid`, `BlogName`, `content`, `BlogMainImage`, `Bdate`, `Btime`, `blogCategory`) VALUES
	(1, 'What Is Body Mass Index', '\r\nGetting fit in the New Year is an exciting and achievable goal with the right approach. Start by setting realistic and specific fitness objectives, such as incorporating regular exercise into your routine or aiming for a certain level of physical activity each week. Choose activities you enjoy to make the journey more enjoyable, whether it\'s jogging, cycling, dancing, or hitting the gym. Mix up your workouts to keep things interesting and target different muscle groups. Remember that a balanced diet plays a crucial role in achieving fitness goals, so focus on nourishing your body with nutrient-dense foods. Staying consistent is key, so create a schedule that works for you and gradually increase the intensity of your workouts. Celebrate small victories along the way, and don\'t forget to listen to your body and rest when needed. With dedication and perseverance, you\'ll be on your way to a healthier and fitter you in the New Year.', 'Resources//images//blogImage//blog1What Is Body Mass Index.jpeg', '2024-01-30', '10:27:21', 1),
	(2, 'What Is Body Mass Index', '\r\nGetting fit in the New Year is an exciting and achievable goal with the right approach. Start by setting realistic and specific fitness objectives, such as incorporating regular exercise into your routine or aiming for a certain level of physical activity each week. Choose activities you enjoy to make the journey more enjoyable, whether it\'s jogging, cycling, dancing, or hitting the gym. Mix up your workouts to keep things interesting and target different muscle groups. Remember that a balanced diet plays a crucial role in achieving fitness goals, so focus on nourishing your body with nutrient-dense foods. Staying consistent is key, so create a schedule that works for you and gradually increase the intensity of your workouts. Celebrate small victories along the way, and don\'t forget to listen to your body and rest when needed. With dedication and perseverance, you\'ll be on your way to a healthier and fitter you in the New Year.', 'Resources//images//blogImage//blog2What Is Body Mass Index.jpeg', '2024-01-30', '10:29:32', 2),
	(3, 'How To Get Fit In The New Year', '\r\nGetting fit in the New Year is an exciting and achievable goal with the right approach. Start by setting realistic and specific fitness objectives, such as incorporating regular exercise into your routine or aiming for a certain level of physical activity each week. Choose activities you enjoy to make the journey more enjoyable, whether it\'s jogging, cycling, dancing, or hitting the gym. Mix up your workouts to keep things interesting and target different muscle groups. Remember that a balanced diet plays a crucial role in achieving fitness goals, so focus on nourishing your body with nutrient-dense foods. Staying consistent is key, so create a schedule that works for you and gradually increase the intensity of your workouts. Celebrate small victories along the way, and don\'t forget to listen to your body and rest when needed. With dedication and perseverance, you\'ll be on your way to a healthier and fitter you in the New Year.', 'Resources//images//blogImage//blog3How To Get Fit In The New Year.jpeg', '2024-01-30', '10:29:59', 3),
	(4, 'What Is Body Mass Index', '\r\nGetting fit in the New Year is an exciting and achievable goal with the right approach. Start by setting realistic and specific fitness objectives, such as incorporating regular exercise into your routine or aiming for a certain level of physical activity each week. Choose activities you enjoy to make the journey more enjoyable, whether it\'s jogging, cycling, dancing, or hitting the gym. Mix up your workouts to keep things interesting and target different muscle groups. Remember that a balanced diet plays a crucial role in achieving fitness goals, so focus on nourishing your body with nutrient-dense foods. Staying consistent is key, so create a schedule that works for you and gradually increase the intensity of your workouts. Celebrate small victories along the way, and don\'t forget to listen to your body and rest when needed. With dedication and perseverance, you\'ll be on your way to a healthier and fitter you in the New Year.', 'Resources//images//blogImage//blog4What Is Body Mass Index.jpeg', '2024-01-30', '10:30:18', 1),
	(5, 'How To Get Fit In The New Year', '\r\nGetting fit in the New Year is an exciting and achievable goal with the right approach. Start by setting realistic and specific fitness objectives, such as incorporating regular exercise into your routine or aiming for a certain level of physical activity each week. Choose activities you enjoy to make the journey more enjoyable, whether it\'s jogging, cycling, dancing, or hitting the gym. Mix up your workouts to keep things interesting and target different muscle groups. Remember that a balanced diet plays a crucial role in achieving fitness goals, so focus on nourishing your body with nutrient-dense foods. Staying consistent is key, so create a schedule that works for you and gradually increase the intensity of your workouts. Celebrate small victories along the way, and don\'t forget to listen to your body and rest when needed. With dedication and perseverance, you\'ll be on your way to a healthier and fitter you in the New Year.', 'Resources//images//blogImage//blog5How To Get Fit In The New Year.jpeg', '2024-01-30', '10:30:42', 2),
	(6, 'What Is Body Mass Index', '\r\nGetting fit in the New Year is an exciting and achievable goal with the right approach. Start by setting realistic and specific fitness objectives, such as incorporating regular exercise into your routine or aiming for a certain level of physical activity each week. Choose activities you enjoy to make the journey more enjoyable, whether it\'s jogging, cycling, dancing, or hitting the gym. Mix up your workouts to keep things interesting and target different muscle groups. Remember that a balanced diet plays a crucial role in achieving fitness goals, so focus on nourishing your body with nutrient-dense foods. Staying consistent is key, so create a schedule that works for you and gradually increase the intensity of your workouts. Celebrate small victories along the way, and don\'t forget to listen to your body and rest when needed. With dedication and perseverance, you\'ll be on your way to a healthier and fitter you in the New Year.', 'Resources//images//blogImage//blog6What Is Body Mass Index.jpeg', '2024-01-30', '10:31:12', 3),
	(7, 'How To Get Fit In The New Year', '\r\nGetting fit in the New Year is an exciting and achievable goal with the right approach. Start by setting realistic and specific fitness objectives, such as incorporating regular exercise into your routine or aiming for a certain level of physical activity each week. Choose activities you enjoy to make the journey more enjoyable, whether it\'s jogging, cycling, dancing, or hitting the gym. Mix up your workouts to keep things interesting and target different muscle groups. Remember that a balanced diet plays a crucial role in achieving fitness goals, so focus on nourishing your body with nutrient-dense foods. Staying consistent is key, so create a schedule that works for you and gradually increase the intensity of your workouts. Celebrate small victories along the way, and don\'t forget to listen to your body and rest when needed. With dedication and perseverance, you\'ll be on your way to a healthier and fitter you in the New Year.', 'Resources//images//blogImage//blog7How To Get Fit In The New Year.jpeg', '2024-01-30', '10:31:34', 1),
	(8, 'What Is Body Mass Index', 'How To Get Fit In The New Year\r\nGetting fit in the New Year is an exciting and achievable goal with the right approach. Start by setting realistic and specific fitness objectives, such as incorporating regular exercise into your routine or aiming for a certain level of physical activity each week. Choose activities you enjoy to make the journey more enjoyable, whether it\'s jogging, cycling, dancing, or hitting the gym. Mix up your workouts to keep things interesting and target different muscle groups. Remember that a balanced diet plays a crucial role in achieving fitness goals, so focus on nourishing your body with nutrient-dense foods. Staying consistent is key, so create a schedule that works for you and gradually increase the intensity of your workouts. Celebrate small victories along the way, and don\'t forget to listen to your body and rest when needed. With dedication and perseverance, you\'ll be on your way to a healthier and fitter you in the New Year.', 'Resources//images//blogImage//blog8What Is Body Mass Index.jpeg', '2024-01-30', '10:32:07', 2),
	(9, 'What Is Body Mass Index', '\r\nGetting fit in the New Year is an exciting and achievable goal with the right approach. Start by setting realistic and specific fitness objectives, such as incorporating regular exercise into your routine or aiming for a certain level of physical activity each week. Choose activities you enjoy to make the journey more enjoyable, whether it\'s jogging, cycling, dancing, or hitting the gym. Mix up your workouts to keep things interesting and target different muscle groups. Remember that a balanced diet plays a crucial role in achieving fitness goals, so focus on nourishing your body with nutrient-dense foods. Staying consistent is key, so create a schedule that works for you and gradually increase the intensity of your workouts. Celebrate small victories along the way, and don\'t forget to listen to your body and rest when needed. With dedication and perseverance, you\'ll be on your way to a healthier and fitter you in the New Year.', 'Resources//images//blogImage//blog9What Is Body Mass Index.jpeg', '2024-01-30', '10:32:49', 2),
	(10, 'What Is Body Mass Index', '\r\nGetting fit in the New Year is an exciting and achievable goal with the right approach. Start by setting realistic and specific fitness objectives, such as incorporating regular exercise into your routine or aiming for a certain level of physical activity each week. Choose activities you enjoy to make the journey more enjoyable, whether it\'s jogging, cycling, dancing, or hitting the gym. Mix up your workouts to keep things interesting and target different muscle groups. Remember that a balanced diet plays a crucial role in achieving fitness goals, so focus on nourishing your body with nutrient-dense foods. Staying consistent is key, so create a schedule that works for you and gradually increase the intensity of your workouts. Celebrate small victories along the way, and don\'t forget to listen to your body and rest when needed. With dedication and perseverance, you\'ll be on your way to a healthier and fitter you in the New Year.', 'Resources//images//blogImage//blog10What Is Body Mass Index.jpeg', '2024-01-30', '10:33:11', 2),
	(11, 'What Is Body Mass Index', 'How To Get Fit In The New Ye\r\nGetting fit in the New Year is an exciting and achievable goal with the right approach. Start by setting realistic and specific fitness objectives, such as incorporating regular exercise into your routine or aiming for a certain level of physical activity each week. Choose activities you enjoy to make the journey more enjoyable, whether it\'s jogging, cycling, dancing, or hitting the gym. Mix up your workouts to keep things interesting and target different muscle groups. Remember that a balanced diet plays a crucial role in achieving fitness goals, so focus on nourishing your body with nutrient-dense foods. Staying consistent is key, so create a schedule that works for you and gradually increase the intensity of your workouts. Celebrate small victories along the way, and don\'t forget to listen to your body and rest when needed. With dedication and perseverance, you\'ll be on your way to a healthier and fitter you in the New Year.ar', 'Resources//images//blogImage//blog11What Is Body Mass Index.jpeg', '2024-01-30', '10:34:11', 2);

-- Dumping structure for table fitnessfirstlk_db.blogcategory
CREATE TABLE IF NOT EXISTS `blogcategory` (
  `BCid` int NOT NULL AUTO_INCREMENT,
  `category` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`BCid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table fitnessfirstlk_db.blogcategory: ~2 rows (approximately)
INSERT INTO `blogcategory` (`BCid`, `category`) VALUES
	(1, 'NUTRITION'),
	(2, 'FITNESS'),
	(3, 'ARCHIVE');

-- Dumping structure for table fitnessfirstlk_db.clasessareas
CREATE TABLE IF NOT EXISTS `clasessareas` (
  `CA_id` int NOT NULL AUTO_INCREMENT,
  `CA_image` text,
  `CA_text` varchar(45) DEFAULT NULL,
  `CA_classes_NO` int DEFAULT NULL,
  PRIMARY KEY (`CA_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table fitnessfirstlk_db.clasessareas: ~4 rows (approximately)
INSERT INTO `clasessareas` (`CA_id`, `CA_image`, `CA_text`, `CA_classes_NO`) VALUES
	(1, 'Resources//images//Areas//Area1.jpeg', 'Cardio ', 12),
	(2, 'Resources\\images\\Areas\\gym02.jpg', 'Strength ', 6),
	(3, 'Resources\\images\\Areas\\gym04.jpeg', 'Cycle ', 5),
	(4, 'Resources\\images\\Areas\\gym03.jpg', 'Mind and Body', 12),
	(5, 'Resources\\images\\Areas\\gym04.jpeg', 'Fight ', 18);

-- Dumping structure for table fitnessfirstlk_db.classestopimage
CREATE TABLE IF NOT EXISTS `classestopimage` (
  `CTI_id` int NOT NULL AUTO_INCREMENT,
  `CTI_path` text,
  PRIMARY KEY (`CTI_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table fitnessfirstlk_db.classestopimage: ~0 rows (approximately)
INSERT INTO `classestopimage` (`CTI_id`, `CTI_path`) VALUES
	(1, 'Resources//images//pageTopImages//top1.jpeg'),
	(2, 'Resources//images//pageTopImages//top2.jpeg');

-- Dumping structure for table fitnessfirstlk_db.classesvideo
CREATE TABLE IF NOT EXISTS `classesvideo` (
  `CV_id` int NOT NULL AUTO_INCREMENT,
  `CV_path` text,
  `CV_topic` varchar(100) DEFAULT NULL,
  `CV_para` text,
  PRIMARY KEY (`CV_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table fitnessfirstlk_db.classesvideo: ~0 rows (approximately)
INSERT INTO `classesvideo` (`CV_id`, `CV_path`, `CV_topic`, `CV_para`) VALUES
	(1, 'Resources//Videos//Video.mp4', 'Experience classes at Fitness First ', 'Whether you want to get leaner, stronger, faster, or just have fun while working out, we have something for everyone with our group Fitness Classes. There are 55 classes for you to try out across five different categories, including Cardio, Strength, Cycle, Mind and Body, and Fight. ');

-- Dumping structure for table fitnessfirstlk_db.facilitiesabout
CREATE TABLE IF NOT EXISTS `facilitiesabout` (
  `FA_id` int NOT NULL AUTO_INCREMENT,
  `AboutPara` text NOT NULL,
  PRIMARY KEY (`FA_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table fitnessfirstlk_db.facilitiesabout: ~0 rows (approximately)
INSERT INTO `facilitiesabout` (`FA_id`, `AboutPara`) VALUES
	(1, 'The Fitness Factory is a 24/7, multi-level facility that houses an expansive selection of equipment, resources for a complete wellness experience. We provide a friendly, welcoming atmosphere for all members for all fitness levels from beginners to the PRO athletes. Whether your passion is, cardio, weight training, bodybuilding, powerlifting, CrossFit, or functional training; we have all the equipment and necessary machines you need for results. ');

-- Dumping structure for table fitnessfirstlk_db.facilitiesfeatures
CREATE TABLE IF NOT EXISTS `facilitiesfeatures` (
  `FF_id` int NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  PRIMARY KEY (`FF_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table fitnessfirstlk_db.facilitiesfeatures: ~11 rows (approximately)
INSERT INTO `facilitiesfeatures` (`FF_id`, `text`) VALUES
	(1, 'Over 18,000 square feet of space'),
	(2, 'Locker rooms with private showers and day lockers'),
	(3, 'Two levels of cardio equipment'),
	(4, '60 feet of turf for sleds'),
	(6, 'Rogue Glute Hamstring Developer'),
	(7, 'Dumbbells up to 150 lbs'),
	(8, 'Hammer Strength plate loaded equipment'),
	(9, 'Pin loaded weight training machines'),
	(10, '7 squat racks'),
	(11, '4 deadlift platforms with bumper plates');

-- Dumping structure for table fitnessfirstlk_db.factorycategory
CREATE TABLE IF NOT EXISTS `factorycategory` (
  `FC_id` int NOT NULL AUTO_INCREMENT,
  `FactoryCategory` text,
  PRIMARY KEY (`FC_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table fitnessfirstlk_db.factorycategory: ~2 rows (approximately)
INSERT INTO `factorycategory` (`FC_id`, `FactoryCategory`) VALUES
	(1, 'The Shake Bar'),
	(2, 'Retail & merchandise');

-- Dumping structure for table fitnessfirstlk_db.factoryimage
CREATE TABLE IF NOT EXISTS `factoryimage` (
  `FI_id` int NOT NULL AUTO_INCREMENT,
  `iamgePath` text,
  `para` text,
  PRIMARY KEY (`FI_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table fitnessfirstlk_db.factoryimage: ~0 rows (approximately)
INSERT INTO `factoryimage` (`FI_id`, `iamgePath`, `para`) VALUES
	(1, 'Resources//images//FactoryImage//Factory.jpg', 'The Supplement Factory is your source for nutrition and supplements. We have your nutrition needs covered including protein shakes made to order, protein bars and other snacks, as well as a wide array of supplements, to take home. ');

-- Dumping structure for table fitnessfirstlk_db.factoryinfo
CREATE TABLE IF NOT EXISTS `factoryinfo` (
  `SF_id` int NOT NULL AUTO_INCREMENT,
  `FactoryCategory` int NOT NULL,
  `ProductName` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`SF_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table fitnessfirstlk_db.factoryinfo: ~14 rows (approximately)
INSERT INTO `factoryinfo` (`SF_id`, `FactoryCategory`, `ProductName`) VALUES
	(1, 1, 'Protein Shakes Made to Order'),
	(2, 1, 'Pre Workout Drinks & Powde'),
	(3, 1, 'BCAAs & EAAs'),
	(4, 1, 'Protein Bars & Other Snacks'),
	(5, 1, 'Bottled Water'),
	(6, 1, 'Energy Drinks'),
	(7, 1, 'Ready to Drink Protein'),
	(8, 2, 'Protein Tub'),
	(9, 2, 'Pre Workout'),
	(10, 2, 'Intra Workou'),
	(11, 1, 'Custom Appare'),
	(12, 1, 'Shaker Bottles'),
	(13, 1, 'Combination Locks'),
	(14, 1, 'Ear Buds');

-- Dumping structure for table fitnessfirstlk_db.homeaboutimage
CREATE TABLE IF NOT EXISTS `homeaboutimage` (
  `HAI_id` int NOT NULL AUTO_INCREMENT,
  `HAI_path` text,
  PRIMARY KEY (`HAI_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table fitnessfirstlk_db.homeaboutimage: ~0 rows (approximately)
INSERT INTO `homeaboutimage` (`HAI_id`, `HAI_path`) VALUES
	(1, 'Resources//images//aboutImage//about1.jpeg');

-- Dumping structure for table fitnessfirstlk_db.homeaboutlist
CREATE TABLE IF NOT EXISTS `homeaboutlist` (
  `HAL_id` int NOT NULL AUTO_INCREMENT,
  `ListText` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`HAL_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table fitnessfirstlk_db.homeaboutlist: ~4 rows (approximately)
INSERT INTO `homeaboutlist` (`HAL_id`, `ListText`) VALUES
	(1, '10,000+ Happy Clients'),
	(2, '12+ Years of Experience'),
	(3, '30+ Certified Trainers');

-- Dumping structure for table fitnessfirstlk_db.homeaboutpara
CREATE TABLE IF NOT EXISTS `homeaboutpara` (
  `HAP_id` int NOT NULL AUTO_INCREMENT,
  `para` text,
  PRIMARY KEY (`HAP_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table fitnessfirstlk_db.homeaboutpara: ~0 rows (approximately)
INSERT INTO `homeaboutpara` (`HAP_id`, `para`) VALUES
	(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labour සහ dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labour සහ dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Risus commodo viverra maecenas accumsan lacus vel facilisis.');

-- Dumping structure for table fitnessfirstlk_db.homecarouselimages
CREATE TABLE IF NOT EXISTS `homecarouselimages` (
  `HCI_id` int NOT NULL AUTO_INCREMENT,
  `HIC_path` text,
  PRIMARY KEY (`HCI_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table fitnessfirstlk_db.homecarouselimages: ~4 rows (approximately)
INSERT INTO `homecarouselimages` (`HCI_id`, `HIC_path`) VALUES
	(1, 'Resources//images//carouselImages//1.jpeg'),
	(2, 'Resources//images//carouselImages//2.jpeg'),
	(3, 'Resources//images//carouselImages//3.jpeg'),
	(4, 'Resources//images//carouselImages//4.jpeg');

-- Dumping structure for table fitnessfirstlk_db.homecarouseltext
CREATE TABLE IF NOT EXISTS `homecarouseltext` (
  `HCT_id` int NOT NULL AUTO_INCREMENT,
  `HTC_name` varchar(45) DEFAULT NULL,
  `HTC_text` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`HCT_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table fitnessfirstlk_db.homecarouseltext: ~0 rows (approximately)

-- Dumping structure for table fitnessfirstlk_db.homestories
CREATE TABLE IF NOT EXISTS `homestories` (
  `HS_id` int NOT NULL AUTO_INCREMENT,
  `HS_image` text,
  `Hs_text` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  PRIMARY KEY (`HS_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table fitnessfirstlk_db.homestories: ~2 rows (approximately)
INSERT INTO `homestories` (`HS_id`, `HS_image`, `Hs_text`) VALUES
	(1, 'Resources//images//storyboxImage//story1.jpeg', 'Lorem Upsun us simply dummy text of the printing and typesetting industry.Lorem Upsun us simply dummy text of the printing and typesetting industry. '),
	(2, 'Resources//images//storyboxImage//story2.jpeg', 'Lorem Upsun us simply dummy text of the printing and typesetting industry.Lorem Upsun us simply dummy text of the printing and typesetting industry.'),
	(3, 'Resources//images//storyboxImage//story3.jpeg', 'Lorem Upsun us simply dummy text of the printing and typesetting industry.Lorem Upsun us simply dummy text of the printing and typesetting industry. '),
	(4, 'Resources//images//storyboxImage//story4.jpeg', 'Testing 04');

-- Dumping structure for table fitnessfirstlk_db.homewhyfitness
CREATE TABLE IF NOT EXISTS `homewhyfitness` (
  `HWF_id` int NOT NULL AUTO_INCREMENT,
  `HWF_imagepath` text,
  `HWF_text` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`HWF_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table fitnessfirstlk_db.homewhyfitness: ~2 rows (approximately)
INSERT INTO `homewhyfitness` (`HWF_id`, `HWF_imagepath`, `HWF_text`) VALUES
	(1, 'Resources//images//whyFitness//why1.jpeg', 'PERSONAL TRAINING '),
	(2, 'Resources//images//whyFitness//why2.jpeg', 'VARIETY OF CLASSES'),
	(3, 'Resources//images//whyFitness//why3.jpeg', 'PRIME LOCATION');

-- Dumping structure for table fitnessfirstlk_db.premiumfacilities
CREATE TABLE IF NOT EXISTS `premiumfacilities` (
  `PF_id` int NOT NULL AUTO_INCREMENT,
  `ImagePath` text,
  `ImageHeadline` varchar(50) DEFAULT NULL,
  `ImagePara` text,
  PRIMARY KEY (`PF_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table fitnessfirstlk_db.premiumfacilities: ~2 rows (approximately)
INSERT INTO `premiumfacilities` (`PF_id`, `ImagePath`, `ImageHeadline`, `ImagePara`) VALUES
	(1, 'Resources//images//PremiumImagesFacilities//Facilities1.jpeg', 'Sauna & Steam Room ', 'Rest and Recover at our Sauna & steam room built to world class standards, while enjoying an immersive experience .'),
	(2, 'Resources/images/PremiumImagesFacilities/SwimmingPool.jpeg', 'Swimming Pool', 'Get Free access to our state of the Art rooftop swimming pool, built with all moden amenities .'),
	(3, 'Resources//images//PremiumImagesFacilities//Facilities3.jpeg', 'Sports Massage ', 'Release the tension in your muscles with a sports massage from our well qualified therapists.');

-- Dumping structure for table fitnessfirstlk_db.status
CREATE TABLE IF NOT EXISTS `status` (
  `s_id` int NOT NULL AUTO_INCREMENT,
  `s_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table fitnessfirstlk_db.status: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
