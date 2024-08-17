-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-08-2024 a las 07:51:26
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gold_coffee`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_allProducts` ()   SELECT * FROM producto$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `pr_getAllEmpleados` ()   SELECT * FROM EMPLEADO$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `pr_getAllFacturas` ()   SELECT * FROM FACTURA$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `pr_get_AllProductosActive` ()   SELECT * FROM producto where activo = true$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_usuario` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `passw` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_usuario`, `username`, `passw`, `nombre`, `apellidos`, `email`, `telefono`) VALUES
(1, 'jdoe', 'password123', 'John', 'Doe', 'jdoe@example.com', '1234567890'),
(2, 'asmith', 'password456', 'Alice', 'Smith', 'asmith@example.com', '0987654321'),
(3, 'mjohnson', 'password789', 'Michael', 'Johnson', 'mjohnson@example.com', '1122334455');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id_empleado` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `salario` decimal(10,2) NOT NULL,
  `id_puesto` int(11) DEFAULT NULL,
  `fecha_contratacion` date DEFAULT NULL,
  `activo` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_empleado`, `nombre`, `apellidos`, `email`, `telefono`, `salario`, `id_puesto`, `fecha_contratacion`, `activo`) VALUES
(1, 'Carlos', 'Perez', 'cperez@example.com', '1231231234', 3000.00, 1, '2023-01-15', 1),
(2, 'Ana', 'Lopez', 'alopez@example.com', '4321432143', 1000.00, 2, '2023-02-10', 1),
(3, 'Luis', 'Ramirez', 'lramirez@example.com', '3213213214', 5000.00, 3, '2023-03-05', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id_factura` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`id_factura`, `nombre`, `apellidos`, `fecha`, `total`) VALUES
(1, 'Juan ', 'Perez', '2024-08-01', 45.00),
(2, 'Alberto', 'Elizondo\r\n', '2024-08-02', 24.00),
(3, 'Maria', 'Brenes', '2024-08-03', 60.00),
(4, 'h', 'hj', '2024-08-17', 84.00),
(5, 'h', 'hj', '2024-08-17', 0.00),
(6, 'Brandon', 'Ureña', '2024-08-17', 30.00),
(7, 'Brandon', 'Ureña', '2024-08-17', 32.00),
(8, 'rff', 'rfr', '2024-08-17', 20.00),
(9, 'bravhv', 'hchc', '2024-08-17', 12.00),
(10, 'rfr', 'frf', '2024-08-17', 32.00),
(11, 'de', 'deded', '2024-08-17', 12.00),
(12, 'dede', 'dede', '2024-08-17', 10039.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `especie_cafe` varchar(50) NOT NULL,
  `tipo_proceso` varchar(50) NOT NULL,
  `tipo_tueste` varchar(50) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `existencias` int(11) NOT NULL,
  `ruta_imagen` varchar(255) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `especie_cafe`, `tipo_proceso`, `tipo_tueste`, `descripcion`, `precio`, `existencias`, `ruta_imagen`, `activo`) VALUES
(1, 'Arabica', 'Lavado', 'Medio', 'Café Arabica lavado con tueste medio', 15.00, 97, 'https://cdn.prod.website-files.com/5ff88ad681e9a7066010e662/602d7d40e98d252e3ca88796_Coffee%20-%20Cerro%20Verde%20Costa%20Rica%20-%20Catuai%20Rojo.png', 1),
(2, 'Robusta', 'Tostado', 'Oscuro', 'Café Robusta natural con tueste oscuro 400gr', 12.00, 144, 'https://cdn.prod.website-files.com/5ff88ad681e9a7066010e662/6054d21869098eade05b67c6_Coffee---Cerro-Verde-Costa-Rica--Caturra.png', 1),
(3, 'Liberica', 'Honey', 'Claro', 'Café Liberica con proceso Honey y tueste claro', 20.00, 72, 'https://cdn.prod.website-files.com/5ff88ad681e9a7066010e662/602fdb33f4915e0590c89b1c_Coffee---Cerro-Verde-Costa-Rica--tipicaM.png', 1),
(12, 'Catuí', 'Lavado', 'Medio', 'Café Catuí Honey Lavado 400gr', 5000.00, 58, 'https://cdn.prod.website-files.com/5ff88ad681e9a7066010e662/602fdb33f4915e0590c89b1c_Coffee---Cerro-Verde-Costa-Rica--tipicaM.png', 1);

--
-- Disparadores `producto`
--
DELIMITER $$
CREATE TRIGGER `actualizar_estado_producto` AFTER UPDATE ON `producto` FOR EACH ROW BEGIN
    IF NEW.existencias = 0 THEN
        UPDATE producto
        SET activo = 0
        WHERE id_producto = NEW.id_producto;
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puesto`
--

CREATE TABLE `puesto` (
  `id_puesto` int(11) NOT NULL,
  `nombre_puesto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `puesto`
--

INSERT INTO `puesto` (`id_puesto`, `nombre_puesto`) VALUES
(1, 'Gerente'),
(2, 'Barista'),
(3, 'Vendedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL,
  `id_factura` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `precio` decimal(10,2) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id_venta`, `id_factura`, `id_producto`, `precio`, `cantidad`) VALUES
(1, 1, 1, 15.00, 3),
(2, 2, 2, 12.00, 2),
(3, 3, 3, 20.00, 3),
(4, 4, 3, 20.00, 3),
(5, 4, 2, 12.00, 2),
(6, 6, 1, 15.00, 2),
(7, 7, 2, 12.00, 1),
(8, 7, 3, 20.00, 1),
(9, 8, 3, 20.00, 1),
(10, 9, 2, 12.00, 1),
(11, 10, 2, 12.00, 1),
(12, 10, 3, 20.00, 1),
(13, 11, 2, 12.00, 1),
(14, 12, 2, 12.00, 2),
(15, 12, 1, 15.00, 1),
(16, 12, 12, 5000.00, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_empleado`),
  ADD KEY `id_puesto` (`id_puesto`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id_factura`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `puesto`
--
ALTER TABLE `puesto`
  ADD PRIMARY KEY (`id_puesto`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_factura` (`id_factura`),
  ADD KEY `id_producto` (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id_factura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `puesto`
--
ALTER TABLE `puesto`
  MODIFY `id_puesto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`id_puesto`) REFERENCES `puesto` (`id_puesto`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`id_factura`) REFERENCES `factura` (`id_factura`),
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
