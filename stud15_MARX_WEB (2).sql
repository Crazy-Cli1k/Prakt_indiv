-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 19 2022 г., 15:59
-- Версия сервера: 10.2.12-MariaDB
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `stud15_MARX_WEB`
--

-- --------------------------------------------------------

--
-- Структура таблицы `MainMenuItems`
--

CREATE TABLE `MainMenuItems` (
  `MainMenu_id` int(11) NOT NULL,
  `MainMenu_Tittle` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `MainMenuItems`
--

INSERT INTO `MainMenuItems` (`MainMenu_id`, `MainMenu_Tittle`) VALUES
(1, 'Главная'),
(2, 'Биография'),
(3, 'Труды'),
(4, 'Блог'),
(5, 'Новости'),
(6, 'Консоль'),
(7, 'О проекте');

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `Page_id` int(11) NOT NULL,
  `Main_Tittle` varchar(60) NOT NULL,
  `Main_Description` varchar(120) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`Page_id`, `Main_Tittle`, `Main_Description`) VALUES
(1, '', 'Главная'),
(2, 'videos', 'Видосы'),
(3, 'post', 'Пост'),
(4, 'works', 'Труды'),
(5, 'biography', 'Биография'),
(6, 'news', 'Новость'),
(7, 'future', 'Будущее'),
(8, 'project', 'Проект'),
(9, 'project/about', 'О проекте'),
(10, 'blog', 'Блог');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `Post_id` int(11) NOT NULL,
  `Tittle` text NOT NULL,
  `Description` text DEFAULT NULL,
  `Img` text DEFAULT NULL,
  `URL` text DEFAULT NULL,
  `Date` date NOT NULL,
  `Page_id` int(11) NOT NULL,
  `Type_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`Post_id`, `Tittle`, `Description`, `Img`, `URL`, `Date`, `Page_id`, `Type_id`) VALUES
(2, 'Мятежник ЖЕК', 'Ответ Андрею Рудому: <i>Зачем левые собирают гуманитарку?</i>', NULL, 'https://www.youtube.com/embed/6J8qOVRWUe8', '2022-05-01', 2, 3),
(4, 'СТАС', 'ТИНЬКОВ У ДУДЯ / ГЕНИЙ ЧИЧВАРКИН / ПРАВДА МАКСИМА КАЦА', NULL, 'https://www.youtube.com/embed/RWcWtpt9AnM', '2022-05-04', 2, 3),
(8, 'Карл Генрих Маркс<br>(5 мая 1818-14 марта 1883)', '<i>Карл Маркс</i> - идеолог социализма, автор масштабного труда <i>«Капитал»</i>, основоположник марксизма. Коренным образом повлиял на философию и социально-экономический мир 20 века вплоть до наших дней.', 'images/Marx3.png', NULL, '2022-05-01', 1, 4),
(16, 'fkdflkd', 'dfdf', 'marx4.jpg', NULL, '2022-05-01', 5, 2),
(12, 'ВРАЛ МРАКС', 'Великий германский писака<br>\r\nКарл Маркс был третьим ребёнком в семье трирского адвоката еврейского происхождения Генриха Маркса (1777—1838), происходившего из рода раввинов. Родился в Трире 5 мая 1818 года в доме по адресу Брюккергассе/Brückergasse, 664 (теперь Brückenstraße, 10 — музей). 15 октября 1819 года их семья переехала в новый дом по адресу Симеонштрассе/Simeonstraße, 8 (теперь на этом месте установлена памятная плита).\r\n\r\nМать — Генриетта Маркс, урожд. Прессбург (или Пресборк, нем. Henrietta Pressburg, нидерл. Henrietta Presborck) (1787—1863), происходила из г. Нимвегена (современный Неймеген, Нидерланды) из семьи раввинов.\r\n\r\nНезадолго до рождения Карла, в 1817 году его отец принял христианство (лютеранство), чтобы не лишиться звания судебного советника. Его дети, в том числе сын Карл, крестились в 1824 году, жена приняла христианство в том же 1824 году, после смерти своих родителей, которые, как семья раввинов, были против такого шага.\r\n\r\nВ 1830—1835 годах Карл посещал гимназию Фридриха-Вильгельма (Friedrich-Wilhelm-Gymnasium) города Трир, которую окончил в 17-летнем возрасте. В гимназическом сочинении «Размышления юноши при выборе профессии» в 1835 г.', 'images/marx4.jpg', NULL, '2022-05-11', 5, 4),
(13, 'Капитал (часть 1)', 'КАПИТАЛ ....', NULL, NULL, '2022-05-01', 4, 4),
(14, 'КАПИТАЛ (часть 2)', 'КАПИТАЛ...', NULL, NULL, '2022-05-01', 4, 4),
(15, 'А проекте....', 'ПОТОМ', NULL, NULL, '2022-05-11', 9, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `types`
--

CREATE TABLE `types` (
  `type_id` int(11) NOT NULL,
  `type_Tittle` text NOT NULL,
  `type_Description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `types`
--

INSERT INTO `types` (`type_id`, `type_Tittle`, `type_Description`) VALUES
(1, 'articles', 'Статьи'),
(2, 'photos', 'ФотоЧКИ'),
(3, 'videos', 'Видео'),
(4, 'Main_Entries', 'Статьи сайта'),
(10, 'aboba', 'sssssssssss');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `MainMenuItems`
--
ALTER TABLE `MainMenuItems`
  ADD PRIMARY KEY (`MainMenu_id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`Page_id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`Post_id`);

--
-- Индексы таблицы `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `MainMenuItems`
--
ALTER TABLE `MainMenuItems`
  MODIFY `MainMenu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `Page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `Post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `types`
--
ALTER TABLE `types`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
