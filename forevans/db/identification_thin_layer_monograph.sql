-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2014 at 09:20 PM
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
-- Table structure for table `identification_thin_layer_monograph`
--

CREATE TABLE IF NOT EXISTS `identification_thin_layer_monograph` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identification_thin_layer_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `monograph` text NOT NULL,
  `specification` varchar(250) NOT NULL,
  `spaecification` varchar(250) NOT NULL,
  `test_request_id` int(11) NOT NULL,
  `assignment_id` int(11) NOT NULL,
  `test_name` varchar(250) NOT NULL,
  `analyst` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `identification_thin_layer_monograph`
--

INSERT INTO `identification_thin_layer_monograph` (`id`, `identification_thin_layer_id`, `timestamp`, `monograph`, `specification`, `spaecification`, `test_request_id`, `assignment_id`, `test_name`, `analyst`) VALUES
(1, 1, '2014-10-01 16:01:59', '<p>mbhj</p>', 'jgh', '', 50, 10, 'Identification: Thin Layer', 'Peter Kamau');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
