-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Ноя 20 2024 г., 10:26
-- Версия сервера: 8.0.37-29
-- Версия PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ck22962_new`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news12`
--

CREATE TABLE IF NOT EXISTS `news12` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `news12`
--

INSERT INTO `news12` (`id`, `title`, `text`, `date`) VALUES
(1, 'Полеты на Луну', 'США, Индия, Россия, Китай — сразу несколько крупнейших государств мира заявили о своих амбициозных космических программах. Так, в 2023 году стартовала первая миссия современной России по изучению спутника Земли. Роскосмос запустил аппарат «Луна-25», который потерпел крушение, — однако ведомство не собирается останавливаться на этой попытке.', '2024-11-01'),
(2, 'Землетрясение в Турции и Сирии', 'Самая страшная природная катастрофа 2023 года случилась в ночь на 6 февраля. Магнитуда землетрясений составила 7,8 и 7,6. Пострадали северные регионы Сирия и юго-восточная часть Турции. Землетрясение 2023 года оказалось вторым по числу жертв за всю историю Турецкой республики: 49 000 человек погибших и 115 000 раненых. Было разрушено 105 000 зданий, пострадали памятники культуры из списков мирового наследия ЮНЕСКО, а материальный ущерб превысил 106 млрд долларов.', '2024-11-02'),
(3, 'Изобретены лекарства от болезней Альцгеймера и Бехтерева', 'В 2023 году российские ученые создали лекарственный аппарат, способный бороться с болезнью Альцгеймера. Научная группа из Санкт-Петербурга уже успешно протестировала лекарство на лабораторных мышах. Было зафиксировано, что у животных улучшается память, а контакты между клетками головного мозга перестают разрушаться. При этом побочных эффектов от действия лекарственного препарата не обнаружили.', '2024-11-03'),
(4, 'В Краснодаре откроют приют для бродячих животных', 'В Краснодаре откроют приют для бездомных животных, который примет первых посетителей уже в 2025 году. Объект построили в поселке Березовом на улице Коломийцева. На территории возвели 222 вольера с кормокухней и складом, обустроили площадку для выгула собак.', '2024-11-04'),
(5, '«Роскосмос» запустил рекордное число российских спутников за раз — 51 аппарат, включая два «Ионосфера-М»', 'Госкорпорация «Роскосмос» провела сегодня успешный запуск ракеты «Союз-2.1б», которая стартовала с площадки космодрома «Восточный» в 02:18 мск. Она доставила на опорную орбиту разгонный блок «Фрегат» с двумя гелиогеофизическими спутниками «Ионосфера-М», а также 53 попутными аппаратами. Позднее «Роскосмос» объявил, что оба аппарата «Ионосфера-М» успешно выведены на солнечно-синхронную орбиту.', '2024-11-05');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;