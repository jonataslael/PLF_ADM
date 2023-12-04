-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/12/2023 às 20:29
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `portfolio_plf`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `arquivo`
--

CREATE TABLE `arquivo` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(100) NOT NULL,
  `local` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `arquivo`
--

INSERT INTO `arquivo` (`id`, `nome`, `local`) VALUES
(9, '656be3e13c3ba9.12795858', 'assets/images/gallery/656be3e13c3ba9.12795858.jpeg'),
(10, '656be40700be51.40550914', 'assets/images/gallery/656be40700be51.40550914.jpeg'),
(11, '656be422050811.75348756', 'assets/images/gallery/656be422050811.75348756.jpeg'),
(12, '656be42dafffa4.96859758', 'assets/images/gallery/656be42dafffa4.96859758.jpeg'),
(13, '656be4416eb4b1.10917097', 'assets/images/gallery/656be4416eb4b1.10917097.jpeg'),
(14, '656be4548ad8e5.94800591', 'assets/images/gallery/656be4548ad8e5.94800591.jpeg'),
(17, '656e0d4ea77392.14109649', 'assets/images/gallery/656e0d4ea77392.14109649.jpeg'),
(19, '656e2407051802.26382584', 'assets/images/gallery/656e2407051802.26382584.jpeg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `blog`
--

CREATE TABLE `blog` (
  `id` int(11) UNSIGNED NOT NULL,
  `img_blog` varchar(100) NOT NULL,
  `path_blog` varchar(100) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `informacoes` varchar(100) NOT NULL,
  `p1` varchar(300) NOT NULL,
  `p2` varchar(300) DEFAULT NULL,
  `p3` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `blog`
--

INSERT INTO `blog` (`id`, `img_blog`, `path_blog`, `titulo`, `informacoes`, `p1`, `p2`, `p3`) VALUES
(4, '656cf1713581c8.91270283', 'assets/images/blog/656cf1713581c8.91270283.jpeg', '9 EstagiÃ¡rios VS 1 PC', 'EstagiÃ¡rios 2023.2 | 09/08/2023 | Faculdade Luciano FeijÃ£o', 'No dia nove de Agosto de 2023, os estagiÃ¡rios da Faculdade Luciano FeijÃ£o, com bastante luta conseguiram montar e ligar um computador.', 'Nove estagiÃ¡rios entusiasmados decidem montar um computador do zero, na Faculdade Luciano FeijÃ£o, que enfrentam desafios como peÃ§as defeituosas. O computador montado nÃ£o apenas funciona perfeitamente, mas tambÃ©m fortalece os laÃ§os entre os estagiÃ¡rios e inspira outros estudantes na regiÃ£o.', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `colecao`
--

CREATE TABLE `colecao` (
  `id` int(11) UNSIGNED NOT NULL,
  `img_col` varchar(100) NOT NULL,
  `path_col` varchar(100) NOT NULL,
  `pasta` varchar(100) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `tema` varchar(100) NOT NULL,
  `desc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `contact`
--

CREATE TABLE `contact` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `assunto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `contact`
--

INSERT INTO `contact` (`id`, `nome`, `email`, `telefone`, `assunto`) VALUES
(1, 'Jonatas Lael', 'plf.adm@flucianofeijao.com.br', '(01) 2345-6789', 'Site das fotos'),
(2, 'Viviane Matos', 'plf.adm@flucianofeijao.com.br', '(01) 2345-6789', 'Site das fotos'),
(3, 'Nadson Nascimento', 'plf.adm@flucianofeijao.com.br', '(01) 2345-6789', 'Site das fotos'),
(4, 'Débora Torres', 'plf.adm@flucianofeijao.com.br', '(01) 2345-6789', 'Site das fotos');

-- --------------------------------------------------------

--
-- Estrutura para tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `login`
--

INSERT INTO `login` (`id`, `email`, `senha`) VALUES
(1, 'plf.adm@flucianofeijao.com.br', 'Nossa_senha');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `arquivo`
--
ALTER TABLE `arquivo`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `colecao`
--
ALTER TABLE `colecao`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `arquivo`
--
ALTER TABLE `arquivo`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `colecao`
--
ALTER TABLE `colecao`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
