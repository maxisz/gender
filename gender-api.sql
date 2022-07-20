-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 10:15 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gender-api`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(100) NOT NULL,
  `contact_name` varchar(100) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `contact_phone` varchar(15) NOT NULL,
  `contact_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `contact_name`, `contact_email`, `contact_phone`, `contact_message`) VALUES
(1, 'n ', '', '667675875', 'bjhbjbbkjb'),
(2, 'n ', '', '4353', 'dsfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `faq_id` int(16) NOT NULL,
  `faq_title` varchar(300) NOT NULL,
  `faq_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`faq_id`, `faq_title`, `faq_description`) VALUES
(1, 'How Does It Work?', 'It just works as long as you existstingy'),
(2, 'How cant it work?', 'it just doesnt work as long as you exist');

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `key_id` int(100) NOT NULL,
  `key_user_id` int(100) NOT NULL,
  `key_key` varchar(100) NOT NULL,
  `key_label` varchar(100) NOT NULL,
  `key_created_at` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keys`
--

INSERT INTO `keys` (`key_id`, `key_user_id`, `key_key`, `key_label`, `key_created_at`) VALUES
(1, 2, 'cbe71215d994a45d', 'gender_project_Key_gym_app', '2022-07-01 10:50:14.000000'),
(3, 2, 'b218b0b0b93e71f6', 'gender_project_Key_test guy', '2022-07-01 10:56:03.000000'),
(14, 4, '7c1f7ebae007238d', 'gender_project_Key_github_project', '2022-07-02 03:05:51.000000'),
(15, 4, '6e10d9d62363bfbc', 'gender_project_Key_Pro book', '2022-07-02 10:53:08.000000'),
(21, 5, 'ecbbb470f3df31a5', 'gender_project_Key_Test guy', '2022-07-03 13:45:29.000000'),
(22, 6, '267ec43e8d5edd26', 'gender_project_Key_Github', '2022-07-03 17:13:13.000000'),
(23, 6, 'e4139c7f0ff669d8', 'gender_project_Key_Mimi', '2022-07-03 17:13:23.000000'),
(24, 5, '170f76697e71e454', 'gender_project_Key_gym_app', '2022-07-04 10:55:43.000000');

-- --------------------------------------------------------

--
-- Table structure for table `names`
--

CREATE TABLE `names` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `second_name` varchar(20) NOT NULL,
  `country` varchar(15) NOT NULL,
  `gender` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `names`
--

INSERT INTO `names` (`id`, `first_name`, `second_name`, `country`, `gender`) VALUES
(1, 'Name Id', 'first name', 'second name', 'gender'),
(2, '1', 'first_name', 'last_name', 'ga_gende'),
(3, '2', 'Mae', 'Yeeles', 'Male'),
(4, '3', 'Jaymee', 'Seaton', 'Male'),
(5, '4', 'Marena', 'McRory', 'Genderqu'),
(6, '5', 'Abigail', 'Iglesia', 'Male'),
(7, '6', 'Keelia', 'Blackstone', 'Female'),
(8, '7', 'Ursa', 'Rogier', 'Genderqu'),
(9, '8', 'Colene', 'Curtayne', 'Male'),
(10, '9', 'Caritta', 'Behling', 'Agender'),
(11, '10', 'Neron', 'Colgan', 'Female'),
(12, '11', 'Larina', 'McComiskey', 'Male'),
(13, '12', 'Cass', 'Drysdall', 'Male'),
(14, '13', 'Eustace', 'Brade', 'Male'),
(15, '14', 'Greer', 'Woolfitt', 'Male'),
(16, '15', 'Prisca', 'Batters', 'Female'),
(17, '16', 'Kennedy', 'Osorio', 'Male'),
(18, '17', 'Bianca', 'Raven', 'Genderfl'),
(19, '18', 'Rebe', 'Baldelli', 'Female'),
(20, '19', 'Aluin', 'Lamberth', 'Female'),
(21, '20', 'Debbie', 'Gilder', 'Female'),
(22, '21', 'Leonidas', 'Hearle', 'Female'),
(23, '22', 'Renae', 'McTurlough', 'Female'),
(24, '23', 'Samaria', 'Tander', 'Male'),
(25, '24', 'Ilka', 'Heine', 'Polygend'),
(26, '25', 'Christoforo', 'Fibbit', 'Female'),
(27, '26', 'Jaquelin', 'Cellone', 'Female'),
(28, '27', 'Kelley', 'McKeating', 'Male'),
(29, '28', 'Tedi', 'Knights', 'Male'),
(30, '29', 'Marina', 'Salan', 'Female'),
(31, '30', 'Germaine', 'Meeke', 'Male'),
(32, '31', 'Courtney', 'Janoch', 'Female'),
(33, '32', 'Gamaliel', 'Pyatt', 'Female'),
(34, '33', 'Kain', 'Henkens', 'Female'),
(35, '34', 'Walther', 'Frosdick', 'Male'),
(36, '35', 'Keven', 'Ketton', 'Female'),
(37, '36', 'Delbert', 'Struther', 'Male'),
(38, '37', 'Rhona', 'Knell', 'Female'),
(39, '38', 'Clarence', 'Iiannone', 'Female'),
(40, '39', 'Lira', 'Casebourne', 'Male'),
(41, '40', 'Mycah', 'Zuker', 'Male'),
(42, '41', 'Rhys', 'Jarrette', 'Male'),
(43, '42', 'Una', 'Scrafton', 'Female'),
(44, '43', 'Dunn', 'Sherar', 'Female'),
(45, '44', 'Rikki', 'Wallice', 'Female'),
(46, '45', 'Vanya', 'Pinare', 'Female'),
(47, '46', 'Broddie', 'Leare', 'Male'),
(48, '47', 'Demetri', 'Poolman', 'Polygend'),
(49, '48', 'Reynolds', 'Eddington', 'Female'),
(50, '49', 'Clary', 'Wehner', 'Male'),
(51, '50', 'Stacee', 'Stocken', 'Female'),
(52, '51', 'Cleve', 'Olley', 'Male'),
(53, '52', 'Seth', 'Coger', 'Male'),
(54, '53', 'Adria', 'Bentinck', 'Genderfl'),
(55, '54', 'Rahel', 'Ezzle', 'Male'),
(56, '55', 'Trace', 'Le Barr', 'Female'),
(57, '56', 'Deanna', 'Arndtsen', 'Female'),
(58, '57', 'Zia', 'Pond', 'Female'),
(59, '58', 'Harold', 'Goodricke', 'Male'),
(60, '59', 'Shaylynn', 'Hynard', 'Female'),
(61, '60', 'Ulises', 'Brace', 'Male'),
(62, '61', 'Pembroke', 'Harewood', 'Polygend'),
(63, '62', 'Maxim', 'Canto', 'Female'),
(64, '63', 'Yehudi', 'Kassel', 'Female'),
(65, '64', 'Marissa', 'Giacomucci', 'Female'),
(66, '65', 'Misty', 'Hallford', 'Female'),
(67, '66', 'Hewitt', 'Satchel', 'Female'),
(68, '67', 'Amberly', 'Arden', 'Female'),
(69, '68', 'Carter', 'Titterton', 'Female'),
(70, '69', 'Philis', 'Alden', 'Male'),
(71, '70', 'Tito', 'Muzzollo', 'Male'),
(72, '71', 'Debbie', 'Beecroft', 'Male'),
(73, '72', 'Camel', 'Wallentin', 'Male'),
(74, '73', 'Gavrielle', 'Leddy', 'Male'),
(75, '74', 'Hesther', 'Hambrick', 'Female'),
(76, '75', 'Nicky', 'Gland', 'Genderqu'),
(77, '76', 'Louisette', 'Ambroisin', 'Male'),
(78, '77', 'Dionysus', 'Stallon', 'Non-bina'),
(79, '78', 'Evered', 'Clowser', 'Male'),
(80, '79', 'Shelbi', 'Sharpley', 'Female'),
(81, '80', 'Forrest', 'Momford', 'Female'),
(82, '???xa?p?p?a??Z?%{?', '???a2?\\M*?\Zx?????z?s', '^/?????y???', '?n?Z}ئ??'),
(83, '\"·Y?/aǅ???}??x?E', 'A???U??W?', '~?g?Ws\\????v', '?xq/D?'),
(84, '?RW׵n?-?iY???c??޶?zr', '?ۘNҭ!??o?:u???X???U', 'g\0|a?d??r?(ڭ?G?', '&?jsV???'),
(85, '꓏;F2??4??`???!?׆??-?', 'M?b	?G?S??f6v?K??B', 'f?sqm???l?}?}', 'A?Њ}̧/k}'),
(86, '̆EZ????{?M??Q???_?0', '??E??z??xn?[??&', '?q?]0????@???', 'F~??2??'),
(87, '#wDɦ?;?d?ԙ\r{T???i\r??', '?E?@????G?SO?ߓh?O', 'o??Pϊ?9?w?X???', '*??(?8'),
(88, '6??;??d1+?&?a1[', ':?b1ڌ&??}8tz?I?4{', '?ˊ?ޢ??sL????#', '?W??`թf\''),
(89, '??x?2???V:{yY?n-?', '?V:{E\0?Y!', 'a?GB?????%', 'X\\??;?p8'),
(90, '?>	?8????P?8*???*', '?DCk?*?5$a(??8', '?:?8\Zj?\'`$??', 'B\\K/??'),
(91, '<??*?F|\r?B???=?8', '?߿???x???????.?K@??', '\\&???Ai\"?؏??', 'T??!???'),
(92, 'Xh? ?oy[\Z:??pG?#e', '2Tt?D?5ᨓ???x?raIXx', 'U????[?M??e?', 'Z?A/???'),
(93, '?RiS??K롿??u???W??', '/??Q?|d???qj}*8yf?.?', 'u???( ???A??', 'm??K?FY'),
(94, '?fT?9?O????`kE?6VW', '#[?L:H*i?ǊdEc???g-\r?', 'tz?v??Y?+???H?', '?=;?=?L'),
(95, 'wY???U???J-5??', '[-i??ղ???E????', 'ܶma??5??U!??27X', '?φYF$?C['),
(96, '??Z?&???1??p?', '????????=????k?Is?f', ')\'$Jdw??g?ɾ?', '8V????`*'),
(97, '?T?r?S????@:??s\'g?', 'a??', '????', 'a??'),
(98, 'KoI??ԭG?X/?`@v2?', '?y2Yn?JnWz?z?1?sX', '6?Q???rd9Ƒ??:', '?f&C???'),
(99, '????`??Mh????S?0??Le', '???', '?%?????}??Qw?', 'F?x???2'),
(100, '???xa?p?p?a??Z?%{?', '???a2?\\M*?\Zx?????z?s', '^/?????y???', '?n?Z}ئ??'),
(101, '\"·Y?/aǅ???}??x?E', 'A???U??W?', '~?g?Ws\\????v', '?xq/D?'),
(102, '?RW׵n?-?iY???c??޶?zr', '?ۘNҭ!??o?:u???X???U', 'g\0|a?d??r?(ڭ?G?', '&?jsV???'),
(103, '꓏;F2??4??`???!?׆??-?', 'M?b	?G?S??f6v?K??B', 'f?sqm???l?}?}', 'A?Њ}̧/k}'),
(104, '̆EZ????{?M??Q???_?0', '??E??z??xn?[??&', '?q?]0????@???', 'F~??2??'),
(105, '#wDɦ?;?d?ԙ\r{T???i\r??', '?E?@????G?SO?ߓh?O', 'o??Pϊ?9?w?X???', '*??(?8'),
(106, '6??;??d1+?&?a1[', ':?b1ڌ&??}8tz?I?4{', '?ˊ?ޢ??sL????#', '?W??`թf\''),
(107, '??x?2???V:{yY?n-?', '?V:{E\0?Y!', 'a?GB?????%', 'X\\??;?p8'),
(108, '?>	?8????P?8*???*', '?DCk?*?5$a(??8', '?:?8\Zj?\'`$??', 'B\\K/??'),
(109, '<??*?F|\r?B???=?8', '?߿???x???????.?K@??', '\\&???Ai\"?؏??', 'T??!???'),
(110, 'Xh? ?oy[\Z:??pG?#e', '2Tt?D?5ᨓ???x?raIXx', 'U????[?M??e?', 'Z?A/???'),
(111, '?RiS??K롿??u???W??', '/??Q?|d???qj}*8yf?.?', 'u???( ???A??', 'm??K?FY'),
(112, '?fT?9?O????`kE?6VW', '#[?L:H*i?ǊdEc???g-\r?', 'tz?v??Y?+???H?', '?=;?=?L'),
(113, 'wY???U???J-5??', '[-i??ղ???E????', 'ܶma??5??U!??27X', '?φYF$?C['),
(114, '??Z?&???1??p?', '????????=????k?Is?f', ')\'$Jdw??g?ɾ?', '8V????`*'),
(115, '?T?r?S????@:??s\'g?', 'a??', '????', 'a??'),
(116, 'KoI??ԭG?X/?`@v2?', '?y2Yn?JnWz?z?1?sX', '6?Q???rd9Ƒ??:', '?f&C???'),
(117, '????`??Mh????S?0??Le', '???', '?%?????}??Qw?', 'F?x???2'),
(118, 'Name Id', 'first name', 'second name', 'gender'),
(119, '1', 'first_name', 'last_name', 'ga_gende'),
(120, '2', 'Mae', 'Yeeles', 'Male'),
(121, '3', 'Jaymee', 'Seaton', 'Male'),
(122, '4', 'Marena', 'McRory', 'Genderqu'),
(123, '5', 'Abigail', 'Iglesia', 'Male'),
(124, '6', 'Keelia', 'Blackstone', 'Female'),
(125, '7', 'Ursa', 'Rogier', 'Genderqu'),
(126, '8', 'Colene', 'Curtayne', 'Male'),
(127, '9', 'Caritta', 'Behling', 'Agender'),
(128, '10', 'Neron', 'Colgan', 'Female'),
(129, '11', 'Larina', 'McComiskey', 'Male'),
(130, '12', 'Cass', 'Drysdall', 'Male'),
(131, '13', 'Eustace', 'Brade', 'Male'),
(132, '14', 'Greer', 'Woolfitt', 'Male'),
(133, '15', 'Prisca', 'Batters', 'Female'),
(134, '16', 'Kennedy', 'Osorio', 'Male'),
(135, '17', 'Bianca', 'Raven', 'Genderfl'),
(136, '18', 'Rebe', 'Baldelli', 'Female'),
(137, '19', 'Aluin', 'Lamberth', 'Female'),
(138, '20', 'Debbie', 'Gilder', 'Female'),
(139, '21', 'Leonidas', 'Hearle', 'Female'),
(140, '22', 'Renae', 'McTurlough', 'Female'),
(141, '23', 'Samaria', 'Tander', 'Male'),
(142, '24', 'Ilka', 'Heine', 'Polygend'),
(143, '25', 'Christoforo', 'Fibbit', 'Female'),
(144, '26', 'Jaquelin', 'Cellone', 'Female'),
(145, '27', 'Kelley', 'McKeating', 'Male'),
(146, '28', 'Tedi', 'Knights', 'Male'),
(147, '29', 'Marina', 'Salan', 'Female'),
(148, '30', 'Germaine', 'Meeke', 'Male'),
(149, '31', 'Courtney', 'Janoch', 'Female'),
(150, '32', 'Gamaliel', 'Pyatt', 'Female'),
(151, '33', 'Kain', 'Henkens', 'Female'),
(152, '34', 'Walther', 'Frosdick', 'Male'),
(153, '35', 'Keven', 'Ketton', 'Female'),
(154, '36', 'Delbert', 'Struther', 'Male'),
(155, '37', 'Rhona', 'Knell', 'Female'),
(156, '38', 'Clarence', 'Iiannone', 'Female'),
(157, '39', 'Lira', 'Casebourne', 'Male'),
(158, '40', 'Mycah', 'Zuker', 'Male'),
(159, '41', 'Rhys', 'Jarrette', 'Male'),
(160, '42', 'Una', 'Scrafton', 'Female'),
(161, '43', 'Dunn', 'Sherar', 'Female'),
(162, '44', 'Rikki', 'Wallice', 'Female'),
(163, '45', 'Vanya', 'Pinare', 'Female'),
(164, '46', 'Broddie', 'Leare', 'Male'),
(165, '47', 'Demetri', 'Poolman', 'Polygend'),
(166, '48', 'Reynolds', 'Eddington', 'Female'),
(167, '49', 'Clary', 'Wehner', 'Male'),
(168, '50', 'Stacee', 'Stocken', 'Female'),
(169, '51', 'Cleve', 'Olley', 'Male'),
(170, '52', 'Seth', 'Coger', 'Male'),
(171, '53', 'Adria', 'Bentinck', 'Genderfl'),
(172, '54', 'Rahel', 'Ezzle', 'Male'),
(173, '55', 'Trace', 'Le Barr', 'Female'),
(174, '56', 'Deanna', 'Arndtsen', 'Female'),
(175, '57', 'Zia', 'Pond', 'Female'),
(176, '58', 'Harold', 'Goodricke', 'Male'),
(177, '59', 'Shaylynn', 'Hynard', 'Female'),
(178, '60', 'Ulises', 'Brace', 'Male'),
(179, '61', 'Pembroke', 'Harewood', 'Polygend'),
(180, '62', 'Maxim', 'Canto', 'Female'),
(181, '63', 'Yehudi', 'Kassel', 'Female'),
(182, '64', 'Marissa', 'Giacomucci', 'Female'),
(183, '65', 'Misty', 'Hallford', 'Female'),
(184, '66', 'Hewitt', 'Satchel', 'Female'),
(185, '67', 'Amberly', 'Arden', 'Female'),
(186, '68', 'Carter', 'Titterton', 'Female'),
(187, '69', 'Philis', 'Alden', 'Male'),
(188, '70', 'Tito', 'Muzzollo', 'Male'),
(189, '71', 'Debbie', 'Beecroft', 'Male'),
(190, '72', 'Camel', 'Wallentin', 'Male'),
(191, '73', 'Gavrielle', 'Leddy', 'Male'),
(192, '74', 'Hesther', 'Hambrick', 'Female'),
(193, '75', 'Nicky', 'Gland', 'Genderqu'),
(194, '76', 'Louisette', 'Ambroisin', 'Male'),
(195, '77', 'Dionysus', 'Stallon', 'Non-bina'),
(196, '78', 'Evered', 'Clowser', 'Male'),
(197, '79', 'Shelbi', 'Sharpley', 'Female'),
(198, '80', 'Forrest', 'Momford', 'Female'),
(199, 'Name Id', 'first name', 'second name', 'gender'),
(200, '1', 'first_name', 'last_name', 'ga_gende'),
(201, '2', 'Mae', 'Yeeles', 'Male'),
(202, '3', 'Jaymee', 'Seaton', 'Male'),
(203, '4', 'Marena', 'McRory', 'Genderqu'),
(204, '5', 'Abigail', 'Iglesia', 'Male'),
(205, '6', 'Keelia', 'Blackstone', 'Female'),
(206, '7', 'Ursa', 'Rogier', 'Genderqu'),
(207, '8', 'Colene', 'Curtayne', 'Male'),
(208, '9', 'Caritta', 'Behling', 'Agender'),
(209, '10', 'Neron', 'Colgan', 'Female'),
(210, '11', 'Larina', 'McComiskey', 'Male'),
(211, '12', 'Cass', 'Drysdall', 'Male'),
(212, '13', 'Eustace', 'Brade', 'Male'),
(213, '14', 'Greer', 'Woolfitt', 'Male'),
(214, '15', 'Prisca', 'Batters', 'Female'),
(215, '16', 'Kennedy', 'Osorio', 'Male'),
(216, '17', 'Bianca', 'Raven', 'Genderfl'),
(217, '18', 'Rebe', 'Baldelli', 'Female'),
(218, '19', 'Aluin', 'Lamberth', 'Female'),
(219, '20', 'Debbie', 'Gilder', 'Female'),
(220, '21', 'Leonidas', 'Hearle', 'Female'),
(221, '22', 'Renae', 'McTurlough', 'Female'),
(222, '23', 'Samaria', 'Tander', 'Male'),
(223, '24', 'Ilka', 'Heine', 'Polygend'),
(224, '25', 'Christoforo', 'Fibbit', 'Female'),
(225, '26', 'Jaquelin', 'Cellone', 'Female'),
(226, '27', 'Kelley', 'McKeating', 'Male'),
(227, '28', 'Tedi', 'Knights', 'Male'),
(228, '29', 'Marina', 'Salan', 'Female'),
(229, '30', 'Germaine', 'Meeke', 'Male'),
(230, '31', 'Courtney', 'Janoch', 'Female'),
(231, '32', 'Gamaliel', 'Pyatt', 'Female'),
(232, '33', 'Kain', 'Henkens', 'Female'),
(233, '34', 'Walther', 'Frosdick', 'Male'),
(234, '35', 'Keven', 'Ketton', 'Female'),
(235, '36', 'Delbert', 'Struther', 'Male'),
(236, '37', 'Rhona', 'Knell', 'Female'),
(237, '38', 'Clarence', 'Iiannone', 'Female'),
(238, '39', 'Lira', 'Casebourne', 'Male'),
(239, '40', 'Mycah', 'Zuker', 'Male'),
(240, '41', 'Rhys', 'Jarrette', 'Male'),
(241, '42', 'Una', 'Scrafton', 'Female'),
(242, '43', 'Dunn', 'Sherar', 'Female'),
(243, '44', 'Rikki', 'Wallice', 'Female'),
(244, '45', 'Vanya', 'Pinare', 'Female'),
(245, '46', 'Broddie', 'Leare', 'Male'),
(246, '47', 'Demetri', 'Poolman', 'Polygend'),
(247, '48', 'Reynolds', 'Eddington', 'Female'),
(248, '49', 'Clary', 'Wehner', 'Male'),
(249, '50', 'Stacee', 'Stocken', 'Female'),
(250, '51', 'Cleve', 'Olley', 'Male'),
(251, '52', 'Seth', 'Coger', 'Male'),
(252, '53', 'Adria', 'Bentinck', 'Genderfl'),
(253, '54', 'Rahel', 'Ezzle', 'Male'),
(254, '55', 'Trace', 'Le Barr', 'Female'),
(255, '56', 'Deanna', 'Arndtsen', 'Female'),
(256, '57', 'Zia', 'Pond', 'Female'),
(257, '58', 'Harold', 'Goodricke', 'Male'),
(258, '59', 'Shaylynn', 'Hynard', 'Female'),
(259, '60', 'Ulises', 'Brace', 'Male'),
(260, '61', 'Pembroke', 'Harewood', 'Polygend'),
(261, '62', 'Maxim', 'Canto', 'Female'),
(262, '63', 'Yehudi', 'Kassel', 'Female'),
(263, '64', 'Marissa', 'Giacomucci', 'Female'),
(264, '65', 'Misty', 'Hallford', 'Female'),
(265, '66', 'Hewitt', 'Satchel', 'Female'),
(266, '67', 'Amberly', 'Arden', 'Female'),
(267, '68', 'Carter', 'Titterton', 'Female'),
(268, '69', 'Philis', 'Alden', 'Male'),
(269, '70', 'Tito', 'Muzzollo', 'Male'),
(270, '71', 'Debbie', 'Beecroft', 'Male'),
(271, '72', 'Camel', 'Wallentin', 'Male'),
(272, '73', 'Gavrielle', 'Leddy', 'Male'),
(273, '74', 'Hesther', 'Hambrick', 'Female'),
(274, '75', 'Nicky', 'Gland', 'Genderqu'),
(275, '76', 'Louisette', 'Ambroisin', 'Male'),
(276, '77', 'Dionysus', 'Stallon', 'Non-bina'),
(277, '78', 'Evered', 'Clowser', 'Male'),
(278, '79', 'Shelbi', 'Sharpley', 'Female'),
(279, '80', 'Forrest', 'Momford', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `plan_id` int(20) NOT NULL,
  `plan_name` varchar(20) NOT NULL,
  `plan_limit` int(255) NOT NULL,
  `plan_period` varchar(20) NOT NULL,
  `plan_price` int(255) NOT NULL,
  `plan_excel_limit` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`plan_id`, `plan_name`, `plan_limit`, `plan_period`, `plan_price`, `plan_excel_limit`) VALUES
(1, 'free', 500, 'Monthly', 0, 4),
(2, 'premium', 5000, 'Monthly', 45, 200),
(3, 'PRO', 20000, 'Lifetime', 200, 5000),
(4, 'Gold', 500000, 'Lifetime', 300, 23000),
(22, 'Basic i', 5000, 'yearly', 100, 1237);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `site_title` varchar(100) NOT NULL,
  `site_logo` varchar(100) NOT NULL,
  `site_keywords` varchar(100) NOT NULL,
  `site_description` varchar(100) NOT NULL,
  `site_smtp_host` varchar(30) NOT NULL,
  `site_smtp_port` int(100) NOT NULL,
  `site_smtp_username` varchar(100) NOT NULL,
  `site_smtp_password` varchar(100) NOT NULL,
  `site_key_id` varchar(100) NOT NULL,
  `site_key_secret` varchar(100) NOT NULL,
  `site_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`site_title`, `site_logo`, `site_keywords`, `site_description`, `site_smtp_host`, `site_smtp_port`, `site_smtp_username`, `site_smtp_password`, `site_key_id`, `site_key_secret`, `site_id`) VALUES
('Gender Apiff', '/logo-1.png', 'gender,gender,gender,kikgkg', 'get free gender servicesfff', 'mail.me.com', 2344444, 'maxwes', '12345', 'rzp_test_wQzOvAO0uVDTGa', 'EbFDh0GznuG6jUjBULpKdc1Y', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `currency` varchar(5) NOT NULL,
  `trnx_id` varchar(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `package_name` varchar(12) NOT NULL,
  `transaction_date` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `amount`, `currency`, `trnx_id`, `user_id`, `status`, `package_name`, `transaction_date`) VALUES
(1, 1000, 'INR', 'pay_Jnpt4zxwDfdJRn', 0, 'captured', '', NULL),
(2, 100, 'INR', 'pay_Jnpy4rm293liaQ', 100, 'captured', '', NULL),
(3, 100, 'INR', 'pay_Jnq1AFZy6gLMfw', 100, 'captured', '', NULL),
(4, 100, 'INR', 'pay_Jnq2ceE1O1quo2', 100, 'captured', '', NULL),
(5, 100, 'INR', 'pay_Jnq7S1045lnZKV', 100, 'captured', '', NULL),
(6, 100, 'INR', 'pay_JnqBHMly8rnz57', 100, 'captured', '', NULL),
(7, 100, 'INR', 'pay_JnqCJHEu1HqCCZ', 100, 'captured', '', NULL),
(8, 4500, 'INR', 'pay_JnqqTt6gvYptwC', 2, 'captured', '', NULL),
(9, 30000, 'INR', 'pay_JnrMGXJ81ywqre', 2, 'captured', 'Gold', '2022-06-30 16:47:10.000000'),
(10, 20000, 'INR', 'pay_JnrOts2Z7yhFtS', 2, 'captured', 'maxwell Kibe', '2022-06-30 16:49:40.000000'),
(11, 30000, 'INR', 'pay_JnrnIi88xtVSkh', 2, 'captured', 'Gold', '2022-06-30 17:12:45.000000'),
(12, 30000, 'INR', 'pay_JnrvgNj4vNbCqN', 2, 'captured', 'Gold', '2022-06-30 17:20:42.000000'),
(13, 20000, 'INR', 'pay_JnsjhytntpIXn4', 2, 'captured', 'maxwell Kibe', '2022-06-30 18:08:03.000000'),
(14, 20000, 'INR', 'pay_JnsrxDme2zg6SV', 2, 'captured', 'PRO', '2022-06-30 18:15:51.000000'),
(15, 4500, 'INR', 'pay_Jnssou2RvklpkQ', 2, 'captured', 'premium', '2022-06-30 18:16:40.000000'),
(16, 4500, 'INR', 'pay_Jnsumj3Lj1jmom', 2, 'captured', 'premium', '2022-06-30 18:18:32.000000'),
(17, 4500, 'INR', 'pay_JnswoeCNtLC7My', 2, 'captured', 'premium', '2022-06-30 18:20:27.000000'),
(18, 30000, 'INR', 'pay_JoAuoGWxp33U3a', 4, 'captured', 'Gold', '2022-07-01 11:55:07.000000'),
(19, 20000, 'INR', 'pay_JoPucStsItTiJo', 4, 'captured', 'PRO', '2022-07-02 02:35:20.000000'),
(20, 20000, 'INR', 'pay_Joo3CW9XVHbKYj', 2, 'captured', 'PRO', '2022-07-03 02:12:06.000000'),
(21, 30000, 'INR', 'pay_Jooy2vLzCDIrbi', 2, 'captured', 'Gold', '2022-07-03 03:05:52.000000'),
(22, 30000, 'INR', 'pay_Jop1oscvKKFdSG', 2, 'captured', 'Gold', '2022-07-03 03:09:25.000000'),
(23, 30000, 'INR', 'pay_Jop43lKLCpViOZ', 2, 'captured', 'Gold', '2022-07-03 03:11:34.000000'),
(24, 30000, 'INR', 'pay_Jop67oMXyDxC8b', 2, 'captured', 'Gold', '2022-07-03 03:13:31.000000'),
(25, 4500, 'INR', 'pay_JoplluWTCp3BiV', 4, 'captured', 'premium', '2022-07-03 03:52:56.000000'),
(26, 20000, 'INR', 'pay_JoqWWE7QEwAg49', 2, 'captured', 'PRO', '2022-07-03 04:37:12.000000'),
(27, 20000, 'INR', 'pay_JovqLiHBZZZwbD', 4, 'captured', 'PRO', '2022-07-03 09:49:25.000000'),
(28, 20000, 'INR', 'pay_JowuQT1t25b24B', 5, 'captured', 'PRO', '2022-07-03 10:51:58.000000'),
(29, 30000, 'INR', 'pay_JozJvFLrf4s0xq', 5, 'captured', 'Gold', '2022-07-03 13:13:32.000000'),
(30, 20000, 'INR', 'pay_JozQ9gRQ268iz0', 5, 'captured', 'PRO', '2022-07-03 13:19:24.000000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(20) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `user_email` varchar(20) NOT NULL,
  `user_phone` varchar(16) DEFAULT NULL,
  `user_verification_key` varchar(30) NOT NULL,
  `user_verified_at` datetime DEFAULT NULL,
  `user_member_type` varchar(10) NOT NULL DEFAULT 'free',
  `user_password` varchar(40) NOT NULL,
  `user_created_at` datetime NOT NULL,
  `user_api_key` varchar(40) NOT NULL,
  `user_calls` int(11) NOT NULL DEFAULT 0,
  `user_member_name` varchar(10) NOT NULL DEFAULT 'free',
  `user_credits` int(255) NOT NULL DEFAULT 0,
  `user_credits_created_at` datetime(6) DEFAULT current_timestamp(6),
  `user_credits_expired_at` datetime(6) DEFAULT NULL,
  `user_company` varchar(100) NOT NULL,
  `user_street` varchar(100) NOT NULL,
  `user_address_line` varchar(30) NOT NULL,
  `user_country` varchar(10) NOT NULL,
  `user_country_code` varchar(7) NOT NULL,
  `user_vat_number` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_phone`, `user_verification_key`, `user_verified_at`, `user_member_type`, `user_password`, `user_created_at`, `user_api_key`, `user_calls`, `user_member_name`, `user_credits`, `user_credits_created_at`, `user_credits_expired_at`, `user_company`, `user_street`, `user_address_line`, `user_country`, `user_country_code`, `user_vat_number`) VALUES
(1, 'maxwell kemboi', 'developer@gender.com', NULL, '6285880a15d28', NULL, '1', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00', '3b392678c63038c4', 0, 'free', 0, '2022-07-01 02:37:13.608302', NULL, '', '', '', '', 'procc', 0),
(3, 'maxwell kemboi', 'tester@gender.com', NULL, '6285e633dd189', NULL, '1', '25d55ad283aa400af464c76d713c07ad', '0000-00-00 00:00:00', '1f0038d3490b9741', 0, 'free', 0, '2022-07-01 02:37:13.608302', NULL, '', '', '', '', 'procc', 0),
(5, 'tester kuruto', 'max@me.com', NULL, '62c1ad2d7f445', NULL, '0', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00', '69efc92e4d59cc24', 55, 'PRO', 19945, '2022-07-03 07:52:29.533190', NULL, '', '', '', '', '', 0),
(6, 'micsofte', 'mic@me.com', NULL, '62c20434ebbcf', NULL, '1', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00', 'c223b9dbdd27a041', 0, 'free', 0, '2022-07-03 14:03:48.972500', NULL, '', '', '', '', '', 0),
(7, 'f y', 'f@y.com', NULL, '62c20554acadf', NULL, '1', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00', '98cc48b7b63079c8', 0, 'free', 0, '2022-07-03 14:08:36.707548', NULL, '', '', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`key_id`);

--
-- Indexes for table `names`
--
ALTER TABLE `names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`plan_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`site_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `faq_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `keys`
--
ALTER TABLE `keys`
  MODIFY `key_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `names`
--
ALTER TABLE `names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `plan_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `site_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
