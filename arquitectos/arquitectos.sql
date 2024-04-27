-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2023 a las 23:01:17
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
-- Base de datos: `arquitectos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenidos`
--

CREATE TABLE `contenidos` (
  `id` int(10) NOT NULL,
  `ruta` varchar(300) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `descripcion` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `contenidos`
--

INSERT INTO `contenidos` (`id`, `ruta`, `descripcion`) VALUES
(3, 'Casa Comoda y atractiva para vivir \r\nCon diseño estandar y comodidad amplia dentro con su cuartos, sala, comedor,patio trasero y pasillo frontal decorativo', 'infoproyectos/casafach.jpg'),
(4, 'casa 2 pisos con amplios espacios. comodidad dentro del hogar, color madera solido acompañado de un contraste oscuro, diseño profesional', 'infoproyectos/casamadera.jpg'),
(5, 'casa 2 ESTILO VIVIDO, con diseños profesionales, y amplio condecorativo de luces que hacen el hogar de una experiecnia unica acompañado de sus grandes compartimentos en el hogar mismo.', 'infoproyectos/casavivida.jpg'),
(6, 'casa campestre uno de nuestros grandes diseños hechos al momento dando la oportunidad de disfrutar campo y comodidad urbana al mismo mismo tiempo.', 'infoproyectos/muchos.gif');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `interesados`
--

CREATE TABLE `interesados` (
  `id` int(10) NOT NULL,
  `Nombre` int(30) DEFAULT NULL,
  `Apellido` varchar(30) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `Correo` varchar(30) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `Celular` varchar(10) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `Servicio` varchar(30) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `Usuario` varchar(30) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `Contrasena` varchar(30) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `Usuario`, `Contrasena`) VALUES
(1, 'gabriel', 'estrella');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contenidos`
--
ALTER TABLE `contenidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `interesados`
--
ALTER TABLE `interesados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contenidos`
--
ALTER TABLE `contenidos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `interesados`
--
ALTER TABLE `interesados`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
