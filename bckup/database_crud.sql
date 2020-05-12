-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Bulan Mei 2020 pada 08.09
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
-- Database: `database_crud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `student_id` text NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `student`
--

INSERT INTO `student` (`id`, `name`, `student_id`, `gender`, `teacher_id`) VALUES
(12, 'Poseidon', '110110101', 'male', 2),
(13, 'Athena', '110110112', 'female', 3),
(14, 'Valkyrie', '120110101', 'female', 1),
(15, 'Titan Cronus', '100110107', 'male', 1),
(16, 'Lucifer', '130110123', 'male', 3),
(18, 'Zeus', '990110109', 'male', 3),
(19, 'Apollo XII', '120110112', 'male', 2),
(20, 'Raphael', '110110187', 'female', 1),
(21, 'Succubus', '130110209', 'female', 1),
(22, 'Pandora', '140110132', 'female', 2),
(23, 'Medussa', '120110102', 'female', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `teacher_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `teacher_id`) VALUES
(1, 'Ilham Syahputra M.M.A.', '1326784687'),
(2, 'Hadi shirath M.Si.', '80934342676'),
(3, 'Arie Maulana M.Com.', '79823480932');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_stdid` (`student_id`(13)),
  ADD KEY `idx_teacher_id` (`teacher_id`);

--
-- Indeks untuk tabel `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
