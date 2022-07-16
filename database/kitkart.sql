-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2022 at 03:49 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kitkart`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_info`
--

CREATE TABLE IF NOT EXISTS `cart_info` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `item_qty` int(11) NOT NULL,
  `item_price` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `cart_info`
--

INSERT INTO `cart_info` (`cart_id`, `item_id`, `item_qty`, `item_price`, `username`, `reg_date`) VALUES
(12, 2, 1, 10000, 'shri', '2022-07-09'),
(17, 3, 10, 0, 'shri', '2022-07-16'),
(18, 1, 1, 1800, 'shri', '2022-07-16'),
(19, 3, 52, 0, 'mohan', '2022-07-16'),
(20, 2, 10, 10000, 'mohan', '2022-07-16');

-- --------------------------------------------------------

--
-- Table structure for table `category_info`
--

CREATE TABLE IF NOT EXISTS `category_info` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(30) NOT NULL,
  `cat_dname` varchar(30) NOT NULL,
  `img_path` text NOT NULL,
  `cat_type` varchar(10) NOT NULL,
  `parent_cat_id` int(11) NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `category_info`
--

INSERT INTO `category_info` (`cat_id`, `cat_name`, `cat_dname`, `img_path`, `cat_type`, `parent_cat_id`, `reg_date`) VALUES
(1, 'Electronics', 'Electronics', 'electronics.jpg', 'primary', 0, '2022-07-09'),
(2, 'Furniture', 'Furniture', 'furniture.jpg', 'primary', 0, '2022-07-09'),
(3, 'Clothes', 'Clothes', 'clothes.jpg', 'primary', 0, '2022-07-09'),
(4, 'Mobile', 'Electronics/Mobile', 'mobile.jpg', 'secondary', 1, '2022-07-09'),
(5, 'Samsung', 'Electronics/Mobile/Samsung', 'samsungMobile.jpg', 'secondary', 4, '2022-07-09');

-- --------------------------------------------------------

--
-- Table structure for table `item_info`
--

CREATE TABLE IF NOT EXISTS `item_info` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(30) NOT NULL,
  `img_path` text NOT NULL,
  `item_details` text NOT NULL,
  `item_price` int(11) NOT NULL,
  `item_discount` int(11) NOT NULL,
  `parent_cat_id` int(11) NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `item_info`
--

INSERT INTO `item_info` (`item_id`, `item_name`, `img_path`, `item_details`, `item_price`, `item_discount`, `parent_cat_id`, `reg_date`) VALUES
(1, 'samsung J2', 'j2.jpg', 'Mai ni bataunga', 2000, 10, 5, '2022-07-09'),
(2, 'Samsung J7', 'j7.jpg', 'jhingalala', 10000, 0, 5, '2022-07-09'),
(3, 'm97 Rifle', 'm97 Rifle.jpg', 'm97 Rifle German Build', 70000, 100, 0, '2022-07-10');

-- --------------------------------------------------------

--
-- Table structure for table `msg_info`
--

CREATE TABLE IF NOT EXISTS `msg_info` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `msg_heading` text NOT NULL,
  `msg_detail` text NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `sent_date` datetime NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `msg_info`
--

INSERT INTO `msg_info` (`msg_id`, `msg_heading`, `msg_detail`, `sender`, `receiver`, `sent_date`) VALUES
(5, 'hello', 'hello sir how are you?', 'shri', 'admin', '2022-07-16 18:49:01'),
(7, 'hi', 'hi bro', 'mamu', 'shri', '2022-07-16 18:54:39');

-- --------------------------------------------------------

--
-- Table structure for table `news_info`
--

CREATE TABLE IF NOT EXISTS `news_info` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_heading` text NOT NULL,
  `news_details` text NOT NULL,
  `reg_date` date NOT NULL,
  `del_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `news_info`
--

INSERT INTO `news_info` (`news_id`, `news_heading`, `news_details`, `reg_date`, `del_status`) VALUES
(1, 'f', 'sdfg', '2022-07-14', 0),
(2, 'good morning', 'the reason of this news is to say good morning to anyone reading.\r\nGOOD MORNING..', '2022-07-15', 0),
(3, 'A nice News', 'Hello this is a nice news. ', '2022-07-15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `offer_info`
--

CREATE TABLE IF NOT EXISTS `offer_info` (
  `offer_id` int(11) NOT NULL AUTO_INCREMENT,
  `offer_name` text NOT NULL,
  `offer_category` text NOT NULL,
  `offer_start_date` datetime NOT NULL,
  `offer_end_date` datetime NOT NULL,
  `offer_discount` float NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`offer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `offer_info`
--

INSERT INTO `offer_info` (`offer_id`, `offer_name`, `offer_category`, `offer_start_date`, `offer_end_date`, `offer_discount`, `reg_date`) VALUES
(1, 'diwali dhamaka', '1-4-5', '2022-07-25 00:00:00', '2022-07-31 00:00:00', 100, '2022-07-13'),
(2, 'Aivi Offer', '1-4-5', '2022-07-20 00:00:00', '2022-07-28 00:00:00', 10, '2022-07-14');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE IF NOT EXISTS `order_details` (
  `order_det_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `item_qty` int(11) NOT NULL,
  `item_price` int(11) NOT NULL,
  `ref_id` int(11) NOT NULL,
  PRIMARY KEY (`order_det_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_det_id`, `item_id`, `item_qty`, `item_price`, `ref_id`) VALUES
(55, 1, 1, 1800, 29);

-- --------------------------------------------------------

--
-- Table structure for table `order_master`
--

CREATE TABLE IF NOT EXISTS `order_master` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `amount` int(11) NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `order_master`
--

INSERT INTO `order_master` (`order_id`, `username`, `amount`, `reg_date`) VALUES
(29, 'mohan', 1800, '2022-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_mobile` varchar(30) NOT NULL,
  `user_address` text NOT NULL,
  `user_username` varchar(10) NOT NULL,
  `user_pass` varchar(10) NOT NULL,
  `user_type` varchar(5) NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `user_name`, `user_email`, `user_mobile`, `user_address`, `user_username`, `user_pass`, `user_type`, `reg_date`) VALUES
(1, 'shriharsh', 'shri@gmail.com', '2236524', 'machhipuri', 'shri', 's', 'user', '2022-07-09'),
(2, 'rohan', 'rohan@gmail.com', '21413', 'rohanNagar', 'rohan', 'r', 'user', '2022-07-09'),
(3, 'mohan', 'mohan@gmail.com', '676', 'mohan Nagar', 'mohan', 'm', 'user', '2022-07-09'),
(5, 'gabbar', 'gabbar@gmail.com', '58', 'gabbarpur', 'gabu', 'g', 'user', '2022-07-09'),
(6, 'mamu', 'mamu@gmail.com', '987', 'mamutalai', 'mamu', 'm', 'admin', '0000-00-00'),
(7, 'Electronics', '', '', '', '', '', 'user', '2022-07-09');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
