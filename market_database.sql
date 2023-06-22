-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2023 at 11:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `market_database`
--
CREATE DATABASE IF NOT EXISTS `market_database` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `market_database`;

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
CREATE TABLE IF NOT EXISTS `addresses` (
  `country` varchar(15) DEFAULT NULL,
  `names` varchar(50) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `code` varchar(15) DEFAULT NULL,
  `addresses` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`country`, `names`, `phone_number`, `code`, `addresses`) VALUES
('gref', 'fwe', '44444', '24242', 'vfd vef'),
('jekqc', 'doqw', '34432', '3434', 'kvrkjsded'),
('Ethiopia', 'Khalid Khelil', '', '1000', 'Adama'),
('ethio', 'khald', '44343', '312', 'kefmlkmrkl32'),
('erthio', 'sudihcfewi', '89473328974823', '1000', 'kjdchdsic'),
('', '', '', '', ''),
('ethio', 'jhb23q', '4324232', '1000', 'fbjeqrj2'),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('gh', 'ytfyt', '87687', '76', 'ghfygh'),
('gh', 'ytfyt', '87687', '76', 'ghfygh'),
('gh', 'ytfyt', '87687', '76', 'ghfygh'),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('dwd', 'qwadqw', '34213', '12', '121dswea'),
('njew', 'kjnewkj', '332432', '2132', 'ndwfjwe');

-- --------------------------------------------------------

--
-- Table structure for table `card_info`
--

DROP TABLE IF EXISTS `card_info`;
CREATE TABLE IF NOT EXISTS `card_info` (
  `card_id` int(30) NOT NULL,
  `expiry` date NOT NULL,
  PRIMARY KEY (`card_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `card_info`
--

INSERT INTO `card_info` (`card_id`, `expiry`) VALUES
(0, '0000-00-00'),
(423, '2024-01-01'),
(4136, '2026-10-10'),
(4235, '2024-01-01'),
(4236, '2001-01-01'),
(4240, '2024-10-10'),
(4246, '2005-10-10'),
(56456, '2020-01-01'),
(388218, '2022-01-01'),
(4840990, '2000-10-10'),
(38928929, '2200-01-01'),
(2147483647, '2020-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstname`, `lastname`, `email`, `password`) VALUES
('jfnreijnf', 'jferfnij3rn', 'jewnfiew@jh.f4we', '1234'),
('jbkj', 'jknj', 'jkejn@fre.rfe', '123'),
('jbkj', 'jknj', 'jkJejn@fre.rfe', '123'),
('jbkj', 'jknj', 'jkn@fre.rfe', '123'),
('lk', 'klm', 'jwdnk@wqd.dwq', '123'),
('khald', 'hwdbwqi', 'khalid@qw.cw', '123123'),
('khald', 'hwdbwqi', 'khalidh@qw.cw', '123'),
('khalid', 'khelil', 'khalidkhelil19@gmail.com', 'helloworld'),
('khallidium', 'khelil', 'khalidkhelil29@gmail.com', 'hello'),
('khalid', 'khelil', 'khalidkhelil39@gmail.com', 'qU*OO2wCZHciY9sA'),
('TEMP', 'TEMP', 'khalidkhelil@gmail.com', '12345'),
('nafyad', 'dachasa', 'sbdhsbdhsb@gmail.com', 'password'),
('sample', 'ample', 'xyz@gmail.com', 'password'),
('yordi', 'tefe', 'yoo123@gmail.com', '12345'),
('yordanos', 'teferi', 'yordanos@gnail.com', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
