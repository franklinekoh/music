-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2015 at 02:18 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `music_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_imgs`
--

CREATE TABLE IF NOT EXISTS `event_imgs` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `img_url` varchar(200) NOT NULL,
  `img_info` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `event_imgs`
--

INSERT INTO `event_imgs` (`id`, `img_url`, `img_info`, `link`) VALUES
(1, 'Img3.jpg', '042 X-FACTOR ', 'upcoming.php'),
(2, 'gos.jpg', '042 GOSPEL RIDE', '');

-- --------------------------------------------------------

--
-- Table structure for table `img_slider`
--

CREATE TABLE IF NOT EXISTS `img_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_url` varchar(30) NOT NULL,
  `img_info` varchar(200) NOT NULL,
  `links` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `img_slider`
--

INSERT INTO `img_slider` (`id`, `img_url`, `img_info`, `links`) VALUES
(1, 'img1.jpg', 'The Image of the century.', ''),
(2, 'img5.jpg', 'J_Rock:: We rock music', ''),
(3, 'gos.jpg', '042 GOSPEL RIDE', 'event.php'),
(4, 'img4.jpg', '042 X-FACTOR:::', 'www.music.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `other_name` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(200) NOT NULL,
  `passport` varchar(200) NOT NULL,
  `userid` varchar(200) NOT NULL,
  `suspended` int(11) DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL,
  `verified` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `other_name`, `dob`, `email`, `password`, `passport`, `userid`, `suspended`, `deleted`, `verified`) VALUES
(1, 'Chinaza', 'Gideon', '2015-05-14', 'chinaza.gideon@yahoo.co.uk', 'wel25come', 'chinaza.jpg', 'wel25coome', 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
