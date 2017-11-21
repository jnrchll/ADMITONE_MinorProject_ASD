-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 21, 2017 at 10:48 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinemareservationdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `csinfo`
--

DROP TABLE IF EXISTS `csinfo`;
CREATE TABLE IF NOT EXISTS `csinfo` (
  `movieid` int(11) NOT NULL AUTO_INCREMENT,
  `movietitle` varchar(100) NOT NULL,
  `imgfilename` varchar(100) NOT NULL,
  PRIMARY KEY (`movieid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `csinfo`
--

INSERT INTO `csinfo` (`movieid`, `movietitle`, `imgfilename`) VALUES
(2, 'Wonder', 'wonder.jpg'),
(3, 'Coco', 'coco.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `moviesinfo`
--

DROP TABLE IF EXISTS `moviesinfo`;
CREATE TABLE IF NOT EXISTS `moviesinfo` (
  `movieid` int(11) NOT NULL AUTO_INCREMENT,
  `movietitle` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `imgfilename` varchar(100) DEFAULT NULL,
  `cinema` enum('1','2','3','4') NOT NULL,
  PRIMARY KEY (`movieid`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moviesinfo`
--

INSERT INTO `moviesinfo` (`movieid`, `movietitle`, `description`, `imgfilename`, `cinema`) VALUES
(1, 'Thor: Ragnarok', 'Imprisoned on the other side of the universe,\r\nthe mighty Thor finds himself in a deadly gladiatorial\r\ncontest that pits him against the Hulk, his former ally\r\nand fellow Avenger. Thor\'s quest for survival leads him\r\nin a race against time to prevent the all-powerful Hela\r\nfrom destroying his home world and the Asgardian civilization.', 'thor.jpg', '1'),
(11, 'Bad Genius', 'Bad Genius Test', 'badgenius.jpg', '2'),
(13, 'geostorm', 'geostorm', 'geostorm.jpg', '3');

-- --------------------------------------------------------

--
-- Table structure for table `paymentinfo1`
--

DROP TABLE IF EXISTS `paymentinfo1`;
CREATE TABLE IF NOT EXISTS `paymentinfo1` (
  `usersID` int(11) NOT NULL AUTO_INCREMENT,
  `creditcardbank` varchar(100) NOT NULL,
  `creditcardnum` varchar(100) NOT NULL,
  PRIMARY KEY (`usersID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paymentinfo1`
--

INSERT INTO `paymentinfo1` (`usersID`, `creditcardbank`, `creditcardnum`) VALUES
(1, 'BDO', '1312312');

-- --------------------------------------------------------

--
-- Table structure for table `ticketreservation`
--

DROP TABLE IF EXISTS `ticketreservation`;
CREATE TABLE IF NOT EXISTS `ticketreservation` (
  `ticketreservationID` int(11) NOT NULL AUTO_INCREMENT,
  `seatnum` int(11) NOT NULL,
  `cinema` int(11) NOT NULL,
  `movieid` int(11) NOT NULL,
  `time` enum('10:00AM-12:00PM','01:00PM-03:00PM','04:00PM-06:00PM','07:00PM-09:00PM') NOT NULL,
  `reservedby_userID` int(11) NOT NULL,
  `customerfname` varchar(300) NOT NULL,
  `customerlname` varchar(100) NOT NULL,
  `customerage` int(11) NOT NULL,
  `contactnum` varchar(100) NOT NULL,
  PRIMARY KEY (`ticketreservationID`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticketreservation`
--

INSERT INTO `ticketreservation` (`ticketreservationID`, `seatnum`, `cinema`, `movieid`, `time`, `reservedby_userID`, `customerfname`, `customerlname`, `customerage`, `contactnum`) VALUES
(46, 2, 1, 1, '10:00AM-12:00PM', 18, 'Abby', 'Graza', 11, '423432'),
(48, 33, 1, 1, '10:00AM-12:00PM', 15, 'Jean', 'Lacierda', 19, '12136521'),
(50, 96, 1, 1, '01:00PM-03:00PM', 18, 'Shann', 'Locsin', 19, '2443413'),
(51, 41, 1, 1, '10:00AM-12:00PM', 25, 'ac', 'g', 11, '32412'),
(53, 45, 1, 1, '10:00AM-12:00PM', 22, 'Abby', 'Graza', 20, '12133');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `emailaddress` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `usertype` enum('administrator','user') NOT NULL DEFAULT 'user',
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `firstname`, `lastname`, `emailaddress`, `password`, `usertype`) VALUES
(16, 'arya', 'noone', 'diniris@gmail.com', 'password', 'user'),
(15, 'q', 'q', 'qp', 'qp', 'administrator'),
(14, 'q', 'q', 'q', '', 'user'),
(13, 'zimmy', 'zim', 'blahblah', 'as', 'administrator'),
(12, 'desiree', 'pedida', 'des@gmail.com', 'des', 'user'),
(11, 'Abby', 'ggggg', 'athrisha.graza02@gmail.com', 'abbythrisha', 'user'),
(17, 'aaaa', 'gggg', 'a@g.com', 'aa', 'administrator'),
(18, 'ab', 'gr', 'ab', 'aa', 'user'),
(19, 'jackie', 'chan', 'jackie@gmail.com', 'jackie', 'administrator'),
(20, 'desiree', 'pedida', 'des', 'as', 'user'),
(21, 'ac', 'gelicame', 'ac@gmail.com', 'acgelicame', 'user'),
(22, 'a', 'g', 'a@g', 'aa', 'user'),
(23, 'ab', 'g', 'aa@g', 'aa', 'user'),
(24, 'zim', 'l', 'zl@g', 'aa', 'user'),
(25, 'des', 'pedida', 'des@g', 'asd', 'administrator'),
(26, '*', '*', 'sada@g', 'aa', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
