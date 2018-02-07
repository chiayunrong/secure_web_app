-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2018 at 09:38 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dokidoki`
--

-- --------------------------------------------------------

--
-- Table structure for table `auditlog`
--

CREATE TABLE `auditlog` (
  `entrynum` int(15) NOT NULL,
  `timestamp` date NOT NULL,
  `entry` varchar(50) NOT NULL,
  `comments` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(15) NOT NULL,
  `shippingid` int(15) NOT NULL,
  `userid` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `itemsincart`
--

CREATE TABLE `itemsincart` (
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cartid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(15) NOT NULL,
  `productname` varchar(50) NOT NULL,
  `unitprice` decimal(5,2) NOT NULL,
  `stock` int(15) NOT NULL,
  `promotion` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `productname`, `unitprice`, `stock`, `promotion`) VALUES
(1, 'Black Beads (1000/pack)', '1.00', 100, '100.00'),
(2, 'White Beads (1000/pack)', '1.50', 250, '100.00'),
(3, 'Orange Beads (1000/pack)', '1.29', 120, '100.00');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `shippingid` int(15) NOT NULL,
  `shippingtype` varchar(50) NOT NULL,
  `price` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`shippingid`, `shippingtype`, `price`) VALUES
(1, 'Cash On Delivery', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `userid` int(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` int(8) NOT NULL,
  `role` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `postalcode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`userid`, `username`, `password`, `name`, `contact`, `role`, `email`, `address1`, `address2`, `city`, `state`, `postalcode`) VALUES
(1, 'testuser1', 'cisco123', 'dryap', 91234567, 'user', 'cny@gmail.com', 'Tampines', 'Tampines', 'Singapore', 'Singapore', 555555);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auditlog`
--
ALTER TABLE `auditlog`
  ADD PRIMARY KEY (`entrynum`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`),
  ADD KEY `cart_ibfk_1` (`userid`),
  ADD KEY `cart_ibfk_2` (`shippingid`);

--
-- Indexes for table `itemsincart`
--
ALTER TABLE `itemsincart`
  ADD KEY `itemsincart_ibfk_1` (`productid`),
  ADD KEY `cartid` (`cartid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`shippingid`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `shippingid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `userid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `useraccount` (`userid`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`shippingid`) REFERENCES `shipping` (`shippingid`);

--
-- Constraints for table `itemsincart`
--
ALTER TABLE `itemsincart`
  ADD CONSTRAINT `itemsincart_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `product` (`productid`),
  ADD CONSTRAINT `itemsincart_ibfk_2` FOREIGN KEY (`cartid`) REFERENCES `cart` (`cartid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
