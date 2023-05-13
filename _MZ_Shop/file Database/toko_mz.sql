-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Bulan Mei 2023 pada 17.13
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_mz`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `kategori_produk`
--

INSERT INTO `kategori_produk` (`id`, `nama`) VALUES
(1, 'Baju'),
(2, 'Sepatu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
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
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `tanggal`, `nama_pemesan`, `alamat_pemesan`, `no_hp`, `email`, `jumlah_pesanan`, `deskripsi`, `produk_id`) VALUES
(1, '2023-04-08', 'Abdurrahman Ziyad', 'Depok', '082094374577', 'ziyad@gmail.com', 2, 'Pesanan Meja Belajar', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
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
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `kode`, `nama`, `harga_jual`, `harga_beli`, `stok`, `min_stok`, `deskripsi`, `kategori_produk_id`) VALUES
(1, 'JKT01', 'Jaket Kasual', 200000, 100000, 100, 1, 'Baju pria ini adalah pilihan yang sempurna untuk menambah koleksi pakaian Anda. Baju ini terbuat dari kain katun berkualitas tinggi yang lembut dan nyaman digunakan. Desainnya yang simple namun stylish membuatnya mudah dipadukan dengan berbagai jenis bawahan seperti celana jeans. Dengan tampilan yang minimalis dan elegan, baju ini cocok untuk dipakai dalam berbagai acara formal atau informal.', 1),
(2, 'JKT02', 'Jaket Varsity', 250000, 150000, 100, 1, 'Baju vartisi ini adalah pilihan yang sempurna untuk menambah koleksi pakaian Anda. Baju ini terbuat dari bahan kain berkualitas tinggi yang ringan dan nyaman digunakan. Desainnya yang elegan dan unik membuat baju ini cocok dipakai dalam acara formal maupun informal. Terdapat aksen bordir pada bagian bawah dan lengan yang menambah kesan artistik pada baju ini. Padukan dengan celana lebar atau rok untuk menciptakan tampilan yang menarik.', 1),
(3, 'JKT03', 'Jaket polyester', 150000, 100000, 100, 1, 'Baju vartisi ini adalah pilihan yang sempurna untuk menambah koleksi pakaian Anda. Baju ini terbuat dari bahan kain berkualitas tinggi yang ringan dan nyaman digunakan. Desainnya yang elegan dan unik membuat baju ini cocok dipakai dalam acara formal maupun informal. Terdapat aksen bordir pada bagian bawah dan lengan yang menambah kesan artistik pada baju ini. Padukan dengan celana lebar atau rok untuk menciptakan tampilan yang menarik.', 1),
(4, 'SPT04', 'Sepatu Nike', 200000, 100000, 100, 1, 'Tampil trendy dengan koleksi sepatu Nike terbaru! Didesain dengan teknologi terkini, sepatu Nike memberikan kenyamanan dan performa maksimal untuk aktivitas sehari-hari maupun olahraga. Dengan bahan berkualitas dan desain yang stylish, sepatu Nike adalah pilihan tepat untuk Anda yang mengutamakan kualitas dan gaya.', 2),
(5, 'SPT05', 'Sepatu Nike Running', 230000, 100000, 100, 1, 'Tampil trendy dengan koleksi sepatu Nike terbaru! Didesain dengan teknologi terkini, sepatu Nike memberikan kenyamanan dan performa maksimal untuk aktivitas sehari-hari maupun olahraga. Dengan bahan berkualitas dan desain yang stylish, sepatu Nike adalah pilihan tepat untuk Anda yang mengutamakan kualitas dan gaya.', 2),
(6, 'SPT06', 'Sepatu Nike Air', 200000, 100000, 100, 1, 'Tampil trendy dengan koleksi sepatu Nike terbaru! Didesain dengan teknologi terkini, sepatu Nike memberikan kenyamanan dan performa maksimal untuk aktivitas sehari-hari maupun olahraga. Dengan bahan berkualitas dan desain yang stylish, sepatu Nike adalah pilihan tepat untuk Anda yang mengutamakan kualitas dan gaya.', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_UNIQUE` (`nama`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_UNIQUE` (`tanggal`),
  ADD KEY `fk_pesanan_produk1_idx` (`produk_id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_UNIQUE` (`kode`),
  ADD KEY `fk_produk_kategori_produk_idx` (`kategori_produk_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fk_pesanan_produk1` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `fk_produk_kategori_produk` FOREIGN KEY (`kategori_produk_id`) REFERENCES `kategori_produk` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
