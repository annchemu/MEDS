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
-- Table structure for table `identification_uv`
--

CREATE TABLE IF NOT EXISTS `identification_uv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `test_request` int(11) NOT NULL,
  `assignment` int(11) NOT NULL,
  `uv_sample_weight` varchar(250) NOT NULL,
  `uv_calculation` varchar(250) NOT NULL,
  `uv_sample_container` varchar(250) NOT NULL,
  `uv_container` varchar(250) NOT NULL,
  `uv_sample_weight_1` varchar(250) NOT NULL,
  `uv_sample_dilution` varchar(250) NOT NULL,
  `uv_standard_description` varchar(250) NOT NULL,
  `uv_potency` varchar(250) NOT NULL,
  `uv_lot_no` varchar(250) NOT NULL,
  `uv_id_no` varchar(250) NOT NULL,
  `uv_potency_standard_container` varchar(250) NOT NULL,
  `uv_potency_standard_container_2` varchar(250) NOT NULL,
  `uv_potency_container` varchar(250) NOT NULL,
  `uv_potency_container_2` varchar(250) NOT NULL,
  `uv_standard_weight` varchar(250) NOT NULL,
  `uv_standard_weight_2` varchar(250) NOT NULL,
  `uv_standard_dilution` varchar(250) NOT NULL,
  `uv_acceptance_criteria` varchar(250) NOT NULL,
  `uv_results` varchar(250) NOT NULL,
  `uv_comment` varchar(250) NOT NULL,
  `uv_potency_reagent_container` varchar(250) NOT NULL,
  `uv_potency_reagent_container_2` varchar(250) NOT NULL,
  `uv_potency_reagent_container_3` varchar(250) NOT NULL,
  `uv_potency_reagent_container_4` varchar(250) NOT NULL,
  `uv_reagent_container` varchar(250) NOT NULL,
  `uv_reagent_container_2` varchar(250) NOT NULL,
  `uv_reagent_container_3` varchar(250) NOT NULL,
  `uv_reagent_container_4` varchar(250) NOT NULL,
  `uv_reagent_weight` varchar(250) NOT NULL,
  `uv_reagent_weight_2` varchar(250) NOT NULL,
  `uv_reagent_weight_3` varchar(250) NOT NULL,
  `uv_reagent_weight_4` varchar(250) NOT NULL,
  `choice` varchar(250) NOT NULL,
  `supervisor` varchar(250) NOT NULL,
  `done_by` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `date_done` varchar(250) NOT NULL,
  `further_comments` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `identification_uv`
--

INSERT INTO `identification_uv` (`id`, `timestamp`, `test_request`, `assignment`, `uv_sample_weight`, `uv_calculation`, `uv_sample_container`, `uv_container`, `uv_sample_weight_1`, `uv_sample_dilution`, `uv_standard_description`, `uv_potency`, `uv_lot_no`, `uv_id_no`, `uv_potency_standard_container`, `uv_potency_standard_container_2`, `uv_potency_container`, `uv_potency_container_2`, `uv_standard_weight`, `uv_standard_weight_2`, `uv_standard_dilution`, `uv_acceptance_criteria`, `uv_results`, `uv_comment`, `uv_potency_reagent_container`, `uv_potency_reagent_container_2`, `uv_potency_reagent_container_3`, `uv_potency_reagent_container_4`, `uv_reagent_container`, `uv_reagent_container_2`, `uv_reagent_container_3`, `uv_reagent_container_4`, `uv_reagent_weight`, `uv_reagent_weight_2`, `uv_reagent_weight_3`, `uv_reagent_weight_4`, `choice`, `supervisor`, `done_by`, `date`, `date_done`, `further_comments`, `status`) VALUES
(1, '2014-10-01 14:03:45', 50, 10, '7', '<p>6</p>', '7', '3', '4', '<p>hhh</p>', 'DILOXANIDE FUROATE', '', 'FOC026', 'RSTD-001', '5', '0', '2', '0', '3', '0', '<p>jhjh`</p>', '0', '<p>adasdac</p>', '<p>fsdfsdsfgg</p>', '8', '0', '0', '0', '2', '0', '0', '0', '6', '0', '0', '0', 'Complies', '0', 'Peter Kamau', '', '01/10/2014', '<p>It meets the monograp requirements</p>', '1'),
(2, '2014-10-01 14:41:59', 50, 10, '', '', '', '', '', '', '', '', '', '', '', '0', '', '0', '', '0', '', '0', '', '<p>This is a</p>', '', '0', '0', '0', '', '0', '0', '0', '', '0', '0', '0', 'Complies', '0', 'Peter Kamau', '', '01/10/2014', '<p>jhjh</p>', '1'),
(3, '2014-10-01 18:48:31', 50, 10, '34', '<p>Calculate 34g</p>', '34.987', '1.36', '33.627', '<p>hkjhjk</p>', 'MEFEMENAMIC ACID', '', 'G0C025', 'RSTD-006', '7.9376', '0', '6.8234', '0', '1.1141999999999994', '0', '', '0', '<p>jhklhl</p>', '<p>hjkk</p>', '7.355', '0', '0', '0', '5.955', '0', '0', '0', '1.4000000000000004', '0', '0', '0', 'Complies', '0', 'Peter Kamau', '10/13/2014', '01/10/2014', '<p>hjkhhj;</p>', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
