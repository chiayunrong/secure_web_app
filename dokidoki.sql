-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2018 at 02:57 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

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
(45, 'aaabbb', 'test@gmail.com', '2018-02-10 17:38:32', ' attempted to log in', 'login attempt'),
(46, '', 'test@gmail.com', '2018-02-10 17:38:32', 'logged in', 'login'),
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
(89, NULL, 'china@gmail.com', '2018-02-11 01:04:41', 'logged in', 'Login'),
(90, NULL, 'yunrongc@gmail.com', '2018-02-11 10:13:48', 'has registered.', 'User'),
(91, NULL, NULL, '2018-02-11 10:27:44', 'has registered.', 'User'),
(92, NULL, 'aaa@bbb.com', '2018-02-11 10:29:45', 'has registered.', 'User'),
(93, NULL, 'aaa@bbb.com', '2018-02-11 10:29:55', ' attempted to log in', 'login attempt'),
(94, NULL, 'aaa@bbb.com', '2018-02-11 10:29:55', 'logged in', 'Login'),
(95, NULL, 'aaa@bbb.com', '2018-02-11 10:32:43', 'has logged out', 'Logout'),
(96, NULL, NULL, '2018-02-11 10:33:55', 'has registered.', 'User'),
(97, NULL, NULL, '2018-02-11 10:34:05', 'has registered.', 'User'),
(98, NULL, NULL, '2018-02-11 10:37:16', 'has registered.', 'User'),
(99, NULL, 'test@localhost.com', '2018-02-11 10:44:10', 'has registered.', 'User'),
(100, NULL, 'test@localhost', '2018-02-11 10:44:26', 'has registered.', 'User'),
(101, NULL, NULL, '2018-02-11 10:44:29', 'has registered.', 'User'),
(102, NULL, NULL, '2018-02-11 10:46:58', 'has registered.', 'User'),
(103, NULL, 'test@localhost', '2018-02-11 11:09:03', 'details has been updated.', 'User'),
(104, NULL, NULL, '2018-02-11 11:25:55', 'has registered.', 'User'),
(105, NULL, NULL, '2018-02-11 11:28:44', 'has been deleted.', 'User'),
(106, NULL, NULL, '2018-02-11 11:28:44', 'has been deleted.', 'User'),
(107, NULL, NULL, '2018-02-11 11:28:44', 'has been deleted.', 'User'),
(108, NULL, NULL, '2018-02-11 11:28:44', 'has been deleted.', 'User'),
(109, NULL, NULL, '2018-02-11 11:28:44', 'has been deleted.', 'User'),
(110, NULL, NULL, '2018-02-11 11:28:44', 'has been deleted.', 'User'),
(111, NULL, NULL, '2018-02-11 11:28:44', 'has been deleted.', 'User'),
(112, NULL, 'yunrongc@gmail.com', '2018-02-11 11:29:11', 'has been deleted.', 'User'),
(113, NULL, 'test@gmail.com', '2018-02-11 11:29:11', 'has been deleted.', 'User'),
(114, NULL, 'xiaoxao@hotmail.com', '2018-02-11 11:29:11', 'has been deleted.', 'User'),
(115, NULL, 'aaa@bbb.com', '2018-02-11 11:29:11', 'has been deleted.', 'User'),
(116, NULL, 'a@a.com', '2018-02-11 11:29:11', 'has been deleted.', 'User'),
(117, NULL, 'test@localhost.com', '2018-02-11 11:29:11', 'has been deleted.', 'User'),
(118, NULL, 'test222@gmail.com', '2018-02-11 11:29:11', 'has been deleted.', 'User'),
(119, NULL, 'china@gmail.com', '2018-02-11 11:29:11', 'has been deleted.', 'User'),
(120, NULL, 'cny@gmail.com', '2018-02-11 11:29:11', 'has been deleted.', 'User'),
(121, NULL, 'test@mail.com', '2018-02-11 11:29:11', 'has been deleted.', 'User'),
(122, NULL, 'test@localhost', '2018-02-11 11:30:28', 'details has been updated.', 'User'),
(123, NULL, 'test@localhost', '2018-02-11 11:30:55', 'details has been updated.', 'User'),
(124, NULL, 'test@localhost', '2018-02-11 11:31:44', 'details has been updated.', 'User'),
(125, NULL, 'test@localhost', '2018-02-11 11:31:52', 'details has been updated.', 'User'),
(126, NULL, 'test@localhost', '2018-02-11 11:34:04', 'details has been updated.', 'User'),
(127, NULL, 'test@localhost', '2018-02-11 11:34:11', 'details has been updated.', 'User'),
(128, NULL, 'test@localhost', '2018-02-11 11:34:18', 'details has been updated.', 'User'),
(129, NULL, 'test@localhost', '2018-02-11 11:40:15', 'details has been updated.', 'User'),
(130, NULL, 'test@localhost', '2018-02-11 11:40:42', 'details has been updated.', 'User'),
(131, NULL, 'yunrongc@gmail.com', '2018-02-11 15:56:29', 'has registered.', 'User'),
(132, NULL, 'ihatemyself481@gmail.com', '2018-02-11 15:56:44', 'has registered.', 'User'),
(133, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 15:57:19', 'has registered.', 'User'),
(134, NULL, 'yunrongc@gmail.com', '2018-02-11 15:57:36', 'details has been updated.', 'User'),
(135, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 15:57:48', 'details has been updated.', 'User'),
(136, NULL, 'ihatemyself481@gmail.com', '2018-02-11 15:58:00', 'details has been updated.', 'User'),
(137, NULL, 'keeruitao@gmail.com', '2018-02-11 15:58:14', 'has registered.', 'User'),
(138, NULL, 'yunrongc@gmail.com', '2018-02-11 15:58:44', ' attempted to log in', 'login attempt'),
(139, NULL, 'yunrongc@gmail.com', '2018-02-11 15:58:44', 'logged in', 'Login'),
(140, NULL, 'a', '2018-02-11 15:59:31', 'has been added to product.', 'Product'),
(141, NULL, 'a', '2018-02-11 15:59:36', 'has been deleted from product.', 'Product'),
(142, NULL, 'a', '2018-02-11 15:59:43', 'details has updated in product.', 'Product'),
(143, NULL, 'yunrongc@gmail.com', '2018-02-11 16:00:02', 'details has been updated.', 'User'),
(144, NULL, 'yunrongc@gmail.com', '2018-02-11 16:00:40', 'details has been updated.', 'User'),
(145, NULL, 'yunrongc@gmail.com', '2018-02-11 16:00:46', 'details has been updated.', 'User'),
(146, NULL, 'yunrongc@gmail.com', '2018-02-11 16:00:50', 'details has been updated.', 'User'),
(147, NULL, 'yunrongc@gmail.com', '2018-02-11 16:00:55', 'details has been updated.', 'User'),
(148, NULL, 'yunrongc@gmail.com', '2018-02-11 16:01:03', 'details has been updated.', 'User'),
(149, NULL, 'yunrongc@gmail.com', '2018-02-11 16:01:12', 'details has been updated.', 'User'),
(150, NULL, 'yunrongc@gmail.com', '2018-02-11 16:01:23', 'details has been updated.', 'User'),
(151, NULL, 'yunrongc@gmail.com', '2018-02-11 16:01:29', 'details has been updated.', 'User'),
(152, NULL, 'yunrongc@gmail.com', '2018-02-11 16:02:08', 'has been deleted.', 'User'),
(153, NULL, 'yunrongc@gmail.com', '2018-02-11 16:02:27', 'has registered.', 'User'),
(154, NULL, 'keeruitao@gmail.com', '2018-02-11 16:03:05', ' attempted to log in', 'login attempt'),
(155, NULL, 'keeruitao@gmail.com', '2018-02-11 16:03:06', 'logged in', 'Login'),
(156, NULL, 'cny@gmail.com', '2018-02-11 16:04:18', 'has been added to customerorders', 'Order'),
(157, NULL, 'keeruitao@gmail.com', '2018-02-11 16:04:45', 'has logged out', 'Logout'),
(158, NULL, 'ihatemyself481@gmail.com', '2018-02-11 16:05:13', ' attempted to log in', 'login attempt'),
(159, NULL, 'ihatemyself481@gmail.com', '2018-02-11 16:05:13', 'logged in', 'Login'),
(160, NULL, 'ihatemyself481@gmail.com', '2018-02-11 16:08:37', 'has logged out', 'Logout'),
(161, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 16:09:18', ' attempted to log in', 'login attempt'),
(162, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 16:09:18', 'logged in', 'Login'),
(163, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 16:15:24', 'has logged out', 'Logout'),
(164, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 16:15:51', ' attempted to log in', 'login attempt'),
(165, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 16:15:51', 'logged in', 'Login'),
(166, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 16:18:05', 'details has been updated.', 'User'),
(167, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 16:19:00', 'details has been updated.', 'User'),
(168, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 16:20:24', 'details has been updated.', 'User'),
(169, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 16:21:14', 'details has been updated.', 'User'),
(170, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 16:21:33', 'details has been updated.', 'User'),
(171, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 16:22:02', 'has been deleted.', 'User'),
(172, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 16:23:37', 'has logged out', 'Logout'),
(173, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 16:23:58', 'has registered.', 'User'),
(174, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 16:24:10', ' attempted to log in', 'login attempt'),
(175, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 16:24:10', 'logged in', 'Login'),
(176, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 16:24:31', ' attempted to log in', 'login attempt'),
(177, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 16:24:31', 'logged in', 'Login'),
(178, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 16:25:11', 'has logged out', 'Logout'),
(179, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 16:25:26', 'details has been updated.', 'User'),
(180, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 16:25:42', ' attempted to log in', 'login attempt'),
(181, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 16:25:42', 'logged in', 'Login'),
(182, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 16:28:44', 'has logged out', 'Logout'),
(183, NULL, 'cny@gmail.com', '2018-02-11 16:29:39', 'has been added to customerorders', 'Order'),
(184, NULL, '', '2018-02-11 16:30:20', 'has logged out', 'Logout'),
(185, NULL, 'keeruitao@gmail.com', '2018-02-11 16:33:45', ' attempted to log in', 'login attempt'),
(186, NULL, 'keeruitao@gmail.com', '2018-02-11 16:33:45', 'logged in', 'Login'),
(187, NULL, 'keeruitao@gmail.com', '2018-02-11 16:34:16', 'has logged out', 'Logout'),
(188, NULL, 'keeruitao@gmail.com', '2018-02-11 16:35:26', ' attempted to log in', 'login attempt'),
(189, NULL, 'keeruitao@gmail.com', '2018-02-11 16:35:26', 'logged in', 'Login'),
(190, NULL, 'keeruitao@gmail.com', '2018-02-11 16:37:58', 'has logged out', 'Logout'),
(191, NULL, 'ihatemyself481@gmail.com', '2018-02-11 16:38:26', ' attempted to log in', 'login attempt'),
(192, NULL, 'ihatemyself481@gmail.com', '2018-02-11 16:38:26', 'logged in', 'Login'),
(193, NULL, 'cny@gmail.com', '2018-02-11 16:41:01', 'has been added to customerorders', 'Order'),
(194, NULL, 'ihatemyself481@gmail.com', '2018-02-11 16:42:41', 'has logged out', 'Logout'),
(195, NULL, 'ihatemyself481@gmail.com', '2018-02-11 16:43:06', ' attempted to log in', 'login attempt'),
(196, NULL, 'ihatemyself481@gmail.com', '2018-02-11 16:43:06', 'logged in', 'Login'),
(197, NULL, 'cny@gmail.com', '2018-02-11 16:55:28', 'has been added to customerorders', 'Order'),
(198, NULL, 'ihatemyself481@gmail.com', '2018-02-11 17:01:35', 'has logged out', 'Logout'),
(199, NULL, 'yunrongc@gmail.com', '2018-02-11 17:01:49', ' attempted to log in', 'login attempt'),
(200, NULL, 'yunrongc@gmail.com', '2018-02-11 17:01:50', 'logged in', 'Login'),
(201, NULL, 'cny@gmail.com', '2018-02-11 17:03:16', 'has been added to customerorders', 'Order'),
(202, NULL, 'cny@gmail.com', '2018-02-11 17:03:16', 'has been added to customerorders', 'Order'),
(203, NULL, 'yunrongc@gmail.com', '2018-02-11 17:04:21', 'has logged out', 'Logout'),
(204, NULL, 'yunrongc@gmail.com', '2018-02-11 17:04:31', ' attempted to log in', 'login attempt'),
(205, NULL, 'yunrongc@gmail.com', '2018-02-11 17:04:31', 'logged in', 'Login'),
(206, NULL, 'yunrongc@gmail.com', '2018-02-11 17:07:03', ' attempted to log in', 'login attempt'),
(207, NULL, 'yunrongc@gmail.com', '2018-02-11 17:07:03', 'logged in', 'Login'),
(208, NULL, 'cny@gmail.com', '2018-02-11 17:08:57', 'has been added to customerorders', 'Order'),
(209, NULL, 'cny@gmail.com', '2018-02-11 17:08:58', 'has been added to customerorders', 'Order'),
(210, NULL, 'yunrongc@gmail.com', '2018-02-11 17:11:24', 'details has been updated.', 'User'),
(211, NULL, 'yunrongc@gmail.com', '2018-02-11 17:11:29', 'has logged out', 'Logout'),
(212, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 17:12:08', ' attempted to log in', 'login attempt'),
(213, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 17:12:08', 'logged in', 'Login'),
(214, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 17:12:25', ' attempted to log in', 'login attempt'),
(215, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 17:12:36', ' attempted to log in', 'login attempt'),
(216, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 17:12:36', 'logged in', 'Login'),
(217, NULL, 'test@localhost', '2018-02-11 17:14:33', 'details has been updated.', 'User'),
(218, NULL, 'cny@gmail.com', '2018-02-11 17:16:37', 'has been added to customerorders', 'Order'),
(219, NULL, 'cny@gmail.com', '2018-02-11 17:16:39', 'has been added to customerorders', 'Order'),
(220, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 17:18:04', 'has logged out', 'Logout'),
(221, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 17:18:16', ' attempted to log in', 'login attempt'),
(222, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 17:18:16', 'logged in', 'Login'),
(223, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 17:23:24', 'has logged out', 'Logout'),
(224, NULL, 'yunrongc@gmail.com', '2018-02-11 17:23:35', ' attempted to log in', 'login attempt'),
(225, NULL, 'yunrongc@gmail.com', '2018-02-11 17:23:35', 'logged in', 'Login'),
(226, NULL, 'cny@gmail.com', '2018-02-11 17:25:42', 'has been added to customerorders', 'Order'),
(227, NULL, 'cny@gmail.com', '2018-02-11 17:25:42', 'has been added to customerorders', 'Order'),
(228, NULL, 'cny@gmail.com', '2018-02-11 17:30:42', 'has been added to customerorders', 'Order'),
(229, NULL, 'cny@gmail.com', '2018-02-11 17:30:43', 'has been added to customerorders', 'Order'),
(230, NULL, 'yunrongc@gmail.com', '2018-02-11 17:41:21', 'has logged out', 'Logout'),
(231, NULL, 'ihatemyself481@gmail.com', '2018-02-11 17:41:45', ' attempted to log in', 'login attempt'),
(232, NULL, 'ihatemyself481@gmail.com', '2018-02-11 17:41:45', 'logged in', 'Login'),
(233, NULL, 'cny@gmail.com', '2018-02-11 17:42:10', 'has been added to customerorders', 'Order'),
(234, NULL, 'cny@gmail.com', '2018-02-11 17:42:10', 'has been added to customerorders', 'Order'),
(235, NULL, 'ihatemyself481@gmail.com', '2018-02-11 17:43:12', 'has logged out', 'Logout'),
(236, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 17:43:29', ' attempted to log in', 'login attempt'),
(237, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 17:43:29', 'logged in', 'Login'),
(238, NULL, 'cny@gmail.com', '2018-02-11 17:44:07', 'has been added to customerorders', 'Order'),
(239, NULL, 'cny@gmail.com', '2018-02-11 17:44:08', 'has been added to customerorders', 'Order'),
(240, NULL, 'cny@gmail.com', '2018-02-11 17:44:30', 'has been added to customerorders', 'Order'),
(241, NULL, 'cny@gmail.com', '2018-02-11 17:44:31', 'has been added to customerorders', 'Order'),
(242, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 17:51:49', 'has logged out', 'Logout'),
(243, NULL, 'a@a.com', '2018-02-11 18:07:10', 'has registered.', 'User'),
(244, NULL, 'aa@a.com', '2018-02-11 18:07:31', 'has registered.', 'User'),
(245, NULL, '\\\"', '2018-02-11 18:09:12', 'has registered.', 'User'),
(246, NULL, 'aosdkaosdk', '2018-02-11 18:13:35', 'has registered.', 'User'),
(247, NULL, 'asdsadlj', '2018-02-11 18:13:50', 'has registered.', 'User'),
(248, NULL, 'asdijasdoij', '2018-02-11 18:16:40', 'has registered.', 'User'),
(249, NULL, 'asdasd', '2018-02-11 18:18:45', 'has registered.', 'User'),
(250, NULL, 'keeruitao@gmail.com', '2018-02-11 18:22:26', ' attempted to log in', 'login attempt'),
(251, NULL, 'keeruitao@gmail.com', '2018-02-11 18:22:26', 'logged in', 'Login'),
(252, NULL, 'keeruitao@gmail.com', '2018-02-11 18:26:17', 'has logged out', 'Logout'),
(253, NULL, 'ihatemyself481@gmail.com', '2018-02-11 18:26:39', ' attempted to log in', 'login attempt'),
(254, NULL, 'ihatemyself481@gmail.com', '2018-02-11 18:26:39', 'logged in', 'Login'),
(255, NULL, 'ihatemyself481@gmail.com', '2018-02-11 18:27:49', 'has logged out', 'Logout'),
(256, NULL, 'yunrongc@gmail.com', '2018-02-11 18:28:22', ' attempted to log in', 'login attempt'),
(257, NULL, 'yunrongc@gmail.com', '2018-02-11 18:28:22', 'logged in', 'Login'),
(258, NULL, 'a', '2018-02-11 18:31:48', 'has been added to product.', 'Product'),
(259, NULL, 'yunrongc@gmail.com', '2018-02-11 18:32:25', 'has logged out', 'Logout'),
(260, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 18:32:56', ' attempted to log in', 'login attempt'),
(261, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 18:32:56', 'logged in', 'Login'),
(262, NULL, 'adrielkoh@yahoo.com.sg', '2018-02-11 18:40:33', 'has logged out', 'Logout'),
(263, NULL, 'asdijasdoij', '2018-02-11 18:42:05', 'has been deleted.', 'User'),
(264, NULL, 'a@a.com', '2018-02-11 18:42:29', 'has been deleted.', 'User'),
(265, NULL, 'aa@a.com', '2018-02-11 18:42:29', 'has been deleted.', 'User'),
(266, NULL, '\\\"', '2018-02-11 18:42:29', 'has been deleted.', 'User'),
(267, NULL, 'aosdkaosdk', '2018-02-11 18:42:29', 'has been deleted.', 'User'),
(268, NULL, 'asdsadlj', '2018-02-11 18:42:29', 'has been deleted.', 'User'),
(269, NULL, 'asdasd', '2018-02-11 18:42:29', 'has been deleted.', 'User'),
(270, NULL, 'test@localhost', '2018-02-11 18:42:35', 'has been deleted.', 'User'),
(271, NULL, 'yunrongc@gmail.com', '2018-02-11 20:14:44', 'details has been updated.', 'User'),
(272, NULL, 'yunrongc@gmail.com', '2018-02-11 20:15:06', ' attempted to log in', 'login attempt'),
(273, NULL, 'yunrongc@gmail.com', '2018-02-11 20:15:06', 'logged in', 'Login'),
(274, NULL, 'yunrongc@gmail.com', '2018-02-11 21:13:01', 'details has been updated.', 'User'),
(275, NULL, 'yunrongc@gmail.com', '2018-02-11 21:18:20', 'has logged out', 'Logout'),
(276, NULL, 'a@a.com', '2018-02-11 21:18:52', 'has registered.', 'User'),
(277, NULL, 'a@a.com', '2018-02-11 21:19:08', ' attempted to log in', 'login attempt'),
(278, NULL, 'a@a.com', '2018-02-11 21:19:08', 'logged in', 'Login'),
(279, NULL, 'a@a.com', '2018-02-11 21:46:35', 'details has been updated.', 'User'),
(280, NULL, 'a@a.com', '2018-02-11 21:46:43', 'has logged out', 'Logout'),
(281, NULL, 'a@a', '2018-02-11 21:46:52', ' attempted to log in', 'login attempt'),
(282, NULL, 'a@a.com', '2018-02-11 21:47:13', ' attempted to log in', 'login attempt'),
(283, NULL, 'b@b.com', '2018-02-11 21:47:26', 'has registered.', 'User'),
(284, NULL, 'b@b.com', '2018-02-11 21:47:37', ' attempted to log in', 'login attempt'),
(285, NULL, 'b@b.com', '2018-02-11 21:47:37', 'logged in', 'Login'),
(286, NULL, 'b@b.com', '2018-02-11 21:49:17', 'details has been updated.', 'User'),
(287, NULL, 'b@b.com', '2018-02-11 21:49:28', 'has logged out', 'Logout'),
(288, NULL, 'b@b.com', '2018-02-11 21:49:40', ' attempted to log in', 'login attempt'),
(289, NULL, 'b@b.com', '2018-02-11 21:49:40', 'logged in', 'Login'),
(290, NULL, 'b@b.com', '2018-02-11 21:50:50', 'has logged out', 'Logout'),
(291, NULL, 'endy@aaa.com', '2018-02-11 21:51:18', 'has registered.', 'User'),
(292, NULL, 'endy@aaa.com', '2018-02-11 21:51:28', ' attempted to log in', 'login attempt'),
(293, NULL, 'endy@aaa.com', '2018-02-11 21:51:29', 'logged in', 'Login'),
(294, NULL, 'endy@aaa.com', '2018-02-11 21:51:59', 'details has been updated.', 'User'),
(295, NULL, 'endy@aaa.com', '2018-02-11 21:52:16', 'has logged out', 'Logout'),
(296, NULL, 'endy@aaa.com', '2018-02-11 21:52:26', ' attempted to log in', 'login attempt'),
(297, NULL, 'endy@aaa.com', '2018-02-11 21:52:26', 'logged in', 'Login');

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
(30, '2018-02-08 18:04:33', 'cny@gmail.com'),
(31, '2018-02-11 09:04:18', 'cny@gmail.com'),
(32, '2018-02-11 09:29:39', 'cny@gmail.com'),
(33, '2018-02-11 09:41:01', 'cny@gmail.com'),
(34, '2018-02-11 09:55:28', 'cny@gmail.com'),
(35, '2018-02-11 10:03:16', 'cny@gmail.com'),
(36, '2018-02-11 10:03:16', 'cny@gmail.com'),
(37, '2018-02-11 10:08:57', 'cny@gmail.com'),
(38, '2018-02-11 10:08:58', 'cny@gmail.com'),
(39, '2018-02-11 10:16:37', 'cny@gmail.com'),
(40, '2018-02-11 10:16:39', 'cny@gmail.com'),
(41, '2018-02-11 10:25:42', 'cny@gmail.com'),
(42, '2018-02-11 10:25:42', 'cny@gmail.com'),
(43, '2018-02-11 10:30:42', 'cny@gmail.com'),
(44, '2018-02-11 10:30:43', 'cny@gmail.com'),
(45, '2018-02-11 10:42:10', 'cny@gmail.com'),
(46, '2018-02-11 10:42:10', 'cny@gmail.com'),
(47, '2018-02-11 10:44:07', 'cny@gmail.com'),
(48, '2018-02-11 10:44:08', 'cny@gmail.com'),
(49, '2018-02-11 10:44:30', 'cny@gmail.com'),
(50, '2018-02-11 10:44:31', 'cny@gmail.com');

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
(1, 30, '1.00', 1),
(1, 31, '1.00', 5);

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
(3, 'a', 'a', '1.00', 1, '1.00'),
(4, 'a', 'a', '1.00', 1, '2.00');

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
  `secretkey` varchar(500) NOT NULL,
  `password_token` varchar(500) NOT NULL,
  `googletoken` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`userid`, `email`, `password`, `name`, `contact`, `role`, `address1`, `address2`, `city`, `state`, `postalcode`, `iv`, `secretkey`, `password_token`, `googletoken`) VALUES
(37, 'ihatemyself481@gmail.com', '$2y$10$EJ9PcsWfHADgb0fSrE36reaqJBarzPshbIdpJFCw02xbETAgL14j.', 'a', 'TlpsZXNFYTc4K1BmSS94dlA4Rzdwdz09', 'auditor', NULL, NULL, NULL, NULL, NULL, '7af0d56d9bf2d52f', 'e6e749e59cb072c360224a0c3634b59dd843b533a6916814aa9b9909699bd0ea', '', ''),
(39, 'keeruitao@gmail.com', '$2y$10$4GbhmLwjYGo5oSoibs52Pe7/2tx75q4Lr528BfFuMjPcGKf1dQKNC', 'ruitao', 'WTJOM0ZlVi9sWXE4NkJKUUYvU2lCZz09', 'user', NULL, NULL, NULL, NULL, NULL, '7f3edcfaf515d385', 'f90ff5a60b555b4a97abde55302f515f564ffcb67ec54374941d370123a5a03b', '', ''),
(40, 'yunrongc@gmail.com', '$2y$10$siOyiCBlATdKnjSCE02snuCl8O8Butkx0M/CXSrBWzcHLPBj6/Ktq', 'a', 'ZnZjSE1VZjZqSE5naFZzR0NhR0JDZz09', 'user', NULL, NULL, NULL, NULL, NULL, '980f1de1b721f366', '74ca49482c1378d04fe09c13724213d91da974c9afc45b56e7d523414451812f', '', 'OZXEJQIG4A4VWNQX'),
(41, 'adrielkoh@yahoo.com.sg', '$2y$10$V07wOxSioGaZsslmafYpjO/wqkOEI1ukKqAkH/2Kz0o043pVX4Pxi', 'Aids', 'cmxpVmRSNWJWKzNLcllrNHFxdUExZz09', 'admin', NULL, NULL, NULL, NULL, NULL, 'd4667ee1f21fa3e3', '44e665f85fc5d79674fb9099c6cf50e6e533a9350e33dc37f1dd5b40d8b46d47', '', ''),
(49, 'a@a.com', '$2y$10$ymOMHoafi8otKhF/PO4p6ejLAZV5ZtBRuJmzTB3svH.dPh8.pmF/S', 'a', 'akZuTDZZY1IzNEUzMXRZcXRCK0ZYQT09', 'user', NULL, NULL, NULL, NULL, NULL, '06ebea79c2661cc4', '299e8dabc2d0066c7d268e02550543f64fe133b2a6760e91d862de9a8693c44e', '', 'W54WBR4M3EG34SIJ'),
(50, 'b@b.com', '$2y$10$IDvCwVBZGzZkajJ3Q3HsJOlgbs0Aw7W5E.3ZGsedkJW7yeO/wJyKO', 'a', 'a0xUY0RBYkFXYWhaOXJybE5ZTDlIZz09', 'user', NULL, NULL, NULL, NULL, NULL, 'd80fed4e5dac41b6', '01b89362c6b86ef3170123c413cbbd380cc207a8e9883808fd2b1ed8bcd4a153', '', 'LFBJLJJGGTVFJO2R'),
(51, 'endy@aaa.com', '$2y$10$hcb/Ri9nf1yBE110W07lI.Sr6WgJ3uh9WgNxOSssj11apo4iw/iPO', 'a', 'cUUyanpkSGFHa3d1SCtvOUlrTVVhZz09', 'user', NULL, NULL, NULL, NULL, NULL, '9a8c38ffc174950b', 'e43ec90550739b56d58d3edcf944e067d273c53c494bdaa6b1873201a39039fc', '', 'THSDOD54BY6K455U');

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=298;

--
-- AUTO_INCREMENT for table `customerorders`
--
ALTER TABLE `customerorders`
  MODIFY `orderid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `userid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

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
