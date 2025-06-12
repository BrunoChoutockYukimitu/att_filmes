-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/06/2025 às 03:20
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_filmes`
--
CREATE DATABASE IF NOT EXISTS `bd_filmes` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bd_filmes`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `filmes`
--

CREATE TABLE `filmes` (
  `id` int(255) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `avaliacao` int(255) NOT NULL,
  `historia` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `filmes`
--

INSERT INTO `filmes` (`id`, `titulo`, `categoria`, `avaliacao`, `historia`, `foto`) VALUES
(1, 'Bee Movie', 'Drama', 10, 'Uma abelha tendo uma vida diferente', 'https://m.media-amazon.com/images/I/71Wf0blOfTL._AC_SL1500_.jpg'),
(2, 'Avatar 2', 'ação', 9, 'Um ex-militar que agora virou um nativo de outro planeta e cria sua familia', 'https://th.bing.com/th/id/OIP.WyD3dJ4wKdqnqQbkQWv0nQHaEK?rs=1&pid=ImgDetMain'),
(3, 'Todo mundo em panico 2', 'Drama', 7, 'Uma grupo de jovens mostrando como não sobreviver em cenários de terror', 'https://th.bing.com/th/id/OIP.ksbgxttb4OpLi6bENfiKTQHaKU?rs=1&pid=ImgDetMain'),
(4, 'FNAF', 'ph-13', 6, ' Crianças foram assasinadas e escondidas em trages de robos, assim possuindo os mesmos', 'https://www.cafecomfilme.com.br/media/k2/items/cache/3eca36abc9a08e4ee4ba79a2cb0f6d9e_XL.jpg?t=20230629_152553');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `filmes`
--
ALTER TABLE `filmes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
