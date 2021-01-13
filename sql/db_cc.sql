-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 13, 2021 at 06:31 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

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
-- Table structure for table `nilai_siswa`
--

CREATE TABLE `nilai_siswa` (
  `id_nilai_siswa` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `tugas1` int(100) NOT NULL,
  `tugas2` int(100) NOT NULL,
  `uts` int(100) NOT NULL,
  `uas` int(100) NOT NULL,
  `praktikum` int(100) NOT NULL,
  `komentar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai_siswa`
--

INSERT INTO `nilai_siswa` (`id_nilai_siswa`, `id_mapel`, `id_guru`, `id_siswa`, `tugas1`, `tugas2`, `uts`, `uas`, `praktikum`, `komentar`) VALUES
(2, 1, 4, 71, 3, 4, 5, 6, 7, NULL),
(6, 3, 4, 71, 1, 2, 3, 4, 5, NULL),
(7, 4, 4, 71, 60, 60, 60, 80, 100, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  ADD PRIMARY KEY (`id_nilai_siswa`),
  ADD KEY `id_mapel` (`id_mapel`,`id_guru`,`id_siswa`),
  ADD KEY `id_guru` (`id_guru`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  MODIFY `id_nilai_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  ADD CONSTRAINT `nilai_siswa_ibfk_1` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`) ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_siswa_ibfk_2` FOREIGN KEY (`id_guru`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `nilai_siswa_ibfk_3` FOREIGN KEY (`id_siswa`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
