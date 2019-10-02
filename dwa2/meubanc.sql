-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Out-2019 às 22:27
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meubanc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admis`
--

CREATE TABLE `admis` (
  `id_admis` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `admis`
--

INSERT INTO `admis` (`id_admis`, `nome`, `email`, `senha`) VALUES
(1, 'Michael Alexandre Oliveira Pereiralll', 'hernanbaraaa@gmail.com', '3214567845'),
(2, 'Johan Alexandre Pintosdd', 'mariobbaa@gmail.com', '1234567845'),
(3, 'jose mujica', 'luangg@gmail.com', 'ab225f');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_cate` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_cate`, `nome`) VALUES
(1, 'Guerra');

-- --------------------------------------------------------

--
-- Estrutura da tabela `trque`
--

CREATE TABLE `trque` (
  `id_tr` int(11) NOT NULL,
  `jogo` varchar(100) NOT NULL,
  `truque` varchar(8000) NOT NULL,
  `datas` date NOT NULL,
  `id_cate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admis`
--
ALTER TABLE `admis`
  ADD PRIMARY KEY (`id_admis`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_cate`);

--
-- Indexes for table `trque`
--
ALTER TABLE `trque`
  ADD PRIMARY KEY (`id_tr`),
  ADD KEY `id_cate` (`id_cate`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admis`
--
ALTER TABLE `admis`
  MODIFY `id_admis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_cate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `trque`
--
ALTER TABLE `trque`
  ADD CONSTRAINT `trque_ibfk_1` FOREIGN KEY (`id_cate`) REFERENCES `categoria` (`id_cate`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
