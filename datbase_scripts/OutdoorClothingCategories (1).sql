-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Mar 28, 2025 at 10:32 PM
-- Server version: 8.0.17
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dg224`
--

-- --------------------------------------------------------

--
-- Table structure for table `OutdoorClothingCategories`
--

CREATE TABLE IF NOT EXISTS `OutdoorClothingCategories` (
  `CategoryID` int(11) NOT NULL,
  `CategoryCode` varchar(10) NOT NULL,
  `CategoryName` varchar(255) NOT NULL,
  `AisleNumber` int(11) NOT NULL,
  `DateCreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `OutdoorClothingCategories`
--

INSERT INTO `OutdoorClothingCategories` (`CategoryID`, `CategoryCode`, `CategoryName`, `AisleNumber`, `DateCreated`) VALUES
(1, 'WJ', 'Waterproof Jacket', 1, '2025-03-15 18:41:43'),
(2, 'HBS', 'Hiking Boots', 2, '2025-03-15 18:41:46'),
(3, 'UVPH', 'UV Protection Hat', 3, '2025-03-15 18:41:48'),
(4, 'IGS', 'Insulated Gloves', 4, '2025-03-15 18:41:49'),
(5, 'FHD', 'Fleece-lined Hoodie', 5, '2025-03-15 18:41:51'),
(6, 'BN', 'Beanie', 6, '2025-03-28 18:32:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `OutdoorClothingCategories`
--
ALTER TABLE `OutdoorClothingCategories`
 ADD PRIMARY KEY (`CategoryID`), ADD UNIQUE KEY `CategoryCode` (`CategoryCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
