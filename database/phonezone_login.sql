-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2024 at 06:38 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

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
CREATE DATABASE IF NOT EXISTS `phonezone_login` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `phonezone_login`;

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
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `itemsId` int(16) NOT NULL,
  `itemsName` varchar(64) NOT NULL,
  `bHealth` varchar(64) NOT NULL,
  `pRam` varchar(64) NOT NULL,
  `pStorage` varchar(64) NOT NULL,
  `pCamera` varchar(64) NOT NULL,
  `dSize` varchar(64) NOT NULL,
  `priceRange` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemsId`, `itemsName`, `bHealth`, `pRam`, `pStorage`, `pCamera`, `dSize`, `priceRange`) VALUES
(1, 'Apple iPhone 15 Pro Max', '4441mAH Battery', '8GB RAM', '256GB , 512GB , 1TB', 'Pro Camera System', '6.7\" Super Retina XDR Display', 'Rs.379,900.00 To Rs.504,900.00'),
(2, 'Apple iPhone 15 Pro\r\n', '3274mAH Battery', '8 GB RAM', '128GB , 256GB , 512GB, 1TB', 'Pro Camera System : 48MP', '6.1\" LTPO Super Retina XDR OLED Display', 'Rs.329,000.00 To Rs.489,900.00'),
(3, 'Apple iPhone 15 Plus', '4383mAH Battery', '6GB RAM', '128GB,256GB,512GB', '48MP,2160p', '6.7\" Super Retina XDR OLED,HDR10,Dolby Vision', 'Rs.289,900.00 To Rs.449,900.00'),
(4, 'Apple iPhone 15', '3349mAH Battery', '6GB RAM', '128GB,256GB,512GB', '48MP,2160p', '6.1\" Super Retina XDR OLED,HDR10,Dolby Vision', 'Rs.259,900.00 To Rs.429,900.00'),
(5, 'Apple iPhone 14 Pro Max', '4323mAH Battery', '6 GB RAM', '128GB,256GB,512GB,1TB', 'Triple Camera : 48MP / 12MP / 12MP,2160p', '6.7\" LTPO Super Retina XDR OLED,HDR10,Dolby Vision ', ' Rs.339,900.00 To Rs.494,900.00'),
(6, 'Apple iPhone 14 Pro', '3200mAH', '6GB RAM', '128GB,256GB,512GB,1TB', 'Triple Camera : 48MP / 12MP / 12MP,2160p', '6.1\"LTPO Super Retina XDR OLED ,HDR10,Dolby Vision', 'Rs.309,900.00 To 454,900.00'),
(7, 'Apple iPhone 14 Plus', '4323mAH Battery', '6GB RAM ', '128GB,256GB,512GB', '12MP,2160p', '6.7\" Super Retina XDR OLED,HDR10,Dolby Vision', 'Rs.299,900.00 To Rs.424,900.00'),
(8, 'Apple iPhone 14', '3279mAH', '6GB RAM', '128GB,256GB,512GB', '12MP,2160p', '6.1\" Super Retina XDR OLED,HDR10,Dolby Vision', 'Rs.219,900.00 To 409,900.00'),
(9, 'Apple iPhone SE(3rd GEN)', '2018mAH Battery', '4GB RAM', '64GB,128GB,256GB', '12MP,2160p', '4.7\" Retina IPS LCD', 'Rs.134,900.00 To Upwards'),
(10, 'Apple iPhone SE(2nd GEN)', '1821mAH Battery', '3GB RAM', '64GB,128GB,256GB', '12MP,2160p', '4.7\" Retina XDR OLED', 'Rs.142,950.00 To Rs.199,900.00'),
(11, 'Apple iPhone 13 Pro Max', '4352mAH', '6GB RAM', '128GB,256GB,512GB,1TB', 'Triple Camera : 12MP,2160p', '6.7\" Super Retina XDR OLED', 'Rs.179,900.00 To Rs.445,000.00'),
(12, 'Apple iPhone 13 pro', '3095mAH Battery', '6GB RAM', '128GB,256GB,512GB,1TB', 'Triple Camera : 12MP,2160p', '6.1\" Super Retina XDR OLED', 'Rs.329,900.00 To Rs.598,490.00'),
(13, 'Apple iPhone 13 Mini', '2438mAH Battery', '4GB RAM', '128GB,256GB,512GB', 'Dual Camera : 12MP,2160p', '5.4\" Super Retina XDR OLED', 'Rs.256,999.00 To Rs.341,475.00'),
(14, 'Apple iPhone 13', '3240mAH Battery', '4GB RAM', '128GB,256GB,512GB', 'Dual Camera : 12MP,2160p', '6.1\" Super Retina XDR OLED', 'Rs.209,900.00 To Rs.309,900.00'),
(15, 'Apple iPhone 12 Pro Max', '3687mAH Battery', '6GB RAM', '128GB,256GB,512GB', 'Triple Camera : 12MP,2160MP', '6,7\" Super Retina XDR OLED', 'Rs.179,900.00 To Rs.292,900.00'),
(16, 'Apple iPhone 12 Pro', '2815mAH Battery', '6GB RAM', '128GB,256GB,512GB', 'Triple Camera : 12MP,2160p', '6.1\" Super Retina XDR OLED', 'Rs.252,900.00 To Rs.308,900.00'),
(17, 'Apple iPhone 12', '2815mAH Battery', '4GB RAM', '64GB,128GB,256GB', 'Dual Camera : 12MP,2160p', '6.1\" Super Retina XDR OLED', 'Rs.169,900.00 To Upwards'),
(18, 'Apple iPhone 11 Pro Max', '3969mAH Battery', '4GB RAM', '64GB,128GB,256GB,512GB', 'Triple Camera : 12MP,2160p', '6.5\" Super Retina XDR OLED', 'Rs.214,950.00 To Rs.305,999.00'),
(19, 'Apple iPhone 11 Pro', '3046mAH Battery', '4GB RAM', '64GB,256GB,512GB', 'Triple Camera : 12MP,2160p', '5.8\" Super Retina XDR OLED', 'Rs.106,950.00 To Rs.174,900.00'),
(20, 'Apple iPhone 11', '3110mAH Battery', '4GB RAM', '64GB,128GB,256GB', 'Dual Camera : 12MP,2160p', '6.1\" Super Retina XDR OLED', 'Rs.132,950.00 to Rs.154,900.00'),
(21, 'Apple iPhone XS Max', '3174mAH Battery', '4GB RAm', '64GB,256GB,512GB', 'Dual Camera : 12MP,2160p', '6.5\" Super Retina XDR OLED', 'Rs.195,450.00 To Rs.234,900.00'),
(22, 'Apple iPhone XR', '2942mAH Battery', '3GB RAM', '64GB,128GB,256GB', '12MP,2160p', '6.1\" Liquid Retina IPS LCD', 'Rs.141,750.00 To Rs.187,900.00'),
(23, 'Apple iPhone 8 Plus', '2691mAH Battery', '3GB RAM', '64GB,128GB,256GB', 'Dual Camera : 12MP,2160p', '5.5\" Retina IPS LCD', 'Rs.129,000.00 To Rs.141,000.00'),
(24, 'Samsung Galaxy Z Folds5', '4400mAH Battery', '12GB RAM', '256GB,512GB,1TB', 'Tripple Camera', '7.6\" Dynamic AMOLED 2X', 'Rs.462,857.00'),
(25, 'Samsung Galaxy Z Flip', '3300mAH Battery', '8GB RAM ', '256GB', '12MP,2160p', '7.6\" Dynamic AMOLED 2X', 'Rs.344,996.00'),
(26, 'Samsung Galaxy S24 Ultra', '5000mAH Battery', '12GB RAM', '256GB,512GB,1TB', '200MP,4320p', '6.8\" Dynamic LTPO AMOLED 2X', 'Rs.274,900.00 To Rs.531,150.00'),
(27, 'Samsung Galaxy S24+', '4900mAH Battery', '12GB RAM', '256GB,512GB', '50MP,4320p', '6.7\" Dynamic LTPO AMOLED 2X', 'Rs.309,000 To Upwards'),
(28, 'Samsung Galaxy S24', '4000mAH Battery', '8GB<12GB RAM', '128GB,256GB', '50MP,4320MP', '6.8\" Dynamic LTPO AMOLED 2X', 'Rs.209,000.00 To Rs.275,000.00'),
(29, 'Samsung Galaxy S23 FE', '4500mAH', '8GB RAM', '128GB,256GB', '50MP,4320p', '6.4\" Dynamic AMOLED 2X', 'Rs.172,496.55 To 238,940.00'),
(30, 'Samsung Galaxy S23', '3900mAH Battery', '8GB RAM', '128GB,256GB,512GB', '50MP / 12MP / 10MP', '6.1\" Dynamic AMOLED 2X', 'Rs.162,950.55 To Rs.205,000.00'),
(31, 'Samsung Galaxy S22 Ultra 5G ', '5000mAH Battery', '8GB , 12GB RAM', '128GB,256GB,1TB', '108MP,4320p', '6.1\" Dynamic AMOLED 2X', 'Rs.283,402.55 To Rs.354,990.00'),
(32, 'Samsung Galaxy S22 5G', '3700mAH Battery\r\n', '8GB', '128Gb,256GB', '50MP,4320p', '6.1\" Dynamic AMOLED 2X', 'Rs.139,000.00 To Rs.189,000.00'),
(33, 'Samsung Galaxy S21 Ultra 5G ', '5000mAH Battery', '12GB,16GB RAM', '128GB , 256GB , 512GB', '108MP,4320p', '6.8\" Dynamic AMOLED 2X', 'Rs.265,000.00 To Rs.345,000.00'),
(34, 'Samsung Galaxy S21 5G', '4000mAH Battery', '8GB RAM', '128GB , 256GB', '64MP,4320p', '6.2\" Dynamic AMOLED 2X', 'Rs.177,900.00 To Upwards'),
(35, 'Samsung Galaxy A55', '5000mAH Battery', '6GB , 8GB , 12GB RAM', '128GB ,256GB', '50MP,2160p', '6.6\" Super AMOLED', 'Rs.109,000.00 To Rs.Upwards'),
(36, 'Samsung Galaxy M55', '4000mAH Battery', '8GB , 12GN RAM', '128GB , 256GB', '50MP , 2160p', '6.7\" Super AMOLED+', 'Rs.118,900.00 To Rs.131,000.00'),
(37, 'Samsung Galaxy M34 5G', '6000mAH Battery', '6GB , 8GB RAM', '128GB , 256GB', '50MP,2160p', '6.5\" Super AMOLED', 'Rs.58,000.00 To Rs.62,990.00'),
(38, 'Google Pixel 8a', '4492mAH', '8GB RAM', '128GB , 256GB ', 'Dual Camera : 64MP /13MP , 2160p', '6.1\" OLED,HDR', 'Rs.194,270.00 To Rs.214,000.00'),
(39, 'Google Pixel 8 Pro', '5050mAH Battery', '12GB RAM', '128GB,256GB,512GB,1TB', 'Tripple Camera : 50MP / 48MP / 48MP , 2160p', '6.7\" LTPO OLED , HDR10+', 'Rs.259,900.00 To Rs.369,900.00'),
(40, 'Google Pixel 8', '4575mAH Battery', '8GB RAM', '128GB , 256GB', 'Dual Camera : 50MP / 12MP , 2160p', '6.2\" OLED , HDR10+', 'Rs.199,900.00 To Rs.229,900.00'),
(41, 'Google Pixel Fold', '4821mAH Battery', '12GB RAM', '256GB', 'Triple Camera : 48MP / 10.8MP / 10.8MP , 2160p', '7.6\" Foldable OLED ,HDR10+', 'Rs.644,900.00'),
(42, 'Google Pixel 7a', '4385mAH Battery', '8GB RAM', '128GB', 'Dual Camera : 64MP / 13MP ,2160p', '6.1\" OLED, HDR', 'Rs.149,900.00'),
(43, 'Google Pixel 7 Pro', '5000mAH Battery', '8GB , 12GB RAM', '128GB , 256GB , 512GB', 'Triple Camera : 50MP / 48MP / 12MP ,2160p', '6.1\" OLED ,HDR', 'Rs.149,900.00 To Rs.299,900.00'),
(44, 'Google Pixel 7', '4355mAH Battery', '8GB RAM', '128GB , 256GB', 'Dual Camera : 50MP / 12MP ,2160p', '6.3\" AMOLED ,HDR10+', 'Rs.149,900.00 To Rs.299,900.00'),
(45, 'Google Pixel 6a', '4410mAH Battery', '6GB RAM', '128GB', 'Dual Camera : 2.2MP / 12MP , 2160p', '6.1\" OLED ,HDR', 'Rs.99,000.00'),
(46, 'Google Pixel 6 Pro', '5003mAH Battery', '12GB RAM', '128GB , 256GB , 512GB', 'Triple Camera : 50MP / 48MP / 12MP , 2160p', '6.1\" LTPO AMOLED , HDR10+', 'Rs.123,900.00 To Rs.184,900.00'),
(47, 'Google Pixel 6', '4614mAH Battery', '8GB RAM', '128GB ,256GB', 'Dual Camera : 50MP / 12MP ,2160p ', '6.4\" AMOLED ,HDR10+', 'Rs.102,500.00 to Rs.145,000.00'),
(48, 'Google Pixel 5A 5G', '4680mAH Battery', '6GB RAM', '128GB', 'Dual Camera : 16MP / 12.2MP , 2160p', '6.4\" AMOLED ,HDR10+', 'Rs.134,900.00'),
(49, 'Google Pixel 5', '4080mAH Battery', '68GB RAM', '126GB', 'Dual Camera : 16MP / 12.2MP , 2160p', '6.4\" OLED ,HDR10+', 'Rs.149,900.00'),
(50, 'Google Pixel 4 XL', '3700mAH Battery', '6GB RAM', '64GB , 128GB', 'Dual Camera : 12.2MP / 16MP ,2160p', '6.3\" P-OLED ,HDR', 'Rs.62,900.00 T0 Rs.189,900.00'),
(51, 'Google Pixel 4A 5G', '3885mAH Battery', '6GB RAM', '128GB', 'Dual Camera : 16MP / 12.2MP ,2160p', '6.2\" OLED,HDR10+', 'Rs.115,900.00'),
(52, 'Google Pixel 4A ', '3140mAH Battery', '6GB RAM', '128GB', '12.2MP , 2160p', '5.81\" OLED,HDR', 'Rs.62,900.00'),
(53, 'Google Pixel 4', '2800mAH Battery', '6GB RAM', '64GB ,128GB', 'Dual Camera : 12.2MP / 16MP ,2160p', '5.7\" P-OLED,HDR', 'Rs.129,900.00 To Rs.253,785.00'),
(54, 'Huawei Mate 60 Pro', '5000mAH Battery', '12GB RAM', '256GB , 512GB , 1TB', '50MP Camera', '6.82\"OLED', 'Rs.236,886 To 285,206.00'),
(55, 'Huawei Mate 60 RS Ultimate', '5000mAH Battery', '16GB RAM', '', '50MP Camera', '6.82\" OLED', 'Rs.348,048.00 To Rs.425,392.00'),
(56, 'Huawei Mate X5', '5060mAH Battery', '12 / 16 RAM', '', '50 MP , 12 MP , 13 MP Triple camera ', '7.85\" OLED', 'Rs.345,060.00 To Rs.531,740.00'),
(57, 'Huawei nova 11 SE', '4500mAH Battery', '8GB RAM', '256GB / 512GB , no card shot', '108MP Camera', '6.67\" OLED', 'Rs.72,510.00 To Rs.96,680.00'),
(58, 'Huawei nova 12s', '4500mAH Battery', '8GB RAM', '256GB ,no card slot', '50MP Main Camera , 60MP Selfie Camera', '6.7\" OLED', 'Rs.72,510.00 To Rs.84,585.00 '),
(59, 'Huawei nova Y72', '6000mAH Battery', '8GB RAM', '128HB / 256GB ,no card slot', '50MP Camera', '6.75\"OLED', 'Rs.54,383.00 To Rs.66.468.00'),
(60, 'Huawei P60 Pro', '4815mAH Battery', '8 / 12GB RAM', '256GB / 512GB ', '48MP Camera', '6.67\" OLED', 'Rs.241,700.00 To Rs.265,870.00'),
(61, 'Huawei Pocket 2', '4520mAH Battery', '12 / 16GB RAM', '256GB / 512GB / 1TB ,NM', '50MP Camera', '6.94\" OLED', 'Rs.210,279.00 To Rs.258,619.00'),
(62, 'Huawei Pura 70', '4900mAH Battery', '12GB RAM', '256GB / 512GB / 1TB ,no card slot', '50MP Camera', '6.6\" OLED', 'Rs.326,295.00 to Rs.374,655.00'),
(63, 'Huawei Pura 70 Ultra', '5200mAH Battery', '16GB RAM', '512GB / 1TB', '50MP Camera', '6.8\" OLED', 'Rs.302.125.00 To Rs.350,465.00'),
(64, 'Huawei nova 12i', '5000mAH Battery', '8GB RAM', '128GB / 256GB , no card slot', '108MP Camera', '6.7\" Display', 'Rs.65,259.00 To 79,761.00'),
(65, 'Huawei nova 12 Ultra', '4600mAH Battery', '12GB RAM', '512GB / 1TB ,no card slot', '50MP Camera', '6.76\" OLED', 'Rs.145,020.00 To Rs.174,024.00'),
(66, 'Huawei nova Y91', '7000mAH Battery', '6 / 8 GB', '128GB / 256GB', '50MP ,2MP Camera', '6.95\" OLED', 'Rs.62,842.00 To Rs.77,344.00'),
(67, 'Huawei Pura 70 Pro+', '5050mAH Battery', '16GB RAM', '512GB / 1TB ', '50MP Camera ', '6.8\" OLED', 'Rs.152,271.00 To Rs.186,109.00'),
(68, 'Redmi A2+', 'Long-lasting 5000mAH (typ)battery', '2GB / 3GB RAM', '32GB / 64GB Storage', '8MP AI dual camera system', '', 'Rs.27,990.00'),
(69, 'Redmi A3', 'Massive 5000mAH(typ)battery', '8GB RAM', '1TB Storage', '', '6.71\" display', 'Rs.30,000.00 To Rs.33,000.00'),
(70, 'Redmi 12', 'Large 5000mAH Battery', '16GB RAM', '', '50MP AI triple camera', 'Large 90Hz FHD+display', 'Rs.47,490.00 To Rs.49,990.00'),
(71, 'Redmi 12c', '50000mAH Long lasting battery', '11GB RAM', '1TB Storage', '50M_ AI Dual Camera', 'Immersive 6.71\" display', 'Rs.31,990 To Rs.39,990.00'),
(72, 'Redmi 13c', 'Massive 5000mAH (typ)battery', '16GB RAM', '1TB Storage', '50MP AI triple camera', 'Smooth 6.74\"  90Hz display', 'Rs.40,490.00 To Rs.48,490.00'),
(73, 'Redmi Note 12', '500mAH battery', '8GB RAM', '1TB Storage', '50MP Triple Camera Setup', '120Hz AMOLED Display', 'Rs.57,490.00 To 69,990.00'),
(74, 'Redmi Note 12 Pro (5G)', '5000mAH Battery', '8GB / 12GB', '128GB Storage', '50MP + 8MP + 2MP triple camera', 'Vivid 120Hz AMOLED display', 'Rs.98,990.00 To Rs.109,990.00'),
(75, 'Redmi Note 13', '33W fast charging with 5000mAH battery', '6 GB / 12GB RAM', '128GB /256GB Storage', 'Super-clear 108MP triple camera', '120Hz FHD+AMOLED display', 'Rs.64,490.00 To Rs.70,490.00'),
(76, 'Redmi Note 13 Pro', '7W turbo charging with 5000mAH Battery', '12GB / 8GB RAM', '256GB / 512GB Storage', 'Ultra-clear 200MP camera with OIS', '6.67\" 120Hz FHD+AMOLED display', 'Rs.99,990.00 To Rs.114,990.00'),
(77, 'Realme 6i', '5000mAH Massive Battery', '4GB RAM', '128GB Storage', '48MP AI Quad Camera,16MP Super Clear Selfie AI Beauty', '6.5\" Display', 'Rs.52,600.00'),
(78, 'Realme 7', '5000mAH Lithium-ion Battery', '8GB RAM', '128GB Storage', '64MP+8MP+2MP+2MP,16MP Front camera', '6.6\" Full HD + Display', 'Rs.74,200.00'),
(79, 'Realme 8', 'Li-Po 5000mAH Battery', '8GB RAM', '128GB Storage', '64MP AI Quad Camera', '6.4\" Display', 'Rs.75,300.00'),
(80, 'Realme C11', '5000mAH Massive Battery', '2GB RAM', '32GB Storage', '8MP Camera', '6.52\" Display', 'Rs.36000.00'),
(81, 'Realme C12', '6000mAH Lithium-ion Battery', '3GB RAM', '32GB Storage', '13MP+2MP+25MP,16MP Front camera', '6.52\" HD + Display', 'Rs.32,600.00'),
(82, 'Realme C15', '6000mAH Battery', '4GB RAM', '128GB Storage', '13MP Quad camera,8MP Selfie camera', '6.5\" Display', 'Rs.39,600.00'),
(83, 'Realme C20', 'Li-Po 5000mAH Battery', '2GB RAM', '32GB Storage', '8MP Main camera,5MP Selfie camera', '6.5\" Display', 'Rs.24,400.00'),
(84, 'Realme C30s', 'Li-Po 5000mAH Battery', '4GB RAM', '64GB Storage', '8MP (Wide) camera', '6.5\" Display', 'Rs.46,200.00'),
(85, 'Realme C51 4G', 'Li-Po 5000mAH Battery', '4GB RAM', '128GB Storage', '50MP (Wide) camera', '6.74\" Display', 'Rs.52,000.00'),
(86, 'Realme C53', 'Li-Po 5000mAH Battery', '8GB RAM', '256GB Storage', 'Dual Camera', '6.74\" Display', 'Rs.52,000.00'),
(87, 'Realme C55', '5000mAH Battery', '8GB RAM', '256GB Storage', '64MP,8MP Cameras', '6.72\" Display', 'Rs.61,700.00'),
(88, 'Realme X50 Pro 5G', '4200mAH Battery', '12GB RAM', '256GB Storage', '64MP Quad Camera', '6.44\" Display', 'Rs.145,700.00'),
(89, 'OPPO A15', 'Li-Po 4230mAH Battery', '3GB RAM', '32GB Storage', 'Main Camera 13MP,f/2.2(wide),PDAF', '6.52\" IPS LCD Display', 'Rs.25,799.00'),
(90, 'OPPO A17', '5000mAH Long-lasting Battery', '4GB RAM', '64GB Storage', '50MP AI Camera', '6.56\" Display', 'Rs.39,950.00'),
(91, 'OPPO A17k', 'Li-Po 5000mAH Battery', '3GB RAM', '64GB Storage', 'Main Camera : 8MP, Selfie Camera : 5MP', '6.56\" Display', 'Rs.48,100.00'),
(92, 'OPPO A18', ' 5000mAH Battery', '4GB RAM', '1TB Storage', 'Main Camera : 8MP', '6.56\" IPS LCD Display', 'Rs.32,500.00'),
(93, 'OPPO A38', 'Li-Po 4230mAH Battery', '4GB RAM', '128GB Storage', 'Main Camera 50MP', '6.56\" inches LCD Display', 'Rs.58,900.00'),
(94, 'OPPO A58', '5000mAH Battery', '6GB RAM', '128GB Storage', '50MP Main,2MP Mono, 8MP Front Camera', '6.56\" IPS LCD ', 'Rs.70,990.00'),
(95, 'OPPO A77s', ' 5000mAH Li-Po Battery', '8GB RAM', '128GB Storage', 'Main Camera 50MP', '6.56\" IPS LCD ', 'Rs.63,990.00 To Rs.66,500.00'),
(96, 'OPPO F11', 'Non-removable Li-Po 4020mAH Battery', '4GB / 6GB', '64GB / 128GB Storage', 'Main Camera 48MP', '6.53\" LTPS IPS LCD ', 'Rs.43,990.00 To Rs.46,500.00'),
(97, 'OPPO F17', 'Li-Po 4015mAH Battery', '8GB RAM', '128GB Storage', 'Main Camera 16MP', '6.44\" Display', 'Rs.50,500.00'),
(98, 'OPPO A78', '5000mAH Large Battery', '8GB RAM', '256GB Storage', '50MP Main Camera ,Selfie Camera', '6.5\" IPS LCD', 'Rs.105,990.00'),
(99, 'VIVO Y02', '5000mAH (TYP) Battery', '3GB RAM', '32GB Storage', '8MP Rear and 5MP Front Camera', '6.51\" IPS LSD ', 'Rs.36,000.00 To Rs.38,950.00'),
(100, 'VIVO Y02t', '5000mAH (TYP) Battery', '4GB RAM', '64GB Storage', ' Front 5MP / Rear and 8MP Camera', '6.51\" LCD(IPS)', 'Rs.35,200.00'),
(101, 'VIVO Y03', '5000mAH Non-removable Li-Po Battery', '4GB RAM', '128GB Storage', ' Single Rear and 5MP Front Camera', '6.56\" IPS LCD', 'Rs.16,919.00 To Rs.21,753.00'),
(102, 'VIVO Y16', '5000mAH (TYP) Battery', '4GB RAM', '64GB Storage', ' Front 5MP / Rear 13MP+2MP Camera', '6.56\" IPS LCD', 'Rs.54,500.00 To Rs.21,753.00'),
(103, 'VIVO Y17s', '5000mAH (TYP) Battery', '6GB RAM', '128GB Storage', ' Front 8MP / Rear 50MP +2MP Camera', '6.56\" LCD', 'Rs.53,000.00 To Rs.55,900.00'),
(104, 'VIVO Y27s', '5000mAH (TYP) Battery', '8GB RAM', '256GB Storage', ' 8MP / Rear 50MP +2MP Camera', '6.64\" LCD', 'Rs.72,500.00'),
(105, 'VIVO Y30', '5000mAH Battery', '4GB RAM', '128GB Storage', ' 13MP ,8MP Camera', '6.47\" IPS LCD', 'Rs.35,000.00 To Rs.40,000.00'),
(106, 'VIVO Y36', '5000mAH (TYP) Battery', '8GB RAM', '128GB Storage', ' Front :16MP  Rear :50MP+ 2MP Bokeh', '6.64\" LCD', 'Rs.76,990.00'),
(107, 'VIVO Y53s', '5000mAH Li-Po Battery', '8GB RAM', '256GB Storage', ' Front 16MP / Rear 64MP+2MP+2MP', '6.58\" LCD(IPS)', 'Rs.109,990.00'),
(108, 'VIVO V29', '4600mAH (TYP) Battery', '12GB RAM', '256GB Storage', ' Front 50MP / Rear 50MP+8MP wide-angle+2MP', '6.78\" LCD', 'Rs.154,990.00'),
(109, 'Sony Xperia 1 II ', '4000mAH Battery', '8GB / 12GB RAM', '256GB Storage', '12MP,8MP Camera', '6.5\" OLED', 'Rs.146,229.00 To Rs.198,546.00'),
(110, 'Sony Xperia 1 IV', '5000mAH Battery', '12GB / 16GB RAM', '256GB / 512GB Storage', '12MP Camera', '6.5\" OLED', 'Rs.174,024.00 To Rs.528,990.00'),
(111, 'Sony Xperia 1 V', '5000mAH Battery', '12GB RAM', '256GB / 512GB RAM', '48MP / 12MP Camera', '6.5\" OLED', 'Rs.284,049.00 To Rs.315,650.00'),
(112, 'Sony Xperia 1 VI', '5000mAH Battery', '12GB RAM', '256GB Storage', '48MP,12MP Camera', '6.5\" OTPO OLED', 'Rs.350.465.00 To Rs.383,990.00'),
(113, 'Sony Xperia 5 IV', '5000mAH Battery', '8GB RAM', '128GB / 256GB Storage', '12MP Camera', '6.1\" OLED', 'Rs.210,279.00 To Rs.383,990.00'),
(114, 'Sony Xperia 5 V', '5000mAH Battery', '8GB RAM', '128GB / 256GB Storage', '48MP,12MP Camera', '6.1\" OLED', 'Rs.235,705.00 To Rs.348,648.00'),
(115, 'Sony Xperia 10 IV', '5000mAH Battery', '6GB RAM', '128GB Storage', '12MP , 8MP Camera', '6.0\" OLED', 'Rs.104,430.00 To Rs.188,990.00'),
(116, 'Sony Xperia 10 V', '5000mAH Battery', '6GB / 8GB RAM', '128GB Storage', '48MP , 8MP Camera', '6.1\" OLED', 'Rs.106,348.00 To Rs.216,596.00'),
(117, 'Sony Xperia 10 VI', '5000mAH Battery', '8GB RAM', '128GB Storage', '48MP / 8MP Camera', '6.1\" OLED', 'Rs.139,284.00 To Rs.147,205.00'),
(118, 'Sony Xperia Pro-I', '4500mAH Battery', '12GB RAM', '512GB Storage', '12MP,8MP Camera', '6.5\" OLED', 'Rs.304,542.00 To 372,218.00'),
(119, 'Honor 90', '5000mAH Battery', '8GB / 16GB RAM', '256GB / 512GB Storage', '200MP,50MP,12MP Camera', '6.7\" AMOLED', 'Rs.76,136.00 To Rs.164,990.00'),
(120, 'Honor 90 Lite', '4500mAH Battery', '4GB/8GB RAM', '256GB Storage', '100MP,16MP Camera', '6.7\" IPS LCD', 'Rs.91,900.00'),
(121, 'Honor 200 Pro', '5200mAH Battery', '12GB / 16GB RAM', '256GB/512GB/1TB Storage', '50MP,12MP Camera', '6.78\" OLED', 'Rs.96,680.00 To Rs.125,684.00'),
(122, 'Honor Magic6 Pro', '5600mAH Battery', '12GB/16GB RAM', '256GB/512GB/1TB Storage', '180MP,50MP Camera', '6.8\" LTPO OLED', 'Rs.174,024.00 To Rs.257,544.00'),
(123, 'Honor Magic V2', '5000mAH Battery', '16GB RAM', '256GB/512Gb/1TB Storage', '50MP,16MP Camera', '7.92\" Foldable LTPO OLED', 'Rs.164,356.00 To Rs.216,564.00'),
(124, 'Honor X6a', '5200mAH Battery', '4GB/6GB RAM', '128GB/256GB Storage', '50MP,5MP Camera', '5.56\" TFT LCD', 'Rs.37,464.00 To Rs.52,560.00'),
(125, 'Honor X7a', '6000mAH Battery', '4GB/6GB RAM', '128GB Storage', '50MP,8MP Camera', '6.75\" TFT LCD', 'Rs.51,490.00 To Rs.75,480.00'),
(126, 'Honor X8a', '4500mAH Battery', '4GB /12GB RAM', '128GB/256GB Storage', '100MP,16MP Camera', '6.7\" IPS LCD', 'Rs.61,690.00 To Rs.87,000.00'),
(127, 'Honor X9b', '5800mAH Battery', '8GB / 12GB RAM', '256GB/512GB Storage', '108MP,16MP Camera', '6.78\" AMOLED', 'Rs.89,401.00 To Rs.145,131.00'),
(128, 'Honor X50', '5800mAH Battery', '8GB / 16GB RAM', '128GB/256GB/512GB Storage', '108MP,8MP Camera', '6.78\" AMOLED', 'Rs.82,990.00 Rs.130,200.00'),
(129, 'Tecno Camon 20', '5000mAH Battery', '8GB RAM', '256GB ', '64MP Camera', '6.67\" OLED', 'Rs.72,510.00 To Rs.84,595.00'),
(130, 'Tecno Camon 20s Pro 5G', '5000mAH Battery', '8GB RAM', '128GB / 256GB', '64MP Camera', '6.67\" OLED', 'Rs.54,383.00 To Rs. 66,468.00'),
(131, 'Tecno Camon 30 5G', '5000mAH Battery', '8GB / 12GB RAM', '256GB / 512GB', '50MP camera', '6.78\" OLED', 'Rs.53,174.00 To Rs.67,676.00'),
(132, 'Tecno Camon 30 Premier', '5000mAH Battery', '12GB RAM', '512GB', '50MP Camera', '6.77\" Display', 'Rs.43,506.00 To Rs.53,174.00'),
(133, 'Tecno Phantom V Fold', '5000mAH Battery', '12GB RAM', '256GB/512GB', '50MP Camera', '7.85\" OLED', 'Rs.241,700.00 To Rs.277,955.00'),
(134, 'Tecno Pop 7', '5000mAH Battery', '2GB RAM', '64GB', '8MP Camera', '6.6\" OLED', 'Rs.19,336.00 To Rs.24,170.00'),
(135, 'Tecno Pova 5', '6000mAH Battery', '8GB RAM', '128GB/256GB', '50MP Camera', '6.78\" OLED', 'Rs.43,506.00 To Rs.50,757.00'),
(136, 'Tecno Pova 6 Neo', '7000mAH Battery', '8GB RAM', '128GB/256GB', '50MP Camera', '6.78\" OLED', 'Rs.36,672.00 To Rs.48,340.00'),
(137, 'Tecno Pova 6 Pro', '6000mAH Battery', '8GB/12GB RAM', '256GB', '108MP Camera', '6.78\" OLED', 'Rs.45,923.00 To Rs.55,591.00'),
(138, 'Tecno Pova Neo 3', '7000mAH Battery', '4GB/8GB RAM', '128GB', '16MP Camera', '6.82\" OLED', 'Rs.39,881.00 To Rs.48,340.00'),
(139, 'Tecno Spark 10 5G', '5000mAH Battery', '4GB/8GB RAM', '64GB/128GB/256GB', '50MP Camera', '6.6\" OLED', 'Rs.32,630.00 To Rs.39,881.00'),
(140, 'Tecno Spark 10C', '5000mAH Battery', '8GB RAM', '128GB', '16MP Camera', '6.6\" OLED', 'Rs.34,990.00 To Rs.34,990.00'),
(141, 'Recno Spark 20', '5000mAH Battery', '8GB RAM', '256GB', '50MP Camera', '6.6\" OLED', 'Rs.39,881.00 To Rs.47,132.00'),
(142, 'Tecno Spark 20 Pro 5G', '5000mAH Battery', '8GB RAM', '256GB', '108MP Camera', '6.78\" OLED', 'Rs.33,838.00 To Rs.39,881.00'),
(143, 'Tecno Spark Go 2024', '5000mAH Battery', '3GB/4GB RAM ', '64GB/128GB', '13MP Camera', '6.6\" OLED', 'Rs.21,753.00 To Rs.26,587.00'),
(144, 'Infinix GT 10 Pro', '5000mAH Battery', '8GB RAM ', '256GB', '108MP Camera', '6.67\" OLED', 'Rs.55,591.00 To Rs.65,259.00'),
(145, 'Infinix GT 20 Pro', '5000mAH Battery', '8GB / 12GB RAM', '512GB', '108MP Camera', '6.78\" OLED', 'Rs.60,425.00 To Rs.77,344.00'),
(146, 'Infinix Hot 30 5G', '5000mAH Battery', '4GB / 8GB RAM', '128GB', '50MP Camera', '6.78\" OLED', 'Rs.31,421.00 To Rs.38,672'),
(147, 'Infinix Note 40 5G', '5000mAH Battery', '12GB RAM', '512GB', '108MP Camera', '6.78\" OLED', 'Rs.48,340.00 To Rs.72,510.00'),
(148, 'Infinix Note 40 Pro+', '4600mAH Battery', '12GB RAM', '256GB', '108MP Camera', '6.78\" OLED', 'Rs.65,259.00 To Rs.79,761.00'),
(149, 'Infinix Smart 8 HD', '5000mAH Battery', '3GB RAM', '64GB', '13MP Camera', '6.6\" OLED', 'Rs.20,545.00 To Rs.24,170.00'),
(150, 'Infinix Smart 8 Plus', '6000mAH Battery', '4GB RAM', '64GB / 128GB', '50MP Camera', '6.6\" OLED', 'Rs.31,421.00 To Rs.41,089.00'),
(151, 'Infinix Smart 8 Pro', '5000mAH Battery', '4GB / 8GB RAM', '64GB / 128GB', '50MP Camera', '6.6\" OLED', 'Rs.34,999.00 To Rs.35,900.00'),
(152, 'Infinix Zero 30 4G', '5000mAH Battery', '8GB RAM', '256GB', '108MP Camera', '6.78\" OLED', 'Rs.93,990.00'),
(153, 'Infinix Hot 40 Pro', '5000mAH Battery', '8GB RAM', '128GB / 256GB', '108MP Camera', '6.78\" OLED', 'Rs.39,881.00 To Rs.48,340.00');

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
(13, 'sd', 'ss', 'sds', 'ds', 'hirushachinthaka05@gmail.com', 770797556, 'vivo', 'vivo-y02t', 'white', '128', '2024-07-08', 2, 'pending'),
(14, 'efjj', 'dsedw', 'wdw', '2232', 'hirushachinthaka445@gmail.com', 770797556, 'cover', 'spigen-samsung-galaxy-z-flip-4-a', 'blue', '128', '2024-09-13', 2, 'pending'),
(15, 'efjj', 'dsedw', 'wdw', '2232', 'hirushachinthaka445@gmail.com', 770797556, 'powerbank', 'samsung-galaxy-s21', 'blue', '128', '2024-09-01', 2, 'pending'),
(16, 'efjj', 'dsedw', 'wdw', '2232', 'hirushachinthaka445@gmail.com', 770797556, 'iphone', 'apple-iphone-13-pro', 'blue', '128', '2024-09-01', 2, 'pending'),
(17, 'dsdwd', 'dsd', 'wddw', '54', 'hirushachinthaka445@gmail.com', 770797556, 'charger', 'ldnio-charger', 'red', '64', '2024-09-01', 2, 'pending'),
(18, 'dsdwd', 'dsd', 'wddw', '54', 'hirushachinthaka445@gmail.com', 770797556, 'infinix', 'infinix-hot-30-5g', 'white', '64', '2024-09-01', 2, 'pending'),
(19, 'dfsdfdsf', 'sfddsfssfsd', 'dfsfsdf', '12113', 'vidu@gmail.com', 1111111111, 'airpods', 'airpods-h1-processor', 'black', '128', '2024-09-03', 2, 'pending'),
(20, 'hiru', 'jdis', 'ffdf', '656', 'hirushachinthaka445@gmail.com', 770797556, 'charger', 'apple-magsafe-charger', 'blue', '128', '2024-09-01', 2, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `usersId` int(32) NOT NULL,
  `usersName` int(128) NOT NULL,
  `usersUid` varchar(64) NOT NULL,
  `UsersEmail` varchar(64) NOT NULL,
  `usersPwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`usersId`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemsId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ordersId`);

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `usersId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `itemsId` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ordersId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `usersId` int(32) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
