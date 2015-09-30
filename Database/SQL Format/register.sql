-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 12, 2013 at 07:32 AM
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
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(24) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `hashed_password` varchar(40) NOT NULL,
  `phone` int(20) NOT NULL,
  `team` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstname`, `lastname`, `address`, `email`, `hashed_password`, `phone`, `team`) VALUES
(13, 'SAY', 'ipl', 'Model Town', 'sayipl@yahoo.in', 'b35469faf8d25699622fa079aa8cca560ecee63b', 2147483647, 'RCB'),
(14, 'Anmol', 'Trikha', 'aaa', 'anmoltrikha@hotmail.com', 'c5fd52daee42457825324c1c5d74d207729636da', 2147483647, 'MI'),
(15, 'Sagar', 'Shah', 'gaaanv', 'sagarshah@gaanv.com', '4b2c31ef64eb1aaa9a9aca3147ec6f69f8ab59fc', 993456788, 'RCB'),
(18, 'Admin', 'Admin', 'any address', 'admin@admin.com', 'd4e8e6deaa7b1f8381e09e3e6b83e36f0b681c5c', 987654321, 'staff'),
(19, 'Yash', 'Thakker', 'Model Town', 'yashthakker@hotmail.com', 'c86aec77df6e5c72c858678431d348a330514e8d', 2147483647, 'MI');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
