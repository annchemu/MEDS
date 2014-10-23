-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2014 at 10:14 PM
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
-- Table structure for table `identification_infrared`
--

CREATE TABLE IF NOT EXISTS `identification_infrared` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_time` varchar(30) NOT NULL,
  `coa_specification` int(11) NOT NULL,
  `coa_results` int(11) NOT NULL,
  `coa_method_used` int(11) NOT NULL,
  `infrared_results` varchar(250) NOT NULL,
  `infrared_comment` text NOT NULL,
  `infrared_acceptance_criteria` varchar(250) NOT NULL,
  `equipment_make` varchar(250) NOT NULL,
  `balance_number` varchar(250) NOT NULL,
  `infrared_calculation` varchar(250) NOT NULL,
  `infrared_container` varchar(250) NOT NULL,
  `infrared_sample_container` varchar(250) NOT NULL,
  `infrared_sample_dilution` varchar(250) NOT NULL,
  `infrared_sample_weight` varchar(250) NOT NULL,
  `infrared_sample_weight_1` varchar(250) NOT NULL,
  `standard_description` varchar(250) NOT NULL,
  `potency` varchar(250) NOT NULL,
  `lot_no` varchar(250) NOT NULL,
  `id_no` varchar(250) NOT NULL,
  `infrared_standard_container` varchar(250) NOT NULL,
  `infrared_container_2` varchar(250) NOT NULL,
  `infrared_standard_weight` varchar(250) NOT NULL,
  `infrared_standard_dilution` varchar(250) NOT NULL,
  `status` int(11) NOT NULL,
  `choice` varchar(110) NOT NULL,
  `supervisor` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `further_comments` text NOT NULL,
  `assignment` int(11) NOT NULL,
  `test_request` int(11) NOT NULL,
  `analyst` varchar(250) NOT NULL,
  `date_done` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `identification_infrared`
--

INSERT INTO `identification_infrared` (`id`, `date_time`, `coa_specification`, `coa_results`, `coa_method_used`, `infrared_results`, `infrared_comment`, `infrared_acceptance_criteria`, `equipment_make`, `balance_number`, `infrared_calculation`, `infrared_container`, `infrared_sample_container`, `infrared_sample_dilution`, `infrared_sample_weight`, `infrared_sample_weight_1`, `standard_description`, `potency`, `lot_no`, `id_no`, `infrared_standard_container`, `infrared_container_2`, `infrared_standard_weight`, `infrared_standard_dilution`, `status`, `choice`, `supervisor`, `date`, `further_comments`, `assignment`, `test_request`, `analyst`, `date_done`) VALUES
(3, '', 0, 0, 0, '<p>hkgjh</p>', '<p>julyky</p>', '<p>hykjkg</p>', 'EQ006', 'CENTRIFUGE. ', '<p>cerwe</p>', '2.532', '6.343', '<p>e2rfew</p>', '45', '3.811', 'MEFEMENAMIC ACID', '', 'G0C025', 'RSTD-006', '4.2367', '2.34', '1.8967', '<p>jlh</p>', 1, '0', 'Stephen', '0000-00-00', '<p>uhoii</p>', 10, 50, 'Peter Kamau', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
