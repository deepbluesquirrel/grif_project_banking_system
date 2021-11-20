-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 19, 2021 at 07:57 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `name` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `balance` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`name`, `email`, `balance`) VALUES
('David', 'david123@gmail.com', 14900),
('Albert', 'albert123@gmail.com', 17100),
('Teresa', 'tr@gmail.com', 25000),
('Jone', 'jonered@gmail.com', 7000),
('Kiran', 'kr777@gmail.com', 20000),
('Ajmal', 'aj323@gmail.com', 5000),
('Muhammed', 'mhd@gmail.com', 30000),
('Rakesh', 'rakto@gmail.com', 10000),
('Meera', 'msmeera@gmail.com', 50000),
('Lijo', 'lj@gmail.com', 13000);

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

DROP TABLE IF EXISTS `transfer`;
CREATE TABLE IF NOT EXISTS `transfer` (
  `fcust` varchar(15) NOT NULL,
  `tcust` varchar(15) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`fcust`, `tcust`, `amount`) VALUES
('David', 'Albert', 1000),
('David', 'Albert', 1000),
('David', 'Albert', 100),
('David', 'Albert', 1000),
('David', 'Albert', 900),
('David', 'Albert', 100),
('Ajmal', 'David', 5000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
