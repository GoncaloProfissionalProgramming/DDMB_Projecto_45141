-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Fev-2019 às 18:26
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tpcf`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargas`
--

CREATE TABLE `cargas` (
  `id` int(11) NOT NULL,
  `UserId` int(5) NOT NULL,
  `Origem` varchar(100) NOT NULL,
  `Destino` varchar(100) NOT NULL,
  `Peso` varchar(50) NOT NULL,
  `Carga` varchar(100) NOT NULL,
  `Aproved` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nome` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `worldOfTrucks` varchar(100) NOT NULL,
  `steam` varchar(100) NOT NULL,
  `discord` varchar(100) NOT NULL,
  `isAdmin` varchar(3) NOT NULL,
  `Aproved` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `nome`, `worldOfTrucks`, `steam`, `discord`, `isAdmin`, `Aproved`) VALUES
(1, 'patrao@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'patrao', 'patrao', 'patrao', '1234', '1', 1),
(2, 'empregado@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'empregado', 'empregado', 'empregado', '1111', '0', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cargas`
--
ALTER TABLE `cargas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UserId` (`UserId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cargas`
--
ALTER TABLE `cargas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cargas`
--
ALTER TABLE `cargas`
  ADD CONSTRAINT `cargas_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
