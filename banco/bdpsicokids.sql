-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Jun-2022 às 04:20
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `spAtualizaResponsavel` (IN `nomeResponsavel` VARCHAR(90), `telefone` VARCHAR(15), `email` VARCHAR(100), `senhaEmail` VARCHAR(20))   BEGIN
    UPDATE responsavel SET nomeResponsavel = spnomeResponsavel, telefone = sptelefone, email = spemail, senhaEmail = spsenhaEmail
    WHERE idResponsavel = spidResponsavel;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spCadastraCrianca` (IN `nomeCrianca` VARCHAR(100), IN `idade` INT(11), IN `serie` INT(11), IN `sexo` VARCHAR(10), IN `avaliacao` VARCHAR(10), IN `nivel` INT(11))   INSERT INTO crianca (nomeCrianca, idade, serie, sexo, avaliacao, nivel) 
    VALUES (nomeCrianca = nomeCrianca, idade = idade, serie = serie, sexo = sexo, avaliacao = avaliacao, nivel = nivel)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spCadastraResponsavel` (IN `nomeResponsavel` VARCHAR(90), IN `email` VARCHAR(100), IN `senhaEmail` VARCHAR(20), IN `senhaAcesso` INT(6))   BEGIN
    INSERT INTO responsavel (nomeResponsavel, email, senhaEmail) 
    VALUES (nomeResponsavel, email, senhaEmail);    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spConsultaCrianca` (IN `nomeCrianca` VARCHAR(100), IN `idade` INT(11), IN `serie` INT(11), IN `sexo` VARCHAR(10), IN `imagemPerfil` VARCHAR(50))   SELECT idCrianca, nomeCrianca, idade, serie, sexo, imagemPerfil FROM crianca$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spConsultaResponsavel` (IN `nomeResponsavel` VARCHAR(90), IN `telefone` VARCHAR(15), IN `email` VARCHAR(100), IN `senhaEmail` VARCHAR(20))   SELECT idResponsavel, nomeResponsavel, telefone, email FROM responsavel$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(3) NOT NULL,
  `nomeResponsavel` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `nomeCrianca` varchar(100) NOT NULL,
  `idadeCriaca` int(2) NOT NULL,
  `serieCrianca` int(2) NOT NULL,
  `sexoCrianca` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nomeResponsavel`, `email`, `senha`, `nomeCrianca`, `idadeCriaca`, `serieCrianca`, `sexoCrianca`) VALUES
(1, 'Joao', 'joaovitorpereiramartins.2004@gmail.com', '1234', 'cadastro', 1, 1, 'feminino'),
(2, 'Joao', 'joaovramartins.2004@gmail.com', '1', 'cadastro', 2, 2, 'masculino'),
(3, 'JP-04.github.io', 'a@gmail.com', 'a', 'a', 1, 1, 'a'),
(6, 'ana', 'ana@gmail.com', 'a', 'ana', 2, 2, 'homi'),
(7, 'test', 'test@gmail.com', 'test', 'test', 9, 9, 'feminino');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
