-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2017 at 12:43 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `moviesinfo`
--

CREATE TABLE `moviesinfo` (
  `movieid` int(11) NOT NULL,
  `movietitle` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `imgfilename` varchar(100) DEFAULT NULL,
  `cinema` enum('1','2','3','4') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moviesinfo`
--

INSERT INTO `moviesinfo` (`movieid`, `movietitle`, `description`, `imgfilename`, `cinema`) VALUES
(1, 'Thor: Ragnarok', 'Imprisoned on the other side of the universe,\r\nthe mighty Thor finds himself in a deadly gladiatorial\r\ncontest that pits him against the Hulk, his former ally\r\nand fellow Avenger. Thor''s quest for survival leads him\r\nin a race against time to prevent the all-powerful Hela\r\nfrom destroying his home world and the Asgardian civilization.', 'thor.jpg', '1'),
(2, 'Bad Genius', 'A genius level high school student\r\nmakes money after developing elaborate\r\nmethods to help other students cheat.', 'badgenius.jpg', '2'),
(3, 'Geostorm test', 'Geostorm test', 'geostorm.jpg', '4'),
(6, 'The Foreigner', 'The Foreigner', 'theforeigner.jpg', '3');

-- --------------------------------------------------------

--
-- Table structure for table `paymentinfo1`
--

CREATE TABLE `paymentinfo1` (
  `usersID` int(11) NOT NULL,
  `creditcardbank` varchar(100) NOT NULL,
  `creditcardnum` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paymentinfo1`
--

INSERT INTO `paymentinfo1` (`usersID`, `creditcardbank`, `creditcardnum`) VALUES
(1, 'BDO', '1312312');

-- --------------------------------------------------------

--
-- Table structure for table `ticketreservation`
--

CREATE TABLE `ticketreservation` (
  `ticketreservationID` int(11) NOT NULL,
  `seatnum` int(11) NOT NULL,
  `cinema` int(11) NOT NULL,
  `movieid` int(11) NOT NULL,
  `time` enum('10:00AM-12:00PM','01:00PM-03:00PM','04:00PM-06:00PM','07:00PM-09:00PM') NOT NULL,
  `reservedby_userID` int(11) NOT NULL,
  `customerfname` varchar(300) NOT NULL,
  `customerlname` varchar(100) NOT NULL,
  `customerage` int(11) NOT NULL,
  `contactnum` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticketreservation`
--

INSERT INTO `ticketreservation` (`ticketreservationID`, `seatnum`, `cinema`, `movieid`, `time`, `reservedby_userID`, `customerfname`, `customerlname`, `customerage`, `contactnum`) VALUES
(1, 4, 2, 2, '01:00PM-03:00PM', 15, 'anna', 'graza', 11, '21312932'),
(6, 43, 1, 1, '10:00AM-12:00PM', 15, 'anna', 'graza', 28, '09568411783'),
(29, 9, 1, 1, '04:00PM-06:00PM', 18, 'abby', 'graza', 30, '92183981'),
(28, 75, 1, 1, '10:00AM-12:00PM', 18, 'an', 'gr', 33, '334234234'),
(30, 7, 1, 1, '10:00AM-12:00PM', 18, 'sdfasf', 'sasda', 3, '3423423'),
(31, 14, 2, 2, '07:00PM-09:00PM', 18, 'elena', 'gilbert', 24, '1243412312'),
(32, 22, 1, 1, '10:00AM-12:00PM', 15, 'trt', 'wetwe', 33, '53252352');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `emailaddress` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `usertype` enum('administrator','user') NOT NULL DEFAULT 'user'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `firstname`, `lastname`, `age`, `emailaddress`, `password`, `usertype`) VALUES
(16, 'arya', 'noone', 12, 'diniris@gmail.com', 'password', 'user'),
(15, 'q', 'q', 11, 'qp', 'qp', 'administrator'),
(14, 'q', 'q', 12, 'q', '', 'user'),
(13, 'zimmy', 'zim', 13, 'blahblah', 'as', 'user'),
(12, 'desiree', 'pedida', 19, 'des@gmail.com', 'des', 'user'),
(11, 'Abby', 'ggggg', 20, 'athrisha.graza02@gmail.com', 'abbythrisha', 'user'),
(17, 'aaaa', 'gggg', 32, 'a@g.com', 'aa', 'administrator'),
(18, 'ab', 'gr', 22, 'ab', 'aa', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `moviesinfo`
--
ALTER TABLE `moviesinfo`
  ADD PRIMARY KEY (`movieid`);

--
-- Indexes for table `paymentinfo1`
--
ALTER TABLE `paymentinfo1`
  ADD PRIMARY KEY (`usersID`);

--
-- Indexes for table `ticketreservation`
--
ALTER TABLE `ticketreservation`
  ADD PRIMARY KEY (`ticketreservationID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `moviesinfo`
--
ALTER TABLE `moviesinfo`
  MODIFY `movieid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `paymentinfo1`
--
ALTER TABLE `paymentinfo1`
  MODIFY `usersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ticketreservation`
--
ALTER TABLE `ticketreservation`
  MODIFY `ticketreservationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
