-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 19-11-2023 a las 00:26:57
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inscripcion2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(3) NOT NULL,
  `nombrecompleto` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `contrasena` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombrecompleto`, `email`, `usuario`, `contrasena`) VALUES
(1, 'Hector Cetina Cordero', 'hectorcetina@hotmail.com', 'hector', '123'),
(2, 'Patricia Mendoza', 'patricia@gmail.com', 'paty', '123'),
(4, 'Juan Perez', 'juan@gmail.com', 'juan', '123'),
(5, 'Maria Solis', 'maria@gmail.com', 'maria', '123'),
(6, 'Ivanna Mendez', 'ivanna@hotmail.com', 'ivanna', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `verano`
--

CREATE TABLE `verano` (
  `id` int(3) NOT NULL,
  `carreras` varchar(20) DEFAULT NULL,
  `ingreso` varchar(20) DEFAULT NULL,
  `materias` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `verano`
--

INSERT INTO `verano` (`id`, `carreras`, `ingreso`, `materias`) VALUES
(1, 'sistemas', 'Séptimo Ingreso', 'Programacio Web 7SB'),
(2, 'sistemas', 'Primer Ingreso', 'Quimica 1ST'),
(3, 'sistemas', 'Quinto Ingreso', 'Matematicas I 5SA'),
(4, 'sistemas', 'Noveno Ingreso', 'Desarrollo Frontend 9ST'),
(5, 'mecanica', 'Sexto Ingreso', 'Mecánica I 1SB'),
(6, 'electrica', 'Segundo Ingreso', 'Quimica');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `verano`
--
ALTER TABLE `verano`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `verano`
--
ALTER TABLE `verano`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
