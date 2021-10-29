-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Out-2021 às 22:32
-- Versão do servidor: 8.0.27
-- versão do PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `baseb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `baseb`
--

CREATE TABLE `baseb` (
  `id` int NOT NULL,
  `idade` int DEFAULT NULL,
  `lista_de_bens` varchar(50) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `fonte_de_renda` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `baseb`
--

INSERT INTO `baseb` (`id`, `idade`, `lista_de_bens`, `endereco`, `fonte_de_renda`) VALUES
(1, 27, 'Carro', 'Taboao da Serra', 'Assalariado'),
(2, 28, 'Casa', 'Sao Paulo', 'Servicos gerais');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `baseb`
--
ALTER TABLE `baseb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `baseb`
--
ALTER TABLE `baseb`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
