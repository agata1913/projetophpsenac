-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Fev-2020 às 23:49
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdhospital`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblfoto`
--

CREATE TABLE `tblfoto` (
  `idfoto` int(11) NOT NULL,
  `nome` varchar(300) NOT NULL,
  `cargo` varchar(300) NOT NULL,
  `cpf` varchar(300) NOT NULL,
  `foto` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblnivelacesso`
--

CREATE TABLE `tblnivelacesso` (
  `idnivelacesso` int(11) NOT NULL,
  `acesso` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tblnivelacesso`
--

INSERT INTO `tblnivelacesso` (`idnivelacesso`, `acesso`) VALUES
(1, 'Administrador'),
(2, 'Colaborador'),
(3, 'Cliente'),
(4, 'Fornecedor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblpaciente`
--

CREATE TABLE `tblpaciente` (
  `idpaciente` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `dataint` date NOT NULL,
  `leito` int(11) NOT NULL,
  `patologia` varchar(100) NOT NULL,
  `medico` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblsituacao`
--

CREATE TABLE `tblsituacao` (
  `idsituacao` int(11) NOT NULL,
  `situacao` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tblsituacao`
--

INSERT INTO `tblsituacao` (`idsituacao`, `situacao`) VALUES
(1, 'ativo'),
(2, 'inativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblusuarios`
--

CREATE TABLE `tblusuarios` (
  `idusuario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `idsituacao` int(11) NOT NULL,
  `idnivelacesso` int(11) NOT NULL,
  `criado` date NOT NULL,
  `modificado` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tblusuarios`
--

INSERT INTO `tblusuarios` (`idusuario`, `nome`, `email`, `senha`, `idsituacao`, `idnivelacesso`, `criado`, `modificado`) VALUES
(1, 'Ágata', 'agata.fernanda4@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 1, '2020-01-02', '2020-01-09'),
(2, 'Nuno', 'jfsnuno@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 2, '2020-01-02', '2020-01-04'),
(3, 'Rebeca', 'rebeca_soares@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 3, '2020-01-22', '2020-01-28');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tblfoto`
--
ALTER TABLE `tblfoto`
  ADD PRIMARY KEY (`idfoto`);

--
-- Índices para tabela `tblnivelacesso`
--
ALTER TABLE `tblnivelacesso`
  ADD PRIMARY KEY (`idnivelacesso`);

--
-- Índices para tabela `tblpaciente`
--
ALTER TABLE `tblpaciente`
  ADD PRIMARY KEY (`idpaciente`);

--
-- Índices para tabela `tblsituacao`
--
ALTER TABLE `tblsituacao`
  ADD PRIMARY KEY (`idsituacao`);

--
-- Índices para tabela `tblusuarios`
--
ALTER TABLE `tblusuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tblfoto`
--
ALTER TABLE `tblfoto`
  MODIFY `idfoto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tblnivelacesso`
--
ALTER TABLE `tblnivelacesso`
  MODIFY `idnivelacesso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tblpaciente`
--
ALTER TABLE `tblpaciente`
  MODIFY `idpaciente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tblsituacao`
--
ALTER TABLE `tblsituacao`
  MODIFY `idsituacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tblusuarios`
--
ALTER TABLE `tblusuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
