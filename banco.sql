-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25-Maio-2019 às 19:25
-- Versão do servidor: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desafio`
--
CREATE DATABASE `desafio`;

USE `desafio`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `torcedores`
--

CREATE TABLE `torcedores` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `DOCUMENTO` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `CEP` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ENDERECO` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `BAIRRO` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `CIDADE` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `TELEFONE` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `EMAIL` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ATIVO` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `UF` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `ORIGEM` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `DATA_CADASTRO` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `torcedores`
--
ALTER TABLE `torcedores`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `torcedores`
--
ALTER TABLE `torcedores`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10830;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
