-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2018 at 08:59 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `percetakan`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(10) NOT NULL,
  `nm_pelanggan` varchar(50) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `stts` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nm_pelanggan`, `no_telp`, `alamat`, `stts`) VALUES
(1, 'nurul fadilah', '0896563242323', 'jl. sidodadi RT.03/RW03 Jatibarang, mijen', '1'),
(2, 'yoga arif wibowo', '085464646', 'jl. merak no.1', '1'),
(3, '$nm_pelanggan', '$no_telp', '$alamat', '0'),
(4, 'Anggi Wijaya Kusuma', '8888888888', 'jl. Dasudewa No3', '1');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `kd_pembayaran` int(11) NOT NULL,
  `kd_pesanan` int(10) NOT NULL,
  `id_pelanggan` int(10) NOT NULL,
  `bukti_pembayaran` varchar(100) NOT NULL,
  `tgl_pembayaran` varchar(12) NOT NULL,
  `stts` enum('1','2','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`kd_pembayaran`, `kd_pesanan`, `id_pelanggan`, `bukti_pembayaran`, `tgl_pembayaran`, `stts`) VALUES
(1, 3, 1, 'upload_pesanan/3041list-bayar.jpg', '30-07-2018', '1'),
(2, 2, 1, 'upload_pesanan/4139sapi.jpg', '31-07-2018', '2');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `kd_pesanan` int(10) NOT NULL,
  `id_pelanggan` int(10) NOT NULL,
  `kd_produk` int(5) NOT NULL,
  `desain_pesanan` varchar(100) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `tgl_pesan` varchar(12) NOT NULL,
  `total_bayar_pesanan` int(12) NOT NULL,
  `stts` enum('1','2','3','4','5','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`kd_pesanan`, `id_pelanggan`, `kd_produk`, `desain_pesanan`, `jumlah`, `tgl_pesan`, `total_bayar_pesanan`, `stts`) VALUES
(2, 1, 2, 'upload_pesanan/9626kucing.jpg', 100, '27-07-2018', 2000000, '2'),
(3, 1, 2, 'upload_pesanan/3332singa.jpg', 10, '27-07-2018', 200000, '4');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `kd_produk` int(5) NOT NULL,
  `nm_produk` varchar(50) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `stts` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`kd_produk`, `nm_produk`, `harga`, `gambar`, `keterangan`, `stts`) VALUES
(1, 'Undangan', '15000', '', 'keterangan', '0'),
(2, 'Kalender', '20000', 'upload_produk/429presentasi.jpg', 'bisa pesan banyak', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `id_pelanggan` int(10) NOT NULL,
  `nm_user` varchar(50) NOT NULL,
  `sandi` varchar(50) NOT NULL,
  `hak_akses` enum('1','2','3') NOT NULL,
  `stts` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_pelanggan`, `nm_user`, `sandi`, `hak_akses`, `stts`) VALUES
(1, 1, 'koko', 'koko', '2', '1'),
(2, 2, '123', '123', '2', '1'),
(3, 3, '$nm_user', '$sandi', '2', '1'),
(4, 4, 'kusuma', '321', '2', '1'),
(5, 0, 'yono', 'yono', '1', '1'),
(6, 0, 'rina321', 'rina123', '3', '0'),
(7, 0, 'amin', 'amin', '3', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`kd_pembayaran`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`kd_pesanan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kd_produk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `kd_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `kd_pesanan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `kd_produk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
