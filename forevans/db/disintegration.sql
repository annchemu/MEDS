-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2014 at 10:13 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `meds`
--

-- --------------------------------------------------------

--
-- Table structure for table `disintegration`
--

CREATE TABLE IF NOT EXISTS `disintegration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `equipment_make` varchar(50) NOT NULL,
  `equipment_no` varchar(250) NOT NULL,
  `highest_hours` varchar(100) NOT NULL,
  `highest_mins` varchar(100) NOT NULL,
  `highest_seconds` varchar(100) NOT NULL,
  `mean_hours` varchar(30) NOT NULL,
  `mean_mins` int(11) NOT NULL,
  `mean_seconds` int(11) NOT NULL,
  `dis_medium` varchar(30) NOT NULL,
  `actual_medium` varchar(250) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `medium_comment` varchar(250) NOT NULL,
  `medium_temperature` varchar(250) NOT NULL,
  `actual_medium_temperature` varchar(250) NOT NULL,
  `medium_temperature_comment` varchar(250) NOT NULL,
  `coa_method_used` text NOT NULL,
  `coa_results` text NOT NULL,
  `coa_specification` text NOT NULL,
  `status` int(11) NOT NULL,
  `choice` varchar(250) NOT NULL,
  `supervisor` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `analyst` varchar(250) NOT NULL,
  `date_done` varchar(250) NOT NULL,
  `further_comments` varchar(250) NOT NULL,
  `assignment` int(11) NOT NULL,
  `test_request` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `disintegration`
--

INSERT INTO `disintegration` (`id`, `equipment_make`, `equipment_no`, `highest_hours`, `highest_mins`, `highest_seconds`, `mean_hours`, `mean_mins`, `mean_seconds`, `dis_medium`, `actual_medium`, `date_time`, `medium_comment`, `medium_temperature`, `actual_medium_temperature`, `medium_temperature_comment`, `coa_method_used`, `coa_results`, `coa_specification`, `status`, `choice`, `supervisor`, `date`, `analyst`, `date_done`, `further_comments`, `assignment`, `test_request`) VALUES
(19, '2', 'e', '5', '5', '5', '5', 5, 5, '5', '5', '2014-05-07 07:31:36', '5', '5', '5', 's', '5', '5', '5', 0, '', '', '', '', '', '', 8, 16),
(20, 'j', 'j', 'j', 'j', 'j', 'j', 0, 0, 'j', 'j', '2014-05-07 14:21:09', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 1, '', '', '', '', '', '', 9, 22),
(21, 'h', 'h', 'h', 'h', 'h', 'h', 0, 0, 'h', 'h', '2014-05-07 14:22:11', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 1, '', '', '', '', '', '', 9, 22),
(22, 'EQ005', '0', '7', '7', '7', '7', 7, 7, '7', '7', '2014-10-01 19:31:35', '7', '7', '7', '7', '0', '0', '0', 1, 'hhg', '0', '10/14/2014', 'Peter Kamau', '10/14/2014', '<p>hkjwshkhdkhal</p>', 10, 50);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
