-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 20, 2019 at 01:12 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uplab`
--

-- --------------------------------------------------------

--
-- Table structure for table `empresas`
--

CREATE TABLE `empresas` (
  `id` int(222) NOT NULL,
  `empresa` varchar(333) NOT NULL,
  `descricao` varchar(333) NOT NULL,
  `contatonome` varchar(333) NOT NULL,
  `telefone` varchar(333) NOT NULL,
  `contatouplab` varchar(333) NOT NULL,
  `contatostartup` varchar(333) NOT NULL,
  `imgempresa` varchar(333) NOT NULL,
  `id_usuario` varchar(222) NOT NULL,
  `segmento` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menunav`
--

CREATE TABLE `menunav` (
  `id` int(11) NOT NULL,
  `nome` varchar(222) NOT NULL,
  `href` varchar(222) NOT NULL,
  `img` varchar(222) NOT NULL,
  `dados` varchar(222) NOT NULL,
  `icon` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menunav`
--

INSERT INTO `menunav` (`id`, `nome`, `href`, `img`, `dados`, `icon`) VALUES
(1, 'Empresas', '', 'bg-primary', '1000', ''),
(2, 'Startups', '', 'bg-success', '34053', ''),
(3, 'Empreendedores', '', 'bg-warning', '35435', ''),
(4, 'Parceiros', '', 'bg-danger', '75675', '');

-- --------------------------------------------------------

--
-- Table structure for table `niveis_acessos`
--

CREATE TABLE `niveis_acessos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `niveis_acessos`
--

INSERT INTO `niveis_acessos` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Administrador', '2016-02-19 00:00:00', NULL),
(2, 'Colaborador', '2016-02-19 00:00:00', NULL),
(3, 'Cliente', '2016-02-19 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE `site` (
  `id` int(222) NOT NULL,
  `frasebanner` varchar(333) NOT NULL,
  `descricao` varchar(333) NOT NULL,
  `servicostitulo` varchar(333) NOT NULL,
  `servicos1` varchar(333) NOT NULL,
  `servicos2` varchar(333) NOT NULL,
  `servicos3` varchar(333) NOT NULL,
  `servicos4` varchar(333) NOT NULL,
  `servicos5` varchar(333) NOT NULL,
  `servicos6` varchar(333) NOT NULL,
  `servicosdescricao` varchar(333) NOT NULL,
  `servicosdescricao1` varchar(333) NOT NULL,
  `servicosdescricao2` varchar(333) NOT NULL,
  `servicosdescricao3` varchar(333) NOT NULL,
  `servicosdescricao4` varchar(333) NOT NULL,
  `servicosdescricao5` varchar(333) NOT NULL,
  `servicosdescricao6` varchar(333) NOT NULL,
  `email` varchar(333) NOT NULL,
  `emaildescricao` varchar(333) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `startup`
--

CREATE TABLE `startup` (
  `id` int(222) NOT NULL,
  `startup` varchar(222) NOT NULL,
  `descricao` varchar(222) NOT NULL,
  `fasedastartup` varchar(222) NOT NULL,
  `tamanhoequipe` varchar(222) NOT NULL,
  `imgstartup` varchar(222) NOT NULL,
  `imgtime` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(520) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `situacoe_id` int(11) NOT NULL DEFAULT '0',
  `niveis_acesso_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `situacoe_id`, `niveis_acesso_id`, `created`, `modified`) VALUES
(1, 'Cesar Szpak', 'cesar@celke.com.br', '202cb962ac59075b964b07152d234b70', 1, 1, '2016-02-14 00:00:01', '2016-02-20 21:58:01'),
(2, 'Kelly', 'kelly@celke.com.br', '202cb962ac59075b964b07152d234b70', 1, 2, '2016-02-14 00:00:04', '2016-02-20 21:58:12'),
(3, 'Jessica', 'jessica@celke.com.br', '202cb962ac59075b964b07152d234b70', 1, 3, '2016-02-14 00:00:03', '2016-02-20 21:58:25'),
(5, 'Marcia', 'marcia@celke.com.br', '831efa4c96023f4e602ebf86ca27a1d1', 1, 1, '2016-01-01 10:10:01', '2016-02-20 21:58:57'),
(9, 'Celke', 'cesar@celke.com.br', '123', 2, 3, '2016-02-20 20:48:44', NULL),
(10, 'Celke', 'cesar@celke.com.br', '123', 2, 3, '2016-02-20 20:49:02', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menunav`
--
ALTER TABLE `menunav`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `niveis_acessos`
--
ALTER TABLE `niveis_acessos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `startup`
--
ALTER TABLE `startup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menunav`
--
ALTER TABLE `menunav`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `niveis_acessos`
--
ALTER TABLE `niveis_acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `site`
--
ALTER TABLE `site`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `startup`
--
ALTER TABLE `startup`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
