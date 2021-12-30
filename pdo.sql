-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 15-Maio-2019 às 09:47
-- Versão do servidor: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(99) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matricula` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `senha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `matricula`, `telefone`, `imagem`, `senha`, `created`, `modified`) VALUES
(1, 'Dhemes Mota', 'dhemes.mota@gmail.com', '201813539', '61996073999', 'carol-fundo.png', '$2y$10$xRj/9pgGLb04bIvYeYi3K.DF51GvZGcf58OyLVJqOzBAoCrO1rdxi', '2019-05-12 03:18:35', '2019-05-15 12:22:52'),
(2, 'Carol Barbosa', 'carol@gmail.com', '201811615', '61983502777', '2018-12-14 06.24.27 1.jpg', '$2y$10$ihqDej8iNxDjERzOm49th.f/Hp5bpu91CxxElpKopPKnudekJRLZK', '2019-05-12 03:22:49', '2019-05-13 01:03:26'),
(5, 'Betina', 'betina@gmail.com', '201655989', '64323568989', NULL, '$2y$10$PxQNyI.OcbyUOOPEZn0n9O.7uyFpadXEW5k1LDnprE/souykK3vzW', '2019-05-12 17:19:11', NULL),
(8, 'Yasmim Mota', 'iasmim@gmail.com', '201811645', '61253625696', 'BRIEFING-768x531.jpg', '$2y$10$tnyJ138nWwplEfZML.Ti/.SkuKQ64A2vdW1.gR319LR1SoQ74dQt2', '2019-05-13 02:12:55', '2019-05-13 02:42:10');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
