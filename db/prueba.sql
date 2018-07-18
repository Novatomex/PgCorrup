-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-07-2018 a las 05:13:24
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foro`
--

CREATE TABLE `foro` (
  `id` int(7) NOT NULL,
  `autor` varchar(200) NOT NULL DEFAULT '',
  `titulo` varchar(200) NOT NULL DEFAULT '',
  `mensaje` text NOT NULL,
  `fecha` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `respuestas` int(11) NOT NULL DEFAULT '0',
  `identificador` int(7) NOT NULL DEFAULT '0',
  `ult_respuesta` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `foro`
--

INSERT INTO `foro` (`id`, `autor`, `titulo`, `mensaje`, `fecha`, `respuestas`, `identificador`, `ult_respuesta`) VALUES
(1, 'Angel', 'Prueba', 'Prueba', '2018-07-07 15:26:17', 1, 0, '2018-07-07 15:34:57'),
(2, 'Novato', 'Re: Prueba', '[citar]Prueba[/citar]\r\n\r\nEsto es una cita', '2018-07-07 15:34:57', 0, 1, '2018-07-07 15:34:57'),
(3, 'Prueba2', 'noticia', 'probando', '2018-07-07 15:37:33', 0, 0, '2018-07-07 15:37:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visita`
--

CREATE TABLE `visita` (
  `pagina_cookie` int(11) NOT NULL,
  `visitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `visita`
--

INSERT INTO `visita` (`pagina_cookie`, `visitas`) VALUES
(1, 5),
(2, 2),
(3, 1),
(4, 1),
(5, 0),
(6, 0),
(7, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `foro`
--
ALTER TABLE `foro`
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `visita`
--
ALTER TABLE `visita`
  ADD UNIQUE KEY `id_cookie` (`pagina_cookie`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `foro`
--
ALTER TABLE `foro`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
