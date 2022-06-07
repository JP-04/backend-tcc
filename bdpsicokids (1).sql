-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Jun-2022 às 03:52
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdpsicokids`
--

DELIMITER $$
--
-- Procedimentos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `spAtualizaCrianca` (IN `spnomeCrianca` VARCHAR(100), IN `spidade` INT(11), IN `spserie` INT(11), IN `spsexo` VARCHAR(10), IN `spimagemPerfil` VARCHAR(50))   UPDATE crianca SET nomeCrianca = spnome, idade = spidade, serie = spserie, sexo = spsexo, imagemPerfil = spimagemPerfil
    WHERE idCrianca = spidCrianca$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spAtualizaResponsavel` (IN `nomeResponsavel` VARCHAR(90), IN `email` VARCHAR(100), IN `senhaEmail` VARCHAR(20), IN `idResponsavel` INT)   BEGIN
    UPDATE responsavel SET nomeResponsavel = nomeResponsavel, email = email, senhaEmail = senhaEmail
    WHERE idResponsavel = idResponsavel;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spCadastraCrianca` (IN `nomeCrianca` VARCHAR(100), IN `idade` INT(11), IN `serie` INT(11), IN `sexo` VARCHAR(10), IN `avaliacao` VARCHAR(10), IN `nivel` INT(11))   INSERT INTO crianca (nomeCrianca, idade, serie, sexo, avaliacao, nivel) 
    VALUES (nomeCrianca = nomeCrianca, idade = idade, serie = serie, sexo = sexo, avaliacao = valiacao, nivel = nivel)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spCadastraResponsavel` (IN `nomeResponsavel` VARCHAR(90), IN `email` VARCHAR(100), IN `senhaEmail` VARCHAR(20))   BEGIN
    INSERT INTO responsavel (nomeResponsavel, email, senhaEmail) 
    VALUES (nomeResponsavel, email, senhaEmail);   
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spCadastraSenhaAcesso` (IN `senhaAcesso` INT(6))   BEGIN
    INSERT INTO responsavel (senhaAcesso) 
    VALUES (senhaAcesso);    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spConsultaCrianca` (IN `nomeCrianca` VARCHAR(100), IN `idade` INT(11), IN `serie` INT(11), IN `sexo` VARCHAR(10), IN `imagemPerfil` VARCHAR(50))   SELECT idCrianca, nomeCrianca, idade, serie, sexo, imagemPerfil FROM crianca$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spConsultaResponsavel` (IN `nomeResponsavel` VARCHAR(90), IN `email` VARCHAR(100), IN `senhaEmail` VARCHAR(20))   SELECT idResponsavel, nomeResponsavel, email FROM responsavel$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `crianca`
--

CREATE TABLE `crianca` (
  `idCrianca` int(11) NOT NULL,
  `nomeCrianca` varchar(100) NOT NULL,
  `idade` int(30) NOT NULL,
  `serie` int(11) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `avaliacao` varchar(1000) NOT NULL,
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `responsavel`
--

CREATE TABLE `responsavel` (
  `idResponsavel` int(11) NOT NULL,
  `nomeResponsavel` varchar(90) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senhaEmail` varchar(20) NOT NULL,
  `senhaAcesso` int(6) DEFAULT NULL,
  `idCrianca` int(11) NOT NULL,
  `recuperaSenha` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `crianca`
--
ALTER TABLE `crianca`
  ADD PRIMARY KEY (`idCrianca`);

--
-- Índices para tabela `responsavel`
--
ALTER TABLE `responsavel`
  ADD PRIMARY KEY (`idResponsavel`),
  ADD KEY `idCrianca` (`idCrianca`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `crianca`
--
ALTER TABLE `crianca`
  MODIFY `idCrianca` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `responsavel`
--
ALTER TABLE `responsavel`
  MODIFY `idResponsavel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `responsavel`
--
ALTER TABLE `responsavel`
  ADD CONSTRAINT `FKidCrianca` FOREIGN KEY (`idCrianca`) REFERENCES `crianca` (`idCrianca`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
