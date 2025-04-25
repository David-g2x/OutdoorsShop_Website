-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Apr 24, 2025 at 11:58 PM
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
-- Table structure for table `OutdoorClothingProducts`
--

CREATE TABLE IF NOT EXISTS `OutdoorClothingProducts` (
  `ProductID` int(11) NOT NULL,
  `ProductCode` varchar(50) DEFAULT NULL,
  `ProductName` varchar(255) NOT NULL,
  `ProductDescription` text NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Size` varchar(50) DEFAULT NULL,
  `Color` varchar(50) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `WholesalePrice` decimal(10,2) NOT NULL,
  `ListPrice` decimal(10,2) NOT NULL,
  `DateCreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `OutdoorClothingProducts`
--

INSERT INTO `OutdoorClothingProducts` (`ProductID`, `ProductCode`, `ProductName`, `ProductDescription`, `Model`, `Size`, `Color`, `CategoryID`, `WholesalePrice`, `ListPrice`, `DateCreated`) VALUES
(1, 'WJ101', 'Supreme x Nike Jacket', 'Created with water and wind-resistant technology. Has reflective details and has a loose fit to it.', 'Storm-FIT', 'M', 'Black', 1, 100.00, 250.00, '2025-03-28 10:10:57'),
(2, 'WJ102', 'Adidas Terrex Multi 2L RAIN.RDY Jacket', 'Waterproof and windproof outdoor jacket with Adidas RAIN.RDY technology. It is designed for all-weather.', 'Terrex Multi 2L RAIN.RDY', 'L', 'Magic Grey', 1, 70.00, 100.00, '2025-03-15 19:01:32'),
(3, 'WJ103', 'The North Face Apex Bionic 3 Hoodie', 'Premium waterproof jacket with groundbreaking breathable technology. It is perfect for all-weather outdoor.', 'Apex Bionic 3', 'L', 'TNF Black', 1, 200.00, 350.00, '2025-03-15 19:01:47'),
(4, 'HBS201', 'Timberland Mt. Maddsen Mid Waterproof Hiking Boots', 'Has waterproof protection for the hikes. AS well as anti-fatigue technology for long-distance hikes.', 'Mt. Maddsen Mid WP', '10', 'Black', 2, 50.00, 99.99, '2025-03-15 19:12:00'),
(5, 'HBS202', 'The North Face VECTIV Exploris Mid FUTURELIGHT Hiking Boots', 'High-performance hiking boots with FUTURELIGHT waterproofing. As well as has a VECTIV midsole to maximize stability and grip.', 'VECTIV Exploris Mid FUTURELIGHT', '11', 'Black/Asphalt Grey', 2, 150.00, 220.00, '2025-03-15 19:12:03'),
(6, 'HBS203', 'Adidas Terrex Free Hiker GORE-TEX Hiking Boots', 'Lightweight and waterproof hiking boots. Has Boost cushioning and Continental rubber outsole to optimize traction.', 'Terrex Free Hiker GTX', '9', 'Blue/Black', 2, 170.00, 250.00, '2025-03-15 19:12:06'),
(7, 'UVPH301', 'Columbia Bora Bora II Booney Hat', 'Breathable, lightweight, and moisture-wicking booney hat. Provides the user with UPF 50  sun protection.', 'Bora Bora II Booney', 'One Size Fits All', 'Fossil', 3, 20.00, 40.00, '2025-03-15 19:18:35'),
(8, 'UVPH302', 'The North Face Horizon Breeze Brimmer Hat', 'A durable sun hat with wide brim. Provides UPF 50 protection.', 'Horizon Breeze Brimmer', 'M/L', 'Grey', 3, 30.00, 55.00, '2025-03-15 19:18:37'),
(9, 'UVPH303', 'Adidas Superlite UPF Performance Cap', 'It''s a lightweight performance cap. Has up to UPF 50 sun protection.', 'Superlite UPF Performance Cap', 'Adjustable', 'Black', 3, 15.00, 30.00, '2025-03-15 19:18:40'),
(10, 'IGS401', 'The North Face Montana Ski Gloves', 'Waterproof and insulated ski gloves. Equipped with DryVent technology for maximum warmth.', 'Montana Ski Gloves', 'L', 'Black', 4, 45.00, 65.00, '2025-03-15 19:26:36'),
(11, 'IGS402', 'Columbia Inferno Range Gloves', 'Thermal-reflective insulated gloves. Has a waterproof shell for extreme cold weather.', 'Inferno Range', 'M', 'Grey', 4, 40.00, 85.00, '2025-03-15 19:26:41'),
(12, 'IGS403', 'Adidas Climaproof Insulated Gloves', 'Are lightweight insulated gloves with waterproof technology. Provides the user with superior comfort.', 'Climaproof Insulated Gloves', 'XL', 'Navy Blue', 4, 8.00, 25.00, '2025-03-15 19:26:44'),
(13, 'FHD501', 'The North Face Gordon Lyons Fleece Hoodie', 'A premium fleece-lined hoodie. It is perfect for cold-weather adventures.', 'Gordon Lyons Fleece Hoodie', 'L', 'Black Heather', 5, 55.00, 84.00, '2025-03-15 19:37:15'),
(14, 'FHD502', 'Columbia Hart Mountain II Fleece Hoodie', 'Soft cotton-blend hoodie with fleece lining. Perfect for the outdoors or for casual wear.', 'Hart Mountain II Fleece Hoodie', 'M', 'River Blue', 5, 25.00, 55.00, '2025-03-15 19:37:17'),
(15, 'FHD503', 'Adidas Essentials Fleece-Lined Hoodie', 'A classic Adidas hoodie with fleece lining. Is designed to provide user with added warmth.', 'Essentials Fleece-Lined Hoodie', 'XS', 'Black', 5, 45.00, 60.00, '2025-03-15 19:37:20'),
(16, 'BN101', 'Supreme Timberland Beanie', 'A collaboration with supreme and Timberland. Part of the Fall/Winter 2021 Collection.', 'FW21', 'Fits All', 'Blue', 6, 20.00, 79.00, '2025-03-28 14:40:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `OutdoorClothingProducts`
--
ALTER TABLE `OutdoorClothingProducts`
 ADD PRIMARY KEY (`ProductID`), ADD UNIQUE KEY `ProductCode` (`ProductCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
