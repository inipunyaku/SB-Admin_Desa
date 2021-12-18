-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2021 at 10:26 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `anggota_keluarga`
--

CREATE TABLE `anggota_keluarga` (
  `ID_ANGGOTA` int(16) NOT NULL,
  `ID_PENDUDUK` int(11) NOT NULL,
  `ID_KELUARGA` int(11) NOT NULL,
  `HUBUNGAN_KELUARGA` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota_keluarga`
--

INSERT INTO `anggota_keluarga` (`ID_ANGGOTA`, `ID_PENDUDUK`, `ID_KELUARGA`, `HUBUNGAN_KELUARGA`) VALUES
(15, 2, 1, 'Suami'),
(16, 6, 1, 'Istri'),
(17, 7, 3, 'Suami'),
(18, 8, 4, 'Suami'),
(19, 12, 8, 'Suami'),
(20, 11, 8, 'Istri'),
(23, 14, 7, 'Suami'),
(24, 16, 7, 'Istri');

-- --------------------------------------------------------

--
-- Table structure for table `data_desa`
--

CREATE TABLE `data_desa` (
  `ID_DESA` int(40) NOT NULL,
  `KODE_DESA` varchar(30) NOT NULL,
  `NAMA_DESA` varchar(100) NOT NULL,
  `TITIK_KOORDINAT` varchar(500) NOT NULL,
  `KECAMATAN` varchar(70) NOT NULL,
  `PROVINSI` varchar(70) NOT NULL,
  `LUAS_DESA` float NOT NULL,
  `KODE_POS` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_desa`
--

INSERT INTO `data_desa` (`ID_DESA`, `KODE_DESA`, `NAMA_DESA`, `TITIK_KOORDINAT`, `KECAMATAN`, `PROVINSI`, `LUAS_DESA`, `KODE_POS`) VALUES
(1, '1111', 'Bumi Agung', '107º36’ Bujur Timur dan 6º55’ Lintang Selatan.', 'Kalianda', 'Lampung', 124.44, '19234');

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE `keluarga` (
  `ID_KELUARGA` int(11) NOT NULL,
  `NO_KK` varchar(16) NOT NULL,
  `PENGHASILAN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keluarga`
--

INSERT INTO `keluarga` (`ID_KELUARGA`, `NO_KK`, `PENGHASILAN`) VALUES
(1, '112123123412345', 4000000),
(3, '1234', 3000000),
(4, '33333', 6000000),
(7, '12121', 1000000),
(8, '1234567890', 8000000);

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `ID_PENDUDUK` int(11) NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `NAMA` varchar(100) NOT NULL,
  `TEMPAT_LAHIR` varchar(50) NOT NULL,
  `TANGGAL_LAHIR` date NOT NULL,
  `JENIS_KELAMIN` varchar(15) NOT NULL,
  `GOLONGAN_DARAH` varchar(5) NOT NULL,
  `ALAMAT_` varchar(300) NOT NULL,
  `PEKERJAAN` varchar(50) NOT NULL,
  `STATUS_KAWIN` varchar(15) NOT NULL,
  `KEWARGANEGARAAN` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`ID_PENDUDUK`, `NIK`, `NAMA`, `TEMPAT_LAHIR`, `TANGGAL_LAHIR`, `JENIS_KELAMIN`, `GOLONGAN_DARAH`, `ALAMAT_`, `PEKERJAAN`, `STATUS_KAWIN`, `KEWARGANEGARAAN`) VALUES
(2, '1122222', 'Jamaludin aripin Awww', 'Citayam', '1222-12-12', 'Laki-Laki', 'O', 'komplek harapan jalan doang taunya di goshting no 3 ciatyem', 'PNS', 'Belum Menikah', 'WNI'),
(6, '33333', 'SISKA GOTO HOME', 'rumah bapak jamal', '2003-04-11', 'perempuan', 'B', 'Rumahnya lah dimana lagi', 'Pelajar', 'Belum Menikah', 'WNI'),
(7, '11122233312', 'syamsudin ali', 'bojong soang', '1999-12-12', 'Laki-Laki', 'B', 'komplek harapan jalan doang taunya di goshting no 5 ciatyem', 'INFLUENSER', 'Menikah', 'WNI'),
(8, '122334', 'Rolando Afrizal', 'Gunung Kidul', '1972-12-12', 'Laki-Laki', 'O', 'Jl. Maung Bodas', 'Pemain Futsal', 'Belum Kawin', 'IND'),
(9, '626135412', 'Messa Jayapati', 'gunung kaler', '2011-01-01', 'Laki-Laki', 'B', 'Jl. Marga Jaya', 'Pelajar', 'Belum kawin', 'IND'),
(10, '27366235', 'Siti Maesaroh', 'Lembang', '2012-04-10', 'Perempuan', 'AB', 'Jl. Lembang Kaler', 'Belum Bekerja', 'Belum Kawin', 'IND'),
(11, '23231', 'Neng Uti', 'Bandung', '2003-06-10', 'Perempuan', 'O', 'Jl. Maung Bodas', 'Pelajar', 'belum kawin', 'IND'),
(12, '1273636', 'Andi Santoso', 'Padjajaran', '2011-06-09', 'Laki-Laki', 'AB', 'Jl. Desa', 'Belum Bekerja', 'Belum Kawin', 'IND'),
(13, '1197050017', 'Anggi Herdiman', 'VANDUNG', '1922-12-12', 'Laki-Laki', 'AB', 'Rumahnya lah dimana lagi', 'Mahasiswa', 'Menikah', 'WNI'),
(14, '1197050055', 'Irfan Abdel Hadi', 'Padang Pasir', '1920-12-11', 'Laki-Laki', 'B', 'Rumahnya lah dimana lagi', 'Mahasiswa', 'Menikah', 'WNI'),
(15, '1197050085', 'Muhammad Farhan Fadila Umam', 'Buitenzorg', '1920-12-29', 'Laki-Laki', 'O', 'Rumahnya lah dimana lagi', 'Mahasiswa', 'Belum Menikah', 'WNI'),
(16, '1197050072', 'Mohamad Fadlika Ramadhan', 'VANDUNG', '2020-02-22', 'Laki-Laki', 'O', 'Rumahnya lah dimana lagi', 'Mahasiswa', 'Menikah', 'WNA'),
(17, '1197050097', 'Nita Amalia', 'VANDUNG', '1999-12-12', 'perempuan', 'A', 'Rumahnya lah dimana lagi', 'Mahasiswa', 'Belum Menikah', 'WNI'),
(18, '123124', 'sinta jojo sonice', 'klaten', '2000-12-01', 'perempuan', 'O', 'didepan teras rumah fana merah jambu', 'menganggur', 'Belum Menikah', 'WNI');

-- --------------------------------------------------------

--
-- Table structure for table `perangkat_desa`
--

CREATE TABLE `perangkat_desa` (
  `ID_PERANGKAT_DESA` int(30) NOT NULL,
  `NAMA_PERANGKAT_DESA` varchar(200) NOT NULL,
  `NIP` varchar(30) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(9) NOT NULL,
  `TANGGAL_LAHIR` date NOT NULL,
  `ALAMAT` varchar(200) NOT NULL,
  `JABATAN` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perangkat_desa`
--

INSERT INTO `perangkat_desa` (`ID_PERANGKAT_DESA`, `NAMA_PERANGKAT_DESA`, `NIP`, `JENIS_KELAMIN`, `TANGGAL_LAHIR`, `ALAMAT`, `JABATAN`) VALUES
(1, 'Jamaludin Abidin', '1128760001823', 'perempuan', '1872-12-12', 'komplek harapan jalan nikah doang jadian mah engga no 29', 'KEPALA DESA'),
(4, '123123', '123123', 'Laki-Laki', '0111-11-23', '123123 ', 'STAF TATA USAHA'),
(6, 'Samsudin ', '01010102', 'Laki-Laki', '1980-11-05', 'Jl. Maung Bodas', 'STAF BENDAHARA'),
(7, 'Marsinah', '01010105', 'Perempuan', '2002-04-02', 'Jl. Desa', 'STAF TATA USAHA'),
(8, 'Roger', '2761625', 'Laki-Laki', '2012-04-10', 'Jl. Land of Dawn', 'KEPALA BAGIAN PERENCANAAN'),
(9, 'Joko Widoda', '2765321', 'Laki-Laki', '1980-11-05', 'Jl. Solo Pasisian', 'STAF TATA USAHA');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `ID_SARAN` int(11) NOT NULL,
  `NAMA` varchar(80) NOT NULL,
  `SARAN` varchar(400) NOT NULL,
  `foto_bukti` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`ID_SARAN`, `NAMA`, `SARAN`, `foto_bukti`) VALUES
(1, 'sarimin', 'jalan dapan rumah saya tolong di perbaiki', NULL),
(2, 'alimah', 'kepala desanya tolong jangan di kantor mulu ', NULL),
(3, 'sinta', 'adain program 1 hari tanpa makan nasi', NULL),
(6, 'Rolando Afrizal', 'Adain lapang futsal dong om KEPDES...', NULL),
(7, 'Siti Maesaroh', 'Jalan digang gang tolon diaspal biar mantap', NULL),
(8, 'SINTA GO TO OFFICE', 'adakan pertemuan seminggu sekali dong', 'cafeku.jpg'),
(11, 'aaaaaaaaaa', 'aaaaaaaaaaaaa', 'back.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `anggota_keluarga`
--
ALTER TABLE `anggota_keluarga`
  ADD PRIMARY KEY (`ID_ANGGOTA`),
  ADD KEY `ID_PENDUDUK` (`ID_PENDUDUK`),
  ADD KEY `ID_KELUARGA` (`ID_KELUARGA`);

--
-- Indexes for table `data_desa`
--
ALTER TABLE `data_desa`
  ADD PRIMARY KEY (`ID_DESA`);

--
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`ID_KELUARGA`),
  ADD UNIQUE KEY `ID_KELUARGA` (`ID_KELUARGA`),
  ADD UNIQUE KEY `NO_KK` (`NO_KK`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`ID_PENDUDUK`),
  ADD UNIQUE KEY `ID_PENDUDUK` (`ID_PENDUDUK`);

--
-- Indexes for table `perangkat_desa`
--
ALTER TABLE `perangkat_desa`
  ADD PRIMARY KEY (`ID_PERANGKAT_DESA`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`ID_SARAN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota_keluarga`
--
ALTER TABLE `anggota_keluarga`
  MODIFY `ID_ANGGOTA` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `data_desa`
--
ALTER TABLE `data_desa`
  MODIFY `ID_DESA` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keluarga`
--
ALTER TABLE `keluarga`
  MODIFY `ID_KELUARGA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `ID_PENDUDUK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `perangkat_desa`
--
ALTER TABLE `perangkat_desa`
  MODIFY `ID_PERANGKAT_DESA` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `ID_SARAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota_keluarga`
--
ALTER TABLE `anggota_keluarga`
  ADD CONSTRAINT `anggota_keluarga_ibfk_1` FOREIGN KEY (`ID_PENDUDUK`) REFERENCES `penduduk` (`ID_PENDUDUK`),
  ADD CONSTRAINT `anggota_keluarga_ibfk_2` FOREIGN KEY (`ID_KELUARGA`) REFERENCES `keluarga` (`ID_KELUARGA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
