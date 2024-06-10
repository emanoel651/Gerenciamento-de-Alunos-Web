-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/06/2024 às 00:53
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
-- Banco de dados: `sistema-cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `alunos`
--

CREATE TABLE `alunos` (
  `nome` varchar(100) NOT NULL,
  `senha` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  `sexo` enum('masculino','feminino','outro') DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `cpf` varchar(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `alunos`
--

INSERT INTO `alunos` (`nome`, `senha`, `email`, `telefone`, `cidade`, `sexo`, `data_nasc`, `estado`, `cpf`, `id`) VALUES
('Joao', 123, 'joao@gmail.com', '310920112', 'Belo Horizonte-MG', 'feminino', '1998-08-09', 'MG', '2147483647', 1),
('Vi', 123, 'vi@gmail.com', '098812121', 'Belo Horizonte-MG', 'feminino', '2121-07-08', 'MG', '1451190166', 5),
('teste', 0, 'teste@teste.com', '31999999999', 'teste', 'masculino', '2024-06-20', 'teste', '12345678910', 7),
('teste123', 0, 'tes123123te@teste.com', '319999999999', 'teste', 'masculino', '2024-06-13', 'teasd', '12345678911', 8),
('hiiiiiiiiii', 0, '12345678910', '31999999999', 'teste', 'masculino', '1232-03-12', 'teste', '12345678911', 9),
('hiiiiiiiiii123', 0, 'teste@tes123123123123te.com', '31999999999', 'teste', 'masculino', '3233-03-12', 'teste', '2147483647', 10);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
