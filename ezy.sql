-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2023 at 04:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_dealer`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `book_id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `book_to` date NOT NULL,
  `total_price` int(11) NOT NULL,
  `book_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`book_id`, `cid`, `car_id`, `book_to`, `total_price`, `book_date`) VALUES
(1, 3, 2, '2023-02-04', 450, '2023-02-01'),
(2, 3, 3, '2023-02-02', 250, '2023-02-01'),
(3, 3, 4, '2023-02-02', 150, '2023-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `Name`, `address`, `email`, `phone`, `password`) VALUES
(1, 'Ram Sharma', 'HTD', 'ram@gmail.com', '9898989898', '123456'),
(3, 'Harry Kane', 'HTD', 'harry@gmail.com', '54545454', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `seller_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`seller_id`, `fname`, `lname`, `password`, `address`, `email`, `phone`) VALUES
(1, 'Seller', 'Seller 2', '123456', 'HTD', 'seller@gmail.com', 9865423154),
(2, 'AAA', 'BBB', '123456', 'HTD', 'abc@gmail.com', 5465464),
(4, 'Ole', 'Company', '123456', 'Sydney', 'ole@gmail.com', 6565656);

-- --------------------------------------------------------

--
-- Table structure for table `tblcar`
--

CREATE TABLE `tblcar` (
  `car_id` int(11) NOT NULL,
  `car_name` varchar(255) NOT NULL,
  `car_desc` longtext NOT NULL,
  `capacity` varchar(255) NOT NULL,
  `per_day_price` int(11) NOT NULL,
  `product_status` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `posted_by` int(11) NOT NULL,
  `car_make` int(11) NOT NULL,
  `car_model` varchar(255) NOT NULL,
  `car_color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcar`
--

INSERT INTO `tblcar` (`car_id`, `car_name`, `car_desc`, `capacity`, `per_day_price`, `product_status`, `image`, `posted_by`, `car_make`, `car_model`, `car_color`) VALUES
(2, 'Mercedez Benz', 'Mercedes-Benz, commonly referred to as Mercedes and sometimes as Benz, is a German luxury and commercial vehicle automotive brand established in 1926. ', '5', 150, 1, 'car-american-1.jpeg', 1, 2018, 'Mercedez', 'red'),
(3, 'Sedan', 'A sedan or saloon is a passenger car in a three-box configuration with separate compartments for an engine, passengers, and cargo. ', '6', 250, 1, 'car-german-1.jpeg', 1, 2018, 'sedan', 'white'),
(4, 'Hyundai', 'Hyundai', '5', 150, 1, 'car-7.png', 1, 2010, 'Hyundai', 'blue'),
(5, 'Maruti ', 'Maruti Suzuki sells hatchbacks, sedans, MUVs and SUVs in India through its ARENA and NEXA channels, certified pre-owned cars through TRUE VALUE', '4', 250, 0, 'maruti.jpg', 4, 2015, 'Maruti', 'red'),
(6, 'Mahindra', 'Mahindra is a billion-dollar global enterprise headquartered in India, which is driven by innovation & compassion. ', '4', 4, 0, 'mahindra.jpg', 4, 2014, 'Mahindra', 'red'),
(8, 'Suzuki ZR', 'Car Rental price', '5', 140, 0, 'suzuki.jpg', 1, 2016, 'Suzuki', 'red');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`seller_id`);

--
-- Indexes for table `tblcar`
--
ALTER TABLE `tblcar`
  ADD PRIMARY KEY (`car_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblcar`
--
ALTER TABLE `tblcar`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
