-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 15 2023 г., 21:14
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `webcar`
--

-- --------------------------------------------------------

--
-- Структура таблицы `login`
--

CREATE TABLE `login` (
  `id` int(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pret` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `login`
--

INSERT INTO `login` (`id`, `name`, `pret`, `email`, `subject`, `img`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Scut metalic pentru motor', 800, 'asd', 'asd', 'p1.jpg', 'asd', '2023-06-15 18:20:52', NULL),
(2, 'Discuri de frîna', 599, '123', '123', 'p2.png', '123', '2023-06-15 18:22:37', NULL),
(3, 'Tampon motor', 689, '', '', 'p3.jpg', '', '2023-06-15 18:30:16', NULL),
(4, 'Tampon motor', 689, '', '', 'p4.jpg', '', '2023-06-15 18:31:32', NULL),
(5, 'Garnitura chiuloasa', 800, '', '', 'p5.jpeg', '', '2023-06-15 18:31:50', NULL),
(6, 'Set ambriaj', 780, '', '', 'p6.PNG', '', '2023-06-15 18:32:12', NULL),
(7, 'Ulei de motor', 689, '', '', 'p8.png', '', '2023-06-15 18:33:15', NULL),
(8, 'Anvelope', 780, '', '', 'p9.jpg', '', '2023-06-15 18:33:35', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `login`
--
ALTER TABLE `login`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
