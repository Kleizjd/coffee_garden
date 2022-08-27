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

-- Volcando estructura para tabla coffe_garden.tipos_productos
CREATE TABLE IF NOT EXISTS `tipos_productos` (
  `Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla coffe_garden.tipos_productos: ~2 rows (aproximadamente)
INSERT INTO `tipos_productos` (`Codigo`, `Descripcion`) VALUES
	(1, 'Medicamento'),
	(2, 'Cosmético');

-- Volcando estructura para tabla coffe_garden.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` varchar(15) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `estado_usuario` varchar(1) NOT NULL,
  `rolid` int(250) NOT NULL,
  PRIMARY KEY (`id_usuario`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla coffe_garden.usuarios: 3 rows
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `password`, `email`, `estado_usuario`, `rolid`) VALUES
	('1107509521', 'José Daniel ', 'Grijalba', '1107509521', 'jose.jdgo97@gmail.com', 'A', 1),
	('1107509520', 'Juan David', 'Grijalba', '1107509520', 'juandgo1997@gmail.com', 'A', 2),
	('123', '123', '123', '123', '', 'A', 2);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
