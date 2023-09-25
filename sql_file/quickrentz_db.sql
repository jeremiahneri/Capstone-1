-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2023 at 05:39 PM
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
-- Database: `quickrentz_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `PhoneNumber` int(13) NOT NULL,
  `Address` varchar(199) NOT NULL,
  `AdminUsername` varchar(50) NOT NULL,
  `Email` varchar(199) NOT NULL,
  `Password` varchar(199) NOT NULL,
  `Photo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `FirstName`, `LastName`, `PhoneNumber`, `Address`, `AdminUsername`, `Email`, `Password`, `Photo`) VALUES
(1, 'Don Allen', 'Veloso', 912323232, 'Poblacion MAribojoc, Bohol, Ph', 'Admin_Yongski', 'admin@admin.com', 'admin', '262172437_2017241288473396_2537272664894478501_n.jpg'),
(3, 'Jeremiah Angelo', 'Neri', 2147483647, 'Quezon City', 'jeremiahneri', 'admin_jeremiahneri@admin.com', 'admin_jeremiahneri', '381071066_990375145403384_3132189997954132368_n.jpg'),
(4, 'Gabriel Jonathan', 'Mataya', 2147483647, 'Mandaluyong', 'Dose0719', 'admin_Dose0719@admin.com', 'admin_Dose0719', '379669676_638971825038933_8724536753515732786_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `BrandID` int(11) NOT NULL,
  `brandName` text NOT NULL,
  `brandLogo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `ReservationID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `VehicleID` int(11) NOT NULL,
  `Pickup` date NOT NULL,
  `Return` date NOT NULL,
  `Message` text NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(11) NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `PhoneNumber` int(12) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(11) NOT NULL,
  `Status` text NOT NULL,
  `Photo` varchar(50) NOT NULL,
  `AccCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `FrontID` varchar(50) NOT NULL,
  `BackID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Username`, `FirstName`, `LastName`, `PhoneNumber`, `Address`, `Email`, `Password`, `Status`, `Photo`, `AccCreated`, `FrontID`, `BackID`) VALUES
(20, 'testrun123', 'test', 'run', 915846232, 'tagb', 'tesstsaw@gmail.com', '1233', 'Account Verified', '1695645574_hUZqnd7coR.png', '2023-09-25 19:56:41', '1695651126_nVp6tWIamg.jpg', '1695651126_nDeTaKymqH.jpg'),
(21, 'timedate', 'testdate', 'time', 915846384, 'tagb', 'timedate@gmail.com', '123', 'Account Rejected', 'avatar1.png', '2023-09-25 19:59:17', '', ''),
(22, 'unigah', 'testuuu', 'yongi', 122321434, 'purok 1, anislag', 'allen21@gmail.com', '123', 'Account Rejected', 'avatar1.png', '2023-09-25 22:18:01', '1695653702_CXVjmhrHzL.jpg', '1695653702_sX9F1ehU50.jpg'),
(23, 'testing123', 'test', 'onetwo', 915846384, 'tagb', 'testing123@gmail.com', 'testing123', 'Account Verified', '1695655706_jhDIe28QEa.png', '2023-09-25 23:27:54', '1695655759_jgW8XL14CI.jpg', '1695655759_CR8DVkzuFB.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `VehicleID` int(11) NOT NULL,
  `BrandID` int(11) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Year` year(4) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `FuelType` varchar(50) NOT NULL,
  `Transmision` varchar(50) NOT NULL,
  `Mileage` varchar(50) NOT NULL,
  `SeatingCapacity` int(11) NOT NULL,
  `Rate` int(11) NOT NULL,
  `Image1` varchar(60) NOT NULL,
  `Image2` varchar(60) NOT NULL,
  `Image3` varchar(60) NOT NULL,
  `Image4` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`BrandID`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`ReservationID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`VehicleID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `BrandID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `ReservationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `VehicleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
