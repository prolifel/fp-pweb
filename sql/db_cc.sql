-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 13, 2021 at 06:50 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(2) NOT NULL,
  `email_admin` varchar(25) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username_admin` varchar(25) NOT NULL,
  `password_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email_admin`, `nama_admin`, `username_admin`, `password_admin`) VALUES
(5, 'admin@admin.com', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(2) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `usia` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `urutan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama`, `parent_id`, `urutan`) VALUES
(1, '12 IPA 3', 3, 21);

-- --------------------------------------------------------

--
-- Table structure for table `kelas_siswa`
--

CREATE TABLE `kelas_siswa` (
  `id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `guru_id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kelas_siswa`
--

INSERT INTO `kelas_siswa` (`id`, `kelas_id`, `guru_id`, `siswa_id`) VALUES
(2, 1, 4, 69),
(3, 1, 4, 70),
(4, 1, 4, 71),
(5, 1, 4, 72),
(6, 1, 4, 73),
(7, 1, 4, 74),
(8, 1, 4, 75),
(9, 1, 4, 76),
(10, 1, 4, 77),
(11, 1, 4, 78),
(12, 1, 4, 79),
(13, 1, 4, 80),
(14, 1, 4, 81),
(15, 1, 4, 82),
(16, 1, 4, 83);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `nama` varchar(50) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`) VALUES
(1, 'Biologi'),
(2, 'Fisika'),
(3, 'Kimia'),
(4, 'Matematika');

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
(7, 4, 4, 71, 60, 60, 60, 80, 100, NULL),
(8, 2, 4, 71, 100, 100, 100, 100, 100, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `email_user` varchar(25) NOT NULL,
  `nama_user` varchar(50) DEFAULT NULL,
  `username_user` varchar(25) DEFAULT NULL,
  `password_user` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `email_user`, `nama_user`, `username_user`, `password_user`) VALUES
(4, 1, 'guru@guru.com', 'Guru Satu', NULL, 'guru123'),
(5, 2, 'siswa@siswa.com', 'Siswa Satu', NULL, 'siswa123'),
(6, 1, 'guru@guru.com', 'Halo', NULL, 'halo123'),
(7, 1, 'teach@teach.com', 'teach', NULL, 'teach123'),
(8, 1, 'lagi@lagi.com', 'lagi', NULL, 'lagi123'),
(69, 2, 'dhayle0@nymag.com', 'Dinny', 'dbottrill0', '1'),
(70, 2, 'cphethean1@ucla.edu', 'Claire', 'czebedee1', '2'),
(71, 2, 'aliles2@rakuten.co.jp', 'Allianora', 'abozier2', '3'),
(72, 2, 'cmatzke3@people.com.cn', 'Case', 'csutehall3', '4'),
(73, 2, 'lkepp4@blogtalkradio.com', 'Lilllie', 'llinder4', '5'),
(74, 2, 'wreddlesden5@thetimes.co.', 'Welbie', 'wharmour5', '6'),
(75, 2, 'rryce6@csmonitor.com', 'Raynell', 'rlenz6', '7'),
(76, 2, 'srime7@ucla.edu', 'Stafford', 'srangeley7', '8'),
(77, 2, 'rflintoft8@ifeng.com', 'Ralina', 'rfishbourne8', '9'),
(78, 2, 'cshirt9@baidu.com', 'Cyndy', 'cblanko9', '10'),
(79, 2, 'swhichelowa@cisco.com', 'Spencer', 'svaraha', '11'),
(80, 2, 'jaaronsb@bloglines.com', 'Joann', 'jclaytonb', '12'),
(81, 2, 'mwilnec@pinterest.com', 'Mead', 'mgariffc', '13'),
(82, 2, 'aluned@vimeo.com', 'Ashli', 'apuddicombed', '14'),
(83, 2, 'crobberechte@discuz.net', 'Casey', 'cdoublee', '15'),
(84, 2, 'sulyatf@fda.gov', 'Sybila', 'soakwoodf', '16'),
(85, 2, 'ncolreing@eventbrite.com', 'Nathanial', 'nflaonierg', '17'),
(86, 2, 'cellumh@squarespace.com', 'Cynthie', 'cdrinnanh', '18'),
(87, 2, 'dplasteri@drupal.org', 'Dall', 'dscampi', '19'),
(88, 2, 'vbyj@squarespace.com', 'Valentia', 'vramesj', '20'),
(89, 2, 'jjeffsk@opensource.org', 'Jilli', 'jalcidok', '21'),
(90, 2, 'kwarrattl@purevolume.com', 'Kellie', 'kgamlenl', '22'),
(91, 2, 'kaysikm@is.gd', 'Kimbell', 'kcliftm', '23'),
(92, 2, 'hgailorn@acquirethisname.', 'Hobey', 'hlorrimann', '24'),
(93, 2, 'vdesquesneso@bravesites.c', 'Valry', 'vdarragono', '25'),
(94, 2, 'aharsep@unc.edu', 'Artur', 'aloveredgep', '26'),
(95, 2, 'lfeltonq@sciencedaily.com', 'Latia', 'laltoftq', '27'),
(96, 2, 'mcallisr@yellowpages.com', 'Magdalena', 'mgilbardr', '28'),
(97, 2, 'calelsandrovichs@mlb.com', 'Carolynn', 'cbambridges', '29'),
(98, 2, 'cdecruzt@altervista.org', 'Conant', 'cnancekivellt', '30'),
(99, 2, 'njonuziu@geocities.com', 'Nerita', 'nmichalu', '31'),
(100, 2, 'cfallenv@ycombinator.com', 'Cordy', 'cgartonv', '32'),
(101, 2, 'wvassiew@indiatimes.com', 'West', 'wjemmisonw', '33'),
(102, 2, 'tkearnx@sciencedaily.com', 'Therese', 'tmosebyx', '34'),
(103, 2, 'ssimoniy@google.com.br', 'Sidnee', 'shinzey', '35'),
(104, 2, 'tgreenhalghz@com.com', 'Thayne', 'tdefrancisciz', '36'),
(105, 2, 'gschoffel10@example.com', 'Gilbert', 'gjelliman10', '37'),
(106, 2, 'kmathiot11@plala.or.jp', 'Kara-lynn', 'kjerzykiewicz11', '38'),
(107, 2, 'fsandal12@unicef.org', 'Flossi', 'fharrowing12', '39'),
(108, 2, 'vaggio13@blinklist.com', 'Vinnie', 'vmaskrey13', '40'),
(109, 2, 'elashmar14@hc360.com', 'Estella', 'espriggin14', '41'),
(110, 2, 'gdiggles15@mozilla.com', 'Gwendolyn', 'gfulger15', '42'),
(111, 2, 'lklimkov16@zimbio.com', 'Lyell', 'lhambribe16', '43'),
(112, 2, 'rofarris17@google.com.au', 'Ruy', 'rmunden17', '44'),
(113, 2, 'cwaterfall18@nbcnews.com', 'Coleen', 'cricket18', '45'),
(114, 2, 'sbatiste19@multiply.com', 'Shawn', 'sharmant19', '46'),
(115, 2, 'nphilippard1a@purevolume.', 'Nikolas', 'neilhermann1a', '47'),
(116, 2, 'raronoff1b@usda.gov', 'Robinett', 'rduckhouse1b', '48'),
(117, 2, 'dmaccumeskey1c@about.me', 'Dix', 'ddevoy1c', '49'),
(118, 2, 'franahan1d@examiner.com', 'Francisco', 'fdymott1d', '50'),
(119, 2, 'mmacneely1e@unicef.org', 'Mallorie', 'mnel1e', '51'),
(120, 2, 'ialbrecht1f@mozilla.org', 'Immanuel', 'ijennaway1f', '52'),
(121, 2, 'edomico1g@ebay.com', 'Enriqueta', 'eblindmann1g', '53'),
(122, 2, 'tstrethill1h@meetup.com', 'Tracie', 'ttawton1h', '54'),
(123, 2, 'kfussen1i@addthis.com', 'Konrad', 'kcarnduff1i', '55'),
(124, 2, 'sshillitto1j@symantec.com', 'Sarine', 'sconre1j', '56'),
(125, 2, 'bjindracek1k@deliciousday', 'Bronnie', 'balthrop1k', '57'),
(126, 2, 'rgrouer1l@jalbum.net', 'Rosalynd', 'rredsell1l', '58'),
(127, 2, 'cbrownsworth1m@unicef.org', 'Chancey', 'cpapa1m', '59'),
(128, 2, 'rleve1n@zdnet.com', 'Rosemaria', 'rbroxholme1n', '60'),
(129, 1, 'amin@amin.com', 'amin', NULL, 'amin123'),
(130, 1, 'm@m.com', 'm', NULL, 'm123'),
(131, 1, 'K@kmail.com', 'K', NULL, 'k123'),
(132, 1, 'coba@coba.dom', 'coba', NULL, 'coba123');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `user_role` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `user_role`) VALUES
(1, 'guru'),
(2, 'siswa');

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kelas_id` (`kelas_id`,`siswa_id`),
  ADD KEY `guru_id` (`guru_id`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  ADD PRIMARY KEY (`id_nilai_siswa`),
  ADD KEY `id_mapel` (`id_mapel`,`id_guru`,`id_siswa`),
  ADD KEY `id_guru` (`id_guru`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

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
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  MODIFY `id_nilai_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `biodata`
--
ALTER TABLE `biodata`
  ADD CONSTRAINT `biodata_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  ADD CONSTRAINT `nilai_siswa_ibfk_4` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`),
  ADD CONSTRAINT `nilai_siswa_ibfk_5` FOREIGN KEY (`id_guru`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `nilai_siswa_ibfk_6` FOREIGN KEY (`id_siswa`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `user_role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
