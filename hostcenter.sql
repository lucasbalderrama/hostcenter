-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Nov-2024 às 17:12
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `hostcenter`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas`
--

CREATE TABLE `reservas` (
  `id_reserva` int(11) NOT NULL,
  `tp_quarto` varchar(50) DEFAULT NULL,
  `plano_refeicao` varchar(50) DEFAULT NULL,
  `entrada` date DEFAULT NULL,
  `saida` date DEFAULT NULL,
  `forma_pagamento` enum('Débito','Crédito','Pix') NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `reservas`
--

INSERT INTO `reservas` (`id_reserva`, `tp_quarto`, `plano_refeicao`, `entrada`, `saida`, `forma_pagamento`, `id_usuario`) VALUES
(1, 'Quarto Família', 'Pacote Adicional', '2024-11-28', '2024-12-06', 'Crédito', 1),
(2, 'Quarto Família', 'Pacote Adicional', '2024-11-28', '2024-12-06', 'Crédito', 1),
(3, 'Quarto Casal', 'Pacote Completo', '2024-11-27', '2025-08-24', 'Pix', 1),
(4, 'Quarto Casal', 'Pacote Completo', '2024-11-27', '2025-08-24', 'Pix', 1),
(5, 'Quarto Amigos', 'Pacote Adicional', '2024-11-27', '2025-11-21', 'Débito', 1),
(6, 'Quarto Amigos', 'Pacote Adicional', '2024-11-27', '2025-11-21', 'Débito', 1),
(7, 'Quarto Casal', 'Pacote Completo', '2025-01-01', '2025-11-04', 'Débito', 1),
(8, 'Quarto Casal', 'Pacote Completo', '2025-01-01', '2025-11-04', 'Débito', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(150) NOT NULL,
  `email_usuario` varchar(150) NOT NULL,
  `senha_usuario` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome_usuario`, `email_usuario`, `senha_usuario`) VALUES
(1, 'Lucas Balderrama', 'abreulucas3715@gmail.com', '$2y$10$Q2MtTtAeMHMHIiQahVPbguSlSliJnOTLgi9Z.k4MV7rKcX2Pwmnni');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
