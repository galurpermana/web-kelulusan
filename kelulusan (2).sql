-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Apr 2022 pada 10.20
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
-- Database: `kelulusan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `rombel`
--

CREATE TABLE `rombel` (
  `id_rombel` int(11) NOT NULL,
  `rombel` varchar(225) NOT NULL,
  `nick` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rombel`
--

INSERT INTO `rombel` (`id_rombel`, `rombel`, `nick`) VALUES
(1, 'Akuntansi dan\nKeuangan Lembaga 1', 'akl'),
(2, 'Akuntansi dan\nKeuangan Lembaga 2', 'akl'),
(3, 'Akuntansi dan\nKeuangan Lembaga 3', 'akl'),
(4, 'Perbankan dan\nKeuangan Mikro', 'pkm'),
(5, 'Bisnis Daring dan Pemasaran 1', 'bdp'),
(6, 'Bisnis Daring dan Pemasaran 2', 'bdp'),
(7, 'Bisnis Daring dan Pemasaran 3', 'bdp'),
(8, 'Otomatisasi dan Tata\nKelola Perkantoran 1', 'otkp'),
(9, 'Otomatisasi dan Tata\nKelola Perkantoran 2', 'otkp'),
(10, 'Otomatisasi dan Tata\nKelola Perkantoran 3', 'otkp'),
(11, 'Teknik Komputer Jaringan 1', 'tkj'),
(12, 'Teknik Komputer Jaringan 2', 'tkj'),
(13, 'Rekaya Perangkat Lunak', 'rpl'),
(14, 'Multimedia', 'mm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `nis` varchar(8) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_rombel` int(11) NOT NULL,
  `keterangan` enum('Lulus','Tidak lulus') NOT NULL,
  `surat` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nisn`, `nis`, `tanggal`, `nama`, `id_rombel`, `keterangan`, `surat`) VALUES
(1, '123', '123', '2004-01-28', 'Illyaz Arya Shihab Kusuma', 13, 'Lulus', ''),
(2, '125', '125', '2022-04-12', 'Lewis Hamilton', 11, 'Tidak lulus', 'RDBMS.pdf'),
(4, '0035155901', '12345678', '2022-04-06', 'PIPI', 1, 'Lulus', ''),
(5, '1234543212', '11111111', '2022-04-11', 'januar', 2, 'Lulus', ''),
(6, '0989098765', '22222222', '2022-04-14', 'afdel', 3, 'Lulus', ''),
(7, '0989098765', '12345678', '2022-04-14', 'jane', 4, 'Tidak lulus', ''),
(8, '0035155900', '12345678', '2022-04-06', 'galur', 5, 'Lulus', ''),
(9, '0035155900', '12345678', '2022-04-06', 'galur', 6, 'Lulus', ''),
(10, '0035155900', '22222222', '2022-04-03', 'tsuimin', 7, 'Tidak lulus', ''),
(11, '0989098765', '10101198', '2022-04-13', 'junaidi', 8, 'Lulus', ''),
(12, '0035155900', '12345678', '2022-03-31', 'danang', 1, 'Lulus', ''),
(13, '4444444444', '44444444', '2022-03-30', 'lala', 10, 'Lulus', ''),
(14, '5555555555', '55555555', '2022-04-13', 'ikimamat', 12, 'Lulus', ''),
(15, '6666666666', '66666666', '2022-04-02', 'reja', 14, 'Tidak lulus', ''),
(20, '3333333333', '33333333', '2003-10-29', 'RAHMATULLAH', 13, 'Lulus', 'kwr.pdf'),
(21, '8888888888', '88888888', '2022-04-11', 'nanda', 7, 'Lulus', 'exercise 1.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `timer`
--

CREATE TABLE `timer` (
  `id_timer` int(10) UNSIGNED NOT NULL,
  `tahun` year(4) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `timer`
--

INSERT INTO `timer` (`id_timer`, `tahun`, `tanggal`, `waktu`) VALUES
(1, 2022, '2022-04-17', '16:20:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `password`) VALUES
(1, 'admin', '$2y$10$QQ/TEBvCleFZBNEX2ie4DOqJwIEXnhsv.5vIyAlmby.kMz00wqpdK'),
(2, 'galur', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `rombel`
--
ALTER TABLE `rombel`
  ADD PRIMARY KEY (`id_rombel`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `timer`
--
ALTER TABLE `timer`
  ADD PRIMARY KEY (`id_timer`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `rombel`
--
ALTER TABLE `rombel`
  MODIFY `id_rombel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `timer`
--
ALTER TABLE `timer`
  MODIFY `id_timer` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
