-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2018 at 08:49 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pds`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(10) NOT NULL,
  `card_number` int(10) NOT NULL,
  `seller_id` int(10) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `order_number` int(10) NOT NULL,
  `seller_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`) VALUES
(1, 'rice', '10'),
(3, 'wheat', '10'),
(4, 'atta', '20'),
(9, 'puri', '10'),
(21, 'pulses', '25');

-- --------------------------------------------------------

--
-- Table structure for table `ration`
--

CREATE TABLE `ration` (
  `id` int(10) NOT NULL,
  `card_number` int(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fulladdress` varchar(400) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pincode` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ration`
--

INSERT INTO `ration` (`id`, `card_number`, `name`, `mobile`, `email`, `fulladdress`, `address1`, `address2`, `city`, `state`, `pincode`) VALUES
(1, 2313, 'asd', '+9111233', 'aasjdf@gmail.com', '2323<br>1323<br>16323<br>6323 -163', '2323', '1323', '16323', '6323', 163),
(2, 65413, 'adsj', '+9151316', 'ab@gmail.com', 'sjfok<br>kkslflk<br>slkfj<br>kjjslkfj -1516', 'sjfok', 'kkslflk', 'slkfj', 'kjjslkfj', 1516),
(3, 3131, 'sjfklskf', '+911213', 'afkd@gmail.com', '63232<br>46311<br>6131<br>4466313 -461662', '63232', '46311', '6131', '4466313', 461662),
(4, 6464, 'jadkf', '+9144646', 'ws@gmail.com', '564644<br>464646<br>4646<br>4646 -46444', '564644', '464646', '4646', '4646', 46444),
(5, 16461, '23346331', '+9132313346', 'ahd@gmail.com', '66164<br>5464134<br>44617<br>6436 -613', '66164', '5464134', '44617', '6436', 613),
(6, 456, 'xyz', '+916456464', 'akasddk@gmail.com', '64464<br>646<br>4644<br>6466 -6664', '64464', '646', '4644', '6466', 6664);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fulladdress` varchar(400) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pincode` int(10) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'seller'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `mobile`, `password`, `fulladdress`, `address1`, `address2`, `city`, `state`, `pincode`, `role`) VALUES
(1, 'Rana Ankit Singh', 'ranaasbwbs@gmail.com', '+919297781270', '123456789', 'Behind Dwarika Hospital, Mahilong<br>Purulia Road, Tatisilway<br>Ranchi<br>Jharkhand -835103', 'Behind Dwarika Hospital, Mahilong', 'Purulia Road, Tatisilway', 'Ranchi', 'Jharkhand', 835103, 'admin'),
(3, 'a', 'a@gmail.com', '+91646', '123456789', 'ojo<br>lkjlk<br>lkjio<br>hkjh -545136', 'ojo', 'lkjlk', 'lkjio', 'hkjh', 545136, 'seller'),
(4, 'akas', 'alk@gmail.com', '+914656', 'hhasf', '3623<br>5564<br>664<br>665 -56', '3623', '5564', '664', '665', 56, 'seller');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`order_number`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `ration`
--
ALTER TABLE `ration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `card_number` (`card_number`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_list`
--
ALTER TABLE `order_list`
  MODIFY `order_number` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `ration`
--
ALTER TABLE `ration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
