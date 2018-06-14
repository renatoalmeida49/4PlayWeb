-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14-Jun-2018 às 21:07
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `4play`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `artistas`
--

CREATE TABLE IF NOT EXISTS `artistas` (
  `art_cod` int(11) NOT NULL AUTO_INCREMENT,
  `art_use_cod` int(11) NOT NULL,
  `art_nome` varchar(30) NOT NULL,
  `art_estilo` varchar(30) NOT NULL,
  PRIMARY KEY (`art_cod`),
  KEY `art_use_cod` (`art_use_cod`),
  KEY `art_use_cod_2` (`art_use_cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Extraindo dados da tabela `artistas`
--

INSERT INTO `artistas` (`art_cod`, `art_use_cod`, `art_nome`, `art_estilo`) VALUES
(14, 20, 'Bonde do trigrão', 'Funk'),
(15, 20, 'Metallica', 'Trash Metal'),
(16, 20, 'Skank', 'Rock'),
(17, 20, 'Megadeth', 'Trash Metal'),
(18, 21, 'Guns', 'Heavy metal'),
(19, 20, 'Alter Bridge', 'Alternative');

-- --------------------------------------------------------

--
-- Estrutura da tabela `musicas`
--

CREATE TABLE IF NOT EXISTS `musicas` (
  `mus_cod` int(11) NOT NULL AUTO_INCREMENT,
  `mus_use_cod` int(11) NOT NULL,
  `mus_art_cod` int(11) NOT NULL,
  `mus_nome` varchar(30) NOT NULL,
  `mus_tipo` varchar(30) NOT NULL,
  `mus_capo` varchar(10) NOT NULL,
  `mus_instrumento` varchar(15) NOT NULL,
  `mus_idioma` varchar(10) NOT NULL,
  `mus_letra` text NOT NULL,
  PRIMARY KEY (`mus_cod`),
  KEY `mus_use_cod` (`mus_use_cod`,`mus_art_cod`),
  KEY `mus_art_cod` (`mus_art_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `musicasplaylists`
--

CREATE TABLE IF NOT EXISTS `musicasplaylists` (
  `mpl_pla_cod` int(11) NOT NULL,
  `mpl_mus_cod` int(11) NOT NULL,
  KEY `mpl_pla_cod` (`mpl_pla_cod`,`mpl_mus_cod`),
  KEY `mpl_mus_cod` (`mpl_mus_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `playlists`
--

CREATE TABLE IF NOT EXISTS `playlists` (
  `pla_cod` int(11) NOT NULL AUTO_INCREMENT,
  `pla_use_cod` int(11) NOT NULL,
  `pla_nome` varchar(30) NOT NULL,
  `pla_descricao` text NOT NULL,
  PRIMARY KEY (`pla_cod`),
  KEY `pla_use_cod` (`pla_use_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `use_cod` int(11) NOT NULL AUTO_INCREMENT,
  `use_nome` varchar(30) CHARACTER SET utf16 COLLATE utf16_bin DEFAULT NULL,
  `use_log` varchar(30) NOT NULL,
  `use_senha` varchar(30) NOT NULL,
  PRIMARY KEY (`use_cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`use_cod`, `use_nome`, `use_log`, `use_senha`) VALUES
(20, 'Renato Novaes', 'novaesr', 'novaesr'),
(21, 'Renato Novaes', 'renato', 'renato');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `artistas`
--
ALTER TABLE `artistas`
  ADD CONSTRAINT `artistas_ibfk_1` FOREIGN KEY (`art_use_cod`) REFERENCES `users` (`use_cod`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `musicas`
--
ALTER TABLE `musicas`
  ADD CONSTRAINT `musicas_ibfk_1` FOREIGN KEY (`mus_use_cod`) REFERENCES `users` (`use_cod`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `musicas_ibfk_2` FOREIGN KEY (`mus_art_cod`) REFERENCES `artistas` (`art_cod`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `musicasplaylists`
--
ALTER TABLE `musicasplaylists`
  ADD CONSTRAINT `musicasplaylists_ibfk_1` FOREIGN KEY (`mpl_pla_cod`) REFERENCES `playlists` (`pla_cod`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `musicasplaylists_ibfk_2` FOREIGN KEY (`mpl_mus_cod`) REFERENCES `musicas` (`mus_cod`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `playlists`
--
ALTER TABLE `playlists`
  ADD CONSTRAINT `playlists_ibfk_1` FOREIGN KEY (`pla_use_cod`) REFERENCES `users` (`use_cod`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
