-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2021 at 06:25 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(2) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Administrator', 'admin', '0192023a7bbd73250516f069df18b500'),
(2, 'coba', 'coba', 'c4ca4238a0b923820dcc509a6f75849b'),
(4, 'User', 'user', 'c4ca4238a0b923820dcc509a6f75849b'),
(8, 'coba', 'cobalagi', 'c4ca4238a0b923820dcc509a6f75849b'),
(9, 'coba', 'cobalagi2', 'c4ca4238a0b923820dcc509a6f75849b'),
(10, 'demo', 'demo', 'c4ca4238a0b923820dcc509a6f75849b'),
(11, 'oke', '123', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(2) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `usia` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nama`, `alamat`, `usia`) VALUES
(2, 'fds', '1341', 345),
(3, 'Halo People2', 'cobain aja2', 343);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `nama` varchar(50) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`nama`, `timestamp`) VALUES
('admin', '2020-12-17 10:24:50'),
('admin', '2020-12-17 10:28:59'),
('admin', '2020-12-17 10:29:59'),
('admin', '2020-12-17 10:30:12'),
('admin', '2020-12-17 10:32:43'),
('admin', '2020-12-17 10:33:48'),
('admin', '2020-12-17 10:34:35'),
('admin', '2020-12-17 11:03:12'),
('admin', '2020-12-17 11:04:37'),
('admin', '2020-12-17 11:10:08'),
('demo', '2020-12-17 12:14:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `email`, `nama`, `username`, `password`) VALUES
(1, 'admin', '', 'Clement', 'admin', '202cb962ac59075b964b07152d234b70'),
(2, 'guru', '', 'Edo', 'edo', '202cb962ac59075b964b07152d234b70'),
(3, 'murid', '', 'Ucok', 'ucok', '202cb962ac59075b964b07152d234b70'),
(5, 'admin', '', 'Adam', 'adam', '202cb962ac59075b964b07152d234b70'),
(6, 'admin', 'test@example.com', '', 'ardy', '202cb962ac59075b964b07152d234b70'),
(7, 'guru', 'clement@mail.com', '', NULL, '25d55ad283aa400af464c76d713c07ad'),
(8, 'guru', 'test@mail.com', '', NULL, '25d55ad283aa400af464c76d713c07ad'),
(9, 'admin', 'coba@mail.com', '', NULL, '202cb962ac59075b964b07152d234b70'),
(10, 'admin', 'coba@mail.com', 'Cobain Aja', NULL, '202cb962ac59075b964b07152d234b70'),
(11, 'murid', 'clement.085w@gmail.com', 'Halo People', NULL, '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `user_role` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `user_role`) VALUES
(1, 'admin'),
(2, 'guru'),
(3, 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
