-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2022 a las 06:10:36
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_coppel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `empleados_id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `sexo` bit(1) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `fecha_de_nacimiento` date DEFAULT NULL,
  `Sucursal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`empleados_id`, `nombre`, `edad`, `sexo`, `direccion`, `fecha_de_nacimiento`, `Sucursal_id`) VALUES
(1, 'kevin Edel Castañeda Carrasco', 21, b'1', 'culiacansito', '2022-11-11', 2),
(2, 'Marlon Cristian Beltran Gomez', 34, b'1', 'Culiacan', '2022-09-09', 1),
(3, 'Morales Zayas Yael Magdiel', 81, b'1', 'Culiacan', '2022-08-15', 2),
(4, 'Aguirre Grijalva Eduardo Agustin', 52, b'1', 'Culiacan', '2022-10-06', 3),
(5, 'Sandoval Espinoza Armando', 25, b'1', 'Culiacansito', '2022-12-31', 4),
(6, 'Medinabeytia Barraza David Antonio', 34, b'1', 'Culiacan', '2022-08-11', 5),
(7, 'Santana Acosta Luis Fernando', 43, b'1', 'Culiacan', '2022-12-02', 6),
(8, 'Valdez de los Rios Jesus omar', 47, b'1', 'Culiacan', '2022-10-21', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas`
--

CREATE TABLE `ofertas` (
  `ofertas_id` int(11) NOT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ofertas`
--

INSERT INTO `ofertas` (`ofertas_id`, `descripcion`, `url`, `fecha`) VALUES
(1, '60% de descuento en aritculos de cosina', 'subida_imagenes/of_1.jpg', '2022-12-05'),
(2, '41% de descuento en lavadoras y refrigeradores', 'subida_imagenes/of_2.jpg', '2022-12-05'),
(3, '50% de descuento en celulares y electronica', 'subida_imagenes/of_3.jpg', '2022-12-05'),
(4, 'el buen fin llego a su fin, espera las ofertas en electrónica Buen Fin 2023 en Coppel', 'subida_imagenes/of_4.jpg', '2022-12-05'),
(5, 'Renueva tu closet y tu casa con los descuentos de Hot Sale 2022', 'subida_imagenes/of_5.jpg', '2022-12-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Productos_id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `ruta` varchar(45) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Productos_id`, `nombre`, `descripcion`, `precio`, `ruta`, `url`) VALUES
(1, 'Nintendo switch', 'Con tu consola Switch tendrás entretenimiento', 6400, 'mexico ', 'subida_imagenes/p1.jpg'),
(2, 'Iphone 11 64 GB', ' batería de larga duración y viene en seis co', 8200, 'mexico', 'subida_imagenes/p2.jpg'),
(3, 'Pasa el mouse sobre la imagen para hacer zoom', 'Tu descanso no debe ser a medias, relájate co', 5599, 'mexico', 'subida_imagenes/p3.jpg'),
(4, 'Botas Urbanas Harley Davidson de Piel para Mu', 'Este modelo está fabricado con piel de alta c', 2079, 'mexico', 'subida_imagenes/p4.jpg'),
(5, 'Maletero Aluminio Moto Kohl Cubierta Interior', 'Características:\r\nAluminio de 1.5 milímetros ', 5896, 'Características:\r\nAluminio de 1.5 milímetros ', 'subida_imagenes/dddd.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `Sucursal_id` int(11) NOT NULL,
  `nombre` varchar(500) DEFAULT NULL,
  `direccion` varchar(500) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`Sucursal_id`, `nombre`, `direccion`, `url`) VALUES
(1, 'Coppel Andrade', 'Avenida General Jesús G, Av Jesús Andrade 481, 80200 Culiacán, Sinaloa', 'subida_imagenes/copel_andrade.jpg'),
(2, 'Coppel las Torres', 'Tienda Coppel | Blvd. Las Torres #6666 Sur Col. Fracc. Terranova. Entre Paseo Quinta Del Rey Y Lote Baldio, Culiacán Rosales', 'subida_imagenes/suc_1.jpg'),
(3, 'Coppel Plaza Fiesta', 'De Los Insurgentes 970 Sur, Centro Sinaloa, Centro, 80000 Culiacán Rosales, Sin.', 'subida_imagenes/suc_2.jpg'),
(4, 'Coppel Obregon', ' Prol. Álvaro Obregón 728 Sur, Miguel Alemán, Jorge Almada, 80200 Culiacán Rosales, Sin.', 'subida_imagenes/suc_3.jpg'),
(5, 'Coppel Escobedo', 'Mariano Escobedo 190, Primer Cuadro, 80000 Culiacán Rosales, Sin.', 'subida_imagenes/suc_4.jpg'),
(6, 'Coppel Rubi', 'Av. Gral. Domingo Rubí Sur 126, Primer Cuadro, 80000 Culiacán Rosales, Sin.', 'subida_imagenes/suc_5.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`empleados_id`),
  ADD KEY `fk_empleados_Sucursal_idx` (`Sucursal_id`);

--
-- Indices de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD PRIMARY KEY (`ofertas_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Productos_id`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`Sucursal_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `empleados_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  MODIFY `ofertas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Productos_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `Sucursal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `fk_empleados_Sucursal` FOREIGN KEY (`Sucursal_id`) REFERENCES `sucursal` (`Sucursal_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
