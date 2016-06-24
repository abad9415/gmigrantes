-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2016 a las 19:28:37
-- Versión del servidor: 5.7.9
-- Versión de PHP: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gmigrante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuestacorta`
--

DROP TABLE IF EXISTS `encuestacorta`;
CREATE TABLE IF NOT EXISTS `encuestacorta` (
  `id_migrante` int(10) NOT NULL AUTO_INCREMENT,
  `id_encuesta` int(5) NOT NULL,
  `fecha` text NOT NULL,
  `hora` text NOT NULL,
  `encuestador` text NOT NULL,
  `ape_paterno` text NOT NULL,
  `ape_materno` text NOT NULL,
  `nombre` text NOT NULL,
  `fecha_de_nacimiento` text NOT NULL,
  `sexo` varchar(100) NOT NULL,
  `edad` text NOT NULL,
  `originario` text NOT NULL,
  `estado_civil` text NOT NULL,
  `hijos` text NOT NULL,
  `estudios` text NOT NULL,
  `cruzando` text NOT NULL,
  `c_fecha_salio_casa` text NOT NULL,
  `c_por_donde_cruzo` text NOT NULL,
  `c_cuanto_cobran` text NOT NULL,
  `c_intentos` text NOT NULL,
  `vivia_eua` text NOT NULL,
  `v_anos_viviendo` text NOT NULL,
  `v_donde_vivia` text NOT NULL,
  `v_donde_lo_detuvieron` text NOT NULL,
  `tiempo_detenido` text NOT NULL,
  `porque_mas_3_dias` text NOT NULL,
  `victima_abuso` text NOT NULL,
  `conoce_derechos` text NOT NULL,
  `derechos_violados_porque` text NOT NULL,
  `como_de_salud` text NOT NULL,
  `servicio_modulo` text NOT NULL,
  `observaciones` text NOT NULL,
  PRIMARY KEY (`id_migrante`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
