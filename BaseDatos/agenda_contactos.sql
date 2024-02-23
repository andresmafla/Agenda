-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-02-2024 a las 21:37:26
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agenda_contactos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda`
--

CREATE TABLE `agenda` (
  `telefono_usuario` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `agenda`
--

INSERT INTO `agenda` (`telefono_usuario`, `fecha`, `descripcion`) VALUES
('3215041101', '2023-02-04', 'parcial ingeniería legal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `telefono_usuario` varchar(10) NOT NULL,
  `telefono_contacto` varchar(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`telefono_usuario`, `telefono_contacto`, `nombre`, `categoria`) VALUES
('3100000000', '3215041101', 'andres mafla', 'amigos'),
('3100000000', '3125043456', 'pedro revelo', 'familia'),
('3100000000', '3214567890', 'juan castillo', 'emergencia'),
('3100000000', '3245673421', 'carla vera', 'otros'),
('3215041101', '3175129612', 'javier mafla', 'familia'),
('3215041101', '3125678523', 'andres parra', 'amigos'),
('3215041101', '3105555555', 'bomberos pasto', 'emergencia'),
('3215041101', '3215674534', 'carlos castillo', 'otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `telefono_usuario` varchar(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `contraseña` varchar(255) NOT NULL,
  `fecnac` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`telefono_usuario`, `nombre`, `contraseña`, `fecnac`) VALUES
('3100000000', 'nixon villota', '94a38f9e5fd0ecb6fbfa54eb9f9aab9c', '2023-02-13'),
('3145678334', 'pedro escobar', '25f9e794323b453885f5181f1b624d0b', '2022-04-28'),
('3215041101', 'Andres Mafla', '94a38f9e5fd0ecb6fbfa54eb9f9aab9c', '2000-07-20');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD KEY `rel_usuarios_agenda` (`telefono_usuario`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD KEY `rel_usuarios_contactos` (`telefono_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`telefono_usuario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `rel_usuarios_agenda` FOREIGN KEY (`telefono_usuario`) REFERENCES `usuarios` (`telefono_usuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD CONSTRAINT `rel_usuarios_contactos` FOREIGN KEY (`telefono_usuario`) REFERENCES `usuarios` (`telefono_usuario`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
