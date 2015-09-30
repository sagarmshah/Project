-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 12, 2013 at 07:28 AM
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
-- Table structure for table `index`
--

CREATE TABLE IF NOT EXISTS `index` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `aside` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `link` text NOT NULL,
  `link1` text NOT NULL,
  `link2` text NOT NULL,
  `link3` text NOT NULL,
  `link4` text NOT NULL,
  `link5` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `index`
--

INSERT INTO `index` (`id`, `aside`, `content`, `link`, `link1`, `link2`, `link3`, `link4`, `link5`) VALUES
(4, 'MI/Images/mi-players-collage-new.png', '<h3><h3><h3><h3><h3><h3><h3><h3><h3><h3><h3><h3><h3><h3><h3><h3><h3><h3><h3><h3><h3><h3><h3><h3><h3><h3><h3><h3><h3>Mumbai Indians  is a franchise cricket team representing the city of Mumbai in the Indian Premier League. The team is one of the eight founding members of the IPL in 2008. They are one of the main teams in the city, together with clubs like the Mumbai cricket team and football club Mumbai FC. The team is owned by India''s biggest conglomerate, Reliance Industries, through its 100% subsidiary IndiaWin Sports. The team''s primary home ground is the Wankhede Stadium.<br>\r\n  Mumbai Indians are currently captained by Ricky Ponting and coached by John Wright. They won the 2011 Champions League Twenty20 after beating IPL rivals Royal Challengers Bangalore by 31 runs in the final. Their best performance at the IPL came in 2010 when they finished runners-up to the Chennai Super Kings. Sachin Tendulkar is the leading run-getter of the team while Lasith Malinga is the leading wicket-taker.</h3></h3></h3></h3></h3></h3></h3></h3></h3></h3></h3></h3></h3></h3></h3></h3></h3></h3></h3></h3></h3></h3></h3></h3></h3></h3></h3></h3></h3>', 'Mumbai Indians appoints Ricky Ponting.', 'Mumbai Indians among top-150 most valuable team brands', 'Will finalise leadership over next few weeks: Mumbai Indians', 'Mumbai Indians welcomes 5 new players to its family', 'Mumbai Indians appoints John Wright as Head Coach', 'Anil Kumble joins Mumbai Indians as Chief Mentor');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
