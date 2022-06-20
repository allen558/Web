-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 20, 2022 at 05:55 AM
-- Server version: 8.0.28
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

DROP TABLE IF EXISTS `alumni`;
CREATE TABLE IF NOT EXISTS `alumni` (
  `id` int NOT NULL AUTO_INCREMENT,
  `alname` varchar(30) DEFAULT NULL,
  `doe` date DEFAULT NULL,
  `dog` date DEFAULT NULL,
  `hname` varchar(30) DEFAULT NULL,
  `tname` varchar(30) DEFAULT NULL,
  `sor` varchar(5) DEFAULT NULL,
  `co` varchar(20) DEFAULT NULL,
  `add` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) DEFAULT NULL,
  `mname` varchar(30) DEFAULT NULL,
  `sname` varchar(30) DEFAULT NULL,
  `uname` varchar(30) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `pword` varchar(30) DEFAULT NULL,
  `cv` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `fb` varchar(30) DEFAULT NULL,
  `twitt` varchar(30) DEFAULT NULL,
  `ig` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `mname`, `sname`, `uname`, `dob`, `pword`, `cv`, `email`, `phone`, `fb`, `twitt`, `ig`) VALUES
(1, 'Jeremiah', 'David', 'Challe', '$mzeechalle', '11/11/1999', 'Wonganika@7219', 'mzeechalle-form-unit-3', 'davidderic@gmail.com', '0757965733', 'mzeechalle', 'mzeechalle', 'mzeechalle'),
(2, 'Jeremiah', 'David', 'Challe', 'mzeechalle', '11/11/1999', 'Wonganika@7219', 'mzeechalle-form-unit-3', 'davidderic@gmail.com', '0757965733', 'mzeechalle', 'mzeechalle', 'mzeechalle');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
