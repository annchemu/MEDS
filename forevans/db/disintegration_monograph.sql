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
-- Table structure for table `disintegration_monograph`
--

CREATE TABLE IF NOT EXISTS `disintegration_monograph` (
  `id` varchar(250) NOT NULL,
  `disintegration_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `monograph` text NOT NULL,
  `specification` text NOT NULL,
  `test_request_id` int(11) NOT NULL,
  `assignment_id` int(11) NOT NULL,
  `test_name` varchar(250) NOT NULL,
  `analyst` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disintegration_monograph`
--

INSERT INTO `disintegration_monograph` (`id`, `disintegration_id`, `timestamp`, `monograph`, `specification`, `test_request_id`, `assignment_id`, `test_name`, `analyst`) VALUES
('', 1, '2014-09-23 19:33:00', '<p>gjkgjyg</p>', '', 50, 10, 'Disintegration', 'Peter Kamau'),
('', 1, '2014-10-01 19:26:23', '<p>jhhkhk</p>', 'hkjhkj', 50, 10, 'Disintegration', 'Peter Kamau');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
