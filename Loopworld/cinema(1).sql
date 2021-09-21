-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 10, 2019 at 03:18 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin` varchar(100) NOT NULL,
  `pass` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin`, `pass`) VALUES
('abc', 123);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `mid` int(10) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `mdirector` varchar(20) NOT NULL,
  `mcast` varchar(50) NOT NULL,
  `mdesc` varchar(1000) NOT NULL,
  `mposter` varchar(100) NOT NULL,
  `mstatus` int(10) NOT NULL,
  PRIMARY KEY (`mid`),
  KEY `mname` (`mname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`mid`, `mname`, `mdirector`, `mcast`, `mdesc`, `mposter`, `mstatus`) VALUES
(0, '', '', '', '', '', 1),
(1, 'spiderman far from home', 'spider', 'man', 'marvel', 'upload/spider man far from home.jpg', 0),
(2, 'kabir singh', 'kabir', 'singh', 'kiaraa advani', 'upload/kabir singh.jpg', 0),
(3, 'mission mangal', 'mee ', 'kkk ', 'kkm', 'upload/mission mangal.jpeg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE IF NOT EXISTS `shows` (
  `sid` int(10) NOT NULL,
  `mid` int(10) NOT NULL,
  `sdate` date NOT NULL,
  `stime` varchar(20) NOT NULL,
  PRIMARY KEY (`sid`),
  KEY `fk` (`mid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shows`
--


-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `slid` int(20) NOT NULL,
  `slname` varchar(30) NOT NULL,
  `slposter` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slid`, `slname`, `slposter`) VALUES
(1, 'ghj', 'upload/slider4.jpg'),
(2, 'hello', 'upload/slider3.jpg'),
(3, '', 'upload/avengers slider.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE IF NOT EXISTS `tickets` (
  `sid` int(10) NOT NULL,
  `seat` int(50) NOT NULL,
  `sdate` date NOT NULL,
  `stime` time NOT NULL,
  `status` varchar(10) NOT NULL,
  `class` varchar(10) NOT NULL,
  `price` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  KEY `fk1` (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(255) NOT NULL,
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `sq` varchar(100) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `uid`, `mobile`, `email`, `password`, `sq`) VALUES
('yk', 1, 123, 'yk@com', '202cb962ac59075b964b07152d234b70', 'game');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `shows`
--
ALTER TABLE `shows`
  ADD CONSTRAINT `shows_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `movies` (`mid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`sid`) REFERENCES `shows` (`sid`);
