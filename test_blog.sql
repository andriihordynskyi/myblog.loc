-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Окт 22 2017 г., 13:47
-- Версия сервера: 5.6.37
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test_blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `categories_id` int(11) NOT NULL,
  `pubdate` datetime NOT NULL,
  `views` int(11) DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `text`, `categories_id`, `pubdate`, `views`, `image`) VALUES
(4, 'PHP Description', 'PHP (рекурсивный акроним словосочетания PHP: Hypertext Preprocessor) - это распространенный язык программирования общего назначения с открытым исходным кодом. PHP сконструирован специально для ведения Web-разработок и его код может внедряться непосредственно в HTML.', 1, '2017-10-18 04:17:00', 171, 'php.jpeg'),
(5, 'Javascript description', 'JS /ˈdʒeɪ.ɛs./) — мультипарадигменный язык программирования. Поддерживает объектно-ориентированный, императивный и функциональный стили. Является реализацией языка ECMAScript (стандарт ECMA-262). JavaScript обычно используется как встраиваемый язык для программного доступа к объектам приложений.', 2, '2017-10-18 09:14:00', 41, 'js.png'),
(6, 'AJAX description', 'AJAX, Ajax (ˈeɪdʒæks, от англ. Asynchronous Javascript and XML — «асинхронный JavaScript и XML») — подход к построению интерактивных пользовательских интерфейсов веб-приложений, заключающийся в «фоновом» обмене данными браузера с веб-сервером. В результате, при обновлении данных веб-страница не перезагружается полностью, и веб-приложения становятся быстрее и удобнее. По-русски иногда произносится по существующей аналогии у имени Ajax — Аякс, но у аббревиатуры AJAX нет устоявшегося варианта на кириллице.', 3, '2017-10-18 19:25:53', 402, 'ajax.png'),
(9, 'JS history', 'В 1992 году компания Nombas (впоследствии приобретённая Openwave[en]) начала разработку встраиваемого скриптового языка Cmm (Си-минус-минус), который, по замыслу разработчиков, должен был стать достаточно мощным, чтобы заменить макросы, сохраняя при этом схожесть с Си, чтобы разработчикам не составляло труда изучить его[12]. Главным отличием от Си была работа с памятью. В новом языке всё управление памятью осуществлялось автоматически: не было необходимости создавать буфера, объявлять переменные, осуществлять преобразование типов. В остальном языки сильно походили друг на друга: в частности, Cmm поддерживал стандартные функции и операторы Си[13]. Cmm был переименован в ScriptEase, поскольку исходное название звучало слишком негативно, а упоминание в нём Си «отпугивало» людей[12][14]. На основе этого языка был создан проприетарный продукт CEnvi. В конце ноября 1995 года Nombas разработала версию CEnvi, внедряемую в веб-страницы. Страницы, которые можно было изменять с помощью скриптового языка, получили название Espresso Pages — они демонстрировали использование скриптового языка для создания игры, проверки пользовательского ввода в формы и создания анимации. Espresso Pages позиционировались как демоверсия, призванная помочь представить, что случится, если в браузер будет внедрён язык Cmm. Работали они только в 16-битовом Netscape Navigator под управлением Windows[15].', 2, '2017-10-18 03:28:11', 138, 'js-2.png'),
(10, 'Создание GUI приложений', 'Хотя PHP и не слишком распространён в данной области, его можно использовать и для создания GUI-приложений.\r\n\r\nДля создания кроссплатформенных приложений служат пакеты PHP-GTK и PHP-Qt, представляющие собой обёртки для соответствующих популярных библиотек виджетов. Также существует среда разработки кроссплатформенных приложений Devel Next[12].\r\n\r\nДля создания графических приложений для Windows существуют свободные пакеты WinBinder (написан на Си, фактически — обёртка для WinAPI), PQBuilder (написан на PHP с использованием библиотеки PHPQt5), а также предшественник Devel Next — среда быстрой разработки Devel Studio[13].\r\n\r\nКроме этого существует реализация PHP для .NET/Mono — Phalanger и для JVM — JPHP, результатом компиляции PHP-кода в Phalanger может быть любое .NET-приложение, в то же время JPHP поддерживает расширение Swing, почти полностью портированное из среды Java.\r\n\r\n', 1, '2017-10-16 05:07:08', 1032, 'php-2.png\r\n'),
(11, 'Javascript description', 'JS /ˈdʒeɪ.ɛs./) — мультипарадигменный язык программирования. Поддерживает объектно-ориентированный, императивный и функциональный стили. Является реализацией языка ECMAScript (стандарт ECMA-262). JavaScript обычно используется как встраиваемый язык для программного доступа к объектам приложений.', 2, '2017-10-18 09:14:00', 41, 'js.png'),
(12, 'AJAX description', 'AJAX, Ajax (ˈeɪdʒæks, от англ. Asynchronous Javascript and XML — «асинхронный JavaScript и XML») — подход к построению интерактивных пользовательских интерфейсов веб-приложений, заключающийся в «фоновом» обмене данными браузера с веб-сервером. В результате, при обновлении данных веб-страница не перезагружается полностью, и веб-приложения становятся быстрее и удобнее. По-русски иногда произносится по существующей аналогии у имени Ajax — Аякс, но у аббревиатуры AJAX нет устоявшегося варианта на кириллице.', 3, '2017-10-18 19:25:53', 404, 'ajax.png'),
(13, 'JS history', 'В 1992 году компания Nombas (впоследствии приобретённая Openwave[en]) начала разработку встраиваемого скриптового языка Cmm (Си-минус-минус), который, по замыслу разработчиков, должен был стать достаточно мощным, чтобы заменить макросы, сохраняя при этом схожесть с Си, чтобы разработчикам не составляло труда изучить его[12]. Главным отличием от Си была работа с памятью. В новом языке всё управление памятью осуществлялось автоматически: не было необходимости создавать буфера, объявлять переменные, осуществлять преобразование типов. В остальном языки сильно походили друг на друга: в частности, Cmm поддерживал стандартные функции и операторы Си[13]. Cmm был переименован в ScriptEase, поскольку исходное название звучало слишком негативно, а упоминание в нём Си «отпугивало» людей[12][14]. На основе этого языка был создан проприетарный продукт CEnvi. В конце ноября 1995 года Nombas разработала версию CEnvi, внедряемую в веб-страницы. Страницы, которые можно было изменять с помощью скриптового языка, получили название Espresso Pages — они демонстрировали использование скриптового языка для создания игры, проверки пользовательского ввода в формы и создания анимации. Espresso Pages позиционировались как демоверсия, призванная помочь представить, что случится, если в браузер будет внедрён язык Cmm. Работали они только в 16-битовом Netscape Navigator под управлением Windows[15].', 2, '2017-10-18 03:28:11', 138, 'js-2.png'),
(14, 'Создание GUI приложений', 'Хотя PHP и не слишком распространён в данной области, его можно использовать и для создания GUI-приложений.\r\n\r\nДля создания кроссплатформенных приложений служат пакеты PHP-GTK и PHP-Qt, представляющие собой обёртки для соответствующих популярных библиотек виджетов. Также существует среда разработки кроссплатформенных приложений Devel Next[12].\r\n\r\nДля создания графических приложений для Windows существуют свободные пакеты WinBinder (написан на Си, фактически — обёртка для WinAPI), PQBuilder (написан на PHP с использованием библиотеки PHPQt5), а также предшественник Devel Next — среда быстрой разработки Devel Studio[13].\r\n\r\nКроме этого существует реализация PHP для .NET/Mono — Phalanger и для JVM — JPHP, результатом компиляции PHP-кода в Phalanger может быть любое .NET-приложение, в то же время JPHP поддерживает расширение Swing, почти полностью портированное из среды Java.\r\n\r\n', 1, '2017-10-16 05:07:08', 1032, 'php-2.png\r\n'),
(15, 'JS history', 'В 1992 году компания Nombas (впоследствии приобретённая Openwave[en]) начала разработку встраиваемого скриптового языка Cmm (Си-минус-минус), который, по замыслу разработчиков, должен был стать достаточно мощным, чтобы заменить макросы, сохраняя при этом схожесть с Си, чтобы разработчикам не составляло труда изучить его[12]. Главным отличием от Си была работа с памятью. В новом языке всё управление памятью осуществлялось автоматически: не было необходимости создавать буфера, объявлять переменные, осуществлять преобразование типов. В остальном языки сильно походили друг на друга: в частности, Cmm поддерживал стандартные функции и операторы Си[13]. Cmm был переименован в ScriptEase, поскольку исходное название звучало слишком негативно, а упоминание в нём Си «отпугивало» людей[12][14]. На основе этого языка был создан проприетарный продукт CEnvi. В конце ноября 1995 года Nombas разработала версию CEnvi, внедряемую в веб-страницы. Страницы, которые можно было изменять с помощью скриптового языка, получили название Espresso Pages — они демонстрировали использование скриптового языка для создания игры, проверки пользовательского ввода в формы и создания анимации. Espresso Pages позиционировались как демоверсия, призванная помочь представить, что случится, если в браузер будет внедрён язык Cmm. Работали они только в 16-битовом Netscape Navigator под управлением Windows[15].', 2, '2017-10-18 03:28:11', 138, 'js-2.png');

-- --------------------------------------------------------

--
-- Структура таблицы `articles_categories`
--

CREATE TABLE `articles_categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles_categories`
--

INSERT INTO `articles_categories` (`id`, `title`) VALUES
(1, 'PHP'),
(2, 'JavaScript'),
(3, 'AJAX');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `author` varchar(255) DEFAULT NULL,
  `nickname` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `text` text NOT NULL,
  `pubdate` datetime NOT NULL,
  `articles_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `author`, `nickname`, `email`, `text`, `pubdate`, `articles_id`) VALUES
(1, 'Alexandr', 'Storm', 'alexandr_storm@gmail.com', 'Good article.\r\nI\'ve received a lot infotrmation for me.\r\nThanks.', '2017-10-18 08:13:08', 10),
(2, 'Andrii', 'Hordynskyi', 'andriihordynskyi@gmail.com', 'Thank you for so useful article.\r\nWaiting for more.', '2017-10-19 05:32:15', 4),
(3, 'Andrii', 'Hordynskyi', 'andriihordynskyi@gmail.com', 'Thank you for so useful article.\r\nWaiting for more.', '2017-10-19 05:32:15', 5),
(4, 'Andrii', 'Hordynskyi', 'andriihordynskyi@gmail.com', 'Thank you for so useful article.\r\nWaiting for more.', '2017-10-19 05:32:15', 6),
(5, 'Andrii', 'Hordynskyi', 'andriihordynskyi@gmail.com', 'Thank you for so useful article.\r\nWaiting for more.', '2017-10-19 05:32:15', 9),
(7, 'Andrii', 'Hordynskyi', 'andriihordynskyi@gmail.com', 'Thank you for so useful article.\r\nWaiting for more.', '2017-10-19 05:32:15', 9),
(8, 'Andrii', 'Hordynskyi', 'andriihordynskyi@gmail.com', 'Thank you for so useful article.\r\nWaiting for more.', '2017-10-19 05:32:15', 4),
(9, 'Valera', 'Valerikus', 'valerikus@gmail.com', 'So beautiful and nice.\r\nThank you.', '2017-10-12 09:20:43', 4),
(10, 'Valera', 'Valerikus', 'valerikus@gmail.com', 'So beautiful and nice.\r\nThank you.', '2017-10-12 09:20:43', 10),
(11, 'Vitaliy', 'Basketballman', 'sg.vitaliy.z@gmail.com', 'Статтья PHP Description дает просто невероятнейшие познание в области программирование.\r\nВполне доволен тем что зашел на этот чудеснейший сайт. ', '0000-00-00 00:00:00', 4),
(12, 'Vitaliy', 'Basketballman', 'sg.vitaliy.z@gmail.com', 'Статтья PHP Description дает просто невероятнейшие познание в области программирование.\r\nВполне доволен тем что зашел на этот чудеснейший сайт. ', '0000-00-00 00:00:00', 4),
(14, 'Antot', 'Anton', 'Anton@anton.antot', 'Anton anton\r\n', '0000-00-00 00:00:00', 4),
(15, 'Yuriy', 'Yuriy@yuriy.yuriy', 'Yuriy', 'Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yu', '0000-00-00 00:00:00', 4),
(16, 'Yuriy', 'Yuriy@yuriy.yuriy', 'Yuriy', 'Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yuriy Yu', '0000-00-00 00:00:00', 4),
(17, 'Guest', NULL, NULL, 'Guest comment\r\n', '0000-00-00 00:00:00', 4),
(18, 'Guest', NULL, NULL, 'Great, just great, wow, such a wow. \r\nBeautiful.', '0000-00-00 00:00:00', 4),
(19, 'Andrii', 'Andryushka97', 'Andrii@gmail.com', 'Nice, good and clean.', '0000-00-00 00:00:00', 10),
(20, 'Andrii', 'Andryushka97', 'Andrii@gmail.com', 'Nice, good and clean.', '0000-00-00 00:00:00', 10),
(21, 'Andrii', 'Andryushka97', 'Andrii@gmail.com', 'Nice, good and clean.', '0000-00-00 00:00:00', 10),
(22, 'Andrii', 'Andryushka97', 'Andrii@gmail.com', 'Nice, good and clean.', '0000-00-00 00:00:00', 10),
(23, 'Andrii', 'Andryushka97', 'Andrii@gmail.com', 'Nice, good and clean.', '0000-00-00 00:00:00', 10),
(24, 'Andrii', 'Andryushka97', 'Andrii@gmail.com', 'Nice, good and clean.', '0000-00-00 00:00:00', 10),
(26, 'Guest', '', '', 'Тест', '0000-00-00 00:00:00', 10),
(27, 'Guest', '', '', 'Это тест\r\n', '0000-00-00 00:00:00', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_id` (`categories_id`);

--
-- Индексы таблицы `articles_categories`
--
ALTER TABLE `articles_categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_id` (`articles_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT для таблицы `articles_categories`
--
ALTER TABLE `articles_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`categories_id`) REFERENCES `articles_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`articles_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
