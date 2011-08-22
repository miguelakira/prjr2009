-- phpMyAdmin SQL Dump
-- version 3.1.2deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Ago 11, 2009 as 07:36 PM
-- Versão do Servidor: 5.0.75
-- Versão do PHP: 5.2.6-3ubuntu4.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Banco de Dados: `prjr2009`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `arquivos`
--

CREATE TABLE IF NOT EXISTS `arquivos` (
  `id` int(8) unsigned NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `description` text,
  `price` double default NULL,
  `picture` varchar(255) default NULL,
  `dir` varchar(255) default NULL,
  `mimetype` varchar(255) default NULL,
  `filesize` int(11) unsigned default NULL,
  `created` datetime default NULL,
  `modified` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `arquivos`
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `camiseta` int(1) default NULL,
  `pagamento` int(1) default NULL,
  `created` date NOT NULL,
  `is_ativo` tinyint(1) NOT NULL default '1',
  `localizacao` int(10) default NULL,
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
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `senha`) VALUES
(1, 'root', '9675c3e7b8f39fabc92dc7ff0b2809f878743726');

