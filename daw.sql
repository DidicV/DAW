-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gazdă: localhost
-- Timp de generare: oct. 02, 2022 la 01:01 PM
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
(337, 'victordidic a sters cardul \"Clean arhitecture\" din TODO', '2022-10-01 15:28:11'),
(338, 'victordidic a adaugat un card TODO \"unui\"', '2022-10-01 15:33:08'),
(339, 'victordidic a modificat cardul \"unui\" in \"unui\"', '2022-10-01 15:34:44'),
(340, 'victordidic a sters cardul \"asd\" din TODO', '2022-10-01 16:13:26'),
(341, 'victordidic a sters cardul \"unui\" din TODO', '2022-10-01 16:13:26'),
(342, 'victordidic a adaugat un card TODO \"xxx\"', '2022-10-01 16:13:34'),
(343, 'victordidic a adaugat un card TODO \"cccc\"', '2022-10-01 16:14:39'),
(344, 'victordidic a modificat cardul \"xxx\" in \"xxx\"', '2022-10-01 16:15:10'),
(345, 'victordidic a sters cardul \"xxx\" din TODO', '2022-10-01 16:15:34'),
(346, 'victordidic a sters cardul \"cccc\" din TODO', '2022-10-01 16:15:34'),
(347, 'victordidic a adaugat un card TODO \"yoyy\"', '2022-10-01 16:15:41'),
(348, 'victordidic a adaugat un card TODO \"sdfg\"', '2022-10-01 16:16:50'),
(349, 'victordidic a adaugat un card TODO \"kkk\"', '2022-10-01 16:19:50'),
(350, 'victordidic a modificat cardul \"kkk\" in \"kkk\"', '2022-10-01 16:20:02'),
(351, 'victordidic a sters cardul \"kkk\" din TODO', '2022-10-01 16:21:11'),
(352, 'catalin a adaugat un card TODO \"testinggg\"', '2022-10-01 17:04:45'),
(353, 'catalin a adaugat un card TODO \"yoyo\"', '2022-10-01 17:05:47'),
(354, 'catalin a sters cardul \"testinggg\" din TODO', '2022-10-01 17:05:57'),
(355, 'catalin a sters cardul \"yoyo\" din TODO', '2022-10-01 17:05:57'),
(356, 'catalin a adaugat un card TODO \"asdas\"', '2022-10-01 17:06:25'),
(357, 'catalin a sters cardul \"asdas\" din TODO', '2022-10-01 17:06:35'),
(358, 'catalin a adaugat un card TODO \"asfsada\"', '2022-10-01 17:06:55'),
(359, 'catalin a adaugat un card TODO \"asdas\"', '2022-10-01 17:08:08'),
(360, 'catalin a sters cardul \"asfsada\" din TODO', '2022-10-01 17:08:22'),
(361, 'catalin a sters cardul \"asdas\" din TODO', '2022-10-01 17:08:23'),
(362, 'catalin a adaugat un card TODO \"asdasdasdsa\"', '2022-10-01 17:10:41'),
(363, 'catalin a adaugat un card TODO \"asdasdasdsa\"', '2022-10-01 17:10:43'),
(364, 'catalin a adaugat un card TODO \"asdasd\"', '2022-10-01 17:11:30'),
(365, 'catalin a adaugat un card TODO \"asdasf\"', '2022-10-01 17:13:14'),
(366, 'victordidic a adaugat un card TODO \"ubkj\"', '2022-10-01 17:13:34'),
(367, 'victordidic a adaugat un card TODO \"iiuui\"', '2022-10-01 17:13:44'),
(368, 'victordidic a sters cardul \"ubkj\" din TODO', '2022-10-01 17:15:47'),
(369, 'victordidic a sters cardul \"iiuui\" din TODO', '2022-10-01 17:15:47'),
(370, 'victordidic a adaugat un card TODO \"unu\"', '2022-10-01 17:16:00'),
(371, 'catalin a sters cardul \"unu\" din TODO', '2022-10-01 17:17:45'),
(372, 'catalin a adaugat un card TODO \"unu\"', '2022-10-01 17:17:49'),
(373, 'catalin a adaugat un card TODO \"Asda\"', '2022-10-01 17:19:19'),
(374, 'catalin a adaugat un card TODO \"Asda\"', '2022-10-01 17:19:20'),
(375, 'catalin a adaugat un card TODO \"Asda\"', '2022-10-01 17:19:20'),
(376, 'victordidic a adaugat un card TODO \"as\"', '2022-10-01 17:19:35'),
(377, 'victordidic a adaugat un card TODO \"asdasd\"', '2022-10-01 17:19:42'),
(378, 'victordidic a adaugat un card TODO \"asd\"', '2022-10-01 17:20:32'),
(379, 'catalin a adaugat un card TODO \"asdfas\"', '2022-10-01 17:20:40'),
(380, 'catalin a adaugat un card TODO \"asdfas\"', '2022-10-01 17:20:41'),
(381, 'catalin a adaugat un card TODO \"asdfas\"', '2022-10-01 17:20:41'),
(382, 'catalin a adaugat un card TODO \"asdfas\"', '2022-10-01 17:20:42'),
(383, 'catalin a adaugat un card TODO \"asdfas\"', '2022-10-01 17:20:42'),
(384, 'catalin a adaugat un card TODO \"asdfas\"', '2022-10-01 17:20:42'),
(385, 'catalin a adaugat un card TODO \"asdfas\"', '2022-10-01 17:20:42'),
(386, 'catalin a adaugat un card TODO \"asdfas\"', '2022-10-01 17:20:42'),
(387, 'catalin a adaugat un card TODO \"asdfas\"', '2022-10-01 17:20:42'),
(388, 'catalin a adaugat un card TODO \"asdfas\"', '2022-10-01 17:20:42'),
(389, 'catalin a adaugat un card TODO \"asd\"', '2022-10-01 17:20:45'),
(390, 'catalin a adaugat un card TODO \"asdasd\"', '2022-10-01 17:21:18'),
(391, 'catalin a adaugat un card TODO \"asdfafs\"', '2022-10-01 17:24:05'),
(392, 'catalin a adaugat un card TODO \"asfa\"', '2022-10-01 17:24:19'),
(393, 'victordidic a adaugat un card TODO \"asdads\"', '2022-10-01 17:25:05'),
(394, 'victordidic a adaugat un card TODO \"asd\"', '2022-10-01 17:25:23'),
(395, 'victordidic a adaugat un card TODO \"asfasdasda\"', '2022-10-01 17:25:30'),
(396, 'victordidic a sters cardul \"asdads\" din TODO', '2022-10-01 17:25:34'),
(397, 'victordidic a sters cardul \"asd\" din TODO', '2022-10-01 17:25:35'),
(398, 'victordidic a sters cardul \"asfasdasda\" din TODO', '2022-10-01 17:25:37'),
(399, 'victordidic a adaugat un card TODO \"asdasdsdasdas\"', '2022-10-01 17:27:47'),
(400, 'victordidic a sters cardul \"asdasdsdasdas\" din TODO', '2022-10-01 17:27:50'),
(401, 'catalin a adaugat un card TODO \"asdfas\"', '2022-10-01 17:27:59'),
(402, 'catalin a adaugat un card TODO \"asfasf\"', '2022-10-01 17:28:22'),
(403, 'catalin a adaugat un card TODO \"lkjnlkj\"', '2022-10-01 17:29:53'),
(404, 'catalin a adaugat un card TODO \"lkjnlkj\"', '2022-10-01 17:29:55'),
(405, 'catalin a adaugat un card TODO \"lkjnlkj\"', '2022-10-01 17:29:55'),
(406, 'catalin a adaugat un card TODO \"lkjnlkj\"', '2022-10-01 17:29:55'),
(407, 'catalin a adaugat un card TODO \"lkjnlkj\"', '2022-10-01 17:29:55'),
(408, 'catalin a adaugat un card TODO \"asdasd\"', '2022-10-01 17:31:48'),
(409, 'catalin a adaugat un card TODO \"Asda\"', '2022-10-01 17:32:39'),
(410, 'catalin a adaugat un card TODO \"Asda\"', '2022-10-01 17:32:46'),
(411, 'catalin a adaugat un card TODO \"asdas\"', '2022-10-01 17:34:00'),
(412, 'catalin a adaugat un card TODO \"Asda\"', '2022-10-01 17:34:43'),
(413, 'catalin a adaugat un card TODO \"ASDASD\"', '2022-10-01 17:36:19'),
(414, 'catalin a adaugat un card TODO \"ASDSD\"', '2022-10-01 17:36:57'),
(415, 'catalin a sters cardul \"ASDSD\" din TODO', '2022-10-01 17:37:06'),
(416, 'catalin a adaugat un card TODO \"W\"', '2022-10-01 17:37:11'),
(417, 'catalin a adaugat un card TODO \"ceava\"', '2022-10-02 13:15:53'),
(418, 'victordidic a adaugat un card TODO \"testarea\"', '2022-10-02 13:20:50'),
(419, 'victordidic a adaugat un card TODO \"2qwasfvwsd\"', '2022-10-02 13:21:11'),
(420, 'victordidic a adaugat un card TODO \"cevarfa\"', '2022-10-02 13:22:18'),
(421, 'victordidic a adaugat un card TODO \"ceva fresh\"', '2022-10-02 13:29:56'),
(422, 'victordidic a sters cardul \"cevarfa\" din TODO', '2022-10-02 13:30:16'),
(423, 'victordidic a sters cardul \"2qwasfvwsd\" din TODO', '2022-10-02 13:30:17'),
(424, 'victordidic a sters cardul \"ceva fresh\" din TODO', '2022-10-02 13:30:18'),
(425, 'victordidic a sters cardul \"testarea\" din TODO', '2022-10-02 13:30:19'),
(426, 'victordidic a sters cardul \"ceava\" din TODO', '2022-10-02 13:30:21'),
(427, 'victordidic a sters cardul \"W\" din TODO', '2022-10-02 13:30:22'),
(428, 'victordidic a adaugat un card TODO \"yoyo\"', '2022-10-02 13:30:29'),
(429, 'victordidic a sters cardul \"yoyo\" din TODO', '2022-10-02 13:30:31'),
(430, 'victordidic a adaugat un card TODO \"Asda\"', '2022-10-02 13:31:15'),
(431, 'victordidic a sters cardul \"Asda\" din TODO', '2022-10-02 13:31:19'),
(432, 'victordidic a adaugat un card TODO \"youoodas\"', '2022-10-02 13:33:59'),
(433, 'victordidic a sters cardul \"youoodas\" din TODO', '2022-10-02 13:34:06'),
(434, 'victordidic a adaugat un card DOING \"testarea\"', '2022-10-02 13:37:44'),
(435, 'victordidic a adaugat un card DOING \"testarea\"', '2022-10-02 13:37:47'),
(436, 'victordidic a adaugat un card DOING \"asfas\"', '2022-10-02 13:37:52'),
(437, 'victordidic a adaugat un card DOING \"yoyo\"', '2022-10-02 13:38:43'),
(438, 'victordidic a adaugat un card DOING \"faesdeasd\"', '2022-10-02 13:39:45'),
(439, 'victordidic a sters cardul \"yoyo\" din DOING', '2022-10-02 13:40:15'),
(440, 'victordidic a sters cardul \"faesdeasd\" din DOING', '2022-10-02 13:40:16'),
(441, 'victordidic a adaugat un card DOING \"ceva\"', '2022-10-02 13:40:40'),
(442, 'victordidic a modificat cardul \"ceva\" in \"ceva\"', '2022-10-02 13:40:58'),
(443, 'victordidic a sters cardul \"ceva\" din DOING', '2022-10-02 13:41:27'),
(444, 'victordidic a adaugat un card DONE \"testare\"', '2022-10-02 13:45:36'),
(445, 'victordidic a modificat cardul \"testare\" in \"testare\"', '2022-10-02 13:46:00'),
(446, 'victordidic a sters cardul \"testare\" din DONE', '2022-10-02 13:46:32'),
(447, 'catalin a adaugat un card TODO \"feasda\"', '2022-10-02 13:47:29'),
(448, 'catalin a adaugat un card DOING \"test1\"', '2022-10-02 13:47:45'),
(449, 'catalin a adaugat un card DONE \"trewq\"', '2022-10-02 13:47:48'),
(450, 'catalin a sters cardul \"test1\" din DOING', '2022-10-02 13:48:07'),
(451, 'catalin a sters cardul \"trewq\" din DONE', '2022-10-02 13:48:09'),
(452, 'catalin a sters cardul \"feasda\" din TODO', '2022-10-02 13:48:18'),
(453, 'victordidic a adaugat un card TODO \"test numai pentru\"', '2022-10-02 14:00:41');

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
(88, 'APSI 6', 1, 'nimeni', 0),
(136, 'Machine learning', 1, 'victordidic', 0),
(137, 'Studierea materialului', 3, 'victordidic', 0),
(138, 'Fixare bug', 3, 'victordidic', 0),
(139, 'Schimbare fon pagina', 3, 'victordidic', 0),
(177, 'APSI 4', 3, 'victordidic', 0),
(183, 'Calendar finisat', 2, 'victordidic', 0),
(209, 'Push in GitHub', 1, 'victordidic', 0),
(267, 'test numai pentru', 1, 'victordidic', 12);

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
(12, 'catalin', '4321', 'user'),
(14, 'vitalie', '21072000vd', 'admin'),
(36, 'test', '1111', 'user');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=454;

--
-- AUTO_INCREMENT pentru tabele `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT pentru tabele `kanban`
--
ALTER TABLE `kanban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;

--
-- AUTO_INCREMENT pentru tabele `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
