-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 12, 2013 at 07:30 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sayipl1`
--

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `title1` varchar(50) NOT NULL,
  `title2` varchar(50) NOT NULL,
  `jerseysize` text NOT NULL,
  `capsize` text NOT NULL,
  `jerseyimage` text NOT NULL,
  `capimage` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `title1`, `title2`, `jerseysize`, `capsize`, `jerseyimage`, `capimage`) VALUES
(2, 'Mumbai Indians  Jersey', 'Mumbai Indians  Cap', '<option value="Small">SMALL $10.00 USD</option>\r\n	<option value="Medium">MEDIUM $15.00 USD</option>\r\n	<option value="Large">LARGE $20.00 USD</option>', '<option value="REGULAR">REGULAR $5.00 USD</option>', 'MI/Images/Mumbai Indians Merchandises/mumbai-indians-jersey.jpg', 'MI/Images/Mumbai Indians Merchandises/mumbai-indians-cap.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
