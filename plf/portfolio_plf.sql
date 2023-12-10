-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10/12/2023 às 21:34
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
(64, '656f73c9328340.54279255', 'assets/images/gallery/656f73c9328340.54279255.jpeg'),
(65, '65731f9631fe29.62081922', 'assets/images/gallery/65731f9631fe29.62081922.jpeg');

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
(4, '656cf1713581c8.91270283', 'assets/images/blog/656cf1713581c8.91270283.jpeg', '9 EstagiÃ¡rios VS 1 PC', 'EstagiÃ¡rios 2023.2 | 09/08/2023 | Faculdade Luciano FeijÃ£o', 'No dia nove de Agosto de 2023, os estagiÃ¡rios da Faculdade Luciano FeijÃ£o, com bastante luta conseguiram montar e ligar um computador.', 'Nove estagiÃ¡rios entusiasmados decidem montar um computador do zero, na Faculdade Luciano FeijÃ£o, que enfrentam desafios como peÃ§as defeituosas. O computador montado nÃ£o apenas funciona perfeitamente, mas tambÃ©m fortalece os laÃ§os entre os estagiÃ¡rios e inspira outros estudantes na regiÃ£o.', ''),
(14, '65761f99101331.73444555', 'assets/images/blog/65761f99101331.73444555.jpeg', 'teste', 'eesgsedgd', 'yyyyyyyyyyyyyyy', NULL, NULL);

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
(45, 'capa_teste', 'assets/images/colecao/teste/capa_teste.jpeg', 'teste', '123', '456'),
(47, 'capa_teste3', 'assets/images/colecao/teste3/capa_teste3.jpeg', 'teste3', '123', '455'),
(75, 'capa_teste final', 'assets/images/colecao/teste final/capa_teste final.jpeg', 'teste final', '', '');

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
-- Estrutura para tabela `imgs_col`
--

CREATE TABLE `imgs_col` (
  `id` int(11) NOT NULL,
  `colecao` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `local_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `imgs_col`
--

INSERT INTO `imgs_col` (`id`, `colecao`, `img`, `local_img`) VALUES
(1, 'teste', 'big_1.jpg', 'assets/images/colecao/teste/imagens/big_1.jpg'),
(2, 'teste', 'big_2.jpg', 'assets/images/colecao/teste/imagens/big_2.jpg'),
(3, 'teste', 'big_3.jpg', 'assets/images/colecao/teste/imagens/big_3.jpg'),
(4, 'teste', 'big_4.jpg', 'assets/images/colecao/teste/imagens/big_4.jpg'),
(5, 'teste', 'big_5.jpg', 'assets/images/colecao/teste/imagens/big_5.jpg'),
(6, 'teste', 'big_6.jpg', 'assets/images/colecao/teste/imagens/big_6.jpg'),
(25, 'teste3', 'principal-1.jpg', 'assets/images/colecao/teste3/imagens/principal-1.jpg'),
(26, 'teste3', 'principal-2.jpg', 'assets/images/colecao/teste3/imagens/principal-2.jpg'),
(27, 'teste3', 'principal-3.jpg', 'assets/images/colecao/teste3/imagens/principal-3.jpg'),
(28, 'teste3', 'principal-4.jpg', 'assets/images/colecao/teste3/imagens/principal-4.jpg'),
(97, 'teste final', '65761ea54cfc45.22309341', 'assets/images/colecao/teste final/imagens/65761ea54cfc45.22309341.jpg'),
(98, 'teste final', '65761ea55a9025.90836470', 'assets/images/colecao/teste final/imagens/65761ea55a9025.90836470.jpg'),
(99, 'teste final', '65761ea5bfaad6.26861690', 'assets/images/colecao/teste final/imagens/65761ea5bfaad6.26861690.jpg'),
(100, 'teste final', '65761ea5e0c901.06495653', 'assets/images/colecao/teste final/imagens/65761ea5e0c901.06495653.jpg');

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
-- Índices de tabela `imgs_col`
--
ALTER TABLE `imgs_col`
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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de tabela `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `colecao`
--
ALTER TABLE `colecao`
  MODIFY `id_col` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT de tabela `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de tabela `imgs_col`
--
ALTER TABLE `imgs_col`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
