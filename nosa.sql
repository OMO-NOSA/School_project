-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 18, 2014 at 10:38 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nosa`
--
CREATE DATABASE IF NOT EXISTS `nosa` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `nosa`;

-- --------------------------------------------------------

--
-- Table structure for table `100level`
--

CREATE TABLE IF NOT EXISTS `100level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `one` varchar(10) NOT NULL DEFAULT 'empty',
  `two` varchar(10) NOT NULL DEFAULT 'empty',
  `three` varchar(10) NOT NULL DEFAULT 'empty',
  `four` varchar(10) NOT NULL DEFAULT 'empty',
  `reg_status` int(1) NOT NULL DEFAULT '0',
  `five` varchar(10) NOT NULL DEFAULT 'empty',
  `six` varchar(10) NOT NULL DEFAULT 'empty',
  `seven` varchar(10) NOT NULL DEFAULT 'empty',
  `eight` varchar(10) NOT NULL DEFAULT 'empty',
  `nine` varchar(10) NOT NULL DEFAULT 'empty',
  `ten` varchar(10) NOT NULL DEFAULT 'empty',
  `eleven` varchar(10) NOT NULL DEFAULT 'empty',
  `twelve` varchar(10) DEFAULT 'empty',
  `thirteen` varchar(10) NOT NULL DEFAULT 'empty',
  `fourteen` varchar(10) NOT NULL DEFAULT 'empty',
  `fifteen` varchar(10) NOT NULL DEFAULT 'empty',
  `sixteen` varchar(10) NOT NULL DEFAULT 'empty',
  `seventeen` varchar(10) NOT NULL DEFAULT 'empty',
  `eighteen` varchar(10) NOT NULL DEFAULT 'empty',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `100level`
--

INSERT INTO `100level` (`id`, `username`, `one`, `two`, `three`, `four`, `reg_status`, `five`, `six`, `seven`, `eight`, `nine`, `ten`, `eleven`, `twelve`, `thirteen`, `fourteen`, `fifteen`, `sixteen`, `seventeen`, `eighteen`) VALUES
(1, 'test_student', 'mth110', 'mth112', 'phy109', 'phy111', 1, 'phy113', 'chm111', 'csc110', 'csc111', 'gst111', 'gst112', 'mth123', 'mth125', 'phy124', 'gst122', 'gst123', 'gst121', 'chm122', 'csc120');

-- --------------------------------------------------------

--
-- Table structure for table `100level_result`
--

CREATE TABLE IF NOT EXISTS `100level_result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `one` varchar(10) NOT NULL,
  `two` varchar(10) NOT NULL,
  `three` varchar(10) NOT NULL,
  `four` varchar(10) NOT NULL,
  `five` varchar(10) NOT NULL,
  `six` varchar(10) NOT NULL,
  `seven` varchar(10) NOT NULL,
  `eight` varchar(10) NOT NULL,
  `nine` varchar(10) NOT NULL,
  `ten` varchar(10) NOT NULL,
  `eleven` varchar(10) NOT NULL,
  `twelve` varchar(10) NOT NULL,
  `thirteen` varchar(10) NOT NULL,
  `fourteen` varchar(10) NOT NULL,
  `fifteen` varchar(10) NOT NULL,
  `sixteen` varchar(10) NOT NULL,
  `seventeen` varchar(10) NOT NULL,
  `eighteen` varchar(10) NOT NULL,
  `result_stat` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `100level_result`
--

INSERT INTO `100level_result` (`id`, `username`, `one`, `two`, `three`, `four`, `five`, `six`, `seven`, `eight`, `nine`, `ten`, `eleven`, `twelve`, `thirteen`, `fourteen`, `fifteen`, `sixteen`, `seventeen`, `eighteen`, `result_stat`) VALUES
(1, 'test_student', '15 ', '15 ', '10 ', '15 ', '15 ', '15 ', '15 ', '15 ', '10 ', '10 ', '15 ', '15 ', '20 ', '10 ', '10 ', '10 ', '15 ', '15 ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `200level`
--

CREATE TABLE IF NOT EXISTS `200level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `one` varchar(10) NOT NULL,
  `two` varchar(10) NOT NULL,
  `three` varchar(10) NOT NULL,
  `four` varchar(10) NOT NULL,
  `five` varchar(10) NOT NULL,
  `six` varchar(10) NOT NULL,
  `seven` varchar(10) NOT NULL,
  `eight` varchar(10) NOT NULL,
  `nine` varchar(10) NOT NULL,
  `ten` varchar(10) NOT NULL,
  `eleven` varchar(10) NOT NULL,
  `twelve` varchar(10) NOT NULL,
  `thirteen` varchar(10) NOT NULL,
  `fourteen` varchar(10) NOT NULL,
  `reg_status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `200level_result`
--

CREATE TABLE IF NOT EXISTS `200level_result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `one` int(11) NOT NULL,
  `two` int(11) NOT NULL,
  `three` int(11) NOT NULL,
  `four` int(11) NOT NULL,
  `five` int(11) NOT NULL,
  `six` int(11) NOT NULL,
  `seven` int(11) NOT NULL,
  `eight` int(11) NOT NULL,
  `nine` int(11) NOT NULL,
  `ten` int(11) NOT NULL,
  `eleven` int(11) NOT NULL,
  `twelve` int(11) NOT NULL,
  `thirteen` int(11) NOT NULL,
  `fourteen` int(11) NOT NULL,
  `result_stat` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `300level`
--

CREATE TABLE IF NOT EXISTS `300level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `one` varchar(10) NOT NULL,
  `two` varchar(10) NOT NULL,
  `three` varchar(10) NOT NULL,
  `four` varchar(10) NOT NULL,
  `five` varchar(10) NOT NULL,
  `six` varchar(10) NOT NULL,
  `seven` varchar(10) NOT NULL,
  `eight` varchar(10) NOT NULL,
  `nine` varchar(10) NOT NULL,
  `ten` varchar(10) NOT NULL,
  `eleven` varchar(10) NOT NULL,
  `twelve` varchar(10) NOT NULL,
  `thirteen` varchar(10) NOT NULL,
  `fourteen` varchar(10) NOT NULL,
  `fifteen` varchar(10) NOT NULL,
  `sixteen` varchar(10) NOT NULL,
  `reg_status` varchar(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `300level_result`
--

CREATE TABLE IF NOT EXISTS `300level_result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `one` int(11) NOT NULL,
  `two` int(11) NOT NULL,
  `three` int(11) NOT NULL,
  `four` int(11) NOT NULL,
  `five` int(11) NOT NULL,
  `six` int(11) NOT NULL,
  `seven` int(11) NOT NULL,
  `eight` int(11) NOT NULL,
  `nine` int(11) NOT NULL,
  `ten` int(11) NOT NULL,
  `eleven` int(11) NOT NULL,
  `twelve` int(11) NOT NULL,
  `thirteen` int(11) NOT NULL,
  `fourteen` int(11) NOT NULL,
  `fifteen` int(11) NOT NULL,
  `sixteen` int(11) NOT NULL,
  `result_stat` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `400level`
--

CREATE TABLE IF NOT EXISTS `400level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `one` varchar(10) NOT NULL,
  `two` varchar(10) NOT NULL,
  `three` varchar(10) NOT NULL,
  `four` varchar(10) NOT NULL,
  `five` varchar(10) NOT NULL,
  `six` varchar(10) NOT NULL,
  `seven` varchar(10) NOT NULL,
  `eight` varchar(10) NOT NULL,
  `nine` varchar(10) NOT NULL,
  `ten` varchar(10) NOT NULL,
  `eleven` varchar(10) NOT NULL,
  `twelve` varchar(10) NOT NULL,
  `thirteen` varchar(10) NOT NULL,
  `fourteen` varchar(10) NOT NULL,
  `fifteen` varchar(10) NOT NULL,
  `reg_status` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `400level_result`
--

CREATE TABLE IF NOT EXISTS `400level_result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `one` int(11) NOT NULL,
  `two` int(11) NOT NULL,
  `three` int(11) NOT NULL,
  `four` int(11) NOT NULL,
  `five` int(11) NOT NULL,
  `six` int(11) NOT NULL,
  `seven` int(11) NOT NULL,
  `eight` int(11) NOT NULL,
  `nine` int(11) NOT NULL,
  `ten` int(11) NOT NULL,
  `eleven` int(11) NOT NULL,
  `twelve` int(11) NOT NULL,
  `thirteen` int(11) NOT NULL,
  `fourteen` int(11) NOT NULL,
  `fifteen` int(11) NOT NULL,
  `result_stat` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(12) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mat_no` varchar(15) NOT NULL,
  `level` varchar(15) NOT NULL,
  `gp` varchar(12) NOT NULL DEFAULT '0',
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`,`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fname`, `mat_no`, `level`, `gp`, `status`) VALUES
(1, 'test_student', 'testing', 'Test Student', 'tes11223344', '100', '0', '0'),
(2, 'test_admin', 'testing', 'Dr testing test', '', '100', '0', '1'),
(3, 'test_admin2', 'testing', 'Dr Don Williams', '', '200', '0', '1'),
(4, 'test_student2', 'testing', 'Student Emma', 'Psc4455675', '200', '0', '0'),
(5, 'test_student3', 'testing', 'Student in 300', 'psc227738', '300', '0', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
