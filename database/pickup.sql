-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2017 at 11:26 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pickup`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyer_profile`
--

CREATE TABLE `buyer_profile` (
  `fname` varchar(200) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mob` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `sex` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer_profile`
--

INSERT INTO `buyer_profile` (`fname`, `lname`, `mob`, `email`, `address`, `pass`, `sex`) VALUES
('1a', 'vsdf', 323, 'jbjk', 'jknjk', '123', 'Male'),
('1qa', 'vsdf', 323, 'jbjk', 'jknjk', '123', 'Male'),
('abc', 'jgjkd', 987, 'mngdfs', 'kgjmdklf', 'abc', 'Male'),
('Nahid', 'Nawaz', 54321, 'n@aiub.edu', 'aSDfj', '456', 'Male'),
('Nawaz', 'hui', 5645, 'yugyu', 'fyg', '123', 'Male'),
('Shams', 'Sohrab', 34566354, 's@jhdsf.hjsd', 'jhfv', '65456', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `seller_product`
--

CREATE TABLE `seller_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `seller_name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `quntity` int(11) NOT NULL,
  `price_per_unit` int(11) NOT NULL,
  `date_of_add` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller_product`
--

INSERT INTO `seller_product` (`product_id`, `product_name`, `seller_name`, `description`, `quntity`, `price_per_unit`, `date_of_add`) VALUES
(1, 'Football', 'Salman', 'Football is a family of team sports that involve, to varying degrees, kicking a ball with the foot to score a goal. Unqualified, the word football is understood to refer to whichever form of football is the most popular in the regional context in which the word appears. ', 5, 100, '16/9/2017'),
(2, 'Shart', 'Mash', 'a garment for the upper body made of cotton or a similar fabric, with a collar, sleeves, and buttons down the front.', 10, 500, '10/9/2017');

-- --------------------------------------------------------

--
-- Table structure for table `seller_profile`
--

CREATE TABLE `seller_profile` (
  `cname` varchar(100) NOT NULL,
  `mob` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `sex` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller_profile`
--

INSERT INTO `seller_profile` (`cname`, `mob`, `email`, `pass`, `sex`) VALUES
('Mash', 356343, 'ghbgf', '852', 'Female'),
('Salman', 123, 'ygy', '123', 'Male'),
('Shams', 545, 'jhgjh', '123', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(100) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `password`) VALUES
('abc', 'abc'),
('Nahid', '456'),
('Salman', '123'),
('Shams', '123'),
('xyz', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyer_profile`
--
ALTER TABLE `buyer_profile`
  ADD PRIMARY KEY (`fname`);

--
-- Indexes for table `seller_product`
--
ALTER TABLE `seller_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `seller_profile`
--
ALTER TABLE `seller_profile`
  ADD PRIMARY KEY (`cname`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `seller_product`
--
ALTER TABLE `seller_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
