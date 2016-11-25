-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 24, 2016 at 11:23 PM
-- Server version: 5.5.53-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `example`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `id_2` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`) VALUES
(1, 'Москва'),
(6, 'Санкт Петербург'),
(7, 'Саратов'),
(8, 'Новосибирск'),
(9, 'Воронеж'),
(10, 'Томск'),
(11, 'Кемерово'),
(12, 'Барнаул'),
(13, 'Красноярск'),
(14, 'Иркутск'),
(15, 'Владивосток'),
(16, 'Анапа'),
(17, 'Челябинск'),
(18, 'Омск'),
(19, 'Пермь'),
(20, 'Владимир'),
(21, 'Ярославль'),
(22, 'Юрга'),
(23, 'Новокузнецк'),
(24, 'Сургут'),
(25, 'Нижний Новгород'),
(26, 'Бийск'),
(27, 'Волгоград'),
(28, 'Краснодар'),
(29, 'Колпашево'),
(30, 'Казань'),
(31, 'Ростов-на-Дону'),
(32, 'Екатеринбург'),
(33, 'Самара'),
(34, 'Уфа'),
(35, 'Магнитогорск'),
(36, 'Пятигорск'),
(37, 'Железногорск'),
(38, 'Кисловодск'),
(39, 'Обнинск'),
(40, 'Тула'),
(41, 'Чита'),
(42, 'Тамбов'),
(43, 'Нефтеюганск'),
(44, 'Тверь'),
(45, 'Новороссийск'),
(46, 'Абакан'),
(47, 'Братск'),
(48, 'Темрюк'),
(49, 'Минусинск'),
(50, 'Петрозаводск'),
(51, 'Улан-Удэ'),
(52, 'Хабаровск');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) CHARACTER SET utf8 NOT NULL,
  `lastname` varchar(20) CHARACTER SET utf8 NOT NULL,
  `city` int(11) NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `city` (`city`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=55 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `firstname`, `lastname`, `city`, `photo`) VALUES
(6, 'Иван', 'Иванов', 6, '4653a79029333c04141d514c51e9ef93.jpg'),
(7, 'Сергей', 'Петров', 1, 'd63269741b0b1ac032e9dd0dd0f880fd.jpg'),
(8, 'Виктор', 'Сидоров', 6, '66ff27a159b11eebb353646412bcad18.jpg'),
(9, 'Мария', 'Иванова', 6, '33e8460775992596497a5cfe0830b6f9.jpg'),
(10, 'Александр', 'Сидоров', 8, 'b5b4822e03ec1b785cb15cd020022220.jpg'),
(11, 'Юрий', 'Гагарин', 9, 'a4c734739cce4d0a538ad53b185f7076.jpg'),
(12, 'Александр', 'Пушкин', 6, '836e59633da6b04f13f23e7ec813f17d.jpg'),
(13, 'Василий', 'Васильев', 8, '3d039fe08a7854094fe3bc3f0409dcbc.jpg'),
(14, 'Федор', 'Сергеев', 8, '5c9649cbe050fe61d7bba76d3c7d4f65.jpg'),
(15, 'Екатерина', 'Петрова', 11, 'cdd449d07cd7203a64d4d64a401da165.jpg'),
(16, 'Мария', 'Петрова', 14, 'b561712aadc9b8b87f072b45fcc51857.jpeg'),
(17, 'Светлана', 'Васильева', 8, 'f0a8d3f7bf0c510fb8f271eca4808f16.jpg'),
(18, 'Олег', 'Васильев', 12, 'd6f4e5a1c4e2ace0d70d018fd5c1f6f6.jpg'),
(19, 'Иван', 'Дмитриев', 8, 'bff0f665e6491ca20a85ae340f1c6e9b.jpg'),
(20, 'Светлана', 'Калинина', 13, ''),
(21, 'Василий', 'Ложкин', 18, '54acef3c07b23c43c079bae346d51631.jpg'),
(22, 'Виталий', 'Красноперов', 47, ''),
(23, 'Ольга', 'Железняк', 49, ''),
(24, 'Олег', 'Вишневский', 22, ''),
(25, 'Евгений', 'Спиридонов', 52, ''),
(26, 'Вячеслав', 'Саблин', 35, ''),
(27, 'Батур', 'Каримов', 34, ''),
(28, 'Владимир', 'Ромашов', 48, ''),
(29, 'Глеб', 'Шведов', 45, ''),
(30, 'Александр', 'Садовниченко', 50, ''),
(31, 'Виктор', 'Брагин', 11, ''),
(32, 'Иван', 'Зарубин', 31, ''),
(33, 'Александр', 'Кузьмин', 44, ''),
(34, 'Борис', 'Левашко', 36, ''),
(35, 'Андрей', 'Новиков', 46, ''),
(36, 'Игорь', 'Абрамчук', 41, ''),
(37, 'Фаина', 'Файзуллина', 46, ''),
(38, 'Сергей', 'Оболонский', 43, ''),
(39, 'Дмитрий', 'Беккер', 41, ''),
(40, 'Андрей', 'Липинский', 39, ''),
(41, 'Иван', 'Белозубов', 42, ''),
(42, 'Владимир ', 'Судников', 23, ''),
(43, 'Александр', 'Пашутин', 8, ''),
(44, 'Павел ', 'Ситников', 51, ''),
(45, 'Татьяна', 'Аникина', 31, ''),
(46, 'Михаил', 'Черемисин', 26, ''),
(47, 'Александр', 'Брасов', 24, ''),
(48, 'Максим', 'Вережников', 11, ''),
(49, 'Артем', 'Лавренко', 13, ''),
(50, 'Василий', 'Пупкин', 1, 'd8f45f2ab637bd12e703da52514cf84e.jpg'),
(51, 'Василий', 'Гагарин', 9, '0f72060bed7d0a2865b9126772b73163.jpeg'),
(52, 'пцукп', 'пек', 11, '7009747371a5be9c390be57bc07a530e.jpg'),
(53, 'asdf"''asdf', 'asdf', 1, ''),
(54, 'Вредина', 'Букина', 10, '16f88ce01dac34177eabdd7e5d696595.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `clientorder`
--

CREATE TABLE IF NOT EXISTS `clientorder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `orderdata` text CHARACTER SET utf8,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `cid` (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=35 ;

--
-- Dumping data for table `clientorder`
--

INSERT INTO `clientorder` (`id`, `cid`, `orderdata`) VALUES
(6, 8, 'Заказ Сидорова'),
(7, 6, 'Заказ Иванова'),
(8, 11, 'Заказ Гагарина'),
(9, 11, 'Заказ Гагарина №2'),
(10, 38, 'Заказ Оболонского'),
(11, 45, 'Заказ Аникиной'),
(12, 49, 'Заказ Лавренко'),
(13, 31, 'Заказ Брагина'),
(14, 22, 'Заказ Красноперова'),
(15, 42, 'Заказ Судникова'),
(16, 43, 'Заказ Пашутина'),
(17, 23, 'Заказ Железняк'),
(18, 48, 'Заказ Вережникова'),
(19, 36, 'Заказ Абрамчук'),
(20, 40, 'Заказ Липинского'),
(21, 37, 'Заказ Файзуллиной'),
(22, 25, 'Заказ Спиридонова'),
(23, 44, 'Заказ Ситникова'),
(24, 32, 'Заказ Зарубина'),
(25, 6, 'hgf'),
(26, 11, 'hfg'),
(27, 21, 'Заказ Ложкина'),
(28, 39, 'Беккер'),
(29, 50, 'Пупкин'),
(30, 51, 'Заказ Гагарина В.'),
(31, 6, 'Иванов'),
(32, 7, 'Петров'),
(33, 10, 'bgdb'),
(34, 54, 'заказ');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) COLLATE utf16_bin NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1459759191),
('m160404_140241_create_tables', 1459929622);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf16_bin NOT NULL,
  `password` varchar(255) COLLATE utf16_bin NOT NULL,
  `auth_key` varchar(255) COLLATE utf16_bin NOT NULL,
  `token` varchar(255) COLLATE utf16_bin NOT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `auth_key`, `token`, `status`) VALUES
(0, 'admin', '$2y$13$FYTEmR.WChfOqbbGcRr7YuRiS5NTo6YhQsKLyarWUkKmMljmPJdl.', 'FZR3UsuYhPFfX0K_YCn88pAxGbvji1J9', 'o5RVSE1fYbEgBN4XEqnifzPE10BMMjq6_1459929621', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`city`) REFERENCES `city` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `clientorder`
--
ALTER TABLE `clientorder`
  ADD CONSTRAINT `clientorder_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `client` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
