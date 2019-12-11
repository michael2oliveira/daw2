-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Dez-2019 às 22:41
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
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `admis`
--

INSERT INTO `admis` (`id_admis`, `nome`, `email`, `senha`) VALUES
(7, 'Mich all', 'michaa@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(8, 'jose da fiutu', 'hernanbar@gmail.com', '06de010756b4090a0dce3eb74a65ebb2'),
(9, 'Mario Augustin Piegas', 'luangg@gmail.com', '3ef58bbf0957ef8e30856f019db60181');

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
(1, 'Guerra'),
(2, 'GTA'),
(4, 'Aventuraa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `trque`
--

CREATE TABLE `trque` (
  `id_tr` int(11) NOT NULL,
  `jogo` varchar(100) NOT NULL,
  `truque` varchar(8000) NOT NULL,
  `datas` date NOT NULL,
  `foto` varchar(100) NOT NULL,
  `id_cate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `trque`
--

INSERT INTO `trque` (`id_tr`, `jogo`, `truque`, `datas`, `foto`, `id_cate`) VALUES
(5, 'Gta San Andreas', '  Armas : R1,L2,L1,L2 ,esquerda,baixo , direita , cima .\r\n  Vida infinita : bola , quadrado , triangulo , bola.\r\n   Ficar mais forte: X, X, bola, triangulo.', '2019-12-11', 'gta.jpg', 2),
(7, 'Tekken 5', ' Liberar novos personagens\r\n\r\n    Ana Williams :   Termine o history 2 vezes\r\n    Baek :    History 3 vezes\r\n    Bruce Irvin :   History 4 vezes\r\n    Devil Jin :   complete o devil whitin, ou lute 200 partidas\r\n    Eddie Gordo (capoeira) :  compre todos os extras costumes para Cristy Montero\r\n    Ganryu :  History, Batlle ou time attack 6 vezes\r\n    heihachi :  History, Batlle ou Time attack 8 vezes\r\n    Kuma:  History 6 vezes\r\n    Ling :  50 lutas no modo versus\r\n    Mokujin :  History 7 vezes\r\n    Roger.Jr :  Termine o History com Kazuya\r\n    Wang Jinrei :  History com 5 personagens diferentes\r\n\r\n\r\n\r\n', '2019-12-11', 'teke.jpg', 1),
(8, 'Bully', 'Liberar todas as roupas : L1, L2, BOLA , BOLA , X .\r\n Professores nunca perseguem: BOLA , BOLA , QUADRADO , L1 , R2 .\r\n\r\nPassar em todas provas  : X , X , R1,L1,L2,L2.', '2019-12-11', 'buli.jpg', 4),
(9, 'jogo do kiko45', 'mostar klvngff.hjkjkfjbkjh', '2019-12-11', 'kiko2.jpg', 1);

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
  MODIFY `id_admis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_cate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `trque`
--
ALTER TABLE `trque`
  MODIFY `id_tr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
