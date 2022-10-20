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

-- Volcando estructura para tabla coffee_garden.carrito
CREATE TABLE IF NOT EXISTS `carrito` (
  `cantidad` int(11) DEFAULT NULL,
  `codigo_producto` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fecha` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla coffee_garden.carrito: ~15 rows (aproximadamente)
INSERT INTO `carrito` (`cantidad`, `codigo_producto`, `email`, `fecha`) VALUES
	(2, 11, 'dianaaristizabal@gmail.com', '2022-10-19 16:39:43'),
	(1, 9, 'dianaaristizabal@gmail.com', '2022-10-19 17:32:16'),
	(1, 1, 'dianaaristizabal@gmail.com', '2022-10-19 20:45:27'),
	(1, 2, 'dianaaristizabal@gmail.com', '2022-10-19 20:45:34'),
	(1, 4, 'dianaaristizabal@gmail.com', '2022-10-19 20:46:29'),
	(1, 5, 'dianaaristizabal@gmail.com', '2022-10-19 20:46:35'),
	(1, 7, 'dianaaristizabal@gmail.com', '2022-10-19 20:46:45'),
	(1, 8, 'dianaaristizabal@gmail.com', '2022-10-19 20:46:51'),
	(1, 10, 'dianaaristizabal@gmail.com', '2022-10-19 20:47:02'),
	(1, 12, 'dianaaristizabal@gmail.com', '2022-10-19 20:47:17'),
	(1, 13, 'dianaaristizabal@gmail.com', '2022-10-19 20:47:22'),
	(1, 14, 'dianaaristizabal@gmail.com', '2022-10-19 20:47:29'),
	(5, 13, 'jose.jdgo97@gmail.com', '2022-10-20 17:18:34'),
	(1, 12, 'jose.jdgo97@gmail.com', '2022-10-20 17:19:32'),
	(12, 15, 'pedro@gmail.com', '2022-10-20 17:29:25'),
	(2, 15, 'dianaaristizabal@gmail.com', '2022-10-20 17:32:54');

-- Volcando estructura para tabla coffee_garden.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla coffee_garden.categorias: ~4 rows (aproximadamente)
INSERT INTO `categorias` (`id`, `nombre`) VALUES
	(1, 'Suave'),
	(2, 'Intermedio'),
	(3, 'Medio Oscuro'),
	(4, 'Oscuro');

-- Volcando estructura para tabla coffee_garden.comentario
CREATE TABLE IF NOT EXISTS `comentario` (
  `id` int(110) NOT NULL AUTO_INCREMENT,
  `email` varchar(67) DEFAULT NULL,
  `codigo_producto` int(11) DEFAULT NULL,
  `comentario` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=177 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla coffee_garden.comentario: ~26 rows (aproximadamente)
INSERT INTO `comentario` (`id`, `email`, `codigo_producto`, `comentario`) VALUES
	(1, 'dianaaristizabal@gmail.com', 7, 'come on'),
	(2, 'dianaaristizabal@gmail.com', 8, 'de que'),
	(4, 'jose.jdgo97@gmail.com', 10, 'el mejor que Dios puso'),
	(5, 'jose.jdgo97@gmail.com', 11, 'bien'),
	(6, 'naruto@mail.com', 6, 'eso si'),
	(7, 'naruto@mail.com', 7, 'tambien'),
	(8, 'naruto@mail.com', 8, 'yo si creo'),
	(154, 'jose.jdgo97@gmail.com', NULL, 'xsa'),
	(155, 'jose.jdgo97@gmail.com', NULL, 'dasdas'),
	(156, 'jose.jdgo97@gmail.com', 0, 'hey'),
	(158, 'jose.jdgo97@gmail.com', 0, 'hey'),
	(159, 'jose.jdgo97@gmail.com', 0, 'hey'),
	(160, 'jose.jdgo97@gmail.com', 0, 'hey'),
	(161, 'jose.jdgo97@gmail.com', 0, 'hey'),
	(162, 'jose.jdgo97@gmail.com', 0, 'hey'),
	(163, 'jose.jdgo97@gmail.com', 0, 'hey'),
	(164, 'jose.jdgo97@gmail.com', 0, 'hey'),
	(165, 'jose.jdgo97@gmail.com', 0, 'hey'),
	(167, 'jose.jdgo97@gmail.com', 15, 'hey'),
	(168, 'jose.jdgo97@gmail.com', 5, 'you'),
	(169, 'jose.jdgo97@gmail.com', 12, 'come on'),
	(170, 'dianaaristizabal@gmail.com', 9, 'hey man'),
	(171, 'jose.jdgo97@gmail.com', 15, 'asdasd'),
	(172, 'jose.jdgo97@gmail.com', 13, 'asdasd'),
	(174, 'jose.jdgo97@gmail.com', 13, 'hey'),
	(175, 'pedro@gmail.com', 15, 'asdasd'),
	(176, 'dianaaristizabal@gmail.com', 15, 'asdd');

-- Volcando estructura para tabla coffee_garden.pago
CREATE TABLE IF NOT EXISTS `pago` (
  `id` int(11) DEFAULT NULL,
  `pago` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla coffee_garden.pago: ~2 rows (aproximadamente)
INSERT INTO `pago` (`id`, `pago`) VALUES
	(1, 'Tarjeta de Credito'),
	(2, 'Tarjeta de Debito');

-- Volcando estructura para tabla coffee_garden.perfiles
CREATE TABLE IF NOT EXISTS `perfiles` (
  `id` int(11) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla coffee_garden.perfiles: ~3 rows (aproximadamente)
INSERT INTO `perfiles` (`id`, `nombre`) VALUES
	(1, 'administrador'),
	(2, 'cliente'),
	(3, 'vendedor');

-- Volcando estructura para tabla coffee_garden.producto
CREATE TABLE IF NOT EXISTS `producto` (
  `codigo` int(50) NOT NULL AUTO_INCREMENT,
  `producto` varchar(55) NOT NULL,
  `categoria` char(1) NOT NULL,
  `precio` int(25) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `estado` char(1) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `portada` varchar(150) DEFAULT NULL,
  `ruta` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=12345651 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla coffee_garden.producto: ~15 rows (aproximadamente)
INSERT INTO `producto` (`codigo`, `producto`, `categoria`, `precio`, `cantidad`, `estado`, `descripcion`, `portada`, `ruta`) VALUES
	(1, 'Nescafe', '1', 1000, 2000, 'A', 'modifica', 'Nescafe.jpg', NULL),
	(2, 'cafe aguila roja granulada', '2', 10000, 2000, 'A', 'tin words, consectetur, from a Lorem Ips', 'cafe-granulado.jpg', NULL),
	(3, 'bolsa cafe sello rojo', '3', 1100, 1000, 'A', 'tin words, consectetur, from a Lorem Ips', 'bolsa_cafe_sello_rojo.jpg', NULL),
	(4, 'vidrio cafe aroma', '4', 12000, 1000, 'A', 'tin words, consectetur, from a Lorem Ips', 'vidrio_cafe_aroma.jpg', NULL),
	(5, 'vidrio cafe legal descafeinado', '1', 100, 2000, 'A', 'tin words, consectetur, from a Lorem Ips', 'café_soluble_legal__.jpg', NULL),
	(7, 'vidrio cafe  dolca nescafe', '2', 100, 1000, 'A', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a typ', 'Cafe_Nescafe_Dolca_Vidrio.jpg', NULL),
	(8, 'vidrio cafe legal', '3', 10000, 1000, 'A', 'long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, conte', 'vidrio_cafe_legal.jpg', NULL),
	(9, 'Cafe soluble Nescafe Tasters', '4', 175000, 1000, 'A', 'tin words, consectetur, from a Lorem Ips', 'Cafe_soluble_Nescafe_Tasters.jpg', NULL),
	(10, 'vidrio cafe colcate descafeinado', '1', 175000, 1000, 'A', 'efault model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, someti', 'cafe_colcate_descafeina.jpg', NULL),
	(11, 'plastico crema para cafe nestle', '2', 125000, 1000, 'A', 'elievable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this', 'crema_cafe_ nestle.jpg', NULL),
	(12, 'carton crema para cafe vainill', '3', 30000, 1000, 'A', 'It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ips', 'carton_crema_vainill.jpg', NULL),
	(13, 'crema para cafe aguila roja', '4', 8000, 1000, 'A', 'It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ips', 'crema_para_cafe_aguila_roja.jpg', NULL),
	(14, 'crema  para cafe aroma', '1', 6000, 1000, 'A', 'It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ips', 'Crema_cafe_AROMA.jpg', NULL),
	(15, 'plastico crema para cafe colcafe', '2', 15000, 1000, 'A', 'It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ips', 'plastico_crema_colcafe.jpg', NULL),
	(12345650, 'cafe del valle', '2', 150000, 0, '', 'saludable y energetico', 'img_01ce2ea82d983d471a03b78a5516a77e.jpg', 'cafe-del-valle');

-- Volcando estructura para tabla coffee_garden.rating
CREATE TABLE IF NOT EXISTS `rating` (
  `email` varchar(50) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `calificacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla coffee_garden.rating: ~3 rows (aproximadamente)
INSERT INTO `rating` (`email`, `id_producto`, `calificacion`) VALUES
	('jose.jdgo97@gmail.com', 5, 4),
	('jose.jdgo97@gmail.com', 12, 3),
	('dianaaristizabal@gmail.com', 15, 3),
	('jose.jdgo97@gmail.com', 15, 3),
	('jose.jdgo97@gmail.com', 13, 4);

-- Volcando estructura para tabla coffee_garden.reaccion
CREATE TABLE IF NOT EXISTS `reaccion` (
  `email` varchar(50) DEFAULT NULL,
  `codigo_producto` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla coffee_garden.reaccion: ~4 rows (aproximadamente)
INSERT INTO `reaccion` (`email`, `codigo_producto`, `rating`) VALUES
	('jose.jdgo97@gmail.com', 5, NULL),
	('jose.jdgo97@gmail.com', 12, NULL),
	('jose.jdgo97@gmail.com', 15, NULL),
	('jose.jdgo97@gmail.com', 11, NULL),
	('jose.jdgo97@gmail.com', 13, NULL);

-- Volcando estructura para tabla coffee_garden.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(120) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `estado_usuario` varchar(1) NOT NULL,
  `rolid` int(250) NOT NULL,
  `imagen_usuario` varchar(250) NOT NULL,
  `id_pregunta` int(11) DEFAULT NULL,
  `respuesta` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla coffee_garden.usuarios: 9 rows
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `password`, `email`, `estado_usuario`, `rolid`, `imagen_usuario`, `id_pregunta`, `respuesta`) VALUES
	(1, 'José Daniel', 'Grijalba', '$2y$10$bTCrFmUyt7d9NuAU5SQiRuVtRIcPOiqhluQJ.a2uZ.QANKndigrTy', 'jose.jdgo97@gmail.com', 'A', 1, 'jose.jpg', 1, 'lucas'),
	(2, 'Juan David', 'Grijalba', '$2y$10$bTCrFmUyt7d9NuAU5SQiRuVtRIcPOiqhluQJ.a2uZ.QANKndigrTy', 'juandgo1997@gmail.com', 'A', 3, 'juan.jpg', 1, 'simon'),
	(4, 'Diana', 'Aristizabal', '$2y$10$bTCrFmUyt7d9NuAU5SQiRuVtRIcPOiqhluQJ.a2uZ.QANKndigrTy', 'dianaaristizabal@gmail.com', 'A', 3, 'diana.png', 1, 'cielo'),
	(9, 'Arley', 'Castano', '$2y$10$/AWJxM/m6Z6cm1YaUAvtJ.IRimLpiDUm.eMjrriPXtdwvHxJUG1BG', 'arley@gmail.com', 'A', 3, 'Arley.jpg', 1, 'sabe'),
	(71, 'Neji', 'hyuga', '$2y$10$eAat5ki8NiOPW2gTVfCYAuPztMmPPPgZYlc5vEtlsA0rIYYb1Gt.y', 'neji@gmail.com', 'A', 2, 'naruto_neji_hyuga-71.jpg', 1, 'anime'),
	(72, 'Eren', 'Yeager', '$2y$10$eAat5ki8NiOPW2gTVfCYAuPztMmPPPgZYlc5vEtlsA0rIYYb1Gt.y', 'eren@gmail.com', 'A', 3, 'eren_yeager-72.jpg', NULL, NULL),
	(58, 'Sasuke', 'uchija', '$2y$10$bTCrFmUyt7d9NuAU5SQiRuVtRIcPOiqhluQJ.a2uZ.QANKndigrTy', 'sasuke@gmail.com', 'A', 2, 'Sasuke-58.jpg', 1, 'lucas'),
	(14, 'Naruto', 'uzumaki', '$2y$10$bTCrFmUyt7d9NuAU5SQiRuVtRIcPOiqhluQJ.a2uZ.QANKndigrTy', 'naruto@mail.com', 'A', 2, 'naruto-14.jpg', 1, 'lucas'),
	(73, 'pedrito', 'perez', '$2y$10$ehaJj.2pN0ZUFs9cMi7MoeIzNth1sJgz9JRe/stKrl9n8sKZwJ2Ga', 'pedro@gmail.com', 'A', 2, '6-73.jpg', 1, 'pepe');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
