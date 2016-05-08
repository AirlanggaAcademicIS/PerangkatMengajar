-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Mei 2016 pada 08.03
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epbm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bacaan`
--

CREATE TABLE IF NOT EXISTS `bacaan` (
  `KODE_BACAAN` varchar(10) NOT NULL,
  `KODE_MK` varchar(10) DEFAULT NULL,
  `JUDUL` varchar(50) NOT NULL,
  `TAHUN` int(11) NOT NULL,
  `NAMA_PENULIS` varchar(50) NOT NULL,
  `NAMA_PENERBIT` varchar(25) NOT NULL,
  `KOTA_PENERBIT` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_media`
--

CREATE TABLE IF NOT EXISTS `daftar_media` (
  `KODE_MEDIA` varchar(10) NOT NULL,
  `KODE_KK` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_metode`
--

CREATE TABLE IF NOT EXISTS `daftar_metode` (
  `KODE_METODE` varchar(10) NOT NULL,
  `KODE_KK` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_ss`
--

CREATE TABLE IF NOT EXISTS `daftar_ss` (
  `KODE_SS` varchar(10) NOT NULL,
  `KODE_MK` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `NIP` varchar(20) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `PASSWORD` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fakultas`
--

CREATE TABLE IF NOT EXISTS `fakultas` (
  `ID_FAK` varchar(10) NOT NULL,
  `NAMA_FAK` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fakultas`
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
-- Struktur dari tabel `kompetensi_khusus`
--

CREATE TABLE IF NOT EXISTS `kompetensi_khusus` (
  `KODE_KK` varchar(10) NOT NULL,
  `KODE_MK` varchar(10) NOT NULL,
  `NAMA_KK` varchar(35) NOT NULL,
  `NAMA_PB` varchar(35) NOT NULL,
  `WAKTU` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_kuliah`
--

CREATE TABLE IF NOT EXISTS `mata_kuliah` (
  `KODE_MK` varchar(10) NOT NULL,
  `NIP` varchar(20) NOT NULL,
  `KODE_PRODI` varchar(10) NOT NULL,
  `NAMA_MK` varchar(50) NOT NULL,
  `BEBAN_STUDI` int(11) NOT NULL,
  `SEMESTER` int(11) NOT NULL,
  `KOMPETENSI` text,
  `DESKRIPSI` text,
  `HARI` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `KODE_MEDIA` varchar(10) NOT NULL,
  `NAMA_MEDIA` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `media`
--

INSERT INTO `media` (`KODE_MEDIA`, `NAMA_MEDIA`) VALUES
('MDA1', 'Proyektor'),
('MDA2', 'Papan Tulis'),
('MDA3', 'Bahan Ajar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mengajar`
--

CREATE TABLE IF NOT EXISTS `mengajar` (
  `NIP` varchar(20) NOT NULL,
  `KODE_MK` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `metode`
--

CREATE TABLE IF NOT EXISTS `metode` (
  `KODE_METODE` varchar(10) NOT NULL,
  `NAMA_METODE` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `metode`
--

INSERT INTO `metode` (`KODE_METODE`, `NAMA_METODE`) VALUES
('MTD1', 'Ceramah'),
('MTD2', 'Tanya Jawab'),
('MTD3', 'Presentasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prasyarat`
--

CREATE TABLE IF NOT EXISTS `prasyarat` (
  `KODE_MK` varchar(10) NOT NULL,
  `MAT_KODE_MK` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `program_studi`
--

CREATE TABLE IF NOT EXISTS `program_studi` (
  `KODE_PRODI` varchar(10) NOT NULL,
  `ID_FAK` varchar(10) NOT NULL,
  `NAMA_PRODI` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `program_studi`
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
-- Struktur dari tabel `softskill`
--

CREATE TABLE IF NOT EXISTS `softskill` (
  `KODE_SS` varchar(10) NOT NULL,
  `NAMA_SS` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `softskill`
--

INSERT INTO `softskill` (`KODE_SS`, `NAMA_SS`) VALUES
('SS1', 'Kejujuran'),
('SS2', 'Kedisiplinan'),
('SS3', 'Keaktifan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_bahasan`
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
-- Indexes for table `daftar_media`
--
ALTER TABLE `daftar_media`
  ADD PRIMARY KEY (`KODE_MEDIA`,`KODE_KK`),
  ADD KEY `FK_DAFTAR_MEDIA2` (`KODE_KK`);

--
-- Indexes for table `daftar_metode`
--
ALTER TABLE `daftar_metode`
  ADD PRIMARY KEY (`KODE_METODE`,`KODE_KK`),
  ADD KEY `FK_DAFTAR_METODE2` (`KODE_KK`);

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
  ADD KEY `FK_MEMILIKI_2` (`KODE_PRODI`),
  ADD KEY `FK_PENANGGUNG_JAWAB` (`NIP`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`KODE_MEDIA`);

--
-- Indexes for table `mengajar`
--
ALTER TABLE `mengajar`
  ADD PRIMARY KEY (`NIP`,`KODE_MK`),
  ADD KEY `FK_MENGAJAR2` (`KODE_MK`);

--
-- Indexes for table `metode`
--
ALTER TABLE `metode`
  ADD PRIMARY KEY (`KODE_METODE`);

--
-- Indexes for table `prasyarat`
--
ALTER TABLE `prasyarat`
  ADD PRIMARY KEY (`KODE_MK`,`MAT_KODE_MK`),
  ADD KEY `FK_PRASYARAT2` (`MAT_KODE_MK`);

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
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bacaan`
--
ALTER TABLE `bacaan`
  ADD CONSTRAINT `FK_MEMILIKI_3` FOREIGN KEY (`KODE_MK`) REFERENCES `mata_kuliah` (`KODE_MK`);

--
-- Ketidakleluasaan untuk tabel `daftar_media`
--
ALTER TABLE `daftar_media`
  ADD CONSTRAINT `FK_DAFTAR_MEDIA` FOREIGN KEY (`KODE_MEDIA`) REFERENCES `media` (`KODE_MEDIA`),
  ADD CONSTRAINT `FK_DAFTAR_MEDIA2` FOREIGN KEY (`KODE_KK`) REFERENCES `kompetensi_khusus` (`KODE_KK`);

--
-- Ketidakleluasaan untuk tabel `daftar_metode`
--
ALTER TABLE `daftar_metode`
  ADD CONSTRAINT `FK_DAFTAR_METODE` FOREIGN KEY (`KODE_METODE`) REFERENCES `metode` (`KODE_METODE`),
  ADD CONSTRAINT `FK_DAFTAR_METODE2` FOREIGN KEY (`KODE_KK`) REFERENCES `kompetensi_khusus` (`KODE_KK`);

--
-- Ketidakleluasaan untuk tabel `daftar_ss`
--
ALTER TABLE `daftar_ss`
  ADD CONSTRAINT `FK_DAFTAR_SS` FOREIGN KEY (`KODE_SS`) REFERENCES `softskill` (`KODE_SS`),
  ADD CONSTRAINT `FK_DAFTAR_SS2` FOREIGN KEY (`KODE_MK`) REFERENCES `mata_kuliah` (`KODE_MK`);

--
-- Ketidakleluasaan untuk tabel `kompetensi_khusus`
--
ALTER TABLE `kompetensi_khusus`
  ADD CONSTRAINT `FK_MEMILIKI_4` FOREIGN KEY (`KODE_MK`) REFERENCES `mata_kuliah` (`KODE_MK`);

--
-- Ketidakleluasaan untuk tabel `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD CONSTRAINT `FK_MEMILIKI_2` FOREIGN KEY (`KODE_PRODI`) REFERENCES `program_studi` (`KODE_PRODI`),
  ADD CONSTRAINT `FK_PENANGGUNG_JAWAB` FOREIGN KEY (`NIP`) REFERENCES `dosen` (`NIP`);

--
-- Ketidakleluasaan untuk tabel `mengajar`
--
ALTER TABLE `mengajar`
  ADD CONSTRAINT `FK_MENGAJAR` FOREIGN KEY (`NIP`) REFERENCES `dosen` (`NIP`),
  ADD CONSTRAINT `FK_MENGAJAR2` FOREIGN KEY (`KODE_MK`) REFERENCES `mata_kuliah` (`KODE_MK`);

--
-- Ketidakleluasaan untuk tabel `prasyarat`
--
ALTER TABLE `prasyarat`
  ADD CONSTRAINT `FK_PRASYARAT` FOREIGN KEY (`KODE_MK`) REFERENCES `mata_kuliah` (`KODE_MK`),
  ADD CONSTRAINT `FK_PRASYARAT2` FOREIGN KEY (`MAT_KODE_MK`) REFERENCES `mata_kuliah` (`KODE_MK`);

--
-- Ketidakleluasaan untuk tabel `program_studi`
--
ALTER TABLE `program_studi`
  ADD CONSTRAINT `FK_MEMILIKI_1` FOREIGN KEY (`ID_FAK`) REFERENCES `fakultas` (`ID_FAK`);

--
-- Ketidakleluasaan untuk tabel `sub_bahasan`
--
ALTER TABLE `sub_bahasan`
  ADD CONSTRAINT `FK_MEMILIKI_5` FOREIGN KEY (`KODE_KK`) REFERENCES `kompetensi_khusus` (`KODE_KK`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
