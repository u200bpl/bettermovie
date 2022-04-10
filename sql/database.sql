-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.20-MariaDB - mariadb.org binary distribution
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

-- Dumping structure for table bettermovie.movies
CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `genre` varchar(256) NOT NULL,
  `banner` varchar(256) NOT NULL,
  `year` varchar(256) NOT NULL,
  `trailer` text DEFAULT NULL,
  `iframe` varchar(256) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table bettermovie.movies: ~6 rows (approximately)
/*!40000 ALTER TABLE `movies` DISABLE KEYS */;
INSERT INTO `movies` (`id`, `title`, `description`, `genre`, `banner`, `year`, `trailer`, `iframe`) VALUES
	(1, 'Free Guy', 'In Free Guy, a bank teller who discovers he is actually a background player in an open-world video game, decides to become the hero of his own story...', 'action/comedy', 'freeguy', '2021', 'X2m-08cOAbc', 'tt6264654'),
	(2, 'Iron Man', 'After being held captive in an Afghan cave, billionaire engineer Tony Stark creates a unique weaponized suit of armor to fight evil.', 'action/adventure', 'ironman', '2008', '8ugaeA-nMTc', 'tt0371746'),
	(3, 'Iron Man 2', 'When Tony Stark\'s world is torn apart by a formidable terrorist called the Mandarin, he starts an odyssey of rebuilding and retribution.', 'action/adventure', 'ironman2', '2010', 'BoohRoVA9WQ', 'tt1228705'),
	(4, 'Iron Man 3', 'With the world now aware of his identity as Iron Man, Tony Stark must contend with both his declining health and a vengeful mad man with ties to his father\'s legacy.', 'action/adventure', 'ironman3', '2013', 'Ke1Y3P9D0Bc', 'tt1300854'),
	(5, 'Spider-Man: No Way Home', 'With Spider-Man\'s identity now revealed, Peter asks Doctor Strange for help. When a spell goes wrong, dangerous foes from other worlds start to appear, forcing Peter to discover what it truly means to be Spider-Man.', 'action/adventure', 'spidermannowayhome', '2021', 'JfVOs4VSpmA', 'tt10872600'),
	(6, 'Scream', '25 years after a streak of brutal murders shocked the quiet town of Woodsboro, Calif., a new killer dons the Ghostface mask and begins targeting a group of teenagers to resurrect secrets from the town\'s deadly past.', 'horror/thriller', 'scream', '2022', NULL, 'tt11245972');
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
