-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2019 at 07:57 AM
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
  `nama` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `chat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_chat`
--

INSERT INTO `data_chat` (`id`, `nama`, `tanggal`, `chat`) VALUES
(13, '', '2019-07-22 10:49:00', ' Pesan yang dikirim ke grup ini kini diamankan dengan enkripsi end-to-end. Ketuk untuk info selengkapnya.'),
(13, '', '2019-07-22 10:49:00', ' Anda telah membuat grup \"Magang Kantor Duxeos\"'),
(13, '', '2019-07-22 10:50:00', ' Anda telah menambahkan Dahlan'),
(13, 'Dahlan', '2019-07-22 10:56:00', '<Media tidak disertakan>'),
(13, 'iwan', '2019-07-25 10:36:00', 'oi'),
(13, 'Dahlan', '2019-07-25 10:36:00', 'Halo selamat pagi'),
(13, 'Dahlan', '2019-07-25 10:36:00', 'Gmn kabar'),
(13, 'Dawim', '2019-07-25 10:36:00', 'Hai'),
(13, 'Dawim', '2019-07-25 10:36:00', 'Baik'),
(14, '', '2019-07-22 10:49:00', ' Pesan yang dikirim ke grup ini kini diamankan dengan enkripsi end-to-end. Ketuk untuk info selengkapnya.'),
(14, '', '2019-07-22 10:49:00', ' Anda telah membuat grup \"Magang Kantor Duxeos\"'),
(14, '', '2019-07-22 10:50:00', ' Anda telah menambahkan Dahlan'),
(14, 'Dahlan', '2019-07-22 10:56:00', '<Media tidak disertakan>'),
(14, 'iwan', '2019-07-25 10:36:00', 'oi'),
(14, 'Dahlan', '2019-07-25 10:36:00', 'Halo selamat pagi'),
(14, 'Dahlan', '2019-07-25 10:36:00', 'Gmn kabar'),
(14, 'Dawim', '2019-07-25 10:36:00', 'Hai'),
(14, 'Dawim', '2019-07-25 10:36:00', 'Baik'),
(15, '', '2019-07-22 10:49:00', ' Pesan yang dikirim ke grup ini kini diamankan dengan enkripsi end-to-end. Ketuk untuk info selengkapnya.'),
(15, '', '2019-07-22 10:49:00', ' Anda telah membuat grup \"Magang Kantor Duxeos\"'),
(15, '', '2019-07-22 10:50:00', ' Anda telah menambahkan Dahlan'),
(15, 'Dahlan', '2019-07-22 10:56:00', '<Media tidak disertakan>'),
(15, 'iwan', '2019-07-25 10:36:00', 'oi'),
(15, 'Dahlan', '2019-07-25 10:36:00', 'Halo selamat pagi'),
(15, 'Dahlan', '2019-07-25 10:36:00', 'Gmn kabar'),
(15, 'Dawim', '2019-07-25 10:36:00', 'Hai'),
(15, 'Dawim', '2019-07-25 10:36:00', 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `data_costumer`
--

CREATE TABLE `data_costumer` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nomer` int(12) NOT NULL,
  `tanggal` datetime NOT NULL,
  `brands` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_costumer`
--

INSERT INTO `data_costumer` (`id`, `nama`, `nomer`, `tanggal`, `brands`) VALUES
(13, 'Gilang', 2147483647, '2019-07-22 10:49:00', 'Chagocha'),
(14, 'Gilang', 817912881, '2019-07-22 10:49:00', 'Fremilt'),
(15, 'Iwan', 2147483647, '2019-07-22 10:49:00', 'Rachacha');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
