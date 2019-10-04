-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Out-2019 às 14:47
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetovp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastrotime`
--

CREATE TABLE `cadastrotime` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `nomeLider` varchar(30) NOT NULL,
  `pais` varchar(30) NOT NULL,
  `qtdJogador` varchar(7) NOT NULL,
  `cpf` varchar(30) NOT NULL,
  `membro1` varchar(30) NOT NULL,
  `membro2` varchar(30) NOT NULL,
  `membro3` varchar(30) NOT NULL,
  `membro4` varchar(30) NOT NULL,
  `membro5` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastrotime`
--

INSERT INTO `cadastrotime` (`id`, `nome`, `email`, `senha`, `nomeLider`, `pais`, `qtdJogador`, `cpf`, `membro1`, `membro2`, `membro3`, `membro4`, `membro5`) VALUES
(12, 'time cs', 'qualquer@hotmail.com', '123', 'marcelo', 'Brasil', '5', '471.236.788-18', '01', '02', '03', '04', '05'),
(13, 'Bullet\'s', 'marcelolemos7@outlook.com', '258963', 'Marcelo', 'Brasil', '5', '471.236.788-18', '01', '02', '03', '04', '05'),
(14, 'testeBala', 'balas@hotmail.com', '258963', 'marcelo', 'Estados Unidos', '5', '471.236.788-18', '01', '02', '03', '04', '05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `cpf` varchar(30) NOT NULL,
  `cel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `cpf`, `cel`) VALUES
(5, 'marcelo2', 'marcelo@hotmail.com', '123', '471.236.788-18', '121254547878'),
(6, 'ze balao', 'qualquer@hotmail.com', '123', '471.236.788-18', '2025411462'),
(8, 'abacaxi', 'marcelolemos7@outlook.com', '123', '471.236.788-18', '3213123'),
(9, 'naldo', 'marcelolemos7@outlook.com', '123', '471.236.788-18', '123312456564'),
(11, 'abacaxi', 'marcelolemos7@outlook.com', '123', '471.236.788-18', '132321');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastrotime`
--
ALTER TABLE `cadastrotime`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastrotime`
--
ALTER TABLE `cadastrotime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
