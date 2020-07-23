-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-06-2020 a las 06:53:35
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fonda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comida`
--

CREATE TABLE `comida` (
  `id` int(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` decimal(7,2) NOT NULL,
  `imagen` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comida`
--

INSERT INTO `comida` (`id`, `nombre`, `descripcion`, `precio`, `imagen`) VALUES
(17, 'torta de jamon', 'torta de jamon con huevo', '20.00', 'torta.jpg'),
(18, 'torta de huevo', 'torta de huevo', '20.00', 'torta2.jpg'),
(19, 'torta de milanesa', 'torta de milanesa con quesilo', '20.00', 'torta4.jpg'),
(20, 'mole rojo', 'mole rojo con pollo y arroz', '50.00', 'C84C7076-811C-6377-B9D8-FF0000673B69-610x360-b-min.png'),
(21, 'torta de cecina', 'torta de cenina roja con quesillo', '20.00', 'torta6.jpg'),
(22, 'torta de jamon', 'asd', '22.00', 'C84C7076-811C-6377-B9D8-FF0000673B69-610x360-b-min2.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lonche`
--

CREATE TABLE `lonche` (
  `id` int(10) NOT NULL,
  `usuario_id` int(10) NOT NULL,
  `producto_id` int(10) NOT NULL,
  `cantidad` int(5) NOT NULL,
  `precio` decimal(7,2) NOT NULL,
  `total` decimal(7,2) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `lonche`
--

INSERT INTO `lonche` (`id`, `usuario_id`, `producto_id`, `cantidad`, `precio`, `total`, `status`) VALUES
(27, 12, 17, 1, '20.00', '20.00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido_p` varchar(20) NOT NULL,
  `apellido_m` varchar(20) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `contrasena` varchar(20) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `rango` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido_p`, `apellido_m`, `correo`, `telefono`, `contrasena`, `status`, `rango`) VALUES
(12, 'Ramiro', 'Altamirano', 'Lopez', 'ramiro@gmail.com', '9513667929', '123456', 1, 0),
(13, 'clara', 'ortega', 'arenas', 'chinita@gmail.com', '9512484748', '12345678', 1, 0),
(14, 'admin', 'super', 'root', 'admin@gmail.com', '1111111111', 'admin', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comida`
--
ALTER TABLE `comida`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lonche`
--
ALTER TABLE `lonche`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comida`
--
ALTER TABLE `comida`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `lonche`
--
ALTER TABLE `lonche`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
