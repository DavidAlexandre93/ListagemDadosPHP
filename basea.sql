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
-- Banco de dados: `basea`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `basea`
--

CREATE TABLE `basea` (
  `id` int NOT NULL,
  `cpf` bigint DEFAULT NULL,
  `nome` char(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `lista_de_dividas` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `basea`
--

INSERT INTO `basea` (`id`, `cpf`, `nome`, `endereco`, `lista_de_dividas`) VALUES
(1, 40908043880, 'David Alexandre Fernandes', 'Taboao da Serra', 'Dividendo 1'),
(2, 40308043880, 'Alexandre Fernandes', 'Sao Paulo', 'Dividendo2');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `basea`
--
ALTER TABLE `basea`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `basea`
--
ALTER TABLE `basea`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
