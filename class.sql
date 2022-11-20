-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 20, 2022 at 02:46 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `class`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `image` blob,
  `createdTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `category`, `name`, `description`, `image`, `createdTime`) VALUES
(1, '8', 'aaaaaaaaaaa', 'aaaaaaaaaaa', NULL, '2022-11-19 17:37:29'),
(2, '10', 'sfdsfds', 'sdfdsf', NULL, '2022-11-19 17:44:49'),
(3, '9', 'aaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaa', NULL, '2022-11-19 17:45:30'),
(4, '8', 'dfdsfs', 'sdfds', NULL, '2022-11-19 17:48:13'),
(5, '8', 'fdsfds', 'sdf', NULL, '2022-11-19 17:48:43'),
(6, '10', 'aaaaaaaaaaaa', 'sdfds', NULL, '2022-11-19 17:49:22'),
(7, '7', 'sdfdsf', 'sdfds', NULL, '2022-11-19 17:50:53'),
(8, '10', 'gsdf', 'sdfdsf', NULL, '2022-11-19 17:52:39'),
(9, '7', 'aaaaaaaaaa', 'aaaaaaaaaaaaaa', NULL, '2022-11-19 17:53:03'),
(10, '8', 'aaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaa', NULL, '2022-11-19 17:55:03'),
(11, '7', 'aaaaaaaaaaa', 'aaaaaaaaaaa', NULL, '2022-11-19 17:55:49');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `description` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`) VALUES
(25, 'sdf', 'dsfdsfs'),
(32, 'gggggggggggggggggggggggggggggggggggggggggggggggggggg', 'ggggggggggggggggggggggggg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`) VALUES
(1, 'حسن', 'hasan_vajdi', '1f01b870343caf2449904e429a1b6cf5'),
(2, 'هادی', 'hadi_hadi', '29e116b6c4e4549e846ca2819234626a'),
(3, 'علی', 'ali_ahmadi', 'd58e3582afa99040e27b92b13c8f2280');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
