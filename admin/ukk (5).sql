-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Mar 2022 pada 12.16
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `perjalanan`
--

CREATE TABLE `perjalanan` (
  `id_perjalanan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `lokasi` varchar(225) NOT NULL,
  `suhu` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perjalanan`
--

INSERT INTO `perjalanan` (`id_perjalanan`, `id_user`, `tanggal`, `waktu`, `lokasi`, `suhu`) VALUES
(1, 1, '2022-06-01', '07:00:00', 'indonesia', '36'),
(2, 1, '2022-06-06', '08:00:00', 'Malaysia', '37'),
(3, 1, '2022-06-11', '09:00:00', 'Singapura', '36'),
(4, 1, '2022-06-16', '10:00:00', 'Australia', '35'),
(5, 1, '2022-06-21', '11:00:00', 'indonesia', '36'),
(6, 1, '2022-06-26', '12:00:00', 'Malaysia', '36'),
(7, 1, '2022-07-01', '08:00:00', 'Singapura', '37'),
(8, 1, '2022-07-06', '09:00:00', 'Australia', '35'),
(9, 1, '2022-07-11', '10:00:00', 'italia', '35'),
(10, 1, '2022-07-16', '11:00:00', 'indonesia', '36'),
(11, 2, '2022-03-01', '13:19:00', 'indonesia', '36'),
(12, 1, '2022-03-31', '13:49:00', 'bb', '36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `nik` varchar(225) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `nik`, `foto`) VALUES
(1, 'Rahmatullah', '197190360035155900', 'default-avatar.png'),
(2, 'mamat', '197190180046485056', 'default-avatar.png'),
(3, '1', '1', 'default-avatar.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `perjalanan`
--
ALTER TABLE `perjalanan`
  ADD PRIMARY KEY (`id_perjalanan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `perjalanan`
--
ALTER TABLE `perjalanan`
  MODIFY `id_perjalanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
