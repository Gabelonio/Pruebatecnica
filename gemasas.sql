CREATE DATABASE gemasas;
USE gemasas;
-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-01-2023 a las 15:23:43
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gemasas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `codigo` int(10) NOT NULL,
  `codigoRevisorFK` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revisores`
--

CREATE TABLE `revisores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `codigoRevisorFK` (`codigoRevisorFK`);


--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `registros`
--
ALTER TABLE `registros`
  ADD CONSTRAINT `codigoRevisorFK` FOREIGN KEY (`codigoRevisorFK`) REFERENCES `revisores` (`id`);
COMMIT;

INSERT INTO `revisores` (`nombre`, `apellido`) VALUES ('Nombre', 'Revisor1');
INSERT INTO `revisores` (`nombre`, `apellido`) VALUES ('Nombre', 'Revisor2');
INSERT INTO `revisores` (`nombre`, `apellido`) VALUES ('Nombre', 'Revisor3');
INSERT INTO `revisores` (`nombre`, `apellido`) VALUES ('Nombre', 'Revisor4');
INSERT INTO `revisores` (`nombre`, `apellido`) VALUES ('Nombre', 'Revisor5');
INSERT INTO `revisores` (`nombre`, `apellido`) VALUES ('Nombre', 'Revisor6');
INSERT INTO `revisores` (`nombre`, `apellido`) VALUES ('Nombre', 'Revisor7');
INSERT INTO `revisores` (`nombre`, `apellido`) VALUES ('Nombre', 'Revisor8');



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
