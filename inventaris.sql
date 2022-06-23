-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jun 2022 pada 10.23
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventaris`
--

DELIMITER $$
--
-- Prosedur
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `get` ()  BEGIN
	SELECT *  FROM barang;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertTwice` (`name` VARCHAR(100), `kalimat` TEXT)  BEGIN
         INSERT INTO barang(nama) VALUES(name);
         INSERT INTO wishlist(discription) VALUES(text);
      END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_into_twoTables` (`name` VARCHAR(100), `deskripsi` TEXT)  BEGIN
         INSERT INTO barang(nama) VALUES(name);
         INSERT INTO wishlist(description) VALUES(deskripsi);
      END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `tambah` (`name` VARCHAR(100), `deskripsi` TEXT)  BEGIN
	INSERT INTO barang(nama) VALUE(name);
    INSERT INTO wishlist(description) VALUE(deskripsi);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `tampilkan` ()  BEGIN
	SELECT * FROM barang;
    SELECT * FROM wishlist;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `tampilkanData` ()  BEGIN
 	SELECT * FROM tbl_barang;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `category` enum('Logitech','Ryzen','NYK') DEFAULT NULL,
  `id_wishlist` int(10) DEFAULT NULL,
  `waktu` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama`, `category`, `id_wishlist`, `waktu`) VALUES
(1, 'keyboard', 'Logitech', NULL, '2022-06-03 10:02:54'),
(3, 'headset', 'NYK', NULL, '2022-06-03 10:38:37'),
(4, 'Cooling Pad', 'Ryzen', NULL, '2022-06-03 10:45:17'),
(5, 'Stand Hodler', NULL, NULL, '2022-06-05 23:21:32'),
(6, 'Laptop', NULL, NULL, '2022-06-05 23:28:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `nama` varchar(20) NOT NULL,
  `id_admin` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int(10) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `spesifikasi_barang` varchar(30) NOT NULL,
  `qty` int(10) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `jumlah_stock` int(15) NOT NULL,
  `createdAT` datetime DEFAULT current_timestamp(),
  `updatedAT` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `nama_barang`, `spesifikasi_barang`, `qty`, `satuan`, `jumlah_stock`, `createdAT`, `updatedAT`) VALUES
(1, 'Logitec Keyboard', 'Perlengkapan Kantor', 8, 'unit', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Headset Logitech', 'Perlengkapan Kantor', 5, 'unit', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Asus Rog', 'Perlengkapan Kantor', 2, 'unit', 1, '2022-06-06 13:18:53', '2022-06-06 13:18:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang_keluar`
--

CREATE TABLE `tbl_barang_keluar` (
  `id_barang` int(10) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `spesifikasi_barang` varchar(30) NOT NULL,
  `qty` int(10) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `nomor_tanda_terima` varchar(20) NOT NULL,
  `nama_penerima` varchar(20) NOT NULL,
  `createdAT` datetime NOT NULL DEFAULT current_timestamp(),
  `updateAT` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_barang_keluar`
--

INSERT INTO `tbl_barang_keluar` (`id_barang`, `nama_barang`, `spesifikasi_barang`, `qty`, `satuan`, `tanggal_keluar`, `nomor_tanda_terima`, `nama_penerima`, `createdAT`, `updateAT`) VALUES
(1, 'Logitec Keyboard', 'Perlengkapan Kantor', 1, 'unit', '0000-00-00', 'BK001', 'Arsyad Ramadhan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Kursi Gaming', 'Perlengkapan Gaming', 1, 'unit', '0000-00-00', 'BK002', 'Riko Mahendra', '2022-06-12 21:09:06', '2022-06-12 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_stok_barang`
--

CREATE TABLE `tbl_stok_barang` (
  `id_barang` int(10) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `spesifikasi_barang` varchar(30) NOT NULL,
  `qty` int(10) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `jumlah_barang_masuk` int(20) NOT NULL,
  `jumlah_barang_keluar` int(20) NOT NULL,
  `jumlah_stok_barang` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_stok_barang`
--

INSERT INTO `tbl_stok_barang` (`id_barang`, `nama_barang`, `spesifikasi_barang`, `qty`, `satuan`, `jumlah_barang_masuk`, `jumlah_barang_keluar`, `jumlah_stok_barang`) VALUES
(1, 'Keyboard Mechanical', 'Perlengkapan Kantor', 15, 'unit', 5, 2, 15),
(2, 'Headset Logitech', 'Perlengkapan Kantor', 8, 'unit', 3, 1, 4),
(3, 'Headset Logitech', 'Perlengkapan Kantor', 8, 'unit', 3, 1, 4),
(4, 'Kursi Gaming', 'Perlengkapan Gaming', 1, 'unit', 5, 1, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(10) NOT NULL,
  `id_barang` int(10) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `wishlist`
--

INSERT INTO `wishlist` (`id`, `id_barang`, `description`) VALUES
(1, 4, 'this cooling pad is so good although this things is cheap'),
(3, 3, 'recomendest cheaper headset ever!!! '),
(4, 1, 'This is is good stuffff'),
(5, NULL, 'awsome cheap setup gaming');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tbl_barang_keluar`
--
ALTER TABLE `tbl_barang_keluar`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tbl_stok_barang`
--
ALTER TABLE `tbl_stok_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barang` (`id_barang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_barang_keluar`
--
ALTER TABLE `tbl_barang_keluar`
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_stok_barang`
--
ALTER TABLE `tbl_stok_barang`
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
