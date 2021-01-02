-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 27 2020 г., 15:26
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yii2basic`
--

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` text NOT NULL,
  `surname` text DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `online_status` text NOT NULL DEFAULT 'Offline',
  `created_at` int(255) NOT NULL,
  `updated_at` int(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `auth_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `surname`, `email`, `status`, `online_status`, `created_at`, `updated_at`, `password_hash`, `password_reset_token`, `auth_key`) VALUES
(1, 'Dimonk', 'Mossss', 'daymonmoss@gmail.com', 1, 'Online', 1608382270, 1608755778, '$2y$13$3GzvrbBCvFpz7J7M7NazpesRRXsv0jX.VB.YGuiZWInXniSbfa4..', 'bP8Md5nRoAs-zQEGkzeKIj0djSIwEzAA_1608479861', 'jL6LoO-dWeDBZ6pk5XNWoC8jHQN8KdLA'),
(2, 'Dimacro', 'Masar', 'tittaner@mail.ru', 1, 'Online', 1608382361, 1608808871, '$2y$13$CLgRO2lsb2/Z.Ej3Qruob.vwMGtDo0OB9.2OBR7W0bhb9FRb6TFcy', 'i3aHWrUNAitwU07D9wm5XBKLz9How7El_1608391717', '7mbE9NQC_lkWqXGTQAL0vqu_OnGSuoAF'),
(3, 'Dimitrik', NULL, 'mosoron4an@yandex.ua', 1, 'Offline', 1608402388, 1608402388, '$2y$13$/yv6OFW78ahjpvnP2Oemm.wo9oflZu25Y60sw31NLs3NPEsQktUfq', NULL, 'Xqg5J1OEsDaw-pv1lmNdJsUvIPsHnby7'),
(4, 'Lanesi', NULL, 'lanesi7304@hafutv.com', 1, 'Offline', 1608407041, 1608407041, '$2y$13$bstDJfs66mtqIzMBx/7b5uXldQK59/uXBt.73P/C5OgfdX6777IQ2', NULL, '8LrpJ5689ipLB1IJ6X_zXqQKk8NWg6pE');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
