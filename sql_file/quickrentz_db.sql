-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2023 at 04:31 PM
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

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`BrandID`, `brandName`, `brandLogo`) VALUES
(2, 'Toyota', 0),
(3, 'Toyotas', 0),
(4, 'Sample Brandsz', 1695356494),
(5, 'Bmw', 1695357049),
(6, 'Ford', 1695357484),
(7, 'Isuzu', 1695357494),
(8, 'Honda', 1695357505),
(9, 'Chevrolet', 1695447703);

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

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`ReservationID`, `UserID`, `VehicleID`, `Pickup`, `Return`, `Message`, `Status`) VALUES
(1, 4, 44, '2023-09-26', '2023-09-28', 'yes zirrr', 'Not yet Confirmed'),
(2, 4, 49, '2023-09-30', '2023-10-05', 'pa book po', 'Not yet Confirmed'),
(3, 15, 49, '2023-09-26', '2023-09-28', 'bobooo', 'Not yet Confirmed'),
(4, 15, 44, '2023-09-29', '2023-09-16', 'yahoooo', 'Not yet Confirmed'),
(5, 4, 49, '2023-09-27', '2023-09-28', '', 'Not yet Confirmed');

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
  `Password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Username`, `FirstName`, `LastName`, `PhoneNumber`, `Address`, `Email`, `Password`) VALUES
(3, 'yonggg', 'yangass113', 'margie', 915846384, 'tagb', 'margie@gmail.com', '123'),
(4, 'yangzzz343', 'don allen', 'Veloso', 915846384, 'tagb', 'velosodonallen@gmail.com', '123'),
(5, 'abawis', 'saw', 'saw', 23124134, 'sawws', 'sawss@gmail.com', '123'),
(6, 'jelo', 'jerimiah', 'neri', 912345662, 'manila', 'jerimiah@gmail.com', '123'),
(7, 'lykagwapa', 'lyka', 'lumapas', 912344566, 'tagbilaran city bohol', 'lykalumapas@gmail.com', '1234'),
(8, 'saw123', 'saw', 'saw', 23124134, 'sawws', 'gawikss@gmail.com', '123'),
(10, 'harold1232', 'harold', 'behial', 9122423, 'amaerica city bohol', 'test123@gmail.com', '123'),
(11, 'harry232', 'harru', 'pota', 124343434, 'maribojolv', 'testpass@gmail.com', '$2y$10$pKxE'),
(12, 'testinngpas', 'pas', 'wordds', 132413431, 'maribojoc ', 'testnew123@gmail.com', '$2y$10$MsOP'),
(13, 'testtiii123', 'saw', 'saw', 23124134, 'sawws', 'testnew1233@gmail.com', '$2y$10$SRbu'),
(14, 'yongii23', 'allen', 'Veloso', 122321434, 'purok 1, anislag', 'allen@gmail.com', '$2y$10$gyf0'),
(15, 'dandan', 'dan bryelle', 'balansag', 2147483647, 'Anislag Maribojoc Bohol', 'bryelle@gmail.com', 'dandan123'),
(16, 'testiacc', 'test', 'signup', 2147483647, 'tagb', 'testss21s@gmail.com', '123'),
(17, 'jeremiah17', 'Jeremiah', 'Neri', 912345678, 'manila', 'jeremiahangelo.neri@gmail.com', 'qwerty123');

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
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`VehicleID`, `BrandID`, `Model`, `Year`, `Type`, `FuelType`, `Transmision`, `Mileage`, `SeatingCapacity`, `Rate`, `Image1`, `Image2`, `Image3`, `Image4`) VALUES
(44, 2, 'Wigos', 2021, 'Sedan', 'Petrol', 'Automatic', '19990', 4, 2500, '1695399225_ct2qsHwhCY.png', '1695399225_ATis0ZQONh.png', '1695399225_AjV6MEiPZG.png', '1695399225_YyszORlcev.'),
(46, 6, 'Ranger', 2019, 'Pick-up', 'Petrol', 'Manual', '199998', 4, 2000, '1695399295_RIP8QayY26.png', '1695399295_364NzGcQWd.png', '1695399295_32zxJR9EhI.png', '1695399295_ATL17Jlxg8.'),
(49, 6, 'Everest', 2023, 'SUV', 'Diesel', 'Automatic', '10000', 8, 120, '1695531518_me0KEVTbQi.png', '1695531518_IU6bW4puL5.jpg', '1695531518_0upIMbqA6O.jpg', '1695531518_gSvbeDaz2q.');

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
  MODIFY `ReservationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `VehicleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
