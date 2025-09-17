-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 10.0.0.110
-- Время создания: Сен 14 2025 г., 09:28
-- Версия сервера: 8.0.37-29
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `f1160035_moscow_vitte`
--

-- --------------------------------------------------------

--
-- Структура таблицы `mv_users`
--

CREATE TABLE `mv_users` (
  `u_id` int NOT NULL,
  `u_name` varchar(550) COLLATE utf8mb3_unicode_ci NOT NULL,
  `u_surname` varchar(750) COLLATE utf8mb3_unicode_ci NOT NULL,
  `u_email` varchar(750) COLLATE utf8mb3_unicode_ci NOT NULL,
  `u_role` varchar(550) COLLATE utf8mb3_unicode_ci NOT NULL,
  `u_password` varchar(750) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Дамп данных таблицы `mv_users`
--

INSERT INTO `mv_users` (`u_id`, `u_name`, `u_surname`, `u_email`, `u_role`, `u_password`) VALUES
(1, 'Ruslan347', '', '347jhjj347@mail.ru', '', '$2y$10$G6sM/k8iUmplt8.CDpM0h.z80hiLngwo0Sn35lWqji44kIADsgITG'),
(2, '', '', 'avdruslan@mail.ru', '', '$2y$10$LsZp6ZF.wsXSVorMer1AReGqlet0bIkSBKdvNtemtxreMN9C79AE6'),
(3, '347jhjj347', '347jhjj23423', 'Asdasdv@mail.ru', '', '$2y$10$pGqvmFJNmkIlvqoYMp1.ZOulazqluA8P9M.LQc9nOUpKVBQITm3LW'),
(4, '347jhjj347123123', '347jhjj23423', 'Asdas123123dv@mail.ru', 'admin', '$2y$10$JYr1RwrbD1nHH4ri9LEYnuBZNskBeAVPQ6SZdnTj6fwbR.bLg0uUO'),
(5, '111111111111111', '11111111111111', '111111111111@mail.ru', 'admin', '$2y$10$LC3KLaxTCbKdec9Hk94FdO7jY2IjiThqLGL1cAXZgrqhpM41YJA8K'),
(6, '1111111111111', '1111111111111', '12323@mail.ru', 'admin', '$2y$10$ZktnBdbAUOZaJBER4Y/VZ.6nePZFrxsL0OHeKDH66vNbhVc9xOn42'),
(7, '111111111111', '111111111111', '12321233@mail.ru', 'admin', '$2y$10$jzSoX1/ppLuiYiXKS1GRiOdubke8GWRg6MpzgecjW1tn0ACcSKJ4q'),
(8, '111111111111123123', '1111111111111111', '12321123233@mail.ru', 'lector', '$2y$10$DrWFocmjuus4wGPuBSM1Cu6EdjCIxrx8ARShQ8f7V9iIKsgSYz5hm'),
(9, '11111111111111111111111111', '1111111111111111111111', 'Asdas123112312323dv@mail.ru', 'admin', '$2y$10$iKrOUFa7hpWayIP/56pb4ur88VGGJDGlp58WKyveUvSS4NdNOzTe.'),
(10, 'console.log@mail.ru', 'console.log@mail.ru', 'console.log@mail.ru', 'admin', '$2y$10$CLUDdhdXCEvzpONkC0VGoO6WWqrsLIbaDi0aCyHSh5QaPfHZGGeE2'),
(11, '347jhjj23423', '347jhjj23423', '347jhjj23423@mail.ru', 'admin', '$2y$10$3Zdl.E2rHI/KefJeYRX7P.bIeOOVrwUrPoB.4M1aa6y7vb1xnOll6'),
(12, '123', '123', 'Emil347@mail.ru', 'admin', '$2y$10$pV982Zu0i3IEuFQRlMQTwOg0B2K.PvLVNkx0HHVp9reqTKy14yA3y');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `mv_users`
--
ALTER TABLE `mv_users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `mv_users`
--
ALTER TABLE `mv_users`
  MODIFY `u_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
