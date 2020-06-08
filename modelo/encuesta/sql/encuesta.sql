-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.13-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para encuesta
CREATE DATABASE IF NOT EXISTS `encuesta` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `encuesta`;


-- Volcando estructura para tabla encuesta.encuesta
CREATE TABLE IF NOT EXISTS `encuesta` (
  `ID_Encuesta` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) DEFAULT NULL,
  `Descripcion_Cargo` text,
  `Pregunta1` text,
  `Pregunta2` text,
  `Pregunta3` text,
  `Pregunta4` text,
  `Pregunta5` text,
  `Pregunta6` text,
  `Pregunta7` text,
  `Pregunta8` text,
  `Pregunta9` text,
  `Pregunta10` text,
  `Pregunta11` text,
  `Pregunta12` text,
  `Pregunta13` text,
  `Pregunta14` text,
  `Pregunta15` text,
  `Pregunta16` text,
  `Pregunta17` text,
  `Pregunta18` text,
  `Pregunta19` text,
  `Pregunta20` text,
  `Pregunta21` text,
  `Pregunta22` text,
  `Pregunta23` text,
  `Pregunta24` text,
  `Pregunta25` text,
  `Pregunta26` text,
  `Pregunta27` text,
  `Pregunta28` text,
  `Pregunta29` text,
  `Fecha_Encuesta` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID_Encuesta`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla encuesta.encuesta: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `encuesta` DISABLE KEYS */;
INSERT INTO `encuesta` (`ID_Encuesta`, `Nombre`, `Descripcion_Cargo`, `Pregunta1`, `Pregunta2`, `Pregunta3`, `Pregunta4`, `Pregunta5`, `Pregunta6`, `Pregunta7`, `Pregunta8`, `Pregunta9`, `Pregunta10`, `Pregunta11`, `Pregunta12`, `Pregunta13`, `Pregunta14`, `Pregunta15`, `Pregunta16`, `Pregunta17`, `Pregunta18`, `Pregunta19`, `Pregunta20`, `Pregunta21`, `Pregunta22`, `Pregunta23`, `Pregunta24`, `Pregunta25`, `Pregunta26`, `Pregunta27`, `Pregunta28`, `Pregunta29`, `Fecha_Encuesta`) VALUES
	(1, NULL, NULL, 'edward figueroa', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-04-30 00:09:55'),
	(2, NULL, NULL, 'edward figueroa maldonado', 'maldonado', 'maldonado', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-04-30 00:09:55'),
	(3, NULL, NULL, 'alexander figueroa maldonado', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-04-30 00:09:55'),
	(4, NULL, NULL, 'alexander figueroa maldonado  123456', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-04-30 00:09:55'),
	(5, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-04-30 00:09:55'),
	(6, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-04-30 00:09:55'),
	(7, 'ddddwww', 'wwww', 'ccccc', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-04-30 00:09:55'),
	(8, 'edward figueroa', 'edward figueroa', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '2020-04-30 00:09:55'),
	(9, 'martin trujillo', 'desarrollador web', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '2020-04-30 00:09:55'),
	(10, 'martin trujillo', 'desarrollador web', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '2020-04-30 00:09:55'),
	(11, 'martin trujillo', 'desarrollador web', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '2020-04-30 00:09:55'),
	(12, 'edward figueroa maldonado', 'edward', 'edward f', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-04-30 00:11:04'),
	(13, 'jhon chacon alcantara', 'subestaciones mantenimiento predictivo de susbestaciones epxreinda en abengoa', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '2020-04-30 00:12:55');
/*!40000 ALTER TABLE `encuesta` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
