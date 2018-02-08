-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2018 at 06:10 PM
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
  `timestamp` date DEFAULT NULL,
  `entry` varchar(50) DEFAULT NULL,
  `comments` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customerorders`
--

CREATE TABLE `customerorders` (
  `orderid` int(15) NOT NULL,
  `timestamp` datetime NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerorders`
--

INSERT INTO `customerorders` (`orderid`, `timestamp`, `email`) VALUES
(27, '2018-02-08 18:01:49', 'cny@gmail.com'),
(28, '2018-02-08 18:01:54', 'cny@gmail.com'),
(29, '2018-02-08 18:01:58', 'cny@gmail.com'),
(30, '2018-02-08 18:04:33', 'cny@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orderinfo`
--

CREATE TABLE `orderinfo` (
  `productid` int(15) NOT NULL,
  `orderid` int(15) NOT NULL,
  `unitprice` decimal(5,2) NOT NULL,
  `quantity` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderinfo`
--

INSERT INTO `orderinfo` (`productid`, `orderid`, `unitprice`, `quantity`) VALUES
(2, 27, '1.50', 1),
(3, 27, '1.29', 1),
(3, 28, '1.29', 1),
(2, 29, '1.50', 11),
(1, 30, '1.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(15) NOT NULL,
  `productname` varchar(50) DEFAULT NULL,
  `description` varchar(500) NOT NULL,
  `unitprice` decimal(5,2) DEFAULT NULL,
  `stock` int(15) DEFAULT NULL,
  `promotion` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `productname`, `description`, `unitprice`, `stock`, `promotion`) VALUES
(1, 'Black Beads (1000/pack)', 'abc desc', '1.00', 100, '100.00'),
(2, 'White Beads (1000/pack)', 'cdas desc', '1.50', 250, '100.00'),
(3, 'Orange Beads (1000/pack)', 'adscs desc', '1.29', 120, '100.00');

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `userid` int(15) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `contact` int(8) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `address1` varchar(50) DEFAULT NULL,
  `address2` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `postalcode` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`userid`, `email`, `password`, `name`, `contact`, `role`, `address1`, `address2`, `city`, `state`, `postalcode`) VALUES
(1, 'cny@gmail.com', 'cisco123', 'dryap', 91234567, 'user', 'Tampines', 'Tampines', 'Singapore', 'Singapore', 555555),
(2, 'asdasd@g.com', 'asd', 'asdasd', 0, 'user', '', '', '', '', 0),
(12, 'asd@g.com', 'asdasd', 'adasd', 123123, 'user', NULL, NULL, NULL, NULL, NULL),
(13, 'asda@asd.com', 'aokok', 'okokok', 1231, 'user', NULL, NULL, NULL, NULL, NULL),
(17, 'xiaoxao@hotmail.com', 'happy', 'apple', 123123, 'user', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auditlog`
--
ALTER TABLE `auditlog`
  ADD PRIMARY KEY (`entrynum`);

--
-- Indexes for table `customerorders`
--
ALTER TABLE `customerorders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `orderinfo`
--
ALTER TABLE `orderinfo`
  ADD KEY `orderid` (`orderid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customerorders`
--
ALTER TABLE `customerorders`
  MODIFY `orderid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `userid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderinfo`
--
ALTER TABLE `orderinfo`
  ADD CONSTRAINT `orderinfo_ibfk_1` FOREIGN KEY (`orderid`) REFERENCES `customerorders` (`orderid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
