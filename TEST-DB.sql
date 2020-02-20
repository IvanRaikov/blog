-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Фев 20 2020 г., 13:27
-- Версия сервера: 5.7.29-0ubuntu0.18.04.1
-- Версия PHP: 7.2.24-0ubuntu0.18.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `zemlyanin`
--

-- --------------------------------------------------------

--
-- Структура таблицы `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `content` text COLLATE utf8_unicode_ci,
  `date` date DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `viewed` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `article`
--

INSERT INTO `article` (`id`, `title`, `description`, `content`, `date`, `image`, `viewed`, `user_id`, `status`, `category_id`) VALUES
(1, 'Толстолобик', 'Лбы толстолобиков намного шире, чем у других карповых (отсюда название). Их глаза находятся в нижней части головы, поэтому лоб выглядит ещё больше.', '<p><strong>Толстолобики</strong> или <strong>толстолобы</strong> (лат.&nbsp;<em>Hypophthalmichthys</em>)&nbsp;&mdash; род пресноводных рыб семейства карповых. Крупная стайная рыба семейства карповых. Английское название silver carp (&quot;серебряный карп&quot;). Раньше он подразделялся на роды <em>Hypophthalmichthys</em> и <em>Aristichthys</em> в составе подсемейства <em>Hypophthalmichthyinae</em>. В роде три современных и один вымерший вид.</p>\r\n\r\n<p>При помощи своего цедильного ротового аппарата толстолобик профильтровывает от детрита зацветшую, зелёную и мутную воду. Поэтому, чтобы в пруду была прозрачная вода, помимо фильтрационной системы в водоём запускают толстолобика.</p>\r\n', '2020-02-20', 'a58137b38b7470d1a497811cdba3e912bxSU0ik0KW7c_na-urale-vylovili-ogromnogo-tolstolobika-vesom-42.jpg', NULL, NULL, 1, 1),
(2, 'Карась', 'Караси (лат. Carassius) — род лучепёрых рыб семейства карповых. ', '<p><strong>Караси</strong> (лат. Carassius) &mdash; род лучепёрых рыб семейства карповых. Спинной плавник длинный, глоточные зубы однорядные. Тело высокое с толстой спиной, умеренно сжатое с боков. Чешуя крупная и гладкая на ощупь. Окраска варьирует в зависимости от места обитания. Золотой <strong>карась</strong> может достигать длины тела более 50 см и массы свыше 3 кг, серебряный <strong>карась</strong> &mdash; длины 40 см и массы до 2 кг. Половой зрелости <strong>карась</strong> достигает на 3&mdash;4-м году.</p>\r\n', '2020-02-20', '1b15fd812b181aedb95f1170ed3bdef8172579.dat.jpeg', NULL, NULL, 1, 1),
(3, 'Стерлядь', 'Сте́рлядь (лат. Acipenser ruthenus) — рыба семейства осетровых, занесена в Красную книгу России и Приложение II CITES, как \"уязвимый вид\". Длина тела достигает 125 см, вес — до 16 кг', '<p><strong>Стерлядь</strong> занесена в красную книгу. Что это за рыба, описание с фото, места обитания, размножение, как приготовить <strong>стерлядь</strong> вкусно.&nbsp;... <strong>Стерлядь</strong> обыкновенная (лат. Acipenser ruthenus) &ndash; крупная рыба семейства осетровых, которую еще со времен Ивана Грозного называют царской за ее превосходные гастрономические качества. Блюда из нее всегда были на столах правителей Российской империи, а для Петра I ее разводили и выращивали в самой столице.</p>\r\n', '2020-02-20', 'a3479dc67997a8cf4329f69db44ed6b6i.jpeg', NULL, NULL, 1, 2),
(4, 'Сардина', 'Сардина — промысловое название трёх родов рыб семейства сельдевых — сардина пильчарда (Sardina), сардинопс (Sardinops) и сардинелла (Sardinella).', '<p><strong>Сардина</strong> &mdash; морская рыба семейства сельдевых. Мясо <strong>сардины</strong> хорошо усваивается, и являются источником большого количества полезных веществ.&nbsp;... <strong>Сардина</strong>. <strong>Сардина</strong> является небольшой морской рыбой из семейства сельдевых, которая достигает в длину около 20 см, имеет зеленоватый цвет спины и серебристое брюшко. На солнечных лучах чешуя рыбы отливается в нескольких цветах радуги. Пищевая ценность. Порция. <strong>Сардина</strong> 100 г. Количество на порцию. Калории</p>\r\n', '2020-02-20', '4a621f77a0682362ec606f90c68e636arecept-garenih-sardin-s-koriandrom-520x245.jpg', NULL, NULL, 1, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `article_tag`
--

CREATE TABLE `article_tag` (
  `article_id` int(11) DEFAULT NULL,
  `tag_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `title`) VALUES
(1, 'карповые'),
(2, 'осетровые'),
(3, 'сельдевые'),
(4, 'окуневые'),
(5, 'тресковые');

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `comment`
--

INSERT INTO `comment` (`id`, `text`, `user_id`, `article_id`, `status`, `date`) VALUES
(1, 'рыба моей мечты', 1, 1, NULL, '2020-02-20'),
(2, 'и моей тоже', 2, 1, NULL, '2020-02-20');

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1582192714),
('m190923_043217_create_category', 1582192718),
('m190923_043306_create_article', 1582192720),
('m190923_043319_create_tag', 1582192720),
('m190923_043345_create_user', 1582192721),
('m190923_043351_create_comment', 1582192723),
('m190923_043420_create_article_tag', 1582192726),
('m190930_051300_add_date_to_comment', 1582192727);

-- --------------------------------------------------------

--
-- Структура таблицы `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `isAdmin` int(11) DEFAULT '0',
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `isAdmin`, `photo`) VALUES
(1, 'administrator', 'admin@email.com', '96e79218965eb72c92a549dd5a330112', 1, NULL),
(2, 'useruser', 'user@email.com', '96e79218965eb72c92a549dd5a330112', 0, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_article_category` (`category_id`);

--
-- Индексы таблицы `article_tag`
--
ALTER TABLE `article_tag`
  ADD KEY `fk_article_tag_article` (`article_id`),
  ADD KEY `fk_article_tag_tag` (`tag_id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comment_user` (`user_id`),
  ADD KEY `fk_comment_article` (`article_id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_article_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Ограничения внешнего ключа таблицы `article_tag`
--
ALTER TABLE `article_tag`
  ADD CONSTRAINT `fk_article_tag_article` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`),
  ADD CONSTRAINT `fk_article_tag_tag` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`);

--
-- Ограничения внешнего ключа таблицы `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_comment_article` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`),
  ADD CONSTRAINT `fk_comment_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
