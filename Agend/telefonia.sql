-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2023 a las 00:28:26
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
-- Base de datos: `telefonia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id` int(10) NOT NULL,
  `foto` date DEFAULT NULL,
  `Nombre` varchar(30) COLLATE ucs2_spanish_ci DEFAULT NULL,
  `Apellido` varchar(30) COLLATE ucs2_spanish_ci DEFAULT NULL,
  `Correo` varchar(30) COLLATE ucs2_spanish_ci DEFAULT NULL,
  `Celular` int(10) DEFAULT NULL,
  `Compañia` varchar(30) COLLATE ucs2_spanish_ci DEFAULT NULL,
  `Parentesco` varchar(30) COLLATE ucs2_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `foto`, `Nombre`, `Apellido`, `Correo`, `Celular`, `Compañia`, `Parentesco`) VALUES
(1, NULL, 'oscar', 'jfj', 'oscarrodriguez@yopmail.com', 2147483647, 'Telcel', 'Escuela');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galaria`
--

CREATE TABLE `galaria` (
  `id_foto` int(5) NOT NULL,
  `ruta_foto` varchar(100) COLLATE ucs2_spanish_ci DEFAULT NULL,
  `descripcion_foto` varchar(150) COLLATE ucs2_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(3) NOT NULL,
  `Usuario` varchar(16) COLLATE ucs2_spanish_ci DEFAULT NULL,
  `Contrasena` varchar(16) COLLATE ucs2_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `Usuario`, `Contrasena`) VALUES
(1, 'gabriel', 'estrella');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `galaria`
--
ALTER TABLE `galaria`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `galaria`
--
ALTER TABLE `galaria`
  MODIFY `id_foto` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
