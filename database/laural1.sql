-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2017 at 06:47 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laural1`
--

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

CREATE TABLE `availability` (
  `Id` int(11) NOT NULL,
  `Type` int(11) NOT NULL,
  `room_hall_id` int(11) NOT NULL,
  `FromDate` date NOT NULL,
  `ToDate` date NOT NULL,
  `Time` time NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `Hours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`Id`, `Type`, `room_hall_id`, `FromDate`, `ToDate`, `Time`, `Status`, `Hours`) VALUES
(2, 1, 8, '2017-04-21', '2017-04-26', '01:00:00', 1, 12),
(5, 2, 11, '2017-04-02', '2017-04-20', '12:00:00', 1, 24);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Id` int(11) NOT NULL,
  `Availability_Id` int(11) NOT NULL,
  `room_hall_id` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `Type` int(11) NOT NULL,
  `Status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Id`, `Availability_Id`, `room_hall_id`, `Price`, `User_Id`, `Type`, `Status`) VALUES
(1, 1, 7, 123333, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `room_hall`
--

CREATE TABLE `room_hall` (
  `Id` int(11) NOT NULL,
  `Type` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Location` text NOT NULL,
  `Price` int(11) NOT NULL,
  `Image` text NOT NULL,
  `Title` text NOT NULL,
  `Description` text NOT NULL,
  `Status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_hall`
--

INSERT INTO `room_hall` (`Id`, `Type`, `Name`, `Location`, `Price`, `Image`, `Title`, `Description`, `Status`) VALUES
(8, 1, 'room1', 'ahahha', 12600, 'room-8.png', 'room1', 'sajksajkskjsajkjas', 1),
(9, 1, 'room2', 'abc', 34567, 'room-52.png', 'room2', 'jkqjajka                            \r\n                          ', 1),
(11, 2, 'hall1', 'abc', 12, 'room-91.png', 'hall1', 'snsnnss                            \r\n                          ', 1),
(12, 2, 'hall2', 'ajajaj', 12333, 'room-711.png', 'hall2', 'sskk                            \r\n                          ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `Id` int(11) NOT NULL,
  `TypeName` text NOT NULL,
  `Status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`Id`, `TypeName`, `Status`) VALUES
(1, 'Room', 1),
(2, 'Hall', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `UserName` text NOT NULL,
  `EmailAddress` text NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `PhoneNumber` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `UserName`, `EmailAddress`, `Status`, `PhoneNumber`) VALUES
(1, 'Ishaq123', 'ishaqashraf90@gmail.com', 1, '034283467545'),
(2, 'Faizan', 'faizan@gmail.com', 1, '0302255555'),
(3, 'Shoaib', 'shoaib@gmail.com', 1, '03008585985');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `availability`
--
ALTER TABLE `availability`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `room_hall`
--
ALTER TABLE `room_hall`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `availability`
--
ALTER TABLE `availability`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `room_hall`
--
ALTER TABLE `room_hall`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
