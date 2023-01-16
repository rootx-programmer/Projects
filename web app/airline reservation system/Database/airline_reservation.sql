-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Oct 12, 2021 at 03:06 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airline_reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `airlines_list`
--

CREATE TABLE `airlines_list` (
  `id` int(30) NOT NULL,
  `airlines` text NOT NULL,
  `logo_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airlines_list`
--

INSERT INTO `airlines_list` (`id`, `airlines`, `logo_path`) VALUES
(57, 'Airindia', 'photos/Air-India-logo.png'),
(58, 'Indigo', 'photos/thmbnail.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `airport_list`
--

CREATE TABLE `airport_list` (
  `id` int(30) NOT NULL,
  `airport` text NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airport_list`
--

INSERT INTO `airport_list` (`id`, `airport`, `location`) VALUES
(8, 'Sardar Vallabhbhai Patel International Airport,Ahemdabad,Gujrat', 'Sardar Vallabhbhai Patel International Airport,Ahemdabad,Gujrat'),
(9, 'Surat International Airport,Surat,Gujrat', 'Surat International Airport,Surat,Gujrat'),
(10, 'Jammu Airport,Jammu & Kashmir', 'Jammu Airport,Jammu & Kashmir'),
(11, 'Indira Gandhi International Airport,Delhi', 'Indira Gandhi International Airport,Delhi'),
(12, 'Jaipur International Airport,Rajsthan', 'Jaipur International Airport,Rajsthan'),
(13, 'Rajabhoj Airport,Madhyapradesh', 'Rajabhoj Airport,Madhyapradesh'),
(14, 'Chhatrapati Shivaji Maharaj International Airport,Mumbai,Maharastra', 'Chhatrapati Shivaji Maharaj International Airport,Mumbai,Maharastra'),
(15, 'Rajiv Gandhi International Airport,Hyderabad,Andhrapradesh', 'Rajiv Gandhi International Airport,Hyderabad,Andhrapradesh'),
(16, 'Kempegowda International Airport Bengaluru,Karnataka', 'Kempegowda International Airport Bengaluru,Karnataka'),
(17, 'Goa International Airport,Goa', 'Goa International Airport,Goa'),
(18, 'Chennai International Airport,Tamilnadu', 'Chennai International Airport,Tamilnadu');

-- --------------------------------------------------------

--
-- Table structure for table `booked_flight`
--

CREATE TABLE `booked_flight` (
  `id` int(30) NOT NULL,
  `flight_name` varchar(30) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `contact` text NOT NULL,
  `plane_no` varchar(10) NOT NULL,
  `flight_id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `depture_d` varchar(10) NOT NULL,
  `arrival_d` varchar(10) NOT NULL,
  `seats` int(3) NOT NULL,
  `p_seats` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `date` varchar(30) NOT NULL,
  `airport_from` varchar(100) NOT NULL,
  `airport_to` varchar(100) NOT NULL,
  `travel_class` varchar(15) NOT NULL,
  `children` int(11) NOT NULL,
  `adults` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booked_flight`
--

INSERT INTO `booked_flight` (`id`, `flight_name`, `name`, `address`, `contact`, `plane_no`, `flight_id`, `email`, `depture_d`, `arrival_d`, `seats`, `p_seats`, `price`, `date`, `airport_from`, `airport_to`, `travel_class`, `children`, `adults`) VALUES
(33, 'Air India', 'Arjun Gajera', 'junagadh', '93284 93857', '77', 66, 'arjungajera@gmail.com', '2021-10-31', '2021-10-17', 1, 32, 60000, '2021-10-12', 'Kempegowda International Airport Bengaluru,Karnataka', 'Indira Gandhi International Airport,Delhi', 'Economy Class', 0, 1),
(34, 'Air India', 'Nitin Bhanderi', 'junagadh', '6353719479', '11', 63, 'nitin9664589488@gmail.com', '2021-10-30', '2021-10-12', 1, 2, 50000, '2021-10-12', 'Surat International Airport,Gujrat', 'Indira Gandhi International Airport,Delhi', 'First Class', 0, 1),
(35, 'Indigo', 'Rahul Thavani', 'junagadh', '95373 42348', '51', 64, 'rahulthavani@gmail.com', '2021-10-16', '2021-10-13', 1, 51, 40000, '2021-10-12', 'Chhatrapati Shivaji Maharaj International Airport,Mumbai,Maharastra', 'Goa International Airport', 'Business Class', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `flight_list`
--

CREATE TABLE `flight_list` (
  `id` int(30) NOT NULL,
  `plane_no` int(11) NOT NULL,
  `airline_name` text NOT NULL,
  `airport_from` text NOT NULL,
  `airport_to` text NOT NULL,
  `departure_datetime` datetime NOT NULL,
  `arrival_datetime` datetime NOT NULL,
  `seats` int(10) NOT NULL DEFAULT 0,
  `price` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flight_list`
--

INSERT INTO `flight_list` (`id`, `plane_no`, `airline_name`, `airport_from`, `airport_to`, `departure_datetime`, `arrival_datetime`, `seats`, `price`, `date_created`) VALUES
(63, 11, 'Air India', 'Surat International Airport,Gujrat', 'Indira Gandhi International Airport,Delhi', '2021-10-30 18:08:00', '2021-10-12 18:08:00', 100, 50000, '2021-10-12 00:00:00'),
(64, 51, 'Indigo', 'Chhatrapati Shivaji Maharaj International Airport,Mumbai,Maharastra', 'Goa International Airport', '2021-10-16 18:09:00', '2021-10-13 18:09:00', 100, 40000, '2021-10-12 00:00:00'),
(66, 77, 'Air India', 'Kempegowda International Airport Bengaluru,Karnataka', 'Indira Gandhi International Airport,Delhi', '2021-10-31 18:14:00', '2021-10-17 18:13:00', 100, 60000, '2021-10-12 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `s_user`
--

CREATE TABLE `s_user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `dob` date NOT NULL,
  `mno` int(11) NOT NULL,
  `gender` text NOT NULL,
  `address` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `c_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s_user`
--

INSERT INTO `s_user` (`id`, `name`, `dob`, `mno`, `gender`, `address`, `email`, `password`, `c_password`) VALUES
(22, 'Nitin\r\n', '2002-07-20', 2147483647, 'Male', '', 'nitin9664589488@gmail.com', 'dragon_NP', 'dragon_NP'),
(24, '', '2001-10-18', 95373, 'Male', 'junagadh', 'rahulthavani@gmail.com', 'rahul', 'rahul'),
(25, '', '2002-08-28', 93284, 'Male', 'junagadh', 'arjungajera@gmail.com', 'arjun', 'arjun');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airlines_list`
--
ALTER TABLE `airlines_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `airport_list`
--
ALTER TABLE `airport_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booked_flight`
--
ALTER TABLE `booked_flight`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flight_list`
--
ALTER TABLE `flight_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_user`
--
ALTER TABLE `s_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airlines_list`
--
ALTER TABLE `airlines_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `airport_list`
--
ALTER TABLE `airport_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `booked_flight`
--
ALTER TABLE `booked_flight`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `flight_list`
--
ALTER TABLE `flight_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `s_user`
--
ALTER TABLE `s_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
