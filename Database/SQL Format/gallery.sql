-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 12, 2013 at 07:27 AM
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
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `link1` text NOT NULL,
  `link2` text NOT NULL,
  `link3` text NOT NULL,
  `link4` text NOT NULL,
  `link5` text NOT NULL,
  `link6` text NOT NULL,
  `link7` text NOT NULL,
  `link8` text NOT NULL,
  `link9` text NOT NULL,
  `link10` text NOT NULL,
  `link11` text NOT NULL,
  `link12` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `link1`, `link2`, `link3`, `link4`, `link5`, `link6`, `link7`, `link8`, `link9`, `link10`, `link11`, `link12`) VALUES
(1, 'MI/Images/MI Gallery/thumbs/0.jpg', 'MI/Images/MI Gallery/thumbs/1.jpg', 'MI/Images/MI Gallery/thumbs/4.jpg', 'MI/Images/MI Gallery/thumbs/5.jpg', 'MI/Images/MI Gallery/thumbs/6.jpg', 'MI/Images/MI Gallery/thumbs/7.jpg', 'MI/Images/MI Gallery/thumbs/14.jpg', 'MI/Images/MI Gallery/thumbs/9.jpg', 'MI/Images/MI Gallery/thumbs/10.jpg', 'MI/Images/MI Gallery/thumbs/11.jpg', 'MI/Images/MI Gallery/thumbs/12.jpg', 'MI/Images/MI Gallery/thumbs/13.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
