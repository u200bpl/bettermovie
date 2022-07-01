-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for bettermovie
CREATE DATABASE IF NOT EXISTS `bettermovie` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `bettermovie`;

-- Dumping structure for table bettermovie.f1
CREATE TABLE IF NOT EXISTS `f1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) DEFAULT 0,
  `quantity` varchar(50) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `iframe` varchar(255) DEFAULT NULL,
  KEY `ID` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table bettermovie.f1: ~122 rows (approximately)
/*!40000 ALTER TABLE `f1` DISABLE KEYS */;
INSERT INTO `f1` (`id`, `year`, `quantity`, `country`, `iframe`) VALUES
	(1, 2016, '1', 'Australia', '2570373106275'),
	(2, 2016, '2', 'Bahrain', '2570373171811'),
	(3, 2016, '3', 'China', '2570372516451'),
	(4, 2016, '4', 'Russia', '2570372909667'),
	(5, 2016, '5', 'Spain', '2570372975203'),
	(6, 2016, '6', 'Monaco', '2570372188771'),
	(7, 2016, '7', 'Canada', '2570372450915'),
	(8, 2016, '8', 'Europe', '2570372254307'),
	(9, 2016, '9', 'Austria', '2570373040739'),
	(10, 2016, '10', 'Great Britain', '2570372319843'),
	(11, 2016, '11', 'Hungary', '2570373302883'),
	(12, 2016, '12', 'Germany', '2570372647523'),
	(13, 2016, '13', 'Belgium', '2570372844131'),
	(14, 2016, '14', 'Italy', '2570373433955'),
	(15, 2016, '15', 'Singapore', '2570373565027'),
	(16, 2016, '16', 'Malaysia', '2570372581987'),
	(17, 2016, '17', 'Japan', '2570372581987'),
	(18, 2016, '18', 'United States', '2570373237347'),
	(19, 2016, '19', 'Mexico', '2570372713059'),
	(20, 2016, '20', 'Brazil', '690960992769'),
	(21, 2016, '21', 'Abu Dhabi', '2570373368419'),
	(22, 2017, '1', 'Australia', '2564356115043'),
	(23, 2017, '2', 'China', '2564356573795'),
	(24, 2017, '3', 'Bahrain', '2564356180579'),
	(25, 2017, '4', 'Russia', '2564356246115'),
	(26, 2017, '5', 'Spain', '2564356311651'),
	(27, 2017, '6', 'Monaco', '2564356901475'),
	(28, 2017, '7', 'Canada', '2564356835939'),
	(29, 2017, '8', 'Azerbaijan', '2564356377187'),
	(30, 2017, '9', 'Austria', '2564356049507'),
	(31, 2017, '10', 'Great Britain', '2564356704867'),
	(32, 2017, '11', 'Hungary', '2564356508259'),
	(33, 2017, '12', 'Belgium', '2564356967011'),
	(34, 2017, '13', 'Italy', '2564356770403'),
	(35, 2017, '14', 'Singapore', '2564393601635'),
	(36, 2017, '15', 'Malaysia', '2564393798243'),
	(37, 2017, '16', 'Japan', '2564393536099'),
	(38, 2017, '17', 'United States', '2564393667171'),
	(39, 2017, '18', 'Mexico', '2564582214243'),
	(40, 2017, '19', 'Brazil', '2564582279779'),
	(41, 2017, '20', 'Abu Dhabi', '2564582345315'),
	(42, 2018, '1', 'Australia', '2565501749859'),
	(43, 2018, '2', 'Bahrain', '2565502012003'),
	(45, 2018, '3', 'China', '2565501160035'),
	(44, 2018, '4', 'Azerbaijan', '2565501291107'),
	(46, 2018, '5', 'Spain', '2565501618787'),
	(47, 2018, '6', 'Monaco', '2565501422179'),
	(48, 2018, '7', 'Canada', '2565502143075'),
	(49, 2018, '8', 'France', '2565501684323'),
	(50, 2018, '9', 'Austria', '2565502077539'),
	(51, 2018, '10', 'Great Britain', '2566660098659'),
	(52, 2018, '11', 'Germany', '2565501946467'),
	(53, 2018, '12', 'Hungary', '2567032343139'),
	(54, 2018, '13', 'Belgium', '2565501487715'),
	(55, 2018, '14', 'Italy', '2567032080995'),
	(56, 2018, '15', 'Singapore', '2567031949923'),
	(57, 2018, '16', 'Russia', '2566660033123'),
	(58, 2018, '17', 'Japan', '2565501880931'),
	(59, 2018, '18', 'United States', '2566659836515'),
	(60, 2018, '19', 'Mexico', '2567032212067'),
	(61, 2018, '20', 'Brazil', '2566659902051'),
	(62, 2018, '21', 'Abu Dhabi', '2566659705443'),
	(63, 2019, '1', 'Australia', '2562879326819'),
	(64, 2019, '2', 'Bahrain', '2562879654499'),
	(65, 2019, '3', 'China', '2562879261283'),
	(66, 2019, '4', 'Azerbaijan', '690960992769'),
	(67, 2019, '5', 'Spain', '2562879720035'),
	(68, 2019, '6', 'Monaco', '2562879195747'),
	(69, 2019, '7', 'Canada', '2562879523427'),
	(70, 2019, '8', 'France', '2562878474851'),
	(71, 2019, '9', 'Austria', '2562879588963'),
	(72, 2019, '10', 'Great Britain', '2563006794339'),
	(73, 2019, '11', 'Germany', '2563006728803'),
	(74, 2019, '12', 'Hungary', '2563289188963'),
	(75, 2019, '13', 'Belgium', '2563289254499'),
	(76, 2019, '14', 'Italy', '2563289123427'),
	(77, 2019, '15', 'Singapore', '2563289385571'),
	(78, 2019, '16', 'Russia', '2563289320035'),
	(79, 2019, '17', 'Japan', '2563440970339'),
	(80, 2019, '18', 'Mexico', '2563441166947'),
	(81, 2019, '19', 'United States', '2563441101411'),
	(82, 2019, '20', 'Brazil', '2563564178019'),
	(83, 2019, '21', 'Abu Dhabi', '2563564112483'),
	(84, 2020, '1', 'Austria', '2561080691299'),
	(85, 2020, '2', 'Styria', '2561080625763'),
	(86, 2020, '3', 'Hungary', '2561080560227'),
	(87, 2020, '4', 'Great Britain', '2561080756835'),
	(88, 2020, '5', '70th Anniversary', '2561080363619'),
	(89, 2020, '6', 'Spain', '2561080494691'),
	(90, 2020, '7', 'Belgium', '2561080429155'),
	(91, 2020, '8', 'Italy', '690960992769'),
	(92, 2020, '9', 'Tuscany', '2561424034403'),
	(93, 2020, '10', 'Russia', '2561423837795'),
	(94, 2020, '11', 'Eifel', '2561423968867'),
	(95, 2020, '12', 'Portugal', '2561570245219'),
	(96, 2020, '13', 'Emilia Romagna', '2561570179683'),
	(97, 2020, '14', 'Turkey', '2562058422883'),
	(98, 2020, '15', 'Bahrain', '2562058488419'),
	(99, 2020, '16', 'Sakhir', '2562058619491'),
	(100, 2020, '17', 'Abu Dhabi', '2562058553955'),
	(101, 2021, '1', 'Bahrain', '2054321146404'),
	(102, 2021, '2', 'Emilia Romagna', '2342645271209'),
	(103, 2021, '3', 'Portugal', '2501074356835'),
	(104, 2021, '4', 'Spain', '2395721566889'),
	(105, 2021, '5', 'Monaco', '2184179485220'),
	(106, 2021, '6', 'Azerbaijan', '2216425228836'),
	(107, 2021, '7', 'France', '2501291084387'),
	(108, 2021, '8', 'Styria', '2501215390307'),
	(109, 2021, '9', 'Austria', '2464516147751'),
	(110, 2021, '10', 'Great Britain', '2501078354531'),
	(111, 2021, '11', 'Hungary', '2501215849059'),
	(112, 2021, '12', 'Belgium', '2661029710505'),
	(113, 2021, '13', 'Netherlands', '2674305141417'),
	(114, 2021, '14', 'Italy', '3532184226473'),
	(115, 2021, '15', 'Russia', '2729570536105'),
	(116, 2021, '16', 'Turkey', '3053718145556'),
	(117, 2021, '17', 'United States', '2816979569321'),
	(118, 2021, '18', 'Mexico', '3106171390484'),
	(119, 2021, '19', 'Brazil', '2887893191337'),
	(120, 2021, '20', 'Qatar', '2921811806889'),
	(121, 2021, '21', 'Saudi Arabia', '3022501841577'),
	(122, 2021, '22', 'Abu Dhabi', '3098253331113'),
	(123, 2022, '1', 'Bahrain', NULL),
	(124, 2022, '2', 'Saudi Arabia', NULL),
	(125, 2022, '3', 'Australia', '3498137553577'),
	(126, 2022, '4', 'Emilia Romagna', '3532965546665'),
	(127, 2022, '5', 'Miami', '3562424044201'),
	(128, 2022, '6', 'Spain', NULL),
	(129, 2022, '7', 'Monaco', NULL);
/*!40000 ALTER TABLE `f1` ENABLE KEYS */;

-- Dumping structure for table bettermovie.movies
CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `genre` varchar(256) NOT NULL,
  `duration` int(11) DEFAULT NULL,
  `banner` varchar(256) NOT NULL,
  `year` varchar(256) NOT NULL,
  `trailer` text DEFAULT NULL,
  `iframe` varchar(256) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table bettermovie.movies: ~10 rows (approximately)
/*!40000 ALTER TABLE `movies` DISABLE KEYS */;
INSERT INTO `movies` (`id`, `title`, `description`, `genre`, `duration`, `banner`, `year`, `trailer`, `iframe`) VALUES
	(1, 'Free Guy', 'In Free Guy, a bank teller who discovers he is actually a background player in an open-world video game, decides to become the hero of his own story...', 'action', NULL, 'freeguy', '2021', 'X2m-08cOAbc', 'tt6264654'),
	(2, 'Iron Man', 'After being held captive in an Afghan cave, billionaire engineer Tony Stark creates a unique weaponized suit of armor to fight evil.', 'action', NULL, 'ironman', '2008', '8ugaeA-nMTc', 'tt0371746'),
	(3, 'Iron Man 2', 'When Tony Stark\'s world is torn apart by a formidable terrorist called the Mandarin, he starts an odyssey of rebuilding and retribution.', 'action', NULL, 'ironman2', '2010', 'BoohRoVA9WQ', 'tt1228705'),
	(4, 'Iron Man 3', 'With the world now aware of his identity as Iron Man, Tony Stark must contend with both his declining health and a vengeful mad man with ties to his father\'s legacy.', 'action', NULL, 'ironman3', '2013', 'Ke1Y3P9D0Bc', 'tt1300854'),
	(5, 'Spider-Man: No Way Home', 'With Spider-Man\'s identity now revealed, Peter asks Doctor Strange for help. When a spell goes wrong, dangerous foes from other worlds start to appear, forcing Peter to discover what it truly means to be Spider-Man.', 'action', NULL, 'spidermannowayhome', '2021', 'JfVOs4VSpmA', 'tt10872600'),
	(6, 'Scream', '25 years after a streak of brutal murders shocked the quiet town of Woodsboro, Calif., a new killer dons the Ghostface mask and begins targeting a group of teenagers to resurrect secrets from the town\'s deadly past.', 'horror', NULL, 'scream', '2022', NULL, 'tt11245972'),
	(7, '9 Bullets', 'A former burlesque dancer turned author discovers a second chance at life and redemption when she risks everything to rescue her young neighbor after he witnesses his parents\' murder. Now on the run from the local crime boss, who happens to be her longtime ex, she makes a desperate attempt to get the boy to safety.', 'action', NULL, '9bullets', '2022', NULL, 'tt13680520'),
	(8, 'Sonic The Hedgehog', 'An extraterrestrial hedgehog is discovered by a scientist with evil intentions and plans to use his superpowers for his selfish needs.', 'adventure', NULL, 'sonicthehedgehog', '2020', NULL, 'tt3794354'),
	(9, 'Uncharted', 'Victor Sullivan recruits Nathan Drake to help him find the lost fortune of Ferdinand Magellan. However, they face competition from Santiago Moncada, who believes that the treasure belongs to him.', 'adventure', NULL, 'uncharted', '2022', NULL, 'tt1464335'),
	(10, 'Sonic The Hedgehog 2', 'After settling in Green Hills, Sonic is eager to prove that he has what it takes to be a true hero. His test comes when Dr. Robotnik returns with a new partner, Knuckles, in search of a mystical emerald that has the power to destroy civilizations. Sonic teams up with his own sidekick, Tails, and together they embark on a globe-trotting journey to find the emerald before it falls into the wrong hands.', 'adventure', NULL, 'sonicthehedgehog2', '2023', NULL, 'tt12412888');
/*!40000 ALTER TABLE `movies` ENABLE KEYS */;

-- Dumping structure for table bettermovie.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `email` varchar(256) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `lname` varchar(50) NOT NULL DEFAULT '',
  `password` text NOT NULL,
  `address` varchar(256) NOT NULL,
  `hnumber` int(11) NOT NULL,
  `zipcode` varchar(25) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `userrol` int(11) DEFAULT 0,
  KEY `id` (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table bettermovie.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `email`, `fname`, `lname`, `password`, `address`, `hnumber`, `zipcode`, `phonenumber`, `city`, `country`, `userrol`) VALUES
	(1, 'u200b', 'u200b@doverman.nl', 'Dennis', 'Overman', '$2y$10$xVpR2RYOKvlWtC401St2HuldqX6ecRxq54ZcGa1Wsy8qpfM4Ary0O', 'Benthuizenstraat', 27, '5043at', 639620036, 'Tilburg', 'Netherlands', 10);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
