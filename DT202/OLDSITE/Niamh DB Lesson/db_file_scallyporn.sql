-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 14, 2010 at 05:35 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `robert5_election`
--

-- --------------------------------------------------------

--
-- Table structure for table `scallyporn`
--

CREATE TABLE IF NOT EXISTS `scallyporn` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `age` int(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='poo' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `scallyporn`
--

INSERT INTO `scallyporn` (`id`, `name`, `age`, `email`, `pass`) VALUES
(1, 'niamh', 20, 'n@m.b', ''),
(2, 'admin', 89, 'r@h.m', 'pass');
