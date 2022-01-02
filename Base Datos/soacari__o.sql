-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-01-2022 a las 23:09:06
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `soacariño`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `COD_ART` int(11) NOT NULL,
  `NOM_ART` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `COL_ART` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `PES_ART` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `CAP_ART` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articuloplanta`
--

CREATE TABLE `articuloplanta` (
  `CANTIDAD` int(11) NOT NULL,
  `NIV_RIE` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `COD_ART_PER` int(11) NOT NULL,
  `COD_PLA_PER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cabezera`
--

CREATE TABLE `cabezera` (
  `COD_CAB` int(11) NOT NULL,
  `COD_SUC_PER` int(11) NOT NULL,
  `FEC_SUC` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `CED_CLI` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `NOM_CLI` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `APE_CLI` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `SAL_CLI` float NOT NULL,
  `LIM_CRE_CLI` float NOT NULL,
  `DES_CLI` float NOT NULL,
  `COD_SUC_PER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE `detalle` (
  `COD_CAB_PER` int(11) NOT NULL,
  `COD_ART_PER` int(11) NOT NULL,
  `CANTIDAD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planta`
--

CREATE TABLE `planta` (
  `COD_PLA` int(11) NOT NULL,
  `NOM_PLA` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `DIR_PLA` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TEL_PLA` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `planta`
--

INSERT INTO `planta` (`COD_PLA`, `NOM_PLA`, `DIR_PLA`, `TEL_PLA`) VALUES
(1, 'Latacunga', 'latap', '11111'),
(2, 'Ambato', 'ambatop', '222222');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `COD_SUC` int(11) NOT NULL,
  `NOM_SUC` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `DIR_SUC` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TEL_SUC` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `CIU_SUC` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`COD_SUC`, `NOM_SUC`, `DIR_SUC`, `TEL_SUC`, `CIU_SUC`) VALUES
(1, 'suclata', 'lata', '111', 'latap'),
(2, 'sucambato', 'amba', '222', 'ambap');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`COD_ART`);

--
-- Indices de la tabla `articuloplanta`
--
ALTER TABLE `articuloplanta`
  ADD KEY `COD_ART_PER` (`COD_ART_PER`),
  ADD KEY `COD_PLA_PER` (`COD_PLA_PER`);

--
-- Indices de la tabla `cabezera`
--
ALTER TABLE `cabezera`
  ADD PRIMARY KEY (`COD_CAB`),
  ADD KEY `COD_SUC_PER` (`COD_SUC_PER`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`CED_CLI`),
  ADD KEY `COD_SUC_PER` (`COD_SUC_PER`);

--
-- Indices de la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD KEY `COD_ART_PER` (`COD_ART_PER`),
  ADD KEY `COD_CAB_PER` (`COD_CAB_PER`);

--
-- Indices de la tabla `planta`
--
ALTER TABLE `planta`
  ADD PRIMARY KEY (`COD_PLA`),
  ADD UNIQUE KEY `NOM_PLA` (`NOM_PLA`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`COD_SUC`),
  ADD UNIQUE KEY `NOM_SUC` (`NOM_SUC`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `COD_ART` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cabezera`
--
ALTER TABLE `cabezera`
  MODIFY `COD_CAB` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `planta`
--
ALTER TABLE `planta`
  MODIFY `COD_PLA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `COD_SUC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articuloplanta`
--
ALTER TABLE `articuloplanta`
  ADD CONSTRAINT `ArticuloPlanta_ibfk_1` FOREIGN KEY (`COD_ART_PER`) REFERENCES `articulo` (`COD_ART`),
  ADD CONSTRAINT `ArticuloPlanta_ibfk_2` FOREIGN KEY (`COD_PLA_PER`) REFERENCES `planta` (`COD_PLA`);

--
-- Filtros para la tabla `cabezera`
--
ALTER TABLE `cabezera`
  ADD CONSTRAINT `Cabezera_ibfk_1` FOREIGN KEY (`COD_SUC_PER`) REFERENCES `sucursal` (`COD_SUC`);

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `Cliente_ibfk_1` FOREIGN KEY (`COD_SUC_PER`) REFERENCES `sucursal` (`COD_SUC`);

--
-- Filtros para la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD CONSTRAINT `Detalle_ibfk_1` FOREIGN KEY (`COD_ART_PER`) REFERENCES `articulo` (`COD_ART`),
  ADD CONSTRAINT `Detalle_ibfk_2` FOREIGN KEY (`COD_CAB_PER`) REFERENCES `cabezera` (`COD_CAB`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
