-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2019 at 11:21 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `panogudb`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `idcourse` int(11) NOT NULL,
  `coursename` varchar(45) DEFAULT NULL,
  `desciption` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`idcourse`, `coursename`, `desciption`) VALUES
(1, 'B. Inggris  ', 'Belajar bahasa inggris bertujuan untuk mempermudah komunikasi dengan wisatawan internasional.'),
(2, 'Cara Berbicara', 'Cara berbicara sangat diperlukan dalam memandu perjalanan, agar tidak terjadi salah komunikasi.'),
(3, 'Belajar Wisata Danau Toba', 'Pemahaman lebih dalam mengenai wisata-wisata di Danau Toba terutama sekitaran Tobasa.'),
(4, 'Etika', 'Tingkah laku yang baik sangat diperlukan untuk berinteraksi dengan wisatawan agar tercipta suasana nyaman bagi wisatawan.');

-- --------------------------------------------------------

--
-- Table structure for table `guide`
--

CREATE TABLE `guide` (
  `id_guide` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `usia` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `kemampuan_berbahasa` varchar(200) NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `rate` varchar(200) NOT NULL,
  `foto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guide`
--

INSERT INTO `guide` (`id_guide`, `nama`, `alamat`, `telepon`, `usia`, `jenis_kelamin`, `kemampuan_berbahasa`, `lokasi`, `rate`, `foto`) VALUES
(6, 'Mangapul Silalahi', 'Laguboti', '081269252700', '22', 'Laki-laki', '', 'Laguboti', '', 'mangapul2.jpg'),
(7, 'Parman Sibuea', 'Laguboti', '082361981752', '24', 'Laki-laki', '', 'Laguboti', '', 'parmanSibuea.jpg'),
(8, 'Ari J Napitupulu', 'Laguboti', '0813708620', '18', 'Laki-laki', '', 'Balige', '', 'ariJ.jpg'),
(9, 'Dunand Siagian', 'Tara Bunga Balige', '085372911793', '20', 'Laki-laki', '', 'Tara Bunga Balige', '', 'dunand.jpg'),
(10, 'Lamhot Hutajulu', 'Laguboti', '081396205538', '22', 'Laki-laki', '', 'Balige', '', 'lamhot.jpg'),
(11, 'Elsa Purba', 'Balige', '082257167260', '22', 'Perempuan', 'B.Inggris', 'Balige', '', 'elsa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mycourse`
--

CREATE TABLE `mycourse` (
  `idmycourse` int(11) NOT NULL,
  `mycoursename` varchar(45) DEFAULT NULL,
  `mydesciption` varchar(1000) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mycourse`
--

INSERT INTO `mycourse` (`idmycourse`, `mycoursename`, `mydesciption`, `id_user`) VALUES
(1, 'B. Inggris', 'Belajar bahasa inggris bertujuan untuk mempermudah komunikasi dengan wisatawan internasional.', 4),
(2, 'Cara Berbicara', 'Cara berbicara sangat diperlukan dalam memandu perjalanan, agar tidak terjadi salah komunikasi.', 4),
(3, 'Belajar Wisata Danau Toba', 'Pemahaman lebih dalam mengenai wisata-wisata di Danau Toba terutama sekitaran Tobasa.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `idpesan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_guide` int(11) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `tgl_tour` date NOT NULL,
  `daerah` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requestcourse`
--

CREATE TABLE `requestcourse` (
  `idrequestCourse` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `idcourse` int(11) DEFAULT NULL,
  `reqcoursename` varchar(45) DEFAULT NULL,
  `usernameforrequestCourse` varchar(45) DEFAULT NULL,
  `Status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `requestcourse`
--

INSERT INTO `requestcourse` (`idrequestCourse`, `id_user`, `idcourse`, `reqcoursename`, `usernameforrequestCourse`, `Status`) VALUES
(4, 4, 4, 'Etika', 'student', 0),
(5, 4, 3, 'Destinasi Wisata Danau Toba', 'student', 0),
(6, 4, 2, 'Cara Berbicara', 'student', 1),
(7, 8, 4, 'Etika', 'yohana', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_guide` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `fullname` varchar(200) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  `foto` varchar(200) NOT NULL,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_guide`, `email`, `username`, `fullname`, `gender`, `password`, `foto`, `role`) VALUES
(1, 0, 'admin@panogu', 'admin', '', '', 'admin', '', 1),
(2, 0, 'guest@panogu', 'guest', '', '', 'guest', '', 2),
(3, 0, 'guide@panogu', 'guide', '', '', 'guide', '', 3),
(4, 0, 'mastiurhutajulu@yahoo.com', 'mastiur', 'Mastiur Hutajulu', 'Perempuan', 'mastiur', 'mastiur.jpg', 4),
(5, 0, 'murid@panogu', 'murid', '', '', 'murid', '', 4),
(8, 4, 'yohana@panogu', 'yohana', '', '', 'yohana', '', 3),
(9, 0, 'william@panogu', 'william', 'William Lumbantobing', '', 'william', '', 2),
(10, 0, 'parmanganan@panogu', 'parmanganan', 'Parmanganan Sitoluama', '', 'parmanganan', '', 4),
(11, 0, 'primustobing@gmail.com', 'primus', 'primus tobing', '', 'primus', '', 2),
(12, 3, 'wenny@panogu', 'wenny', 'Wenny Simedan', '', 'wenny', '', 3),
(13, 0, 'yohana@panogu', 'yohana', 'Yohana Sipoholon', '', 'yohana', '', 4),
(14, 5, 'adi@panogu', 'adi', 'Adi Silaen', '', 'adi', '', 3),
(15, 0, 'demo1@panogu', 'demo1', 'Demo 1', '', 'demo1', '', 2),
(16, 0, 'mangapulsilalahi@yahoo.com', 'mangapul', 'Mangapul Silalahi', '', 'mangapul', '', 3),
(17, 0, 'damin', 'damin', 'damin', '', 'damin', '', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`idcourse`);

--
-- Indexes for table `guide`
--
ALTER TABLE `guide`
  ADD PRIMARY KEY (`id_guide`);

--
-- Indexes for table `mycourse`
--
ALTER TABLE `mycourse`
  ADD PRIMARY KEY (`idmycourse`),
  ADD KEY `iduserformycourse` (`id_user`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`idpesan`),
  ADD KEY `id_guide` (`id_guide`),
  ADD KEY `id_guide_2` (`id_guide`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `requestcourse`
--
ALTER TABLE `requestcourse`
  ADD PRIMARY KEY (`idrequestCourse`),
  ADD KEY `iduserforrequestcourse` (`id_user`),
  ADD KEY `idcourseforrequestcourse` (`idcourse`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_guide` (`id_guide`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `idcourse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `guide`
--
ALTER TABLE `guide`
  MODIFY `id_guide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mycourse`
--
ALTER TABLE `mycourse`
  MODIFY `idmycourse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `idpesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `requestcourse`
--
ALTER TABLE `requestcourse`
  MODIFY `idrequestCourse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mycourse`
--
ALTER TABLE `mycourse`
  ADD CONSTRAINT `mycourse_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`id_guide`) REFERENCES `guide` (`id_guide`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pesan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `requestcourse`
--
ALTER TABLE `requestcourse`
  ADD CONSTRAINT `requestcourse_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `requestcourse_ibfk_2` FOREIGN KEY (`idcourse`) REFERENCES `course` (`idcourse`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
