-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 21, 2018 at 10:40 AM
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
-- Table structure for table `area`
--

DROP TABLE IF EXISTS `area`;
CREATE TABLE IF NOT EXISTS `area` (
  `codArea` int(11) NOT NULL AUTO_INCREMENT,
  `nombreArea` varchar(200) NOT NULL,
  `sedeFK` int(11) NOT NULL,
  PRIMARY KEY (`codArea`),
  KEY `SedeFK_FK` (`sedeFK`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`codArea`, `nombreArea`, `sedeFK`) VALUES
(1, 'Test1', 28),
(2, 'Test', 28),
(4, 'Test', 28),
(5, 'Samitsuckass', 28),
(6, 'Olazamitzito', 28),
(7, 'Olazamitzito2', 32);

-- --------------------------------------------------------

--
-- Table structure for table `sede`
--

DROP TABLE IF EXISTS `sede`;
CREATE TABLE IF NOT EXISTS `sede` (
  `sede_id` int(11) NOT NULL AUTO_INCREMENT,
  `ubicgeo_id` int(11) NOT NULL,
  `sede_nom` varchar(256) NOT NULL,
  `sede_dir` varchar(256) DEFAULT NULL,
  `sede_jefe` varchar(256) DEFAULT NULL,
  `sede_num` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`sede_id`),
  KEY `ubicgeo_fk` (`ubicgeo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sede`
--

INSERT INTO `sede` (`sede_id`, `ubicgeo_id`, `sede_nom`, `sede_dir`, `sede_jefe`, `sede_num`) VALUES
(1, 1, 'Abril', 'Abril', 'Abril', 'Abril'),
(2, 1, 'Marzo', 'Marzo', 'Marzo', 'Marzo');

-- --------------------------------------------------------

--
-- Table structure for table `tipoubicgeo`
--

DROP TABLE IF EXISTS `tipoubicgeo`;
CREATE TABLE IF NOT EXISTS `tipoubicgeo` (
  `tipoubicgeo_id` int(11) NOT NULL AUTO_INCREMENT,
  `tipoubicgeo_nom` varchar(32) NOT NULL,
  `tipoubicgeo_padre` int(11) DEFAULT NULL,
  PRIMARY KEY (`tipoubicgeo_id`),
  KEY `selfref_tipoubicgeo` (`tipoubicgeo_padre`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tipoubicgeo`
--

INSERT INTO `tipoubicgeo` (`tipoubicgeo_id`, `tipoubicgeo_nom`, `tipoubicgeo_padre`) VALUES
(1, 'Pais', 4),
(2, 'Departamento', 1),
(3, 'Ciudad', 2),
(4, 'Continente', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ubicgeo`
--

DROP TABLE IF EXISTS `ubicgeo`;
CREATE TABLE IF NOT EXISTS `ubicgeo` (
  `ubicgeo_id` int(11) NOT NULL AUTO_INCREMENT,
  `ubicgeo_nom` varchar(256) NOT NULL,
  `tipoubicgeo_id` int(11) NOT NULL,
  `ubicgeo_padre` int(11) DEFAULT NULL,
  PRIMARY KEY (`ubicgeo_id`),
  KEY `tipoubicgeo_fk` (`tipoubicgeo_id`),
  KEY `selfref_ubicgeo` (`ubicgeo_padre`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ubicgeo`
--

INSERT INTO `ubicgeo` (`ubicgeo_id`, `ubicgeo_nom`, `tipoubicgeo_id`, `ubicgeo_padre`) VALUES
(1, 'Colombia', 1, 5),
(2, 'Tolima', 2, 1),
(3, 'Ibague', 3, 2),
(4, 'Espinal', 3, 2),
(5, 'America del Sur', 4, NULL),
(6, 'Europa', 4, NULL),
(7, 'Alemania', 1, 6),
(12, 'Hesse', 2, 7),
(13, 'Frankfurt', 3, 12),
(14, 'Weisbaden', 3, 12);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `SedeFK_FK` FOREIGN KEY (`sedeFK`) REFERENCES `sede` (`sede_id`);

--
-- Constraints for table `sede`
--
ALTER TABLE `sede`
  ADD CONSTRAINT `ubicgeo_fk` FOREIGN KEY (`ubicgeo_id`) REFERENCES `ubicgeo` (`ubicgeo_id`);

--
-- Constraints for table `tipoubicgeo`
--
ALTER TABLE `tipoubicgeo`
  ADD CONSTRAINT `selfref_tipoubicgeo` FOREIGN KEY (`tipoubicgeo_padre`) REFERENCES `tipoubicgeo` (`tipoubicgeo_id`);

--
-- Constraints for table `ubicgeo`
--
ALTER TABLE `ubicgeo`
  ADD CONSTRAINT `selfref` FOREIGN KEY (`ubicgeo_padre`) REFERENCES `ubicgeo` (`ubicgeo_id`),
  ADD CONSTRAINT `tipoubicgeo_fk` FOREIGN KEY (`tipoubicgeo_id`) REFERENCES `tipoubicgeo` (`tipoubicgeo_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
