-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.24-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando estructura para tabla coffe_garden.categoria
CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(25) DEFAULT NULL,
  `estado` char(1) DEFAULT NULL,
  `cantidad` int(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla coffe_garden.categoria: ~3 rows (aproximadamente)
INSERT INTO `categoria` (`id`, `categoria`, `estado`, `cantidad`) VALUES
	(1, 'Bebidas', 'A', 10),
	(2, 'Cafe', 'A', 20),
	(3, 'Comida', 'A', 30);

-- Volcando estructura para tabla coffe_garden.producto
CREATE TABLE IF NOT EXISTS `producto` (
  `codigo` int(50) NOT NULL AUTO_INCREMENT,
  `producto` varchar(55) NOT NULL,
  `categoria` char(1) NOT NULL,
  `precio` int(25) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `estado` char(1) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=12345646 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla coffe_garden.producto: ~27 rows (aproximadamente)
INSERT INTO `producto` (`codigo`, `producto`, `categoria`, `precio`, `cantidad`, `estado`, `descripcion`) VALUES
	(1, 'Nescafe', '1', 149000, 1000, 'A', ''),
	(2, 'cafe aguila roja granulad', '1', 12000, 2000, 'A', ''),
	(3, 'bolsa cafe sello rojo', '1', 51900, 1000, 'A', ''),
	(4, 'vidrio cafe aroma', '1', 10000, 1000, 'A', ''),
	(5, 'vidrio cafe legal descafe', '1', 15000, 2000, 'A', ''),
	(7, 'vidrio cafe  dolca nescafe', '1', 12000, 1000, 'A', ''),
	(8, 'vidrio cafe legal', '1', 10000, 1000, 'A', ''),
	(9, 'Cafe soluble Nescafe Tasters c', '1', 175000, 1000, 'A', ''),
	(10, 'vidrio cafe colcate descafeina', '1', 175000, 1000, 'A', ''),
	(11, 'plastico crama para cafe nestl', '1', 29900, 1000, 'A', ''),
	(12, 'carton crema para cafe vainill', '1', 30000, 1000, 'A', ''),
	(13, 'crema para cafe aguila roja no', '1', 8000, 1000, 'A', ''),
	(14, 'crema  para cafe aroma', '1', 6000, 1000, 'A', ''),
	(15, 'plastico crema para cafe colcafe', '1', 15000, 1000, 'A', '');

-- Volcando estructura para tabla coffe_garden.proveedores
CREATE TABLE IF NOT EXISTS `proveedores` (
  `Nit_Proveedor` varchar(15) NOT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Nit_Proveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla coffe_garden.proveedores: ~4 rows (aproximadamente)
INSERT INTO `proveedores` (`Nit_Proveedor`, `Nombre`) VALUES
	('1', 'Dempos S.A'),
	('2', 'Redihos S.A.S'),
	('3', 'Procaps S.A'),
	('4', 'Droguería Extra');

-- Volcando estructura para tabla coffe_garden.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` varchar(15) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `estado_usuario` varchar(1) NOT NULL,
  `rolid` int(250) NOT NULL,
  `imagen_usuario` varchar(250) NOT NULL,
  PRIMARY KEY (`id_usuario`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla coffe_garden.usuarios: 5 rows
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `password`, `email`, `estado_usuario`, `rolid`, `imagen_usuario`) VALUES
	('1107509521', 'José Daniel ', 'Grijalba', '1107509521', 'jose.jdgo97@gmail.com', 'A', 1, ''),
	('1107509520', 'Juan David', 'Grijalba', '1107509520', 'juandgo1997@gmail.com', 'A', 2, ''),
	('123', '123', '123', '123', '', 'A', 2, ''),
	('diana', 'Diana', 'Aristizabal', '123', '', 'A', 2, ''),
	('16', 'a', '123', '$2y$10$Bjt2/1DXCYOQ9cWVvbJRnOuZ5bbFCjSUiZBFqDzgLJTMiJNMY8yAm', '', 'A', 2, '');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
