-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2015 at 09:14 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `matkinh`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `idcategories` int(10) NOT NULL AUTO_INCREMENT,
  `catname` varchar(225) NOT NULL,
  `image` varchar(225) DEFAULT NULL,
  `detail` text,
  `public` tinyint(1) DEFAULT '1',
  `position` int(10) DEFAULT '0',
  `idparent` int(10) DEFAULT '0',
  PRIMARY KEY (`idcategories`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`idcategories`, `catname`, `image`, `detail`, `public`, `position`, `idparent`) VALUES
(1, 'MEN', '', '', 1, 0, 0),
(2, 'WOMEN', '', '', 1, 1, 0),
(3, 'KIDS', NULL, NULL, 1, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cat_pro`
--

CREATE TABLE IF NOT EXISTS `cat_pro` (
  `idcategories` int(10) NOT NULL,
  `idproduct` int(20) NOT NULL,
  PRIMARY KEY (`idcategories`,`idproduct`),
  KEY `idproduct` (`idproduct`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat_pro`
--

INSERT INTO `cat_pro` (`idcategories`, `idproduct`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(2, 10),
(2, 11),
(2, 12),
(2, 13),
(2, 14),
(2, 15),
(3, 16),
(3, 17),
(3, 18),
(3, 19),
(3, 20),
(3, 21),
(3, 22),
(3, 23),
(3, 24);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `idcustomer` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `image` varchar(225) DEFAULT NULL,
  `gender` tinyint(1) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`idcustomer`),
  UNIQUE KEY `user` (`user`),
  UNIQUE KEY `user_2` (`user`),
  KEY `idcustomer` (`idcustomer`),
  KEY `user_3` (`user`),
  KEY `user_4` (`user`),
  KEY `user_5` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`idcustomer`, `name`, `image`, `gender`, `user`, `pass`) VALUES
(1, 'Anh Vu', 'admin.jpg', 1, 'admin', 'admin'),
(2, 'Sunny Bui', '22-11-2014-18-00-27-sunny.png', 1, 'sunny', '1234'),
(3, 'hai anh', NULL, 1, 'user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `idorder` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `gender` int(1) NOT NULL,
  `time_add` datetime NOT NULL,
  `note` text,
  `idcustomer` int(20) NOT NULL,
  PRIMARY KEY (`idorder`),
  KEY `idcustomer` (`idcustomer`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Hóa Đơn' AUTO_INCREMENT=19 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`idorder`, `name`, `address`, `gender`, `time_add`, `note`, `idcustomer`) VALUES
(1, NULL, NULL, 0, '2015-01-06 09:57:18', '', 3),
(2, NULL, NULL, 0, '2015-01-06 10:15:32', '', 3),
(3, NULL, NULL, 0, '2015-01-06 10:16:19', '', 3),
(4, NULL, NULL, 0, '2015-01-06 10:21:42', '', 3),
(5, NULL, NULL, 0, '2015-01-06 10:23:43', '', 3),
(6, NULL, NULL, 0, '2015-01-07 09:21:53', '', 3),
(7, NULL, NULL, 0, '2015-01-07 09:31:56', '', 3),
(8, NULL, NULL, 0, '2015-01-07 09:33:39', '', 3),
(9, NULL, NULL, 0, '2015-01-07 09:36:33', '', 3),
(10, NULL, '123 nguyen xi', 1, '2015-01-07 10:18:37', 'san pham tot', 3),
(11, 'hai anh', '123 nguyen xi', 1, '2015-01-07 10:30:11', 'Hàng Tốt', 3),
(12, 'vu hai anh', 'anh vu', 0, '2015-01-07 10:32:23', 'hàng giao sớm', 3),
(13, 'vu hai anh', 'anh vu', 0, '2015-01-07 10:32:37', 'hàng giao sớm', 3),
(14, 'Vũ Hà', 'mat kinh 123', 0, '2015-01-07 10:36:01', 'tốt tốt', 3),
(15, 'adfdfd', 'fdfdfd', 1, '2015-01-07 10:39:41', 'fdfd', 3),
(16, 'anh ', 'mat kinh 123', 0, '2015-01-07 10:53:18', 'shofshofshd', 3),
(17, 'nam anh', 'poly', 0, '2015-01-07 10:55:50', 'tuyệt', 3),
(18, 'aaaaaa', 'aaaaaaaa', 1, '2015-01-07 10:57:33', 'aaaaaa', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE IF NOT EXISTS `orderdetail` (
  `idproduct` int(20) NOT NULL,
  `idorder` int(20) NOT NULL,
  `qty` int(20) NOT NULL,
  `price` int(50) NOT NULL,
  PRIMARY KEY (`idproduct`,`idorder`),
  KEY `idorder` (`idorder`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`idproduct`, `idorder`, `qty`, `price`) VALUES
(1, 2, 1, 1300000),
(1, 3, 1, 1300000),
(1, 11, 1, 1300000),
(1, 14, 1, 1300000),
(2, 6, 1, 900000),
(2, 10, 1, 900000),
(3, 7, 1, 800000),
(3, 12, 1, 800000),
(3, 13, 1, 800000),
(4, 9, 1, 1500000),
(4, 12, 3, 4500000),
(4, 13, 3, 4500000),
(5, 4, 1, 1200000),
(5, 5, 7, 8400000),
(5, 8, 1, 1200000),
(5, 17, 1, 1200000),
(5, 18, 1, 1200000),
(6, 1, 2, 1700000),
(6, 2, 2, 1700000),
(6, 3, 2, 1700000),
(8, 15, 1, 950000),
(8, 16, 1, 950000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `idproduct` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `model` varchar(225) DEFAULT NULL,
  `detail` text,
  `pimage` varchar(225) NOT NULL,
  `price` int(20) NOT NULL,
  `sale` int(20) DEFAULT NULL,
  `state` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`idproduct`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`idproduct`, `name`, `model`, `detail`, `pimage`, `price`, `sale`, `state`) VALUES
(1, 'MASTER MEN', 'P1020565', '', '21-11-2014-15-28-39-P1020568.JPG', 1300000, 1000000, 1),
(2, 'Prada Men Fashion', 'PMF845', '', '21-11-2014-15-29-13-P1020570.JPG', 900000, 0, 0),
(3, 'Prada Men Fashion', 'PD82G', '', '21-11-2014-15-29-44-P1020571.JPG', 800000, 700000, 1),
(4, 'D&G Fashion', 'DG833', '', '21-11-2014-15-30-57-P1020575.jpg', 1500000, 0, 1),
(5, 'Flyer Men', 'F382', '', '21-11-2014-15-31-42-P1020582.jpg', 1200000, 1100000, 0),
(6, 'Police Nam', 'PD82G', '', '21-11-2014-15-32-32-P1020585.jpg', 850000, 700000, 1),
(7, 'Police Nam', 'ODH483', '', '21-11-2014-15-33-12-P1020607.JPG', 650000, 0, 0),
(8, 'Amani Nam', 'PD82G', '', '21-11-2014-15-36-28-P1020665.JPG', 950000, 800000, 1),
(9, 'Flyer Men', 'PMF845', '', '21-11-2014-15-38-23-P1020726.JPG', 1450000, 0, 1),
(10, 'G&G Fashion', 'GG382', '', '21-11-2014-15-39-03-P1020565.jpg', 1000000, 0, 0),
(11, 'Amani Women', 'AM8325', '', '21-11-2014-15-39-51-P1020569.JPG', 850000, 700000, 1),
(12, 'Marc Jacobs Fashion', 'G843G', '', '21-11-2014-15-40-59-P1020572.jpg', 1900000, 1500000, 2),
(13, 'Flyer Women', 'O746G', '', '21-11-2014-15-42-04-P1020576.jpg', 600000, 0, 1),
(14, 'Prada Fashion', 'R74G3', '', '21-11-2014-15-42-49-P1020583.jpg', 700000, 0, 1),
(15, 'Police Women', 'PMF845', '', '21-11-2014-15-43-47-P1020579.jpg', 1200000, 0, 2),
(16, 'D&G Fashion', 'F382', '', '21-11-2014-15-44-27-P1020611.JPG', 800000, 0, 1),
(17, 'H&G Fashion', 'FKGG3', '', '21-11-2014-15-45-11-P1020612.JPG', 900000, 0, 2),
(18, 'KIDS FASHION', 'PMF845', '', '21-11-2014-15-46-15-P1020588.jpg', 1200000, 0, 1),
(19, 'G&G Fashion', 'F73GH', '', '21-11-2014-15-47-36-P1020609.JPG', 750000, 0, 1),
(20, 'Porsche KIDS', 'KD84H', '', '21-11-2014-15-48-19-P1020619.JPG', 500000, 0, 2),
(21, 'Marc Jacobs Fashion', 'MW382', '', '21-11-2014-15-49-11-P1020627.JPG', 700000, 0, 1),
(22, 'G&G Fashion', 'OT84K', '', '21-11-2014-15-51-23-P1020631.JPG', 700000, 500000, 2),
(23, 'Marc Jacobs Fashion', 'OH483', '', '21-11-2014-15-52-33-P1020582.jpg', 1300000, 0, 1),
(24, 'D&G Fashion', '485HG', '', '21-11-2014-15-53-10-P1020681.JPG', 950000, 0, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cat_pro`
--
ALTER TABLE `cat_pro`
  ADD CONSTRAINT `cat_pro_ibfk_1` FOREIGN KEY (`idcategories`) REFERENCES `categories` (`idcategories`),
  ADD CONSTRAINT `cat_pro_ibfk_2` FOREIGN KEY (`idproduct`) REFERENCES `product` (`idproduct`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`idcustomer`) REFERENCES `customer` (`idcustomer`);

--
-- Constraints for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`idproduct`) REFERENCES `product` (`idproduct`),
  ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`idorder`) REFERENCES `order` (`idorder`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
