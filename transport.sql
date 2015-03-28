-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2015 at 02:04 PM
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

--
-- Dumping data for table `tm_bus_route`
--

INSERT INTO `tm_bus_route` (`route_number`, `start_location`, `end_location`, `start_time`) VALUES
(1, 'kilpauk', 'indygu', '11:00:00'),
(3, '1', '88', '05:57:00');

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

--
-- Dumping data for table `tm_bus_stop`
--

INSERT INTO `tm_bus_stop` (`name`, `id`, `route`, `distance`, `estimated_time`) VALUES
('bains', 2, 3, 4, '00:37:00'),
('anna nagar', 7, 3, 1, '00:00:45'),
('anna nagar', 8, 3, 1000, '00:00:45'),
('anna nagar', 9, 3, 1000, '00:36:00'),
('anna nagar', 10, 1, 1000, '36:06:00'),
('anna nagar', 11, 1, 1000, '03:06:00'),
('anna nagar', 12, 1, 1000, '03:06:00');

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

--
-- Dumping data for table `tm_employee`
--

INSERT INTO `tm_employee` (`id`, `role`, `name`, `license_number`, `expiry`, `employee_status`, `verification`, `vehicle`) VALUES
(1, 'dirverconductor', 'nnasjs', 'ksnj', '0000-00-00', 'current', 'yes', 'TN07A1144'),
(23, 'driver', 'krish', '546', '2015-01-01', 'current', 'yes', 'TN01AA1234'),
(32, 'driver', 'aaaa', 'aaa', '0000-00-00', 'aa', 'aa', 'TN07A1144'),
(321, 'dirverconductor', 'ak', 'kk', '0000-00-00', 'current', 'yes', 'sfa'),
(555, 'conductor', 'aajjn', '', '0000-00-00', 'current', 'yes', 'TN01AA1234'),
(987, 'conductor', 'jjhbadjb', '', '0000-00-00', 'current', 'yes', 'sfa');

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

--
-- Dumping data for table `tm_passengers`
--

INSERT INTO `tm_passengers` (`id`, `route`, `stop`, `type`) VALUES
(1231, 1, 10, 'student');

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

--
-- Dumping data for table `tm_vehicle_details`
--

INSERT INTO `tm_vehicle_details` (`number`, `type`, `capacity`, `vehicle_condition`, `vehicle_status`, `route`, `driver`, `conductor`) VALUES
('sfa', '1', 60, 'good', 'running', 6, 321, 987),
('TN01AA1234', '3', 30, 'Good', 'Running', 3, 23, 555),
('TN07A1144', '2', 37, 'average', 'idle', 1, 32, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
