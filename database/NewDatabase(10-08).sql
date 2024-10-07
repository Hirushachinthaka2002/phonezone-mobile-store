-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2024 at 09:14 PM
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
-- Table structure for table `assessories`
--

DROP TABLE IF EXISTS `assessories`;
CREATE TABLE `assessories` (
  `accesId` int(16) NOT NULL,
  `accesName` varchar(128) NOT NULL,
  `accesDescription` varchar(128) NOT NULL,
  `accesPrice` varchar(32) NOT NULL,
  `accesPhoto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assessories`
--

INSERT INTO `assessories` (`accesId`, `accesName`, `accesDescription`, `accesPrice`, `accesPhoto`) VALUES
(1, 'Tempered Glass', 'Nillkin Amazing Cp+ Pro Full Screen Tempered Glass For I Phone 13', 'Rs.3,500.00', './photo/Tempered_Glass/iPhone13.png'),
(2, 'Tempered Glass', 'Nillkin Amazing Cp+ Pro Full Screen Tempered Glass For I Phone 13pro', 'Rs.3,500.00', './photo/Tempered_Glass/iPhone13pro.png'),
(3, 'Tempered Glass', 'Nillkin Amazing Cp+ Pro Full Screen Tempered Glass For I Phone 13pro Max', 'Rs.3,500.00', './photo/Tempered_Glass/iPhone13promax.png'),
(4, 'Tempered Glass', 'JC Common Full Coverage Tempered Glass For iPhone 14', 'Rs.3,500.00', './photo/Tempered_Glass/iPhone14.png'),
(5, 'Tempered Glass', 'JC Common Full Coverage Tempered Glass For iPhone 14 Plus', 'Rs.3,500.00', './photo/Tempered_Glass/iPhone14plus.png'),
(6, 'Tempered Glass', 'JC Common Full Coverage Tempered Glass For iPhone 14 Pro', 'Rs.3,500.00', './photo/Tempered_Glass/iPhone14pro.png'),
(7, 'Tempered Glass', 'JC Common Full Coverage Tempered Glass For iPhone 14 Pro Max', 'Rs.3,500.00', './photo/Tempered_Glass/iPhone14promax.png'),
(8, 'Tempered Glass', 'Nillkin Amazing CP+ Max Tempered Glass For OnePlus 7 Pro', 'Rs.3500.00', './photo/Tempered_Glass/oneplus7pro.png'),
(9, 'Tempered Glass', 'Nillkin Amazing CP+ Max Tempered Glass For OnePlus 7T', 'Rs.3500.00', './photo/Tempered_Glass/oneplus7pro.png'),
(10, 'Tempered Glass', 'Nillkin Amazing 3D DS+ Max Tempered Glass For OnePlus 8 Pro', 'Rs.3500.00', './photo/Tempered_Glass/oneplus8pro.png'),
(11, 'Tempered Glass', 'Nillkin Amazing CP+ Pro Full Screen Tempered Glass For OnePlus 9', 'Rs.3500.00', './photo/Tempered_Glass/11.png'),
(12, 'Tempered Glass', 'Nillkin Amazing CP+ Pro Full Screen Tempered Glass For OnePlus 9R', 'Rs.3500.00', './photo/Tempered_Glass/oneplus9R.png'),
(13, 'Tempered Glass', 'Samsung Galaxy A55 Tempered Glass', 'Rs.3500.00', './photo/Tempered_Glass/SamsungGalaxyA55.png'),
(14, 'Tempered Glass', 'Nillkin Amazing 3D DS+ Max Tempered Glass For Samsung Galaxy S20 Ultra', 'Rs.3500.00', './photo/Tempered_Glass/SamsungGalaxyS20ultra.png'),
(15, 'Tempered Glass', 'Nillkin Amazing CP+ Pro Full Screen Tempered Glass For Samsung Galaxy S21', 'Rs.3500.00', './photo/Tempered_Glass/SamsungGalaxyS21.png'),
(16, 'Tempered Glass', 'Nillkin Amazing 3D DS+ Max Tempered Glass For Samsung Galaxy S23 Ultra', 'Rs.3500.00', './photo/Tempered_Glass/SamsungGalaxyS23.png'),
(17, 'Tempered Glass', 'Green Lion 3D Edge Glue Protection Ultra Tempered Samsung Galaxy S23 Tempered Glass', 'Rs.3500.00', './photo/Tempered_Glass/SamsungGalaxyS23ultra.png'),
(18, 'Back Cover', 'Spigen Rugged Amor Case for Apple iPhone 12', 'Rs.2,000.00', './photo/BackCover/1.png'),
(19, 'Back Cover', 'Sipgen Tough Armor Case for Apple iphone 12', 'Rs.2,000.00', './photo/BackCover/2.png'),
(20, 'Back Cover', 'Sipgen iPhone 13 6.1\" 2021 Nitro Force Case', 'Rs.2,000.00', './photo/BackCover/3.png'),
(21, 'Back Cover', 'Sipgen iPhone 14 Case Ultra Hybrid', 'Rs.2,000.00', './photo/BackCover/4.png'),
(22, 'Back Cover', 'Atouch King Kong Armor Anti Burst case For iPhone 14 Pro', 'Rs.2,000.00', './photo/BackCover/5.png'),
(23, 'Back Cover', 'UAG Pathfinder for Magsafe iPhone 14 Pro Max', 'Rs.2,000.00', './photo/BackCover/6.png'),
(24, 'Back Cover', 'Spigen iPhone 14 Pro Case Ultra Hybrid MagFit', 'Rs.2,000.00', './photo/BackCover/7.png'),
(25, 'Back Cover', 'Spigen Ultra Hybrid Case for Samsung Galaxy Note 20 Ultra', 'Rs.2,000.00', './photo/BackCover/8.png'),
(26, 'Back Cover', 'Spigen Liquid Crystal Case for Samsung Galaxy Note 20 Ultra', 'Rs.2,000.00', './photo/BackCover/9.png'),
(27, 'Back Cover', 'Spiigen Slim Armor CS Case for Samsung Galaxy S20 Plus', 'Rs.2,000.00', './photo/BackCover/10.png'),
(28, 'Back Cover', 'Spigen Samsung Galaxy S23 Ultra Case Ultra Hybrid', 'Rs.2,000.00', './photo/BackCover/11.png'),
(29, 'Back Cover', 'Spigen Ultra Hybride Zero one case for Samsung Galaxy S23 Ultra', 'Rs.2,000.00', './photo/BackCover/12.png'),
(30, 'Back Cover', 'Spigen Samsung Galaxy Z Flip 4 Air Skin Glitter case ', 'Rs.2,000.00', './photo/BackCover/13.png'),
(31, 'Back Cover', 'UAG Civillion Series Case For Samsung Galaxy Z Folds', 'Rs.2,000.00', './photo/BackCover/14.png'),
(33, 'Airpods', 'Airpods 1st Generation Apple-B188AP', 'Rs.40,000.00', './photo/airpods/1.png'),
(34, 'Airpods', 'Airpods 2nd Generation Apple-B288AP', 'Rs.40,000.00', './photo/airpods/2.png'),
(35, 'Airpods', 'Airpods Pro 2nd Generation Apple-B698AP MagSafe Charging Case (USB-C)', 'Rs.40,000.00', './photo/airpods/3.png'),
(36, 'Airpods', 'Airpods 3rd Generation Apple-B515Ap', 'Rs.40,000.00', './photo/airpods/4.png'),
(37, 'Airpods', 'Airpods with H1 Processor-Apple', 'Rs.40,000.00', './photo/airpods/5.png'),
(38, 'Charger', 'Apple MagSafe Charger 15W ', 'Rs. 8,000.00', './photo/chargers/1.png'),
(39, 'Charger', 'LDNIO A2526C 45W Dual USB Fast Wall Charger Category', 'Rs. 7,000.00', './photo/chargers/2.png'),
(40, 'Charger', 'Apple 20 W USB-C Power Adapter', 'Rs. 4,000.00', './photo/chargers/3.png'),
(41, 'Charger', 'Samsung - 25W Travel Adapter (Super Fast Charging with USB Type - C Cable)', 'Rs. 6,000.00', './photo/chargers/4.png'),
(42, 'Charger', 'WIWU 65W UCB Type - C Super GAN Fast Wall Charger', 'Rs. 7,000.00', './photo/chargers/5.png'),
(43, 'Headset', 'Logitech H110 Stereo Headset', 'Rs.3,500.00', './photo/Headset/1.png'),
(44, 'Headset', 'A4Tech HS 28i Headphone', 'Rs.5,000.00', './photo/Headset/2.png'),
(45, 'Headset', 'Lenovo 100 Stereo Analogue Headset', 'Rs.7,000.00', './photo/Headset/3.png'),
(46, 'Headset', 'Lenovo Yoga Active Noise Cancellation Headphones', 'Rs.50,000.00', './photo/Headset/4.png'),
(47, 'Headset', 'logitech H110 Stereo Headset', 'Rs.3,500.00', './photo/Headset/5.png'),
(48, 'Headset', 'Logitech H151 Headset', 'Rs.5,000.00', './photo/Headset/6.png'),
(49, 'Headset', 'Havit RGB Gaming Headset 6', 'Rs.8,000.00', './photo/Headset/7.png'),
(50, 'Headset', 'Lenovo HD116 Wireless Headset', 'Rs.12,000.00', './photo/Headset/8.png'),
(51, 'Headset', 'Logitech G233 Prodigy Wired Gaming Headset', 'Rs.15,000.00', './photo/Headset/9.png'),
(52, 'Headset', 'Razer Unveils the Kraken Pro Gaming Headset ', 'Rs.60,000.00', './photo/Headset/10.png'),
(53, 'Power Bank', 'Anker PowerCore Select 20000mAh Power Bank', 'Rs.14,500.00', './photo/powerbanks/1.jpeg'),
(54, 'Power Bank', 'Anker Portable 20000 mAh 22.5W Power Bank with Built-In USB-C Cable - A1647', 'Rs.10,000.00', './photo/powerbanks/2.jpg'),
(55, 'Power Bank', 'Anker PowerCore Essential 20000mAh Powerbank Searies 5 (525)', 'Rs.15,000.00', './photo/powerbanks/3.jpeg'),
(56, 'Power Bank', 'Aspor A322 10000mAh Power Bank with Digital Display', 'Rs.3,000.00', './photo/powerbanks/4.jpeg'),
(57, 'Power Bank', 'Aspor 20000mAh Power Bank With PD Chaging A396', 'Rs.5,500.00', './photo/powerbanks/5.png'),
(58, 'Power Bank', 'Aspor A323 Power Bank 10000mAh 2 Outputs', 'Rs.2,000.00', './photo/powerbanks/6.jpeg'),
(59, 'Power Bank', 'Baseus Star-Lord 30000mAh 22.5W Powerbank (PPXJ080101)', 'Rs.11,000.00', './photo/powerbanks/7.jpeg'),
(60, 'Power Bank', 'Dudao K13 Pro 10000mAh Power Bank', 'Rs.8,500.00', './photo/powerbanks/8.jpeg'),
(61, 'Power Bank', 'Samsung 10000mAh Power Bank', 'Rs.6,000.00', './photo/powerbanks/9.png'),
(62, 'Power Bank', 'Xiaomi 10000mAh 30W Wireless Power Bank', 'Rs.15,000.00', './photo/powerbanks/10.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
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
(5, 'scsd', 'sdsd', 'himashayashodi2020@gmail.com', '$2y$10$oMsk3E0ptUE4XqaTe628X.G8roygRsMBZdzxTiJHjN/fRqo7u173u'),
(6, 'Promod Piyushan', 'Promod', 'pramodpiyushan82@gmail.com', '$2y$10$OhuAN6oj6fri0xPr0dXetOOrFW4.jrHixDarnAVQYze1IVQZwj5Mm');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE `items` (
  `itemsId` int(16) NOT NULL,
  `itemsName` varchar(64) NOT NULL,
  `bHealth` varchar(64) NOT NULL,
  `pRam` varchar(64) NOT NULL,
  `pStorage` varchar(64) NOT NULL,
  `pCamera` varchar(64) NOT NULL,
  `dSize` varchar(64) NOT NULL,
  `priceRange` varchar(64) NOT NULL,
  `pPhoto` text NOT NULL,
  `brand` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemsId`, `itemsName`, `bHealth`, `pRam`, `pStorage`, `pCamera`, `dSize`, `priceRange`, `pPhoto`, `brand`) VALUES
(1, 'Apple iPhone 15 Pro Max', '4441mAH Battery', '8GB RAM', '256GB , 512GB , 1TB', 'Pro Camera System', '6.7\" Super Retina XDR Display', 'Rs.379,900.00 To Rs.504,900.00', './photo/iPhone/iPhone15ProMax.jpg', 'iphone'),
(2, 'Apple iPhone 15 Pro\r\n', '3274mAH Battery', '8 GB RAM', '128GB , 256GB , 512GB, 1TB', 'Pro Camera System : 48MP', '6.1\" LTPO Super Retina XDR OLED Display', 'Rs.329,000.00 To Rs.489,900.00', './photo/iPhone/iPhone15Pro.jpg', 'iphone'),
(3, 'Apple iPhone 15 Plus', '4383mAH Battery', '6GB RAM', '128GB,256GB,512GB', '48MP,2160p', '6.7\" Super Retina XDR OLED,HDR10,Dolby Vision', 'Rs.289,900.00 To Rs.449,900.00', './photo/iPhone/iPhone15Plus.jpg', 'iphone'),
(4, 'Apple iPhone 15', '3349mAH Battery', '6GB RAM', '128GB,256GB,512GB', '48MP,2160p', '6.1\" Super Retina XDR OLED,HDR10,Dolby Vision', 'Rs.259,900.00 To Rs.429,900.00', './photo/iPhone/iPhone15.jpg', 'iphone'),
(5, 'Apple iPhone 14 Pro Max', '4323mAH Battery', '6 GB RAM', '128GB,256GB,512GB,1TB', 'Triple Camera : 48MP / 12MP / 12MP,2160p', '6.7\" LTPO Super Retina XDR OLED,HDR10,Dolby Vision ', ' Rs.339,900.00 To Rs.494,900.00', './photo/iPhone/iPhone14ProMax.jpg', 'iphone'),
(6, 'Apple iPhone 14 Pro', '3200mAH', '6GB RAM', '128GB,256GB,512GB,1TB', 'Triple Camera : 48MP / 12MP / 12MP,2160p', '6.1\"LTPO Super Retina XDR OLED ,HDR10,Dolby Vision', 'Rs.309,900.00 To 454,900.00', './photo/iPhone/iPhone14Pro.jpg', 'iphone'),
(7, 'Apple iPhone 14 Plus', '4323mAH Battery', '6GB RAM ', '128GB,256GB,512GB', '12MP,2160p', '6.7\" Super Retina XDR OLED,HDR10,Dolby Vision', 'Rs.299,900.00 To Rs.424,900.00', './photo/iPhone/iPhone14Plus.jpg', 'iphone'),
(8, 'Apple iPhone 14', '3279mAH', '6GB RAM', '128GB,256GB,512GB', '12MP,2160p', '6.1\" Super Retina XDR OLED,HDR10,Dolby Vision', 'Rs.219,900.00 To 409,900.00', './photo/iPhone/iPhone14.jpg', 'iphone'),
(9, 'Apple iPhone SE(3rd GEN)', '2018mAH Battery', '4GB RAM', '64GB,128GB,256GB', '12MP,2160p', '4.7\" Retina IPS LCD', 'Rs.134,900.00 To Upwards', './photo/iPhone/iPhoneSE3rd.jpg', 'iphone'),
(10, 'Apple iPhone SE(2nd GEN)', '1821mAH Battery', '3GB RAM', '64GB,128GB,256GB', '12MP,2160p', '4.7\" Retina XDR OLED', 'Rs.142,950.00 To Rs.199,900.00', './photo/iPhone/iPhoneSE2nd.jpg', 'iphone'),
(11, 'Apple iPhone 13 Pro Max', '4352mAH', '6GB RAM', '128GB,256GB,512GB,1TB', 'Triple Camera : 12MP,2160p', '6.7\" Super Retina XDR OLED', 'Rs.179,900.00 To Rs.445,000.00', './photo/iPhone/iPhone13ProMax.jpg', 'iphone'),
(12, 'Apple iPhone 13 pro', '3095mAH Battery', '6GB RAM', '128GB,256GB,512GB,1TB', 'Triple Camera : 12MP,2160p', '6.1\" Super Retina XDR OLED', 'Rs.329,900.00 To Rs.598,490.00', './photo/iPhone/iPhone13Pro.jpg', 'iphone'),
(13, 'Apple iPhone 13 Mini', '2438mAH Battery', '4GB RAM', '128GB,256GB,512GB', 'Dual Camera : 12MP,2160p', '5.4\" Super Retina XDR OLED', 'Rs.256,999.00 To Rs.341,475.00', './photo/iPhone/iPhone13mini.jpg', 'iphone'),
(14, 'Apple iPhone 13', '3240mAH Battery', '4GB RAM', '128GB,256GB,512GB', 'Dual Camera : 12MP,2160p', '6.1\" Super Retina XDR OLED', 'Rs.209,900.00 To Rs.309,900.00', './photo/iPhone/iPhone13.jpg', 'iphone'),
(15, 'Apple iPhone 12 Pro Max', '3687mAH Battery', '6GB RAM', '128GB,256GB,512GB', 'Triple Camera : 12MP,2160MP', '6,7\" Super Retina XDR OLED', 'Rs.179,900.00 To Rs.292,900.00', './photo/iPhone/iPhone12ProMax.jpg', 'iphone'),
(16, 'Apple iPhone 12 Pro', '2815mAH Battery', '6GB RAM', '128GB,256GB,512GB', 'Triple Camera : 12MP,2160p', '6.1\" Super Retina XDR OLED', 'Rs.252,900.00 To Rs.308,900.00', './photo/iPhone/iPhone12Pro.jpg', 'iphone'),
(17, 'Apple iPhone 12', '2815mAH Battery', '4GB RAM', '64GB,128GB,256GB', 'Dual Camera : 12MP,2160p', '6.1\" Super Retina XDR OLED', 'Rs.169,900.00 To Upwards', './photo/iPhone/iPhone12.jpg', 'iphone'),
(18, 'Apple iPhone 11 Pro Max', '3969mAH Battery', '4GB RAM', '64GB,128GB,256GB,512GB', 'Triple Camera : 12MP,2160p', '6.5\" Super Retina XDR OLED', 'Rs.214,950.00 To Rs.305,999.00', './photo/iPhone/iPhone11ProMax.jpg', 'iphone'),
(19, 'Apple iPhone 11 Pro', '3046mAH Battery', '4GB RAM', '64GB,256GB,512GB', 'Triple Camera : 12MP,2160p', '5.8\" Super Retina XDR OLED', 'Rs.106,950.00 To Rs.174,900.00', './photo/iPhone/iPhone11Pro.jpg', 'iphone'),
(20, 'Apple iPhone 11', '3110mAH Battery', '4GB RAM', '64GB,128GB,256GB', 'Dual Camera : 12MP,2160p', '6.1\" Super Retina XDR OLED', 'Rs.132,950.00 to Rs.154,900.00', './photo/iPhone/iPhone11.jpg', 'iphone'),
(21, 'Apple iPhone XS Max', '3174mAH Battery', '4GB RAm', '64GB,256GB,512GB', 'Dual Camera : 12MP,2160p', '6.5\" Super Retina XDR OLED', 'Rs.195,450.00 To Rs.234,900.00', './photo/iPhone/iPhoneXSMax.jpg', 'iphone'),
(22, 'Apple iPhone XR', '2942mAH Battery', '3GB RAM', '64GB,128GB,256GB', '12MP,2160p', '6.1\" Liquid Retina IPS LCD', 'Rs.141,750.00 To Rs.187,900.00', './photo/iPhone/iPhoneXR.jpg', 'iphone'),
(23, 'Apple iPhone 8 Plus', '2691mAH Battery', '3GB RAM', '64GB,128GB,256GB', 'Dual Camera : 12MP,2160p', '5.5\" Retina IPS LCD', 'Rs.129,000.00 To Rs.141,000.00', './photo/iPhone/iPhone8Plus.jpg', 'iphone'),
(24, 'Samsung Galaxy Z Folds5', '4400mAH Battery', '12GB RAM', '256GB,512GB,1TB', 'Tripple Camera', '7.6\" Dynamic AMOLED 2X', 'Rs.462,857.00', './photo/Samsung/SamsungGalaxyzfolds.jpg', 'Samsung'),
(25, 'Samsung Galaxy Z Flip', '3300mAH Battery', '8GB RAM ', '256GB', '12MP,2160p', '7.6\" Dynamic AMOLED 2X', 'Rs.344,996.00', './photo/Samsung/SamsungGalaxyzflip.jpg', 'Samsung'),
(26, 'Samsung Galaxy S24 Ultra', '5000mAH Battery', '12GB RAM', '256GB,512GB,1TB', '200MP,4320p', '6.8\" Dynamic LTPO AMOLED 2X', 'Rs.274,900.00 To Rs.531,150.00', './photo/Samsung/SamsungGalaxys24ultra.jpg', 'Samsung'),
(27, 'Samsung Galaxy S24+', '4900mAH Battery', '12GB RAM', '256GB,512GB', '50MP,4320p', '6.7\" Dynamic LTPO AMOLED 2X', 'Rs.309,000 To Upwards', './photo/Samsung/SamsungGalaxys24Plus.jpg', 'Samsung'),
(28, 'Samsung Galaxy S24', '4000mAH Battery', '8GB<12GB RAM', '128GB,256GB', '50MP,4320MP', '6.8\" Dynamic LTPO AMOLED 2X', 'Rs.209,000.00 To Rs.275,000.00', './photo/Samsung/SamsungGalaxys24.jpg', 'Samsung'),
(29, 'Samsung Galaxy S23 FE', '4500mAH', '8GB RAM', '128GB,256GB', '50MP,4320p', '6.4\" Dynamic AMOLED 2X', 'Rs.172,496.55 To 238,940.00', './photo/Samsung/SamsungGalaxy s23Fe.jpg', 'Samsung'),
(30, 'Samsung Galaxy S23', '3900mAH Battery', '8GB RAM', '128GB,256GB,512GB', '50MP / 12MP / 10MP', '6.1\" Dynamic AMOLED 2X', 'Rs.162,950.55 To Rs.205,000.00', './photo/Samsung/SamsungGalaxys23.jpg', 'Samsung'),
(31, 'Samsung Galaxy S22 Ultra 5G ', '5000mAH Battery', '8GB , 12GB RAM', '128GB,256GB,1TB', '108MP,4320p', '6.1\" Dynamic AMOLED 2X', 'Rs.283,402.55 To Rs.354,990.00', './photo/Samsung/SamsungGalaxy s22ultra5G.jpg', 'Samsung'),
(32, 'Samsung Galaxy S22 5G', '3700mAH Battery\r\n', '8GB', '128Gb,256GB', '50MP,4320p', '6.1\" Dynamic AMOLED 2X', 'Rs.139,000.00 To Rs.189,000.00', './photo/Samsung/SamsungGalaxys22 5G.jpg', 'Samsung'),
(33, 'Samsung Galaxy S21 Ultra 5G ', '5000mAH Battery', '12GB,16GB RAM', '128GB , 256GB , 512GB', '108MP,4320p', '6.8\" Dynamic AMOLED 2X', 'Rs.265,000.00 To Rs.345,000.00', './photo/Samsung/SamsungGalaxys21ultra5G.jpg', 'Samsung'),
(34, 'Samsung Galaxy S21 5G', '4000mAH Battery', '8GB RAM', '128GB , 256GB', '64MP,4320p', '6.2\" Dynamic AMOLED 2X', 'Rs.177,900.00 To Upwards', './photo/Samsung/SamsungGalaxys22 5G.jpg', 'Samsung'),
(35, 'Samsung Galaxy A55', '5000mAH Battery', '6GB , 8GB , 12GB RAM', '128GB ,256GB', '50MP,2160p', '6.6\" Super AMOLED', 'Rs.109,000.00 To Rs.Upwards', './photo/Samsung/SamsungGalaxya55.jpg', 'Samsung'),
(36, 'Samsung Galaxy M55', '4000mAH Battery', '8GB , 12GN RAM', '128GB , 256GB', '50MP , 2160p', '6.7\" Super AMOLED+', 'Rs.118,900.00 To Rs.131,000.00', './photo/Samsung/SamsungGalaxym55.jpg', 'Samsung'),
(37, 'Samsung Galaxy M34 5G', '6000mAH Battery', '6GB , 8GB RAM', '128GB , 256GB', '50MP,2160p', '6.5\" Super AMOLED', 'Rs.58,000.00 To Rs.62,990.00', './photo/Samsung/Samsung Galaxym345G.jpg', 'Samsung'),
(38, 'Google Pixel 8a', '4492mAH', '8GB RAM', '128GB , 256GB ', 'Dual Camera : 64MP /13MP , 2160p', '6.1\" OLED,HDR', 'Rs.194,270.00 To Rs.214,000.00', './photo/pixel/pixel8a.jpg', 'googlepixel'),
(39, 'Google Pixel 8 Pro', '5050mAH Battery', '12GB RAM', '128GB,256GB,512GB,1TB', 'Tripple Camera : 50MP / 48MP / 48MP , 2160p', '6.7\" LTPO OLED , HDR10+', 'Rs.259,900.00 To Rs.369,900.00', './photo/pixel/pixel8pro.jpg', 'googlepixel'),
(40, 'Google Pixel 8', '4575mAH Battery', '8GB RAM', '128GB , 256GB', 'Dual Camera : 50MP / 12MP , 2160p', '6.2\" OLED , HDR10+', 'Rs.199,900.00 To Rs.229,900.00', './photo/pixel/pixel8.jpg', 'googlepixel'),
(41, 'Google Pixel Fold', '4821mAH Battery', '12GB RAM', '256GB', 'Triple Camera : 48MP / 10.8MP / 10.8MP , 2160p', '7.6\" Foldable OLED ,HDR10+', 'Rs.644,900.00', './photo/pixel/pixelfold.jpg', 'googlepixel'),
(42, 'Google Pixel 7a', '4385mAH Battery', '8GB RAM', '128GB', 'Dual Camera : 64MP / 13MP ,2160p', '6.1\" OLED, HDR', 'Rs.149,900.00', './photo/pixel/pixel7a.jpg', 'googlepixel'),
(43, 'Google Pixel 7 Pro', '5000mAH Battery', '8GB , 12GB RAM', '128GB , 256GB , 512GB', 'Triple Camera : 50MP / 48MP / 12MP ,2160p', '6.1\" OLED ,HDR', 'Rs.149,900.00 To Rs.299,900.00', './photo/pixel/pixel7apro.jpg', 'googlepixel'),
(44, 'Google Pixel 7', '4355mAH Battery', '8GB RAM', '128GB , 256GB', 'Dual Camera : 50MP / 12MP ,2160p', '6.3\" AMOLED ,HDR10+', 'Rs.149,900.00 To Rs.299,900.00', './photo/pixel/pixel7.jpg', 'googlepixel'),
(45, 'Google Pixel 6a', '4410mAH Battery', '6GB RAM', '128GB', 'Dual Camera : 2.2MP / 12MP , 2160p', '6.1\" OLED ,HDR', 'Rs.99,000.00', './photo/pixel/pixel6a.jpg', 'googlepixel'),
(46, 'Google Pixel 6 Pro', '5003mAH Battery', '12GB RAM', '128GB , 256GB , 512GB', 'Triple Camera : 50MP / 48MP / 12MP , 2160p', '6.1\" LTPO AMOLED , HDR10+', 'Rs.123,900.00 To Rs.184,900.00', './photo/pixel/pixel6apro.jpg', 'googlepixel'),
(47, 'Google Pixel 6', '4614mAH Battery', '8GB RAM', '128GB ,256GB', 'Dual Camera : 50MP / 12MP ,2160p ', '6.4\" AMOLED ,HDR10+', 'Rs.102,500.00 to Rs.145,000.00', './photo/pixel/pixel6.jpg', 'googlepixel'),
(48, 'Google Pixel 5A 5G', '4680mAH Battery', '6GB RAM', '128GB', 'Dual Camera : 16MP / 12.2MP , 2160p', '6.4\" AMOLED ,HDR10+', 'Rs.134,900.00', './photo/pixel/pixel5a.jpg', 'googlepixel'),
(49, 'Google Pixel 5', '4080mAH Battery', '68GB RAM', '126GB', 'Dual Camera : 16MP / 12.2MP , 2160p', '6.4\" OLED ,HDR10+', 'Rs.149,900.00', './photo/pixel/pixel5.jpg', 'googlepixel'),
(50, 'Google Pixel 4 XL', '3700mAH Battery', '6GB RAM', '64GB , 128GB', 'Dual Camera : 12.2MP / 16MP ,2160p', '6.3\" P-OLED ,HDR', 'Rs.62,900.00 T0 Rs.189,900.00', './photo/pixel/pixel4xl.jpg', 'googlepixel'),
(51, 'Google Pixel 4A 5G', '3885mAH Battery', '6GB RAM', '128GB', 'Dual Camera : 16MP / 12.2MP ,2160p', '6.2\" OLED,HDR10+', 'Rs.115,900.00', './photo/pixel/pixel4a5G.jpg', 'googlepixel'),
(52, 'Google Pixel 4A ', '3140mAH Battery', '6GB RAM', '128GB', '12.2MP , 2160p', '5.81\" OLED,HDR', 'Rs.62,900.00', './photo/pixel/pixel4a.jpg', 'googlepixel'),
(53, 'Google Pixel 4', '2800mAH Battery', '6GB RAM', '64GB ,128GB', 'Dual Camera : 12.2MP / 16MP ,2160p', '5.7\" P-OLED,HDR', 'Rs.129,900.00 To Rs.253,785.00', './photo/pixel/pixel4.jpg', 'googlepixel'),
(54, 'Huawei Mate 60 Pro', '5000mAH Battery', '12GB RAM', '256GB , 512GB , 1TB', '50MP Camera', '6.82\"OLED', 'Rs.236,886 To 285,206.00', './photo/Huawei/Huawei_Mate_60_Pro.jpg', 'Huawei '),
(55, 'Huawei Mate 60 RS Ultimate', '5000mAH Battery', '16GB RAM', '', '50MP Camera', '6.82\" OLED', 'Rs.348,048.00 To Rs.425,392.00', './photo/Huawei/Huawei_Mate_60_RS_Ultimate.jpg', 'Huawei '),
(56, 'Huawei Mate X5', '5060mAH Battery', '12 / 16 RAM', '', '50 MP , 12 MP , 13 MP Triple camera ', '7.85\" OLED', 'Rs.345,060.00 To Rs.531,740.00', './photo/Huawei/Huawei_Mate_X5.jpg', 'Huawei '),
(57, 'Huawei nova 11 SE', '4500mAH Battery', '8GB RAM', '256GB / 512GB , no card shot', '108MP Camera', '6.67\" OLED', 'Rs.72,510.00 To Rs.96,680.00', './photo/Huawei/Huawei_nova_11_SE.jpg', 'Huawei '),
(58, 'Huawei nova 12s', '4500mAH Battery', '8GB RAM', '256GB ,no card slot', '50MP Main Camera , 60MP Selfie Camera', '6.7\" OLED', 'Rs.72,510.00 To Rs.84,585.00 ', './photo/Huawei/Huawei_nova_12s.jpg', 'Huawei '),
(59, 'Huawei nova Y72', '6000mAH Battery', '8GB RAM', '128HB / 256GB ,no card slot', '50MP Camera', '6.75\"OLED', 'Rs.54,383.00 To Rs.66.468.00', './photo/Huawei/Huawei_nova_Y72.jpg', 'Huawei '),
(60, 'Huawei P60 Pro', '4815mAH Battery', '8 / 12GB RAM', '256GB / 512GB ', '48MP Camera', '6.67\" OLED', 'Rs.241,700.00 To Rs.265,870.00', './photo/Huawei/Huawei_P60_Pro.jpg', 'Huawei '),
(61, 'Huawei Pocket 2', '4520mAH Battery', '12 / 16GB RAM', '256GB / 512GB / 1TB ,NM', '50MP Camera', '6.94\" OLED', 'Rs.210,279.00 To Rs.258,619.00', './photo/Huawei/Huawei_Pocket_2.jpg', 'Huawei '),
(62, 'Huawei Pura 70', '4900mAH Battery', '12GB RAM', '256GB / 512GB / 1TB ,no card slot', '50MP Camera', '6.6\" OLED', 'Rs.326,295.00 to Rs.374,655.00', './photo/Huawei/Huawei_Pura_70.jpg', 'Huawei '),
(63, 'Huawei Pura 70 Ultra', '5200mAH Battery', '16GB RAM', '512GB / 1TB', '50MP Camera', '6.8\" OLED', 'Rs.302.125.00 To Rs.350,465.00', './photo/Huawei/Huawei_Pura_70_Ultra.jpg', 'Huawei '),
(64, 'Huawei nova 12i', '5000mAH Battery', '8GB RAM', '128GB / 256GB , no card slot', '108MP Camera', '6.7\" Display', 'Rs.65,259.00 To 79,761.00', './photo/Huawei/Huaweinova12i.jpg', 'Huawei '),
(65, 'Huawei nova 12 Ultra', '4600mAH Battery', '12GB RAM', '512GB / 1TB ,no card slot', '50MP Camera', '6.76\" OLED', 'Rs.145,020.00 To Rs.174,024.00', './photo/Huawei/Huaweinova12Ultra.jpg', 'Huawei '),
(66, 'Huawei nova Y91', '7000mAH Battery', '6 / 8 GB', '128GB / 256GB', '50MP ,2MP Camera', '6.95\" OLED', 'Rs.62,842.00 To Rs.77,344.00', './photo/Huawei/HuaweinovaY91.jpg', 'Huawei '),
(67, 'Huawei Pura 70 Pro+', '5050mAH Battery', '16GB RAM', '512GB / 1TB ', '50MP Camera ', '6.8\" OLED', 'Rs.152,271.00 To Rs.186,109.00', './photo/Huawei/HuaweiPura70Pro+.jpg', 'Huawei '),
(68, 'Redmi A2+', 'Long-lasting 5000mAH (typ)battery', '2GB / 3GB RAM', '32GB / 64GB Storage', '8MP AI dual camera system', '', 'Rs.27,990.00', './photo/redmi/RedmiA2+.png', 'Redmi'),
(69, 'Redmi A3', 'Massive 5000mAH(typ)battery', '8GB RAM', '1TB Storage', '', '6.71\" display', 'Rs.30,000.00 To Rs.33,000.00', './photo/redmi/RedmiA3.png', 'Redmi'),
(70, 'Redmi 12', 'Large 5000mAH Battery', '16GB RAM', '', '50MP AI triple camera', 'Large 90Hz FHD+display', 'Rs.47,490.00 To Rs.49,990.00', './photo/redmi/Redmi12.png', 'Redmi'),
(71, 'Redmi 12c', '50000mAH Long lasting battery', '11GB RAM', '1TB Storage', '50M_ AI Dual Camera', 'Immersive 6.71\" display', 'Rs.31,990 To Rs.39,990.00', './photo/redmi/Redmi12c.png', 'Redmi'),
(72, 'Redmi 13c', 'Massive 5000mAH (typ)battery', '16GB RAM', '1TB Storage', '50MP AI triple camera', 'Smooth 6.74\"  90Hz display', 'Rs.40,490.00 To Rs.48,490.00', './photo/redmi/Redmi13c.png', 'Redmi'),
(73, 'Redmi Note 12', '500mAH battery', '8GB RAM', '1TB Storage', '50MP Triple Camera Setup', '120Hz AMOLED Display', 'Rs.57,490.00 To 69,990.00', './photo/redmi/Redminote12.png', 'Redmi'),
(74, 'Redmi Note 12 Pro (5G)', '5000mAH Battery', '8GB / 12GB', '128GB Storage', '50MP + 8MP + 2MP triple camera', 'Vivid 120Hz AMOLED display', 'Rs.98,990.00 To Rs.109,990.00', './photo/redmi/Redminote12pro.png', 'Redmi'),
(75, 'Redmi Note 13', '33W fast charging with 5000mAH battery', '6 GB / 12GB RAM', '128GB /256GB Storage', 'Super-clear 108MP triple camera', '120Hz FHD+AMOLED display', 'Rs.64,490.00 To Rs.70,490.00', './photo/redmi/Redminote13.png', 'Redmi'),
(76, 'Redmi Note 13 Pro', '7W turbo charging with 5000mAH Battery', '12GB / 8GB RAM', '256GB / 512GB Storage', 'Ultra-clear 200MP camera with OIS', '6.67\" 120Hz FHD+AMOLED display', 'Rs.99,990.00 To Rs.114,990.00', './photo/redmi/Redminote13pro.png', 'Redmi'),
(77, 'Realme 6i', '5000mAH Massive Battery', '4GB RAM', '128GB Storage', '48MP AI Quad Camera,16MP Super Clear Selfie AI Beauty', '6.5\" Display', 'Rs.52,600.00', './photo/realme/Realme6i.jpg', 'Realme'),
(78, 'Realme 7', '5000mAH Lithium-ion Battery', '8GB RAM', '128GB Storage', '64MP+8MP+2MP+2MP,16MP Front camera', '6.6\" Full HD + Display', 'Rs.74,200.00', './photo/realme/Realme7.jpg', 'Realme'),
(79, 'Realme 8', 'Li-Po 5000mAH Battery', '8GB RAM', '128GB Storage', '64MP AI Quad Camera', '6.4\" Display', 'Rs.75,300.00', './photo/realme/Realme8.jpg', 'Realme'),
(80, 'Realme C11', '5000mAH Massive Battery', '2GB RAM', '32GB Storage', '8MP Camera', '6.52\" Display', 'Rs.36000.00', './photo/realme/RealmeC11.jpg', 'Realme'),
(81, 'Realme C12', '6000mAH Lithium-ion Battery', '3GB RAM', '32GB Storage', '13MP+2MP+25MP,16MP Front camera', '6.52\" HD + Display', 'Rs.32,600.00', './photo/realme/RealmeC12.jpg', 'Realme'),
(82, 'Realme C15', '6000mAH Battery', '4GB RAM', '128GB Storage', '13MP Quad camera,8MP Selfie camera', '6.5\" Display', 'Rs.39,600.00', './photo/realme/RealmeC15.jpg', 'Realme'),
(83, 'Realme C20', 'Li-Po 5000mAH Battery', '2GB RAM', '32GB Storage', '8MP Main camera,5MP Selfie camera', '6.5\" Display', 'Rs.24,400.00', './photo/realme/RealmeC20.jpg', 'Realme'),
(84, 'Realme C30s', 'Li-Po 5000mAH Battery', '4GB RAM', '64GB Storage', '8MP (Wide) camera', '6.5\" Display', 'Rs.46,200.00', './photo/realme/RealmeC30s.jpg', 'Realme'),
(85, 'Realme C51 4G', 'Li-Po 5000mAH Battery', '4GB RAM', '128GB Storage', '50MP (Wide) camera', '6.74\" Display', 'Rs.52,000.00', './photo/realme/RealmeC51.jpg', 'Realme'),
(86, 'Realme C53', 'Li-Po 5000mAH Battery', '8GB RAM', '256GB Storage', 'Dual Camera', '6.74\" Display', 'Rs.52,000.00', './photo/realme/RealmeC53.jpg', 'Realme'),
(87, 'Realme C55', '5000mAH Battery', '8GB RAM', '256GB Storage', '64MP,8MP Cameras', '6.72\" Display', 'Rs.61,700.00', './photo/realme/RealmeC55.jpg', 'Realme'),
(88, 'Realme X50 Pro 5G', '4200mAH Battery', '12GB RAM', '256GB Storage', '64MP Quad Camera', '6.44\" Display', 'Rs.145,700.00', './photo/realme/RealmeX50pro.jpg', 'Realme'),
(89, 'OPPO A15', 'Li-Po 4230mAH Battery', '3GB RAM', '32GB Storage', 'Main Camera 13MP,f/2.2(wide),PDAF', '6.52\" IPS LCD Display', 'Rs.25,799.00', './photo/OPPO/OPPO-A15.jpg', 'oppo'),
(90, 'OPPO A17', '5000mAH Long-lasting Battery', '4GB RAM', '64GB Storage', '50MP AI Camera', '6.56\" Display', 'Rs.39,950.00', './photo/OPPO/OPPO-A17.jpg', 'oppo'),
(91, 'OPPO A17k', 'Li-Po 5000mAH Battery', '3GB RAM', '64GB Storage', 'Main Camera : 8MP, Selfie Camera : 5MP', '6.56\" Display', 'Rs.48,100.00', './photo/OPPO/OPPO-A17k.jpg', 'oppo'),
(92, 'OPPO A18', ' 5000mAH Battery', '4GB RAM', '1TB Storage', 'Main Camera : 8MP', '6.56\" IPS LCD Display', 'Rs.32,500.00', './photo/OPPO/OPPO-A18.jpg', 'oppo'),
(93, 'OPPO A38', 'Li-Po 4230mAH Battery', '4GB RAM', '128GB Storage', 'Main Camera 50MP', '6.56\" inches LCD Display', 'Rs.58,900.00', './photo/OPPO/OPPO-A38.jpg', 'oppo'),
(94, 'OPPO A58', '5000mAH Battery', '6GB RAM', '128GB Storage', '50MP Main,2MP Mono, 8MP Front Camera', '6.56\" IPS LCD ', 'Rs.70,990.00', './photo/OPPO/OPPO-A58.jpg', 'oppo'),
(95, 'OPPO A77s', ' 5000mAH Li-Po Battery', '8GB RAM', '128GB Storage', 'Main Camera 50MP', '6.56\" IPS LCD ', 'Rs.63,990.00 To Rs.66,500.00', './photo/OPPO/OPPO-A77s.jpg', 'oppo'),
(96, 'OPPO F11', 'Non-removable Li-Po 4020mAH Battery', '4GB / 6GB', '64GB / 128GB Storage', 'Main Camera 48MP', '6.53\" LTPS IPS LCD ', 'Rs.43,990.00 To Rs.46,500.00', './photo/OPPO/OPPO-F11.jpg', 'oppo'),
(97, 'OPPO F17', 'Li-Po 4015mAH Battery', '8GB RAM', '128GB Storage', 'Main Camera 16MP', '6.44\" Display', 'Rs.50,500.00', './photo/OPPO/OPPO-F17.jpg', 'oppo'),
(98, 'OPPO A78', '5000mAH Large Battery', '8GB RAM', '256GB Storage', '50MP Main Camera ,Selfie Camera', '6.5\" IPS LCD', 'Rs.105,990.00', './photo/OPPO/OPPO-A78.jpg', 'oppo'),
(99, 'VIVO Y02', '5000mAH (TYP) Battery', '3GB RAM', '32GB Storage', '8MP Rear and 5MP Front Camera', '6.51\" IPS LSD ', 'Rs.36,000.00 To Rs.38,950.00', './photo/VIVO/VIVO-Y02.jpg', 'VIVO '),
(100, 'VIVO Y02t', '5000mAH (TYP) Battery', '4GB RAM', '64GB Storage', ' Front 5MP / Rear and 8MP Camera', '6.51\" LCD(IPS)', 'Rs.35,200.00', './photo/VIVO/VIVO-Y02t.jpg', 'VIVO '),
(101, 'VIVO Y03', '5000mAH Non-removable Li-Po Battery', '4GB RAM', '128GB Storage', ' Single Rear and 5MP Front Camera', '6.56\" IPS LCD', 'Rs.16,919.00 To Rs.21,753.00', './photo/VIVO/VIVO-Y03.jpg', 'VIVO '),
(102, 'VIVO Y16', '5000mAH (TYP) Battery', '4GB RAM', '64GB Storage', ' Front 5MP / Rear 13MP+2MP Camera', '6.56\" IPS LCD', 'Rs.54,500.00 To Rs.21,753.00', './photo/VIVO/VIVO-Y16.jpg', 'VIVO '),
(103, 'VIVO Y17s', '5000mAH (TYP) Battery', '6GB RAM', '128GB Storage', ' Front 8MP / Rear 50MP +2MP Camera', '6.56\" LCD', 'Rs.53,000.00 To Rs.55,900.00', './photo/VIVO/VIVO-Y17s.jpg', 'VIVO '),
(104, 'VIVO Y27s', '5000mAH (TYP) Battery', '8GB RAM', '256GB Storage', ' 8MP / Rear 50MP +2MP Camera', '6.64\" LCD', 'Rs.72,500.00', './photo/VIVO/VIVO-Y27s.jpg', 'VIVO '),
(105, 'VIVO Y30', '5000mAH Battery', '4GB RAM', '128GB Storage', ' 13MP ,8MP Camera', '6.47\" IPS LCD', 'Rs.35,000.00 To Rs.40,000.00', './photo/VIVO/VIVO-Y30.jpg', 'VIVO '),
(106, 'VIVO Y36', '5000mAH (TYP) Battery', '8GB RAM', '128GB Storage', ' Front :16MP  Rear :50MP+ 2MP Bokeh', '6.64\" LCD', 'Rs.76,990.00', './photo/VIVO/VIVO-Y36.jpg', 'VIVO '),
(107, 'VIVO Y53s', '5000mAH Li-Po Battery', '8GB RAM', '256GB Storage', ' Front 16MP / Rear 64MP+2MP+2MP', '6.58\" LCD(IPS)', 'Rs.109,990.00', './photo/VIVO/VIVO-Y53s.jpg', 'VIVO '),
(108, 'VIVO V29', '4600mAH (TYP) Battery', '12GB RAM', '256GB Storage', ' Front 50MP / Rear 50MP+8MP wide-angle+2MP', '6.78\" LCD', 'Rs.154,990.00', './photo/VIVO/VIVO-V29.jpg', 'VIVO '),
(109, 'Sony Xperia 1 II ', '4000mAH Battery', '8GB / 12GB RAM', '256GB Storage', '12MP,8MP Camera', '6.5\" OLED', 'Rs.146,229.00 To Rs.198,546.00', './photo/sony/sonyxperia1II.jpg', 'Sony '),
(110, 'Sony Xperia 1 IV', '5000mAH Battery', '12GB / 16GB RAM', '256GB / 512GB Storage', '12MP Camera', '6.5\" OLED', 'Rs.174,024.00 To Rs.528,990.00', './photo/sony/sonyxperia1IV.jpg', 'Sony '),
(111, 'Sony Xperia 1 V', '5000mAH Battery', '12GB RAM', '256GB / 512GB RAM', '48MP / 12MP Camera', '6.5\" OLED', 'Rs.284,049.00 To Rs.315,650.00', './photo/sony/sonyxperia1V.jpg', 'Sony '),
(112, 'Sony Xperia 1 VI', '5000mAH Battery', '12GB RAM', '256GB Storage', '48MP,12MP Camera', '6.5\" OTPO OLED', 'Rs.350.465.00 To Rs.383,990.00', './photo/sony/sonyxperia1VI.jpg', 'Sony '),
(113, 'Sony Xperia 5 IV', '5000mAH Battery', '8GB RAM', '128GB / 256GB Storage', '12MP Camera', '6.1\" OLED', 'Rs.210,279.00 To Rs.383,990.00', './photo/sony/sonyxperia5IV.jpg', 'Sony '),
(114, 'Sony Xperia 5 V', '5000mAH Battery', '8GB RAM', '128GB / 256GB Storage', '48MP,12MP Camera', '6.1\" OLED', 'Rs.235,705.00 To Rs.348,648.00', './photo/sony/sonyxperia5V.jpg', 'Sony '),
(115, 'Sony Xperia 10 IV', '5000mAH Battery', '6GB RAM', '128GB Storage', '12MP , 8MP Camera', '6.0\" OLED', 'Rs.104,430.00 To Rs.188,990.00', './photo/sony/sonyxperia10IV.jpg', 'Sony '),
(116, 'Sony Xperia 10 V', '5000mAH Battery', '6GB / 8GB RAM', '128GB Storage', '48MP , 8MP Camera', '6.1\" OLED', 'Rs.106,348.00 To Rs.216,596.00', './photo/sony/sonyxperia10V.jpg', 'Sony '),
(117, 'Sony Xperia 10 VI', '5000mAH Battery', '8GB RAM', '128GB Storage', '48MP / 8MP Camera', '6.1\" OLED', 'Rs.139,284.00 To Rs.147,205.00', './photo/sony/sonyxperia10VI.jpg', 'Sony '),
(118, 'Sony Xperia Pro-I', '4500mAH Battery', '12GB RAM', '512GB Storage', '12MP,8MP Camera', '6.5\" OLED', 'Rs.304,542.00 To 372,218.00', './photo/sony/sonyxperiapro1.jpg', 'Sony '),
(119, 'Honor 90', '5000mAH Battery', '8GB / 16GB RAM', '256GB / 512GB Storage', '200MP,50MP,12MP Camera', '6.7\" AMOLED', 'Rs.76,136.00 To Rs.164,990.00', './photo/honor/honor90.jpg', 'Honor '),
(120, 'Honor 90 Lite', '4500mAH Battery', '4GB/8GB RAM', '256GB Storage', '100MP,16MP Camera', '6.7\" IPS LCD', 'Rs.91,900.00', './photo/honor/honor90lite.jpg', 'Honor '),
(121, 'Honor 200 Pro', '5200mAH Battery', '12GB / 16GB RAM', '256GB/512GB/1TB Storage', '50MP,12MP Camera', '6.78\" OLED', 'Rs.96,680.00 To Rs.125,684.00', './photo/honor/honor200pro.jpg', 'Honor '),
(122, 'Honor Magic6 Pro', '5600mAH Battery', '12GB/16GB RAM', '256GB/512GB/1TB Storage', '180MP,50MP Camera', '6.8\" LTPO OLED', 'Rs.174,024.00 To Rs.257,544.00', './photo/honor/honormagic6pro.jpg', 'Honor '),
(123, 'Honor Magic V2', '5000mAH Battery', '16GB RAM', '256GB/512Gb/1TB Storage', '50MP,16MP Camera', '7.92\" Foldable LTPO OLED', 'Rs.164,356.00 To Rs.216,564.00', './photo/honor/honormagicV2.jpg', 'Honor '),
(124, 'Honor X6a', '5200mAH Battery', '4GB/6GB RAM', '128GB/256GB Storage', '50MP,5MP Camera', '5.56\" TFT LCD', 'Rs.37,464.00 To Rs.52,560.00', './photo/honor/honorx6a.jpg', 'Honor '),
(125, 'Honor X7a', '6000mAH Battery', '4GB/6GB RAM', '128GB Storage', '50MP,8MP Camera', '6.75\" TFT LCD', 'Rs.51,490.00 To Rs.75,480.00', './photo/honor/honorx7a.jpg', 'Honor '),
(126, 'Honor X8a', '4500mAH Battery', '4GB /12GB RAM', '128GB/256GB Storage', '100MP,16MP Camera', '6.7\" IPS LCD', 'Rs.61,690.00 To Rs.87,000.00', './photo/honor/honorx8a.jpg', 'Honor '),
(127, 'Honor X9b', '5800mAH Battery', '8GB / 12GB RAM', '256GB/512GB Storage', '108MP,16MP Camera', '6.78\" AMOLED', 'Rs.89,401.00 To Rs.145,131.00', './photo/honor/honorX9b.jpg', 'Honor '),
(128, 'Honor X50', '5800mAH Battery', '8GB / 16GB RAM', '128GB/256GB/512GB Storage', '108MP,8MP Camera', '6.78\" AMOLED', 'Rs.82,990.00 Rs.130,200.00', './photo/honor/honorx50.jpg', 'Honor '),
(129, 'Tecno Camon 20', '5000mAH Battery', '8GB RAM', '256GB ', '64MP Camera', '6.67\" OLED', 'Rs.72,510.00 To Rs.84,595.00', './photo/tecno/tecno-camon20-pro.jpg', 'Tecno '),
(130, 'Tecno Camon 20s Pro 5G', '5000mAH Battery', '8GB RAM', '128GB / 256GB', '64MP Camera', '6.67\" OLED', 'Rs.54,383.00 To Rs. 66,468.00', './photo/tecno/tecno-camon20-pro-5g.jpg', 'Tecno '),
(131, 'Tecno Camon 30 5G', '5000mAH Battery', '8GB / 12GB RAM', '256GB / 512GB', '50MP camera', '6.78\" OLED', 'Rs.53,174.00 To Rs.67,676.00', './photo/tecno/tecno-camon-30-5g.jpg', 'Tecno '),
(132, 'Tecno Camon 30 Premier', '5000mAH Battery', '12GB RAM', '512GB', '50MP Camera', '6.77\" Display', 'Rs.43,506.00 To Rs.53,174.00', './photo/tecno/tecno-camon-30-Premier-5g.jpg', 'Tecno '),
(133, 'Tecno Phantom V Fold', '5000mAH Battery', '12GB RAM', '256GB/512GB', '50MP Camera', '7.85\" OLED', 'Rs.241,700.00 To Rs.277,955.00', './photo/tecno/tecno-phantom-v-fold.jpg', 'Tecno '),
(134, 'Tecno Pop 7', '5000mAH Battery', '2GB RAM', '64GB', '8MP Camera', '6.6\" OLED', 'Rs.19,336.00 To Rs.24,170.00', './photo/tecno/tecno-pop7.jpg', 'Tecno '),
(135, 'Tecno Pova 5', '6000mAH Battery', '8GB RAM', '128GB/256GB', '50MP Camera', '6.78\" OLED', 'Rs.43,506.00 To Rs.50,757.00', './photo/tecno/tecno-pova-5.jpg', 'Tecno '),
(136, 'Tecno Pova 6 Neo', '7000mAH Battery', '8GB RAM', '128GB/256GB', '50MP Camera', '6.78\" OLED', 'Rs.36,672.00 To Rs.48,340.00', './photo/tecno/tecno-pova-6-neo.jpg', 'Tecno '),
(137, 'Tecno Pova 6 Pro', '6000mAH Battery', '8GB/12GB RAM', '256GB', '108MP Camera', '6.78\" OLED', 'Rs.45,923.00 To Rs.55,591.00', './photo/tecno/tecno-pova-6-pro-11.jpg', 'Tecno '),
(138, 'Tecno Pova Neo 3', '7000mAH Battery', '4GB/8GB RAM', '128GB', '16MP Camera', '6.82\" OLED', 'Rs.39,881.00 To Rs.48,340.00', './photo/tecno/tecno-pova-neo-3.jpg', 'Tecno '),
(139, 'Tecno Spark 10 5G', '5000mAH Battery', '4GB/8GB RAM', '64GB/128GB/256GB', '50MP Camera', '6.6\" OLED', 'Rs.32,630.00 To Rs.39,881.00', './photo/tecno/tecno-spark10-5g.jpg', 'Tecno '),
(140, 'Tecno Spark 10C', '5000mAH Battery', '8GB RAM', '128GB', '16MP Camera', '6.6\" OLED', 'Rs.34,990.00 To Rs.34,990.00', './photo/tecno/tecno-spark-10c.jpg', 'Tecno '),
(141, 'Tecno Spark 20', '5000mAH Battery', '8GB RAM', '256GB', '50MP Camera', '6.6\" OLED', 'Rs.39,881.00 To Rs.47,132.00', './photo/tecno/tecno-spark-20.jpg', 'Tecno '),
(142, 'Tecno Spark 20 Pro 5G', '5000mAH Battery', '8GB RAM', '256GB', '108MP Camera', '6.78\" OLED', 'Rs.33,838.00 To Rs.39,881.00', './photo/tecno/tecno-spark-20-pro-5g.jpg', 'Tecno '),
(143, 'Tecno Spark Go 2024', '5000mAH Battery', '3GB/4GB RAM ', '64GB/128GB', '13MP Camera', '6.6\" OLED', 'Rs.21,753.00 To Rs.26,587.00', './photo/tecno/tecno-spark-go-2024.jpg', 'Tecno '),
(144, 'Infinix GT 10 Pro', '5000mAH Battery', '8GB RAM ', '256GB', '108MP Camera', '6.67\" OLED', 'Rs.55,591.00 To Rs.65,259.00', './photo/infinix/infinix-gt10-pro-5g.jpg', 'Infinix '),
(145, 'Infinix GT 20 Pro', '5000mAH Battery', '8GB / 12GB RAM', '512GB', '108MP Camera', '6.78\" OLED', 'Rs.60,425.00 To Rs.77,344.00', './photo/infinix/infinix-gt20-pro.jpg', 'Infinix '),
(146, 'Infinix Hot 30 5G', '5000mAH Battery', '4GB / 8GB RAM', '128GB', '50MP Camera', '6.78\" OLED', 'Rs.31,421.00 To Rs.38,672', './photo/infinix/infinix-hot-30-5g.jpg', 'Infinix '),
(147, 'Infinix Note 40 5G', '5000mAH Battery', '12GB RAM', '512GB', '108MP Camera', '6.78\" OLED', 'Rs.48,340.00 To Rs.72,510.00', './photo/infinix/infinix-note40-5g.jpg', 'Infinix '),
(148, 'Infinix Note 40 Pro+', '4600mAH Battery', '12GB RAM', '256GB', '108MP Camera', '6.78\" OLED', 'Rs.65,259.00 To Rs.79,761.00', './photo/infinix/infinix-note-40-pro-plus-5g-.jpg', 'Infinix '),
(149, 'Infinix Smart 8 HD', '5000mAH Battery', '3GB RAM', '64GB', '13MP Camera', '6.6\" OLED', 'Rs.20,545.00 To Rs.24,170.00', './photo/infinix/infinix-smart-8-hd.jpg', 'Infinix '),
(150, 'Infinix Smart 8 Plus', '6000mAH Battery', '4GB RAM', '64GB / 128GB', '50MP Camera', '6.6\" OLED', 'Rs.31,421.00 To Rs.41,089.00', './photo/infinix/infinix-smart-8-plus.jpg', 'Infinix '),
(151, 'Infinix Smart 8 Pro', '5000mAH Battery', '4GB / 8GB RAM', '64GB / 128GB', '50MP Camera', '6.6\" OLED', 'Rs.34,999.00 To Rs.35,900.00', './photo/infinix/infinix-smart-8-pro.jpg', 'Infinix '),
(152, 'Infinix Zero 30 4G', '5000mAH Battery', '8GB RAM', '256GB', '108MP Camera', '6.78\" OLED', 'Rs.93,990.00', './photo/infinix/infinix-zero-30-4g.jpg', 'Infinix '),
(153, 'Infinix Hot 40 Pro', '5000mAH Battery', '8GB RAM', '128GB / 256GB', '108MP Camera', '6.78\" OLED', 'Rs.39,881.00 To Rs.48,340.00', './photo/infinix/infinix-hot-40-pro.jpg', 'Infinix ');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `ordersId` int(225) NOT NULL,
  `usersName` varchar(64) NOT NULL,
  `usersCountry` varchar(64) NOT NULL,
  `usersAddress` varchar(128) NOT NULL,
  `usersPcode` varchar(32) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersCnum` int(32) NOT NULL,
  `brandName` varchar(64) NOT NULL,
  `brandType` varchar(64) NOT NULL,
  `brandColour` varchar(12) NOT NULL,
  `brandStorage` varchar(32) NOT NULL,
  `orderedDate` date NOT NULL,
  `userUid` int(225) NOT NULL,
  `status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ordersId`, `usersName`, `usersCountry`, `usersAddress`, `usersPcode`, `usersEmail`, `usersCnum`, `brandName`, `brandType`, `brandColour`, `brandStorage`, `orderedDate`, `userUid`, `status`) VALUES
(1, 'Hirusha Chinthaka Senarathna', 'Sri lanka', 'Kuliyapitiya', '60222', 'hirushachinthaka05@gmail.com', 770797556, '', 'Apple iPhone 15 Pro Max', 'red', '128', '2024-10-08', 2, 'confirmed'),
(2, 'Hirusha Chinthaka', 'Sri Lanaka', 'Kurunegala', '60222', 'hirushachinthaka445@gmail.com', 770797556, '', 'Nillkin Amazing Cp+ Pro Full Screen Tempered Glass For I Phone 1', '', '', '2024-10-08', 2, 'confirmed'),
(3, 'Hirusha Chinthaka', 'Sri Lanaka', 'Kurunegala', '60222', 'hirushachinthaka05@gmail.com', 770797556, '', 'Google Pixel 8a', 'black', '64', '2024-10-08', 2, 'confirmed'),
(4, 'Hirusha Chinthaka', 'Srilanaka', 'Kuliyapitiya', '60222', 'hirushachinthaka05@gmail.com', 771176751, '', 'Airpods 1st Generation Apple-B188AP', 'red', '64', '2024-10-08', 2, 'confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

DROP TABLE IF EXISTS `owners`;
CREATE TABLE `owners` (
  `usersId` int(32) NOT NULL,
  `usersName` int(128) NOT NULL,
  `usersUid` varchar(64) NOT NULL,
  `UsersEmail` varchar(64) NOT NULL,
  `usersPwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`usersId`, `usersName`, `usersUid`, `UsersEmail`, `usersPwd`) VALUES
(1, 0, 'Hiru', 'hirushachinthaka445@gmail.com', '$2y$10$RxSBMgh2d0JUZGFgAWWcwuK8Z6f4lQzxtzfbum/dH7zRSgV1VD9/K'),
(2, 0, 'Pramod', 'pramodpiyushan82@gmail.com', '$2y$10$G5m5D7EwmyLY.bfuuFvJv.XiJ5NxIxB/SmBcMc9mw4KFu6VcmsAE2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assessories`
--
ALTER TABLE `assessories`
  ADD PRIMARY KEY (`accesId`);

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
-- AUTO_INCREMENT for table `assessories`
--
ALTER TABLE `assessories`
  MODIFY `accesId` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `usersId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `itemsId` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ordersId` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `usersId` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
