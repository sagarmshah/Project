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
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `aside` varchar(50) NOT NULL,
  `title` text NOT NULL,
  `subtitle` text NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `aside`, `title`, `subtitle`, `content`) VALUES
(1, 'MI/Images/old-collage.png', 'Ricky Ponting to lead Mumbai Indians <br/>', 'Mumbai Indians have appointed former Australia captain Ricky Ponting as their captain for the sixth edition of IPL, which starts from April 3.', '<p>Ponting, who retired from international cricket at the end of 2012, was bought at the base price of $400,000 during the player auction earlier this month. Despite the buzz circulating around Sachin Tendulkar to be re-appointed as the captain ahead of the auction, the new Mumbai think-tank of mentor Anil Kumble and coach John Wright have zeroed-in on Ponting to lead the side.</p>\r\n\r\n<p>Mumbai explained the change of heart through a media statement. "Ricky has a lot of experience to lead a competitive and a high-profile side like Mumbai Indians in the IPL," Kumble said. "Sachin readily agreed to my suggestion that Mumbai Indians is best served when he leads the batting unburdened by the rigours of captaincy. It was our idea (Sachin and mine) to bring in Ricky as the captain of the Mumbai Indians."</p>\r\n\r\n<p>However, Mumbai''s tactics of creating a buzz around Tendulkar to be re-instated as the captain were termed as an "eyewash" ahead of the auction.</p>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
