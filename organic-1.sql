-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2015 at 04:15 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `organic`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cate_id` int(10) NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(50) NOT NULL,
  PRIMARY KEY (`cate_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cate_id`, `cate_name`) VALUES
(1, 'ChuyÃªn má»¥c 1'),
(2, 'ChuyÃªn má»¥c 2'),
(3, 'ChuyÃªn má»¥c 3'),
(4, 'ChuyÃªn má»¥c 4');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `orde_id` int(10) NOT NULL AUTO_INCREMENT,
  `orde_time` varchar(20) NOT NULL,
  `orde_userid` int(10) NOT NULL,
  `orde_details` text NOT NULL,
  `orde_status` int(10) NOT NULL,
  PRIMARY KEY (`orde_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orde_id`, `orde_time`, `orde_userid`, `orde_details`, `orde_status`) VALUES
(1, '1425092111', 1, '{"3":{"id":3,"qty":1}}', 1),
(2, '1425092242', 1, '{"3":{"id":3,"qty":1}}', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `prod_id` int(10) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(50) NOT NULL,
  `prod_cateid` int(10) NOT NULL,
  `prod_description` text NOT NULL,
  `prod_images` text NOT NULL,
  `prod_price` varchar(20) NOT NULL,
  `prod_features` text NOT NULL,
  `prod_specs` text NOT NULL,
  `prod_delivery` text NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `prod_name`, `prod_cateid`, `prod_description`, `prod_images`, `prod_price`, `prod_features`, `prod_specs`, `prod_delivery`) VALUES
(1, 'Sáº£n pháº©m 1', 1, '<p>M&ocirc; táº£ sáº£n pháº©m 1</p>\r\n', '/organic/upload/images/products/image1.jpg|\n/organic/upload/images/products/image2.jpg|\n', '100000', '<p>feature 1</p>\r\n', '<p>specs 1</p>\r\n', '<p>deli 1</p>\r\n'),
(2, 'Sáº£n pháº©m 2', 2, '<p>M&ocirc; táº£ sáº£n pháº©m 2</p>\r\n', '/organic/upload/images/products/image1.jpg|\n/organic/upload/images/products/image2.jpg|\n/organic/upload/images/products/image3.jpg|\n', '200000', '<p>feature 2</p>\r\n', '<p>specs 2</p>\r\n', '<p>deli 2</p>\r\n'),
(3, 'Sáº£n pháº©m 3', 3, '<p>M&ocirc; táº£ sáº£n pháº©m 3</p>\r\n', '/organic/upload/images/products/image1.jpg|\r\n/organic/upload/images/products/image2.jpg|\r\n', '300000', '<p>feature 3</p>\r\n', '<p>specs 3</p>\r\n', '<p>deli 3</p>\r\n'),
(4, 'Sáº£n pháº©m 4', 4, '<p>M&ocirc; táº£ sáº£n pháº©m 4</p>\r\n', '/organic/upload/images/products/image1.jpg|\n/organic/upload/images/products/image2.jpg|\n', '300000', '<p>feature 4</p>\r\n', '<p>specs 4</p>\r\n', '<p>deli 4</p>\r\n'),
(5, 'Sáº£n pháº©m 5', 1, '<p>M&ocirc; táº£ sáº£n pháº©m 5</p>\r\n', '/organic/upload/images/products/image1.jpg|\n/organic/upload/images/products/image2.jpg|\n', '500000', '<p>feature 5</p>\r\n', '<p>specs 5</p>\r\n', '<p>deli 5</p>\r\n'),
(6, 'Sáº£n pháº©m 6', 2, '<p>M&ocirc; táº£ sáº£n pháº©m 6</p>\r\n', '/organic/upload/images/products/image1.jpg|\n/organic/upload/images/products/image2.jpg|\n', '500000', '<p>feature 6</p>\r\n', '<p>specs 6</p>\r\n', '<p>deli 6</p>\r\n'),
(7, 'Sáº£n pháº©m 7', 3, '<p>M&ocirc; táº£ sáº£n pháº©m 7</p>\r\n', '/organic/upload/images/products/image1.jpg|\n/organic/upload/images/products/image2.jpg|\n', '600000', '<p>feature 7</p>\r\n', '<p>specs 7</p>\r\n', '<p>deli 7</p>\r\n'),
(8, 'Sáº£n pháº©m 8', 4, '<p>M&ocirc; táº£ sáº£n pháº©m 8</p>\r\n', '/organic/upload/images/products/image1.jpg|\r\n/organic/upload/images/products/image2.jpg|\r\n', '800000', '<p>feature 8</p>\r\n', '<p>specs 8</p>\r\n', '<p>deli 8</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_username` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_firstname` varchar(50) NOT NULL,
  `user_lastname` varchar(50) NOT NULL,
  `user_company` varchar(50) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `user_city` varchar(50) NOT NULL,
  `user_postcode` varchar(10) NOT NULL,
  `user_country` varchar(50) NOT NULL,
  `user_state` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_admin` int(10) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_username`, `user_password`, `user_firstname`, `user_lastname`, `user_company`, `user_address`, `user_city`, `user_postcode`, `user_country`, `user_state`, `user_email`, `user_phone`, `user_admin`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'Cung', 'Trinh', 'XHN', 'Xuan Hong, Xuan Truong, Nam Dinh', 'Nam Dinh', '30000', 'Viet Nam', 'Nam Dinh', 'design@xuanhongnet.com', '0979135673', 1),
(2, 'Van', '202cb962ac59075b964b07152d234b70', 'Van', 'Trinh', 'XHN', 'Xuan Hong, Xuan Truong, Nam Dinh', 'Nam Dinh', '30000', 'Viá»‡t Nam', 'Nam Dinh', 'van@xuanhongnet.com', '0979135672', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
