-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Fev-2023 às 14:07
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `landingpage`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `par`
--

CREATE TABLE `par` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descricaovideo` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cel` int(12) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descricaouser` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `chamada` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `referencia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `btnref` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fotouser` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `local` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hmanha` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `hmanhafim` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `htarde` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `htardefim` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `hnoite` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `hnoitefim` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `certificacao` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `lote` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extra` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `canal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `inicio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fim` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `valor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `inscrever` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dias` int(4) NOT NULL,
  `roteiromanha` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `roteirotarde` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `roteironoite` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fotos` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `par`
--

INSERT INTO `par` (`id`, `titulo`, `descricaovideo`, `video`, `cel`, `nome`, `descricaouser`, `chamada`, `referencia`, `btnref`, `fotouser`, `local`, `hmanha`, `hmanhafim`, `htarde`, `htardefim`, `hnoite`, `hnoitefim`, `certificacao`, `lote`, `extra`, `canal`, `inicio`, `mes`, `fim`, `valor`, `inscrever`, `dias`, `roteiromanha`, `roteirotarde`, `roteironoite`, `cidade`, `estado`, `fotos`) VALUES
(92, 'LEo', 'dasdasdasdsa', '', 0, 'dsadasdsa', 'dsadasdsadsaasd', 'dasdas', 'sdadas', 'dsadasdsa', '', 'dasdas', '12', '12', '12', '12', '12', '12', '23', '', '', '', '0000-00-00', '', '0000-00-00', '300', '', 0, '', '', '', 'Curitiba', 'ParanÃ¡ ', ''),
(93, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', 0, '', '', '', '', ' ', ''),
(94, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '23', '', '25', '', '', 0, '', '', '', '', ' ', ''),
(95, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '20', 'janeiro', '25', '', '', 0, '', '', '', '', ' ', ''),
(96, 'Incetos como vivem.', 'A vida dos incetos\r\ncomo vivem\r\no que comem\r\no que gosta', '', 0, 'leonardo wittica crozetta', '20 anos\r\nestudante\r\nda ufpr', 'venham', 'estudante', 'clica', 'images/63dd461826078.png', '', '12', '13', '', '', '', '', '12', 'primeiro', 'nao deixei de se inscrever', '', '20', 'janeiro', '25', '300', '', 0, '', '', '', 'curitiba', 'PR ', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `par`
--
ALTER TABLE `par`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `par`
--
ALTER TABLE `par`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
