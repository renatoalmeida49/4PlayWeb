-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 02, 2020 at 07:26 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4playweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `musics`
--

DROP TABLE IF EXISTS `musics`;
CREATE TABLE IF NOT EXISTS `musics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idUser` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `artista` varchar(30) NOT NULL,
  `capotraste` varchar(30) NOT NULL,
  `instrumento` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `musics`
--

INSERT INTO `musics` (`id`, `idUser`, `nome`, `artista`, `capotraste`, `instrumento`) VALUES
(1, 4, 'Mas vÃ³', 'Raimundos', 'Sem capo', 'Guitarra'),
(2, 4, 'Eu quero Ã© ver o oco', 'Raimundos', 'Sem capo', 'Guitarra'),
(3, 5, 'Eu quero Ã© ver o oco', 'Raimundos', 'Sem capo', 'Guitarra'),
(4, 4, 'Rap da Felicidade', 'MC Favela', 'Sem capo', 'Guitarra'),
(5, 5, 'Wicked Game', 'Chris Isaak', '2Âª casa', 'ViolÃ£o/Guitarra'),
(6, 4, 'Dias AtrÃ¡s', 'CPM22', 'Sem capo', 'Guitarra'),
(7, 4, 'Rocheda', 'BarÃµes da Pisadinha', 'Sem capo', 'ViolÃ£o'),
(8, 4, 'IrreversÃ­vel', 'CPM22', 'Sem capo', 'Guitarra'),
(9, 4, 'Tempo perdido', 'LegiÃ£o Urbana', 'Sem capo', 'ViolÃ£o');

-- --------------------------------------------------------

--
-- Table structure for table `playlists`
--

DROP TABLE IF EXISTS `playlists`;
CREATE TABLE IF NOT EXISTS `playlists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idUser` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `descricao` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COMMENT='Storage the playlists of the users';

--
-- Dumping data for table `playlists`
--

INSERT INTO `playlists` (`id`, `idUser`, `name`, `descricao`) VALUES
(1, 4, 'Barra', 'Pra tocar na Barra.'),
(2, 4, 'Projeto Paralelo', 'MÃºsicas da banda'),
(3, 4, 'Never get old', 'SÃ³ as antigona'),
(4, 4, 'Work hard', 'Play hard'),
(5, 4, 'Poker night', 'Noite do poker');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `token` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `password`, `token`) VALUES
(4, 'Renato Novaes', 'renato', '$2y$10$rcsWUjyhgoYaCYvjX3a3LORAIuaHO0XCZ30gXi5fFArHUjqMWDjM.', '34ba3a4e318d44158241417b10c53530'),
(5, 'Taciana Borges', 'taciana', '$2y$10$Mexmaaf5RCuvlMS5mevOiuBhVWT4h1jbuNcdDOu2/vA0zp4KgP0k2', '1c3dba4bfc605874a40ff87c7996dae8');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
