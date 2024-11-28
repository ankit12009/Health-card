-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2024 at 05:51 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(12) NOT NULL,
  `saddress` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `states` varchar(20) NOT NULL,
  `pin` int(10) NOT NULL,
  `ptype` varchar(20) NOT NULL,
  `cstart` date NOT NULL,
  `cend` date NOT NULL,
  `dname` varchar(50) NOT NULL,
  `ddob` date NOT NULL,
  `drelation` varchar(20) NOT NULL,
  `dnameA` varchar(20) NOT NULL,
  `ddobA` date NOT NULL,
  `drelationA` varchar(20) NOT NULL,
  `gid` varchar(50) DEFAULT NULL,
  `pincome` varchar(50) DEFAULT NULL,
  `mrecord` varchar(50) DEFAULT NULL,
  `pmethod` varchar(20) NOT NULL,
  `pfrequency` int(5) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`fname`, `lname`, `dob`, `email`, `phone`, `saddress`, `city`, `states`, `pin`, `ptype`, `cstart`, `cend`, `dname`, `ddob`, `drelation`, `dnameA`, `ddobA`, `drelationA`, `gid`, `pincome`, `mrecord`, `pmethod`, `pfrequency`, `id`) VALUES
('test', '1', '2024-11-19', 'chhetriasha027@gmail.com', 2147483647, '39/40 pilkhana 2nd bye lane howrah 711101', 'Howrah', 'West Bengal', 711101, 'family', '2024-11-13', '2024-11-28', '', '0000-00-00', '', '', '0000-00-00', '', 'upload/6744ceaa347c4-kic.png', 'upload/6744ceaa34b57-kic2.png', 'upload/6744ceaa34e79-logo.jpg', 'bank', 12, 23),
('test', '1', '2024-11-19', 'chhetriasha027@gmail.com', 2147483647, '39/40 pilkhana 2nd bye lane howrah 711101', 'Howrah', 'West Bengal', 711101, 'family', '2024-11-13', '2024-11-28', '', '0000-00-00', '', '', '0000-00-00', '', 'upload/6744cf41c17bc-kic.png', 'upload/6744cf41c1b57-kic2.png', 'upload/6744cf41c1da8-logo.jpg', 'bank', 12, 24),
('test', '1', '2024-11-19', 'chhetriasha027@gmail.com', 2147483647, '39/40 pilkhana 2nd bye lane howrah 711101', 'Howrah', 'West Bengal', 711101, 'family', '2024-11-13', '2024-11-28', '', '0000-00-00', '', '', '0000-00-00', '', 'upload/6744cf9f897b0-kic.png', 'upload/6744cf9f89c6c-kic2.png', 'upload/6744cf9f8a078-logo.jpg', 'bank', 12, 25),
('test', '1', '2024-11-19', 'chhetriasha027@gmail.com', 2147483647, '39/40 pilkhana 2nd bye lane howrah 711101', 'Howrah', 'West Bengal', 711101, 'family', '2024-11-13', '2024-11-28', '', '0000-00-00', '', '', '0000-00-00', '', 'upload/6744cfc8493c0-kic.png', 'upload/6744cfc84972e-kic2.png', 'upload/6744cfc8499e5-logo.jpg', 'bank', 12, 26),
('test', '1', '2024-11-19', 'chhetriasha027@gmail.com', 2147483647, '39/40 pilkhana 2nd bye lane howrah 711101', 'Howrah', 'West Bengal', 711101, 'family', '2024-11-13', '2024-11-28', '', '0000-00-00', '', '', '0000-00-00', '', 'upload/6744d02d717bc-kic.png', 'upload/6744d02d71b96-kic2.png', 'upload/6744d02d71e10-logo.jpg', 'bank', 12, 27),
('test', '1', '2024-11-19', 'chhetriasha027@gmail.com', 2147483647, '39/40 pilkhana 2nd bye lane howrah 711101', 'Howrah', 'West Bengal', 711101, 'family', '2024-11-13', '2024-11-28', '', '0000-00-00', '', '', '0000-00-00', '', 'upload/6744d0c86aaa0-kic.png', 'upload/6744d0c86ad55-kic2.png', 'upload/6744d0c86af77-logo.jpg', 'bank', 12, 28),
('test', '1', '2024-11-19', 'chhetriasha027@gmail.com', 2147483647, '39/40 pilkhana 2nd bye lane howrah 711101', 'Howrah', 'West Bengal', 711101, 'family', '2024-11-13', '2024-11-28', '', '0000-00-00', '', '', '0000-00-00', '', 'upload/6744d180dfed1-kic.png', 'upload/6744d180e0261-kic2.png', 'upload/6744d180e04bc-logo.jpg', 'bank', 12, 29),
('test', '1', '2024-11-19', 'chhetriasha027@gmail.com', 2147483647, '39/40 pilkhana 2nd bye lane howrah 711101', 'Howrah', 'West Bengal', 711101, 'family', '2024-11-13', '2024-11-28', '', '0000-00-00', '', '', '0000-00-00', '', 'upload/6744d187eb7dc-kic.png', 'upload/6744d187ebb2c-kic2.png', 'upload/6744d187ebe50-logo.jpg', 'bank', 12, 30),
('test', '1', '2024-11-19', 'chhetriasha027@gmail.com', 2147483647, '39/40 pilkhana 2nd bye lane howrah 711101', 'Howrah', 'West Bengal', 711101, 'family', '2024-11-13', '2024-11-28', '', '0000-00-00', '', '', '0000-00-00', '', 'upload/6744d3e33a43d-kic.png', 'upload/6744d3e33a78f-kic2.png', 'upload/6744d3e33aa40-logo.jpg', 'bank', 12, 31),
('test', '1', '2024-11-19', 'chhetriasha027@gmail.com', 2147483647, '39/40 pilkhana 2nd bye lane howrah 711101', 'Howrah', 'West Bengal', 711101, 'family', '2024-11-13', '2024-11-28', '', '0000-00-00', '', '', '0000-00-00', '', 'upload/6744d40bf2194-kic.png', 'upload/6744d40bf257f-kic2.png', 'upload/6744d40bf2830-logo.jpg', 'bank', 12, 32),
('test', '1', '2024-11-19', 'chhetriasha027@gmail.com', 2147483647, '39/40 pilkhana 2nd bye lane howrah 711101', 'Howrah', 'West Bengal', 711101, 'family', '2024-11-13', '2024-11-28', '', '0000-00-00', '', '', '0000-00-00', '', 'upload/6744d43aaf95e-kic.png', 'upload/6744d43aafdbe-kic2.png', 'upload/6744d43ab0088-logo.jpg', 'bank', 12, 33),
('test', '1', '2024-11-19', 'chhetriasha027@gmail.com', 2147483647, '39/40 pilkhana 2nd bye lane howrah 711101', 'Howrah', 'West Bengal', 711101, 'family', '2024-11-13', '2024-11-28', '', '0000-00-00', '', '', '0000-00-00', '', 'upload/6744d4f6bd47b-kic.png', 'upload/6744d4f6bd782-kic2.png', 'upload/6744d4f6bd9e8-logo.jpg', 'bank', 12, 34),
('test', '1', '2024-11-19', 'chhetriasha027@gmail.com', 2147483647, '39/40 pilkhana 2nd bye lane howrah 711101', 'Howrah', 'West Bengal', 711101, 'family', '2024-11-13', '2024-11-28', '', '0000-00-00', '', '', '0000-00-00', '', 'upload/6744d51bce2bc-kic.png', 'upload/6744d51bce64d-kic2.png', 'upload/6744d51bce90a-logo.jpg', 'bank', 12, 35),
('test', '1', '2024-11-19', 'chhetriasha027@gmail.com', 2147483647, '39/40 pilkhana 2nd bye lane howrah 711101', 'Howrah', 'West Bengal', 711101, 'family', '2024-11-13', '2024-11-28', '', '0000-00-00', '', '', '0000-00-00', '', 'upload/6744d671ed20e-kic.png', 'upload/6744d671ed6a7-kic2.png', 'upload/6744d671edd47-logo.jpg', 'bank', 12, 36),
('test', '1', '2024-11-19', 'chhetriasha027@gmail.com', 2147483647, '39/40 pilkhana 2nd bye lane howrah 711101', 'Howrah', 'West Bengal', 711101, 'family', '2024-11-13', '2024-11-28', '', '0000-00-00', '', '', '0000-00-00', '', 'upload/6744d689e4c12-kic.png', 'upload/6744d689e4fe9-kic2.png', 'upload/6744d689e53fc-logo.jpg', 'bank', 12, 37),
('test', '1', '2024-11-19', 'chhetriasha027@gmail.com', 2147483647, '39/40 pilkhana 2nd bye lane howrah 711101', 'Howrah', 'West Bengal', 711101, 'family', '2024-11-13', '2024-11-28', '', '0000-00-00', '', '', '0000-00-00', '', 'upload/6744d6b209310-kic.png', 'upload/6744d6b209892-kic2.png', 'upload/6744d6b20a20a-logo.jpg', 'bank', 12, 38),
('test', '1', '2024-11-19', 'chhetriasha027@gmail.com', 2147483647, '39/40 pilkhana 2nd bye lane howrah 711101', 'Howrah', 'West Bengal', 711101, 'family', '2024-11-13', '2024-11-28', '', '0000-00-00', '', '', '0000-00-00', '', 'upload/6744d710330c0-kic.png', 'upload/6744d71033805-kic2.png', 'upload/6744d71033ef0-logo.jpg', 'bank', 12, 39),
('test', '1', '2024-11-19', 'chhetriasha027@gmail.com', 2147483647, '39/40 pilkhana 2nd bye lane howrah 711101', 'Howrah', 'West Bengal', 711101, 'family', '2024-11-13', '2024-11-28', '', '0000-00-00', '', '', '0000-00-00', '', 'upload/6744d738e3a2b-kic.png', 'upload/6744d738e4042-kic2.png', 'upload/6744d738e42b4-logo.jpg', 'bank', 12, 40),
('test', '1', '2024-11-19', 'chhetriasha027@gmail.com', 2147483647, '39/40 pilkhana 2nd bye lane howrah 711101', 'Howrah', 'West Bengal', 711101, 'family', '2024-11-13', '2024-11-28', '', '0000-00-00', '', '', '0000-00-00', '', 'upload/6744d76d6d163-kic.png', 'upload/6744d76d6d77d-kic2.png', 'upload/6744d76d6dcbe-logo.jpg', 'bank', 12, 41),
('test', '1', '2024-11-19', 'chhetriasha027@gmail.com', 2147483647, '39/40 pilkhana 2nd bye lane howrah 711101', 'Howrah', 'West Bengal', 711101, 'family', '2024-11-13', '2024-11-28', '', '0000-00-00', '', '', '0000-00-00', '', 'upload/6744d783974b2-kic.png', 'upload/6744d78397afd-kic2.png', 'upload/6744d78397f00-logo.jpg', 'bank', 12, 42);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pw` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `pw`) VALUES
('t1', 'test1@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`id`,`dob`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
