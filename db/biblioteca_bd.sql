-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2022 a las 20:19:05
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca_bd`
--
CREATE DATABASE IF NOT EXISTS `biblioteca_bd` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `biblioteca_bd`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artistas`
--

CREATE TABLE `artistas` (
  `id_artistas` int(11) NOT NULL,
  `nombre_artistas` varchar(50) NOT NULL,
  `lugar` varchar(50) NOT NULL,
  `integrantes_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `artistas`
--

INSERT INTO `artistas` (`id_artistas`, `nombre_artistas`, `lugar`, `integrantes_num`) VALUES
(2, 'Trio galleta', 'Azul', 3),
(4, 'Cuarteto galleta', 'Mar del plata', 4),
(12, 'Ladron de manzanas', 'Mas alla', 1),
(13, 'Trio galleta', 'Azul', 3),
(14, 'Cinco galletas', 'Azul', 3),
(15, 'Cinco galletas', 'Azul', 5),
(16, 'Cinco galleta', 'Azu', 4),
(19, 'Esto es nuevo', 'Nuevo', 100000),
(20, 'Esto es nuevo', 'Nuevo', 100000),
(21, 'Verificacion', 'nanana', 12),
(22, 'veri2', 'laalal', 2000),
(23, 'Los nuevos', 'Por alli', 4),
(24, 'Los nuevos', 'Por alli', 4),
(25, 'El señor de la noche', 'Pinamar', 4),
(27, 'bla bla bla', 'Mar del plata', 12),
(28, 'aaaaaa', 'Mar del plata', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canciones`
--

CREATE TABLE `canciones` (
  `id_canciones` int(11) NOT NULL,
  `nombre_canciones` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `fecha_estreno` date NOT NULL,
  `fk_id_artistas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `canciones`
--

INSERT INTO `canciones` (`id_canciones`, `nombre_canciones`, `descripcion`, `fecha_estreno`, `fk_id_artistas`) VALUES
(5, 'Sabor a shampoo', 'Destinado a la gente que alguna vez probo shampoo, ya sea descuidadamente o por mera curiosidad.', '2017-02-25', 2),
(7, 'Dulce de membrillo', '\"Dulce de membrillo\", la cancion que mejor nos untaba, dulce y sabrosa.', '2008-02-24', 2),
(19, 'Dulce de batata', '\"Dulce de batata\", la cancion que mejor nos untaba, dulce y sabrosa.', '2018-02-28', 2),
(21, 'Dulce de leche', '\"Dulce de leche\", la cancion que mejor nos untaba, dulce y sabrosa.', '0000-00-00', 2),
(22, 'La reina batatan', 'Estaba la reina bataaata.', '1991-04-27', 2),
(25, 'aaaaaa', 'Mar del plata', '2019-02-21', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contraseña` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `contraseña`) VALUES
(3, 'Pepito', 'pepito@gmail.com', '$2y$10$2RD7q38s5ZdyztS2OS7B.eVbxl/SHx8/yvEvCNfNPV1n1vWz7iKMC'),
(4, 'ariel', 'ariel@gmail.com', '$2y$10$Mm4iyxLHpQcDX077H5/qHuRTxq0U0d4tV6mfWh8hiqO4Rm1ZSZ4ne'),
(5, 'ariel123', 'ariel123@gmail.com', '$2y$10$6x/NsUYdYr6hf2saFL505upnIQZxWX111BIDbrxl41YIAYDyIH0ke');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `artistas`
--
ALTER TABLE `artistas`
  ADD PRIMARY KEY (`id_artistas`);

--
-- Indices de la tabla `canciones`
--
ALTER TABLE `canciones`
  ADD PRIMARY KEY (`id_canciones`),
  ADD KEY `fk_id_canciones` (`fk_id_artistas`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `artistas`
--
ALTER TABLE `artistas`
  MODIFY `id_artistas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `canciones`
--
ALTER TABLE `canciones`
  MODIFY `id_canciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `canciones`
--
ALTER TABLE `canciones`
  ADD CONSTRAINT `canciones_ibfk_1` FOREIGN KEY (`fk_id_artistas`) REFERENCES `artistas` (`id_artistas`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
