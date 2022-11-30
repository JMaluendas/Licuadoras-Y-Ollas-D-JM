-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2022 a las 03:13:31
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
-- Base de datos: `licuadoras_y_ollas_d2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `IdProducto` int(3) NOT NULL,
  `NombreProducto` varchar(60) NOT NULL,
  `Cantidad` int(5) NOT NULL,
  `ValorIngreso` int(7) NOT NULL,
  `Descuento` int(2) NOT NULL,
  `ValorVenta` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`IdProducto`, `NombreProducto`, `Cantidad`, `ValorIngreso`, `Descuento`, `ValorVenta`) VALUES
(100, 'Producto Prueba Editado', 40, 21000, 2, 28000),
(102, 'Arroz Con Leche 1 Libra', 30, 2300, 10, 2800),
(103, 'Producto Prueba 1', 35, 20000, 1, 27000),
(104, 'Producto Prueba Editado', 40, 21000, 2, 28000),
(105, 'Producto Prueba 1', 5, 20000, 1, 27000),
(106, 'Producto Editado', 30, 2000, 10, 2700),
(109, 'Olla Arrocera 1L', 18, 103000, 5, 129900);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `IdUser` int(2) NOT NULL,
  `NombreUser` varchar(60) NOT NULL,
  `CC` int(11) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Contraseña` int(15) NOT NULL,
  `Tipo_User` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IdUser`, `NombreUser`, `CC`, `Correo`, `Contraseña`, `Tipo_User`) VALUES
(1, 'Usuario Uno Administrador', 1234567, 'usuarioadmin@gmail.com', 1234567890, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `IdVenta` int(6) NOT NULL,
  `IdUserV` int(2) NOT NULL,
  `IdProductoV` int(3) NOT NULL,
  `NombreCliente` varchar(60) NOT NULL,
  `Cedula` int(11) NOT NULL,
  `Correo` varchar(60) NOT NULL,
  `Direccion` varchar(60) NOT NULL,
  `Cantidad` int(2) NOT NULL,
  `ValorUnicoV` int(7) NOT NULL,
  `Descuento` int(2) NOT NULL,
  `ValorTotal` int(7) NOT NULL,
  `Ganancia` int(7) NOT NULL,
  `Fecha` date NOT NULL DEFAULT current_timestamp(),
  `Hora` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`IdVenta`, `IdUserV`, `IdProductoV`, `NombreCliente`, `Cedula`, `Correo`, `Direccion`, `Cantidad`, `ValorUnicoV`, `Descuento`, `ValorTotal`, `Ganancia`, `Fecha`, `Hora`) VALUES
(10000, 1, 100, 'Comprador uno', 12345677, 'compradoruno@gmail.com', 'Gambita', 2, 15000, 5, 28500, 8500, '0000-00-00', '00:00:00'),
(10001, 1, 100, 'Comprador uno', 12345677, 'compradoruno@gmail.com', 'Gambita', 2, 15000, 5, 28500, 8500, '2022-11-18', '00:00:00'),
(10002, 1, 100, 'Comprador uno', 12345677, 'compradoruno@gmail.com', 'Gambita', 2, 15000, 5, 28500, 8500, '2022-11-18', '00:00:00'),
(10003, 1, 100, 'Comprador uno', 12345677, 'compradoruno@gmail.com', 'Gambita', 2, 15000, 5, 28500, 8500, '2022-11-18', '00:00:00'),
(10004, 1, 100, 'Comprador uno', 12345677, 'compradoruno@gmail.com', 'Gambita', 2, 15000, 5, 28500, 8500, '2022-11-18', '22:10:44'),
(10005, 1, 100, 'Comprador uno', 12345677, 'compradoruno@gmail.com', 'Gambita', 2, 15000, 5, 1500, 48500, '2022-11-20', '23:34:54'),
(10006, 1, 100, 'Comprador uno', 12345677, 'compradoruno@gmail.com', 'Gambita', 2, 15000, 5, 28500, 48500, '2022-11-20', '23:38:01'),
(10007, 1, 100, 'Comprador uno', 12345677, 'compradoruno@gmail.com', 'Gambita', 2, 15000, 5, 28500, 4250, '2022-11-20', '23:43:49'),
(10008, 1, 100, 'Comprador uno', 12345677, 'compradoruno@gmail.com', 'Gambita', 2, 15000, 5, 28500, 8500, '2022-11-20', '23:44:25'),
(10009, 1, 100, 'Comprador uno', 12345677, 'compradoruno@gmail.com', 'Gambita', 1, 15000, 5, 14250, 4250, '2022-11-20', '23:54:03'),
(10010, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-21', '23:34:48'),
(10011, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-21', '23:38:21'),
(10012, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-21', '23:40:38'),
(10013, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-21', '23:41:01'),
(10014, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-21', '23:41:36'),
(10015, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-21', '23:43:45'),
(10016, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-21', '23:44:06'),
(10017, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-21', '23:48:33'),
(10018, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-21', '23:49:39'),
(10019, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-21', '23:50:32'),
(10020, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-21', '23:50:44'),
(10021, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-21', '23:51:17'),
(10022, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-21', '23:52:23'),
(10023, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-21', '23:53:04'),
(10024, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-21', '23:56:52'),
(10025, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-21', '23:59:32'),
(10026, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-21', '23:59:48'),
(10027, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-22', '00:00:08'),
(10028, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-22', '00:00:23'),
(10029, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-22', '00:00:36'),
(10030, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-22', '00:02:46'),
(10031, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-22', '00:05:52'),
(10032, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-22', '00:07:46'),
(10033, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-22', '00:09:17'),
(10034, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-22', '00:09:31'),
(10035, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-22', '00:09:54'),
(10036, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-22', '00:10:09'),
(10037, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-22', '00:10:16'),
(10038, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-22', '00:12:33'),
(10039, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-22', '00:14:01'),
(10040, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-22', '00:16:08'),
(10041, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-22', '00:20:14'),
(10042, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-22', '00:22:06'),
(10043, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-22', '00:24:42'),
(10044, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-22', '00:25:19'),
(10045, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-22', '00:26:06'),
(10046, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-22', '00:27:03'),
(10047, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-22', '00:29:06'),
(10048, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-22', '07:17:24'),
(10049, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-22', '07:18:18'),
(10050, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-22', '07:19:34'),
(10051, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-22', '07:20:24'),
(10052, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-22', '07:22:23'),
(10053, 1, 102, 'Nombre Prueba', 12345666, 'nombre@gmail.com', 'Suaita', 3, 2800, 10, 7560, 660, '2022-11-22', '07:25:39'),
(10054, 1, 104, 'Comprador Nombre', 453453, 'nombre@gmail.com', 'Santander', 4, 28000, 2, 109760, 25760, '2022-11-23', '01:40:04'),
(10055, 1, 104, 'Comprador Nombre', 453453, 'nombre@gmail.com', 'Santander', 4, 28000, 2, 109760, 25760, '2022-11-23', '01:41:19'),
(10056, 1, 104, 'Comprador Nombre', 453453, 'nombre@gmail.com', 'Santander', 4, 28000, 2, 109760, 25760, '2022-11-23', '01:42:00'),
(10057, 1, 104, 'Comprador Nombre', 453453, 'nombre@gmail.com', 'Santander', 4, 28000, 2, 109760, 25760, '2022-11-23', '01:44:01'),
(10058, 1, 104, 'Comprador Nombre', 453453, 'nombre@gmail.com', 'Santander', 4, 28000, 2, 109760, 25760, '2022-11-23', '01:45:00'),
(10059, 1, 104, 'Comprador Nombre', 453453, 'nombre@gmail.com', 'Santander', 4, 28000, 2, 109760, 25760, '2022-11-23', '01:46:15'),
(10060, 1, 104, 'Comprador Nombre', 453453, 'nombre@gmail.com', 'Santander', 4, 28000, 2, 109760, 25760, '2022-11-23', '01:46:27'),
(10061, 1, 104, 'Comprador Nombre', 453453, 'nombre@gmail.com', 'Santander', 4, 28000, 2, 109760, 25760, '2022-11-23', '01:46:40'),
(10062, 1, 104, 'Comprador Nombre', 453453, 'nombre@gmail.com', 'Santander', 4, 28000, 2, 109760, 25760, '2022-11-23', '01:47:01'),
(10063, 1, 104, 'Comprador Nombre', 453453, 'nombre@gmail.com', 'Santander', 4, 28000, 2, 109760, 25760, '2022-11-23', '01:47:11'),
(10064, 1, 104, 'Comprador Nombre', 453453, 'nombre@gmail.com', 'Santander', 4, 28000, 2, 109760, 25760, '2022-11-23', '01:47:22'),
(10065, 1, 104, 'Comprador Nombre', 453453, 'nombre@gmail.com', 'Santander', 4, 28000, 2, 109760, 25760, '2022-11-23', '01:47:35'),
(10066, 1, 104, 'Comprador Nombre', 453453, 'nombre@gmail.com', 'Santander', 4, 28000, 2, 109760, 25760, '2022-11-23', '01:47:45'),
(10067, 1, 105, 'Comprador Nombre eefe', 5324534, 'nombre@gmail.com', 'Suaita', 3, 27000, 1, 80190, 20190, '2022-11-23', '01:50:53'),
(10068, 1, 105, 'Comprador Nombre eefe', 5324534, 'nombre@gmail.com', 'Suaita', 3, 27000, 1, 80190, 20190, '2022-11-23', '01:52:19'),
(10069, 1, 105, 'Comprador Nombre eefe', 5324534, 'nombre@gmail.com', 'Suaita', 3, 27000, 1, 80190, 20190, '2022-11-23', '01:52:42'),
(10070, 1, 105, 'Comprador Nombre eefe', 5324534, 'nombre@gmail.com', 'Suaita', 3, 27000, 1, 80190, 20190, '2022-11-23', '01:53:22'),
(10071, 1, 105, 'Comprador Nombre eefe', 5324534, 'nombre@gmail.com', 'Suaita', 3, 27000, 1, 80190, 20190, '2022-11-23', '01:53:42'),
(10072, 1, 105, 'Comprador Nombre eefe', 5324534, 'nombre@gmail.com', 'Suaita', 3, 27000, 1, 80190, 20190, '2022-11-23', '01:53:55'),
(10073, 1, 105, 'Comprador Nombre eefe', 5324534, 'nombre@gmail.com', 'Suaita', 3, 27000, 1, 80190, 20190, '2022-11-23', '01:54:10'),
(10074, 1, 105, 'Comprador Nombre eefe', 5324534, 'nombre@gmail.com', 'Suaita', 3, 27000, 1, 80190, 20190, '2022-11-23', '01:54:58'),
(10075, 1, 105, 'Comprador Nombre eefe', 5324534, 'nombre@gmail.com', 'Suaita', 3, 27000, 1, 80190, 20190, '2022-11-23', '01:55:17'),
(10076, 1, 105, 'Comprador Nombre eefe', 5324534, 'nombre@gmail.com', 'Suaita', 3, 27000, 1, 80190, 20190, '2022-11-23', '01:55:40'),
(10077, 1, 109, 'Comprador De Olla Arocera', 457394, 'olla@gmail.com', 'Santander', 2, 129900, 5, 246810, 40810, '2022-11-23', '18:53:02'),
(10078, 1, 110, 'Cliente De Licuadora', 3465564, 'nombre@gmail.com', 'Santander', 2, 120000, 5, 228000, 28000, '2022-11-23', '21:11:51');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`IdProducto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IdUser`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`IdVenta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `IdProducto` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `IdUser` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `IdVenta` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10079;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
