-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 02, 2018 at 06:55 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fcst`
--
CREATE DATABASE IF NOT EXISTS `fcst` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `fcst`;

-- --------------------------------------------------------

--
-- Table structure for table `ciudad`
--

DROP TABLE IF EXISTS `ciudad`;
CREATE TABLE IF NOT EXISTS `ciudad` (
  `ciudad_id` int(11) NOT NULL AUTO_INCREMENT,
  `ciudad_nom` varchar(256) NOT NULL,
  PRIMARY KEY (`ciudad_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ciudad`
--

INSERT INTO `ciudad` (`ciudad_id`, `ciudad_nom`) VALUES
(1, 'Ibague'),
(2, 'Barranquilla');

-- --------------------------------------------------------

--
-- Table structure for table `sede`
--

DROP TABLE IF EXISTS `sede`;
CREATE TABLE IF NOT EXISTS `sede` (
  `sede_id` int(11) NOT NULL AUTO_INCREMENT,
  `ciudad_id` int(11) NOT NULL,
  `sede_nom` varchar(256) NOT NULL,
  `sede_dir` varchar(256) DEFAULT NULL,
  `sede_jefe` varchar(256) DEFAULT NULL,
  `sede_num` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`sede_id`),
  KEY `ciudad_id_fk` (`ciudad_id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sede`
--

INSERT INTO `sede` (`sede_id`, `ciudad_id`, `sede_nom`, `sede_dir`, `sede_jefe`, `sede_num`) VALUES
(28, 1, 'Test1', 'Test2', 'Test4', 'Test5'),
(32, 1, 'Nombre', 'Direccion', 'Boss', 'Numero'),
(44, 1, '5', '5', '5', '5'),
(45, 1, '123', '123', '123', '123');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sede`
--
ALTER TABLE `sede`
  ADD CONSTRAINT `ciudad_id_fk` FOREIGN KEY (`ciudad_id`) REFERENCES `ciudad` (`ciudad_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
