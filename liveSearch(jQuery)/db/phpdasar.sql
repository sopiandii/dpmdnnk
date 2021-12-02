-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2021 at 03:21 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nip` char(18) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pangkat` varchar(100) NOT NULL,
  `jabatan` varchar(250) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nip`, `nama`, `pangkat`, `jabatan`, `gambar`) VALUES
(1, '196308181986021006', 'JUMIANTO, S.Sos, MM', 'PEMBINA UTAMA MUDA, IV/c', 'KEPALA DINAS', 'male.jpg'),
(2, '197507082002121006', 'ELIRATH, ST', 'PEMBINA, IV/a', 'KABID PEMERINTAHAN DESA', 'male.jpg'),
(3, '197212192003121005', 'AMIRUDDIN, ST', 'PEMBINA, IV/a', 'KABID USAHA EKONOMI DESA & KAWASAN PERDESAAN', 'male.jpg'),
(4, '198704282006021001', 'RAMLAN APRIYADI, S.STP', 'PENATA TK.I, III/d', 'KABID PENGEMBANGAN DESA ', 'male.jpg'),
(5, '198805052007011004', 'BAU SYAHRIL, S.IP., M.A.P', 'PENATA TK.I, III/d', 'KABID KETAHANAN MASYARAKAT DESA', 'male.jpg'),
(6, '196606181991031011', 'JUMAIN,SE', 'PENATA TK.I, III/d', 'KASI KELEMBAGAAN MASYARAKAT DESA DAN LEMBAGA ADAT', 'male.jpg'),
(7, '196912312000031030', 'AMBO ASSE, S.IP, S.PKP, M.A.P', 'PENATA TK.I, III/d', 'KASI FASILITASI PEMBANGUNAN SARANA & PRASARANA ', 'male.jpg'),
(8, '197706182001122005', 'NUR ASIAH, A.Md', 'PENATA TK.I, III/d', 'KASI PENGEMBANGAN USAHA EKONOMI DESA & KAWASAN PERDESAAN', 'female.jpg'),
(9, '197707142006041013', 'RUSDAN, SE', 'PENATA TK.I, III/d', 'KASI PEMBANGUNAN USAHA EKONOMI DESA & KAWASAN PERDESAAN', 'male.jpg'),
(10, '197003182006041011', 'Ir. MUH. AKIB MAKMUR', 'PENATA TK.I, III/d', 'KASI APARATUR PEMERINTAHAN DESA DAN KELEMBAGAAN DESA', 'male.jpg'),
(11, '198808162007011001', 'ERADIAS ELIAS, S.IP', 'PENATA TK.I, III/d', 'KASI PEMBERDAYAAN DAN SWADAYA MASYARAKAT DESA', 'male.jpg'),
(12, '197501182003121005', 'SYAMSURI, S.IP', 'PENATA, III/c', 'KASI PENATAAN DAN ADMINISTRASI DESA', 'male.jpg'),
(13, '197603012005022004', 'SUHARNI, SAP', 'PENATA, III/c', 'KASI PENDAYAGUNAAN SDA & TTG', 'female.jpg'),
(14, '198409182007012001', 'RIKA SILVIANA HANDAYANI, SE', 'PENATA, III/c', 'KASUBBAG KEUANGAN', 'female.jpg'),
(15, '198502232010011006', 'FERI WAHYUDI, S.Sos', 'PENATA, III/c', 'KASI PENGELOLAAN KEUANGAN DAN ASET DESA', 'male.jpg'),
(16, '198001222011012009', 'NANCY DAMAYANTI, SE, M.A.P', 'PENATA, III/c', 'KASUBBAG UMUM & KEPEGAWAIAN', 'female.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'eko', '$2y$10$7HwZIot8kqQVc3hYusK5Se6a0AdBC4xTL59zju2ONUJ0Tn5LZXNqe'),
(3, 'admin', '$2y$10$1v2WhlR5kSCd6XR.KgoP2e6YD1lAc/GYWXm9HIZPyZ1755u4ESlQa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
