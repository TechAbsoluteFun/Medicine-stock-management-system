-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2017 at 07:28 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `medicine`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE IF NOT EXISTS `customer_details` (
`id` int(20) unsigned NOT NULL,
  `cus_name` varchar(20) NOT NULL,
  `cus_address` varchar(20) NOT NULL,
  `cus_contact1` int(20) NOT NULL,
  `cus_contact2` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE IF NOT EXISTS `product_details` (
`prod_id` int(20) unsigned NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `company` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`prod_id`, `product_name`, `company`) VALUES
(1, 'Livosize-M', 'Systopic');

-- --------------------------------------------------------

--
-- Table structure for table `stock_avail`
--

CREATE TABLE IF NOT EXISTS `stock_avail` (
`id` int(20) NOT NULL,
  `stock_name` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `stock_details`
--

CREATE TABLE IF NOT EXISTS `stock_details` (
`id` int(20) unsigned NOT NULL,
  `batch_no` varchar(20) NOT NULL,
  `add_quantity` int(20) DEFAULT NULL,
  `avail_quantity` int(20) NOT NULL,
  `cost` int(20) NOT NULL,
  `selling_price` int(20) NOT NULL,
  `date` date NOT NULL,
  `expire_date` date NOT NULL,
  `tod` varchar(20) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `supplier_name` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `stock_details`
--

INSERT INTO `stock_details` (`id`, `batch_no`, `add_quantity`, `avail_quantity`, `cost`, `selling_price`, `date`, `expire_date`, `tod`, `product_name`, `supplier_name`) VALUES
(1, 'B1', 50, 24850, 20, 30, '2017-05-01', '2017-06-29', '', 'Livosize-M', 'Biotic life science');

-- --------------------------------------------------------

--
-- Table structure for table `stock_sales`
--

CREATE TABLE IF NOT EXISTS `stock_sales` (
`s_id` int(20) unsigned NOT NULL,
  `customer_name` varchar(20) NOT NULL,
  `date` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `product_name` varchar(20) NOT NULL,
  `add_quantity` int(20) NOT NULL,
  `cost` decimal(10,2) NOT NULL,
  `subtotal` decimal(20,0) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=102 ;

--
-- Dumping data for table `stock_sales`
--

INSERT INTO `stock_sales` (`s_id`, `customer_name`, `date`, `product_name`, `add_quantity`, `cost`, `subtotal`) VALUES
(1, 'Mukunda', '2017-06-07 00:00:00', 'Livosize-M', 50, '20.00', '1000'),
(2, 'rubul', '2017-06-07 00:00:00', 'Livosize-M', 50, '20.00', '1000'),
(3, 'rubul', '2017-06-07 00:00:00', 'Livosize-M', 50, '20.00', '1000'),
(4, 'rubul', '2017-06-07 00:00:00', 'Livosize-M', 50, '20.00', '1000'),
(5, 'rubul', '2017-06-07 00:00:00', 'Livosize-M', 50, '20.00', '1000'),
(6, 'muku', '2017-06-07 00:00:00', 'Livosize-M', 50, '20.00', '1000'),
(7, 'qwert', '2017-06-07 00:00:00', 'Livosize-M', 50, '20.00', '1000'),
(8, 'qwert', '2017-06-07 00:00:00', 'Livosize-M', 50, '20.00', '1000'),
(9, 'qwert', '2017-06-07 00:00:00', 'Livosize-M', 50, '20.00', '1000'),
(101, 'Bhaskar', '2017-06-07 00:00:00', 'Livosize-M', 50, '20.00', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_details`
--

CREATE TABLE IF NOT EXISTS `supplier_details` (
`supp_id` int(20) unsigned NOT NULL,
  `supplier_name` varchar(20) NOT NULL,
  `supplier_address` varchar(25) NOT NULL,
  `supplier_contact1` varchar(10) NOT NULL,
  `supplier_contact2` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `supplier_details`
--

INSERT INTO `supplier_details` (`supp_id`, `supplier_name`, `supplier_address`, `supplier_contact1`, `supplier_contact2`) VALUES
(1, 'Biotic life science', 'nlp', '9784847484', '9648498949'),
(2, 'Life Guard', 'GHY', '7887998899', '8878878878'),
(3, 'nlp', 'khelmati', '1234', '4321'),
(4, 'Hazarika', 'NLP', '9878909004', '9807667845');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(2, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
 ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `stock_avail`
--
ALTER TABLE `stock_avail`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_details`
--
ALTER TABLE `stock_details`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `stock_sales`
--
ALTER TABLE `stock_sales`
 ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `supplier_details`
--
ALTER TABLE `supplier_details`
 ADD PRIMARY KEY (`supp_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
MODIFY `id` int(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
MODIFY `prod_id` int(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `stock_avail`
--
ALTER TABLE `stock_avail`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stock_details`
--
ALTER TABLE `stock_details`
MODIFY `id` int(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `stock_sales`
--
ALTER TABLE `stock_sales`
MODIFY `s_id` int(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `supplier_details`
--
ALTER TABLE `supplier_details`
MODIFY `supp_id` int(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
