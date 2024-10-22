-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2024 at 12:06 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrental2`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_rental`
--

CREATE TABLE `customer_rental` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `paymentmode` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_rental`
--

INSERT INTO `customer_rental` (`customer_id`, `first_name`, `last_name`, `paymentmode`, `username`) VALUES
(68, 'asdasddet123', 'asdasdasaedt123', 'Card', 'asdasdedt123'),
(70, 'Javeson', 'Paccial', 'Cash', 'paccial1'),
(71, 'Javeson', 'Paccial', 'Cash', 'paccial23'),
(72, 'Javeson', 'Paccial', 'Cash', 'paccialuser');

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE `rental` (
  `rental_id` int(11) NOT NULL,
  `car` varchar(50) DEFAULT NULL,
  `rentaldate` date DEFAULT current_timestamp(),
  `returndate` date DEFAULT NULL,
  `customer_id` varchar(50) DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rental`
--

INSERT INTO `rental` (`rental_id`, `car`, `rentaldate`, `returndate`, `customer_id`, `date_added`) VALUES
(101, 'toyota', '2024-10-23', '2024-10-24', '64', '2024-10-22 21:47:42'),
(118, 'ford', '2024-10-17', '2024-10-25', '72', '2024-10-23 05:18:27'),
(121, 'toyota', '2024-10-24', '2024-10-25', '', '2024-10-23 05:25:59'),
(122, 'ford', '2024-10-24', '2024-10-24', '', '2024-10-23 05:31:42'),
(123, 'audi', '2024-10-25', '2024-10-26', '', '2024-10-23 05:42:44'),
(127, 'audi', '2024-10-24', '2024-10-25', '70', '2024-10-23 05:48:21'),
(128, 'toyota', '2024-10-24', '2024-10-25', '68', '2024-10-23 06:05:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_rental`
--
ALTER TABLE `customer_rental`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`rental_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_rental`
--
ALTER TABLE `customer_rental`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
  MODIFY `rental_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
