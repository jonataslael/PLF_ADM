-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/12/2023 às 18:14
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
(33, '65773d6362f708.30323771', 'assets/images/gallery/65773d6362f708.30323771.jpeg'),
(34, '65773d686613b6.18673428', 'assets/images/gallery/65773d686613b6.18673428.jpeg'),
(35, '65773d6d748387.64758431', 'assets/images/gallery/65773d6d748387.64758431.jpeg'),
(36, '65773d71b03008.17720498', 'assets/images/gallery/65773d71b03008.17720498.jpeg'),
(37, '65773d76ce0cb0.73623619', 'assets/images/gallery/65773d76ce0cb0.73623619.jpeg'),
(38, '65773d7bd0cbc5.35363352', 'assets/images/gallery/65773d7bd0cbc5.35363352.jpeg'),
(39, '65773d8363f615.58355664', 'assets/images/gallery/65773d8363f615.58355664.jpeg'),
(40, '65773d87e2f646.37586807', 'assets/images/gallery/65773d87e2f646.37586807.jpeg'),
(41, '65773d93b415b5.96351627', 'assets/images/gallery/65773d93b415b5.96351627.jpeg'),
(42, '65773d98a27213.00860654', 'assets/images/gallery/65773d98a27213.00860654.jpeg'),
(43, '65773d9ca60037.36062704', 'assets/images/gallery/65773d9ca60037.36062704.jpeg'),
(44, '65773da2ead9b2.63799246', 'assets/images/gallery/65773da2ead9b2.63799246.jpeg'),
(45, '65773dae9ecd97.15988772', 'assets/images/gallery/65773dae9ecd97.15988772.jpeg');

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
(1, '6577416b5299a9.37915900', 'assets/images/blog/6577416b5299a9.37915900.jpeg', '9 ESTAGIÁRIOS VS 1 COMPUTADOR', 'BY NADSON NASCIMENTO | 09 DE AGOSTO | ESTÁGIO | FLF.', 'No dia nove de Agosto de 2023, os estagiários da Faculdade Luciano Feijão, com bastante luta conseguiram montar e ligar um computador.\r\n\r\nNove estagiários entusiasmados decidem montar um computador do zero, na Faculdade Luciano Feijão, que enfrentam desafios como peças defeituosas. O computador mont', NULL, NULL);

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
(3, 'capa_Estagiários', 'assets/images/colecao/Estagiários/capa_Estagiários.jpeg', 'Estagiários', 'Estágio | 2023.2 | FLF | CLF', 'Registros dos estagiários 2023.2');

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
(17, 'Estagiários', '65774103d44e10.81396830', 'assets/images/colecao/Estagiários/imagens/65774103d44e10.81396830.jpeg'),
(18, 'Estagiários', '65774103dc12f1.80339609', 'assets/images/colecao/Estagiários/imagens/65774103dc12f1.80339609.jpeg'),
(19, 'Estagiários', '65774103e9f710.97922645', 'assets/images/colecao/Estagiários/imagens/65774103e9f710.97922645.jpeg'),
(20, 'Estagiários', '657741040e51e7.35049817', 'assets/images/colecao/Estagiários/imagens/657741040e51e7.35049817.jpeg'),
(21, 'Estagiários', '6577410424edf3.53885427', 'assets/images/colecao/Estagiários/imagens/6577410424edf3.53885427.jpeg'),
(22, 'Estagiários', '65774104373fb1.77407848', 'assets/images/colecao/Estagiários/imagens/65774104373fb1.77407848.jpeg'),
(23, 'Estagiários', '657741044ba0e3.52837931', 'assets/images/colecao/Estagiários/imagens/657741044ba0e3.52837931.jpg'),
(24, 'Estagiários', '65774104558706.35310219', 'assets/images/colecao/Estagiários/imagens/65774104558706.35310219.jpg');

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de tabela `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `colecao`
--
ALTER TABLE `colecao`
  MODIFY `id_col` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `imgs_col`
--
ALTER TABLE `imgs_col`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
