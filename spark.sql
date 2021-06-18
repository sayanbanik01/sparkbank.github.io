-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 09:22 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spark`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `ID` int(255) NOT NULL,
  `AccNo` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Mail` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Dob` date NOT NULL,
  `Amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`ID`, `AccNo`, `Name`, `Mail`, `Phone`, `Gender`, `Dob`, `Amount`) VALUES
(1, 18127001, 'SAYAN BANIK', 'sayan@gmail.com', '7006248965', 'Male', '2000-01-01', 514600),
(2, 18127002, 'RAM KUMAR', 'ram@gmail.com', '7262489620', 'Male', '1995-07-11', 401500),
(3, 18127003, 'SREEJA DUTTA', 'sreeja@gmail.com', '8224896544', 'Female', '2001-05-04', 200000),
(4, 18127004, 'SHAYAM ROY', 'shayam@gmail.com', '9700624894', 'Male', '1998-09-19', 99900),
(5, 18127005, 'RIYA SEN', 'riya@gmail.com', '8268495490', 'Female', '2003-04-20', 150000),
(6, 18127006, 'JENNY SINGH', 'jenny@gmail.com', '7264592683', 'Female', '1999-06-16', 350000),
(7, 18127007, 'UTKARSH BASU', 'utkarsh@gmail.com', '8265479232', 'Male', '2004-05-15', 60000),
(8, 18127008, 'HRIDOY BOKSHI', 'hridoy@gmail.com', '9852648579', 'Male', '1998-06-25', 255000),
(9, 18127009, 'RITA SINGHA', 'rita@gmail.com', '7264859221', 'Female', '2001-06-27', 120000),
(10, 18127010, 'SUDHON DAS', 'sudhan@gmail.com', '8369597425', 'Male', '1998-06-09', 200000),
(11, 18127011, 'RITTIK DAS', 'rittik@gmail.com', '8392445672', 'Male', '1999-12-12', 1500),
(12, 18127012, 'ISHITA ROY', 'ishita@gmai.com', '8087923542', 'Female', '1998-07-17', 1000),
(13, 18127013, 'HRIDOY SUTAR', 'hridoysutar@gmail.com', '7063738521', 'Male', '1998-09-05', 180000),
(14, 18127014, 'SAYAN BISWAS', 'biswas@gmai.com', '9732564289', 'Male', '2000-06-21', 50000),
(15, 18127015, 'RITAM DEY', 'ritam@gmail.com', '9785263415', 'Male', '2002-07-19', 4000),
(16, 18127304, 'SREEJA SAHA', 'saha@gmail.com', '9578423614', 'Female', '1999-09-21', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE `feed` (
  `FeedbackNo` int(255) NOT NULL,
  `Massage` text CHARACTER SET latin1 NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`FeedbackNo`, `Massage`, `Date`) VALUES
(1, 'hi i am sayan', '2021-06-09 18:38:13'),
(2, 'hi i am sayan', '2021-06-09 18:41:55'),
(34, 'agasgsshshshshshdhdfh', '2021-06-11 09:49:37'),
(35, 'agasgsshshshshshdhdfh', '2021-06-11 09:49:43'),
(36, 'agasgsshshshshshdhdfh', '2021-06-11 09:50:11'),
(37, 'HIIAMSAYAN', '2021-06-16 17:32:00'),
(38, 'hi', '2021-06-16 17:48:39'),
(39, 'Hi I am Sayan Banik.', '2021-06-16 19:18:10');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `No` int(255) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`No`, `sender`, `receiver`, `amount`, `date`) VALUES
(1, 'SAYAN BANIK', 'RAM KUMAR', 100000, '2021-06-12 14:41:08'),
(2, 'RAM KUMAR', 'SAYAN BANIK', 50000, '2021-06-12 14:45:42'),
(3, 'SAYAN BANIK', 'RAM KUMAR', 50000, '2021-06-12 14:56:46'),
(4, 'SAYAN BANIK', 'RAM KUMAR', 50000, '2021-06-12 15:00:04'),
(5, 'SHAYAM ROY', 'SAYAN BANIK', 100, '2021-06-14 14:13:15'),
(6, 'SAYAN BANIK', 'RAM KUMAR', 1500, '2021-06-16 02:22:38'),
(7, 'RITTIK DAS', 'ISHITA ROY', 500, '2021-06-16 02:26:20'),
(8, 'SAYAN BANIK', 'ISHITA ROY', 1000, '2021-06-16 02:33:52'),
(9, 'ISHITA ROY', 'SAYAN BANIK', 1000, '2021-06-16 02:35:11'),
(10, 'SAYAN BANIK', 'HRIDOY BOKSHI', 5000, '2021-06-16 02:50:46'),
(11, 'HRIDOY SUTAR', 'SAYAN BANIK', 10000, '2021-06-16 03:01:10'),
(12, 'SUDHON DAS', 'UTKARSH BASU', 10000, '2021-06-16 06:42:43'),
(13, 'HRIDOY SUTAR', 'SAYAN BANIK', 10000, '2021-06-16 11:15:33'),
(14, 'RITAM DEY', 'SAYAN BANIK', 1000, '2021-06-16 17:51:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `feed`
--
ALTER TABLE `feed`
  ADD PRIMARY KEY (`FeedbackNo`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `feed`
--
ALTER TABLE `feed`
  MODIFY `FeedbackNo` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `No` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
