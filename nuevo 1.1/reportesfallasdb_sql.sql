-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2024 a las 16:38:03
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reportesfallasdb`
--
CREATE DATABASE IF NOT EXISTS `reportesfallasdb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `reportesfallasdb`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrofallas`
--

DROP TABLE IF EXISTS `registrofallas`;
CREATE TABLE IF NOT EXISTS `registrofallas` (
  `report_id` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `problema` text NOT NULL,
  `imagen` longblob DEFAULT NULL,
  `enviado` int(11) DEFAULT 0,
  PRIMARY KEY (`report_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registrofallas`
--

INSERT INTO `registrofallas` (`report_id`, `area`, `problema`, `imagen`, `enviado`) VALUES
('05e1b62ebbb717b32d0f', 'Gerencia', 'p18', NULL, 1),
('1789e4e09c023dae1599', 'Gerencia', 'p18', NULL, 1),
('1d1246da15e711a09d51', 'Gerencia', 'p18', NULL, 1),
('24198552706d1ba3046a', 'Secretaria General', 'p4', '', 1),
('2a60309a1e2f6a4d9045', 'ALMACEN', 'p6', '', 1),
('317756a19bbb01e13b4c', 'Secretaria General', 'p5', '', 1),
('3893d3f5c2dd5b45b7a8', 'Gerencia', 'p8', '', 1),
('3e391e26f23b36e49581', 'Secretaria General', 'p23', NULL, 1),
('4af5bf301796a0f65eda', 'Tesorería', 'p3', '', 1),
('4b0cf6420f5f00b997db', 'Abastecimientos', 'pruebas 21', NULL, 1),
('4b983690be977e7b7652', 'Alcaldia', 'p78', NULL, 1),
('5cfc1e9c3072b0ec8db0', 'Secretaria de Gerencia', 'p11', NULL, 1),
('9b73125f93af5a7c272e', 'Rentas', 'p7', '', 1),
('9ec867b1186c70189652', 'DEMUNA', 'p10', '', 1),
('a1cb98169f98512d2977', 'Secretaria de Gerencia', 'p11', NULL, 1),
('adfe55dba6e1388457e5', 'Gerencia', 'p18', NULL, 1),
('b7835a5a5053c38ff80d', 'Gerencia', 'p18', NULL, 1),
('be066f55ae9e3516e3d6', 'Gerencia', 'p18', NULL, 1),
('c1afefb39d964ed04a25', 'Gerencia', 'p9', '', 1),
('c37e987adcd426d26ace', 'ALMACEN', 'p6\r\n', '', 1),
('cb62571910c5feb96b15', 'Rentas', 'p19', NULL, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
