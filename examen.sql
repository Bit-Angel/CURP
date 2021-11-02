-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-11-2021 a las 04:16:41
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `Nombres` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `PrimerApellido` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `SegundoApellido` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Genero` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `DD` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `MM` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `AA` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Entidad` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Correo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `CURP` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`Nombres`, `PrimerApellido`, `SegundoApellido`, `Genero`, `DD`, `MM`, `AA`, `Entidad`, `Correo`, `CURP`) VALUES
('MARCELA YOS', 'RODRIGUEZ', 'HERNANDEZ', 'M', '06', '06', '2000', 'AS', 'mayorohe.0606@gmail.com', 'ROHM000606MASDRR06'),
('MARCELA YOS', 'RODRIGUEZ', 'HERNANDEZ', 'M', '06', '06', '2000', 'AS', 'mayorohe.0606@gmail.com', 'ROHM000606MASDRR09'),
('LUIS ANGEL', 'ROMO', 'PADILLA', 'H', '19', '07', '00', 'AS', 'luisangelromopadilla@gmail.com', 'ROPL000719HASMDS09'),
('LUIS ANGEL', 'ROMO', 'ROMO PADILL', 'H', '15', '02', '95', 'AS', 'luisangelromopadilla@gmail.com', 'RORL950215HASMMS03'),
('LUIS ANGEL', 'ROMO', 'ROMO PADILL', 'H', '15', '02', '95', 'MC', 'luisangelromopadilla@gmail.com', 'RORL950215HMCMMS03'),
('ARANZA', 'RUIZ', 'TORRES', 'M', '24', '08', '00', 'AS', 'luisangelromopadilla@gmail.com', 'RUTA000824MASZRR05');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`CURP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
