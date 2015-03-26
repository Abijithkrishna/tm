-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2015 at 06:33 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `transport`
--

-- --------------------------------------------------------

--
-- Table structure for table `tm_bus_route`
--

CREATE TABLE IF NOT EXISTS `tm_bus_route` (
  `route_number` int(11) DEFAULT NULL,
  `start_location` text,
  `end_location` text,
  `start_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tm_bus_stop`
--

CREATE TABLE IF NOT EXISTS `tm_bus_stop` (
  `name` text,
  `id` int(11) NOT NULL,
  `route` int(11) DEFAULT NULL,
  `distance` bigint(20) DEFAULT NULL,
  `estimated_time` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tm_employee`
--

CREATE TABLE IF NOT EXISTS `tm_employee` (
  `id` int(11) NOT NULL,
  `role` text,
  `name` text,
  `license_number` text,
  `expiry` date DEFAULT NULL,
  `employee_status` text,
  `verification` text,
  `vehicle` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tm_passengers`
--

CREATE TABLE IF NOT EXISTS `tm_passengers` (
  `id` int(11) NOT NULL,
  `route` int(11) DEFAULT NULL,
  `stop` int(11) DEFAULT NULL,
  `type` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tm_student_details`
--

CREATE TABLE IF NOT EXISTS `tm_student_details` (
  `id` int(11) NOT NULL,
  `route` int(11) DEFAULT NULL,
  `stop` int(11) DEFAULT NULL,
  `fee` int(11) DEFAULT NULL,
  `vehicle` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tm_vehicle_details`
--

CREATE TABLE IF NOT EXISTS `tm_vehicle_details` (
  `number` varchar(20) DEFAULT NULL,
  `type` text,
  `capacity` int(11) DEFAULT NULL,
  `vehicle_condition` text,
  `vehicle_status` text,
  `route` int(11) DEFAULT NULL,
  `driver` int(11) DEFAULT NULL,
  `conductor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
