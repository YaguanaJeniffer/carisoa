-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 28-12-2021 a las 19:43:45
-- Versión del servidor: 10.5.12-MariaDB
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id18188624_carisoa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Articulo`
--

CREATE TABLE `Articulo` (
  `COD_ART` int(11) NOT NULL,
  `NOM_ART` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `COL_ART` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `PES_ART` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `CAP_ART` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ArticuloPlanta`
--

CREATE TABLE `ArticuloPlanta` (
  `CANTIDAD` int(11) NOT NULL,
  `NIV_RIE` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `COD_ART_PER` int(11) NOT NULL,
  `COD_PLA_PER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cabezera`
--

CREATE TABLE `Cabezera` (
  `COD_CAB` int(11) NOT NULL,
  `COD_SUC_PER` int(11) NOT NULL,
  `FEC_SUC` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cliente`
--

CREATE TABLE `Cliente` (
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
-- Estructura de tabla para la tabla `Detalle`
--

CREATE TABLE `Detalle` (
  `COD_CAB_PER` int(11) NOT NULL,
  `COD_ART_PER` int(11) NOT NULL,
  `CANTIDAD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Planta`
--

CREATE TABLE `Planta` (
  `COD_PLA` int(11) NOT NULL,
  `NOM_PLA` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `DIR_PLA` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TEL_PLA` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Sucursal`
--

CREATE TABLE `Sucursal` (
  `COD_SUC` int(11) NOT NULL,
  `NOM_SUC` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `DIR_SUC` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TEL_SUC` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `CIU_SUC` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Articulo`
--
ALTER TABLE `Articulo`
  ADD PRIMARY KEY (`COD_ART`);

--
-- Indices de la tabla `ArticuloPlanta`
--
ALTER TABLE `ArticuloPlanta`
  ADD KEY `COD_ART_PER` (`COD_ART_PER`),
  ADD KEY `COD_PLA_PER` (`COD_PLA_PER`);

--
-- Indices de la tabla `Cabezera`
--
ALTER TABLE `Cabezera`
  ADD PRIMARY KEY (`COD_CAB`),
  ADD KEY `COD_SUC_PER` (`COD_SUC_PER`);

--
-- Indices de la tabla `Cliente`
--
ALTER TABLE `Cliente`
  ADD PRIMARY KEY (`CED_CLI`),
  ADD KEY `COD_SUC_PER` (`COD_SUC_PER`);

--
-- Indices de la tabla `Detalle`
--
ALTER TABLE `Detalle`
  ADD KEY `COD_ART_PER` (`COD_ART_PER`),
  ADD KEY `COD_CAB_PER` (`COD_CAB_PER`);

--
-- Indices de la tabla `Planta`
--
ALTER TABLE `Planta`
  ADD PRIMARY KEY (`COD_PLA`),
  ADD UNIQUE KEY `NOM_PLA` (`NOM_PLA`);

--
-- Indices de la tabla `Sucursal`
--
ALTER TABLE `Sucursal`
  ADD PRIMARY KEY (`COD_SUC`),
  ADD UNIQUE KEY `NOM_SUC` (`NOM_SUC`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Articulo`
--
ALTER TABLE `Articulo`
  MODIFY `COD_ART` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Cabezera`
--
ALTER TABLE `Cabezera`
  MODIFY `COD_CAB` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Planta`
--
ALTER TABLE `Planta`
  MODIFY `COD_PLA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Sucursal`
--
ALTER TABLE `Sucursal`
  MODIFY `COD_SUC` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ArticuloPlanta`
--
ALTER TABLE `ArticuloPlanta`
  ADD CONSTRAINT `ArticuloPlanta_ibfk_1` FOREIGN KEY (`COD_ART_PER`) REFERENCES `Articulo` (`COD_ART`),
  ADD CONSTRAINT `ArticuloPlanta_ibfk_2` FOREIGN KEY (`COD_PLA_PER`) REFERENCES `Planta` (`COD_PLA`);

--
-- Filtros para la tabla `Cabezera`
--
ALTER TABLE `Cabezera`
  ADD CONSTRAINT `Cabezera_ibfk_1` FOREIGN KEY (`COD_SUC_PER`) REFERENCES `Sucursal` (`COD_SUC`);

--
-- Filtros para la tabla `Cliente`
--
ALTER TABLE `Cliente`
  ADD CONSTRAINT `Cliente_ibfk_1` FOREIGN KEY (`COD_SUC_PER`) REFERENCES `Sucursal` (`COD_SUC`);

--
-- Filtros para la tabla `Detalle`
--
ALTER TABLE `Detalle`
  ADD CONSTRAINT `Detalle_ibfk_1` FOREIGN KEY (`COD_ART_PER`) REFERENCES `Articulo` (`COD_ART`),
  ADD CONSTRAINT `Detalle_ibfk_2` FOREIGN KEY (`COD_CAB_PER`) REFERENCES `Cabezera` (`COD_CAB`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
