-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/12/2023 às 20:47
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
(53, '656f7389381536.64631876', 'assets/images/gallery/656f7389381536.64631876.jpeg'),
(54, '656f73956bd458.74422413', 'assets/images/gallery/656f73956bd458.74422413.jpeg'),
(55, '656f739a2e61f0.44463026', 'assets/images/gallery/656f739a2e61f0.44463026.jpeg'),
(56, '656f739f4b02b8.57969778', 'assets/images/gallery/656f739f4b02b8.57969778.jpeg'),
(57, '656f73a4f1ff63.38209867', 'assets/images/gallery/656f73a4f1ff63.38209867.jpeg'),
(58, '656f73a91e7564.88791211', 'assets/images/gallery/656f73a91e7564.88791211.jpeg'),
(59, '656f73af2a17f2.33487367', 'assets/images/gallery/656f73af2a17f2.33487367.jpeg'),
(60, '656f73b4614c82.75309360', 'assets/images/gallery/656f73b4614c82.75309360.jpeg'),
(61, '656f73ba056899.52317687', 'assets/images/gallery/656f73ba056899.52317687.jpeg'),
(62, '656f73bf5c4826.43069233', 'assets/images/gallery/656f73bf5c4826.43069233.jpeg'),
(63, '656f73c48318a7.84603277', 'assets/images/gallery/656f73c48318a7.84603277.jpeg'),
(64, '656f73c9328340.54279255', 'assets/images/gallery/656f73c9328340.54279255.jpeg');

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
  `id_col` int(11) UNSIGNED NOT NULL,
  `capa_col` varchar(100) NOT NULL,
  `path_capa` varchar(100) NOT NULL,
  `nome_pasta` varchar(100) NOT NULL,
  `tema` varchar(100) NOT NULL,
  `desc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `colecao`
--

INSERT INTO `colecao` (`id_col`, `capa_col`, `path_capa`, `nome_pasta`, `tema`, `desc`) VALUES
(38, 'capa_888888888888', 'assets/images/colecao/888888888888/capa_888888888888.jpeg', '888888888888', '', ''),
(39, 'capa_ççççççççççççç', 'assets/images/colecao/ççççççççççççç/capa_ççççççççççççç.jpeg', 'ççççççççççççç', '', ''),
(40, 'capa_666666666666', 'assets/images/colecao/666666666666/capa_666666666666.jpeg', '666666666666', '', ''),
(41, 'capa_rrrrrrrr', 'assets/images/colecao/rrrrrrrr/capa_rrrrrrrr.jpeg', 'rrrrrrrr', '', ''),
(42, 'capa_qwqwwq', 'assets/images/colecao/qwqwwq/capa_qwqwwq.jpeg', 'qwqwwq', '', ''),
(43, 'capa_11111111111', 'assets/images/colecao/11111111111/capa_11111111111.jpeg', '11111111111', '', ''),
(44, 'capa_ppppppp', 'assets/images/colecao/ppppppp/capa_ppppppp.jpeg', 'ppppppp', '', '');

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
-- Estrutura para tabela `imgs-col`
--

CREATE TABLE `imgs-col` (
  `id-col` int(11) NOT NULL,
  `colecao` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `local` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  ADD PRIMARY KEY (`id_col`);

--
-- Índices de tabela `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `imgs-col`
--
ALTER TABLE `imgs-col`
  ADD PRIMARY KEY (`id-col`);

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de tabela `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `colecao`
--
ALTER TABLE `colecao`
  MODIFY `id_col` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de tabela `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de tabela `imgs-col`
--
ALTER TABLE `imgs-col`
  MODIFY `id-col` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
