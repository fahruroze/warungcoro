-- phpMyAdmin SQL Dump
<<<<<<< HEAD
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2020 at 03:26 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11
=======
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Feb 2020 pada 17.28
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.13
>>>>>>> bd8caa2ad8f0029ebe41b7e1a2817c6c4a666112

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warung`
--

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Table structure for table `produk`
=======
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `no_hp` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `email`, `full_name`, `password`, `no_hp`) VALUES
(2, 'deviasucikhoirunnissa16@gmail.com', 'devia suci khoirun', 'devia', 2147483647);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjual`
--

CREATE TABLE `penjual` (
  `id_penjual` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `lok_toko` varchar(100) NOT NULL,
  `nama_toko` varchar(50) NOT NULL,
  `jml_karyawan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjual`
--

INSERT INTO `penjual` (`id_penjual`, `nama`, `lok_toko`, `nama_toko`, `jml_karyawan`) VALUES
(1, 'devia01', 'jatibarang', 'warung mama celi', 6),
(3, 'Devia suci penuh dosa', 'jatibarang city', 'DevDev ', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
>>>>>>> bd8caa2ad8f0029ebe41b7e1a2817c6c4a666112
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `detail_produk` varchar(225) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `created_date` date NOT NULL,
  `updated_by` varchar(100) NOT NULL,
  `updated_date` date NOT NULL,
  `kode_produk` int(11) NOT NULL
<<<<<<< HEAD
=======
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama`, `detail_produk`, `harga`, `gambar`, `created_by`, `created_date`, `updated_by`, `updated_date`, `kode_produk`) VALUES
(3, 'seblak', 'enak buangetttt', 0, 'gambar1.png', '', '0000-00-00', '', '0000-00-00', 123),
(7, 'seblak ceker', 'pedas sekali', 0, 'breakfast-5.jpg', '', '0000-00-00', '', '0000-00-00', 13444),
(8, 'gorengan', 'gorengan gedang', 0, 'gambarGrey.png', '', '0000-00-00', '', '0000-00-00', 123123);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating`
--

CREATE TABLE `rating` (
  `id_rating` int(11) NOT NULL,
  `nama_rating` varchar(100) NOT NULL,
  `rating` text NOT NULL,
  `tanggal_rating` date NOT NULL
>>>>>>> bd8caa2ad8f0029ebe41b7e1a2817c6c4a666112
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `created_date` date NOT NULL,
  `updated_by` varchar(100) NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

<<<<<<< HEAD
=======
--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `email`, `role`, `created_by`, `created_date`, `updated_by`, `update_date`) VALUES
(1, 'Syarul Diyono', 'syahruldiyono00@gmail.com', '12345678', 'syahruldiyono00@gmail.com', '1', '', '0000-00-00', '', '0000-00-00');

>>>>>>> bd8caa2ad8f0029ebe41b7e1a2817c6c4a666112
-- --------------------------------------------------------

--
-- Table structure for table `warung`
--

CREATE TABLE `warung` (
  `id_pedagang` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nama_karyawan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `penjual`
--
ALTER TABLE `penjual`
  ADD PRIMARY KEY (`id_penjual`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id_rating`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `warung`
--
ALTER TABLE `warung`
  ADD PRIMARY KEY (`id_pedagang`),
  ADD KEY `id_produk` (`id_produk`);
<<<<<<< HEAD
=======

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--
>>>>>>> bd8caa2ad8f0029ebe41b7e1a2817c6c4a666112

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `penjual`
--
ALTER TABLE `penjual`
  MODIFY `id_penjual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
<<<<<<< HEAD
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT;
=======
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
>>>>>>> bd8caa2ad8f0029ebe41b7e1a2817c6c4a666112

--
-- AUTO_INCREMENT untuk tabel `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
<<<<<<< HEAD
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
=======
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `warung`
--
ALTER TABLE `warung`
  MODIFY `id_pedagang` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--
>>>>>>> bd8caa2ad8f0029ebe41b7e1a2817c6c4a666112

--
-- Ketidakleluasaan untuk tabel `warung`
--
ALTER TABLE `warung`
<<<<<<< HEAD
  MODIFY `id_pedagang` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `warung`
--
ALTER TABLE `warung`
=======
>>>>>>> bd8caa2ad8f0029ebe41b7e1a2817c6c4a666112
  ADD CONSTRAINT `warung_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
