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
-- Banco de dados: `basec`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `basec`
--

CREATE TABLE `basec` (
  `id` int NOT NULL,
  `ultima_consulta` date DEFAULT NULL,
  `movi_financ_cpf` date DEFAULT NULL,
  `ultima_compra` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `basec`
--

INSERT INTO `basec` (`id`, `ultima_consulta`, `movi_financ_cpf`, `ultima_compra`) VALUES
(1, '2021-10-01', '2021-10-12', '2021-10-18'),
(2, '2021-09-15', '2021-09-01', '2021-09-11');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `basec`
--
ALTER TABLE `basec`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `basec`
--
ALTER TABLE `basec`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
