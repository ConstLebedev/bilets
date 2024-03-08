-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: db
-- Время создания: Мар 08 2024 г., 17:28
-- Версия сервера: 10.3.39-MariaDB-1:10.3.39+maria~ubu2004
-- Версия PHP: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bilets1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `Ans1` text NOT NULL,
  `Ans2` text NOT NULL,
  `Ans3` text NOT NULL,
  `Ans4` text NOT NULL,
  `Ans5` text NOT NULL,
  `Ans6` text NOT NULL,
  `Ans7` text NOT NULL,
  `Ans8` text NOT NULL,
  `Ans9` text NOT NULL,
  `Ans10` text NOT NULL,
  `Ans11` text NOT NULL,
  `Ans12` text NOT NULL,
  `Ans13` text NOT NULL,
  `Ans14` text NOT NULL,
  `Ans15` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `answers`
--

INSERT INTO `answers` (`id`, `Ans1`, `Ans2`, `Ans3`, `Ans4`, `Ans5`, `Ans6`, `Ans7`, `Ans8`, `Ans9`, `Ans10`, `Ans11`, `Ans12`, `Ans13`, `Ans14`, `Ans15`) VALUES
(1, '4', '2', '3', '2', '2', '3', '2', '2', '3', '3', '1', '2', '4', '2', '2'),
(2, '3', '1', '3', '2', '2', '3', '1', '3', '2', '3', '2', '1', '3', '1', '1'),
(3, '3', '2', '3', '3', '2', '1', '2', '2', '3', '2', '1', '2', '3', '3', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `bilets`
--

CREATE TABLE `bilets` (
  `id` int(11) NOT NULL,
  `Cifer1` text DEFAULT NULL,
  `Cifer2` text DEFAULT NULL,
  `Cifer3` text DEFAULT NULL,
  `Cifer4` text DEFAULT NULL,
  `Cifer5` text DEFAULT NULL,
  `Cifer6` text DEFAULT NULL,
  `Cifer7` text DEFAULT NULL,
  `Cifer8` text DEFAULT NULL,
  `Cifer9` text DEFAULT NULL,
  `Cifer10` text DEFAULT NULL,
  `Cifer11` text DEFAULT NULL,
  `Cifer12` text DEFAULT NULL,
  `Cifer13` text DEFAULT NULL,
  `Cifer14` text DEFAULT NULL,
  `Cifer15` text DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `bilets`
--
ALTER TABLE `bilets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `bilets`
--
ALTER TABLE `bilets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
