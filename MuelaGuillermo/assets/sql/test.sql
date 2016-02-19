-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-02-2016 a las 13:38:47
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aficiones`
--

CREATE TABLE IF NOT EXISTS `aficiones` (
  `idAfic` int(254) NOT NULL,
  `nombre` varchar(120) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aficiones`
--

INSERT INTO `aficiones` (`idAfic`, `nombre`) VALUES
(10, 'Musica'),
(11, 'Ciencia'),
(12, 'Tecnología'),
(13, 'Puenting'),
(14, 'aaa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE IF NOT EXISTS `personas` (
  `idPers` int(254) NOT NULL,
  `nombre` varchar(120) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`idPers`, `nombre`) VALUES
(27, 'Ana'),
(28, 'Pepe'),
(29, 'Guille'),
(30, 'maria'),
(31, 'Persona Nueva'),
(32, 'SinAficiones'),
(33, 'SinAficiones2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas_aficiones`
--

CREATE TABLE IF NOT EXISTS `personas_aficiones` (
  `idPers` int(254) NOT NULL,
  `idAfic` int(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personas_aficiones`
--

INSERT INTO `personas_aficiones` (`idPers`, `idAfic`) VALUES
(27, 12),
(27, 11),
(27, 10),
(28, 12),
(28, 10),
(29, 12),
(29, 10),
(30, 11),
(31, 13),
(31, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `_menus`
--

CREATE TABLE IF NOT EXISTS `_menus` (
  `id` int(11) NOT NULL,
  `idp` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `accion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `_menus`
--

INSERT INTO `_menus` (`id`, `idp`, `nombre`, `accion`) VALUES
(1, 0, 'Afición', ''),
(2, 0, 'Persona', ''),
(3, 1, 'Crear', 'Aficiones/Crear'),
(4, 2, 'Listar', 'Personas/Listar'),
(5, 2, 'Crear', 'Personas/Crear');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aficiones`
--
ALTER TABLE `aficiones`
  ADD PRIMARY KEY (`idAfic`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`idPers`);

--
-- Indices de la tabla `_menus`
--
ALTER TABLE `_menus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aficiones`
--
ALTER TABLE `aficiones`
  MODIFY `idAfic` int(254) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `idPers` int(254) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
