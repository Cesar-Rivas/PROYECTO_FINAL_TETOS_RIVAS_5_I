-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2021 a las 10:00:11
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_tetos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `crud_autos`
--

CREATE TABLE `crud_autos` (
  `id` int(10) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `ano` varchar(30) NOT NULL,
  `color` varchar(30) NOT NULL,
  `num_serie` varchar(30) NOT NULL,
  `placas` varchar(30) NOT NULL,
  `precio` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `crud_autos`
--

INSERT INTO `crud_autos` (`id`, `marca`, `modelo`, `ano`, `color`, `num_serie`, `placas`, `precio`) VALUES
(1, 'Chevrolet', 'Covalt', '2006', 'Azul', '12345678', 'EF2-M2NS', '$70000'),
(2, 'Mercedes', 'A-Class 220', '2020', 'Gris', '87654321', 'MG3-C4FS', '$160000'),
(3, 'Ford', 'Mustang', '1964', 'Blanco', '98765432', 'JL7-NSD3', '$100000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `crud_autosvendidos`
--

CREATE TABLE `crud_autosvendidos` (
  `id` int(10) NOT NULL,
  `carro` varchar(30) NOT NULL,
  `ano` varchar(30) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `color` varchar(30) NOT NULL,
  `precio` varchar(50) NOT NULL,
  `detalles` varchar(50) NOT NULL,
  `fecha` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `crud_autosvendidos`
--

INSERT INTO `crud_autosvendidos` (`id`, `carro`, `ano`, `modelo`, `color`, `precio`, `detalles`, `fecha`) VALUES
(2, 'Volkswagen', '1970', 'Beatle', 'Blanco', '$60000', 'Ninguno', '11/11/21'),
(3, 'Ford ', '2009', 'Fiesta', 'Blanco', '$100000', 'Faro delantero derecho fundido', '13/11/21'),
(4, 'Chevrolet ', '2010', 'Equinox', 'Azul', '$100000', 'Ninguno', '16/11/21'),
(5, 'Ford', '2010', 'Focus', 'Rojo', '$75000', 'Ninguno', '26/11/21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `crud_empleados`
--

CREATE TABLE `crud_empleados` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `edad` varchar(30) NOT NULL,
  `sueldo` varchar(30) NOT NULL,
  `puesto` varchar(50) NOT NULL,
  `antiguedad` varchar(30) NOT NULL,
  `num_tel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `crud_empleados`
--

INSERT INTO `crud_empleados` (`id`, `nombre`, `sexo`, `edad`, `sueldo`, `puesto`, `antiguedad`, `num_tel`) VALUES
(1, 'César René Rivas Andrade', 'Masculino', '23 años', '$1567.00', 'Asistente de ventas', '8 meses', '6563524282'),
(5, 'Juan Carlos Martínez Hernández', 'Masculino', '22 años', '$1402.60', 'Intendente', '1 año', '6568888664'),
(6, 'Edwin Martinez Mendoza', 'Masculino', '38 años', '$8669.00', 'CEO', '16 años', '6563524282'),
(8, 'Christian Emilio Guerrero Peralta', 'Masculino', '23 años', '$1402.60', 'Asistente de ventas', '1 año', '6563524282');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `crud_venta`
--

CREATE TABLE `crud_venta` (
  `id` int(10) NOT NULL,
  `num_venta` varchar(30) NOT NULL,
  `fecha` varchar(30) NOT NULL,
  `empleado` varchar(30) NOT NULL,
  `num_tel` varchar(30) NOT NULL,
  `tarjeta` varchar(30) NOT NULL,
  `total` varchar(30) NOT NULL,
  `carro` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `crud_venta`
--

INSERT INTO `crud_venta` (`id`, `num_venta`, `fecha`, `empleado`, `num_tel`, `tarjeta`, `total`, `carro`) VALUES
(1, '#123', '11/11/21', 'César René Rivas Andrade', '6563524282', 'Eliseo Nava Sánchez', '$100000', 'Volkswagen Beatle'),
(3, '#124', '13/11/21', 'Joshua Nava Sánchez', '6560000000', 'Luis Alejandro Gutiérrez', '$125000', 'Ford Focus'),
(4, '#125', '16/11/21', 'Joshua Nava Sánchez', '65688343', 'Pepito López Hernández', '$100000', 'Chevrolet Equinox'),
(5, '#126', '26/11/21', 'Joshua Nava Sánchez', '6568888664', 'Pepito López Hernández', '$75000', 'Ford Focus');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `crud_autos`
--
ALTER TABLE `crud_autos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `crud_autosvendidos`
--
ALTER TABLE `crud_autosvendidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `crud_empleados`
--
ALTER TABLE `crud_empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `crud_venta`
--
ALTER TABLE `crud_venta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `crud_autos`
--
ALTER TABLE `crud_autos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `crud_autosvendidos`
--
ALTER TABLE `crud_autosvendidos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `crud_empleados`
--
ALTER TABLE `crud_empleados`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `crud_venta`
--
ALTER TABLE `crud_venta`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
