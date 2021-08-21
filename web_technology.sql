-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2021 at 08:08 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web technology`
--

-- --------------------------------------------------------

--
-- Table structure for table `addvehicle`
--

CREATE TABLE `addvehicle` (
  `Token_number` int(11) NOT NULL,
  `Owner_name` varchar(20) NOT NULL,
  `Vehicle_type` varchar(20) NOT NULL,
  `register_number` varchar(20) NOT NULL,
  `company` varchar(20) NOT NULL,
  `parking_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addvehicle`
--

INSERT INTO `addvehicle` (`Token_number`, `Owner_name`, `Vehicle_type`, `register_number`, `company`, `parking_date`) VALUES
(2201, 'raghul', 'Car', 'PY01 BW 0845', 'Toyota', '2021-08-03'),
(2202, 'priya', 'Car', 'HR 26DQ 1189', 'Maruti Suzuki', '2021-08-04'),
(2203, 'charles', 'Bus', 'DKY 757', 'REDCOACH', '2021-08-04'),
(2204, 'gopi', 'Bike', 'TN 03 BW 0781', 'apache', '2021-08-04'),
(2205, 'joseph', 'Truck', 'HR 26 DQ 5551', 'TATA Motors Limited', '2021-08-05'),
(2206, 'remo', 'Bike', 'TN 31 CK 2078', 'Ducati', '2021-08-06'),
(2207, 'tony', 'Car', 'TS 999', 'Tesla', '2021-08-07'),
(2208, 'micheal', 'Bus', 'KL 07 CP 4201', 'King Long', '2021-08-09'),
(2209, 'baskar', 'Truck', 'PY01 CW 7862', 'Daimler Group', '2021-08-09'),
(2210, 'vladimir', 'other', 'XXX 0099', 'BSA Champ', '2021-08-09'),
(2211, 'jack', 'bicycle', 'nil', 'herculas', '2021-08-10');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `ID` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `appearance` varchar(10) NOT NULL,
  `accessibility` varchar(10) NOT NULL,
  `user_experience` varchar(10) NOT NULL,
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `email`, `appearance`, `accessibility`, `user_experience`, `comment`) VALUES
(1, 'raghul125@gmail.com', 'good', 'excellent', 'excellent', ''),
(2, 'jk@gmail.com', 'excellent', 'good', 'average', 'Overall performance and accessibility are really good and convenient to use.Need to do some work in interface field.');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `email`, `password`) VALUES
(1, 'raghul125@gmail.com', 'pass123'),
(2, 'raghul125@gmail.com', 'pass123'),
(3, 'starkindustry@gmail.com', '12jarvis');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Email` varchar(35) NOT NULL,
  `Phone_number` varchar(15) NOT NULL,
  `password` varchar(16) NOT NULL,
  `retype_password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `Name`, `Email`, `Phone_number`, `password`, `retype_password`) VALUES
(1, 'raghul', 'raghul125@gmail.com', '7868057018', 'pass123', 'pass123'),
(2, 'gopi', 'gopishankar1i@gmail.com', '9994206979', '1234532', '1234532'),
(3, 'tony', 'starkindustry@gmail.com', '6534187122', '12jarvis', '12jarvis'),
(4, 'charles', 'scharles@gmail.com', '7898675418', 'kgfta', 'kgfta'),
(5, 'priya', 'priya13@gmail.com', '9856715815', '33333', '33333'),
(6, 'joseph', 'jk@gmail.com', '8976541123', 'joseph12', 'joseph12'),
(7, 'remo', 'remomama@gmail.com', '9876547891', 'remoremo', 'remoremo'),
(8, 'micheal', 'miketyson@gmail.com', '786543711', '12309', '12309'),
(9, 'nandhini', 'nandhini1999@gmail.com', '8764532102', 'nandhini2502', 'nandhini2502'),
(10, 'abdul', 'abdulrahman12@gmail.com', '8967463465', '8967463465', '8967463465'),
(11, 'moran', 'assd@gmail.com', '4752553212', '123456789', '123456789'),
(12, 'abi', 'abi43@gmail.com', '9067616792', '13579', '13579');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addvehicle`
--
ALTER TABLE `addvehicle`
  ADD PRIMARY KEY (`Token_number`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addvehicle`
--
ALTER TABLE `addvehicle`
  MODIFY `Token_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2212;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
