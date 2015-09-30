-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 12, 2013 at 07:29 AM
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
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `aside` varchar(50) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `aside`, `content`) VALUES
(1, 'MI/Images/mi-players-collage-new.png', '                                    <tr>\r\n    <th scope="col"><h2>MATCH</h2></th>\r\n    <th scope="col"><h2>DATE</h2></th>\r\n    <th scope="col"><h2>TIME</h2></th>\r\n  </tr>\r\n  <tr>\r\n    <td>RCB vs MI</td>\r\n    <td>04/04/2013</td>\r\n    <td>8:00pm</td>\r\n  </tr>\r\n  <tr>\r\n    <td>CSK vs MI</td>\r\n    <td>06/04/2013</td>\r\n    <td>8:00pm</td>\r\n  </tr>\r\n  <tr>\r\n    <td>MI vs DD</td>\r\n    <td>09/04/2013</td>\r\n    <td>8:00pm</td>\r\n  </tr>\r\n  <tr>\r\n    <td>MI vs PWI</td>\r\n    <td>13/04/2013</td>\r\n    <td>4:00pm</td>\r\n  </tr>\r\n<tr>\r\n    <td>RR vs MI</td>\r\n    <td>17/04/2013</td>\r\n    <td>8:00pm</td>\r\n  </tr>\r\n<tr>\r\n    <td>DD vs MI</td>\r\n    <td>21/04/2013</td>\r\n    <td>4:00pm</td>\r\n  </tr>\r\n<tr>\r\n    <td>KKR vs MI</td>\r\n    <td>24/04/2013</td>\r\n    <td>8:00pm</td>\r\n  </tr>\r\n<tr>\r\n    <td>MI vs RCB</td>\r\n    <td>27/04/2013</td>\r\n    <td>8:00pm</td>\r\n  </tr>\r\n<tr>\r\n    <td>MI vs KXIP</td>\r\n    <td>29/04/2013</td>\r\n    <td>8:00pm</td>\r\n  </tr>\r\n<tr>\r\n    <td>HYD vs MI</td>\r\n    <td>01/05/2013</td>\r\n    <td>4:00pm</td>\r\n  </tr>\r\n<tr>\r\n    <td>MI vs CSK</td>\r\n    <td>05/05/2013</td>\r\n    <td>4:00pm</td>\r\n  </tr>\r\n<tr>\r\n    <td>MI vs KKR</td>\r\n    <td>07/05/2013</td>\r\n    <td>8:00pm</td>\r\n  </tr>\r\n<tr>\r\n    <td>PWI vs MI</td>\r\n    <td>11/05/2013</td>\r\n    <td>4:00pm</td>\r\n  </tr>\r\n<tr>\r\n    <td>MI vs HYD</td>\r\n    <td>13/05/2013</td>\r\n    <td>8:00pm</td>\r\n  </tr>\r\n<tr>\r\n    <td>MI vs RR</td>\r\n    <td>15/05/2013</td>\r\n    <td>8:00pm</td>\r\n  </tr>\r\n<tr>\r\n    <td>KXIP vs MI</td>\r\n    <td>18/05/2013</td>\r\n    <td>4:00pm</td>\r\n  </tr>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
