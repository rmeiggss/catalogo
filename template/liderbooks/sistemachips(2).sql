-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 31-05-2009 a las 18:48:16
-- Versión del servidor: 5.1.33
-- Versión de PHP: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sistemachips`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE IF NOT EXISTS `administradores` (
  `idAdministrador` int(3) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) DEFAULT NULL,
  `contrasena` varchar(50) DEFAULT NULL,
  `idRol` varchar(3) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idAdministrador`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Volcar la base de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`idAdministrador`, `login`, `contrasena`, `idRol`, `nombre`, `apellidos`) VALUES
(2, 'm_trujillo', 'daceab978752609e848955f105c67743', '5', 'Martin', 'Trujillo Bustamante'),
(15, 'f_marcelo', 'c33367701511b4f6020ec61ded352059', '16', 'Franklin', 'Marcelo'),
(41, 'o_modesto', 'c68cb6f817275467aa5f549ee5d17dff', '20', 'Olfa', 'Modesto'),
(40, 'chenko', '1141772366618e2af43aeed3f1973228', '5', 'Miguel Angel', 'Cotrina'),
(42, 'r_robles', 'e10adc3949ba59abbe56e057f20f883e', '20', 'Roxana', 'Robles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bases`
--

CREATE TABLE IF NOT EXISTS `bases` (
  `id_base` int(11) NOT NULL AUTO_INCREMENT,
  `base` varchar(8) NOT NULL,
  `estado` varchar(2) NOT NULL,
  PRIMARY KEY (`id_base`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Volcar la base de datos para la tabla `bases`
--

INSERT INTO `bases` (`id_base`, `base`, `estado`) VALUES
(1, 'Base01', '0'),
(2, 'Base02', '0'),
(3, 'Base03', '0'),
(4, 'Base04', '0'),
(5, 'Base05', '0'),
(6, 'Base06', '0'),
(7, 'Base07', '0'),
(8, 'Base08', '0'),
(9, 'Base09', '0'),
(10, 'Base10', '0'),
(11, 'Base11', '0'),
(12, 'Base12', '0'),
(13, 'Base13', '1'),
(14, 'Base14', '1'),
(15, 'Base15', '1'),
(16, 'Base16', '1'),
(17, 'Base17', '1'),
(18, 'Base18', '1'),
(19, 'Base19', '1'),
(20, 'Base20', '1'),
(21, 'Base21', '1'),
(22, 'Base22', '1'),
(23, 'Base23', '1'),
(24, 'Base24', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chip`
--

CREATE TABLE IF NOT EXISTS `chip` (
  `idChip` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idPlanes` int(10) unsigned NOT NULL,
  `Numero` varchar(12) NOT NULL,
  `Minutos` int(10) unsigned DEFAULT NULL,
  `Atributo1` varchar(25) DEFAULT NULL,
  `Atributo2` varchar(25) DEFAULT NULL,
  `MinutoActual` varchar(10) DEFAULT NULL,
  `minicodigo` varchar(6) NOT NULL,
  `estado` varchar(10) DEFAULT NULL,
  `baja` varchar(2) NOT NULL,
  `observacion` varchar(200) NOT NULL,
  PRIMARY KEY (`idChip`),
  KEY `Chip_FKIndex1` (`idPlanes`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Volcar la base de datos para la tabla `chip`
--

INSERT INTO `chip` (`idChip`, `idPlanes`, `Numero`, `Minutos`, `Atributo1`, `Atributo2`, `MinutoActual`, `minicodigo`, `estado`, `baja`, `observacion`) VALUES
(6, 5, '989119303', 2500, 'Normal', '', '0', 'baez1', '1', '0', ''),
(7, 5, '989119304', 1500, 'Normal', '', '230', 'baez2', '1', '0', ''),
(8, 5, '989119308', 2500, 'Normal', '', '340', 'baez3', '1', '0', ''),
(9, 5, '989119302', 1500, 'Normal', '', '450', 'baez5', '1', '0', ''),
(10, 5, '989119306', 3000, 'Normal', '', '560', 'baez6', '1', '0', ''),
(11, 2, '999824589', 345, 'Normal', '', '345', 'k3456', '1', '0', ''),
(12, 7, '989306676', 1000, 'Normal', '', '1000', 'ei76', '1', '0', ''),
(13, 2, '999689456', 230, 'Normal', '', '230', 'hjhjh', '1', '0', ''),
(19, 9, '997583098', 273, 'Normal', '', '-568', 'ggfhf', '1', '0', ''),
(18, 9, '989306700', 172, 'Normal', '', '-373', 'ccccd', '1', '0', ''),
(17, 7, '989306701', 302, 'Normal', '', '-373', 'yyyyy', '1', '0', ''),
(20, 9, '993505831', 517, 'Normal', '', '-1101', 'hhhh7', '1', '0', ''),
(21, 9, '997583137', 125, 'Normal', '', '-314', 'g76hh', '1', '0', ''),
(22, 9, '997583128', 47, 'Normal', '', '-230', 'iou87', '1', '0', ''),
(23, 9, '993505747', 174, 'Normal', '', '-335', 'hhhyy', '1', '0', ''),
(24, 9, '997583148', 156, 'Normal', '', '-162', 'gjgyy', '1', '0', ''),
(25, 9, '993518086', 172, 'Normal', '', '-264', 'f5555', '1', '0', ''),
(26, 9, '997583022', 85, 'Normal', '', '-736', 'fdg55', '1', '0', ''),
(27, 10, '98833566712', 4596, 'Normal', '', '300', 'fgg55', '1', '0', ''),
(28, 10, '988335671', 4697, 'Normal', '', '', '65hhh', '0', '0', ''),
(29, 10, '995934539', 1000, 'Normal', '147914', '', 'Y1', '0', '1', ''),
(30, 10, '995934533', 1000, 'Normal', '', '', 'Y2', '0', '1', ''),
(31, 10, '995934464', 500, 'Normal', '147912', '', 'Y3', '0', '1', ''),
(32, 10, '999934392', 500, 'Normal', '', '', 'Y4', '0', '1', ''),
(33, 10, '995934382', 500, 'Normal', '', '', 'Y5', '0', '1', ''),
(34, 10, '995934213', 500, 'Normal', '', '', 'Y6', '0', '1', ''),
(35, 10, '995932673', 500, 'Normal', '', '', 'Y7', '0', '1', ''),
(36, 10, '995932031', 500, 'Normal', '', '', 'Y8', '0', '1', ''),
(37, 10, '996172495', 550, 'Normal', '', '', 'X1', '0', '1', ''),
(38, 10, '996172474', 800, 'Normal', '', '', 'X2', '0', '1', ''),
(39, 10, '988335667', 550, 'Normal', '', '', 'x3', '0', '1', ''),
(40, 10, '98833567', 550, 'Normal', '', '100', 'X4', '1', '0', ''),
(41, 9, '989119300', 2000, 'Normal', '', '2000', 'JB930', '1', '1', ''),
(42, 9, '989119298', 2000, 'Normal', '', '2000', 'JB298', '1', '1', ''),
(43, 5, '989306676', 150, 'Normal', '', '150', '6670', '1', '1', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datoscliente`
--

CREATE TABLE IF NOT EXISTS `datoscliente` (
  `idDatosCliente` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Login` varchar(50) DEFAULT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `Direccion` varchar(100) DEFAULT NULL,
  `Telefono` varchar(12) DEFAULT NULL,
  `Base` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`idDatosCliente`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `datoscliente`
--

INSERT INTO `datoscliente` (`idDatosCliente`, `Login`, `Nombre`, `Apellido`, `Direccion`, `Telefono`, `Base`) VALUES
(1, 'h_romero', 'Hernan', 'Romero', 'Mz R lote 50 Villasol - Los Olivos', '5747158', '1'),
(2, 'p_pereyra', 'Patricia', 'Pereyra', 'Av Bocanegra 752 San Martín', '3360032', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generadortickets`
--

CREATE TABLE IF NOT EXISTS `generadortickets` (
  `idGeneradorTickets` int(3) NOT NULL AUTO_INCREMENT,
  `Chip_idChip` varchar(3) NOT NULL,
  `Monto` varchar(30) NOT NULL,
  `Fecha` varchar(20) NOT NULL,
  `Estado` varchar(1) NOT NULL,
  `Baja` varchar(1) NOT NULL,
  PRIMARY KEY (`idGeneradorTickets`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=108 ;

--
-- Volcar la base de datos para la tabla `generadortickets`
--

INSERT INTO `generadortickets` (`idGeneradorTickets`, `Chip_idChip`, `Monto`, `Fecha`, `Estado`, `Baja`) VALUES
(104, '39', '150', '13/05/09 18:58', '0', '0'),
(105, '40', '200', '28/04/09 19:21', '1', '1'),
(106, '40', '245', '05/05/09 20:16', '1', '0'),
(107, '42', '485', '19/05/09 11:22', '0', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `idMenu` varchar(5) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `url` varchar(100) DEFAULT NULL,
  `atributos` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idMenu`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `menu`
--

INSERT INTO `menu` (`idMenu`, `nombre`, `url`, `atributos`) VALUES
('1.00', 'Archivos', 'javascript:menu()', 'null'),
('2.00', 'Administrar', 'javascript:menu()', 'null'),
('3.01', 'Administradores', 'iframeadministrador.php', '{''tw'':''interframe'', ''tt'':''Administradores'', ''sb'':''Administradores''}'),
('1.01', 'Inicio', 'iframeindex.php', '{''tw'':''interframe'', ''tt'':''Operadores'', ''sb'':''Operadores''}'),
('1.02', 'Imprimir', 'javascript:window.print()', '{''tw'':''interframe'', ''tt'':''Imprimir'', ''sb'':''Imprimir''}'),
('1.03', 'Salida', 'javascript:window.parent.salir();', '{''tw'':''interframe'', ''tt'':''Salida'', ''sb'':''Salida''}'),
('2.01', 'Operadores', 'iframeoperador.php', '{''tw'':''interframe'', ''tt'':''Operadores'', ''sb'':''Operadores''}'),
('2.02', 'Proveedor', 'iframeprovedor.php', '{''tw'':''interframe'', ''tt'':''Provedores'', ''sb'':''Provedores''}'),
('2.03', 'Planes', 'iframeplanes.php', '{''tw'':''interframe'', ''tt'':''Planes'', ''sb'':''Planes''}'),
('2.04', 'Chips', 'iframechips.php', '{''tw'':''interframe'', ''tt'':''Chips'', ''sb'':''Chips''}'),
('2.05', 'Bases', 'iframebases.php', '{''tw'':''interframe'', ''tt'':''Bases'', ''sb'':''Bases''}'),
('2.06', 'Clientes', 'iframecliente.php', '{''tw'':''interframe'', ''tt'':''Cliente'', ''sb'':''Cliente''}'),
('2.07', 'Ajuste Chips', 'iframeajustechips.php', '{''tw'':''interframe'', ''tt'':''AjusteChips'', ''sb'':''justeChips''}'),
('6.02', 'Acerca de', 'iframeacercade.php', '{''tw'':''interframe'', ''tt'':''Operadores'', ''sb'':''Operadores''}'),
('5.01', 'Tickets', 'iframetickets.php', '{''tw'':''interframe'', ''tt'':''Tickets'', ''sb'':''Tickets''}'),
('4.03', 'Reporte totalizado', 'Entorno.php', '{''tw'':''interframe'', ''tt'':''Operadores'', ''sb'':''Operadores''}'),
('4.02', 'Reporte por base', 'iframekardexbase.php', '{''tw'':''interframe'', ''tt'':''Operadores'', ''sb'':''Operadores''}'),
('4.01', 'Reporte por fecha', 'iframekardexfecha.php', '{''tw'':''interframe'', ''tt'':''Operadores'', ''sb'':''Operadores''}'),
('6.00', 'Ayuda', 'javascript:menu()', 'null'),
('5.00', 'Pendientes', 'javascript:menu()', 'null'),
('4.00', 'Kardex y Reportes', 'javascript:menu()', 'null'),
('3.00', 'Configuracion', 'javascript:menu()', NULL),
('3.02', 'Password', 'iframepassword.php', '{''tw'':''interframe'', ''tt'':''Password'', ''sb'':''Password''}'),
('6.03', 'Contactenos', 'iframeacercade.php', '{''tw'':''interframe'', ''tt'':''Operadores'', ''sb'':''Operadores''}'),
('6.01', 'Ayuda', 'iframeacercade.php', '{''tw'':''interframe'', ''tt'':''Operadores'', ''sb'':''Operadores''}'),
('4.05', 'Variaciones', 'iframekardexvariaciones.php', '{''tw'':''interframe'', ''tt'':''AjusteChips'', ''sb'':''justeChips''}'),
('4.04', 'Estado Chip', 'iframeestadochip.php', '{''tw'':''interframe'', ''tt'':''Estado Chip'', ''sb'':''Estado chip''}'),
('3.03', 'Password System', 'iframeacercade.php', '{''tw'':''interframe'', ''tt'':''Operadores'', ''sb'':''Operadores''}'),
('3.04', 'Roles', 'iframeroles.php', '{''tw'':''interframe'', ''tt'':''Roles'', ''sb'':''Roles''}'),
('3.05', 'Permisos', 'iframepermisos.php', '{''tw'':''interframe'', ''tt'':''Permisos'', ''sb'':''Permisos''}'),
('2.08', 'Alquiler chips', 'iframealquiler.php', '{''tw'':''interframe'', ''tt'':''Alquiler'', ''sb'':''Alquiler''}'),
('4.06', 'Inventario Chips', 'iframeinventario.php', '{''tw'':''interframe'', ''tt'':''InventarioChips'', ''sb'':''InventarioChips''}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operador`
--

CREATE TABLE IF NOT EXISTS `operador` (
  `idOperador` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) DEFAULT NULL,
  `Logo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idOperador`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `operador`
--

INSERT INTO `operador` (`idOperador`, `Nombre`, `Logo`) VALUES
(1, 'Claro', 'imagenes/celular.gif'),
(2, 'Movistar', 'imagenes/skype.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes`
--

CREATE TABLE IF NOT EXISTS `planes` (
  `idPlanes` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idOperador` int(10) unsigned NOT NULL,
  `idProvedor` int(10) unsigned NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `TipoCobro` varchar(50) DEFAULT NULL,
  `Factor` varchar(30) DEFAULT NULL,
  `FechaRedistribucion` varchar(20) DEFAULT NULL,
  `TipoPlan` varchar(10) NOT NULL,
  `Baja` varchar(2) NOT NULL,
  PRIMARY KEY (`idPlanes`),
  KEY `Planes_FKIndex1` (`idProvedor`),
  KEY `Planes_FKIndex2` (`idOperador`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcar la base de datos para la tabla `planes`
--

INSERT INTO `planes` (`idPlanes`, `idOperador`, `idProvedor`, `Nombre`, `TipoCobro`, `Factor`, `FechaRedistribucion`, `TipoPlan`, `Baja`) VALUES
(2, 1, 3, 'Bolson 3', 'Minutos', '', '05/06/2009', 'Postpago', '0'),
(4, 2, 2, 'Bolson2', 'Soles', '3', '12/06/2009', 'Postpago', '0'),
(5, 1, 5, 'Bolsa C1', 'Minutos', '', '14/06/2009', 'Postpago', '1'),
(10, 2, 8, 'Bolsa M1', 'Minutos', '', '06/06/2009', 'Postpago', '1'),
(9, 1, 7, 'Bolsa C2', 'Minutos', '', '24/05/2009', 'Postpago', '1'),
(7, 1, 6, 'bolsa 1', 'Minutos', '', '13/06/2009', 'Postpago', '0'),
(8, 1, 7, 'Bolsa2', 'Minutos', '', '27/05/2009', 'Postpago', '0'),
(12, 2, 8, 'Bolsa M2', 'Minutos', '', '08/05/2009', 'Prepago', '1'),
(13, 2, 5, 'Bolsa4', 'Minutos', '', '05/05/2009', 'Postpago', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provedor`
--

CREATE TABLE IF NOT EXISTS `provedor` (
  `idProvedor` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nombres` varchar(50) DEFAULT NULL,
  `Apellidos` varchar(50) DEFAULT NULL,
  `Comentario` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`idProvedor`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcar la base de datos para la tabla `provedor`
--

INSERT INTO `provedor` (`idProvedor`, `Nombres`, `Apellidos`, `Comentario`) VALUES
(9, 'Jenifer', 'Tinoco', ''),
(10, 'Empresarial', '1', ''),
(5, 'Jorge', 'Baez', ''),
(8, 'Javier', 'Cespedes', ''),
(7, 'Jhony', 'Palomino', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recargas`
--

CREATE TABLE IF NOT EXISTS `recargas` (
  `idRecargas` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idChip` int(10) unsigned NOT NULL,
  `Monto` varchar(5) DEFAULT NULL,
  `Estado` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`idRecargas`),
  KEY `Recargas_FKIndex1` (`idChip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `recargas`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE IF NOT EXISTS `rol` (
  `idRol` int(3) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(25) NOT NULL,
  PRIMARY KEY (`idRol`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Volcar la base de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `Nombre`) VALUES
(5, 'System Administration'),
(18, 'Jefatura'),
(16, 'Gerencia General'),
(19, 'Tecnico'),
(20, 'Administradores de chips'),
(21, 'Vendedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolmenu`
--

CREATE TABLE IF NOT EXISTS `rolmenu` (
  `idRol` varchar(5) NOT NULL,
  `idMenu` varchar(5) NOT NULL,
  `tagVisible` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idRol`,`idMenu`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `rolmenu`
--

INSERT INTO `rolmenu` (`idRol`, `idMenu`, `tagVisible`) VALUES
('1', '3.03', '1'),
('1', '1.00', '1'),
('1', '1.01', '1'),
('1', '1.02', '1'),
('1', '2.00', '1'),
('1', '2.01', '0'),
('1', '2.02', '0'),
('1', '2.03', '0'),
('1', '2.04', '1'),
('1', '3.02', '1'),
('1', '6.03', '1'),
('1', '6.01', '1'),
('1', '6.00', '1'),
('1', '6.02', '1'),
('1', '5.01', '1'),
('1', '5.00', '1'),
('1', '4.03', '1'),
('1', '4.02', '1'),
('1', '4.01', '1'),
('1', '4.00', '1'),
('1', '3.01', '1'),
('1', '3.00', '1'),
('1', '3.04', '1'),
('1', '3.05', '1'),
('3', '1.00', '1'),
('5', '1.00', '1'),
('12', '1.00', '1'),
('10', '1.00', '0'),
('1', '1.03', '1'),
('1', '2.05', '1'),
('1', '2.06', '1'),
('1', '2.07', '1'),
('1', '4.04', '1'),
('1', '4.05', '1'),
('3', '1.01', '1'),
('3', '1.02', '1'),
('3', '1.03', '1'),
('3', '2.00', '1'),
('3', '2.01', '1'),
('3', '2.02', '1'),
('3', '2.03', '1'),
('3', '2.04', '1'),
('3', '2.05', '1'),
('3', '2.06', '1'),
('3', '2.07', '1'),
('3', '3.00', '1'),
('3', '3.01', '0'),
('3', '3.02', '0'),
('3', '3.03', '0'),
('3', '3.04', '0'),
('3', '3.05', '0'),
('3', '4.00', '0'),
('3', '4.01', '0'),
('3', '4.02', '0'),
('3', '4.03', '0'),
('3', '4.04', '0'),
('3', '4.05', '0'),
('3', '5.00', '0'),
('3', '5.01', '0'),
('3', '6.00', '0'),
('3', '6.01', '0'),
('3', '6.02', '0'),
('3', '6.03', '0'),
('5', '1.01', '1'),
('5', '1.02', '1'),
('5', '1.03', '1'),
('5', '2.00', '1'),
('5', '2.01', '1'),
('5', '2.02', '1'),
('5', '2.03', '1'),
('5', '2.04', '1'),
('5', '2.05', '1'),
('5', '2.06', '1'),
('5', '2.07', '1'),
('5', '3.00', '1'),
('5', '3.01', '1'),
('5', '3.02', '1'),
('5', '3.03', '1'),
('5', '3.04', '1'),
('5', '3.05', '1'),
('5', '4.00', '1'),
('5', '4.01', '1'),
('5', '4.02', '1'),
('5', '4.03', '1'),
('5', '4.04', '1'),
('5', '4.05', '1'),
('5', '5.00', '1'),
('5', '5.01', '1'),
('5', '6.00', '1'),
('5', '6.01', '1'),
('5', '6.02', '1'),
('5', '6.03', '1'),
('16', 'Total', '0'),
('16', '1.00', '1'),
('16', '1.01', '1'),
('16', '1.02', '1'),
('16', '1.03', '1'),
('16', '2.00', '1'),
('16', '2.01', '1'),
('16', '2.02', '1'),
('16', '2.03', '1'),
('16', '2.04', '1'),
('16', '2.05', '1'),
('16', '2.06', '1'),
('16', '2.07', '1'),
('16', '3.00', '1'),
('16', '3.01', '1'),
('16', '3.02', '1'),
('16', '3.03', '0'),
('16', '3.04', '1'),
('16', '3.05', '1'),
('16', '4.00', '1'),
('16', '4.01', '1'),
('16', '4.02', '1'),
('16', '4.03', '1'),
('16', '4.04', '1'),
('16', '4.05', '1'),
('16', '5.00', '1'),
('16', '5.01', '1'),
('16', '6.00', '1'),
('16', '6.01', '1'),
('16', '6.02', '1'),
('16', '6.03', '1'),
('18', 'Total', '0'),
('18', '1.00', '1'),
('18', '1.01', '1'),
('18', '1.02', '1'),
('18', '1.03', '1'),
('18', '2.00', '1'),
('18', '2.01', '1'),
('18', '2.02', '1'),
('18', '2.03', '1'),
('18', '2.04', '1'),
('18', '2.05', '1'),
('18', '2.06', '1'),
('18', '2.07', '1'),
('18', '3.00', '0'),
('18', '3.01', '0'),
('18', '3.02', '0'),
('18', '3.03', '0'),
('18', '3.04', '0'),
('18', '3.05', '0'),
('18', '4.00', '0'),
('18', '4.01', '0'),
('18', '4.02', '0'),
('18', '4.03', '0'),
('18', '4.04', '0'),
('18', '4.05', '0'),
('18', '5.00', '0'),
('18', '5.01', '0'),
('18', '6.00', '0'),
('18', '6.01', '0'),
('18', '6.02', '0'),
('18', '6.03', '0'),
('5', 'Total', '0'),
('16', '2.08', '1'),
('5', '2.08', '1'),
('20', 'Total', '0'),
('20', '1.00', '1'),
('20', '1.01', '1'),
('20', '1.02', '1'),
('20', '1.03', '1'),
('20', '2.00', '1'),
('20', '2.01', '1'),
('20', '2.02', '1'),
('20', '2.03', '1'),
('20', '2.04', '1'),
('20', '2.05', '1'),
('20', '2.06', '1'),
('20', '2.07', '1'),
('20', '2.08', '1'),
('20', '3.00', '1'),
('20', '3.01', '0'),
('20', '3.02', '1'),
('20', '3.03', '0'),
('20', '3.04', '0'),
('20', '3.05', '0'),
('20', '4.00', '1'),
('20', '4.01', '1'),
('20', '4.02', '1'),
('20', '4.03', '1'),
('20', '4.04', '1'),
('20', '4.05', '1'),
('20', '5.00', '1'),
('20', '5.01', '1'),
('20', '6.00', '1'),
('20', '6.01', '0'),
('20', '6.02', '0'),
('20', '6.03', '1'),
('5', '4.06', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticketpago`
--

CREATE TABLE IF NOT EXISTS `ticketpago` (
  `idTicketPago` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idUsuarioChip` int(10) unsigned NOT NULL,
  `FechaPago` varchar(70) DEFAULT NULL,
  `Estado` varchar(20) DEFAULT NULL,
  `Monto` varchar(50) DEFAULT NULL,
  `actividad` varchar(50) DEFAULT NULL,
  `NumOperacion` varchar(20) DEFAULT NULL,
  `Comentario` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`idTicketPago`),
  KEY `TicketPago_FKIndex1` (`idUsuarioChip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `ticketpago`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocliente`
--

CREATE TABLE IF NOT EXISTS `tipocliente` (
  `idTipoCliente` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idTipoCliente`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `tipocliente`
--

INSERT INTO `tipocliente` (`idTipoCliente`, `Nombre`) VALUES
(1, 'Sistema'),
(2, 'Clientes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariochip`
--

CREATE TABLE IF NOT EXISTS `usuariochip` (
  `idUsuarioChip` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idTipoCliente` int(10) unsigned NOT NULL,
  `idDatosCliente` int(10) unsigned NOT NULL,
  `Chip_idChip` int(10) unsigned NOT NULL,
  `FechaInicio` varchar(25) DEFAULT NULL,
  `FechaFin` varchar(25) DEFAULT NULL,
  `Estado` varchar(5) DEFAULT NULL,
  `Baja` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idUsuarioChip`),
  KEY `UsuarioChip_FKIndex1` (`Chip_idChip`),
  KEY `UsuarioChip_FKIndex2` (`idDatosCliente`),
  KEY `UsuarioChip_FKIndex3` (`idTipoCliente`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Volcar la base de datos para la tabla `usuariochip`
--

INSERT INTO `usuariochip` (`idUsuarioChip`, `idTipoCliente`, `idDatosCliente`, `Chip_idChip`, `FechaInicio`, `FechaFin`, `Estado`, `Baja`) VALUES
(8, 1, 13, 10, '16/05/09 12:21', '22/05/09 10:52', '0', '1'),
(7, 1, 5, 7, '16/05/09 12:21', '17/05/09 19:00', '0', '1'),
(5, 1, 7, 6, '16/05/09 12:21', '22/05/09 12:54', '0', '1'),
(6, 1, 11, 8, '16/05/09 12:21', '22/05/09 17:12', '0', '1'),
(9, 1, 12, 9, '16/05/09 12:21', '19/05/09 10:35', '0', '1'),
(10, 1, 5, 7, '17/05/09 19:01', '18/05/09 21:16', '0', '1'),
(11, 1, 2, 12, '19/05/09 17:46', '19/05/09 17:48', '0', '1'),
(12, 1, 2, 12, '19/05/09 17:46', '19/05/09 17:48', '0', '1'),
(13, 1, 2, 12, '18/05/09 05:04', '19/05/09 17:49', '0', '1'),
(14, 1, 2, 12, '18/05/09 05:04', '19/05/09 17:49', '0', '1'),
(15, 1, 2, 12, '18/05/09 03:03', '19/05/09 17:51', '0', '1'),
(16, 1, 1, 9, '20/05/09 05:05', '22/05/09 12:44', '0', '1'),
(17, 1, 1, 6, '20/05/09 10:11', '22/05/09 17:33', '0', '1'),
(18, 1, 1, 6, '21/05/09 13:11', '22/05/09 17:39', '0', '1'),
(19, 1, 1, 6, '20/05/09 14:10', '22/05/09 17:53', '0', '1'),
(20, 1, 1, 6, '20/05/09 06:20', '21/05/2009 23:59', '0', '1'),
(21, 1, 1, 6, '21/05/09 07:07', '21/05/2009 23:59', '0', '1'),
(22, 1, 2, 8, '20/05/09 08:09', '21/05/2009 23:59', '0', '1'),
(23, 1, 1, 6, '21/05/09 01:01', '21/05/2009 23:59', '0', '1'),
(24, 1, 2, 8, '21/05/09 01:01', '21/05/2009 23:59', '0', '1'),
(25, 1, 1, 6, '21/05/09 01:01', '21/05/2009 23:59', '0', '1'),
(26, 1, 2, 8, '21/05/09 01:01', '21/05/2009 23:59', '0', '1'),
(27, 1, 1, 6, '21/05/09 01:01', '21/05/2009 23:59', '0', '1'),
(28, 1, 2, 8, '21/05/09 01:01', '21/05/2009 23:59', '0', '1'),
(29, 1, 1, 6, '21/05/09 01:01', '14/05/2009 23:59', '0', '1'),
(30, 1, 2, 8, '21/05/09 01:01', '14/05/2009 23:59', '0', '1'),
(31, 1, 1, 6, '14/05/09 23:59', '23/05/09 16:51', '0', '1'),
(32, 1, 2, 8, '14/05/09 23:59', '23/05/09 16:49', '0', '1'),
(33, 1, 1, 19, '23/05/09 16:10', '29/05/09 12:38', '0', '1'),
(34, 1, 3, 18, '23/05/09 16:10', '29/05/09 13:01', '0', '1'),
(35, 1, 7, 20, '23/05/09 16:10', '29/05/09 13:07', '0', '1'),
(36, 1, 2, 21, '23/05/09 16:10', '29/05/09 13:00', '0', '1'),
(37, 1, 5, 22, '23/05/09 16:10', '29/05/09 13:05', '0', '1'),
(38, 1, 6, 26, '23/05/09 16:10', '29/05/09 13:07', '0', '1'),
(39, 1, 8, 23, '23/05/09 16:10', '29/05/09 13:08', '0', '1'),
(40, 1, 4, 24, '23/05/09 16:10', '29/05/09 13:03', '0', '1'),
(41, 1, 9, 25, '23/05/09 16:10', '29/05/09 13:20', '0', '1'),
(42, 1, 15, 27, '23/05/09 16:50', '29/05/09 13:10', '0', '1'),
(43, 1, 16, 28, '23/05/09 16:50', '29/05/09 13:11', '0', '1'),
(44, 1, 17, 29, '29/05/09 13:00', '', '1', '1'),
(45, 1, 18, 30, '29/05/09 13:00', '', '1', '1'),
(46, 1, 19, 31, '29/05/09 13:00', '', '1', '1'),
(47, 1, 20, 32, '29/05/09 13:00', '', '1', '1'),
(48, 1, 21, 33, '29/05/09 13:00', '', '1', '1'),
(49, 1, 22, 34, '29/05/09 13:00', '', '1', '1'),
(50, 1, 23, 35, '29/05/09 13:00', '', '1', '1'),
(51, 1, 24, 36, '29/05/09 13:00', '', '1', '1'),
(52, 1, 13, 37, '29/05/09 13:00', '', '1', '1'),
(53, 1, 14, 38, '29/05/09 13:00', '', '1', '1'),
(54, 1, 15, 39, '29/05/09 13:00', '', '1', '1'),
(55, 1, 16, 28, '29/05/09 13:00', '', '1', '1'),
(56, 1, 1, 40, '29/05/09 20:00', '29/05/09 20:06', '0', '1'),
(57, 1, 1, 40, '29/05/09 20:00', '29/05/09 20:06', '0', '1'),
(58, 1, 1, 40, '29/05/09 20:00', '29/05/09 20:07', '0', '1'),
(59, 1, 4, 6, '29/05/09 20:27', '29/05/09 20:28', '0', '1');
