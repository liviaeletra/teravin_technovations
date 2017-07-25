-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2017 at 06:25 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `teravin_technovations`
--

-- --------------------------------------------------------

--
-- Table structure for table `teravin_technovations`
--

CREATE TABLE IF NOT EXISTS `teravin_technovations` (
`ID_DATA` int(11) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `NO_HP` int(30) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `ALAMAT` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `teravin_technovations`
--

INSERT INTO `teravin_technovations` (`ID_DATA`, `NAMA`, `NO_HP`, `EMAIL`, `ALAMAT`) VALUES
(1, 'Test 1', 98765321, 'Test1@test.com', 'Jl apa'),
(2, 'Test 2', 123456789, 'Test2@test.com', 'Jl Dimana'),
(3, 'Test 3', 876543219, 'Test3@test.com', 'Jl Bagaimana'),
(4, 'Test 4', 765432198, 'Test4@test.com', 'JL Kapan'),
(5, 'Test 5', 654321987, 'Test5@test.com', 'Jl Siapa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teravin_technovations`
--
ALTER TABLE `teravin_technovations`
 ADD PRIMARY KEY (`ID_DATA`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teravin_technovations`
--
ALTER TABLE `teravin_technovations`
MODIFY `ID_DATA` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
