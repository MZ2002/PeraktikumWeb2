-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2023 at 10:12 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `kategori_produk`
--

INSERT INTO `kategori_produk` (`id`, `nama`) VALUES
(2, 'Gaun'),
(1, 'Kemeja');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_pemesan` varchar(45) NOT NULL,
  `alamat_pemesan` varchar(45) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(45) NOT NULL,
  `jumlah_pesanan` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `produk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `tanggal`, `nama_pemesan`, `alamat_pemesan`, `no_hp`, `email`, `jumlah_pesanan`, `deskripsi`, `produk_id`) VALUES
(1, '2023-04-08', 'Abdurrahman Ziyad', 'Depok', '082094374577', 'ziyad@gmail.com', 2, 'Pesanan Meja Belajar', 2);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kode` varchar(45) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `harga_jual` double NOT NULL,
  `harga_beli` double NOT NULL,
  `stok` int(11) NOT NULL,
  `min_stok` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori_produk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kode`, `nama`, `harga_jual`, `harga_beli`, `stok`, `min_stok`, `deskripsi`, `kategori_produk_id`) VALUES
(1, 'KMJABU01', 'Kemeja Laki-Laki Abu', 200000, 150000, 50, 5, 'Nama Barang : Kemeja, Warna : Abu, Bahan : Katun, Harga : Rp. 200.000', 1),
(2, 'KMJHTM01', 'Kemeja Laki-Laki Hitam', 200000, 150000, 70, 2, 'Nama Barang : Kemeja, Warna : Hitam, Bahan : Katun, Harga : Rp. 200.000', 1),
(3, 'GNUNGU02', 'Gaun Wanita Ungu', 1000000, 1500000, 10, 2, 'Nama Barang : Gaun Tanpa Lengan, Warna :Ungu Violet, Bahan : Glossy, Harga : Rp. 1.000.000', 2),
(4, 'GNUMRH02', 'Gaun Wanita Merah', 600000, 500000, 30, 5, 'Nama Barang : Gaun Merah, Warna : Merah, Bahan : Katun, Harga : Rp. 600.000', 2),
(5, 'GNUHTM02', 'Gaun Wanita Hitam', 800000, 700000, 50, 6, 'Nama Barang : Gaun, Warna : Hitam, Bahan : Glossy, Harga : Rp. 800.000', 2),
(6, 'GNUBNG02', 'Gaun Wanita Bunga', 800000, 700000, 30, 3, 'Nama Barang : Gaun Bunga, Warna : Bunga, Bahan : Fancy Crepe Lux, Harga : Rp. 800.000', 2),
(7, 'GNUOMB02', 'Gaun Wanita Hitam Ombak', 1500000, 1300000, 10, 2, 'Nama Barang : Gaun Ombak, Warna : Hitam, Bahan : Katun, Harga : Rp. 1.500.000', 2),
(8, 'KMJLVS01', 'Kemeja Laki-Laki Levis', 300000, 200000, 100, 10, 'Nama Barang : Kemeja, Warna : Levis, Bahan : Katun, Harga : Rp. 300.000', 1),
(9, 'KMJLVD01', 'Kemeja Laki-Laki Levis Dark', 350000, 250000, 100, 5, 'Nama Barang : Kemeja, Warna : Levis Dark, Bahan : Katun, Harga : Rp. 350.000', 1),
(10, 'KMJHJU01', 'Kemeja Laki-Laki Hijau', 300000, 200000, 100, 5, 'Nama Barang : Kemeja, Warna : Hijau, Bahan : Katun, Harga : Rp. 300.000', 1),
(11, 'KMJFLN01', 'Kemeja Laki-Laki Flanel', 300000, 250000, 200, 10, 'Nama Barang : Kemeja Flanel, Warna : Merah, Putih, Hitam, Bahan : Katun, Harga : Rp. 300.000', 1),
(12, 'GNUGLK02', 'Gaun Wanita Galaksi', 2500000, 2000000, 10, 2, 'Nama Barang : Gaun Galaksi, Warna : Galaksi, Bahan : Katun, Harga : Rp. 2.500.000', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_UNIQUE` (`nama`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_UNIQUE` (`tanggal`),
  ADD KEY `fk_pesanan_produk1_idx` (`produk_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_UNIQUE` (`kode`),
  ADD KEY `fk_produk_kategori_produk_idx` (`kategori_produk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fk_pesanan_produk1` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `fk_produk_kategori_produk` FOREIGN KEY (`kategori_produk_id`) REFERENCES `kategori_produk` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
