-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2017 a las 03:20:36
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formulario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `afiliado`
--

CREATE TABLE `afiliado` (
  `TipoDocumento` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `Documento` int(25) NOT NULL,
  `PrimerNombre` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `SegundoNombre` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PrimerApellido` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `SegundoApellido` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `DirResidencia` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Actualizar',
  `Municipio` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Actualizar',
  `Departamento` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Actualizar',
  `Barrio` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Actualizar',
  `Telefono` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Actualizar',
  `Celular` varchar(16) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Actualizar',
  `Correo` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Actualizar',
  `MunNacimiento` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Actualizar',
  `DepNacimiento` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Actualizar',
  `FechaN` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Actualizar',
  `Ocupacion` varchar(35) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Actualizar',
  `Riesgo` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Actualizar',
  `1Apellido` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Actualizar',
  `2Apellido` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Actualizar',
  `1Nombre` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Actualizar',
  `2Nombre` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Actualizar',
  `Sexo` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Actualizar',
  `Ndocumento` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Actualizar Anterior',
  `TipDocumento` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Actualizar Anterior',
  `FechaExpe` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Actualizar '
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `afiliado`
--

INSERT INTO `afiliado` (`TipoDocumento`, `Documento`, `PrimerNombre`, `SegundoNombre`, `PrimerApellido`, `SegundoApellido`, `DirResidencia`, `Municipio`, `Departamento`, `Barrio`, `Telefono`, `Celular`, `Correo`, `MunNacimiento`, `DepNacimiento`, `FechaN`, `Ocupacion`, `Riesgo`, `1Apellido`, `2Apellido`, `1Nombre`, `2Nombre`, `Sexo`, `Ndocumento`, `TipDocumento`, `FechaExpe`) VALUES
('yyyy', 112233, 'cali', 'colombia', 'valle', 'Osorio', 'cra 7Tbis#76-12', 'Cali', 'Valle', 'Alfonzo lopez', '3043459', '3147072792', 'jose.jdgo97@gmail.co', 'cali', 'Cauca', '1997-04-27', 'Estudiante', 'medio', 'Grijalba', 'Osorio', 'Jose', 'Daniel', 'Masculino', '9704270974', 'TI', '1999-03-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficiario`
--

CREATE TABLE `beneficiario` (
  `Documento` int(20) NOT NULL,
  `Tipodocumento` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `NDocumento` int(26) NOT NULL,
  `Sexo` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PrimerApellido` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `SegundoApellido` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PrimerNombre` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `SegundoNombre` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Parentesco` varchar(7) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Novedad` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Nacionalidad` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `DirResidencia` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Municipio` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Departamento` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `FechaN` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Telefono` varchar(17) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Celular` varchar(17) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Correo` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `beneficiario`
--

INSERT INTO `beneficiario` (`Documento`, `Tipodocumento`, `NDocumento`, `Sexo`, `PrimerApellido`, `SegundoApellido`, `PrimerNombre`, `SegundoNombre`, `Parentesco`, `Novedad`, `Nacionalidad`, `DirResidencia`, `Municipio`, `Departamento`, `FechaN`, `Telefono`, `Celular`, `Correo`) VALUES
(1107509521, 'TI', 987654, 'Masculino', 'Delgado', 'Olmedo', 'Patric', 'Martin', '3, ', 'Actualizacion', 'EEUU', 'calle 9 Oeste#D 50-04', 'cali', 'Valle', '1896-03-07', '5533441', '3118263651', 'juandavidgo1997@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `afiliado`
--
ALTER TABLE `afiliado`
  ADD PRIMARY KEY (`Documento`);

--
-- Indices de la tabla `beneficiario`
--
ALTER TABLE `beneficiario`
  ADD PRIMARY KEY (`NDocumento`),
  ADD KEY `INDEX` (`Documento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `afiliado`
--
ALTER TABLE `afiliado`
  MODIFY `Documento` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112234;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
