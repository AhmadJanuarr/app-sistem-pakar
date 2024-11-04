-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 04, 2024 at 05:53 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_ayam`
--

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` int NOT NULL,
  `gejala` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `gejala`) VALUES
(1, 'Katarak pada lensa mata\r\n'),
(2, 'Ayam tampak sayu\r\n'),
(3, 'Kedua kaki terjulur ke satu sisi ( lumpuh )\r\n'),
(4, 'Penurunan produksi telur\r\n'),
(5, 'Keluarnya cairan dari hidung dan mata\r\n'),
(6, 'Pembengkakan pada muka dan kepala\r\n'),
(7, 'Pendarahan pada kaki ayam berupa bintik-bintik merah\r\n'),
(8, 'Nafsu makan menurun\r\n'),
(9, 'Jengger, kelopak mata, telapak kaki dan perut terlihat kebiruan\r\n'),
(10, 'Ayam mengalami batuk, bersin , ngorok\r\n'),
(11, 'Mengalami kelumpuhan lumpuh\r\n'),
(12, 'Terdapat bintik-bintik diarea yang tidak berbulu ( kutil )\r\n'),
(13, 'Pertumbuhan ayam lambat\r\n'),
(14, 'Kesulitan bernafas\r\n'),
(15, 'Terlihat kurus dan lemah\r\n'),
(16, 'Kualitas telur jelek\r\n'),
(17, 'Bentuk-bentuk telur abnormal\r\n'),
(18, 'Jengger dan pial terlihat pucat\r\n'),
(19, 'Ayam mengalami Diare\r\n'),
(20, 'kurus\r\n'),
(21, 'Depresi, lesu dan lemah\r\n'),
(22, 'Bulu berdiri dan kotor di bagian perut dan dubur\r\n'),
(23, 'Batuk darah\r\n'),
(24, 'unggas terlihat pucat\r\n'),
(25, 'Mengalami kelumpuhan\r\n'),
(26, 'Mata berwarna abu-abu\r\n'),
(27, 'Bentuk pupil tidak normal\r\n'),
(28, 'Pembengkakan pada daerah mata\r\n'),
(29, 'Tortikolis ( Leher terputar )\r\n'),
(30, 'Pembengkakan pada tendon fleksor digitalis\r\n'),
(31, 'Pembengkakan pada telapak kaki\r\n'),
(32, 'Ayam mengalami kepincangan\r\n'),
(33, 'Unggas tampak sukar bergerak\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` int NOT NULL,
  `penyakit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `penyakit`) VALUES
(1, 'Avian Encephalomyelitis ( AE )\r\n'),
(2, 'Avian Influenza ( AI )\r\n'),
(3, 'Cacar Unggas\r\n'),
(4, 'Egg Drop Syndrome\r\n'),
(5, 'Inclusion Body Hepatitis\r\n'),
(6, 'Infectious Bronchitis\r\n'),
(7, 'Infectious Bursal Disease\r\n'),
(8, 'Infectious Laryngo Tracheitis\r\n'),
(9, 'Marek\'s Disease\r\n'),
(10, 'Newcastle Disease\r\n'),
(11, 'Viral Arthritis\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `relasi`
--

CREATE TABLE `relasi` (
  `id_relasi` int NOT NULL,
  `id_gejala` int DEFAULT NULL,
  `id_penyakit` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relasi`
--

INSERT INTO `relasi` (`id_relasi`, `id_gejala`, `id_penyakit`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 2),
(6, 6, 2),
(7, 7, 2),
(8, 8, 2),
(9, 9, 2),
(10, 10, 2),
(11, 11, 2),
(12, 4, 3),
(13, 8, 3),
(14, 12, 3),
(15, 13, 3),
(16, 14, 3),
(17, 15, 3),
(18, 4, 4),
(19, 8, 4),
(20, 16, 4),
(21, 17, 4),
(22, 18, 4),
(23, 19, 4),
(24, 4, 5),
(25, 9, 5),
(26, 14, 5),
(27, 20, 5),
(28, 21, 5),
(29, 4, 6),
(30, 5, 6),
(31, 10, 6),
(32, 16, 6),
(33, 8, 7),
(34, 19, 7),
(35, 20, 7),
(36, 22, 7),
(37, 5, 8),
(38, 10, 8),
(39, 14, 8),
(40, 23, 8),
(41, 8, 9),
(42, 19, 9),
(43, 24, 9),
(44, 25, 9),
(45, 26, 9),
(46, 27, 9),
(47, 4, 10),
(48, 25, 10),
(49, 28, 10),
(50, 33, 10),
(51, 13, 11),
(52, 25, 11),
(53, 30, 11),
(54, 31, 11),
(55, 32, 11),
(56, 33, 11);

-- --------------------------------------------------------

--
-- Table structure for table `solusi`
--

CREATE TABLE `solusi` (
  `id_solusi` int NOT NULL,
  `id_penyakit` int NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `solusi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solusi`
--

INSERT INTO `solusi` (`id_solusi`, `id_penyakit`, `deskripsi`, `solusi`) VALUES
(1, 1, 'Penyakit virus yang memengaruhi sistem saraf ayam dan dapat menyebabkan tremor, kelemahan, dan ketidakmampuan bergerak\r\n', 'Isolasi ayam yang sakit dan vaksinasi adalah tindakan preventif. Pengobatan simptomatik mungkin dipe'),
(2, 2, 'Penyakit menular yang disebabkan oleh virus flu burung. Dapat menyebabkan gejala pernapasan dan kematian massal dalam populasi ayam.\r\n', 'Isolasi, penghancuran ayam yang sakit, dan melaporkan kepada otoritas kesehatan hewan. Vaksinasi dap'),
(3, 3, 'Penyakit viral yang ditandai dengan lesi kulit dan selaput lendir pada ayam.\r\n', 'Vaksinasi dan perawatan kulit yang baik untuk mengurangi gejala. Isolasi ayam yang terinfeksi.\r\n'),
(4, 4, 'Egg Drop Syndrome (EDS) adalah penyakit virus yang memengaruhi produksi telur pada ayam, terutama ayam petelur. Penyakit ini dapat menyebabkan penurunan produksi telur, telur dengan kulit keriput, dan penurunan kualitas telur.\r\n', 'Vaksinasi ayam untuk mencegah EDS dapat digunakan sebagai tindakan preventif. Isolasi dan pengobatan'),
(5, 5, 'Inclusion Body Hepatitis (IBH) adalah penyakit virus yang memengaruhi hati dan sistem pencernaan ayam. Penyakit ini dapat menyebabkan gejala seperti diare dan penurunan pertumbuhan.\r\n', 'Vaksinasi dianjurkan sebagai tindakan preventif. Isolasi dan perawatan simptomatik mungkin diperluka'),
(6, 6, 'Penyakit pernapasan menular yang disebabkan oleh coronavirus, menyebabkan gejala seperti bersin, batuk, dan penurunan produksi telur.\r\n', 'Vaksinasi adalah cara umum untuk mencegah penyakit ini. Isolasi dan perawatan simptomatik dapat dite'),
(7, 7, 'Infectious Bursal Disease (IBD), juga dikenal sebagai Gumboro disease, adalah penyakit virus yang memengaruhi bursa Fabricius pada ayam. Ini dapat mengakibatkan penurunan sistem kekebalan tubuh.\r\n', 'Vaksinasi adalah tindakan preventif utama. Isolasi dan perawatan simptomatik mungkin diperlukan untu'),
(8, 8, 'Infectious Laryngo Tracheitis (ILT) adalah penyakit pernapasan yang disebabkan oleh virus. Ayam yang terinfeksi dapat mengalami sesak napas, batuk, dan sekresi nasal.\r\n', 'Vaksinasi dan pengobatan simptomatik mungkin diperlukan. Selain itu, isolasi ayam yang sakit sangat '),
(9, 9, 'Penyakit viral yang memengaruhi sistem saraf dan organ internal ayam, seringkali tanpa gejala hingga tahap lanjut.\r\n', 'Vaksinasi adalah tindakan preventif utama. Ayam yang terinfeksi harus diisolasi dan diberikan perawa'),
(10, 10, 'Penyakit virus yang dapat menyebabkan gejala pernapasan, sistem saraf, dan pencernaan, serta tingkat kematian yang tinggi.\r\n', 'Vaksinasi wajib dan pelaporan kepada otoritas kesehatan hewan jika ada kasus. Isolasi dan penghancur'),
(11, 11, 'Penyakit yang memengaruhi sendi ayam dan dapat menyebabkan lameness.\r\n', 'Tidak ada vaksin untuk penyakit ini. Isolasi ayam yang sakit dan perawatan simptomatik mungkin diper');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `role` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `role`, `nama`, `email`, `alamat`, `tgl_lahir`, `password`) VALUES
(1, 0, 'admin', 'admin@gmail.com', 'globaladmin', '2002-11-13', '$2y$10$613SNaOJ54XMnxLe2tyOj.enn1v4xgzJQlIHZ86.YA25GEVwggTAa'),
(11, 1, 'ara', 'ara13@gmail.com', 'Tangerang', '2000-10-13', '$2y$10$613SNaOJ54XMnxLe2tyOj.enn1v4xgzJQlIHZ86.YA25GEVwggTAa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `relasi`
--
ALTER TABLE `relasi`
  ADD PRIMARY KEY (`id_relasi`),
  ADD KEY `id_gejala` (`id_gejala`),
  ADD KEY `id_penyakit` (`id_penyakit`);

--
-- Indexes for table `solusi`
--
ALTER TABLE `solusi`
  ADD PRIMARY KEY (`id_solusi`),
  ADD KEY `id_penyakit` (`id_penyakit`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id_gejala` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id_penyakit` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `relasi`
--
ALTER TABLE `relasi`
  MODIFY `id_relasi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `solusi`
--
ALTER TABLE `solusi`
  MODIFY `id_solusi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `relasi`
--
ALTER TABLE `relasi`
  ADD CONSTRAINT `relasi_ibfk_1` FOREIGN KEY (`id_gejala`) REFERENCES `gejala` (`id_gejala`),
  ADD CONSTRAINT `relasi_ibfk_2` FOREIGN KEY (`id_penyakit`) REFERENCES `penyakit` (`id_penyakit`);

--
-- Constraints for table `solusi`
--
ALTER TABLE `solusi`
  ADD CONSTRAINT `solusi_ibfk_1` FOREIGN KEY (`id_penyakit`) REFERENCES `penyakit` (`id_penyakit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
