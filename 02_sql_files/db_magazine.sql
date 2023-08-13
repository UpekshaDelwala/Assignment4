-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 13, 2023 at 02:04 PM
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
-- Database: `db_magazine`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_subscriber`
--

DROP TABLE IF EXISTS `tb_subscriber`;
CREATE TABLE IF NOT EXISTS `tb_subscriber` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `bdate` date NOT NULL,
  `whatsapp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comments` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_subscriber`
--

INSERT INTO `tb_subscriber` (`id`, `name`, `bdate`, `whatsapp`, `email`, `comments`) VALUES
(1, 'Pushpamali Upeksha Delwala', '1999-08-15', '719165933', 'maliupeksha99@gmail.com', 'sfjslfjsljflsjfsfsdndlf'),
(2, 'Upeksha', '1999-08-15', '719165933', 'malika@gmail.com', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
