-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2020 pada 01.48
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labpbw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen_wali`
--

CREATE TABLE `dosen_wali` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen_wali`
--

INSERT INTO `dosen_wali` (`id`, `nama`, `nip`) VALUES
(1, 'Ilham Syahputra M.M.A.', '1326784687'),
(2, 'Hadi shirath M.Si.', '80934342676'),
(3, 'Arie Maulana M.Com.', '79823480932');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `ID` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` text NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `id_doswal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`ID`, `nama`, `nim`, `jenis_kelamin`, `id_doswal`) VALUES
(1, 'siapa', '18080180452', 'L', 1),

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen_wali`
--
ALTER TABLE `dosen_wali`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `unik_nim` (`nim`(13)),
  ADD KEY `idx_id_doswal` (`id_doswal`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dosen_wali`
--
ALTER TABLE `dosen_wali`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_doswal`) REFERENCES `dosen_wali` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
