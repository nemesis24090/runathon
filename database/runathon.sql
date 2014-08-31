-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2014 at 07:52 PM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `runathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `club_details`
--

CREATE TABLE IF NOT EXISTS `club_details` (
  `club_id` varchar(10) NOT NULL,
  `clubname` varchar(50) NOT NULL,
  `clubadd` varchar(100) NOT NULL,
  `clubdesc` varchar(500) NOT NULL,
  `noofuser` int(5) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  PRIMARY KEY (`club_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club_details`
--

INSERT INTO `club_details` (`club_id`, `clubname`, `clubadd`, `clubdesc`, `noofuser`, `user_id`) VALUES
('CL12000', 'Mumbai Road Runners', 'Mumbai, Maharashtra', 'One Half Marathon + 20 miler a month in the first sunday of the month and one 10K/ 5K in the 3rd Sunday of the month at various places in Mumbai. Besides group runs on Saturdays and public holidays in Aarey Forest, Borivli National Park, Juhu Beach, Mahalakshmi Race Course, Marine Drive, Bandra Promenades. ', 100, 'shettysagar2492@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `column_comment`
--

CREATE TABLE IF NOT EXISTS `column_comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) NOT NULL,
  `column_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `content` varchar(500) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `column_comment`
--

INSERT INTO `column_comment` (`comment_id`, `user_id`, `column_id`, `timestamp`, `content`) VALUES
(1, 'cool.sagar2007@gmail.com', 1, '2014-08-31 14:00:08', 'good article to read'),
(2, 'cool.sagar2007@gmail.com', 1, '2014-08-31 12:22:37', 'testing'),
(3, 'cool.sagar2007@gmail.com', 1, '2014-08-31 12:23:58', 'testin1'),
(4, 'cool.sagar2007@gmail.com', 1, '2014-08-31 12:25:56', 'testing2'),
(5, 'cool.sagar2007@gmail.com', 1, '2014-08-31 12:27:47', 'testing3'),
(6, 'cool.sagar2007@gmail.com', 1, '2014-08-31 12:28:11', 'testing 4'),
(7, 'cool.sagar2007@gmail.com', 1, '2014-08-31 12:28:28', 'adasd'),
(8, 'cool.sagar2007@gmail.com', 1, '2014-08-31 12:39:46', 'asdsadasdsad'),
(9, 'cool.sagar2007@gmail.com', 1, '2014-08-31 12:41:34', 'asdsadasdsad'),
(10, 'cool.sagar2007@gmail.com', 1, '2014-08-31 12:42:49', 'test2'),
(11, 'cool.sagar2007@gmail.com', 1, '2014-08-31 12:43:30', 'wereww'),
(12, 'cool.sagar2007@gmail.com', 1, '2014-08-31 12:44:05', 'asdsad'),
(13, 'cool.sagar2007@gmail.com', 1, '2014-08-31 12:44:57', 'asdasd'),
(14, 'cool.sagar2007@gmail.com', 1, '2014-08-31 12:50:41', 'testing11'),
(15, 'cool.sagar2007@gmail.com', 1, '2014-08-31 12:54:01', 'final test');

-- --------------------------------------------------------

--
-- Table structure for table `column_details`
--

CREATE TABLE IF NOT EXISTS `column_details` (
  `column_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `header` varchar(100) NOT NULL,
  `timestamp` datetime NOT NULL,
  `content` varchar(500) NOT NULL,
  `status` varchar(10) NOT NULL COMMENT 'Approved/Not',
  PRIMARY KEY (`column_id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `column_details`
--

INSERT INTO `column_details` (`column_id`, `user_id`, `header`, `timestamp`, `content`, `status`) VALUES
(1, 'shettysagar2492@gmail.com', 'Running Tips and Beginners Guide for Marathon', '2014-08-14 06:20:12', '1.txt', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `column_reviews`
--

CREATE TABLE IF NOT EXISTS `column_reviews` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) NOT NULL,
  `column_id` int(11) NOT NULL,
  `timestamp` datetime NOT NULL,
  `liked` int(5) NOT NULL,
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `column_reviews`
--

INSERT INTO `column_reviews` (`review_id`, `user_id`, `column_id`, `timestamp`, `liked`) VALUES
(2, 'shettyshilpa@gmail.com', 1, '2014-08-31 16:30:39', 1),
(4, 'cool.sagar2007@gmail.com', 1, '2014-08-31 19:43:50', 1);

-- --------------------------------------------------------

--
-- Table structure for table `email_subscription`
--

CREATE TABLE IF NOT EXISTS `email_subscription` (
  `email_id` varchar(100) NOT NULL,
  PRIMARY KEY (`email_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_subscription`
--

INSERT INTO `email_subscription` (`email_id`) VALUES
('shettyashwin19@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `event_details`
--

CREATE TABLE IF NOT EXISTS `event_details` (
  `event_id` varchar(10) NOT NULL,
  `header` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `timestamp` datetime NOT NULL,
  `description` varchar(500) NOT NULL,
  `status` varchar(10) NOT NULL COMMENT 'Appro',
  `events` varchar(100) NOT NULL,
  `startpoint` varchar(50) NOT NULL,
  `endpoint` varchar(50) NOT NULL,
  PRIMARY KEY (`event_id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_details`
--

INSERT INTO `event_details` (`event_id`, `header`, `user_id`, `timestamp`, `description`, `status`, `events`, `startpoint`, `endpoint`) VALUES
('E120200', 'Standard Chartered Mumbai Marathon', 'shettysagar2492@gmail.com', '2014-08-30 06:30:19', 'The Standard Chartered Mumbai Marathon, abbreviated as SCMM, is an annual international marathon held in Mumbai, India, on the third Sunday of January every year. It is the largest marathon in Asia as well as the largest mass participation sporting event on the continent. It is the richest race in India with a prize pool of USD $350,000.', 'Active', 'Half-Marathon : 7km\r\nFull-Marathon : 21km', 'Mumbai CST', 'Churchgate');

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE IF NOT EXISTS `login_table` (
  `user_id` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`user_id`, `password`, `user_type`) VALUES
('cool.sagar2007@gmail.com', '41ed44e3038dbeee7d2ffaa7f51d8a4b', NULL),
('shettysagar2492@gmail.com', '*2470C0C06DEE42FD1618BB99005ADCA2EC9D1E19', 'owner'),
('shettyshilpa@gmail.com', '02a08433d06bdd4161f27179de60584c', NULL),
('test1@abcd.xy', '098f6bcd4621d373cade4e832627b4f6', NULL),
('test@abcd.xy', '098f6bcd4621d373cade4e832627b4f6', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
  `user_id` varchar(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `contactno` int(10) DEFAULT NULL,
  `dob` varchar(10) DEFAULT NULL,
  `option` varchar(10) NOT NULL COMMENT 'Active/Disable',
  `profilepic` varchar(50) DEFAULT NULL COMMENT 'Path of Profile Pic',
  `lastlogin` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `name`, `contactno`, `dob`, `option`, `profilepic`, `lastlogin`) VALUES
('cool.sagar2007@gmail.com', 'Sagar', NULL, NULL, 'A', NULL, NULL),
('shettysagar2492@gmail.com', 'Sagar Shetty', 55995599, '19111989', 'A', NULL, NULL),
('shettyshilpa@gmail.com', 'Shilpa', NULL, NULL, 'A', NULL, NULL),
('test1@abcd.xy', 'test1', NULL, NULL, 'A', NULL, NULL),
('test@abcd.xy', 'test', NULL, NULL, 'A', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
