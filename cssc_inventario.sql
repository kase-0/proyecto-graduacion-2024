-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-07-2024 a las 23:00:25
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cssc_inventario`
--
CREATE DATABASE IF NOT EXISTS `cssc_inventario` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `cssc_inventario`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

DROP TABLE IF EXISTS `estudiantes`;
CREATE TABLE `estudiantes` (
  `id_estudiante` int(10) NOT NULL,
  `codigo_carnet` int(10) NOT NULL,
  `nombre_estudiante` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_estudiante` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `grado_estudiante` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `correo_estudiante` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `prestado_bool` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id_estudiante`, `codigo_carnet`, `nombre_estudiante`, `apellido_estudiante`, `grado_estudiante`, `correo_estudiante`, `prestado_bool`) VALUES
(1, 20130072, 'Rene', 'Serrano', '43A', '20130072@santacecilia.edu.sv', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `herramientas`
--

DROP TABLE IF EXISTS `herramientas`;
CREATE TABLE `herramientas` (
  `id_herramienta` int(11) NOT NULL,
  `codigo_herramienta` int(255) NOT NULL,
  `nombre_herramienta` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `categoria_herramienta` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `precio_herramienta` int(100) NOT NULL,
  `stocktotal_herramienta` int(100) NOT NULL,
  `stockdisponible_herramienta` int(100) NOT NULL,
  `descripcion_herramienta` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `herramientas`
--

INSERT INTO `herramientas` (`id_herramienta`, `codigo_herramienta`, `nombre_herramienta`, `categoria_herramienta`, `precio_herramienta`, `stocktotal_herramienta`, `stockdisponible_herramienta`, `descripcion_herramienta`) VALUES
(38, 33, 'fdfd', 'ElÃ©ctrica', 333, 5, 0, 'fvdsdf'),
(39, 5, 'dwds', 'ElÃ©ctrica', 333, 5, 1, '34324dsa'),
(40, 20220041, 'TALADRO', 'ElÃ©ctrica', 5, 5, 4, 'TALADRO DE PUNTA BROCA'),
(41, 5, 'fdfd', 'ElÃ©ctrica', 5, 333, 1, '34324dsa'),
(42, 33, 'fdfd', 'ElÃ©ctrica', 5, 333, 0, 'fvdsdf'),
(43, 33, 'fdfd', 'ElÃ©ctrica', 5, 333, 0, 'fvdsdf'),
(44, 1221, 'Destornillador', 'Manual', 1221, 1221, 1, 'PequeÃ±o');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

DROP TABLE IF EXISTS `prestamos`;
CREATE TABLE `prestamos` (
  `id_prestamo` int(100) NOT NULL,
  `codigo_estudiante` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `codigo_herramienta` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `prestamos`
--

INSERT INTO `prestamos` (`id_prestamo`, `codigo_estudiante`, `codigo_herramienta`) VALUES
(3, '20130072', 1221);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id_usuario` int(3) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo_electronico` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `contrasenia` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `rol` int(2) NOT NULL,
  `estado` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `usuario`, `correo_electronico`, `contrasenia`, `rol`, `estado`) VALUES
(1, 'CSSC', 'INVENTARIO', 'admin', 'inventario@santacecilia.edu.sv', '12345', 1, 'ACTIVO'),
(2, 'admin', 'dos', 'admin2', 'admin2@santacecilia.edu.sv', '12345', 2, 'ACTIVO'),
(4, 'william', 'peraza', 'wp', 'wp@gmail.com', '1221', 2, 'INACTIVO'),
(5, 'Fer', 'Barrera', 'fb', 'fb@gmail.com', '1221', 2, 'PENDIENTE');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id_estudiante`);

--
-- Indices de la tabla `herramientas`
--
ALTER TABLE `herramientas`
  ADD PRIMARY KEY (`id_herramienta`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`id_prestamo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id_estudiante` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `herramientas`
--
ALTER TABLE `herramientas`
  MODIFY `id_herramienta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `id_prestamo` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
