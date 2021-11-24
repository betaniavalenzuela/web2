-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2021 a las 00:28:46
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_laspulpas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(300) NOT NULL,
  `descripcion` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre_categoria`, `descripcion`) VALUES
(1, 'Calzado', 'hechos con cuero ecologico'),
(2, 'Cartera', 'muy lindo material');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `comentario` varchar(400) NOT NULL,
  `puntaje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `id_usuario`, `id_producto`, `comentario`, `puntaje`) VALUES
(16, 15, 4, 'Hermoso producto. Lo volveria a comprar', 5),
(60, 4, 29, 'hermoso producto', 2),
(61, 16, 31, 'Buen precio y calidad', 4),
(64, 18, 29, 'me encanto esta zapatilla', 5),
(66, 2, 27, 'no me gusto el producto', 1),
(67, 17, 27, 'Me encanto el material del producto', 4),
(68, 17, 28, 'Estas zapas son lo mas!!', 5),
(69, 17, 30, 'Me mandaron mal el número de talle', 1),
(70, 18, 40, 'Me hace juego con las zapas que compre de ésta misma marca', 5),
(71, 18, 41, 'El producto es lo que esperaba', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre_producto` varchar(300) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre_producto`, `cantidad`, `precio`, `id_categoria`) VALUES
(27, 'Zapa Jazmin', 3, 4500, 1),
(28, 'Zapa Rosas', 5, 6000, 1),
(29, 'Zapa Magnolias', 5, 4300, 1),
(30, 'Zapa Rita', 7, 4200, 1),
(40, 'Tote azul', 5, 3500, 2),
(41, 'Tote verde', 5, 3500, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(400) NOT NULL,
  `rol_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre_usuario`, `email`, `password`, `rol_admin`) VALUES
(2, 'Maria', 'maria@gmail.com', '$2y$10$et2wwj585VzuwTKQx91BYOcQpnq4/dc6U5TZ4gi0LsICqTgZJui/e', 1),
(3, 'Roberto', 'roberto@gmail.com', '$2y$10$X1dppABfaku9C5gwOnpkUuug/69QTdOo7QrTW1Xg8MiPpfOA8VDEK', 0),
(4, 'Betania', 'betania@gmail.com', '$2y$10$Vi71Y3ZYoeNBPiZxIoq1OO4BFxbGFIzmypiehEEZ1eOuzaibDl7aS', 0),
(16, 'Pedro', 'pepe@gmail.com', '$2y$10$zVH8hV2.jZaK//HJQsltT.Q6WhLDWkX99S.Shqk.jRwAwjzGAnELu', 0),
(17, 'Celeste', 'celeste@gmail.com', '$2y$10$Qj.STtBxHUWg/2jYtXvXgOuSWelO1cGktrMCl3m.PdGsq3pw.1TtS', 1),
(18, 'Moni', 'moni@gmail.com', '$2y$10$m.mlcQU6r9mC3WZP/q/creVHfRcn77Kqa.xU3FFR.nwgc29KpAL7y', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `fk_producto_categoria` (`id_categoria`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_producto_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
