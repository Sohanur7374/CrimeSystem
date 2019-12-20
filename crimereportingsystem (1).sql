-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2019 at 01:25 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crimereportingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(200) NOT NULL,
  `admin_id` int(8) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `admin_id`, `password`) VALUES
(1, 171352078, '123456');

-- --------------------------------------------------------

--
-- Table structure for table `crimereport`
--

CREATE TABLE `crimereport` (
  `c_id` int(200) NOT NULL,
  `Full_Name` varchar(200) NOT NULL,
  `NID` int(13) NOT NULL,
  `Mobile_Number` int(100) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Crime_Type` varchar(200) NOT NULL,
  `Evidence` varchar(200) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crimereport`
--

INSERT INTO `crimereport` (`c_id`, `Full_Name`, `NID`, `Mobile_Number`, `Email`, `Crime_Type`, `Evidence`, `Description`, `Status`) VALUES
(1, 'shamim', 123456, 3456789, 's@s', 'Drug Trafficking', '560.jpg', 'rycfvgubhsx', ''),
(2, 'gsvhwj', 456789, 45689, 'f@fgg', 'Extortion', '1200px-Logo_of_DMP.png', 'rcfvgbhkdw', 'Received'),
(3, 'dvgwd', 543, 6543, 'fff@ebje', 'Drug Trafficking', '09q0snslaz2ye20.jpg', 'xshgxs', 'Received');

-- --------------------------------------------------------

--
-- Table structure for table `gdreport`
--

CREATE TABLE `gdreport` (
  `id` int(200) NOT NULL,
  `Thana_Name` varchar(200) NOT NULL,
  `Victim_Name` varchar(200) NOT NULL,
  `NID_number` varchar(200) NOT NULL,
  `Father_Name` varchar(200) NOT NULL,
  `Mother_Name` varchar(200) NOT NULL,
  `PermanentAddress` varchar(200) NOT NULL,
  `PresentAddress` varchar(200) NOT NULL,
  `Mobile_Number` varchar(200) NOT NULL,
  `Case_Description` varchar(200) NOT NULL,
  `Status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gdreport`
--

INSERT INTO `gdreport` (`id`, `Thana_Name`, `Victim_Name`, `NID_number`, `Father_Name`, `Mother_Name`, `PermanentAddress`, `PresentAddress`, `Mobile_Number`, `Case_Description`, `Status`) VALUES
(1, 'Mohammadpur thana', 'rayhan', '12344556', 'erryu', 'eruui', 'heni', 'dhaka', ' 01556778', ' ghjk', 'Investigation processing'),
(2, 'Mohammadpur thana', 'papu', '1234567', 'wer', 'rtu', 'rtyuu', 'fghj', ' 0123455', ' tyu', 'investigatio'),
(3, 'Dhanmondi Thana', 'rumman rahaman', '01345678', 'fghjj', 'fgj', 'feni', 'dhaka', ' 01567', ' eerr', 'investigatio'),
(4, 'thana', 'sohanur', '1234566543', 'abc', 'def', 'asdfghj', 'sdfgh', ' 1234567', ' sdfghjkl', 'pending'),
(5, 'Sha Ali Thana', 'zsxtyvj', '4567890', 'xxfhcgjvbnk', 'szdxfhcvh', 'xgfhcgvh', 'tfcgbj', ' 09876543', ' xxhcgjvj,bkn,', 'pending'),
(6, 'Sha Ali Thana', 'zsxtyvj', '4567890', 'xxfhcgjvbnk', 'szdxfhcvh', 'xgfhcgvh', 'tfcgbj', ' 09876543', ' xxhcgjvj,bkn,', 'investigating'),
(7, 'Dhanmondi Thana', 'txfcygjh', '345678', 'rsxdtcfgbhj', 'tdfgu', 'rsdtfgh', 'rdtcfgub', ' 456789', ' xdtcgbhi', 'processing');

-- --------------------------------------------------------

--
-- Table structure for table `missingreport`
--

CREATE TABLE `missingreport` (
  `Missing_ID` int(11) NOT NULL,
  `Full_Name` varchar(200) NOT NULL,
  `Height` int(11) NOT NULL,
  `Weight` int(11) NOT NULL,
  `Dress_Details` varchar(200) NOT NULL,
  `Health` varchar(200) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `Gender` varchar(200) NOT NULL,
  `Age` int(11) NOT NULL,
  `Last_Location` varchar(200) NOT NULL,
  `Last_Seen_Date` date NOT NULL,
  `Reported_By` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Reporting_Officer` varchar(200) NOT NULL,
  `Reported_Date` date NOT NULL,
  `Unit_Number` int(11) NOT NULL,
  `Status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `missingreport`
--

INSERT INTO `missingreport` (`Missing_ID`, `Full_Name`, `Height`, `Weight`, `Dress_Details`, `Health`, `Image`, `Gender`, `Age`, `Last_Location`, `Last_Seen_Date`, `Reported_By`, `Address`, `Reporting_Officer`, `Reported_Date`, `Unit_Number`, `Status`) VALUES
(1, 'refvfd', 4, 4, 'sqasdf', 'fvdscz', '560.jpg', 'on', 44, 'ecwfw', '2019-12-02', 'swdefvf', 'devwv', 'edefv', '2019-12-09', 33, 'pending'),
(2, 'refvfd', 7, 7, 'xtcfyvgun', 'ryvgbhj', '09q0snslaz2ye20.jpg', 'Female', 22, 'fdwsa', '2019-12-23', 'dwfwwe', 'eqdsxqw', 'fqwqwd', '2019-12-22', 22, 'Received');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(200) NOT NULL,
  `First_name` varchar(100) NOT NULL,
  `Last_name` varchar(100) NOT NULL,
  `User_name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Mobile` int(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Birth_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `First_name`, `Last_name`, `User_name`, `Email`, `Password`, `Mobile`, `Address`, `Gender`, `Birth_date`) VALUES
(1, 'shamim', 'ahmed', 'campus3', 'rahamanrumman@gmail.com', 'zxtrctvuybii5', 123456789, 'ddfcgvjhkfctddgfh', 'male', '2019-11-18'),
(2, 'shamim', 'ahmed', 'campus3', 'rahamanrumman@gmail.com', '48b42a9c10ff98df84d1e6a159a7137d', 234567890, 'ercyvubihnj', 'male', '2019-11-12'),
(3, 'Rumman', 'Rahman', 'rummanbf', 'rahamanrumman@gmail.com', '0526e9dec7a30cd2fcb9be41e4859d54', 1234564, 'xtctvbjnccfg vjvuy', 'male', '2019-11-14'),
(4, 'Sohanur', 'Rahman', 'Sohanur Rahman', 'sohanurswe@gmail.com', '25d55ad283aa400af464c76d713c07ad', 1796990419, 'Bogura', 'male', '1998-09-19'),
(5, 'Sohanur', 'Rahman', 'Sohanur Rahman', 'sohanurswe@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 1796990419, 'Bogura', 'male', '1998-09-19'),
(6, 'Sohanur', 'Rahman', 'Sohanur Rahman', 'sohanurswe@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 1796990419, 'Bogura', 'male', '1998-09-19'),
(7, 'fevd', 'fwe', 'fweff', 'thunderbird.store12@gmail.com', '87b7aef8f266d412863ee5225d356e56', 56789, 'wfefdgsf', 'female', '2019-11-25'),
(8, 'shamim', 'ahmed', 'amily1212', 'thunderbird.store12@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 23456789, 'dfdgnn', 'male', '2019-11-12'),
(9, 'shamim', 'ahmed', 'shamim', 't@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2147483647, 'xtcfgvbn', 'female', '2019-11-12'),
(10, 'Sohanur', 'ahmed', 'campus3', 'a@f', 'e10adc3949ba59abbe56e057f20f883e', 234567890, 'dvdfghgj', 'male', '2019-12-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crimereport`
--
ALTER TABLE `crimereport`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `gdreport`
--
ALTER TABLE `gdreport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `missingreport`
--
ALTER TABLE `missingreport`
  ADD PRIMARY KEY (`Missing_ID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `crimereport`
--
ALTER TABLE `crimereport`
  MODIFY `c_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gdreport`
--
ALTER TABLE `gdreport`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `missingreport`
--
ALTER TABLE `missingreport`
  MODIFY `Missing_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
