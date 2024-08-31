-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2024 at 10:38 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phonezone_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `usersId` int(12) NOT NULL,
  `usersName` varchar(64) NOT NULL,
  `usersUid` varchar(32) NOT NULL,
  `usersEmail` varchar(32) NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`usersId`, `usersName`, `usersUid`, `usersEmail`, `usersPwd`) VALUES
(1, 'Hirusha Chinthka', 'Hiru', 'hirushachinthka445@gmail.com', '$2y$10$Lt4CWU8Sso.mIOAQMgroZufyO'),
(2, 'Chinthaka Senarthna', 'sena', 'hirushachinthaka05@gmail.com', '$2y$10$wvmxb0u3zFlg1c9SeKd3qOfERroicCUiwjJN/TKb5klmKNpUWuSaC'),
(4, 'hiru', 'chin', 'hirushachinthaka445@gmail.com', '$2y$10$myInQKdy3AfPrkHq/L5QguCAdfJS0NaEPghlQHu7jImuIc5gHF4D2'),
(5, 'scsd', 'sdsd', 'himashayashodi2020@gmail.com', '$2y$10$oMsk3E0ptUE4XqaTe628X.G8roygRsMBZdzxTiJHjN/fRqo7u173u');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ordersId` int(12) NOT NULL,
  `usersName` varchar(64) NOT NULL,
  `usersCountry` varchar(32) NOT NULL,
  `usersAddress` varchar(64) NOT NULL,
  `usersPcode` varchar(16) NOT NULL,
  `usersEmail` varchar(32) NOT NULL,
  `usersCnum` int(12) NOT NULL,
  `brandName` varchar(32) NOT NULL,
  `brandType` varchar(32) NOT NULL,
  `brandColour` varchar(16) NOT NULL,
  `brandStorage` varchar(16) NOT NULL,
  `orderedDate` date NOT NULL,
  `userUid` int(16) NOT NULL,
  `status` enum('pending','canceled','accepted') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ordersId`, `usersName`, `usersCountry`, `usersAddress`, `usersPcode`, `usersEmail`, `usersCnum`, `brandName`, `brandType`, `brandColour`, `brandStorage`, `orderedDate`, `userUid`, `status`) VALUES
(5, 'Hirusha', 'sri Lanka', 'tharana', '2344', 'hirushachinthka05@gmail.com', 770797556, 'iphone', 'apple-iphone-15-pro-max', 'red', '128', '2024-07-02', 0, 'pending'),
(6, 'hiru', 'sri', 'thra', '2323', 'hirushachinthaka05@gmail.com', 770797556, 'tempered', 'nillkin-amazing-3d-ds+-max-tempe', 'red', '128', '2024-07-04', 0, 'pending'),
(7, 'sdd', 'sddssd', 'ddsds', 'ssdds', 'hirushachinthaka445@gmail.com', 770797556, 'redmi', 'redmi-13c', 'blue', '256', '2024-07-04', 0, 'pending'),
(8, 'hiru', 'h', 'knk', '787', 'hirushachinthaka445@gmail.com', 770797556, 'redmi', 'redmi-12c', 'white', '128', '2024-07-04', 0, 'pending'),
(9, 'hi', 'ef', 'fef', '232', 'hirushachinthaka445@gmail.com', 770797556, 'tecno', 'tecno-pova-6-pro', 'red', '256', '2024-07-04', 5, 'pending'),
(10, 'dw', 'dw', 'w', '11', 'hirushachinthaka05@gmail.com', 770797556, 'iphone', 'apple-iphone-12-pro-max', 'black', '128', '2024-07-04', 2, 'pending'),
(11, 'aj', 'ak', 'aj', '22', 'hirushachinthaka445@gmail.com', 770797556, 'iphone', 'apple-iphone-13', 'red', '256', '2024-07-05', 2, 'pending'),
(12, 'jkka', 'xj', 'as', 'as', 'hirushachinthaka445@gmail.com', 770797556, 'redmi', 'redmi-13c', 'blue', '128', '2024-07-05', 2, 'pending'),
(13, 'sd', 'ss', 'sds', 'ds', 'hirushachinthaka05@gmail.com', 770797556, 'vivo', 'vivo-y02t', 'white', '128', '2024-07-08', 2, 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`usersId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ordersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `usersId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ordersId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
