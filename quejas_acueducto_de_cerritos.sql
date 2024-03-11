-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-03-2024 a las 06:56:07
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `quejas_acueducto_de_cerritos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `id_ciudad` int(11) NOT NULL,
  `departamento_ciudad` varchar(50) NOT NULL,
  `nombre_ciudad` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`id_ciudad`, `departamento_ciudad`, `nombre_ciudad`) VALUES
(1, 'Amazonas', 'Leticia'),
(2, 'Antioquia', 'Medellín'),
(3, 'Arauca', 'Arauca'),
(4, 'Atlántico', 'Barranquilla'),
(5, 'Bogotá, D. C.', 'Bogotá'),
(6, 'Bolívar', 'Cartagena'),
(7, 'Boyacá', 'Tunja'),
(8, 'Caldas', 'Manizales'),
(9, 'Caquetá', 'Florencia'),
(10, 'Casanare', 'Yopal'),
(11, 'Cauca', 'Popayán'),
(12, 'Cesar', 'Valledupar'),
(13, 'Chocó', 'Quibdó'),
(14, 'Córdoba', 'Montería'),
(15, 'Cundinamarca', 'Soacha'),
(16, 'Guainía', 'Inírida'),
(17, 'Guaviare', 'San José del Guaviare'),
(18, 'Huila', 'Neiva'),
(19, 'La Guajira', 'Riohacha'),
(20, 'Magdalena', 'Santa Marta'),
(21, 'Meta', 'Villavicencio'),
(22, 'Nariño', 'Pasto'),
(23, 'Norte de Santander', 'Cúcuta'),
(24, 'Putumayo', 'Mocoa'),
(25, 'Quindío', 'Armenia'),
(26, 'Risaralda', 'Pereira'),
(27, 'San Andrés y Providencia', 'San Andrés'),
(28, 'Santander', 'Bucaramanga'),
(29, 'Sucre', 'Sincelejo'),
(30, 'Tolima', 'Ibagué'),
(31, 'Valle del Cauca', 'Cali'),
(32, 'Vaupés', 'Mitú'),
(33, 'Vichada', 'Puerto Carreño');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quejas`
--

CREATE TABLE `quejas` (
  `id_quejas` int(11) NOT NULL,
  `nombre_cliente` varchar(75) NOT NULL,
  `correo_cliente` varchar(75) NOT NULL,
  `id_ciudad` int(11) DEFAULT NULL,
  `texto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`id_ciudad`);

--
-- Indices de la tabla `quejas`
--
ALTER TABLE `quejas`
  ADD PRIMARY KEY (`id_quejas`),
  ADD KEY `id_ciudad` (`id_ciudad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `id_ciudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `quejas`
--
ALTER TABLE `quejas`
  MODIFY `id_quejas` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `quejas`
--
ALTER TABLE `quejas`
  ADD CONSTRAINT `quejas_ibfk_1` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudades` (`id_ciudad`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
