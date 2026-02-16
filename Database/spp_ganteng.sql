-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2026 at 01:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spp_ganteng`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(5) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jurusan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`, `jurusan`) VALUES
(1, 'X RPL 1', 'Rekayasa Perangkat Lunak'),
(2, 'X RPL 2', 'Rekayasa Perangkat Lunak'),
(3, 'X RPL 2', 'Rekayasa Perangkat Lunak'),
(4, 'X RPL 3', 'Rekayasa Perangkat Lunak'),
(5, 'XI RPL 2', 'Rekayasa Perangkat Lunak'),
(6, 'XI RPL 3', 'Rekayasa Perangkat Lunak'),
(7, 'XII RPL 2', 'Rekayasa Perangkat Lunak'),
(8, 'XII RPL 3', 'Rekayasa Perangkat Lunak'),
(9, 'X MM 1', 'Multimedia'),
(10, 'X MM 2', 'Multimedia'),
(11, 'X MM 3', 'Multimedia'),
(12, 'XI MM 1', 'Multimedia'),
(13, 'XI MM 2', 'Multimedia'),
(14, 'XI MM 3', 'Multimedia'),
(15, 'XII MM 1', 'Multimedia'),
(16, 'XII MM 2', 'Multimedia'),
(17, 'XII MM 3', 'Multimedia'),
(18, 'X TKJ 1', 'Teknik Komputer dan Jarin'),
(19, 'X TKJ 2', 'Teknik Komputer dan Jarin'),
(20, 'X TKJ 3', 'Teknik Komputer dan Jarin'),
(21, 'XI TKJ 1', 'Teknik Komputer dan Jarin'),
(22, 'XI TKJ 2', 'Teknik Komputer dan Jarin'),
(23, 'XI TKJ 3', 'Teknik Komputer dan Jarin'),
(24, 'XII TKJ 1', 'Teknik Komputer dan Jarin'),
(25, 'XII TKJ 2', 'Teknik Komputer dan Jarin'),
(26, 'XII TKJ 3', 'Teknik Komputer dan Jarin'),
(27, 'X DKV 1', 'Desain Komunikasi Visual'),
(28, 'X DKV 2', 'Desain Komunikasi Visual'),
(29, 'X DKV 3', 'Desain Komunikasi Visual'),
(30, 'XI DKV 1', 'Desain Komunikasi Visual'),
(31, 'XI DKV 2', 'Desain Komunikasi Visual'),
(32, 'XI DKV 3', 'Desain Komunikasi Visual'),
(33, 'XII DKV 1', 'Desain Komunikasi Visual'),
(34, 'XII DKV 2', 'Desain Komunikasi Visual'),
(35, 'XII DKV 3', 'Desain Komunikasi Visual'),
(36, 'X BD 1', 'Bisnis Digital'),
(37, 'XI BD 1', 'Bisnis Digital'),
(38, 'XII BD 1', 'Bisnis Digital');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_bayar` int(5) NOT NULL,
  `nis` int(5) NOT NULL,
  `id_kelas` int(5) NOT NULL,
  `id_petugas` int(5) DEFAULT NULL,
  `jatuh_tempo` date DEFAULT NULL,
  `tanggal_bayar` date DEFAULT NULL,
  `bulan` varchar(25) DEFAULT NULL,
  `nominal` int(15) DEFAULT NULL,
  `keterangan` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_bayar`, `nis`, `id_kelas`, `id_petugas`, `jatuh_tempo`, `tanggal_bayar`, `bulan`, `nominal`, `keterangan`) VALUES
(652, 2, 1, NULL, '2026-08-10', NULL, 'August 2026', 900000, 'BELUM LUNAS'),
(653, 2, 1, NULL, '2026-09-10', NULL, 'September 2026', 900000, 'BELUM LUNAS'),
(654, 2, 1, NULL, '2026-10-10', NULL, 'October 2026', 900000, 'BELUM LUNAS'),
(655, 2, 1, NULL, '2026-11-10', NULL, 'November 2026', 900000, 'BELUM LUNAS'),
(656, 2, 1, NULL, '2026-12-10', NULL, 'December 2026', 900000, 'BELUM LUNAS'),
(657, 2, 1, NULL, '2027-01-10', NULL, 'January 2027', 900000, 'BELUM LUNAS'),
(658, 2, 1, NULL, '2027-02-10', NULL, 'February 2027', 900000, 'BELUM LUNAS'),
(659, 2, 1, NULL, '2027-03-10', NULL, 'March 2027', 900000, 'BELUM LUNAS'),
(660, 2, 1, NULL, '2027-04-10', NULL, 'April 2027', 900000, 'BELUM LUNAS'),
(661, 2, 1, NULL, '2027-05-10', NULL, 'May 2027', 900000, 'BELUM LUNAS'),
(662, 2, 1, NULL, '2027-06-10', NULL, 'June 2027', 900000, 'BELUM LUNAS'),
(663, 2, 1, NULL, '2027-07-10', NULL, 'July 2027', 900000, 'BELUM LUNAS'),
(664, 2, 1, NULL, '2027-08-10', NULL, 'August 2027', 900000, 'BELUM LUNAS'),
(665, 2, 1, NULL, '2027-09-10', NULL, 'September 2027', 900000, 'BELUM LUNAS'),
(666, 2, 1, NULL, '2027-10-10', NULL, 'October 2027', 900000, 'BELUM LUNAS'),
(667, 2, 1, NULL, '2027-11-10', NULL, 'November 2027', 900000, 'BELUM LUNAS'),
(668, 2, 1, NULL, '2027-12-10', NULL, 'December 2027', 900000, 'BELUM LUNAS'),
(669, 2, 1, NULL, '2028-01-10', NULL, 'January 2028', 900000, 'BELUM LUNAS'),
(670, 2, 1, NULL, '2028-02-10', NULL, 'February 2028', 900000, 'BELUM LUNAS'),
(671, 2, 1, NULL, '2028-03-10', NULL, 'March 2028', 900000, 'BELUM LUNAS'),
(672, 2, 1, NULL, '2028-04-10', NULL, 'April 2028', 900000, 'BELUM LUNAS'),
(673, 2, 1, NULL, '2028-05-10', NULL, 'May 2028', 900000, 'BELUM LUNAS'),
(674, 2, 1, NULL, '2028-06-10', NULL, 'June 2028', 900000, 'BELUM LUNAS'),
(675, 2, 1, NULL, '2028-07-10', NULL, 'July 2028', 900000, 'BELUM LUNAS'),
(676, 2, 1, NULL, '2028-08-10', NULL, 'August 2028', 900000, 'BELUM LUNAS'),
(677, 2, 1, NULL, '2028-09-10', NULL, 'September 2028', 900000, 'BELUM LUNAS'),
(678, 2, 1, NULL, '2028-10-10', NULL, 'October 2028', 900000, 'BELUM LUNAS'),
(679, 2, 1, NULL, '2028-11-10', NULL, 'November 2028', 900000, 'BELUM LUNAS'),
(680, 2, 1, NULL, '2028-12-10', NULL, 'December 2028', 900000, 'BELUM LUNAS'),
(681, 2, 1, NULL, '2029-01-10', NULL, 'January 2029', 900000, 'BELUM LUNAS'),
(682, 2, 1, NULL, '2029-02-10', NULL, 'February 2029', 900000, 'BELUM LUNAS'),
(683, 2, 1, NULL, '2029-03-10', NULL, 'March 2029', 900000, 'BELUM LUNAS'),
(684, 2, 1, NULL, '2029-04-10', NULL, 'April 2029', 900000, 'BELUM LUNAS'),
(685, 2, 1, NULL, '2029-05-10', NULL, 'May 2029', 900000, 'BELUM LUNAS'),
(686, 2, 1, NULL, '2029-06-10', NULL, 'June 2029', 900000, 'BELUM LUNAS'),
(687, 2, 1, NULL, '2029-07-10', NULL, 'July 2029', 900000, 'BELUM LUNAS'),
(688, 3, 36, 1, '2020-08-10', '2026-01-03', 'August 2020', 650000, 'LUNAS'),
(689, 3, 36, NULL, '2020-09-10', NULL, 'September 2020', 650000, 'BELUM LUNAS'),
(690, 3, 36, NULL, '2020-10-10', NULL, 'October 2020', 650000, 'BELUM LUNAS'),
(691, 3, 36, NULL, '2020-11-10', NULL, 'November 2020', 650000, 'BELUM LUNAS'),
(692, 3, 36, NULL, '2020-12-10', NULL, 'December 2020', 650000, 'BELUM LUNAS'),
(693, 3, 36, NULL, '2021-01-10', NULL, 'January 2021', 650000, 'BELUM LUNAS'),
(694, 3, 36, NULL, '2021-02-10', NULL, 'February 2021', 650000, 'BELUM LUNAS'),
(695, 3, 36, NULL, '2021-03-10', NULL, 'March 2021', 650000, 'BELUM LUNAS'),
(696, 3, 36, NULL, '2021-04-10', NULL, 'April 2021', 650000, 'BELUM LUNAS'),
(697, 3, 36, NULL, '2021-05-10', NULL, 'May 2021', 650000, 'BELUM LUNAS'),
(698, 3, 36, NULL, '2021-06-10', NULL, 'June 2021', 650000, 'BELUM LUNAS'),
(699, 3, 36, NULL, '2021-07-10', NULL, 'July 2021', 650000, 'BELUM LUNAS'),
(700, 3, 36, NULL, '2021-08-10', NULL, 'August 2021', 650000, 'BELUM LUNAS'),
(701, 3, 36, NULL, '2021-09-10', NULL, 'September 2021', 650000, 'BELUM LUNAS'),
(702, 3, 36, NULL, '2021-10-10', NULL, 'October 2021', 650000, 'BELUM LUNAS'),
(703, 3, 36, NULL, '2021-11-10', NULL, 'November 2021', 650000, 'BELUM LUNAS'),
(704, 3, 36, NULL, '2021-12-10', NULL, 'December 2021', 650000, 'BELUM LUNAS'),
(705, 3, 36, NULL, '2022-01-10', NULL, 'January 2022', 650000, 'BELUM LUNAS'),
(706, 3, 36, NULL, '2022-02-10', NULL, 'February 2022', 650000, 'BELUM LUNAS'),
(707, 3, 36, NULL, '2022-03-10', NULL, 'March 2022', 650000, 'BELUM LUNAS'),
(708, 3, 36, NULL, '2022-04-10', NULL, 'April 2022', 650000, 'BELUM LUNAS'),
(709, 3, 36, NULL, '2022-05-10', NULL, 'May 2022', 650000, 'BELUM LUNAS'),
(710, 3, 36, NULL, '2022-06-10', NULL, 'June 2022', 650000, 'BELUM LUNAS'),
(711, 3, 36, NULL, '2022-07-10', NULL, 'July 2022', 650000, 'BELUM LUNAS'),
(712, 3, 36, NULL, '2022-08-10', NULL, 'August 2022', 650000, 'BELUM LUNAS'),
(713, 3, 36, NULL, '2022-09-10', NULL, 'September 2022', 650000, 'BELUM LUNAS'),
(714, 3, 36, NULL, '2022-10-10', NULL, 'October 2022', 650000, 'BELUM LUNAS'),
(715, 3, 36, NULL, '2022-11-10', NULL, 'November 2022', 650000, 'BELUM LUNAS'),
(716, 3, 36, NULL, '2022-12-10', NULL, 'December 2022', 650000, 'BELUM LUNAS'),
(717, 3, 36, NULL, '2023-01-10', NULL, 'January 2023', 650000, 'BELUM LUNAS'),
(718, 3, 36, NULL, '2023-02-10', NULL, 'February 2023', 650000, 'BELUM LUNAS'),
(719, 3, 36, NULL, '2023-03-10', NULL, 'March 2023', 650000, 'BELUM LUNAS'),
(720, 3, 36, NULL, '2023-04-10', NULL, 'April 2023', 650000, 'BELUM LUNAS'),
(721, 3, 36, NULL, '2023-05-10', NULL, 'May 2023', 650000, 'BELUM LUNAS'),
(722, 3, 36, NULL, '2023-06-10', NULL, 'June 2023', 650000, 'BELUM LUNAS'),
(723, 3, 36, NULL, '2023-07-10', NULL, 'July 2023', 650000, 'BELUM LUNAS');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(5) NOT NULL,
  `nama_petugas` varchar(64) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `password` varchar(64) DEFAULT NULL,
  `level_user` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `telepon`, `alamat`, `password`, `level_user`) VALUES
(1, 'admin', '89685868', 'Jl. Genshin Impact No. 01', 'admin', 'admin'),
(11, 'petugas', '08975775', 'Jl. Nagrog', 'petugas', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(5) NOT NULL,
  `id_spp` int(5) NOT NULL,
  `id_kelas` int(5) NOT NULL,
  `nama_siswa` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `jatuh_tempo` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `id_spp`, `id_kelas`, `nama_siswa`, `password`, `jenis_kelamin`, `telepon`, `alamat`, `jatuh_tempo`) VALUES
(2, 6, 1, 'Von Sisi', 'sisi', 'Perempuan', '08975757575', 'Jl. Bogor', '2026-08-10'),
(3, 1, 36, 'Bagas Arya Putra', 'bagas', 'Laki-laki', '09575757', 'Jl. Bandung', '2020-08-10');

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `id_spp` int(5) NOT NULL,
  `nominal` text NOT NULL,
  `tahun_ajaran` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`id_spp`, `nominal`, `tahun_ajaran`) VALUES
(1, '650000', 2020),
(2, '700000', 2021),
(3, '750000', 2022),
(4, '800000', 2024),
(5, '850000', 2025),
(6, '900000', 2026);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_bayar`),
  ADD KEY `fk_pembayaran_petugas` (`id_petugas`),
  ADD KEY `fk_pembayaran_nis` (`nis`),
  ADD KEY `fk_pembayaran_kelas` (`id_kelas`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `fk_siswakelas` (`id_kelas`),
  ADD KEY `fk_siswaspp` (`id_spp`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id_spp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_bayar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=724;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `nis` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `spp`
--
ALTER TABLE `spp`
  MODIFY `id_spp` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `fk_pembayaran_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  ADD CONSTRAINT `fk_pembayaran_nis` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`),
  ADD CONSTRAINT `fk_pembayaran_petugas` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `fk_siswakelas` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  ADD CONSTRAINT `fk_siswaspp` FOREIGN KEY (`id_spp`) REFERENCES `spp` (`id_spp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
