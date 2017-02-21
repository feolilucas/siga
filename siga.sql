-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18-Fev-2017 às 21:56
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siga`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `area`
--

CREATE TABLE `area` (
  `idarea` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `area`
--

INSERT INTO `area` (`idarea`, `nome`) VALUES
(1, 'Administrativa'),
(2, 'Terapêutica'),
(3, 'Psicológica'),
(4, 'Neurológica'),
(5, 'Fonoaudiológica'),
(6, 'Terapia Ocupacional'),
(7, 'Pedagógica'),
(8, 'Social');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `idendereco` int(11) NOT NULL,
  `logradouro` varchar(300) NOT NULL,
  `numero` varchar(20) NOT NULL,
  `complemento` varchar(300) DEFAULT NULL,
  `bairro` varchar(300) NOT NULL,
  `referencia` varchar(300) DEFAULT NULL,
  `cidade` varchar(300) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cep` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`idendereco`, `logradouro`, `numero`, `complemento`, `bairro`, `referencia`, `cidade`, `estado`, `cep`) VALUES
(1, 'Rua Frederico Trentini', '377', NULL, 'Jd. Silmara', NULL, 'Amparo', 'SP', '13905300');

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissoes`
--

CREATE TABLE `permissoes` (
  `idpermissoes` int(11) NOT NULL,
  `administrativo` tinyint(4) NOT NULL DEFAULT '0',
  `planoterapeutico` tinyint(4) NOT NULL DEFAULT '0',
  `psicologico` tinyint(4) NOT NULL DEFAULT '0',
  `neurologico` tinyint(4) NOT NULL DEFAULT '0',
  `fonoaudiologico` tinyint(4) NOT NULL DEFAULT '0',
  `terapiaocupacional` tinyint(4) NOT NULL DEFAULT '0',
  `pedagogico` tinyint(4) NOT NULL DEFAULT '0',
  `social` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `permissoes`
--

INSERT INTO `permissoes` (`idpermissoes`, `administrativo`, `planoterapeutico`, `psicologico`, `neurologico`, `fonoaudiologico`, `terapiaocupacional`, `pedagogico`, `social`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `rg` varchar(10) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `datanascimento` date NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `senha` varchar(12) NOT NULL,
  `idendereco` int(11) NOT NULL,
  `idarea` int(11) NOT NULL,
  `idpermissoes` int(11) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `telefone` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nome`, `rg`, `cpf`, `datanascimento`, `usuario`, `senha`, `idendereco`, `idarea`, `idpermissoes`, `email`, `telefone`) VALUES
(1, 'Jean Francisco da Silva', '415045319', '40653585829', '1993-09-30', 'jean', '123123', 1, 1, 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`idarea`);

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`idendereco`);

--
-- Indexes for table `permissoes`
--
ALTER TABLE `permissoes`
  ADD PRIMARY KEY (`idpermissoes`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `idendereco` (`idendereco`),
  ADD KEY `idarea` (`idarea`),
  ADD KEY `idpermissoes` (`idpermissoes`),
  ADD KEY `idpermissoes_2` (`idpermissoes`),
  ADD KEY `idarea_2` (`idarea`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `idarea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
  MODIFY `idendereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `permissoes`
--
ALTER TABLE `permissoes`
  MODIFY `idpermissoes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idarea`) REFERENCES `area` (`idarea`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`idendereco`) REFERENCES `endereco` (`idendereco`),
  ADD CONSTRAINT `usuario_ibfk_3` FOREIGN KEY (`idpermissoes`) REFERENCES `permissoes` (`idpermissoes`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
