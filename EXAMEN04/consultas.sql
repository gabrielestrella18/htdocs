-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-12-2023 a las 04:22:12
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `id` int(10) NOT NULL,
  `NOMBRE` varchar(30) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `MATRICULA` int(30) DEFAULT NULL,
  `ERES REPARTIDOR?` varchar(30) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `Lunes` varchar(10) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `Martes` varchar(10) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `Miercoles` varchar(10) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `Jueves` varchar(10) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `Viernes` varchar(10) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `Sabado` varchar(10) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `HORARIO` varchar(10) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `CARRERA` varchar(30) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `SEMESTRE` varchar(30) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
