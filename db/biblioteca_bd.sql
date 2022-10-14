-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2022 a las 18:16:30
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artistas`
--

DROP TABLE IF EXISTS `artistas`;
CREATE TABLE `artistas` (
  `id_artistas` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `lugar` varchar(50) NOT NULL,
  `integrantes_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `artistas`
--

INSERT INTO `artistas` (`id_artistas`, `nombre`, `lugar`, `integrantes_num`) VALUES
(1, 'Pancho y la sonora colorada', 'El chaco', 4),
(2, 'Trio galleta', 'Azul', 3),
(3, 'Los chacareros', 'Del campo', 5),
(4, 'Cuarteto galleta', 'Mar del plata', 4),
(10, 'hola123', 'Del campo', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canciones`
--

DROP TABLE IF EXISTS `canciones`;
CREATE TABLE `canciones` (
  `id_canciones` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `fecha_estreno` date NOT NULL,
  `fk_id_artistas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `canciones`
--

INSERT INTO `canciones` (`id_canciones`, `nombre`, `descripcion`, `fecha_estreno`, `fk_id_artistas`) VALUES
(1, 'Casita blanca', 'Estrenada el 7 de septiembre de 2012, \"Casita blanca\" marco un antes y un despues en la musica pop m', '2012-09-07', 1),
(2, 'Mis prados', 'Esta cancion habla sobre la niñez del cantante principal \"Armando Esteban Quito\".', '1997-05-01', 3),
(4, 'La clotilda', 'Homenaje a la patrona de la bebida blanca.', '2009-05-12', 4),
(5, 'Sabor a shampoo', 'Destinado a la gente que alguna vez probo shampoo, ya sea descuidadamente o por mera curiosidad.', '2017-02-25', 2),
(6, 'Casita negra', 'No marco un antes y despues como casita blanca, pero es agradable al oido.', '2010-08-27', 1),
(7, 'Dulce de membrillo', '\"Dulce de membrillo\", la cancion que mejor nos untaba, dulce y sabrosa.', '2008-02-24', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
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
  MODIFY `id_artistas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `canciones`
--
ALTER TABLE `canciones`
  MODIFY `id_canciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
