-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 04, 2018 at 12:01 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `id5120450_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_hotel`
--

CREATE TABLE IF NOT EXISTS `tb_hotel` (
  `Nama` varchar(50) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Bintang` varchar(5) NOT NULL,
  `ID` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hotel`
--

INSERT INTO `tb_hotel` (`Nama`, `Alamat`, `Bintang`, `ID`) VALUES
('ajaz', 'a', '1', '1'),
('bak', 'b ', '2', '2'),
('fafa', '9 ', '9 ', '3 '),
('asdg', 'h ', '3 ', '6');
