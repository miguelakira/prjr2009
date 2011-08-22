-- phpMyAdmin SQL Dump
-- version 2.11.9.4
-- http://www.phpmyadmin.net
--
-- Servidor: mysql.copjr.info
-- Tempo de Geração: Ago 12, 2009 as 10:49 PM
-- Versão do Servidor: 5.0.67
-- Versão do PHP: 5.2.6

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
-- Estrutura da tabela `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `titulo` varchar(256) character set utf8 collate utf8_unicode_ci NOT NULL,
  `index` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `index` (`index`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `categorias`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `inscricaos`
--

CREATE TABLE IF NOT EXISTS `inscricaos` (
  `id` int(11) NOT NULL auto_increment,
  `nome` varchar(255) NOT NULL,
  `sexo` tinyint(1) NOT NULL,
  `rg` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `celular` varchar(50) NOT NULL,
  `data_nasc` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `ies` varchar(255) NOT NULL,
  `federacao` varchar(255) NOT NULL,
  `senha` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `inscricaos`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `titulo` varchar(256) character set latin2 collate latin2_bin NOT NULL,
  `texto` text character set latin1 collate latin1_bin NOT NULL,
  `created` datetime NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  `url` varchar(256) character set utf8 collate utf8_unicode_ci NOT NULL,
  `download_file_name` varchar(255) character set utf8 collate utf8_unicode_ci NOT NULL,
  `arquivo` varchar(255) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `noticias`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `paginas`
--

CREATE TABLE IF NOT EXISTS `paginas` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `titulo` varchar(256) character set utf8 collate utf8_unicode_ci NOT NULL,
  `texto` text character set utf8 collate utf8_unicode_ci NOT NULL,
  `created` date NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  `url` varchar(256) character set utf8 collate utf8_unicode_ci NOT NULL,
  `categoria_id` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `paginas`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nome` varchar(256) NOT NULL,
  `senha` varchar(256) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `senha`) VALUES
(1, 'root', '9675c3e7b8f39fabc92dc7ff0b2809f878743726'),
(2, 'prjr', 'd70a5db191f0d9d253fbb42eaf4e055717aa901e');
