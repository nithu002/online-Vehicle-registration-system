-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2022 at 06:25 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vrp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `user`) VALUES
(1, 'Admin', 'nithutech06@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE `budget` (
  `id` int(255) NOT NULL,
  `budget_name` varchar(255) NOT NULL,
  `edate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `budget`
--

INSERT INTO `budget` (`id`, `budget_name`, `edate`) VALUES
(42, 'Budget1', '2022-12-23'),
(43, 'Budget2', '2022-12-23'),
(44, 'Budget4', '2022-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `count_depart`
--

CREATE TABLE `count_depart` (
  `id` int(255) NOT NULL,
  `depart` varchar(255) NOT NULL,
  `depcount` int(255) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `count_depart`
--

INSERT INTO `count_depart` (`id`, `depart`, `depcount`) VALUES
(1, 'depart1', 4),
(2, 'depart2', 4);

-- --------------------------------------------------------

--
-- Table structure for table `depart`
--

CREATE TABLE `depart` (
  `id` int(255) NOT NULL,
  `depart` varchar(255) NOT NULL,
  `cdate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `depart`
--

INSERT INTO `depart` (`id`, `depart`, `cdate`) VALUES
(17, 'Depart 1', '2022-12-24'),
(18, 'Depart 2', '2022-12-23'),
(19, 'Depart 3', '2022-12-23'),
(20, 'Depart 4', '2022-12-24');

-- --------------------------------------------------------

--
-- Table structure for table `full`
--

CREATE TABLE `full` (
  `id` int(11) NOT NULL,
  `rname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `depart` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `budget_name` varchar(255) NOT NULL,
  `hod` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `rdate` varchar(255) NOT NULL,
  `edate` varchar(255) NOT NULL,
  `stime` varchar(255) NOT NULL,
  `etime` varchar(255) NOT NULL,
  `vehicle_name` varchar(255) NOT NULL,
  `percount` varchar(255) NOT NULL,
  `pername` varchar(500) NOT NULL,
  `progress` varchar(255) NOT NULL,
  `referid` varchar(255) NOT NULL,
  `cur_time` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `kmph` varchar(255) NOT NULL,
  `vehicle_no` varchar(255) NOT NULL,
  `remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `full`
--

INSERT INTO `full` (`id`, `rname`, `email`, `depart`, `mail`, `budget_name`, `hod`, `destination`, `reason`, `rdate`, `edate`, `stime`, `etime`, `vehicle_name`, `percount`, `pername`, `progress`, `referid`, `cur_time`, `created_at`, `kmph`, `vehicle_no`, `remarks`) VALUES
(44, 'User B', 'userb@gmail.com', 'Depart 2', '', 'Budget1', 'Yes', 'sample', ' sample', '2022-12-23', '2022-12-24', '11:11', '11:11', 'Toyota Bus', '5', '  sample,sample,sample,sample,sample', 'Approved', 'VRF_637 ', '22-12-23 05:34:19', '2022-12-28 08:19:51', '250.00/km', 'A-Z 8800', 'u'),
(45, 'User C', 'userc@gmail.com', 'Depart 3', '', 'Budget4', 'Yes', 'sample', ' sample', '2022-12-23', '2022-12-23', '11:11', '11:11', 'Three-wheeler', '1', '  sample', 'Pending', 'VRF_40 ', '22-12-23 05:34:56', '2022-12-28 08:20:05', '125.00/km', 'G-S 0123', 'u'),
(46, 'User E', 'usere@gmail.com', 'Depart 4', '', 'Budget4', 'Yes', 'sample', ' sample', '2022-12-23', '2022-12-23', '11:11', '11:11', 'Toyota Bus', '1', '  sample', 'Pending', 'VRF_665 ', '22-12-23 05:35:27', '2022-12-28 08:20:14', '250.00/km', 'A-Z 8800', 'u'),
(47, 'User B', 'userb@gmail.com', 'Depart 2', '', 'Budget2', 'Yes', 'sample', ' sample', '2022-12-23', '2022-12-24', '11:11', '11:01', 'Toyota Bus', '6', '  sample,sample,sample,sample,sample,sample', 'Pending', 'VRF_206 ', '22-12-23 05:35:57', '2022-12-28 08:20:22', '250.00/km', 'A-Z 8800', 'u');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `phone` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`, `user`, `phone`) VALUES
(1, '', 'admin@gmail.com', '123', 'Admin', ''),
(3, 'VARATHARAJAN NITHURSHAN', 'nithutech06@gmail.com', '123', 'Admin', '0779455812');

-- --------------------------------------------------------

--
-- Table structure for table `system`
--

CREATE TABLE `system` (
  `up_name` int(255) NOT NULL,
  `rname` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `depart` varchar(150) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `system`
--

INSERT INTO `system` (`up_name`, `rname`, `email`, `depart`, `phone`, `mail`) VALUES
(56, 'User A', 'usera@gmail.coma', 'Depart 1', '0779455812', 'sample@gmail.com'),
(57, 'User B', 'userb@gmail.com', 'Depart 2', '0777777777', '233@gmail'),
(58, 'User C', 'userc@gmail.com', 'Depart 3', '07794444444', 'Hod1@gmailcom'),
(59, 'User E', 'usere@gmail.com', 'Depart 4', '07794444444', 'hod2@gmail.com'),
(63, 'nithu', 'nithutech06@gmail.com', 'Depart 1', '0779455812', 'nithurshannithurshan65@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `vehilce`
--

CREATE TABLE `vehilce` (
  `id` int(255) NOT NULL,
  `vehicle_no` varchar(100) NOT NULL,
  `vehicle_name` varchar(100) NOT NULL,
  `model` varchar(255) NOT NULL,
  `kmph` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehilce`
--

INSERT INTO `vehilce` (`id`, `vehicle_no`, `vehicle_name`, `model`, `kmph`) VALUES
(15, 'E-P 0012', 'Bus', 'Tata', '150.00'),
(16, 'G-S 0123', 'Three-wheeler ', 'Highlander', '125.00'),
(17, 'E-P0110', 'Motor Bike ', 'Nova', '150.00'),
(18, 'W-P', 'Crew Cab ', 'Tata', '500.00'),
(19, 'A-Z 8800', 'Toyota Bus ', 'Toyota', '250.00'),
(20, 'A-Z 8888', 'Min Bus', 'Sample', '25.00');

-- --------------------------------------------------------

--
-- Table structure for table `vrp`
--

CREATE TABLE `vrp` (
  `cat_id` int(100) NOT NULL,
  `up_name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `depart` varchar(150) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `budget` varchar(100) NOT NULL,
  `hod` varchar(10) NOT NULL,
  `destination` varchar(500) NOT NULL,
  `reason` varchar(500) NOT NULL,
  `rdate` varchar(50) NOT NULL,
  `edate` varchar(50) NOT NULL,
  `stime` varchar(50) NOT NULL,
  `etime` varchar(50) NOT NULL,
  `vehicle` varchar(50) NOT NULL,
  `percount` varchar(255) NOT NULL,
  `pername` varchar(500) NOT NULL,
  `progress` varchar(50) NOT NULL,
  `referid` varchar(255) NOT NULL,
  `cur_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vrp`
--

INSERT INTO `vrp` (`cat_id`, `up_name`, `email`, `depart`, `mail`, `budget`, `hod`, `destination`, `reason`, `rdate`, `edate`, `stime`, `etime`, `vehicle`, `percount`, `pername`, `progress`, `referid`, `cur_time`) VALUES
(147, '57', 'userb@gmail.com', 'Depart2', '233@gmail', 'Budget1', 'Yes', 'sample', ' sample', '2022-12-23', '2022-12-24', '11:11', '11:11', 'Toyota Bus', '5', 'sample,sample,sample,sample,sample', 'Approved', 'VRF_637 ', '22-12-23 05:34:19'),
(148, '58', 'userc@gmail.com', 'Depart3', 'Hod1@gmailcom', 'Budget4', 'Yes', 'sample', ' sample', '2022-12-23', '2022-12-23', '11:11', '11:11', 'Three-wheeler', '1', 'sample', 'Pending', 'VRF_40 ', '22-12-23 05:34:56'),
(149, '59', 'usere@gmail.com', 'Depart4', 'hod2@gmail.com', 'Budget4', 'Yes', 'sample', ' sample', '2022-12-23', '2022-12-23', '11:11', '11:11', 'Toyota Bus', '1', 'sample', 'Pending', 'VRF_665 ', '22-12-23 05:35:27'),
(150, '57', 'userb@gmail.com', 'Depart2', '233@gmail', 'Budget2', 'Yes', 'sample', ' sample', '2022-12-23', '2022-12-24', '11:11', '11:01', 'Toyota Bus', '6', 'sample,sample,sample,sample,sample,sample', 'Pending', 'VRF_206 ', '22-12-23 05:35:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `budget`
--
ALTER TABLE `budget`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `count_depart`
--
ALTER TABLE `count_depart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `depart`
--
ALTER TABLE `depart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `full`
--
ALTER TABLE `full`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system`
--
ALTER TABLE `system`
  ADD PRIMARY KEY (`up_name`);

--
-- Indexes for table `vehilce`
--
ALTER TABLE `vehilce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vrp`
--
ALTER TABLE `vrp`
  ADD PRIMARY KEY (`cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `budget`
--
ALTER TABLE `budget`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `count_depart`
--
ALTER TABLE `count_depart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `depart`
--
ALTER TABLE `depart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `full`
--
ALTER TABLE `full`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `system`
--
ALTER TABLE `system`
  MODIFY `up_name` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `vehilce`
--
ALTER TABLE `vehilce`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `vrp`
--
ALTER TABLE `vrp`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
