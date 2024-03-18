-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 26/02/2024 às 08:20
-- Versão do servidor: 8.2.0
-- Versão do PHP: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_dador_sangue`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `agendamento`
--

DROP TABLE IF EXISTS `agendamento`;
CREATE TABLE IF NOT EXISTS `agendamento` (
  `Cod_AgendamentoConsulta` int NOT NULL AUTO_INCREMENT,
  `descricao` varchar(80) DEFAULT NULL,
  `Data_AgendamentoConsulta` varchar(20) DEFAULT NULL,
  `Situacao` varchar(20) DEFAULT NULL,
  `ID_usuario` int DEFAULT NULL,
  `ID_paciente` int DEFAULT NULL,
  `ID_consulta` int DEFAULT NULL,
  PRIMARY KEY (`Cod_AgendamentoConsulta`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `consulta`
--

DROP TABLE IF EXISTS `consulta`;
CREATE TABLE IF NOT EXISTS `consulta` (
  `id_consulta` int NOT NULL AUTO_INCREMENT,
  `id_medico` int DEFAULT NULL,
  `id_usuario` int DEFAULT NULL,
  `consulta_inicio` varchar(20) DEFAULT NULL,
  `consulta_final` varchar(20) DEFAULT NULL,
  `data_consulta` varchar(20) DEFAULT NULL,
  `dias_Semana` varchar(20) DEFAULT NULL,
  `tipo_consulta` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_consulta`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `medico`
--

DROP TABLE IF EXISTS `medico`;
CREATE TABLE IF NOT EXISTS `medico` (
  `id_medico` int NOT NULL AUTO_INCREMENT,
  `nome_medico` varchar(80) DEFAULT NULL,
  `crm_medico` varchar(45) DEFAULT NULL,
  `especialidade_medico` varchar(45) DEFAULT NULL,
  `ordemMedico` varchar(45) DEFAULT NULL,
  `diponibilMrdica` varchar(20) DEFAULT NULL,
  `escalaMedica` varchar(45) DEFAULT NULL,
  `telefone_medico` varchar(20) DEFAULT NULL,
  `email_medico` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id_medico`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `paciente`
--

DROP TABLE IF EXISTS `paciente`;
CREATE TABLE IF NOT EXISTS `paciente` (
  `id_paciente` int NOT NULL AUTO_INCREMENT,
  `nome_paciente` varchar(80) DEFAULT NULL,
  `apelido_paciente` varchar(45) DEFAULT NULL,
  `genero_paciente` varchar(20) DEFAULT NULL,
  `data_nasc_paciente` varchar(20) DEFAULT NULL,
  `bi_paciente` varchar(45) DEFAULT NULL,
  `nacionalidade_paciente` varchar(20) DEFAULT NULL,
  `endereco_paciente` varchar(80) DEFAULT NULL,
  `telefone_paciente` varchar(20) DEFAULT NULL,
  `senha_paciente` varchar(80) DEFAULT NULL,
  `email_paciente` varchar(80) DEFAULT NULL,
  `ID_Status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_paciente`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `prescricaomedica`
--

DROP TABLE IF EXISTS `prescricaomedica`;
CREATE TABLE IF NOT EXISTS `prescricaomedica` (
  `idprescMedica` int NOT NULL,
  `nomePrescricaoMedica` varchar(80) DEFAULT NULL,
  `tipoPrescricaoMedica` varchar(45) DEFAULT NULL,
  `numPrescricaoMedica` varchar(20) DEFAULT NULL,
  `idDiagnostico` int DEFAULT NULL,
  PRIMARY KEY (`idprescMedica`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `senha` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `usuario`, `senha`) VALUES
(1, 'mguj', 'bastos', '07811dc6c422334ce36a09ff5cd6fe71');

-- --------------------------------------------------------

--
-- Estrutura para tabela `utente`
--

DROP TABLE IF EXISTS `utente`;
CREATE TABLE IF NOT EXISTS `utente` (
  `idUtente` int NOT NULL AUTO_INCREMENT,
  `nomeUtente` varchar(80) DEFAULT NULL,
  `emailUtente` varchar(80) DEFAULT NULL,
  `senhaUtente` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`idUtente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
