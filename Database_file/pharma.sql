-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 06:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharma`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`, `photo`, `created_on`) VALUES
(1, 'Kwambai', '$2y$10$dNXqZYozcBf2JWEzAaEKDO0DSy4.Cvn5mOLtliYp.Y261ouWt9kwm', 'Kwambai', 'Emmanuel', 'IMG_20190207_173548.jpg', '2018-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `position_id`, `firstname`, `lastname`, `photo`, `password`, `username`) VALUES
(19, 9, 'Emmanuel', 'Kwambai', '', '$2y$10$WHyOMU0YnmNAUa64IAftIeKIgXC7K7HvHRp84uu5yU.vFXMDRE6HS', 'userman'),
(20, 10, 'Oliver', 'Too', '', '$2y$10$GMnP4LbcD2h7CCiewS5WS.pJHT.fS0hVhKjv.hUAAlaNIIc6kq6.a', 'userpharm');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(255) NOT NULL,
  `cust_id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `cust_id`, `first_name`, `last_name`, `address`, `photo`) VALUES
(2, '16PW5plFu4', 'Emmanuel', 'kwambai1', '30700', 'IMG_20180806_102716.jpg'),
(4, 'Z2RNJ5O8Ey', 'Emmanuel', 'wambai', '30700', 'IMG_20190207_173548.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `invoice_id` varchar(100) NOT NULL,
  `cust_id` varchar(100) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `presc_id` varchar(111) NOT NULL,
  `quantity` varchar(111) NOT NULL,
  `cost` varchar(111) NOT NULL,
  `totalcost` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `invoice_id`, `cust_id`, `last_name`, `name`, `presc_id`, `quantity`, `cost`, `totalcost`) VALUES
(11, '67tyuhjbn', '0', '', '', '0', '5', '120', '600'),
(12, '67tyuhjbn', '0', '', '', '0', '5', '78', '390'),
(13, '67tyuhjbn', '0', '', '', '0', '56', '6', '336');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `id` int(11) NOT NULL,
  `mfname` varchar(11) NOT NULL,
  `licence` varchar(110) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`id`, `mfname`, `licence`, `address`) VALUES
(3, 'kemsa', '4566', '56'),
(4, 'Nema', '3456', '12');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `max_vote` int(11) NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `description`, `max_vote`, `priority`) VALUES
(9, 'Manager', 1, 1),
(10, 'Pharmacist', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions1`
--

CREATE TABLE `prescriptions1` (
  `id` int(11) NOT NULL,
  `presc_id` varchar(255) NOT NULL,
  `cust_id` varchar(255) NOT NULL,
  `sex` varchar(155) NOT NULL,
  `age` varchar(255) NOT NULL,
  `post_address` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `invoice_id` varchar(255) NOT NULL,
  `drug_name` varchar(255) NOT NULL,
  `dose` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `cost` varchar(255) NOT NULL,
  `totalcost` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescriptions1`
--

INSERT INTO `prescriptions1` (`id`, `presc_id`, `cust_id`, `sex`, `age`, `post_address`, `phone`, `invoice_id`, `drug_name`, `dose`, `quantity`, `cost`, `totalcost`, `date`) VALUES
(0, '298715364', '2', 'nrtgyuhjikopl;[', '-4', '', '', 'CK1I4SXHWV', '9', 'emm', 'dfgh', 'uuuu', '0', '06/02/2021 12:40:11:pm'),
(0, '731526948', '2', 'female', '10', '', '', 'KE6NHBT34Z', '9', '3', '31', '88', '2728', '06/22/2021 04:07:55:pm');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `batch_no` varchar(100) NOT NULL,
  `mf_date` varchar(155) NOT NULL,
  `exp_date` varchar(155) NOT NULL,
  `manufacturer` int(11) NOT NULL,
  `supplier` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `name`, `unit`, `batch_no`, `mf_date`, `exp_date`, `manufacturer`, `supplier`) VALUES
(9, 'piriton', '8', '6789', '56789', 'rtyu', 1, '56789'),
(11, 'poppp', '4', '12345', '2021-06-08', '2021-06-19', 3, 'nee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
