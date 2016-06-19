-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2016 at 06:49 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pbm`
--

-- --------------------------------------------------------

--
-- Table structure for table `bacaan`
--

CREATE TABLE IF NOT EXISTS `bacaan` (
  `KODE_BACAAN` int(11) NOT NULL,
  `KODE_MK` varchar(10) DEFAULT NULL,
  `JUDUL` varchar(50) NOT NULL,
  `TAHUN` int(11) NOT NULL,
  `NAMA_PENULIS` varchar(50) NOT NULL,
  `NAMA_PENERBIT` varchar(25) NOT NULL,
  `KOTA_PENERBIT` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bacaan`
--

INSERT INTO `bacaan` (`KODE_BACAAN`, `KODE_MK`, `JUDUL`, `TAHUN`, `NAMA_PENULIS`, `NAMA_PENERBIT`, `KOTA_PENERBIT`) VALUES
(1, 'MK003', 'mmm', 2013, 'mmm', 'mmm', 'mmm'),
(2, 'MK001', 'Zahran', 2010, 'Rahadian', 'CV', 'Surabaya');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_ss`
--

CREATE TABLE IF NOT EXISTS `daftar_ss` (
  `KODE_SS` varchar(10) NOT NULL,
  `KODE_MK` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `NIP` varchar(20) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `PASSWORD` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`NIP`, `NAMA`, `PASSWORD`) VALUES
('105', 'Rahadian', 'rahadian'),
('123123', 'indra kharisma rahardjana', 'indra'),
('123123123', 'badrus zaman', 'badrus'),
('1234', 'Admin', '81dc9bdb52d04dc20036dbd8313ed055'),
('123456', 'qwertyu', 'qwert'),
('1334010105', 'Zahran', 'zahran');

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE IF NOT EXISTS `fakultas` (
  `ID_FAK` varchar(10) NOT NULL,
  `NAMA_FAK` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`ID_FAK`, `NAMA_FAK`) VALUES
('FEB', 'Fakultas Ekonomi dan Bisnis'),
('FF', 'Fakultas Farmasi'),
('FH', 'Fakultas Hukum'),
('FIB', 'Fakultas Ilmu Budaya'),
('FISIP', 'Fakultas Ilmu Sosial dan Ilmu Politik'),
('FK', 'Fakultas Kedokteran'),
('FKG', 'Fakultas Kedokteran Gigi'),
('FKH', 'Fakultas Kedokteran Hewan'),
('FKM', 'Fakultas Kesehatan Masyarakat'),
('FKP', 'Fakultas Keperawatan'),
('FPK', 'Fakultas Perikanan dan Kelautan'),
('FPsi', 'Fakultas Psikologi'),
('FST', 'Fakultas Sains dan Teknologi'),
('FVok', 'Fakultas Vokasi');

-- --------------------------------------------------------

--
-- Table structure for table `kompetensi_khusus`
--

CREATE TABLE IF NOT EXISTS `kompetensi_khusus` (
  `KODE_KK` varchar(10) NOT NULL,
  `KODE_MK` varchar(10) DEFAULT NULL,
  `NAMA_KK` varchar(35) NOT NULL,
  `NAMA_PB` varchar(35) NOT NULL,
  `SUB_PB` varchar(100) NOT NULL,
  `WAKTU` varchar(7) NOT NULL,
  `METODE` varchar(25) NOT NULL,
  `MEDIA` varchar(25) NOT NULL,
  `BACAAN` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kompetensi_khusus`
--

INSERT INTO `kompetensi_khusus` (`KODE_KK`, `KODE_MK`, `NAMA_KK`, `NAMA_PB`, `SUB_PB`, `WAKTU`, `METODE`, `MEDIA`, `BACAAN`) VALUES
('coba', 'MK001', 'Coba dulu', 'Coba dulu', '1. mother\r\n2. father\r\n', '150mnt', 'Presentasi', 'White Board', 'MK001'),
('Coba dulu', 'MK003', 'Coba dulu', 'Coba dulu', '1. a\r\n2. b\r\n', '150mnt', 'Presentasi', 'White Board', 'MK003'),
('mahasiswa ', 'KD116', 'persamaan dan pertidaksamaan', 'turunan linier', '1. persamaaan fungsi linier\r\n2. fungsi turunan\r\n3. pertidaksamaan\r\n', '100mnt', 'Ceramah', 'Hand Out', 'MK003');

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE IF NOT EXISTS `mata_kuliah` (
  `KODE_MK` varchar(10) NOT NULL,
  `NIP` varchar(20) NOT NULL,
  `KODE_SS` varchar(10) DEFAULT NULL,
  `NAMA_MK` varchar(50) NOT NULL,
  `BEBAN_STUDI` int(11) NOT NULL,
  `SEMESTER` int(11) NOT NULL,
  `KOMPETENSI` text,
  `DESKRIPSI` text,
  `PRASYARAT` text,
  `ATRIBUT_SS` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`KODE_MK`, `NIP`, `KODE_SS`, `NAMA_MK`, `BEBAN_STUDI`, `SEMESTER`, `KOMPETENSI`, `DESKRIPSI`, `PRASYARAT`, `ATRIBUT_SS`) VALUES
('KD116', '123123', NULL, 'kalkulus', 4, 6, 'qwertyuiopasdfghjkl', 'pengembangan sistem informasi', 'kudu a', 'Keaktifan'),
('MK001', '1334010105', NULL, 'Jaringan Komputer', 2, 1, 'Coba dulu', 'Coba dulu', 'Coba dulu', 'Kejujuran'),
('MK002', '1234', NULL, 'PSI', 3, 4, 'Coba dulu', 'Coba dulu', 'Coba dulu', 'Kedisiplinan'),
('MK003', '123123', NULL, 'AAAAA', 2, 4, 'Coba dulu', 'Coba dulu', 'Coba dulu', 'Kedisiplinan');

-- --------------------------------------------------------

--
-- Table structure for table `mengajar`
--

CREATE TABLE IF NOT EXISTS `mengajar` (
  `SOFTSKILL` int(100) NOT NULL,
  `STRATEGI_PERKULIAHAN` varchar(250) NOT NULL,
  `PERTEMUAN` int(5) NOT NULL,
  `NOTE` varchar(250) NOT NULL,
  `KUIS` int(5) NOT NULL,
  `UAS` int(5) NOT NULL,
  `TUGAS` int(5) NOT NULL,
  `TUTOR` int(5) NOT NULL,
  `UTS` int(5) NOT NULL,
  `HARI_TANGGAL` date NOT NULL,
  `KUIS_COMMENT` varchar(255) DEFAULT NULL,
  `UAS_COMMENT` varchar(255) DEFAULT NULL,
  `SOFTSKILL_COMMENT` varchar(255) DEFAULT NULL,
  `TUGAS_COMMENT` varchar(255) DEFAULT NULL,
  `TUTOR_COMMENT` varchar(255) DEFAULT NULL,
  `UTS_COMMENT` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mengajar`
--

INSERT INTO `mengajar` (`SOFTSKILL`, `STRATEGI_PERKULIAHAN`, `PERTEMUAN`, `NOTE`, `KUIS`, `UAS`, `TUGAS`, `TUTOR`, `UTS`, `HARI_TANGGAL`, `KUIS_COMMENT`, `UAS_COMMENT`, `SOFTSKILL_COMMENT`, `TUGAS_COMMENT`, `TUTOR_COMMENT`, `UTS_COMMENT`) VALUES
(1, 'asdasdasd', 0, '', 2, 3, 1, 2, 1, '2010-04-03', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd'),
(1234, '', 0, '', 0, 0, 0, 0, 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prasyarat`
--

CREATE TABLE IF NOT EXISTS `prasyarat` (
  `TAHAP_PEMBELAJARAN` varchar(50) NOT NULL,
  `KEG_PENGAJAR` varchar(250) NOT NULL,
  `KEG_MAHASISWA` varchar(250) NOT NULL,
  `ALAT_PENGAJAR` varchar(25) NOT NULL,
  `EVALUASI` varchar(250) NOT NULL,
  `PERTEMUAN` int(10) NOT NULL,
  `DATE` date NOT NULL,
  `POKOK_BAHASAN` varchar(100) NOT NULL,
  `KEGIATAN` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prasyarat`
--

INSERT INTO `prasyarat` (`TAHAP_PEMBELAJARAN`, `KEG_PENGAJAR`, `KEG_MAHASISWA`, `ALAT_PENGAJAR`, `EVALUASI`, `PERTEMUAN`, `DATE`, `POKOK_BAHASAN`, `KEGIATAN`) VALUES
('Penutupan', 'asd', 'as', '', 'asdads', 3, '0000-00-00', '', ''),
('Bab 3', 'asdasd', 'as', '', 'asd', 4, '2010-04-02', 'Coba dulu', 'Tutor');

-- --------------------------------------------------------

--
-- Table structure for table `program_studi`
--

CREATE TABLE IF NOT EXISTS `program_studi` (
  `KODE_PRODI` varchar(10) NOT NULL,
  `ID_FAK` varchar(10) NOT NULL,
  `NAMA_PRODI` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program_studi`
--

INSERT INTO `program_studi` (`KODE_PRODI`, `ID_FAK`, `NAMA_PRODI`) VALUES
('S1BIO', 'FST', 'S1 Biologi'),
('S1FIS', 'FST', 'S1 Fisika'),
('S1ITL', 'FST', 'S1 Ilmu dan Teknologi Lingkungan'),
('S1KIM', 'FST', 'S1 Kimia'),
('S1MAT', 'FST', 'S1 Matematika'),
('S1SI', 'FST', 'S1 Sistem Informasi'),
('S1STAT', 'FST', 'S1 Statistika'),
('S1TB', 'FST', 'S1 Tekno Biomedik');

-- --------------------------------------------------------

--
-- Table structure for table `softskill`
--

CREATE TABLE IF NOT EXISTS `softskill` (
  `KODE_SS` varchar(10) NOT NULL,
  `NAMA_SS` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `softskill`
--

INSERT INTO `softskill` (`KODE_SS`, `NAMA_SS`) VALUES
('SS1', 'Kejujuran'),
('SS2', 'Kedisiplinan'),
('SS3', 'Keaktifan');

-- --------------------------------------------------------

--
-- Table structure for table `sub_bahasan`
--

CREATE TABLE IF NOT EXISTS `sub_bahasan` (
  `KODE_SUB` varchar(10) NOT NULL,
  `KODE_KK` varchar(10) NOT NULL,
  `SUB_BAHASAN` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bacaan`
--
ALTER TABLE `bacaan`
  ADD PRIMARY KEY (`KODE_BACAAN`),
  ADD KEY `FK_MEMILIKI_3` (`KODE_MK`);

--
-- Indexes for table `daftar_ss`
--
ALTER TABLE `daftar_ss`
  ADD PRIMARY KEY (`KODE_SS`,`KODE_MK`),
  ADD KEY `FK_DAFTAR_SS2` (`KODE_MK`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`ID_FAK`);

--
-- Indexes for table `kompetensi_khusus`
--
ALTER TABLE `kompetensi_khusus`
  ADD PRIMARY KEY (`KODE_KK`),
  ADD KEY `FK_MEMILIKI_4` (`KODE_MK`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`KODE_MK`),
  ADD KEY `FK_MEMILIKI_2` (`KODE_SS`),
  ADD KEY `FK_PENANGGUNG_JAWAB` (`NIP`);

--
-- Indexes for table `mengajar`
--
ALTER TABLE `mengajar`
  ADD PRIMARY KEY (`SOFTSKILL`);

--
-- Indexes for table `program_studi`
--
ALTER TABLE `program_studi`
  ADD PRIMARY KEY (`KODE_PRODI`),
  ADD KEY `FK_MEMILIKI_1` (`ID_FAK`);

--
-- Indexes for table `softskill`
--
ALTER TABLE `softskill`
  ADD PRIMARY KEY (`KODE_SS`);

--
-- Indexes for table `sub_bahasan`
--
ALTER TABLE `sub_bahasan`
  ADD PRIMARY KEY (`KODE_SUB`),
  ADD KEY `FK_MEMILIKI_5` (`KODE_KK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bacaan`
--
ALTER TABLE `bacaan`
  MODIFY `KODE_BACAAN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bacaan`
--
ALTER TABLE `bacaan`
  ADD CONSTRAINT `FK_MEMILIKI_3` FOREIGN KEY (`KODE_MK`) REFERENCES `mata_kuliah` (`KODE_MK`);

--
-- Constraints for table `daftar_ss`
--
ALTER TABLE `daftar_ss`
  ADD CONSTRAINT `FK_DAFTAR_SS` FOREIGN KEY (`KODE_SS`) REFERENCES `softskill` (`KODE_SS`),
  ADD CONSTRAINT `FK_DAFTAR_SS2` FOREIGN KEY (`KODE_MK`) REFERENCES `mata_kuliah` (`KODE_MK`);

--
-- Constraints for table `kompetensi_khusus`
--
ALTER TABLE `kompetensi_khusus`
  ADD CONSTRAINT `FK_MEMILIKI_4` FOREIGN KEY (`KODE_MK`) REFERENCES `mata_kuliah` (`KODE_MK`);

--
-- Constraints for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD CONSTRAINT `FK_MEMILIKI_2` FOREIGN KEY (`KODE_SS`) REFERENCES `program_studi` (`KODE_PRODI`),
  ADD CONSTRAINT `FK_PENANGGUNG_JAWAB` FOREIGN KEY (`NIP`) REFERENCES `dosen` (`NIP`);

--
-- Constraints for table `program_studi`
--
ALTER TABLE `program_studi`
  ADD CONSTRAINT `FK_MEMILIKI_1` FOREIGN KEY (`ID_FAK`) REFERENCES `fakultas` (`ID_FAK`);

--
-- Constraints for table `sub_bahasan`
--
ALTER TABLE `sub_bahasan`
  ADD CONSTRAINT `FK_MEMILIKI_5` FOREIGN KEY (`KODE_KK`) REFERENCES `kompetensi_khusus` (`KODE_KK`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
