-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2021 a las 00:23:42
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `enunciadouno`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `rol` varchar(45) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `dni` int(11) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `num_celular` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `usuario`, `password`, `rol`, `nombres`, `apellidos`, `dni`, `direccion`, `num_celular`) VALUES
(1, 'Jerico', '1234', 'usuario', 'Jerico', 'Cajahuaman', 74341526, 'jr. ayacucho 153', 912456863),
(2, 'Miguel', '12345', 'usuario', 'Miguel', 'Valverde', 71666872, 'jr. antonio raymondi 362', 964785216),
(3, 'Marvin', '123456', 'admin', 'Marvin', 'Campos', 75179992, 'jr. 28 de julio 1614', 966741287);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `idcliente_clientes` int(11) NOT NULL,
  `idproducto_productos` int(11) NOT NULL,
  `fecha_pedido` date NOT NULL,
  `cantidad_producto` int(11) NOT NULL,
  `precio_total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `idcliente_clientes`, `idproducto_productos`, `fecha_pedido`, `cantidad_producto`, `precio_total`) VALUES
(4, 1, 13, '2021-05-07', 4, '19.16'),
(5, 1, 12, '2021-05-07', 1, '19.60'),
(6, 2, 1, '2021-05-08', 2, '40.20'),
(8, 2, 20, '2021-05-08', 4, '5.16'),
(9, 2, 19, '2021-05-08', 3, '24.87'),
(10, 2, 6, '2021-05-08', 4, '34.40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `id_tipo_productos` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `precio_producto` decimal(10,2) NOT NULL,
  `img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `id_tipo_productos`, `descripcion`, `precio_producto`, `img`) VALUES
(1, 1, 'Arroz Extra FARAON Bolsa 5kg', '20.10', 'faraon5k.jpg'),
(2, 1, 'Arroz Extra BELL\'S Bolsa 5Kg', '15.90', 'faraon5k.jpg'),
(3, 1, 'Arroz Extra COSTEÑO Bolsa 750g', '3.59', 'faraon5k.jpg'),
(4, 1, 'Arroz Integral COSTEÑO Bolsa 750g', '4.30', 'faraon5k.jpg'),
(5, 2, 'Aceite Vegetal PRIMOR Premium 1L', '9.19', 'faraon5k.jpg'),
(6, 2, 'Aceite de Girasol SAO Botella 1L', '8.60', 'faraon5k.jpg'),
(7, 2, 'Aceite Vegetal BELL\'S Botella 900ml', '5.69', 'faraon5k.jpg'),
(8, 2, 'Aceite de Maíz FLORIDA Botella 1L', '11.90', 'faraon5k.jpg'),
(9, 3, 'Azúcar Rubia BELL\'S Bolsa 1Kg', '3.00', 'faraon5k.jpg'),
(10, 3, 'Azúcar Rubia CASA GRANDE Bolsa 1Kg', '3.30', 'faraon5k.jpg'),
(11, 3, 'Azúcar Rubia COSTEÑO Bolsa 1Kg', '3.80', 'faraon5k.jpg'),
(12, 3, 'Edulcorante BELL\'S Caja 100und', '19.60', 'faraon5k.jpg'),
(13, 4, 'Trozos de Atún PRIMOR  Lata ', '4.79', NULL),
(14, 4, 'Filete de Atún FLORIDA en Aceite de Girasol ', '5.49', NULL),
(15, 4, 'Piña en Trozos BELL\'S Lata 567g', '5.50', NULL),
(16, 4, 'Aceituna Verde con Rocoto HUERTO MEJÍA', '6.90', NULL),
(17, 5, 'Spaghetti DON VITTORIO Bolsa 1Kg', '3.89', NULL),
(18, 5, 'Salsa Roja DON VITTORIO Doypack 400g', '3.99', NULL),
(19, 5, 'Crema Huancaína ALACENA Doypack 400g', '8.29', NULL),
(20, 5, 'Fideos Munición MOLITALIA Bolsa 250g', '1.29', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoproducto`
--

CREATE TABLE `tipoproducto` (
  `id_Tproducto` int(11) NOT NULL,
  `tipo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipoproducto`
--

INSERT INTO `tipoproducto` (`id_Tproducto`, `tipo`) VALUES
(1, 'arroz'),
(2, 'aceite'),
(3, 'azucar y endulzante'),
(4, 'conservas'),
(5, 'fideos y pastas');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `fk_pedido_productos_idx` (`idproducto_productos`),
  ADD KEY `fk_pedido_clientes_idx` (`idcliente_clientes`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `fk_productos_tproducto_idx` (`id_tipo_productos`);

--
-- Indices de la tabla `tipoproducto`
--
ALTER TABLE `tipoproducto`
  ADD PRIMARY KEY (`id_Tproducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `tipoproducto`
--
ALTER TABLE `tipoproducto`
  MODIFY `id_Tproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_pedido_clientes` FOREIGN KEY (`idcliente_clientes`) REFERENCES `clientes` (`id_cliente`),
  ADD CONSTRAINT `fk_pedido_productos` FOREIGN KEY (`idproducto_productos`) REFERENCES `productos` (`id_producto`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_productos_tproducto` FOREIGN KEY (`id_tipo_productos`) REFERENCES `tipoproducto` (`id_Tproducto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
