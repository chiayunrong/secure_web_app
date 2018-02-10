-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2018 at 06:08 PM
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
-- Table structure for table `audit_log`
--

CREATE TABLE `audit_log` (
  `id` int(11) UNSIGNED NOT NULL,
  `comment` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `new_value` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `operation` varchar(100) DEFAULT NULL,
  `tablename` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audit_log`
--

INSERT INTO `audit_log` (`id`, `comment`, `new_value`, `datetime`, `operation`, `tablename`) VALUES
(45, NULL, 'test@gmail.com', '2018-02-10 17:38:32', ' attempted to log in', 'login attempt'),
(46, NULL, 'test@gmail.com', '2018-02-10 17:38:32', 'logged in', 'login'),
(47, NULL, 'test@gmail.com', '2018-02-10 17:39:23', ' attempted to log in', 'login attempt'),
(48, NULL, 'test@gmail.com', '2018-02-10 17:39:23', 'logged in', 'login'),
(49, NULL, 'test@gmail.com', '2018-02-10 17:40:21', ' attempted to log in', 'login attempt'),
(50, NULL, 'test@gmail.com', '2018-02-10 17:40:21', 'logged in', 'login'),
(51, NULL, 'test@gmail.com', '2018-02-10 17:41:11', ' attempted to log in', 'login attempt'),
(52, NULL, 'test@gmail.com', '2018-02-10 17:41:11', 'logged in', 'login'),
(53, NULL, 'test@gmail.com', '2018-02-10 17:44:01', ' attempted to log in', 'login attempt'),
(54, NULL, 'test@gmail.com', '2018-02-10 17:44:01', 'logged in', 'login'),
(55, NULL, 'test@gmail.com', '2018-02-10 17:48:02', ' attempted to log in', 'login attempt'),
(56, NULL, 'test@gmail.com', '2018-02-10 17:48:02', 'logged in', 'login'),
(57, NULL, 'test@gmail.com', '2018-02-10 17:56:33', ' attempted to log in', 'login attempt'),
(58, NULL, 'test@gmail.com', '2018-02-10 17:56:33', 'logged in', 'login'),
(59, NULL, 'test@gmail.com', '2018-02-10 17:57:56', ' attempted to log in', 'login attempt'),
(60, NULL, 'test@gmail.com', '2018-02-10 17:57:56', 'logged in', 'login'),
(61, NULL, 'test@gmail.com', '2018-02-10 18:00:35', ' attempted to log in', 'login attempt'),
(62, NULL, 'test@gmail.com', '2018-02-10 18:00:36', 'logged in', 'login'),
(63, NULL, 'test@gmail.com', '2018-02-10 18:01:36', ' attempted to log in', 'login attempt'),
(64, NULL, 'test@gmail.com', '2018-02-10 18:01:36', 'logged in', 'login'),
(65, NULL, 'test@gmail.com', '2018-02-10 18:08:08', ' attempted to log in', 'login attempt'),
(66, NULL, 'test@gmail.com', '2018-02-10 18:08:08', 'logged in', 'login'),
(67, NULL, '', '2018-02-10 18:08:09', 'has logged out', 'logout'),
(68, NULL, '', '2018-02-10 18:10:20', 'has logged out', 'logout'),
(69, NULL, 'test@gmail.com', '2018-02-10 18:12:14', ' attempted to log in', 'login attempt'),
(70, NULL, 'test@gmail.com', '2018-02-10 18:12:14', 'logged in', 'login'),
(71, NULL, 'test@gmail.com', '2018-02-10 18:12:16', 'has logged out', 'logout'),
(72, NULL, 'test222@gmail.com', '2018-02-10 18:21:49', 'has registered.', 'User'),
(73, NULL, 'cny@gmail.com', '2018-02-10 23:53:38', 'has logged out', 'Logout'),
(74, NULL, 'qwe@qwe.com', '2018-02-11 00:21:07', 'has registered.', 'User'),
(75, NULL, 'qwe@qwe.com', '2018-02-11 00:21:18', ' attempted to log in', 'login attempt'),
(76, NULL, 'qwe@qwe.com', '2018-02-11 00:21:27', ' attempted to log in', 'login attempt'),
(77, NULL, 'qwe@qwe.com', '2018-02-11 00:21:27', 'logged in', 'Login'),
(78, NULL, 'qwe@qwe.com', '2018-02-11 00:22:19', 'has been deleted.', 'User'),
(79, NULL, 'qwe@qwe.com', '2018-02-11 00:22:27', 'has registered.', 'User'),
(80, NULL, 'qwe@qwe.com', '2018-02-11 00:22:35', ' attempted to log in', 'login attempt'),
(81, NULL, 'qwe@qwe.com', '2018-02-11 00:22:35', 'logged in', 'Login'),
(82, NULL, 'qwe@qwe.com', '2018-02-11 00:26:58', 'has been deleted.', 'User'),
(83, NULL, 'a@a.com', '2018-02-11 00:27:11', 'has registered.', 'User'),
(84, NULL, 'a@a.com', '2018-02-11 00:27:19', ' attempted to log in', 'login attempt'),
(85, NULL, 'a@a.com', '2018-02-11 00:27:20', 'logged in', 'Login'),
(86, NULL, 'a@a.com', '2018-02-11 01:04:19', 'has logged out', 'Logout'),
(87, NULL, 'china@gmail.com', '2018-02-11 01:04:32', 'has registered.', 'User'),
(88, NULL, 'china@gmail.com', '2018-02-11 01:04:41', ' attempted to log in', 'login attempt'),
(89, NULL, 'china@gmail.com', '2018-02-11 01:04:41', 'logged in', 'Login');

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

--
-- Triggers `customerorders`
--
DELIMITER $$
CREATE TRIGGER `deleteOrder` BEFORE DELETE ON `customerorders` FOR EACH ROW BEGIN
INSERT INTO audit_log(new_value, datetime, tablename, operation) VALUES ( Old.email, CURRENT_TIMESTAMP(), "Order", "has been deleted from customerorders.");
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertOrder` BEFORE INSERT ON `customerorders` FOR EACH ROW BEGIN
INSERT INTO audit_log(new_value, datetime, tablename, operation) VALUES ( NEW.email, CURRENT_TIMESTAMP(), "Order", "has been added to customerorders");
END
$$
DELIMITER ;

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

--
-- Triggers `product`
--
DELIMITER $$
CREATE TRIGGER `deleteProduct` BEFORE DELETE ON `product` FOR EACH ROW BEGIN
INSERT INTO audit_log(new_value, datetime, tablename, operation) VALUES ( Old.productname, CURRENT_TIMESTAMP(), "Product", "has been deleted from product.");
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertProduct` BEFORE INSERT ON `product` FOR EACH ROW BEGIN
INSERT INTO audit_log(new_value, datetime, tablename, operation) VALUES ( NEW.productname, CURRENT_TIMESTAMP(), "Product", "has been added to product.");
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updateProduct` BEFORE UPDATE ON `product` FOR EACH ROW BEGIN
INSERT INTO audit_log(new_value, datetime, tablename, operation) VALUES ( NEW.productname, CURRENT_TIMESTAMP(), "Product", "details has updated in product.");
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `userid` int(15) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `contact` varchar(500) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `address1` varchar(50) DEFAULT NULL,
  `address2` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `postalcode` int(6) DEFAULT NULL,
  `iv` varchar(500) NOT NULL,
  `secretkey` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`userid`, `email`, `password`, `name`, `contact`, `role`, `address1`, `address2`, `city`, `state`, `postalcode`, `iv`, `secretkey`) VALUES
(1, 'cny@gmail.com', 'cisco123', 'dryap', '91234567', 'user', 'Tampines', 'Tampines', 'Singapore', 'Singapore', 555555, '', ''),
(5, 'test@mail.com', 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(18, 'xiaoxao@hotmail.com', '$2y$10$g36aZ.bW.31t6bbxedb1yuPo5MtJbsVeXbRXr8Kw3np7jvlOfzBZO', 'xiaoxiao', '98762543', 'user', NULL, NULL, NULL, NULL, NULL, '', ''),
(19, 'test@gmail.com', '$2y$10$E4/.HsJ13sjPmUEB8sisH.rc2gdzsjU46QUZripqD6wfGPcyL07ve', 'test', '90000000', 'user', NULL, NULL, NULL, NULL, NULL, '', ''),
(20, 'test222@gmail.com', '$2y$10$QLhf7tX4Qr.JtrEsbPcZRusyL7JkHPoEtHUuAvem3yvtN0dxuVulW', 'test23', '98018293', 'user', NULL, NULL, NULL, NULL, NULL, '', ''),
(23, 'a@a.com', '$2y$10$gR3xGtq1kblrgBCG3qWCDesfq3KByZKjPB/V19QlOGFcEm0wQBm.i', 'a', 'U2JNOUhRZVpLa3pYVUVrNFFGRDAyQT09', 'user', NULL, NULL, NULL, NULL, NULL, '413149ee42cfcda5', '0f7cfdfac06383fe5b9abc71987f1481f6beaddad92c3a22397957f3968a28d8'),
(24, 'china@gmail.com', '$2y$10$TT3fUQBeGje1XSCuSC03jep.qIH7hbkU7SnHmdCpbPQI4Uf1AH2LG', 'a', 'b2JlZW9tb2U0R2pCNk54eVl1UW9udz09', 'user', NULL, NULL, NULL, NULL, NULL, 'a7fda703ca2d7549', '216f036c64ca7261380d38c1bd2a75c309a8a62e1dfab83ce5548013e8add076');

--
-- Triggers `useraccount`
--
DELIMITER $$
CREATE TRIGGER `deleteUser` BEFORE DELETE ON `useraccount` FOR EACH ROW BEGIN
INSERT INTO audit_log(new_value, datetime, tablename, operation) VALUES ( OLD.email, CURRENT_TIMESTAMP(), "User", "has been deleted.");
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertUser` BEFORE INSERT ON `useraccount` FOR EACH ROW BEGIN
INSERT INTO audit_log(new_value, datetime, tablename, operation) VALUES ( NEW.email, CURRENT_TIMESTAMP(), "User", "has registered.");
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updateUser` BEFORE UPDATE ON `useraccount` FOR EACH ROW BEGIN
INSERT INTO audit_log(new_value, datetime, tablename, operation) VALUES ( NEW.email, CURRENT_TIMESTAMP(), "User", "details has been updated.");
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audit_log`
--
ALTER TABLE `audit_log`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `audit_log`
--
ALTER TABLE `audit_log`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

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
  MODIFY `userid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
