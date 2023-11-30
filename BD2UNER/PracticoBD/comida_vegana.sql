-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2023 a las 18:42:57
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `comida_vegana`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `categoria` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `categoria`) VALUES
(13, 'Productos secos'),
(14, 'Productos refrigerados'),
(15, 'Productos congelados'),
(16, 'Productos sustentables');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id_marca` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_marca`, `nombre`) VALUES
(1, 'Alkimyk food'),
(2, 'Almadre'),
(3, 'Argenti'),
(4, 'Augusta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre_producto` varchar(100) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `precio_compra` float DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `id_marca` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre_producto`, `id_categoria`, `precio_compra`, `estado`, `id_marca`) VALUES
(1, 'Milanesas de soja - Simples', 15, 253, 'Activo', 1),
(2, 'Milanesas de soja - Sin Sal', 15, 253, 'Inactivo', 1),
(3, 'Veganitas de pollo vegetal', 15, 253, 'Activo', 1),
(4, 'Veganitas de pollo 1KG', 15, 253, 'Activo', 1),
(5, 'Thins masa madre - Sésamo y Sal marina', 13, 253, 'Inactivo', 2),
(6, 'Thins masa madre - Tomate y romero', 13, 253, 'Activo', 2),
(7, 'Thins masa madre - Integral', 13, 253, 'Activo', 2),
(8, 'Thins masa madre - Rawmesan y Remolacha', 13, 253, 'Inactivo', 2),
(9, 'Snacks masa madre - Rawmesan y Remolacha', 13, 253, 'Activo', 2),
(10, 'Snacks masa madre - Tomate y romero', 13, 253, 'Inactivo', 2),
(11, 'Snacks masa madre - Sésamo y sal marina', 13, 253, 'Activo', 2),
(12, 'Pita chips - Jalapeño', 13, 253, 'Activo', 2),
(13, 'Pita chips - Cebolla', 13, 253, 'Inactivo', 2),
(14, 'Pita chipa - Original', 13, 253, 'Activo', 2),
(15, 'Tapas para empanadas sin tacc 330gr.', 14, 253, 'Activo', 3),
(16, 'Tapas de tartas sin tacc 380gr.', 14, 253, 'Activo', 3),
(17, 'Tapas de tartas 380gr. Gastronómicas', 14, 253, 'Inactivo', 3),
(18, 'Tapas para empanadas rotiseras 460gr. Gastronómicas', 14, 253, 'Activo', 3),
(19, 'Queso untable cajú - Clásico 180gr.', 14, 253, 'Activo', 4),
(20, 'Queso untable cajú - Ciboulette 180gr.', 14, 253, 'Activo', 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
