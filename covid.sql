-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Apr 2020 pada 16.59
-- Versi Server: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `nama`, `username`, `password`) VALUES
(1, 'mayla', 'dokter', 'dokter'),
(2, 'zoya', 'suster', 'suster'),
(3, 'rachel', 'bidan', 'bidan'),
(6, 'Acha ', 'aca', 'aca');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(30) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `umur` varchar(30) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `suhu` int(30) NOT NULL,
  `petugas` varchar(255) NOT NULL,
  `rs` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama`, `umur`, `jenis`, `alamat`, `suhu`, `petugas`, `rs`, `tgl`, `status`) VALUES
(1, 'Zoya', '30', 'Perempuan', 'Jakarta', 38, 'Zayn', 'RSI Anggrek', '2020-04-23', 'ODP'),
(10, 'Zayn', '20 tahun', 'Laki-Laki', 'Jakarta', 39, 'Joy', 'RS Jakarta', '2020-04-30', 'PDP');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id_prov` int(30) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kasus` varchar(255) NOT NULL,
  `sembuh` varchar(255) NOT NULL,
  `meninggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id_prov`, `provinsi`, `kasus`, `sembuh`, `meninggal`) VALUES
(1, 'BALI', '150', '42', '3'),
(2, 'DKI JAKARTA', '3.260', '286', '298'),
(3, 'JAWA BARAT', '756', '75', '68'),
(4, 'JAWA TIMUR', '603', '100', '56'),
(6, 'JAWA TENGAH', '449', '51', '44'),
(7, 'SULAWESI SELATAN', '374', '73', '30'),
(8, 'BANTEN', '341', '17', '35'),
(9, 'PAPUA', '118', '28', '6'),
(10, 'KALIMANTAN SELATAN', '98', '9', '6'),
(13, 'NUSA TENGGARA BARAT', '93', '11', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_prov`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_prov` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
