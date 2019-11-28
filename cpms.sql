-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2018 at 06:41 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cpms`
--
CREATE DATABASE IF NOT EXISTS `cpms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cpms`;

-- --------------------------------------------------------

--
-- Table structure for table `bike_price`
--

CREATE TABLE IF NOT EXISTS `bike_price` (
  `price_no` int(50) NOT NULL,
  `per_hour` int(50) NOT NULL,
  `per_day` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bike_price`
--

INSERT INTO `bike_price` (`price_no`, `per_hour`, `per_day`) VALUES
(2, 30, 500);

-- --------------------------------------------------------

--
-- Table structure for table `bike_slot_book`
--

CREATE TABLE IF NOT EXISTS `bike_slot_book` (
  `Bike_no` varchar(12) NOT NULL,
  `Bike_owner_name` varchar(50) NOT NULL,
  `Arrival_Time` varchar(50) NOT NULL,
  `Departure_Time` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `bike_slot_booking` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bike_slot_book`
--

INSERT INTO `bike_slot_book` (`Bike_no`, `Bike_owner_name`, `Arrival_Time`, `Departure_Time`, `Date`, `bike_slot_booking`) VALUES
('', 'mmm', '23', '12', '0000-00-00', ''),
('', 'mo', '', '', '0000-00-00', ''),
('', 'mm', '10', '12A.M.', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `car_price`
--

CREATE TABLE IF NOT EXISTS `car_price` (
  `per_hour` varchar(50) NOT NULL,
  `per_day` varchar(50) NOT NULL,
  `price_code` int(10) NOT NULL,
  PRIMARY KEY (`price_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_price`
--

INSERT INTO `car_price` (`per_hour`, `per_day`, `price_code`) VALUES
('50', '1000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `car_slot_booking`
--

CREATE TABLE IF NOT EXISTS `car_slot_booking` (
  `car_no` int(20) NOT NULL,
  `car_owner_name` varchar(30) NOT NULL,
  `Arrival_Time` varchar(12) NOT NULL,
  `Departure_Time` varchar(12) NOT NULL,
  `Date` varchar(10) NOT NULL,
  `Charge` int(12) NOT NULL,
  `slote_num` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_slot_booking`
--

INSERT INTO `car_slot_booking` (`car_no`, `car_owner_name`, `Arrival_Time`, `Departure_Time`, `Date`, `Charge`, `slote_num`) VALUES
(0, 'Morium', '10', '12', '2018-11-10', 100, ''),
(0, '', '', '', '', 0, ''),
(0, 'Xx', '9', '12', '12', 1500, ''),
(0, 'Xx', '9', '12', '12', 1500, ''),
(0, 'Xx', '9', '12', '12', 1500, ''),
(0, 'Xx', '9', '12', '12', 1500, ''),
(0, 'Xx', '7', '12', '12', 2500, ''),
(0, 'Xx', '7', '12', '12', 2500, ''),
(201801, 'Sk Asaduzzam ', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `car_no` varchar(50) NOT NULL,
  `Charge` varchar(50) NOT NULL,
  `Done` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_bike`
--

CREATE TABLE IF NOT EXISTS `payment_bike` (
  `Bike_no` varchar(50) NOT NULL,
  `Charge` varchar(50) NOT NULL,
  `Done` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
