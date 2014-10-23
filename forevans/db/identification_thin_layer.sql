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
-- Table structure for table `identification_thin_layer`
--

CREATE TABLE IF NOT EXISTS `identification_thin_layer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `equipment_number` varchar(250) NOT NULL,
  `equipment_make` varchar(120) NOT NULL,
  `sample_weight_container` varchar(250) NOT NULL,
  `sample_container` varchar(250) NOT NULL,
  `sample_weight` varchar(250) NOT NULL,
  `sample_dilution` varchar(250) NOT NULL,
  `potency` varchar(250) NOT NULL,
  `lot_no` varchar(250) NOT NULL,
  `id_no` varchar(250) NOT NULL,
  `standard_container` varchar(250) NOT NULL,
  `container` varchar(250) NOT NULL,
  `standard_weight` varchar(250) NOT NULL,
  `standard_dilution` varchar(250) NOT NULL,
  `standard_description_1` varchar(250) NOT NULL,
  `standard_description_2` varchar(250) NOT NULL,
  `standard_description_3` varchar(250) NOT NULL,
  `standard_description_4` varchar(250) NOT NULL,
  `standard_container_2` varchar(250) NOT NULL,
  `container_2` varchar(250) NOT NULL,
  `standard_weight_2` varchar(250) NOT NULL,
  `standard_container_3` varchar(250) NOT NULL,
  `container_3` varchar(250) NOT NULL,
  `standard_weight_3` varchar(250) NOT NULL,
  `standard_container_4` varchar(250) NOT NULL,
  `container_4` varchar(250) NOT NULL,
  `standard_weight_4` varchar(250) NOT NULL,
  `reagent_1` varchar(250) NOT NULL,
  `reagent_2` varchar(250) NOT NULL,
  `reagents_3` varchar(250) NOT NULL,
  `reagents_4` varchar(250) NOT NULL,
  `reagent_weight_container_1` varchar(250) NOT NULL,
  `reagent_container_1` varchar(250) NOT NULL,
  `reagent_weight_1` varchar(250) NOT NULL,
  `standard_container_6` varchar(250) NOT NULL,
  `container_6` varchar(250) NOT NULL,
  `standard_weight_6` varchar(250) NOT NULL,
  `standard_container_7` varchar(250) NOT NULL,
  `container_7` varchar(250) NOT NULL,
  `standard_weight_7` varchar(250) NOT NULL,
  `standard_container_8` varchar(250) NOT NULL,
  `container_8` varchar(250) NOT NULL,
  `standard_weight_8` varchar(250) NOT NULL,
  `standard_container_9` varchar(250) NOT NULL,
  `container_9` varchar(250) NOT NULL,
  `standard_weight_9` varchar(250) NOT NULL,
  `mobile_phase` varchar(250) NOT NULL,
  `impurity_1` varchar(250) NOT NULL,
  `impurity_2` varchar(250) NOT NULL,
  `solvent_std_1` varchar(250) NOT NULL,
  `solvent_std_2` varchar(250) NOT NULL,
  `solvent_sample` varchar(250) NOT NULL,
  `solvent_impurity_1` varchar(250) NOT NULL,
  `solvent_impurity_2` varchar(250) NOT NULL,
  `substance_std_1` varchar(250) NOT NULL,
  `substance_std_2` varchar(250) NOT NULL,
  `substance_sample` varchar(250) NOT NULL,
  `substance_impurity_1` varchar(250) NOT NULL,
  `substance_impurity_2` varchar(250) NOT NULL,
  `rf_std_1` varchar(250) NOT NULL,
  `rf_std_2` varchar(250) NOT NULL,
  `rf_sample` varchar(250) NOT NULL,
  `rf_impurity_1` varchar(250) NOT NULL,
  `rf_impurity_2` varchar(250) NOT NULL,
  `rr_std_1` varchar(250) NOT NULL,
  `rr_std_2` varchar(250) NOT NULL,
  `rr_sample` varchar(250) NOT NULL,
  `rr_impurity_1` varchar(250) NOT NULL,
  `rr_impurity_2` varchar(250) NOT NULL,
  `rr_value` varchar(250) NOT NULL,
  `acceptance_criteria` varchar(250) NOT NULL,
  `results` varchar(250) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `test_request` int(11) NOT NULL,
  `assignment` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `choice` varchar(250) NOT NULL,
  `supervisor` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `further_comments` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `identification_thin_layer`
--

INSERT INTO `identification_thin_layer` (`id`, `timestamp`, `equipment_number`, `equipment_make`, `sample_weight_container`, `sample_container`, `sample_weight`, `sample_dilution`, `potency`, `lot_no`, `id_no`, `standard_container`, `container`, `standard_weight`, `standard_dilution`, `standard_description_1`, `standard_description_2`, `standard_description_3`, `standard_description_4`, `standard_container_2`, `container_2`, `standard_weight_2`, `standard_container_3`, `container_3`, `standard_weight_3`, `standard_container_4`, `container_4`, `standard_weight_4`, `reagent_1`, `reagent_2`, `reagents_3`, `reagents_4`, `reagent_weight_container_1`, `reagent_container_1`, `reagent_weight_1`, `standard_container_6`, `container_6`, `standard_weight_6`, `standard_container_7`, `container_7`, `standard_weight_7`, `standard_container_8`, `container_8`, `standard_weight_8`, `standard_container_9`, `container_9`, `standard_weight_9`, `mobile_phase`, `impurity_1`, `impurity_2`, `solvent_std_1`, `solvent_std_2`, `solvent_sample`, `solvent_impurity_1`, `solvent_impurity_2`, `substance_std_1`, `substance_std_2`, `substance_sample`, `substance_impurity_1`, `substance_impurity_2`, `rf_std_1`, `rf_std_2`, `rf_sample`, `rf_impurity_1`, `rf_impurity_2`, `rr_std_1`, `rr_std_2`, `rr_sample`, `rr_impurity_1`, `rr_impurity_2`, `rr_value`, `acceptance_criteria`, `results`, `comment`, `test_request`, `assignment`, `status`, `choice`, `supervisor`, `date`, `further_comments`) VALUES
(1, '2014-10-01 16:13:45', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 50, 10, 1, '', '0', '0000-00-00', '<p>complies</p>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
