-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Maio-2024 às 14:06
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_aula_segunda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `cod` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`cod`, `nome`) VALUES
(1, 'samsung'),
(2, 'xiaomi'),
(3, 'motorola');

-- --------------------------------------------------------

--
-- Estrutura da tabela `smartphone`
--

CREATE TABLE `smartphone` (
  `cod` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `empresa_cod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `smartphone`
--

INSERT INTO `smartphone` (`cod`, `nome`, `empresa_cod`) VALUES
(1, 'galaxy 2', 1),
(2, 'galaxy 5', 1),
(3, 'Moto G 34', 3),
(4, 'Moto G 87', 3),
(5, 'Poco Phone', 2),
(6, 'Redmi Note 13', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `cod` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `senha` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`cod`, `usuario`, `nome`, `senha`) VALUES
(3, 'pedroca', 'pedro', '122'),
(4, 'zezinho', 'arthur', '$2y$10$s2f/MqS.eMneI0QvNJ4mDuHb8QgTlLfXyMHeOhBAgHnwne/j04Gu2'),
(5, 'joaozinho', 'rberto', '$2y$10$dlq2pE8O7SYGUMwMEnTfG.vD.KDIEI5jxz84dO94Z8TPm/lv9OhZG'),
(12, 'duda', 'dudinha123', '$2y$10$TzDHi2b7lHydL2FU2HigcutW56b95ETEhBDeW1J9VLJeB7yEjpWru'),
(16, 'teste', 'testeee', '$2y$10$8KXTac/T2Zre9YgUGFMl0O4GevTb52jR/Zb/QpzI.G7j.2dS0aFvK');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`cod`);

--
-- Índices para tabela `smartphone`
--
ALTER TABLE `smartphone`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `empresa_cod` (`empresa_cod`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `smartphone`
--
ALTER TABLE `smartphone`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `smartphone`
--
ALTER TABLE `smartphone`
  ADD CONSTRAINT `empresa_cod` FOREIGN KEY (`empresa_cod`) REFERENCES `empresa` (`cod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
