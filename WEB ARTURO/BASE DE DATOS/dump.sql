-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 29-03-2019 a las 19:43:11
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `parkourweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE IF NOT EXISTS `articulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `imageURL` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `usuario_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_ID` (`usuario_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `titulo`, `imageURL`, `descripcion`, `usuario_ID`) VALUES
(9, 'Saltos', 'img/rutinas/saltos.jpg', 'Los escalones de un edificio son un lugar adecuado para iniciarse por sus diferentes niveles. Subir uno o dos escalones parece sencillo de un salto, pero antes de avanzar a un peldaÃ±o mÃ¡s se tiene que ser capaz de hacer diez repeticiones aterrizando con', NULL),
(10, 'Caminar sobre muros', 'img/rutinas/equilibrio.jpg', 'AquÃ­ el equilibrio es bÃ¡sico. Es importante aprender a estabilizarse sobre una pierna y luego sobre la otra. Posteriormente se deberÃ­a hacer en superficies mÃ¡s irregulares para que resulte mÃ¡s complejo, y tambiÃ©n con las dos piernas. Finalmente, se ', NULL);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD CONSTRAINT `articulos_ibfk_1` FOREIGN KEY (`usuario_ID`) REFERENCES `usuarios` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
