-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2014 at 09:19 PM
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
-- Table structure for table `identification_chemical_method`
--

CREATE TABLE IF NOT EXISTS `identification_chemical_method` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `chemical_test` varchar(250) NOT NULL,
  `equipment_number` varchar(250) NOT NULL,
  `equipment_make` varchar(250) NOT NULL,
  `sample_container` varchar(250) NOT NULL,
  `container` varchar(250) NOT NULL,
  `sample_weight` varchar(250) NOT NULL,
  `sample_dilution` varchar(250) NOT NULL,
  `standard_description` varchar(250) NOT NULL,
  `potency` varchar(250) NOT NULL,
  `lot_no` varchar(250) NOT NULL,
  `id_no` varchar(250) NOT NULL,
  `standard_container_2` varchar(250) NOT NULL,
  `container_2` varchar(250) NOT NULL,
  `standard_weight_2` varchar(250) NOT NULL,
  `standard_container_3` varchar(250) NOT NULL,
  `container_3` varchar(250) NOT NULL,
  `standard_weight_3` varchar(250) NOT NULL,
  `standard_container_4` varchar(250) NOT NULL,
  `reagent_description` varchar(250) NOT NULL,
  `reagent_weight_container_1` varchar(250) NOT NULL,
  `reagent_container_1` varchar(250) NOT NULL,
  `reagent_weight_1` varchar(250) NOT NULL,
  `reagent_dilution` varchar(250) NOT NULL,
  `standard_dilution` varchar(250) NOT NULL,
  `calculation_mobile` text NOT NULL,
  `observation` text NOT NULL,
  `acceptance_criteria` varchar(250) NOT NULL,
  `results` varchar(250) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `test_request` int(11) NOT NULL,
  `assignment` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `choice` varchar(250) NOT NULL,
  `supervisor` varchar(250) NOT NULL,
  `analyst` varchar(250) NOT NULL,
  `date_done` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `further_comments` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `identification_chemical_method`
--

INSERT INTO `identification_chemical_method` (`id`, `timestamp`, `chemical_test`, `equipment_number`, `equipment_make`, `sample_container`, `container`, `sample_weight`, `sample_dilution`, `standard_description`, `potency`, `lot_no`, `id_no`, `standard_container_2`, `container_2`, `standard_weight_2`, `standard_container_3`, `container_3`, `standard_weight_3`, `standard_container_4`, `reagent_description`, `reagent_weight_container_1`, `reagent_container_1`, `reagent_weight_1`, `reagent_dilution`, `standard_dilution`, `calculation_mobile`, `observation`, `acceptance_criteria`, `results`, `comment`, `test_request`, `assignment`, `status`, `choice`, `supervisor`, `analyst`, `date_done`, `date`, `further_comments`) VALUES
(1, '2014-10-01 18:27:37', 'utui', 'TP PAN BALANCE', 'EQ004', '8', '6', '2', '<p>hyhk</p>', 'MEFEMENAMIC ACID', '', 'G0C025', 'RSTD-006', '8', '4', '4', '', '', '', '', 'CHLOROFORM', '7', '4', '3', '<p>gjj</p>', '<p>gjhgjj</p>', '<p>hgh</p>', '<p>hhgjh</p>', '<p>hgjhj</p>', '<p>jhjkg</p>', '<p>jkhkgkh</p>', 50, 10, 1, 'Complies', 'Watson', 'Peter Kamau', '01/10/2014', '0000-00-00', '<p>njhl</p>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
