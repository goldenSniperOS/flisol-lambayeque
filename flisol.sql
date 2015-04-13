-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-04-2015 a las 06:42:50
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `flisol`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE IF NOT EXISTS `asistencia` (
  `cod_asistencia` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cod_insc` int(11) NOT NULL,
  `confir_asis` int(1) NOT NULL,
  PRIMARY KEY (`cod_asistencia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`cod_asistencia`, `nombres`, `apellidos`, `email`, `cod_insc`, `confir_asis`) VALUES
(1, 'Pepe Andres', 'Gonzales Gonzales', 'user@email.com', 2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE IF NOT EXISTS `evento` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `speaker` varchar(255) NOT NULL,
  `hora` time NOT NULL,
  `duracion` int(3) NOT NULL,
  `lugar` varchar(255) NOT NULL,
  `min_asis` int(3) NOT NULL,
  `tipo_evento` int(1) NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`cod`, `nombre`, `speaker`, `hora`, `duracion`, `lugar`, `min_asis`, `tipo_evento`) VALUES
(1, 'Taller Numero 1', 'Adrian Ruiz', '10:00:00', 120, 'Laboratorio1', 25, 2),
(2, 'Conferencia 1', 'Anguel Sirlopu', '11:00:00', 90, 'Auditorio', 60, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE IF NOT EXISTS `pago` (
  `cod_pago` int(11) NOT NULL AUTO_INCREMENT,
  `pago` decimal(8,2) NOT NULL,
  `cod_asistencia` int(11) NOT NULL,
  PRIMARY KEY (`cod_pago`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
