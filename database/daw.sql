-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gazdă: localhost
-- Timp de generare: oct. 25, 2021 la 01:50 PM
-- Versiune server: 10.4.21-MariaDB
-- Versiune PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `daw`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `activitati`
--

CREATE TABLE `activitati` (
  `id` int(11) NOT NULL,
  `activitate` varchar(250) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `activitati`
--

INSERT INTO `activitati` (`id`, `activitate`, `create_date`) VALUES
(109, 'victordidic a mutat cardul \"Calendar finisat\" din DONE->DOING', '2021-10-25 12:24:50'),
(110, 'user a mutat cardul \"Calendar finisat\" din DOING->DONE', '2021-10-25 12:27:43'),
(111, 'user a adaugat un card DONE \"yoyo\"', '2021-10-25 12:28:13');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `events`
--

INSERT INTO `events` (`id`, `title`, `start_event`, `end_event`) VALUES
(23, 'APSI 2', '2021-09-28 00:00:00', '2021-09-29 00:00:00'),
(24, 'Afarace 4 cap', '2021-09-28 00:00:00', '2021-09-29 00:00:00'),
(34, 'Laboarator', '2021-09-29 00:00:00', '2021-09-30 00:00:00'),
(42, 'Ceva nou', '2021-09-23 00:00:00', '2021-09-24 00:00:00'),
(47, 'asfd', '2021-10-01 00:00:00', '2021-10-02 00:00:00'),
(50, 'esadfd', '2021-09-22 00:00:00', '2021-09-23 00:00:00'),
(64, 'Atestare SBC', '2021-10-15 00:00:00', '2021-10-16 00:00:00'),
(65, 'thergsefadfd', '2021-10-16 00:00:00', '2021-10-17 00:00:00'),
(104, 'Checkpoint 3', '2021-11-03 00:00:00', '2021-11-04 00:00:00'),
(105, 'DAW ', '2021-10-21 00:00:00', '2021-10-22 00:00:00'),
(108, 'SBC 3', '2021-10-22 00:00:00', '2021-10-23 00:00:00'),
(112, 'f', '2021-10-12 00:00:00', '2021-10-13 00:00:00');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `kanban`
--

CREATE TABLE `kanban` (
  `id` int(11) NOT NULL,
  `txt` text NOT NULL,
  `stare` int(11) DEFAULT NULL,
  `add_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `kanban`
--

INSERT INTO `kanban` (`id`, `txt`, `stare`, `add_by`) VALUES
(88, 'APSI 3', 1, 'victordidic'),
(136, 'Machine learning', 1, 'victordidic'),
(137, 'Studierea materialului', 1, 'victordidic'),
(138, 'Fixare bug', 2, 'victordidic'),
(139, 'Schimbare fon pagina', 3, 'victordidic'),
(142, 'Mai vechi', 2, 'victordidic'),
(177, 'APSI 4', 3, 'victordidic'),
(183, 'Calendar finisat', 3, 'victordidic'),
(184, 'inca mai lucrez', 2, 'victordidic'),
(197, 'yoyo', 3, 'user');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(11, 'victordidic', '12345', 'admin'),
(12, 'test', '4321', 'user'),
(14, 'user', '21072000vd', 'admin');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `activitati`
--
ALTER TABLE `activitati`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `kanban`
--
ALTER TABLE `kanban`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `password` (`password`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `activitati`
--
ALTER TABLE `activitati`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT pentru tabele `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT pentru tabele `kanban`
--
ALTER TABLE `kanban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;

--
-- AUTO_INCREMENT pentru tabele `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
