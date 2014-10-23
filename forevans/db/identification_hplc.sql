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
-- Table structure for table `identification_hplc`
--

CREATE TABLE IF NOT EXISTS `identification_hplc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sample_container` varchar(250) NOT NULL,
  `container` varchar(250) NOT NULL,
  `sample_weight` varchar(250) NOT NULL,
  `sample_dilution` varchar(250) NOT NULL,
  `standard_weight` varchar(250) NOT NULL,
  `standard_dilution_2` varchar(250) NOT NULL,
  `standard_description` varchar(250) NOT NULL,
  `potency` varchar(250) NOT NULL,
  `lot_no` varchar(250) NOT NULL,
  `id_no` varchar(250) NOT NULL,
  `lot_no_2` varchar(250) NOT NULL,
  `id_no_2` varchar(250) NOT NULL,
  `standard_container_2` varchar(250) NOT NULL,
  `container_2` varchar(250) NOT NULL,
  `standard_weight_2` varchar(250) NOT NULL,
  `standard_container` varchar(250) NOT NULL,
  `container_1` varchar(250) NOT NULL,
  `standard_weight_1` varchar(250) NOT NULL,
  `equipment_make` varchar(250) NOT NULL,
  `equipment_number` varchar(250) NOT NULL,
  `reagents` varchar(250) NOT NULL,
  `reagents_2` varchar(250) NOT NULL,
  `reagents_3` varchar(250) NOT NULL,
  `reagents_4` varchar(250) NOT NULL,
  `reagent_weight_container_1` varchar(250) NOT NULL,
  `reagent_container_1` varchar(250) NOT NULL,
  `reagent_weight_container_3` varchar(250) NOT NULL,
  `reagent_weight_1` varchar(250) NOT NULL,
  `reagent_weight_container_2` varchar(250) NOT NULL,
  `reagent_container_2` varchar(250) NOT NULL,
  `reagent_weight_2` varchar(250) NOT NULL,
  `reagent_container_3` varchar(250) NOT NULL,
  `reagent_weight_3` varchar(250) NOT NULL,
  `reagent_weight_container_4` varchar(250) NOT NULL,
  `reagent_container_4` varchar(250) NOT NULL,
  `reagent_weight_4` varchar(250) NOT NULL,
  `mobile_phase` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `length` varchar(250) NOT NULL,
  `serial_no` varchar(250) NOT NULL,
  `manufacturer` varchar(250) NOT NULL,
  `column_pressure` varchar(250) NOT NULL,
  `column_oven_temp` varchar(250) NOT NULL,
  `column_oven_temp_select` varchar(250) NOT NULL,
  `column_pressure_select` varchar(250) NOT NULL,
  `flow_rate` varchar(250) NOT NULL,
  `wavelength` varchar(250) NOT NULL,
  `rt_1` varchar(250) NOT NULL,
  `peak_area_1` varchar(250) NOT NULL,
  `asymmetry_1` varchar(250) NOT NULL,
  `resolution_1` varchar(250) NOT NULL,
  `rt_2` varchar(250) NOT NULL,
  `peak_area_2` varchar(250) NOT NULL,
  `asymmetry_2` varchar(250) NOT NULL,
  `resolution_2` varchar(250) NOT NULL,
  `rt_3` varchar(250) NOT NULL,
  `peak_area_3` varchar(250) NOT NULL,
  `asymmetry_3` varchar(250) NOT NULL,
  `resolution_3` varchar(250) NOT NULL,
  `rt_4` varchar(250) NOT NULL,
  `peak_area_4` varchar(250) NOT NULL,
  `asymmetry_4` varchar(250) NOT NULL,
  `resolution_4` varchar(250) NOT NULL,
  `rt_5` varchar(250) NOT NULL,
  `peak_area_5` varchar(250) NOT NULL,
  `asymmetry_5` varchar(250) NOT NULL,
  `resolution_5` varchar(250) NOT NULL,
  `rt_6` varchar(250) NOT NULL,
  `peak_area_6` varchar(250) NOT NULL,
  `asymmetry_6` varchar(250) NOT NULL,
  `resolution_6` varchar(250) NOT NULL,
  `rt_avg` varchar(250) NOT NULL,
  `peak_area_avg` varchar(250) NOT NULL,
  `asymmetry_avg` varchar(250) NOT NULL,
  `resolution_avg` varchar(250) NOT NULL,
  `rt_sd` varchar(250) NOT NULL,
  `peak_area_sd` varchar(250) NOT NULL,
  `asymmetry_sd` varchar(250) NOT NULL,
  `resolution_sd` varchar(250) NOT NULL,
  `rt_rsd` varchar(250) NOT NULL,
  `peak_area_rsd` varchar(250) NOT NULL,
  `asymmetry_rsd` varchar(250) NOT NULL,
  `resolution_rsd` varchar(250) NOT NULL,
  `rt_ac` varchar(250) NOT NULL,
  `peak_area_ac` varchar(250) NOT NULL,
  `asymmetry_ac` varchar(250) NOT NULL,
  `resolution_ac` varchar(250) NOT NULL,
  `rt_comment` varchar(250) NOT NULL,
  `peak_area_comment` varchar(250) NOT NULL,
  `asymmetry_comment` varchar(250) NOT NULL,
  `resolution_comment` varchar(250) NOT NULL,
  `sample_rt_1` varchar(250) NOT NULL,
  `sample_peak_area_1` varchar(250) NOT NULL,
  `sample_asymmetry_1` varchar(250) NOT NULL,
  `sample_theoretical_1` varchar(250) NOT NULL,
  `sample_resolution_1` varchar(250) NOT NULL,
  `sample_rt_2` varchar(250) NOT NULL,
  `sample_peak_area_2` varchar(250) NOT NULL,
  `sample_asymmetry_2` varchar(250) NOT NULL,
  `sample_theoretical_2` varchar(250) NOT NULL,
  `sample_resolution_2` varchar(250) NOT NULL,
  `sample_rt_3` varchar(250) NOT NULL,
  `sample_peak_area_3` varchar(250) NOT NULL,
  `sample_asymmetry_3` varchar(250) NOT NULL,
  `sample_theoretical_3` varchar(250) NOT NULL,
  `sample_resolution_3` varchar(250) NOT NULL,
  `sample_rt_4` varchar(250) NOT NULL,
  `sample_peak_area_4` varchar(250) NOT NULL,
  `sample_asymmetry_4` varchar(250) NOT NULL,
  `sample_theoretical_4` varchar(250) NOT NULL,
  `sample_resolution_4` varchar(250) NOT NULL,
  `sample_rt_5` varchar(250) NOT NULL,
  `sample_peak_area_5` varchar(250) NOT NULL,
  `sample_asymmetry_5` varchar(250) NOT NULL,
  `sample_theoretical_5` varchar(250) NOT NULL,
  `sample_resolution_5` varchar(250) NOT NULL,
  `sample_rt_6` varchar(250) NOT NULL,
  `sample_peak_area_6` varchar(250) NOT NULL,
  `sample_asymmetry_6` varchar(250) NOT NULL,
  `sample_theoretical_6` varchar(250) NOT NULL,
  `sample_resolution_6` varchar(250) NOT NULL,
  `sample_rt_avg` varchar(250) NOT NULL,
  `sample_peak_area_avg` varchar(250) NOT NULL,
  `sample_asymmetry_avg` varchar(250) NOT NULL,
  `sample_theoretical_avg` varchar(250) NOT NULL,
  `sample_resolution_avg` varchar(250) NOT NULL,
  `sample_rt_sd` varchar(250) NOT NULL,
  `sample_peak_area_sd` varchar(250) NOT NULL,
  `sample_asymmetry_sd` varchar(250) NOT NULL,
  `sample_theoretical_sd` varchar(250) NOT NULL,
  `sample_resolution_sd` varchar(250) NOT NULL,
  `sample_rt_rsd` varchar(250) NOT NULL,
  `sample_peak_area_rsd` varchar(250) NOT NULL,
  `sample_asymmetry_rsd` varchar(250) NOT NULL,
  `sample_theoretical_rsd` varchar(250) NOT NULL,
  `sample_resolution_rsd` varchar(250) NOT NULL,
  `sample_rt_ac` varchar(250) NOT NULL,
  `sample_peak_area_ac` varchar(250) NOT NULL,
  `sample_asymmetry_ac` varchar(250) NOT NULL,
  `sample_theoretical_ac` varchar(250) NOT NULL,
  `sample_resolution_ac` varchar(250) NOT NULL,
  `sample_rt_comment` varchar(250) NOT NULL,
  `sample_peak_area_comment` varchar(250) NOT NULL,
  `sample_asymmetry_comment` varchar(250) NOT NULL,
  `sample_theoretical_comment` varchar(250) NOT NULL,
  `sample_resolution_comment` varchar(250) NOT NULL,
  `sample_rrt_avg` varchar(250) NOT NULL,
  `acceptance_criteria` varchar(250) NOT NULL,
  `results` varchar(250) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `test_request` varchar(250) NOT NULL,
  `assignment` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `sysytem_suitability_sequence` varchar(250) NOT NULL,
  `sysytem_suitability_sequence_comment` varchar(250) NOT NULL,
  `sample_injection_sequence` varchar(250) NOT NULL,
  `chromatograms_attached_comment` varchar(250) NOT NULL,
  `chromatograms_attached` varchar(250) NOT NULL,
  `sample_injection_sequence_comment` varchar(250) NOT NULL,
  `choice` varchar(250) NOT NULL,
  `supervisor` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `analyst` varchar(250) NOT NULL,
  `date_done` varchar(250) NOT NULL,
  `further_comments` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `identification_hplc`
--

INSERT INTO `identification_hplc` (`id`, `timestamp`, `sample_container`, `container`, `sample_weight`, `sample_dilution`, `standard_weight`, `standard_dilution_2`, `standard_description`, `potency`, `lot_no`, `id_no`, `lot_no_2`, `id_no_2`, `standard_container_2`, `container_2`, `standard_weight_2`, `standard_container`, `container_1`, `standard_weight_1`, `equipment_make`, `equipment_number`, `reagents`, `reagents_2`, `reagents_3`, `reagents_4`, `reagent_weight_container_1`, `reagent_container_1`, `reagent_weight_container_3`, `reagent_weight_1`, `reagent_weight_container_2`, `reagent_container_2`, `reagent_weight_2`, `reagent_container_3`, `reagent_weight_3`, `reagent_weight_container_4`, `reagent_container_4`, `reagent_weight_4`, `mobile_phase`, `name`, `length`, `serial_no`, `manufacturer`, `column_pressure`, `column_oven_temp`, `column_oven_temp_select`, `column_pressure_select`, `flow_rate`, `wavelength`, `rt_1`, `peak_area_1`, `asymmetry_1`, `resolution_1`, `rt_2`, `peak_area_2`, `asymmetry_2`, `resolution_2`, `rt_3`, `peak_area_3`, `asymmetry_3`, `resolution_3`, `rt_4`, `peak_area_4`, `asymmetry_4`, `resolution_4`, `rt_5`, `peak_area_5`, `asymmetry_5`, `resolution_5`, `rt_6`, `peak_area_6`, `asymmetry_6`, `resolution_6`, `rt_avg`, `peak_area_avg`, `asymmetry_avg`, `resolution_avg`, `rt_sd`, `peak_area_sd`, `asymmetry_sd`, `resolution_sd`, `rt_rsd`, `peak_area_rsd`, `asymmetry_rsd`, `resolution_rsd`, `rt_ac`, `peak_area_ac`, `asymmetry_ac`, `resolution_ac`, `rt_comment`, `peak_area_comment`, `asymmetry_comment`, `resolution_comment`, `sample_rt_1`, `sample_peak_area_1`, `sample_asymmetry_1`, `sample_theoretical_1`, `sample_resolution_1`, `sample_rt_2`, `sample_peak_area_2`, `sample_asymmetry_2`, `sample_theoretical_2`, `sample_resolution_2`, `sample_rt_3`, `sample_peak_area_3`, `sample_asymmetry_3`, `sample_theoretical_3`, `sample_resolution_3`, `sample_rt_4`, `sample_peak_area_4`, `sample_asymmetry_4`, `sample_theoretical_4`, `sample_resolution_4`, `sample_rt_5`, `sample_peak_area_5`, `sample_asymmetry_5`, `sample_theoretical_5`, `sample_resolution_5`, `sample_rt_6`, `sample_peak_area_6`, `sample_asymmetry_6`, `sample_theoretical_6`, `sample_resolution_6`, `sample_rt_avg`, `sample_peak_area_avg`, `sample_asymmetry_avg`, `sample_theoretical_avg`, `sample_resolution_avg`, `sample_rt_sd`, `sample_peak_area_sd`, `sample_asymmetry_sd`, `sample_theoretical_sd`, `sample_resolution_sd`, `sample_rt_rsd`, `sample_peak_area_rsd`, `sample_asymmetry_rsd`, `sample_theoretical_rsd`, `sample_resolution_rsd`, `sample_rt_ac`, `sample_peak_area_ac`, `sample_asymmetry_ac`, `sample_theoretical_ac`, `sample_resolution_ac`, `sample_rt_comment`, `sample_peak_area_comment`, `sample_asymmetry_comment`, `sample_theoretical_comment`, `sample_resolution_comment`, `sample_rrt_avg`, `acceptance_criteria`, `results`, `comment`, `test_request`, `assignment`, `status`, `sysytem_suitability_sequence`, `sysytem_suitability_sequence_comment`, `sample_injection_sequence`, `chromatograms_attached_comment`, `chromatograms_attached`, `sample_injection_sequence_comment`, `choice`, `supervisor`, `date`, `analyst`, `date_done`, `further_comments`) VALUES
(1, '2014-10-01 16:35:26', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Celsius', 'Bar', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '<p>hbkhgku/i</p>', '50', '10', '1', '0', '', '0', '', '0', '', '', '', '0000-00-00', 'Peter Kamau', '', '<p>hgjgj,</p>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
