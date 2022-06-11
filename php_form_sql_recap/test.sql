-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 10:34 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_basic`
--

CREATE TABLE `form_basic` (
  `idclient` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `town` varchar(40) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `country` varchar(40) NOT NULL,
  `sex` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_basic`
--

INSERT INTO `form_basic` (`idclient`, `firstname`, `lastname`, `age`, `email`, `telephone`, `town`, `zipcode`, `country`, `sex`) VALUES
(1, 'Kevin', 'Jourdain', 32, 'jour@gmail.com', '0477889977', 'Mons', 7000, 'Belgique', 'H'),
(3, 'Matilda', 'Jour', 7, 'meow@cat.com', '0478989898', 'Catville', 0, 'Meowland', 'X');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_basic`
--
ALTER TABLE `form_basic`
  ADD UNIQUE KEY `idclient` (`idclient`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_basic`
--
ALTER TABLE `form_basic`
  MODIFY `idclient` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
