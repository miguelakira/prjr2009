-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Out 22, 2009 as 09:09 AM
-- Versão do Servidor: 5.1.30
-- Versão do PHP: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `prjr2009`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 12),
(2, 1, NULL, NULL, 'Categorias', 2, 3),
(3, 1, NULL, NULL, 'Groups', 4, 5),
(4, 1, NULL, NULL, 'Users', 6, 7),
(5, 1, NULL, NULL, 'Paginas', 8, 9),
(6, 1, NULL, NULL, 'Noticias', 10, 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=231 ;

--
-- Extraindo dados da tabela `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 1, 'users', 1, 460),
(2, 1, 'Group', 2, 'superusers', 2, 5),
(4, 2, 'User', 1, 'admin', 3, 4),
(5, 1, NULL, NULL, 'usuario', 8, 9),
(6, 1, 'User', 3, NULL, 10, 11),
(7, 1, 'User', 4, NULL, 12, 13),
(8, 1, 'User', 5, NULL, 14, 15),
(9, 1, 'User', 6, NULL, 16, 17),
(10, 1, 'User', 7, NULL, 18, 19),
(11, 1, 'User', 8, NULL, 20, 21),
(12, 1, 'User', 9, NULL, 22, 23),
(13, 1, 'User', 10, NULL, 24, 25),
(14, 1, 'User', 11, NULL, 26, 27),
(15, 1, 'User', 2, NULL, 28, 29),
(16, 1, 'User', 3, NULL, 30, 31),
(17, 1, 'User', 4, NULL, 32, 33),
(18, 1, 'User', 5, NULL, 34, 35),
(19, 1, 'User', 6, NULL, 36, 37),
(20, 1, 'User', 7, NULL, 38, 39),
(21, 1, 'User', 8, NULL, 40, 41),
(22, 1, 'User', 9, NULL, 42, 43),
(23, 1, 'User', 10, NULL, 44, 45),
(24, 1, 'User', 11, NULL, 46, 47),
(25, 1, 'User', 12, NULL, 48, 49),
(26, 1, 'User', 13, NULL, 50, 51),
(27, 1, 'User', 14, NULL, 52, 53),
(28, 1, 'User', 15, NULL, 54, 55),
(29, 1, 'User', 16, NULL, 56, 57),
(30, 1, 'User', 17, NULL, 58, 59),
(31, 1, 'User', 18, NULL, 60, 61),
(32, 1, 'User', 19, NULL, 62, 63),
(33, 1, 'User', 20, NULL, 64, 65),
(34, 1, 'User', 21, NULL, 66, 67),
(35, 1, 'User', 22, NULL, 68, 69),
(36, 1, 'User', 23, NULL, 70, 71),
(37, 1, 'User', 24, NULL, 72, 73),
(38, 1, 'User', 25, NULL, 74, 75),
(39, 1, 'User', 26, NULL, 76, 77),
(40, 1, 'User', 27, NULL, 78, 79),
(41, 1, 'User', 28, NULL, 80, 81),
(42, 1, 'User', 29, NULL, 82, 83),
(43, 1, 'User', 30, NULL, 84, 85),
(44, 1, 'User', 31, NULL, 86, 87),
(45, 1, 'User', 32, NULL, 88, 89),
(46, 1, 'User', 33, NULL, 90, 91),
(47, 1, 'User', 34, NULL, 92, 93),
(48, 1, 'User', 35, NULL, 94, 95),
(49, 1, 'User', 36, NULL, 96, 97),
(50, 1, 'User', 37, NULL, 98, 99),
(51, 1, 'User', 38, NULL, 100, 101),
(52, 1, 'User', 39, NULL, 102, 103),
(53, 1, 'User', 40, NULL, 104, 105),
(54, 1, 'User', 41, NULL, 106, 107),
(55, 1, 'User', 42, NULL, 108, 109),
(56, 1, 'User', 43, NULL, 110, 111),
(57, 1, 'User', 44, NULL, 112, 113),
(58, 1, 'User', 45, NULL, 114, 115),
(59, 1, 'User', 46, NULL, 116, 117),
(60, 1, 'User', 47, NULL, 118, 119),
(61, 1, 'User', 48, NULL, 120, 121),
(62, 1, 'User', 49, NULL, 122, 123),
(63, 1, 'User', 50, NULL, 124, 125),
(64, 1, 'User', 51, NULL, 126, 127),
(65, 1, 'User', 52, NULL, 128, 129),
(66, 1, 'User', 53, NULL, 130, 131),
(67, 1, 'User', 54, NULL, 132, 133),
(68, 1, 'User', 55, NULL, 134, 135),
(69, 1, 'User', 56, NULL, 136, 137),
(70, 1, 'User', 57, NULL, 138, 139),
(71, 1, 'User', 58, NULL, 140, 141),
(72, 1, 'User', 59, NULL, 142, 143),
(73, 1, 'User', 60, NULL, 144, 145),
(74, 1, 'User', 61, NULL, 146, 147),
(75, 1, 'User', 62, NULL, 148, 149),
(76, 1, 'User', 63, NULL, 150, 151),
(77, 1, 'User', 64, NULL, 152, 153),
(78, 1, 'User', 65, NULL, 154, 155),
(79, 1, 'User', 66, NULL, 156, 157),
(80, 1, 'User', 67, NULL, 158, 159),
(81, 1, 'User', 68, NULL, 160, 161),
(82, 1, 'User', 69, NULL, 162, 163),
(83, 1, 'User', 70, NULL, 164, 165),
(84, 1, 'User', 71, NULL, 166, 167),
(85, 1, 'User', 72, NULL, 168, 169),
(86, 1, 'User', 73, NULL, 170, 171),
(87, 1, 'User', 74, NULL, 172, 173),
(88, 1, 'User', 75, NULL, 174, 175),
(89, 1, 'User', 76, NULL, 176, 177),
(90, 1, 'User', 77, NULL, 178, 179),
(91, 1, 'User', 78, NULL, 180, 181),
(92, 1, 'User', 79, NULL, 182, 183),
(93, 1, 'User', 80, NULL, 184, 185),
(94, 1, 'User', 81, NULL, 186, 187),
(95, 1, 'User', 82, NULL, 188, 189),
(96, 1, 'User', 83, NULL, 190, 191),
(97, 1, 'User', 84, NULL, 192, 193),
(98, 1, 'User', 85, NULL, 194, 195),
(99, 1, 'User', 86, NULL, 196, 197),
(100, 1, 'User', 87, NULL, 198, 199),
(101, 1, 'User', 88, NULL, 200, 201),
(102, 1, 'User', 89, NULL, 202, 203),
(103, 1, 'User', 90, NULL, 204, 205),
(104, 1, 'User', 91, NULL, 206, 207),
(105, 1, 'User', 92, NULL, 208, 209),
(106, 1, 'User', 93, NULL, 210, 211),
(107, 1, 'User', 94, NULL, 212, 213),
(108, 1, 'User', 95, NULL, 214, 215),
(109, 1, 'User', 96, NULL, 216, 217),
(110, 1, 'User', 97, NULL, 218, 219),
(111, 1, 'User', 98, NULL, 220, 221),
(112, 1, 'User', 99, NULL, 222, 223),
(113, 1, 'User', 100, NULL, 224, 225),
(114, 1, 'User', 101, NULL, 226, 227),
(115, 1, 'User', 102, NULL, 228, 229),
(116, 1, 'User', 103, NULL, 230, 231),
(117, 1, 'User', 104, NULL, 232, 233),
(118, 1, 'User', 105, NULL, 234, 235),
(119, 1, 'User', 106, NULL, 236, 237),
(120, 1, 'User', 107, NULL, 238, 239),
(121, 1, 'User', 108, NULL, 240, 241),
(122, 1, 'User', 109, NULL, 242, 243),
(123, 1, 'User', 110, NULL, 244, 245),
(124, 1, 'User', 111, NULL, 246, 247),
(125, 1, 'User', 112, NULL, 248, 249),
(126, 1, 'User', 113, NULL, 250, 251),
(127, 1, 'User', 114, NULL, 252, 253),
(128, 1, 'User', 115, NULL, 254, 255),
(129, 1, 'User', 116, NULL, 256, 257),
(130, 1, 'User', 117, NULL, 258, 259),
(131, 1, 'User', 118, NULL, 260, 261),
(132, 1, 'User', 119, NULL, 262, 263),
(133, 1, 'User', 120, NULL, 264, 265),
(134, 1, 'User', 121, NULL, 266, 267),
(135, 1, 'User', 122, NULL, 268, 269),
(136, 1, 'User', 123, NULL, 270, 271),
(137, 1, 'User', 124, NULL, 272, 273),
(138, 1, 'User', 125, NULL, 274, 275),
(139, 1, 'User', 126, NULL, 276, 277),
(140, 1, 'User', 127, NULL, 278, 279),
(141, 1, 'User', 128, NULL, 280, 281),
(142, 1, 'User', 129, NULL, 282, 283),
(143, 1, 'User', 130, NULL, 284, 285),
(144, 1, 'User', 131, NULL, 286, 287),
(145, 1, 'User', 132, NULL, 288, 289),
(146, 1, 'User', 133, NULL, 290, 291),
(147, 1, 'User', 134, NULL, 292, 293),
(148, 1, 'User', 135, NULL, 294, 295),
(149, 1, 'User', 136, NULL, 296, 297),
(150, 1, 'User', 137, NULL, 298, 299),
(151, 1, 'User', 138, NULL, 300, 301),
(152, 1, 'User', 139, NULL, 302, 303),
(153, 1, 'User', 140, NULL, 304, 305),
(154, 1, 'User', 141, NULL, 306, 307),
(155, 1, 'User', 142, NULL, 308, 309),
(156, 1, 'User', 143, NULL, 310, 311),
(157, 1, 'User', 144, NULL, 312, 313),
(158, 1, 'User', 145, NULL, 314, 315),
(159, 1, 'User', 146, NULL, 316, 317),
(160, 1, 'User', 147, NULL, 318, 319),
(161, 1, 'User', 148, NULL, 320, 321),
(162, 1, 'User', 149, NULL, 322, 323),
(163, 1, 'User', 150, NULL, 324, 325),
(164, 1, 'User', 151, NULL, 326, 327),
(165, 1, 'User', 152, NULL, 328, 329),
(166, 1, 'User', 153, NULL, 330, 331),
(167, 1, 'User', 154, NULL, 332, 333),
(168, 1, 'User', 155, NULL, 334, 335),
(169, 1, 'User', 156, NULL, 336, 337),
(170, 1, 'User', 157, NULL, 338, 339),
(171, 1, 'User', 158, NULL, 340, 341),
(172, 1, 'User', 159, NULL, 342, 343),
(173, 1, 'User', 160, NULL, 344, 345),
(174, 1, 'User', 161, NULL, 346, 347),
(175, 1, 'User', 162, NULL, 348, 349),
(176, 1, 'User', 163, NULL, 350, 351),
(177, 1, 'User', 164, NULL, 352, 353),
(178, 1, 'User', 165, NULL, 354, 355),
(179, 1, 'User', 166, NULL, 356, 357),
(180, 1, 'User', 167, NULL, 358, 359),
(181, 1, 'User', 168, NULL, 360, 361),
(182, 1, 'User', 169, NULL, 362, 363),
(183, 1, 'User', 170, NULL, 364, 365),
(184, 1, 'User', 171, NULL, 366, 367),
(185, 1, 'User', 172, NULL, 368, 369),
(186, 1, 'User', 173, NULL, 370, 371),
(187, 1, 'User', 174, NULL, 372, 373),
(188, 1, 'User', 175, NULL, 374, 375),
(189, 1, 'User', 176, NULL, 376, 377),
(190, 1, 'User', 177, NULL, 378, 379),
(191, 1, 'User', 178, NULL, 380, 381),
(192, 1, 'User', 179, NULL, 382, 383),
(193, 1, 'User', 180, NULL, 384, 385),
(194, 1, 'User', 181, NULL, 386, 387),
(195, 1, 'User', 182, NULL, 388, 389),
(196, 1, 'User', 183, NULL, 390, 391),
(197, 1, 'User', 184, NULL, 392, 393),
(198, 1, 'User', 185, NULL, 394, 395),
(199, 1, 'User', 186, NULL, 396, 397),
(200, 1, 'User', 187, NULL, 398, 399),
(201, 1, 'User', 188, NULL, 400, 401),
(202, 1, 'User', 189, NULL, 402, 403),
(203, 1, 'User', 190, NULL, 404, 405),
(204, 1, 'User', 191, NULL, 406, 407),
(205, 1, 'User', 192, NULL, 408, 409),
(206, 1, 'User', 193, NULL, 410, 411),
(207, 1, 'User', 194, NULL, 412, 413),
(208, 1, 'User', 195, NULL, 414, 415),
(209, 1, 'User', 196, NULL, 416, 417),
(210, 1, 'User', 197, NULL, 418, 419),
(211, 1, 'User', 198, NULL, 420, 421),
(212, 1, 'User', 199, NULL, 422, 423),
(213, 1, 'User', 200, NULL, 424, 425),
(214, 1, 'User', 201, NULL, 426, 427),
(215, 1, 'User', 202, NULL, 428, 429),
(216, 1, 'User', 203, NULL, 430, 431),
(217, 1, 'User', 204, NULL, 432, 433),
(218, 1, 'User', 205, NULL, 434, 435),
(219, 1, 'User', 206, NULL, 436, 437),
(220, 1, 'User', 207, NULL, 438, 439),
(221, 1, 'User', 208, NULL, 440, 441),
(222, 1, 'User', 209, NULL, 442, 443),
(223, 1, 'User', 210, NULL, 444, 445),
(224, 1, 'User', 211, NULL, 446, 447),
(225, 1, 'User', 212, NULL, 448, 449),
(226, 1, 'User', 213, NULL, 450, 451),
(227, 1, 'User', 214, NULL, 452, 453),
(228, 1, 'User', 215, NULL, 454, 455),
(229, 1, 'User', 216, NULL, 456, 457),
(230, 1, 'User', 217, NULL, 458, 459);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 2, 1, '1', '1', '1', '1'),
(2, 1, 1, '0', '1', '0', '0'),
(3, 1, 5, '-1', '-1', '-1', '-1'),
(4, 1, 3, '-1', '-1', '-1', '-1'),
(5, 1, 4, '-1', '-1', '-1', '-1'),
(6, 1, 6, '0', '-1', '0', '0'),
(7, 1, 2, '-1', '-1', '-1', '-1'),
(8, 2, 2, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `index` int(11) NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `index` (`index`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `categorias`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `culturais_users`
--

CREATE TABLE IF NOT EXISTS `culturais_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `cultural_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `culturais_users`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `culturais`
--

CREATE TABLE IF NOT EXISTS `culturais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tipo` int(2) NOT NULL,
  `descricao` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `vagas` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `culturais`
--

INSERT INTO `culturais` (`id`, `titulo`, `tipo`, `descricao`, `vagas`) VALUES
(1, 'Mini-curso', 1, '', 10),
(2, 'Workshop', 2, '', 20);

-- --------------------------------------------------------

--
-- Estrutura da tabela `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `parent_id` int(10) DEFAULT '0',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `groups`
--

INSERT INTO `groups` (`id`, `name`, `parent_id`, `created`, `modified`) VALUES
(2, 'superusers', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, 'users', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(256) CHARACTER SET latin2 COLLATE latin2_bin NOT NULL,
  `texto` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `created` datetime NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  `url` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `texto`, `created`, `ativo`, `url`) VALUES
(1, 'Lalalal', 0x3c703e6b6473616e626d626461736e6461733c2f703e, '2009-09-30 18:13:11', 1, 'lalalal'),
(2, 'teste', 0x3c703e6461736d6e2c646e61736d64207361646173207364732061643c2f703e, '2009-09-30 18:13:24', 1, 'teste'),
(3, 'lllllllllllllllllllllll', 0x3c703e6e6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d6d3c2f703e0d0a3c703e646e617320646e2073643c2f703e0d0a3c703e6473613c2f703e0d0a3c703e266e6273703b6173646e207361646e206173643c2f703e0d0a3c703e6d7320643c2f703e0d0a3c703e266e6273703b6461736e206173646e73643c2f703e, '2009-09-30 18:13:43', 1, 'lllllllllllllllllllllll'),
(4, 'dnmas,ndmn dm,ns mdns', 0x3c703e646e736d2c2061646e6173206e6473616d6e2061736e6d643c2f703e0d0a3c703e7320646e3c2f703e0d0a3c703e7361206b61736e6e73642061736e6473616e207361646e61736e20643c2f703e0d0a3c703e617364206e3c2f703e0d0a3c703e6173646e61733c2f703e0d0a3c703e642061736e647361643c2f703e, '2009-09-30 18:13:59', 1, 'dnmas_ndmn_dm_ns_mdns'),
(5, 'tenma,sfn,', 0x3c703e6661736e6d736d20736e6d663c2f703e0d0a3c703e6661646e3c2f703e0d0a3c703e266e6273703b66646e3c2f703e0d0a3c703e6667646e6620646d662c6420666e6164733c2f703e0d0a3c703e6e666473616e3c2f703e0d0a3c703e66646e3c2f703e0d0a3c703e66642061646e6b733c2f703e0d0a3c703e266e6273703b3c2f703e, '2009-09-30 18:14:16', 1, 'tenma_sfn'),
(6, 'fasdfdsa', 0x3c703e666173646664733c2f703e0d0a3c703e6664613c2f703e0d0a3c703e666173643c2f703e0d0a3c703e646166733c2f703e0d0a3c703e6461663c2f703e0d0a3c703e6661643c2f703e0d0a3c703e6661643c2f703e0d0a3c703e646673613c2f703e0d0a3c703e677364613c2f703e0d0a3c703e6766613c2f703e0d0a3c703e626661643c2f703e0d0a3c703e6668613c2f703e0d0a3c703e6661646764663c2f703e, '2009-09-30 18:14:38', 1, 'fasdfdsa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `paginas`
--

CREATE TABLE IF NOT EXISTS `paginas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `texto` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created` date NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `url` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `categoria_id` int(10) unsigned NOT NULL,
  `index` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `paginas`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `sexo` tinyint(1) NOT NULL,
  `rg` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `celular` varchar(50) NOT NULL,
  `data_nasc` date NOT NULL,
  `ies` varchar(255) NOT NULL,
  `federacao` tinyint(1) NOT NULL,
  `camiseta` int(1) NOT NULL,
  `localizacao` varchar(256) NOT NULL,
  `group_id` int(10) unsigned NOT NULL DEFAULT '1',
  `active` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `hotel` tinyint(1) NOT NULL,
  `is_cultural` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=218 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `email`, `sexo`, `rg`, `cpf`, `telefone`, `celular`, `data_nasc`, `ies`, `federacao`, `camiseta`, `localizacao`, `group_id`, `active`, `created`, `modified`, `hotel`) VALUES
(1, 'admin', 'ac4cc60a08a8a13f006a3b786bdaf48d58fa1fe6', 'admin', 'admin@admin.com', 0, '', '', '', '', '0000-00-00', '', 0, 0, '', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);
