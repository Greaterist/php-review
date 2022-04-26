-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 31 2022 г., 22:40
-- Версия сервера: 10.4.22-MariaDB
-- Версия PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `store`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int(11) NOT NULL,
  `session_id` varchar(50) NOT NULL,
  `goods_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`id`, `session_id`, `goods_id`) VALUES
(101, 'j54leu7knlpg0cdhtjk8n6jine', 6),
(102, 'j54leu7knlpg0cdhtjk8n6jine', 0),
(103, 'j54leu7knlpg0cdhtjk8n6jine', 3),
(105, 'j54leu7knlpg0cdhtjk8n6jine', 1),
(174, 'rvpiurv1lu48l62gjtkahbki37', 1),
(175, 'rvpiurv1lu48l62gjtkahbki37', 1),
(176, 'rvpiurv1lu48l62gjtkahbki37', 1),
(177, 'rvpiurv1lu48l62gjtkahbki37', 1),
(178, 'rvpiurv1lu48l62gjtkahbki37', 1),
(179, 'rvpiurv1lu48l62gjtkahbki37', 1),
(180, 'rvpiurv1lu48l62gjtkahbki37', 1),
(181, 'rvpiurv1lu48l62gjtkahbki37', 1),
(182, 'rvpiurv1lu48l62gjtkahbki37', 1),
(183, 'rvpiurv1lu48l62gjtkahbki37', 1),
(184, 'rvpiurv1lu48l62gjtkahbki37', 1),
(185, '1aner7vvqmavqcsf5hepsibq8e', 1),
(186, '1aner7vvqmavqcsf5hepsibq8e', 1),
(198, '9ntvfqbh0k2schs84pao79qfjb', 1),
(199, '9ntvfqbh0k2schs84pao79qfjb', 1),
(200, '9ntvfqbh0k2schs84pao79qfjb', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `filename`, `description`, `price`) VALUES
(1, 'товар 1', '01.jpg', 'описание товара 1', 10),
(2, 'товар 2', '02.jpg', 'описание товара 2', 21),
(3, 'товар 3', '03.jpg', 'описание товара 3', 32),
(4, 'товар 4', '04.jpg', 'описание товара 4', 43),
(5, 'товар 5', '05.jpg', 'описание товара 5', 54),
(6, 'товар 6', '06.jpg', 'описание товара 6', 65),
(7, 'товар 7', '07.jpg', 'описание товара 7', 76),
(8, 'товар 8', '08.jpg', 'описание товара 8', 87),
(9, 'товар 9', '09.jpg', 'описание товара 9', 2298),
(10, 'tovar', 'filename.jpg', 'description of tovar', 44),
(11, 'tovar', 'filename.jpg', 'description of tovar', 44),
(12, 'tovar', 'filename.jpg', 'description of tovar', 44),
(13, 'tovar', 'filename.jpg', 'description of tovar', 44),
(14, 'tovar', 'filename.jpg', 'description of tovar', 44);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_session` text NOT NULL,
  `login` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `order_session`, `login`, `email`) VALUES
(7, 'ntr7il943utjmad0o264j2lja5', '', 'asdfasdf'),
(8, 'ntr7il943utjmad0o264j2lja5', '', '1231233333'),
(10, 'ntr7il943utjmad0o264j2lja5', '', 'etert'),
(11, 'ntr7il943utjmad0o264j2lja5', 'user', 'asdfasga'),
(12, 'ntr7il943utjmad0o264j2lja5', 'user', 'userrrr'),
(13, 'ntr7il943utjmad0o264j2lja5', 'admin', 'jl'),
(14, '9ntvfqbh0k2schs84pao79qfjb', 'admin', 'bj,hjk'),
(15, '9ntvfqbh0k2schs84pao79qfjb', 'admin', 'bj,hjk'),
(16, '9ntvfqbh0k2schs84pao79qfjb', 'admin', 'bj,hjk');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `hash` varchar(100) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `hash`, `pass`, `isAdmin`) VALUES
(1, 'admin', '$2y$10$hQAhAE8APhQ7UFmuEfqOO.g5F4uzOZ0Asj3ts8lgdfG84f20gmbUC', '12345', 1),
(2, 'user', '', '12345', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
