-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2016 at 05:42 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ahson`
--

-- --------------------------------------------------------

--
-- Table structure for table `accesslevel_login`
--

CREATE TABLE `accesslevel_login` (
  `id` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `access_level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accesslevel_login`
--

INSERT INTO `accesslevel_login` (`id`, `username`, `password`, `access_level`) VALUES
('D002', 'marry@gmail.com', 'marry123', 'publi'),
('D001', 'jack@gmail.com', 'jacky123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ahson_sql`
--

CREATE TABLE `ahson_sql` (
  `Customer_info` varchar(100) NOT NULL,
  `Menu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_feedback`
--

CREATE TABLE `customer_feedback` (
  `name` varchar(20) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_feedback`
--

INSERT INTO `customer_feedback` (`name`, `contactno`, `email`, `message`) VALUES
('ahson', '0108925054', 'junanimufc@gmail.com', 'the food was really good! thanks alot!'),
('ahmed', '022222222', 'asd@as.cd', 'nice site. good food.');

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `id` varchar(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` varchar(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(10) NOT NULL,
  `nutrition_info` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `category`, `nutrition_info`) VALUES
('MN001', 'Ceaser salad', 'Appetizer', '200 calories'),
('MN002', 'Mushroom soup', 'Appetizer', '50 calories'),
('MN003', 'Lamb shank', 'Main', 'Cooked with our secret recipe with low calories'),
('MN004', 'Sweet corn', 'Side', '23 calories'),
('MN005', 'Ice cream', 'Appetizer', '150 calories'),
('MN006', 'Mud cake', 'Appetizer', '130 calories'),
('MN007', 'Lamb chop', 'Main', '250 calories');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `fullnme` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `postcode` int(10) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`fullnme`, `email`, `contactno`, `password`, `state`, `city`, `postcode`, `address`) VALUES
('ahson', 'junanimufc@gmail.com', '010101', 'ahson', 'Selangor', 'KD', 47811, 'kota damansara'),
('junani', 'avinesh@hotmco.com', '1121221', '12sds', 'KL', 'PJ', 4781000, 'petaling'),
('junani', 'avinesh@hotmco.com', '1121221', '12sds', 'KL', 'PJ', 4781000, 'petaling'),
('rijwan', 'rijwan@gmail.com', '01139866690', 'razzaq', 'Selangor', 'PJ', 47810, 'Palm Spring'),
('rijwan', 'rijwan@gmail.com', '01139866690', 'razzaq', 'Selangor', 'PJ', 47810, 'Palm Spring'),
('ashley', 'ashley@gmail.com', '1235', 'doctor', 'Selangor', 'KD', 1234, 'segi, kota damansara'),
('ashley', 'ashley@gmail.com', '1235', 'doctor', 'Selangor', 'KD', 1234, 'segi, kota damansara');

-- --------------------------------------------------------

--
-- Table structure for table `user-login`
--

CREATE TABLE `user-login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user-login`
--

INSERT INTO `user-login` (`username`, `password`) VALUES
('ahsonjunani', 'ahson95'),
('ahsonjunani', 'ahson95'),
('avinesh', 'avinesh123'),
('avinesh', 'avinesh123'),
('junanimufc@gmail.com', 'ahson'),
('junanimufc@gmail.com', 'ahson'),
('avinesh@hotmco.com', '12sds'),
('avinesh@hotmco.com', '12sds'),
('rijwan@gmail.com', 'razzaq'),
('rijwan@gmail.com', 'razzaq'),
('rijwan', 'razzaq'),
('ashley', 'doctor');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `name`, `username`, `password`) VALUES
('user1', 'ahson', 'ahson@gmail.com', 'ahson');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
