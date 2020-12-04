-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 04, 2020 at 06:02 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourist`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

DROP TABLE IF EXISTS `activities`;
CREATE TABLE IF NOT EXISTS `activities` (
  `Act_Name` varchar(50) NOT NULL,
  `Act_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Price` int(5) NOT NULL,
  `Img_url` varchar(100) NOT NULL,
  `Location` varchar(20) NOT NULL,
  UNIQUE KEY `Act_Id` (`Act_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`Act_Name`, `Act_Id`, `Price`, `Img_url`, `Location`) VALUES
('bungee jumping', 1, 1500, 'asset/activities/bungee jumping.jpg', 'Rishikesh'),
('river rafting', 2, 1200, 'asset/activities/river rafting.jpg', 'Kullu-Manali'),
('paragliding', 3, 2000, 'asset/activities/paragliding.jpeg', 'Nainital'),
('scuba diving', 4, 2200, 'asset/activities/scuba diving.jpg', 'Kovalam'),
('sky diving', 5, 3000, 'asset/activities/SkyDiving.jpg', 'Aamby Valley'),
('water surfing', 6, 1800, 'asset/activities/water surfing.jpg', 'Goa');

-- --------------------------------------------------------

--
-- Table structure for table `booked_activities`
--

DROP TABLE IF EXISTS `booked_activities`;
CREATE TABLE IF NOT EXISTS `booked_activities` (
  `Act_Id` int(4) NOT NULL,
  `Cust_Id` int(4) NOT NULL,
  `Date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked_activities`
--

INSERT INTO `booked_activities` (`Act_Id`, `Cust_Id`, `Date`) VALUES
(5, 13, '2020-12-09'),
(5, 13, '2020-12-09'),
(1, 13, '2020-12-08');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `Id` int(6) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Question` varchar(200) NOT NULL,
  `Answer` varchar(200) NOT NULL,
  `Img_url` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Id`, `Name`, `Email`, `Gender`, `Password`, `Phone`, `Question`, `Answer`, `Img_url`) VALUES
(14, 'Parag', 'parag@gmail.com', 'Female', '81dc9bdb52d04dc20036dbd8313ed055', '1234567890', 'In which city were you born?', 'morena', 'asset/profile-girl.png'),
(13, 'Nashrullah Ansari', 'nashrullahansari6@gmail.com', 'Male', '46f94c8de14fb36680850768ff1b7f2a', '9056372937', 'In which city were you born?', 'kushinagar', 'asset/profile.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
