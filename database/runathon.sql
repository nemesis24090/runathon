-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2014 at 04:45 PM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rannathon`
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
  `user_id` varchar(10) NOT NULL,
  PRIMARY KEY (`club_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club_details`
--

INSERT INTO `club_details` (`club_id`, `clubname`, `clubadd`, `clubdesc`, `noofuser`, `user_id`) VALUES
('CL12000', 'Mumbai Road Runners', 'Mumbai, Maharashtra', 'One Half Marathon + 20 miler a month in the first sunday of the month and one 10K/ 5K in the 3rd Sunday of the month at various places in Mumbai. Besides group runs on Saturdays and public holidays in Aarey Forest, Borivli National Park, Juhu Beach, Mahalakshmi Race Course, Marine Drive, Bandra Promenades. ', 100, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `column_details`
--

CREATE TABLE IF NOT EXISTS `column_details` (
  `column_id` varchar(10) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `header` varchar(100) NOT NULL,
  `timestamp` datetime NOT NULL,
  `content` varchar(500) NOT NULL,
  `status` varchar(10) NOT NULL COMMENT 'Approved/Not',
  PRIMARY KEY (`column_id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `column_details`
--

INSERT INTO `column_details` (`column_id`, `user_id`, `header`, `timestamp`, `content`, `status`) VALUES
('C120000', 'admin', 'Running Tips and Beginners Guide for Marathon', '2014-08-14 06:20:12', 'C120000.txt', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `column_reviews`
--

CREATE TABLE IF NOT EXISTS `column_reviews` (
  `review_id` varchar(10) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `column_id` varchar(10) NOT NULL,
  `timestamp` datetime NOT NULL,
  `liked` int(5) NOT NULL,
  `comment` varchar(100) NOT NULL,
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `column_reviews`
--

INSERT INTO `column_reviews` (`review_id`, `user_id`, `column_id`, `timestamp`, `liked`, `comment`) VALUES
('R120000', 'admin', 'C120000', '2014-08-16 08:17:35', 1, 'Marathon training is a challenging task, but brings lot fun and self-confidence. Finishing a maratho');

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
  `user_id` varchar(50) NOT NULL,
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
('E120200', 'Standard Chartered Mumbai Marathon', 'admin', '2014-08-30 06:30:19', 'The Standard Chartered Mumbai Marathon, abbreviated as SCMM, is an annual international marathon held in Mumbai, India, on the third Sunday of January every year. It is the largest marathon in Asia as well as the largest mass participation sporting event on the continent. It is the richest race in India with a prize pool of USD $350,000.', 'Active', 'Half-Marathon : 7km\r\nFull-Marathon : 21km', 'Mumbai CST', 'Churchgate');

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE IF NOT EXISTS `login_table` (
  `user_id` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(50) DEFAULT NULL,
  `user_type` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`user_id`, `password`, `user_type`) VALUES
('admin', '*2470C0C06DEE42FD1618BB99005ADCA2EC9D1E19', 'owner');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
  `user_id` varchar(50) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `contactno` int(10) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `option` varchar(10) NOT NULL COMMENT 'Active/Disable',
  `profilepic` varchar(50) DEFAULT NULL COMMENT 'Path of Profile Pic',
  `lastlogin` varchar(10) DEFAULT NULL,
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `username`, `contactno`, `dob`, `option`, `profilepic`, `lastlogin`) VALUES
('admin', 'Shetty', 55995599, '19111989', 'A', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
