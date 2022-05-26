-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 03:34 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `namera`
--

-- --------------------------------------------------------

--
-- Table structure for table `men_products`
--

CREATE TABLE `men_products` (
  `Id` int(255) NOT NULL,
  `Name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `men_products`
--

INSERT INTO `men_products` (`Id`, `Name`) VALUES
(1, 'round tshirt');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Id` int(255) NOT NULL,
  `Ordered_By` int(255) DEFAULT NULL,
  `base_product` int(255) DEFAULT NULL,
  `Fabric` varchar(255) DEFAULT NULL,
  `Colour` varchar(20) DEFAULT NULL,
  `Printing` int(255) DEFAULT NULL,
  `Quantity` int(255) DEFAULT NULL,
  `additionalInfo` text NOT NULL,
  `deliveryTime` varchar(15) DEFAULT NULL,
  `Order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Id`, `Ordered_By`, `base_product`, `Fabric`, `Colour`, `Printing`, `Quantity`, `additionalInfo`, `deliveryTime`, `Order_date`) VALUES
(31, 24, 1, 'Digital', 'green', 2, 60, 'I want to Fuck', 'Asap', '2022-05-25 21:18:43'),
(32, 24, 1, 'Digital Fabric', 'Red', 2, 60, 'I want to Fuck', 'Asap', '2022-05-25 21:51:16'),
(33, 24, 1, 'Digital Fabric', 'Red', 2, 60, 'I want to Fuck', 'Asap', '2022-05-25 21:52:11'),
(34, 24, 1, 'Digital Fabric', 'Red', 2, 60, 'I want to Fuck', 'Asap', '2022-05-25 21:52:32'),
(35, 24, 1, 'Digital Fabric', 'Red', 2, 60, 'I want to Fuck', 'Asap', '2022-05-25 21:52:48'),
(36, 24, 1, 'Digital Fabric', 'Red', 2, 60, 'I want to Fuck', 'Asap', '2022-05-25 21:53:25'),
(37, 24, 1, 'Digital Fabric', 'Red', 2, 60, 'I want to Fuck', 'Asap', '2022-05-25 21:53:46'),
(39, 24, 1, 'Digital Fabric', 'Red', 2, 60, 'I want to Fuck', 'Asap', '2022-05-25 21:53:57'),
(40, 24, 1, 'Digital Fabric', 'green', 3, 80, 'I want to Fuck', 'Asap', '2022-05-25 21:54:38'),
(41, 24, 1, 'Digital Fabric', 'green', 3, 80, 'I want to Fuck', 'Asap', '2022-05-25 21:55:08'),
(42, 24, 1, 'Digital Fabric', 'green', 3, 80, 'I want to Fuck', 'Asap', '2022-05-25 21:55:42'),
(43, 24, 1, 'Digital Fabric', 'green', 3, 80, 'I want to Fuck', 'Asap', '2022-05-25 22:00:30'),
(44, 24, 1, 'Digital Fabric', 'Red', 3, 60, 'I want to Fuck', 'Asap', '2022-05-25 22:07:44'),
(45, 24, 1, 'Digital Fabric', 'Red', 3, 60, 'I want to Fuck', 'Asap', '2022-05-25 22:10:03'),
(46, 24, 1, 'Digital Fabric', 'Red', 3, 60, 'I want to Fuck', 'Asap', '2022-05-25 22:10:23'),
(47, 24, 1, 'Digital Fabric', 'Red', 3, 60, 'I want to Fuck', 'Asap', '2022-05-25 22:10:46'),
(48, 24, 1, 'Digital Fabric', 'Red', 3, 60, 'I want to Fuck', 'Asap', '2022-05-25 22:21:18'),
(49, 24, 1, 'Digital Fabric', 'Red', 3, 60, 'I want to Fuck', 'Asap', '2022-05-25 22:21:48'),
(50, 24, 1, 'Digital Fabric', 'Red', 3, 60, 'I want to Fuck', 'Asap', '2022-05-25 22:32:03'),
(51, 24, 1, 'Digital Fabric', 'Red', 3, 60, 'I want to Fuck', 'Asap', '2022-05-25 22:32:15'),
(52, 24, 1, 'Digital Fabric', 'Red', 3, 60, 'I want to Fuck', 'Asap', '2022-05-25 22:32:39'),
(53, 24, 1, 'Digital Fabric', 'Red', 3, 60, 'I want to Fuck', 'Asap', '2022-05-25 22:33:13'),
(54, 24, 1, 'Digital Fabric', 'Red', 3, 60, 'I want to Fuck', 'Asap', '2022-05-25 22:33:40'),
(55, 24, 1, 'Digital Fabric', 'Red', 3, 60, 'I want to Fuck', 'Asap', '2022-05-25 22:34:45'),
(56, 24, 1, 'Digital Fabric', 'Red', 3, 60, 'I want to Fuck', 'Asap', '2022-05-25 22:36:08'),
(57, 24, 1, 'Digital Fabric', 'Red', 3, 60, 'I want to Fuck', 'Asap', '2022-05-25 22:45:08'),
(58, 24, 1, 'Digital Fabric', 'Red', 3, 60, 'I want to Fuck', 'Asap', '2022-05-25 22:45:35'),
(59, 24, 1, 'Digital Fabric', 'Red', 3, 60, 'I want to Fuck', 'Asap', '2022-05-25 22:46:51'),
(60, 24, 1, 'Digital Fabric', 'Red', 3, 60, 'I want to Fuck', 'Asap', '2022-05-25 22:47:04'),
(61, 24, 1, 'Digital Fabric', 'Red', 3, 60, 'I want to Fuck', 'Asap', '2022-05-25 22:56:12'),
(62, 24, 1, 'Digital Fabric', 'Red', 3, 60, 'I want to Fuck', 'Asap', '2022-05-25 22:57:04'),
(63, 24, 1, 'Digital Fabric', 'Red', 3, 60, 'I want to Fuck', 'Asap', '2022-05-25 22:58:04'),
(64, 24, 1, 'Digital Fabric', 'Red', 3, 60, 'I want to Fuck', 'Asap', '2022-05-25 22:58:36'),
(65, 24, 1, 'Digital Fabric', 'Red', 3, 60, 'I want to Fuck', 'Asap', '2022-05-25 23:15:40'),
(66, 24, 1, 'Digital Fabric', 'Red', 3, 60, 'I want to Fuck', 'Asap', '2022-05-25 23:16:18'),
(67, 24, 1, 'Digital Fabric', 'Red', 3, 60, 'I want to Fuck', 'Asap', '2022-05-25 23:16:47'),
(68, 24, 1, 'Digital Fabric', 'Red', 3, 60, 'I want to Fuck', 'Asap', '2022-05-25 23:17:41');

-- --------------------------------------------------------

--
-- Table structure for table `printing`
--

CREATE TABLE `printing` (
  `Print_Id` int(255) NOT NULL,
  `Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `printing`
--

INSERT INTO `printing` (`Print_Id`, `Type`) VALUES
(1, 'Embroidery'),
(2, 'Sublimation'),
(3, 'Digital'),
(4, 'Screen Printing'),
(5, 'DTF'),
(6, 'Vinyl Printing');

-- --------------------------------------------------------

--
-- Table structure for table `unisex_product`
--

CREATE TABLE `unisex_product` (
  `Id` int(255) NOT NULL,
  `Name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unisex_product`
--

INSERT INTO `unisex_product` (`Id`, `Name`) VALUES
(1, 'oversized shirt');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Brand_Name` varchar(255) NOT NULL,
  `User_Email` varchar(255) NOT NULL,
  `User_Password` varchar(255) NOT NULL,
  `User_Number` varchar(255) NOT NULL,
  `User_Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `First_Name`, `Last_Name`, `Brand_Name`, `User_Email`, `User_Password`, `User_Number`, `User_Type`) VALUES
(2, 'judy', 'Kandil', 'gucci', 'toty@gmail.com', '$2y$10$h7C8Sks5wKgY3g9PDnCk1ehY56.FzysWhVe0gDTI0eP7fyAVw3AKi', '1007680036', 'Guest'),
(21, 'Seif', 'Root', 'Nike', 'sekamostafa321@gmail.com', '$2y$10$5dPHk4/Bwt43luq916S4POzILxtVnaLNgF46m.WWOZtT0SI6q0Ehq', '01002824192', 'Admin'),
(22, 'Seif', '', '', 'Seif@gmail.com', '$2y$10$aOflS1ktnhCK8PAgZ5ZhV.dA4u4X71kN47DrsQg5uHKsNWtJJkAJC', '', ''),
(23, 'Seif', 'Kandil', 'Zara', 'seifeldin1911110@miuegypt.edu.eg', '$2y$10$KCpCMLD4yzSa8CThE0Q7mOpVM5XP/oE9/id7NsJ.W16dM.xAAsVhG', '01157296767', ''),
(24, 'Seif', 'Kandil', 'Zara', 'seko@gmail.com', '$2y$10$fDO6uhbBiGkPGhjGyuFLjem3.nmwLSa5b662WhNoE6g85/20bbPvG', '01157296767', '');

-- --------------------------------------------------------

--
-- Table structure for table `woman_product`
--

CREATE TABLE `woman_product` (
  `Id` int(255) NOT NULL,
  `Name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `woman_product`
--

INSERT INTO `woman_product` (`Id`, `Name`) VALUES
(1, 'Leggings');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `men_products`
--
ALTER TABLE `men_products`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Test` (`Printing`),
  ADD KEY `Test2` (`Ordered_By`),
  ADD KEY `base_product` (`base_product`);

--
-- Indexes for table `printing`
--
ALTER TABLE `printing`
  ADD PRIMARY KEY (`Print_Id`);

--
-- Indexes for table `unisex_product`
--
ALTER TABLE `unisex_product`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `woman_product`
--
ALTER TABLE `woman_product`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `men_products`
--
ALTER TABLE `men_products`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `printing`
--
ALTER TABLE `printing`
  MODIFY `Print_Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `unisex_product`
--
ALTER TABLE `unisex_product`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `woman_product`
--
ALTER TABLE `woman_product`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `Test` FOREIGN KEY (`Printing`) REFERENCES `printing` (`Print_Id`),
  ADD CONSTRAINT `Test2` FOREIGN KEY (`Ordered_By`) REFERENCES `users` (`Id`),
  ADD CONSTRAINT `Test3` FOREIGN KEY (`base_product`) REFERENCES `men_products` (`Id`),
  ADD CONSTRAINT `Test4` FOREIGN KEY (`base_product`) REFERENCES `unisex_product` (`Id`),
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`base_product`) REFERENCES `woman_product` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
