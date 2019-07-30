-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2019 at 05:38 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `costumer`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_chat`
--

CREATE TABLE `data_chat` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_chat`
--

INSERT INTO `data_chat` (`id`, `nama`, `tanggal`, `waktu`) VALUES
(7, 'freebie-footer-templates.zip', '2019-07-24', '10:20:25'),
(8, 'freebie-footer-templates.zip', '2019-07-24', '09:39:43'),
(9, 'freebie-footer-templates.zip', '2019-07-24', '09:39:44'),
(7, 'Pertama.zip', '2019-07-24', '10:22:06'),
(7, '', '2019-07-24', '10:22:57');

-- --------------------------------------------------------

--
-- Table structure for table `data_costumer`
--

CREATE TABLE `data_costumer` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nomer` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_costumer`
--

INSERT INTO `data_costumer` (`id`, `nama`, `nomer`) VALUES
(7, 'iwan', 2147483647),
(8, 'agus', 2147483647),
(9, 'hana', 329842034),
(10, 'Gilang', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_chat`
--
ALTER TABLE `data_chat`
  ADD KEY `id` (`id`);

--
-- Indexes for table `data_costumer`
--
ALTER TABLE `data_costumer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_costumer`
--
ALTER TABLE `data_costumer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
