-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 07-02-2021 a las 21:42:25
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id16094454_ventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombreCategoria` varchar(150) DEFAULT NULL,
  `fechaCaptura` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `id_usuario`, `nombreCategoria`, `fechaCaptura`) VALUES
(11, 22, 'Poleras', '2021-01-22'),
(12, 22, 'Accesorios', '2021-01-23'),
(13, 22, 'Pantalones Jeans', '2021-02-06'),
(14, 22, 'Chaquetas', '2021-02-06'),
(15, 22, 'Mochilas', '2021-02-06'),
(16, 22, 'Correas', '2021-02-06'),
(17, 22, 'Gorros', '2021-02-06'),
(18, 22, 'Vestidos', '2021-02-06'),
(19, 22, 'Lentes', '2021-02-06'),
(20, 22, 'Joggers', '2021-02-06'),
(21, 22, 'Polos', '2021-02-06'),
(22, 22, 'Air-Pods', '2021-02-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `apellido` varchar(200) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `telefono` varchar(200) DEFAULT NULL,
  `ruc` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `id_usuario`, `nombre`, `apellido`, `direccion`, `email`, `telefono`, `ruc`) VALUES
(1, 22, 'Bres', 'Landon', 'Jr. Las Ramas 502', 'piro1@gmail.com', '955630149', '1798285937001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id_imagen` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(500) DEFAULT NULL,
  `ruta` varchar(500) DEFAULT NULL,
  `fechaSubida` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id_imagen`, `id_categoria`, `nombre`, `ruta`, `fechaSubida`) VALUES
(9, 12, 'img2.jpg', '../../archivos/img2.jpg', '2021-01-24'),
(13, 19, 'lentes.jpg', '../../archivos/lentes.jpg', '2021-02-06'),
(15, 21, 'polo.jpg', '../../archivos/polo.jpg', '2021-02-06'),
(16, 17, 'gorro.jpg', '../../archivos/gorro.jpg', '2021-02-06'),
(17, 15, 'mochila.webp', '../../archivos/mochila.webp', '2021-02-06'),
(18, 20, 'joojgers.webp', '../../archivos/joojgers.webp', '2021-02-06'),
(19, 11, 'polera.jpg', '../../archivos/polera.jpg', '2021-02-06'),
(20, 18, 'vestido.jpg', '../../archivos/vestido.jpg', '2021-02-06'),
(21, 22, 'air p.jpg', '../../archivos/air p.jpg', '2021-02-06'),
(23, 14, 'chqueta.jpg', '../../archivos/chqueta.jpg', '2021-02-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_imagen` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `fechaCaptura` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `id_categoria`, `id_imagen`, `id_usuario`, `nombre`, `descripcion`, `cantidad`, `precio`, `fechaCaptura`) VALUES
(6, 12, 9, 22, 'Correas Gucci', 'Color negro', 9, 25, '2021-01-24'),
(10, 19, 13, 22, 'Lentes DOLCE', 'Gafas de sol', 20, 180, '2021-02-06'),
(12, 21, 15, 22, 'Polo Hombre', 'Color blanco', 20, 80, '2021-02-06'),
(13, 17, 16, 22, 'Gorro de lana BEANIE AC CUFF', 'Color negro', 14, 75, '2021-02-06'),
(14, 15, 17, 22, 'Mochila Nylon Mujer', 'Color negro', 15, 100, '2021-02-06'),
(15, 20, 18, 22, 'Joggers Mujer', 'Color plomo', 20, 110, '2021-02-06'),
(16, 11, 19, 22, 'Polera Cerrada hombre', 'Color plomo', 15, 150, '2021-02-06'),
(17, 18, 20, 22, 'Vestido Corto', 'Color Rojo', 15, 180, '2021-02-06'),
(18, 22, 21, 22, 'Air-Pod PRO', 'Color Negro', 20, 200, '2021-02-06'),
(20, 14, 23, 22, 'Chaqueta  Cuero Sintentico', 'Color Negro', 15, 250, '2021-02-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_user`
--

CREATE TABLE `tipo_user` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_clientes`
--

CREATE TABLE `users_clientes` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(130) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `last_session` datetime DEFAULT NULL,
  `activacion` int(11) NOT NULL DEFAULT 0,
  `token` varchar(40) NOT NULL,
  `token_password` varchar(100) DEFAULT NULL,
  `password_request` int(11) DEFAULT 0,
  `id_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users_clientes`
--

INSERT INTO `users_clientes` (`id`, `usuario`, `password`, `nombre`, `correo`, `last_session`, `activacion`, `token`, `token_password`, `password_request`, `id_tipo`) VALUES
(11, 'lupe', '$2y$10$d5BuPlnlsUIw60D4tB8wEu4coiDVcL5NAHYB7dFYZeLWyer6gRJdq', 'lu', 'lupeg2001@gmail.com', '2021-02-07 21:37:33', 1, '199d591a8ac172791310acf4f05ad3dc', '', 1, 2),
(13, 'lucas123', '$2y$10$YkSGpO85KaVE1IO21Q0MaOXULy0e/DT9AXEzkYPA2hOIhtS5pcXEy', 'Lucas', '1005220182@unajma.edu.pe', '2021-02-05 20:54:34', 1, 'a6bee3032ee0b997add51df5e6fcadcc', '', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` tinytext DEFAULT NULL,
  `fechaCaptura` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `email`, `password`, `fechaCaptura`) VALUES
(22, 'admin', 'admin', 'admin', '$2y$10$3FdkYT06JOOhPu01zdv16egV4VbqIl9QfGPFMJZVVf0MV2G3RImwa', '2021-01-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `fechaCompra` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_venta`, `id_cliente`, `id_producto`, `id_usuario`, `precio`, `fechaCompra`) VALUES
(1, 1, 6, 22, 25, '2021-01-24'),
(1, 1, 6, 22, 25, '2021-01-24'),
(2, 1, 6, 22, 25, '2021-01-24'),
(2, 1, 6, 22, 25, '2021-01-24'),
(3, 0, 6, 22, 25, '2021-01-25'),
(4, 0, 6, 22, 25, '2021-01-25'),
(5, 0, 6, 22, 25, '2021-01-26');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id_imagen`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `tipo_user`
--
ALTER TABLE `tipo_user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users_clientes`
--
ALTER TABLE `users_clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `tipo_user`
--
ALTER TABLE `tipo_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users_clientes`
--
ALTER TABLE `users_clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
