-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2018 at 03:36 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `organ_donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ADMIN_SSN` varchar(20) NOT NULL,
  `ADMIN_USERNAME` varchar(20) NOT NULL,
  `ADMIN_PASSWORD` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ADMIN_SSN`, `ADMIN_USERNAME`, `ADMIN_PASSWORD`) VALUES
('121211', 'nhm', '1212');

-- --------------------------------------------------------

--
-- Table structure for table `agreement`
--

CREATE TABLE `agreement` (
  `SERIAL_NO` int(10) NOT NULL,
  `AGREEMENT_DETAILS` varchar(200) NOT NULL,
  `DONOR_SSN` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agreement`
--

INSERT INTO `agreement` (`SERIAL_NO`, `AGREEMENT_DETAILS`, `DONOR_SSN`) VALUES
(1, 'Once my death has been confirmed and the death certification has been released by a doctor, I hereby give permission to donate', '1122');

-- --------------------------------------------------------

--
-- Table structure for table `check_up`
--

CREATE TABLE `check_up` (
  `CHECK_UP_SERIAL` varchar(20) NOT NULL,
  `CHECK_UP_DETAILS` varchar(200) NOT NULL,
  `TISSUE_TYPE` varchar(20) NOT NULL,
  `DONATION_SERIAL` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `check_up`
--

INSERT INTO `check_up` (`CHECK_UP_SERIAL`, `CHECK_UP_DETAILS`, `TISSUE_TYPE`, `DONATION_SERIAL`) VALUES
('1', 'dyd evf dvcuv evftuvf dvtve', 'qteqtee', 5);

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `DONATION_SERIAL_NO` int(10) NOT NULL,
  `DONATION_PART` varchar(20) NOT NULL,
  `DONATION_TYPE` varchar(20) NOT NULL,
  `DONOR_BLOOD_GROUP` varchar(10) NOT NULL,
  `HOSPITAL_NAME_BRANCH` varchar(20) NOT NULL,
  `DONOR_SSN` varchar(20) NOT NULL,
  `REFERER_SSN` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`DONATION_SERIAL_NO`, `DONATION_PART`, `DONATION_TYPE`, `DONOR_BLOOD_GROUP`, `HOSPITAL_NAME_BRANCH`, `DONOR_SSN`, `REFERER_SSN`) VALUES
(1, 'Eye', 'Advance', 'A+', 'Apollo,Bashundhara', '1', '123123'),
(5, 'Both', 'Instant', 'B-', 'Labaid,Dhanmondi', '1122', '1');

-- --------------------------------------------------------

--
-- Table structure for table `general_user`
--

CREATE TABLE `general_user` (
  `USER_NAME` varchar(20) NOT NULL,
  `USER_SSN` varchar(20) NOT NULL,
  `USER_GMAIL` varchar(20) NOT NULL,
  `USER_ADDRESS` varchar(20) NOT NULL,
  `USER_CONTACT` char(11) NOT NULL,
  `USER_USERNAME` varchar(20) NOT NULL,
  `USER_PASSWORD` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_user`
--

INSERT INTO `general_user` (`USER_NAME`, `USER_SSN`, `USER_GMAIL`, `USER_ADDRESS`, `USER_CONTACT`, `USER_USERNAME`, `USER_PASSWORD`) VALUES
('nahim', '1', 'nahimhasan@gmail.com', 'mymensigh', '01686874900', 'nahim10', '1212'),
('mamun', '1122', 'mamun@gmail.com', 'Tangail', '01682211001', 'mamun', '1212'),
('rakib', '123123', 'r@gmail.com', 'Delduar,Tangail', '01600000000', 'ra', '1212');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `HOSPITAL_NAME_BRANCH` varchar(20) NOT NULL,
  `HOSPIATL_CONTACT` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`HOSPITAL_NAME_BRANCH`, `HOSPIATL_CONTACT`) VALUES
('Apollo,Bashundhara', '01711111111'),
('Square,Panthapath', '01711111122'),
('Labaid,Dhanmondi', '01711111133'),
('Ibn Sina,Dhanmondi', '01711111144');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `NOTIFICATION_SERIAL_NO` int(10) NOT NULL,
  `NOTIFICATION_DATE` date DEFAULT NULL,
  `NOTIFICATION_DETAILS` varchar(100) NOT NULL,
  `HOSPITAL_NAME_BRANCH` varchar(20) NOT NULL,
  `DONATION_SERIAL_NO` int(10) NOT NULL,
  `USER_SSN` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wanted`
--

CREATE TABLE `wanted` (
  `SERIAL_NO` int(10) NOT NULL,
  `LAST_DATE` date DEFAULT NULL,
  `WANTED_PART` varchar(20) NOT NULL,
  `POST` varchar(200) NOT NULL,
  `BLOOD_GROUP` varchar(10) NOT NULL,
  `USER_SSN` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wanted`
--

INSERT INTO `wanted` (`SERIAL_NO`, `LAST_DATE`, `WANTED_PART`, `POST`, `BLOOD_GROUP`, `USER_SSN`) VALUES
(2, '2019-12-12', 'Eye', 'badly needed', 'A+', '1'),
(3, '2019-12-12', 'Kidney', 'badly needed', 'O+', '123123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ADMIN_SSN`),
  ADD UNIQUE KEY `ADMIN_USERNAME` (`ADMIN_USERNAME`);

--
-- Indexes for table `agreement`
--
ALTER TABLE `agreement`
  ADD PRIMARY KEY (`SERIAL_NO`),
  ADD KEY `FK10` (`DONOR_SSN`);

--
-- Indexes for table `check_up`
--
ALTER TABLE `check_up`
  ADD PRIMARY KEY (`CHECK_UP_SERIAL`),
  ADD KEY `FK4` (`DONATION_SERIAL`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`DONATION_SERIAL_NO`),
  ADD KEY `FK1` (`DONOR_SSN`),
  ADD KEY `FK2` (`REFERER_SSN`),
  ADD KEY `FK3` (`HOSPITAL_NAME_BRANCH`);

--
-- Indexes for table `general_user`
--
ALTER TABLE `general_user`
  ADD PRIMARY KEY (`USER_SSN`),
  ADD UNIQUE KEY `USER_GMAIL` (`USER_GMAIL`),
  ADD UNIQUE KEY `USER_CONTACT` (`USER_CONTACT`),
  ADD UNIQUE KEY `USER_USERNAME` (`USER_USERNAME`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`HOSPITAL_NAME_BRANCH`),
  ADD UNIQUE KEY `HOSPIATL_CONTACT` (`HOSPIATL_CONTACT`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`NOTIFICATION_SERIAL_NO`),
  ADD KEY `FK7` (`HOSPITAL_NAME_BRANCH`),
  ADD KEY `FK8` (`DONATION_SERIAL_NO`),
  ADD KEY `FK9` (`USER_SSN`);

--
-- Indexes for table `wanted`
--
ALTER TABLE `wanted`
  ADD PRIMARY KEY (`SERIAL_NO`),
  ADD KEY `FK5` (`USER_SSN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agreement`
--
ALTER TABLE `agreement`
  MODIFY `SERIAL_NO` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `DONATION_SERIAL_NO` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wanted`
--
ALTER TABLE `wanted`
  MODIFY `SERIAL_NO` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agreement`
--
ALTER TABLE `agreement`
  ADD CONSTRAINT `FK10` FOREIGN KEY (`DONOR_SSN`) REFERENCES `general_user` (`USER_SSN`);

--
-- Constraints for table `check_up`
--
ALTER TABLE `check_up`
  ADD CONSTRAINT `FK4` FOREIGN KEY (`DONATION_SERIAL`) REFERENCES `donation` (`DONATION_SERIAL_NO`);

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `FK1` FOREIGN KEY (`DONOR_SSN`) REFERENCES `general_user` (`USER_SSN`),
  ADD CONSTRAINT `FK2` FOREIGN KEY (`REFERER_SSN`) REFERENCES `general_user` (`USER_SSN`),
  ADD CONSTRAINT `FK3` FOREIGN KEY (`HOSPITAL_NAME_BRANCH`) REFERENCES `hospital` (`HOSPITAL_NAME_BRANCH`);

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `FK7` FOREIGN KEY (`HOSPITAL_NAME_BRANCH`) REFERENCES `hospital` (`HOSPITAL_NAME_BRANCH`),
  ADD CONSTRAINT `FK8` FOREIGN KEY (`DONATION_SERIAL_NO`) REFERENCES `donation` (`DONATION_SERIAL_NO`),
  ADD CONSTRAINT `FK9` FOREIGN KEY (`USER_SSN`) REFERENCES `general_user` (`USER_SSN`);

--
-- Constraints for table `wanted`
--
ALTER TABLE `wanted`
  ADD CONSTRAINT `FK5` FOREIGN KEY (`USER_SSN`) REFERENCES `general_user` (`USER_SSN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
