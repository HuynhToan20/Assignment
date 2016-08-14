-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2015 at 09:52 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `camerashop`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `ContactID` int(12) NOT NULL,
  `ContactName` varchar(50) NOT NULL,
  `ContactEmail` varchar(30) NOT NULL,
  `ContactPhone` int(15) NOT NULL,
  `ContactDesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`ContactID`, `ContactName`, `ContactEmail`, `ContactPhone`, `ContactDesc`) VALUES
(17, 'Phạm Trương Ngọc Huy', 'ngochuy@yahoo.com', 1998078087, 'Welcome to CameraShop Online\r\nAdmin: Ngoc Huy'),
(18, 'Ngoc Huy Pham', 'ngochuypham@gmail.com', 901234567, 'Hello! CameraShop');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `OrderID` int(12) NOT NULL,
  `ProductID` int(12) NOT NULL,
  `ProductPrice` double(10,0) NOT NULL,
  `Quantity` int(5) NOT NULL,
  `Totals` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(12) NOT NULL,
  `OrderDate` date NOT NULL,
  `OrderTotal` int(10) NOT NULL,
  `UserID` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` int(12) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `ProductImage` varchar(255) DEFAULT NULL,
  `ProductPrice` double(10,0) NOT NULL,
  `ProductDesc` text NOT NULL,
  `ProductCategory` varchar(50) NOT NULL,
  `ProductBrand` varchar(50) NOT NULL,
  `ProductGroup` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `ProductImage`, `ProductPrice`, `ProductDesc`, `ProductCategory`, `ProductBrand`, `ProductGroup`) VALUES
(1, 'Áo Nam', 'pic15.jpg', 350000, 'Áo Nam Thể Thao', 'Áo', 'Adidas', 'Áo'),
(2, 'Áo Nam', 'pic2.jpg', 200000, 'Áo Thun Nam', 'Áo', 'Adidas', 'Áo'),
(3, 'Áo Nam', 'pic14.jpg', 250000, 'Áo Thun Nam ', 'Áo', 'Adidas', 'Áo'),
(4, 'Áo Nam Nike', 'pic13.jpg', 100000, 'Áo Thun ', 'Áo', 'Adidas', 'Áo'),
(5, 'Áo Nam', 'pic11.jpg', 200000, 'Áo Thun Nam', 'Áo', 'Adidas', 'Áo'),
(6, 'Áo Nam', 'pro.jpg', 500000, 'Áo Khoác Mùa Đông ', 'Áo', 'Adidas', 'Áo'),
(7, 'Áo Nam', 't3.jpg', 600000, 'Vest', 'Áo', 'Nike', 'Áo'),
(8, 'Áo Nam', 'pi3.jpg', 200000, 'Áo Thun ', 'Áo', 'Adidas', 'Áo'),
(9, 'Áo Nam', 'pic1.jpg', 150000, 'Áo Thun', 'Áo', 'Puma', 'Áo'),
(10, 'Áo Nam', 'pi.jpg', 100000, 'SALE BLACK FRIDAY ', 'Áo', 'Adidas', 'Áo');


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(12) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Permissions` varchar(10) NOT NULL,
  `Avatar` varchar(50) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Phone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Username`, `Password`, `FullName`, `Email`, `Permissions`, `Avatar`, `Address`, `Phone`) VALUES
(1, 'admin', 'admin', 'Administrator', 'admin@gmail.com', 'admin', '', '123456 admin,Quận admin, TP.admin', 987654321),
(2, 'huynhtoan18', '12345', 'Huynh Toan', 'abc@gmail.com', '', '', '', 0),
(3, 'huynhtoan18', '12345', 'huynhtoan', 'abc@gmail.com', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`ContactID`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`OrderID`,`ProductID`),
  ADD KEY `PKMA_ID` (`ProductID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD UNIQUE KEY `Order_ID` (`OrderID`),
  ADD KEY `Order_ID_2` (`OrderID`),
  ADD KEY `User_ID` (`UserID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`),
  ADD UNIQUE KEY `PKMA_Image` (`ProductImage`),
  ADD KEY `PKMA_Image_2` (`ProductImage`),
  ADD KEY `PKMA_Image_3` (`ProductImage`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `ContactID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `OrderID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `orders` (`OrderID`),
  ADD CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
