-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 27, 2020 at 04:58 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `sides`
--

-- --------------------------------------------------------

--
-- Table structure for table `dapen`
--

CREATE TABLE `dapen` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dapen`
--

INSERT INTO `dapen` (`id`, `nik`, `nama`, `ttl`, `alamat`, `agama`, `status`, `pekerjaan`, `gambar`) VALUES
(1, '4', 'Rizki', 'Bireuen, 30 Juni 1990', 'Bireuen', 'Islam', 'Kawin', 'Wiraswasta', '20200304_215923.jpg'),
(2, '1', 'Akifa Naila Hidayat', 'Bireuen, 15 Januari 2015', 'Seuleumbah', 'Islam', 'Belum Kawin', 'Siswa TK', '20200304_102311.jpg'),
(4, '6', 'Rahmat Hidayat', 'Bireuen, 30 Juni 1988', 'Seuleumbah', 'Islam', 'Kawin', 'PD', '20200304_215942.jpg'),
(5, '2', 'Mikaila', 'Bireuen, 3 Juli 2000', 'Paya Jagat', 'Islam', 'Belum Kawin', 'Balita', '20200304_215942.jpg'),
(7, '3', 'Mukhlis', 'Bireuen, 30 feb 1987', 'Geureugok', 'Islam', 'Kawin', 'PDP', '20200304_220026.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gades`
--

CREATE TABLE `gades` (
  `id` int(11) NOT NULL,
  `nm_kegiatan` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `ket` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gades`
--

INSERT INTO `gades` (`id`, `nm_kegiatan`, `tahun`, `ket`, `gambar`) VALUES
(1, 'Pelatihan Ibu PKK', '2016', 'Ibu Pkk sangat antusias membuat tas rajut dalam pelatihan yang diselenggarakan oleh Pemerintah Desa Seuleumbah', '3.jpg'),
(2, 'Pembangunan Box Culvert', '2015', 'Masyarakat sangat antusias mengerjakan box culvert yang dibangun dengan dana desa dengan menerapkan pola PKT', '1.jpg'),
(3, 'Gotong Royong', '2017', 'Meski dana sudah banyak masuk ke desa, masyarakat tetap mengedepankan gotong royong, terlihat di gambar masyarakat melaksanakan acara persiapan penyambutan maulid nabi', '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pfdesa`
--

CREATE TABLE `pfdesa` (
  `id` int(11) NOT NULL,
  `nm_desa` varchar(100) NOT NULL,
  `nm_kecamatan` varchar(100) NOT NULL,
  `nm_kabupaten` varchar(100) NOT NULL,
  `nm_kades` varchar(100) NOT NULL,
  `nm_sekdes` varchar(100) NOT NULL,
  `informasi` text NOT NULL,
  `nm_bendahara` varchar(100) NOT NULL,
  `nm_kaum` varchar(100) NOT NULL,
  `nm_kasipem` varchar(100) NOT NULL,
  `nm_kasipemb` varchar(100) NOT NULL,
  `nm_kasikes` varchar(100) NOT NULL,
  `nm_kadus` varchar(100) NOT NULL,
  `nm_bpd` varchar(100) NOT NULL,
  `nm_imam` varchar(100) NOT NULL,
  `nm_pmd` varchar(100) NOT NULL,
  `nm_pkk` varchar(100) NOT NULL,
  `logodesa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pfdesa`
--

INSERT INTO `pfdesa` (`id`, `nm_desa`, `nm_kecamatan`, `nm_kabupaten`, `nm_kades`, `nm_sekdes`, `informasi`, `nm_bendahara`, `nm_kaum`, `nm_kasipem`, `nm_kasipemb`, `nm_kasikes`, `nm_kadus`, `nm_bpd`, `nm_imam`, `nm_pmd`, `nm_pkk`, `logodesa`) VALUES
(1, 'Seuleumbah', 'Jeumpa', 'Bireuen', 'M Hasan Usman', 'Nuraini', 'Desa Seuleumbah memiliki potensi sumber daya alam yang luar biasa seperti potensi sawah, kebun, waduk dan lain sebagainya', '', '', '', '', '', '', '', '', '', '', 'logo.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dapen`
--
ALTER TABLE `dapen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gades`
--
ALTER TABLE `gades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pfdesa`
--
ALTER TABLE `pfdesa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dapen`
--
ALTER TABLE `dapen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gades`
--
ALTER TABLE `gades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pfdesa`
--
ALTER TABLE `pfdesa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
