-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Jul 2018 pada 18.11
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelas_web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `efisiensi_pakan`
--

CREATE TABLE `efisiensi_pakan` (
  `id_trans` int(5) NOT NULL,
  `id_ikan` int(5) NOT NULL,
  `id_jenis` int(5) NOT NULL,
  `id_pakan` int(5) NOT NULL,
  `bulan` int(11) NOT NULL,
  `Wt` int(11) NOT NULL,
  `W0` int(11) NOT NULL,
  `D` int(11) NOT NULL,
  `F` int(11) NOT NULL,
  `E` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `efisiensi_pakan`
--

INSERT INTO `efisiensi_pakan` (`id_trans`, `id_ikan`, `id_jenis`, `id_pakan`, `bulan`, `Wt`, `W0`, `D`, `F`, `E`) VALUES
(231, 232, 233, 234, 5, 20, 20, 20, 22, 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_gurame`
--

CREATE TABLE `jenis_gurame` (
  `id_jenisgur` char(3) NOT NULL,
  `nama_gur` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_gurame`
--

INSERT INTO `jenis_gurame` (`id_jenisgur`, `nama_gur`) VALUES
('004', 'Gurame Jepun'),
('005', 'GurameMU');

-- --------------------------------------------------------

--
-- Struktur dari tabel `olahan`
--

CREATE TABLE `olahan` (
  `id_olahan` char(2) NOT NULL,
  `nama_olahan` varchar(20) NOT NULL,
  `jenis_olahan` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `id_jenis` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `olahan`
--

INSERT INTO `olahan` (`id_olahan`, `nama_olahan`, `jenis_olahan`, `harga`, `id_jenis`) VALUES
('00', 'ikan bakar', 'makanan', 65000, '001'),
('01', 'Kerupuk', 'Makanan', 30000, '002'),
('02', 'Abon', 'Makanan', 20000, '001'),
('03', 'Pepes Ikan', 'Makanan', 19000, '002');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pakan`
--

CREATE TABLE `pakan` (
  `id_pakan` char(4) NOT NULL,
  `nama_pakan` varchar(20) NOT NULL,
  `jenis_pakan` varchar(20) NOT NULL,
  `id_jenis` char(3) NOT NULL,
  `protein` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pakan`
--

INSERT INTO `pakan` (`id_pakan`, `nama_pakan`, `jenis_pakan`, `id_jenis`, `protein`) VALUES
('1111', 'Daun Talas', 'Tumbuhan', '001', '30'),
('1112', 'Ikan Teri', 'Hewan', '002', '40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendapatan`
--

CREATE TABLE `pendapatan` (
  `id_pendapatan` varchar(20) NOT NULL,
  `pendapatan` int(11) NOT NULL,
  `modal` int(11) NOT NULL,
  `tot_untung` int(11) NOT NULL,
  `pajak` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendapatan`
--

INSERT INTO `pendapatan` (`id_pendapatan`, `pendapatan`, `modal`, `tot_untung`, `pajak`) VALUES
('63', 200, 100, 100, 0),
('666', 50000, 10000, 40000, 4000),
('72', 200, 100, 100, 0),
('77777', 50000, 10000, 40000, 4000),
('82', 200, 100, 0, 0),
('8231123', 900, 100, 800, 40),
('83', 200, 100, 100, 0),
('8564', 25000, 10000, 15000, 0),
('99', 25000, 10000, 15000, 1500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petani`
--

CREATE TABLE `petani` (
  `id_petani` varchar(10) NOT NULL,
  `nama_petani` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petani`
--

INSERT INTO `petani` (`id_petani`, `nama_petani`, `alamat`) VALUES
('999', 'Budia', 'Jetis Wetan'),
('8234', 'ss', 'sd'),
('01', 'hasan', 'sda'),
('927', 'qqqqqa', 'oooo'),
('321', 'aa', 'asasas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produksi`
--

CREATE TABLE `produksi` (
  `id_ikan` varchar(11) NOT NULL,
  `jenis_ikan` varchar(50) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `untung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produksi`
--

INSERT INTO `produksi` (`id_ikan`, `jenis_ikan`, `harga_jual`, `harga_beli`, `untung`) VALUES
('002', 'Ajax', 30000, 25000, 5000),
('1', 'Soang', 40000, 20000, 10000),
('1238', 'ajshd', 300, 10, 290);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(8) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `Alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `Alamat`) VALUES
('33221', 'Muhammad Asep', 'asep', '123', ''),
('33222', 'Ilham Fatkur', 'ilham', '123', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_gurame`
--
ALTER TABLE `jenis_gurame`
  ADD PRIMARY KEY (`id_jenisgur`);

--
-- Indexes for table `olahan`
--
ALTER TABLE `olahan`
  ADD PRIMARY KEY (`id_olahan`);

--
-- Indexes for table `pakan`
--
ALTER TABLE `pakan`
  ADD PRIMARY KEY (`id_pakan`);

--
-- Indexes for table `pendapatan`
--
ALTER TABLE `pendapatan`
  ADD PRIMARY KEY (`id_pendapatan`);

--
-- Indexes for table `produksi`
--
ALTER TABLE `produksi`
  ADD PRIMARY KEY (`id_ikan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
