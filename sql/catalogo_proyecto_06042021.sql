-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-04-2021 a las 16:42:45
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `catalogo_proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apertura_curso`
--

CREATE TABLE `apertura_curso` (
  `ID_Apertura` int(11) NOT NULL,
  `Nombre_Apertura` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fecha_Apertura` date DEFAULT NULL,
  `Cantidad_Horas` int(11) DEFAULT NULL,
  `Matriculados` int(11) NOT NULL DEFAULT 0,
  `id_curso` int(11) NOT NULL,
  `INSTP_Codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `apertura_curso`
--

INSERT INTO `apertura_curso` (`ID_Apertura`, `Nombre_Apertura`, `Fecha_Apertura`, `Cantidad_Horas`, `Matriculados`, `id_curso`, `INSTP_Codigo`) VALUES
(11, '', '2020-11-27', 11, 7, 20, 14),
(12, '', '2020-12-10', 11, 10, 20, 13),
(13, '', '2020-12-10', 2, 2, 19, 13),
(14, '', '2020-12-23', 10, 10, 19, 13),
(15, '', '2020-12-05', 2, 2, 20, 14),
(16, '', '2020-12-05', 16, 16, 19, 13),
(17, 'mierda', '2020-12-17', 5, 5, 19, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesoria`
--

CREATE TABLE `asesoria` (
  `id_asesoria` bigint(20) UNSIGNED NOT NULL,
  `ASESORIA_Nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ASESORIA_Descripcion` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `asesoria`
--

INSERT INTO `asesoria` (`id_asesoria`, `ASESORIA_Nombre`, `ASESORIA_Descripcion`, `created_at`, `updated_at`) VALUES
(3, 'Android  con Kotlin', '22', NULL, NULL),
(4, 'Android  con Kotlin', 'dsfdsf', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` int(11) NOT NULL,
  `nombre_contacto` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correo_contacto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celular_contacto` char(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SOLIP_Codigo` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `nombre_contacto`, `correo_contacto`, `celular_contacto`, `SOLIP_Codigo`, `created_at`, `updated_at`) VALUES
(1, 'Carlos Ramirez', 'carlos.ramirez@uni.pe', '99665523', 239, NULL, NULL),
(2, 'Alvaro Celis', 'alvaro.celis@uni.pe', '95863256', 240, NULL, NULL),
(3, 'Luz Peñafiel', NULL, '23234', 240, NULL, NULL),
(4, 'Luis', 'luis.casas@uni.pe', '78789798', 244, NULL, NULL),
(5, NULL, NULL, NULL, 245, NULL, NULL),
(6, NULL, NULL, NULL, 246, NULL, NULL),
(7, NULL, NULL, NULL, 247, NULL, NULL),
(8, NULL, NULL, NULL, 248, NULL, NULL),
(9, NULL, NULL, NULL, 249, NULL, NULL),
(10, NULL, NULL, NULL, 250, NULL, NULL),
(11, NULL, NULL, NULL, 251, NULL, NULL),
(12, NULL, NULL, NULL, 252, NULL, NULL),
(13, NULL, NULL, NULL, 253, NULL, NULL),
(14, NULL, NULL, NULL, 254, NULL, NULL),
(15, NULL, NULL, NULL, 255, NULL, NULL),
(16, 'javier ramirez salazar', 'javier@hotmail.com', '111111111', 256, NULL, NULL),
(17, 'gabriel angel gil fernandez', 'gabrielangelgf@hotmail.com', '943655009', 257, NULL, NULL),
(18, 'javier ramirez salazar', 'javier@hotmail.com', '943655009', 258, NULL, NULL),
(19, 'javier ramirez salazar', 'javier@hotmail.com', '943655009', 259, NULL, NULL),
(20, 'sdfgsdf', 'gabrielangelgf@hotmail.com', '943655009', 260, NULL, NULL),
(21, 'ddddddddd', 'dddd@asdf.asdfa', '564654', 261, NULL, NULL),
(22, 'carlos pantoja', 'carlospantoja@hotmail.com', '987654321', 262, NULL, NULL),
(23, 'ddddddddd', 'carlospantoja@hotmail.com', '564654', 263, NULL, NULL),
(24, 'ddddddddd', 'dddd@asdf.asdfa', '564654', 264, NULL, NULL),
(25, 'ddddddddd', 'dddd@asdf.asdfa', '564654', 265, NULL, NULL),
(26, 'ddddddddd', 'dddd@asdf.asdfa', '564654', 266, NULL, NULL),
(27, 'ddddddddd', 'dddd@asdf.asdfa', '564654', 267, NULL, NULL),
(28, 'ddddddddd', 'dddd@asdf.asdfa', '564654', 268, NULL, NULL),
(29, 'asdfa', 'aswsdf@sadfas.dfasdf', '534523452', 269, NULL, NULL),
(30, 'asdfa', 'aswsdf@sadfas.dfasdf', '345634563', 270, NULL, NULL),
(31, 'asdfa', 'aswsdf@sadfas.dfasdf', '745674567', 271, NULL, NULL),
(32, 'asdfa', 'aswsdf@sadfas.dfasdf', '456345634', 272, NULL, NULL),
(33, 'asdfa', 'aswsdf@sadfas.dfasdf', '456345634', 273, NULL, NULL),
(34, 'asdfa', 'aswsdf@sadfas.dfasdf', '546745674', 274, NULL, NULL),
(35, 'asdfa', 'aswsdf@sadfas.dfasdf', '567856785', 275, NULL, NULL),
(36, 'asdfa', 'aswsdf@sadfas.dfasdf', '456345634', 276, NULL, NULL),
(37, 'asdfa', 'aswsdf@sadfas.dfasdf', '757867867', 277, NULL, NULL),
(38, 'sadfasdfasdfasdf', 'asd@asdf.asdf', '897987987', 278, NULL, NULL),
(39, 'sadfasdfasdfasdf', 'asd@asdf.asdf', '547546745', 279, NULL, NULL),
(40, 'fgsdfgsdfg', 'sdfg@asfd.asdfasf', '435234562', 280, NULL, NULL),
(41, 'sdasdsadas', 'spotify.rmeiggss@gmail.com', '920182715', 281, NULL, NULL),
(42, 'sdsad', 'spotify.rmeiggss@gmail.com', '920182715', 282, NULL, NULL),
(43, NULL, NULL, NULL, 283, NULL, NULL),
(44, NULL, NULL, NULL, 284, NULL, NULL),
(45, 'dasdasdas', 'spotify.rmeiggss@gmail.com', '920182715', 285, NULL, NULL),
(46, NULL, NULL, NULL, 286, NULL, NULL),
(47, NULL, NULL, NULL, 287, NULL, NULL),
(48, NULL, NULL, NULL, 288, NULL, NULL),
(49, NULL, NULL, NULL, 289, NULL, NULL),
(50, NULL, NULL, NULL, 290, NULL, NULL),
(51, NULL, NULL, NULL, 291, NULL, NULL),
(52, NULL, NULL, NULL, 292, NULL, NULL),
(53, NULL, NULL, NULL, 293, NULL, NULL),
(54, NULL, NULL, NULL, 294, NULL, NULL),
(55, NULL, NULL, NULL, 295, NULL, NULL),
(56, 'dasdasdas', 'edward.figueroa@uni.pe', '920182715', 296, NULL, NULL),
(57, 'Roberto Carlos', 'rmeiggs.s@gmail.com', '920182715', 297, NULL, NULL),
(58, 'dasindasndas', 'edward.figueroa@uni.pe', '920182715', 298, NULL, NULL),
(59, 'roberto', 'rmeiggs.s@gmail.com', '920182715', 299, NULL, NULL),
(60, 'sdasdsadas', 'spotify.rmeiggss@gmail.com', '920182715', 300, NULL, NULL),
(61, 'sdsadas', 'edward.figueroa@uni.pe', '920182715', 301, NULL, NULL),
(62, 'roberto', 'edward.figueroa@uni.pe', '920182715', 302, NULL, NULL),
(63, 'Edward', 'edward.figueroa@uni.pe', '920182715', 303, NULL, NULL),
(64, 'Gabriel', 'gabriel1234@gmail.com', '951445411', 304, NULL, NULL),
(65, 'dasindasndas', 'jaredn2021@gmail.com', '951445411', 305, NULL, NULL),
(66, 'roberto', 'jaredn2021@gmail.com', '920182715', 306, NULL, NULL),
(67, 'roberto', 'spotify.rmeiggss@gmail.com', '920182715', 307, NULL, NULL),
(68, 'gfsdgf', 'jaredn2021@gmail.com', '920182715', 308, NULL, NULL),
(69, 'dasindasndas', 'jaredn2021@gmail.com', '920182715', 309, NULL, NULL),
(70, 'roberto', 'edward.figueroa@uni.pe', '920182715', 310, NULL, NULL),
(71, 'sdasdsadas', 'edward.figueroa@uni.pe', '951445411', 311, NULL, NULL),
(72, 'dasdasdas', 'rmeiggs.s@gmail.com', '920182715', 312, NULL, NULL),
(73, 'roberto', 'jaredn2021@gmail.com', '920182715', 313, NULL, NULL),
(74, 'dasindasndas', 'spotify.rmeiggss@gmail.com', '951445411', 314, NULL, NULL),
(75, 'dasdasdas', 'edward.figueroa@uni.pe', '920182715', 315, NULL, NULL),
(76, 'dasindasndas', 'jaredn2021@gmail.com', '920182715', 316, NULL, NULL),
(77, 'sdasdsadas', 'jaredn2021@gmail.com', '920182715', 317, NULL, NULL),
(78, 'sdasdsadas', 'jaredn2021@gmail.com', '920182715', 318, NULL, NULL),
(79, 'dasdasdas', 'rmeiggs.s@gmail.com', '920182715', 319, NULL, NULL),
(80, 'dasdasdas', 'jaredn2021@gmail.com', '920182715', 320, NULL, NULL),
(81, 'roberto', 'spotify.rmeiggss@gmail.com', '920182715', 321, NULL, NULL),
(82, 'Wilmer Figueroa', 'rmeiggs.s@gmail.com', '920183716', 329, NULL, NULL),
(83, 'Juan Perez', 'juan@hotmail.com', '941151515', 334, NULL, NULL),
(84, 'Jose', 'jose@gmail.com', '92018371', 334, NULL, NULL),
(85, 'dasindasndas', 'rmeiggs.s@gmail.com', '920182715', 335, NULL, NULL),
(86, 'dsadasdsa', 'rmeiggs.s@gmail.com', '920182715', 336, NULL, NULL),
(87, 'eqwewq', 'jaredn2021@gmail.com', '920182715', 337, NULL, NULL),
(88, 'roberto', 'edward.figueroa@uni.pe', '920182715', 338, NULL, NULL),
(89, 'Nuevo solicitante', 'elsolicitante@prueba.com', '925132112', 339, NULL, NULL),
(90, 'Otro solicitante prueba', 'otrosolicitabte@prueba.co', '515115177', 339, NULL, NULL),
(91, 'Roberto', 'rmeiggs.s@gmail.com', '920183716', 340, NULL, NULL),
(92, 'Edward', 'edward@gmail.com', '105115612', 341, NULL, NULL),
(93, 'Edward 2', 'edward.figueroa@uni.pe', '920182715', 342, NULL, NULL),
(94, 'Edward Figueroa', 'edward.figueroa@uni.pe', '921114451', 343, NULL, NULL),
(95, 'Marck Llerena', 'marck@uni.pe', '511884894', 343, NULL, NULL),
(96, 'Martin Trujillo', 'martin@uni.pe', '544512122', 343, NULL, NULL),
(97, 'dsa', 'dsadas@gmail.com', '814515111', 344, NULL, NULL),
(98, 'das', 'aaaaaa@gmail.com', '920182715', 345, NULL, NULL),
(99, 'dasdas', 'edward.figueroa@uni.pe', '951445411', 346, NULL, NULL),
(100, 'dasindasndas', 'rmeiggs.s@gmail.com', '920182715', 347, NULL, NULL),
(101, 'dasindasndas', 'spotify.rmeiggss@gmail.com', '920182715', 348, NULL, NULL),
(102, 'roberto', 'spotify.rmeiggss@gmail.com', '920182715', 349, NULL, NULL),
(103, 'roberto', 'rmeiggs.s@gmail.com', '920182715', 350, NULL, NULL),
(104, 'roberto', 'spotify.rmeiggss@gmail.com', '920182715', 351, NULL, NULL),
(105, 'Prueba ensayo', 'prueba@ensayo.com', '845151151', 352, NULL, NULL),
(106, 'dasindasndas', 'jared2020__@hotmail.com', '920182715', 353, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion`
--

CREATE TABLE `cotizacion` (
  `COTIP_Codigo` int(11) NOT NULL,
  `TIPOCOP_Codigo` int(11) DEFAULT NULL,
  `id_contacto` int(11) DEFAULT NULL,
  `USUA_Codigo` bigint(20) UNSIGNED DEFAULT NULL,
  `COTIC_Numero` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `COTIC_Mensaje_Director` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `COTIC_Mensaje_Personal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `COTIC_SubTotal` decimal(7,2) DEFAULT NULL,
  `COTIC_Igv` decimal(7,2) DEFAULT NULL,
  `COTIC_Total` decimal(7,2) DEFAULT NULL,
  `COTIC_Fecha_Cotizacion` datetime DEFAULT NULL,
  `COTIC_Fecha_Atencion` datetime DEFAULT NULL,
  `COTIC_FechaModificacion` datetime DEFAULT NULL,
  `COTIC_FechaRegistro` timestamp NULL DEFAULT current_timestamp(),
  `COTIC_Correo1` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `COTIC_Correo2` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `COTIC_Correo3` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `COTIC_Correo4` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Archivo_de_Pago` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `COTIC_flag_pedido` tinyint(1) DEFAULT 0,
  `COTIC_dcto_porcentaje` decimal(7,2) DEFAULT 0.00,
  `COTIC_dcto_importe` decimal(7,2) DEFAULT 0.00,
  `COTIC_dcto_subtotal` decimal(7,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cotizacion`
--

INSERT INTO `cotizacion` (`COTIP_Codigo`, `TIPOCOP_Codigo`, `id_contacto`, `USUA_Codigo`, `COTIC_Numero`, `COTIC_Mensaje_Director`, `COTIC_Mensaje_Personal`, `COTIC_SubTotal`, `COTIC_Igv`, `COTIC_Total`, `COTIC_Fecha_Cotizacion`, `COTIC_Fecha_Atencion`, `COTIC_FechaModificacion`, `COTIC_FechaRegistro`, `COTIC_Correo1`, `COTIC_Correo2`, `COTIC_Correo3`, `COTIC_Correo4`, `Archivo_de_Pago`, `COTIC_flag_pedido`, `COTIC_dcto_porcentaje`, `COTIC_dcto_importe`, `COTIC_dcto_subtotal`) VALUES
(329, 1, 95, 7, NULL, NULL, NULL, '1800.00', '162.00', '1062.00', '2021-04-06 00:00:00', NULL, '2021-04-06 09:36:17', '2021-04-06 14:32:33', 'jaredn2021@gmail.com', '', '', '', NULL, 1, '50.00', '900.00', '900.00'),
(330, 1, 94, 7, NULL, NULL, NULL, '2400.00', '280.80', '1840.80', '2021-04-06 00:00:00', NULL, NULL, '2021-04-06 14:38:13', '', '', '', '', NULL, 0, '35.00', '840.00', '1560.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion_capacitacion`
--

CREATE TABLE `cotizacion_capacitacion` (
  `COCAP_Codigo` int(11) NOT NULL,
  `COTIP_Codigo` int(11) NOT NULL DEFAULT 0,
  `id_curso` int(11) DEFAULT NULL,
  `COCAC_Detalle_Curso_Cotizar` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `COCAC_Horario_Tentativo_Curso` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `COCAC_Lugar_Capacitacion` int(11) DEFAULT NULL,
  `COCAC_Cantidad` int(11) DEFAULT NULL,
  `COCAC_Costo_Curso_Original` decimal(7,2) DEFAULT NULL,
  `COCAC_SubTotal` decimal(7,2) DEFAULT NULL,
  `COCAC_Descuento_Porcentaje` int(11) DEFAULT NULL,
  `COCAC_Descuento_Moneda_Real` decimal(7,2) DEFAULT NULL,
  `COCAC_SubTotal_Descontado` decimal(7,2) DEFAULT NULL,
  `COCAC_FechaRegistro` timestamp NOT NULL DEFAULT current_timestamp(),
  `COCAC_FechaModificacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion_detalle`
--

CREATE TABLE `cotizacion_detalle` (
  `CODEP_Codigo` int(11) NOT NULL,
  `COTIP_Codigo` int(11) NOT NULL DEFAULT 0,
  `CODEC_Nombre_Equipo` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CODEC_Descripcion_Equipo` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CODEC_Fabricante_Equipo` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CODEC_Descripcion_Ficha_Tecnica_Equipo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CODEC_Url_Ficha_Tecnica_Equipo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CODEC_Archivo_Descripcion_Equipo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CODEC_FlagEstado` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CODEC_Costo` decimal(7,2) DEFAULT NULL,
  `CODEC_Cantidad` int(11) DEFAULT NULL,
  `CODEC_SubTotal` decimal(7,2) DEFAULT NULL,
  `CODEC_FechaRegistro` timestamp NOT NULL DEFAULT current_timestamp(),
  `CODEC_FechaModificacion` datetime DEFAULT NULL,
  `CODEC_dcto_porcentaje` decimal(7,2) DEFAULT 0.00,
  `CODEC_dcto_importe` decimal(7,2) DEFAULT 0.00,
  `CODEC_dcto_subtotal` decimal(7,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cotizacion_detalle`
--

INSERT INTO `cotizacion_detalle` (`CODEP_Codigo`, `COTIP_Codigo`, `CODEC_Nombre_Equipo`, `CODEC_Descripcion_Equipo`, `CODEC_Fabricante_Equipo`, `CODEC_Descripcion_Ficha_Tecnica_Equipo`, `CODEC_Url_Ficha_Tecnica_Equipo`, `CODEC_Archivo_Descripcion_Equipo`, `CODEC_FlagEstado`, `CODEC_Costo`, `CODEC_Cantidad`, `CODEC_SubTotal`, `CODEC_FechaRegistro`, `CODEC_FechaModificacion`, `CODEC_dcto_porcentaje`, `CODEC_dcto_importe`, `CODEC_dcto_subtotal`) VALUES
(437, 329, 'fasd', 'fasd', 'dsad', 'sadas', 'dasd', 'null', NULL, '50.00', 12, '600.00', '2021-04-06 14:36:18', NULL, '0.00', '0.00', '600.00'),
(438, 329, 'aaasd', 'sadasdsa', 'dsadsa', 'gdfsg', 'fdgfsgfd', 'null', NULL, '15.00', 80, '1200.00', '2021-04-06 14:36:18', NULL, '0.00', '0.00', '1200.00'),
(439, 330, 'fesfsdf', 'dsfds', 'fsdfds', 'fgsdfg', 'fdsgsfd', NULL, NULL, '30.00', 80, '2400.00', '2021-04-06 14:38:13', NULL, '0.00', '0.00', '2400.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `id_curso` int(11) NOT NULL,
  `CURSOC_Nombre` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CURSOC_Descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CURSOC_Costo` decimal(7,2) DEFAULT 0.00,
  `CURSOC_FlagEstado` char(1) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id_curso`, `CURSOC_Nombre`, `CURSOC_Descripcion`, `CURSOC_Costo`, `CURSOC_FlagEstado`, `created_at`) VALUES
(0, 'Curso personalizado', 'Curso personalizado', '0.00', '1', NULL),
(19, 'Alta tensión', 'curso de alta tension', '10.00', '1', NULL),
(20, 'Sistemas de potencia', 'curso de sistemas de potencia', '11.00', '1', NULL),
(21, 'Máster en API RESTful con PHP 7+', 'Crea full rest Api con php', '12.00', '1', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_instructor`
--

CREATE TABLE `curso_instructor` (
  `id_curso_instructor` int(11) NOT NULL,
  `INSTP_Codigo` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `curso_instructor`
--

INSERT INTO `curso_instructor` (`id_curso_instructor`, `INSTP_Codigo`, `id_curso`, `created_at`) VALUES
(48, 15, 21, '2020-11-06 20:28:52'),
(49, 14, 19, '2020-11-06 21:25:01'),
(50, 14, 20, '2020-11-06 23:31:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descuentos`
--

CREATE TABLE `descuentos` (
  `id_descuento` bigint(20) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `cantidad_min` int(11) NOT NULL DEFAULT 0,
  `cantidad_max` int(11) NOT NULL DEFAULT 0,
  `descuento` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `descuentos`
--

INSERT INTO `descuentos` (`id_descuento`, `id_curso`, `cantidad_min`, `cantidad_max`, `descuento`, `created_at`, `updated_at`) VALUES
(3, 19, 21, 30, 6, NULL, NULL),
(4, 19, 31, 40, 8, NULL, NULL),
(5, 19, 41, 50, 10, NULL, NULL),
(6, 20, 21, 30, 6, NULL, NULL),
(7, 20, 31, 40, 9, NULL, NULL),
(8, 20, 41, 50, 11, NULL, NULL),
(9, 21, 21, 30, 7, NULL, NULL),
(10, 21, 31, 40, 10, NULL, NULL),
(11, 21, 41, 50, 12, NULL, NULL),
(13, 21, 1, 100, 15, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `form_asesoria`
--

CREATE TABLE `form_asesoria` (
  `ID_Form_Asesoria` int(11) NOT NULL,
  `Nombre_Empresa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nombre_Contacto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Correo_Electronico_Contacto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Celular_Contacto` char(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Descripcion_Asesoria` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fecha_Registro` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_asesoria` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `form_servicio_academico`
--

CREATE TABLE `form_servicio_academico` (
  `ID_Solic_Servicio_Academico` int(11) NOT NULL,
  `Universidad_Procedencia` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nombre_Contacto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email_Contacto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Celular_Contacto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Descripcion_Servicio_Academico` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Fecha_Registro` timestamp NULL DEFAULT NULL,
  `id_servicio_acad` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario_apertura_curso`
--

CREATE TABLE `horario_apertura_curso` (
  `ID_Horario_apertura_curso` int(11) NOT NULL,
  `Dia_Dictado` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Hora_Inicio` time DEFAULT NULL,
  `Hora_Fin` time DEFAULT NULL,
  `ID_Apertura` int(11) DEFAULT NULL,
  `id_curso` int(11) DEFAULT NULL,
  `INSTP_Codigo` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `horario_apertura_curso`
--

INSERT INTO `horario_apertura_curso` (`ID_Horario_apertura_curso`, `Dia_Dictado`, `Hora_Inicio`, `Hora_Fin`, `ID_Apertura`, `id_curso`, `INSTP_Codigo`, `created_at`) VALUES
(6, 'Lunes', '23:51:00', '23:51:00', 11, 20, 14, NULL),
(8, 'Lunes', '21:36:00', '23:36:00', 14, 19, 13, NULL),
(11, 'Lunes', '20:08:00', '23:08:00', 17, 19, 13, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario_instructor`
--

CREATE TABLE `horario_instructor` (
  `id_horario_instructor` bigint(20) NOT NULL,
  `Dia_Posible` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hora_inicial` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hora_final` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_inicial` date DEFAULT NULL,
  `fecha_final` date DEFAULT NULL,
  `INSTP_Codigo` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `horario_instructor`
--

INSERT INTO `horario_instructor` (`id_horario_instructor`, `Dia_Posible`, `hora_inicial`, `hora_final`, `fecha_inicial`, `fecha_final`, `INSTP_Codigo`, `created_at`, `updated_at`) VALUES
(3, 'Lunes', '21:19', '23:19', '2020-11-12', '2020-11-05', 13, NULL, NULL),
(4, 'Lunes', '00:26', '01:26', '2020-11-12', '2020-11-15', 13, NULL, NULL),
(5, 'Martes', '00:29', '10:34', '2020-11-15', '2020-11-08', 14, NULL, NULL),
(8, 'Lunes', '22:52', '00:54', '2020-11-04', '2020-11-06', 14, NULL, NULL),
(9, 'Martes', '00:54', '00:55', '2020-11-04', '2020-11-06', 14, NULL, NULL),
(10, 'Miercoles', '23:54', '22:53', '2020-11-04', '2020-11-06', 14, NULL, NULL),
(11, 'Jueves', '03:58', '03:52', '2020-11-04', '2020-11-06', 14, NULL, NULL),
(12, 'Viernes', '02:57', '03:58', '2020-11-04', '2020-11-06', 14, NULL, NULL),
(13, 'Sabado', '01:56', '02:57', '2020-11-04', '2020-11-06', 14, NULL, NULL),
(14, 'Domingo', '01:57', '02:57', '2020-11-04', '2020-11-06', 14, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructor`
--

CREATE TABLE `instructor` (
  `INSTP_Codigo` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celular` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `INSTC_FlagEstado` char(1) CHARACTER SET latin1 NOT NULL DEFAULT '1',
  `INSTC_FechaModificacion` datetime DEFAULT NULL,
  `INSTC_FechaRegistro` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `instructor`
--

INSERT INTO `instructor` (`INSTP_Codigo`, `nombre`, `celular`, `email`, `INSTC_FlagEstado`, `INSTC_FechaModificacion`, `INSTC_FechaRegistro`, `created_at`, `updated_at`) VALUES
(13, 'Sandoval', '454566', 'sandoval.peru@uni.pe', '1', NULL, '2020-09-15 04:52:04', NULL, NULL),
(14, 'VIctor Robles', '234234', 'martin_trujillo1105@hotmail.com', '1', NULL, '2020-09-15 05:30:12', NULL, NULL),
(15, 'Fazt', '9665566998', 'pepoyo@gmail.com', '1', NULL, '2020-11-06 18:15:41', NULL, NULL),
(16, 'Jose Montalvan', '920183716', 'rmeiggs.s@gmail.com', '1', NULL, '2021-02-14 00:14:57', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `MENU_Codigo` int(11) NOT NULL,
  `MENU_Codigo_Padre` int(11) NOT NULL DEFAULT 0,
  `MENU_Descripcion` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MENU_Url` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MENU_Orden` int(11) NOT NULL DEFAULT 1,
  `MENU_FechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `MENU_FechaModificacion` datetime DEFAULT NULL,
  `MENU_FlagEstado` char(1) COLLATE utf8mb4_unicode_ci DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE `permiso` (
  `PERM_Codigo` int(11) NOT NULL,
  `ROL_Codigo` int(11) NOT NULL,
  `MENU_Codigo` int(11) NOT NULL,
  `COMPP_Codigo` int(11) NOT NULL,
  `PERM_FlagEstado` char(1) COLLATE utf8mb4_unicode_ci DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba_equipo`
--

CREATE TABLE `prueba_equipo` (
  `id_prueba_a_realizar` int(11) NOT NULL,
  `CODEP_Codigo` int(11) DEFAULT NULL,
  `Descripcion_Prueba` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Norma_Asoc_Prueba` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Descripcion_Norma` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Arch_Norma_Tecnica` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Costo` decimal(7,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `prueba_equipo`
--

INSERT INTO `prueba_equipo` (`id_prueba_a_realizar`, `CODEP_Codigo`, `Descripcion_Prueba`, `Norma_Asoc_Prueba`, `Descripcion_Norma`, `Arch_Norma_Tecnica`, `Costo`, `created_at`, `updated_at`) VALUES
(6, 437, 'fadsfds', 'fsdfsd', 'fsdafsda', NULL, '50.00', NULL, NULL),
(7, 438, 'asdsa', 'dsadsa', 'dsadsa', NULL, '15.00', NULL, NULL),
(8, 439, 'gsdfgfdsg', 'fdsgdfgd', 'sdafdsf', NULL, '30.00', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `ROL_Codigo` int(11) NOT NULL,
  `ROL_Descripcion` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ROL_FechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ROL_FechaModificacion` datetime DEFAULT NULL,
  `ROL_FlagEstado` char(1) COLLATE utf8mb4_unicode_ci DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`ROL_Codigo`, `ROL_Descripcion`, `ROL_FechaRegistro`, `ROL_FechaModificacion`, `ROL_FlagEstado`) VALUES
(1, 'Administrador', '2020-06-24 04:27:22', NULL, '1'),
(2, 'Cotizador', '2020-07-10 02:17:29', NULL, '1'),
(3, 'Asistente', '2020-06-24 04:27:22', NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio_academico`
--

CREATE TABLE `servicio_academico` (
  `id_servicio_acad` int(11) NOT NULL,
  `SERVICIOAC_Nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SERVICIOAC_Descripcion` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SERVICIOAC_Costo` decimal(10,0) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitante`
--

CREATE TABLE `solicitante` (
  `SOLIP_Codigo` int(11) NOT NULL,
  `TIPSOLIP_Codigo` int(11) DEFAULT NULL,
  `UBIGP_Codigo` char(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SOLIC_Nombre` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SOLIC_Ruc` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SOLIC_Direccion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SOLIC_Telefono` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SOLIC_Email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SOLIC_FlagEstado` char(1) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `SOLIC_FechaModificacion` datetime DEFAULT NULL,
  `SOLIC_FechaRegistro` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `solicitante`
--

INSERT INTO `solicitante` (`SOLIP_Codigo`, `TIPSOLIP_Codigo`, `UBIGP_Codigo`, `SOLIC_Nombre`, `SOLIC_Ruc`, `SOLIC_Direccion`, `SOLIC_Telefono`, `SOLIC_Email`, `SOLIC_FlagEstado`, `SOLIC_FechaModificacion`, `SOLIC_FechaRegistro`, `created_at`, `updated_at`) VALUES
(239, 2, '010104', 'INDUSTRIAS FERV S.A.C.', '20170652976', 'AV. LOS ALAMOS MZA. F LOTE. 12 LOT. SEMI RUSTICA CHILLON  - LIMA - PUENTE PIEDRA', '+51957595320', 'carlos2@uni.pe', NULL, NULL, '2020-09-15 03:24:54', NULL, NULL),
(240, 2, '010104', 'ABB', '10400918185', 'ewwe', '+51957595320', 'carlos.perez@uni.pe', NULL, NULL, '2020-09-15 03:35:44', NULL, NULL),
(241, 2, '010104', 'LOS ANDES SERVICIOS CORPORATIVOS SAC', '20424295036', 'ewwe', '+51957595320', 'carlos.perez@uni.pe', NULL, NULL, '2020-09-15 19:49:09', NULL, NULL),
(243, 2, '010104', 'PROMELSA S.A.', '12312312312', 'ertert', '23423', 'info@promelsa.com.pe', NULL, NULL, '2020-09-15 21:36:26', NULL, NULL),
(244, 2, NULL, 'Cementos Lima', '1040091587458888888', 'Surco', '234234234', 'cementos.lima@gmail.com', '1', NULL, '2020-11-12 02:33:06', NULL, NULL),
(245, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2020-12-15 05:33:27', NULL, NULL),
(246, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2020-12-15 05:35:38', NULL, NULL),
(247, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2020-12-15 17:57:45', NULL, NULL),
(248, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2020-12-15 19:38:35', NULL, NULL),
(249, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2020-12-15 21:40:49', NULL, NULL),
(250, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2020-12-16 06:01:24', NULL, NULL),
(251, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2020-12-16 06:08:58', NULL, NULL),
(252, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2020-12-16 15:21:41', NULL, NULL),
(253, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2020-12-16 15:31:00', NULL, NULL),
(254, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2020-12-16 15:40:17', NULL, NULL),
(255, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2020-12-16 16:06:10', NULL, NULL),
(256, 2, '060602', 'jyc', '11111111111', 'casa de javier', '2222222222222222', 'javier@jyc.com', '1', NULL, '2020-12-16 17:20:48', NULL, NULL),
(257, 2, '140101', 'inforgabe', '10447270591', 'direccion de inforgabe', '123456789', 'admin@inforgabe.com', '1', NULL, '2020-12-16 17:26:12', NULL, NULL),
(258, 2, '150514', 'dssdgfgsd', '34523452345', 'sdfgsdfgsd', '2222222222222222', 'javier@jyc.com', '1', NULL, '2020-12-16 17:49:48', NULL, NULL),
(259, 1, '150515', 'robertssss', '11111111111', 'direccion de inforgabe', '22222222222', 'javier@jyc.com', '1', NULL, '2020-12-16 17:50:17', NULL, NULL),
(260, 2, '131103', 'inforgabe', '11111111111', 'sdgsdfgsdgf', '2222222222222222', 'javier@jyc.com', '1', NULL, '2020-12-17 04:04:25', NULL, NULL),
(261, 1, '040102', 'aaaaaaa', '11111111111', 'aaaaaaa', '111111111111111111111111', 'aaa@aaa.aaa', '1', NULL, '2020-12-22 03:26:56', NULL, NULL),
(262, 2, '150105', 'platanitos', '00000000000', 'direccion de platanitos', '999999999', 'platanitos@hotmail.com', '1', NULL, '2020-12-22 03:36:42', NULL, NULL),
(263, 2, '060607', 'aaaaaaa', '11111111111', 'aaaaaaa', '111111111111111111111111', 'aaa@aaa.aaa', '1', NULL, '2020-12-22 03:51:34', NULL, NULL),
(264, 1, '070104', 'aaaaaaa', '11111111111', 'aaaaaaa', '111111111111111111111111', 'aaa@aaa.aaa', '1', NULL, '2020-12-22 03:57:05', NULL, NULL),
(265, 1, '040304', 'aaaaaaa', '11111111111', 'aaaaaaaaaaa', '111111111111111111111111', 'aaa@aaa.aaa', '1', NULL, '2020-12-22 04:32:42', NULL, NULL),
(266, 2, '150806', 'aaaaaaa', '00000000000', 'aaaaaaaaaaa', '111111111111111111111111', 'aaa@aaa.aaa', '1', NULL, '2020-12-22 06:21:47', NULL, NULL),
(267, 2, '150512', 'aaaaaaa', '11111111111', 'aaaaaaa', '1111111111', 'aaa@aaa.aaa', '1', NULL, '2020-12-22 06:26:13', NULL, NULL),
(268, 2, '020202', 'aaaaaaa', '11111111111', 'aaaaaaaaaaa', '111111111111111111111111', 'aaa@aaa.aaa', '1', NULL, '2020-12-22 06:28:25', NULL, NULL),
(269, 2, '010202', 'sdsdf', '34634563456', '5fdgdfghdfgh', '34523542345', 'wsdf@sadfas.dfasdf', '1', NULL, '2020-12-26 16:15:16', NULL, NULL),
(270, 2, '120503', 'sdsdf', '34634563456', '5fdgdfghdfgh', '34523542345', 'wsdf@sadfas.dfasdf', '3', NULL, '2020-12-26 17:59:57', NULL, NULL),
(271, 1, '060605', 'sdsdf', '56745674567', '5fdgdfghdfgh', '34523542345', 'wsdf@sadfas.dfasdf', '3', NULL, '2020-12-26 18:02:18', NULL, NULL),
(272, 1, '060701', 'sdsdf', '56345634563', '5fdgdfghdfgh', '34523542345', 'wsdf@sadfas.dfasdf', '3', NULL, '2020-12-26 18:04:58', NULL, NULL),
(273, 1, '060701', 'sdsdf', '56345634563', '5fdgdfghdfgh', '34523542345', 'wsdf@sadfas.dfasdf', '3', NULL, '2020-12-26 18:05:26', NULL, NULL),
(274, 2, '140204', 'sdsdf', '34634563456', '5fdgdfghdfgh', '34523542345', 'wsdf@sadfas.dfasdf', '3', NULL, '2020-12-26 18:08:38', NULL, NULL),
(275, 1, '160303', 'sdsdf', '34634563456', '5fdgdfghdfgh', '34523542345', 'wsdf@sadfas.dfasdf', '3', NULL, '2020-12-26 18:10:15', NULL, NULL),
(276, 2, '100107', 'sdsdf', '34634563456', '5fdgdfghdfgh', '34523542345', 'wsdf@sadfas.dfasdf', '1', NULL, '2020-12-26 18:13:36', NULL, NULL),
(277, 2, '190208', 'sdsdf', '34634563456', '5fdgdfghdfgh', '34523542345', 'wsdf@sadfas.dfasdf', '1', NULL, '2020-12-27 04:36:46', NULL, NULL),
(278, 2, '030404', 'asdfasdfasdf', '34542356234', '5dfgdfghdfghdfgh', '34563456345634', 'asd@asdf.asdf', '1', NULL, '2020-12-29 17:55:28', NULL, NULL),
(279, 2, '080604', 'asdfasdfasdf', '34542356234', '5dfgdfghdfghdfgh', '34563456345634', 'asd@asdf.asdf', '1', NULL, '2020-12-29 18:05:51', NULL, NULL),
(280, 1, '110303', 'sdfasdfasdf', '32452345234', 'dfghdfghdfghdfgh', '4563456345634', 'dfgdfgh@asdfasdf.asdf', '1', NULL, '2020-12-29 18:30:59', NULL, NULL),
(281, 1, '120302', 'knsandskam', '15616516515', 'Lima 01', '933346043', 'jaredn2021@gmail.com', '1', NULL, '2020-12-29 22:13:03', NULL, NULL),
(282, 1, '020605', 'dsadsa', '15616516515', 'dasdas', '933346043', 'jaredn2021@gmail.com', '1', NULL, '2020-12-29 22:16:13', NULL, NULL),
(283, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2020-12-30 01:37:07', NULL, NULL),
(284, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2020-12-30 01:45:17', NULL, NULL),
(285, 1, '030603', 'dfgsdfgfsd', '15616516515', 'sfgsdgf', '931746833', 'jaredn2021@gmail.com', '1', NULL, '2020-12-30 01:47:35', NULL, NULL),
(286, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2020-12-30 02:42:27', NULL, NULL),
(287, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2020-12-30 04:30:18', NULL, NULL),
(288, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2020-12-30 04:33:52', NULL, NULL),
(289, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2020-12-30 05:34:01', NULL, NULL),
(290, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2020-12-30 05:36:10', NULL, NULL),
(291, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2020-12-30 05:37:37', NULL, NULL),
(292, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2020-12-30 05:38:36', NULL, NULL),
(293, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2020-12-31 04:06:24', NULL, NULL),
(294, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2020-12-31 04:11:02', NULL, NULL),
(295, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2021-01-05 14:45:15', NULL, NULL),
(296, 1, '120302', 'dsadsa', '15616516515', 'dasdsa', '920183716', 'rmeiggs.s@gmail.com', '1', NULL, '2021-01-05 15:01:57', NULL, NULL),
(297, 1, '150112', 'Roberto', '10464961530', 'Jr. Miguel Aljovin 240', '931746833', 'jaredn2021@gmail.com', '1', NULL, '2021-01-05 18:52:18', NULL, NULL),
(298, 1, '020401', 'Roberto', '15616516515', 'Jr. Miguel Aljovin 240', '+51931746833', 'jaredn2021@gmail.com', '1', NULL, '2021-01-06 22:45:57', NULL, NULL),
(299, 1, '090403', 'knsandskam', '15616516515', 'Jr. Miguel Aljovin 240', '+51931746833', 'jaredn2021@gmail.com', '1', NULL, '2021-01-06 22:48:30', NULL, NULL),
(300, 2, '150403', 'Roberto', '11515151515', 'Lima 01', '933346043', 'jaredn2021@gmail.com', '1', NULL, '2021-01-07 00:34:01', NULL, NULL),
(301, 1, '070101', 'roberto', '87879899999', 'dasdas', '920183561', 'spotify.rmeiggss@gmail.com', '1', NULL, '2021-01-07 00:35:47', NULL, NULL),
(302, 1, '070101', 'Roberto', '15616516515', 'Jr. Miguel Aljovin 240', '+51931746833', 'jaredn2021@gmail.com', '1', NULL, '2021-01-07 00:38:12', NULL, NULL),
(303, 2, '120209', 'ABB', '15616516515', 'Jr. Miguel Aljovin 240', '+51931746833', 'jaredn2021@gmail.com', '1', NULL, '2021-01-09 03:42:31', NULL, NULL),
(304, 1, '150301', 'Siemens', '87879899999', 'Jr. Miguel Aljovin 240', '+51931746833', 'jaredn2021@gmail.com', '1', NULL, '2021-01-09 03:48:29', NULL, NULL),
(305, 1, '040307', 'knsandskam', '15616516515', 'Jr. Miguel Aljovin 240', '+51931746833', 'jaredn2021@gmail.com', '1', NULL, '2021-01-09 23:19:08', NULL, NULL),
(306, 1, '150808', 'dsadas', '15616516515', 'dasdas', '920183561', 'spotify.rmeiggss@gmail.com', '1', NULL, '2021-01-09 23:55:02', NULL, NULL),
(307, 1, '120903', 'knsandskam', '15616516515', 'Jr. Miguel Aljovin 240', '+51931746833', 'jaredn2021@gmail.com', '1', NULL, '2021-01-10 00:00:13', NULL, NULL),
(308, 1, '140202', 'fgsdfgfsd', '15151515555', 'Lima 01', '933346043', 'jaredn2021@gmail.com', '1', NULL, '2021-01-10 00:01:24', NULL, NULL),
(309, 1, '020609', 'fdsafdsa', '15616516515', 'Jr. Miguel Aljovin 240', '+51931746833', 'jaredn2021@gmail.com', '1', NULL, '2021-01-10 00:20:16', NULL, NULL),
(310, 1, '110304', 'dfnsjgn', '11363511321', 'Jr. Miguel Aljovin 240', '+51931746833', 'jaredn2021@gmail.com', '1', NULL, '2021-01-10 00:25:17', NULL, NULL),
(311, 2, '120905', 'dfsasdfdas', '87879899999', 'Jr. Miguel Aljovin 240', '+51931746833', 'jaredn2021@gmail.com', '1', NULL, '2021-01-10 00:26:13', NULL, NULL),
(312, 1, '150807', 'sgfsdgdf', '87879899999', 'Lima 01', '933346043', 'jaredn2021@gmail.com', '1', NULL, '2021-01-12 03:02:29', NULL, NULL),
(313, 1, '130702', 'dsadsa', '15616516515', 'Lima 01', '933346043', 'jaredn2021@gmail.com', '1', NULL, '2021-01-12 03:05:12', NULL, NULL),
(314, 1, '140112', 'gfdsg', '15616516515', 'fdasfsd', '+51931746833', 'jaredn2021@gmail.com', '1', NULL, '2021-01-12 03:06:13', NULL, NULL),
(315, 1, '110111', 'knsandskam', '15616516515', 'dasdas', '920183561', 'spotify.rmeiggss@gmail.com', '1', NULL, '2021-01-20 03:46:48', NULL, NULL),
(316, 2, '010305', 'Roberto', '15616516515', 'Jr. Miguel Aljovin 240', '+51931746833', 'jaredn2021@gmail.com', '1', NULL, '2021-01-20 03:58:29', NULL, NULL),
(317, 1, '130301', 'knsandskam', '15616516515', 'Jr. Miguel Aljovin 240', '+51931746833', 'jaredn2021@gmail.com', '1', NULL, '2021-01-21 02:50:50', NULL, NULL),
(318, 1, '150513', 'Roberto', '15616516515', 'dasdas', '920183561', 'spotify.rmeiggss@gmail.com', '1', NULL, '2021-01-21 03:42:35', NULL, NULL),
(319, 2, '110112', 'roberto', '15616516515', 'calle las mermeladas 854', '920183561', 'spotify.rmeiggss@gmail.com', '1', NULL, '2021-01-21 03:43:44', NULL, NULL),
(320, 1, '120211', 'Roberto', '15616516515', 'dasdas', '920183561', 'spotify.rmeiggss@gmail.com', '1', NULL, '2021-01-21 03:44:45', NULL, NULL),
(321, 1, '150610', 'Roberto', '15151515555', 'Lima 01', '933346043', 'jaredn2021@gmail.com', '1', NULL, '2021-01-21 03:45:59', NULL, NULL),
(329, 2, '150135', 'Cofima Ingenieros SAC', '20512988758', 'Av. Abancay 986 - SMP', '5611516', 'cofima@gmail.com', '1', NULL, '2021-02-03 02:19:16', NULL, NULL),
(334, 1, '150112', 'Roberto SAC', '11111111111', 'Lima 01', '933346043', 'rmeiggs.s@gmail.com', '1', NULL, '2021-02-04 02:17:25', NULL, NULL),
(335, 1, '170301', 'Roberto', '15616516515', 'Lima 01', '933346043', 'edward.figueroa@uni.pe', '1', NULL, '2021-03-04 00:16:39', NULL, NULL),
(336, 1, '150105', 'jhsbdasndas', '15616516515', 'Lima 01', '933346043', 'edward.figueroa@uni.pe', '1', NULL, '2021-03-13 02:34:39', NULL, NULL),
(337, 1, '160303', 'qqwweqw', '15616516515', 'Lima 01', '933346043', 'jaredn2021@gmail.com', '1', NULL, '2021-03-13 02:43:45', NULL, NULL),
(338, 1, '150204', 'ioioio', '15616516515', 'Jr. Miguel Aljovin 240', '+51931746833', 'jaredn2021@gmail.com', '1', NULL, '2021-03-13 02:55:00', NULL, NULL),
(339, 1, '240301', 'Empresa prueba', '12151155115', 'alguna', '55113311', 'laempresa1@gmail.com', '1', NULL, '2021-03-18 16:51:59', NULL, NULL),
(340, 1, '060406', 'Cualquiera SAC', '12345465461', 'Jr. Miguel Aljovin 240', '+51931746833', 'jaredn2021@gmail.com', '1', NULL, '2021-03-20 02:07:46', NULL, NULL),
(341, 1, '080101', 'Prueba2', '12312312321', 'Lima 01', '933346043', 'edward.figueroa@uni.pe', '1', NULL, '2021-03-20 02:18:23', NULL, NULL),
(342, 1, '150502', 'Prueba 3', '84151616156', 'dasdas', '920183561', 'spotify.rmeiggss@gmail.com', '1', NULL, '2021-03-20 02:27:47', NULL, NULL),
(343, 2, '150135', 'XYZ SAC', '84515151511', 'dsadsadsa sasa', '5115132115', 'xyzsac@xyz.com', '1', NULL, '2021-03-20 03:00:36', NULL, NULL),
(344, 1, '140201', 'dsadasdas', '15616516515', 'dasdas', '933346043', 'edward.figueroa@uni.pe', '1', NULL, '2021-03-24 03:09:34', NULL, NULL),
(345, 1, '110303', 'aasdsadasdas', '87879899999', 'Jr. Miguel Aljovin 240', '+51931746833', 'jaredn2021@gmail.com', '1', NULL, '2021-03-24 03:13:04', NULL, NULL),
(346, 1, '120904', 'dasdas', '87879899999', 'Lima 01', '933346043', 'edward.figueroa@uni.pe', '1', NULL, '2021-03-24 03:13:49', NULL, NULL),
(347, 1, '140202', 'Prueba', '11111111111', 'Jr. Miguel Aljovin 240', '+51931746833', 'jaredn2021@gmail.com', '1', NULL, '2021-03-30 21:35:44', NULL, NULL),
(348, 1, '100504', 'Prueba 2', '15616516515', 'dasdsa', '920183716', 'rmeiggs.s@gmail.com', '1', NULL, '2021-03-30 21:43:19', NULL, NULL),
(349, 2, '140113', 'ACC', '15616516515', 'dasdsa', '920183716', 'rmeiggs.s@gmail.com', '1', NULL, '2021-03-31 02:36:29', NULL, NULL),
(350, 1, '170302', 'dsadsadsa', '15616516515', 'Lima 01', '933346043', 'edward.figueroa@uni.pe', '1', NULL, '2021-03-31 02:37:47', NULL, NULL),
(351, 2, '140302', 'dsadsada', '87879899999', 'Lima 01', '933346043', 'edward.figueroa@uni.pe', '1', NULL, '2021-03-31 02:38:44', NULL, NULL),
(352, 1, '120120', 'Prueba Ensayo', '11111111111', 'Lima 01', '933346043', 'edward.figueroa@uni.pe', '1', NULL, '2021-04-06 02:15:04', NULL, NULL),
(353, 1, '010401', 'dfsfasd', '87879899999', 'dasdsa', '920183716', 'rmeiggs.s@gmail.com', '1', NULL, '2021-04-06 14:29:44', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocotizacion`
--

CREATE TABLE `tipocotizacion` (
  `TIPOCOP_Codigo` int(11) NOT NULL,
  `TIPOCOC_Descripcion` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipocotizacion`
--

INSERT INTO `tipocotizacion` (`TIPOCOP_Codigo`, `TIPOCOC_Descripcion`, `created_at`, `updated_at`) VALUES
(1, 'De Ensayo', NULL, NULL),
(2, 'De Calibraciones', NULL, NULL),
(3, 'De Capacitaciones', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposolicitante`
--

CREATE TABLE `tiposolicitante` (
  `TIPSOLIP_Codigo` int(11) NOT NULL,
  `TIPSOLIC_Descripcion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tiposolicitante`
--

INSERT INTO `tiposolicitante` (`TIPSOLIP_Codigo`, `TIPSOLIC_Descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Persona Natural', NULL, NULL),
(2, 'Persona Jurídica', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubigeo`
--

CREATE TABLE `ubigeo` (
  `UBIGP_Codigo` char(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UBIGC_CodDpto` char(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `UBIGC_CodProv` char(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `UBIGC_CodDist` char(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `UBIGC_Descripcion` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `UBIGC_FechaRegistro` timestamp NULL DEFAULT current_timestamp(),
  `UBIGC_FechaModificacion` datetime DEFAULT NULL,
  `UBIGC_FlagEstado` char(1) COLLATE utf8mb4_unicode_ci DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ubigeo`
--

INSERT INTO `ubigeo` (`UBIGP_Codigo`, `UBIGC_CodDpto`, `UBIGC_CodProv`, `UBIGC_CodDist`, `UBIGC_Descripcion`, `UBIGC_FechaRegistro`, `UBIGC_FechaModificacion`, `UBIGC_FlagEstado`) VALUES
('000000', '00', '00', '00', '::Seleccione::', '2010-12-15 02:13:48', NULL, '1'),
('010000', '01', '00', '00', 'AMAZONAS', '2010-12-14 03:59:32', NULL, '1'),
('010100', '01', '01', '00', 'CHACHAPOYAS', '2010-12-14 03:59:32', NULL, '1'),
('010101', '01', '01', '01', 'CHACHAPOYAS', '2010-12-14 03:59:32', NULL, '1'),
('010102', '01', '01', '02', 'ASUNCION', '2010-12-14 03:59:32', NULL, '1'),
('010103', '01', '01', '03', 'BALSAS', '2010-12-14 03:59:32', NULL, '1'),
('010104', '01', '01', '04', 'CHETO', '2010-12-14 03:59:32', NULL, '1'),
('010105', '01', '01', '05', 'CHILIQUIN', '2010-12-14 03:59:32', NULL, '1'),
('010106', '01', '01', '06', 'CHUQUIBAMBA', '2010-12-14 03:59:32', NULL, '1'),
('010107', '01', '01', '07', 'GRANADA', '2010-12-14 03:59:32', NULL, '1'),
('010108', '01', '01', '08', 'HUANCAS', '2010-12-14 03:59:32', NULL, '1'),
('010109', '01', '01', '09', 'LA JALCA', '2010-12-14 03:59:32', NULL, '1'),
('010110', '01', '01', '10', 'LEIMEBAMBA', '2010-12-14 03:59:32', NULL, '1'),
('010111', '01', '01', '11', 'LEVANTO', '2010-12-14 03:59:32', NULL, '1'),
('010112', '01', '01', '12', 'MAGDALENA', '2010-12-14 03:59:32', NULL, '1'),
('010113', '01', '01', '13', 'MARISCAL CASTILLA', '2010-12-14 03:59:32', NULL, '1'),
('010114', '01', '01', '14', 'MOLINOPAMPA', '2010-12-14 03:59:32', NULL, '1'),
('010115', '01', '01', '15', 'MONTEVIDEO', '2010-12-14 03:59:32', NULL, '1'),
('010116', '01', '01', '16', 'OLLEROS', '2010-12-14 03:59:32', NULL, '1'),
('010117', '01', '01', '17', 'QUINJALCA', '2010-12-14 03:59:32', NULL, '1'),
('010118', '01', '01', '18', 'SAN FRANCISCO DE DAGUAS', '2010-12-14 03:59:32', NULL, '1'),
('010119', '01', '01', '19', 'SAN ISIDRO DE MAINO', '2010-12-14 03:59:32', NULL, '1'),
('010120', '01', '01', '20', 'SOLOCO', '2010-12-14 03:59:32', NULL, '1'),
('010121', '01', '01', '21', 'SONCHE', '2010-12-14 03:59:32', NULL, '1'),
('010200', '01', '02', '00', 'BAGUA', '2010-12-14 03:59:32', NULL, '1'),
('010201', '01', '02', '01', 'BAGUA', '2010-12-14 03:59:32', NULL, '1'),
('010202', '01', '02', '02', 'ARAMANGO', '2010-12-14 03:59:32', NULL, '1'),
('010203', '01', '02', '03', 'COPALLIN', '2010-12-14 03:59:32', NULL, '1'),
('010204', '01', '02', '04', 'EL PARCO', '2010-12-14 03:59:32', NULL, '1'),
('010205', '01', '02', '05', 'IMAZA', '2010-12-14 03:59:32', NULL, '1'),
('010206', '01', '02', '06', 'LA PECA', '2010-12-14 03:59:32', NULL, '1'),
('010300', '01', '03', '00', 'BONGARA', '2010-12-14 03:59:32', NULL, '1'),
('010301', '01', '03', '01', 'JUMBILLA', '2010-12-14 03:59:32', NULL, '1'),
('010302', '01', '03', '02', 'CHISQUILLA', '2010-12-14 03:59:32', NULL, '1'),
('010303', '01', '03', '03', 'CHURUJA', '2010-12-14 03:59:32', NULL, '1'),
('010304', '01', '03', '04', 'COROSHA', '2010-12-14 03:59:32', NULL, '1'),
('010305', '01', '03', '05', 'CUISPES', '2010-12-14 03:59:32', NULL, '1'),
('010306', '01', '03', '06', 'FLORIDA', '2010-12-14 03:59:32', NULL, '1'),
('010307', '01', '03', '07', 'JAZAN', '2010-12-14 03:59:32', NULL, '1'),
('010308', '01', '03', '08', 'RECTA', '2010-12-14 03:59:32', NULL, '1'),
('010309', '01', '03', '09', 'SAN CARLOS', '2010-12-14 03:59:32', NULL, '1'),
('010310', '01', '03', '10', 'SHIPASBAMBA', '2010-12-14 03:59:32', NULL, '1'),
('010311', '01', '03', '11', 'VALERA', '2010-12-14 03:59:32', NULL, '1'),
('010312', '01', '03', '12', 'YAMBRASBAMBA', '2010-12-14 03:59:32', NULL, '1'),
('010400', '01', '04', '00', 'CONDORCANQUI', '2010-12-14 03:59:32', NULL, '1'),
('010401', '01', '04', '01', 'NIEVA', '2010-12-14 03:59:32', NULL, '1'),
('010402', '01', '04', '02', 'EL CENEPA', '2010-12-14 03:59:32', NULL, '1'),
('010403', '01', '04', '03', 'RIO SANTIAGO', '2010-12-14 03:59:32', NULL, '1'),
('010500', '01', '05', '00', 'LUYA', '2010-12-14 03:59:32', NULL, '1'),
('010501', '01', '05', '01', 'LAMUD', '2010-12-14 03:59:32', NULL, '1'),
('010502', '01', '05', '02', 'CAMPORREDONDO', '2010-12-14 03:59:32', NULL, '1'),
('010503', '01', '05', '03', 'COCABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('010504', '01', '05', '04', 'COLCAMAR', '2010-12-14 03:59:32', NULL, '1'),
('010505', '01', '05', '05', 'CONILA', '2010-12-14 03:59:32', NULL, '1'),
('010506', '01', '05', '06', 'INGUILPATA', '2010-12-14 03:59:32', NULL, '1'),
('010507', '01', '05', '07', 'LONGUITA', '2010-12-14 03:59:32', NULL, '1'),
('010508', '01', '05', '08', 'LONYA CHICO', '2010-12-14 03:59:32', NULL, '1'),
('010509', '01', '05', '09', 'LUYA', '2010-12-14 03:59:32', NULL, '1'),
('010510', '01', '05', '10', 'LUYA VIEJO', '2010-12-14 03:59:32', NULL, '1'),
('010511', '01', '05', '11', 'MARIA', '2010-12-14 03:59:32', NULL, '1'),
('010512', '01', '05', '12', 'OCALLI', '2010-12-14 03:59:32', NULL, '1'),
('010513', '01', '05', '13', 'OCUMAL', '2010-12-14 03:59:32', NULL, '1'),
('010514', '01', '05', '14', 'PISUQUIA', '2010-12-14 03:59:32', NULL, '1'),
('010515', '01', '05', '15', 'PROVIDENCIA', '2010-12-14 03:59:32', NULL, '1'),
('010516', '01', '05', '16', 'SAN CRISTOBAL', '2010-12-14 03:59:32', NULL, '1'),
('010517', '01', '05', '17', 'SAN FRANCISCO DEL YESO', '2010-12-14 03:59:32', NULL, '1'),
('010518', '01', '05', '18', 'SAN JERONIMO', '2010-12-14 03:59:32', NULL, '1'),
('010519', '01', '05', '19', 'SAN JUAN DE LOPECANCHA', '2010-12-14 03:59:32', NULL, '1'),
('010520', '01', '05', '20', 'SANTA CATALINA', '2010-12-14 03:59:32', NULL, '1'),
('010521', '01', '05', '21', 'SANTO TOMAS', '2010-12-14 03:59:32', NULL, '1'),
('010522', '01', '05', '22', 'TINGO', '2010-12-14 03:59:32', NULL, '1'),
('010523', '01', '05', '23', 'TRITA', '2010-12-14 03:59:32', NULL, '1'),
('010600', '01', '06', '00', 'RODRIGUEZ DE MENDOZA', '2010-12-14 03:59:32', NULL, '1'),
('010601', '01', '06', '01', 'SAN NICOLAS', '2010-12-14 03:59:32', NULL, '1'),
('010602', '01', '06', '02', 'CHIRIMOTO', '2010-12-14 03:59:32', NULL, '1'),
('010603', '01', '06', '03', 'COCHAMAL', '2010-12-14 03:59:32', NULL, '1'),
('010604', '01', '06', '04', 'HUAMBO', '2010-12-14 03:59:32', NULL, '1'),
('010605', '01', '06', '05', 'LIMABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('010606', '01', '06', '06', 'LONGAR', '2010-12-14 03:59:32', NULL, '1'),
('010607', '01', '06', '07', 'MARISCAL BENAVIDES', '2010-12-14 03:59:32', NULL, '1'),
('010608', '01', '06', '08', 'MILPUC', '2010-12-14 03:59:32', NULL, '1'),
('010609', '01', '06', '09', 'OMIA', '2010-12-14 03:59:32', NULL, '1'),
('010610', '01', '06', '10', 'SANTA ROSA', '2010-12-14 03:59:32', NULL, '1'),
('010611', '01', '06', '11', 'TOTORA', '2010-12-14 03:59:32', NULL, '1'),
('010612', '01', '06', '12', 'VISTA ALEGRE', '2010-12-14 03:59:32', NULL, '1'),
('010700', '01', '07', '00', 'UTCUBAMBA', '2010-12-14 03:59:32', NULL, '1'),
('010701', '01', '07', '01', 'BAGUA GRANDE', '2010-12-14 03:59:32', NULL, '1'),
('010702', '01', '07', '02', 'CAJARURO', '2010-12-14 03:59:32', NULL, '1'),
('010703', '01', '07', '03', 'CUMBA', '2010-12-14 03:59:32', NULL, '1'),
('010704', '01', '07', '04', 'EL MILAGRO', '2010-12-14 03:59:32', NULL, '1'),
('010705', '01', '07', '05', 'JAMALCA', '2010-12-14 03:59:32', NULL, '1'),
('010706', '01', '07', '06', 'LONYA GRANDE', '2010-12-14 03:59:32', NULL, '1'),
('010707', '01', '07', '07', 'YAMON', '2010-12-14 03:59:32', NULL, '1'),
('020000', '02', '00', '00', 'ANCASH', '2010-12-14 03:59:32', NULL, '1'),
('020100', '02', '01', '00', 'HUARAZ', '2010-12-14 03:59:32', NULL, '1'),
('020101', '02', '01', '01', 'HUARAZ', '2010-12-14 03:59:32', NULL, '1'),
('020102', '02', '01', '02', 'COCHABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('020103', '02', '01', '03', 'COLCABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('020104', '02', '01', '04', 'HUANCHAY', '2010-12-14 03:59:32', NULL, '1'),
('020105', '02', '01', '05', 'INDEPENDENCIA', '2010-12-14 03:59:32', NULL, '1'),
('020106', '02', '01', '06', 'JANGAS', '2010-12-14 03:59:32', NULL, '1'),
('020107', '02', '01', '07', 'LA LIBERTAD', '2010-12-14 03:59:32', NULL, '1'),
('020108', '02', '01', '08', 'OLLEROS', '2010-12-14 03:59:32', NULL, '1'),
('020109', '02', '01', '09', 'PAMPAS', '2010-12-14 03:59:32', NULL, '1'),
('020110', '02', '01', '10', 'PARIACOTO', '2010-12-14 03:59:32', NULL, '1'),
('020111', '02', '01', '11', 'PIRA', '2010-12-14 03:59:32', NULL, '1'),
('020112', '02', '01', '12', 'TARICA', '2010-12-14 03:59:32', NULL, '1'),
('020200', '02', '02', '00', 'AIJA', '2010-12-14 03:59:32', NULL, '1'),
('020201', '02', '02', '01', 'AIJA', '2010-12-14 03:59:32', NULL, '1'),
('020202', '02', '02', '02', 'CORIS', '2010-12-14 03:59:32', NULL, '1'),
('020203', '02', '02', '03', 'HUACLLAN', '2010-12-14 03:59:32', NULL, '1'),
('020204', '02', '02', '04', 'LA MERCED', '2010-12-14 03:59:32', NULL, '1'),
('020205', '02', '02', '05', 'SUCCHA', '2010-12-14 03:59:32', NULL, '1'),
('020300', '02', '03', '00', 'ANTONIO RAYMONDI', '2010-12-14 03:59:32', NULL, '1'),
('020301', '02', '03', '01', 'LLAMELLIN', '2010-12-14 03:59:32', NULL, '1'),
('020302', '02', '03', '02', 'ACZO', '2010-12-14 03:59:32', NULL, '1'),
('020303', '02', '03', '03', 'CHACCHO', '2010-12-14 03:59:32', NULL, '1'),
('020304', '02', '03', '04', 'CHINGAS', '2010-12-14 03:59:32', NULL, '1'),
('020305', '02', '03', '05', 'MIRGAS', '2010-12-14 03:59:32', NULL, '1'),
('020306', '02', '03', '06', 'SAN JUAN DE RONTOY', '2010-12-14 03:59:32', NULL, '1'),
('020400', '02', '04', '00', 'ASUNCION', '2010-12-14 03:59:32', NULL, '1'),
('020401', '02', '04', '01', 'CHACAS', '2010-12-14 03:59:32', NULL, '1'),
('020402', '02', '04', '02', 'ACOCHACA', '2010-12-14 03:59:32', NULL, '1'),
('020500', '02', '05', '00', 'BOLOGNESI', '2010-12-14 03:59:32', NULL, '1'),
('020501', '02', '05', '01', 'CHIQUIAN', '2010-12-14 03:59:32', NULL, '1'),
('020502', '02', '05', '02', 'ABELARDO PARDO LEZAMETA', '2010-12-14 03:59:32', NULL, '1'),
('020503', '02', '05', '03', 'ANTONIO RAYMONDI', '2010-12-14 03:59:32', NULL, '1'),
('020504', '02', '05', '04', 'AQUIA', '2010-12-14 03:59:32', NULL, '1'),
('020505', '02', '05', '05', 'CAJACAY', '2010-12-14 03:59:32', NULL, '1'),
('020506', '02', '05', '06', 'CANIS', '2010-12-14 03:59:32', NULL, '1'),
('020507', '02', '05', '07', 'COLQUIOC', '2010-12-14 03:59:32', NULL, '1'),
('020508', '02', '05', '08', 'HUALLANCA', '2010-12-14 03:59:32', NULL, '1'),
('020509', '02', '05', '09', 'HUASTA', '2010-12-14 03:59:32', NULL, '1'),
('020510', '02', '05', '10', 'HUAYLLACAYAN', '2010-12-14 03:59:32', NULL, '1'),
('020511', '02', '05', '11', 'LA PRIMAVERA', '2010-12-14 03:59:32', NULL, '1'),
('020512', '02', '05', '12', 'MANGAS', '2010-12-14 03:59:32', NULL, '1'),
('020513', '02', '05', '13', 'PACLLON', '2010-12-14 03:59:32', NULL, '1'),
('020514', '02', '05', '14', 'SAN MIGUEL DE CORPANQUI', '2010-12-14 03:59:32', NULL, '1'),
('020515', '02', '05', '15', 'TICLLOS', '2010-12-14 03:59:32', NULL, '1'),
('020600', '02', '06', '00', 'CARHUAZ', '2010-12-14 03:59:32', NULL, '1'),
('020601', '02', '06', '01', 'CARHUAZ', '2010-12-14 03:59:32', NULL, '1'),
('020602', '02', '06', '02', 'ACOPAMPA', '2010-12-14 03:59:32', NULL, '1'),
('020603', '02', '06', '03', 'AMASHCA', '2010-12-14 03:59:32', NULL, '1'),
('020604', '02', '06', '04', 'ANTA', '2010-12-14 03:59:32', NULL, '1'),
('020605', '02', '06', '05', 'ATAQUERO', '2010-12-14 03:59:32', NULL, '1'),
('020606', '02', '06', '06', 'MARCARA', '2010-12-14 03:59:32', NULL, '1'),
('020607', '02', '06', '07', 'PARIAHUANCA', '2010-12-14 03:59:32', NULL, '1'),
('020608', '02', '06', '08', 'SAN MIGUEL DE ACO', '2010-12-14 03:59:32', NULL, '1'),
('020609', '02', '06', '09', 'SHILLA', '2010-12-14 03:59:32', NULL, '1'),
('020610', '02', '06', '10', 'TINCO', '2010-12-14 03:59:32', NULL, '1'),
('020611', '02', '06', '11', 'YUNGAR', '2010-12-14 03:59:32', NULL, '1'),
('020700', '02', '07', '00', 'CARLOS FERMIN FITZCARRALD', '2010-12-14 03:59:32', NULL, '1'),
('020701', '02', '07', '01', 'SAN LUIS', '2010-12-14 03:59:32', NULL, '1'),
('020702', '02', '07', '02', 'SAN NICOLAS', '2010-12-14 03:59:32', NULL, '1'),
('020703', '02', '07', '03', 'YAUYA', '2010-12-14 03:59:32', NULL, '1'),
('020800', '02', '08', '00', 'CASMA', '2010-12-14 03:59:32', NULL, '1'),
('020801', '02', '08', '01', 'CASMA', '2010-12-14 03:59:32', NULL, '1'),
('020802', '02', '08', '02', 'BUENA VISTA ALTA', '2010-12-14 03:59:32', NULL, '1'),
('020803', '02', '08', '03', 'COMANDANTE NOEL', '2010-12-14 03:59:32', NULL, '1'),
('020804', '02', '08', '04', 'YAUTAN', '2010-12-14 03:59:32', NULL, '1'),
('020900', '02', '09', '00', 'CORONGO', '2010-12-14 03:59:32', NULL, '1'),
('020901', '02', '09', '01', 'CORONGO', '2010-12-14 03:59:32', NULL, '1'),
('020902', '02', '09', '02', 'ACO', '2010-12-14 03:59:32', NULL, '1'),
('020903', '02', '09', '03', 'BAMBAS', '2010-12-14 03:59:32', NULL, '1'),
('020904', '02', '09', '04', 'CUSCA', '2010-12-14 03:59:32', NULL, '1'),
('020905', '02', '09', '05', 'LA PAMPA', '2010-12-14 03:59:32', NULL, '1'),
('020906', '02', '09', '06', 'YANAC', '2010-12-14 03:59:32', NULL, '1'),
('020907', '02', '09', '07', 'YUPAN', '2010-12-14 03:59:32', NULL, '1'),
('021000', '02', '10', '00', 'HUARI', '2010-12-14 03:59:32', NULL, '1'),
('021001', '02', '10', '01', 'HUARI', '2010-12-14 03:59:32', NULL, '1'),
('021002', '02', '10', '02', 'ANRA', '2010-12-14 03:59:32', NULL, '1'),
('021003', '02', '10', '03', 'CAJAY', '2010-12-14 03:59:32', NULL, '1'),
('021004', '02', '10', '04', 'CHAVIN DE HUANTAR', '2010-12-14 03:59:32', NULL, '1'),
('021005', '02', '10', '05', 'HUACACHI', '2010-12-14 03:59:32', NULL, '1'),
('021006', '02', '10', '06', 'HUACCHIS', '2010-12-14 03:59:32', NULL, '1'),
('021007', '02', '10', '07', 'HUACHIS', '2010-12-14 03:59:32', NULL, '1'),
('021008', '02', '10', '08', 'HUANTAR', '2010-12-14 03:59:32', NULL, '1'),
('021009', '02', '10', '09', 'MASIN', '2010-12-14 03:59:32', NULL, '1'),
('021010', '02', '10', '10', 'PAUCAS', '2010-12-14 03:59:32', NULL, '1'),
('021011', '02', '10', '11', 'PONTO', '2010-12-14 03:59:32', NULL, '1'),
('021012', '02', '10', '12', 'RAHUAPAMPA', '2010-12-14 03:59:32', NULL, '1'),
('021013', '02', '10', '13', 'RAPAYAN', '2010-12-14 03:59:32', NULL, '1'),
('021014', '02', '10', '14', 'SAN MARCOS', '2010-12-14 03:59:32', NULL, '1'),
('021015', '02', '10', '15', 'SAN PEDRO DE CHANA', '2010-12-14 03:59:32', NULL, '1'),
('021016', '02', '10', '16', 'UCO', '2010-12-14 03:59:32', NULL, '1'),
('021100', '02', '11', '00', 'HUARMEY', '2010-12-14 03:59:32', NULL, '1'),
('021101', '02', '11', '01', 'HUARMEY', '2010-12-14 03:59:32', NULL, '1'),
('021102', '02', '11', '02', 'COCHAPETI', '2010-12-14 03:59:32', NULL, '1'),
('021103', '02', '11', '03', 'CULEBRAS', '2010-12-14 03:59:32', NULL, '1'),
('021104', '02', '11', '04', 'HUAYAN', '2010-12-14 03:59:32', NULL, '1'),
('021105', '02', '11', '05', 'MALVAS', '2010-12-14 03:59:32', NULL, '1'),
('021200', '02', '12', '00', 'HUAYLAS', '2010-12-14 03:59:32', NULL, '1'),
('021201', '02', '12', '01', 'CARAZ', '2010-12-14 03:59:32', NULL, '1'),
('021202', '02', '12', '02', 'HUALLANCA', '2010-12-14 03:59:32', NULL, '1'),
('021203', '02', '12', '03', 'HUATA', '2010-12-14 03:59:32', NULL, '1'),
('021204', '02', '12', '04', 'HUAYLAS', '2010-12-14 03:59:32', NULL, '1'),
('021205', '02', '12', '05', 'MATO', '2010-12-14 03:59:32', NULL, '1'),
('021206', '02', '12', '06', 'PAMPAROMAS', '2010-12-14 03:59:32', NULL, '1'),
('021207', '02', '12', '07', 'PUEBLO LIBRE', '2010-12-14 03:59:32', NULL, '1'),
('021208', '02', '12', '08', 'SANTA CRUZ', '2010-12-14 03:59:32', NULL, '1'),
('021209', '02', '12', '09', 'SANTO TORIBIO', '2010-12-14 03:59:32', NULL, '1'),
('021210', '02', '12', '10', 'YURACMARCA', '2010-12-14 03:59:32', NULL, '1'),
('021300', '02', '13', '00', 'MARISCAL LUZURIAGA', '2010-12-14 03:59:32', NULL, '1'),
('021301', '02', '13', '01', 'PISCOBAMBA', '2010-12-14 03:59:32', NULL, '1'),
('021302', '02', '13', '02', 'CASCA', '2010-12-14 03:59:32', NULL, '1'),
('021303', '02', '13', '03', 'ELEAZAR GUZMAN BARRON', '2010-12-14 03:59:32', NULL, '1'),
('021304', '02', '13', '04', 'FIDEL OLIVAS ESCUDERO', '2010-12-14 03:59:32', NULL, '1'),
('021305', '02', '13', '05', 'LLAMA', '2010-12-14 03:59:32', NULL, '1'),
('021306', '02', '13', '06', 'LLUMPA', '2010-12-14 03:59:32', NULL, '1'),
('021307', '02', '13', '07', 'LUCMA', '2010-12-14 03:59:32', NULL, '1'),
('021308', '02', '13', '08', 'MUSGA', '2010-12-14 03:59:32', NULL, '1'),
('021400', '02', '14', '00', 'OCROS', '2010-12-14 03:59:32', NULL, '1'),
('021401', '02', '14', '01', 'OCROS', '2010-12-14 03:59:32', NULL, '1'),
('021402', '02', '14', '02', 'ACAS', '2010-12-14 03:59:32', NULL, '1'),
('021403', '02', '14', '03', 'CAJAMARQUILLA', '2010-12-14 03:59:32', NULL, '1'),
('021404', '02', '14', '04', 'CARHUAPAMPA', '2010-12-14 03:59:32', NULL, '1'),
('021405', '02', '14', '05', 'COCHAS', '2010-12-14 03:59:32', NULL, '1'),
('021406', '02', '14', '06', 'CONGAS', '2010-12-14 03:59:32', NULL, '1'),
('021407', '02', '14', '07', 'LLIPA', '2010-12-14 03:59:32', NULL, '1'),
('021408', '02', '14', '08', 'SAN CRISTOBAL DE RAJAN', '2010-12-14 03:59:32', NULL, '1'),
('021409', '02', '14', '09', 'SAN PEDRO', '2010-12-14 03:59:32', NULL, '1'),
('021410', '02', '14', '10', 'SANTIAGO DE CHILCAS', '2010-12-14 03:59:32', NULL, '1'),
('021500', '02', '15', '00', 'PALLASCA', '2010-12-14 03:59:32', NULL, '1'),
('021501', '02', '15', '01', 'CABANA', '2010-12-14 03:59:32', NULL, '1'),
('021502', '02', '15', '02', 'BOLOGNESI', '2010-12-14 03:59:32', NULL, '1'),
('021503', '02', '15', '03', 'CONCHUCOS', '2010-12-14 03:59:32', NULL, '1'),
('021504', '02', '15', '04', 'HUACASCHUQUE', '2010-12-14 03:59:32', NULL, '1'),
('021505', '02', '15', '05', 'HUANDOVAL', '2010-12-14 03:59:32', NULL, '1'),
('021506', '02', '15', '06', 'LACABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('021507', '02', '15', '07', 'LLAPO', '2010-12-14 03:59:32', NULL, '1'),
('021508', '02', '15', '08', 'PALLASCA', '2010-12-14 03:59:32', NULL, '1'),
('021509', '02', '15', '09', 'PAMPAS', '2010-12-14 03:59:32', NULL, '1'),
('021510', '02', '15', '10', 'SANTA ROSA', '2010-12-14 03:59:32', NULL, '1'),
('021511', '02', '15', '11', 'TAUCA', '2010-12-14 03:59:32', NULL, '1'),
('021600', '02', '16', '00', 'POMABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('021601', '02', '16', '01', 'POMABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('021602', '02', '16', '02', 'HUAYLLAN', '2010-12-14 03:59:32', NULL, '1'),
('021603', '02', '16', '03', 'PAROBAMBA', '2010-12-14 03:59:32', NULL, '1'),
('021604', '02', '16', '04', 'QUINUABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('021700', '02', '17', '00', 'RECUAY', '2010-12-14 03:59:32', NULL, '1'),
('021701', '02', '17', '01', 'RECUAY', '2010-12-14 03:59:32', NULL, '1'),
('021702', '02', '17', '02', 'CATAC', '2010-12-14 03:59:32', NULL, '1'),
('021703', '02', '17', '03', 'COTAPARACO', '2010-12-14 03:59:32', NULL, '1'),
('021704', '02', '17', '04', 'HUAYLLAPAMPA', '2010-12-14 03:59:32', NULL, '1'),
('021705', '02', '17', '05', 'LLACLLIN', '2010-12-14 03:59:32', NULL, '1'),
('021706', '02', '17', '06', 'MARCA', '2010-12-14 03:59:32', NULL, '1'),
('021707', '02', '17', '07', 'PAMPAS CHICO', '2010-12-14 03:59:32', NULL, '1'),
('021708', '02', '17', '08', 'PARARIN', '2010-12-14 03:59:32', NULL, '1'),
('021709', '02', '17', '09', 'TAPACOCHA', '2010-12-14 03:59:32', NULL, '1'),
('021710', '02', '17', '10', 'TICAPAMPA', '2010-12-14 03:59:32', NULL, '1'),
('021800', '02', '18', '00', 'SANTA', '2010-12-14 03:59:32', NULL, '1'),
('021801', '02', '18', '01', 'CHIMBOTE', '2010-12-14 03:59:32', NULL, '1'),
('021802', '02', '18', '02', 'CACERES DEL PERU', '2010-12-14 03:59:32', NULL, '1'),
('021803', '02', '18', '03', 'COISHCO', '2010-12-14 03:59:32', NULL, '1'),
('021804', '02', '18', '04', 'MACATE', '2010-12-14 03:59:32', NULL, '1'),
('021805', '02', '18', '05', 'MORO', '2010-12-14 03:59:32', NULL, '1'),
('021806', '02', '18', '06', 'NEPEÑA', '2010-12-14 03:59:32', NULL, '1'),
('021807', '02', '18', '07', 'SAMANCO', '2010-12-14 03:59:32', NULL, '1'),
('021808', '02', '18', '08', 'SANTA', '2010-12-14 03:59:32', NULL, '1'),
('021809', '02', '18', '09', 'NUEVO CHIMBOTE', '2010-12-14 03:59:32', NULL, '1'),
('021900', '02', '19', '00', 'SIHUAS', '2010-12-14 03:59:32', NULL, '1'),
('021901', '02', '19', '01', 'SIHUAS', '2010-12-14 03:59:32', NULL, '1'),
('021902', '02', '19', '02', 'ACOBAMBA', '2010-12-14 03:59:32', NULL, '1'),
('021903', '02', '19', '03', 'ALFONSO UGARTE', '2010-12-14 03:59:32', NULL, '1'),
('021904', '02', '19', '04', 'CASHAPAMPA', '2010-12-14 03:59:32', NULL, '1'),
('021905', '02', '19', '05', 'CHINGALPO', '2010-12-14 03:59:32', NULL, '1'),
('021906', '02', '19', '06', 'HUAYLLABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('021907', '02', '19', '07', 'QUICHES', '2010-12-14 03:59:32', NULL, '1'),
('021908', '02', '19', '08', 'RAGASH', '2010-12-14 03:59:32', NULL, '1'),
('021909', '02', '19', '09', 'SAN JUAN', '2010-12-14 03:59:32', NULL, '1'),
('021910', '02', '19', '10', 'SICSIBAMBA', '2010-12-14 03:59:32', NULL, '1'),
('022000', '02', '20', '00', 'YUNGAY', '2010-12-14 03:59:32', NULL, '1'),
('022001', '02', '20', '01', 'YUNGAY', '2010-12-14 03:59:32', NULL, '1'),
('022002', '02', '20', '02', 'CASCAPARA', '2010-12-14 03:59:32', NULL, '1'),
('022003', '02', '20', '03', 'MANCOS', '2010-12-14 03:59:32', NULL, '1'),
('022004', '02', '20', '04', 'MATACOTO', '2010-12-14 03:59:32', NULL, '1'),
('022005', '02', '20', '05', 'QUILLO', '2010-12-14 03:59:32', NULL, '1'),
('022006', '02', '20', '06', 'RANRAHIRCA', '2010-12-14 03:59:32', NULL, '1'),
('022007', '02', '20', '07', 'SHUPLUY', '2010-12-14 03:59:32', NULL, '1'),
('022008', '02', '20', '08', 'YANAMA', '2010-12-14 03:59:32', NULL, '1'),
('030000', '03', '00', '00', 'APURIMAC', '2010-12-14 03:59:32', NULL, '1'),
('030100', '03', '01', '00', 'ABANCAY', '2010-12-14 03:59:32', NULL, '1'),
('030101', '03', '01', '01', 'ABANCAY', '2010-12-14 03:59:32', NULL, '1'),
('030102', '03', '01', '02', 'CHACOCHE', '2010-12-14 03:59:32', NULL, '1'),
('030103', '03', '01', '03', 'CIRCA', '2010-12-14 03:59:32', NULL, '1'),
('030104', '03', '01', '04', 'CURAHUASI', '2010-12-14 03:59:32', NULL, '1'),
('030105', '03', '01', '05', 'HUANIPACA', '2010-12-14 03:59:32', NULL, '1'),
('030106', '03', '01', '06', 'LAMBRAMA', '2010-12-14 03:59:32', NULL, '1'),
('030107', '03', '01', '07', 'PICHIRHUA', '2010-12-14 03:59:32', NULL, '1'),
('030108', '03', '01', '08', 'SAN PEDRO DE CACHORA', '2010-12-14 03:59:32', NULL, '1'),
('030109', '03', '01', '09', 'TAMBURCO', '2010-12-14 03:59:32', NULL, '1'),
('030200', '03', '02', '00', 'ANDAHUAYLAS', '2010-12-14 03:59:32', NULL, '1'),
('030201', '03', '02', '01', 'ANDAHUAYLAS', '2010-12-14 03:59:32', NULL, '1'),
('030202', '03', '02', '02', 'ANDARAPA', '2010-12-14 03:59:32', NULL, '1'),
('030203', '03', '02', '03', 'CHIARA', '2010-12-14 03:59:32', NULL, '1'),
('030204', '03', '02', '04', 'HUANCARAMA', '2010-12-14 03:59:32', NULL, '1'),
('030205', '03', '02', '05', 'HUANCARAY', '2010-12-14 03:59:32', NULL, '1'),
('030206', '03', '02', '06', 'HUAYANA', '2010-12-14 03:59:32', NULL, '1'),
('030207', '03', '02', '07', 'KISHUARA', '2010-12-14 03:59:32', NULL, '1'),
('030208', '03', '02', '08', 'PACOBAMBA', '2010-12-14 03:59:32', NULL, '1'),
('030209', '03', '02', '09', 'PACUCHA', '2010-12-14 03:59:32', NULL, '1'),
('030210', '03', '02', '10', 'PAMPACHIRI', '2010-12-14 03:59:32', NULL, '1'),
('030211', '03', '02', '11', 'POMACOCHA', '2010-12-14 03:59:32', NULL, '1'),
('030212', '03', '02', '12', 'SAN ANTONIO DE CACHI', '2010-12-14 03:59:32', NULL, '1'),
('030213', '03', '02', '13', 'SAN JERONIMO', '2010-12-14 03:59:32', NULL, '1'),
('030214', '03', '02', '14', 'SAN MIGUEL DE CHACCRAMPA', '2010-12-14 03:59:32', NULL, '1'),
('030215', '03', '02', '15', 'SANTA MARIA DE CHICMO', '2010-12-14 03:59:32', NULL, '1'),
('030216', '03', '02', '16', 'TALAVERA', '2010-12-14 03:59:32', NULL, '1'),
('030217', '03', '02', '17', 'TUMAY HUARACA', '2010-12-14 03:59:32', NULL, '1'),
('030218', '03', '02', '18', 'TURPO', '2010-12-14 03:59:32', NULL, '1'),
('030219', '03', '02', '19', 'KAQUIABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('030300', '03', '03', '00', 'ANTABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('030301', '03', '03', '01', 'ANTABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('030302', '03', '03', '02', 'EL ORO', '2010-12-14 03:59:32', NULL, '1'),
('030303', '03', '03', '03', 'HUAQUIRCA', '2010-12-14 03:59:32', NULL, '1'),
('030304', '03', '03', '04', 'JUAN ESPINOZA MEDRANO', '2010-12-14 03:59:32', NULL, '1'),
('030305', '03', '03', '05', 'OROPESA', '2010-12-14 03:59:32', NULL, '1'),
('030306', '03', '03', '06', 'PACHACONAS', '2010-12-14 03:59:32', NULL, '1'),
('030307', '03', '03', '07', 'SABAINO', '2010-12-14 03:59:32', NULL, '1'),
('030400', '03', '04', '00', 'AYMARAES', '2010-12-14 03:59:32', NULL, '1'),
('030401', '03', '04', '01', 'CHALHUANCA', '2010-12-14 03:59:32', NULL, '1'),
('030402', '03', '04', '02', 'CAPAYA', '2010-12-14 03:59:32', NULL, '1'),
('030403', '03', '04', '03', 'CARAYBAMBA', '2010-12-14 03:59:32', NULL, '1'),
('030404', '03', '04', '04', 'CHAPIMARCA', '2010-12-14 03:59:32', NULL, '1'),
('030405', '03', '04', '05', 'COLCABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('030406', '03', '04', '06', 'COTARUSE', '2010-12-14 03:59:32', NULL, '1'),
('030407', '03', '04', '07', 'HUAYLLO', '2010-12-14 03:59:32', NULL, '1'),
('030408', '03', '04', '08', 'JUSTO APU SAHUARAURA', '2010-12-14 03:59:32', NULL, '1'),
('030409', '03', '04', '09', 'LUCRE', '2010-12-14 03:59:32', NULL, '1'),
('030410', '03', '04', '10', 'POCOHUANCA', '2010-12-14 03:59:32', NULL, '1'),
('030411', '03', '04', '11', 'SAN JUAN DE CHACÑA', '2010-12-14 03:59:32', NULL, '1'),
('030412', '03', '04', '12', 'SAÑAYCA', '2010-12-14 03:59:32', NULL, '1'),
('030413', '03', '04', '13', 'SORAYA', '2010-12-14 03:59:32', NULL, '1'),
('030414', '03', '04', '14', 'TAPAIRIHUA', '2010-12-14 03:59:32', NULL, '1'),
('030415', '03', '04', '15', 'TINTAY', '2010-12-14 03:59:32', NULL, '1'),
('030416', '03', '04', '16', 'TORAYA', '2010-12-14 03:59:32', NULL, '1'),
('030417', '03', '04', '17', 'YANACA', '2010-12-14 03:59:32', NULL, '1'),
('030500', '03', '05', '00', 'COTABAMBAS', '2010-12-14 03:59:32', NULL, '1'),
('030501', '03', '05', '01', 'TAMBOBAMBA', '2010-12-14 03:59:32', NULL, '1'),
('030502', '03', '05', '02', 'COTABAMBAS', '2010-12-14 03:59:32', NULL, '1'),
('030503', '03', '05', '03', 'COYLLURQUI', '2010-12-14 03:59:32', NULL, '1'),
('030504', '03', '05', '04', 'HAQUIRA', '2010-12-14 03:59:32', NULL, '1'),
('030505', '03', '05', '05', 'MARA', '2010-12-14 03:59:32', NULL, '1'),
('030506', '03', '05', '06', 'CHALLHUAHUACHO', '2010-12-14 03:59:32', NULL, '1'),
('030600', '03', '06', '00', 'CHINCHEROS', '2010-12-14 03:59:32', NULL, '1'),
('030601', '03', '06', '01', 'CHINCHEROS', '2010-12-14 03:59:32', NULL, '1'),
('030602', '03', '06', '02', 'ANCO_HUALLO', '2010-12-14 03:59:32', NULL, '1'),
('030603', '03', '06', '03', 'COCHARCAS', '2010-12-14 03:59:32', NULL, '1'),
('030604', '03', '06', '04', 'HUACCANA', '2010-12-14 03:59:32', NULL, '1'),
('030605', '03', '06', '05', 'OCOBAMBA', '2010-12-14 03:59:32', NULL, '1'),
('030606', '03', '06', '06', 'ONGOY', '2010-12-14 03:59:32', NULL, '1'),
('030607', '03', '06', '07', 'URANMARCA', '2010-12-14 03:59:32', NULL, '1'),
('030608', '03', '06', '08', 'RANRACANCHA', '2010-12-14 03:59:32', NULL, '1'),
('030700', '03', '07', '00', 'GRAU', '2010-12-14 03:59:32', NULL, '1'),
('030701', '03', '07', '01', 'CHUQUIBAMBILLA', '2010-12-14 03:59:32', NULL, '1'),
('030702', '03', '07', '02', 'CURPAHUASI', '2010-12-14 03:59:32', NULL, '1'),
('030703', '03', '07', '03', 'GAMARRA', '2010-12-14 03:59:32', NULL, '1'),
('030704', '03', '07', '04', 'HUAYLLATI', '2010-12-14 03:59:32', NULL, '1'),
('030705', '03', '07', '05', 'MAMARA', '2010-12-14 03:59:32', NULL, '1'),
('030706', '03', '07', '06', 'MICAELA BASTIDAS', '2010-12-14 03:59:32', NULL, '1'),
('030707', '03', '07', '07', 'PATAYPAMPA', '2010-12-14 03:59:32', NULL, '1'),
('030708', '03', '07', '08', 'PROGRESO', '2010-12-14 03:59:32', NULL, '1'),
('030709', '03', '07', '09', 'SAN ANTONIO', '2010-12-14 03:59:32', NULL, '1'),
('030710', '03', '07', '10', 'SANTA ROSA', '2010-12-14 03:59:32', NULL, '1'),
('030711', '03', '07', '11', 'TURPAY', '2010-12-14 03:59:32', NULL, '1'),
('030712', '03', '07', '12', 'VILCABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('030713', '03', '07', '13', 'VIRUNDO', '2010-12-14 03:59:32', NULL, '1'),
('030714', '03', '07', '14', 'CURASCO', '2010-12-14 03:59:32', NULL, '1'),
('040000', '04', '00', '00', 'AREQUIPA', '2010-12-14 03:59:32', NULL, '1'),
('040100', '04', '01', '00', 'AREQUIPA', '2010-12-14 03:59:32', NULL, '1'),
('040101', '04', '01', '01', 'AREQUIPA', '2010-12-14 03:59:32', NULL, '1'),
('040102', '04', '01', '02', 'ALTO SELVA ALEGRE', '2010-12-14 03:59:32', NULL, '1'),
('040103', '04', '01', '03', 'CAYMA', '2010-12-14 03:59:32', NULL, '1'),
('040104', '04', '01', '04', 'CERRO COLORADO', '2010-12-14 03:59:32', NULL, '1'),
('040105', '04', '01', '05', 'CHARACATO', '2010-12-14 03:59:32', NULL, '1'),
('040106', '04', '01', '06', 'CHIGUATA', '2010-12-14 03:59:32', NULL, '1'),
('040107', '04', '01', '07', 'JACOBO HUNTER', '2010-12-14 03:59:32', NULL, '1'),
('040108', '04', '01', '08', 'LA JOYA', '2010-12-14 03:59:32', NULL, '1'),
('040109', '04', '01', '09', 'MARIANO MELGAR', '2010-12-14 03:59:32', NULL, '1'),
('040110', '04', '01', '10', 'MIRAFLORES', '2010-12-14 03:59:32', NULL, '1'),
('040111', '04', '01', '11', 'MOLLEBAYA', '2010-12-14 03:59:32', NULL, '1'),
('040112', '04', '01', '12', 'PAUCARPATA', '2010-12-14 03:59:32', NULL, '1'),
('040113', '04', '01', '13', 'POCSI', '2010-12-14 03:59:32', NULL, '1'),
('040114', '04', '01', '14', 'POLOBAYA', '2010-12-14 03:59:32', NULL, '1'),
('040115', '04', '01', '15', 'QUEQUEÑA', '2010-12-14 03:59:32', NULL, '1'),
('040116', '04', '01', '16', 'SABANDIA', '2010-12-14 03:59:32', NULL, '1'),
('040117', '04', '01', '17', 'SACHACA', '2010-12-14 03:59:32', NULL, '1'),
('040118', '04', '01', '18', 'SAN JUAN DE SIGUAS', '2010-12-14 03:59:32', NULL, '1'),
('040119', '04', '01', '19', 'SAN JUAN DE TARUCANI', '2010-12-14 03:59:32', NULL, '1'),
('040120', '04', '01', '20', 'SANTA ISABEL DE SIGUAS', '2010-12-14 03:59:32', NULL, '1'),
('040121', '04', '01', '21', 'SANTA RITA DE SIGUAS', '2010-12-14 03:59:32', NULL, '1'),
('040122', '04', '01', '22', 'SOCABAYA', '2010-12-14 03:59:32', NULL, '1'),
('040123', '04', '01', '23', 'TIABAYA', '2010-12-14 03:59:32', NULL, '1'),
('040124', '04', '01', '24', 'UCHUMAYO', '2010-12-14 03:59:32', NULL, '1'),
('040125', '04', '01', '25', 'VITOR', '2010-12-14 03:59:32', NULL, '1'),
('040126', '04', '01', '26', 'YANAHUARA', '2010-12-14 03:59:32', NULL, '1'),
('040127', '04', '01', '27', 'YARABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('040128', '04', '01', '28', 'YURA', '2010-12-14 03:59:32', NULL, '1'),
('040129', '04', '01', '29', 'JOSE LUIS BUSTAMANTE Y RIVERO', '2010-12-14 03:59:32', NULL, '1'),
('040200', '04', '02', '00', 'CAMANA', '2010-12-14 03:59:32', NULL, '1'),
('040201', '04', '02', '01', 'CAMANA', '2010-12-14 03:59:32', NULL, '1'),
('040202', '04', '02', '02', 'JOSE MARIA QUIMPER', '2010-12-14 03:59:32', NULL, '1'),
('040203', '04', '02', '03', 'MARIANO NICOLAS VALCARCEL', '2010-12-14 03:59:32', NULL, '1'),
('040204', '04', '02', '04', 'MARISCAL CACERES', '2010-12-14 03:59:32', NULL, '1'),
('040205', '04', '02', '05', 'NICOLAS DE PIEROLA', '2010-12-14 03:59:32', NULL, '1'),
('040206', '04', '02', '06', 'OCOÑA', '2010-12-14 03:59:32', NULL, '1'),
('040207', '04', '02', '07', 'QUILCA', '2010-12-14 03:59:32', NULL, '1'),
('040208', '04', '02', '08', 'SAMUEL PASTOR', '2010-12-14 03:59:32', NULL, '1'),
('040300', '04', '03', '00', 'CARAVELI', '2010-12-14 03:59:32', NULL, '1'),
('040301', '04', '03', '01', 'CARAVELI', '2010-12-14 03:59:32', NULL, '1'),
('040302', '04', '03', '02', 'ACARI', '2010-12-14 03:59:32', NULL, '1'),
('040303', '04', '03', '03', 'ATICO', '2010-12-14 03:59:32', NULL, '1'),
('040304', '04', '03', '04', 'ATIQUIPA', '2010-12-14 03:59:32', NULL, '1'),
('040305', '04', '03', '05', 'BELLA UNION', '2010-12-14 03:59:32', NULL, '1'),
('040306', '04', '03', '06', 'CAHUACHO', '2010-12-14 03:59:32', NULL, '1'),
('040307', '04', '03', '07', 'CHALA', '2010-12-14 03:59:32', NULL, '1'),
('040308', '04', '03', '08', 'CHAPARRA', '2010-12-14 03:59:32', NULL, '1'),
('040309', '04', '03', '09', 'HUANUHUANU', '2010-12-14 03:59:32', NULL, '1'),
('040310', '04', '03', '10', 'JAQUI', '2010-12-14 03:59:32', NULL, '1'),
('040311', '04', '03', '11', 'LOMAS', '2010-12-14 03:59:32', NULL, '1'),
('040312', '04', '03', '12', 'QUICACHA', '2010-12-14 03:59:32', NULL, '1'),
('040313', '04', '03', '13', 'YAUCA', '2010-12-14 03:59:32', NULL, '1'),
('040400', '04', '04', '00', 'CASTILLA', '2010-12-14 03:59:32', NULL, '1'),
('040401', '04', '04', '01', 'APLAO', '2010-12-14 03:59:32', NULL, '1'),
('040402', '04', '04', '02', 'ANDAGUA', '2010-12-14 03:59:32', NULL, '1'),
('040403', '04', '04', '03', 'AYO', '2010-12-14 03:59:32', NULL, '1'),
('040404', '04', '04', '04', 'CHACHAS', '2010-12-14 03:59:32', NULL, '1'),
('040405', '04', '04', '05', 'CHILCAYMARCA', '2010-12-14 03:59:32', NULL, '1'),
('040406', '04', '04', '06', 'CHOCO', '2010-12-14 03:59:32', NULL, '1'),
('040407', '04', '04', '07', 'HUANCARQUI', '2010-12-14 03:59:32', NULL, '1'),
('040408', '04', '04', '08', 'MACHAGUAY', '2010-12-14 03:59:32', NULL, '1'),
('040409', '04', '04', '09', 'ORCOPAMPA', '2010-12-14 03:59:32', NULL, '1'),
('040410', '04', '04', '10', 'PAMPACOLCA', '2010-12-14 03:59:32', NULL, '1'),
('040411', '04', '04', '11', 'TIPAN', '2010-12-14 03:59:32', NULL, '1'),
('040412', '04', '04', '12', 'UÑON', '2010-12-14 03:59:32', NULL, '1'),
('040413', '04', '04', '13', 'URACA', '2010-12-14 03:59:32', NULL, '1'),
('040414', '04', '04', '14', 'VIRACO', '2010-12-14 03:59:32', NULL, '1'),
('040500', '04', '05', '00', 'CAYLLOMA', '2010-12-14 03:59:32', NULL, '1'),
('040501', '04', '05', '01', 'CHIVAY', '2010-12-14 03:59:32', NULL, '1'),
('040502', '04', '05', '02', 'ACHOMA', '2010-12-14 03:59:32', NULL, '1'),
('040503', '04', '05', '03', 'CABANACONDE', '2010-12-14 03:59:32', NULL, '1'),
('040504', '04', '05', '04', 'CALLALLI', '2010-12-14 03:59:32', NULL, '1'),
('040505', '04', '05', '05', 'CAYLLOMA', '2010-12-14 03:59:32', NULL, '1'),
('040506', '04', '05', '06', 'COPORAQUE', '2010-12-14 03:59:32', NULL, '1'),
('040507', '04', '05', '07', 'HUAMBO', '2010-12-14 03:59:32', NULL, '1'),
('040508', '04', '05', '08', 'HUANCA', '2010-12-14 03:59:32', NULL, '1'),
('040509', '04', '05', '09', 'ICHUPAMPA', '2010-12-14 03:59:32', NULL, '1'),
('040510', '04', '05', '10', 'LARI', '2010-12-14 03:59:32', NULL, '1'),
('040511', '04', '05', '11', 'LLUTA', '2010-12-14 03:59:32', NULL, '1'),
('040512', '04', '05', '12', 'MACA', '2010-12-14 03:59:32', NULL, '1'),
('040513', '04', '05', '13', 'MADRIGAL', '2010-12-14 03:59:32', NULL, '1'),
('040514', '04', '05', '14', 'SAN ANTONIO DE CHUCA', '2010-12-14 03:59:32', NULL, '1'),
('040515', '04', '05', '15', 'SIBAYO', '2010-12-14 03:59:32', NULL, '1'),
('040516', '04', '05', '16', 'TAPAY', '2010-12-14 03:59:32', NULL, '1'),
('040517', '04', '05', '17', 'TISCO', '2010-12-14 03:59:32', NULL, '1'),
('040518', '04', '05', '18', 'TUTI', '2010-12-14 03:59:32', NULL, '1'),
('040519', '04', '05', '19', 'YANQUE', '2010-12-14 03:59:32', NULL, '1'),
('040520', '04', '05', '20', 'MAJES', '2010-12-14 03:59:32', NULL, '1'),
('040600', '04', '06', '00', 'CONDESUYOS', '2010-12-14 03:59:32', NULL, '1'),
('040601', '04', '06', '01', 'CHUQUIBAMBA', '2010-12-14 03:59:32', NULL, '1'),
('040602', '04', '06', '02', 'ANDARAY', '2010-12-14 03:59:32', NULL, '1'),
('040603', '04', '06', '03', 'CAYARANI', '2010-12-14 03:59:32', NULL, '1'),
('040604', '04', '06', '04', 'CHICHAS', '2010-12-14 03:59:32', NULL, '1'),
('040605', '04', '06', '05', 'IRAY', '2010-12-14 03:59:32', NULL, '1'),
('040606', '04', '06', '06', 'RIO GRANDE', '2010-12-14 03:59:32', NULL, '1'),
('040607', '04', '06', '07', 'SALAMANCA', '2010-12-14 03:59:32', NULL, '1'),
('040608', '04', '06', '08', 'YANAQUIHUA', '2010-12-14 03:59:32', NULL, '1'),
('040700', '04', '07', '00', 'ISLAY', '2010-12-14 03:59:32', NULL, '1'),
('040701', '04', '07', '01', 'MOLLENDO', '2010-12-14 03:59:32', NULL, '1'),
('040702', '04', '07', '02', 'COCACHACRA', '2010-12-14 03:59:32', NULL, '1'),
('040703', '04', '07', '03', 'DEAN VALDIVIA', '2010-12-14 03:59:32', NULL, '1'),
('040704', '04', '07', '04', 'ISLAY', '2010-12-14 03:59:32', NULL, '1'),
('040705', '04', '07', '05', 'MEJIA', '2010-12-14 03:59:32', NULL, '1'),
('040706', '04', '07', '06', 'PUNTA DE BOMBON', '2010-12-14 03:59:32', NULL, '1'),
('040800', '04', '08', '00', 'LA UNION', '2010-12-14 03:59:32', NULL, '1'),
('040801', '04', '08', '01', 'COTAHUASI', '2010-12-14 03:59:32', NULL, '1'),
('040802', '04', '08', '02', 'ALCA', '2010-12-14 03:59:32', NULL, '1'),
('040803', '04', '08', '03', 'CHARCANA', '2010-12-14 03:59:32', NULL, '1'),
('040804', '04', '08', '04', 'HUAYNACOTAS', '2010-12-14 03:59:32', NULL, '1'),
('040805', '04', '08', '05', 'PAMPAMARCA', '2010-12-14 03:59:32', NULL, '1'),
('040806', '04', '08', '06', 'PUYCA', '2010-12-14 03:59:32', NULL, '1'),
('040807', '04', '08', '07', 'QUECHUALLA', '2010-12-14 03:59:32', NULL, '1'),
('040808', '04', '08', '08', 'SAYLA', '2010-12-14 03:59:32', NULL, '1'),
('040809', '04', '08', '09', 'TAURIA', '2010-12-14 03:59:32', NULL, '1'),
('040810', '04', '08', '10', 'TOMEPAMPA', '2010-12-14 03:59:32', NULL, '1'),
('040811', '04', '08', '11', 'TORO', '2010-12-14 03:59:32', NULL, '1'),
('050000', '05', '00', '00', 'AYACUCHO', '2010-12-14 03:59:32', NULL, '1'),
('050100', '05', '01', '00', 'HUAMANGA', '2010-12-14 03:59:32', NULL, '1'),
('050101', '05', '01', '01', 'AYACUCHO', '2010-12-14 03:59:32', NULL, '1'),
('050102', '05', '01', '02', 'ACOCRO', '2010-12-14 03:59:32', NULL, '1'),
('050103', '05', '01', '03', 'ACOS VINCHOS', '2010-12-14 03:59:32', NULL, '1'),
('050104', '05', '01', '04', 'CARMEN ALTO', '2010-12-14 03:59:32', NULL, '1'),
('050105', '05', '01', '05', 'CHIARA', '2010-12-14 03:59:32', NULL, '1'),
('050106', '05', '01', '06', 'OCROS', '2010-12-14 03:59:32', NULL, '1'),
('050107', '05', '01', '07', 'PACAYCASA', '2010-12-14 03:59:32', NULL, '1'),
('050108', '05', '01', '08', 'QUINUA', '2010-12-14 03:59:32', NULL, '1'),
('050109', '05', '01', '09', 'SAN JOSE DE TICLLAS', '2010-12-14 03:59:32', NULL, '1'),
('050110', '05', '01', '10', 'SAN JUAN BAUTISTA', '2010-12-14 03:59:32', NULL, '1'),
('050111', '05', '01', '11', 'SANTIAGO DE PISCHA', '2010-12-14 03:59:32', NULL, '1'),
('050112', '05', '01', '12', 'SOCOS', '2010-12-14 03:59:32', NULL, '1'),
('050113', '05', '01', '13', 'TAMBILLO', '2010-12-14 03:59:32', NULL, '1'),
('050114', '05', '01', '14', 'VINCHOS', '2010-12-14 03:59:32', NULL, '1'),
('050115', '05', '01', '15', 'JESUS NAZARENO', '2010-12-14 03:59:32', NULL, '1'),
('050200', '05', '02', '00', 'CANGALLO', '2010-12-14 03:59:32', NULL, '1'),
('050201', '05', '02', '01', 'CANGALLO', '2010-12-14 03:59:32', NULL, '1'),
('050202', '05', '02', '02', 'CHUSCHI', '2010-12-14 03:59:32', NULL, '1'),
('050203', '05', '02', '03', 'LOS MOROCHUCOS', '2010-12-14 03:59:32', NULL, '1'),
('050204', '05', '02', '04', 'MARIA PARADO DE BELLIDO', '2010-12-14 03:59:32', NULL, '1'),
('050205', '05', '02', '05', 'PARAS', '2010-12-14 03:59:32', NULL, '1'),
('050206', '05', '02', '06', 'TOTOS', '2010-12-14 03:59:32', NULL, '1'),
('050300', '05', '03', '00', 'HUANCA SANCOS', '2010-12-14 03:59:32', NULL, '1'),
('050301', '05', '03', '01', 'SANCOS', '2010-12-14 03:59:32', NULL, '1'),
('050302', '05', '03', '02', 'CARAPO', '2010-12-14 03:59:32', NULL, '1'),
('050303', '05', '03', '03', 'SACSAMARCA', '2010-12-14 03:59:32', NULL, '1'),
('050304', '05', '03', '04', 'SANTIAGO DE LUCANAMARCA', '2010-12-14 03:59:32', NULL, '1'),
('050400', '05', '04', '00', 'HUANTA', '2010-12-14 03:59:32', NULL, '1'),
('050401', '05', '04', '01', 'HUANTA', '2010-12-14 03:59:32', NULL, '1'),
('050402', '05', '04', '02', 'AYAHUANCO', '2010-12-14 03:59:32', NULL, '1'),
('050403', '05', '04', '03', 'HUAMANGUILLA', '2010-12-14 03:59:32', NULL, '1'),
('050404', '05', '04', '04', 'IGUAIN', '2010-12-14 03:59:32', NULL, '1'),
('050405', '05', '04', '05', 'LURICOCHA', '2010-12-14 03:59:32', NULL, '1'),
('050406', '05', '04', '06', 'SANTILLANA', '2010-12-14 03:59:32', NULL, '1'),
('050407', '05', '04', '07', 'SIVIA', '2010-12-14 03:59:32', NULL, '1'),
('050408', '05', '04', '08', 'LLOCHEGUA', '2010-12-14 03:59:32', NULL, '1'),
('050500', '05', '05', '00', 'LA MAR', '2010-12-14 03:59:32', NULL, '1'),
('050501', '05', '05', '01', 'SAN MIGUEL', '2010-12-14 03:59:32', NULL, '1'),
('050502', '05', '05', '02', 'ANCO', '2010-12-14 03:59:32', NULL, '1'),
('050503', '05', '05', '03', 'AYNA', '2010-12-14 03:59:32', NULL, '1'),
('050504', '05', '05', '04', 'CHILCAS', '2010-12-14 03:59:32', NULL, '1'),
('050505', '05', '05', '05', 'CHUNGUI', '2010-12-14 03:59:32', NULL, '1'),
('050506', '05', '05', '06', 'LUIS CARRANZA', '2010-12-14 03:59:32', NULL, '1'),
('050507', '05', '05', '07', 'SANTA ROSA', '2010-12-14 03:59:32', NULL, '1'),
('050508', '05', '05', '08', 'TAMBO', '2010-12-14 03:59:32', NULL, '1'),
('050600', '05', '06', '00', 'LUCANAS', '2010-12-14 03:59:32', NULL, '1'),
('050601', '05', '06', '01', 'PUQUIO', '2010-12-14 03:59:32', NULL, '1'),
('050602', '05', '06', '02', 'AUCARA', '2010-12-14 03:59:32', NULL, '1'),
('050603', '05', '06', '03', 'CABANA', '2010-12-14 03:59:32', NULL, '1'),
('050604', '05', '06', '04', 'CARMEN SALCEDO', '2010-12-14 03:59:32', NULL, '1'),
('050605', '05', '06', '05', 'CHAVIÑA', '2010-12-14 03:59:32', NULL, '1'),
('050606', '05', '06', '06', 'CHIPAO', '2010-12-14 03:59:32', NULL, '1'),
('050607', '05', '06', '07', 'HUAC-HUAS', '2010-12-14 03:59:32', NULL, '1'),
('050608', '05', '06', '08', 'LARAMATE', '2010-12-14 03:59:32', NULL, '1'),
('050609', '05', '06', '09', 'LEONCIO PRADO', '2010-12-14 03:59:32', NULL, '1'),
('050610', '05', '06', '10', 'LLAUTA', '2010-12-14 03:59:32', NULL, '1'),
('050611', '05', '06', '11', 'LUCANAS', '2010-12-14 03:59:32', NULL, '1'),
('050612', '05', '06', '12', 'OCAÑA', '2010-12-14 03:59:32', NULL, '1'),
('050613', '05', '06', '13', 'OTOCA', '2010-12-14 03:59:32', NULL, '1'),
('050614', '05', '06', '14', 'SAISA', '2010-12-14 03:59:32', NULL, '1'),
('050615', '05', '06', '15', 'SAN CRISTOBAL', '2010-12-14 03:59:32', NULL, '1'),
('050616', '05', '06', '16', 'SAN JUAN', '2010-12-14 03:59:32', NULL, '1'),
('050617', '05', '06', '17', 'SAN PEDRO', '2010-12-14 03:59:32', NULL, '1'),
('050618', '05', '06', '18', 'SAN PEDRO DE PALCO', '2010-12-14 03:59:32', NULL, '1'),
('050619', '05', '06', '19', 'SANCOS', '2010-12-14 03:59:32', NULL, '1'),
('050620', '05', '06', '20', 'SANTA ANA DE HUAYCAHUACHO', '2010-12-14 03:59:32', NULL, '1'),
('050621', '05', '06', '21', 'SANTA LUCIA', '2010-12-14 03:59:32', NULL, '1'),
('050700', '05', '07', '00', 'PARINACOCHAS', '2010-12-14 03:59:32', NULL, '1'),
('050701', '05', '07', '01', 'CORACORA', '2010-12-14 03:59:32', NULL, '1'),
('050702', '05', '07', '02', 'CHUMPI', '2010-12-14 03:59:32', NULL, '1'),
('050703', '05', '07', '03', 'CORONEL CASTAÑEDA', '2010-12-14 03:59:32', NULL, '1'),
('050704', '05', '07', '04', 'PACAPAUSA', '2010-12-14 03:59:32', NULL, '1'),
('050705', '05', '07', '05', 'PULLO', '2010-12-14 03:59:32', NULL, '1'),
('050706', '05', '07', '06', 'PUYUSCA', '2010-12-14 03:59:32', NULL, '1'),
('050707', '05', '07', '07', 'SAN FRANCISCO DE RAVACAYCO', '2010-12-14 03:59:32', NULL, '1'),
('050708', '05', '07', '08', 'UPAHUACHO', '2010-12-14 03:59:32', NULL, '1'),
('050800', '05', '08', '00', 'PAUCAR DEL SARA SARA', '2010-12-14 03:59:32', NULL, '1'),
('050801', '05', '08', '01', 'PAUSA', '2010-12-14 03:59:32', NULL, '1'),
('050802', '05', '08', '02', 'COLTA', '2010-12-14 03:59:32', NULL, '1'),
('050803', '05', '08', '03', 'CORCULLA', '2010-12-14 03:59:32', NULL, '1'),
('050804', '05', '08', '04', 'LAMPA', '2010-12-14 03:59:32', NULL, '1'),
('050805', '05', '08', '05', 'MARCABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('050806', '05', '08', '06', 'OYOLO', '2010-12-14 03:59:32', NULL, '1'),
('050807', '05', '08', '07', 'PARARCA', '2010-12-14 03:59:32', NULL, '1'),
('050808', '05', '08', '08', 'SAN JAVIER DE ALPABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('050809', '05', '08', '09', 'SAN JOSE DE USHUA', '2010-12-14 03:59:32', NULL, '1'),
('050810', '05', '08', '10', 'SARA SARA', '2010-12-14 03:59:32', NULL, '1'),
('050900', '05', '09', '00', 'SUCRE', '2010-12-14 03:59:32', NULL, '1'),
('050901', '05', '09', '01', 'QUEROBAMBA', '2010-12-14 03:59:32', NULL, '1'),
('050902', '05', '09', '02', 'BELEN', '2010-12-14 03:59:32', NULL, '1'),
('050903', '05', '09', '03', 'CHALCOS', '2010-12-14 03:59:32', NULL, '1'),
('050904', '05', '09', '04', 'CHILCAYOC', '2010-12-14 03:59:32', NULL, '1'),
('050905', '05', '09', '05', 'HUACAÑA', '2010-12-14 03:59:32', NULL, '1'),
('050906', '05', '09', '06', 'MORCOLLA', '2010-12-14 03:59:32', NULL, '1'),
('050907', '05', '09', '07', 'PAICO', '2010-12-14 03:59:32', NULL, '1'),
('050908', '05', '09', '08', 'SAN PEDRO DE LARCAY', '2010-12-14 03:59:32', NULL, '1'),
('050909', '05', '09', '09', 'SAN SALVADOR DE QUIJE', '2010-12-14 03:59:32', NULL, '1'),
('050910', '05', '09', '10', 'SANTIAGO DE PAUCARAY', '2010-12-14 03:59:32', NULL, '1'),
('050911', '05', '09', '11', 'SORAS', '2010-12-14 03:59:32', NULL, '1'),
('051000', '05', '10', '00', 'VICTOR FAJARDO', '2010-12-14 03:59:32', NULL, '1'),
('051001', '05', '10', '01', 'HUANCAPI', '2010-12-14 03:59:32', NULL, '1'),
('051002', '05', '10', '02', 'ALCAMENCA', '2010-12-14 03:59:32', NULL, '1'),
('051003', '05', '10', '03', 'APONGO', '2010-12-14 03:59:32', NULL, '1'),
('051004', '05', '10', '04', 'ASQUIPATA', '2010-12-14 03:59:32', NULL, '1'),
('051005', '05', '10', '05', 'CANARIA', '2010-12-14 03:59:32', NULL, '1'),
('051006', '05', '10', '06', 'CAYARA', '2010-12-14 03:59:32', NULL, '1'),
('051007', '05', '10', '07', 'COLCA', '2010-12-14 03:59:32', NULL, '1'),
('051008', '05', '10', '08', 'HUAMANQUIQUIA', '2010-12-14 03:59:32', NULL, '1'),
('051009', '05', '10', '09', 'HUANCARAYLLA', '2010-12-14 03:59:32', NULL, '1'),
('051010', '05', '10', '10', 'HUAYA', '2010-12-14 03:59:32', NULL, '1'),
('051011', '05', '10', '11', 'SARHUA', '2010-12-14 03:59:32', NULL, '1'),
('051012', '05', '10', '12', 'VILCANCHOS', '2010-12-14 03:59:32', NULL, '1'),
('051100', '05', '11', '00', 'VILCAS HUAMAN', '2010-12-14 03:59:32', NULL, '1'),
('051101', '05', '11', '01', 'VILCAS HUAMAN', '2010-12-14 03:59:32', NULL, '1'),
('051102', '05', '11', '02', 'ACCOMARCA', '2010-12-14 03:59:32', NULL, '1'),
('051103', '05', '11', '03', 'CARHUANCA', '2010-12-14 03:59:32', NULL, '1'),
('051104', '05', '11', '04', 'CONCEPCION', '2010-12-14 03:59:32', NULL, '1'),
('051105', '05', '11', '05', 'HUAMBALPA', '2010-12-14 03:59:32', NULL, '1'),
('051106', '05', '11', '06', 'INDEPENDENCIA', '2010-12-14 03:59:32', NULL, '1'),
('051107', '05', '11', '07', 'SAURAMA', '2010-12-14 03:59:32', NULL, '1'),
('051108', '05', '11', '08', 'VISCHONGO', '2010-12-14 03:59:32', NULL, '1'),
('060000', '06', '00', '00', 'CAJAMARCA', '2010-12-14 03:59:32', NULL, '1'),
('060100', '06', '01', '00', 'CAJAMARCA', '2010-12-14 03:59:32', NULL, '1'),
('060101', '06', '01', '01', 'CAJAMARCA', '2010-12-14 03:59:32', NULL, '1'),
('060102', '06', '01', '02', 'ASUNCION', '2010-12-14 03:59:32', NULL, '1'),
('060103', '06', '01', '03', 'CHETILLA', '2010-12-14 03:59:32', NULL, '1'),
('060104', '06', '01', '04', 'COSPAN', '2010-12-14 03:59:32', NULL, '1'),
('060105', '06', '01', '05', 'ENCAÑADA', '2010-12-14 03:59:32', NULL, '1'),
('060106', '06', '01', '06', 'JESUS', '2010-12-14 03:59:32', NULL, '1'),
('060107', '06', '01', '07', 'LLACANORA', '2010-12-14 03:59:32', NULL, '1'),
('060108', '06', '01', '08', 'LOS BAÑOS DEL INCA', '2010-12-14 03:59:32', NULL, '1'),
('060109', '06', '01', '09', 'MAGDALENA', '2010-12-14 03:59:32', NULL, '1'),
('060110', '06', '01', '10', 'MATARA', '2010-12-14 03:59:32', NULL, '1'),
('060111', '06', '01', '11', 'NAMORA', '2010-12-14 03:59:32', NULL, '1'),
('060112', '06', '01', '12', 'SAN JUAN', '2010-12-14 03:59:32', NULL, '1'),
('060200', '06', '02', '00', 'CAJABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('060201', '06', '02', '01', 'CAJABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('060202', '06', '02', '02', 'CACHACHI', '2010-12-14 03:59:32', NULL, '1'),
('060203', '06', '02', '03', 'CONDEBAMBA', '2010-12-14 03:59:32', NULL, '1'),
('060204', '06', '02', '04', 'SITACOCHA', '2010-12-14 03:59:32', NULL, '1'),
('060300', '06', '03', '00', 'CELENDIN', '2010-12-14 03:59:32', NULL, '1'),
('060301', '06', '03', '01', 'CELENDIN', '2010-12-14 03:59:32', NULL, '1'),
('060302', '06', '03', '02', 'CHUMUCH', '2010-12-14 03:59:32', NULL, '1'),
('060303', '06', '03', '03', 'CORTEGANA', '2010-12-14 03:59:32', NULL, '1'),
('060304', '06', '03', '04', 'HUASMIN', '2010-12-14 03:59:32', NULL, '1'),
('060305', '06', '03', '05', 'JORGE CHAVEZ', '2010-12-14 03:59:32', NULL, '1'),
('060306', '06', '03', '06', 'JOSE GALVEZ', '2010-12-14 03:59:32', NULL, '1'),
('060307', '06', '03', '07', 'MIGUEL IGLESIAS', '2010-12-14 03:59:32', NULL, '1'),
('060308', '06', '03', '08', 'OXAMARCA', '2010-12-14 03:59:32', NULL, '1'),
('060309', '06', '03', '09', 'SOROCHUCO', '2010-12-14 03:59:32', NULL, '1'),
('060310', '06', '03', '10', 'SUCRE', '2010-12-14 03:59:32', NULL, '1'),
('060311', '06', '03', '11', 'UTCO', '2010-12-14 03:59:32', NULL, '1'),
('060312', '06', '03', '12', 'LA LIBERTAD DE PALLAN', '2010-12-14 03:59:32', NULL, '1'),
('060400', '06', '04', '00', 'CHOTA', '2010-12-14 03:59:32', NULL, '1'),
('060401', '06', '04', '01', 'CHOTA', '2010-12-14 03:59:32', NULL, '1'),
('060402', '06', '04', '02', 'ANGUIA', '2010-12-14 03:59:32', NULL, '1'),
('060403', '06', '04', '03', 'CHADIN', '2010-12-14 03:59:32', NULL, '1'),
('060404', '06', '04', '04', 'CHIGUIRIP', '2010-12-14 03:59:32', NULL, '1'),
('060405', '06', '04', '05', 'CHIMBAN', '2010-12-14 03:59:32', NULL, '1'),
('060406', '06', '04', '06', 'CHOROPAMPA', '2010-12-14 03:59:32', NULL, '1'),
('060407', '06', '04', '07', 'COCHABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('060408', '06', '04', '08', 'CONCHAN', '2010-12-14 03:59:32', NULL, '1'),
('060409', '06', '04', '09', 'HUAMBOS', '2010-12-14 03:59:32', NULL, '1'),
('060410', '06', '04', '10', 'LAJAS', '2010-12-14 03:59:32', NULL, '1'),
('060411', '06', '04', '11', 'LLAMA', '2010-12-14 03:59:32', NULL, '1'),
('060412', '06', '04', '12', 'MIRACOSTA', '2010-12-14 03:59:32', NULL, '1'),
('060413', '06', '04', '13', 'PACCHA', '2010-12-14 03:59:32', NULL, '1'),
('060414', '06', '04', '14', 'PION', '2010-12-14 03:59:32', NULL, '1'),
('060415', '06', '04', '15', 'QUEROCOTO', '2010-12-14 03:59:32', NULL, '1'),
('060416', '06', '04', '16', 'SAN JUAN DE LICUPIS', '2010-12-14 03:59:32', NULL, '1'),
('060417', '06', '04', '17', 'TACABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('060418', '06', '04', '18', 'TOCMOCHE', '2010-12-14 03:59:32', NULL, '1'),
('060419', '06', '04', '19', 'CHALAMARCA', '2010-12-14 03:59:32', NULL, '1'),
('060500', '06', '05', '00', 'CONTUMAZA', '2010-12-14 03:59:32', NULL, '1'),
('060501', '06', '05', '01', 'CONTUMAZA', '2010-12-14 03:59:32', NULL, '1'),
('060502', '06', '05', '02', 'CHILETE', '2010-12-14 03:59:32', NULL, '1');
INSERT INTO `ubigeo` (`UBIGP_Codigo`, `UBIGC_CodDpto`, `UBIGC_CodProv`, `UBIGC_CodDist`, `UBIGC_Descripcion`, `UBIGC_FechaRegistro`, `UBIGC_FechaModificacion`, `UBIGC_FlagEstado`) VALUES
('060503', '06', '05', '03', 'CUPISNIQUE', '2010-12-14 03:59:32', NULL, '1'),
('060504', '06', '05', '04', 'GUZMANGO', '2010-12-14 03:59:32', NULL, '1'),
('060505', '06', '05', '05', 'SAN BENITO', '2010-12-14 03:59:32', NULL, '1'),
('060506', '06', '05', '06', 'SANTA CRUZ DE TOLED', '2010-12-14 03:59:32', NULL, '1'),
('060507', '06', '05', '07', 'TANTARICA', '2010-12-14 03:59:32', NULL, '1'),
('060508', '06', '05', '08', 'YONAN', '2010-12-14 03:59:32', NULL, '1'),
('060600', '06', '06', '00', 'CUTERVO', '2010-12-14 03:59:32', NULL, '1'),
('060601', '06', '06', '01', 'CUTERVO', '2010-12-14 03:59:32', NULL, '1'),
('060602', '06', '06', '02', 'CALLAYUC', '2010-12-14 03:59:32', NULL, '1'),
('060603', '06', '06', '03', 'CHOROS', '2010-12-14 03:59:32', NULL, '1'),
('060604', '06', '06', '04', 'CUJILLO', '2010-12-14 03:59:32', NULL, '1'),
('060605', '06', '06', '05', 'LA RAMADA', '2010-12-14 03:59:32', NULL, '1'),
('060606', '06', '06', '06', 'PIMPINGOS', '2010-12-14 03:59:32', NULL, '1'),
('060607', '06', '06', '07', 'QUEROCOTILLO', '2010-12-14 03:59:32', NULL, '1'),
('060608', '06', '06', '08', 'SAN ANDRES DE CUTERVO', '2010-12-14 03:59:32', NULL, '1'),
('060609', '06', '06', '09', 'SAN JUAN DE CUTERVO', '2010-12-14 03:59:32', NULL, '1'),
('060610', '06', '06', '10', 'SAN LUIS DE LUCMA', '2010-12-14 03:59:32', NULL, '1'),
('060611', '06', '06', '11', 'SANTA CRUZ', '2010-12-14 03:59:32', NULL, '1'),
('060612', '06', '06', '12', 'SANTO DOMINGO DE LA CAPILLA', '2010-12-14 03:59:32', NULL, '1'),
('060613', '06', '06', '13', 'SANTO TOMAS', '2010-12-14 03:59:32', NULL, '1'),
('060614', '06', '06', '14', 'SOCOTA', '2010-12-14 03:59:32', NULL, '1'),
('060615', '06', '06', '15', 'TORIBIO CASANOVA', '2010-12-14 03:59:32', NULL, '1'),
('060700', '06', '07', '00', 'HUALGAYOC', '2010-12-14 03:59:32', NULL, '1'),
('060701', '06', '07', '01', 'BAMBAMARCA', '2010-12-14 03:59:32', NULL, '1'),
('060702', '06', '07', '02', 'CHUGUR', '2010-12-14 03:59:32', NULL, '1'),
('060703', '06', '07', '03', 'HUALGAYOC', '2010-12-14 03:59:32', NULL, '1'),
('060800', '06', '08', '00', 'JAEN', '2010-12-14 03:59:32', NULL, '1'),
('060801', '06', '08', '01', 'JAEN', '2010-12-14 03:59:32', NULL, '1'),
('060802', '06', '08', '02', 'BELLAVISTA', '2010-12-14 03:59:32', NULL, '1'),
('060803', '06', '08', '03', 'CHONTALI', '2010-12-14 03:59:32', NULL, '1'),
('060804', '06', '08', '04', 'COLASAY', '2010-12-14 03:59:32', NULL, '1'),
('060805', '06', '08', '05', 'HUABAL', '2010-12-14 03:59:32', NULL, '1'),
('060806', '06', '08', '06', 'LAS PIRIAS', '2010-12-14 03:59:32', NULL, '1'),
('060807', '06', '08', '07', 'POMAHUACA', '2010-12-14 03:59:32', NULL, '1'),
('060808', '06', '08', '08', 'PUCARA', '2010-12-14 03:59:32', NULL, '1'),
('060809', '06', '08', '09', 'SALLIQUE', '2010-12-14 03:59:32', NULL, '1'),
('060810', '06', '08', '10', 'SAN FELIPE', '2010-12-14 03:59:32', NULL, '1'),
('060811', '06', '08', '11', 'SAN JOSE DEL ALTO', '2010-12-14 03:59:32', NULL, '1'),
('060812', '06', '08', '12', 'SANTA ROSA', '2010-12-14 03:59:32', NULL, '1'),
('060900', '06', '09', '00', 'SAN IGNACIO', '2010-12-14 03:59:32', NULL, '1'),
('060901', '06', '09', '01', 'SAN IGNACIO', '2010-12-14 03:59:32', NULL, '1'),
('060902', '06', '09', '02', 'CHIRINOS', '2010-12-14 03:59:32', NULL, '1'),
('060903', '06', '09', '03', 'HUARANGO', '2010-12-14 03:59:32', NULL, '1'),
('060904', '06', '09', '04', 'LA COIPA', '2010-12-14 03:59:32', NULL, '1'),
('060905', '06', '09', '05', 'NAMBALLE', '2010-12-14 03:59:32', NULL, '1'),
('060906', '06', '09', '06', 'SAN JOSE DE LOURDES', '2010-12-14 03:59:32', NULL, '1'),
('060907', '06', '09', '07', 'TABACONAS', '2010-12-14 03:59:32', NULL, '1'),
('061000', '06', '10', '00', 'SAN MARCOS', '2010-12-14 03:59:32', NULL, '1'),
('061001', '06', '10', '01', 'PEDRO GALVEZ', '2010-12-14 03:59:32', NULL, '1'),
('061002', '06', '10', '02', 'CHANCAY', '2010-12-14 03:59:32', NULL, '1'),
('061003', '06', '10', '03', 'EDUARDO VILLANUEVA', '2010-12-14 03:59:32', NULL, '1'),
('061004', '06', '10', '04', 'GREGORIO PITA', '2010-12-14 03:59:32', NULL, '1'),
('061005', '06', '10', '05', 'ICHOCAN', '2010-12-14 03:59:32', NULL, '1'),
('061006', '06', '10', '06', 'JOSE MANUEL QUIROZ', '2010-12-14 03:59:32', NULL, '1'),
('061007', '06', '10', '07', 'JOSE SABOGAL', '2010-12-14 03:59:32', NULL, '1'),
('061100', '06', '11', '00', 'SAN MIGUEL', '2010-12-14 03:59:32', NULL, '1'),
('061101', '06', '11', '01', 'SAN MIGUEL', '2010-12-14 03:59:32', NULL, '1'),
('061102', '06', '11', '02', 'BOLIVAR', '2010-12-14 03:59:32', NULL, '1'),
('061103', '06', '11', '03', 'CALQUIS', '2010-12-14 03:59:32', NULL, '1'),
('061104', '06', '11', '04', 'CATILLUC', '2010-12-14 03:59:32', NULL, '1'),
('061105', '06', '11', '05', 'EL PRADO', '2010-12-14 03:59:32', NULL, '1'),
('061106', '06', '11', '06', 'LA FLORIDA', '2010-12-14 03:59:32', NULL, '1'),
('061107', '06', '11', '07', 'LLAPA', '2010-12-14 03:59:32', NULL, '1'),
('061108', '06', '11', '08', 'NANCHOC', '2010-12-14 03:59:32', NULL, '1'),
('061109', '06', '11', '09', 'NIEPOS', '2010-12-14 03:59:32', NULL, '1'),
('061110', '06', '11', '10', 'SAN GREGORIO', '2010-12-14 03:59:32', NULL, '1'),
('061111', '06', '11', '11', 'SAN SILVESTRE DE COCHAN', '2010-12-14 03:59:32', NULL, '1'),
('061112', '06', '11', '12', 'TONGOD', '2010-12-14 03:59:32', NULL, '1'),
('061113', '06', '11', '13', 'UNION AGUA BLANCA', '2010-12-14 03:59:32', NULL, '1'),
('061200', '06', '12', '00', 'SAN PABLO', '2010-12-14 03:59:32', NULL, '1'),
('061201', '06', '12', '01', 'SAN PABLO', '2010-12-14 03:59:32', NULL, '1'),
('061202', '06', '12', '02', 'SAN BERNARDINO', '2010-12-14 03:59:32', NULL, '1'),
('061203', '06', '12', '03', 'SAN LUIS', '2010-12-14 03:59:32', NULL, '1'),
('061204', '06', '12', '04', 'TUMBADEN', '2010-12-14 03:59:32', NULL, '1'),
('061300', '06', '13', '00', 'SANTA CRUZ', '2010-12-14 03:59:32', NULL, '1'),
('061301', '06', '13', '01', 'SANTA CRUZ', '2010-12-14 03:59:32', NULL, '1'),
('061302', '06', '13', '02', 'ANDABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('061303', '06', '13', '03', 'CATACHE', '2010-12-14 03:59:32', NULL, '1'),
('061304', '06', '13', '04', 'CHANCAYBAÑOS', '2010-12-14 03:59:32', NULL, '1'),
('061305', '06', '13', '05', 'LA ESPERANZA', '2010-12-14 03:59:32', NULL, '1'),
('061306', '06', '13', '06', 'NINABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('061307', '06', '13', '07', 'PULAN', '2010-12-14 03:59:32', NULL, '1'),
('061308', '06', '13', '08', 'SAUCEPAMPA', '2010-12-14 03:59:32', NULL, '1'),
('061309', '06', '13', '09', 'SEXI', '2010-12-14 03:59:32', NULL, '1'),
('061310', '06', '13', '10', 'UTICYACU', '2010-12-14 03:59:32', NULL, '1'),
('061311', '06', '13', '11', 'YAUYUCAN', '2010-12-14 03:59:32', NULL, '1'),
('070000', '07', '00', '00', 'CALLAO', '2010-12-14 03:59:32', NULL, '1'),
('070100', '07', '01', '00', 'CALLAO', '2010-12-14 03:59:32', NULL, '1'),
('070101', '07', '01', '01', 'CALLAO', '2010-12-14 03:59:32', NULL, '1'),
('070102', '07', '01', '02', 'BELLAVISTA', '2010-12-14 03:59:32', NULL, '1'),
('070103', '07', '01', '03', 'CARMEN DE LA LEGUA REYNOSO', '2010-12-14 03:59:32', NULL, '1'),
('070104', '07', '01', '04', 'LA PERLA', '2010-12-14 03:59:32', NULL, '1'),
('070105', '07', '01', '05', 'LA PUNTA', '2010-12-14 03:59:32', NULL, '1'),
('070106', '07', '01', '06', 'VENTANILLA', '2010-12-14 03:59:32', NULL, '1'),
('080000', '08', '00', '00', 'CUSCO', '2010-12-14 03:59:32', NULL, '1'),
('080100', '08', '01', '00', 'CUSCO', '2010-12-14 03:59:32', NULL, '1'),
('080101', '08', '01', '01', 'CUSCO', '2010-12-14 03:59:32', NULL, '1'),
('080102', '08', '01', '02', 'CCORCA', '2010-12-14 03:59:32', NULL, '1'),
('080103', '08', '01', '03', 'POROY', '2010-12-14 03:59:32', NULL, '1'),
('080104', '08', '01', '04', 'SAN JERONIMO', '2010-12-14 03:59:32', NULL, '1'),
('080105', '08', '01', '05', 'SAN SEBASTIAN', '2010-12-14 03:59:32', NULL, '1'),
('080106', '08', '01', '06', 'SANTIAGO', '2010-12-14 03:59:32', NULL, '1'),
('080107', '08', '01', '07', 'SAYLLA', '2010-12-14 03:59:32', NULL, '1'),
('080108', '08', '01', '08', 'WANCHAQ', '2010-12-14 03:59:32', NULL, '1'),
('080200', '08', '02', '00', 'ACOMAYO', '2010-12-14 03:59:32', NULL, '1'),
('080201', '08', '02', '01', 'ACOMAYO', '2010-12-14 03:59:32', NULL, '1'),
('080202', '08', '02', '02', 'ACOPIA', '2010-12-14 03:59:32', NULL, '1'),
('080203', '08', '02', '03', 'ACOS', '2010-12-14 03:59:32', NULL, '1'),
('080204', '08', '02', '04', 'MOSOC LLACTA', '2010-12-14 03:59:32', NULL, '1'),
('080205', '08', '02', '05', 'POMACANCHI', '2010-12-14 03:59:32', NULL, '1'),
('080206', '08', '02', '06', 'RONDOCAN', '2010-12-14 03:59:32', NULL, '1'),
('080207', '08', '02', '07', 'SANGARARA', '2010-12-14 03:59:32', NULL, '1'),
('080300', '08', '03', '00', 'ANTA', '2010-12-14 03:59:32', NULL, '1'),
('080301', '08', '03', '01', 'ANTA', '2010-12-14 03:59:32', NULL, '1'),
('080302', '08', '03', '02', 'ANCAHUASI', '2010-12-14 03:59:32', NULL, '1'),
('080303', '08', '03', '03', 'CACHIMAYO', '2010-12-14 03:59:32', NULL, '1'),
('080304', '08', '03', '04', 'CHINCHAYPUJIO', '2010-12-14 03:59:32', NULL, '1'),
('080305', '08', '03', '05', 'HUAROCONDO', '2010-12-14 03:59:32', NULL, '1'),
('080306', '08', '03', '06', 'LIMATAMBO', '2010-12-14 03:59:32', NULL, '1'),
('080307', '08', '03', '07', 'MOLLEPATA', '2010-12-14 03:59:32', NULL, '1'),
('080308', '08', '03', '08', 'PUCYURA', '2010-12-14 03:59:32', NULL, '1'),
('080309', '08', '03', '09', 'ZURITE', '2010-12-14 03:59:32', NULL, '1'),
('080400', '08', '04', '00', 'CALCA', '2010-12-14 03:59:32', NULL, '1'),
('080401', '08', '04', '01', 'CALCA', '2010-12-14 03:59:32', NULL, '1'),
('080402', '08', '04', '02', 'COYA', '2010-12-14 03:59:32', NULL, '1'),
('080403', '08', '04', '03', 'LAMAY', '2010-12-14 03:59:32', NULL, '1'),
('080404', '08', '04', '04', 'LARES', '2010-12-14 03:59:32', NULL, '1'),
('080405', '08', '04', '05', 'PISAC', '2010-12-14 03:59:32', NULL, '1'),
('080406', '08', '04', '06', 'SAN SALVADOR', '2010-12-14 03:59:32', NULL, '1'),
('080407', '08', '04', '07', 'TARAY', '2010-12-14 03:59:32', NULL, '1'),
('080408', '08', '04', '08', 'YANATILE', '2010-12-14 03:59:32', NULL, '1'),
('080500', '08', '05', '00', 'CANAS', '2010-12-14 03:59:32', NULL, '1'),
('080501', '08', '05', '01', 'YANAOCA', '2010-12-14 03:59:32', NULL, '1'),
('080502', '08', '05', '02', 'CHECCA', '2010-12-14 03:59:32', NULL, '1'),
('080503', '08', '05', '03', 'KUNTURKANKI', '2010-12-14 03:59:32', NULL, '1'),
('080504', '08', '05', '04', 'LANGUI', '2010-12-14 03:59:32', NULL, '1'),
('080505', '08', '05', '05', 'LAYO', '2010-12-14 03:59:32', NULL, '1'),
('080506', '08', '05', '06', 'PAMPAMARCA', '2010-12-14 03:59:32', NULL, '1'),
('080507', '08', '05', '07', 'QUEHUE', '2010-12-14 03:59:32', NULL, '1'),
('080508', '08', '05', '08', 'TUPAC AMARU', '2010-12-14 03:59:32', NULL, '1'),
('080600', '08', '06', '00', 'CANCHIS', '2010-12-14 03:59:32', NULL, '1'),
('080601', '08', '06', '01', 'SICUANI', '2010-12-14 03:59:32', NULL, '1'),
('080602', '08', '06', '02', 'CHECACUPE', '2010-12-14 03:59:32', NULL, '1'),
('080603', '08', '06', '03', 'COMBAPATA', '2010-12-14 03:59:32', NULL, '1'),
('080604', '08', '06', '04', 'MARANGANI', '2010-12-14 03:59:32', NULL, '1'),
('080605', '08', '06', '05', 'PITUMARCA', '2010-12-14 03:59:32', NULL, '1'),
('080606', '08', '06', '06', 'SAN PABLO', '2010-12-14 03:59:32', NULL, '1'),
('080607', '08', '06', '07', 'SAN PEDRO', '2010-12-14 03:59:32', NULL, '1'),
('080608', '08', '06', '08', 'TINTA', '2010-12-14 03:59:32', NULL, '1'),
('080700', '08', '07', '00', 'CHUMBIVILCAS', '2010-12-14 03:59:32', NULL, '1'),
('080701', '08', '07', '01', 'SANTO TOMAS', '2010-12-14 03:59:32', NULL, '1'),
('080702', '08', '07', '02', 'CAPACMARCA', '2010-12-14 03:59:32', NULL, '1'),
('080703', '08', '07', '03', 'CHAMACA', '2010-12-14 03:59:32', NULL, '1'),
('080704', '08', '07', '04', 'COLQUEMARCA', '2010-12-14 03:59:32', NULL, '1'),
('080705', '08', '07', '05', 'LIVITACA', '2010-12-14 03:59:32', NULL, '1'),
('080706', '08', '07', '06', 'LLUSCO', '2010-12-14 03:59:32', NULL, '1'),
('080707', '08', '07', '07', 'QUIÑOTA', '2010-12-14 03:59:32', NULL, '1'),
('080708', '08', '07', '08', 'VELILLE', '2010-12-14 03:59:32', NULL, '1'),
('080800', '08', '08', '00', 'ESPINAR', '2010-12-14 03:59:32', NULL, '1'),
('080801', '08', '08', '01', 'ESPINAR', '2010-12-14 03:59:32', NULL, '1'),
('080802', '08', '08', '02', 'CONDOROMA', '2010-12-14 03:59:32', NULL, '1'),
('080803', '08', '08', '03', 'COPORAQUE', '2010-12-14 03:59:32', NULL, '1'),
('080804', '08', '08', '04', 'OCORURO', '2010-12-14 03:59:32', NULL, '1'),
('080805', '08', '08', '05', 'PALLPATA', '2010-12-14 03:59:32', NULL, '1'),
('080806', '08', '08', '06', 'PICHIGUA', '2010-12-14 03:59:32', NULL, '1'),
('080807', '08', '08', '07', 'SUYCKUTAMBO', '2010-12-14 03:59:32', NULL, '1'),
('080808', '08', '08', '08', 'ALTO PICHIGUA', '2010-12-14 03:59:32', NULL, '1'),
('080900', '08', '09', '00', 'LA CONVENCION', '2010-12-14 03:59:32', NULL, '1'),
('080901', '08', '09', '01', 'SANTA ANA', '2010-12-14 03:59:32', NULL, '1'),
('080902', '08', '09', '02', 'ECHARATE', '2010-12-14 03:59:32', NULL, '1'),
('080903', '08', '09', '03', 'HUAYOPATA', '2010-12-14 03:59:32', NULL, '1'),
('080904', '08', '09', '04', 'MARANURA', '2010-12-14 03:59:32', NULL, '1'),
('080905', '08', '09', '05', 'OCOBAMBA', '2010-12-14 03:59:32', NULL, '1'),
('080906', '08', '09', '06', 'QUELLOUNO', '2010-12-14 03:59:32', NULL, '1'),
('080907', '08', '09', '07', 'KIMBIRI', '2010-12-14 03:59:32', NULL, '1'),
('080908', '08', '09', '08', 'SANTA TERESA', '2010-12-14 03:59:32', NULL, '1'),
('080909', '08', '09', '09', 'VILCABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('080910', '08', '09', '10', 'PICHARI', '2010-12-14 03:59:32', NULL, '1'),
('081000', '08', '10', '00', 'PARURO', '2010-12-14 03:59:32', NULL, '1'),
('081001', '08', '10', '01', 'PARURO', '2010-12-14 03:59:32', NULL, '1'),
('081002', '08', '10', '02', 'ACCHA', '2010-12-14 03:59:32', NULL, '1'),
('081003', '08', '10', '03', 'CCAPI', '2010-12-14 03:59:32', NULL, '1'),
('081004', '08', '10', '04', 'COLCHA', '2010-12-14 03:59:32', NULL, '1'),
('081005', '08', '10', '05', 'HUANOQUITE', '2010-12-14 03:59:32', NULL, '1'),
('081006', '08', '10', '06', 'OMACHA', '2010-12-14 03:59:32', NULL, '1'),
('081007', '08', '10', '07', 'PACCARITAMBO', '2010-12-14 03:59:32', NULL, '1'),
('081008', '08', '10', '08', 'PILLPINTO', '2010-12-14 03:59:32', NULL, '1'),
('081009', '08', '10', '09', 'YAURISQUE', '2010-12-14 03:59:32', NULL, '1'),
('081100', '08', '11', '00', 'PAUCARTAMBO', '2010-12-14 03:59:32', NULL, '1'),
('081101', '08', '11', '01', 'PAUCARTAMBO', '2010-12-14 03:59:32', NULL, '1'),
('081102', '08', '11', '02', 'CAICAY', '2010-12-14 03:59:32', NULL, '1'),
('081103', '08', '11', '03', 'CHALLABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('081104', '08', '11', '04', 'COLQUEPATA', '2010-12-14 03:59:32', NULL, '1'),
('081105', '08', '11', '05', 'HUANCARANI', '2010-12-14 03:59:32', NULL, '1'),
('081106', '08', '11', '06', 'KOSÑIPATA', '2010-12-14 03:59:32', NULL, '1'),
('081200', '08', '12', '00', 'QUISPICANCHI', '2010-12-14 03:59:32', NULL, '1'),
('081201', '08', '12', '01', 'URCOS', '2010-12-14 03:59:32', NULL, '1'),
('081202', '08', '12', '02', 'ANDAHUAYLILLAS', '2010-12-14 03:59:32', NULL, '1'),
('081203', '08', '12', '03', 'CAMANTI', '2010-12-14 03:59:32', NULL, '1'),
('081204', '08', '12', '04', 'CCARHUAYO', '2010-12-14 03:59:32', NULL, '1'),
('081205', '08', '12', '05', 'CCATCA', '2010-12-14 03:59:32', NULL, '1'),
('081206', '08', '12', '06', 'CUSIPATA', '2010-12-14 03:59:32', NULL, '1'),
('081207', '08', '12', '07', 'HUARO', '2010-12-14 03:59:32', NULL, '1'),
('081208', '08', '12', '08', 'LUCRE', '2010-12-14 03:59:32', NULL, '1'),
('081209', '08', '12', '09', 'MARCAPATA', '2010-12-14 03:59:32', NULL, '1'),
('081210', '08', '12', '10', 'OCONGATE', '2010-12-14 03:59:32', NULL, '1'),
('081211', '08', '12', '11', 'OROPESA', '2010-12-14 03:59:32', NULL, '1'),
('081212', '08', '12', '12', 'QUIQUIJANA', '2010-12-14 03:59:32', NULL, '1'),
('081300', '08', '13', '00', 'URUBAMBA', '2010-12-14 03:59:32', NULL, '1'),
('081301', '08', '13', '01', 'URUBAMBA', '2010-12-14 03:59:32', NULL, '1'),
('081302', '08', '13', '02', 'CHINCHERO', '2010-12-14 03:59:32', NULL, '1'),
('081303', '08', '13', '03', 'HUAYLLABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('081304', '08', '13', '04', 'MACHUPICCHU', '2010-12-14 03:59:32', NULL, '1'),
('081305', '08', '13', '05', 'MARAS', '2010-12-14 03:59:32', NULL, '1'),
('081306', '08', '13', '06', 'OLLANTAYTAMBO', '2010-12-14 03:59:32', NULL, '1'),
('081307', '08', '13', '07', 'YUCAY', '2010-12-14 03:59:32', NULL, '1'),
('090000', '09', '00', '00', 'HUANCAVELICA', '2010-12-14 03:59:32', NULL, '1'),
('090100', '09', '01', '00', 'HUANCAVELICA', '2010-12-14 03:59:32', NULL, '1'),
('090101', '09', '01', '01', 'HUANCAVELICA', '2010-12-14 03:59:32', NULL, '1'),
('090102', '09', '01', '02', 'ACOBAMBILLA', '2010-12-14 03:59:32', NULL, '1'),
('090103', '09', '01', '03', 'ACORIA', '2010-12-14 03:59:32', NULL, '1'),
('090104', '09', '01', '04', 'CONAYCA', '2010-12-14 03:59:32', NULL, '1'),
('090105', '09', '01', '05', 'CUENCA', '2010-12-14 03:59:32', NULL, '1'),
('090106', '09', '01', '06', 'HUACHOCOLPA', '2010-12-14 03:59:32', NULL, '1'),
('090107', '09', '01', '07', 'HUAYLLAHUARA', '2010-12-14 03:59:32', NULL, '1'),
('090108', '09', '01', '08', 'IZCUCHACA', '2010-12-14 03:59:32', NULL, '1'),
('090109', '09', '01', '09', 'LARIA', '2010-12-14 03:59:32', NULL, '1'),
('090110', '09', '01', '10', 'MANTA', '2010-12-14 03:59:32', NULL, '1'),
('090111', '09', '01', '11', 'MARISCAL CACERES', '2010-12-14 03:59:32', NULL, '1'),
('090112', '09', '01', '12', 'MOYA', '2010-12-14 03:59:32', NULL, '1'),
('090113', '09', '01', '13', 'NUEVO OCCORO', '2010-12-14 03:59:32', NULL, '1'),
('090114', '09', '01', '14', 'PALCA', '2010-12-14 03:59:32', NULL, '1'),
('090115', '09', '01', '15', 'PILCHACA', '2010-12-14 03:59:32', NULL, '1'),
('090116', '09', '01', '16', 'VILCA', '2010-12-14 03:59:32', NULL, '1'),
('090117', '09', '01', '17', 'YAULI', '2010-12-14 03:59:32', NULL, '1'),
('090118', '09', '01', '18', 'ASCENSION', '2010-12-14 03:59:32', NULL, '1'),
('090119', '09', '01', '19', 'HUANDO', '2010-12-14 03:59:32', NULL, '1'),
('090200', '09', '02', '00', 'ACOBAMBA', '2010-12-14 03:59:32', NULL, '1'),
('090201', '09', '02', '01', 'ACOBAMBA', '2010-12-14 03:59:32', NULL, '1'),
('090202', '09', '02', '02', 'ANDABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('090203', '09', '02', '03', 'ANTA', '2010-12-14 03:59:32', NULL, '1'),
('090204', '09', '02', '04', 'CAJA', '2010-12-14 03:59:32', NULL, '1'),
('090205', '09', '02', '05', 'MARCAS', '2010-12-14 03:59:32', NULL, '1'),
('090206', '09', '02', '06', 'PAUCARA', '2010-12-14 03:59:32', NULL, '1'),
('090207', '09', '02', '07', 'POMACOCHA', '2010-12-14 03:59:32', NULL, '1'),
('090208', '09', '02', '08', 'ROSARIO', '2010-12-14 03:59:32', NULL, '1'),
('090300', '09', '03', '00', 'ANGARAES', '2010-12-14 03:59:32', NULL, '1'),
('090301', '09', '03', '01', 'LIRCAY', '2010-12-14 03:59:32', NULL, '1'),
('090302', '09', '03', '02', 'ANCHONGA', '2010-12-14 03:59:32', NULL, '1'),
('090303', '09', '03', '03', 'CALLANMARCA', '2010-12-14 03:59:32', NULL, '1'),
('090304', '09', '03', '04', 'CCOCHACCASA', '2010-12-14 03:59:32', NULL, '1'),
('090305', '09', '03', '05', 'CHINCHO', '2010-12-14 03:59:32', NULL, '1'),
('090306', '09', '03', '06', 'CONGALLA', '2010-12-14 03:59:32', NULL, '1'),
('090307', '09', '03', '07', 'HUANCA-HUANCA', '2010-12-14 03:59:32', NULL, '1'),
('090308', '09', '03', '08', 'HUAYLLAY GRANDE', '2010-12-14 03:59:32', NULL, '1'),
('090309', '09', '03', '09', 'JULCAMARCA', '2010-12-14 03:59:32', NULL, '1'),
('090310', '09', '03', '10', 'SAN ANTONIO DE ANTAPARCO', '2010-12-14 03:59:32', NULL, '1'),
('090311', '09', '03', '11', 'SANTO TOMAS DE PATA', '2010-12-14 03:59:32', NULL, '1'),
('090312', '09', '03', '12', 'SECCLLA', '2010-12-14 03:59:32', NULL, '1'),
('090400', '09', '04', '00', 'CASTROVIRREYNA', '2010-12-14 03:59:32', NULL, '1'),
('090401', '09', '04', '01', 'CASTROVIRREYNA', '2010-12-14 03:59:32', NULL, '1'),
('090402', '09', '04', '02', 'ARMA', '2010-12-14 03:59:32', NULL, '1'),
('090403', '09', '04', '03', 'AURAHUA', '2010-12-14 03:59:32', NULL, '1'),
('090404', '09', '04', '04', 'CAPILLAS', '2010-12-14 03:59:32', NULL, '1'),
('090405', '09', '04', '05', 'CHUPAMARCA', '2010-12-14 03:59:32', NULL, '1'),
('090406', '09', '04', '06', 'COCAS', '2010-12-14 03:59:32', NULL, '1'),
('090407', '09', '04', '07', 'HUACHOS', '2010-12-14 03:59:32', NULL, '1'),
('090408', '09', '04', '08', 'HUAMATAMBO', '2010-12-14 03:59:32', NULL, '1'),
('090409', '09', '04', '09', 'MOLLEPAMPA', '2010-12-14 03:59:32', NULL, '1'),
('090410', '09', '04', '10', 'SAN JUAN', '2010-12-14 03:59:32', NULL, '1'),
('090411', '09', '04', '11', 'SANTA ANA', '2010-12-14 03:59:32', NULL, '1'),
('090412', '09', '04', '12', 'TANTARA', '2010-12-14 03:59:32', NULL, '1'),
('090413', '09', '04', '13', 'TICRAPO', '2010-12-14 03:59:32', NULL, '1'),
('090500', '09', '05', '00', 'CHURCAMPA', '2010-12-14 03:59:32', NULL, '1'),
('090501', '09', '05', '01', 'CHURCAMPA', '2010-12-14 03:59:32', NULL, '1'),
('090502', '09', '05', '02', 'ANCO', '2010-12-14 03:59:32', NULL, '1'),
('090503', '09', '05', '03', 'CHINCHIHUASI', '2010-12-14 03:59:32', NULL, '1'),
('090504', '09', '05', '04', 'EL CARMEN', '2010-12-14 03:59:32', NULL, '1'),
('090505', '09', '05', '05', 'LA MERCED', '2010-12-14 03:59:32', NULL, '1'),
('090506', '09', '05', '06', 'LOCROJA', '2010-12-14 03:59:32', NULL, '1'),
('090507', '09', '05', '07', 'PAUCARBAMBA', '2010-12-14 03:59:32', NULL, '1'),
('090508', '09', '05', '08', 'SAN MIGUEL DE MAYOCC', '2010-12-14 03:59:32', NULL, '1'),
('090509', '09', '05', '09', 'SAN PEDRO DE CORIS', '2010-12-14 03:59:32', NULL, '1'),
('090510', '09', '05', '10', 'PACHAMARCA', '2010-12-14 03:59:32', NULL, '1'),
('090600', '09', '06', '00', 'HUAYTARA', '2010-12-14 03:59:32', NULL, '1'),
('090601', '09', '06', '01', 'HUAYTARA', '2010-12-14 03:59:32', NULL, '1'),
('090602', '09', '06', '02', 'AYAVI', '2010-12-14 03:59:32', NULL, '1'),
('090603', '09', '06', '03', 'CORDOVA', '2010-12-14 03:59:32', NULL, '1'),
('090604', '09', '06', '04', 'HUAYACUNDO ARMA', '2010-12-14 03:59:32', NULL, '1'),
('090605', '09', '06', '05', 'LARAMARCA', '2010-12-14 03:59:32', NULL, '1'),
('090606', '09', '06', '06', 'OCOYO', '2010-12-14 03:59:32', NULL, '1'),
('090607', '09', '06', '07', 'PILPICHACA', '2010-12-14 03:59:32', NULL, '1'),
('090608', '09', '06', '08', 'QUERCO', '2010-12-14 03:59:32', NULL, '1'),
('090609', '09', '06', '09', 'QUITO-ARMA', '2010-12-14 03:59:32', NULL, '1'),
('090610', '09', '06', '10', 'SAN ANTONIO DE CUSICANCHA', '2010-12-14 03:59:32', NULL, '1'),
('090611', '09', '06', '11', 'SAN FRANCISCO DE SANGAYAICO', '2010-12-14 03:59:32', NULL, '1'),
('090612', '09', '06', '12', 'SAN ISIDRO', '2010-12-14 03:59:32', NULL, '1'),
('090613', '09', '06', '13', 'SANTIAGO DE CHOCORVOS', '2010-12-14 03:59:32', NULL, '1'),
('090614', '09', '06', '14', 'SANTIAGO DE QUIRAHUARA', '2010-12-14 03:59:32', NULL, '1'),
('090615', '09', '06', '15', 'SANTO DOMINGO DE CAPILLAS', '2010-12-14 03:59:32', NULL, '1'),
('090616', '09', '06', '16', 'TAMBO', '2010-12-14 03:59:32', NULL, '1'),
('090700', '09', '07', '00', 'TAYACAJA', '2010-12-14 03:59:32', NULL, '1'),
('090701', '09', '07', '01', 'PAMPAS', '2010-12-14 03:59:32', NULL, '1'),
('090702', '09', '07', '02', 'ACOSTAMBO', '2010-12-14 03:59:32', NULL, '1'),
('090703', '09', '07', '03', 'ACRAQUIA', '2010-12-14 03:59:32', NULL, '1'),
('090704', '09', '07', '04', 'AHUAYCHA', '2010-12-14 03:59:32', NULL, '1'),
('090705', '09', '07', '05', 'COLCABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('090706', '09', '07', '06', 'DANIEL HERNANDEZ', '2010-12-14 03:59:32', NULL, '1'),
('090707', '09', '07', '07', 'HUACHOCOLPA', '2010-12-14 03:59:32', NULL, '1'),
('090709', '09', '07', '09', 'HUARIBAMBA', '2010-12-14 03:59:32', NULL, '1'),
('090710', '09', '07', '10', 'ÑAHUIMPUQUIO', '2010-12-14 03:59:32', NULL, '1'),
('090711', '09', '07', '11', 'PAZOS', '2010-12-14 03:59:32', NULL, '1'),
('090713', '09', '07', '13', 'QUISHUAR', '2010-12-14 03:59:32', NULL, '1'),
('090714', '09', '07', '14', 'SALCABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('090715', '09', '07', '15', 'SALCAHUASI', '2010-12-14 03:59:32', NULL, '1'),
('090716', '09', '07', '16', 'SAN MARCOS DE ROCCHAC', '2010-12-14 03:59:32', NULL, '1'),
('090717', '09', '07', '17', 'SURCUBAMBA', '2010-12-14 03:59:32', NULL, '1'),
('090718', '09', '07', '18', 'TINTAY PUNCU', '2010-12-14 03:59:32', NULL, '1'),
('100000', '10', '00', '00', 'HUANUCO', '2010-12-14 03:59:32', NULL, '1'),
('100100', '10', '01', '00', 'HUANUCO', '2010-12-14 03:59:32', NULL, '1'),
('100101', '10', '01', '01', 'HUANUCO', '2010-12-14 03:59:32', NULL, '1'),
('100102', '10', '01', '02', 'AMARILIS', '2010-12-14 03:59:32', NULL, '1'),
('100103', '10', '01', '03', 'CHINCHAO', '2010-12-14 03:59:32', NULL, '1'),
('100104', '10', '01', '04', 'CHURUBAMBA', '2010-12-14 03:59:32', NULL, '1'),
('100105', '10', '01', '05', 'MARGOS', '2010-12-14 03:59:32', NULL, '1'),
('100106', '10', '01', '06', 'QUISQUI', '2010-12-14 03:59:32', NULL, '1'),
('100107', '10', '01', '07', 'SAN FRANCISCO DE CAYRAN', '2010-12-14 03:59:32', NULL, '1'),
('100108', '10', '01', '08', 'SAN PEDRO DE CHAULAN', '2010-12-14 03:59:32', NULL, '1'),
('100109', '10', '01', '09', 'SANTA MARIA DEL VALLE', '2010-12-14 03:59:32', NULL, '1'),
('100110', '10', '01', '10', 'YARUMAYO', '2010-12-14 03:59:32', NULL, '1'),
('100111', '10', '01', '11', 'PILLCO MARCA', '2010-12-14 03:59:32', NULL, '1'),
('100200', '10', '02', '00', 'AMBO', '2010-12-14 03:59:32', NULL, '1'),
('100201', '10', '02', '01', 'AMBO', '2010-12-14 03:59:32', NULL, '1'),
('100202', '10', '02', '02', 'CAYNA', '2010-12-14 03:59:32', NULL, '1'),
('100203', '10', '02', '03', 'COLPAS', '2010-12-14 03:59:32', NULL, '1'),
('100204', '10', '02', '04', 'CONCHAMARCA', '2010-12-14 03:59:32', NULL, '1'),
('100205', '10', '02', '05', 'HUACAR', '2010-12-14 03:59:32', NULL, '1'),
('100206', '10', '02', '06', 'SAN FRANCISCO', '2010-12-14 03:59:32', NULL, '1'),
('100207', '10', '02', '07', 'SAN RAFAEL', '2010-12-14 03:59:32', NULL, '1'),
('100208', '10', '02', '08', 'TOMAY KICHWA', '2010-12-14 03:59:32', NULL, '1'),
('100300', '10', '03', '00', 'DOS DE MAYO', '2010-12-14 03:59:32', NULL, '1'),
('100301', '10', '03', '01', 'LA UNION', '2010-12-14 03:59:32', NULL, '1'),
('100307', '10', '03', '07', 'CHUQUIS', '2010-12-14 03:59:32', NULL, '1'),
('100311', '10', '03', '11', 'MARIAS', '2010-12-14 03:59:32', NULL, '1'),
('100313', '10', '03', '13', 'PACHAS', '2010-12-14 03:59:32', NULL, '1'),
('100316', '10', '03', '16', 'QUIVILLA', '2010-12-14 03:59:32', NULL, '1'),
('100317', '10', '03', '17', 'RIPAN', '2010-12-14 03:59:32', NULL, '1'),
('100321', '10', '03', '21', 'SHUNQUI', '2010-12-14 03:59:32', NULL, '1'),
('100322', '10', '03', '22', 'SILLAPATA', '2010-12-14 03:59:32', NULL, '1'),
('100323', '10', '03', '23', 'YANAS', '2010-12-14 03:59:32', NULL, '1'),
('100400', '10', '04', '00', 'HUACAYBAMBA', '2010-12-14 03:59:32', NULL, '1'),
('100401', '10', '04', '01', 'HUACAYBAMBA', '2010-12-14 03:59:32', NULL, '1'),
('100402', '10', '04', '02', 'CANCHABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('100403', '10', '04', '03', 'COCHABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('100404', '10', '04', '04', 'PINRA', '2010-12-14 03:59:32', NULL, '1'),
('100500', '10', '05', '00', 'HUAMALIES', '2010-12-14 03:59:32', NULL, '1'),
('100501', '10', '05', '01', 'LLATA', '2010-12-14 03:59:32', NULL, '1'),
('100502', '10', '05', '02', 'ARANCAY', '2010-12-14 03:59:32', NULL, '1'),
('100503', '10', '05', '03', 'CHAVIN DE PARIARCA', '2010-12-14 03:59:32', NULL, '1'),
('100504', '10', '05', '04', 'JACAS GRANDE', '2010-12-14 03:59:32', NULL, '1'),
('100505', '10', '05', '05', 'JIRCAN', '2010-12-14 03:59:32', NULL, '1'),
('100506', '10', '05', '06', 'MIRAFLORES', '2010-12-14 03:59:32', NULL, '1'),
('100507', '10', '05', '07', 'MONZON', '2010-12-14 03:59:32', NULL, '1'),
('100508', '10', '05', '08', 'PUNCHAO', '2010-12-14 03:59:32', NULL, '1'),
('100509', '10', '05', '09', 'PUÑOS', '2010-12-14 03:59:32', NULL, '1'),
('100510', '10', '05', '10', 'SINGA', '2010-12-14 03:59:32', NULL, '1'),
('100511', '10', '05', '11', 'TANTAMAYO', '2010-12-14 03:59:32', NULL, '1'),
('100600', '10', '06', '00', 'LEONCIO PRADO', '2010-12-14 03:59:32', NULL, '1'),
('100601', '10', '06', '01', 'RUPA-RUPA', '2010-12-14 03:59:32', NULL, '1'),
('100602', '10', '06', '02', 'DANIEL ALOMIAS ROBLES', '2010-12-14 03:59:32', NULL, '1'),
('100603', '10', '06', '03', 'HERMILIO VALDIZAN', '2010-12-14 03:59:32', NULL, '1'),
('100604', '10', '06', '04', 'JOSE CRESPO Y CASTILLO', '2010-12-14 03:59:32', NULL, '1'),
('100605', '10', '06', '05', 'LUYANDO', '2010-12-14 03:59:32', NULL, '1'),
('100606', '10', '06', '06', 'MARIANO DAMASO BERAUN', '2010-12-14 03:59:32', NULL, '1'),
('100700', '10', '07', '00', 'MARAÑON', '2010-12-14 03:59:32', NULL, '1'),
('100701', '10', '07', '01', 'HUACRACHUCO', '2010-12-14 03:59:32', NULL, '1'),
('100702', '10', '07', '02', 'CHOLON', '2010-12-14 03:59:32', NULL, '1'),
('100703', '10', '07', '03', 'SAN BUENAVENTURA', '2010-12-14 03:59:32', NULL, '1'),
('100800', '10', '08', '00', 'PACHITEA', '2010-12-14 03:59:32', NULL, '1'),
('100801', '10', '08', '01', 'PANAO', '2010-12-14 03:59:32', NULL, '1'),
('100802', '10', '08', '02', 'CHAGLLA', '2010-12-14 03:59:32', NULL, '1'),
('100803', '10', '08', '03', 'MOLINO', '2010-12-14 03:59:32', NULL, '1'),
('100804', '10', '08', '04', 'UMARI', '2010-12-14 03:59:32', NULL, '1'),
('100900', '10', '09', '00', 'PUERTO INCA', '2010-12-14 03:59:32', NULL, '1'),
('100901', '10', '09', '01', 'PUERTO INCA', '2010-12-14 03:59:32', NULL, '1'),
('100902', '10', '09', '02', 'CODO DEL POZUZO', '2010-12-14 03:59:32', NULL, '1'),
('100903', '10', '09', '03', 'HONORIA', '2010-12-14 03:59:32', NULL, '1'),
('100904', '10', '09', '04', 'TOURNAVISTA', '2010-12-14 03:59:32', NULL, '1'),
('100905', '10', '09', '05', 'YUYAPICHIS', '2010-12-14 03:59:32', NULL, '1'),
('101000', '10', '10', '00', 'LAURICOCHA', '2010-12-14 03:59:32', NULL, '1'),
('101001', '10', '10', '01', 'JESUS', '2010-12-14 03:59:32', NULL, '1'),
('101002', '10', '10', '02', 'BAÑOS', '2010-12-14 03:59:32', NULL, '1'),
('101003', '10', '10', '03', 'JIVIA', '2010-12-14 03:59:32', NULL, '1'),
('101004', '10', '10', '04', 'QUEROPALCA', '2010-12-14 03:59:32', NULL, '1'),
('101005', '10', '10', '05', 'RONDOS', '2010-12-14 03:59:32', NULL, '1'),
('101006', '10', '10', '06', 'SAN FRANCISCO DE ASIS', '2010-12-14 03:59:32', NULL, '1'),
('101007', '10', '10', '07', 'SAN MIGUEL DE CAURI', '2010-12-14 03:59:32', NULL, '1'),
('101100', '10', '11', '00', 'YAROWILCA', '2010-12-14 03:59:32', NULL, '1'),
('101101', '10', '11', '01', 'CHAVINILLO', '2010-12-14 03:59:32', NULL, '1'),
('101102', '10', '11', '02', 'CAHUAC', '2010-12-14 03:59:32', NULL, '1'),
('101103', '10', '11', '03', 'CHACABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('101104', '10', '11', '04', 'APARICIO POMARES', '2010-12-14 03:59:32', NULL, '1'),
('101105', '10', '11', '05', 'JACAS CHICO', '2010-12-14 03:59:32', NULL, '1'),
('101106', '10', '11', '06', 'OBAS', '2010-12-14 03:59:32', NULL, '1'),
('101107', '10', '11', '07', 'PAMPAMARCA', '2010-12-14 03:59:32', NULL, '1'),
('101108', '10', '11', '08', 'CHORAS', '2010-12-14 03:59:32', NULL, '1'),
('110000', '11', '00', '00', 'ICA', '2010-12-14 03:59:32', NULL, '1'),
('110100', '11', '01', '00', 'ICA', '2010-12-14 03:59:32', NULL, '1'),
('110101', '11', '01', '01', 'ICA', '2010-12-14 03:59:32', NULL, '1'),
('110102', '11', '01', '02', 'LA TINGUIÑA', '2010-12-14 03:59:32', NULL, '1'),
('110103', '11', '01', '03', 'LOS AQUIJES', '2010-12-14 03:59:32', NULL, '1'),
('110104', '11', '01', '04', 'OCUCAJE', '2010-12-14 03:59:32', NULL, '1'),
('110105', '11', '01', '05', 'PACHACUTEC', '2010-12-14 03:59:32', NULL, '1'),
('110106', '11', '01', '06', 'PARCONA', '2010-12-14 03:59:32', NULL, '1'),
('110107', '11', '01', '07', 'PUEBLO NUEVO', '2010-12-14 03:59:32', NULL, '1'),
('110108', '11', '01', '08', 'SALAS', '2010-12-14 03:59:32', NULL, '1'),
('110109', '11', '01', '09', 'SAN JOSE DE LOS MOLINOS', '2010-12-14 03:59:32', NULL, '1'),
('110110', '11', '01', '10', 'SAN JUAN BAUTISTA', '2010-12-14 03:59:32', NULL, '1'),
('110111', '11', '01', '11', 'SANTIAGO', '2010-12-14 03:59:32', NULL, '1'),
('110112', '11', '01', '12', 'SUBTANJALLA', '2010-12-14 03:59:32', NULL, '1'),
('110113', '11', '01', '13', 'TATE', '2010-12-14 03:59:32', NULL, '1'),
('110114', '11', '01', '14', 'YAUCA DEL ROSARIO', '2010-12-14 03:59:32', NULL, '1'),
('110200', '11', '02', '00', 'CHINCHA', '2010-12-14 03:59:32', NULL, '1'),
('110201', '11', '02', '01', 'CHINCHA ALTA', '2010-12-14 03:59:32', NULL, '1'),
('110202', '11', '02', '02', 'ALTO LARAN', '2010-12-14 03:59:32', NULL, '1'),
('110203', '11', '02', '03', 'CHAVIN', '2010-12-14 03:59:32', NULL, '1'),
('110204', '11', '02', '04', 'CHINCHA BAJA', '2010-12-14 03:59:32', NULL, '1'),
('110205', '11', '02', '05', 'EL CARMEN', '2010-12-14 03:59:32', NULL, '1'),
('110206', '11', '02', '06', 'GROCIO PRADO', '2010-12-14 03:59:32', NULL, '1'),
('110207', '11', '02', '07', 'PUEBLO NUEVO', '2010-12-14 03:59:32', NULL, '1'),
('110208', '11', '02', '08', 'SAN JUAN DE YANAC', '2010-12-14 03:59:32', NULL, '1'),
('110209', '11', '02', '09', 'SAN PEDRO DE HUACARPANA', '2010-12-14 03:59:32', NULL, '1'),
('110210', '11', '02', '10', 'SUNAMPE', '2010-12-14 03:59:32', NULL, '1'),
('110211', '11', '02', '11', 'TAMBO DE MORA', '2010-12-14 03:59:32', NULL, '1'),
('110300', '11', '03', '00', 'NAZCA', '2010-12-14 03:59:32', NULL, '1'),
('110301', '11', '03', '01', 'NAZCA', '2010-12-14 03:59:32', NULL, '1'),
('110302', '11', '03', '02', 'CHANGUILLO', '2010-12-14 03:59:32', NULL, '1'),
('110303', '11', '03', '03', 'EL INGENIO', '2010-12-14 03:59:32', NULL, '1'),
('110304', '11', '03', '04', 'MARCONA', '2010-12-14 03:59:32', NULL, '1'),
('110305', '11', '03', '05', 'VISTA ALEGRE', '2010-12-14 03:59:32', NULL, '1'),
('110400', '11', '04', '00', 'PALPA', '2010-12-14 03:59:32', NULL, '1'),
('110401', '11', '04', '01', 'PALPA', '2010-12-14 03:59:32', NULL, '1'),
('110402', '11', '04', '02', 'LLIPATA', '2010-12-14 03:59:32', NULL, '1'),
('110403', '11', '04', '03', 'RIO GRANDE', '2010-12-14 03:59:32', NULL, '1'),
('110404', '11', '04', '04', 'SANTA CRUZ', '2010-12-14 03:59:32', NULL, '1'),
('110405', '11', '04', '05', 'TIBILLO', '2010-12-14 03:59:32', NULL, '1'),
('110500', '11', '05', '00', 'PISCO', '2010-12-14 03:59:32', NULL, '1'),
('110501', '11', '05', '01', 'PISCO', '2010-12-14 03:59:32', NULL, '1'),
('110502', '11', '05', '02', 'HUANCANO', '2010-12-14 03:59:32', NULL, '1'),
('110503', '11', '05', '03', 'HUMAY', '2010-12-14 03:59:32', NULL, '1'),
('110504', '11', '05', '04', 'INDEPENDENCIA', '2010-12-14 03:59:32', NULL, '1'),
('110505', '11', '05', '05', 'PARACAS', '2010-12-14 03:59:32', NULL, '1'),
('110506', '11', '05', '06', 'SAN ANDRES', '2010-12-14 03:59:32', NULL, '1'),
('110507', '11', '05', '07', 'SAN CLEMENTE', '2010-12-14 03:59:32', NULL, '1'),
('110508', '11', '05', '08', 'TUPAC AMARU INCA', '2010-12-14 03:59:32', NULL, '1'),
('120000', '12', '00', '00', 'JUNIN', '2010-12-14 03:59:32', NULL, '1'),
('120100', '12', '01', '00', 'HUANCAYO', '2010-12-14 03:59:32', NULL, '1'),
('120101', '12', '01', '01', 'HUANCAYO', '2010-12-14 03:59:32', NULL, '1'),
('120104', '12', '01', '04', 'CARHUACALLANGA', '2010-12-14 03:59:32', NULL, '1'),
('120105', '12', '01', '05', 'CHACAPAMPA', '2010-12-14 03:59:32', NULL, '1'),
('120106', '12', '01', '06', 'CHICCHE', '2010-12-14 03:59:32', NULL, '1'),
('120107', '12', '01', '07', 'CHILCA', '2010-12-14 03:59:32', NULL, '1'),
('120108', '12', '01', '08', 'CHONGOS ALTO', '2010-12-14 03:59:32', NULL, '1'),
('120111', '12', '01', '11', 'CHUPURO', '2010-12-14 03:59:32', NULL, '1'),
('120112', '12', '01', '12', 'COLCA', '2010-12-14 03:59:32', NULL, '1'),
('120113', '12', '01', '13', 'CULLHUAS', '2010-12-14 03:59:32', NULL, '1'),
('120114', '12', '01', '14', 'EL TAMBO', '2010-12-14 03:59:32', NULL, '1'),
('120116', '12', '01', '16', 'HUACRAPUQUIO', '2010-12-14 03:59:32', NULL, '1'),
('120117', '12', '01', '17', 'HUALHUAS', '2010-12-14 03:59:32', NULL, '1'),
('120119', '12', '01', '19', 'HUANCAN', '2010-12-14 03:59:32', NULL, '1'),
('120120', '12', '01', '20', 'HUASICANCHA', '2010-12-14 03:59:32', NULL, '1'),
('120121', '12', '01', '21', 'HUAYUCACHI', '2010-12-14 03:59:32', NULL, '1'),
('120122', '12', '01', '22', 'INGENIO', '2010-12-14 03:59:32', NULL, '1'),
('120124', '12', '01', '24', 'PARIAHUANCA', '2010-12-14 03:59:32', NULL, '1'),
('120125', '12', '01', '25', 'PILCOMAYO', '2010-12-14 03:59:32', NULL, '1'),
('120126', '12', '01', '26', 'PUCARA', '2010-12-14 03:59:32', NULL, '1'),
('120127', '12', '01', '27', 'QUICHUAY', '2010-12-14 03:59:32', NULL, '1'),
('120128', '12', '01', '28', 'QUILCAS', '2010-12-14 03:59:32', NULL, '1'),
('120129', '12', '01', '29', 'SAN AGUSTIN', '2010-12-14 03:59:32', NULL, '1'),
('120130', '12', '01', '30', 'SAN JERONIMO DE TUNAN', '2010-12-14 03:59:32', NULL, '1'),
('120132', '12', '01', '32', 'SAÑO', '2010-12-14 03:59:32', NULL, '1'),
('120133', '12', '01', '33', 'SAPALLANGA', '2010-12-14 03:59:32', NULL, '1'),
('120134', '12', '01', '34', 'SICAYA', '2010-12-14 03:59:32', NULL, '1'),
('120135', '12', '01', '35', 'SANTO DOMINGO DE ACOBAMBA', '2010-12-14 03:59:32', NULL, '1'),
('120136', '12', '01', '36', 'VIQUES', '2010-12-14 03:59:32', NULL, '1'),
('120200', '12', '02', '00', 'CONCEPCION', '2010-12-14 03:59:32', NULL, '1'),
('120201', '12', '02', '01', 'CONCEPCION', '2010-12-14 03:59:32', NULL, '1'),
('120202', '12', '02', '02', 'ACO', '2010-12-14 03:59:32', NULL, '1'),
('120203', '12', '02', '03', 'ANDAMARCA', '2010-12-14 03:59:32', NULL, '1'),
('120204', '12', '02', '04', 'CHAMBARA', '2010-12-14 03:59:32', NULL, '1'),
('120205', '12', '02', '05', 'COCHAS', '2010-12-14 03:59:32', NULL, '1'),
('120206', '12', '02', '06', 'COMAS', '2010-12-14 03:59:32', NULL, '1'),
('120207', '12', '02', '07', 'HEROINAS TOLEDO', '2010-12-14 03:59:32', NULL, '1'),
('120208', '12', '02', '08', 'MANZANARES', '2010-12-14 03:59:32', NULL, '1'),
('120209', '12', '02', '09', 'MARISCAL CASTILLA', '2010-12-14 03:59:32', NULL, '1'),
('120210', '12', '02', '10', 'MATAHUASI', '2010-12-14 03:59:32', NULL, '1'),
('120211', '12', '02', '11', 'MITO', '2010-12-14 03:59:32', NULL, '1'),
('120212', '12', '02', '12', 'NUEVE DE JULIO', '2010-12-14 03:59:32', NULL, '1'),
('120213', '12', '02', '13', 'ORCOTUNA', '2010-12-14 03:59:32', NULL, '1'),
('120214', '12', '02', '14', 'SAN JOSE DE QUERO', '2010-12-14 03:59:32', NULL, '1'),
('120215', '12', '02', '15', 'SANTA ROSA DE OCOPA', '2010-12-14 03:59:32', NULL, '1'),
('120300', '12', '03', '00', 'CHANCHAMAYO', '2010-12-14 03:59:32', NULL, '1'),
('120301', '12', '03', '01', 'CHANCHAMAYO', '2010-12-14 03:59:32', NULL, '1'),
('120302', '12', '03', '02', 'PERENE', '2010-12-14 03:59:32', NULL, '1'),
('120303', '12', '03', '03', 'PICHANAQUI', '2010-12-14 03:59:32', NULL, '1'),
('120304', '12', '03', '04', 'SAN LUIS DE SHUARO', '2010-12-14 03:59:32', NULL, '1'),
('120305', '12', '03', '05', 'SAN RAMON', '2010-12-14 03:59:32', NULL, '1'),
('120306', '12', '03', '06', 'VITOC', '2010-12-14 03:59:32', NULL, '1'),
('120400', '12', '04', '00', 'JAUJA', '2010-12-14 03:59:32', NULL, '1'),
('120401', '12', '04', '01', 'JAUJA', '2010-12-14 03:59:32', NULL, '1'),
('120402', '12', '04', '02', 'ACOLLA', '2010-12-14 03:59:32', NULL, '1'),
('120403', '12', '04', '03', 'APATA', '2010-12-14 03:59:32', NULL, '1'),
('120404', '12', '04', '04', 'ATAURA', '2010-12-14 03:59:32', NULL, '1'),
('120405', '12', '04', '05', 'CANCHAYLLO', '2010-12-14 03:59:32', NULL, '1'),
('120406', '12', '04', '06', 'CURICACA', '2010-12-14 03:59:32', NULL, '1'),
('120407', '12', '04', '07', 'EL MANTARO', '2010-12-14 03:59:32', NULL, '1'),
('120408', '12', '04', '08', 'HUAMALI', '2010-12-14 03:59:32', NULL, '1'),
('120409', '12', '04', '09', 'HUARIPAMPA', '2010-12-14 03:59:32', NULL, '1'),
('120410', '12', '04', '10', 'HUERTAS', '2010-12-14 03:59:32', NULL, '1'),
('120411', '12', '04', '11', 'JANJAILLO', '2010-12-14 03:59:32', NULL, '1'),
('120412', '12', '04', '12', 'JULCAN', '2010-12-14 03:59:32', NULL, '1'),
('120413', '12', '04', '13', 'LEONOR ORDOÑEZ', '2010-12-14 03:59:32', NULL, '1'),
('120414', '12', '04', '14', 'LLOCLLAPAMPA', '2010-12-14 03:59:32', NULL, '1'),
('120415', '12', '04', '15', 'MARCO', '2010-12-14 03:59:32', NULL, '1'),
('120416', '12', '04', '16', 'MASMA', '2010-12-14 03:59:32', NULL, '1'),
('120417', '12', '04', '17', 'MASMA CHICCHE', '2010-12-14 03:59:32', NULL, '1'),
('120418', '12', '04', '18', 'MOLINOS', '2010-12-14 03:59:32', NULL, '1'),
('120419', '12', '04', '19', 'MONOBAMBA', '2010-12-14 03:59:32', NULL, '1'),
('120420', '12', '04', '20', 'MUQUI', '2010-12-14 03:59:32', NULL, '1'),
('120421', '12', '04', '21', 'MUQUIYAUYO', '2010-12-14 03:59:32', NULL, '1'),
('120422', '12', '04', '22', 'PACA', '2010-12-14 03:59:32', NULL, '1'),
('120423', '12', '04', '23', 'PACCHA', '2010-12-14 03:59:32', NULL, '1'),
('120424', '12', '04', '24', 'PANCAN', '2010-12-14 03:59:32', NULL, '1'),
('120425', '12', '04', '25', 'PARCO', '2010-12-14 03:59:32', NULL, '1'),
('120426', '12', '04', '26', 'POMACANCHA', '2010-12-14 03:59:32', NULL, '1'),
('120427', '12', '04', '27', 'RICRAN', '2010-12-14 03:59:32', NULL, '1'),
('120428', '12', '04', '28', 'SAN LORENZO', '2010-12-14 03:59:32', NULL, '1'),
('120429', '12', '04', '29', 'SAN PEDRO DE CHUNAN', '2010-12-14 03:59:32', NULL, '1'),
('120430', '12', '04', '30', 'SAUSA', '2010-12-14 03:59:32', NULL, '1'),
('120431', '12', '04', '31', 'SINCOS', '2010-12-14 03:59:32', NULL, '1'),
('120432', '12', '04', '32', 'TUNAN MARCA', '2010-12-14 03:59:32', NULL, '1'),
('120433', '12', '04', '33', 'YAULI', '2010-12-14 03:59:32', NULL, '1'),
('120434', '12', '04', '34', 'YAUYOS', '2010-12-14 03:59:32', NULL, '1'),
('120500', '12', '05', '00', 'JUNIN', '2010-12-14 03:59:32', NULL, '1'),
('120501', '12', '05', '01', 'JUNIN', '2010-12-14 03:59:32', NULL, '1'),
('120502', '12', '05', '02', 'CARHUAMAYO', '2010-12-14 03:59:32', NULL, '1'),
('120503', '12', '05', '03', 'ONDORES', '2010-12-14 03:59:32', NULL, '1'),
('120504', '12', '05', '04', 'ULCUMAYO', '2010-12-14 03:59:32', NULL, '1'),
('120600', '12', '06', '00', 'SATIPO', '2010-12-14 03:59:32', NULL, '1'),
('120601', '12', '06', '01', 'SATIPO', '2010-12-14 03:59:32', NULL, '1'),
('120602', '12', '06', '02', 'COVIRIALI', '2010-12-14 03:59:32', NULL, '1'),
('120603', '12', '06', '03', 'LLAYLLA', '2010-12-14 03:59:32', NULL, '1'),
('120604', '12', '06', '04', 'MAZAMARI', '2010-12-14 03:59:32', NULL, '1'),
('120605', '12', '06', '05', 'PAMPA HERMOSA', '2010-12-14 03:59:32', NULL, '1'),
('120606', '12', '06', '06', 'PANGOA', '2010-12-14 03:59:32', NULL, '1'),
('120607', '12', '06', '07', 'RIO NEGRO', '2010-12-14 03:59:32', NULL, '1'),
('120608', '12', '06', '08', 'RIO TAMBO', '2010-12-14 03:59:32', NULL, '1'),
('120700', '12', '07', '00', 'TARMA', '2010-12-14 03:59:32', NULL, '1'),
('120701', '12', '07', '01', 'TARMA', '2010-12-14 03:59:32', NULL, '1'),
('120702', '12', '07', '02', 'ACOBAMBA', '2010-12-14 03:59:32', NULL, '1'),
('120703', '12', '07', '03', 'HUARICOLCA', '2010-12-14 03:59:32', NULL, '1'),
('120704', '12', '07', '04', 'HUASAHUASI', '2010-12-14 03:59:32', NULL, '1'),
('120705', '12', '07', '05', 'LA UNION', '2010-12-14 03:59:32', NULL, '1'),
('120706', '12', '07', '06', 'PALCA', '2010-12-14 03:59:32', NULL, '1'),
('120707', '12', '07', '07', 'PALCAMAYO', '2010-12-14 03:59:32', NULL, '1'),
('120708', '12', '07', '08', 'SAN PEDRO DE CAJAS', '2010-12-14 03:59:32', NULL, '1'),
('120709', '12', '07', '09', 'TAPO', '2010-12-14 03:59:32', NULL, '1'),
('120800', '12', '08', '00', 'YAULI', '2010-12-14 03:59:32', NULL, '1'),
('120801', '12', '08', '01', 'LA OROYA', '2010-12-14 03:59:32', NULL, '1'),
('120802', '12', '08', '02', 'CHACAPALPA', '2010-12-14 03:59:32', NULL, '1'),
('120803', '12', '08', '03', 'HUAY-HUAY', '2010-12-14 03:59:32', NULL, '1'),
('120804', '12', '08', '04', 'MARCAPOMACOCHA', '2010-12-14 03:59:32', NULL, '1'),
('120805', '12', '08', '05', 'MOROCOCHA', '2010-12-14 03:59:32', NULL, '1'),
('120806', '12', '08', '06', 'PACCHA', '2010-12-14 03:59:32', NULL, '1'),
('120807', '12', '08', '07', 'SANTA BARBARA DE CARHUACAYAN', '2010-12-14 03:59:32', NULL, '1'),
('120808', '12', '08', '08', 'SANTA ROSA DE SACCO', '2010-12-14 03:59:32', NULL, '1'),
('120809', '12', '08', '09', 'SUITUCANCHA', '2010-12-14 03:59:32', NULL, '1'),
('120810', '12', '08', '10', 'YAULI', '2010-12-14 03:59:32', NULL, '1'),
('120900', '12', '09', '00', 'CHUPACA', '2010-12-14 03:59:32', NULL, '1'),
('120901', '12', '09', '01', 'CHUPACA', '2010-12-14 03:59:32', NULL, '1'),
('120902', '12', '09', '02', 'AHUAC', '2010-12-14 03:59:32', NULL, '1'),
('120903', '12', '09', '03', 'CHONGOS BAJO', '2010-12-14 03:59:32', NULL, '1'),
('120904', '12', '09', '04', 'HUACHAC', '2010-12-14 03:59:32', NULL, '1'),
('120905', '12', '09', '05', 'HUAMANCACA CHICO', '2010-12-14 03:59:32', NULL, '1'),
('120906', '12', '09', '06', 'SAN JUAN DE YSCOS', '2010-12-14 03:59:32', NULL, '1'),
('120907', '12', '09', '07', 'SAN JUAN DE JARPA', '2010-12-14 03:59:32', NULL, '1'),
('120908', '12', '09', '08', 'TRES DE DICIEMBRE', '2010-12-14 03:59:32', NULL, '1'),
('120909', '12', '09', '09', 'YANACANCHA', '2010-12-14 03:59:32', NULL, '1'),
('130000', '13', '00', '00', 'LA LIBERTAD', '2010-12-14 03:59:32', NULL, '1'),
('130100', '13', '01', '00', 'TRUJILLO', '2010-12-14 03:59:32', NULL, '1'),
('130101', '13', '01', '01', 'TRUJILLO', '2010-12-14 03:59:32', NULL, '1'),
('130102', '13', '01', '02', 'EL PORVENIR', '2010-12-14 03:59:32', NULL, '1'),
('130103', '13', '01', '03', 'FLORENCIA DE MORA', '2010-12-14 03:59:32', NULL, '1'),
('130104', '13', '01', '04', 'HUANCHACO', '2010-12-14 03:59:32', NULL, '1'),
('130105', '13', '01', '05', 'LA ESPERANZA', '2010-12-14 03:59:32', NULL, '1'),
('130106', '13', '01', '06', 'LAREDO', '2010-12-14 03:59:32', NULL, '1'),
('130107', '13', '01', '07', 'MOCHE', '2010-12-14 03:59:32', NULL, '1'),
('130108', '13', '01', '08', 'POROTO', '2010-12-14 03:59:32', NULL, '1'),
('130109', '13', '01', '09', 'SALAVERRY', '2010-12-14 03:59:32', NULL, '1'),
('130110', '13', '01', '10', 'SIMBAL', '2010-12-14 03:59:32', NULL, '1'),
('130111', '13', '01', '11', 'VICTOR LARCO HERRERA', '2010-12-14 03:59:32', NULL, '1'),
('130200', '13', '02', '00', 'ASCOPE', '2010-12-14 03:59:32', NULL, '1'),
('130201', '13', '02', '01', 'ASCOPE', '2010-12-14 03:59:32', NULL, '1'),
('130202', '13', '02', '02', 'CHICAMA', '2010-12-14 03:59:32', NULL, '1'),
('130203', '13', '02', '03', 'CHOCOPE', '2010-12-14 03:59:32', NULL, '1'),
('130204', '13', '02', '04', 'MAGDALENA DE CAO', '2010-12-14 03:59:32', NULL, '1'),
('130205', '13', '02', '05', 'PAIJAN', '2010-12-14 03:59:32', NULL, '1'),
('130206', '13', '02', '06', 'RAZURI', '2010-12-14 03:59:32', NULL, '1'),
('130207', '13', '02', '07', 'SANTIAGO DE CAO', '2010-12-14 03:59:32', NULL, '1'),
('130208', '13', '02', '08', 'CASA GRANDE', '2010-12-14 03:59:32', NULL, '1'),
('130300', '13', '03', '00', 'BOLIVAR', '2010-12-14 03:59:32', NULL, '1'),
('130301', '13', '03', '01', 'BOLIVAR', '2010-12-14 03:59:32', NULL, '1'),
('130302', '13', '03', '02', 'BAMBAMARCA', '2010-12-14 03:59:32', NULL, '1'),
('130303', '13', '03', '03', 'CONDORMARCA', '2010-12-14 03:59:32', NULL, '1'),
('130304', '13', '03', '04', 'LONGOTEA', '2010-12-14 03:59:32', NULL, '1'),
('130305', '13', '03', '05', 'UCHUMARCA', '2010-12-14 03:59:32', NULL, '1'),
('130306', '13', '03', '06', 'UCUNCHA', '2010-12-14 03:59:32', NULL, '1'),
('130400', '13', '04', '00', 'CHEPEN', '2010-12-14 03:59:32', NULL, '1'),
('130401', '13', '04', '01', 'CHEPEN', '2010-12-14 03:59:32', NULL, '1'),
('130402', '13', '04', '02', 'PACANGA', '2010-12-14 03:59:32', NULL, '1'),
('130403', '13', '04', '03', 'PUEBLO NUEVO', '2010-12-14 03:59:32', NULL, '1'),
('130500', '13', '05', '00', 'JULCAN', '2010-12-14 03:59:32', NULL, '1'),
('130501', '13', '05', '01', 'JULCAN', '2010-12-14 03:59:32', NULL, '1'),
('130502', '13', '05', '02', 'CALAMARCA', '2010-12-14 03:59:32', NULL, '1'),
('130503', '13', '05', '03', 'CARABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('130504', '13', '05', '04', 'HUASO', '2010-12-14 03:59:32', NULL, '1'),
('130600', '13', '06', '00', 'OTUZCO', '2010-12-14 03:59:32', NULL, '1'),
('130601', '13', '06', '01', 'OTUZCO', '2010-12-14 03:59:32', NULL, '1'),
('130602', '13', '06', '02', 'AGALLPAMPA', '2010-12-14 03:59:32', NULL, '1'),
('130604', '13', '06', '04', 'CHARAT', '2010-12-14 03:59:32', NULL, '1'),
('130605', '13', '06', '05', 'HUARANCHAL', '2010-12-14 03:59:32', NULL, '1'),
('130606', '13', '06', '06', 'LA CUESTA', '2010-12-14 03:59:32', NULL, '1'),
('130608', '13', '06', '08', 'MACHE', '2010-12-14 03:59:32', NULL, '1'),
('130610', '13', '06', '10', 'PARANDAY', '2010-12-14 03:59:32', NULL, '1'),
('130611', '13', '06', '11', 'SALPO', '2010-12-14 03:59:32', NULL, '1'),
('130613', '13', '06', '13', 'SINSICAP', '2010-12-14 03:59:32', NULL, '1'),
('130614', '13', '06', '14', 'USQUIL', '2010-12-14 03:59:32', NULL, '1'),
('130700', '13', '07', '00', 'PACASMAYO', '2010-12-14 03:59:32', NULL, '1'),
('130701', '13', '07', '01', 'SAN PEDRO DE LLOC', '2010-12-14 03:59:32', NULL, '1'),
('130702', '13', '07', '02', 'GUADALUPE', '2010-12-14 03:59:32', NULL, '1'),
('130703', '13', '07', '03', 'JEQUETEPEQUE', '2010-12-14 03:59:32', NULL, '1'),
('130704', '13', '07', '04', 'PACASMAYO', '2010-12-14 03:59:32', NULL, '1'),
('130705', '13', '07', '05', 'SAN JOSE', '2010-12-14 03:59:32', NULL, '1'),
('130800', '13', '08', '00', 'PATAZ', '2010-12-14 03:59:32', NULL, '1'),
('130801', '13', '08', '01', 'TAYABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('130802', '13', '08', '02', 'BULDIBUYO', '2010-12-14 03:59:32', NULL, '1'),
('130803', '13', '08', '03', 'CHILLIA', '2010-12-14 03:59:32', NULL, '1'),
('130804', '13', '08', '04', 'HUANCASPATA', '2010-12-14 03:59:32', NULL, '1'),
('130805', '13', '08', '05', 'HUAYLILLAS', '2010-12-14 03:59:32', NULL, '1'),
('130806', '13', '08', '06', 'HUAYO', '2010-12-14 03:59:32', NULL, '1'),
('130807', '13', '08', '07', 'ONGON', '2010-12-14 03:59:32', NULL, '1'),
('130808', '13', '08', '08', 'PARCOY', '2010-12-14 03:59:32', NULL, '1'),
('130809', '13', '08', '09', 'PATAZ', '2010-12-14 03:59:32', NULL, '1'),
('130810', '13', '08', '10', 'PIAS', '2010-12-14 03:59:32', NULL, '1'),
('130811', '13', '08', '11', 'SANTIAGO DE CHALLAS', '2010-12-14 03:59:32', NULL, '1'),
('130812', '13', '08', '12', 'TAURIJA', '2010-12-14 03:59:32', NULL, '1'),
('130813', '13', '08', '13', 'URPAY', '2010-12-14 03:59:32', NULL, '1'),
('130900', '13', '09', '00', 'SANCHEZ CARRION', '2010-12-14 03:59:32', NULL, '1'),
('130901', '13', '09', '01', 'HUAMACHUCO', '2010-12-14 03:59:32', NULL, '1'),
('130902', '13', '09', '02', 'CHUGAY', '2010-12-14 03:59:32', NULL, '1'),
('130903', '13', '09', '03', 'COCHORCO', '2010-12-14 03:59:32', NULL, '1'),
('130904', '13', '09', '04', 'CURGOS', '2010-12-14 03:59:32', NULL, '1');
INSERT INTO `ubigeo` (`UBIGP_Codigo`, `UBIGC_CodDpto`, `UBIGC_CodProv`, `UBIGC_CodDist`, `UBIGC_Descripcion`, `UBIGC_FechaRegistro`, `UBIGC_FechaModificacion`, `UBIGC_FlagEstado`) VALUES
('130905', '13', '09', '05', 'MARCABAL', '2010-12-14 03:59:32', NULL, '1'),
('130906', '13', '09', '06', 'SANAGORAN', '2010-12-14 03:59:32', NULL, '1'),
('130907', '13', '09', '07', 'SARIN', '2010-12-14 03:59:32', NULL, '1'),
('130908', '13', '09', '08', 'SARTIMBAMBA', '2010-12-14 03:59:32', NULL, '1'),
('131000', '13', '10', '00', 'SANTIAGO DE CHUCO', '2010-12-14 03:59:32', NULL, '1'),
('131001', '13', '10', '01', 'SANTIAGO DE CHUCO', '2010-12-14 03:59:32', NULL, '1'),
('131002', '13', '10', '02', 'ANGASMARCA', '2010-12-14 03:59:32', NULL, '1'),
('131003', '13', '10', '03', 'CACHICADAN', '2010-12-14 03:59:32', NULL, '1'),
('131004', '13', '10', '04', 'MOLLEBAMBA', '2010-12-14 03:59:32', NULL, '1'),
('131005', '13', '10', '05', 'MOLLEPATA', '2010-12-14 03:59:32', NULL, '1'),
('131006', '13', '10', '06', 'QUIRUVILCA', '2010-12-14 03:59:32', NULL, '1'),
('131007', '13', '10', '07', 'SANTA CRUZ DE CHUCA', '2010-12-14 03:59:32', NULL, '1'),
('131008', '13', '10', '08', 'SITABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('131100', '13', '11', '00', 'GRAN CHIMU', '2010-12-14 03:59:32', NULL, '1'),
('131101', '13', '11', '01', 'CASCAS', '2010-12-14 03:59:32', NULL, '1'),
('131102', '13', '11', '02', 'LUCMA', '2010-12-14 03:59:32', NULL, '1'),
('131103', '13', '11', '03', 'COMPIN', '2010-12-14 03:59:32', NULL, '1'),
('131104', '13', '11', '04', 'SAYAPULLO', '2010-12-14 03:59:32', NULL, '1'),
('131200', '13', '12', '00', 'VIRU', '2010-12-14 03:59:32', NULL, '1'),
('131201', '13', '12', '01', 'VIRU', '2010-12-14 03:59:32', NULL, '1'),
('131202', '13', '12', '02', 'CHAO', '2010-12-14 03:59:32', NULL, '1'),
('131203', '13', '12', '03', 'GUADALUPITO', '2010-12-14 03:59:32', NULL, '1'),
('140000', '14', '00', '00', 'LAMBAYEQUE', '2010-12-14 03:59:32', NULL, '1'),
('140100', '14', '01', '00', 'CHICLAYO', '2010-12-14 03:59:32', NULL, '1'),
('140101', '14', '01', '01', 'CHICLAYO', '2010-12-14 03:59:32', NULL, '1'),
('140102', '14', '01', '02', 'CHONGOYAPE', '2010-12-14 03:59:32', NULL, '1'),
('140103', '14', '01', '03', 'ETEN', '2010-12-14 03:59:32', NULL, '1'),
('140104', '14', '01', '04', 'ETEN PUERTO', '2010-12-14 03:59:32', NULL, '1'),
('140105', '14', '01', '05', 'JOSE LEONARDO ORTIZ', '2010-12-14 03:59:32', NULL, '1'),
('140106', '14', '01', '06', 'LA VICTORIA', '2010-12-14 03:59:32', NULL, '1'),
('140107', '14', '01', '07', 'LAGUNAS', '2010-12-14 03:59:32', NULL, '1'),
('140108', '14', '01', '08', 'MONSEFU', '2010-12-14 03:59:32', NULL, '1'),
('140109', '14', '01', '09', 'NUEVA ARICA', '2010-12-14 03:59:32', NULL, '1'),
('140110', '14', '01', '10', 'OYOTUN', '2010-12-14 03:59:32', NULL, '1'),
('140111', '14', '01', '11', 'PICSI', '2010-12-14 03:59:32', NULL, '1'),
('140112', '14', '01', '12', 'PIMENTEL', '2010-12-14 03:59:32', NULL, '1'),
('140113', '14', '01', '13', 'REQUE', '2010-12-14 03:59:32', NULL, '1'),
('140114', '14', '01', '14', 'SANTA ROSA', '2010-12-14 03:59:32', NULL, '1'),
('140115', '14', '01', '15', 'SAÑA', '2010-12-14 03:59:32', NULL, '1'),
('140116', '14', '01', '16', 'CAYALTI', '2010-12-14 03:59:32', NULL, '1'),
('140117', '14', '01', '17', 'PATAPO', '2010-12-14 03:59:32', NULL, '1'),
('140118', '14', '01', '18', 'POMALCA', '2010-12-14 03:59:32', NULL, '1'),
('140119', '14', '01', '19', 'PUCALA', '2010-12-14 03:59:32', NULL, '1'),
('140120', '14', '01', '20', 'TUMAN', '2010-12-14 03:59:32', NULL, '1'),
('140200', '14', '02', '00', 'FERREÑAFE', '2010-12-14 03:59:32', NULL, '1'),
('140201', '14', '02', '01', 'FERREÑAFE', '2010-12-14 03:59:32', NULL, '1'),
('140202', '14', '02', '02', 'CAÑARIS', '2010-12-14 03:59:32', NULL, '1'),
('140203', '14', '02', '03', 'INCAHUASI', '2010-12-14 03:59:32', NULL, '1'),
('140204', '14', '02', '04', 'MANUEL ANTONIO MESONES MURO', '2010-12-14 03:59:32', NULL, '1'),
('140205', '14', '02', '05', 'PITIPO', '2010-12-14 03:59:32', NULL, '1'),
('140206', '14', '02', '06', 'PUEBLO NUEVO', '2010-12-14 03:59:32', NULL, '1'),
('140300', '14', '03', '00', 'LAMBAYEQUE', '2010-12-14 03:59:32', NULL, '1'),
('140301', '14', '03', '01', 'LAMBAYEQUE', '2010-12-14 03:59:32', NULL, '1'),
('140302', '14', '03', '02', 'CHOCHOPE', '2010-12-14 03:59:32', NULL, '1'),
('140303', '14', '03', '03', 'ILLIMO', '2010-12-14 03:59:32', NULL, '1'),
('140304', '14', '03', '04', 'JAYANCA', '2010-12-14 03:59:32', NULL, '1'),
('140305', '14', '03', '05', 'MOCHUMI', '2010-12-14 03:59:32', NULL, '1'),
('140306', '14', '03', '06', 'MORROPE', '2010-12-14 03:59:32', NULL, '1'),
('140307', '14', '03', '07', 'MOTUPE', '2010-12-14 03:59:32', NULL, '1'),
('140308', '14', '03', '08', 'OLMOS', '2010-12-14 03:59:32', NULL, '1'),
('140309', '14', '03', '09', 'PACORA', '2010-12-14 03:59:32', NULL, '1'),
('140310', '14', '03', '10', 'SALAS', '2010-12-14 03:59:32', NULL, '1'),
('140311', '14', '03', '11', 'SAN JOSE', '2010-12-14 03:59:32', NULL, '1'),
('140312', '14', '03', '12', 'TUCUME', '2010-12-14 03:59:32', NULL, '1'),
('150000', '15', '00', '00', 'LIMA', '2010-12-14 03:59:32', NULL, '1'),
('150100', '15', '01', '00', 'LIMA', '2010-12-14 03:59:32', NULL, '1'),
('150101', '15', '01', '01', 'LIMA', '2010-12-14 03:59:32', NULL, '1'),
('150102', '15', '01', '02', 'ANCON', '2010-12-14 03:59:32', NULL, '1'),
('150103', '15', '01', '03', 'ATE', '2010-12-14 03:59:32', NULL, '1'),
('150104', '15', '01', '04', 'BARRANCO', '2010-12-14 03:59:32', NULL, '1'),
('150105', '15', '01', '05', 'BREÑA', '2010-12-14 03:59:32', NULL, '1'),
('150106', '15', '01', '06', 'CARABAYLLO', '2010-12-14 03:59:32', NULL, '1'),
('150107', '15', '01', '07', 'CHACLACAYO', '2010-12-14 03:59:32', NULL, '1'),
('150108', '15', '01', '08', 'CHORRILLOS', '2010-12-14 03:59:32', NULL, '1'),
('150109', '15', '01', '09', 'CIENEGUILLA', '2010-12-14 03:59:32', NULL, '1'),
('150110', '15', '01', '10', 'COMAS', '2010-12-14 03:59:32', NULL, '1'),
('150111', '15', '01', '11', 'EL AGUSTINO', '2010-12-14 03:59:32', NULL, '1'),
('150112', '15', '01', '12', 'INDEPENDENCIA', '2010-12-14 03:59:32', NULL, '1'),
('150113', '15', '01', '13', 'JESUS MARIA', '2010-12-14 03:59:32', NULL, '1'),
('150114', '15', '01', '14', 'LA MOLINA', '2010-12-14 03:59:32', NULL, '1'),
('150115', '15', '01', '15', 'LA VICTORIA', '2010-12-14 03:59:32', NULL, '1'),
('150116', '15', '01', '16', 'LINCE', '2010-12-14 03:59:32', NULL, '1'),
('150117', '15', '01', '17', 'LOS OLIVOS', '2010-12-14 03:59:32', NULL, '1'),
('150118', '15', '01', '18', 'LURIGANCHO', '2010-12-14 03:59:32', NULL, '1'),
('150119', '15', '01', '19', 'LURIN', '2010-12-14 03:59:32', NULL, '1'),
('150120', '15', '01', '20', 'MAGDALENA DEL MAR', '2010-12-14 03:59:32', NULL, '1'),
('150121', '15', '01', '21', 'MAGDALENA VIEJA', '2010-12-14 03:59:32', NULL, '1'),
('150122', '15', '01', '22', 'MIRAFLORES', '2010-12-14 03:59:32', NULL, '1'),
('150123', '15', '01', '23', 'PACHACAMAC', '2010-12-14 03:59:32', NULL, '1'),
('150124', '15', '01', '24', 'PUCUSANA', '2010-12-14 03:59:32', NULL, '1'),
('150125', '15', '01', '25', 'PUENTE PIEDRA', '2010-12-14 03:59:32', NULL, '1'),
('150126', '15', '01', '26', 'PUNTA HERMOSA', '2010-12-14 03:59:32', NULL, '1'),
('150127', '15', '01', '27', 'PUNTA NEGRA', '2010-12-14 03:59:32', NULL, '1'),
('150128', '15', '01', '28', 'RIMAC', '2010-12-14 03:59:32', NULL, '1'),
('150129', '15', '01', '29', 'SAN BARTOLO', '2010-12-14 03:59:32', NULL, '1'),
('150130', '15', '01', '30', 'SAN BORJA', '2010-12-14 03:59:32', NULL, '1'),
('150131', '15', '01', '31', 'SAN ISIDRO', '2010-12-14 03:59:32', NULL, '1'),
('150132', '15', '01', '32', 'SAN JUAN DE LURIGANCHO', '2010-12-14 03:59:32', NULL, '1'),
('150133', '15', '01', '33', 'SAN JUAN DE MIRAFLORES', '2010-12-14 03:59:32', NULL, '1'),
('150134', '15', '01', '34', 'SAN LUIS', '2010-12-14 03:59:32', NULL, '1'),
('150135', '15', '01', '35', 'SAN MARTIN DE PORRES', '2010-12-14 03:59:32', NULL, '1'),
('150136', '15', '01', '36', 'SAN MIGUEL', '2010-12-14 03:59:32', NULL, '1'),
('150137', '15', '01', '37', 'SANTA ANITA', '2010-12-14 03:59:32', NULL, '1'),
('150138', '15', '01', '38', 'SANTA MARIA DEL MAR', '2010-12-14 03:59:32', NULL, '1'),
('150139', '15', '01', '39', 'SANTA ROSA', '2010-12-14 03:59:32', NULL, '1'),
('150140', '15', '01', '40', 'SANTIAGO DE SURCO', '2010-12-14 03:59:32', NULL, '1'),
('150141', '15', '01', '41', 'SURQUILLO', '2010-12-14 03:59:32', NULL, '1'),
('150142', '15', '01', '42', 'VILLA EL SALVADOR', '2010-12-14 03:59:32', NULL, '1'),
('150143', '15', '01', '43', 'VILLA MARIA DEL TRIUNFO', '2010-12-14 03:59:32', NULL, '1'),
('150200', '15', '02', '00', 'BARRANCA', '2010-12-14 03:59:32', NULL, '1'),
('150201', '15', '02', '01', 'BARRANCA', '2010-12-14 03:59:32', NULL, '1'),
('150202', '15', '02', '02', 'PARAMONGA', '2010-12-14 03:59:32', NULL, '1'),
('150203', '15', '02', '03', 'PATIVILCA', '2010-12-14 03:59:32', NULL, '1'),
('150204', '15', '02', '04', 'SUPE', '2010-12-14 03:59:32', NULL, '1'),
('150205', '15', '02', '05', 'SUPE PUERTO', '2010-12-14 03:59:32', NULL, '1'),
('150300', '15', '03', '00', 'CAJATAMBO', '2010-12-14 03:59:32', NULL, '1'),
('150301', '15', '03', '01', 'CAJATAMBO', '2010-12-14 03:59:32', NULL, '1'),
('150302', '15', '03', '02', 'COPA', '2010-12-14 03:59:32', NULL, '1'),
('150303', '15', '03', '03', 'GORGOR', '2010-12-14 03:59:32', NULL, '1'),
('150304', '15', '03', '04', 'HUANCAPON', '2010-12-14 03:59:32', NULL, '1'),
('150305', '15', '03', '05', 'MANAS', '2010-12-14 03:59:32', NULL, '1'),
('150400', '15', '04', '00', 'CANTA', '2010-12-14 03:59:32', NULL, '1'),
('150401', '15', '04', '01', 'CANTA', '2010-12-14 03:59:32', NULL, '1'),
('150402', '15', '04', '02', 'ARAHUAY', '2010-12-14 03:59:32', NULL, '1'),
('150403', '15', '04', '03', 'HUAMANTANGA', '2010-12-14 03:59:32', NULL, '1'),
('150404', '15', '04', '04', 'HUAROS', '2010-12-14 03:59:32', NULL, '1'),
('150405', '15', '04', '05', 'LACHAQUI', '2010-12-14 03:59:32', NULL, '1'),
('150406', '15', '04', '06', 'SAN BUENAVENTURA', '2010-12-14 03:59:32', NULL, '1'),
('150407', '15', '04', '07', 'SANTA ROSA DE QUIVES', '2010-12-14 03:59:32', NULL, '1'),
('150500', '15', '05', '00', 'CAÑETE', '2010-12-14 03:59:32', NULL, '1'),
('150501', '15', '05', '01', 'SAN VICENTE DE CAÑETE', '2010-12-14 03:59:32', NULL, '1'),
('150502', '15', '05', '02', 'ASIA', '2010-12-14 03:59:32', NULL, '1'),
('150503', '15', '05', '03', 'CALANGO', '2010-12-14 03:59:32', NULL, '1'),
('150504', '15', '05', '04', 'CERRO AZUL', '2010-12-14 03:59:32', NULL, '1'),
('150505', '15', '05', '05', 'CHILCA', '2010-12-14 03:59:32', NULL, '1'),
('150506', '15', '05', '06', 'COAYLLO', '2010-12-14 03:59:32', NULL, '1'),
('150507', '15', '05', '07', 'IMPERIAL', '2010-12-14 03:59:32', NULL, '1'),
('150508', '15', '05', '08', 'LUNAHUANA', '2010-12-14 03:59:32', NULL, '1'),
('150509', '15', '05', '09', 'MALA', '2010-12-14 03:59:32', NULL, '1'),
('150510', '15', '05', '10', 'NUEVO IMPERIAL', '2010-12-14 03:59:32', NULL, '1'),
('150511', '15', '05', '11', 'PACARAN', '2010-12-14 03:59:32', NULL, '1'),
('150512', '15', '05', '12', 'QUILMANA', '2010-12-14 03:59:32', NULL, '1'),
('150513', '15', '05', '13', 'SAN ANTONIO', '2010-12-14 03:59:32', NULL, '1'),
('150514', '15', '05', '14', 'SAN LUIS', '2010-12-14 03:59:32', NULL, '1'),
('150515', '15', '05', '15', 'SANTA CRUZ DE FLORES', '2010-12-14 03:59:32', NULL, '1'),
('150516', '15', '05', '16', 'ZUÑIGA', '2010-12-14 03:59:32', NULL, '1'),
('150600', '15', '06', '00', 'HUARAL', '2010-12-14 03:59:32', NULL, '1'),
('150601', '15', '06', '01', 'HUARAL', '2010-12-14 03:59:32', NULL, '1'),
('150602', '15', '06', '02', 'ATAVILLOS ALTO', '2010-12-14 03:59:32', NULL, '1'),
('150603', '15', '06', '03', 'ATAVILLOS BAJO', '2010-12-14 03:59:32', NULL, '1'),
('150604', '15', '06', '04', 'AUCALLAMA', '2010-12-14 03:59:32', NULL, '1'),
('150605', '15', '06', '05', 'CHANCAY', '2010-12-14 03:59:32', NULL, '1'),
('150606', '15', '06', '06', 'IHUARI', '2010-12-14 03:59:32', NULL, '1'),
('150607', '15', '06', '07', 'LAMPIAN', '2010-12-14 03:59:32', NULL, '1'),
('150608', '15', '06', '08', 'PACARAOS', '2010-12-14 03:59:32', NULL, '1'),
('150609', '15', '06', '09', 'SAN MIGUEL DE ACOS', '2010-12-14 03:59:32', NULL, '1'),
('150610', '15', '06', '10', 'SANTA CRUZ DE ANDAMARCA', '2010-12-14 03:59:32', NULL, '1'),
('150611', '15', '06', '11', 'SUMBILCA', '2010-12-14 03:59:32', NULL, '1'),
('150612', '15', '06', '12', 'VEINTISIETE DE NOVIEMBRE', '2010-12-14 03:59:32', NULL, '1'),
('150700', '15', '07', '00', 'HUAROCHIRI', '2010-12-14 03:59:32', NULL, '1'),
('150701', '15', '07', '01', 'MATUCANA', '2010-12-14 03:59:32', NULL, '1'),
('150702', '15', '07', '02', 'ANTIOQUIA', '2010-12-14 03:59:32', NULL, '1'),
('150703', '15', '07', '03', 'CALLAHUANCA', '2010-12-14 03:59:32', NULL, '1'),
('150704', '15', '07', '04', 'CARAMPOMA', '2010-12-14 03:59:32', NULL, '1'),
('150705', '15', '07', '05', 'CHICLA', '2010-12-14 03:59:32', NULL, '1'),
('150706', '15', '07', '06', 'CUENCA', '2010-12-14 03:59:32', NULL, '1'),
('150707', '15', '07', '07', 'HUACHUPAMPA', '2010-12-14 03:59:32', NULL, '1'),
('150708', '15', '07', '08', 'HUANZA', '2010-12-14 03:59:32', NULL, '1'),
('150709', '15', '07', '09', 'HUAROCHIRI', '2010-12-14 03:59:32', NULL, '1'),
('150710', '15', '07', '10', 'LAHUAYTAMBO', '2010-12-14 03:59:32', NULL, '1'),
('150711', '15', '07', '11', 'LANGA', '2010-12-14 03:59:32', NULL, '1'),
('150712', '15', '07', '12', 'LARAOS', '2010-12-14 03:59:32', NULL, '1'),
('150713', '15', '07', '13', 'MARIATANA', '2010-12-14 03:59:32', NULL, '1'),
('150714', '15', '07', '14', 'RICARDO PALMA', '2010-12-14 03:59:32', NULL, '1'),
('150715', '15', '07', '15', 'SAN ANDRES DE TUPICOCHA', '2010-12-14 03:59:32', NULL, '1'),
('150716', '15', '07', '16', 'SAN ANTONIO', '2010-12-14 03:59:32', NULL, '1'),
('150717', '15', '07', '17', 'SAN BARTOLOME', '2010-12-14 03:59:32', NULL, '1'),
('150718', '15', '07', '18', 'SAN DAMIAN', '2010-12-14 03:59:32', NULL, '1'),
('150719', '15', '07', '19', 'SAN JUAN DE IRIS', '2010-12-14 03:59:32', NULL, '1'),
('150720', '15', '07', '20', 'SAN JUAN DE TANTARANCHE', '2010-12-14 03:59:32', NULL, '1'),
('150721', '15', '07', '21', 'SAN LORENZO DE QUINTI', '2010-12-14 03:59:32', NULL, '1'),
('150722', '15', '07', '22', 'SAN MATEO', '2010-12-14 03:59:32', NULL, '1'),
('150723', '15', '07', '23', 'SAN MATEO DE OTAO', '2010-12-14 03:59:32', NULL, '1'),
('150724', '15', '07', '24', 'SAN PEDRO DE CASTA', '2010-12-14 03:59:32', NULL, '1'),
('150725', '15', '07', '25', 'SAN PEDRO DE HUANCAYRE', '2010-12-14 03:59:32', NULL, '1'),
('150726', '15', '07', '26', 'SANGALLAYA', '2010-12-14 03:59:32', NULL, '1'),
('150727', '15', '07', '27', 'SANTA CRUZ DE COCACHACRA', '2010-12-14 03:59:32', NULL, '1'),
('150728', '15', '07', '28', 'SANTA EULALIA', '2010-12-14 03:59:32', NULL, '1'),
('150729', '15', '07', '29', 'SANTIAGO DE ANCHUCAYA', '2010-12-14 03:59:32', NULL, '1'),
('150730', '15', '07', '30', 'SANTIAGO DE TUNA', '2010-12-14 03:59:32', NULL, '1'),
('150731', '15', '07', '31', 'SANTO DOMINGO DE LOS OLLEROS', '2010-12-14 03:59:32', NULL, '1'),
('150732', '15', '07', '32', 'SURCO', '2010-12-14 03:59:32', NULL, '1'),
('150800', '15', '08', '00', 'HUAURA', '2010-12-14 03:59:32', NULL, '1'),
('150801', '15', '08', '01', 'HUACHO', '2010-12-14 03:59:32', NULL, '1'),
('150802', '15', '08', '02', 'AMBAR', '2010-12-14 03:59:32', NULL, '1'),
('150803', '15', '08', '03', 'CALETA DE CARQUIN', '2010-12-14 03:59:32', NULL, '1'),
('150804', '15', '08', '04', 'CHECRAS', '2010-12-14 03:59:32', NULL, '1'),
('150805', '15', '08', '05', 'HUALMAY', '2010-12-14 03:59:32', NULL, '1'),
('150806', '15', '08', '06', 'HUAURA', '2010-12-14 03:59:32', NULL, '1'),
('150807', '15', '08', '07', 'LEONCIO PRADO', '2010-12-14 03:59:32', NULL, '1'),
('150808', '15', '08', '08', 'PACCHO', '2010-12-14 03:59:32', NULL, '1'),
('150809', '15', '08', '09', 'SANTA LEONOR', '2010-12-14 03:59:32', NULL, '1'),
('150810', '15', '08', '10', 'SANTA MARIA', '2010-12-14 03:59:32', NULL, '1'),
('150811', '15', '08', '11', 'SAYAN', '2010-12-14 03:59:32', NULL, '1'),
('150812', '15', '08', '12', 'VEGUETA', '2010-12-14 03:59:32', NULL, '1'),
('150900', '15', '09', '00', 'OYON', '2010-12-14 03:59:32', NULL, '1'),
('150901', '15', '09', '01', 'OYON', '2010-12-14 03:59:32', NULL, '1'),
('150902', '15', '09', '02', 'ANDAJES', '2010-12-14 03:59:32', NULL, '1'),
('150903', '15', '09', '03', 'CAUJUL', '2010-12-14 03:59:32', NULL, '1'),
('150904', '15', '09', '04', 'COCHAMARCA', '2010-12-14 03:59:32', NULL, '1'),
('150905', '15', '09', '05', 'NAVAN', '2010-12-14 03:59:32', NULL, '1'),
('150906', '15', '09', '06', 'PACHANGARA', '2010-12-14 03:59:32', NULL, '1'),
('151000', '15', '10', '00', 'YAUYOS', '2010-12-14 03:59:32', NULL, '1'),
('151001', '15', '10', '01', 'YAUYOS', '2010-12-14 03:59:32', NULL, '1'),
('151002', '15', '10', '02', 'ALIS', '2010-12-14 03:59:32', NULL, '1'),
('151003', '15', '10', '03', 'AYAUCA', '2010-12-14 03:59:32', NULL, '1'),
('151004', '15', '10', '04', 'AYAVIRI', '2010-12-14 03:59:32', NULL, '1'),
('151005', '15', '10', '05', 'AZANGARO', '2010-12-14 03:59:32', NULL, '1'),
('151006', '15', '10', '06', 'CACRA', '2010-12-14 03:59:32', NULL, '1'),
('151007', '15', '10', '07', 'CARANIA', '2010-12-14 03:59:32', NULL, '1'),
('151008', '15', '10', '08', 'CATAHUASI', '2010-12-14 03:59:32', NULL, '1'),
('151009', '15', '10', '09', 'CHOCOS', '2010-12-14 03:59:32', NULL, '1'),
('151010', '15', '10', '10', 'COCHAS', '2010-12-14 03:59:32', NULL, '1'),
('151011', '15', '10', '11', 'COLONIA', '2010-12-14 03:59:32', NULL, '1'),
('151012', '15', '10', '12', 'HONGOS', '2010-12-14 03:59:32', NULL, '1'),
('151013', '15', '10', '13', 'HUAMPARA', '2010-12-14 03:59:32', NULL, '1'),
('151014', '15', '10', '14', 'HUANCAYA', '2010-12-14 03:59:32', NULL, '1'),
('151015', '15', '10', '15', 'HUANGASCAR', '2010-12-14 03:59:32', NULL, '1'),
('151016', '15', '10', '16', 'HUANTAN', '2010-12-14 03:59:32', NULL, '1'),
('151017', '15', '10', '17', 'HUAÑEC', '2010-12-14 03:59:32', NULL, '1'),
('151018', '15', '10', '18', 'LARAOS', '2010-12-14 03:59:32', NULL, '1'),
('151019', '15', '10', '19', 'LINCHA', '2010-12-14 03:59:32', NULL, '1'),
('151020', '15', '10', '20', 'MADEAN', '2010-12-14 03:59:32', NULL, '1'),
('151021', '15', '10', '21', 'MIRAFLORES', '2010-12-14 03:59:32', NULL, '1'),
('151022', '15', '10', '22', 'OMAS', '2010-12-14 03:59:32', NULL, '1'),
('151023', '15', '10', '23', 'PUTINZA', '2010-12-14 03:59:32', NULL, '1'),
('151024', '15', '10', '24', 'QUINCHES', '2010-12-14 03:59:32', NULL, '1'),
('151025', '15', '10', '25', 'QUINOCAY', '2010-12-14 03:59:32', NULL, '1'),
('151026', '15', '10', '26', 'SAN JOAQUIN', '2010-12-14 03:59:32', NULL, '1'),
('151027', '15', '10', '27', 'SAN PEDRO DE PILAS', '2010-12-14 03:59:32', NULL, '1'),
('151028', '15', '10', '28', 'TANTA', '2010-12-14 03:59:32', NULL, '1'),
('151029', '15', '10', '29', 'TAURIPAMPA', '2010-12-14 03:59:32', NULL, '1'),
('151030', '15', '10', '30', 'TOMAS', '2010-12-14 03:59:32', NULL, '1'),
('151031', '15', '10', '31', 'TUPE', '2010-12-14 03:59:32', NULL, '1'),
('151032', '15', '10', '32', 'VIÑAC', '2010-12-14 03:59:32', NULL, '1'),
('151033', '15', '10', '33', 'VITIS', '2010-12-14 03:59:32', NULL, '1'),
('160000', '16', '00', '00', 'LORETO', '2010-12-14 03:59:32', NULL, '1'),
('160100', '16', '01', '00', 'MAYNAS', '2010-12-14 03:59:32', NULL, '1'),
('160101', '16', '01', '01', 'IQUITOS', '2010-12-14 03:59:32', NULL, '1'),
('160102', '16', '01', '02', 'ALTO NANAY', '2010-12-14 03:59:32', NULL, '1'),
('160103', '16', '01', '03', 'FERNANDO LORES', '2010-12-14 03:59:32', NULL, '1'),
('160104', '16', '01', '04', 'INDIANA', '2010-12-14 03:59:32', NULL, '1'),
('160105', '16', '01', '05', 'LAS AMAZONAS', '2010-12-14 03:59:32', NULL, '1'),
('160106', '16', '01', '06', 'MAZAN', '2010-12-14 03:59:32', NULL, '1'),
('160107', '16', '01', '07', 'NAPO', '2010-12-14 03:59:32', NULL, '1'),
('160108', '16', '01', '08', 'PUNCHANA', '2010-12-14 03:59:32', NULL, '1'),
('160109', '16', '01', '09', 'PUTUMAYO', '2010-12-14 03:59:32', NULL, '1'),
('160110', '16', '01', '10', 'TORRES CAUSANA', '2010-12-14 03:59:32', NULL, '1'),
('160112', '16', '01', '12', 'BELEN', '2010-12-14 03:59:32', NULL, '1'),
('160113', '16', '01', '13', 'SAN JUAN BAUTISTA', '2010-12-14 03:59:32', NULL, '1'),
('160114', '16', '01', '14', 'TENIENTE MANUEL CLAVERO', '2010-12-14 03:59:32', NULL, '1'),
('160200', '16', '02', '00', 'ALTO AMAZONAS', '2010-12-14 03:59:32', NULL, '1'),
('160201', '16', '02', '01', 'YURIMAGUAS', '2010-12-14 03:59:32', NULL, '1'),
('160202', '16', '02', '02', 'BALSAPUERTO', '2010-12-14 03:59:32', NULL, '1'),
('160205', '16', '02', '05', 'JEBEROS', '2010-12-14 03:59:32', NULL, '1'),
('160206', '16', '02', '06', 'LAGUNAS', '2010-12-14 03:59:32', NULL, '1'),
('160210', '16', '02', '10', 'SANTA CRUZ', '2010-12-14 03:59:32', NULL, '1'),
('160211', '16', '02', '11', 'TENIENTE CESAR LOPEZ ROJAS', '2010-12-14 03:59:32', NULL, '1'),
('160300', '16', '03', '00', 'LORETO', '2010-12-14 03:59:32', NULL, '1'),
('160301', '16', '03', '01', 'NAUTA', '2010-12-14 03:59:32', NULL, '1'),
('160302', '16', '03', '02', 'PARINARI', '2010-12-14 03:59:32', NULL, '1'),
('160303', '16', '03', '03', 'TIGRE', '2010-12-14 03:59:32', NULL, '1'),
('160304', '16', '03', '04', 'TROMPETEROS', '2010-12-14 03:59:32', NULL, '1'),
('160305', '16', '03', '05', 'URARINAS', '2010-12-14 03:59:32', NULL, '1'),
('160400', '16', '04', '00', 'MARISCAL RAMON CASTILLA', '2010-12-14 03:59:32', NULL, '1'),
('160401', '16', '04', '01', 'RAMON CASTILLA', '2010-12-14 03:59:32', NULL, '1'),
('160402', '16', '04', '02', 'PEBAS', '2010-12-14 03:59:32', NULL, '1'),
('160403', '16', '04', '03', 'YAVARI', '2010-12-14 03:59:32', NULL, '1'),
('160404', '16', '04', '04', 'SAN PABLO', '2010-12-14 03:59:32', NULL, '1'),
('160500', '16', '05', '00', 'REQUENA', '2010-12-14 03:59:32', NULL, '1'),
('160501', '16', '05', '01', 'REQUENA', '2010-12-14 03:59:32', NULL, '1'),
('160502', '16', '05', '02', 'ALTO TAPICHE', '2010-12-14 03:59:32', NULL, '1'),
('160503', '16', '05', '03', 'CAPELO', '2010-12-14 03:59:32', NULL, '1'),
('160504', '16', '05', '04', 'EMILIO SAN MARTIN', '2010-12-14 03:59:32', NULL, '1'),
('160505', '16', '05', '05', 'MAQUIA', '2010-12-14 03:59:32', NULL, '1'),
('160506', '16', '05', '06', 'PUINAHUA', '2010-12-14 03:59:32', NULL, '1'),
('160507', '16', '05', '07', 'SAQUENA', '2010-12-14 03:59:32', NULL, '1'),
('160508', '16', '05', '08', 'SOPLIN', '2010-12-14 03:59:32', NULL, '1'),
('160509', '16', '05', '09', 'TAPICHE', '2010-12-14 03:59:32', NULL, '1'),
('160510', '16', '05', '10', 'JENARO HERRERA', '2010-12-14 03:59:32', NULL, '1'),
('160511', '16', '05', '11', 'YAQUERANA', '2010-12-14 03:59:32', NULL, '1'),
('160600', '16', '06', '00', 'UCAYALI', '2010-12-14 03:59:32', NULL, '1'),
('160601', '16', '06', '01', 'CONTAMANA', '2010-12-14 03:59:32', NULL, '1'),
('160602', '16', '06', '02', 'INAHUAYA', '2010-12-14 03:59:32', NULL, '1'),
('160603', '16', '06', '03', 'PADRE MARQUEZ', '2010-12-14 03:59:32', NULL, '1'),
('160604', '16', '06', '04', 'PAMPA HERMOSA', '2010-12-14 03:59:32', NULL, '1'),
('160605', '16', '06', '05', 'SARAYACU', '2010-12-14 03:59:32', NULL, '1'),
('160606', '16', '06', '06', 'VARGAS GUERRA', '2010-12-14 03:59:32', NULL, '1'),
('160700', '16', '07', '00', 'DATEM DEL MARAÑON', '2010-12-14 03:59:32', NULL, '1'),
('160701', '16', '07', '01', 'BARRANCA', '2010-12-14 03:59:32', NULL, '1'),
('160702', '16', '07', '02', 'CAHUAPANAS', '2010-12-14 03:59:32', NULL, '1'),
('160703', '16', '07', '03', 'MANSERICHE', '2010-12-14 03:59:32', NULL, '1'),
('160704', '16', '07', '04', 'MORONA', '2010-12-14 03:59:32', NULL, '1'),
('160705', '16', '07', '05', 'PASTAZA', '2010-12-14 03:59:32', NULL, '1'),
('160706', '16', '07', '06', 'ANDOAS', '2010-12-14 03:59:32', NULL, '1'),
('170000', '17', '00', '00', 'MADRE DE DIOS', '2010-12-14 03:59:32', NULL, '1'),
('170100', '17', '01', '00', 'TAMBOPATA', '2010-12-14 03:59:32', NULL, '1'),
('170101', '17', '01', '01', 'TAMBOPATA', '2010-12-14 03:59:32', NULL, '1'),
('170102', '17', '01', '02', 'INAMBARI', '2010-12-14 03:59:32', NULL, '1'),
('170103', '17', '01', '03', 'LAS PIEDRAS', '2010-12-14 03:59:32', NULL, '1'),
('170104', '17', '01', '04', 'LABERINTO', '2010-12-14 03:59:32', NULL, '1'),
('170200', '17', '02', '00', 'MANU', '2010-12-14 03:59:32', NULL, '1'),
('170201', '17', '02', '01', 'MANU', '2010-12-14 03:59:32', NULL, '1'),
('170202', '17', '02', '02', 'FITZCARRALD', '2010-12-14 03:59:32', NULL, '1'),
('170203', '17', '02', '03', 'MADRE DE DIOS', '2010-12-14 03:59:32', NULL, '1'),
('170204', '17', '02', '04', 'HUEPETUHE', '2010-12-14 03:59:32', NULL, '1'),
('170300', '17', '03', '00', 'TAHUAMANU', '2010-12-14 03:59:32', NULL, '1'),
('170301', '17', '03', '01', 'IÑAPARI', '2010-12-14 03:59:32', NULL, '1'),
('170302', '17', '03', '02', 'IBERIA', '2010-12-14 03:59:32', NULL, '1'),
('170303', '17', '03', '03', 'TAHUAMANU', '2010-12-14 03:59:32', NULL, '1'),
('180000', '18', '00', '00', 'MOQUEGUA', '2010-12-14 03:59:32', NULL, '1'),
('180100', '18', '01', '00', 'MARISCAL NIETO', '2010-12-14 03:59:32', NULL, '1'),
('180101', '18', '01', '01', 'MOQUEGUA', '2010-12-14 03:59:32', NULL, '1'),
('180102', '18', '01', '02', 'CARUMAS', '2010-12-14 03:59:32', NULL, '1'),
('180103', '18', '01', '03', 'CUCHUMBAYA', '2010-12-14 03:59:32', NULL, '1'),
('180104', '18', '01', '04', 'SAMEGUA', '2010-12-14 03:59:32', NULL, '1'),
('180105', '18', '01', '05', 'SAN CRISTOBAL', '2010-12-14 03:59:32', NULL, '1'),
('180106', '18', '01', '06', 'TORATA', '2010-12-14 03:59:32', NULL, '1'),
('180200', '18', '02', '00', 'GENERAL SANCHEZ CERRO', '2010-12-14 03:59:32', NULL, '1'),
('180201', '18', '02', '01', 'OMATE', '2010-12-14 03:59:32', NULL, '1'),
('180202', '18', '02', '02', 'CHOJATA', '2010-12-14 03:59:32', NULL, '1'),
('180203', '18', '02', '03', 'COALAQUE', '2010-12-14 03:59:32', NULL, '1'),
('180204', '18', '02', '04', 'ICHUÑA', '2010-12-14 03:59:32', NULL, '1'),
('180205', '18', '02', '05', 'LA CAPILLA', '2010-12-14 03:59:32', NULL, '1'),
('180206', '18', '02', '06', 'LLOQUE', '2010-12-14 03:59:32', NULL, '1'),
('180207', '18', '02', '07', 'MATALAQUE', '2010-12-14 03:59:32', NULL, '1'),
('180208', '18', '02', '08', 'PUQUINA', '2010-12-14 03:59:32', NULL, '1'),
('180209', '18', '02', '09', 'QUINISTAQUILLAS', '2010-12-14 03:59:32', NULL, '1'),
('180210', '18', '02', '10', 'UBINAS', '2010-12-14 03:59:32', NULL, '1'),
('180211', '18', '02', '11', 'YUNGA', '2010-12-14 03:59:32', NULL, '1'),
('180300', '18', '03', '00', 'ILO', '2010-12-14 03:59:32', NULL, '1'),
('180301', '18', '03', '01', 'ILO', '2010-12-14 03:59:32', NULL, '1'),
('180302', '18', '03', '02', 'EL ALGARROBAL', '2010-12-14 03:59:32', NULL, '1'),
('180303', '18', '03', '03', 'PACOCHA', '2010-12-14 03:59:32', NULL, '1'),
('190000', '19', '00', '00', 'PASCO', '2010-12-14 03:59:32', NULL, '1'),
('190100', '19', '01', '00', 'PASCO', '2010-12-14 03:59:32', NULL, '1'),
('190101', '19', '01', '01', 'CHAUPIMARCA', '2010-12-14 03:59:32', NULL, '1'),
('190102', '19', '01', '02', 'HUACHON', '2010-12-14 03:59:32', NULL, '1'),
('190103', '19', '01', '03', 'HUARIACA', '2010-12-14 03:59:32', NULL, '1'),
('190104', '19', '01', '04', 'HUAYLLAY', '2010-12-14 03:59:32', NULL, '1'),
('190105', '19', '01', '05', 'NINACACA', '2010-12-14 03:59:32', NULL, '1'),
('190106', '19', '01', '06', 'PALLANCHACRA', '2010-12-14 03:59:32', NULL, '1'),
('190107', '19', '01', '07', 'PAUCARTAMBO', '2010-12-14 03:59:32', NULL, '1'),
('190108', '19', '01', '08', 'SAN FRANCISCO DE ASIS DE YARUSYACAN', '2010-12-14 03:59:32', NULL, '1'),
('190109', '19', '01', '09', 'SIMON BOLIVAR', '2010-12-14 03:59:32', NULL, '1'),
('190110', '19', '01', '10', 'TICLACAYAN', '2010-12-14 03:59:32', NULL, '1'),
('190111', '19', '01', '11', 'TINYAHUARCO', '2010-12-14 03:59:32', NULL, '1'),
('190112', '19', '01', '12', 'VICCO', '2010-12-14 03:59:32', NULL, '1'),
('190113', '19', '01', '13', 'YANACANCHA', '2010-12-14 03:59:32', NULL, '1'),
('190200', '19', '02', '00', 'DANIEL ALCIDES CARRION', '2010-12-14 03:59:32', NULL, '1'),
('190201', '19', '02', '01', 'YANAHUANCA', '2010-12-14 03:59:32', NULL, '1'),
('190202', '19', '02', '02', 'CHACAYAN', '2010-12-14 03:59:32', NULL, '1'),
('190203', '19', '02', '03', 'GOYLLARISQUIZGA', '2010-12-14 03:59:32', NULL, '1'),
('190204', '19', '02', '04', 'PAUCAR', '2010-12-14 03:59:32', NULL, '1'),
('190205', '19', '02', '05', 'SAN PEDRO DE PILLAO', '2010-12-14 03:59:32', NULL, '1'),
('190206', '19', '02', '06', 'SANTA ANA DE TUSI', '2010-12-14 03:59:32', NULL, '1'),
('190207', '19', '02', '07', 'TAPUC', '2010-12-14 03:59:32', NULL, '1'),
('190208', '19', '02', '08', 'VILCABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('190300', '19', '03', '00', 'OXAPAMPA', '2010-12-14 03:59:32', NULL, '1'),
('190301', '19', '03', '01', 'OXAPAMPA', '2010-12-14 03:59:32', NULL, '1'),
('190302', '19', '03', '02', 'CHONTABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('190303', '19', '03', '03', 'HUANCABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('190304', '19', '03', '04', 'PALCAZU', '2010-12-14 03:59:32', NULL, '1'),
('190305', '19', '03', '05', 'POZUZO', '2010-12-14 03:59:32', NULL, '1'),
('190306', '19', '03', '06', 'PUERTO BERMUDEZ', '2010-12-14 03:59:32', NULL, '1'),
('190307', '19', '03', '07', 'VILLA RICA', '2010-12-14 03:59:32', NULL, '1'),
('200000', '20', '00', '00', 'PIURA', '2010-12-14 03:59:32', NULL, '1'),
('200100', '20', '01', '00', 'PIURA', '2010-12-14 03:59:32', NULL, '1'),
('200101', '20', '01', '01', 'PIURA', '2010-12-14 03:59:32', NULL, '1'),
('200104', '20', '01', '04', 'CASTILLA', '2010-12-14 03:59:32', NULL, '1'),
('200105', '20', '01', '05', 'CATACAOS', '2010-12-14 03:59:32', NULL, '1'),
('200107', '20', '01', '07', 'CURA MORI', '2010-12-14 03:59:32', NULL, '1'),
('200108', '20', '01', '08', 'EL TALLAN', '2010-12-14 03:59:32', NULL, '1'),
('200109', '20', '01', '09', 'LA ARENA', '2010-12-14 03:59:32', NULL, '1'),
('200110', '20', '01', '10', 'LA UNION', '2010-12-14 03:59:32', NULL, '1'),
('200111', '20', '01', '11', 'LAS LOMAS', '2010-12-14 03:59:32', NULL, '1'),
('200114', '20', '01', '14', 'TAMBO GRANDE', '2010-12-14 03:59:32', NULL, '1'),
('200200', '20', '02', '00', 'AYABACA', '2010-12-14 03:59:32', NULL, '1'),
('200201', '20', '02', '01', 'AYABACA', '2010-12-14 03:59:32', NULL, '1'),
('200202', '20', '02', '02', 'FRIAS', '2010-12-14 03:59:32', NULL, '1'),
('200203', '20', '02', '03', 'JILILI', '2010-12-14 03:59:32', NULL, '1'),
('200204', '20', '02', '04', 'LAGUNAS', '2010-12-14 03:59:32', NULL, '1'),
('200205', '20', '02', '05', 'MONTERO', '2010-12-14 03:59:32', NULL, '1'),
('200206', '20', '02', '06', 'PACAIPAMPA', '2010-12-14 03:59:32', NULL, '1'),
('200207', '20', '02', '07', 'PAIMAS', '2010-12-14 03:59:32', NULL, '1'),
('200208', '20', '02', '08', 'SAPILLICA', '2010-12-14 03:59:32', NULL, '1'),
('200209', '20', '02', '09', 'SICCHEZ', '2010-12-14 03:59:32', NULL, '1'),
('200210', '20', '02', '10', 'SUYO', '2010-12-14 03:59:32', NULL, '1'),
('200300', '20', '03', '00', 'HUANCABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('200301', '20', '03', '01', 'HUANCABAMBA', '2010-12-14 03:59:32', NULL, '1'),
('200302', '20', '03', '02', 'CANCHAQUE', '2010-12-14 03:59:32', NULL, '1'),
('200303', '20', '03', '03', 'EL CARMEN DE LA FRONTERA', '2010-12-14 03:59:32', NULL, '1'),
('200304', '20', '03', '04', 'HUARMACA', '2010-12-14 03:59:32', NULL, '1'),
('200305', '20', '03', '05', 'LALAQUIZ', '2010-12-14 03:59:32', NULL, '1'),
('200306', '20', '03', '06', 'SAN MIGUEL DE EL FAIQUE', '2010-12-14 03:59:32', NULL, '1'),
('200307', '20', '03', '07', 'SONDOR', '2010-12-14 03:59:32', NULL, '1'),
('200308', '20', '03', '08', 'SONDORILLO', '2010-12-14 03:59:32', NULL, '1'),
('200400', '20', '04', '00', 'MORROPON', '2010-12-14 03:59:32', NULL, '1'),
('200401', '20', '04', '01', 'CHULUCANAS', '2010-12-14 03:59:32', NULL, '1'),
('200402', '20', '04', '02', 'BUENOS AIRES', '2010-12-14 03:59:32', NULL, '1'),
('200403', '20', '04', '03', 'CHALACO', '2010-12-14 03:59:32', NULL, '1'),
('200404', '20', '04', '04', 'LA MATANZA', '2010-12-14 03:59:32', NULL, '1'),
('200405', '20', '04', '05', 'MORROPON', '2010-12-14 03:59:32', NULL, '1'),
('200406', '20', '04', '06', 'SALITRAL', '2010-12-14 03:59:32', NULL, '1'),
('200407', '20', '04', '07', 'SAN JUAN DE BIGOTE', '2010-12-14 03:59:32', NULL, '1'),
('200408', '20', '04', '08', 'SANTA CATALINA DE MOSSA', '2010-12-14 03:59:32', NULL, '1'),
('200409', '20', '04', '09', 'SANTO DOMINGO', '2010-12-14 03:59:32', NULL, '1'),
('200410', '20', '04', '10', 'YAMANGO', '2010-12-14 03:59:32', NULL, '1'),
('200500', '20', '05', '00', 'PAITA', '2010-12-14 03:59:32', NULL, '1'),
('200501', '20', '05', '01', 'PAITA', '2010-12-14 03:59:32', NULL, '1'),
('200502', '20', '05', '02', 'AMOTAPE', '2010-12-14 03:59:32', NULL, '1'),
('200503', '20', '05', '03', 'ARENAL', '2010-12-14 03:59:32', NULL, '1'),
('200504', '20', '05', '04', 'COLAN', '2010-12-14 03:59:32', NULL, '1'),
('200505', '20', '05', '05', 'LA HUACA', '2010-12-14 03:59:32', NULL, '1'),
('200506', '20', '05', '06', 'TAMARINDO', '2010-12-14 03:59:32', NULL, '1'),
('200507', '20', '05', '07', 'VICHAYAL', '2010-12-14 03:59:32', NULL, '1'),
('200600', '20', '06', '00', 'SULLANA', '2010-12-14 03:59:32', NULL, '1'),
('200601', '20', '06', '01', 'SULLANA', '2010-12-14 03:59:32', NULL, '1'),
('200602', '20', '06', '02', 'BELLAVISTA', '2010-12-14 03:59:32', NULL, '1'),
('200603', '20', '06', '03', 'IGNACIO ESCUDERO', '2010-12-14 03:59:32', NULL, '1'),
('200604', '20', '06', '04', 'LANCONES', '2010-12-14 03:59:32', NULL, '1'),
('200605', '20', '06', '05', 'MARCAVELICA', '2010-12-14 03:59:32', NULL, '1'),
('200606', '20', '06', '06', 'MIGUEL CHECA', '2010-12-14 03:59:32', NULL, '1'),
('200607', '20', '06', '07', 'QUERECOTILLO', '2010-12-14 03:59:32', NULL, '1'),
('200608', '20', '06', '08', 'SALITRAL', '2010-12-14 03:59:32', NULL, '1'),
('200700', '20', '07', '00', 'TALARA', '2010-12-14 03:59:32', NULL, '1'),
('200701', '20', '07', '01', 'PARIÑAS', '2010-12-14 03:59:32', NULL, '1'),
('200702', '20', '07', '02', 'EL ALTO', '2010-12-14 03:59:32', NULL, '1'),
('200703', '20', '07', '03', 'LA BREA', '2010-12-14 03:59:32', NULL, '1'),
('200704', '20', '07', '04', 'LOBITOS', '2010-12-14 03:59:32', NULL, '1'),
('200705', '20', '07', '05', 'LOS ORGANOS', '2010-12-14 03:59:32', NULL, '1'),
('200706', '20', '07', '06', 'MANCORA', '2010-12-14 03:59:32', NULL, '1'),
('200800', '20', '08', '00', 'SECHURA', '2010-12-14 03:59:32', NULL, '1'),
('200801', '20', '08', '01', 'SECHURA', '2010-12-14 03:59:32', NULL, '1'),
('200802', '20', '08', '02', 'BELLAVISTA DE LA UNION', '2010-12-14 03:59:32', NULL, '1'),
('200803', '20', '08', '03', 'BERNAL', '2010-12-14 03:59:32', NULL, '1'),
('200804', '20', '08', '04', 'CRISTO NOS VALGA', '2010-12-14 03:59:32', NULL, '1'),
('200805', '20', '08', '05', 'VICE', '2010-12-14 03:59:32', NULL, '1'),
('200806', '20', '08', '06', 'RINCONADA LLICUAR', '2010-12-14 03:59:32', NULL, '1'),
('210000', '21', '00', '00', 'PUNO', '2010-12-14 03:59:32', NULL, '1'),
('210100', '21', '01', '00', 'PUNO', '2010-12-14 03:59:32', NULL, '1'),
('210101', '21', '01', '01', 'PUNO', '2010-12-14 03:59:32', NULL, '1'),
('210102', '21', '01', '02', 'ACORA', '2010-12-14 03:59:32', NULL, '1'),
('210103', '21', '01', '03', 'AMANTANI', '2010-12-14 03:59:32', NULL, '1'),
('210104', '21', '01', '04', 'ATUNCOLLA', '2010-12-14 03:59:32', NULL, '1'),
('210105', '21', '01', '05', 'CAPACHICA', '2010-12-14 03:59:32', NULL, '1'),
('210106', '21', '01', '06', 'CHUCUITO', '2010-12-14 03:59:32', NULL, '1'),
('210107', '21', '01', '07', 'COATA', '2010-12-14 03:59:32', NULL, '1'),
('210108', '21', '01', '08', 'HUATA', '2010-12-14 03:59:32', NULL, '1'),
('210109', '21', '01', '09', 'MAÑAZO', '2010-12-14 03:59:32', NULL, '1'),
('210110', '21', '01', '10', 'PAUCARCOLLA', '2010-12-14 03:59:32', NULL, '1'),
('210111', '21', '01', '11', 'PICHACANI', '2010-12-14 03:59:32', NULL, '1'),
('210112', '21', '01', '12', 'PLATERIA', '2010-12-14 03:59:32', NULL, '1'),
('210113', '21', '01', '13', 'SAN ANTONIO', '2010-12-14 03:59:32', NULL, '1'),
('210114', '21', '01', '14', 'TIQUILLACA', '2010-12-14 03:59:32', NULL, '1'),
('210115', '21', '01', '15', 'VILQUE', '2010-12-14 03:59:32', NULL, '1'),
('210200', '21', '02', '00', 'AZANGARO', '2010-12-14 03:59:32', NULL, '1'),
('210201', '21', '02', '01', 'AZANGARO', '2010-12-14 03:59:32', NULL, '1'),
('210202', '21', '02', '02', 'ACHAYA', '2010-12-14 03:59:32', NULL, '1'),
('210203', '21', '02', '03', 'ARAPA', '2010-12-14 03:59:32', NULL, '1'),
('210204', '21', '02', '04', 'ASILLO', '2010-12-14 03:59:32', NULL, '1'),
('210205', '21', '02', '05', 'CAMINACA', '2010-12-14 03:59:32', NULL, '1'),
('210206', '21', '02', '06', 'CHUPA', '2010-12-14 03:59:32', NULL, '1'),
('210207', '21', '02', '07', 'JOSE DOMINGO CHOQUEHUANCA', '2010-12-14 03:59:32', NULL, '1'),
('210208', '21', '02', '08', 'MUÑANI', '2010-12-14 03:59:32', NULL, '1'),
('210209', '21', '02', '09', 'POTONI', '2010-12-14 03:59:32', NULL, '1'),
('210210', '21', '02', '10', 'SAMAN', '2010-12-14 03:59:32', NULL, '1'),
('210211', '21', '02', '11', 'SAN ANTON', '2010-12-14 03:59:32', NULL, '1'),
('210212', '21', '02', '12', 'SAN JOSE', '2010-12-14 03:59:32', NULL, '1'),
('210213', '21', '02', '13', 'SAN JUAN DE SALINAS', '2010-12-14 03:59:32', NULL, '1'),
('210214', '21', '02', '14', 'SANTIAGO DE PUPUJA', '2010-12-14 03:59:32', NULL, '1'),
('210215', '21', '02', '15', 'TIRAPATA', '2010-12-14 03:59:32', NULL, '1'),
('210300', '21', '03', '00', 'CARABAYA', '2010-12-14 03:59:32', NULL, '1'),
('210301', '21', '03', '01', 'MACUSANI', '2010-12-14 03:59:32', NULL, '1'),
('210302', '21', '03', '02', 'AJOYANI', '2010-12-14 03:59:32', NULL, '1'),
('210303', '21', '03', '03', 'AYAPATA', '2010-12-14 03:59:32', NULL, '1'),
('210304', '21', '03', '04', 'COASA', '2010-12-14 03:59:32', NULL, '1'),
('210305', '21', '03', '05', 'CORANI', '2010-12-14 03:59:32', NULL, '1'),
('210306', '21', '03', '06', 'CRUCERO', '2010-12-14 03:59:32', NULL, '1'),
('210307', '21', '03', '07', 'ITUATA', '2010-12-14 03:59:32', NULL, '1'),
('210308', '21', '03', '08', 'OLLACHEA', '2010-12-14 03:59:32', NULL, '1'),
('210309', '21', '03', '09', 'SAN GABAN', '2010-12-14 03:59:32', NULL, '1'),
('210310', '21', '03', '10', 'USICAYOS', '2010-12-14 03:59:32', NULL, '1'),
('210400', '21', '04', '00', 'CHUCUITO', '2010-12-14 03:59:32', NULL, '1'),
('210401', '21', '04', '01', 'JULI', '2010-12-14 03:59:32', NULL, '1'),
('210402', '21', '04', '02', 'DESAGUADERO', '2010-12-14 03:59:32', NULL, '1'),
('210403', '21', '04', '03', 'HUACULLANI', '2010-12-14 03:59:32', NULL, '1'),
('210404', '21', '04', '04', 'KELLUYO', '2010-12-14 03:59:32', NULL, '1'),
('210405', '21', '04', '05', 'PISACOMA', '2010-12-14 03:59:32', NULL, '1'),
('210406', '21', '04', '06', 'POMATA', '2010-12-14 03:59:32', NULL, '1'),
('210407', '21', '04', '07', 'ZEPITA', '2010-12-14 03:59:32', NULL, '1'),
('210500', '21', '05', '00', 'EL COLLAO', '2010-12-14 03:59:32', NULL, '1'),
('210501', '21', '05', '01', 'ILAVE', '2010-12-14 03:59:32', NULL, '1'),
('210502', '21', '05', '02', 'CAPAZO', '2010-12-14 03:59:32', NULL, '1'),
('210503', '21', '05', '03', 'PILCUYO', '2010-12-14 03:59:32', NULL, '1'),
('210504', '21', '05', '04', 'SANTA ROSA', '2010-12-14 03:59:32', NULL, '1'),
('210505', '21', '05', '05', 'CONDURIRI', '2010-12-14 03:59:32', NULL, '1'),
('210600', '21', '06', '00', 'HUANCANE', '2010-12-14 03:59:32', NULL, '1'),
('210601', '21', '06', '01', 'HUANCANE', '2010-12-14 03:59:32', NULL, '1'),
('210602', '21', '06', '02', 'COJATA', '2010-12-14 03:59:32', NULL, '1'),
('210603', '21', '06', '03', 'HUATASANI', '2010-12-14 03:59:32', NULL, '1'),
('210604', '21', '06', '04', 'INCHUPALLA', '2010-12-14 03:59:32', NULL, '1'),
('210605', '21', '06', '05', 'PUSI', '2010-12-14 03:59:32', NULL, '1'),
('210606', '21', '06', '06', 'ROSASPATA', '2010-12-14 03:59:32', NULL, '1'),
('210607', '21', '06', '07', 'TARACO', '2010-12-14 03:59:32', NULL, '1'),
('210608', '21', '06', '08', 'VILQUE CHICO', '2010-12-14 03:59:32', NULL, '1'),
('210700', '21', '07', '00', 'LAMPA', '2010-12-14 03:59:32', NULL, '1'),
('210701', '21', '07', '01', 'LAMPA', '2010-12-14 03:59:32', NULL, '1'),
('210702', '21', '07', '02', 'CABANILLA', '2010-12-14 03:59:32', NULL, '1'),
('210703', '21', '07', '03', 'CALAPUJA', '2010-12-14 03:59:32', NULL, '1'),
('210704', '21', '07', '04', 'NICASIO', '2010-12-14 03:59:32', NULL, '1'),
('210705', '21', '07', '05', 'OCUVIRI', '2010-12-14 03:59:32', NULL, '1'),
('210706', '21', '07', '06', 'PALCA', '2010-12-14 03:59:32', NULL, '1'),
('210707', '21', '07', '07', 'PARATIA', '2010-12-14 03:59:32', NULL, '1'),
('210708', '21', '07', '08', 'PUCARA', '2010-12-14 03:59:32', NULL, '1'),
('210709', '21', '07', '09', 'SANTA LUCIA', '2010-12-14 03:59:32', NULL, '1'),
('210710', '21', '07', '10', 'VILAVILA', '2010-12-14 03:59:32', NULL, '1'),
('210800', '21', '08', '00', 'MELGAR', '2010-12-14 03:59:32', NULL, '1'),
('210801', '21', '08', '01', 'AYAVIRI', '2010-12-14 03:59:32', NULL, '1'),
('210802', '21', '08', '02', 'ANTAUTA', '2010-12-14 03:59:32', NULL, '1'),
('210803', '21', '08', '03', 'CUPI', '2010-12-14 03:59:32', NULL, '1'),
('210804', '21', '08', '04', 'LLALLI', '2010-12-14 03:59:32', NULL, '1'),
('210805', '21', '08', '05', 'MACARI', '2010-12-14 03:59:32', NULL, '1'),
('210806', '21', '08', '06', 'NUÑOA', '2010-12-14 03:59:32', NULL, '1'),
('210807', '21', '08', '07', 'ORURILLO', '2010-12-14 03:59:32', NULL, '1'),
('210808', '21', '08', '08', 'SANTA ROSA', '2010-12-14 03:59:32', NULL, '1'),
('210809', '21', '08', '09', 'UMACHIRI', '2010-12-14 03:59:32', NULL, '1'),
('210900', '21', '09', '00', 'MOHO', '2010-12-14 03:59:32', NULL, '1'),
('210901', '21', '09', '01', 'MOHO', '2010-12-14 03:59:32', NULL, '1'),
('210902', '21', '09', '02', 'CONIMA', '2010-12-14 03:59:32', NULL, '1'),
('210903', '21', '09', '03', 'HUAYRAPATA', '2010-12-14 03:59:32', NULL, '1'),
('210904', '21', '09', '04', 'TILALI', '2010-12-14 03:59:32', NULL, '1'),
('211000', '21', '10', '00', 'SAN ANTONIO DE PUTINA', '2010-12-14 03:59:32', NULL, '1'),
('211001', '21', '10', '01', 'PUTINA', '2010-12-14 03:59:32', NULL, '1'),
('211002', '21', '10', '02', 'ANANEA', '2010-12-14 03:59:32', NULL, '1'),
('211003', '21', '10', '03', 'PEDRO VILCA APAZA', '2010-12-14 03:59:32', NULL, '1'),
('211004', '21', '10', '04', 'QUILCAPUNCU', '2010-12-14 03:59:32', NULL, '1'),
('211005', '21', '10', '05', 'SINA', '2010-12-14 03:59:32', NULL, '1'),
('211100', '21', '11', '00', 'SAN ROMAN', '2010-12-14 03:59:32', NULL, '1'),
('211101', '21', '11', '01', 'JULIACA', '2010-12-14 03:59:32', NULL, '1'),
('211102', '21', '11', '02', 'CABANA', '2010-12-14 03:59:32', NULL, '1'),
('211103', '21', '11', '03', 'CABANILLAS', '2010-12-14 03:59:32', NULL, '1'),
('211104', '21', '11', '04', 'CARACOTO', '2010-12-14 03:59:32', NULL, '1'),
('211200', '21', '12', '00', 'SANDIA', '2010-12-14 03:59:32', NULL, '1'),
('211201', '21', '12', '01', 'SANDIA', '2010-12-14 03:59:32', NULL, '1'),
('211202', '21', '12', '02', 'CUYOCUYO', '2010-12-14 03:59:32', NULL, '1'),
('211203', '21', '12', '03', 'LIMBANI', '2010-12-14 03:59:32', NULL, '1'),
('211204', '21', '12', '04', 'PATAMBUCO', '2010-12-14 03:59:32', NULL, '1'),
('211205', '21', '12', '05', 'PHARA', '2010-12-14 03:59:32', NULL, '1'),
('211206', '21', '12', '06', 'QUIACA', '2010-12-14 03:59:32', NULL, '1'),
('211207', '21', '12', '07', 'SAN JUAN DEL ORO', '2010-12-14 03:59:32', NULL, '1'),
('211208', '21', '12', '08', 'YANAHUAYA', '2010-12-14 03:59:32', NULL, '1'),
('211209', '21', '12', '09', 'ALTO INAMBARI', '2010-12-14 03:59:32', NULL, '1'),
('211210', '21', '12', '10', 'SAN PEDRO DE PUTINA PUNCO', '2010-12-14 03:59:32', NULL, '1'),
('211300', '21', '13', '00', 'YUNGUYO', '2010-12-14 03:59:32', NULL, '1'),
('211301', '21', '13', '01', 'YUNGUYO', '2010-12-14 03:59:32', NULL, '1'),
('211302', '21', '13', '02', 'ANAPIA', '2010-12-14 03:59:32', NULL, '1'),
('211303', '21', '13', '03', 'COPANI', '2010-12-14 03:59:32', NULL, '1'),
('211304', '21', '13', '04', 'CUTURAPI', '2010-12-14 03:59:32', NULL, '1'),
('211305', '21', '13', '05', 'OLLARAYA', '2010-12-14 03:59:32', NULL, '1'),
('211306', '21', '13', '06', 'TINICACHI', '2010-12-14 03:59:32', NULL, '1'),
('211307', '21', '13', '07', 'UNICACHI', '2010-12-14 03:59:32', NULL, '1'),
('220000', '22', '00', '00', 'SAN MARTIN', '2010-12-14 03:59:32', NULL, '1'),
('220100', '22', '01', '00', 'MOYOBAMBA', '2010-12-14 03:59:32', NULL, '1'),
('220101', '22', '01', '01', 'MOYOBAMBA', '2010-12-14 03:59:32', NULL, '1'),
('220102', '22', '01', '02', 'CALZADA', '2010-12-14 03:59:32', NULL, '1'),
('220103', '22', '01', '03', 'HABANA', '2010-12-14 03:59:32', NULL, '1'),
('220104', '22', '01', '04', 'JEPELACIO', '2010-12-14 03:59:32', NULL, '1'),
('220105', '22', '01', '05', 'SORITOR', '2010-12-14 03:59:32', NULL, '1'),
('220106', '22', '01', '06', 'YANTALO', '2010-12-14 03:59:32', NULL, '1'),
('220200', '22', '02', '00', 'BELLAVISTA', '2010-12-14 03:59:32', NULL, '1'),
('220201', '22', '02', '01', 'BELLAVISTA', '2010-12-14 03:59:32', NULL, '1'),
('220202', '22', '02', '02', 'ALTO BIAVO', '2010-12-14 03:59:32', NULL, '1'),
('220203', '22', '02', '03', 'BAJO BIAVO', '2010-12-14 03:59:32', NULL, '1'),
('220204', '22', '02', '04', 'HUALLAGA', '2010-12-14 03:59:32', NULL, '1'),
('220205', '22', '02', '05', 'SAN PABLO', '2010-12-14 03:59:32', NULL, '1'),
('220206', '22', '02', '06', 'SAN RAFAEL', '2010-12-14 03:59:32', NULL, '1'),
('220300', '22', '03', '00', 'EL DORADO', '2010-12-14 03:59:32', NULL, '1'),
('220301', '22', '03', '01', 'SAN JOSE DE SISA', '2010-12-14 03:59:32', NULL, '1'),
('220302', '22', '03', '02', 'AGUA BLANCA', '2010-12-14 03:59:32', NULL, '1'),
('220303', '22', '03', '03', 'SAN MARTIN', '2010-12-14 03:59:32', NULL, '1'),
('220304', '22', '03', '04', 'SANTA ROSA', '2010-12-14 03:59:32', NULL, '1'),
('220305', '22', '03', '05', 'SHATOJA', '2010-12-14 03:59:32', NULL, '1'),
('220400', '22', '04', '00', 'HUALLAGA', '2010-12-14 03:59:32', NULL, '1'),
('220401', '22', '04', '01', 'SAPOSOA', '2010-12-14 03:59:32', NULL, '1'),
('220402', '22', '04', '02', 'ALTO SAPOSOA', '2010-12-14 03:59:32', NULL, '1'),
('220403', '22', '04', '03', 'EL ESLABON', '2010-12-14 03:59:32', NULL, '1'),
('220404', '22', '04', '04', 'PISCOYACU', '2010-12-14 03:59:32', NULL, '1'),
('220405', '22', '04', '05', 'SACANCHE', '2010-12-14 03:59:32', NULL, '1'),
('220406', '22', '04', '06', 'TINGO DE SAPOSOA', '2010-12-14 03:59:32', NULL, '1'),
('220500', '22', '05', '00', 'LAMAS', '2010-12-14 03:59:32', NULL, '1'),
('220501', '22', '05', '01', 'LAMAS', '2010-12-14 03:59:32', NULL, '1'),
('220502', '22', '05', '02', 'ALONSO DE ALVARADO', '2010-12-14 03:59:32', NULL, '1'),
('220503', '22', '05', '03', 'BARRANQUITA', '2010-12-14 03:59:32', NULL, '1'),
('220504', '22', '05', '04', 'CAYNARACHI', '2010-12-14 03:59:32', NULL, '1'),
('220505', '22', '05', '05', 'CUÑUMBUQUI', '2010-12-14 03:59:32', NULL, '1'),
('220506', '22', '05', '06', 'PINTO RECODO', '2010-12-14 03:59:32', NULL, '1'),
('220507', '22', '05', '07', 'RUMISAPA', '2010-12-14 03:59:32', NULL, '1'),
('220508', '22', '05', '08', 'SAN ROQUE DE CUMBAZA', '2010-12-14 03:59:32', NULL, '1'),
('220509', '22', '05', '09', 'SHANAO', '2010-12-14 03:59:32', NULL, '1'),
('220510', '22', '05', '10', 'TABALOSOS', '2010-12-14 03:59:32', NULL, '1'),
('220511', '22', '05', '11', 'ZAPATERO', '2010-12-14 03:59:32', NULL, '1'),
('220600', '22', '06', '00', 'MARISCAL CACERES', '2010-12-14 03:59:32', NULL, '1'),
('220601', '22', '06', '01', 'JUANJUI', '2010-12-14 03:59:32', NULL, '1'),
('220602', '22', '06', '02', 'CAMPANILLA', '2010-12-14 03:59:32', NULL, '1'),
('220603', '22', '06', '03', 'HUICUNGO', '2010-12-14 03:59:32', NULL, '1'),
('220604', '22', '06', '04', 'PACHIZA', '2010-12-14 03:59:32', NULL, '1'),
('220605', '22', '06', '05', 'PAJARILLO', '2010-12-14 03:59:32', NULL, '1'),
('220700', '22', '07', '00', 'PICOTA', '2010-12-14 03:59:32', NULL, '1'),
('220701', '22', '07', '01', 'PICOTA', '2010-12-14 03:59:32', NULL, '1'),
('220702', '22', '07', '02', 'BUENOS AIRES', '2010-12-14 03:59:32', NULL, '1'),
('220703', '22', '07', '03', 'CASPISAPA', '2010-12-14 03:59:32', NULL, '1'),
('220704', '22', '07', '04', 'PILLUANA', '2010-12-14 03:59:32', NULL, '1'),
('220705', '22', '07', '05', 'PUCACACA', '2010-12-14 03:59:32', NULL, '1'),
('220706', '22', '07', '06', 'SAN CRISTOBAL', '2010-12-14 03:59:32', NULL, '1'),
('220707', '22', '07', '07', 'SAN HILARION', '2010-12-14 03:59:32', NULL, '1'),
('220708', '22', '07', '08', 'SHAMBOYACU', '2010-12-14 03:59:32', NULL, '1'),
('220709', '22', '07', '09', 'TINGO DE PONASA', '2010-12-14 03:59:32', NULL, '1'),
('220710', '22', '07', '10', 'TRES UNIDOS', '2010-12-14 03:59:32', NULL, '1'),
('220800', '22', '08', '00', 'RIOJA', '2010-12-14 03:59:32', NULL, '1'),
('220801', '22', '08', '01', 'RIOJA', '2010-12-14 03:59:32', NULL, '1'),
('220802', '22', '08', '02', 'AWAJUN', '2010-12-14 03:59:32', NULL, '1'),
('220803', '22', '08', '03', 'ELIAS SOPLIN VARGAS', '2010-12-14 03:59:32', NULL, '1'),
('220804', '22', '08', '04', 'NUEVA CAJAMARCA', '2010-12-14 03:59:32', NULL, '1'),
('220805', '22', '08', '05', 'PARDO MIGUEL', '2010-12-14 03:59:32', NULL, '1'),
('220806', '22', '08', '06', 'POSIC', '2010-12-14 03:59:32', NULL, '1'),
('220807', '22', '08', '07', 'SAN FERNANDO', '2010-12-14 03:59:32', NULL, '1'),
('220808', '22', '08', '08', 'YORONGOS', '2010-12-14 03:59:32', NULL, '1'),
('220809', '22', '08', '09', 'YURACYACU', '2010-12-14 03:59:32', NULL, '1'),
('220900', '22', '09', '00', 'SAN MARTIN', '2010-12-14 03:59:32', NULL, '1'),
('220901', '22', '09', '01', 'TARAPOTO', '2010-12-14 03:59:32', NULL, '1'),
('220902', '22', '09', '02', 'ALBERTO LEVEAU', '2010-12-14 03:59:32', NULL, '1'),
('220903', '22', '09', '03', 'CACATACHI', '2010-12-14 03:59:32', NULL, '1'),
('220904', '22', '09', '04', 'CHAZUTA', '2010-12-14 03:59:32', NULL, '1'),
('220905', '22', '09', '05', 'CHIPURANA', '2010-12-14 03:59:32', NULL, '1'),
('220906', '22', '09', '06', 'EL PORVENIR', '2010-12-14 03:59:32', NULL, '1'),
('220907', '22', '09', '07', 'HUIMBAYOC', '2010-12-14 03:59:32', NULL, '1'),
('220908', '22', '09', '08', 'JUAN GUERRA', '2010-12-14 03:59:32', NULL, '1'),
('220909', '22', '09', '09', 'LA BANDA DE SHILCAYO', '2010-12-14 03:59:32', NULL, '1'),
('220910', '22', '09', '10', 'MORALES', '2010-12-14 03:59:32', NULL, '1'),
('220911', '22', '09', '11', 'PAPAPLAYA', '2010-12-14 03:59:32', NULL, '1'),
('220912', '22', '09', '12', 'SAN ANTONIO', '2010-12-14 03:59:32', NULL, '1'),
('220913', '22', '09', '13', 'SAUCE', '2010-12-14 03:59:32', NULL, '1'),
('220914', '22', '09', '14', 'SHAPAJA', '2010-12-14 03:59:32', NULL, '1'),
('221000', '22', '10', '00', 'TOCACHE', '2010-12-14 03:59:32', NULL, '1'),
('221001', '22', '10', '01', 'TOCACHE', '2010-12-14 03:59:32', NULL, '1'),
('221002', '22', '10', '02', 'NUEVO PROGRESO', '2010-12-14 03:59:32', NULL, '1'),
('221003', '22', '10', '03', 'POLVORA', '2010-12-14 03:59:32', NULL, '1'),
('221004', '22', '10', '04', 'SHUNTE', '2010-12-14 03:59:32', NULL, '1'),
('221005', '22', '10', '05', 'UCHIZA', '2010-12-14 03:59:32', NULL, '1'),
('230000', '23', '00', '00', 'TACNA', '2010-12-14 03:59:32', NULL, '1'),
('230100', '23', '01', '00', 'TACNA', '2010-12-14 03:59:32', NULL, '1');
INSERT INTO `ubigeo` (`UBIGP_Codigo`, `UBIGC_CodDpto`, `UBIGC_CodProv`, `UBIGC_CodDist`, `UBIGC_Descripcion`, `UBIGC_FechaRegistro`, `UBIGC_FechaModificacion`, `UBIGC_FlagEstado`) VALUES
('230101', '23', '01', '01', 'TACNA', '2010-12-14 03:59:32', NULL, '1'),
('230102', '23', '01', '02', 'ALTO DE LA ALIANZA', '2010-12-14 03:59:32', NULL, '1'),
('230103', '23', '01', '03', 'CALANA', '2010-12-14 03:59:32', NULL, '1'),
('230104', '23', '01', '04', 'CIUDAD NUEVA', '2010-12-14 03:59:32', NULL, '1'),
('230105', '23', '01', '05', 'INCLAN', '2010-12-14 03:59:32', NULL, '1'),
('230106', '23', '01', '06', 'PACHIA', '2010-12-14 03:59:32', NULL, '1'),
('230107', '23', '01', '07', 'PALCA', '2010-12-14 03:59:32', NULL, '1'),
('230108', '23', '01', '08', 'POCOLLAY', '2010-12-14 03:59:32', NULL, '1'),
('230109', '23', '01', '09', 'SAMA', '2010-12-14 03:59:32', NULL, '1'),
('230110', '23', '01', '10', 'CORONEL GREGORIO ALBARRACIN LANCHIPA', '2010-12-14 03:59:32', NULL, '1'),
('230200', '23', '02', '00', 'CANDARAVE', '2010-12-14 03:59:32', NULL, '1'),
('230201', '23', '02', '01', 'CANDARAVE', '2010-12-14 03:59:32', NULL, '1'),
('230202', '23', '02', '02', 'CAIRANI', '2010-12-14 03:59:32', NULL, '1'),
('230203', '23', '02', '03', 'CAMILACA', '2010-12-14 03:59:32', NULL, '1'),
('230204', '23', '02', '04', 'CURIBAYA', '2010-12-14 03:59:32', NULL, '1'),
('230205', '23', '02', '05', 'HUANUARA', '2010-12-14 03:59:32', NULL, '1'),
('230206', '23', '02', '06', 'QUILAHUANI', '2010-12-14 03:59:32', NULL, '1'),
('230300', '23', '03', '00', 'JORGE BASADRE', '2010-12-14 03:59:32', NULL, '1'),
('230301', '23', '03', '01', 'LOCUMBA', '2010-12-14 03:59:32', NULL, '1'),
('230302', '23', '03', '02', 'ILABAYA', '2010-12-14 03:59:32', NULL, '1'),
('230303', '23', '03', '03', 'ITE', '2010-12-14 03:59:32', NULL, '1'),
('230400', '23', '04', '00', 'TARATA', '2010-12-14 03:59:32', NULL, '1'),
('230401', '23', '04', '01', 'TARATA', '2010-12-14 03:59:32', NULL, '1'),
('230402', '23', '04', '02', 'HEROES ALBARRACIN', '2010-12-14 03:59:32', NULL, '1'),
('230403', '23', '04', '03', 'ESTIQUE', '2010-12-14 03:59:32', NULL, '1'),
('230404', '23', '04', '04', 'ESTIQUE-PAMPA', '2010-12-14 03:59:32', NULL, '1'),
('230405', '23', '04', '05', 'SITAJARA', '2010-12-14 03:59:32', NULL, '1'),
('230406', '23', '04', '06', 'SUSAPAYA', '2010-12-14 03:59:32', NULL, '1'),
('230407', '23', '04', '07', 'TARUCACHI', '2010-12-14 03:59:32', NULL, '1'),
('230408', '23', '04', '08', 'TICACO', '2010-12-14 03:59:32', NULL, '1'),
('240000', '24', '00', '00', 'TUMBES', '2010-12-14 03:59:32', NULL, '1'),
('240100', '24', '01', '00', 'TUMBES', '2010-12-14 03:59:32', NULL, '1'),
('240101', '24', '01', '01', 'TUMBES', '2010-12-14 03:59:32', NULL, '1'),
('240102', '24', '01', '02', 'CORRALES', '2010-12-14 03:59:32', NULL, '1'),
('240103', '24', '01', '03', 'LA CRUZ', '2010-12-14 03:59:32', NULL, '1'),
('240104', '24', '01', '04', 'PAMPAS DE HOSPITAL', '2010-12-14 03:59:32', NULL, '1'),
('240105', '24', '01', '05', 'SAN JACINTO', '2010-12-14 03:59:32', NULL, '1'),
('240106', '24', '01', '06', 'SAN JUAN DE LA VIRGEN', '2010-12-14 03:59:32', NULL, '1'),
('240200', '24', '02', '00', 'CONTRALMIRANTE VILLAR', '2010-12-14 03:59:32', NULL, '1'),
('240201', '24', '02', '01', 'ZORRITOS', '2010-12-14 03:59:32', NULL, '1'),
('240202', '24', '02', '02', 'CASITAS', '2010-12-14 03:59:32', NULL, '1'),
('240203', '24', '02', '03', 'CANOAS DE PUNTA SAL', '2010-12-14 03:59:32', NULL, '1'),
('240300', '24', '03', '00', 'ZARUMILLA', '2010-12-14 03:59:32', NULL, '1'),
('240301', '24', '03', '01', 'ZARUMILLA', '2010-12-14 03:59:32', NULL, '1'),
('240302', '24', '03', '02', 'AGUAS VERDES', '2010-12-14 03:59:32', NULL, '1'),
('240303', '24', '03', '03', 'MATAPALO', '2010-12-14 03:59:32', NULL, '1'),
('240304', '24', '03', '04', 'PAPAYAL', '2010-12-14 03:59:32', NULL, '1'),
('250000', '25', '00', '00', 'UCAYALI', '2010-12-14 03:59:32', NULL, '1'),
('250100', '25', '01', '00', 'CORONEL PORTILLO', '2010-12-14 03:59:32', NULL, '1'),
('250101', '25', '01', '01', 'CALLERIA', '2010-12-14 03:59:32', NULL, '1'),
('250102', '25', '01', '02', 'CAMPOVERDE', '2010-12-14 03:59:32', NULL, '1'),
('250103', '25', '01', '03', 'IPARIA', '2010-12-14 03:59:32', NULL, '1'),
('250104', '25', '01', '04', 'MASISEA', '2010-12-14 03:59:32', NULL, '1'),
('250105', '25', '01', '05', 'YARINACOCHA', '2010-12-14 03:59:32', NULL, '1'),
('250106', '25', '01', '06', 'NUEVA REQUENA', '2010-12-14 03:59:32', NULL, '1'),
('250107', '25', '01', '07', 'MANANTAY', '2010-12-14 03:59:32', NULL, '1'),
('250200', '25', '02', '00', 'ATALAYA', '2010-12-14 03:59:32', NULL, '1'),
('250201', '25', '02', '01', 'RAYMONDI', '2010-12-14 03:59:32', NULL, '1'),
('250202', '25', '02', '02', 'SEPAHUA', '2010-12-14 03:59:32', NULL, '1'),
('250203', '25', '02', '03', 'TAHUANIA', '2010-12-14 03:59:32', NULL, '1'),
('250204', '25', '02', '04', 'YURUA', '2010-12-14 03:59:32', NULL, '1'),
('250300', '25', '03', '00', 'PADRE ABAD', '2010-12-14 03:59:32', NULL, '1'),
('250301', '25', '03', '01', 'PADRE ABAD', '2010-12-14 03:59:32', NULL, '1'),
('250302', '25', '03', '02', 'IRAZOLA', '2010-12-14 03:59:32', NULL, '1'),
('250303', '25', '03', '03', 'CURIMANA', '2010-12-14 03:59:32', NULL, '1'),
('250400', '25', '04', '00', 'PURUS', '2010-12-14 03:59:32', NULL, '1'),
('250401', '25', '04', '01', 'PURUS', '2010-12-14 03:59:32', NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ROL_Codigo` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `ROL_Codigo`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 1, 'Martin Trujillo Bustamante', 'martin.trujillo@uni.pe', NULL, '$2y$10$l4MY6hm3RouXwKlVTQwN5.pyyxmfZSqIFccF05zovY26lpxYTLoM6', NULL, '2020-09-15 03:21:18', '2020-09-15 21:19:17'),
(7, 1, 'Alexander Figueroa', 'edward.figueroa@uni.pe', NULL, '$2y$10$p1jtAToBllIz8S7jb0bfW.LHhdH8dubiVF3b0QApy3GZtCm04l9z2', NULL, '2020-09-15 21:21:18', '2020-09-15 21:21:18'),
(8, 1, 'Diego', 'reshinger@gmail.com', NULL, '$2y$10$xWEKuWVJmpDd.UA3SENcz.Qi6dMFabIui9lfVbLDkAx4QSjzvZMF6', NULL, '2020-11-04 20:38:57', '2020-11-04 20:38:57'),
(9, 2, 'Pier', 'Black@gmail.com', NULL, 'qweasdzxc', NULL, '2020-11-04 22:01:20', '2020-11-04 22:01:20'),
(10, 1, 'Laravel 8', 'panaca@gmail.com', NULL, 'eyJpdiI6Ik5GVTB4TEx1SGlsdWZ6MklxU25CQnc9PSIsInZhbHVlIjoiZ2J0Ykl3d3hBUENuZmRTc0w0UWNqUT09IiwibWFjIjoiNGM1MmRiM2RhZTQzNjU3Zjk5OGEzYTQxMDYyZDU5MTQ3N2QxZDE2NDlkMzMzNGYzMDhlNTUzMDM4YjZjNDFmNSJ9', NULL, '2020-11-04 22:31:18', '2020-11-04 22:31:18'),
(11, 1, 'Roberto', 'rmeiggs.s@gmail.com', NULL, '$2y$10$1v6gfWpOE8fjH3cmlcZRKOS693LAIN2T72bSYruNcrWcuoMBEzj8e', NULL, '2021-03-22 02:45:13', '2021-03-30 23:48:34'),
(13, 2, 'Luis', 'luis@gmail.com', NULL, 'eyJpdiI6IjdYOXZpTlNabFppZXl1eWV6VUVvaEE9PSIsInZhbHVlIjoidy9peC9mUXRiSnhUMStDZVUxcFVjZz09IiwibWFjIjoiZGM0OGZiNTEyOTFkMzIwMjRkZjA5ZjczZTAxMzM0ZmRhNDc0Y2YwNjU2ZjE1ZTkyNWE0YjkzZTI1MjkyOTczZiJ9', NULL, '2021-03-23 02:46:27', '2021-03-23 02:46:27'),
(14, 1, 'Roberto Meiggs Sotelo', 'roberto@gmail.com', NULL, '$2y$10$KLhMncPxUTha6zp3WLllhua988cdzKEqBPmoPeUuBgjdJs20B.HEy', NULL, '2021-03-25 02:29:41', '2021-03-30 23:58:37'),
(15, 1, 'prueba', 'prueba@gmail.com', NULL, '$2y$10$DfsA9S/wED015lAwgpwjcO5Ty24SwSkmYbMxhMZpdD97Jr1fWDJPq', NULL, '2021-03-30 22:52:16', '2021-03-30 23:40:39'),
(16, 1, 'prueba2', 'juancargoso@gmail.com', NULL, '$2y$10$AwbGQo9Z0Ub9JfqkaRwizOE0rZfiw7w0Hb2t58d9rwq7mFHP0laTm', NULL, '2021-03-30 23:46:46', '2021-03-30 23:46:46'),
(19, 2, 'Jose Luis', 'jluis@gmail.com', NULL, '$2y$10$olx0pkt7VhcnxWFXxQvr0u/taksA.qBAinSdTtycvhyBmnca0iaaq', NULL, '2021-03-31 03:10:18', '2021-03-31 03:10:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `apertura_curso`
--
ALTER TABLE `apertura_curso`
  ADD PRIMARY KEY (`ID_Apertura`),
  ADD KEY `FK_apertura_curso_instructor` (`INSTP_Codigo`),
  ADD KEY `FK_apertura_curso_curso` (`id_curso`);

--
-- Indices de la tabla `asesoria`
--
ALTER TABLE `asesoria`
  ADD PRIMARY KEY (`id_asesoria`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`),
  ADD KEY `FK_contacto_solicitante` (`SOLIP_Codigo`);

--
-- Indices de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD PRIMARY KEY (`COTIP_Codigo`),
  ADD KEY `fk_cotizacion_tipocotizacion_idx` (`TIPOCOP_Codigo`),
  ADD KEY `FK_cotizacion_contacto` (`id_contacto`),
  ADD KEY `cotizacion_ibfk_1` (`USUA_Codigo`);

--
-- Indices de la tabla `cotizacion_capacitacion`
--
ALTER TABLE `cotizacion_capacitacion`
  ADD PRIMARY KEY (`COCAP_Codigo`),
  ADD KEY `fk_cotizacioncapac_curso_idx` (`id_curso`),
  ADD KEY `FK_cotizacion_capacitacion_cotizacion` (`COTIP_Codigo`);

--
-- Indices de la tabla `cotizacion_detalle`
--
ALTER TABLE `cotizacion_detalle`
  ADD PRIMARY KEY (`CODEP_Codigo`),
  ADD KEY `fk_cotizacion_cotizaciondetalle` (`COTIP_Codigo`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indices de la tabla `curso_instructor`
--
ALTER TABLE `curso_instructor`
  ADD PRIMARY KEY (`id_curso_instructor`),
  ADD KEY `FK_curso_instructor_curso` (`id_curso`),
  ADD KEY `FK_curso_instructor_instructor` (`INSTP_Codigo`);

--
-- Indices de la tabla `descuentos`
--
ALTER TABLE `descuentos`
  ADD PRIMARY KEY (`id_descuento`),
  ADD KEY `FK_descuentos_curso` (`id_curso`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `form_asesoria`
--
ALTER TABLE `form_asesoria`
  ADD PRIMARY KEY (`ID_Form_Asesoria`),
  ADD KEY `FK_form_asesoria_asesoria` (`id_asesoria`);

--
-- Indices de la tabla `form_servicio_academico`
--
ALTER TABLE `form_servicio_academico`
  ADD PRIMARY KEY (`ID_Solic_Servicio_Academico`),
  ADD KEY `FK_form_servicio_academico_servicio_academico` (`id_servicio_acad`);

--
-- Indices de la tabla `horario_apertura_curso`
--
ALTER TABLE `horario_apertura_curso`
  ADD PRIMARY KEY (`ID_Horario_apertura_curso`),
  ADD KEY `FK_horario_apertura_curso_apertura_curso` (`ID_Apertura`),
  ADD KEY `FK_horario_apertura_curso_curso` (`id_curso`),
  ADD KEY `FK_horario_apertura_curso_instructor` (`INSTP_Codigo`);

--
-- Indices de la tabla `horario_instructor`
--
ALTER TABLE `horario_instructor`
  ADD PRIMARY KEY (`id_horario_instructor`),
  ADD KEY `FK_horario_instructor_instructor` (`INSTP_Codigo`);

--
-- Indices de la tabla `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`INSTP_Codigo`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`MENU_Codigo`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD PRIMARY KEY (`PERM_Codigo`);

--
-- Indices de la tabla `prueba_equipo`
--
ALTER TABLE `prueba_equipo`
  ADD PRIMARY KEY (`id_prueba_a_realizar`),
  ADD KEY `FK_prueba_equipo_cotizacion_detalle` (`CODEP_Codigo`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`ROL_Codigo`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicio_academico`
--
ALTER TABLE `servicio_academico`
  ADD PRIMARY KEY (`id_servicio_acad`);

--
-- Indices de la tabla `solicitante`
--
ALTER TABLE `solicitante`
  ADD PRIMARY KEY (`SOLIP_Codigo`),
  ADD KEY `fk_ubigeo_solicitante_idx` (`UBIGP_Codigo`),
  ADD KEY `fk_tiposolicitante_solicitante_idx` (`TIPSOLIP_Codigo`);

--
-- Indices de la tabla `tipocotizacion`
--
ALTER TABLE `tipocotizacion`
  ADD PRIMARY KEY (`TIPOCOP_Codigo`);

--
-- Indices de la tabla `tiposolicitante`
--
ALTER TABLE `tiposolicitante`
  ADD PRIMARY KEY (`TIPSOLIP_Codigo`);

--
-- Indices de la tabla `ubigeo`
--
ALTER TABLE `ubigeo`
  ADD PRIMARY KEY (`UBIGP_Codigo`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `FK_users_rol` (`ROL_Codigo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `apertura_curso`
--
ALTER TABLE `apertura_curso`
  MODIFY `ID_Apertura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `asesoria`
--
ALTER TABLE `asesoria`
  MODIFY `id_asesoria` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  MODIFY `COTIP_Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=331;

--
-- AUTO_INCREMENT de la tabla `cotizacion_capacitacion`
--
ALTER TABLE `cotizacion_capacitacion`
  MODIFY `COCAP_Codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cotizacion_detalle`
--
ALTER TABLE `cotizacion_detalle`
  MODIFY `CODEP_Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=440;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `curso_instructor`
--
ALTER TABLE `curso_instructor`
  MODIFY `id_curso_instructor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `descuentos`
--
ALTER TABLE `descuentos`
  MODIFY `id_descuento` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `form_servicio_academico`
--
ALTER TABLE `form_servicio_academico`
  MODIFY `ID_Solic_Servicio_Academico` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `horario_apertura_curso`
--
ALTER TABLE `horario_apertura_curso`
  MODIFY `ID_Horario_apertura_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `horario_instructor`
--
ALTER TABLE `horario_instructor`
  MODIFY `id_horario_instructor` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `instructor`
--
ALTER TABLE `instructor`
  MODIFY `INSTP_Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `MENU_Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `permiso`
--
ALTER TABLE `permiso`
  MODIFY `PERM_Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de la tabla `prueba_equipo`
--
ALTER TABLE `prueba_equipo`
  MODIFY `id_prueba_a_realizar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `ROL_Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `servicio_academico`
--
ALTER TABLE `servicio_academico`
  MODIFY `id_servicio_acad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `solicitante`
--
ALTER TABLE `solicitante`
  MODIFY `SOLIP_Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=354;

--
-- AUTO_INCREMENT de la tabla `tipocotizacion`
--
ALTER TABLE `tipocotizacion`
  MODIFY `TIPOCOP_Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tiposolicitante`
--
ALTER TABLE `tiposolicitante`
  MODIFY `TIPSOLIP_Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `apertura_curso`
--
ALTER TABLE `apertura_curso`
  ADD CONSTRAINT `FK_apertura_curso_curso` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_apertura_curso_instructor` FOREIGN KEY (`INSTP_Codigo`) REFERENCES `instructor` (`INSTP_Codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `FK_contacto_solicitante` FOREIGN KEY (`SOLIP_Codigo`) REFERENCES `solicitante` (`SOLIP_Codigo`);

--
-- Filtros para la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD CONSTRAINT `cotizacion_ibfk_1` FOREIGN KEY (`USUA_Codigo`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `fk_contacto_cotizacion` FOREIGN KEY (`id_contacto`) REFERENCES `contacto` (`id_contacto`),
  ADD CONSTRAINT `fk_cotizacion_tipocotizacion` FOREIGN KEY (`TIPOCOP_Codigo`) REFERENCES `tipocotizacion` (`TIPOCOP_Codigo`);

--
-- Filtros para la tabla `cotizacion_capacitacion`
--
ALTER TABLE `cotizacion_capacitacion`
  ADD CONSTRAINT `FK_cotizacion_capacitacion_cotizacion` FOREIGN KEY (`COTIP_Codigo`) REFERENCES `cotizacion` (`COTIP_Codigo`),
  ADD CONSTRAINT `fk_cotizacioncapac_curso` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`);

--
-- Filtros para la tabla `cotizacion_detalle`
--
ALTER TABLE `cotizacion_detalle`
  ADD CONSTRAINT `fk_cotizacion_cotizaciondetalle` FOREIGN KEY (`COTIP_Codigo`) REFERENCES `cotizacion` (`COTIP_Codigo`);

--
-- Filtros para la tabla `curso_instructor`
--
ALTER TABLE `curso_instructor`
  ADD CONSTRAINT `FK_curso_instructor_curso` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_curso_instructor_instructor` FOREIGN KEY (`INSTP_Codigo`) REFERENCES `instructor` (`INSTP_Codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `descuentos`
--
ALTER TABLE `descuentos`
  ADD CONSTRAINT `FK_descuentos_curso` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `form_asesoria`
--
ALTER TABLE `form_asesoria`
  ADD CONSTRAINT `FK_form_asesoria_asesoria` FOREIGN KEY (`id_asesoria`) REFERENCES `asesoria` (`id_asesoria`);

--
-- Filtros para la tabla `form_servicio_academico`
--
ALTER TABLE `form_servicio_academico`
  ADD CONSTRAINT `FK_form_servicio_academico_servicio_academico` FOREIGN KEY (`id_servicio_acad`) REFERENCES `servicio_academico` (`id_servicio_acad`);

--
-- Filtros para la tabla `horario_apertura_curso`
--
ALTER TABLE `horario_apertura_curso`
  ADD CONSTRAINT `FK_horario_apertura_curso_apertura_curso` FOREIGN KEY (`ID_Apertura`) REFERENCES `apertura_curso` (`ID_Apertura`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_horario_apertura_curso_curso` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_horario_apertura_curso_instructor` FOREIGN KEY (`INSTP_Codigo`) REFERENCES `instructor` (`INSTP_Codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `horario_instructor`
--
ALTER TABLE `horario_instructor`
  ADD CONSTRAINT `FK_horario_instructor_instructor` FOREIGN KEY (`INSTP_Codigo`) REFERENCES `instructor` (`INSTP_Codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `prueba_equipo`
--
ALTER TABLE `prueba_equipo`
  ADD CONSTRAINT `FK_prueba_equipo_cotizacion_detalle` FOREIGN KEY (`CODEP_Codigo`) REFERENCES `cotizacion_detalle` (`CODEP_Codigo`);

--
-- Filtros para la tabla `solicitante`
--
ALTER TABLE `solicitante`
  ADD CONSTRAINT `fk_tiposolicitante_solicitante` FOREIGN KEY (`TIPSOLIP_Codigo`) REFERENCES `tiposolicitante` (`TIPSOLIP_Codigo`),
  ADD CONSTRAINT `fk_ubigeo_solicitante` FOREIGN KEY (`UBIGP_Codigo`) REFERENCES `ubigeo` (`UBIGP_Codigo`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_users_rol` FOREIGN KEY (`ROL_Codigo`) REFERENCES `rol` (`ROL_Codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
