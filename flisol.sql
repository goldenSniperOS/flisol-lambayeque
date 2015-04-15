-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generaciÃ³n: 15-04-2015 a las 02:59:02
-- VersiÃ³n del servidor: 5.6.20
-- VersiÃ³n de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `flisol2015`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE IF NOT EXISTS `asistencia` (
`cod_asistencia` int(11) NOT NULL,
  `cod_asistente` int(11) NOT NULL,
  `cod_evento` int(11) NOT NULL,
  `confirm_asis` int(1) NOT NULL,
  `confirm_pago` int(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`cod_asistencia`, `cod_asistente`, `cod_evento`, `confirm_asis`, `confirm_pago`) VALUES
(1, 1, 1, 0, 0),
(2, 1, 2, 0, 0),
(6, 6, 3, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistente`
--

CREATE TABLE IF NOT EXISTS `asistente` (
`cod_asistente` int(11) NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `asistente`
--

INSERT INTO `asistente` (`cod_asistente`, `nombres`, `apellidos`, `email`) VALUES
(1, 'Miguel Angel', 'Sirlopu', 'design.anguel@gmail.com'),
(2, 'Peru', 'Ven', 'design.anguel@gmail.com'),
(6, '12312', 'awdada', 'admin@peruven.com.pe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE IF NOT EXISTS `evento` (
`cod_evento` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `expositor` varchar(255) NOT NULL,
  `hora` time NOT NULL,
  `duracion` int(3) NOT NULL,
  `lugar` varchar(255) NOT NULL,
  `tipo_evento` varchar(255) NOT NULL,
  `capacidad` int(3) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`cod_evento`, `nombre`, `expositor`, `hora`, `duracion`, `lugar`, `tipo_evento`, `capacidad`) VALUES
(1, 'open data', 'oscar', '12:00:00', 120, 'auditorio', 'taller', 30),
(2, 'bootstrap', 'awdawd', '11:00:00', 120, 'Lab 5', 'taller', 30),
(3, 'awdawdawda', 'awdawdaw', '02:08:00', 60, 'auditorio', 'conferencia', 100);

--
-- Ãndices para tablas volcadas
--

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
 ADD PRIMARY KEY (`cod_asistencia`), ADD KEY `cod_asistente` (`cod_asistente`), ADD KEY `cod_evento` (`cod_evento`);

--
-- Indices de la tabla `asistente`
--
ALTER TABLE `asistente`
 ADD PRIMARY KEY (`cod_asistente`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
 ADD PRIMARY KEY (`cod_evento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
MODIFY `cod_asistencia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `asistente`
--
ALTER TABLE `asistente`
MODIFY `cod_asistente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
MODIFY `cod_evento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
ADD CONSTRAINT `asistencia_ibfk_1` FOREIGN KEY (`cod_asistente`) REFERENCES `asistente` (`cod_asistente`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `asistencia_ibfk_2` FOREIGN KEY (`cod_evento`) REFERENCES `evento` (`cod_evento`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
 