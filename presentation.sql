-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 15 2014 г., 11:55
-- Версия сервера: 5.5.35-log
-- Версия PHP: 5.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `presentation`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `person_desc` text NOT NULL,
  `education` text NOT NULL,
  `add_info` text NOT NULL,
  `org` varchar(100) NOT NULL,
  `period` varchar(50) NOT NULL,
  `post` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`id`, `full_name`, `person_desc`, `education`, `add_info`, `org`, `period`, `post`) VALUES
(1, 'Арекаев Алексей Юрьевич', 'Почти 25 лет, холост, детей не имею.</p>\n<p>Имею интерес к областям электроники и вычислительной техники.', 'В 2007 году окончил Парцинскую среднюю общеобразовательную школу, поступил в институт физки и химии ФГБОУ ВПО "МГУ им. Н.П.Огарева".</p>\n<p>Окончил в 2011 году бакалавриат по специализации "Физика твердого тела" тема квалификационной работы - "Применение методов компьютерного моделирования к процессу осаждения плёнок", поступил в магистратуру того же института.</p>\n<p>В 2013 году защитил магстерскую диссертацию по теме "Исследование структурных превращений аморфных металлических сплавов при отжиге".Специализация "Физика конденсированного состояния вещества".</p>\n<p>В августе того же года поступил в аспирантуру, откуда в последствии отчислился по собственному желанию.', '', '"ООО НПП ЦАРМ"', '01.2013-05.2014', 'Инженер испытательной лаборатории');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=124 ;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `name`, `mail`, `text`, `data`) VALUES
(70, 'Федя', 'fedor@mail.ru', 'ок!', '2014-06-20'),
(71, 'Мария Ивановна', 'mi@gmail.com', 'Hi!', '2014-08-30'),
(72, 'Джек', 'man@mail.ru', 'it is cool!', '2014-09-12'),
(73, 'Ксения', 'ksenia@mail.ru', 'Привет! ', '2014-09-13'),
(74, 'Лиза', 'liza@mail.ru', 'Утро!', '2014-09-13'),
(75, 'Александра', 'alex@mail.ru', 'текст', '2014-09-13'),
(76, 'Алексей', 'arekaev89@mail.ru', 'Четвертое', '2014-09-13'),
(77, 'Кира', 'kira@gmail.com', 'Отличный фон!', '2014-09-13'),
(78, 'Евгений', 'jeka@mail.ru', 'Есть вопрос..', '2014-09-13'),
(79, 'Дарья', 'darya@ya.ru', 'Как дела?', '2014-09-13'),
(120, 'jlkjk', 'jkljk@gdf.rt', 'ljkljkl', '2014-09-15'),
(121, 'ghjgj', 'ghj@fsr.rt', 'gjghj', '2014-09-15'),
(122, 'tu', 'tyu@fd.tr', 'utyu', '2014-09-15'),
(123, 'hjgj', 'gjghj@gsdfg.rt', 'bnmbnm', '2014-09-15');

-- --------------------------------------------------------

--
-- Структура таблицы `main`
--

CREATE TABLE IF NOT EXISTS `main` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title1` varchar(100) NOT NULL,
  `title2` varchar(100) NOT NULL,
  `article` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `main`
--

INSERT INTO `main` (`id`, `title1`, `title2`, `article`) VALUES
(1, 'Тестовое задание', 'Просто текст-рыбка в качестве примера', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam dolores saepe iure esse omnis autem, debitis eos, repudiandae iusto eaque ullam repellat possimus est blanditiis minima accusantium distinctio sint earum.\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam dolores saepe iure esse omnis autem, debitis eos, repudiandae iusto eaque ullam repellat possimus est blanditiis minima accusantium distinctio sint earum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam dolores saepe iure esse omnis autem, debitis eos, repudiandae iusto eaque ullam repellat possimus est blanditiis minima accusantium distinctio sint earum.</p>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
