-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gazdă: localhost
-- Timp de generare: ian. 09, 2023 la 09:20 PM
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
(64, 'Atestare SBC', '2021-10-15 00:00:00', '2021-10-16 00:00:00'),
(105, 'DAW ', '2021-10-21 00:00:00', '2021-10-22 00:00:00'),
(108, 'SBC 3', '2021-10-22 00:00:00', '2021-10-23 00:00:00'),
(114, 'Atestare', '2021-11-04 00:00:00', '2021-11-05 00:00:00'),
(115, 'Checkpoint 3', '2021-11-02 00:00:00', '2021-11-03 00:00:00'),
(117, 'Laboratoare', '2021-11-09 00:00:00', '2021-11-10 00:00:00'),
(121, 'Atestare Daw', '2021-11-25 00:00:00', '2021-11-26 00:00:00'),
(122, 'Endava', '2022-03-30 00:00:00', '2022-03-31 00:00:00');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `kanban`
--

CREATE TABLE `kanban` (
  `id` int(11) NOT NULL,
  `txt` text NOT NULL,
  `stare` int(11) DEFAULT NULL,
  `add_by` varchar(100) DEFAULT NULL,
  `assigned` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `kanban`
--

INSERT INTO `kanban` (`id`, `txt`, `stare`, `add_by`, `assigned`) VALUES
(268, 'documente pregătite', 3, 'victordidic', 0),
(269, 'buletin', 1, 'victordidic', 14),
(270, 'numai pentru mine si toti', 2, 'test', 12),
(271, 'Task special', 1, 'victordidic', 0),
(272, 'taskc', 2, 'victordidic', 0),
(275, 'Eu scriu acum un mesaj foarte lungpentru testare', 3, 'victordidic', 0),
(277, 'testarea', 1, 'victordidic', 2),
(281, 'FOR ME', 1, 'victordidic', 11);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `departament` int(11) DEFAULT NULL,
  `departament_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`, `departament`, `departament_name`) VALUES
(11, 'victordidic', '12345', 'admin', 5, 'Heads'),
(12, 'catalin', '4321', 'user', 5, 'Heads'),
(14, 'vitalie', '21072000vd', 'user', 2, 'Development'),
(36, 'test', '1111', 'user', 3, 'HR'),
(38, 'asdaf', 'sasrwqwe', 'user', 1, 'Testing');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT pentru tabele `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT pentru tabele `kanban`
--
ALTER TABLE `kanban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=282;

--
-- AUTO_INCREMENT pentru tabele `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
